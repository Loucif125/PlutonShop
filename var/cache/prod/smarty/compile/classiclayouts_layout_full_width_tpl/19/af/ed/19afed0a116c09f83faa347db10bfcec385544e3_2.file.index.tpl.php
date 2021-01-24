<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-21 21:07:48
  from 'C:\wamp64\www\Test\PlutonShop\themes\classic\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6009df148dc9b8_43891849',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '19afed0a116c09f83faa347db10bfcec385544e3' => 
    array (
      0 => 'C:\\wamp64\\www\\Test\\PlutonShop\\themes\\classic\\templates\\index.tpl',
      1 => 1611257277,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6009df148dc9b8_43891849 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10415164526009df148d3a62_73941964', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_5290209856009df148d4e33_95719874 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_18092453756009df148d8062_21023323 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_11718189036009df148d6e56_57213854 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18092453756009df148d8062_21023323', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_10415164526009df148d3a62_73941964 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_10415164526009df148d3a62_73941964',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_5290209856009df148d4e33_95719874',
  ),
  'page_content' => 
  array (
    0 => 'Block_11718189036009df148d6e56_57213854',
  ),
  'hook_home' => 
  array (
    0 => 'Block_18092453756009df148d8062_21023323',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5290209856009df148d4e33_95719874', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11718189036009df148d6e56_57213854', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
