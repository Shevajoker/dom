<?php
/* Smarty version 3.1.30, created on 2016-12-25 17:16:13
  from "Z:\home\myshop\www\views\default\header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_585fc69d536459_67748138',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f9acedb8540b4de0831df599bce64aa602b62de8' => 
    array (
      0 => 'Z:\\home\\myshop\\www\\views\\default\\header.tpl',
      1 => 1482670700,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:leftcolum.tpl' => 1,
  ),
),false)) {
function content_585fc69d536459_67748138 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
 fff</title>
    <link rel="stylesheet" href="<?php echo TemplateWebPath;?>
/css/main.css" type="text/css">
<!--    <link rel="stylesheet" href="../../templates/default/css/main.css">-->

<!--bootstrap-->
<link href="library/bootstrap/css/bootstrap.min.css" rel="stylesheet">


</head>
<body>
   
    <header class="text-center">
       <div class="container">
           <div class="jumbotron">
              <h1>Страница заказа</h1>
              <p><a class="btn btn-success btn-lg" href="#" role="button">Вход</a>
              <a class="btn btn-info btn-lg" href="#" role="button">Регистрация</a></p>
            </div>
       </div>
    </header>
    
   
  <?php $_smarty_tpl->_subTemplateRender("file:leftcolum.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <a href="index.php">HOME</a>

  


 <div id="center_colum">
      
<?php }
}
