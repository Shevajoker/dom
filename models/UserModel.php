<?php
/**
 * Created by PhpStorm.
 * User: Sheva
 * Date: 10.01.2017
 * Time: 19:45
 */

//include_once 'models/IndexModel.php';

function checkRegisterParams($email, $pwd1, $pwd2){
    $res = null;

    if (! $email){
        $res['success'] = false;
        $res['message'] = 'Введите Email!';
    } else {
        if (! $pwd1){
            $res['success'] = false;
            $res['message'] = 'Введите пароль!';
        } else {
            if (! $pwd2){
                $res['success'] = false;
                $res['message'] = 'Введите повторный пароль!';
            } else {
                if ($pwd1 != $pwd2){
                    $res['success'] = false;
                    $res['message'] = 'Пароли не совпадают';
                }
            }
        }
    }


    return $res;
}

function checkEmail($email){
    $email = mysql_real_escape_string($email);
    $sql = "SELECT users_id FROM users WHERE users_email = '{$email}'";

    $rs = mysql_query($sql);
    $rs = toArray($rs);

    return $rs;
}

function registerUser($email, $pwdMD5, $name) {



    $email = htmlspecialchars(mysql_escape_string($email));
    $name = htmlspecialchars(mysql_escape_string($name));

    $sql = "INSERT INTO users (`users_email`, `users_pwd`, `users_name`) VALUES ('{$email}', '{$pwdMD5}', '{$name}')";

    $rs = mysql_query($sql);

//    if ($rs){
//        $sql = "SELECT * FROM users WHERE (`users_email` = '{$email}' AND `users_pwd` = '{$pwdMD5})' LIMIT 1";
//
//        $rs = mysql_query($sql);
//        $rs = toArray($rs);
//
//        if (isset($rs[0])){
//            $rs['success'] = true;
//        } else{
//            $rs['success'] = false;
//        }
//    } else{
//        $rs['success'] = false;
//    }


return $rs;

}

function getUserInfo($email, $pwdMD5){
    $email = htmlspecialchars(mysql_real_escape_string($email));

    $sql = "SELECT * FROM users WHERE users_email = '{$email}' AND users_pwd = '{$pwdMD5}' LIMIT 1";

    $rs = mysql_query($sql);

    if ($rs){
        $rs = toArray($rs);

        $rs['success'] = true;
    }

    return $rs;
}

function getAllArt(){
    $sql = "SELECT * FROM articles ORDER BY articles_date DESC LIMIT 5";

    $rs = mysql_query($sql);

    if ($rs){
        $rs = toArray($rs);
        $rs['success'] = true;
    } else {
        $rs['success'] = false;
        $rs['message'] = 'Ошибка получения данных из таблицы статей.';
    }

    return $rs;
}