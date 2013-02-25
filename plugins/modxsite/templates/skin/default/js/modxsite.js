jQuery(document).ready(function($){
    if (ls.blocks) {
        ls.blocks.options.type.modxsite_revo={url: aRouter['ajax']+'modxsite/revo/'}
        ls.blocks.options.type.modxsite_evo={url: aRouter['ajax']+'modxsite/evo/'}

        var siteBlock = ls.blocks.getCurrentItem('modxsite');
        ls.blocks.load(siteBlock,'modxsite');
        $(".js-block-modxsite-item").click(function(){
            ls.blocks.load(this,'modxsite');
        });

        $(".js-block-modxsite-update").click(function(){
            ls.blocks.load(siteBlock,'modxsite');
        });
    }
});

