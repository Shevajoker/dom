<?php
/* Smarty version 3.1.30, created on 2017-01-09 16:23:51
  from "Z:\home\myshop\www\views\default\leftcolum.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_587380d7c20c84_42353688',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '94d3b4ef791c988cad74acf6e6c26e56afc4c7cc' => 
    array (
      0 => 'Z:\\home\\myshop\\www\\views\\default\\leftcolum.tpl',
      1 => 1483879982,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_587380d7c20c84_42353688 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div id="userBox" class="hideme">
                <a href="#" id="userLink"></a><br>
                <a href="/?controller=user&action=logout" onclick="logout();">Выход</a>
            </div>

            <div id="loginBox">
                <div class="menuCaption">
                    Авторизация
                </div>
                <label for="loginEmail">Логин</label>
                <input type="text" name="loginEmail" id="loginEmail" value=""><br>
                <label for="loginPwd">Пароль</label>
                <input type="password" name="loginPwd" id="loginPwd" value=""><br>
                <input type="button" onclick="login();" value="Войти">
            </div>


            <div id="registerBox">
                <div class="menuCaption showHidden" onclick="showRegisrerBox();">
                    Регистрация
                </div>
                <div id="registerBoxHidden">
                    <label for="email">email</label>
                    <input type="email"name="email" id="email" value=""><br>
                    <label for="pwd1">Пароль</label>
                    <input type="password" name="pwd1" id="pwd1" value=""><br>
                    <label for="pwd2">повторите пароль</label>
                    <input type="password" name="pwd2" id="pwd2" value=""><br>

                    <input type="button" onclick="registerNewUser();" value="Зарегистрироваться">
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                   <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsCategories']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
                    <li class="active"><a href="/?controller=category&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['categories_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['categories_name'];?>
</a></li>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </ul>
            </div>
            
        </div>
    </div>
    <div class="row">
        <div class="col-md3">
            <div class="menuCaption">Корзина</div>
            <a href="/?controller=cart" title="Перейти в корзину">В корзине</a>
            <span id="cartCntItems">
                <?php if ($_smarty_tpl->tpl_vars['cartCntItems']->value > 0) {
echo $_smarty_tpl->tpl_vars['cartCntItems']->value;?>
 <?php } else { ?> пусто <?php }?>
            </span>
        </div>
    </div>
</div>
  
  
  
<?php }
}
