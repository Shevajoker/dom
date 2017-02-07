<?php
/* Smarty version 3.1.30, created on 2017-02-03 16:27:29
  from "Z:\home\domdom2\www\views\default\adsAdmin.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58947731afe316_99195064',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '004d5fe1b4c1f988467e9be04359cf5e700b892c' => 
    array (
      0 => 'Z:\\home\\domdom2\\www\\views\\default\\adsAdmin.tpl',
      1 => 1486124846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58947731afe316_99195064 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container">
    <h2><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h2>

    <div id="form_add_ads">
        <label for="title_ads">Заголовок</label>
        <input type="text" name="title_ads" id="title_ads" value=""><br>
        <label for="text_for_ads">Объявление</label><br>
        <textarea name="text_for_ads" id="text_for_ads" cols="30" rows="10"></textarea>
        <br>
        <a href="#" class="btn btn-success" >Сохранить</a>
    </div>

</div><?php }
}
