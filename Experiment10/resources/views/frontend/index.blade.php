<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, maximum-scale=1">
<title>COVID-!9</title>
<link rel="icon" href="frontend/img/favicon.png">
<link href="frontend/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="frontend/css/style.css" rel="stylesheet" type="text/css"> 
<link href="frontend/css/font-awesome.css" rel="stylesheet" type="text/css"> 
<link href="frontend/css/animate.css" rel="stylesheet" type="text/css">
<link href="frontend/css/subscribe.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="frontend/css/style1.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>   
<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="frontend/js/validation.js"></script>
</head>
<body>
<div id="popUpmain" class="modal" style="display: none;">
  <form action="{{route('subscribe.send')}}" method="POST">
    @csrf
      <div id="popup" style="background-image: url(frontend/img/back.jpg); background-size: cover;">
        <h1 id="newsHeading">Subscribe to our website.</h1>
         @if (count($errors)>0)
            @foreach ($errors->all() as $error)
              <p style="color: red; text-align: center; margin-bottom: 0; margin-top: 5px; padding-bottom: 0;">{{ $error }}</p>
            @endforeach
          @endif
        <input type="text" name="name1" id="name1" placeholder="Your Name" required>
        <input type="email" name="email1" id="email1" placeholder="Your email" required><br>
        <button type="submit" class="submitid">Subscribe</button>
        <button onclick="document.getElementById('popUpmain').style.display='none'" class="cancelbtn">Cancel</button>
    </div>
  </form> 
</div>
<!--Header_section-->
<section id="hero_section" class="top_cont_outer">
<header id="header_wrapper">
  <div class="container">
    <div class="header_box">
      <div class="logo"><a href="#"><img src="frontend/img/corona1.png" width="130" height="50" alt="logo"></a></div>
	  <nav class="navbar navbar-inverse">
      <div class="navbar-header">
        <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        </div>
	    <div id="main-nav" class="collapse navbar-collapse navStyle">
			<ul class="nav navbar-nav" id="mainNav">
			  <li class="active"><a href="#hero_section" class="scroll-link">Home</a></li>
			  <li><a href="#aboutUs" class="scroll-link">Awareness</a></li>
			  <li><a href="#service" class="scroll-link">Symptoms</a></li>
			  <li><a href="#Portfolio" class="scroll-link">Preventions</a></li>
			  <li><a href="#clients" class="scroll-link">Updates</a></li>
        <li><a href="#services" class="scroll-link">Survey-Form</a></li>
			  <li><a href="#team" class="scroll-link">Team</a></li>
			  <li><a href="#contact" class="scroll-link">Contact</a></li>
			</ul>
      </div>
	 </nav>
    </div>
  </div>
</header>
<!--Header_section--> 
<!--Hero_Section-->

  <div class="hero_wrapper">
    <div class="container">
      <div class="hero_section">
        <div class="row">
          <div class="col-lg-5 col-sm-7">
            <div class="top_left_cont zoomIn wow animated"> 
              <h2>Awareness and Readiness of <br><strong>COVID-19</strong></h2><br><br><br><br><br>
              <a href="#aboutUs" class="read_more2">Read more</a> </div>
          </div>
          <div class="col-lg-7 col-sm-5">
			<img src="frontend/img/corona2.png" style="margin-top: 20px; margin-right: 6px;" class="zoomIn wow animated" alt="" />
		  </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--Hero_Section--> 

<section id="aboutUs"><!--Aboutus-->
<div class="inner_wrapper">
  <div class="container">
    <h2><strong>About Corona</strong></h2>
    <div class="inner_section">
	<div class="row">
