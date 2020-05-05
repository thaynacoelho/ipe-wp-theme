	<!-- ==================================================    
		FOOTER 
	==================================================  -->

	<footer class="grid-container">

		<!-- Menu widget
		=================================================== -->

		<section id="footer-menu" class="hidden-sm">
			<ul>
				<a href=""><li class="footer-links">home</li></a>
				<a href=""><li class="footer-links">about</li></a>
				<a href=""><li class="footer-links">yoga</li></a>
				<a href=""><li class="footer-links">web</li></a>
				<a href=""><li class="footer-links">travel</li></a>
				<a href=""><li class="footer-links">contact</li></a>
			</ul>
		</section>

		<!-- Newsletter widget
		=================================================== -->

		<section id="footer-newsletter" class="hidden-sm">
			<p>Lorem ipsum dolor, sit amet consectetur adipisicing.</p>
			<form>
				<input type="email" name="" id="" placeholder="seunome@email.com">
				<button type="submit" class="btn btn-primary">go</button>
			</form> 
		</section>
		<section id="footer-quote" class="hidden-sm">
			<div class="quote">
				<blockquote><i class="fas fa-quote-left"></i> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Debitis sint illum obcaecati eligendi vel dolorem.</blockquote>
				<small class="author">jane doe</small>
			</div>
		</section>

		<!-- Copyright and social media links
		=================================================== -->

		<div id="footer-copy">
			<small>copyright &copy; 2019 thayna coelho | all rights reserved</small>
			<a href="#"><p>disclosure policy</p></a>
			<div class="social">
				<a href=""><i class="fas fa-heart social-icon"></i></a>
				<a href=""><i class="fab fa-instagram social-icon"></i></a>
				<a href=""><i class="fab fa-medium social-icon"></i></a>
				<a href=""><i class="fab fa-youtube social-icon"></i></a>
				<a href=""><i class="fab fa-pinterest-p social-icon"></i></a>
				<a href=""><i class="fab fa-spotify social-icon"></i></a>
				<a href=""><i class="fab fa-github social-icon"></i></a></a>
			</div>
		</div>
	</footer>

	<!-- ==================================================    
		SCRIPTS
	==================================================  -->

	<!-- Toggle navigation script
	=================================================== -->
	<script>
		let mainNav = document.getElementById('js-menu');
		let navBarToggle = document.getElementById('js-navbar-toggle');

		navBarToggle.addEventListener('click', function () {
		mainNav.classList.toggle('active');
		});
	</script>

</body>
</html>