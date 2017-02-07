<?php
/* Smarty version 3.1.30, created on 2017-02-03 16:37:11
  from "Z:\home\domdom2\www\views\default\headerAdm.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_589479772f7840_81562187',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '26dc5e9dcd155f90586228513fc16fa77df3f941' => 
    array (
      0 => 'Z:\\home\\domdom2\\www\\views\\default\\headerAdm.tpl',
      1 => 1486125425,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_589479772f7840_81562187 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
    <link rel="stylesheet" href="<?php echo TemplateWebPath;?>
/css/main.css" type="text/css">
    <link rel="stylesheet" href="<?php echo TemplateWebPath;?>
/css/footer.css" type="text/css">

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



        <?php if (isset($_smarty_tpl->tpl_vars['arUser']->value)) {?>
            <div id="userInfo" class="text-right">
                <a href="/?controller=admin"><?php echo $_smarty_tpl->tpl_vars['arUser']->value;?>
</a>
                <a href="/?controller=user&action=logOut" onclick="logOut();">Выход</a>
            </div>

            <div id="admin_links">
                
                <a href="/?controller=admin&action=addArt">Добавить статью</a> <br>
                
                <a href="/?controller=admin&action=addAds">Добавить объявление</a> <br>
            </div>

        <?php } else { ?>
            <div id="adm_err"></div>
            <div id="form_admin">
                <label for="loginAdmin">Login</label>
                <input type="text" name="loginAdmin" id="loginAdmin" value=""><br>
                <label for="pwdAdmin">Password</label>
                <input type="password" name="pwdAdmin" id="pwdAdmin" value=""><br>

                <input type="submit" value="Enter" onclick="adminLogIn();">
            </div>


        <?php }?>


    </div>
</header>



<div id="center_colum">
    <div class="container">


<?php }
}
