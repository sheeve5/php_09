{extends file="main.tpl"}

{block name=footer}Ta część stopki została wpisana z drugiego szablonu{/block}

{block name=content}
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
{foreach $people as $p}
{strip}
	<tr>
		<td>{$p["amount"]}</td>
		<td>{$p["years"]}</td>
		<td>{$p["intrest"]}</td>
		<td>{$p["result"]}</td>
                <td>
                    <a class="btn btn-action btn-sm" href="{$conf->action_url}recordDelete&id={$p['id']}">Usun</a>
 
                </td>
	</tr>
{/strip}
{/foreach}
</tbody>
</table>

	
    </article>
	</div>	<!-- /container -->

{/block}