<?php
	/*-----------------------------------------------------------------------------------*/
	/* This template will be called by all other template files to finish 
	/* rendering the page and display the footer area/content
	/*-----------------------------------------------------------------------------------*/
?>

</main><!-- / end page container, begun in the header -->

<footer>
	
	
	<div class="footer-container">
		<div class="team-card">
			<h4>Contact Us</h4>
			<p>Mailing Address:</p>
			<p>P.O. Box 639</p>
			<p>Sechelt, BC V0N 3A0</p>     
			<br>
			<p>Street Address:</p>
			<p>5790 Teredo Street</p>
			<p>Sechelt, BC V0N 3A0</p>     
			<br>

			<p>Phone: 604.885.1986</p>
			<p>Fax: 604.885.7591</p>
			<p>Email: info@sechelt.ca</p>
		</div>
		
		<div class="team-card">
			<h4>Pages</h4>
			<p><a href="http://18.188.133.18/SecheltBC/">Home</a></p>
			<p><a href="http://18.188.133.18/SecheltBC/index.php/history/">History</a></p>
			<p><a href="http://18.188.133.18/SecheltBC/index.php/our-town/">Home</a></p>     
			<p><a href="http://18.188.133.18/SecheltBC/index.php/outdoor-activities/">Outdoor Activities</a></p>
			<p><a href="http://18.188.133.18/SecheltBC/index.php/visitor-centre/">Visitor Centre</a></p>
			<p><a href="http://18.188.133.18/SecheltBC/index.php/category/news/">News</a></p>
			<p><a href="http://18.188.133.18/SecheltBC/index.php/events/">Events</a></p>
		</div>
		
		<div class="team-card">
			<p>Copyright © 2018 Sechelt Visitor Centre</p> 
			<p>For more information see the District Contact List
			<p>Privacy Statement | Terms Of Use</p>
		</div>
	</div>


</footer><!-- #colophon .site-footer -->

<?php wp_footer(); 
// This fxn allows plugins to insert themselves/scripts/css/files (right here) into the footer of your website. 
// Removing this fxn call will disable all kinds of plugins. 
// Move it if you like, but keep it around.
?>

</body>
</html>
