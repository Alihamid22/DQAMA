  <footer class="site-footer">
    <div class="container py-4 d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3">
      <p class="mb-0">&copy; <?= date('Y') ?> <?php e('footer_text'); ?></p>
      <div class="d-flex gap-4">
        <a href="mailto:<?php e('footer_email'); ?>">E-mail</a>
        <a href="<?php e('footer_linkedin'); ?>" target="_blank" rel="noopener">LinkedIn</a>
        <a href="<?php e('footer_github'); ?>" target="_blank" rel="noopener">GitHub</a>
        <a href="admin.php">Admin</a>
      </div>
    </div>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
