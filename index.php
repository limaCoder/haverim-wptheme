<!DOCTYPE html>
<?php get_header(); ?>

<main> <!-- Carousel -->
    <div class="owl-carousel owl-theme">
      <div class="slide slide-1">
          <div class="slide-content">
              <h1>Distribuindo qualidade de vida</h1>
              <p>Atendemos toda a Baixada Santista</p>
              <button>Saiba mais</button>
          </div>
      </div>
      <div class="slide slide-2">
          <div class="slide-content">
            <h1>Distribuindo qualidade de vida</h1>
            <p>Atendemos toda a Baixada Santista</p>
            <button>Saiba mais</button>
        </div>
      </div>
      <div class="slide slide-3">
          <div class="slide-content">
            <h1>Distribuindo qualidade de vida</h1>
            <p>Atendemos toda a Baixada Santista</p>
            <button>Saiba mais</button>
        </div>
      </div>
    </div>

    <div class="main-content"> <!-- Services -->
      <div class="main-col-content orange1">
        <img src="<?php echo get_template_directory_uri().'/assets/img/icons/vacine.png'; ?>" alt="">
        <div class="border"></div>
        <h3>Agilidade</h3>
        <p>Entrega rápida e prática em<br> toda a Baixada Santista.</p>
      </div>
      <div class="main-col-content orange2">
        <img src="<?php echo get_template_directory_uri().'/assets/img/icons/sneakers.png'; ?>" alt="">
        <div class="border"></div>
        <h3>Produtos Nestlé</h3>
        <p>Diversos produtos Nestlé<br> Health Science.</p>
      </div>
      <div class="main-col-content orange3">
        <img src="<?php echo get_template_directory_uri().'/assets/img/icons/gloves.png'; ?>" alt="">
        <div class="border"></div>
        <h3>Nutrição</h3>
        <p>Alimentos que garantem uma<br> nutrição completa.</p>
      </div>
      <div class="main-col-content orange4">
        <img src="<?php echo get_template_directory_uri().'/assets/img/icons/helmet.png'; ?>" alt="">
        <div class="border"></div>
        <h3>Especialização</h3>
        <p>Atendimento por equipe<br> especializada de nutricionista<br> e farmacêutico.</p>
      </div>
    </div>
  </main>

  <section id="about-us" class="about-us"> <!-- About Us -->
    <h1>Haverim</h1>
    <div class="about-us-content">
      <div class="about-us-image">
        <img src="<?php the_field('about-us-image'); ?>" alt="Sobre nós">
      </div>
      <p> <?php the_field('about-us-text'); ?>
        <!-- A Haverim atua com Produtos Hospitalares,<br>
        comércio de instrumentos e materiais para uso<br>
        médico, cirúrgico, hospitalar e de laboratórios.<br>
        Dentre os pontos principais da empresa, ela se<br>
        destaca por ter como prioridade a segurança,<br>
        tanto a dos profissionais, independente da área,<br>
        quanto das pessoas envolvidas com o meio,<br>
        atuando nos produtos mais eficientes do<br>
        mercado.<br>
        <br>
        O material é escolhido com extremo cuidado,<br>
        visando a qualidade para evitar, de maneira<br>
        eficiente, os possíveis riscos decorrentes de<br>
        cada segmento. Outro ponto importante é a<br>
        agilidade na entrega. Por ter se firmado no<br>
        mercado, possui maior facilidade e<br>
        responsabilidade com prazos. -->
      </p>
    </div>
  </section>

  <section id="features" class="features"> <!-- Features -->
    <h4>Confira</h4>
    <h3>Nossos Destaques</h3>
    <div class="mini-carousel owl-carousel owl-theme">
      <div class="mini-slide slide slide-4">
          <div class="slide-content">
          </div>
      </div>
      <div class="mini-slide slide slide-5">
          <div class="slide-content">
        </div>
      </div>
      <div class="mini-slide slide slide-6">
          <div class="slide-content">
        </div>
      </div>
    </div>
  </section>

  <section class="products"> <!-- Products -->
    <div class="product">
      <img src="<?php the_field('product-one-image'); ?>" alt="Trophic 1,5 - Hipercalórica">
      <p class="product-title"><?php the_field('product-one-text'); ?>
      </p>
      <div class="rating">
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star"></span>
      </div>
      <p class="original-price">de R$24,00</p>
      <p class="new-price">por R$<span>21,23</span></p>
    </div>
    <div class="product">
      <img src="<?php the_field('product-two-image'); ?>" alt="Thicken UP Clear - 125 g">
      <p class="product-title"><?php the_field('product-two-text'); ?>
      </p>
      <div class="rating">
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
      </div>
      <p class="original-price">de R$67,40</p>
      <p class="new-price">por R$<span>59,00</span></p>
    </div>
    <div class="product">
      <img src="<?php the_field('product-three-image'); ?>" alt="Botina de Segurança">
      <p class="product-title"><?php the_field('product-three-text'); ?>
      </p>
      <div class="rating">
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star"></span>
      </div>
      <p class="original-price">de R$24,80</p>
      <p class="new-price">por R$<span>21,23</span></p>
    </div>
    <div class="product">
      <img src="<?php the_field('product-four-image'); ?>" alt="Trophic Soya 1000 ml">
      <p class="product-title"><?php the_field('product-four-text'); ?>
      </p>
      <div class="rating">
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star"></span>
      </div>
      <p class="original-price">de R$17,00</p>
      <p class="new-price">por R$<span>14,82</span></p>
    </div>
  </section>

  <section id="form" class="form"> <!-- Form -->
    <img src="<?php the_field('coffee'); ?>" alt="Café">
    <div class="div-form">
      <h4>Solicite uma visita</h4>
      <p>Estamos sempre prontos para atender com<br>
        maior agilidade e qualidade possível.</p>
      <form action="">
        <input type="text" placeholder="Nome">
        <div class="form-wrap">
          <input type="text" placeholder="E-mail">
          <input type="text" placeholder="Telefone">
        </div>
        <input type="text" placeholder="Assunto">
        <textarea placeholder="Mensagem"></textarea>
        <div class="group-button">
          <div class="div-btn">
            <input class="form-btn" type="submit" value="Apagar">
            <i class="btn-icon-trash fas fa-trash-alt" aria-hidden="true"></i>
          </div>
          <div class="div-btn">
            <input class="form-btn" type="submit" value="Enviar">
            <i class="btn-icon-arrow-right fas fa-long-arrow-alt-right" aria-hidden="true"></i>
          </div>
        </div>
      </form>
    </div>
  </section>

  <section class="blog"> <!-- Blog -->
    <h4>Nosso blog</h4>
    <h2>Dicas de saúde</h2>
    <div class="content-blog">
    <div class="post">
        <img src="<?php the_field('post-image'); ?>" alt="">
        <h1>
          <?php the_field('blog-title'); ?>
          <!-- Saúde cognitiva -->
        </h1>
        <p>
        <?php the_field('blog-content'); ?>  
        <!-- Declínios na saúde cognitiva associados à idade podem ser normais, mas<br>
           eles não precisam ser um problema grave. Tomar as medidas necessárias<br>
           para manter e até melhorar a saúde cognitiva durante o processo de<br>
           envelhecimento é importante. Saber mais sobre o que influencia o<br>
           o cérebro e cognição são aspectos que podem ajudar. --></p>
      </div>
      <div class="post">
        <img src="<?php the_field('post-image'); ?>" alt="">
        <h1>
          <?php the_field('blog-title'); ?>
          <!-- Saúde cognitiva -->
        </h1>
        <p>
        <?php the_field('blog-content'); ?>  
        <!-- Declínios na saúde cognitiva associados à idade podem ser normais, mas<br>
           eles não precisam ser um problema grave. Tomar as medidas necessárias<br>
           para manter e até melhorar a saúde cognitiva durante o processo de<br>
           envelhecimento é importante. Saber mais sobre o que influencia o<br>
           o cérebro e cognição são aspectos que podem ajudar. --></p>
      </div>
    </div>
  </section>

  <section id="map" class="map"> <!-- Map -->
    <div class="map-content">
      <h4>
        <?php the_field('map-text'); ?>
        <!-- Nossa atuação abrange<br>um raio de aproximadamente< -->
      </h4>
      <p>
        <?php the_field('map-second-text'); ?>
        <!-- 200km dentro do Estado de São Paulo -->
      </p>
      <button class="map-button">Saiba Mais</button>
    </div>
  </section>

<?php get_footer(); ?>