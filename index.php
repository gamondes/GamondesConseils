<?php 
    session_start();
    session_unset();
    session_destroy();
    session_write_close();

if (!isset($_SESSION)) {session_cache_limiter('60'); session_start(); }
if (session_status() !== PHP_SESSION_ACTIVE){session_cache_limiter('60'); session_start(); } ?>

<?php
//D'abord vérifie si obtient un GET(lang), si non, la langue est celle du navigateur
if (isset($_GET["lang"])){ 
$lang=substr(trim($_GET["lang"]), 0, 2);
$_SESSION['lang'] = $lang; 
} else {
$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2); // Si pas de get, langue du navigateur. 
$_SESSION['lang'] = $lang; 
}
// puis on met une session idnum à 0
$_SESSION['idnum'] = 0;
?>

<?php 
if (!isset($_SESSION)) {session_start(); }
if (session_status() !== PHP_SESSION_ACTIVE){session_start(); }
?>
<?php require_once('hbtraduction.php'); ?>
<?php 
if (isset($_SESSION['idnum'])) {$idnum = $_SESSION['idnum'];}
if (isset($_GET['idlieu'])) {$idlieu = $_GET['idlieu'];}

function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
//  $theValue = (!get_magic_quotes_gpc()) ? addslashes($theValue) : $theValue;
  $theValue = addslashes($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? "'" . doubleval($theValue) . "'" : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}
if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form1")) {
 	
   // Dans un premier temps, envoie un mail ï¿½ nous l'association P.I.H ////////////////////////////////////////////////////////////
   $to = trim("aymeric.g.07@hotmail.fr", "'");
   
   $firstname = GetSQLValueString($_POST['firstname'], "text");
   $lastname = GetSQLValueString($_POST['lastname'], "text");
   $phone = GetSQLValueString($_POST['phone'], "text");  
   $mail = GetSQLValueString($_POST['mail'], "text");  


   $subject = "Request from " . trim($firstname,"'") . " " . trim($lastname, "'");

	   $htmlContent = " 
		        <html> 
				<body style='font-family: Titillium Web, sans-serif;'> 
				<div align='center'>
				<table width='600' bgcolor='#FFF2CC' style='border: 5px solid #244671; padding:10px' >
				<tr>
					<td align='center'>
               	    <img src='https://pihmedic.com/images/hblogofull.png' height='70' width='154' align='center'>
                    </td>
				<tr>
				<tr>
					<td style='padding-left:20px;'>
						<p align='center'><em>Phone number</em> : " . trim($phone,"'") . " </p>
						<p align='center'><em>Mail </em> : " . trim($mail,"'") . "</p>
					</td>
				<tr>
					<td>
						<br><p align='center'><img src='https://pihmedic.com/images/hblogo.png' width='35' align='absmiddle' style='margin-bottom:10px; '></p>
						<p><hr></p>
						<p align='center' style='font-size:13px;color:#666666'>P.I.H</p>
						<a href='https://www.pihmedic.com/'><p align='center' style='font-size:13px;color:#666666'>View online</p></a>
					</td>
				<tr>	
				</table>
				</div>
				</body> 
    			</html> 
				";

	// Set content-type header for sending HTML email 
	$headers = "MIME-Version: 1.0" . "\r\n"; 
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n"; 
	
	// Additional headers 
	$headers .= 'From: GAMONDES Conseils <info@gamondesconseils.com>' . "\r\n";

	//tester le mail en local 
	// Send email 
	mail($to, $subject, $htmlContent, $headers);
	
    
	
   // PARTIE 2 . ENVOIE UN MAIL DE CONFIRMATION D'ENVOIE DE LA DEMANDE DE CONTACT ////////////////////////////////////////////

	   $htmlContent2 = " 
		        <html> 
				<body style='font-family: Titillium Web, sans-serif;'> 
				<div align='center'>
				<table width='600' bgcolor='#FFF2CC' style='border: 10px solid #244671; padding:10px' >
				<tr>
					<td align='center'>
               	    <img src='https://pihmedic.com/images/hblogofull.png' height='70' width='154' align='center'>
                    </td>
				<tr>
				<tr>
					<td style='padding-left:20px;font-family:Titillium Web, sans-serif;'>
						<p style='font-size:30px;color:#244671;'> ".trad('Hello'). " " . ucfirst(trim($lastname,"'")) . " !</p>
						<p align='center'>".trad('Your request has been taken into account. The P.I.H team undertakes to provide you with an answer within a maximum of 24 hours (working days).'). "</p>
						<p align='center'>".trad('Sincerely')."</p>
						<p align='center'><em>".trad('The P.I.H team')."</em></p>
					</td>
				<tr>
					<td>
						<br><p align='center'><img src='https://pihmedic.com/images/hblogo.png' width='35' align='absmiddle' style='margin-bottom:10px; '></p>
						<p><hr></p>
						<p align='center' style='font-size:13px;color:#666666'>P.I.H</p>
						<a href='https://www.pihmedic.com'><p align='center' style='font-size:13px;color:#666666'>".trad('View online')."</p></a>
					</td>
				<tr>	
				</table>
				</div>
				</body> 
    			</html> 
				";

	//tester le mail en local 
	// Send email 
	mail(trim($mail, "'"), trad("P.I.H - Acknowledgment of receipt"), $htmlContent2, $headers);
	$alertmsg = trad('The request has been sent. We promise to get back to you within 24 hours.'); 
	

	echo "<script>alert('".$alertmsg."');</script>";
	?>
	<script>
    window.location.href='index.php?';
	</script>
	<?php
}
?>
<?php 
function Titlehighlight($text, $word, $color) {
    $replace = "<span style='color:".$color."'>".$word."</span>";
    return str_replace($word, $replace, $text);
}


function highlight($text, $words, $color) {
    foreach ($words as $word) {
        $word = trim($word); // Supprime les espaces avant et après le mot
        $replace = "<span style='color:".$color."; font-weight:bold;'>".$word."</span>";
        $text = preg_replace('/\b' . preg_quote($word, '/') . '\b/', $replace, $text);
    }
    return $text;
}



?>

<html lang="<?php echo $lang; ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
<link rel="alternate" hreflang="fr" href="https://www.pihmedic.com/pihmedicalpro.php?idnum=0&idlieu=1&lang=fr" >
<link rel="icon" type="image/png" href="images/favicon.png">
<link rel="stylesheet" href="pihcss.css" type="text/css">
<link rel="stylesheet" href="PIHCSSAdvanced.css" type="text/css">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&family=Titillium+Web:wght@300;700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Anaheim&display=swap" rel="stylesheet">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title><?php echo trad('Home') ?> - GAMONDES Conseils</title>
<meta name="description" content="<?php echo trad('Discover our solution for healthcare structures and your healthcare professionals. Manage appointments and medical consultations.') ?>">
<style type="text/css">

