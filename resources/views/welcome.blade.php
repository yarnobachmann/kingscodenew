<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>KingsCode</title>
	<meta name="viewport" content="width=device-width" />
	<meta name="Resource-type" content="Document" />


	<link rel="stylesheet" type="text/css" href="/css/jquery.fullPage.css" />
	<link rel="stylesheet" type="text/css" href="/css/examples.css" />
	<link rel="stylesheet" type="text/css" href="/css/style.css" />
	<style>
	/* Style for our header texts
	* --------------------------------------- */
	h1{
	  font-size: 4em;
	  font-family: arial,helvetica;
	  color: #fff;
	}

	h2{
	  font-size: 2.2em;
	  font-family: arial,helvetica;
	  color: #fff;
	  font-style: italic;

	  margin-left: 10px;
	}

	p{
	  font-size: 1.5em;
	  font-family: arial,helvetica;
	  color: #fff;

	  margin-left: 9px;
	}

	/* Centered texts in each section
	* --------------------------------------- */
	.section{
	  text-align:center;
	}


	/* Backgrounds will cover all the section
	* --------------------------------------- */
	.section{
	  background-size: cover;
	}
	.slide{
	  background-size: cover;
	}

	/* Defining each section background and styles
	* --------------------------------------- */

	#section0{
	  background-image: url(imgs/kingscode.jpg);
	  background-size: cover;
	  background-repeat: no-repeat;
	  background-position: 50% 30%;
	}

	#section0 .text {
	  top: 30%;
	  position: relative;
	}

	#section2{
	  background-image: url(imgs/yarno.jpg);
	  background-size: cover;
	  background-repeat: no-repeat;
	  background-position: 50% 30%;
	  text-align: left;
	}

	#section2 .text {
	  top: 30%;
	  left: 5%;
	  position: relative;
	}

	#section3{
	  background-image: url(imgs/collin.jpg);
	  background-size: cover;
	  background-repeat: no-repeat;
	  background-position: 50% 30%;
	  text-align: left;
	}

	#section3 .text {
	  top: 30%;
	  left: 60%;
	  position: relative;
	}

	#button {
	     width: 120px;
	     height: 40px;
	     border:none;
	     border:solid 2px black;
	     border-radius: 5px;
	     background: rgba(255, 255, 255,0);
	     font-size: 20px;
	     margin-left: 10px;
			 opacity: 0.5;
	}

	#button:hover {
	     opacity: 1;
	}

	#contact {
			 width: 120px;
			 height: 40px;
			 border:none;
			 border:solid 2px black;
			 border-radius: 5px;
			 background: rgba(255, 255, 255,0);
			 font-size: 20px;
	}

	#contact:hover {
			 color:white;
			 background: black;
	}

	#facebook {
	  width: 40px;
	  height: 40px;
	  position: relative;
	  margin-bottom: -12px;
	  opacity: 0.5;
	}

	#insta {
	  width: 40px;
	  height: 40px;
	  position: relative;
	  margin-bottom: -17px;
	  opacity: 0.5;
	}

	#linkedin {
	  width: 40px;
	  height: 40px;
	  position: relative;
	  margin-left: 3px;
	  margin-bottom: -12px;
	  opacity: 0.5;
	}

	#facebook:hover {
	  opacity: 1;
	}

	#insta:hover {
	  opacity: 1;
	}

	#linkedin:hover {
	  opacity: 1;
	}


	</style>

	<!--[if IE]>
		<script type="text/javascript">
			 var console = { log: function() {} };
		</script>
	<![endif]-->

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>

	<script type="text/javascript" src="/js/jquery.fullPage.js"></script>
	<script type="text/javascript" src="/js/examples.js"></script>
		<script type="text/javascript" src="/js/contact.js"></script>

	<script type="text/javascript">
		$(document).ready(function() {
			$('#fullpage').fullpage({
				verticalCentered: false
			});
		});



	</script>
</head>
<body>

<nav id="menu">
	<ul>
	  <li style="margin-left:10%;"><a href="#section0">KingsCode</a></li>
		<li style="float:right; margin-right:20%;"><a href="#section3">Collin</a></li>
	  <li style="float:right; "><a href="#section2">Yarno</a></li>

	</ul>
</nav>


	<div class="contact-panel" id="contact-panel" data-toggler=".is-active">
	  <a class="contact-panel-button" data-toggle="contact-panel">Stuur ons een mail! </a>
	  <form action="">
	    <div class="row">
	      <label><h6>Volledige naam *</h6>
	        <input type="text" placeholder="Volledige naam">
	      </label>
	    </div>
	    <div class="row">
	      <label><h6>Email *</h6>
	        <input type="email" placeholder="Email adres">
	      </label>
	    </div>
	    <div class="row">
	      <label><h6>Bericht *</h6>
	        <textarea placeholder="Vertelt u ons uw zonden" rows="3"></textarea>
	      </label>
	    </div>
	    <div class="contact-panel-actions">
	      <button class="cancel-button" data-toggle="contact-panel">Nee toch niet</button>
	      <input type="submit" class="button submit-button" value="Verstuur">
	    </div>
	  </form>
	</div>



<div id="fullpage">

	<div class="section " id="section0">
		<div class="text">
			<h1>Kingscode</h1>
			<br>
			<h2>Programmeur bedrijf</h2>
			<br>
			<p>Kingscode is een programmeurs bedrijf die websites voor iedereen programmeert.
				 <br> Dus wilt u een website zoek dan contact met ons op. </p> <br>
	  </div>
	</div>
	<div class="section" id="section2">
		<div class="text">
			<h1>Yarno Bachmann</h1>
			<br>
			<h2> Programmeur </h2>
			 <br>
			  <p> Fotograaf/filmmaker als hobby en een liefhebber van muziek<br>
					 en creativiteit. Het maken van websites is mijn passie.<br>
					 Check me op mijn portfolio en op instagram. </p>
					  <br>
						 <a href="https://www.yarnobachmann.nl/" target="_blank">
							  <button href="#"  id="button">Portfolio</button>
							</a>
    <a href="https://www.facebook.com/profile.php?id=100011364568974" target="_blank">
			<img id="facebook" src="/imgs/facebook.png" alt=""></a> <a href="https://www.instagram.com/_yarno_/" target="_blank">
			<img id="insta" src="/imgs/instagram.png" alt=""></a> <a href="https://www.linkedin.com/in/jarno-bachmann-3b1022137/" target="_blank">
			<img id="linkedin" src="/imgs/linkedin.png" alt=""></a>
			</div>
		</div>
	<div class="section" id="section3">
		<div class="text">
			<h1>Collin Lambers</h1>
				<br>
		 	<h2> Programmeur </h2>
			 <br>
			<p> gamer en hacker als hobby's en een liefhebber van
				<br>
				grafisch design. Ik houd van het maken en
				<br> onderhouden van webapplicaties en de beveiliging
				<br> hiervan. Meer over mij? Kijk op mijn Portfolio.
			</p>
			<br>
			<button href="#" target="_blank" id="button">Portfolio</button>
    <a href="https://www.facebook.com/collin.lambers" target="_blank">
			<img id="facebook" src="/imgs/facebook.png" alt="">
		</a>
		<a href="https://www.linkedin.com/in/collin-l-2ab581131/" target="_blank">
			<img id="linkedin" src="/imgs/linkedin.png" alt="">
		</a>
	</div>
</div>
</div>

</body>
</html>
