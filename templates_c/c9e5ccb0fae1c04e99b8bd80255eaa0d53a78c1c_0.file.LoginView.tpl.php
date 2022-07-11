<?php
/* Smarty version 3.1.30, created on 2022-07-11 18:03:19
  from "C:\xampp\htdocs\php_09\app\views\LoginView.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_62cc49c7272a22_92374183',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c9e5ccb0fae1c04e99b8bd80255eaa0d53a78c1c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_09\\app\\views\\LoginView.tpl',
      1 => 1657492296,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_62cc49c7272a22_92374183 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_39290549462cc49c7271f25_88580560', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'} */
class Block_39290549462cc49c7271f25_88580560 extends Smarty_Internal_Block
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
login" method="post">
                                    <div class ='row'>
						<div class="col-sm-4">
                                                    <input class="form-control" id="id_login" type="text" placeholder="Login" name="login">
						</div>
                                    </div>
						<br>
                                                <div class ='row'>
						<div class="col-sm-4">
                                                    <input class="form-control" id="id_pass" type="password" placeholder="Hasło" name="pass">
						</div>
                                                </div>
						<br>
                                                <div class ='row'>
						<div class="col-sm-4">
                                                    <input class="btn btn-action" type="submit" value="Zaloguj">
						</div>
                                                </div>
					</form>

			</article>
		</div>
        </div>

<?php $_smarty_tpl->_subTemplateRender("file:messages.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php
}
}
/* {/block 'content'} */
}
