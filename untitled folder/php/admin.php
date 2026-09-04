<?php
$sessionPath = __DIR__ . '/tmp/sessions';
if (!is_dir($sessionPath)) {
    mkdir($sessionPath, 0775, true);
}
session_save_path($sessionPath);
session_start();
require 'includes/content.php';

$loginError = '';
$message = $_SESSION['admin_message'] ?? '';
unset($_SESSION['admin_message']);

$isLoggedIn = $_SESSION['admin_logged_in'] ?? false;
$requestMethod = $_SERVER['REQUEST_METHOD'] ?? 'GET';

if ($requestMethod === 'POST' && isset($_POST['logout'])) {
    $_SESSION = [];
    session_destroy();
    header('Location: admin.php');
    exit;
}

if ($requestMethod === 'POST' && isset($_POST['password'])) {
    if (hash_equals(ADMIN_PASSWORD, (string)$_POST['password'])) {
        $_SESSION['admin_logged_in'] = true;
        header('Location: admin.php');
        exit;
    }

    $loginError = 'Het wachtwoord klopt niet.';
}

if ($requestMethod === 'POST' && isset($_POST['content']) && $isLoggedIn) {
    $_SESSION['admin_message'] = save_site_content($_POST['content'])
        ? 'De teksten zijn opgeslagen.'
        : 'De database is niet bereikbaar. Start MySQL in XAMPP en probeer opnieuw.';
    header('Location: admin.php');
    exit;
}

if ($requestMethod === 'POST' && isset($_POST['project']) && $isLoggedIn) {
    $result = save_project($_POST['project'], $_FILES['project_image'] ?? []);
    $_SESSION['admin_message'] = $result['message'];
    header('Location: admin.php');
    exit;
}

if ($requestMethod === 'POST' && isset($_POST['delete_project']) && $isLoggedIn) {
    $_SESSION['admin_message'] = delete_project((int)$_POST['delete_project'])
        ? 'Het project is verwijderd.'
        : 'Het project kon niet worden verwijderd.';
    header('Location: admin.php');
    exit;
}

$groups = [
    'Algemeen' => ['site_name', 'brand_name', 'meta_description', 'footer_text', 'footer_email', 'footer_linkedin', 'footer_github'],
    'Home' => ['home_title', 'home_eyebrow', 'home_heading', 'home_intro', 'home_card_top', 'home_card_line', 'home_scroll', 'home_work_eyebrow', 'home_work_heading', 'home_work_link', 'home_process_eyebrow', 'home_process_heading', 'home_process_text', 'home_process_button'],
    'Projecten pagina' => ['projects_title', 'projects_eyebrow', 'projects_heading', 'projects_intro', 'projects_cta_eyebrow', 'projects_cta_heading'],
    'Over mij' => ['about_title', 'about_eyebrow', 'about_heading', 'about_intro', 'about_location', 'about_story_eyebrow', 'about_story_heading', 'about_story_text_1', 'about_story_text_2', 'about_skills_eyebrow', 'about_skills_heading', 'skill_1_title', 'skill_1_text', 'skill_2_title', 'skill_2_text', 'skill_3_title', 'skill_3_text'],
    'Contact' => ['contact_title', 'contact_eyebrow', 'contact_heading', 'contact_intro', 'contact_email', 'contact_location', 'contact_social_1_label', 'contact_social_1_url', 'contact_social_2_label', 'contact_social_2_url'],
];

$labels = [
    'site_name' => 'Naam website',
    'brand_name' => 'Merknaam in navigatie',
    'meta_description' => 'Google omschrijving',
    'footer_text' => 'Footer tekst',
    'footer_email' => 'Footer e-mail',
    'footer_linkedin' => 'Footer LinkedIn',
    'footer_github' => 'Footer GitHub',
];

$content = site_content();
$allProjects = projects();
$editProject = null;

if ($isLoggedIn && isset($_GET['edit_project'])) {
    $editProject = project_by_id((int)$_GET['edit_project']);
}

