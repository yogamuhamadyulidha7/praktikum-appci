<?php

use Orm\User;
class Daftar extends CI_Controller
{
    public function user($name, $password){
        // echo 'hallo';
        $user = new User();
        $user->username=$name;
        $user->password=$password;
       if($user->save()){
        echo "user dengan nama ".$name." berhasil";
       } else {
            echo "Error";
       }
    }
}