<?php
function mywebhead()
{?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>5NANO2024</title>
  
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Nano Technology Conference ">
  <meta name="keywords" content="International Conference, 2024 International Conference,Nano,Nano Technology, Nano Electronics, Nano photonics, Nano materials, Nano bioscience, Nanotech, 2024, 2024 conference, engineering,  ELSEVIER, 5nano2024, AI, Aritificial Intelligence">
  
 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel = "stylesheet" type="text/css" href="./CSS/confstyle96.css">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script language="JavaScript">
//$(".hideAll").fadeOut();

/*
title = " ** 5NANO2024 ** ";
   position = 0;
   
function scrolltitle() {
    document.title = title.substring(position, title.length) + title.substring(0, position); 
    position++;
    if (position > title.length) position = 0;
    titleScroll = window.setTimeout(scrolltitle,170);
}
scrolltitle();
*/

  function init ( )
{
    alert("hi");
  timeDisplay = document.createTextNode ( "" );
  document.getElementById("clock").appendChild ( timeDisplay );
}

function updateClock ( )
{
  var currentTime = new Date ( );

  var currentHours = currentTime.getHours ( );
  var currentMinutes = currentTime.getMinutes ( );
  var currentSeconds = currentTime.getSeconds ( );

  // Pad the minutes and seconds with leading zeros, if required
  currentMinutes = ( currentMinutes < 10 ? "0" : "" ) + currentMinutes;
  currentSeconds = ( currentSeconds < 10 ? "0" : "" ) + currentSeconds;

  // Choose either "AM" or "PM" as appropriate
  var timeOfDay = ( currentHours < 12 ) ? "AM" : "PM";

  // Convert the hours component to 12-hour format if needed
  currentHours = ( currentHours > 12 ) ? currentHours - 12 : currentHours;

  // Convert an hours component of "0" to "12"
  currentHours = ( currentHours == 0 ) ? 12 : currentHours;

  // Compose the string for display
  var currentTimeString = currentHours + ":" + currentMinutes + ":" + currentSeconds + " " + timeOfDay;

  // Update the time display
  document.getElementById("clock").firstChild.nodeValue = currentTimeString;
}



      var deadline = new Date("Apr 25, 2024 08:30:25").getTime(); 
        var x = setInterval(function() { 
        var now = new Date().getTime(); 
        var t = deadline - now; 
        var days = Math.floor(t / (1000 * 60 * 60 * 24)); 
        var hours = Math.floor((t%(1000 * 60 * 60 * 24))/(1000 * 60 * 60)); 
        var minutes = Math.floor((t % (1000 * 60 * 60)) / (1000 * 60)); 
        var seconds = Math.floor((t % (1000 * 60)) / 1000); 
        document.getElementById("countdown").innerHTML = "Conference Countdown: "+days + " Days "  
        + hours + " Hours  " + minutes + "  Minutes " + seconds + "  Seconds."; 
        if (t < 0) { 
            clearInterval(x); 
            document.getElementById("countdown").innerHTML = "EXPIRED"; 
    } 
}, 1000); 
      
 
   //document.getElementById("hideAll").style.display = "block";
 
 
 function unmask ( ) 
  {   
      //document.getElementById("hideAll").style.display = "none";
      //alert("hi");
       $(".hideAll").fadeOut("slow");
  }
  </script>
 

  
  <style>
  
.watermark {
  width: 100%;
  height: 100%;
  display: block;
  position: relative;
}

.watermark::after {
  color:black;
  font-size:0.35em;
  
  overflow:hidden;
  opacity: .2;
  
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  position: absolute;
  z-index: 1;   
}
  
  #hideAll
 {
   position: fixed;
   left: 0px; 
   right: 0px; 
   top: 0px; 
   bottom: 0px; 
   /*background-color: #000080;*/
   
   background: #000080;
  background: -webkit-linear-gradient(#000099, #000010);
  background:    -moz-linear-gradient(#000099, #000010);
  background:         linear-gradient(#000099, #000010);
  
   border-radius: 20px;
   z-index: 99; /* Higher than anything else in the document */

 }
 
    .testdiv
        {
           
           
   
           
           background-color: #85FFBD;
background-image: linear-gradient(45deg, #85FFBD 0%, #FFFB7D 100%);

           /*
            background-color: #182b3a;
background-image: linear-gradient(315deg, #182b3a 0%, #20a4f3 74%);

            
         /*   background-color: #045de9;
background-image: linear-gradient(315deg, #045de9 0%, #09c6f9 74%);
            /*
            background-color: #7f53ac;
background-image: linear-gradient(315deg, #7f53ac 0%, #647dee 74%);
            
           /* background-color: #d4418e;
background-image: linear-gradient(315deg, #d4418e 0%, #0652c5 74%);
            /*
              background: #000080;
  background: -webkit-linear-gradient(#000099, #000010);
  background:    -moz-linear-gradient(#000099, #000010);
  background:         linear-gradient(#000099, #000010);
  
  /*
  background-image: url("images/repeat.png");
  background-repeat: round;
  background-size: 2px; 
  background-color: #000089; 
  */
        border:1pt solid red;
  }
   
   /*.mtestdiv
            { 
  background-image: url("images/Conf-logo.jpg");
  background-repeat: repeat;
  
  background-size: 500px 500px; 
  background-color:#FFFFFF;
        border:1pt solid red;
            }
            
     */         
   .mtestdiv
               { 
                   
                   
                   background-color: #85FFBD;
background-image: linear-gradient(45deg, #85FFBD 0%, #FFFB7D 100%);
/*
                   
                   background-color: #182b3a;
background-image: linear-gradient(315deg, #182b3a 0%, #20a4f3 74%);

                /*
                background-color: #045de9;
background-image: linear-gradient(315deg, #045de9 0%, #09c6f9 74%);
            /*    
                background-color: #7f53ac;
background-image: linear-gradient(315deg, #7f53ac 0%, #647dee 74%);
/*
                background-color: #d4418e;
background-image: linear-gradient(315deg, #d4418e 0%, #0652c5 74%);
            /*
              background: #000090;
  background: -webkit-linear-gradient(#000066, #000010);
  background:    -moz-linear-gradient(#000066, #000010);
  background:         linear-gradient(#000066, #000010);
  
  /*
            background-image:  url("images/repeat.png");
            background-repeat: round;
            background-size:  2px; 
            background-color:#000088;
            */
            border:1pt solid red;
            }
            
       .bg1
        {
              /*background-color:#428bca;  #42ca98 
        background-color:#FFFFF;*/
        border:1pt solid red;
        }
        
        .bg2
        {
        background-color:#ffffff;
        border:1pt solid red;
        }
        
        
        
        .dropdown-toggle
          {
         

         font-size:1.5em;
         font-style: italic;
	     font-weight: bold;
         font-family:Garamond;
        

    	color: #39FF14;
    	border-color:#FFF;
        border-width:1pt;	
        border-style:solid;
        }

        
        
         .dropdown-menu 
        {
         
        /* color: #009000;
         border:1pt solid red;
         font-size:1.5em;
         font-style: italic;
	     font-weight: bold;
         font-family:Garamond;*/
    background-color=yellow;
    font-family: Garmond;
    font-style: italic;
	font-weight: bold;
	font-size:1.5em;
	text-decoration: none;
	color: red;
	border-color:red;
    border-width:1pt;	
    border-style:solid;
    z-index:1000;
}
        }
        
        
        
        
        .h4l
        {
        text-indent:0em; 
        text-align:left;    
        }
        .h4r
        {
        text-indent:0em; 
        text-align:right; 
        font-weight:bold;
        }
        
       
        
        .whitediv
        {
         background-color: #FFFFFF;
         border:1pt solid red;
         
        }
        
        .inactiveLink {
   pointer-events: none;
   cursor: default;
}


.img1
          {
        box-shadow: 0 4px 8px 0 rgba(255, 255, 255, 0.2), 0 6px 20px 0 rgba(255, 255, 255, .75);
          }
          
        
          
          .img2
          {
        box-shadow: 0px 0px 3px 0 rgba(0, 0, 80, 0.2), 0px 15px 15px 0 rgba(0, 0, 99, 1);
          }
          
          
          
          
        .ts
          {text-shadow: 2px 2px 5px grey;
              
          }
          
         
          
          
          
          
  </style>
  
</head>
     <!--<body onload="updateClock(); setInterval('updateClock()', 1000 ); setTimeout(unmask(), 1); "> -->
     <body onload="setTimeout(unmask(), 1); "> 
         
        
           <div class="watermark col-lg-12 col-md-12 col-sm-12 col-xs-12 testdiv bg1">
               
          
           
<!--hidden images to be visible in mobile --> 
               <div class="hidden-lg hidden-md col-sm-12 col-xs-12  " style=" valign:middle;" >
                
                  <center><br>
                 
                  <img class="bg1 img1" src="images\Conf-logo.webp" width=125 em height=125 em style="border-radius: 25px;">
                  </center>
              </div>
              <div class="hidden-lg hidden-md  col-sm-12 col-xs-12" style=" valign:middle; ">
            
          
                    <!--<div class="confname" style= "text-align:center; font-size:1.75em;"> 5NANO2021
                    </div>-->
                    <div  class="confname " style= "text-align:center; font-size:1.75em;" >
			            2024  International Conference on Nanoelectronics, Nanophotonics, Nanomaterials, Nanobioscience & Nanotechnology (5NANO 2024)    
			         </div>
			         <div class="confname ts" style= "text-align:right; font-size: 1em;" >
			         - platform for researchers
			         </div>
			 </div> 
			 
			  <div   class="hidden-lg hidden-md col-sm-12 col-xs-12  " style=" valign:middle;" >
			      <!-- <div align="center" class="confaddr" style= "font-size: 1em;">Sponsored by
			       </div>
			        
			       <div align="center" class="clgname" style= "font-size: 1em;">AICTE<br>
			      </div>
			       <img class="bg1" src="images\AICTE.webp" width=25% height=25% style="border-radius: 25px;">
                  </center>
			      
			       <div align="center" class="confaddr" style= "font-size: 1em;">Technically Cosponsored by
			       </div>
			       
			       
			       <div align="center" class="clgname" style= "font-size: 1em;">IEEE Photonics Society, USA <br>
			      </div>
			     
			  <div align="center" class="confaddr" style= "font-size: 1em;">In collaboration with 
			       </div>
			       
			       
			       <div align="center" class="clgname" style= "font-size: 1em;">MSME Technology Development Centre,PPDC, Agra,<br> Ministry of Micro, Small & Medium Enterprises(MSME), Govt. of India<br>
			      </div>
			     
			   
			 
			  <div align="center" class="confaddr" style= "font-size: 1em;"><br>Hosted by
			       </div>
			   
 
                
			    
	    	     
	    	     -->
	    	      <div align="center" class="clgname" style="font-size: 1em;">
	    	        <!-- IEEE Photonics Society Student Chapter <br><br> -->
	    	     
	    	         <img  class="bg1 img1" src="images\visat.webp" width=125 em height=125 em style="border-radius: 25px;"> <br> 
			       <address>  VISAT Engineering College <br>
Elanji, Ernakulam, Kerala, India - 686 665.</address>
			      </div>
			      <br>
     		       <div align="center" class="confaddr" style="font-size: 1em;"> 25<sup>th</sup> & 26<sup>th</sup> April, 2024.
     		       </div> 
              
            
                  <div class="col-lg-12 col-md-12 hidden-sm hidden-xs testdiv" >
        <center> <br>
          <!-- <img class="bg1 img1" src="images/PPDC.jpg" width="120em" height="200em"   style="border-radius: 5px;">
          
          <!--<img class="bg1 img1" src="images/DC.jpg" width="60em"  style="border-radius: 5px;">
          <img class="bg1 img1" src="images/IEEE.png" width="60em"  style="border-radius: 15px;">
          <img class="bg1 img1" src="images/IEEE Photonics new.jpg" width="120px" height="60px" style="border-radius: 5px;">
          <img class="bg1 img1" src="images/Elseiver.jpg" width="50px"  height="60px" style="border-radius: 2px;">
          <img class="bg1 img1" src="images/springer.png" width="70px" height="60px" style="border-radius: 15px;">
          <img class="bg1 img1" src="images/Taylor & francis.png" width="210px" height="60px" style="border-radius: 5px;">
          <img class="bg1 img1" src="images/IAHE Logo.jpg" width="60px" height="60px" style="border-radius: 2px;">
          <img class="bg1 img1" src="images/IJHE Logo.jpg" width="60px"  height="60px" style="border-radius: 2px;">
          </center>
          <br>
        -->
        </div>  
              
              
              </div>
            
              
 <!--Regular header starts --> 
               <!--  <div class="watermark" >
                
                     <script>
                    for(let i=1;i<100;i++)
                   { document.write("5NANO2023 ");
                   
                   }
                  </script>
                  
                  
                  
                 </div>-->
                 
                 
              <div class="col-lg-2 col-md-2 hidden-sm hidden-xs  " style="valign:middle;" >
                  <center><br>
                  <br>
                  <img class="bg1 img1" src="images\Conf-logo.webp" width="200em" height="200 em" style="border-radius: 25px;">
                  </center>
              </div>
            
               <div class="col-lg-8 col-md-8 hidden-sm hidden-xs" style=" valign:middle; ">
                 
                 
                 
                 
                 
                 
             
                    <div class="confname " style= "text-align:center; font-size: 2em;"> 5NANO2024
                    </div>
                    <div  class="confname " style= "text-align:center; font-size:1.75em;" >
			           2024 International Conference on Nanoelectronics, Nanophotonics, Nanomaterials, Nanobioscience & Nanotechnology (5NANO 2024)   
			         </div>
			         
			         <div class="confname" style= "text-align:right; font-size: 1.25em;" >
			         - platform for researchers
			         </div>
			         
			        <!--
			         <div align="center" class="confaddr" style= "font-size: 1em;">Technically Cosponsored by
			       </div>
			       
			       
			       <div align="center" class="clgname" style= "font-size: 1em;">IEEE Photonics Society, USA <br>
			      </div>
			      
			       <!--   <div align="center" class="confaddr" style= "font-size: 1em;"><br>In collaboration with 
			       </div>
			       
			       
			       <div align="center" class="clgname" style= "font-size: 1em;">MSME Technology Development Centre,PPDC, Agra,<br> Ministry of Micro, Small & Medium Enterprises(MSME), Govt. of India
			      </div>
			     
			       
           		   <div align="center" class="confaddr" style= "font-size: 1em;"><br>Hosted by
			       </div>
			     
 <!--
                  <div align="center" class="clgname" style="font-size: 1em;">
	    	          IEEE Photonics Society Student Chapter <br>
	    	      </div>    
	 -->   	      
	    	      
	    	     
	    	      
	    	      <div align="center" class="clgname" style="font-size: 1.25em;">
			         VISAT Engineering College<br> 
			     </div>
			     <div align="center" class="clgname" style="font-size: 1em;">
			         Elanji, Ernakulam, Kerala, India - 686 665.
			      </div>
			      
			      <br>
     		       <div align="center" class="confaddr" style="font-size: 1.25em;">  25<sup>th</sup> & 26<sup>th</sup> April, 2024
     		       <br> 
			       </div> 			
			      
              </div> 
              <div class="col-lg-2 col-md-2 hidden-sm hidden-xs" style=" valign:middle;  align:center;">
                  <center><br><br>
                 <img class="bg1 img1" src="images/visat.webp" width="200 em" height="200 em" style="border-radius: 25px;">
                 </center>
              </div>
        </div> 
<!--header over-->
        
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bg2 watermark">
                <div  class=" downloadlink col-lg-3 col-md-3 hidden-sm hidden-xs">
                    <!--<span id="clock">Display time</span>--> 
                    &nbsp;
        	    </div>
                
             <!--  <div id="countdown" class="downloadlink col-lg-6 col-md-6 col-sm-12 col-xs-12" style="text-align:center">
        	               </div> -->
        	               
        	 <div class= "col-lg-6 col-md-6 col-sm-12 col-xs-12" style="text-align:center">
        	   
        	  <script src="https://cdn.logwork.com/widget/countdown.js">
        	      
        	  </script>
              <a  href="https://logwork.com/countdown-2ajo" class="countdown-timer inactiveLink bg1 img2" data-timezone="Asia/Kolkata" data-date="2024-04-25 09:00">&nbsp;</a>
              
            </div>
                
                <!--Marquee-->
                 
                     <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <!--
                     <marquee onmouseover="this.setAttribute('scrollamount', 0, 0);" onmouseout="this        .seAttribute('scrollamount', 2, 0);">
                       <img src="regformnew.gif" alt="New" height="25" width="35">
                  	                <a href="importantdates.php#main" class="downloadlink" >
                  	                    Submission Deadline Extended
                  	                 </a>
                  	                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  	                
                  	                <img src="regformnew.gif" alt="New" height="25" width="35">
                  	                <a href="publications.php#main" class="downloadlink" >
                  	                    Important Announcement
                  	                 </a>
                  	                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  	                <!-- 
                  	                  
                  	                  <img src="regformnew.gif" alt="New" height="25" width="35">
                  	                  <a href="quiz/covid19.php" class="downloadlink" >
                  	                 Test Your Knowledge of Corona Virus
                  	                 </a>
                  	                 -->
                  	                
                  	                 
                  	                 <!--
                  	                 <a href="downloads/registrationform.doc" class="downloadlink" target="_blank">
                  	                    Registration Form
                  	                 </a>
                  	                 
                  	                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  	                 <a href="schedule.php#main" class="downloadlink"> <img src="icon-comingsoon.gif" width="35">
                  	                  Schedule </a>
                  	                  
                  	                   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  	                   
                  	                 <a href="downloads/DeviceModelingSeminar.pdf" class="downloadlink"> 
                  	                  Preconference Seminar </a>
                  	                  
                  	                  
              	                 </marquee>
              	                 -->
                </div>
        </div>
        
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mtestdiv "   >
        
        <!--white space-->
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">&nbsp;
        </div>    
        
        
         <!--mobile menu bar  -->
             
        <div id='mmenu' class="dropdown hidden-lg hidden-md col-sm-12 col-xs-12 ">
          <button class="btn btn-primary btn-block  dropdown-toggle  glyphicon glyphicon-menu-hamburger " type="button" data-toggle="dropdown"> Menu
            <span class="caret"></span></button>
            <ul class="dropdown-menu col-sm-12 col-xs-12">
                <li><a href="index.php#mmenu">Home</a></li>
                <li><a href="committee.php#mmenu"> Committees</a></li>
                <li><a href="importantdates.php#mmenu">  Important Dates</a></li>
                <li><a href="keynote.php#mmenu">  Keynote Speakers</a></li>
                <li><a href="publications.php#mmenu">  Publication</a></li>
                <li><a href="https://www.5nano2022.com">  Previous Conference (5nano2022)</a></li>
                <li><a href="proceedings.php#mmenu">   Proceedings</a></li>
                <li><a href="Registration.php#mmenu">  Registration</a></li>
                <li><a href="downloads/IEEE 5nano2024-registrationform.doc">   Registration Form</a></li>
                <li><a href="submissions.php#mmenu"> Submission</a></li>
                <li><a href="travelgrant.php#mmenu">  Travel Grants</a></li>
                <li><a href="schedule.php#mmenu">  Schedule</a></li>
                <li><a href="visa.php#mmenu">Visa Process</a></li>
                <li><a href="downloads/Accommodation.pdf"> Accommodation</a></li>
                <li><a href="contactus.php#mmenu">Contact Us</a></li>
                <li><a href="location.php#mmenu">Location</a></li>
                <li><a href="reachus.php#mmenu">Reaching Us</a></li>
                <li><a href="https://www.keralatourism.org/districts/kottayam/" target="_blank">Attractions</a></li>
                    
                </ul>
             <br>   
        </div>
        
        
        
         <!--menu bar-->
            <div class="col-lg-2 col-md-2 hidden-sm hidden-xs" > 
           
             <button type="button"  class="col-lg-12 col-md-12 col-sm-12 col-xs-12 btn btn-primary menulink"  onclick="window.location='index.php#main' ">
             Home
             </button>
             
	         <button type="button" class=" col-lg-12 col-md-12 col-sm-12 col-xs-12 btn btn-primary menulink " onclick="window.location='committee.php#main'">
	         Committees
	         </button>
	         
	         <button type="button" class="btn btn-primary btn-block menulink " onclick="window.location='importantdates.php#main'"  >
	         Important Dates
	         </button>
	         
     	     <button type="button" class="btn btn-primary col-lg-12 col-md-12 col-sm-12 col-xs-12 menulink" onclick="window.location='keynote.php#main'" >
     	         Keynote Speakers
     	      </button>
    	               
    	    <button type="button" class="btn btn-primary col-lg-12 col-md-12 col-sm-12 col-xs-12 menulink" onclick="window.location='publications.php#main'" >
    	        Publication
    	        </button>
    	         
    	         <button type="button" class="btn btn-primary col-lg-12 col-md-12 col-sm-12 col-xs-12 menulink"  onclick="window.location='https://www.5nano2022.com'">
    	             Previous Conference <br> (5nano2022)
    	          </button>
    	         
    	         <button type="button" class="btn btn-primary col-lg-12 col-md-12 col-sm-12 col-xs-12 menulink"  onclick="window.location='proceedings.php#main'">
    	             Proceedings
    	          </button>
    	          
    	          <button type="button" class="btn btn-primary col-lg-12 col-md-12 col-sm-12 col-xs-12 menulink"  onclick="window.location='Registration.php#main'">
    	              Registration
    	           </button>
    	           <button type="button" class="btn btn-primary col-lg-12 col-md-12 col-sm-12 col-xs-12 menulink" 
    	                onclick="window.location='downloads/IEEE 5nano2024-registrationform.doc'">
    	           Registration Form
    	           </button>
    	           
    	           <button type="button" class="btn btn-primary col-lg-12 col-md-12 col-sm-12 col-xs-12 menulink"   onclick="window.location='submissions.php#main'">
    	           Submission
    	           </button>
    	           
    	           <button type="button" class="btn btn-primary col-lg-12 col-md-12 col-sm-12 col-xs-12 menulink" 
    	            onclick="window.location='travelgrant.php#main'" >
    	           Travel Grants
    	           </button>
    
    	          <button type="button" class="btn btn-primary col-lg-12 col-md-12 col-sm-12 col-xs-12 menulink" 
    	           onclick="window.location='schedule.php#main'" >
    	            Schedule
    	            </button>
    
    	           
                    <button type="button" class="btn btn-primary col-lg-12 col-md-12 col-sm-12 col-xs-12 menulink"  onclick="window.location='visa.php#main'" >
                    Visa Process
                    </button>
    	                     
    	             <button type="button" class="btn btn-primary col-lg-12 col-md-12 col-sm-12 col-xs-12 menulink"  onclick="window.location='downloads/Accommodation.pdf'">
    	             Accommodation
    	             </button>
    
    	             <button type="button" class="btn btn-primary col-lg-12 col-md-12 col-sm-12 col-xs-12 menulink"  onclick="window.location='contactus.php#main'" >
    	             Contact Us
    	             </button>
    	            
    	             <button type="button" class="btn btn-primary col-lg-12 col-md-12 col-sm-12 col-xs-12 menulink"  onclick="window.location='location.php#main'" >
    	                 Location
    	             </button>
    	                          
    	           <button type="button" class="btn btn-primary col-lg-12 col-md-12 col-sm-12 col-xs-12 menulink"  onclick="window.location='reachus.php#main'" >Reaching Us</button>
    	                           
    	           <button type="button" class="btn btn-primary col-lg-12 col-md-12 col-sm-12 col-xs-12 menulink"  onclick="window.open('https://www.keralatourism.org/districts/kottayam/')"  >Attractions</button>
            
            </div> 
            <!--Main content start div -->
              <div id="main" class="col-lg-10 col-md-10 col-sm-12 col-xs-12" style="border-width:1pt;  border-style: solid; border-color: red; background-color:#ffffff; " >
              
                  
              
               
<?php            
}

function mywebfoot()
{
?>
      
        </div>
        <!--Main content div -->
        <!--Footer content-->
        <!--Main Footer--->
        
        <!--<div class="col-lg-12 col-md-12 hidden-sm hidden-xs testdiv" >-->
        <div class="col-lg-12 col-md-12 hidden-sm hidden-xs testdiv watermark" >
        <center><br>
            <div class="whitediv img1" style="width:30%; border-radius: 5px;">
          <br> 
          <!--
          <img  src="images/IEEE.png" width="120em" height="60em" style="border-radius: 15px;">
          <img  src="images/IEEE Photonics new.jpg" width="120em" height="50em" style="border-radius: 5px;">
         <!-- 
          <img  src="images/MSME.png" width="100em"                 style="border-radius: 5px;">
          <img  src="images/PPDC.jpg" width="60em"                  style="border-radius: 5px;">
          <img  src="images/DC.jpg"   width="60em"                    style="border-radius: 5px;">
          <img  src="images/IEEE.png" width="120em" height="60em" style="border-radius: 15px;">
          <img  src="images/IEEE Photonics new.jpg" width="120em" height="50em" style="border-radius: 5px;">
         
         <img  src="images/Elseiver.jpg" width="50em"  height="60em" style="border-radius: 2px;">
          <img  src="images/springer.png"  height="90em" style="border-radius: 15px;">
          <img  src="images/Taylor & francis.png" width="210em" height="50em" style="border-radius: 5px;">
          <img  src="images/IAHE Logo.jpg" width="60em" height="60em" style="border-radius: 2px;">
          <img  src="images/IJHE Logo.jpg" width="60em"  height="60em" style="border-radius: 2px;">
          -->
          <br> &nbsp;
          </div>
          </center>
          <br>
        </div>  
        
        <!--Mobile Footer--->
         
         <div class="hidden-lg hidden-md col-sm-12 col-xs-12 testdiv watermark" >
           <!-- <div class="  col-lg-1 col-md-1 col-sm-12 col-xs-12 ">    
         <center> <br> <img class="bg1 img1" src="images/MSME.png" width="150 em" height="130 em"  style="border-radius: 5px;"></center>
           </div>  
            <div class="  col-lg-1 col-md-1 col-sm-12 col-xs-12 ">    
         <center> <br> <img class="bg1 img1" src="images/PPDC.jpg" width="150 em"  style="border-radius: 5px;"></center>
           </div>
            <div class="col-lg-1 col-md-1 col-sm-12 col-xs-12 ">    
         <center> <br> <img class="bg1 img1" src="images/DC.jpg" width="150 em"  style="border-radius: 5px;"></center>
           </div>
           
           <div class="col-lg-1 col-md-1 col-sm-12 col-xs-12 ">    
         <center> <br> <img class="bg1 img1" src="images/IEEE Photonics new.jpg" width="150 em" height="90em" style="border-radius: 5px;"></center>
           </div>
            <div class="col-lg-offset-1 col-lg-1 col-md-offset-1 col-md-1 col-sm-12 col-xs-12"> 
          <center>  <br><img class="bg1 img1" src="images/IEEE.png" width="150em" height="75em" style="border-radius: 15px;">
             </div>
            <!--
            <div class=" col-lg-1 col-md-1 col-sm-12 col-xs-12">     
              <center><br>  <img class="bg1 img1" src="images/Elseiver.jpg" width="150em"  height="180 em" style="border-radius: 2px;"></center>
            </div>
            <div class=" col-lg-1 col-md-1 col-sm-12 col-xs-12"> 
    	        <center><br><img class="bg1 img1" src="images/springer.png" width="150em"  height="110 em" style="border-radius: 15px;"></center>
    	    </div>
            <div class="col-lg-2 col-md-1 col-sm-12 col-xs-12"> 
              <center><br>  <img class="bg1 img1" src="images/Taylor & francis.png" width="150em"  height="40 em" style="border-radius: 5px;"></center>
             </div>
            <div class=" col-lg-1  col-md-1  col-sm-12 col-xs-12"> 
                <center><br><img class="bg1 img1" src="images/IAHE Logo.jpg" width="150em"  height="125 em" style="border-radius: 2px;"></center>
             </div>
            <div class="col-lg-1  col-md-1  col-sm-12 col-xs-12"> 
                <center><br><img class="bg1 img1" src="images/IJHE Logo.jpg" width="150em"  height="125 em" style="border-radius: 2px;"></center><br>
            </div>  
            -->
            
            
        </div>  
        
      
        
         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 testdiv watermark">
       <!-- <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 " >
           <center><h3 class="confname">Total page hits<h3>
               
               <div align='center'><a class="bg1 img1" href='https://www.hit-counts.com/'><img src='http://www.hit-counts.com/counter.php?t=MTQ1NzQzOQ==' border='0' alt='0000'></a><BR><a href='https://www.glowgraphics.co.uk/'>&nbsp;</a>
               
               </div>
               </center>
        
        </div>-->
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 " style="overflow: hidden;">
          <center><h3 class="confname"> Flag counter  </h3>
          
          <a href="https://info.flagcounter.com/tuUB"><img src="https://s11.flagcounter.com/count/tuUB/bg_FFFFFF/txt_000000/border_CCCCCC/columns_6/maxflags_18/viewers_0/labels_1/pageviews_1/flags_1/percent_0/" alt="Free counters!" border="0"></a>
           
               
          </div> 
        
        -->
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 testdiv watermark">
            
            <h4 class="confname"> 
                  <center>
                   <?php 
                   $lastupdated=filemtime("main.php");
                   
                   if($lastupdated<filemtime("index.php"))
                   {
                       $lastupdated=filemtime("index.php");}
                
                   if($lastupdated<filemtime("committee.php"))
                   {
                       $lastupdated=filemtime("committee.php");}
                   
                   if($lastupdated<filemtime("importantdates.php"))
                   {$lastupdated=filemtime("importantdates.php");}
                   
                   if($lastupdated<filemtime("keynote.php"))
                   {$lastupdated=filemtime("keynote.php");}
                   
                   if($lastupdated<filemtime("proceedings.php"))
                   {$lastupdated=filemtime("proceedings.php");}
                   
                   if($lastupdated<filemtime("Registration.php"))
                   {$lastupdated=filemtime("Registration.php");}
                   
                   if($lastupdated<filemtime("submissions.php"))
                   {$lastupdated=filemtime("submissions.php");}
                   
                   if($lastupdated<filemtime("travelgrant.php"))
                   {$lastupdated=filemtime("travelgrant.php");}
                   
                    if($lastupdated<filemtime("schedule.php"))
                   {$lastupdated=filemtime("schedule.php");}
                   
                    if($lastupdated<filemtime("visa.php"))
                   {$lastupdated=filemtime("visa.php");}
                   
                    if($lastupdated<filemtime("downloads/Accommodation.pdf"))
                   {   $lastupdated=filemtime("downloads/Accommodation.pdf");}
                   
                    if($lastupdated<filemtime("contactus.php"))
                   {   $lastupdated=filemtime("contactus.php");}
                   
                    if($lastupdated<filemtime("location.php"))
                   {$lastupdated=filemtime("location.php");}
                   
                   if($lastupdated<filemtime("reachus.php"))
                   {      $lastupdated=filemtime("reachus.php");}
                  
                  // echo "Last Updation: ".date("F d Y H:i:s",($lastupdated-(5*60*60)-(30*60)))." (IST).";
                  
                   
                   
                   echo "Last Updation: ".date("F d Y H:i:s",($lastupdated+(5*60*60)+(30*60)))." (IST).";



                   
                   ?></center>
             </h4>
            
        </div>
        
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bg2 watermark">
                 <h4><br><center>&copy;2023 All rights reserved </center><br></h4>
        </div>
        
        
    </body>
</html>

<?php
}
?>