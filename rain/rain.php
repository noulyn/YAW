<!DOCTYPE html> 
<html> 
	<head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
		<title>rain</title> 
        <style>
        body
        {
            background-color: #00bbff;
            width: 100%;
        }
        html
        {
            width: 100%;
        }


        @keyframes bounceIn 
        {
        0%   {
             animation-direction:
             }
        100% {
             transform: scale(1);
             }
        }
        .drop   {
                animation: bounceIn 2s;
                }
        .ground {
                background-color: #000000;
                height: 180px;
                width: 100%;
                position: absolute;
                bottom: 0;
                left: 0;
                z-index: 60;
                }
        .hill   {
                width: 0; 
                height: 0; 
                border-left: 0px solid transparent;
                border-right: 600px solid transparent;
                bottom: 0;
                border-bottom: 600px solid black;
                margin-bottom: 0px;
                position: absolute;
                left: 0px;
                z-index: 55;
                }
        .cablecar   {
                    margin-left: 95px;
                    width: 40px;
                    height: 20px;
                    transform: rotate(45deg);
                    z-index: 56;
                    }
        @keyframes upNdown {
                        0%      {
                                left: 0;
                                top: 0;
                                }
                        50%     {
                                left: 280px;
                                top: 280px;
                                }
                        100%    {
                                left: 0;
                                top: 0;
                                }
                        }
        #cablecar  {
                animation: upNdown 8s 10;
                animation-delay: 0s, 10s;
                position: relative;
                }
        #houses {
                position: absolute;
                padding-left: 420px;
                z-index: 50;
                bottom: 180px;
                }
        #clouds {
                position: relative;
                top: 0;
                z-index:80;
                left: 0;
                top: 0;
                width: 100%;
                }
                img{border:0;}
        </style>
	</head> 
	
	<body>
        <div class="drop">

        </div>
           
        <div class="cablecar" id="cablecar">
            <img src="cablecar.png"/>
        </div>

        <div class="hill">

        </div>
        <img id="clouds" src="clouds3.png"/> 
        <img id="houses" src="houses.png"/>

        <div class="ground">
        </div>   

	</body>

</html>

