<?php
	$strPage = 'about';
	$title = 'About me';
	
	include($_SERVER['DOCUMENT_ROOT'].'/resources/inc/header.php');
?>

<h1 id="intro">About me<br/><span>Who I am</span></h1>
			
	<section class="artile full about-panel"> 
		<article class="inner_artile">
			<img src="/resources/images/sidd.jpg" id="sidd-photo"/>
			<h3>Bio</h3>
			<!--<p>
				If you're not really interested in reading this wall of text about me, feel free to scroll down to the next section, it's probably more interesting. If you're still content with reading this and I haven't put you off already, then here we go *ahem*:
			</p>-->
			<p>
				Hello. My name is Siddharth Vadgama, but I generally go by Sidd. I design things, I code things and I also make physical things with electronics and hardware and whatnot. I get a little bit excited when I do projects that combine all three.
			</p>
			<!--<p>
				In my youth, and much to my parents' dismay, I constantly tinkered with anything in the house which was even vaguely mechanical or electronic - finding it interesting to explore the inner-workings and understand how these devices operated. Ocasionally even modifying these to work differently.
			</p>-->
			<!--<p> 
				Not knowing pain or anguish, I blissfully went to university at the ripe age of 18 to study Mechanical Engineering. However, though I was interested in the theory, I found the course uncreative and mildly soul-destroying. That's when I switched to BSc <a href="http://digitalartandtechnology.co.uk" target="_blank">Digital Art &amp; Technology</a>, which I enjoyed greatly and have now graduated in with a first-class honours.
			</p>-->
			<p> 
				I like to think of myself as a pretty competent creator. I love problem-solving, and building systems that really offer a fun and engaging experience to the user. I use OS X, Windows and Linux, with my preference for any given project being determined by what will help me get the task at hand done in the best, most efficient way possible (Hint: It's usually OS X).
			</p>
			<div class="clear"></div>
			<a href="/cv" id="cv-link" target="_blank">
				Click here to take a look at my CV.
			</a>
		</article>
	</section>

	<section class="artile full shadow medium" id="contact-me">
		<article class="inner_artile">
			<h3>Contact me</h3>
				<a href="mailto:me@siddv.net" target="_blank" id="email-link">
					me@siddv.net
				</a>
				<p>You can also catch me on <a href="skype:siddvad?call">Skype (siddvad)</a> ocasionally.</p>
		</article>
	</section>

	<!--<section class="artile full medium"> 
		<article class="inner_artile online-presence">
			<h3>Places you can find me on the internet</h3>
			<div class="social-images">
				<a href="https://github.com/siddv" target="_blank">
					<img src="/resources/images/social/social-1_square-github.svg" alt="LastFM">
				</a>
				<a href="https://twitter.com/siddvee" target="_blank">
					<img src="/resources/images/social/social-1_square-twitter.svg" alt="LastFM">
				</a>
				<a href="https://uk.linkedin.com/in/siddv" target="_blank">
					<img src="/resources/images/social/social-1_square-linkedin.svg" alt="LastFM">
				</a>
				<a href="https://youtube.com/user/siddv" target="_blank">
					<img src="/resources/images/social/social-1_square-youtube.svg" alt="LastFM">
				</a>
				<a href="http://last.fm/user/siddv91" target="_blank">
					<img src="/resources/images/social/social-1_square-lastfm.svg" alt="LastFM">
				</a>
				<a href="#" target="_blank">
					<img src="/resources/images/social/social-1_square-spotify.svg" alt="LastFM">
				</a>
			</div>
		</article>
	</section>-->


<?php 
	include($_SERVER['DOCUMENT_ROOT'].'/resources/inc/footer.php');
?>