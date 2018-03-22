<!DOCTYPE html> 
<html> 
	<head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
		<title>Home</title> 
        <style>
            body
            {

                background-image: url("abs.jpg");
                /* Full height */
                height: 100%; 

                /* Center and scale the image nicely */
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
            }
        </style>
        <script src="https://code.jquery.com/jquery-latest.js"></script>
	</head> 
	
	<body>
        <img style="width: 100%;" id="intro" src="intro.png"/>
    </body>
    <script>
        
        $(document).ready(function(){
        
        if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
            $("#intro").attr('src','introhd.png');
        }
        else{
            $("#intro").attr('src','intro.png');
        }
        
        
        $("img").click(function(){
            $("#intro").fadeToggle(2000);
            $("#mainshow").show();
        });
    


    });



    </script>

</html>