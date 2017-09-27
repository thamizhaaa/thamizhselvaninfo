<?php
//@include("config.php");
error_reporting(0);
$oper =$_REQUEST['hidoper'];
if($oper=='1')
{
$name=$_POST['name'];
$email=$_POST['email'];
$mobile=$_POST['phone'];
$comments=$_POST['message'];
if($name!="" && $email!="" && $mobile!="" && $comments!="")
{
$order = "INSERT INTO tbl_contact (fld_name,fld_email,fld_mobile,fld_comments) VALUES ('$name','$email','$mobile','$comments')";
echo "<SCRIPT LANGUAGE='javascript'>";
echo "$('#successalert').text('We will Let you know Shortly')";
echo "location.href='index.php'";
echo "</SCRIPT>";
$result=mysql_query($order);
}
$to = "iam@thamizhselvan.info";
$username=$to;
$subject = "Contact Us - Thamizhselvan Info";
$headers = "MIME-Version: 2.0" . "\r\n";
$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
$headers .= "From: $name <$email> ";
$body = '
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>

<body style="background-color: #FFF; border: none;">
<table width="600" border="0">
<tr>
<td bgcolor="#FFFFFF" width="417px">
Name: <style="color:#F7931E;">'.$name.'</a><td>
</tr>
<tr>
<td bgcolor="#FFFFFF" width="417px">
Email: <style="color:#F7931E;">'.$email.'</a></td>
</tr>
<tr>
<td bgcolor="#FFFFFF" width="417px">
Mobile No: <style="color:#F7931E;">'.$mobile.'</a></td>
</tr>
<tr>
<td bgcolor="#FFFFFF" width="417px">
Comments:<style="color:#F7931E;">'.$comments.'</a></td>
</tr>
<tr>
<td colspan="3">&nbsp;</td>
</tr>
<tr>
<td colspan="3">&nbsp;</td>
</tr>
</table>
</body>
</html>';
	if(mail($to, $subject, $body, $headers))
	{
		// echo "mailsent";
		//return true;
	}
	else
	{
		echo "failed";
		$succ = 2;
	}	
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="Tamil Selvan, Profile, Web Developer, PHP Developer, SEO, MySql, CSS, HTML, Coimbatore, Chennai, Tamilnadu, India" />
<meta name="description" content="Tamil Selvan Profile Web Developer PHP Developer SEO MySql CSS HTML Coimbatore Chennai Tamilnadu India" />
<meta name="author" content="thamizhselvan.info" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<title>Tamil Selvan | Profile | Web Developer | PHP Developer | SEO | MySql | CSS | HTML | Coimbatore | Chennai | Tamilnadu | India</title>

<!-- Favicon -->
<link rel="shortcut icon" href="images/favicon.ico" />

<!-- bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />

<!-- google font -->
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,300italic,400italic,600italic,700,700italic,800,800italic' rel='stylesheet' type="text/css" />
<link href='https://fonts.googleapis.com/css?family=Raleway:400,100,100italic,200italic,200,300,300italic,400italic,500,500italic,600,600italic,700italic,900italic,900,800,700,800italic' rel='stylesheet' type="text/css" />
 
<!-- themify icon -->
<link href="css/themify-icons.css" rel="stylesheet" type="text/css" />

<!-- font awesome  -->
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />

<!-- magnific popup -->
<link href="css/magnific-popup.css" rel="stylesheet" type="text/css" />

<!-- jquery ui -->
<link rel='stylesheet' href='css/jquery-ui.css'>
 
<!-- main style -->
<link href="css/style.css" rel="stylesheet" type="text/css" />

<!-- responsive -->
<link href="css/responsive.css" rel="stylesheet" type="text/css" />

<!-- Style customizer -->
<link href="#" data-style="styles" rel="stylesheet">
<link href="css/style-customizer.css" rel="stylesheet" type="text/css" />

<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-3739416022667344",
    enable_page_level_ads: true
  });
</script>


</head>

<body>

<!--=================================
  loading -->
 <div id="loading">
  <div id="loading-center">
    <div id="loading-center-absolute">
      <div class="object" id="object_one"></div>
      <div class="object" id="object_two"></div>
      <div class="object" id="object_three"></div>
      <div class="object" id="object_four"></div>
  </div>
 </div>
</div>

<!--=================================
  loading -->
<!--=================================
  header -->
  
<div class="menu-responsive"><a href="#"> <b>Thamizh Selvan</b></a> <a id="menu-icon" class="but" href="#"><span class="ti-menu"></span> </a></div>
 <header id="left-header" class="header">
	<nav id="menu" class="navbar navbar-default">
	  <div class="navbar-header">
 	    <a class="navbar-brand" href="index.php"> <img id="logo_img" src="images/logo.png" alt=""> </a>
	  </div>
	  <div class="collapse navbar-collapse navbar-ex1-collapse">
	    <ul id="navbar" class="nav navbar-nav">
	      <li class="active"><a href="#home" class="page-scroll">Home</a></li>
	      <li><a href="#about" class="page-scroll">About</a></li>
	       <li><a href="#service" class="page-scroll">Service</a></li>
	       <li><a href="#resume" class="page-scroll">Resume</a></li>
	       <li><a href="#skill" class="page-scroll">Skill</a></li>
	     <!--   <li><a href="#portfolio" class="page-scroll">Portfolio</a></li>
	      <li><a href="#availability-calendar" class="page-scroll">Calendar</a></li>
	       <li><a href="#blog" class="page-scroll">Blog</a></li>
	       <li><a href="#testimonials" class="page-scroll">Testimonials</a></li>-->
	       <!--<li class="dropdown">
            <a href="#" data-toggle="dropdown" class="dropdown-toggle">pages </a>
            <ul class="dropdown-menu">
                <li><a href="blog.php">Blog </a></li>
                <li><a href="blog-single.php">Blog single</a></li>
                <li><a href="portfolio-single.php">Portfolio single</a></li>
                <li><a href="error-404.php">Error 404</a></li>
            </ul>
        </li>-->
	       <li><a href="#contact" class="page-scroll">contact</a></li>
	    </ul>
   </div> 
