<?php
/* Smarty version 3.1.30, created on 2017-02-05 17:02:35
  from "Z:\home\domdom2\www\views\default\leftcolumn.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5897226bd20800_65908512',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '19505564c46407b7901fc1c7126617cf181b0604' => 
    array (
      0 => 'Z:\\home\\domdom2\\www\\views\\default\\leftcolumn.tpl',
      1 => 1486299753,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5897226bd20800_65908512 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="col-md-2">

    <section id="left_column">

        <h3>Новые объявления:</h3>

        <hr>
        <?php if (isset($_smarty_tpl->tpl_vars['ads']->value)) {?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ads']->value, 'this_ads');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['this_ads']->value) {
?>
                <p class="title_a"><?php echo $_smarty_tpl->tpl_vars['this_ads']->value['ads_title'];?>
</p>
                <p class="text_a"><?php echo $_smarty_tpl->tpl_vars['this_ads']->value['ads_text'];?>
</p>
                <hr>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        <?php } else { ?>
            <b>Объявлений нет!</b>
        <?php }?>
    </section>
</div><?php }
}
