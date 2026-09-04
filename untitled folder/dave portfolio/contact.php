<?php
  // Defines the page metadata and loads the shared site header.
  $currentPage = 'contact';
  $pageTitle = 'Contact | Dave van der Veen';
  $metaDescription = 'Get in touch with Dave van der Veen for design and development projects.';
  include __DIR__ . '/includes/header.php';
?>

    <main>
      <!-- Introduces the contact page and its call to action. -->
      <section class="page-hero">
        <div class="container narrow center-text">
          <p class="eyebrow">Let’s talk</p>
          <h1>Ready to build something memorable?</h1>
        </div>
      </section>

      <!-- Combines direct contact details with the inquiry form. -->
      <section class="section">
        <div class="container contact-layout">
          <div class="contact-card">
            <h3>Get in touch</h3>
            <ul class="contact-list">
              <li><span>Email</span><a href="mailto:"></a></li>
              <li><span>Phone</span><a href="tel:"></a></li>
              <li><span>Based in</span><p></p></li>
            </ul>
            <div class="social-stack">
              <a href="#">Instagram</a>
              <a href="#">Dribbble</a>
              <a href="#">LinkedIn</a>
            </div>
          </div>

          <!-- Collects the visitor's contact and project details. -->
          <form class="contact-form">
            <label>
              Name
              <input type="text" name="name" placeholder="Your name" />
            </label>
            <label>
              Email
              <input type="email" name="email" placeholder="you@example.com" />
            </label>
            <label>
              Project type
              <input type="text" name="project" placeholder="Brand, website, product..." />
            </label>
            <label>
              Message
              <textarea name="message" rows="5" placeholder="Tell me about your project"></textarea>
            </label>
            <button class="button button-primary" type="submit">Send Inquiry</button>
          </form>
        </div>
      </section>
    </main>

<?php include __DIR__ . '/includes/footer.php'; ?>
