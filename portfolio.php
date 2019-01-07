
<!DOCTYPE html>

<html>
<head>

<title> Portfolio </title>

<link rel="stylesheet" href="portfolio.css"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="portfolio.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script type="text/javascript">
	var zero = 0;
	$(document).ready(function(){
		$(window).on('scroll',function(){ 
			$('.navbar').toggleClass('hide', $(window).scrollTop()
			> zero);
			zero = $(window).scrollTop();
		})
	})




</script>
</head>

<body id="main-content">
	<div class="navbar">
		
		<ul>
			<li><a href="#">Home</a></li>
			<li><a href="#section1 section-dark">About me</a></li>
			<li><a href="#">My education</a></li>
			<li><a href="#">Projects</a></li>
			<li><a href="#">Contact</a></li>

		</ul>
	</div>

<div class="pimg1">
		<div class="ptext">
			<span class="border1">

					Portfolio
				</span>
				<br/>
				<br/>
				<div class="container">
					<svg id="move" width="2000" height="500"  >
						<svg>
							<polygon points="100 250, 110 170, 220 160, 447,160, 460 250, 420 250," style="fill: #00FF00; stroke:black;" /><!--body auto-->
							 	<animate attributeName="x" from="1200" to="-500" dur="8s" fill="freeze" repeatCount="indefinite"/>
							<polygon points="220 160, 240 100, 440 100, 447 160, 416 160, 410 110, 330 110,330 160,310 160, 310 110, 250 110,235 160," style="fill: #00FF00; stroke:black;"/> <!--dak auto-->
				 				<animate attributeName="x" from="1200" to="-500" dur="8s" fill="freeze" repeatCount="indefinite"/>
							<polygon points="250 110, 310 110, 310 160, 235 160," style="fill: #C0C0C0; opacity: 0; stroke:black;"/> 
				 				<animate attributeName="x" from="1200" to="-500" dur="8s" fill="freeze" repeatCount="indefinite"/>
							<polygon points="330 110, 410 110, 416 160, 330 160," style="fill:#C0C0C0; opacity:0; stroke: black;" /> 
								<animate attributeName="x" from="1200" to="-500" dur="8s" fill="freeze" repeatCount="indefinite"/>
							<line x1="221" y1="160" x2="234" y2="160" style="stroke:#00FF00; stroke-linecap:rect; stroke-width:2"/> <!--lijn links-->
								<animate attributeName="x" from="1200" to="-500" dur="8s" fill="freeze" repeatCount="indefinite"/>
							<line x1="311" y1="160" x2="329" y2="160" style="stroke:#00FF00; stroke-linecap:rect; stroke-width:2"/> <!--lijn midden-->
								<animate attributeName="x" from="1200" to="-500" dur="8s" fill="freeze" repeatCount="indefinite"/>
							<line x1="417" y1="160" x2="446" y2="160" style="stroke:#00FF00; stroke-linecap:rect; stroke-width:2"/> <!--lijn rechts-->
								<animate attributeName="x" from="1200" to="-500" dur="8s" fill="freeze" repeatCount="indefinite"/>
			 				<line x1="280" y1="150" x2="280" y2="159" style="stroke:#CD853F; stroke-linecap:rect; stroke-width:10;"/> 
				 				<animate attributeName="x" from="1200" to="-500" dur="8s" fill="freeze" repeatCount="indefinite"/>
			 				<line x1="290" y1="180" x2="310" y2="180" style="stroke:#000000; stroke-linecap:round; stroke-width:8;"/>
				 				<animate attributeName="x" from="1200" to="-500" dur="8s" fill="freeze" repeatCount="indefinite"/>
			 				<line x1="330" y1="180" x2="350" y2="180" style="stroke:#000000; stroke-linecap:round; stroke-width:8;"/>
				 				<animate attributeName="x" from="1200" to="-500" dur="8s" fill="freeze" repeatCount="indefinite"/>
			 				<line x1="458" y1="200" x2="461" y2="220" style="stroke:#FF0000; stroke-linecap:round; stroke-width:8;"/>
				 				<animate attributeName="x" from="1200" to="-500" dur="8s" fill="freeze" repeatCount="indefinite"/>
			 				<line x1="103" y1="185" x2="99" y2="220" style="stroke:#FFFF00; stroke-linecap:round; stroke-width:8;"/>
								<animate attributeName="x" from="1200" to="-500" dur="8s" fill="freeze" repeatCount="indefinite"/>
			 				<circle cx="190" cy="250" r="40" fill="black"/>
				 				<animate attributeName="x" from="1200" to="-500" dur="8s" fill="freeze" repeatCount="indefinite"/>
			 				<circle cx="190" cy="250" r="25" fill="lightGray"/>
				 				<animate attributeName="x" from="1200" to="-500" dur="8s" fill="freeze" repeatCount="indefinite"/>
			 				<circle cx="390" cy="250" r="40" fill="black"/>
				 				<animate attributeName="x" from="1200" to="-500" dur="8s" fill="freeze" repeatCount="indefinite"/>
			 				<circle cx="390" cy="250" r="25" fill="lightGray"/>
				 				<animate attributeName="x" from="1200" to="-500" dur="8s" fill="freeze" repeatCount="indefinite"/>
			 				<circle cx="280" cy="136" r="20" fill="#CD853F"/>
				 				<animate attributeName="x" from="1200" to="-500" dur="8s" fill="freeze" repeatCount="indefinite"/>
			 				<circle cx="260" cy="136" r="5" fill="#CD853f"/>
				 				<animate attributeName="x" from="1200" to="-500" dur="8s" fill="freeze" repeatCount="indefinite"/>
			 				<circle cx="273" cy="130" r="4" fill="white"/>
				 				<animate attributeName="x" from="1200" to="-500" dur="8s" fill="freeze" repeatCount="indefinite"/>
			 				<circle cx="272" cy="130" r="3" fill="LightSkyBlue"/>
				 				<animate attributeName="x" from="1200" to="-500" dur="8s" fill="freeze" repeatCount="indefinite"/>
			 				<circle cx="271" cy="130" r="1" fill="black"/>
				 				<animate attributeName="x" from="1200" to="-500" dur="8s" fill="freeze" repeatCount="indefinite"/>
						</svg>	
			 		</svg>
				</div>
			</span>
		</div>
