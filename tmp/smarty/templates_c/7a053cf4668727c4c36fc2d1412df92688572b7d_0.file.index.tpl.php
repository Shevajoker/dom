<?php
/* Smarty version 3.1.30, created on 2017-02-05 16:40:20
  from "Z:\home\domdom2\www\views\default\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58971d3445cc82_40063335',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7a053cf4668727c4c36fc2d1412df92688572b7d' => 
    array (
      0 => 'Z:\\home\\domdom2\\www\\views\\default\\index.tpl',
      1 => 1486298349,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58971d3445cc82_40063335 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="col-md-8">
    <section id="articles">
    <h2 class="text-center big_title">Последние статьи</h2>
    <?php if (isset($_smarty_tpl->tpl_vars['allArt']->value)) {?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['allArt']->value, 'art');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['art']->value) {
?>
            <a href="/?controller=article&artId=<?php echo $_smarty_tpl->tpl_vars['art']->value['articles_id'];?>
" class="article_title"><?php echo $_smarty_tpl->tpl_vars['art']->value['articles_title'];?>
</a>
            <br>
            <span class="article_date"><?php echo $_smarty_tpl->tpl_vars['art']->value['articles_date'];?>
</span>
            <div class="title_<?php echo $_smarty_tpl->tpl_vars['art']->value['articles_id'];?>
 article_text"><?php echo $_smarty_tpl->tpl_vars['art']->value['articles_text'];?>
</div>
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
    </section>
</div>


<?php }
}
