<?php get_header(); ?>

    <section id="main-picture">
    	<img src="<?php bloginfo('template_directory'); ?>/images/mini-annie.jpg" class="visible-xs visible-sm img-responsive">
		<div class="container-fluid">
			 <div class="row">
			    <div class="col-md-offset-6 col-md-6 col-xs-12">
			    	<div id="main-description">
						<h1><?php bloginfo('name'); ?></h1>
						<h2>Online Marketing et Social Media</h2>
						<p>Since my childhood, I have been fascinated by all which is creative like drawing, creation, photo and graphic design but mainly new technology like Internet. Actually, it's a nonstop advanced and innovation way, I'm still impressed by what we can learn every single day! That's why, I decided to focus my studies in Online Marketing in a business school in Lille (France) where I had the opportunity to get an internship in several companies like NetBooster, Gooster, Kaufman & Broad...Since january, I've been studying an Advanced Diploma in Online Marketing and Social Media at EF International School in San Francisco</p>
					</div>
				</div>
			</div>
		</div>
	</section>

<section id="blog">
	<div class="container">
		<h2><p class="fancy span"><span>Mon blog web</span></p></h2>
 		<div class="row">
 		<?php if (have_posts()) : ?>
 		   <?php while (have_posts()) : the_post(); ?>
 		    	<div class="col-md-6">
 		    		<div class="box-me">
 		    			<h3><?php the_title(); ?></h3>
 		    			<?php the_post_thumbnail('full', array("class" => "img-responsive")); ?>
 		    			<span class="dateArticle"><span class="jour"><?php the_time('j'); ?></span><span class="mois"><?php the_time('M'); ?></span><span class="annee"><?php the_time('Y'); ?></span></span>
						<p class="texte"><?php the_title();?></p>
						<div class="btn-group">
	  						<a href="<?php echo get_permalink(); ?>"><button type="button" class="btn-default2">En savoir plus</button></a>
						</div>
 		    		</div>
 		    	</div>
 		    <?php endwhile; ?>
 		 <?php endif; ?>
		</div>
	</div>
</section>

<section id="moi">
	<div class="container">
		<h2><p class="fancy span"><span>A propos de moi</span></p></h2>
 		<div class="row">
  			<div class="col-md-4">
	  			<div class="box-me">
					<h3>Experiences</h3>
						<div class="cercle">
							<a href="#"><i class="fa fa-graduation-cap fa-3x"></i></a>
						</div>
					<p class="texte">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat.</p> 
					<div class="btn-group">
  					<button type="button" class="btn-default3">En savoir plus</button>
					</div>
	  			</div>
			</div>
  			<div class="col-md-4">
	  			<div class="box-me">
					<h3>Missions</h3>
						<div class="cercle">
						<a href="#"><i class="fa fa-list-alt fa-3x"></i></a></div>
					<p class="texte">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat.</p> 
					<div class="btn-group">
					<button type="button" class="btn-default3">En savoir plus</button>
					</div>
	  			</div>
			</div>
  			<div class="col-md-4">
	  			<div class="box-me">
					<h3>Compétences</h3>
					<div class="cercle">
					<a href="#"><i class="fa fa-cog fa-3x"></i></a></div>
					<p class="texte">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat.</p> 
					<button type="button" class="btn-default3">En savoir plus</button>
	  			</div>
			</div>
		</div>
	</div>
</section>

<aside>
<!-- ajouter ici les 2 derniers posts du blog -->
</aside>

<?php get_footer(); ?>