</div>

<section class="section1 section-dark">
			
			
			<img class="image2" src="ik.jpg" width="300vw" height="300vh" alt="">
			
			
			<p >
				<h2>About me</h2>
				<br>	
					My name is Simone. I am becoming a Web developer. I live in the Netherlands 
					in the city Enschede.<br> Before this, I have always worked in Healthcare. It was 
					very fullfilling to be meaningfull to others. <br>But I couldn't express my creativity 
					much in this line of work.<br> Now I have decided to listen to my own needs and 
					fulfill my dream.<br>My Portfolio is the window into my new journey. Enjoy the view!
				<br>
				<br> 
				<br>
				<br>
				<br>
				<br> 
				<br>
				<br>
				<a href="http://www.codegorilla.nl" target="_top">
					<img class="image1" src="codegorilla-logo.png" height="60px" width="60px" />
				</a>
					<br>I study at a company called CodeGorilla. They are amazing. Check them out!<br>
				<br>
			</p> 
</section>


<div class="pimg2">
		<div class="ptext2">
				<span class="border2">
					Home Study
				</span>
				<div id="pictures">
					<img class="cert" src="certhtml.jpg" width="150vw" height="150vh" alt="">
					<img class="cert1" src="certcss.jpg" width="150vw" height="150vh" alt="">
					<img class="cert2" src="certjavascript.jpg" width="150vw" height="150vh" alt="">
					<img class="cert3" src="certphp.jpg" width="150vw" height="150vh" alt="">
					<img class="cert4" src="certjquery.jpg" width="150vw" height="150vh" alt="">
					
				</div>
		</div>
</div>

<section class="section2 section-dark">
	<h2>My education</h2>
		<br>
		<p>
		<ins>Home Study 5th untill 28th of November 2018</ins>
		<br>
		At Sololearn I learned HTML, CSS, JavaScript, PHP. Later I learned jQuery as well.
		<br>
		<br>
		<ins>Hackathon 29th and 30th of November 2018</ins>
		<br>
		We had to build a community-page as addition to the website of <a href="https://www.theceespot.nl/">"the cee spot"</a>. 
		I only had the knowledge from the Sololearn courses. It was hard but so much fun!
		<br>
		<br>
		<ins>Bootcamp 3th December 2018  untill 15th of March 2019.</ins>
		<br>
		More theoretical and practical education (Front-end-, Back-end-, 
		General development) and personal development (Soft Skills)
		into Webdeveloping. These 'learning goals' come with very good accompaniment. 
		It is a fulltime education. This portfolio is a report of my development into developing ;).
		<br>
		<br>
		<br>
		<br>
		For more info about my 'learning goals' click the "Curriculum" button (not working yet).
		<button class="press">Curriculum</button>
		</p>
</section>

<div class="pimg3">
	<div class="ptext3">
		<span class="border3">
			Hackathon
		</span>
		<div>
			
		</div>
	</div>
</div>		
		

<section class="section section-dark">
	<h2>Section three</h2>
		<p>
			Lorem ipsum dolor sit amet consectetur adipisicing elit. 
			Itaque vero non obcaecati iusto nobis saepe ullam! Quas 
			quidem exercitationem quia voluptates molestiae dolor porro 
			explicabo sit enim. Porro nemo voluptates ad minus ducimus, 
			impedit architecto molestias temporibus repudiandae beatae 
			soluta! skdgfiwbvcjbdskjc wjhvciwhvjcb jwhvcwjhvb.Lorem ipsum dolor sit amet consectetur adipisicing elit. 
			Itaque vero non obcaecati iusto nobis saepe ullam! Quas 
			quidem exercitationem quia voluptates molestiae dolor porro 
			explicabo sit enim. Porro nemo voluptates ad minus ducimus, 
			impedit architecto molestias temporibus repudiandae beatae 
			soluta! skdgfiwbvcjbdskjc wjhvciwhvjcb jwhvcwjhvb.
			Lorem ipsum dolor sit amet consectetur adipisicing elit. 
			Itaque vero non obcaecati iusto nobis saepe ullam! Quas 
			quidem exercitationem quia voluptates molestiae dolor porro 
			explicabo sit enim. Porro nemo voluptates ad minus ducimus, 
			impedit architecto molestias temporibus repudiandae beatae 
			soluta! skdgfiwbvcjbdskjc wjhvciwhvjcb jwhvcwjhvb.
			Lorem ipsum dolor sit amet consectetur adipisicing elit. 
			Itaque vero non obcaecati iusto nobis saepe ullam! Quas 
			quidem exercitationem quia voluptates molestiae dolor porro 
			explicabo sit enim. Porro nemo voluptates ad minus ducimus, 
			impedit architecto molestias temporibus repudiandae beatae 
			soluta! skdgfiwbvcjbdskjc wjhvciwhvjcb jwhvcwjhvb.
		</p>
</section>

<div class="pimg4">
	<div class="ptext">
		<span class="border4">
			Bootcamp
		</span>
	</div>
</div>		
		

<section class="section section-dark">
	<h2>Section four</h2>
		<p>
			
		</p>
</section>


<div class="pimg1">
	<div class="ptext">
		<span class="border5">
			Projects
		</span>
	</div>
</div>






</body>
</html>











