{include file="header.tpl"}

{include file="umpires.tpl"}

<!-- lista de arbitros -->
<ul class="list-group">
    {foreach from=$umpires item=$umpire}
        <li class='list-group-item d-flex justify-content-between align-items-center'>
            <span> <b>{$umpire->nombre}</b> - {$umpire->asociacion} - {$umpire->region} </span>
          
        </li>
    {/foreach}
</ul>

<p class="mt-3"><small>Mostrando arbitros disponibles</small></p>

{include file="footer.tpl"}