</nav>
<div class="menu-footer">
	<div class="social">
		<ul>
		  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
          <li><a href="#"><i class="fa fa-twitter"></i></a></li>
          <li><a href="#"><i class="fa fa-linkedin"></i> </a></li>
		</ul>
	</div>
	<div class="copyright">
		<p>© Thamizh Selvan<br/> all rights reserved</p>
	</div>
 </div>
</header>

<!--=================================
  header -->


<!--=================================
  intro -->

<section class="content-scroller">  
  <div id="home" class="intro-bg gradient-01" style="background:url(images/thamizhselvan-bg.png)">
   <div id="scroll-down" class="intro">
    <div class="intro-content">
      <div class="container-fluid">
      <div class="row">
       <div class="col-md-12 text-left content-left">
         <h1> <span> Hello i’m </span> Tamil Selvan </h1>
         <div id="typer"></div>
          <div class="button-large">
          	<a href="Tamil-Resume-Php-Programmer.docx" download="Tamil-Profile">Download my CV</a>
          </div>
        </div>
       </div>
     </div>
     </div>
    <a class="scroll-down page-scroll" title="Scroll Down" href="#about"><i></i></a>
  </div>
</div>
  
<!--=================================
  intro --> 


<!--=================================
  about --> 

<section id="about" class="about white-bg page-section">
 <div class="container-fluid">
   <div class="row">
   	 <div class="col-lg-4 col-md-4 col-sm-4">
   	   <div class="about-image">
   	   	 <img class="img-responsive" src="images/thamizhselvan.png" alt="">
   	   </div>	
   	   <div class="about-social">
   	   	 <ul>
   	   	  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
          <li><a href="#"><i class="fa fa-twitter"></i></a></li>
          <!--<li><a href="#"><i class="fa fa-dribbble"></i> </a></li>-->
          <!--<li><a href="#"><i class="fa fa-vimeo"></i> </a></li>-->
          <li><a href="#"><i class="fa fa-pinterest-p"></i> </a></li>
          <!--<li><a href="#"><i class="fa fa-behance"></i> </a></li>-->
          <li><a href="#"><i class="fa fa-linkedin"></i> </a></li>
   	   	 </ul>
   	   </div>
   	 </div>
   	 <div class="col-lg-8 col-md-8 col-sm-8"> 
   	 	<div class="section-title">
   	 	  <div class="section-title-name">
   	 	  	<span>Know about me</span>
   	 	  	<h2>About Me</h2>
   	 	  </div>	
   	 	  <div class="title-name-gray">
   	 	  	<strong>About me</strong>
   	 	  </div>
   	 	</div>
   	 	<div class="contact-block"> 
   	 	 <div class="row">  
   	 	 	<div class="col-lg-4 col-md-4 col-sm-4">
   	 	 		<div class="my-contact clearfix">
   	 	 			<div class="contact-icon">
   	 	 				<span class="ti-user"></span>
   	 	 			</div>
   	 	 			<div class="contact-info">
   	 	 				<h4>Name:</h4>
   	 	 				<p>Tamilselvan</p>
   	 	 			</div>
   	 	 		</div>
   	 	 	</div>
   	 	 	<div class="col-lg-4 col-md-4 col-sm-4">
   	 	 		<div class="my-contact clearfix">
   	 	 			<div class="contact-icon">
   	 	 				<span class="ti-email"></span>
   	 	 			</div>
   	 	 			<div class="contact-info">
   	 	 				<h4>Email:</h4>
   	 	 				<p>iam@thamizhselvan.info</p>
                        <!--<p>thamizha333@gmail.com</p>-->
   	 	 			</div>
   	 	 		</div>
   	 	 	</div>
   	 	 	<div class="col-lg-4 col-md-4 col-sm-4">
   	 	 		<div class="my-contact clearfix">
   	 	 			<div class="contact-icon">
   	 	 				<span class="ti-mobile"></span>
   	 	 			</div>
   	 	 			<div class="contact-info">
   	 	 				<h4>Phone:</h4>
   	 	 				<p>(+91) 9791106060</p>
   	 	 			</div>
   	 	 		</div>
   	 	 	</div>
   	 	 </div>
   	 	 <div class="row">  
   	 	 	<div class="col-lg-4 col-md-4 col-sm-4">
   	 	 		<div class="my-contact clearfix">
   	 	 			<div class="contact-icon">
   	 	 				<span class="ti-calendar"></span>
   	 	 			</div>
   	 	 			<div class="contact-info">
   	 	 				<h4>Date of birth: </h4>
   	 	 				<p>15 May 1990</p>
   	 	 			</div>
   	 	 		</div>
   	 	 	</div>
   	 	 	<div class="col-lg-4 col-md-4 col-sm-4">
   	 	 		<div class="my-contact clearfix">
   	 	 			<div class="contact-icon">
   	 	 				<span class="ti-direction-alt"></span>
   	 	 			</div>
   	 	 			<div class="contact-info">
   	 	 				<h4>Address: </h4>
   	 	 				<p>Chennai</p>
   	 	 			</div>
   	 	 		</div>
   	 	 	</div>
   	 	 	<div class="col-lg-4 col-md-4 col-sm-4">
   	 	 		<div class="my-contact clearfix">
   	 	 			<div class="contact-icon">
   	 	 			 <span class="ti-flag-alt-2"></span>
   	 	 			</div>
   	 	 			<div class="contact-info">
   	 	 				<h4>Nationality: </h4>
   	 	 				<p>Indian</p>
   	 	 			</div>
   	 	 		</div>
   	 	 	</div>
   	 	 </div>	
   	 	 <div class="row">
   	 	 	<div class="col-lg-12 col-md-12">
   	 	 	  <div class="about-block clearfix">
   	 	 		p>I have more than <b>6 years of experience</b> in the field of <b>Web Development / Graphic / Web Designing</b>. Professional in Corporate <b>Website Development</b>, <b>Corporate Branding</b>, <b>Graphic Designing</b>,<b> Web Designing,</b> Branding, SEO, SMO, SEM, Web Hosting, Web Applications & etc.</p>
          <p></p>
   	 	 		<!--<img class="pull-right" src="images/signature.png" alt="">-->
   	 	 	</div>
   	 	   </div>
   	 	 </div>
   	 	</div>
   	 </div>
   </div>		
 </div>
