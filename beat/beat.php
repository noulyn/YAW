<!DOCTYPE html> 
<html> 
	<head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
		<title>Home</title> 
        <style>
                
        @keyframes bounceIn1 
        {
        0%   
            {
            transform: scale(1);
            opacity: 0.1;
            }
        25%
            {
            transform: scale(1.4);
            opacity: 0.9;
            }
        100% 
            {
            transform: scale(1);
            opacity: 0.1;
            }
        }
        @keyframes bounceIn2 
        {
        0%   
            {
            transform: scale(1);
            opacity: 0.1;
            }
        50%
            {
            transform: scale(1.4);
            opacity: 0.9;
            }
        100% 
            {
            transform: scale(1);
            opacity: 0.1;
            }
        }
        @keyframes bounceIn3 
        {
        0%   
            {
            transform: scale(1);
            opacity: 0.1;
            }
        75%
            {
            transform: scale(1.4);
            opacity: 0.8;
            }
        100% 
            {
            transform: scale(1);
            opacity: 0.1;
            }
        }
        @keyframes spin 
        {
        0%{transform:rotate(0deg);
            opacity: 0;}
        25%{transform:rotate(0deg);
            opacity: 0;}
        50%{transform:rotate(0deg);
            opacity:0;}
        60%{transform:rotate(360deg);
            opacity: 1;}
        95%{transform:rotate(360deg);
            opacity: 1;}
        100%{transform:rotate(0deg);
            opacity: 0;}
        }

        @keyframes spincircle1
        {
        0%{transform:rotate(0deg);
            opacity: 1;}

        100%{transform:rotate(360deg);
            opacity: 1;}
        }
        @keyframes spincircle2
        {
        10%{transform:rotate(0deg);
            opacity: 1;}

        100%{transform:rotate(360deg);
            opacity: 1;}
        }
        @keyframes spincircle3
        {
        20%{transform:rotate(0deg);
            opacity: 1;}

        100%{transform:rotate(360deg);
            opacity: 1;}
        }

            @keyframes spintriangle1
        {
        0%{transform:rotate(0deg);
            opacity: 0.2;
            transform: scale(1);}
        
        50%{transform:rotate(360deg);
            opacity: 0.75;
            transform: scale(1.4);}    

        100%{transform:rotate(0deg);
            opacity: 1;
            transform: scale(1);}
        }
        @keyframes spintriangle2
        {
        10%{transform:rotate(0deg);
            opacity: 0.3;
            transform: scale(1);}

        50%{transform:rotate(360deg);
            opacity: 0.75;
            transform: scale(1.4);}   

        100%{transform:rotate(0deg) scale(1);
            opacity: 1;}
        }
        @keyframes spintriangle3
        {
        20%{transform:rotate(0deg);
            opacity: 0.4;}

        50%{transform: scale(1);
            transform: rotate(360deg);
            opacity: 0.6;}    
        
        100%{transform:rotate(360deg);
            opacity: 1;}
        }


        .bouncers{
            opacity: 0.2;
            height: 250px;
            width: 250px;
        }
        #b1{
            z-index: 90;
            position: absolute; 
            animation: bounceIn1 8s 100;
        }
        #b2{
            z-index: 100;  
            position: absolute;
            animation: bounceIn2 8s 100;
        }
        #b3{
            z-index: 110;  
            position: absolute;
            animation: bounceIn3 8s 100;
        }
        #square{
            z-index: 120;  
            position: absolute;
            animation: spin 8s 100;
            text-align: center;
            padding-left: auto;
            padding-right: auto;
        }
        .mainbox{
            height: 250px;
            width: 250px;
            float:left;
            background-color: lightgrey;
            border: black solid;
        }
        #c1{
            z-index: 90;  
            position: absolute;
            animation: spincircle1 8s 100;
        }
        #c2{
            z-index: 100;  
            position: absolute;
            animation: spincircle2 8s 100;
        }
        #c3{
            z-index: 110;  
            position: absolute;
            animation: spincircle3 8s 100;
        }
        #circle
        {
            z-index: 120;  
            position: absolute;
            animation: bounceIn2 8s 100;
            animation: spin 8s 100;
        }

        #triangle
        {
            z-index: 120;  
            position: absolute;
            animation: bounceIn2 8s 100;
            animation: spin 8s 100;
        }

        .moveTri{
            opacity: 0.2;
            height: 250px;
            width: 250px;
            position: absolute;
        }

        #t1
        {
            animation: spintriangle3 8s 100;
        }
        #t2
        {
            animation: spintriangle2 8s 100;
        }
        #t3
        {
            animation: spintriangle1 8s 100;
        }  
        </style>
	</head> 	
	<body>
        <div class="main">
            <div class="mainbox">
                <img class="bouncers" id="square" src="square2.png"/>

                <img class="bouncers"  id="b1" src="beat_1.png"/>
                <img class="bouncers"  id="b2" src="beat_2.png"/>
                <img class="bouncers"  id="b3" src="beat_3.png"/>
            </div>
            <div class="mainbox">
            <img class="bouncers" id="circle" src="circle.png"/>

                <img class="bouncers"  id="c1" src="circle_1.png"/>
                <img class="bouncers"  id="c2" src="circle_2.png"/>
                <img class="bouncers"  id="c3" src="circle_3.png"/>
            </div>
            <div class="mainbox">
                <img class="bouncers" id="triangle" src="triangle1.png"/>

                <img class="moveTri" id="t1" src="triangle_1.png"/> 
                <img class="moveTri" id="t2" src="triangle_2.png"/>
                <img class="moveTri" id="t3" src="triangle_3.png"/>
            </div>
        </div>
        <div id="logo">				
        </div>
	</body>
</html>

