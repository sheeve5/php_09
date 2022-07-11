<?php
/* Smarty version 3.1.30, created on 2022-07-11 00:36:57
  from "C:\xampp\htdocs\php_07\app\views\templates\main.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_62cb54895c90b9_97919101',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9bbea3a0097629ef18299fcb57c5f64631e7f268' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_07\\app\\views\\templates\\main.tpl',
      1 => 1657492375,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62cb54895c90b9_97919101 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<html lang="en"><head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="Sergey Pozhilov (GetTemplate.com)">
	
	<title>Progressus - Free business bootstrap template by GetTemplate</title>

	<link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/images/gt_favicon.png">
	
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/css/font-awesome.min.css">

	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/css/bootstrap-theme.css" media="screen">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/css/main.css">

</head>

<body class="home" style="">
	<!-- Fixed navbar -->
	<div class="navbar navbar-inverse navbar-fixed-top headroom animated">
		<div class="container">
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
				<a class="navbar-brand" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/index.php"><img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/images/logo.png" alt="A logo"></a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right">
					<li <?php if ($_smarty_tpl->tpl_vars['action']->value == 'calcCompute' || $_smarty_tpl->tpl_vars['action']->value == '') {?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/index.php">Home</a></li>
					<li<?php if ($_smarty_tpl->tpl_vars['action']->value == 'otherAction') {?> class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
otherAction">About</a></li>
					
                                        <?php if ($_smarty_tpl->tpl_vars['conf']->value->roles && $_smarty_tpl->tpl_vars['action']->value != 'logout') {?>
                                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
logout">Wyloguj</a></li>
					<?php }?>
					
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</div> 
	<!-- /.navbar -->
	<!-- Header -->
	<header id="head">
		<div class="container">
			<div class="row">
				<h1><?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_title']->value)===null||$tmp==='' ? "Tytuł domyślny" : $tmp);?>
</h1>
				<h2><?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_header']->value)===null||$tmp==='' ? "Tytuł domyślny" : $tmp);?>
</h1>
				<p><?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_description']->value)===null||$tmp==='' ? "Opis domyślny" : $tmp);?>
</p>
			</div>
		</div>
	</header>
	<!-- /Header -->

	<div class="container">
		<br> <br>
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_35850858362cb54895c83c2_04062462', 'content');
?>

	</div>
		
	<footer id="footer" class="top-space">

        	<div class="footer2">
			<div class="container">
				<div class="row">
					
					<div class="col-md-6 widget">
						<div class="widget-body">
							<p class="text-left">
                                                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_57328295562cb54895c8bd7_87795537', 'footer');
?>

                                                        </p>
						</div>
					</div>

					<div class="col-md-6 widget">
						<div class="widget-body">
							<p class="text-right">
								Wykonano na podstawie szablonu Progressus, <a href="http://gettemplate.com/" rel="designer">gettemplate</a> 
							</p>
						</div>
					</div>

				</div> <!-- /row of widgets -->
			</div>
		</div>

	</footer>	
		




	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<?php echo '<script'; ?>
 src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="assets/js/headroom.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="assets/js/jQuery.headroom.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="assets/js/template.js"><?php echo '</script'; ?>
>

</body></html><?php }
/* {block 'content'} */
class Block_35850858362cb54895c83c2_04062462 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść zawartości .... <?php
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_57328295562cb54895c8bd7_87795537 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść stopki .... <?php
}
}
/* {/block 'footer'} */
}
