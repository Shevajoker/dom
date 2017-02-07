<?php
/* Smarty version 3.1.30, created on 2017-02-01 16:53:51
  from "Z:\home\domdom2\www\views\default\rightcolumn.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5891da5f28a884_02508508',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4a6d35d7b7e3d8b8a5017ca2b9decb0151a041bf' => 
    array (
      0 => 'Z:\\home\\domdom2\\www\\views\\default\\rightcolumn.tpl',
      1 => 1485953231,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5891da5f28a884_02508508 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="col-md-2">

    <div class="search">
    <div class="input-group">
        <input type="text" class="form-control" placeholder="Search for...">
        <span class="input-group-btn">
        <button class="btn btn-default" type="button">Go!</button>
      </span>
    </div>
    </div>

    <br>





    <?php if (isset($_smarty_tpl->tpl_vars['allArt']->value)) {?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['allArt']->value, 'art');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['art']->value) {
?>
            <a href="/?controller=article&artId=<?php echo $_smarty_tpl->tpl_vars['art']->value['articles_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['art']->value['articles_title'];?>
</a>
            <br>
            <?php echo $_smarty_tpl->tpl_vars['art']->value['articles_date'];?>

            <br>
            <hr>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    <?php } else { ?>
        <h3>Статей нет!</h3>
    <?php }?>


</div><?php }
}
