<?php
function mywebhead()
{?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>5NANO2021</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
    
  <meta name="description" content="Nano Technology Conference ">
  <meta name="keywords" content="Nano, Nano Technology, Nano Electronics,Nano photonics, Nano materials, Nano bioscience, Nanotech, 2021, 2021 conference, engineering, IEEE, ELSEVIER">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel = "stylesheet" type="text/css" href="confstyle.css">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  
  <script language="JavaScript">
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



      var deadline = new Date("Apr 23, 2021 08:30:25").getTime(); 
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
      
  </script>
  
  
  
  
  <style>
      .bg1
        {
        /*background-color:#428bca;  #42ca98 */
        background-color:#008000;
        border:1pt solid red;
        }
        
        .bg2
        {
        background-color:#ffffff;
        border:1pt solid red;
        }
         .dropdown-menu 
        {
        background-color: #ffffff;
        color: #ffffff;
         border:1pt solid red;
         font-size:1em;
         font-style:bold;
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
      
  </style>
  
</head>
     <body onload="updateClock(); setInterval('updateClock()', 1000 )"> 
           <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bg1">
               
              <!--hidden images to be visible in mobile --> 
               <div class="hidden-lg hidden-md col-sm-12 col-xs-12  " style=" valign:middle;" >
                  <center><br>
                 
                  <img class="bg1" src="images\Conf-logo.jpg" width=25% height=25% style="border-radius: 25px;">
                  </center>
              </div>
              <div class="hidden-lg hidden-md  col-sm-12 col-xs-12" style=" valign:middle; ">
            
          
                    <div class="confname" style= "text-align:center; font-size:1.75em;"> 5NANO2021
                    </div>
                    <div  class="confname" style= "text-align:center; font-size:1.75em;" >
			            International Conference on Nanoelectronics, Nanophotonics, Nanomaterials, Nanobioscience & Nanotechnology    
			         </div>
			         <div class="confname" style= "text-align:right; font-size: 1em;" >
			         - platform for researchers
			         </div>
			 </div> 
			 
			  <div   class="hidden-lg hidden-md col-sm-12 col-xs-12  " style=" valign:middle;" >
			      
			  <div align="center" class="confaddr" style= "font-size: 1em;">in collaboration with 
			       </div>
			       
			       
			       <div align="center" class="clgname" style= "font-size: 1em;">MSME Technology Development Centre, PPDC, Agra, Ministry of Micro, Small & Medium Enterprises(MSME), Govt. of India
			      </div>
			     
			   
			     
			  <div align="center" class="confaddr" style= "font-size: 1em;"><br>hosted by
			       </div>
			     
 
                 <div align="center" class="clgname" style= "font-size: 1em;"><br>Department of  Electrical & Electronics Engineering
			      </div>
			     
			     <div align="center" class="confaddr" style= "font-size: 1em;">
			         in association with
     		     </div>
	    	     
	    	     
	    	      <div align="center" class="clgname" style="font-size: 1em;">
	    	          IEEE Photonics Society Student Chapter <br><br>
	    	         <img  class="bg1" src="\images\Mangalam_College_logo.png" width=20% height=20% style="border-radius: 25px;"> <br> 
			         Mangalam College of Engineering<br> 
			         Ettumanoor, Kottayam, Kerala, India.
			      </div>
			      <br>
     		       <div align="center" class="confaddr" style="font-size: 1em;"> 29<sup>th</sup> & 30<sup>th</sup> April, 2021
     		       </div> 
              
              
              
              
              
              </div>
              
              
               <!--Regular header starts --> 
              <div class="col-lg-2 col-md-2 hidden-sm hidden-xs  " style="valign:middle;" >
                  <center><br>
                  <br>
                  <img class="bg1" src="images\Conf-logo.jpg" width=75% height=75% style="border-radius: 25px;">
                  </center>
              </div>
            
               <div class="col-lg-8 col-md-8 hidden-sm hidden-xs" style=" valign:middle; ">
            
          
                    <div class="confname" style= "text-align:center; font-size: 1.75em;"> 5NANO2021
                    </div>
                    <div  class="confname" style= "text-align:center; font-size:1.75em;" >
			            International Conference on Nanoelectronics, Nanophotonics, Nanomaterials, Nanobioscience & Nanotechnology    
			         </div>
			         <div class="confname" style= "text-align:right; font-size: 1.25em;" >
			         - platform for researchers
			         </div>
			         
			        
			        
			          <div align="center" class="confaddr" style= "font-size: 1em;">in collaboration with 
			       </div>
			       
			       
			       <div align="center" class="clgname" style= "font-size: 1em;">MSME Technology Development Centre, PPDC, Agra, Ministry of Micro, Small & Medium Enterprises(MSME), Govt. of India
			      </div>
			     
			        
           		   <div align="center" class="confaddr" style= "font-size: 1em;"><br>hosted by
			       </div>
			     
 
                 <div align="center" class="clgname" style= "font-size: 1em;">Department of  Electrical & Electronics Engineering
			      </div>
			     
			     <div align="center" class="confaddr" style= "font-size: 1em;">
			         <br> in association with
     		     </div>
	    	     
	    	     
	    	      <div align="center" class="clgname" style="font-size: 1em;">
	    	          IEEE Photonics Society Student Chapter <br>
	    	      </div>    
	    	      <div align="center" class="clgname" style="font-size: 1.25em;">
			         Mangalam College of Engineering<br> 
			     </div>
			     <div align="center" class="clgname" style="font-size: 1em;">
			         Ettumanoor, Kottayam, Kerala, India.
			      </div>
			      <br>
     		       <div align="center" class="confaddr" style="font-size: 1.25em;">  29<sup>th</sup> & 30<sup>th</sup> April, 2021
     		       <br> 
			       </div> 			
			      
              </div> 
              <div class="col-lg-2 col-md-2 hidden-sm hidden-xs" style=" valign:middle;  align:center;">
                  <center><br><br>
                 <img class="bg1" src="images/Mangalam_College_logo.png" width=65% height=65% style="border-radius: 25px;">
                 </center>
              </div>
        </div> <!--header over-->
        
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bg2">
                <div  class=" downloadlink col-lg-3 col-md-3 hidden-sm hidden-xs">
                    <span id="clock">Display time</span>
        	               </div>
                
                <div id="countdown" class="downloadlink col-lg-6 col-md-6 col-sm-12 col-xs-12" style="text-align:center">
        	               </div> 
                
                
                <!--Marquee-->
                 
                     <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    
                     <marquee onmouseover="this.setAttribute('scrollamount', 0, 0);" onmouseout="this        .seAttribute('scrollamount', 2, 0);">
                  	                
                  	                
                  	                <!--<img src="regformnew.gif" alt="New" height="25" width="35">
                  	                <a href="importantdates.php#main" class="downloadlink" >
                  	                    Important Announcements
                  	                 </a>
                  	                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  	                 
                  	                  
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
                  	                  
                  	                  -->
              	                 </marquee>
                </div>
        </div>
        
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"  style="border-width:1pt;  border-style: solid; border-color: red; background-color:#008000;" >
        
        <!--white space-->
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">&nbsp;
        </div>    
        
        
         <!-- mobile menu bar  -->
             
        <div id='mmenu' class="dropdown hidden-lg hidden-md col-sm-12 col-xs-12 ">
          <button class="btn btn-success btn-block dropdown-toggle glyphicon glyphicon-menu-hamburger " type="button" data-toggle="dropdown"> Menu
            <span class="caret"></span></button>
            <ul class="dropdown-menu col-sm-12 col-xs-12">
                <li><a href="index.php#mmenu">Home</a></li>
                <li><a href="committee.php#mmenu"> Committees</a></li>
                <li><a href="importantdates.php#mmenu">  Important Dates</a></li>
                <li><a href="keynote.php#mmenu">  Keynote Speakers</a></li>
                <li><a href="publications.php#mmenu">  Publication</a></li>
                <li><a href="proceedings.php#mmenu">   Previous Proceedings</a></li>
                <li><a href="Registration.php#mmenu">  Registration</a></li>
                <li><a href="downloads/registrationform.doc">   Registration Form</a></li>
                <li><a href="submissions.php#mmenu"> Submission</a></li>
                <li><a href="downloads/TravelGrant5nano2020.pdf">  Travel Grants</a></li>
                <li><a href="schedule.php#mmenu">  Schedule</a></li>
                <li><a href="visa.php#mmenu">Visa Process</a></li>
                <li><a href="downloads/Accommodation.pdf"> Accommodation</a></li>
                <li><a href="contactus.php#mmenu">Contact Us</a></li>
                <li><a href="location.php#mmenu">Location</a></li>
                <li><a href="reachus.php#mmenu">Reaching Us</a></li>
                <li><a href="https://www.keralatourism.org/districts/kottayam/">Attractions</a></li>
                    
                </ul>
             <br>   
        </div>
        
        
        
         <!--menu bar-->
            <div class="col-lg-2 col-md-2 hidden-sm hidden-xs" > 
           
             <button type="button"  class=" btn btn-success col-lg-12 col-md-12 col-sm-12 col-xs-12 menulink"  onclick="window.location='index.php#main' ">
             Home
             </button>
             
	         <button type="button" class=" btn btn-success col-lg-12 col-md-12 col-sm-12 col-xs-12 menulink " onclick="window.location='committee.php#main'">
	         Committees
	         </button>
	         
	         <button type="button" class="btn btn-success btn-block menulink " onclick="window.location='importantdates.php#main'"  >
	         Important Dates
	         </button>
	         
     	     <button type="button" class="btn btn-success col-lg-12 col-md-12 col-sm-12 col-xs-12 menulink" onclick="window.location='keynote.php#main'" >
     	         Keynote Speakers
     	      </button>
    	               
    	    <button type="button" class="btn btn-success col-lg-12 col-md-12 col-sm-12 col-xs-12 menulink" onclick="window.location='publications.php#main'" >
    	        Publication
    	        </button>
    	         
    	         <button type="button" class="btn btn-success col-lg-12 col-md-12 col-sm-12 col-xs-12 menulink"  onclick="window.location='proceedings.php#main'">
    	             Previous Proceedings
    	          </button>
    	          
    	          <button type="button" class="btn btn-success col-lg-12 col-md-12 col-sm-12 col-xs-12 menulink"  onclick="window.location='Registration.php#main'">
    	              Registration
    	           </button>
    	           <button type="button" class="btn btn-success col-lg-12 col-md-12 col-sm-12 col-xs-12 menulink" 
    	                onclick="window.location='downloads/registrationform.doc'">
    	           Registration Form
    	           </button>
    	           
    	           <button type="button" class="btn btn-success col-lg-12 col-md-12 col-sm-12 col-xs-12 menulink"   onclick="window.location='submissions.php#main'">
    	           Submission
    	           </button>
    	           
    	           <button type="button" class="btn btn-success col-lg-12 col-md-12 col-sm-12 col-xs-12 menulink" 
    	            onclick="window.location='downloads/TravelGrant5nano2020.pdf'" >
    	           Travel Grants
    	           </button>
    
    	          <button type="button" class="btn btn-success col-lg-12 col-md-12 col-sm-12 col-xs-12 menulink" 
    	           onclick="window.location='schedule.php#main'" >
    	            Schedule
    	            </button>
    
    	           
                    <button type="button" class="btn btn-success col-lg-12 col-md-12 col-sm-12 col-xs-12 menulink"  onclick="window.location='visa.php#main'" >
                    Visa Process
                    </button>
    	                     
    	             <button type="button" class="btn btn-success col-lg-12 col-md-12 col-sm-12 col-xs-12 menulink"  onclick="window.location='https://www.5nano2020.com/downloads/Accommodation.pdf'">
    	             Accommodation
    	             </button>
    
    	             <button type="button" class="btn btn-success col-lg-12 col-md-12 col-sm-12 col-xs-12 menulink"  onclick="window.location='contactus.php#main'" >
    	             Contact Us
    	             </button>
    	            
    	             <button type="button" class="btn btn-success col-lg-12 col-md-12 col-sm-12 col-xs-12 menulink"  onclick="window.location='location.php#main'" >
    	                 Location
    	             </button>
    	                          
    	           <button type="button" class="btn btn-success col-lg-12 col-md-12 col-sm-12 col-xs-12 menulink"  onclick="window.location='reachus.php#main'" >Reaching Us</button>
    	                           
    	           <button type="button" class="btn btn-success col-lg-12 col-md-12 col-sm-12 col-xs-12 menulink"  onclick="window.location='https://www.keralatourism.org/districts/kottayam/'"  >Attractions</button>
            
            </div> 
            <!--Main content start div -->
            <div id="main" class="col-lg-10 col-md-10 col-sm-12 col-xs-12" style="border-width:1pt;  border-style: solid; border-color: red; background-color:#ffffff; " >
               
<?php            
}

function mywebfoot()
{
?>
      
        </div><!--Main content div -->
        <!--Footer content-->
         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 header" style="border-width:1pt;  border-style: solid; border-color: red; background-color:#008000; " >
             
            <div class=" col-lg-offset-1 col-lg-1 col-md-offset-1 col-md-1 col-sm-12 col-xs-12 ">    
         <center> <br> <img class="bg1" src="images/PPDC.jpg" width="100px"  style="border-radius: 5px;"></center>
           </div>
            <div class="col-lg-offset-1 col-lg-1 col-md-offset-1 col-md-1 col-sm-12 col-xs-12 ">    
         <center> <br> <img class="bg1" src="images/DC.jpg" width="100px"  style="border-radius: 5px;"></center>
           </div>
           
           <div class="col-lg-offset-1 col-lg-1 col-md-offset-1 col-md-1 col-sm-12 col-xs-12 ">    
         <center> <br> <img class="bg1" src="images/IEEE Photonics new.jpg" width="210px" height="100px" style="border-radius: 5px;"></center>
           </div>
            <div class="col-lg-offset-2 col-lg-1 col-md-offset-2 col-md-1 col-sm-12 col-xs-12"> 
          <center>  <br><img class="bg1" src="images/IEEE.png" width="220px" height="100px" style="border-radius: 15px;">
             </div>
            
            <div class="col-lg-offset-2 col-lg-1 col-md-offset-2 col-md-1 col-sm-12 col-xs-12">     
              <center><br>  <img class="bg1" src="images/Elseiver.jpg" width="90px"  height="100px" style="border-radius: 2px;"><br></center>
            </div>
            <div class="col-lg-offset-2 col-lg-1 col-md-offset-2 col-md-1 col-sm-12 col-xs-12"> 
    	        <center><br><img class="bg1" src="images/springer.png" width="120px" height="100px" style="border-radius: 15px;"><br><br></center>
    	    </div>
            <div class="col-lg-offset-1 col-lg-2 col-md-offset-1 col-md-1 col-sm-12 col-xs-12"> 
              <center><br>  <img class="bg1" src="images/Taylor & francis.png" width="300px" height="100px" style="border-radius: 5px;"></center>
             </div>
            <div class="col-lg-offset-2 col-lg-1 col-md-offset-2 col-md-1  col-sm-12 col-xs-12"> 
                <center><br><img class="bg1" src="images/IAHE Logo.jpg" width="100px" height="100px" style="border-radius: 2px;"></center>
             </div>
            <div class="col-lg-offset-1 col-lg-1 col-md-offset-1 col-md-1  col-sm-12 col-xs-12"> 
                <center><br><img class="bg1" src="images/IJHE Logo.jpg" width="100px"  height="100px" style="border-radius: 2px;"></center>
            </div>  
            <br>
            
            
        </div>  
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bg2">
        <h4><center>&copy;2020 All rights reserved </center></h4>
        </div>
        
        <!--<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bg2">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" >
           <h3 style="text-align:center">Total Visits:
           <a><img src="https://smallseotools.com/counterDisplay?code=a37003c61e683daac7eb1c74e9649f27&style=0015&pad=5&type=page&initCount="  border="0" alt=" Hits Counter"></a>
        
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="text-align:center">
          <h3> Flag counter:  
          
           <a><img src="https://s11.flagcounter.com/count2/px5J/bg_FFFFFF/txt_000000/border_CCCCCC/columns_2/maxflags_10/viewers_0/labels_0/pageviews_0/flags_0/percent_0/" alt="Flag Counter" border="0"></a>
          </h3> 
               
          </div>  -->
            
        </div>
    </body>
</html>

<?php
}
?>