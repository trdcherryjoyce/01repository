<?php
/*
	Template Name: MyPage
*/
?>

<?php 

	function MyPage_css(){
?>
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/MyPage.css"  type="text/css">	 	
		
<?php 
}
	add_filter('wp_head','MyPage_css');
?>

<?php get_header(); ?>
<div id="mybackground">
	<p class="firstp">I will start my page from scratch</p> 
	<div class="main1">
		<p class="secondp">Starting your page from scratch make you more productive and active programmer/developer</p>
		<p class="thirdp">It will not be hard for you to trace your code because you're the one who started it.</p>
	</div>
	<br>
	<a href="google.com"> Search Google</a>
	<div>Example of unordered list:</div>
		<ul class="one">
			<li>Coffee</li>
			<li>Tea</li>
			<li>Coca Cola</li>
		</ul> 
		
		<ul class="two">
			<li>Coffee</li>
			<li>Tea</li>
			<li>Coca Cola</li>
		</ul> 
	<div>Example of ordered list:</div>
	<ol class="three">
		<li>Coffee</li>
		<li>Tea</li>
		<li>Coca Cola</li>
	</ol> 
	
	<ol class="four">
		<li>Coffee</li>
		<li>Tea</li>
		<li>Coca Cola</li>
	</ol> 
	</br>
	<table>
		<tr>
			<th>Firstname</th>
			<th>lastname</th>
		</tr>
		<tr>
			<td>Ben</td>
			<td>San</td>
		</tr>
		
		<tr>
			<td>Ten</td>
			<td>Gokuo</td>
		</tr>
	</table>
	<br>
	<div class="overflow">
		facebook is not a physical country,<br>
		but with 900 million users, its 'population'<br>
		comes third after China an d India.<br>
		It may not be able to tax or jail its<br>
		inhabitats, but its executives, programmer,<br>
		and engineers do exercise a form of governments <br>
		over people's online activities and identities.
	</div>
	<br>
	<div class="test">First Paragraph<br>
						Middle Paragraph<br>
						Last Paragraph<br>
	
	</div>
	<div class="second">Second Paragraph</div>
	<div class="another_test">Third Paragraph</div>
	<br>
</div>
<br>
<div class="rotate">Let's do this</div>

<?php get_sidebar('right');?>
<?php get_footer(); ?>








