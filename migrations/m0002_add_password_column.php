<?php 

use himanshupurohit\orion\Application;

/**
 * User: Himanshu Purohit
 * Date: 19/12/2020
 * Time: 12:01 AM
 */

class m0002_add_password_column
{
    public function up()
    {
        $db = Application::$app->db;
        $SQL = "ALTER TABLE users ADD COLUMN password VARCHAR(512) NOT NULL;";
        $db->pdo->exec($SQL);
    }

    public function down()
    {
        $db = Application::$app->db;
        $SQL = "ALTER TABLE users DROP COLUMN password;";
        $db->pdo->exec($SQL);
    }

}