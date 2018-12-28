<?php

namespace app\models;
use yii\base\Model;

class SignupForm extends Model{
 
 public $username;
 public $password;
 
 public function rules() {
        return [
            [['username', 'password'], 'required', 'message' => 'Set field'],
            ['username', 'unique', 'targetClass' => User::className(),  'message' => 'this login use other user'],
        ];
 }
 
 public function attributeLabels() {
 return [
 'username' => 'Login',
 'password' => 'Password',
 ];
 }
 
}