@media (min-width: 767px) {
	.team{
		flex-direction:row;
	}
}
	
@media (max-width: 767px) {
	.team{
		flex-direction: column;
	}
	#needhelp{
		display: none;
	}
	#infoTop{
		display: none;
	}
}

.presentationplateform .containerformdiv{
margin-bottom: 10px;
padding: 0px;
background-color: transparent;
box-shadow: none;
text-align: justify;
}
	
@keyframes fadeIn {
  0% {opacity: 0;}
  100% {opacity: 1;}
}

@keyframes flip-in-hor-bottom {
  0% {
    -webkit-transform: rotateX(80deg);
            transform: rotateX(80deg);
    opacity: 0;
  }
  100% {
    -webkit-transform: rotateX(0);
            transform: rotateX(0);
    opacity: 1;
  }
}


img {
  opacity: 0;
}
img.visible {
  animation-name: fadeIn;
  animation-duration: 1s;
  opacity: 1;
}

h1, h2 {
  -webkit-transform: rotateX(0deg);
            transform: rotateX(0deg);
  opacity: 0;
}	
h1.visible, h2.visible{
  animation-name: flip-in-hor-bottom;
  animation-duration: 1s;
  opacity: 1;
}


@keyframes fadeInUp {
  0% {
    opacity: 0;
    transform: translate3d(0, 100%, 0);
  }
  100% {
    opacity: 1;
    transform: none;
  }
}
	
p, button{
  opacity: 0;
}

p.visible, button.visible {
  opacity: 1;
  animation-name: fadeInUp;
  animation-duration: 1.5s;
  animation-fill-mode: forwards;
}

.carousel {
    display: flex;
    overflow: hidden;
    width: 50%;
    min-height: 240px;
        }
.carousel-item {
    display: none;
    width: 100%;
    transition: all 0.2s ease;
    opacity: 0;
}
	
.carousel-item.active {
    opacity: 1;
	display: flex;
}

.carousel-item img {
  width: 360px;
  height:220px;
  background-size: cover;
  box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06); border-radius:0.5rem; 	
}
	
.carousel-item div{
margin-left: 35px;
text-align: justify;
}

	
/* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
@media screen and (min-width: 950px) {
  #keepstraight{
  display:inline;
  }
  #managerjpg{
  display:inline;
  }
  #surgerypng{
  display:inline;
  }
  #patientpng{
  display:inline;
  }
  .column3 {
    width: 100%;
  }
  #sidediv{
  padding-top:160px;
  }
  #paddingdiv{
  padding-left:20%;
  }
  #errorpatientdiv{
  display:block;
  }
  #patienterrorbtn{
  display:none;
  }
  #solutionforregions{
  display: block;
  }
  .shadowleft{
  padding:50px; width:40%
  }
  .shadowright{
  padding:50px; background: linear-gradient(-75deg, rgba(255,242,204,1) 80%, rgba(226,238,255,0) 80%);
  width: 60%;
  }
  .shadowrightV2{
  padding:50px; padding-right: 100px; background: linear-gradient(75deg, rgba(226,238,255,1) 80%, rgba(255,226,252,0) 80%); 
  width:60%;
  }
  .shadowright div{
	  margin-left: 35%;
  }
  .shadowrightV2 div{
	  margin-left: 35%;
  }  
	.mobilebckg{
		display: none;
	}
}
@media screen and (max-width: 949px) {
  #keepstraight{
  display:none;
  }
  .column3 {
    width: 100%;
  }
  #managerjpg{
  display:none;
  }
  #surgerypng{
  display:none;
  }
  #patientpng{
  display:none;
  }
  #doctorpng{
  border-radius:5px;
  box-shadow:0px 10px 10px grey;
  }
  #sidediv{
  padding-top:30px;
  }
  #btnspecdiv{
  text-align:left;
  }
  #paddingdiv{
  padding-left:5%;
  }
  #errorpatientdiv{
  display:none;
  }
  #patienterrorbtn{
  display:block;
  }
  #solutionforregions{
  display: none;
  }
  .shadowleft{
  display:none;
  }
  .shadowright{
  background-color: rgba(255,242,204,1); width:100%; padding:50px 0px 50px 0px;
  }
  .shadowrightV2{
  background-color: rgba(226,238,255,1); width:100%; padding:50px 0px 50px 0px;
  }
  .shadowright div{
	  margin-left: 10%;
  }
  .shadowrightV2 div{
	  margin-left: 10%;
  }
	.mobilebckg{
		display: block;
	}
  
}

.flexcontainerdirection{
background-size: auto 100%;
transition: background-size 0.4s;
}
.flexcontainerdirection:hover{
background-size: auto 110%;
cursor:pointer;
}

.flexcontainerdirection h2{
text-decoration: underline 0.15em rgba(0, 0, 0, 0);
transition: all 300ms;
}

.flexcontainerdirection:hover h2{
padding-left:30px;
text-decoration-color: #C39527;
text-underline-offset: 0.4em;
}

body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
body {font-family: "Anaheim", sans-serif;}

/* The Close Button */
.row {  
  display: flex;
  flex-wrap: wrap;
  padding-bottom:75px;
  }

.side {
  flex: 30%;
  padding:10px;
}

/* Main column */
.main {
  flex: 65%;
  padding:5px;
}

iframe{
border-radius:5px; 
overflow:hidden;
height:60%; 
width:50%;
background: linear-gradient(140deg, rgba(255,242,204,1) 34%, rgba(36,70,113,1) 100%);
position: absolute;
}

.rowpicture {
  display: -ms-flexbox; /* IE 10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE 10 */
  flex-wrap: wrap;
  padding: 0 4px;
}

/* Create two equal columns that sits next to each other */
.column {
  -ms-flex: 50%; /* IE 10 */
  flex: 50%;
  padding: 0 4px;
}

.column img {
  margin-top: 8px;
  vertical-align: middle;
  border-radius:2px;
}

/* Create three equal columns that floats next to each other */
.column2 {
  float: left;
  padding: 10px;
}

.column3 {
  float: left;
  padding: 10px;
}

/* Clear floats after the columns */
.row3:after {
  content: "";
  display: table;
  clear: both;
}


@keyframes example {
  from {outline: 0px solid  #C99903;}
  to {outline: 30px solid  rgba(255,255,255,0);}
}

	



.btnspec{
background-color:transparent;
color:#244671;
font-size:17px;
cursor:default;
}
.btnspec img{
margin-right:5px;
}

.btnspec:hover{
background-color:transparent;
}


/*  #PC
================================================== */
@media all and (min-width: 950px) {
 
  .column3 {
    width: 31%;
  }
  .column2 {
    width: 45%;
  }


 .flexcontainerdirection{
 flex-direction: row;
 }
 .flexcontainerdirectiondiv{
 width:50%;
 }
}


/*  #Mobile (Portrait)
================================================== */
/* Note: Design for a width of 320px */
@media all and (max-width: 949px) {
  .column3 {
    width: 95%;
  }
  .column2 {
    width: 95%;
  }
	}
	
 
 .flexcontainerdirection{
 flex-direction: column;
 }
 .flexcontainerdirectiondiv{
 width:100%;
 }
 #ruralitydiv{
 flex-direction: column-reverse;
 }
}




