<?php
$pageTitle = $pageTitle ?? 'Portfolio | Milan van de Witte';
$activePage = $activePage ?? '';
$siteDescription = function_exists('text_value') ? text_value('meta_description') : 'Portfolio van Milan van de Witte.';
$brandName = function_exists('text_value') ? text_value('brand_name') : 'milan';
?>
<!doctype html>
<html lang="nl">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="<?= htmlspecialchars($siteDescription, ENT_QUOTES, 'UTF-8') ?>">
  <title><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Mono:wght@400;500&family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
  <nav class="navbar navbar-expand-lg fixed-top navbar-dark">
    <div class="container">
      <a class="navbar-brand" href="index.php"><?= htmlspecialchars($brandName, ENT_QUOTES, 'UTF-8') ?><span>.</span></a>
      <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Menu openen"><span class="navbar-toggler-icon"></span></button>
      <div class="collapse navbar-collapse" id="mainNav">
        <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-2">
          <li class="nav-item"><a class="nav-link <?= $activePage === 'home' ? 'active' : '' ?>" href="index.php">Home</a></li>
          <li class="nav-item"><a class="nav-link <?= $activePage === 'projects' ? 'active' : '' ?>" href="projects.php">Projecten</a></li>
          <li class="nav-item"><a class="nav-link <?= $activePage === 'about' ? 'active' : '' ?>" href="over-mij.php">Over mij</a></li>
          <li class="nav-item"><a class="btn btn-outline-light btn-sm px-3 back-button" href="../team.html" onclick="if (document.referrer && new URL(document.referrer).origin === window.location.origin) { window.history.back(); return false; }">&larr; Terug</a></li>
          <li class="nav-item ms-lg-2"><a class="btn btn-outline-light btn-sm px-3 <?= $activePage === 'contact' ? 'active' : '' ?>" href="contact.php">Neem contact op</a></li>
        </ul>
      </div>
    </div>
  </nav>