<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <h3>What is coronavirus?</h3>
      <p class="low" style="font-size: 14px;">Coronaviruses are a large family of viruses which may cause illness in animals or humans.  In humans, several coronaviruses are known to cause respiratory infections ranging from the common cold to more severe diseases such as Middle East Respiratory Syndrome (MERS) and Severe Acute Respiratory Syndrome (SARS). The most recently discovered coronavirus causes coronavirus disease COVID-19</p>
    </div><br>
    <div class="col-sm-4">
      <h3>What is COVID-19?</h3>
      <p class="low" style="font-size: 14px;">COVID-19 is the infectious disease caused by the most recently discovered coronavirus. This new virus and disease were unknown before the outbreak began in Wuhan, China, in December 2019. COVID-19 is now a pandemic affecting many countries globally.
      </p>
    </div><br>
    <div class="col-sm-4" >
      <h3>What are the symptoms of COVID-19?</h3>        
      <p class="low" style="font-size: 14px;">The most common symptoms of COVID-19 are fever, dry cough, and tiredness. Other symptoms that are less common and may affect some patients include aches and pains, nasal congestion, headache, conjunctivitis, sore throat, diarrhea, loss of taste or smell or a rash on skin or discoloration of fingers or toes. These symptoms are usually mild and begin gradually. </p><br><br>
    </div><br>
        <div class="col-sm-4">
      <h3>What should I do if i have COVID-19 symptoms?</h3>        
      <p class="low" style="font-size: 14px;">Stay at home, self-isolate and monitor your symptoms.However, if you live in an area with malaria or dengue fever it is important that you do not ignore symptoms of fever.  Seek medical help.  When you attend the health facility wear a mask if possible, keep at least 1 metre distance from other people and do not touch surfaces with your hands. If it is a child who is sick help the child stick to this advice.</p>
      <p class="low" style="font-size: 14px;">Seek immediate medical care if you have difficulty breathing or pain/pressure in the chest. If possible, call your health care provider in advance, so he/she can direct you to the right health facility.</p>
    </div><br>
        <div class="col-sm-4">
      <h3>How does COVID-19 spread?</h3>        
      <p class="low" style="font-size: 14px;">People can catch COVID-19 from others who have the virus. The disease spreads primarily from person to person through small droplets from the nose or mouth, which are expelled when a person with COVID-19 coughs, sneezes, or speaks. These droplets are relatively heavy, do not travel far and quickly sink to the ground. People can catch COVID-19 if they breathe in these droplets from a person infected with the virus.  This is why it is important to stay at least 1 meter) away from others. These droplets can land on objects and surfaces around the person such as tables, doorknobs and handrails.  People can become infected by touching these objects or surfaces, then touching their eyes, nose or mouth.  This is why it is important to wash your hands regularly with soap and water or clean with alcohol-based hand rub.</p>
    </div><br>
        <div class="col-sm-4">
      <h3>Can COVID-19 be caught from a person who has no symptoms?</h3>
      <p class="low" style="font-size: 14px;">COVID-19 is mainly spread through respiratory droplets expelled by someone who is coughing or has other symptoms such as fever or tiredness. Many people with COVID-19 experience only mild symptoms. This is particularly true in the early stages of the disease. It is possible to catch COVID-19 from someone who has just a mild cough and does not feel ill.</p>
      <p class="low" style="font-size: 14px;">Some reports have indicated that people with no symptoms can transmit the virus. It is not yet known how often it happens. WHO is assessing ongoing research on the topic and will continue to share updated findings.</p>
    </div>

  </div>
</div>
</div>
<div class="work_bottom"> <span>Want to know more..</span> <a href="#contact" class="contact_btn">Contact Us</a> </div>       
	   </div>
      	
      </div>
	  
      
    </div>
  </div> 
  </div>
</section>
<!--Aboutus--> 


