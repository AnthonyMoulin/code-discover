
var PageView = window.Backbone.View.extend({
   
   template: _.template($("#title-template").html()),  
   
    initialize: function(){
        this.model.bind("change", this.render, this);
    },

    update: function () {
      this.model.fetch({
            method: "GET",
            success: function (){
                console.log("page model updated");

            },
            error: function () {
                console.log("page model not updated");
            }
        });
    },

    render: function () {
    	console.log("render");
      $(this.page + " div[data-role=header]").html(
              this.template(this.model.attributes)
      );
    }
    
});

