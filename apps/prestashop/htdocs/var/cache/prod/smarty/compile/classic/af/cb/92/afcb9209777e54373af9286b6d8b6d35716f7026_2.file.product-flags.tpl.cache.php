<?php
/* Smarty version 3.1.34-dev-7, created on 2021-02-26 08:08:42
  from 'C:\xampp\htdocs\prestashop\apps\prestashop\htdocs\themes\classic\templates\catalog\_partials\product-flags.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6038ac8a121572_51463440',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'afcb9209777e54373af9286b6d8b6d35716f7026' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\apps\\prestashop\\htdocs\\themes\\classic\\templates\\catalog\\_partials\\product-flags.tpl',
      1 => 1613661394,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6038ac8a121572_51463440 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->compiled->nocache_hash = '8527356196038ac8a11cad7_38915634';
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14540659716038ac8a11ef15_94822232', 'product_flags');
?>

<?php }
/* {block 'product_flags'} */
class Block_14540659716038ac8a11ef15_94822232 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_flags' => 
  array (
    0 => 'Block_14540659716038ac8a11ef15_94822232',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <ul class="product-flags">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['flags'], 'flag');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['flag']->value) {
?>
            <li class="product-flag <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['flag']->value['type'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['flag']->value['label'], ENT_QUOTES, 'UTF-8');?>
</li>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
<?php
}
}
/* {/block 'product_flags'} */
}