<!--Service-->
<section  id="service">
  <div class="container">
    <h2><strong>Symptoms</strong></h2>
    <div class="service_wrapper">
      <div class="row">
        <div class="col-lg-4">
          <div class="service_block">
            <div class="service_icon delay-03s animated"><figure><img src="frontend/img/cough.jpg" class="img-fluid" width="160" height="120"></figure></div><br>
            <h3 class="animated fadeInUp wow">Cough</h3>
            <p class="animated fadeInDown wow">A dry cough<br>Due to Sore throat</p>
          </div>
        </div>
        <div class="col-lg-4 borderLeft">			
          <div class="service_block">
            <div class="service_icon icon2  delay-03s animated wow zoomIn"> <figure>
            <img src="frontend/img/runningnose.jpg" class="img-fluid" width="160" height="120">
            </figure></div><br>
            <h3 class="animated fadeInUp wow">Running or stuffy Nose</h3>
            <p class="animated fadeInDown wow">A runny nose is a discharge of mucus from the nostrils. It's the result of excess nasal mucus production.</p>
          </div>
        </div>
        <div class="col-lg-4 borderLeft">
          <div class="service_block">
            <div class="service_icon icon3  delay-03s animated wow zoomIn"><figure>
            <img src="frontend/img/fever.jpg" class="img-fluid" width="160" height="130">
            </figure> </div><br>
            <h3 class="animated fadeInUp wow">Fever</h3>
            <p class="animated fadeInDown wow">
            A low-grade fever that gradually increases in temperature</p>
          </div>
        </div>
      </div>
	   <div class="row borderTop">
        <div class="col-lg-4 mrgTop">
          <div class="service_block">
            <div class="service_icon delay-03s animated wow  zoomIn"><figure><img src="frontend/img/cold.jpg" class="img-fluid" width="170" height="120">
            </figure> </div><br>
            <h3 class="animated fadeInUp wow">Cold</h3>
            <p class="animated fadeInDown wow">While you may feel miserable when you have a cold, the symptoms are generally mild.</p>
          </div>
        </div>
        <div class="col-lg-4 borderLeft mrgTop">
          <div class="service_block">
            <div class="service_icon icon2  delay-03s animated wow zoomIn"><figure>
            <img src="frontend/img/tiredness.jpg" class="img-fluid" width="160" height="120">
            </figure> </div><br>
            <h3 class="animated fadeInUp wow">Tiredness</h3>
            <p class="animated fadeInDown wow">Fatigue is feeling tired all the time and is not relieved by sleep and rest.</p>
          </div>
        </div>
        <div class="col-lg-4 borderLeft mrgTop">
          <div class="service_block">
            <div class="service_icon icon3  delay-03s animated wow zoomIn"><figure>
            <img src="frontend/img/breathing problem.jpg" class="img-fluid" width="160" height="120">
            </figure></div><br>
            <h3 class="animated fadeInUp wow">Breathing Problem</h3>
            <p class="animated fadeInDown wow">Experiencing breathing difficulty describes discomfort when breathing and feeling as if you can’t draw a complete breath.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--Service-->




<!-- Portfolio -->
<section id="Portfolio" class="content"> 
<style type="text/css">
  .textOverImage{
    width:200px;
    height:200px;
    display:inline-block;
    background-size:cover;
    border-radius:4px;
    margin:4px;
    position:relative;
    cursor:pointer;
    overflow:hidden;
  }
  
  .textOverImage > input{
    display:none;
  }
  
  .textOverImage > div,.textOverImage > h2{
    position:absolute;
    background-color:rgba(255,255,255,0.8);
    bottom:20px;
    left:4px;
    right:4px;
    border-radius:4px;
    padding:8px;
    overflow:hidden;
    opacity:0;
    transition:.3s;
  }
  
  .textOverImage:hover > h2,.textOverImage > input:checked + h2 + div{
    bottom:4px;
    opacity:1;
  }
  
  .textOverImage > input:checked + h2{
    bottom:-20px;
    opacity:0;
  }
  
  .textOverImage > h2{
    margin:0;
  }
  </style>
  
  <!-- Container -->
  <div class="container portfolio_title"> 
    
    <!-- Title -->
    <div class="section-title">
      <h2>6 Steps Prevention Against Coronavirus</h2>
    </div>
    <!--/Title --> 
    
  </div>
  <!-- Container -->
  
  <div class="portfolio-top"></div>
  
  <!-- Portfolio Filters -->
  <div class="portfolio"> 
    <h6>Click on the images for Description</h6>
    </div>
    <!--/Portfolio Filters --> 
    
    <!-- Portfolio Wrapper -->
    <!--div class="isotope fadeInLeft animated wow" style="position: relative; height: 480px;" id="portfolio_wrapper"--> 
      
 <label class="textOverImage" style="background-image:url(frontend/img/handwash.png); width:450px; height: 320px;">
  <input type="checkbox">
  <h2>Handwash</h2>
    <div style="font-size: 14px;">
    Wash your hands regularly for 20 seconds, with soap and water or alcohol-based hand rub.
  </div>
</label>
<label class="textOverImage" style="background-image:url(frontend/img/mask.jpg); width:450px; height: 320px;">
  <input type="checkbox">
  <h2>Wearing mask</h2>
    <div style="font-size: 14px;">
   Cover your nose and mouth with a disposable tissue when you cough or sneeze.
  </div>
