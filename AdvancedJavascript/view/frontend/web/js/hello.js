define([
    'uiComponent'
], function (Component) {
    'use strict';

    return Component.extend({
        initialize: function () {
            this._super();
            this.randomNumber = Math.random();
        }
    });
});
