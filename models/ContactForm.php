<?php 

namespace app\models;
use app\core\Model;
use app\core\DbModel;
use app\core\Application;
/**
 * Class ContactForm
 * 
 * 
 * @author Himanshu Purohit <himanshu1203@gmail.com>
 * @package app\models
 */
class ContactForm extends Model
{
    public string $subject = '';
    public string $email = '';
    public string $body = '';

    public function rules(): array
    {
        return [
            'email' => [self::RULE_REQUIRED, self::RULE_EMAIL],
            'subject' => [self::RULE_REQUIRED],
            'body' => [self::RULE_REQUIRED],
        ];
    }

     
    public function send()
    {
        return true;
    }

}