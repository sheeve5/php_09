<?php
/* Smarty version 3.1.30, created on 2022-07-11 19:22:44
  from "C:\xampp\htdocs\php_09\app\views\LogView.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_62cc5c64daeb20_46858156',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e6428822264b94a423651583407d87b450f69aab' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_09\\app\\views\\LogView.tpl',
      1 => 1657559977,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
  ),
),false)) {
function content_62cc5c64daeb20_46858156 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_192458833862cc5c64da3136_54372276', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_87110030562cc5c64dae725_29522338', 'content');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'footer'} */
class Block_192458833862cc5c64da3136_54372276 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Ta część stopki została wpisana z drugiego szablonu<?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_87110030562cc5c64dae725_29522338 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="container">
    <article class="col-sm-6 maincontent">


<table id="tab_people" class="pure-table pure-table-striped ">
<thead>
	<tr>
		<th>Kwota</th>
		<th>Lata</th>
		<th>Procent</th>
		<th>Rata</th>
		<th>Akcje</th>
	</tr>
</thead>
<tbody>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['people']->value, 'p');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
?>
<tr><td><?php echo $_smarty_tpl->tpl_vars['p']->value["amount"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['p']->value["years"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['p']->value["intrest"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['p']->value["result"];?>
</td><td><a class="btn btn-action btn-sm" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
recordDelete&id=<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
">Usun</a></td></tr>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</tbody>
</table>

	
    </article>
	</div>	<!-- /container -->

<?php
}
}
/* {/block 'content'} */
}
