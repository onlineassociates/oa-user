pimcore.registerNS("pimcore.plugin.oaUser");

pimcore.plugin.oaUser = Class.create(pimcore.plugin.admin, {
    getClassName: function() {
        return "pimcore.plugin.oaUser";
    },

    initialize: function() {
        pimcore.plugin.broker.registerPlugin(this);
    },

    pimcoreReady: function (params,broker){
        // alert("Example Ready!");
    }
});

var oaUser = new pimcore.plugin.oaUser();

