<script type="text/javascript" src="{$aTemplateWebPathPlugin.modxsite}js/modxsite.js"></script>

<section class="block block-type-modxsite">
    <header class="block-header sep">
        <h3>{$aLang.plugin.modxsite.title}</h3>

        <div class="block-update js-block-modxsite-update"></div>

        <ul class="nav nav-pills js-block-modxsite-nav">
            <li class="active js-block-modxsite-item" data-type="evo"><a href="#">{$aLang.plugin.modxsite.evo}</a></li>
            <li class="js-block-modxsite-item" data-type="revo"><a href="#">{$aLang.plugin.modxsite.revo}</a></li>
        </ul>
    </header>

    <div class="block-content">
        <div class="js-block-modxsite-content" data-type="evo">{$aLang.plugin.modxsite.load} {$aLang.plugin.modxsite.evo}</div>
        <div class="js-block-modxsite-content" data-type="revo" style="display: none;">{$aLang.plugin.modxsite.load} {$aLang.plugin.modxsite.revo}</div>
    </div>
    <footer>
        <a href="http://on-modx.ru" target="_blank" title="{$aLang.plugin.modxsite.allsite}">{$aLang.plugin.modxsite.allsite}</a><br />
        <a href="http://on-modx.ru/catalog/add-site" target="_blank" title="{$aLang.plugin.modxsite.addsite}">{$aLang.plugin.modxsite.addsite}</a>
    </footer>
</section>