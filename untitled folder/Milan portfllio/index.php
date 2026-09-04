<?php
require 'includes/content.php';
$pageTitle = text_value('home_title');
$activePage = 'home';
$featuredProjects = projects(2);
require 'partials/header.php';
?>
<main>
  <section class="hero-section">
    <div class="hero-orb orb-one"></div><div class="hero-orb orb-two"></div>
    <div class="container position-relative">
      <div class="row min-vh-100 align-items-center pt-5">
        <div class="col-lg-8 col-xl-7">
          <p class="eyebrow mb-3"><span></span> <?php e('home_eyebrow'); ?></p>
          <h1><?php e('home_heading'); ?></h1>
          <p class="hero-copy mt-4"><?php line_breaks('home_intro'); ?></p>
          <div class="d-flex flex-wrap gap-3 mt-4">
            <a class="btn btn-accent btn-lg" href="projects.php">Bekijk mijn werk <span>&nearr;</span></a>
            <a class="btn btn-link-light btn-lg" href="over-mij.php">Meer over mij <span>&darr;</span></a>
          </div>
        </div>
        <div class="col-lg-4 col-xl-5 d-none d-lg-block">
          <div class="hero-card float-animation">
            <div class="hero-card-top"><span class="status-dot"></span> <?php e('home_card_top'); ?></div>
            <div class="code-lines" aria-hidden="true"><i></i><i></i><i></i><i></i><i></i></div>
            <p><?php line_breaks('home_card_line'); ?></p>
          </div>
        </div>
      </div>
    </div>
    <a href="#werk" class="scroll-cue"><?php e('home_scroll'); ?> <span>&darr;</span></a>
  </section>

  <section id="werk" class="work-section section-space">
    <div class="container">
      <div class="row align-items-end mb-5">
        <div class="col-md-7">
          <p class="eyebrow dark-eyebrow"><?php e('home_work_eyebrow'); ?></p>
          <h2><?php e('home_work_heading'); ?></h2>
        </div>
        <div class="col-md-5 text-md-end">
          <a class="text-arrow" href="projects.php"><?php e('home_work_link'); ?> <span>&rarr;</span></a>
        </div>
      </div>
      <div class="row g-4">
        <?php foreach ($featuredProjects as $index => $project): ?>
          <div class="<?= $index === 0 ? 'col-lg-7' : 'col-lg-5' ?>">
            <a href="projects.php" class="project-card <?= $index === 0 ? 'project-card-large project-aurora' : 'project-lume' ?> d-block <?= !empty($project['image_path']) ? 'has-photo' : '' ?>">
              <div class="project-visual">
                <?php if (!empty($project['image_path'])): ?>
                  <img class="project-photo" src="<?= h($project['image_path']) ?>" alt="<?= h($project['image_alt'] ?: $project['title']) ?>">
                <?php elseif ($index === 0): ?>
                  <div class="aurora-screen"><div class="aurora-mark">A</div><div class="aurora-bars"><i></i><i></i><i></i><i></i></div></div>
                <?php else: ?>
                  <div class="lume-pack">LUME<span>natural care</span></div><div class="lume-circle"></div>
                <?php endif; ?>
              </div>
              <div class="project-info"><div><p><?= h($project['meta']) ?></p><h3><?= h($project['title']) ?></h3></div><span class="round-arrow">&nearr;</span></div>
            </a>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <section class="about-strip section-space">
    <div class="container">
      <div class="row g-5 align-items-center">
        <div class="col-lg-5">
          <p class="eyebrow"><?php e('home_process_eyebrow'); ?></p>
          <h2><?php e('home_process_heading'); ?></h2>
        </div>
        <div class="col-lg-6 offset-lg-1">
          <p class="lead-text"><?php line_breaks('home_process_text'); ?></p>
          <a class="btn btn-outline-light mt-3" href="over-mij.php"><?php e('home_process_button'); ?></a>
        </div>
      </div>
    </div>
  </section>




</main>
<?php require 'partials/footer.php'; ?>