</section>

<!--=================================
  about --> 


<!--=================================
  services --> 

<section id="service" class="services white-bg page-section">
 <div class="container-fluid">
   <div class="row">
	<div class="col-lg-12 col-md-12">
	 <div class="section-title">
   	 	 <div class="section-title-name">
   	 	  	<span>What i can do better</span>
   	  	  	<h2>Services</h2>
   	    </div>	
   	    <div class="title-name-gray">
   	   	<strong>Services</strong>
   	   </div>
   	 </div>
	</div>
   </div>	
   <div class="row">
    <div class="col-lg-3 col-md-6 col-sm-6">
   	 <div class="service-block">
   	 	<span class="ti-desktop"></span>
   	 	<h2>Graphic Design</h2>
   	 	<p>Graphic design is an art of combining pictures and text in a website or in a brouchure which helps to promote the products (designs)/company website. Common uses of graphic design are logos , publications like magazines newspapers and books , e- book, e- newspaper & etc.,</p>
   	 	<div class="contact-button">
   	 	  <a class="clearfix" href="#"> <span class="pull-left">Read More...</span> <span class="ti-arrow-circle-right pull-right"></span></a>
   	 	 </div>
   	 </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
   	 <div class="service-block">
   	 	<span class="ti-slice"></span>
   	 	<h2>Website Development</h2>
   	 	<p>Websites are not just to look beautiful; we work to do business better from it. We design and develop good and pleasing websites. We trust in the quality of visuals, merged with proper functionality to make it user friendly</p>
   	 	<div class="contact-button">
   	 	  <a class="clearfix" href="#"> <span class="pull-left">Read More...</span> <span class="ti-arrow-circle-right pull-right"></span></a>
   	 	 </div>
   	 </div>
    </div>	
    <div class="col-lg-3 col-md-6 col-sm-6">
   	 <div class="service-block">
   	 	<span class="ti-brush-alt"></span>
   	 	<h2>Search Engine Optimization</h2>
   	 	<p>Building a website is good move to promote your business, so your online medium is ready. What Next to bring in the traffic on to your website, every day. This system which helps you to do this is named "Search Engine Optimisation (SEO).</p>
   	 	<div class="contact-button">
   	 	  <a class="clearfix" href="#"> <span class="pull-left">Read More...</span> <span class="ti-arrow-circle-right pull-right"></span></a>
   	 	 </div>
   	 </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
   	 <div class="service-block">
   	 	<span class="ti-layout-media-center"></span>
   	 	<h2>Email Marketing</h2>
   	 	<p>Email marketing presents more opportunities for your business and drives a better return on investment With email marketing, your business can create deeper relationships with a wider audience </p>
   	 	<div class="contact-button">
   	 	  <a class="clearfix" href="#"> <span class="pull-left">Read More...</span> <span class="ti-arrow-circle-right pull-right"></span></a>
   	 	 </div>
   	 </div>
    </div>
   </div>	
 </div>
</section>

<!--=================================
  services --> 


<!--=================================
  Resume --> 

