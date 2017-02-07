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
        <div id="userInfo" class="text-right usInf">
            <a href="/?controller=user" class="btn btn-success">{$arUser}</a>
            <a href="/?controller=user&action=logOut" class="btn btn-danger" onclick="logOut();">Выход</a>

        </div>

    {else}
        <div id="registration">

            <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".registration_modal">Регистрация</button>

            <div class="modal fade registration_modal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
                <div class="modal-dialog modal-sm" role="document">
                    <div class="modal-content">
                        <h4>Регистрация</h4>
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" value=""><br>
                        <label for="pwd1">Пароль</label>
                        <input type="password" name="pwd1" id="pwd1" value=""><br>
                        <label for="pwd2">Повтор пароля</label>
                        <input type="password" name="pwd2" id="pwd2" value=""><br>

                        <input type="button" data-dismiss="modal" value="Зарегистрироваться" onclick="registerNewUser();">
                    </div>
                </div>
            </div>

        </div>

        <div id="userLog">
            <button type="button" class="btn btn-success" data-toggle="modal" data-target=".userLog_modal">Вход</button>

            <div class="modal fade userLog_modal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
                <div class="modal-dialog modal-sm" role="document">
                    <div class="modal-content">
                        <h4>Вход</h4>
                        <label for="emailLog">Email</label>
                        <input type="text" name="emailLog" id="emailLog" value=""><br>
                        <label for="pwdLog">Пароль</label>
                        <input type="password" name="pwdLog" id="pwdLog" value=""><br>

                        <input type="button" data-dismiss="modal" value="Вход" onclick="logIn();">

                    </div>
                </div>
            </div>


        </div>

        <div id="userInfo_r" class="hideme text-right usInf">
            <a href="/?controller=user" id="userInfo_user" class="btn btn-success"></a>
            <a href="/?controller=user&action=logOut" class="btn btn-danger" onclick="logOut();">Выход</a>
        </div>
    {/if}


</div>
</header>



<div id="center_colum">
    <div class="container">