</label>
<label class="textOverImage" style="background-image:url(frontend/img/distance.jpg); width:450px; height: 320px;">
  <input type="checkbox">
  <h2>Maintain Distance</h2>
    <div style="font-size: 14px;">
  Avoid close contact (1 meter or 3 feet) with people who are unwell.
  </div>
</label>
<label class="textOverImage" style="background-image:url(frontend/img/stayhome.jpg); width:450px; height: 320px;">
  <input type="checkbox">
  <h2>Stay Home</h2>
    <div style="font-size: 14px;">
   Stay home and self-isolate from others in the household if you feel unwell.
  </div>
</label>
<label class="textOverImage" style="background-image:url(frontend/img/stayinfo.jpg); width:450px; height: 320px;">
  <input type="checkbox">
  <h2>Get Updated Info</h2>
    <div style="font-size: 14px;">
    Stay informed by watching news & follow recommended practices.
  </div>
</label>
<label class="textOverImage" style="background-image:url(frontend/img/unwell.jpg); width:450px; height: 320px;">
  <input type="checkbox">
  <h2>Consult Doctor</h2>
    <div style="font-size: 14px;">
   If you have fever, cough and difficulty in breathing, seek medical care early.
  </div>
</label>
      
    </div>
    <!--/Portfolio Wrapper --> 
    
  </div>
  <!--/Portfolio Filters -->
  
  <div class="portfolio_btm"></div>
  
  
  <div id="project_container">
    <div class="clear"></div>
    <div id="project_data"></div>
  </div>
 
  
</section>
<!--/Portfolio --> 
<style type="text/css">
  .sort{
    margin-left: 4%;
  }
</style>
<section class="page_section sort" id="clients">
  @php

$data = file_get_contents('https://api.covid19india.org/data.json');
$coranalive = json_decode($data, true);

$statescount = count($coranalive['statewise']);

 error_reporting(0);
$state = 'India';

$i=1;
$c = 0;
$a = 0;
$r = 0;
$d = 0;
while($i < $statescount){
 $c+=  $coranalive['statewise'][$i]['confirmed'] . "<br>"  ;
 $a+=  $coranalive['statewise'][$i]['active'] . "<br>"  ;
 $r+=  $coranalive['statewise'][$i]['recovered'] . "<br>"  ;
 $d+=  $coranalive['statewise'][$i]['deaths'] . "<br>"  ; 

  $i++;
}


@endphp
  <style type="text/css">
    *{
      margin: 0;
      padding: 0;
    }
    div.container2{
           background-color: #ffff;
           background-size: cover;
           position: relative;
           display: inline-grid;
           width: 100%;
           height: auto;
           display: grid;
           grid-template-columns: repeat(4, 1fr);
           margin-top: 2%;
           padding-bottom: 20px;
    }
    div.position{
       position: relative;
      /*top: 40vh;
      left: 30vw;*/
    }
    div.bg-green{
      background-color: green;
    }
    div.container2 div{
      border: 2px solid black;
      text-align: center;
      line-height: 10vh;
    }
    div.header2{
      background-color: orange;
      color: green;
      text-align: center;
    }
    h1{
      text-align: center;
    }
   
  </style>
  <script type="text/javascript">
    function search(obj){
           var s = obj.value;
           s = s[0].toUpperCase() + s.slice(1).toLowerCase();
           document.cookie = "state = "+s;
           <?php
           $state = $_COOKIE["state"];
           $i =1;
           $flag = 0;
            while($i < $statescount){
              if($state == $coranalive['statewise'][$i]['state']){
                $c=  $coranalive['statewise'][$i]['confirmed'] . "<br>"  ;
                $a=  $coranalive['statewise'][$i]['active'] . "<br>"  ;
                $r=  $coranalive['statewise'][$i]['recovered'] . "<br>"  ;
                $d=  $coranalive['statewise'][$i]['deaths'] . "<br>"  ; 
                $flag = 1;
                break;
                 }
                $i++;
              }
              if($flag == 0){
                $state = 'India';
            }
           ?>
    }
  </script>
  <section class="page_section sort" id="clients">
  <div class="container">
  <div class="header2"><h1>COVID-19 TRACKER</h1></div>
  <form>
  <div class="position">
    <div style = "text-align: center">
    <input type = "text" placeholder = "search by state" name = "state" style = "text-align: center; border: none; border-bottom: 2px solid green" onchange="search(this)" />
  </div>
    </form>
   <h1 style="color: #FFFF">Corona cases in <?php echo $state; ?></h1> 
