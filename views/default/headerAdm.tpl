<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{$title}</title>
    <link rel="stylesheet" href="{TemplateWebPath}/css/main.css" type="text/css">
    <link rel="stylesheet" href="{TemplateWebPath}/css/footer.css" type="text/css">

    <!--    <link rel="stylesheet" href="../../templates/default/css/main.css">-->

    <!--bootstrap-->
    <link href="library/bootstrap/css/bootstrap.min.css" rel="stylesheet">


</head>
<body>

<header>
    <div class="container">
        <h1>DOM Информационный сайт</h1>

        <ul>
            <a href="/"><li>Главная</li></a>
            <a href="/?controller=ads"><li>Объявления</li></a>
            <a href="/?controller=index&action=info"><li>Контактная информация</li></a>
            <a href="/?controller=index&action=feedback"><li>Обратная связь</li></a>
            <a href="/?controller=index&action=map"><li>Карта</li></a>
            <a href="/?controller=index&action=users"><li>Пользователи</li></a>
        </ul>



        {if isset($arUser)}
            <div id="userInfo" class="text-right">
                <a href="/?controller=admin">{$arUser}</a>
                <a href="/?controller=user&action=logOut" onclick="logOut();">Выход</a>
            </div>

            <div id="admin_links">
                {*<a href="#">Все статьи</a> <br>*}
                <a href="/?controller=admin&action=addArt">Добавить статью</a> <br>
                {*<a href="#">Все объявления</a> <br>*}
                <a href="/?controller=admin&action=addAds">Добавить объявление</a> <br>
            </div>

        {else}
            <div id="adm_err"></div>
            <div id="form_admin">
                <label for="loginAdmin">Login</label>
                <input type="text" name="loginAdmin" id="loginAdmin" value=""><br>
                <label for="pwdAdmin">Password</label>
                <input type="password" name="pwdAdmin" id="pwdAdmin" value=""><br>

                <input type="submit" value="Enter" onclick="adminLogIn();">
            </div>


        {/if}


    </div>
</header>



<div id="center_colum">
    <div class="container">


