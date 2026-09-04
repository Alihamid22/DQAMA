<?php
  // Defines the page metadata and loads the shared site header.
  $currentPage = 'home';
  $pageTitle = 'Dave van der Veen | Portfolio';
  $metaDescription = 'Professional portfolio for Dave van der Veen, a product designer and front-end developer.';
  include __DIR__ . '/includes/header.php';
?>

    <main>
      <!-- Presents the main introduction, actions, metrics, and portrait. -->
      <section class="hero">
        <div class="container hero-grid">
          <div class="hero-copy">
            <p class="eyebrow"></p>
            <h1></h1>
            <p class="lede">
              
            </p>
            <div class="hero-actions">
              <a class="button button-primary" href="projects.php"></a>
              <a class="button button-secondary" href="about.php"></a>
            </div>
            <ul class="hero-metrics" aria-label="Key achievements">
              <li><strong></strong><span></span></li>
              <li><strong></strong><span></span></li>
              <li><strong></strong><span></span></li>
            </ul>
          </div>

        </div>
      </section>

      <!-- Displays the organizations associated with the portfolio. -->
      <section class="trust-bar">
        <div class="container trust-grid">
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          <span></span>
        </div>
      </section>

      <!-- Highlights selected portfolio projects. -->
      <section class="section">
        <div class="container">
          <div class="section-heading">
            <p class="eyebrow"></p>
            <h2></h2>
          </div>

          <div class="project-grid">
            <article class="project-card featured">
              <div class="project-card-content">
                <p class="project-tag"></p>
                <h3></h3>
                <p></p>
                <a href="projects.php"></a>
              </div>
            </article>

            <article class="project-card project-card-two">
              <div class="project-card-content">
                <p class="project-tag"></p>
                <h3></h3>
                <p></p>
                <a href="projects.php"></a>
              </div>
            </article>

            <article class="project-card project-card-three">
              <div class="project-card-content">
                <p class="project-tag"></p>
                <h3></h3>
                <p></p>
                <a href="projects.php"></a>
              </div>
            </article>
          </div>
        </div>
      </section>

      <!-- Summarizes the services provided. -->
      <section class="section section-alt">
        <div class="container two-column">
          <div>
            <p class="eyebrow"></p>
            <h2></h2>
          </div>
          <div class="services-grid">
            <div class="service-item">
              <span class="service-icon">01</span>
              <h3></h3>
              <p></p>
            </div>
            <div class="service-item">
              <span class="service-icon">02</span>
              <h3></h3>
              <p></p>
            </div>
            <div class="service-item">
              <span class="service-icon">03</span>
              <h3></h3>
              <p></p>
            </div>
          </div>
        </div>
      </section>

      <!-- Displays a client testimonial. -->
      <section class="section">
        <div class="container testimonial-wrap">
          <div class="quote-card">
            <p class="quote-mark">“</p>
            <p class="quote-text">
              
            </p>
            <div class="quote-person">
              <strong></strong>
              <span></span>
            </div>
          </div>
        </div>
      </section>
    </main>

<?php include __DIR__ . '/includes/footer.php'; ?>
