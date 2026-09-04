<?php
require 'includes/content.php';
$pageTitle = text_value('projects_title');
$activePage = 'projects';
$allProjects = projects();
$fallbackClasses = ['case-aurora', 'case-lume', 'case-studio', 'case-noma'];
require 'partials/header.php';
?>
<main class="inner-page">
  <section class="page-intro dark-intro">
    <div class="container">
      <p class="eyebrow"><?php e('projects_eyebrow'); ?></p>
      <h1><?php e('projects_heading'); ?></h1>
      <p><?php line_breaks('projects_intro'); ?></p>
    </div>
  </section>

  <section class="projects-grid-section section-space">
    <div class="container">
      <div class="row g-4">
        <?php foreach ($allProjects as $index => $project): ?>
          <?php $fallbackClass = $fallbackClasses[$index % count($fallbackClasses)]; ?>
          <div class="col-md-6">
            <article class="case-card <?= h($fallbackClass) ?> <?= !empty($project['image_path']) ? 'has-photo' : '' ?>">
              <div class="case-art">
                <?php if (!empty($project['image_path'])): ?>
                  <img class="project-photo" src="<?= h($project['image_path']) ?>" alt="<?= h($project['image_alt'] ?: $project['title']) ?>">
                <?php elseif ($fallbackClass === 'case-aurora'): ?>
                  <span class="case-logo">AURORA</span><div class="dashboard"><i></i><i></i><i></i></div>
                <?php elseif ($fallbackClass === 'case-lume'): ?>
                  <span class="lume-case-logo">lume</span><div class="bottle"></div>
                <?php elseif ($fallbackClass === 'case-studio'): ?>
                  <span>FORM<br>FOLLOWS<br>FEELING</span><div class="studio-square"></div>
                <?php else: ?>
                  <span class="noma-logo">NOMA</span><div class="noma-sun"></div><small>explore further</small>
                <?php endif; ?>
              </div>
              <div class="case-meta">
                <p><?= h($project['meta']) ?></p>
                <h2><?= h($project['title']) ?></h2>
                <span><?= h($project['description']) ?> <b>&nearr;</b></span>
              </div>
            </article>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>


<?php require 'partials/footer.php'; ?>
