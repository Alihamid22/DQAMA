<?php
require 'includes/content.php';
$pageTitle = text_value('about_title');
$activePage = 'about';
require 'partials/header.php';
?>
<main class="inner-page">
  <section class="page-intro dark-intro about-intro">
    <div class="container">
      <div class="row align-items-end g-5">
        <div class="col-lg-7">
          <p class="eyebrow"><?php e('about_eyebrow'); ?></p>
          <h1><?php e('about_heading'); ?></h1>
        </div>
        <div class="col-lg-5"><p><?php line_breaks('about_intro'); ?></p></div>
      </div>
    </div>
  </section>

  <section class="section-space">
    <div class="container">
      <div class="row g-5 align-items-center">
        <div class="col-lg-5">
          <div class="portrait-placeholder">
            <span>MV</span>
            <div class="portrait-label"><?php line_breaks('about_location'); ?></div>
          </div>
        </div>
        <div class="col-lg-6 offset-lg-1">
          <p class="eyebrow dark-eyebrow"><?php e('about_story_eyebrow'); ?></p>
          <h2><?php e('about_story_heading'); ?></h2>
          <p class="body-copy"><?php line_breaks('about_story_text_1'); ?></p>
          <p class="body-copy"><?php line_breaks('about_story_text_2'); ?></p>
        </div>
      </div>
    </div>
  </section>

  <section class="skills-section section-space">
    <div class="container">
      <div class="row g-5">
        <div class="col-lg-4">
          <p class="eyebrow"><?php e('about_skills_eyebrow'); ?></p>
          <h2><?php e('about_skills_heading'); ?></h2>
        </div>
        <div class="col-lg-7 offset-lg-1">
          <div class="skill-item"><span>01</span><div><h3><?php e('skill_1_title'); ?></h3><p><?php e('skill_1_text'); ?></p></div></div>
          <div class="skill-item"><span>02</span><div><h3><?php e('skill_2_title'); ?></h3><p><?php e('skill_2_text'); ?></p></div></div>
          <div class="skill-item"><span>03</span><div><h3><?php e('skill_3_title'); ?></h3><p><?php e('skill_3_text'); ?></p></div></div>
        </div>
      </div>
    </div>
  </section>
</main>
<?php require 'partials/footer.php'; ?>
