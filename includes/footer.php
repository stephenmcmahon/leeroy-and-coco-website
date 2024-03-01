<footer>
	<div class="container">
		<div class="row">
			<div class="col-md-2">
				<ul>
					<li><a href="https://www.leeroyandcoco.com">About</a></li>
					<li><a href="https://www.leeroyandcoco.com/blog.php">Blog</a></li>
					<li><a href="https://www.leeroyandcoco.com/events.php">Events</a></li>
					<li><a href="https://www.leeroyandcoco.com/booking.php">Booking</a></li>
					<li><a href="https://www.leeroyandcoco.com/contact.php">Contact</a></li>
					<li><a href="https://www.leeroyandcoco.com/shop.php">Shop</a></li>
				</ul>
			</div>
			<div class="col-md-4">
				<img src="https://www.leeroyandcoco.com/images/address-white.png" style="float:left; margin-right:5px;" alt="Address" /> <p>Durham, Ontario. Canada</p>
				<img src="https://www.leeroyandcoco.com/images/phone-white.png" style="float:left; margin-right:5px;" alt="Phone" /> <p>647-991-5832</p>

				<a href="https://twitter.com/LeeroyAndCoco" target="_blank"><img height="20" width="20" style="margin-right:7px;" src="https://www.leeroyandcoco.com/images/twitter.png" alt="Twitter" /></a>
				<a href="https://www.facebook.com/LeeroyAndCoco/" target="_blank"><img height="20" width="20" style="margin-right:7px;" src="https://www.leeroyandcoco.com/images/facebook.png" alt="Facebook" /></a>
				<a href="https://www.instagram.com/leeroyandcoco/" target="_blank"><img height="20" width="20" src="https://www.leeroyandcoco.com/images/insta.png" alt="Instagram" /></a>

				<h1>Latest blog post</h1>
				<cms:pages masterpage='blog.php' limit='1' >
				<h2 style="margin-bottom:2px; padding-bottom:0px;"><cms:show k_page_title /></h2>
				<cms:excerptHTML count='15'><cms:show blog_content /></cms:excerptHTML>
				<a href="<cms:show k_page_link />" class="footer-btn">Read Post</a>
				</cms:pages>
			</div>
			<div class="col-md-3 tweets">
				<a class="twitter-timeline" data-height="400" href="https://twitter.com/LeeroyAndCoco">Tweets by Leeroy &amp; Coco</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
			</div>
			<div class="col-md-3 tweets">
				<a class="twitter-timeline" data-height="400" href="https://twitter.com/DailyCommander">Tweets by Commander of the Day</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<p class="small">Copyright &copy; <?php echo date("Y"); ?> Leeroy &amp; Coco. All rights reserved.
				<br />Website design by <a href="http://www.stephenmcmahon.ca" target="_blank">Stephen McMahon</a>
				<br />Powered by Couch CMS</p>
				<img src="https://www.leeroyandcoco.com/images/comodo.png" alt="Comodo Secure" />
			</div>
		</div>

	</div>
</footer>