<div class="container2">
  <div><h3>CONFIRMED</h3></div>
  <div><h3>ACTIVE</h3></div>
  <div><h3>RECOVERED</h3></div>
  <div><h3>DEATH</h3></div>
  <div class = "bg-green"><h2 style="font-family: Times New Roman, serif;"><?php echo $c; ?></h2></div>
  <div class = "bg-green"><h2 style="font-family: Times New Roman, serif;"><?php echo $a; ?></h2></div>
  <div class = "bg-green"><h2 style="font-family: Times New Roman, serif;"><?php echo $r; ?></h2></div>
  <div class = "bg-green"><h2 style="font-family: Times New Roman, serif;"><?php echo $d; ?></h2></div>
</div>
</div>
</div>

  <!--page_section-->
  <br><br><h2><strong>Corona cases Updates</strong></h2>
<section class="corona_update">
  <div class="mb-3">
      <center><div class="flourish-embed flourish-table" data-src="story/230195"><script src="https://public.flourish.studio/resources/embed.js"></script></div></center>
  </div>
  <div class="flourish-embed flourish-chart" data-src="story/230110"><script src="https://public.flourish.studio/resources/embed.js"></script></div>
</section>
</section>
<hr>

<!--survey_form -->
<section class="page_section sort" id="services" class="outer" style="background-image: linear-gradient(
      115deg,
      rgba(58, 58, 158, 0.8),
      rgba(136, 136, 206, 0.7)
    ),
    url(https://cdn.freecodecamp.org/testable-projects-fcc/images/survey-form-background.jpeg); margin-left: 0;"><!--page_section-->
<div class="container1">
    <header class="header">
      <h1 id="title" class="text-center" style="color: #FFFF"> Survey Form</h1>
      <p id="description" class="description text-center" style="color: #FFFF; font-size: 14px;">
        This is a short survey on awareness and readiness of covid-19.
        Please spare 5 minutes.
      </p>
    </header>
    @if(Session::get('surveyed'))
                          <div class="alert alert-success" role="alert">
                            {{Session::get('surveyed')}}   
                           </div>
                        @endif
    <form method='post' action='{{ route("survey.send") }}' id="survey-form">
      @csrf
      <div class="form-group">
        <label id="name-label" for="name2" style="color: #FFFF; font-size: 14px;">Name</label>
        <input
          type="text"
          name="name2"
          id="name2"
          class="form-control"
          placeholder="Enter your name"
          required
        />
      </div>
      <div class="form-group">
        <label id="email-label" for="email2" style="color: #FFFF; font-size: 14px;">Email</label>
        <input
          type="email"
          name="email2"
          id="email2"
          class="form-control"
          placeholder="Enter your Email"
          required
        />
      </div>
      <div class="form-group">
        <label id="number-label" for="number" style="color: #FFFF; font-size: 14px;">Age<span class="clue" style="font-size: 14px;">(optional)</span></label
        >
        <input
          type="number"
          name="age"
          id="number"
          min="10"
          max="99"
          class="form-control"
          placeholder="Age"
        />
      </div>
      <div class="form-group">
        <p style="color: #FFFF; font-size: 14px;">Which option best describes your current role?</p>
        <select id="dropdown" name="role" class="form-control" style="height: 30px;" required>
          <option disabled selected value>Select current role</option>
          <option value="student">Student</option>
          <option value="job">Full Time Job</option>
          <option value="learner">Full Time Learner</option>
          <option value="preferNo">Prefer not to say</option>
          <option value="other">Other</option>
        </select>
      </div>
  
      <div class="form-group">
        <p style="color: #FFFF; font-size: 14px;">When did you come to know about the outbreak of corona virus?</p>
        
          <div class="form-group">
            <label id="name-label" for="outbreak"></label>
            <input
              type="text"
              name="outbreak"
              id="name"
              class="form-control"
              placeholder="Type your answer"
              style="height: 30px;"
              required
            />
          </div>
          
  
      <div class="form-group">
        <p style="color: #FFFF; font-size: 14px;">
          What precautions you are taking to keep your family protected?
        </p>
        <div class="form-group">
          <label id="name-label" for="precautions"></label>
          <input
            type="text"
            name="precautions"
            id="name"
            class="form-control"
            placeholder="Type your answer"
            required
            style="height: 30px;"
          />
        </div>
        
      </div>
  
      <div class="form-group">
        <p style="color: #FFFF; font-size: 14px;">
          Are no. of covid cases in control in your locality? (Mention Your Area)
         
        </p>
        <div class="form-group">
          <label id="name-label" for="covidcase_locality"></label>
          <input
            type="text"
            name="covidcase_locality"
            id="name"
            class="form-control"
            placeholder="Type your answer"
            required
            style="height: 30px;"
          />
        </div>
       
      <div class="form-group">
        <p style="color: #FFFF; font-size: 14px;">Any comments or suggestions?</p>
        <textarea
          id="comments"
          class="input-textarea"
          name="comment"
          placeholder="Enter your comment here..."
        ></textarea>
      </div>
  
      <div class="form-group">
        <button id="button3" type="submit" id="submit" style="height: 50px; font-size: large; color: #FFFF" class="submit-button">
          Submit
        </button>
      </div>
    </form>
  </div>

</section>
<!--client_logos-->

<section class="page_section team" id="team"><!--main-section team-start-->
  <div class="container">
    <h2><strong>Our Team</strong></h2>
    <div class="team_section clearfix">
      <div class="team_area">
        <div class="team_box wow fadeInDown delay-03s">
          <div class="team_box_shadow"><a href="javascript:void(0)"></a></div>
          <img src="frontend/img/asiya.png" alt="">
          <ul>
            <li><a href="javascript:void(0)" class="fa fa-twitter"></a></li>
            <li><a href="javascript:void(0)" class="fa fa-facebook"></a></li>
            <li><a href="javascript:void(0)" class="fa fa-pinterest"></a></li>
            <li><a href="javascript:void(0)" class="fa fa-google-plus"></a></li>
          </ul>
        </div>
        <h3 class="wow fadeInDown delay-03s">Asiya Pathan</h3>
        <p class="wow fadeInDown delay-03s">Problem Solver and Self Learner. Capability of Analyzing, designing and planning technological implementations of code</p>
      </div>
      <div class="team_area">
        <div class="team_box  wow fadeInDown delay-06s">
          <div class="team_box_shadow"><a href="javascript:void(0)"></a></div>
          <img src="frontend/img/shruti.png" alt="">
          <ul>
            <li><a href="javascript:void(0)" class="fa fa-twitter"></a></li>
            <li><a href="javascript:void(0)" class="fa fa-facebook"></a></li>
            <li><a href="javascript:void(0)" class="fa fa-pinterest"></a></li>
            <li><a href="javascript:void(0)" class="fa fa-google-plus"></a></li>
          </ul>
        </div>
        <h3 class="wow fadeInDown delay-06s">Shruti Nair</h3>
        <p class="wow fadeInDown delay-06s">I love the logic and structure of coding and always strive to write elegant and efficient code whether it be HTML, CSS and jQuery.</p>
      </div>
      <div class="team_area">
        <div class="team_box wow fadeInDown delay-09s">
          <div class="team_box_shadow"><a href="javascript:void(0)"></a></div>
          <img src="frontend/img/zarin.png" alt="">
          <ul>
            <li><a href="javascript:void(0)" class="fa fa-twitter"></a></li>
            <li><a href="javascript:void(0)" class="fa fa-facebook"></a></li>
            <li><a href="javascript:void(0)" class="fa fa-pinterest"></a></li>
            <li><a href="javascript:void(0)" class="fa fa-google-plus"></a></li>
          </ul>
        </div>
        <h3 class="wow fadeInDown delay-09s">Zarin Khan</h3>
        <p class="wow fadeInDown delay-09s">Passionate and a keen learner. Love to enhance my knowledge, explore, experience and learn new technology aspects.</p>
      </div>
      <div class="team_area">
        <div class="team_box wow fadeInDown delay-09s">
          <div class="team_box_shadow"><a href="javascript:void(0)"></a></div>
          <img src="frontend/img/afif.png" alt="">
          <ul>
            <li><a href="javascript:void(0)" class="fa fa-twitter"></a></li>
            <li><a href="javascript:void(0)" class="fa fa-facebook"></a></li>
            <li><a href="javascript:void(0)" class="fa fa-pinterest"></a></li>
            <li><a href="javascript:void(0)" class="fa fa-google-plus"></a></li>
          </ul>
        </div>
        <h3 class="wow fadeInDown delay-09s">Afif</h3>
        <p class="wow fadeInDown delay-09s">Learner, Learning new programming Languages.</p>
      </div>
    </div>
  </div>
</section>
<!--/Team-->
<!--Footer-->
<footer class="footer_wrapper" id="contact">
  <div class="container">
    <section class="page_section contact" id="contact">
      <style>
        .error_form {color: #FFFF;}
      </style>
      <div class="contact_section">
        <h2>Connect With Us</h2>
        <h4><i>Your feedback is highly appreciated and will help us to improve our ability to serve you and other users of our web sites.<br>Stay Safe, Stay Tuned, Stay updated!!!!</i></h4>
        <div class="row">
          <div class="col-lg-4">
            
          </div>
          <div class="col-lg-4">          
          </div>
          <div class="col-lg-4">
          
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 wow fadeInLeft">	
		 <div class="contact_info">
                            <div class="detail">
                                <h4>ANGELTRIO Infoway</h4>
                                <p>NewYork, USA</p>
                            </div>
                            <div class="detail">
                                <h4>call us</h4>
                                <p>+13343266014</p>
                            </div>
                            <div class="detail">
                                <h4>Email us</h4>
                                <p>angeltrio@sitename.com</p>
                            </div> 
                        </div>          
          <ul class="social_links">
            <li class="twitter animated bounceIn wow delay-02s"><a href="javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
            <li class="facebook animated bounceIn wow delay-03s"><a href="javascript:void(0)"><i class="fa fa-facebook"></i></a></li>
            <li class="pinterest animated bounceIn wow delay-04s"><a href="javascript:void(0)"><i class="fa fa-pinterest"></i></a></li>
            <li class="gplus animated bounceIn wow delay-05s"><a href="javascript:void(0)"><i class="fa fa-google-plus"></i></a></li> 
          </ul>
        </div>
        <div class="col-lg-8 wow fadeInLeft delay-06s">
          @if(Session::get('message_sent'))
                          <div class="alert alert-success" role="alert">
                            {{Session::get('message_sent')}}   
                           </div>
                        @endif
          <form id="registration_form" method="POST" action="{{route('contact.send')}}">
            @csrf
          <div class="form">
            <span class="error_form" id="fname_error_message"></span>
            <input class="input-text" type="text" name="name" id="form_fname" class="validate" value="Your Name *" onFocus="if(this.value==this.defaultValue)this.value='';" onBlur="if(this.value=='')this.value=this.defaultValue;">
            
            <span class="error_form" id="email_error_message"></span>
            <input class="input-text" type="email" name="email" id="form_email" class="validate" value="Your E-mail *" onFocus="if(this.value==this.defaultValue)this.value='';" onBlur="if(this.value=='')this.value=this.defaultValue;">
            
            <span class="error_form" id="message_error_message"></span>
            <textarea class="input-text text-area" name="message" id="form_message" class="validate" cols="0" rows="0" onFocus="if(this.value==this.defaultValue)this.value='';" onBlur="if(this.value=='')this.value=this.defaultValue;" required>Your Message *</textarea>
            
            <input class="input-btn" type="submit" value="send message">
          </div>
        </form>
        </div>
      </div>
    </section>
  </div>
  <div class="container">
    <div class="footer_bottom"><span>Copyright © 2020,      <a href="https://github.com/AngelTrio">Follow Us</a><br>Disclamer:Information in this site is on the basis of WHO guidelines.</div> </span>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="frontend/js/bootstrap.min.js"></script>
<script src="frontend/js/npm.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
    if(sessionStorage.getItem('#popUpmain') !='true'){
      $('#popUpmain').modal('show');

      sessionStorage.setItem('#popUpmain','true');
    }
  });
</script>


<script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery-scrolltofixed.js"></script>
<script type="text/javascript" src="js/jquery.nav.js"></script> 
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/jquery.isotope.js"></script>
<script type="text/javascript" src="js/wow.js"></script> 
<script type="text/javascript" src="js/custom.js"></script>
</body>
</html>