.slider {
  -webkit-appearance: none;
  width: 100%;
  height: 15px;
  border-radius: 5px;
  background: #d3d3d3;
  outline: none;
  opacity: 0.7;
  -webkit-transition: .2s;
  transition: opacity .2s;
}

.slider:hover {
  opacity: 1;
}


.flip-in-hor-bottom {
	-webkit-animation: flip-in-hor-bottom 0.5s cubic-bezier(0.250, 0.460, 0.450, 0.940) both;
	        animation: flip-in-hor-bottom 0.5s cubic-bezier(0.250, 0.460, 0.450, 0.940) both;
}

.slider::-webkit-slider-thumb {
  -webkit-appearance: none;
  appearance: none;
  width: 25px;
  height: 25px;
  border-radius: 50%;
  background: #244671;
  cursor: pointer;
}

.slider::-moz-range-thumb {
  width: 25px;
  height: 25px;
  border-radius: 50%;
  background: #04AA6D;
  cursor: pointer;
}

.btnV2 {
  -webkit-appearance: none;
  background-color: #7EABC9;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  transition:0.4s;
  font-family: 'Titillium Web', sans-serif;
 }

.btnV2 img{
filter:brightness(0) invert(1);
 }
	
.btnV2:hover {
  background-color: #F3F7FE;
	color: #244671;
}
	
.btnV2:hover img{
;filter:brightness(1) invert(0)
}

	
	.divlink a{
		font-size: 120%;
		margin-right: 15px;
	}
	

.patern{
background-color: #000000;
opacity: 1;
background: radial-gradient(circle, transparent 20%, #000000 20%, #000000 80%, transparent 80%, transparent), radial-gradient(circle, transparent 20%, #000000 20%, #000000 80%, transparent 80%, transparent) 12.5px 12.5px, linear-gradient(#323232 1px, transparent 1px) 0 -0.5px, linear-gradient(90deg, #323232 1px, #000000 1px) -0.5px 0;
background-size: 25px 25px, 25px 25px, 12.5px 12.5px, 12.5px 12.5px;
}

</style>
<script language="JavaScript" type="text/JavaScript">
<!--
// When the user scrolls down 80px from the top of the document, resize the navbar's padding and the logo's font size

window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (this.oldScroll > this.scrollY) {
    document.getElementById("navbar").style.top = "0";
  } else {
    document.getElementById("navbar").style.top = "-100px";
  }
  
    console.log(this.oldScroll > this.scrollY);
  this.oldScroll = this.scrollY;
}


function opacity(itemid, transition, marginBottomEnd) { //v2.0
	document.getElementById(itemid).style.opacity = "0";
	document.getElementById(itemid).style.transition = transition;
	document.getElementById(itemid).style.opacity = "1";
	document.getElementById(itemid).style.marginBottom = marginBottomEnd;
}
/* Toggle between showing and hiding the navigation menu links when the user clicks on the hamburger menu / bar icon */
function myFunction(div) {
  var x = document.getElementById(div);
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}


function fadeout(img, p){
    var imgElement = document.getElementById("imgfunction");
    var textElement = document.getElementById("pfunction");
    imgElement.style.transition = "opacity 0.2s";
    textElement.style.transition = "opacity 0.2s";
    imgElement.style.opacity = 0;
    textElement.style.opacity = 0;
    setTimeout(function() {
        imgElement.src = img;
        textElement.innerHTML = p;
        imgElement.style.opacity = 1;
        textElement.style.opacity = 1;
    }, 200); // Attendre 200ms avant de changer l'image et le texte
}

// Fonction pour faire défiler jusqu'à la section cible
function scrollToSection(targetId) {
    const targetDiv = document.getElementById(targetId);
    if (targetDiv) {
        targetDiv.scrollIntoView({ behavior: "smooth" });
    }
}
//-->
</script>


</head>

<body bgcolor="black" style="padding-bottom:0px; margin-bottom:0px; overflow-x:hidden;">
<?php include('pihmedicalpromenuhaut.php') ?>


	
<div style="min-height:100%; margin-top: 50px; ">
	
	<video autoplay loop muted playsinline preload="auto" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover; z-index: -1;">
	<source src="ligne.mp4" type="video/mp4"> <!-- Remplace par l'URL de ta vidéo -->
	</video>


	<div style="display: flex; padding: 10px; padding-top: 100px;">


		<div id="maindivpresentation" style=" width: 85%; flex: 1; margin-right: 10px;" align="center" class="">
			<img src="images/GC_logo.png" height="100" />
			<h1 class="FrontTitle" style="font-size: 300%; margin-top:15px;"><?php echo trad('GAMONDES M&eacute;dical Conseils') ?></h1>
			<h1 class="FrontTitle" style=""><?php echo trad('Innovation and medical expertise at the service of your business') ?></h1>
			<div class="divlink">
				<button class="alternative" style="margin-bottom: 5px;" onClick="scrollToSection('TechnologyInnovation')"><?php echo trad('Technology Innovation') ?> &#8594;</button>
				<button class="alternative" style="margin-bottom: 5px;" onClick="scrollToSection('MedicalExpertise')"><?php echo trad('Medical Expertise') ?> &#8594;</button>
				<button class="alternative" style="margin-bottom: 5px;" onClick="scrollToSection('InternationalExperience')"><?php echo trad('International Experience') ?> &#8594;</button>
				<button class="alternative" style="margin-bottom: 5px;" onClick="scrollToSection('OperationsManagement')"><?php echo ucfirst(trad('Operations Management')) ?> &#8594;</button>
				<button class="alternative" style="margin-bottom: 5px;" onClick="scrollToSection('Recruitment')"><?php echo ucfirst(trad('Recruitment')) ?> &#8594;</button>
			</div>
		</div>

		<div style="min-width: 400px" class="containerformdiv" id="NeedHelp">
			<h1 style="font-size:125%;"><?php echo trad("Do not hesitate. Jusk ask.") ?></h1>

			<form action="<?php echo $editFormAction; ?>" method="POST" name="form1" >
			<label for="fname"><?php echo trad('Given name') ?></label>
			<input type="text" id="fname" name="firstname" placeholder="<?php echo trad('Your given name') ?>">

			<label for="lname"><span style="color:red">*</span><?php echo trad('Familly name') ?></label>
			<input type="text" id="lname" name="lastname" placeholder="<?php echo trad('Your familly name') ?>" required>

			<label for="lphone"><?php echo trad('Phone') ?></label>
			<input type="text" id="lphone" name="phone" placeholder="<?php echo trad('Your phone number') ?>">

			<label for="lphone"><span style="color:red">*</span><?php echo trad('Mail') ?></label>
			<input type="text" id="lmail" name="mail" placeholder="<?php echo trad('Your email adress') ?>" required>

			<input type="submit" value="<?php echo trad('Contact us') ?>">
			<input type="hidden" name="MM_insert" value="form1">
			</form>
		</div>

	</div>

	
