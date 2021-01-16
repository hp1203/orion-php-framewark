<?php 

namespace app\models;
use himanshupurohit\orion\Model;
use himanshupurohit\orion\DbModel;
use himanshupurohit\orion\Application;
/**
 * Class LoginForm
 * 
 * 
 * @author Himanshu Purohit <himanshu1203@gmail.com>
 * @package app\models
 */
class LoginForm extends Model
{
    public string $email = '';
    public string $password = '';

    // public function tableName(): string
    // {
    //     return 'users';
    // }

    // public function attributes(): array
    // {
    //     return ['email', 'password'];
    // }

    public function rules(): array
    {
        return [
            'email' => [self::RULE_REQUIRED, self::RULE_EMAIL],
            'password' => [self::RULE_REQUIRED],
        ];
    }

    public function login()
    {
        $user =  User::findOne(['email' => $this->email]);
        if(!$user){
            $this->addError('email', 'User does not exist with this email.');
            return false;
        }
        if(!password_verify($this->password, $user->password)){
            $this->addError('password', 'Password is incorrect');
            return false;
        }
        
        return Application::$app->login($user);
    }
}