<?php 

namespace app\core\form;

use app\core\Model;

/**
 * Class Field
 * 
 * @author Himanshu Purohit <himanshu1203@gmail.com>
 * @package app\core\form
 */

 class Field 
 {
    public const TYPE_TEXT = 'text';
    public const TYPE_EMAIL = 'email';
    public const TYPE_PASSWORD = 'password';
    public const TYPE_NUMBER = 'number';

    public string $type;
    public Model $model;
    public string $attribute;
    public string $label;
    public string $placeholder;

    /**
     * Field Constructor
     * 
     * @param \app\core\Model $model
     * @param string $attribute
     */

    public function __construct(Model $model, string $attribute, string $label, string $placeholder)
    {
        $this->type = self::TYPE_TEXT;
        $this->label = $label;
        $this->placeholder = $placeholder;
        $this->model = $model;
        $this->attribute = $attribute;
    }

    public function __toString()
    {
        return sprintf('
            <label for="inputLastName" class="visually-hidden">%s</label>
            <input type="%s" id="inputLastName" value="%s" placeholder="%s" autofocus="" name="%s" class="form-control %s">
            <div class="invalid-feedback">
                %s
            </div>
        ', $this->label, 
        $this->type,
        $this->model->{$this->attribute}, 
        $this->placeholder, 
        $this->attribute,
        $this->model->hasError($this->attribute) ? 'is-invalid' : '',
        $this->model->getFirstError($this->attribute));
    }

    public function passwordField()
    {
        $this->type = self::TYPE_PASSWORD;
        return $this;
    }

    public function emailField()
    {
        $this->type = self::TYPE_EMAIL;
        return $this;
    }
 }