</div>


<div id="TechnologyInnovation" style="width:100%;padding-top:2%; padding-bottom:0%;" class="patern" align="center">
    <?php 
    $translated = trad('Technology Innovation');
    $highlighted = Titlehighlight($translated, 'Technology', '#1A56DB');

    echo "<h1>".$highlighted."</h1>";
    ?>
    <div class="form-container centered">
		
        <div class="form-group">
            <img src="images/iStock-1442946345.jpg" style="width:100%; height:300px; object-fit:cover; border-radius:0.5rem;">
        </div>
        <div class="form-group" style="text-align: justify;">
            <?php
            $highlightWords = array(trad("unbeatable value for money"), trad("affordable price"), trad("freedom to choose"), trad("transparency"), trad("respect"), trad("cutting-edge technology"), trad("preferred choice"), 'P.I.H Medic');

            $translated1 = trad('In an increasingly digital world, technological innovation is at the heart of business success. As founder of a SaaS healthcare platform, I have demonstrated my ability to use technology to improve healthcare services.');
            $highlighted1 = highlight($translated1, $highlightWords, '#1A56DB');
            echo "<p>".$highlighted1."</p>";

            $translated2 = trad('This platform, designed specifically for small and medium-sized healthcare structures, enables more efficient and intuitive management of healthcare services.');
            $highlighted2 = highlight($translated2, $highlightWords, '#1A56DB');
            echo "<p>".$highlighted2."</p>";

            $translated3 = trad('Using this technology, customers can concentrate on what they do best: taking care of their patients.');
            $highlighted3 = highlight($translated3, $highlightWords, '#1A56DB');
            echo "<p>".$highlighted3."</p>";
            ?>
        </div>
    </div>
</div>



<div id="Medicalappointments" style="width:100%; background-color:black; padding-top:2%; padding-bottom:0%;" align="center">
   
	<div class="form-container" style="align-items:center; display: none">	
		
		<div class="form-group">
		 <img  width="80%" src="images/iStock-962094986.jpg" style="box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06); border-radius:0.5rem; border: none;">
		</div>
		
		<div id="C2" class="presentationplateform form-group" style="flex:1; padding-right:20px;">
		
		<div class="containerformdiv">
			<div class="accordion-flush">
			<?php 
			  $highlightWords = array(trad("variable"));
			  $translated1 = trad('Reservation slots of variable duration');
			  $highlighted1 = highlight($translated1, $highlightWords, '#1A56DB');
			  echo "<h2 class='accordion' style='font-size:100%'>".$highlighted1."</h2>";
			?>
			<p><?php echo trad('Our calendar allows you to personalize the duration of your reservation slots. Whether you need a short window for a quick consultation or a longer window for a complex procedure, our system adapts to your needs.') ?></p>
			</div>
        </div>
		 
		<div class="containerformdiv">
			<div class="accordion-flush">
			<?php 
			  $highlightWords = array(trad("Filter"));
			  $translated2 = trad('Filter by consultation reason');
			  $highlighted2 = highlight($translated2, $highlightWords, '#1A56DB');
			  echo "<h2 class='accordion' style='font-size:100%'>".$highlighted2."</h2>";
			?>
			<p><?php echo trad('With our filter by consultation reason, you can easily sort and view your appointments. Whether you are looking for all patients who came for an annual check-up or those who need a particular follow-up, our filter helps you organize your day.') ?></p>
			</div>
		</div>

		<div class="containerformdiv">
			<div class="accordion-flush">
			<?php 
			  $highlightWords = array(trad("Cancellation"));
			  $translated3 = trad('Cancellation in cascade');
			  $highlighted3 = highlight($translated3, $highlightWords, '#1A56DB');
			  echo "<h2 class='accordion' style='font-size:100%'>".$highlighted3."</h2>";
			?>
			<p><?php echo trad('We know that unforeseen events are part of your daily life. That\'s why we have integrated a cascade cancellation function that allows you to cancel several appointments in one action, saving you valuable time.') ?></p>
			</div>
		</div>

		<div class="containerformdiv">
			<div class="accordion-flush">
			<?php 
			  $highlightWords = array(trad("multi-site"));
			  $translated4 = trad('Multi-site agenda');
			  $highlighted4 = highlight($translated4, $highlightWords, '#1A56DB');
			  echo "<h2 class='accordion' style='font-size:100%'>".$highlighted4."</h2>";
			?>
			<p><?php echo trad('If you work on several sites, our multi-site agenda is for you. It allows you to manage all your appointments, regardless of their location, in a single agenda. No more stress of having to juggle multiple agendas!') ?></p>
			</div>
		</div>

		<div class="containerformdiv">
			<div class="accordion-flush">
			<?php 
			  $highlightWords = array(trad("appointment"));
			  $translated5 = trad('Appointment booking in cascade');
			  $highlighted5 = highlight($translated5, $highlightWords, '#1A56DB');
			  echo "<h2 class='accordion' style='font-size:100%'>".$highlighted5."</h2>";
			?>
			<p><?php echo trad('To make things easier for you, we have also integrated an appointment booking function in cascade. You can thus schedule several appointments at once, allowing you to effectively manage your schedule.') ?></p>
			</div>
		</div>

		<div class="containerformdiv">
			<div class="accordion-flush">
			<?php 
			  $highlightWords = array(trad("email"));
			  $translated6 = trad('Cancellation by email');
			  $highlighted6 = highlight($translated6, $highlightWords, '#1A56DB');
			  echo "<h2 class='accordion' style='font-size:100%'>".$highlighted6."</h2>";
			?>
			<p><?php echo trad('To make the cancellation process as simple as possible, we have included an email cancellation option. Your patients can thus cancel their appointment with ease, leaving you more time to focus on what really matters: patient care.') ?></p>
			</div>
		</div>

		<div class="containerformdiv">
			<div class="accordion-flush">
			<?php 
			  $highlightWords = array(trad("teleconsultations"));
			  $translated7 = trad('Support for teleconsultations');
			  $highlighted7 = highlight($translated7, $highlightWords, '#1A56DB');
			  echo "<h2 class='accordion' style='font-size:100%'>".$highlighted7."</h2>";
			?>
			<p><?php echo trad('In an increasingly connected world, we have ensured that our agenda supports teleconsultations. You can thus extend your reach and provide care to your patients, wherever they are.') ?></p>
			</div>
		</div>

		<div class="containerformdiv">
			<div class="accordion-flush">
			<?php 
			  $highlightWords = array(trad("clear"), trad("intuitive"));
			  $translated8 = trad('Clear and intuitive interface');
			  $highlighted8 = highlight($translated8, $highlightWords, '#1A56DB');
			  echo "<h2 class='accordion' style='font-size:100%'>".$highlighted8."</h2>";
			?>
			<p><?php echo trad('Finally, we designed our interface to be as clear and intuitive as possible. You can easily navigate your calendar and quickly access the information you need.') ?></p>
			</div>
		</div>

    </div>
		
