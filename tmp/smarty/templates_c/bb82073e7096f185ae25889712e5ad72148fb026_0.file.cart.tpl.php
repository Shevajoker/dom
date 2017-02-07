<?php
/* Smarty version 3.1.30, created on 2016-12-27 17:11:55
  from "Z:\home\myshop\www\views\default\cart.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5862689b12cc60_50905884',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bb82073e7096f185ae25889712e5ad72148fb026' => 
    array (
      0 => 'Z:\\home\\myshop\\www\\views\\default\\cart.tpl',
      1 => 1482844312,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5862689b12cc60_50905884 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="container">
    <div class="row">
        <div class="col-md12">
            <h1>Корзина</h1>
            <?php if (!$_smarty_tpl->tpl_vars['rsArticles']->value) {?>
                Корзина пуста!
            <?php } else { ?>

                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsArticles']->value, 'item', false, NULL, 'article', array (
  'iteration' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_article']->value['iteration']++;
?>
                    <div class="row text-center" style="border-bottom: 1px solid #000;">
                    <div class="col-md-1">
                        <?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_article']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_article']->value['iteration'] : null);?>

                    </div>
                    <div class="col-md-4">
                        <?php echo $_smarty_tpl->tpl_vars['item']->value['article_name'];?>

                    </div>
                    <div class="col-md-2">
                        <input type="text" name="itemCnt_<?php echo $_smarty_tpl->tpl_vars['item']->value['article_id'];?>
" id="itemCnt_<?php echo $_smarty_tpl->tpl_vars['item']->value['article_id'];?>
" value="1">
                    </div>
                    <div class="col-md-2">
                        <?php echo $_smarty_tpl->tpl_vars['item']->value['article_number'];?>

                    </div>
                    <div class="col-md-3">
                        <a id="addCart_<?php echo $_smarty_tpl->tpl_vars['item']->value['article_id'];?>
"  style="display: none"  href="#" onClick="addToCart(<?php echo $_smarty_tpl->tpl_vars['item']->value['article_id'];?>
);return false;">Восстановить</a>
                        <a id="removeCart_<?php echo $_smarty_tpl->tpl_vars['item']->value['article_id'];?>
" href="#" onClick="removeFromCart(<?php echo $_smarty_tpl->tpl_vars['item']->value['article_id'];?>
);return false;">Удалить из корзины</a>
                        
                    </div>
                    </div>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


            <?php }?>
        </div>
    </div>
</div>


<?php }
}
