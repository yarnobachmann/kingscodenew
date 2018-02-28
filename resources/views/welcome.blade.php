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
	  color: #fff;
	}

	h2{
	  font-size: 2.2em;
	  color: #fff;

	  margin-left: 10px;
	}

	p{
	  font-size: 1.5em;
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
	  background-image: url(imgs/backgrounds/kingscode.jpg);
	  background-size: cover;
	  background-repeat: no-repeat;
	  background-position: 50% 30%;
	}

	#section0 .text {
	  position: relative;
	  margin-bottom: 7%;
	}

	#section2{
	  background-image: url(imgs/backgrounds/yarno.jpg);
	  background-size: cover;
	  background-repeat: no-repeat;
	  background-position: 50% 30%;
	  text-align: left;
	}

	#section2 .text {

	  left: 5%;
	  position: relative;
	}

	#section3{
	  background-image: url(imgs/backgrounds/collin.jpg);
	  background-size: cover;
	  background-repeat: no-repeat;
	  background-position: 50% 30%;
	  text-align: left;
	}

	#section3 .text {

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

	#yarnotext{
		z-index: 10;
		opacity: 0;
		margin-left: -300px;
	}
	#yarnotext.active{
		/*-webkit-transform: translate3d(134px, 0px, 0px);*/
		/*-moz-transform: translate3d(134px, 0px, 0px);*/
		/*-ms-transform:translate3d(134px, 0px, 0px);*/
		/*transform: translate3d(134px, 0px, 0px);*/
		-webkit-animation: fadeinout 1s linear forwards;
		animation: fadeinout 1s linear forwards;
	}

	@-webkit-keyframes fadeinout {
		0% { opacity: 0; margin-left: -300px; }

		50% { opacity: 1; margin-left: 0px;}

		100% { opacity: 1; margin-left: 0px; }
	}

	@keyframes fadeinout {
		0% { opacity: 0; margin-left: -300px;}

		50% { opacity: 1; margin-left: 0px;}

		100% { opacity: 1; margin-left: 0px; }
	}
	textarea {
		resize: none;
	}
	#iphone3{
		z-index: 12;
	}
	#iphone3.active{
		-webkit-transform: translate3d(213px, 0px, 0px);
		-moz-transform: translate3d(213px, 0px, 0px);
		-ms-transform:translate3d(213px, 0px, 0px);
		transform: translate3d(213px, 0px, 0px);
	}

	#iphone4{
		z-index: 11;
		left: 140px;
	}

	#iphone4.active{
		-webkit-transform: translate3d(548px, 0px, 0px);
		-moz-transform: translate3d(548px, 0px, 0px);
		-ms-transform:translate3d(548px, 0px, 0px);
		transform: translate3d(548px, 0px, 0px);
	}



	</style>

	<!--[if IE]>
		<script type="text/javascript">
			 var console = { log: function() {} };
		</script>
	<![endif]-->

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>

<script type="text/javascript" src="/js/scrolloverflow.js"></script>
	<script type="text/javascript" src="/js/jquery.fullPage.js"></script>
	<script type="text/javascript" src="/js/examples.js"></script>
		<script type="text/javascript" src="/js/contact.js"></script>

	<script type="text/javascript">
		$(document).ready(function() {
			$('#fullpage').fullpage({
				anchors: ['firstPage', 'secondPage', '3rdPage'],
				sectionsColor: ['#fff', '#fff', '#fff'],
				navigation: true,
				navigationPosition: 'right',
				navigationTooltips: ['KingsCode', 'Yarno', 'Collin'],
                'afterLoad': function(anchorLink, index){
                    if(index == 2){
                        $('#yarnotext').addClass('active');
                    }
                },

                'onLeave': function(index, nextIndex, direction){
                    if (index == 3 && direction == 'down'){
                        $('.section').eq(index -1).removeClass('moveDown').addClass('moveUp');
                    }
                    else if(index == 3 && direction == 'up'){
                        $('.section').eq(index -1).removeClass('moveUp').addClass('moveDown');
                    }

                    $('#yarnotext').toggleClass('active', (index == 2 && direction == 'down' ) || (index == 2 && direction == 'up'));

                }

			});
		});



	</script>
</head>
<body>


	



<div id="fullpage">

	<div class="section " id="section0">
		<img src="imgs/logo/logo-kingscode.svg"style="height: 25%;" alt="kingscode">
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
		<div class="text"  id="yarnotext">
			<h1>Yarno Bachmann</h1>
			<br>
			<h2> Programmeur </h2>
			 <br>
			  <p> Fotograaf/filmmaker als hobby. Een liefhebber van muziek<br>
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
			<p> Gamer en hacker als hobby's en een liefhebber van
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
