<?php
/* Smarty version 3.1.34-dev-7, created on 2021-02-26 08:08:42
  from 'C:\xampp\htdocs\prestashop\apps\prestashop\htdocs\themes\classic\templates\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6038ac8a803e46_48500443',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '039338006238f00a2e8511c3f6faa3102c29ec44' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\apps\\prestashop\\htdocs\\themes\\classic\\templates\\page.tpl',
      1 => 1613661394,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6038ac8a803e46_48500443 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13143898686038ac8a7f5862_90955318', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_7097493466038ac8a7f7b49_08351346 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_4335059496038ac8a7f69b1_11416682 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7097493466038ac8a7f7b49_08351346', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_9454678106038ac8a7ff392_74949827 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_9128339346038ac8a8000e8_66821033 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_11149541876038ac8a7fe9d7_90654963 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9454678106038ac8a7ff392_74949827', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9128339346038ac8a8000e8_66821033', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_20301182366038ac8a802608_76433375 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_16412525976038ac8a801cc7_73711906 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20301182366038ac8a802608_76433375', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_13143898686038ac8a7f5862_90955318 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_13143898686038ac8a7f5862_90955318',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_4335059496038ac8a7f69b1_11416682',
  ),
  'page_title' => 
  array (
    0 => 'Block_7097493466038ac8a7f7b49_08351346',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_11149541876038ac8a7fe9d7_90654963',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_9454678106038ac8a7ff392_74949827',
  ),
  'page_content' => 
  array (
    0 => 'Block_9128339346038ac8a8000e8_66821033',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_16412525976038ac8a801cc7_73711906',
  ),
  'page_footer' => 
  array (
    0 => 'Block_20301182366038ac8a802608_76433375',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4335059496038ac8a7f69b1_11416682', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11149541876038ac8a7fe9d7_90654963', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16412525976038ac8a801cc7_73711906', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