</div>
	
<div id="MedicalExpertise" style="width:100%;padding-top:2%; padding-bottom:0%;" class="patern" align="center">
    <?php 
    $translated = trad('Medical Expertise');
    $highlighted = Titlehighlight($translated, 'Medical', '#1A56DB');

    echo "<h1>".$highlighted."</h1>";
    ?>
    <div class="form-container centered">
		
        <div class="form-group">
            <img src="images/paramedic.jpg" style="width:100%; height:300px; object-fit:cover; border-radius:0.5rem;">
        </div>
        <div class="form-group" style="text-align: justify;">
            <?php
            $highlightWords = array(trad("unbeatable value for money"), trad("affordable price"), trad("freedom to choose"), trad("transparency"), trad("respect"), trad("cutting-edge technology"), trad("preferred choice"), 'P.I.H Medic');

            $translated1 = trad('With training in emergency care and experience as an emergency nurse, I have acquired solid medical expertise. I also completed my training with a university degree in life-saving emergency care and clinical research.');
            $highlighted1 = highlight($translated1, $highlightWords, '#1A56DB');
            echo "<p>".$highlighted1."</p>";

            $translated2 = trad('This medical expertise enables me to understand my customers\' healthcare issues and to propose solutions tailored to their needs.');
            $highlighted2 = highlight($translated2, $highlightWords, '#1A56DB');
            echo "<p>".$highlighted2."</p>";

            $translated3 = trad('My goal is to help my clients navigate the complex healthcare landscape and provide the best possible care to their patients.');
            $highlighted3 = highlight($translated3, $highlightWords, '#1A56DB');
            echo "<p>".$highlighted3."</p>";
            ?>
        </div>
    </div>
</div>
	
<div id="Actofcare" style="width:100%; background-color:black; padding-top:2%; padding-bottom:0%;" align="center">
   
	<div style="align-items:center; display: none" class="form-container">		
		
		<div style="" class="form-group">
		 <img  width="80%" src="images/fichepatient.png" style="box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06); border-radius:0.5rem; ">
		</div>
		
		<div id="C2" class="presentationplateform form-group" style="">
			<div class="containerformdiv">
				<div class="accordion-flush">
				<?php 
				  $highlightWords = array(trad("simple"));
				  $translated1 = trad('Draft consultation reports in a simple way');
				  $highlighted1 = highlight($translated1, $highlightWords, '#1A56DB');
				  echo "<h2 class='accordion' style='font-size:100%'>".$highlighted1."</h1>";
				?>
				<p><?php echo trad('Our platform offers a user-friendly interface that simplifies the drafting of your consultation reports. You can easily enter all relevant information, allowing you to devote more time to your patients and less time to paperwork.'); ?></p>
				</div>
			</div>

			<div class="containerformdiv ">
				<div class="accordion-flush">
				<?php 
				  $highlightWords = array(trad("attachments"));
				  $translated2 = trad('Add attachments to each consultation');
				  $highlighted2 = highlight($translated2, $highlightWords, '#1A56DB');
				  echo "<h2 class='accordion' style='font-size:100%'>".$highlighted2."</h1>";
				?>
				<p><?php echo trad('Each consultation is unique and may require specific documents or images. Our platform allows you to easily add attachments to each consultation, ensuring you always have all the information you need at your fingertips.'); ?></p>
				</div>
			</div>

			<div class="containerformdiv ">
				<div class="accordion-flush">
				<?php 
				  $highlightWords = array(trad("ICD 10"));
				  $translated3 = trad('Help yourself with ICD 10');
				  $highlighted3 = highlight($translated3, $highlightWords, '#1A56DB');
				  echo "<h2 class='accordion' style='font-size:100%'>".$highlighted3."</h1>";
				?>
				<p><?php echo trad('ICD 10 is a valuable tool for any health professional. Our platform integrates ICD 10, allowing you to accurately code your diagnoses and ensure accurate billing and tracking.'); ?></p>
				</div>
			</div>

			<div class="containerformdiv ">
				<div class="accordion-flush">
				<?php 
				  $highlightWords = array(trad("AMM"));
				  $translated4 = trad('Help yourself with the list of authorized medicines on the market (AMM)');
				  $highlighted4 = highlight($translated4, $highlightWords, '#1A56DB');
				  echo "<h2 class='accordion' style='font-size:100%'>".$highlighted4."</h1>";
				?>
				<p><?php echo trad('Prescribing medication is a major responsibility. Our platform includes a list of authorized medicines on the market, allowing you to prescribe with confidence, knowing that you have the most recent and accurate information.'); ?></p>
				</div>
			</div>

			<div class="containerformdiv">
				<div class="accordion-flush">
				<?php 
				  $highlightWords = array(trad("Export"));
				  $translated5 = trad('Export all your consultations');
				  $highlighted5 = highlight($translated5, $highlightWords, '#1A56DB');
				  echo "<h2 class='accordion' style='font-size:100%'>".$highlighted5."</h1>";
				?>
				<p><?php echo trad('Whether you need to share information with other health professionals or simply want to keep track of your work, our platform allows you to easily export all your consultations. You can thus access your data when you need it, wherever you are.'); ?></p>
				</div>
			</div>

			<div class="containerformdiv">
				<div class="accordion-flush">
				<?php 
				  $highlightWords = array(trad("highlight"));
				  $translated6 = trad('Highlight important medical history');
				  $highlighted6 = highlight($translated6, $highlightWords, '#1A56DB');
				  echo "<h2 class='accordion' style='font-size:100%'>".$highlighted6."</h1>";
				?>
				<p><?php echo trad('A patient\'s medical history can have a significant impact on their treatment. Our platform allows you to highlight important medical history, ensuring you always have all the key information at hand when making care decisions.'); ?></p>
				</div>
			</div>

			<div class="containerformdiv">
				<div class="accordion-flush">
				<?php 
				  $highlightWords = array(trad("care plan"));
				  $translated7 = trad('Create an ongoing care plan for the patient');
				  $highlighted7 = highlight($translated7, $highlightWords, '#1A56DB');
				  echo "<h2 class='accordion' style='font-size:100%'>".$highlighted7."</h1>";
				?>
				<p><?php echo trad('A well-designed care plan can make a big difference in a patient\'s health. Our platform allows you to create an ongoing care plan for each patient, helping you track progress and adjust treatment as needed.'); ?></p>
				</div>
			</div>

			<div class="containerformdiv">
				<div class="accordion-flush">
				<h2 class='accordion' style='font-size:100%'><?php echo trad('Print your prescriptions and fees') ?></h2>
				<p><?php echo trad('Managing prescriptions and fees can be a complex task. Our platform simplifies this process by allowing you to directly print your prescriptions and fees. You can thus focus on what really matters: providing quality care to your patients.') ?></p>
				</div>
			</div>

    </div>
	
