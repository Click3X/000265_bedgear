define([
  'backbone',
  'collections/page_collection',
  'pages/home_view',
  'pages/work_view',
  'pages/about_view',
  'pages/people_view',
  'pages/project_view',
  'modules/navigation/views/navigation_view'
], function (Backbone, PageCollection, HomeView, WorkView, AboutView, PeopleView, ProjectView, NavigationView){
  var Router   = Backbone.Router.extend({
    initialize:function(){
      var _t = this;

      _t.page_collection = new PageCollection();
      
      _t.page_views = [   
        new HomeView({collection:_t.page_collection}),
        new WorkView({collection:_t.page_collection}),
        new AboutView({collection:_t.page_collection}),
        new PeopleView({collection:_t.page_collection}),
        new ProjectView({collection:_t.page_collection})
      ];

      $("#logo a").click(function(event){
        event.preventDefault();
        router.navigate("home",true);
      })

      /** ===== BUILD NAVIGATIONS ===== **/
      _t.navigations = [];
      $(".cfm-navigation").each(function(i, _el){
        var navigation = new NavigationView({
          id:_el.getAttribute("id"), 
          el:_el,
          page_collection:_t.page_collection
        });

        _t.navigations.push(navigation);
      });

      this.start();
    },
    start:function(){
      Backbone.history.start( {pushState: pushstate ? true : false, hashChange:true, silent:false, root:root_dir} );
    },
    routes: {
      ':pageid'   : 'onchangepage',
      '*actions'  : 'onchangepage'
    },
    onchangepage:function(_pageid){
      !_pageid ? _pageid = "home" : null;

      this.page_collection.activatePageById( _pageid );

      if( firstpage ) firstpage = false;
    }
  });

  return Router;
});