<section id="resume" class="resume white-bg page-section">
 <div class="container-fluid">
   <div class="row">
  <div class="col-lg-12 col-md-12">
   <div class="section-title">
       <div class="section-title-name">
          <span>My Work Experience</span>
            <h2>Resume</h2>
        </div>  
        <div class="title-name-gray">
        <strong>Resume</strong>
       </div>
     </div>
  </div>
   </div> 
   <div class="row">
  <div class="col-lg-12 col-md-12">
    <h2>Experience : </h2>
    </div>
   </div>
 <div class="resume-block">
   <div class="row">
  <div class="col-lg-4 col-md-4 col-sm-4">
      <div class="resume-icon">
      <span class="ti-ruler-pencil"></span>     
      </div>
      <div class="resume-name">
        <h3>Build99.com</h3>
        <span>April 2014 to present</span>
      </div>
    </div> 
    <div class="col-lg-8 col-md-8 col-sm-8">
      <div class="resume-info"> 
        <h3>Senior PHP Developer</h3>
        <p>A seasoned developer with years of experience designing small, medium and enterprise applications. Very proactive developer with high coding standard, a team player and leader
        <br/>
        Working as a Senior PHP Programmer in Build99.com, Coimbatore from April 2014. 
        </p>
      </div>
    </div>
    </div>
   </div>
   <div class="resume-block">
   <div class="row">
  <div class="col-lg-4 col-md-4 col-sm-4">
      <div class="resume-icon">
      <span class="ti-bookmark-alt"></span>   
      </div>
      <div class="resume-name">
        <h3>Janana Technologies</h3>
        <span>August 2013 to March 2014</span>
      </div>
    </div> 
    <div class="col-lg-8 col-md-8 col-sm-8">
      <div class="resume-info"> 
        <h3>Software Developer</h3>
        <p>Worked as a Software Developer with Janana Technologies, Coimbatore from August 2013 to March 2014.</p>
      </div>
    </div>
    </div>
   </div>
   <div class="resume-block">
   <div class="row">
  <div class="col-lg-4 col-md-4 col-sm-4">
      <div class="resume-icon">
      <span class="ti-calendar"></span>   
      </div>
      <div class="resume-name">
        <h3>Nano Nino</h3>
        <span>August 2012 to July 2013</span>
      </div>
    </div> 
    <div class="col-lg-8 col-md-8 col-sm-8">
      <div class="resume-info"> 
        <h3>PHP Trainee</h3>
        <p>Worked as a PHP Trainee with Nano Nino, Coimbatore from August 2012 to July 2013.</p>
      </div>
    </div>
    </div>
   </div>
   <div class="row">
  <div class="col-lg-12 col-md-12">
    <h2>Education : </h2>
    </div>
   </div>
 <div class="resume-block">
   <div class="row">
  <div class="col-lg-4 col-md-4 col-sm-4">
      <div class="resume-icon">
      <span class="ti-crown"></span>      
      </div>
      <div class="resume-name">
        <h3>Maharaja Prithvi Engineering College, Avinashi</h3>
        <span>2008 to 2012</span>
      </div>
    </div> 
    <div class="col-lg-8 col-md-8 col-sm-8">
      <div class="resume-info"> 
        <h3>Information Technology</h3>
        <p>B.Tech Information Technology (2008-2012) – Passed with an aggregate of 75.7% from Maharaja Prithvi Engineering College Avinashi, Coimbatore.
