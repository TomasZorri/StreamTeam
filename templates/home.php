<?php
/*
Template Name: Página de Inicio
*/
?>

<?php get_template_part('header', 'custom'); ?>

<main id="main-content">
    <div class="container">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		        
		        <section id="HERO" class="hero">
		        	<picture>
			            <source media="(min-width: 651px)" srcset="<?php echo get_field('image_hero_desktop') ?>">
			            <source media="(max-width: 650px)" srcset="<?php echo get_field('image_hero_movil') ?>">
			            <img loading="eager" class="heroimg" src="<?php echo get_field('image_hero_desktop') ?>" alt="Hero Stream Team">
			        </picture>
		        	<div class="contentHero">
		        		<h1><?php echo get_field('title_hero'); ?></h1>
		        		<p><?php echo wp_kses_post(get_field('subtitle_hero')); ?></p>

			        	<?php 
						$link = get_field('callaction_hero');
						if( $link ): ?>
						    <a class="callactionsContactWhatsapo" href="<?php echo esc_url($link['url']);?>" target="<?php echo esc_attr(($link['target'] ? $link['target'] : '_self'));?>"><?php echo esc_html($link['title']);?></a>
						<?php endif; ?>
		        	</div>
		        </section>

		   		
		   		<section id="SERVICIOS" class="servicios">
	        		<h3 class="SubTitleGeneric"><?php echo get_field('title_servicio_main'); ?></h3>

	        		<div class="slick-slider">
					         <?php  while( have_rows('servicios') ) : the_row(); ?>
			                    <div class="item ">
			                        <img src="<?php echo get_sub_field("imagen_servicio") ?>" loading="lazy" alt="">
			                         
			                        <div class="contenido"> 
			                            <h4><?php echo get_sub_field("title_servicio") ?></h4>
			                            <p><?php echo get_sub_field("cotenido_servicio") ?></p>
			                        </div>   
			                    </div>
		                    <?php  endwhile; ?>
					</div>
		        </section>




		        <section class="nosotros">
		         <?php  while( have_rows('nosotros') ) : the_row(); ?>
                    <div class="item" id="<?php echo strtolower(preg_replace('/[^a-zA-Z0-9-_]/', '', str_replace('|', '', trim(get_sub_field("title_nosotros"))))); ?>">
                        <img src="<?php echo get_sub_field("img_nosotros") ?>" loading="lazy" alt="">
                         
                        <div class="contenido"> 
                            <h4 class="SubTitleGeneric"><?php echo get_sub_field("title_nosotros") ?></h4>
                            <p><?php echo get_sub_field("content_nosotros") ?></p>
                        </div>   
                    </div>
                    <?php  endwhile; ?>
		        </section>



		         <section id="CONTACTO" class="contacto">
		        	<div class="contenido">
		        		<h4 class="SubTitleGeneric"><?php echo get_field('sub_title_contacto'); ?></h4>
		        		<h3><?php echo get_field('titulo_contacto'); ?></h3>
		        		<p><?php echo wp_kses_post(get_field('contenido_contacto')); ?></p>

		        		<div class="contentButtons"> 
				        	<?php 
							$link = get_field('whatsapp_contacto');
							if( $link ): ?>
							    <a class="callactionsContactWhatsapo" href="<?php echo esc_url($link['url']);?>" target="<?php echo esc_attr(($link['target'] ? $link['target'] : '_self'));?>"><?php echo esc_html($link['title']);?></a>
							<?php endif; ?>

							<?php /*
							$link = get_field('solicitar_cotizacion_contacto');
							if( $link ): ?>
							    <a class="callactionsContactCotizacion" href="<?php echo esc_url($link['url']);?>" target="<?php echo esc_attr(($link['target'] ? $link['target'] : '_self'));?>"><?php echo esc_html($link['title']);?></a>
							<?php endif; */?>
						</div>
		        	</div>
		            <img loading="lazy" src="<?php echo get_field('imagen_contacto') ?>" alt="Contacto Stream Team">
		        </section>
		        
		   
		    </article>
		<?php endwhile; endif; ?>
    </div>
</main>



<script type="text/javascript">
$(document).ready(function(){
    $('.slick-slider').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3000,
        infinite: true,
        arrows: false,
        dots: false,
        centerMode: false,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1.1,
                    centerMode: true,
                    centerPadding: "20px",
                }
            }
        ]
    });
});


</script>


<?php get_template_part('footer', 'custom'); ?>
