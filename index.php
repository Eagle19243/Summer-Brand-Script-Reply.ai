<html>
<head>
<title>Summer Brand Script Test</title>
</head>
<body>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.js"></script>
    <script src="js/scripts.js"></script>
    
    <script type="text/javascript">
        var widgetSettings = {
            channelUuid: "378e1750-d90a-4042-9e1a-91f51aa03260",
            style: "fullpage", // "fixed", "embed" or "fullpage". Open the sample page for all the configuration paramaters
            welcomeMessage : {
                text : "Hi, I'm the Summer Brand Script Bot! Let's find the perfect one for you!\nWhat do you want?",
                buttons:[
                    {
                        type :"postback",
                        title : "Cycling",
                        payload: "summer_brand_script_cycling_start"
                    },
                    {
                        type :"postback",
                        title : "Running",
                        payload: "summer_brand_script_running_start"
                    }
                ]
            },
        };
        window.replySDK = (function(d, s, id) {
            var o = window.replySDK || {};var js,
            fjs = d.getElementsByTagName(s)[0];if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "https://d1fidecqhnmd5.cloudfront.net/prod/v1.3.1/dist/js/reply-sdk.js";
            fjs.parentNode.insertBefore(js, fjs);
            o.isLoaded=false;o._e = [];o.load = function(f) { o._e.push(f);};
            js.onload = function () { replySDK.init( widgetSettings ); };return o;
        }(document, 'script', 'reply-sdk-js'));
    </script>

    <script type="text/javascript">
        replySDK.load(function () {
            $(".Close").click(function(){
                replySDK.close();
            });
            $(".Open").click(function(){
                replySDK.open();
            });
            $(".Hide").click(function(){
                replySDK.hide();
            });
            $(".Show").click(function(){
                replySDK.show();
            });
            
            replySDK.on("message:received", function(message){
                console.log("on message:received", message);
            });

            replySDK.on("message:sent", function(message){
                console.log("on message:sent", message);
            });

            replySDK.on("widget:shown", function(){
                console.log("on widget:shown");
            });
            
            replySDK.on("widget:hidden", function(){
                console.log("on widget:hidden");
            });
            
            replySDK.on("widget:opened", function(){
                console.log("on widget:opened");
            });
            
            replySDK.on("widget:closed", function(){
                console.log("on widget:closed");
            });         
        });
    </script>
</body>
</html>