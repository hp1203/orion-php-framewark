<?php 

namespace app\models;
use himanshupurohit\orion\Model;
use himanshupurohit\orion\DbModel;
/**
 * Class User
 * 
 * @author Himanshu Purohit <himanshu1203@gmail.com>
 * @package app\models
 */
class User extends DbModel
{
    const  STATUS_INACTIVE = 0;
    const  STATUS_ACTIVE = 1;
    const  STATUS_DELETE = 2;

    public string $first_name = "";
    public string $last_name = "";
    public string $email = "";
    public string $password = "";
    public int $status = self::STATUS_INACTIVE;
    public string $confirm_password = "";

    public static function tableName(): string
    {
        return 'users';
    }

    public static function primaryKey(): string
    {
        return 'id';
    }

    public function attributes(): array
    {
        return ['first_name', 'last_name', 'email', 'password', 'status'];
    }

    public function save()
    {
        $this->status = self::STATUS_INACTIVE;
        $this->password = password_hash($this->password, PASSWORD_DEFAULT);
        return parent::save();
    }

    public function rules(): array
    {
        return [
            'first_name' => [self::RULE_REQUIRED],
            'last_name' => [self::RULE_REQUIRED],
            'email' => [self::RULE_REQUIRED, self::RULE_EMAIL, [self::RULE_UNIQUE, 'class' => self::class]],
            'password' => [self::RULE_REQUIRED, [self::RULE_MIN, 'min' => 8], [self::RULE_MAX, 'max' => '24']],
            'confirm_password' => [self::RULE_REQUIRED, [self::RULE_MATCH, 'match' => 'password']],
        ];
    }
}