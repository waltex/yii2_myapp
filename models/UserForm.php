<?php

namespace app\models;

class UserForm extends Model
{
    public $name;
    public $mail;
    public function rules()
    {
      return [
              [['name','email'],'required'],
              ['email','email']
            ];
    }
}
