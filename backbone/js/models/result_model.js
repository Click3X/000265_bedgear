define([
  'backbone',
], function (Backbone) {

    var ResultModel = Backbone.Model.extend({
        urlRoot: API_PATH+'result',
        defaults: {
            bitTotal:0,
            arrAnswers:[],
            data:[],
            sessionId:"",
        },
        initialize: function(){
            //this.set('id',this.get('bitTotal'));
        },

    });

    return ResultModel;
});