/p>
      </div>
    </div>
    </div>
   </div>
   <div class="resume-block clearfix">
   <div class="row">
  <div class="col-lg-4 col-md-4 col-sm-4">
      <div class="resume-icon">
      <span class="ti-thumb-up"></span>   
      </div>
      <div class="resume-name">
        <h3>Government Higher Secondary School, Chennampatti</h3>
        <span>2006 to 2008</span>
      </div>
    </div> 
    <div class="col-lg-8 col-md-8 col-sm-8">
      <div class="resume-info"> 
        <h3>HSC (Maths, Computer Science</h3>
        <p>HSC from Government Higher Secondary School at Chennampatti with 73.08% passed out 2008</p>
<!--        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Ut enim ad minim niam, quis nostrud exercitation ullamco laboris nisi ut aliquip exea. commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>-->
      </div>
    </div>
    </div>
   </div>
   <br/>
   <div class="resume-block clearfix">
   <div class="row">
  <div class="col-lg-4 col-md-4 col-sm-4">
      <div class="resume-icon">
      <span class="ti-thumb-up"></span>   
      </div>
      <div class="resume-name">
        <h3>Government Higher Secondary School, Chennampatti</h3>
        <span>2004</span>
      </div>
    </div> 
    <div class="col-lg-8 col-md-8 col-sm-8">
      <div class="resume-info"> 
        <h3>SSLC</h3>
        <p>SSLC from Government Higher Secondary School at Chennampatti with 85.2% passed out 2006.</p>
<!--        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Ut enim ad minim niam, quis nostrud exercitation ullamco laboris nisi ut aliquip exea. commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>-->
      </div>
    </div>
    </div>
   </div>
   
 </div>
</section>

<!--=================================
  Resume --> 


<!--=================================
  My Skill --> 

<section id="skill" class="my-skill white-bg page-section">
 <div class="container-fluid">
   <div class="row">
	<div class="col-lg-12 col-md-12">
	 <div class="section-title">
   	 	 <div class="section-title-name">
   	 	  	<span>I am good at</span>
   	  	  	<h2>My Skill</h2>
   	    </div>	
   	    <div class="title-name-gray">
   	   	<strong>My Skill</strong>
   	   </div>
   	 </div>
	</div>
   </div>	
   <div class="row">
	<div class="col-lg-6 col-md-6 col-sm-6">
 	 <div class="skill-content">
 		<h2>My Professional Strengths</h2>
 		<span>“The strength of a man's virtue should not be measured by his special exertions, but by his habitual acts”</span>
 		<p>I am very honest towards my work and people. Self-confidence and my straight forwardness are my best strengths as I can raise my voice against any wrong situation whenever I find any without any fear. I rectify myself as soon as possible whenever to get pointed by someone, where I need to work on.<br /><br />		 
    <!--The other virtues practice in succession by Franklin were silence, order, resolution, frugality, industry, sincerity, Justice, moderation, cleanliness, tranquility, chastity and humility. For the summary order he followed a little scheme of employing his time each day. From five to seven each morning he spent in bodily personal attention, saying a short prayer, thinking over the day’s business and resolutions, studying and eating breakfast. From eight till twelve he worked at his trade. From twelve to one he read or overlooked his accounts and dined. From two to five he worked at his trade. The rest of the evening until 10 he spent in music, or diversion of some sort. -->
    </p>
 	 </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6">
 	 <div class="skill">
             <ul>
               <li>Web & Graphic Design
                 <div class="bar_container">
                  <span class="bar" data-bar='{ "color": "#07cb79" }'>
                    <span class="pct">97%</span>
                  </span>
                </div>
              </li>
              <li>HTML5 & CSS3
               <div class="bar_container">
                 <span class="bar" data-bar='{ "color": "#07cb79", "delay": "600" }'>
                   <span class="pct">85%</span>
                 </span>
                </div>
              </li>
              <li>JavaScript / JQuery
                <div class="bar_container">
                 <span class="bar" data-bar='{ "color": "#07cb79", "delay": "1200" }'>
                  <span class="pct">90%</span>
                 </span>
                </div>
              </li>
              <li>SEO / SEM / SMO
               <div class="bar_container">
                 <span class="bar" data-bar='{ "color": "#07cb79", "delay": "1800" }'>
                 <span class="pct">83%</span>
                </span>
               </div>
              </li>
          </ul>
          <div class="skill-chart">
          	<div class="skill-chart-expand clearfix">
               <div class="expand expand-left">
                   <p>Newbie</p>
                </div>
                <div class="expand expand-left">
                  <p>Decent</p>
                 </div>
                 <div class="expand expand-right">
                   <p>Pretty Good</p>
                 </div>
                 <div class="expand expand-right">
                   <p>Master</p>
                 </div>
               </div>
          </div>
         </div>
 	   </div>
   </div>
<!-- <div class="language-skills">
   <div class="row">
   	 <div class="col-lg-12 col-md-12"> 
   	 	<h2>Language skills</h2>
      <p>You will begin to realise why this exercise is called the Dickens Pattern with reference to the ghost showing Scrooge some different futures as you notice that the idea of this exercise is to hypnotize yourself to be aware of two very real possibilities for your future. Two distinct pathways. </p>
      </div>
   </div>
    <div class="row">
      <div class="col-lg-3 col-md-3 col-sm-3">
       <div class="chart-bar">  
          <div class="chart" id="chart1" data-percent="73">
               <span class="percent"></span>
           </div>
             <h3>English <br/> Experienced</h3>
            </div> 
       </div> 
       <div class="col-lg-3 col-md-3 col-sm-3">
       <div class="chart-bar">  
          <div class="chart" data-percent="55">
               <span class="percent"></span>
           </div>
             <h3>French <br />Advanced</h3>
       </div> 
       </div> 
       <div class="col-lg-3 col-md-3 col-sm-3">
       <div class="chart-bar">  
          <div class="chart" data-percent="89">
               <span class="percent"></span>
           </div>
             <h3>Spanish <br />Basic</h3>
       </div> 
       </div> 
       <div class="col-lg-3 col-md-3 col-sm-3">
       <div class="chart-bar">  
          <div class="chart" data-percent="95">
               <span class="percent"></span>
           </div>
             <h3>German <br />Basic</h3>
       </div> 
      </div> 
     </div> 
   <div class="knowledge">
   <div class="row">
   	 <div class="col-lg-12 col-md-12"> 
   	 	<h2>Knowledge</h2>
   	 	<p>Auis nostrud exercitation ullamco laboris nisi ut aliquip exea. commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
   	 </div>
  </div>
  <div class="row">
    <div class="col-lg-4 col-md-4 col-sm-4">
        <ul>
          <li><span class="ti-hand-point-right"></span> Web design and development</li>
          <li><span class="ti-hand-point-right"></span> Multimedia design</li>
          <li><span class="ti-hand-point-right"></span> Digital media development</li>
          <li><span class="ti-hand-point-right"></span> Interactive computing</li>
        </ul>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4">
        <ul>
          <li><span class="ti-hand-point-right"></span> Strong creative skills</li>
          <li><span class="ti-hand-point-right"></span> The ability to pay attention to detail</li>
          <li><span class="ti-hand-point-right"></span> Ability to work to deadlines</li>
          <li><span class="ti-hand-point-right"></span> Comfortable with a CMS</li>
        </ul>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4">
      <ul>
        <li><span class="ti-hand-point-right"></span> Cultivate a design sense</li>
        <li><span class="ti-hand-point-right"></span> Right balance of tools </li>
        <li><span class="ti-hand-point-right"></span> Approach every new skill</li>
        <li><span class="ti-hand-point-right"></span> Good business management</li>
      </ul>
    </div>
  </div>
 </div>	
 </div>-->
 </div>
</section>

<!--=================================
  My Skill --> 


<!--================================= 
 portfolio --> 



<!--=================================
 calendar --> 

<!--<section id="availability-calendar" class="calendar white-bg page-section">
 <div class="container-fluid">
   <div class="row">
	<div class="col-lg-12 col-md-12">
	 <div class="section-title">
   	 	 <div class="section-title-name">
   	 	  	<span>My Availability Calendar</span>
   	  	  	<h2>Availability Calendar</h2>
   	    </div>	
   	    <div class="title-name-gray">
   	   	<strong>Availability </strong>
   	   </div>
   	 </div>
	</div>
   </div>	
 <div class="row">
  <div class="col-lg-12 col-md-12">
    <div class="main-calendar clearfix">
         <div class="row">   
         <div class="col-lg-7 col-md-7">   
           <div class="calendar-section">
        	<div class="calendar-block"> <div id="datepicker"> </div> 
			</div>
			</div>
			</div>
			 <div class="col-lg-5 col-md-5">  
            <div class="date-block">
            	<div class="date-area">
                	<span class="day" id="day">Sonday</span><span class="date" id="date">27</span><span class="month" id="mnt">March</span><div class="clr"></div>
            	</div>
                <div class="dateinfo">
                	<div class="block"><span class="today"></span>Today</div>
                    <div class="block"><span class="not-ava"></span> Sorry. I am not available on those days </div>
                    <div class="block"><span class="available"></span>All other days i am available </div>
                </div>
              </div>
			       </div>
            <div class="clr"></div>
            </div>
        </div> 
       </div>
    </div>
  </div>
</section>-->

<!--=================================
 calendar --> 


<!--=================================
 blog --> 

<!--<section id="blog" class="blog white-bg page-section">
 <div class="container-fluid">
   <div class="row">
	<div class="col-lg-12 col-md-12">
	 <div class="section-title">
   	 	 <div class="section-title-name">
   	 	  	<span>My Latest Blog Posts</span>
   	  	  	<h2>From the blog </h2>
   	    </div>	
   	    <div class="title-name-gray">
   	   	<strong>Blog</strong>
   	   </div>
   	 </div>
	</div>
   </div>	
 <div class="row">
  <div class="col-lg-3 col-md-6 col-sm-6">
   <div class="blog-block">
   	  <div class="blog-image">
   	  	 <img class="img-responsive" src="images/blog/01.jpg" alt="">
   	  	 <div class="blog-date">
   	  	 	<span>June <br />05</span>
   	  	 </div>
   	  </div>
   	  <div class="blog-info">
   	  	<div class="blog-meta">
   	  		<p><span class="ti-comment-alt"></span> <a href="#">4</a></p>
   	  		<p><span class="ti-user"></span> <a href="#">Admin </a></p>
   	  		<p><span class="ti-folder"></span> <a href="#">Development</a></p>
   	  	</div>
   	  	<div class="blog-content">
   	  		<a href="blog-single.php">Are You Famous Or Focused</a>
   	  		<p>Commodo consequat ut enim ad minim niam, quis nostrud ullamco  nisi ut aliquip exea non veritatis illum laudantium</p>
   	  		<div class="blog-bottom clearfix">
   	  		 <div class="button-small">
   	  			<a href="#">Read More..</a>
   	  			</div>
   	  		<div class="social pull-right">
   	  			<ul>
		          <li><a href="#"><i class="fa fa-facebook"></i> </a></li>
		          <li><a href="#"><i class="fa fa-twitter"></i></a></li>
		          <li><a href="#"><i class="fa fa-linkedin"></i> </a></li>
		   	  	</ul>
   	  		</div>	
   	  	 </div>
   	  	</div>
   	  </div>
   </div>
  </div>
  <div class="col-lg-3 col-md-6 col-sm-6">
   <div class="blog-block">
   	  <div class="blog-image">
   	  	 <img class="img-responsive" src="images/blog/02.jpg" alt="">
   	  	 <div class="blog-date">
   	  	 	<span>Aug <br />15</span>
   	  	 </div>
   	  </div>
   	  <div class="blog-info">
   	  	<div class="blog-meta">
   	  		<p><span class="ti-comment-alt"></span> <a href="#">0</a></p>
   	  		<p><span class="ti-user"></span> <a href="#">Admin </a></p>
   	  		<p><span class="ti-folder"></span> <a href="#">Web Design</a></p>
   	  	</div>
   	  	<div class="blog-content">
   	  		<a href="blog-single.php">Does Your Life Lack Meaning</a>
   	  		<p>Exercitation ullamco laboris nisi ut aliquip exea commodo consequat ut enim ad minim niam quis minim nostrud. </p>
   	  		<div class="blog-bottom clearfix">
   	  		 <div class="button-small">
   	  			<a href="#">Read More..</a>
   	  			</div>
   	  		<div class="social pull-right">
   	  			<ul>
		          <li><a href="#"><i class="fa fa-facebook"></i> </a></li>
		          <li><a href="#"><i class="fa fa-twitter"></i></a></li>
		          <li><a href="#"><i class="fa fa-linkedin"></i> </a></li>
		   	  	</ul>
   	  		</div>	
   	  	 </div>
   	  	</div>
   	  </div>
   </div>
  </div>
  <div class="col-lg-3 col-md-6 col-sm-6">
   <div class="blog-block">
   	  <div class="blog-image">
   	  	 <img class="img-responsive" src="images/blog/03.jpg" alt="">
   	  	 <div class="blog-date">
   	  	 	<span>Sep <br />11</span>
   	  	 </div>
   	  </div>
   	  <div class="blog-info">
   	  	<div class="blog-meta">
   	  		<p><span class="ti-comment-alt"></span> <a href="#">7</a></p>
   	  		<p><span class="ti-user"></span> <a href="#">Admin </a></p>
   	  		<p><span class="ti-folder"></span> <a href="#">WordPress</a></p>
   	  	</div>
   	  	<div class="blog-content">
   	  		<a href="blog-single.php">Harness The Power Of Your Dreams</a>
   	  		<p>Auis nostrud exercitation ullamco laboris nisi ut aliquip exea commodo consequat at enim ad minim niam.  </p>
   	  		<div class="blog-bottom clearfix">
   	  		 <div class="button-small">
   	  			<a href="#">Read More..</a>
   	  			</div>
   	  		<div class="social pull-right">
   	  			<ul>
		          <li><a href="#"><i class="fa fa-facebook"></i> </a></li>
		          <li><a href="#"><i class="fa fa-twitter"></i></a></li>
		          <li><a href="#"><i class="fa fa-linkedin"></i> </a></li>
		   	  	</ul>
   	  		</div>	
   	  	 </div>
   	  	</div>
   	  </div>
   </div>
  </div>
  <div class="col-lg-3 col-md-6 col-sm-6">
   <div class="blog-block">
   	  <div class="blog-image">
   	  	 <img class="img-responsive" src="images/blog/04.jpg" alt="">
   	  	 <div class="blog-date">
   	  	 	<span>Dec <br />22</span>
   	  	 </div>
   	  </div>
   	  <div class="blog-info">
   	  	<div class="blog-meta">
   	  		<p><span class="ti-comment-alt"></span> <a href="#">10</a></p>
   	  		<p><span class="ti-user"></span> <a href="#">Admin </a></p>
   	  		<p><span class="ti-folder"></span> <a href="#">Magento</a></p>
   	  	</div>
   	  	<div class="blog-content">
   	  		<a href="blog-single.php">Does Your Life Lack Meaning</a>
   	  		<p>Mostrud exercitation ullamco laboris nisi ut aliquip exea ut enim ad minim niam quis and commodo consequat. </p>
   	  		<div class="blog-bottom clearfix">
   	  		 <div class="button-small">
   	  			<a href="#">Read More..</a>
   	  			</div>
   	  		<div class="social pull-right">
   	  			<ul>
		          <li><a href="#"><i class="fa fa-facebook"></i> </a></li>
		          <li><a href="#"><i class="fa fa-twitter"></i></a></li>
		          <li><a href="#"><i class="fa fa-linkedin"></i> </a></li>
		   	  	</ul>
   	  		</div>	
   	  	 </div>
   	  	</div>
   	  </div>
   </div>
  </div>
 </div>
 </div>
</section>-->

<!--=================================
 calendar --> 
 

<!--=================================
 blog --> 

<!--<section id="testimonials" class="testimonials white-bg page-section-pt">
 <div class="container-fluid">
   <div class="row">
	<div class="col-lg-12 col-md-12">
	 <div class="section-title">
   	 	 <div class="section-title-name">
   	 	  	<span>Look at their opinions!</span>
   	  	  	<h2>Testimonials </h2>
   	    </div>	
   	    <div class="title-name-gray">
   	   	<strong>Testimonials</strong>
   	   </div>
   	 </div>
	</div>
   </div>	
 <div class="row">
  <div class="col-lg-4 col-md-4 col-sm-4">
    <div class="testimonials-block">
      <div class="testimonials-content">
      	 <div class="testimonials-avtar">
      	 	<img class="imgresponsive" src="images/testimonials/01.jpg" alt="">
      	 </div>
      	 <div class="testimonials-comment">
      	 	<p>Are you considering buying a compatible inkjet cartridge for your printer? There are many reputed companies like Canon, Epson, Dell, and Lexmark </p>
      	 </div>
      </div>
      <div class="testimonials-name">
      	<h4>Michael Bean</h4>
      	<span>Project manager</span>
      </div>	
    </div>
    <div class="testimonials-block">
      <div class="testimonials-content">
      	 <div class="testimonials-avtar">
      	 	<img class="imgresponsive" src="images/testimonials/02.jpg" alt="">
      	 </div>
      	 <div class="testimonials-comment">
      	 	<p> Sports betting While most people enjoy casino gambling, lottery and bingo playing for the fun and excitement it provides, others may experience gambling as an addictive and distractive habit. </p>
      	 </div>
      </div>
      <div class="testimonials-name">
      	<h4>Joana Williams</h4>
      	<span>Executive Director</span>
      </div>	
    </div>
  </div>
  <div class="col-lg-4 col-md-4 col-sm-4">
    <div class="testimonials-block">
      <div class="testimonials-content">
      	 <div class="testimonials-avtar">
      	 	<img class="imgresponsive" src="images/testimonials/03.jpg" alt="">
      	 </div>
      	 <div class="testimonials-comment">
      	 	<p>While most people enjoy casino gambling, sports betting, lottery and bingo playing for the fun and excitement it provides, others may experience gambling as an addictive and distractive habit. </p>
      	 </div>
      </div>
      <div class="testimonials-name">
      	<h4>Paul Flavius</h4>
      	<span>Managing Director</span>
      </div>	
    </div>
    <div class="testimonials-block">
      <div class="testimonials-content">
      	 <div class="testimonials-avtar">
      	 	<img class="imgresponsive" src="images/testimonials/04.jpg" alt="">
      	 </div>
      	 <div class="testimonials-comment">
      	 	<p>Despite the advancements few would argue that, of feminism over the past three </p>
      	 </div>
      </div>
      <div class="testimonials-name">
      	<h4>Felica Queen</h4>
      	<span>Department Head</span>
      </div>	
    </div>
  </div>
  <div class="col-lg-4 col-md-4 col-sm-4">
    <div class="testimonials-block">
      <div class="testimonials-content">
      	 <div class="testimonials-avtar">
      	 	<img class="imgresponsive" src="images/testimonials/05.jpg" alt="">
      	 </div>
      	 <div class="testimonials-comment">
      	 	<p>Few would argue that, despite the advancements of feminism over the past three </p>
      	 </div>
      </div>
      <div class="testimonials-name">
      	<h4>Michael Bean</h4>
      	<span>Team Leader</span>
      </div>	
    </div>
    <div class="testimonials-block">
      <div class="testimonials-content">
      	 <div class="testimonials-avtar">
      	 	<img class="imgresponsive" src="images/testimonials/06.jpg" alt="">
      	 </div>
      	 <div class="testimonials-comment">
      	 	<p>Today, many people rely on computers to do homework, work, and create or store useful information.</p>
      	 </div>
      </div>
      <div class="testimonials-name">
      	<h4>Mellissa Doe</h4>
      	<span>Section Head</span>
      </div>	
    </div>
  </div>
 </div>
 </div>
</section>-->

<!--=================================
 calendar --> 


<!--=================================
 contact --> 

<section id="contact" class="google-map white-bg page-section-pt">
 <div class="container-fluid">
  <div id="google-map">
	<div class="mapouter"><div class="gmap_canvas"><iframe width="1136" height="900" id="gmap_canvas" src="https://maps.google.com/maps?q=Chennai, IN, &t=p&z=11&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe></div><style>.mapouter{overflow:hidden;height:900px;width:1136px;}.gmap_canvas {background:none!important;height:900px;width:1136px;}</style></div>
	 
 <div class="contact">  
 	<h2>Say Hi It’s Free! </h2>
 	<div class="address">
 	  <ul>
 	  	<li><span class="ti-location-pin"></span> <p>Chennai</p> </li>
 	  	<li><span class="ti-marker-alt"></span> <p>iam@thamizhselvan.info</p></li>
 	  	<li><span class="ti-mobile"></span> <p>(+91) 9791106060</p></li>
		<!--<li><span class="ti-printer"></span> <p>(098)-765-4321 </p></li>-->
 	  </ul>
 	</div>
 	<div class="social">
 	 <h4>I'm also on Social Networks</h4>
 	 <p>Follow me on social networks to get the latest news, blog, updates and much more.</p>
	 <ul>
 	  	 <li><a href="#"><i class="fa fa-facebook"></i></a></li>
         <li><a href="#"><i class="fa fa-twitter"></i></a></li>
         <!--<li><a href="#"><i class="fa fa-dribbble"></i> </a></li>
         <li><a href="#"><i class="fa fa-vimeo"></i> </a></li>
         -->
         <li><a href="#"><i class="fa fa-pinterest-p"></i> </a></li>
         <!--<li><a href="#"><i class="fa fa-behance"></i> </a></li>-->
         <li><a href="#"><i class="fa fa-linkedin"></i> </a></li>
 	  </ul>
 	</div>
  <div class="button-large"><a href="Tamil-Resume-Php-Programmer.docx" download="Tamil-Profile">Download my CV</a></div>
 </div>
 <div class="contact-form">
   <div id="contact-wrapper">
    <div class="contact-content">
     <div id="formmessage">Success/Error Message Goes Here</div>
       <form class="form-horizontal" id="postrequirementform" name="postrequirementform" method="post" action="#">
          <div class="contact-form">
            <h4>Drop me a line</h4>
            <p>Use this form to tell me about your project goals and needs. I will be in touch within 24 hours.</p>
               <input id="txtname" type="text" placeholder="Name*"  name="txtname">
               <input type="email" placeholder="Email*" name="txtemail" id="txtemail">
               <input type="text" placeholder="Phone*" name="txtphone" id="txtphone">
               <textarea class="input-message" placeholder="Comment*" rows="7" name="txtmessage" id="txtmessage"></textarea>
				<!--<button id="btnsendemail" name="submit" type="button" value="Send" class="button-small"> Say Hello! </button>-->
	            <input name="Send" type="button" onClick="fn_contacts();" value="Say Hello!" class="btncont"/>
          </div> 
          <div id="successalert"></div>
          <input type="hidden" name="hidoper" id="hidoper" value="0" />
        </form>
        <div id="ajaxloader" style="display:none"><img class="center-block" src="images/ajax-loader-white.gif" alt=""></div>
   </div>
   <a href="#" class="contact-toggle"><span class="ti-comments"></span></a>
  </div>
 </div>
 </div>
</section>

<!--=================================
 contact --> 

</section>
 
<!--=================================
 javascript --> 
 
<!-- jquery -->


<script type="text/javascript">
	function fn_contacts()
	{
		var f = document.postrequirementform;	
		if(f.txtname.value == "")
		{
			f.txtname.style.borderColor = "red";
			f.txtname.style.value="Please Enter Your Name";		
			f.txtname.focus();				
			return false;				
		}
		else
		{
       		f.txtname.style.borderColor ="green";

		}
		
		if (f.txtemail.value == "")
		{
			f.txtemail.style.borderColor = "red";			
			f.txtemail.style.value="Please Enter Your Email";			
			f.txtemail.focus();
			return false;	
		}
		
		else
		{
       		f.txtemail.style.borderColor ="green";
		}
		
		if (isValidEmail(f.txtemail.value) == false)
		{
			f.txtemail.style.borderColor = "red";			
			f.txtemail.value = "Please Enter Valid Email";			
			f.txtemail.focus();
			return false;			
		}
		else
		{
       		f.txtemail.style.borderColor ="green";
		}		
		function isValidEmail(val)
		{
		var re = /^[\w-]+(\.[\w-]+)*@([\w-]+\.)+[a-zA-Z]{2,7}$/;
			if (!val.match(re))
			{
				return false;
			} 
		}	
		
		
		if(isNaN(f.txtphone.value)||f.txtphone.value.indexOf(" ")!=-1)
		{
			f.txtphone.style.borderColor = "red";	
			f.txtphone.value= "Please Enter Your Phone";				
			f.txtphone.focus();
			return false; 
		}
		else
		{
       		f.txtphone.style.borderColor ="green";
		}		
		if (f.txtphone.value == "")
		{
			f.txtphone.style.borderColor = "red";			
			f.txtphone.value= "Please Enter Your Phone";				
			f.txtphone.focus();
			return false;
		}		
		else
		{
       		f.txtphone.style.borderColor ="green";
		}
		
		if(f.txtmessage.value=="")
		{
			f.txtmessage.style.borderColor = "red";			
			f.txtmessage.value= "Please Enter Your Message";			
			f.txtmessage.focus();
			return false;
		}
		else
		{
       		f.txtmessage.style.borderColor ="none";
		}
		f.hidoper.value=1;
		f.action = "index.php";
		f.method = "post";
		f.submit();
		return;
}
</script>


<script type="text/javascript" src="js/jquery.min.js"></script>

<!-- modernizr -->
<script type="text/javascript" src="js/modernizr.min.js"></script>

<!-- Plugins -->
<script type="text/javascript" src='js/plugins.js'></script>

<!-- map script -->
<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript" src="js/map-scripts.js"></script>

<!-- datepicker -->
<script type="text/javascript" src="js/datepicker-script.js"></script>

<!-- style customizer  -->
<script type="text/javascript" src="js/style-customizer.js"></script>

<!-- custom -->
<script type="text/javascript" src="js/custom.js"></script>
 
</body>
</html> 