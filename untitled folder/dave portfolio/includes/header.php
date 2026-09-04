<?php
  // Sets a default page identifier for navigation highlighting.
  $currentPage = $currentPage ?? 'home';
?>
<!-- Defines shared document metadata, typography, and styles. -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo $pageTitle ?? 'Dave van der Veen'; ?></title>
    <meta name="description" content="<?php echo $metaDescription ?? 'Portfolio of Dave van der Veen'; ?>" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Cormorant+Garamond:wght@600;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="styles.css" />
  </head>
  <body>
    <!-- Provides the shared site navigation and primary contact action. -->
    <header class="site-header">
      <div class="container nav-wrap">
        <a class="brand" href="index.php">
          <span class="brand-mark">D</span>
          <span>Dave van der Veen</span>
        </a>

        <button class="nav-toggle" aria-label="Toggle navigation">
          <span></span>
          <span></span>
          <span></span>
        </button>

        <nav class="site-nav">
          <a class="<?php echo $currentPage === 'home' ? 'active' : ''; ?>" href="index.php">Home</a>
          <a class="<?php echo $currentPage === 'about' ? 'active' : ''; ?>" href="about.php">About</a>
          <a class="<?php echo $currentPage === 'projects' ? 'active' : ''; ?>" href="projects.php">CV</a>
          <a class="<?php echo $currentPage === 'contact' ? 'active' : ''; ?>" href="contact.php">Contact</a>
        </nav>

        <a class="button button-primary nav-cta" href="contact.php">Book a Call</a>
      </div>
    </header>
