{if count($aSite)>0}
<strong>{$aSite.name}</strong>
<br />
<small>{$aSite.ver}</small>
<a href="{$aSite.url}" title="{$aSite.name}"><img src="{$aSite.img}" alt="{$aSite.name}" width="{$aSite.width}" height="{$aSite.height}" /></a>
{else}
    {$aLang.plugin.modxsite.errorload}
{/if}