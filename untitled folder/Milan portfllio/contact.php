<?php
require 'includes/content.php';
$pageTitle = text_value('contact_title');
$activePage = 'contact';
require 'partials/header.php';
?>
<main class="inner-page contact-page">
  <section class="page-intro dark-intro">
    <div class="container">
      <p class="eyebrow"><?php e('contact_eyebrow'); ?></p>
      <h1><?php e('contact_heading'); ?></h1>
      <p><?php line_breaks('contact_intro'); ?></p>
    </div>
  </section>

  <section class="contact-section section-space">
    <div class="container">
      <div class="row g-5">
        <div class="col-lg-7">
          <form action="#" method="post" onsubmit="return false;">
            <div class="row g-4">
              <div class="col-md-6"><label for="name">Je naam</label><input id="name" class="form-control" type="text" placeholder="Voor- en achternaam"></div>
              <div class="col-md-6"><label for="email">E-mailadres</label><input id="email" class="form-control" type="email" placeholder="jij@bedrijf.nl"></div>
              <div class="col-12"><label for="subject">Waar kan ik bij helpen?</label><select id="subject" class="form-select"><option>Een nieuwe website</option><option>Een redesign</option><option>Een samenwerking</option><option>Iets anders</option></select></div>
              <div class="col-12"><label for="message">Vertel eens iets meer</label><textarea id="message" class="form-control" rows="5" placeholder="Waar droom je van?"></textarea></div>
              <div class="col-12"><button class="btn btn-accent btn-lg" type="submit">Verstuur bericht <span>&rarr;</span></button></div>
            </div>
          </form>
        </div>
        <div class="col-lg-4 offset-lg-1">
          <div class="contact-details">
            <p class="eyebrow dark-eyebrow">Of direct</p>
            <a href="mailto:<?php e('contact_email'); ?>"><?php e('contact_email'); ?></a>
            <p class="mt-5 mb-2">Gevestigd in</p>
            <strong><?php e('contact_location'); ?></strong>
            <p class="mt-5 mb-2">Volg mijn werk</p>
            <div class="social-links">
              <a href="<?php e('contact_social_1_url'); ?>" target="_blank" rel="noopener"><?php e('contact_social_1_label'); ?> &nearr;</a>
              <a href="<?php e('contact_social_2_url'); ?>" target="_blank" rel="noopener"><?php e('contact_social_2_label'); ?> &nearr;</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
<?php require 'partials/footer.php'; ?>