</div>
	

<div id="InternationalExperience" style="width:100%;padding-top:2%; padding-bottom:0%;" class="patern" align="center">
    <?php 
    $translated = trad('International Experience');
    $highlighted = Titlehighlight($translated, 'International', '#1A56DB');

    echo "<h1>".$highlighted."</h1>";
    ?>
    <div class="form-container centered">
		
        <div class="form-group">
            <img src="images/iStock-1829896427.jpg" style="width:100%; height:300px; object-fit:cover; border-radius:0.5rem;">
        </div>
        <div class="form-group" style="text-align: justify;">
            <?php
            $highlightWords = array(trad("unbeatable value for money"), trad("affordable price"), trad("freedom to choose"), trad("transparency"), trad("respect"), trad("cutting-edge technology"), trad("preferred choice"), 'P.I.H Medic');

            $translated1 = trad('Working on an international scale requires exceptional adaptability and cultural understanding.');
            $highlighted1 = highlight($translated1, $highlightWords, '#1A56DB');
            echo "<p>".$highlighted1."</p>";

            $translated2 = trad('My experience as an emergency nurse on international missions, including the medicalization of a nuclear power plant in China during the Covid pandemic, is testament to my ability to operate effectively in diverse and demanding environments.');
            $highlighted2 = highlight($translated2, $highlightWords, '#1A56DB');
            echo "<p>".$highlighted2."</p>";

            $translated3 = trad('This experience has enabled me to develop a global perspective and in-depth understanding of the unique challenges facing healthcare organizations around the world.');
            $highlighted3 = highlight($translated3, $highlightWords, '#1A56DB');
            echo "<p>".$highlighted3."</p>";
            ?>
        </div>
    </div>
</div>
	
	
<div id="Teleconsultation" style="width:100%; background-color:black; padding-top:2%; padding-bottom:0%;" align="center">
   

	<div style="align-items:center; display: none" class="form-container">		
		
		<div style="" class="form-group">
		 <img  width="60%" src="images/teleconsultation.jpg" style="box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06); border-radius:0.5rem; ">
		</div>
		
		<div class="presentationplateform form-group" style="flex:1; padding-right:20px;">
		
		<div class="containerformdiv">
			<div class="accordion-flush">
			<h2 class='accordion' style='font-size:100%'><?php echo trad('Flexible Teleconsultation: Adapt to Patient Needs') ?></h2>
			<p><?php echo trad('Start a teleconsultation from a scheduled appointment or spontaneously. This offers maximum flexibility to meet patient needs at any time.') ?></p>
			</div>
        </div>
			
		<div class="containerformdiv">
			<div class="accordion-flush">
			<h2 class='accordion' style='font-size:100%'><?php echo trad('Parallel Drafting of Care Act: Optimize Your Time') ?></h2>			<p><?php echo trad('With our parallel drafting of the care act feature, you can capture important details during the teleconsultation. This allows for efficient use of your time.')?></p>
			</div>
        </div>
		 
		<div class="containerformdiv">
			<div class="accordion-flush">
			<h2 class='accordion' style='font-size:100%'><?php echo trad('Advance Billing: Facilitate Payment Management') ?></h2>
			<p><?php echo trad('With our advance billing option, you can ensure financial compensation for the services rendered. This facilitates payment management and ensures financial transparency.') ?></p>
			</div>
		</div>
			
	</div><?php // fin de presentationplateform ?> 
	</div><?php // fin de display flex ?>
</div><?php //fin de téléconsultaiton ?>

	
<div id="OperationsManagement" style="width:100%;padding-top:2%; padding-bottom:0%;" class="patern" align="center">
    <?php 
    $translated = trad('Operations Management');
    $highlighted = Titlehighlight($translated, 'Operations', '#1A56DB');

    echo "<h1>".$highlighted."</h1>";
    ?>
    <div class="form-container centered">
		
        <div class="form-group">
            <img src="images/iStock-1151390404.jpg" style="width:100%; height:300px; object-fit:cover; border-radius:0.5rem;">
        </div>
        <div class="form-group" style="text-align: justify;">
            <?php
            $highlightWords = array(trad("unbeatable value for money"), trad("affordable price"), trad("freedom to choose"), trad("transparency"), trad("respect"), trad("cutting-edge technology"), trad("preferred choice"), 'P.I.H Medic');

            $translated1 = trad('As Medical Operation Manager, I demonstrated my ability to effectively manage operations in large-scale, complex contexts.');
            $highlighted1 = highlight($translated1, $highlightWords, '#1A56DB');
            echo "<p>".$highlighted1."</p>";

            $translated2 = trad('I coordinated teams, managed resources and made strategic decisions to ensure the smooth running of operations.');
            $highlighted2 = highlight($translated2, $highlightWords, '#1A56DB');
            echo "<p>".$highlighted2."</p>";

            $translated3 = trad('This experience has enabled me to develop leadership, strategic planning and problem-solving skills, which are essential in helping my customers optimize their operations and achieve their objectives.');
            $highlighted3 = highlight($translated3, $highlightWords, '#1A56DB');
            echo "<p>".$highlighted3."</p>";
            ?>
        </div>
    </div>
</div>


<div id="statistics" style="width:100%; background-color:black; padding-top:2%; padding-bottom:0%;" align="center">
   
	
	<div style="align-items:center; display: none" class="form-container">		
		
		<div style="width:50%;" class="form-group">
		 <img  width="80%" src="images/statcapture.png" style="box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06); border-radius:0.5rem; ">
		</div>
		
		<div class="presentationplateform form-group" style="padding-right:20px;">
		
		<div class="containerformdiv">
			<div class="accordion-flush">
			<h2 class='accordion' style='font-size:100%'><?php echo trad('Discover your patients') ?></h2>
			<p><?php echo trad('Our platform provides you with detailed medical statistics, including the average age of your patients and the most frequent pathologies. Use this information to better understand your patients and adapt your care accordingly.') ?></p>
			</div>
        </div>
			
		<div class="containerformdiv">
			<div class="accordion-flush">
			<h2 class='accordion' style='font-size:100%'><?php echo trad('Manage your time effectively') ?></h2>			
			<p><?php echo trad('Track the volume of your activity with our comprehensive range of statistics, including the total number of appointments, the number of cancelled appointments, and much more. These data will help you manage your schedule and optimize your practice.')?></p>
			</div>
        </div>
		 
		<div class="containerformdiv">
			<div class="accordion-flush">
			<h2 class='accordion' style='font-size:100%'><?php echo trad('Understand your financial performance') ?></h2>
			<p><?php echo trad('Our platform provides you with accurate financial statistics to help you understand your financial performance, identify trends, and make informed decisions for your practice.') ?></p>
			</div>
		</div>
			
	</div><?php // fin de presentationplateform ?> 
	</div><?php // fin de display flex ?>
