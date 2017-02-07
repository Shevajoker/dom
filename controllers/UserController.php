<?php
/**
 * Created by PhpStorm.
 * User: Sheva
 * Date: 10.01.2017
 * Time: 19:41
 */

include_once '/models/IndexModel.php';
include_once '/models/UserModel.php';

function userAddAction(){

    $email = isset($_REQUEST['email']) ? $_REQUEST['email'] : null;
    $email = trim($email);

    $pwd1 = isset($_REQUEST['pwd1']) ? $_REQUEST['pwd1'] : null;
    $pwd2 = isset($_REQUEST['pwd2']) ? $_REQUEST['pwd2'] : null;

    $name = isset($_REQUEST['name']) ? $_REQUEST['name'] : null;

    $resData = null;
    $resData = checkRegisterParams($email, $pwd1, $pwd2);

    if (! $resData && checkEmail($email)) {
        $resData['success'] = false;
        $resData['message'] = 'Пользовательс таким Email уже существует';
    }

    if (! $resData){
        $pwdMD5 = md5($pwd1);

        $userData = registerUser($email, $pwdMD5, $name);

//        if ($userData['success']){
//            $resData['message'] = 'Пользовательуспешно зарегистрирован';
//            $resData['success'] = true;
//
//            $userData = $userData[0];
//            $resData['userName'] = $userData['users_name'] ? $userData['users_name'] : $userData['users_email'];
//            $resData['userEmail'] = $email;
//
//            $_SESSION['user'] = $userData;
//            $_SESSION['user']['displayName'] = $userData['users_name'] ? $userData['users_name'] : $userData['users_email'];
//        } else {
//            $resData['success'] = false;
//            $resData['message'] = 'Ошибка регистрации!';
//        }


        if ($userData){
            $resData['message'] = 'Регистрация прошла успешно!';
            $_SESSION['user'] = $email;
            $resData['user'] = $email;
        }

    }

$resData['email'] = $email;
//    $resData['ses'] = $_SESSION['ses'];
//$resData['pwd1'] = $pwd1;
//$resData['pwd2'] = $pwd2;
//$resData['name'] = $name;

    echo json_encode($resData);

}

function userLogInAction(){
    $email = isset($_REQUEST['emailLog']) ? $_REQUEST['emailLog'] : null;
    $email = trim($email);

    $pwd = isset($_REQUEST['pwdLog']) ? $_REQUEST['pwdLog'] : null;
    $pwdMD5 = md5($pwd);

    $resData = null;

    $userData = getUserInfo($email, $pwdMD5);

    if ($userData['success']){
        $resData['success'] = true;
        $resData['user'] = $userData[0]['users_name'];
        if (! $userData[0]['users_name']){
            $resData['user'] = $userData[0]['users_email'];
        }
        $resData['id'] = $userData[0]['users_id'];


    }

    $_SESSION['user'] = $resData['user'];


//$resData['user'] = $email;
//$resData['pwd'] = $pwdMD5;

    echo json_encode($resData);
}

function logOutAction(){
    if (isset($_SESSION['user'])){
        unset($_SESSION['user']);
    }
    redirect('/');
}

function indexAction($smarty){

    if (! isset($_SESSION['user'])){
            redirect('/');
    }

    if (isset($_SESSION['user'])){

        if ($_SESSION['user'] == "admin"){
            redirect('/?controller=admin');
        }
    }



    $allArt = getAllArt();

    $smarty->assign('title', 'User Page');
    $smarty->assign('allArt', $allArt);


    loadTemplate($smarty, 'header');
    loadTemplate($smarty, 'userPage');
    loadTemplate($smarty, 'footer');
}