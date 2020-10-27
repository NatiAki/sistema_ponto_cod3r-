<?php

class Login extends Model{

    public function validate(){
        $errors = [];

        if(!$this->email){
            $errors['email'] = 'Email e um campo obrigatorio';
        }

        if(!$this->password){
            $errors['password'] = 'Informe a senha, por favor!';
        }

        if(count($errors) > 0){
            throw new ValidateException($errors);
        }
    }

    public function checkLogin(){
        $this->validate();
        $user = User::getOne(['email'=>$this->email]);
        if($user){
            if($user->end_date){
                throw new AppException('Usuario esta desligado da empresa');
            }
            if(password_verify($this->password, $user->password)){
                return $user;
            }
        }
        throw new AppException('Usuario/Senha invalidos.');
    }
}