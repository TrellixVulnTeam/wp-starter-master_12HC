<?php
/*
Template Name: Página contacto
*/
?>

<?php get_header(); ?>




<div class="container-contacto ">

   <?php get_template_part('components/page-title'); ?>


   <div class="container-contacto__contenido container">
      <div class="contacto__col1">
         <div class="contacto__contenido">
            <div class="contacto__datos">
               <div class="contacto__titulo">
                  <h4>Datos de contacto</h4>
               </div>
               <div class="contacto__direccion">
                  <p>Polígono industrial Can Prunera</p>
                  <p>Calle Baix Llobregat, 23-27</p>
                  <p>08759 Vallirana (BARCELONA)</p>
               </div>
               <div class="contacto__telefonos">
                  <div class="contacto__telefonos-item">
                     <i class="bi bi-telephone"></i>
                     <a href="tel:+34627919591">Rafa 627 919 591</a><br>
                  </div>
                  <div class="contacto__telefonos-item">
                     <i class="bi bi-telephone"></i>
                     <a href="tel:+34699450198">Jose Luis 699 450 198</a>
                  </div>
                  <div class="contacto__telefonos-whats">
                     <a href="https://wa.me/+34627919591/?text=Whatsapp%20enviado%20desde%20vallicorb.com"
                        target="_blank"><button class="boton boton--whatsapp boton--sm">WhatsApp</button></a>
                  </div>
               </div>

            </div>
         </div>
      </div><!-- fin col1 -->
      <div class="contacto__col2">
         <div class="formulario__contenido">
            <div class="formulario__titulo">
               <h1>Contacta con nosotros</h1>
            </div>
            <div class="formulario__datos">
               <?php if (have_posts()) : ?>
               <?php while (have_posts()) : the_post(); ?>

               <?php the_content('Leer más &raquo;'); ?>

               <?php endwhile; ?>
               <?php else : ?>
               <h2 class="center">Not Found</h2>
               <p class="center">Sorry, but you are looking for something that isn't here.</p>
               <?php endif; ?>
            </div>

         </div>
      </div><!-- fin col2 -->





   </div><!-- fin container-form -->

   <div class="container-map">
      <iframe
         src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2994.06038297571!2d1.9040176513068527!3d41.372772804761524!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12a4869c607d20dd%3A0x7a9ef14a92a8e546!2sCarrer%20Baix%20Llobregat%2C%2023%2C%2008759%20Vallirana%2C%20Barcelona!5e0!3m2!1ses!2ses!4v1655376304422!5m2!1ses!2ses"
         width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
         referrerpolicy="no-referrer-when-downgrade"></iframe>
   </div>

</div><!-- fin container-contacto -->







<?php get_footer(); ?>