<?php get_header();?>
	<div id="main">
		<div id= "conteudo">
		<h1> Conteúdo</h1> <!-- diz nome-->
			<?php if (have_posts()) : while (have_posts()):the_post();?> <!--mostra post que existam-->
				  <h2> <a href="<?php the_permalink();?>"></href><?php the_title(); ?></a></h2> <!--tras titulo-->
				  <p><?php the_content(); ?></p>  <!--tras conteudo-->
				  <hr>
				<?php endwhile; ?>
				 <div class="paginacao">
				 	<ul>
				 	<li><?php next_posts_link('Posts Antigos'); ?></li>
				 	<li><?php previous_posts_link('Posts Novos'); ?></li>
					 </ul>
				 </div>
				<?php else: ?>
			<?php endif; ?>
			</div>
			<?php get_sidebar(); ?><!--tras conteudo do sidebar.php-->
			</div>
			<?php get_footer(); ?><!--tras conteudo do footer.php-->