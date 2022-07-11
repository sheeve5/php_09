<?php
/* Smarty version 3.1.30, created on 2022-07-11 01:31:31
  from "C:\xampp\htdocs\php_08\app\views\CalcView.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_62cb61531b2442_17619897',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2779ae93fe815aa60240ac0ebae2043c829eff39' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_08\\app\\views\\CalcView.tpl',
      1 => 1657492329,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_62cb61531b2442_17619897 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_32489594462cb61531a9ec9_34097325', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_207748393562cb61531b2039_79047771', 'content');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'footer'} */
class Block_32489594462cb61531a9ec9_34097325 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Ta część stopki została wpisana z szablonu kalkulatora<?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_207748393562cb61531b2039_79047771 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



	<div class="container">
		<div class="row">
			<article class="col-sm-12 maincontent">
				<header class="page-header">
					<h1 class="page-title">Podaj parametry</h1>
				</header>
				<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
calcCompute" method="post">
						<div class="row">
							<div class="col-sm-4">
								<input class="form-control" id="x" type="text" placeholder="Kwota" name="x" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->amount;?>
">
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-sm-4">
								<input class="form-control" id="y" type="text" placeholder="Lata" name="y" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->years;?>
">
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-sm-4">
								<input class="form-control" id="y" type="text" placeholder="Procent" name="z" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->intrest;?>
">
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-sm-4">
								<input class="btn btn-action" type="submit" value="Oblicz ratę">
							</div>
						</div>
					</form>

			</article>
		</div>
        </div>
    <div class ='row col-sm-4'>
        <?php $_smarty_tpl->_subTemplateRender("file:messages.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <?php if (isset($_smarty_tpl->tpl_vars['res']->value->result)) {?>
<div class="messages info">
	Wynik: <?php echo $_smarty_tpl->tpl_vars['res']->value->result;?>

</div>
<?php }?>
    </div>
	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<?php echo '<script'; ?>
 src="./Contact us - Progressus Bootstrap template_files/jquery.min.js.pobrane"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="./Contact us - Progressus Bootstrap template_files/bootstrap.min.js.pobrane"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="./Contact us - Progressus Bootstrap template_files/headroom.min.js.pobrane"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="./Contact us - Progressus Bootstrap template_files/jQuery.headroom.min.js.pobrane"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="./Contact us - Progressus Bootstrap template_files/template.js.pobrane"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'content'} */
}
