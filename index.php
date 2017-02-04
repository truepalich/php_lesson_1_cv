<?php

  //About
  $name = "Stanislav";
  $surName = "Tytarenko";
  $age = 28;
  $city = "Kyiv";
  $country = "Ukraine";
  $phone = "+38 (067) 960 90 98";

  //Experience
  $exDateFrom = 9.2008;
  $exDateTo = 8.2013;
  $company = "Itirra";
  $companyUrl = "itirra.com";

  //Education
  $edDateFrom = 9.2005;
  $edDateTo = 2.2011;

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title><?=$name;?> <?=$surName;?> CV</title>
    <link rel="shortcut icon" href="http://itirra.com/assets/img/ico/itirra_favicon.ico" type="image/x-icon" >
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet"> 
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
  </head>
  <body>
    <div id="wrapper">
	    <div class="container">
	      
	      <div class="row about-row">
	        <div class="col-md-5">
	          <h1 style="color: green"><?=$name;?> <?=$surName;?></h1>
	          <h3>Web/UI Designer</h3>
	          <p>
	            Age: <?=$age;?> years<br/>
	            Location: <?=$city;?>, <?=$country;?><br/>
	            E-mail: <a href="mailto:titarenko@itirra.com">titarenko@itirra.com</a><br/>
	            Mobile phone: <?=$phone;?>
	          </p>
	        </div>
	        <div class="col-md-7">
	          <img src="img/i_1.png" alt="Stanislav Tytarenko" title="Stanislav Tytarenko" />
	        </div>
	      </div>
	      
	      <div class="row">
	        <div class="col-md-12"><h3>EXPERIENCE</h3></div>
	        <div class="col-md-5">
	          <p><?=$exDateFrom;?> – up to present</p>
	        </div>
	        <div class="col-md-7">
	          <p><b><?=$company;?></b> (<a href="<?= 'http://' . $companyUrl;?>" target="_blank"><?=$companyUrl;?></a>)</p>
	          <p>
	            Position: html/css web developer (<?=$exDateFrom;?> – <?=$exDateTo;?>)<br/>
	            Build, validate and maintain web page templates from supplied wireframe layouts using clean, lightweight, semantic HTML and CSS code that adheres to current Web Standards.
	          </p>
	          <p>
	            Position: ui designer (9.2013 – up to present).<br/>
	            Designing user interfaces for web projects (mobile apps, web-services, e-shops).
	          </p>
	        </div>
	      </div>
	      
	      <div class="row">
	        <div class="col-md-12"><h3>EDUCATION</h3></div>
	        <div class="col-md-5">
	          <p><?=$edDateFrom;?> – <?=$edDateTo;?></p>
	        </div>
	        <div class="col-md-7">
	          <p>
	            National Technical University of Ukraine 'Kyiv Polytechnic Institute',<br/>
	            Specialist of Electronic devices and systems.<br/> 
	            Specialty: Electronic devices and systems.
	          </p>
	        </div>
	      </div>
	      
	      <div class="row">
	        <div class="col-md-12">
	          <h3>IT SKILLS</h3>
	          <p>
	            Currently obtaining a ui designer position in a Ukrainian software development company with staff 15+ members. Mainly concentrating in designing of various mobile and web applications.
	          </p>
	          <p>
	            Also have a lot of practical experience as a web developer (html + css), more than 100 projects and have a good experience in working with a marketing team to develop and manage lead generation programs.
	          </p>
	          <p>
	            Was a finalist of the UA Web Challenge 2013 in the “web designer 1-” category<br/>
	            (<a href="http://uawebchallenge.com/news/v-final-results" target="_blank">http://uawebchallenge.com/news/v-final-results</a>).
	          </p>
	          <p>
	            <b>Graphic editor:</b> Photoshop, Google Web Designer;<br/>
	            <b>Front-end:</b> jQuery, HTML, CSS, LESS;<br/>
	            <b>Version control systems:</b> SVN;<br/>
	            <b>Issue tracking systems:</b> Assembla.
	        </div>
	      </div>
	      
	      <div class="row projects-row">
	        <div class="col-md-12">
	          <h3>LAST PROJECTS</h3>
	          <ul>
	            <li>
	              <b>Pennypinch</b> (<a href="http://www.pennypinch.co.uk" target="_blank">http://www.pennypinch.co.uk</a>)<br/>
	              <i>Team:</i> 7 members.<br/>
	              <i>Responsibilities:</i> development of web design, markup html.
	            </li>
	            <li>
	              <b>Mammyclub</b> (<a href="http://mammyclub.com/" target="_blank">http://mammyclub.com/</a>)<br/>
	              <i>Team:</i> 5 members.<br/>
	              <i>Responsibilities:</i> development of web design + mobile version, markup html.
	            </li>
	            <li>
	              <b>Personalinjurylawyers</b> (<a href="http://www.personalinjurylawyers.co.uk/" target="_blank">http://www.personalinjurylawyers.co.uk/</a>)<br/>
	              <i>Team:</i> 6 members.<br/>
	              <i>Responsibilities:</i> development of mobile version web design, markup html.
	            </li>
	            <li>
	              <b>Akvantis</b> (<a href="http://akvantis.com.ua" target="_blank">http://akvantis.com.ua</a>)<br/>
	              <i>Team:</i> 2 members.<br/>
	              <i>Responsibilities:</i> markup html.
	            </li>
	            <li>
	              <b>Vitagramma</b> (<a href="https://vitagramma.com" target="_blank">https://vitagramma.com</a>)<br/>
	              <i>Team:</i> 7 members.<br/>
	              <i>Responsibilities:</i> development of web design + mobile version, markup html.
	            </li>
	            <li>
	              <b>Others</b><br/>
	              25+ successfully finished web projects.
	            </li>
	          </ul>
	        </div>
	      </div>
	      
	      <div class="row row-last">
	        <div class="col-md-12">
	          <h3>LANGUAGES</h3>
	          <p>
	            Russian – native;<br/> 
	            Ukrainian – native;<br/> 
	            English – intermediate.
	          </p>
	        </div>
	      </div>
	      
	    </div>
	    
	    
		    <footer class="wrap">
		      <table>
		        <tr>
		         <td>&copy; <?=date('Y');?></td>
		       </tr>
		      </table>
		    </footer>
	      
    </div>    
  </body>
</html>
