<?php
/* Smarty version 3.1.30, created on 2022-07-11 01:40:38
  from "C:\xampp\htdocs\php_08\app\views\OtherView.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_62cb6376086d68_49492827',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b86d25e85ca16a373a52d5785009d7c682d4e399' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_08\\app\\views\\OtherView.tpl',
      1 => 1657492874,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
  ),
),false)) {
function content_62cb6376086d68_49492827 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_43664305162cb6376086047_98029390', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_93774821662cb63760869a8_65703604', 'content');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'footer'} */
class Block_43664305162cb6376086047_98029390 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Ta część stopki została wpisana z drugiego szablonu<?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_93774821662cb63760869a8_65703604 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="container">
    <article class="col-sm-12 maincontent">
		<div class="row">
        		<h1 class="page-title">To jest inna strona</h1>
                        <p>To jest inna strona. To jest inna strona. To jest inna strona. To jest inna strona.<p>
    				
                </div>	
    </article>
	</div>	<!-- /container -->

<?php
}
}
/* {/block 'content'} */
}
