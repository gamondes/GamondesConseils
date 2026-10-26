<?php if (!isset($_SESSION)) {session_start(); }
if (session_status() !== PHP_SESSION_ACTIVE){session_start(); } ?>
<?php require_once('hbtraduction.php'); ?>
<?php
if (isset($_SESSION['idnum'])) {$idnum = $_SESSION['idnum'];}
if (isset($_GET['idlieu'])) {$idlieu = $_GET['idlieu'];}
?>
<style type="text/css">
/*  #PC
================================================== */
@media all and (min-width: 950px) {
 .topnav a.pc{display:inline-block;}
 .topnav a.mobile{display:none;}
 .topnav div.topnavinterfacediv{display:block;}
}


/*  #Mobile (Portrait)
================================================== */
/* Note: Design for a width of 320px */
@media all and (max-width: 950px) {
 .topnav a.pc{ display:none;}
 .topnav a.mobile{ display: block;}
 .topnav div.topnavinterfacediv{display:none;}
}



/* Style the navigation menu */
.topnav {
  overflow: hidden;
  background-color:black;
  position: fixed;
  top:0px; 
  left:0px;
  right:0px;
  z-index:990;
  font-family: 'Titillium Web', sans-serif;
}

/* Hide the links inside the navigation menu (except for logo/home) */
.topnav #myLinks {
  display: none;
}
	
.topnav #myLinks a{
	font-weight: normal;
}

  /* Hide the links inside the navigation menu (except for logo/home) */
.topnav #myLinks2 {
  display: none;
}

/* Style navigation menu links */
.topnav a {
  color: white;
  padding: 14px 10px;
  text-decoration: none;
  font-size: 14px;
  display: inline-block;
  font-weight:900;
  cursor: pointer;
}

/* Style the hamburger menu */
.topnav a.icon {
  background: transparent;
  display: block;
  position: absolute;
  right: 0;
  top: 0;
}

/* Add a grey background color on mouse-over */
.topnav a:hover {
  color: #1A56DB;
  text-decoration:  underline;
}

.topnav a[aria-current="true"] {
  color: #1A56DB;
}

.topnav div[role="usermenudropdown"] a{
	display: block;
	padding: 7px 5px;
	font-weight:;
}


.topnav div.connect {
position: fixed;
right: 0;
top: 0;
}

.tooltip {
  position: relative;
  display: inline-block;
  transition:all 0.2s;
  border-radius:5px;
}

.tooltip:hover{
  border-bottom: 8px solid #2E598F;
}

.tooltip .tooltiptext {
  visibility: hidden;
  min-width: 120px;
  background-color:#FFFCF2;
  color:#244671;
  text-align: center;
  border-radius: 10px;
  padding: 5px 5px;
  position: absolute;
  z-index: 990;
  top: 150%;
  left: 50%;
  margin-left: -60px;
  opacity:0;
  font-size:12px;
  transition: all 0.2s;
  box-shadow: 5px 5px 10px rgba(0,0,0,0.2);
}


.tooltip .tooltiptext::after {
  content: "";
  position: absolute;
  bottom: 100%;
  left: 50%;
  margin-left: -5px;
  border-width: 5px;
  border-style: solid;
  border-color: transparent transparent black transparent;
}

.tooltip:hover .tooltiptext {
  visibility: visible;
  opacity:1;
}

.hover-underline-animation {
  display: inline-block;
  position: relative;
  color: #0087ca;
}

.hover-underline-animation:after {
  content: '';
  position: absolute;
  width: 100%;
  transform: scaleX(0);
  height: 2px;
  bottom: 0;
  left: 0;
  background-color: white;
  transform-origin: bottom right;
  transition: transform 0.25s ease-out;
}

.hover-underline-animation:hover:after {
  transform: scaleX(1);
  transform-origin: bottom left;
}

.tooglemenu img{
filter:  brightness(0) invert(1);
}
</style>
<script language="JavaScript" type="text/JavaScript">

function setupDropdownMenu(buttonId, menuId) {
  var button = document.getElementById(buttonId);
  var menu = document.getElementById(menuId);

  // Lorsque l'utilisateur clique sur le bouton, affiche ou cache le menu
  button.addEventListener('click', function(event) {
    event.stopPropagation(); // Empêche l'événement de se propager au document
    var isExpanded = menu.style.display === 'block';
    menu.style.display = isExpanded ? 'none' : 'block';
  });

  // Lorsque l'utilisateur clique sur un lien à l'intérieur du menu, cache le menu
  menu.addEventListener('click', function(event) {
    if (event.target.tagName === 'A') {
      menu.style.display = 'none';
    }
  });

  // Lorsque l'utilisateur clique en dehors du menu, cache le menu
  document.addEventListener('click', function() {
    menu.style.display = 'none';
  });
}

	
</script>

<div class="topnav" style="box-shadow: 0px 0px 2px 2px rgba(0,0,0, 0.2); overflow:visible;">
  
  <a style=" color:<?php echo $versioncolor ?>;width:135px; font-family:'Titillium Web', sans-serif;user-select: none; cursor:pointer;" onClick="window.location.href='index.php'"><img src="images/GC_logo.png" height="30" align="absmiddle" style="filter:  brightness(1) invert(0);" > <?php echo $DvlpVersion ?></a>		
  <!-- Navigation links (hidden by default) -->
  
  
  <div style="position:fixed; top:0; left:208px;">
  </div>
  
  <div class="topnavinterfacediv" style="position:fixed; top:0; width: 60%; left: 20%" align="center">

  <a <?php echo (strpos($_SERVER['REQUEST_URI'], 'pihmedicalpro') !== false) ? 'aria-current="true"' : ''; ?>  onClick="window.scrollTo(0, 0);">
    <span style="font-size:14px;"><img src="images/5729968.png" height="12"> <?php echo ucfirst(("home"))?></span>
  </a>
	  
  <a onClick="scrollToSection('TechnologyInnovation')">
	  <span style="font-size:14px;"><?php echo trad("Technology Innovation")?></span>
  </a>

  <a onClick="scrollToSection('MedicalExpertise')">
    <span style="font-size:14px;"><?php echo trad("International Experience")?></span>
  </a>

 
  <a  onClick="scrollToSection('OperationsManagement')">
	 <span style="font-size:14px;"><?php echo trad("Operations Management")?></span>
  </a>

  <a  onClick="scrollToSection('Recruitment')">
	 <span style="font-size:14px;"><?php echo trad("Recruitment")?></span>
  </a>
	  
  </div>

   
  <div class="connect" style="background-color:transparent;color:#244671; display:inline">
  	 
	  <a>
		 <img onClick="modalbox('languemodal')" src="images/<?php echo $_SESSION['lang'] ?>.png" style="border-radius:100px;cursor:pointer;transform:scale(0.8);filter:  brightness(1) invert(0);" align="absmiddle" height="20" width="20">
	  </a>
	    
	  <a>
	  	<button onClick="document.getElementById('contactmodal').style.display='block';"><?php echo trad('Contact us') ?></button>
	  </a>



  </div>
   
  <div id="myLinks" align="right" role="usermenudropdown">
	<a style="cursor:pointer" href="#"><button class="button" onClick="document.getElementById('contactmodal').style.display='block';"><?php echo trad('contact us') ?></button></a>
  </div>

</div>

<script>
// Utilisation de la fonction
document.addEventListener('DOMContentLoaded', function() {
  setupDropdownMenu('user-menu-button', 'myLinks');
});
</script>
