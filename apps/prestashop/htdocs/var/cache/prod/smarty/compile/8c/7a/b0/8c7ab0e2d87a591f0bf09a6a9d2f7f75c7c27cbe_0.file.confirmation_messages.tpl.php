<?php
/* Smarty version 3.1.34-dev-7, created on 2021-02-26 08:16:11
  from 'C:\xampp\htdocs\prestashop\apps\prestashop\htdocs\administration\themes\new-theme\template\components\layout\confirmation_messages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6038ae4bc054c8_96281982',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8c7ab0e2d87a591f0bf09a6a9d2f7f75c7c27cbe' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\apps\\prestashop\\htdocs\\administration\\themes\\new-theme\\template\\components\\layout\\confirmation_messages.tpl',
      1 => 1613661394,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6038ae4bc054c8_96281982 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['confirmations']->value) && count($_smarty_tpl->tpl_vars['confirmations']->value) && $_smarty_tpl->tpl_vars['confirmations']->value) {?>
  <div class="bootstrap">
    <div class="alert alert-success" style="display:block;">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['confirmations']->value, 'conf');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['conf']->value) {
?>
        <?php echo $_smarty_tpl->tpl_vars['conf']->value;?>

      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
  </div>
<?php }
}
}
