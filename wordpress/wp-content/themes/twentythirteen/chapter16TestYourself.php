<?php
/*
	Template Name: chapter16TestYourself
*/
?>

<?php 

	function chapter16TestYourself_css(){
?>
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/chapter16TestYourself.css"  type="text/css">		
		
<?php 
}
	add_filter('wp_head','chapter16TestYourself_css');
?>

<?php get_header(); ?>
<div class="yellowbg">
<p class="firstp">My Own Invented Toy</p>
	<video controls>
	  <source src="#" type="video/mp4">
	  <source src="#" type="video/ogg">
	  Your browser does not support the video tag.
	</video>
<p>
	<p class="firstp">Story Line</p>
	 I was working in this project since I was on grade school,
	now I'm in college; I have more knowledge about invention that's why I was able to
	finish my invented toy.
</p> 
</br>
<p class="firstp">Recording during Invention Progress</p> 
	<i class="secondi">I also record my voice during my invention.</i><br>
		<audio controls>
		  <source src="#" type="audio/ogg">
		  <source src="#" type="audio/mpeg">
		Your browser does not support the audio element.
		</audio>
<p>I record my voice just incase I forgot something
about the progress of the toy, this will help me remind the progress
and also to share something to my friends.</p>
</br>
<p class="secondp">If you want to ask something about my invention, just message!</br>
Please fill up the information below.
</p>
<hr>
	<div class=lastbox>
	<p class="inf" >Information</p>
		<p class="secondp">
			Name:<input type="text"/><br>
			Already Invented something? 
				<select>
					<option>Yes</option>
					<option>No</option>
				</select><br>
			Email: <input type="text"/> <br>
			Date you leave question: <input type="text" placeholder="mm/dd/yyyy"/></br>
			Interest:</br>
				<label> <input type="checkbox">Invention</label></br>
				<label> <input type="checkbox">Science</label></br>
			 	<label> <input type="checkbox">Programming</label></br>
			 	<br>
			Your Question: <input type="text" /></br>
			<button class="Danger">Submit</button>
		</p>
	</div> 
 </div>
<?php get_sidebar('right');?>
<?php get_footer(); ?>








