
var TempRouter = window.Backbone.Router.extend(

    (function() {

        var pageView = new PageView({
            model: new PageModel()
        });

        return {

            routes: {
            "home": "home",    
            "js": "js", 
            "php": "php", 
            "java": "java",
            "*actions": "defaultRoute"
            },

            home: function () {
                pageView.model.url = "./ressource/home.json";
                pageView.page = "#home";
                pageView.update();
                console.log("route de home");
            },

            js: function () {
                pageView.model.url = "./ressource/js.json";
                console.log("route de js");
            },
            php: function () {
                pageView.model.url = "./ressource/php.json";
                console.log("route de php");
            },
            java: function () {
                pageView.model.url = "./ressource/java.json";
                console.log("route de java");
            },

            defaultRoute: function () {
                this.home();   
            }
        };

    })()

);