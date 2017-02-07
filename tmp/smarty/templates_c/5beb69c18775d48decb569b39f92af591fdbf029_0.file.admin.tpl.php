<?php
/* Smarty version 3.1.30, created on 2017-02-03 16:29:16
  from "Z:\home\domdom2\www\views\default\admin.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5894779cc7ce20_30509393',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5beb69c18775d48decb569b39f92af591fdbf029' => 
    array (
      0 => 'Z:\\home\\domdom2\\www\\views\\default\\admin.tpl',
      1 => 1486124953,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5894779cc7ce20_30509393 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container">
    <h2><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h2>

    <?php echo $_smarty_tpl->tpl_vars['arUser']->value;?>


    <br>
    <br>

    

    <h4>Новая статья</h4>
    <div id="newArticle">
        <label for="name_art">Название статьи</label>
        <input type="text" name="name_art" id="name_art" value=""><br>
        <label for="text_art">Текст</label><br>
        <textarea name="text_art" id="text_art" cols="30" rows="10"></textarea><br>

        <input type="button" id="addNewArt_btn" value="Добавить статью" onclick="addNewArt(); return false;">
    </div>

    <hr>

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

        <div class="title_<?php echo $_smarty_tpl->tpl_vars['art']->value['articles_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['art']->value['articles_text'];?>
</div>
            <br>
            <input type="button" id="removeArt" onclick="removeArticle(<?php echo $_smarty_tpl->tpl_vars['art']->value['articles_id'];?>
);" value="Удалить">
            <hr>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        <?php } else { ?>

        <h3>Статей нет!</h3>
    <?php }?>


</div>

<?php }
}
