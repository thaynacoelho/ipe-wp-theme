
<!-- ==================================================    
	HEADER
==================================================  -->

<?php include 'header.php'; ?>

<div id="not-found" class="body-container">

	<!-- ==================================================    
		404 MESSAGE + SUGGESTIONS
	==================================================  -->

	<main>
		<h1>oops! we didn't find anything!</h1>
		<img src="https://media.giphy.com/media/rvDtLCABDMaqY/giphy.gif" alt="">
		<p class="lead">search another keyword or take a look at our latest posts:</p>

		<!-- Search 
		=================================================== -->

		<div class="search">
			<input type="search" name="" id="">
			<button type="submit" class="btn btn-primary">go</button>
		</div>

		<!-- Latest posts
		=================================================== -->

		<section class="post">
			<img src="img/insta-3.jpg" alt="">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed cumque obcaecati placeat consequatur ab ut, nobis nesciunt ipsam deleniti! Natus corporis exercitationem assumenda nesciunt eos officiis quo esse odit? Cum...</p>
			<a href="" class="more">read more <i class="fas fa-angle-double-right"></i></a>
		</section>
		<section class="post">
			<img src="img/insta-3.jpg" alt="">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed cumque obcaecati placeat consequatur ab ut, nobis nesciunt ipsam deleniti! Natus corporis exercitationem assumenda nesciunt eos officiis quo esse odit? Cum...</p>
			<a href="" class="more">read more <i class="fas fa-angle-double-right"></i></a>
		</section>
	</main>

	<!-- ==================================================    
		SIDEBAR
	==================================================  -->

	<?php include 'sidebar.php'; ?>

</div>

<!-- ==================================================    
	INSTAGRAM SECTION
==================================================  -->

<section id="instagram">
	<div class="heading">
		<i class="fab fa-instagram social-icon"></i>
		<a href="https://www.instagram.com/thaynacoelho" target="_blank"><h2>@thaynacoelho</h2></a>
	</div>  
	<a href=""><img src="img/insta-1.jpg" alt=""></a>
	<a href=""><img src="img/insta-2.jpg" alt=""></a>
	<a href=""><img src="img/insta-3.jpg" alt=""></a>
	<a href=""><img src="img/insta-4.jpg" alt=""></a>
	<a href=""><img src="img/insta-5.jpg" alt=""></a> 
	<a href=""><img src="img/insta-6.jpg" alt=""></a> 
	<button class="btn btn-secondary">follow me <i class="fas fa-angle-double-right"></i></button>      
</section>

<!-- ==================================================    
	FOOTER
==================================================  -->

<?php include 'footer.php'; ?>