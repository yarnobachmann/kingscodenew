<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Background images - fullPage.js</title>
	<meta name="author" content="Alvaro Trigo Lopez" />
	<meta name="description" content="fullPage full-screen backgrounds." />
	<meta name="keywords"  content="fullpage,jquery,demo,screen,fullscreen,backgrounds,full-screen" />
	<meta name="Resource-type" content="Document" />


	<link rel="stylesheet" type="text/css" href="/css/jquery.fullPage.css" />
	<link rel="stylesheet" type="text/css" href="/css/examples.css" />
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
    right: 15%;
    left: 65%;
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
  }

  #button:hover {
       background:black;
       color:white;
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

	<script type="text/javascript">
		$(document).ready(function() {
			$('#fullpage').fullpage({
				verticalCentered: false
			});
		});
	</script>

</head>
<body>



<div id="fullpage">

	<div class="section " id="section0"><div class="text"> <h1>Kingscode</h1><br><h2>Programmeur bedrijf</h2><br><p>Kingscode is een programmeurs bedrijf die websites voor iedereen programmeert. <br> Dus wilt u een website zoek dan contact met ons op. </p> </div> </div>
	<div class="section" id="section2"><div class="text"> <h1>Yarno Bachmann</h1> <br> <h2> Programmeur </h2> <br> <p> Fotograaf/filmmaker als hobby en een liefhebber van muziek<br> en creativiteit. Het maken van websites is mijn passie.<br>Check me op mijn portfolio en op instagram. </p> <br> <button href="https://www.yarnobachmann.nl/" target="_blank" id="button">Portfolio</button>
    <a href="https://www.facebook.com/profile.php?id=100011364568974" target="_blank"><img id="facebook" src="/imgs/facebook.png" alt=""></a> <a href="https://www.instagram.com/_yarno_/" target="_blank"><img id="insta" src="/imgs/instagram.png" alt=""></a> <a href="https://www.linkedin.com/in/jarno-bachmann-3b1022137/" target="_blank"><img id="linkedin" src="/imgs/linkedin.png" alt=""></a> </div></div>
	<div class="section" id="section3"><div class="text"> <h1>Collin Lambers</h1> <br> <h2> Sexverslaafd </h2> <br> <p> Gamen als hobby en een liefhebber van seks en drank.<br> Het maken van websites kan ik niet.Check me op mijn portfolio<br> voor nudes. </p> <br> <button href="https://www.yarnobachmann.nl/" target="_blank" id="button">Portfolio</button>
    <a href="https://www.facebook.com/profile.php?id=100011364568974" target="_blank"><img id="facebook" src="/imgs/facebook.png" alt=""></a> <a href="https://www.instagram.com/_yarno_/" target="_blank"><img id="insta" src="/imgs/instagram.png" alt=""></a> <a href="https://www.linkedin.com/in/jarno-bachmann-3b1022137/" target="_blank"><img id="linkedin" src="/imgs/linkedin.png" alt=""></a> </div></div>
</div>

</body>
</html>