</div><?php //fin de téléconsultaiton ?>

	
<div id="" style="width:100%; background-color:#F9FAFB; padding-top:2%; padding-bottom:0%; display: none;"  align="center">
<h1 ><?php echo trad('Who does P.I.H MEDIC apply to ?') ?></h1>
<div style="display: flex; align-items: center" align="center" >
  
		
			<div style="width: 40%; margin-left: 10px;">
			<div class="container" style=" margin-top:10px;">
			<img src="images/medical-house.jpg" style="width:70%; height:300px; object-fit:cover; border-radius:2px;box-shadow: 12px 12px 0px 6px #1A56DB;">
		    <h2><?php echo trad('Healthcare structure') ?></h2>
		    <p style="text-align:center; "><?php echo trad('Health home, care center, medical office, multi-professional or not, benefit from our innovative digital solution that is easy to use and available on all media. It was created and designed by healthcare professionals to meet the needs of patients.') ?></p>
			</div>
			</div>
	
			<div style="width: 40%">
			<div class="container" style=" margin-top:10px;">
			<img src="images/iStock-1138674722.jpg" style="width:70%; height:300px; object-fit:cover; border-radius:2px;box-shadow: 12px 12px 0px 6px #1A56DB;">
		    <h2><?php echo trad('Health professionals') ?></h2>
		    <p style="text-align:center; "><?php echo trad('Doctors, nurses, dietician or psychologist, our platform is made for you. Manage your patient files, print your reports and more.') ?></p>
			</div>
			</div>
			
			<div class="column3" style="display: none;" >	
			<div class="container"  style=" margin-top:10px;">
			<img src="images/village-pih.jpg" style="width:70%; height:300px; object-fit:cover; border-radius:2px;">
		    <h2><?php echo trad('YOU ARE A MUNICIPALITY') ?></h2>
			<p style="text-align:center"><?php echo trad('As founders from a semi-urban area, we are proud to present our innovative digital solution which will allow your municipality to benefit from easy and rapid access to healthcare at unbeatable prices.') ?></p>
			</div>
			</div>
</div>
</div>

	
<div id="Recruitment" style="width:100%;padding-top:2%; padding-bottom:0%;" class="patern" align="center">
    <?php 
    $translated = trad('Recruitment consultant');
    $highlighted = Titlehighlight($translated, 'Operations', '#1A56DB');

    echo "<h1>".$highlighted."</h1>";
    ?>
    <div class="form-container centered">
		
        <div class="form-group">
            <img src="images/iStock-1488871749.jpg" style="width:100%; height:300px; object-fit:cover; border-radius:0.5rem;">
        </div>
        <div class="form-group" style="text-align: justify;">
            <?php
            $highlightWords = array(trad("unbeatable value for money"), trad("affordable price"), trad("freedom to choose"), trad("transparency"), trad("respect"), trad("cutting-edge technology"), trad("preferred choice"), 'P.I.H Medic');

            $translated1 = trad('I gained expertise in recruitment, successfully running campaigns for a variety of positions. My rigorous approach enabled me to select the best talent suited to the company\'s needs.');
            $highlighted1 = highlight($translated1, $highlightWords, '#1A56DB');
            echo "<p>".$highlighted1."</p>";

			$translate2 = trad('I also have significant experience in managing human problems, which has enabled me to resolve various conflicts effectively and improve team dynamics.');
            echo "<p>".$translate2."</p>";
			
            $translated3 = trad('In addition, I have an extensive professional network in the medical sector, facilitating access to a pool of quality candidates. My aim is to use my expertise and network to help companies find the talent they need.');
            echo "<p>".$translated3."</p>";	
			
            ?>
        </div>
    </div>
</div>	
	



	

<div style="width:100%; background-color:black; padding-top:5%; padding-bottom:5%; vertical-align:top; display: none" align="center">
		
	<h1 style="margin:0px;"><?php echo trad('We support you in') ?></h1>

	<div class="row3" align="center" style="color:white" >

	  <div class="column3" >	
	  <h2 style="font-family:'Arial black'; color:#1A56DB;font-size:400%; margin-top:0px;">P</h2>
	  <img src="images/2092629.png" height="50" align="absmiddle">
	  <h2 style="">Protection </h2></td>
	  <p style="color:white; text-align:center"><?php echo trad('Your health data is encrypted and protected. We are also protected against cyberattacks and have powerful monitoring tools.') ?></p></td>
	  </div>
	  
	  <div class="column3" >	
	  <h2 style="font-family:'Arial black'; color:#1A56DB; font-size:400%;margin-top:0px;">I</h2>
	  <img src="images/4207230.png" height="50" align="absmiddle">
	  <h2 style="">International</h2></td>
	  <p style="color:white;text-align:center"><?php echo trad('Health has no borders. So we made it easily usable. Add healthcare professionals and patients to your clinic and work together with P.I.H !') ?></p></td>
	  </div>
	  
	  <div class="column3" >	
	  <h2 style="font-family:'Arial black'; color:#1A56DB;font-size:400%;margin-top:0px;">H</h2>
	  <img src="images/together.png"height="50" align="absmiddle">
	  <h2 style="">Health</h2></td>
	  <p style="color:white;text-align:center"><?php echo trad('It is not just about caring. We thought about prevention, processes, risk management and training. Health is a condition.') ?></p></td>
	  </div>
	  
</div>
</div>


<script>
var slider = document.getElementById("myRange");
var output = document.getElementById("demo");
var output2 = document.getElementById("demo2");
var output4 = document.getElementById("demo4");

output.innerHTML = slider.value; // Display the default slider value
output2.innerHTML = slider.value; // Display the default slider value

// Update the current slider value (each time you drag the slider handle)
slider.oninput = function() {
  output.innerHTML = this.value;
  output2.innerHTML = this.value;
  output4.innerHTML = (slider.value*72 + 25) + ' <?php echo trad("$") ?>' + ' / ' + '<?php echo trad("month") ?>' +  '**'// Display the default slider value
}

</script>

