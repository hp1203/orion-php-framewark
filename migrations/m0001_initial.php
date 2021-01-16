<?php 

use himanshupurohit\orion\Application;

/**
 * User: Himanshu Purohit
 * Date: 19/12/2020
 * Time: 12:01 AM
 */

class m0001_initial
{
    public function up()
    {
        $db = Application::$app->db;
        $SQL = "CREATE TABLE users (
            id INT AUTO_INCREMENT PRIMARY KEY,
            email VARCHAR(255) NOT NULL,
            first_name VARCHAR(255) NOT NULL,
            last_name VARCHAR(255) NOT NULL,
            status TINYINT NOT NULL DEFAULT FALSE,
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
            updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        ) ENGINE = INNODB";
        $db->pdo->exec($SQL);
    }

    public function down()
    {
        $db = Application::$app->db;
        $SQL = "DROP TABLE users;";
        $db->pdo->exec($SQL);
    }

}