<?php
/* Smarty version 3.1.30, created on 2017-02-02 16:37:21
  from "Z:\home\domdom2\www\views\default\ads.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5893280154e668_22344914',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '38e04cb4b26d8fcadff445d54aa1a6268367aed1' => 
    array (
      0 => 'Z:\\home\\domdom2\\www\\views\\default\\ads.tpl',
      1 => 1486037308,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5893280154e668_22344914 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container">
    <h1>Объявления</h1>
    <div class="all_ads">
                <div class="row">
                    <?php if (isset($_smarty_tpl->tpl_vars['ads']->value)) {?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ads']->value, 'this_ads');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['this_ads']->value) {
?>
                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                            <div class="caption">
                                <h3><?php echo $_smarty_tpl->tpl_vars['this_ads']->value['ads_title'];?>
</h3>
                                <p><?php echo $_smarty_tpl->tpl_vars['this_ads']->value['ads_text'];?>
</p>
                            </div>
                        </div>
                    </div>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                    <?php } else { ?>
                        <b>Объявлений нет.</b>
                    <?php }?>
                </div>
    </div>
</div><?php }
}