<div style="width:100%; background-color:black; padding-top:2%; padding-bottom:0%;" align="center" >
   
    <?php 
      echo "<h1>".trad('Latest interviews')."</h1>";
    ?>
	
	 <div id="C1" class="carousel" >
        <div class="carousel-item active">
            <img src="images/1698912406039.jpg" alt="Image 1">
            <div>
			<?php 
			  $highlightWords = array(trad("variable"));
			  $translated1 = trad('Experience as an asset, willpower as a driving force, how to propose impactful solutions');
			  $highlighted1 = highlight($translated1, $highlightWords, '#1A56DB');
			  echo "<h1 style='font-size:100%'>".trad('Med It Through')."</h1>";
			?>
			<p><?php echo trad('Experience as an asset, willpower as a driving force, how to propose impactful solutions') ?></p>
			<p><?php echo trad('Drum roll... Here\'s episode 30 of the podcast, the 10th of season 2! In this exciting episode, we travel with Aymeric Gamondes from India to Finland via China, looking at the local culture, the world of care and the creation of business software! A very varied programme in store! Aymeric shares his experience with us and tells us all about his incredible adventure. A former top-level athlete, emergency nurse, self-taught and co-founder of PIH MEDIC, Aymeric and his partner Herve have succeeded in developing a business software from scratch in the highly competitive medical software sector. Here, he tells us about his exciting adventure, full of meaning and in search of impact. If you\'re wondering how to bring meaning to your business, this podcast is for you.') ?></p>
			<p>	&#x1F449;<a href="https://www.meditthrough.com/episode/30-aymeric-gamondes-pih-medic-lexperience-comme-richesse-la-volonte-comme-moteur-comment-proposer-des-solutions-impactantes" target="_blank" style="color: white"> <?php echo trad('Find out more') ?></a></p>
				
			</div>
        </div>
		<div class="carousel-item ">
            <img src="images/Roland-Garros-histoire-business.webp" style="object-fit: cover;" alt="Image 1">
			<div>
			<?php 
			  echo "<h1 style='font-size:100%'>".trad('The Privadois nurse who treated at the French Open')."</h1>";
			?>
			<p><?php echo trad('Aymeric Gamondes is an emergency nurse who has been working in France and abroad on a regular basis for a number of years, on a variety of assignments. -All enriching experiences- from a medical point of view.') ?></p>
            <p>	&#x1F449;<a href="https://www.ledauphine.com/insolite/2022/11/05/l-infirmier-privadois-qui-a-soigne-zverev-a-roland-garros" target="_blank" style="color: white"> <?php echo trad('Find out more') ?></a></p>
			</div>
		</div>

    </div>
	
	<div align="center">	
	<button class="goback goprevious"> < </button>
	<button class="goback gonext"> > </button>
	</div>
		
</div>
<script>
class Carousel {
    constructor(element) {
        this.slideIndex = 0;
        this.slides = element.getElementsByClassName("carousel-item");
        element.parentElement.querySelector(".goprevious").addEventListener("click", () => this.previousSlide());
        element.parentElement.querySelector(".gonext").addEventListener("click", () => this.nextSlide());
    }

    nextSlide() {
        this.slides[this.slideIndex].classList.remove("active");
        this.slideIndex = (this.slideIndex + 1) % this.slides.length;
        setTimeout(() => this.slides[this.slideIndex].classList.add("active"), 100);
    }

    previousSlide() {
        this.slides[this.slideIndex].classList.remove("active");
        this.slideIndex = (this.slideIndex - 1 + this.slides.length) % this.slides.length;
        setTimeout(() => this.slides[this.slideIndex].classList.add("active"), 100);
    }
}

// Pour chaque carrousel sur la page, créez une nouvelle instance de la classe Carousel
var carousels = document.querySelectorAll(".carousel");
carousels.forEach(carousel => new Carousel(carousel));
</script>


<div id="story" style="width:100%; background-color:black;  padding-top:2%; padding-bottom:2%;" align="center"  class="patern">
		  <h1 style="margin-top:0px;"><?php echo trad('Our team') ?></h1>
          <div class="team" style="display:flex;cursor:default;align-items: center; justify-content:center">
		  
			<div align="center" style="margin:50px;">
				<img src="images/aymericgamondesjpeg.png"  style="height:150px; border-radius:100px; box-shadow: 12px 12px 0px 6px white; background-color:#E1EDFE;" >
				<h2>Aymeric GAMONDES</h2>
				<p><?php echo trad('Founder') ?></p>
			</div>		
			  
			<div align="center" style="margin:50px;">
				<img src="images/168035887318334.png" style="height:150px; border-radius:100px;box-shadow: 12px 12px 0px 6px white; background-color:#E1EDFE;" >
				<h2 style="">Louise FAURE</h2>
				<p><?php echo trad('Administrative and commercial manager') ?></p>
			</div>
			  ssss			  
		</div>
</div>


<div style="width:100%; background-color:#F9FAFB;  padding-top:5%; padding-bottom:5%;" align="center">
		  <h1 style="margin-top:0px;color: black"><?php echo trad("Ready ? Let's go !") ?></h1>
		  <h2 style="color: #6B7280">
		  <?php echo trad("Do not hesitate. Jusk ask.") ?></em>
		  <br></h2>
		  <input type="button" onClick="document.getElementById('contactmodal').style.display='block';" value="<?php echo trad('Contact us') ?>"  style="font-size:18px">
</div>

<?php include('footer.php') ?>


<div id="contactmodal" class="modal">
<!-- Modal content -->
<div class="modal-content" align="left" style="overflow:auto;">

<h1 style="color:black; font-size:150%; cursor:pointer" onClick="document.getElementById('contactmodal').style.display='none';"> < </h1>
<h1 style="color:black; font-size:125%;"><?php echo trad('Need information ? We contact you !') ?></h1>

	<form action="<?php echo $editFormAction; ?>" method="POST" name="form1" >
	<label for="fname" style="color: black"><?php echo trad('Given name') ?></label>
    <input type="text" id="fname" name="firstname" placeholder="<?php echo trad('Your given name') ?>">

    <label for="lname" style="color: black"><span style="color:red">*</span><?php echo trad('Familly name') ?></label>
    <input type="text" id="lname" name="lastname" placeholder="<?php echo trad('Your familly name') ?>" required>
	
	<label for="lphone" style="color: black"><?php echo trad('Phone') ?></label>
    <input type="text" id="lphone" name="phone" placeholder="<?php echo trad('Your phone number') ?>">

	<label for="lphone" style="color: black"><span style="color:red">*</span><?php echo trad('Mail') ?></label>
    <input type="text" id="lmail" name="mail" placeholder="<?php echo trad('Your email adress') ?>" required>
	
    <input type="submit" value="<?php echo trad('I confirm') ?>">
	<input type="hidden" name="MM_insert" value="form1">
  </form>

</div>
</div>




<script>
// Sélectionner tous les éléments à animer
const elements = document.querySelectorAll('h1, h2, img, p, button');

// Créer l'observer
const observer = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    // Si l'élément est visible
    if (entry.isIntersecting) {
      // Ajouter la classe 'visible'
      entry.target.classList.add('visible');
    }
  });
});

// Observer chaque élément
elements.forEach(element => {
  observer.observe(element);
});
	
</script>
	
</body>
</html>

