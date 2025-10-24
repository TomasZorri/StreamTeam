<footer id="footer">
    <div class="container">
        <?php if (is_active_sidebar('footer-widget')) : ?>
            <?php dynamic_sidebar('footer-widget'); ?>
        <?php else : ?>
            <p>Agrega tu información de contacto en los widgets.</p>
        <?php endif; ?>
    </div>
	
	<a class="boton_whastapp_fixed" target="_new" aria-label="Consultas por WhatsApp" href="https://api.whatsapp.com/send?phone=+5491155774300&text=Consulta%20desde%20web%20de%20Stream%20Team">
		<img loading="lazy" src="/wp-content/uploads/2025/03/boton-whastapp.png" alt="escribinos por whatsapp">
	</a>
</footer>



<?php wp_footer(); ?>

</body>
</html>