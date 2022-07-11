{extends file="main.tpl"}

{block name=content}
	<div class="container">
		<div class="row">
			<article class="col-sm-12 maincontent">
				<header class="page-header">
					<h1 class="page-title">Podaj parametry</h1>
				</header>
				<form action="{$conf->action_root}login" method="post">
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

{include file='messages.tpl'}

{/block}