$projectForm = $editProject ?: [
    'id' => '',
    'title' => '',
    'meta' => '',
    'description' => '',
    'image_path' => '',
    'image_alt' => '',
    'sort_order' => count($allProjects) + 1,
];
?>
<!doctype html>
<html lang="nl">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin | Portfolio</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/admin.css">
</head>
<body class="admin-body">
  <main class="admin-shell">
    <div class="admin-panel">
      <?php if (!$isLoggedIn): ?>
        <p class="eyebrow dark-eyebrow">Admin</p>
        <h1>Portfolio beheren</h1>
        <p class="text-secondary">Log in om teksten en projecten te veranderen.</p>
        <?php if ($loginError): ?><div class="alert alert-danger"><?= h($loginError) ?></div><?php endif; ?>
        <form method="post" class="admin-login-form">
          <label for="password">Wachtwoord</label>
          <input id="password" class="form-control" type="password" name="password" required autofocus>
          <button class="btn btn-accent mt-3" type="submit">Inloggen</button>
        </form>
      <?php else: ?>
        <div class="d-flex flex-column flex-lg-row justify-content-between gap-3 mb-4">
          <div>
            <p class="eyebrow dark-eyebrow">Admin</p>
            <h1>Portfolio beheren</h1>
            <p class="text-secondary mb-0">Beheer de teksten en voeg projecten met foto's toe.</p>
          </div>
          <form method="post"><button class="btn btn-outline-dark" type="submit" name="logout" value="1">Uitloggen</button></form>
        </div>

        <?php if ($message): ?><div class="alert alert-info"><?= h($message) ?></div><?php endif; ?>
        <?php if (!db()): ?><div class="alert alert-warning">MySQL is niet bereikbaar. Start MySQL in XAMPP of importeer <code>database.sql</code> in phpMyAdmin.</div><?php endif; ?>

        <section class="admin-section">
          <div class="d-flex flex-column flex-lg-row justify-content-between gap-2 mb-3">
            <div>
              <h2>Projecten</h2>
              <p class="text-secondary mb-0">Voeg projecten toe, pas ze aan of verwijder ze.</p>
            </div>
            <?php if ($editProject): ?><a class="btn btn-outline-dark align-self-start" href="admin.php">Nieuw project</a><?php endif; ?>
          </div>

          <div class="admin-project-list">
            <?php foreach ($allProjects as $project): ?>
              <article class="admin-project-row">
                <div class="admin-project-thumb">
                  <?php if (!empty($project['image_path'])): ?>
                    <img src="<?= h($project['image_path']) ?>" alt="<?= h($project['image_alt'] ?: $project['title']) ?>">
                  <?php else: ?>
                    <span><?= h(strtoupper(substr($project['title'], 0, 2))) ?></span>
                  <?php endif; ?>
                </div>
                <div>
                  <h3><?= h($project['title']) ?></h3>
                  <p><?= h($project['meta']) ?></p>
                </div>
                <div class="admin-project-buttons">
                  <a class="btn btn-outline-dark btn-sm" href="admin.php?edit_project=<?= (int)$project['id'] ?>">Bewerken</a>
                  <form method="post" onsubmit="return confirm('Weet je zeker dat je dit project wilt verwijderen?');">
                    <button class="btn btn-outline-danger btn-sm" type="submit" name="delete_project" value="<?= (int)$project['id'] ?>">Verwijderen</button>
                  </form>
                </div>
              </article>
            <?php endforeach; ?>
          </div>

          <form method="post" enctype="multipart/form-data" class="admin-project-form mt-4">
            <h2><?= $editProject ? 'Project bewerken' : 'Project toevoegen' ?></h2>
            <input type="hidden" name="project[id]" value="<?= h((string)$projectForm['id']) ?>">
            <input type="hidden" name="project[existing_image]" value="<?= h((string)$projectForm['image_path']) ?>">
            <div class="row g-3">
              <div class="col-md-6">
                <label for="project_title">Titel</label>
                <input id="project_title" class="form-control" type="text" name="project[title]" value="<?= h($projectForm['title']) ?>" required>
              </div>
              <div class="col-md-4">
                <label for="project_meta">Meta</label>
                <input id="project_meta" class="form-control" type="text" name="project[meta]" value="<?= h($projectForm['meta']) ?>" placeholder="2026 - Webdesign" required>
              </div>
              <div class="col-md-2">
                <label for="project_sort">Volgorde</label>
                <input id="project_sort" class="form-control" type="number" name="project[sort_order]" value="<?= h((string)$projectForm['sort_order']) ?>">
              </div>
              <div class="col-12">
                <label for="project_description">Omschrijving</label>
                <textarea id="project_description" class="form-control" name="project[description]" rows="3" required><?= h($projectForm['description']) ?></textarea>
              </div>
              <div class="col-md-6">
                <label for="project_image">Foto</label>
                <input id="project_image" class="form-control" type="file" name="project_image" accept="image/png,image/jpeg,image/webp,image/gif">
              </div>
              <div class="col-md-6">
                <label for="project_alt">Alt tekst foto</label>
                <input id="project_alt" class="form-control" type="text" name="project[image_alt]" value="<?= h($projectForm['image_alt']) ?>">
              </div>
              <?php if (!empty($projectForm['image_path'])): ?>
                <div class="col-12">
                  <div class="admin-current-image">
                    <img src="<?= h($projectForm['image_path']) ?>" alt="<?= h($projectForm['image_alt'] ?: $projectForm['title']) ?>">
                    <label class="form-check-label"><input class="form-check-input me-2" type="checkbox" name="project[remove_image]" value="1">Foto verwijderen</label>
                  </div>
                </div>
              <?php endif; ?>
            </div>
            <button class="btn btn-accent mt-3" type="submit"><?= $editProject ? 'Project opslaan' : 'Project toevoegen' ?></button>
          </form>
        </section>

        <form method="post">
          <?php foreach ($groups as $groupName => $keys): ?>
            <section class="admin-section">
              <h2><?= h($groupName) ?></h2>
              <div class="row g-3">
                <?php foreach ($keys as $key): ?>
                  <?php $label = $labels[$key] ?? ucfirst(str_replace('_', ' ', $key)); ?>
                  <div class="col-md-6">
                    <label for="<?= h($key) ?>"><?= h($label) ?></label>
                    <?php if (strlen($content[$key] ?? '') > 75): ?>
                      <textarea id="<?= h($key) ?>" class="form-control" name="content[<?= h($key) ?>]" rows="3"><?= h($content[$key] ?? '') ?></textarea>
                    <?php else: ?>
                      <input id="<?= h($key) ?>" class="form-control" type="text" name="content[<?= h($key) ?>]" value="<?= h($content[$key] ?? '') ?>">
                    <?php endif; ?>
                  </div>
                <?php endforeach; ?>
              </div>
            </section>
          <?php endforeach; ?>
          <div class="admin-actions">
            <a class="btn btn-outline-dark" href="index.php">Bekijk website</a>
            <button class="btn btn-accent" type="submit">Teksten opslaan</button>
          </div>
        </form>
      <?php endif; ?>
    </div>
  </main>
</body>
</html>
