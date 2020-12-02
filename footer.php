<footer class="footer"> <!-- Footer -->
    <div class="logo-footer">
      <img src="<?php echo get_template_directory_uri().'/assets/img/logo/logo.png'; ?>" alt="Logo da Haverim">
    </div>
    <div class="info-contact">
      <div class="contact">
        <i class="fas fa-map-marker-alt"></i>
        <p>
          <?php the_field('adress-text'); ?>
          <!-- Rua Antônio Bento, 79 - loja 2<br>
          Vila Mathias | Santos - SP | CEP: 11705-280 -->
        </p>
        <span>endereço para correspondência</span>
      </div>
      <div class="contact">
        <i class="fas fa-envelope"></i>
        <p>
          <?php the_field('email-text'); ?>
          <!-- vendas@haverim.com.br -->
        </p>
        <span>fale conosco</span>
      </div>
      <div class="contact">
        <i class="fas fa-phone-volume"></i>
        <p>
          <?php the_field('telephone-text'); ?>
          <!-- 13 3321.7933<br>
          13 97421.3810 -->
        </p>
        <span>tel para contato</span>
      </div>
    </div>
    <div class="footer-info">
      <p>2018 - Haverim - Todos os direitos reservados</p>
      <img src="<?php echo get_template_directory_uri().'/assets/img//logo/marcasite.png'; ?>" alt="Desenvolvido por Marcasite">
      <ul>
        <li><a href="#">Home |</a></li>
        <li><a href="#">O Grupo |</a></li>
        <li><a href="#">Atuação |</a></li>
        <li><a href="#">Produtos |</a></li>
        <li><a href="#">Contato</a></li>
      </ul>
    </div>
  </footer>

  <!-- Jquery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!-- Owl Carousel -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <!-- Custom Javascript -->
  <script src="<?php echo get_template_directory_uri().'/assets/js/script.js'; ?>"></script>
</body>
</html>