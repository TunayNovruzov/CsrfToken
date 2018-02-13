<?php
/**
 * Created by PhpStorm.
 * User: Tunay
 * Date: 2/13/2018
 * Time: 4:34 PM
 */

class CsrfToken{
    public static function csrfField(){
        $token  = sha1(str_shuffle(uniqid(mt_rand())));

        echo "<input type='hidden' name='_token' value='{$token}'>";
        session_start();
        $_SESSION['_token'] = $token;
        session_write_close();
    }

    public static function csrfCheck($token){
      session_start();
        if (empty($_SESSION['_token']) or $_SESSION['_token'] !=$token){
            session_write_close();
            die('Token düzgün deyil yenidən yoxlayın');
        }

        session_write_close();
    }

    public static function generateToken(){
        $token  = sha1(str_shuffle(uniqid(mt_rand())));
        session_start();
        $_SESSION['_token'] = $token;
        session_write_close();
        return $token;
    }
}
