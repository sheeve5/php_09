{extends file="main.tpl"}

{block name=footer}Ta część stopki została wpisana z szablonu kalkulatora{/block}

{block name=content}


	<div class="container">
		<div class="row">
			<article class="col-sm-12 maincontent">
				<header class="page-header">
					<h1 class="page-title">Podaj parametry</h1>
				</header>
				<form action="{$conf->action_root}calcCompute" method="post">
						<div class="row">
							<div class="col-sm-4">
								<input class="form-control" id="x" type="text" placeholder="Kwota" name="x" value="{$form->amount}">
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-sm-4">
								<input class="form-control" id="y" type="text" placeholder="Lata" name="y" value="{$form->years}">
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-sm-4">
								<input class="form-control" id="y" type="text" placeholder="Procent" name="z" value="{$form->intrest}">
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
        {include file='messages.tpl'}
        {if isset($res->result)}
<div class="messages info">
	Wynik: {$res->result}
</div>
{/if}
    </div>
	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="./Contact us - Progressus Bootstrap template_files/jquery.min.js.pobrane"></script>
	<script src="./Contact us - Progressus Bootstrap template_files/bootstrap.min.js.pobrane"></script>
	<script src="./Contact us - Progressus Bootstrap template_files/headroom.min.js.pobrane"></script>
	<script src="./Contact us - Progressus Bootstrap template_files/jQuery.headroom.min.js.pobrane"></script>
	<script src="./Contact us - Progressus Bootstrap template_files/template.js.pobrane"></script>
{/block}