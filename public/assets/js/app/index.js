

$(document).on("mobileinit", function(){
    
    if(!$.panel) {
        $.panel = $.mobile.panel;
    }
   
    $.panel.prototype.options.theme = "b";
        
// Empêche l'initialisation des pages
    $.mobile.autoInitializePage = false;
    $.mobile.defaultPageTransition = "fade";

// console.log("initialisation");
});
     
$(function (){ 
   new TempRouter();
   window.Backbone.history.start();
   $.mobile.initializePage();
   $("#qux").panel();
});    