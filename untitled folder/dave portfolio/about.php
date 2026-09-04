<?php
  // Defines the page metadata and loads the shared site header.
  $currentPage = 'about';
  $pageTitle = 'About | Dave van der Veen';
  $metaDescription = 'Learn more about Dave van der Veen and the design process behind the work.';
  include __DIR__ . '/includes/header.php';
?>

    <main>
      <!-- Introduces the purpose and theme of the about page. -->
      <section class="page-hero">
        <div class="container narrow">
          <p class="eyebrow">About me</p>
          <h1>Thoughtful design for brands that want to stand out.</h1>
        </div>
      </section>

      <!-- Presents the profile portrait, biography, and key statistics. -->
      <section class="section">
        <div class="container split-layout">
          <div class="portrait-box">
            <img src="https://images.unsplash.com/photo-1487412720507-e7ab37603c6f?auto=format&fit=crop&w=900&q=80" alt="Dave van der Veen portrait" />
          </div>
          <div class="story-copy">
            <p>
             
            </p>
            <p>
              
            </p>
            <div class="mini-stats">
              <div>
                <strong></strong>
                <span></span>
              </div>
              <div>
                <strong></strong>
                <span></span>
              </div>
              <div>
                <strong></strong>
                <span></span>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Explains the ordered process used to complete client work. -->
      <section class="section section-alt">
        <div class="container">
          <div class="section-heading left-align">
            <p class="eyebrow">Process</p>
            <h2>Simple, strategic, and built around momentum.</h2>
          </div>

          <div class="timeline">
            <div class="timeline-item">
              <span>01</span>
              <div>
                <h3>Discover</h3>
                <p>We align on goals, audience, positioning, and the real business challenge.</p>
              </div>
            </div>
            <div class="timeline-item">
              <span>02</span>
              <div>
                <h3>Design</h3>
                <p>I shape the visual direction and UX structure, making the experience clear and compelling.</p>
              </div>
            </div>
            <div class="timeline-item">
              <span>03</span>
              <div>
                <h3>Build</h3>
                <p>From code to launch, I develop responsive interfaces that feel premium and perform smoothly.</p>
              </div>
            </div>
            <div class="timeline-item">
              <span>04</span>
              <div>
                <h3>Refine</h3>
                <p>We iterate based on real feedback so the result keeps improving after launch.</p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Lists the main capabilities available to clients. -->
      <section class="section">
        <div class="container">
          <div class="section-heading left-align">
            <p class="eyebrow">Capabilities</p>
            <h2>Skills built for modern brands.</h2>
          </div>

          <div class="skills-grid">
            <div class="skill-card">
              <h3>Brand Systems</h3>
              <p>Visual identity, art direction, messaging, and brand clarity.</p>
            </div>
            <div class="skill-card">
              <h3>UX Strategy</h3>
              <p>User journeys, conversion design, and thoughtful digital flows.</p>
            </div>
            <div class="skill-card">
              <h3>UI Design</h3>
              <p>High-end interfaces with consistent typography, hierarchy, and rhythm.</p>
            </div>
            <div class="skill-card">
              <h3>Front-end Development</h3>
              <p>Responsive, clean, and performant websites built for real-world use.</p>
            </div>
          </div>
        </div>
      </section>
    </main>

<?php include __DIR__ . '/includes/footer.php'; ?>
