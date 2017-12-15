define([
    'jquery',
    'ko',
    'uiComponent'
], function ($, ko, Component) {
    'use strict';

    return Component.extend({
        defaults: {
            template: 'OuterEdge_Deliveryinstructions/delivery-instructions-block'
        },
        initialize: function () {
            this._super();
            return this;
        }
    });
});
