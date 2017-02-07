<?php
/* Smarty version 3.1.30, created on 2017-02-03 16:39:55
  from "Z:\home\domdom2\www\views\default\article.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58947a1b0a1097_67847252',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'db4deae6bcc54c6c3942905de9547e8afbd7c29f' => 
    array (
      0 => 'Z:\\home\\domdom2\\www\\views\\default\\article.tpl',
      1 => 1486125592,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58947a1b0a1097_67847252 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container">
    <h3><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h3>

    <div id="articleDivId">
    <?php if (isset($_smarty_tpl->tpl_vars['infoArt']->value)) {?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['infoArt']->value, 'art');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['art']->value) {
?>
            <a href="/?controller=article&artId=<?php echo $_smarty_tpl->tpl_vars['art']->value['articles_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['art']->value['articles_title'];?>
</a>
            <br>
            <?php echo $_smarty_tpl->tpl_vars['art']->value['articles_date'];?>

            <br>
            <br>
            <div class="title_<?php echo $_smarty_tpl->tpl_vars['art']->value['articles_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['art']->value['articles_text'];?>
</div>
            <br>

        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        <?php } else { ?>
        <b>Статья удалена.</b>
    <?php }?>
    </div>

</div><?php }
}
