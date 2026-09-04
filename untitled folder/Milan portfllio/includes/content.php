<?php
const DB_HOST = '127.0.0.1';
const DB_NAME = 'portfolio_cms';
const DB_USER = 'root';
const DB_PASS = '';
const ADMIN_PASSWORD = 'admin123';
const PROJECT_UPLOAD_DIR = __DIR__ . '/../uploads/projects';
const PROJECT_UPLOAD_URL = 'uploads/projects/';

function site_defaults(): array
{
    return [
        'site_name' => 'Milan',
        'brand_name' => 'milan',
        'meta_description' => 'Portfolio van Milan van de Witte, student en webdeveloper.',
        'footer_text' => 'Milan van de Witte. Met aandacht gemaakt.',
        'footer_email' => 'milan@example.com',
        'footer_linkedin' => 'https://www.linkedin.com',
        'footer_github' => 'https://github.com',

        'home_title' => 'Milan van de Witte | Portfolio',
        'home_eyebrow' => 'Beschikbaar voor nieuwe projecten',
        'home_heading' => 'Ik bouw digitale ervaringen die blijven hangen.',
        'home_intro' => 'Hoi, ik ben Milan. Ik maak moderne websites met heldere code, Bootstrap en een strak design.',
        'home_card_top' => 'currently creating',
        'home_card_line' => 'Design met een doel. Code met karakter.',
        'home_scroll' => 'Scroll om te ontdekken',
        'home_work_eyebrow' => 'Een selectie',
        'home_work_heading' => 'Uitgelicht werk',
        'home_work_link' => 'Alle projecten bekijken',
        'home_process_eyebrow' => 'Werkwijze',
        'home_process_heading' => 'Van eerste idee tot een sterke online aanwezigheid.',
        'home_process_text' => 'Geen ingewikkeld proces of eindeloze meetings. Wel: een open samenwerking, duidelijke keuzes en een resultaat waar je trots op kunt zijn.',
        'home_process_button' => 'Mijn aanpak ontdekken',
        'home_stat_1_number' => '05+',
        'home_stat_1_label' => 'jaar ervaring',
        'home_stat_2_number' => '42',
        'home_stat_2_label' => 'gelanceerde sites',
        'home_stat_3_number' => '18',
        'home_stat_3_label' => 'tevreden klanten',
        'home_stat_4_number' => 'veel',
        'home_stat_4_label' => 'koppen koffie',
        'home_cta_eyebrow' => 'Samen iets moois maken?',
        'home_cta_heading' => 'Heb je een idee dat online mag schitteren?',
        'home_cta_button' => 'Laten we praten',

        'projects_title' => 'Projecten | Milan van de Witte',
        'projects_eyebrow' => 'Portfolio',
        'projects_heading' => 'Werk waar ik energie van krijg.',
        'projects_intro' => 'Een selectie van digitale producten, merken en websites die ik samen met ambitieuze mensen heb gemaakt.',
        'projects_cta_eyebrow' => 'Jouw project hier?',
        'projects_cta_heading' => 'Laten we iets bijzonders maken.',
        'projects_cta_button' => 'Start een gesprek',

        'about_title' => 'Over mij | Milan van de Witte',
        'about_eyebrow' => 'Over mij',
        'about_heading' => 'Nieuwsgierig van aard. Nauwkeurig in werk.',
        'about_intro' => 'Ik help mensen en bedrijven om hun verhaal digitaal overtuigend te vertellen met ontwerp, code en duidelijke keuzes.',
        'about_location' => 'Leeuwarden, Nederland',
        'about_story_eyebrow' => 'Mijn verhaal',
        'about_story_heading' => 'Ik geloof dat een goede website voelt als een goed gesprek.',
        'about_story_text_1' => 'Helder, persoonlijk en precies op het juiste moment interessant. Ik werk graag aan websites die mooi zijn, maar vooral ook fijn werken.',
        'about_story_text_2' => 'Mijn kracht ligt op het snijvlak van design en techniek. Daardoor zie ik niet alleen hoe iets eruit moet zien, maar ook hoe het soepel wordt gebouwd.',
        'about_skills_eyebrow' => 'Wat ik doe',
        'about_skills_heading' => 'Van idee naar impact.',
        'skill_1_title' => 'Strategie',
        'skill_1_text' => 'Een scherpe basis voor de juiste digitale keuzes.',
        'skill_2_title' => 'Webdesign',
        'skill_2_text' => 'Interfaces die helder werken en eigen voelen.',
        'skill_3_title' => 'Development',
        'skill_3_text' => 'Snelle websites met aandacht gebouwd.',

        'contact_title' => 'Contact | Milan van de Witte',
        'contact_eyebrow' => 'Contact',
        'contact_heading' => 'Heb je iets in gedachten?',
        'contact_intro' => 'Vertel gerust waar je mee bezig bent. Ik kom binnen een tot twee werkdagen bij je terug.',
        'contact_email' => 'milan@example.com',
        'contact_location' => 'Leeuwarden, Nederland',
        'contact_social_1_label' => 'LinkedIn',
        'contact_social_1_url' => 'https://www.linkedin.com',
        'contact_social_2_label' => 'Instagram',
        'contact_social_2_url' => 'https://www.instagram.com',
    ];
}

function default_projects(): array
{
    return [
        [
            'title' => 'Aurora Finance',
            'meta' => '2025 - Webdesign & development',
            'description' => 'Een platform dat financiele rust brengt.',
            'image_path' => '',
            'image_alt' => 'Aurora Finance project',
            'sort_order' => 1,
        ],
        [
            'title' => 'Lume Skincare',
            'meta' => '2025 - Branding & e-commerce',
            'description' => 'Een zachte uitstraling voor natuurlijke verzorging.',
            'image_path' => '',
            'image_alt' => 'Lume Skincare project',
            'sort_order' => 2,
        ],
        [
            'title' => 'Studio Forma',
            'meta' => '2024 - Art direction',
            'description' => 'Een visuele identiteit voor een interieurstudio.',
            'image_path' => '',
            'image_alt' => 'Studio Forma project',
            'sort_order' => 3,
        ],
        [
            'title' => 'Noma Travels',
            'meta' => '2024 - Webdesign & development',
            'description' => 'Reizen begint al bij de eerste klik.',
            'image_path' => '',
            'image_alt' => 'Noma Travels project',
            'sort_order' => 4,
        ],
    ];
}

function db(): ?PDO
{
    static $pdo = null;
    static $failed = false;

    if ($failed) {
        return null;
    }

    if ($pdo instanceof PDO) {
        return $pdo;
    }

    try {
        $pdo = new PDO('mysql:host=' . DB_HOST . ';charset=utf8mb4', DB_USER, DB_PASS, [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ]);
        $pdo->exec('CREATE DATABASE IF NOT EXISTS `' . DB_NAME . '` CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci');
        $pdo->exec('USE `' . DB_NAME . '`');
        $pdo->exec(
            'CREATE TABLE IF NOT EXISTS site_content (
                content_key VARCHAR(120) PRIMARY KEY,
                content_value TEXT NOT NULL,
                updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci'
        );
        $pdo->exec(
            'CREATE TABLE IF NOT EXISTS projects (
                id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                title VARCHAR(160) NOT NULL,
                meta VARCHAR(160) NOT NULL,
                description TEXT NOT NULL,
                image_path VARCHAR(255) DEFAULT NULL,
                image_alt VARCHAR(180) DEFAULT NULL,
                sort_order INT NOT NULL DEFAULT 0,
                created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
                updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci'
        );

        $stmt = $pdo->prepare('INSERT IGNORE INTO site_content (content_key, content_value) VALUES (:content_key, :content_value)');
        foreach (site_defaults() as $key => $value) {
            $stmt->execute(['content_key' => $key, 'content_value' => $value]);
        }

        $projectCount = (int)$pdo->query('SELECT COUNT(*) FROM projects')->fetchColumn();
        if ($projectCount === 0) {
            $projectStmt = $pdo->prepare(
                'INSERT INTO projects (title, meta, description, image_path, image_alt, sort_order)
                 VALUES (:title, :meta, :description, :image_path, :image_alt, :sort_order)'
            );
            foreach (default_projects() as $project) {
                $projectStmt->execute($project);
            }
        }

        return $pdo;
    } catch (Throwable $exception) {
        $failed = true;
        return null;
    }
}

function site_content(): array
{
    static $content = null;

    if ($content !== null) {
        return $content;
    }

    $content = site_defaults();
    $pdo = db();

    if ($pdo instanceof PDO) {
        $rows = $pdo->query('SELECT content_key, content_value FROM site_content')->fetchAll();
        foreach ($rows as $row) {
            $content[$row['content_key']] = $row['content_value'];
        }
    }

    return $content;
}

function text_value(string $key): string
{
    $content = site_content();
    return $content[$key] ?? '';
}

function e(string $key): void
{
    echo htmlspecialchars(text_value($key), ENT_QUOTES, 'UTF-8');
}

function line_breaks(string $key): void
{
    echo nl2br(htmlspecialchars(text_value($key), ENT_QUOTES, 'UTF-8'));
}

function save_site_content(array $values): bool
{
    $pdo = db();
    if (!$pdo instanceof PDO) {
        return false;
    }

    $stmt = $pdo->prepare(
        'INSERT INTO site_content (content_key, content_value)
         VALUES (:content_key, :content_value)
         ON DUPLICATE KEY UPDATE content_value = VALUES(content_value)'
    );

    foreach (site_defaults() as $key => $defaultValue) {
        $stmt->execute([
            'content_key' => $key,
            'content_value' => trim((string)($values[$key] ?? $defaultValue)),
        ]);
    }

    return true;
}

function projects(int $limit = 0): array
{
    $pdo = db();
    if (!$pdo instanceof PDO) {
        $fallbackProjects = default_projects();
        foreach ($fallbackProjects as $index => $project) {
            $fallbackProjects[$index]['id'] = $index + 1;
        }
        return $limit > 0 ? array_slice($fallbackProjects, 0, $limit) : $fallbackProjects;
    }

    $sql = 'SELECT * FROM projects ORDER BY sort_order ASC, id ASC';
    if ($limit > 0) {
        $sql .= ' LIMIT ' . $limit;
    }

    return $pdo->query($sql)->fetchAll();
}

function project_by_id(int $id): ?array
{
    $pdo = db();
    if (!$pdo instanceof PDO) {
        return null;
    }

    $stmt = $pdo->prepare('SELECT * FROM projects WHERE id = :id');
    $stmt->execute(['id' => $id]);
    $project = $stmt->fetch();

    return $project ?: null;
}

function save_project(array $data, array $file = []): array
{
    $pdo = db();
    if (!$pdo instanceof PDO) {
        return ['success' => false, 'message' => 'De database is niet bereikbaar. Start MySQL in XAMPP en probeer opnieuw.'];
    }

    $id = (int)($data['id'] ?? 0);
    $title = trim((string)($data['title'] ?? ''));
    $meta = trim((string)($data['meta'] ?? ''));
    $description = trim((string)($data['description'] ?? ''));
    $imageAlt = trim((string)($data['image_alt'] ?? ''));
    $sortOrder = (int)($data['sort_order'] ?? 0);
    $imagePath = trim((string)($data['existing_image'] ?? ''));
    $oldImagePath = $imagePath;

    if ($title === '' || $meta === '' || $description === '') {
        return ['success' => false, 'message' => 'Vul minimaal titel, meta en omschrijving in.'];
    }

    if (!empty($data['remove_image'])) {
        $imagePath = '';
    }

    if (isset($file['error']) && $file['error'] !== UPLOAD_ERR_NO_FILE) {
        $upload = save_project_image($file);
        if (!$upload['success']) {
            return $upload;
        }
        $imagePath = $upload['path'];
    }

    if ($imageAlt === '') {
        $imageAlt = $title;
    }

    if ($id > 0) {
        $stmt = $pdo->prepare(
            'UPDATE projects
             SET title = :title, meta = :meta, description = :description, image_path = :image_path,
                 image_alt = :image_alt, sort_order = :sort_order
             WHERE id = :id'
        );
        $stmt->execute([
            'id' => $id,
            'title' => $title,
            'meta' => $meta,
            'description' => $description,
            'image_path' => $imagePath,
            'image_alt' => $imageAlt,
            'sort_order' => $sortOrder,
        ]);

        if ($oldImagePath !== '' && $oldImagePath !== $imagePath) {
            delete_project_image($oldImagePath);
        }

        return ['success' => true, 'message' => 'Het project is bijgewerkt.'];
    }

    $stmt = $pdo->prepare(
        'INSERT INTO projects (title, meta, description, image_path, image_alt, sort_order)
         VALUES (:title, :meta, :description, :image_path, :image_alt, :sort_order)'
    );
    $stmt->execute([
        'title' => $title,
        'meta' => $meta,
        'description' => $description,
        'image_path' => $imagePath,
        'image_alt' => $imageAlt,
        'sort_order' => $sortOrder,
    ]);

    return ['success' => true, 'message' => 'Het project is toegevoegd.'];
}

function save_project_image(array $file): array
{
    if ($file['error'] !== UPLOAD_ERR_OK) {
        return ['success' => false, 'message' => 'De foto kon niet worden geupload.'];
    }

    if ($file['size'] > 3 * 1024 * 1024) {
        return ['success' => false, 'message' => 'De foto mag maximaal 3 MB zijn.'];
    }

    $extension = strtolower(pathinfo((string)$file['name'], PATHINFO_EXTENSION));
    $allowed = ['jpg', 'jpeg', 'png', 'webp', 'gif'];
    if (!in_array($extension, $allowed, true)) {
        return ['success' => false, 'message' => 'Gebruik een jpg, png, webp of gif bestand.'];
    }

    $imageInfo = @getimagesize((string)$file['tmp_name']);
    if ($imageInfo === false) {
        return ['success' => false, 'message' => 'Dit bestand lijkt geen geldige afbeelding te zijn.'];
    }

    if (!is_dir(PROJECT_UPLOAD_DIR)) {
        mkdir(PROJECT_UPLOAD_DIR, 0775, true);
    }

    $filename = 'project-' . date('YmdHis') . '-' . bin2hex(random_bytes(4)) . '.' . $extension;
    $target = PROJECT_UPLOAD_DIR . '/' . $filename;

    if (!move_uploaded_file((string)$file['tmp_name'], $target)) {
        return ['success' => false, 'message' => 'De foto kon niet worden opgeslagen.'];
    }

    return ['success' => true, 'path' => PROJECT_UPLOAD_URL . $filename];
}

function delete_project(int $id): bool
{
    $pdo = db();
    if (!$pdo instanceof PDO) {
        return false;
    }

    $project = project_by_id($id);
    if (!$project) {
        return false;
    }

    $stmt = $pdo->prepare('DELETE FROM projects WHERE id = :id');
    $stmt->execute(['id' => $id]);

    delete_project_image((string)($project['image_path'] ?? ''));

    return true;
}

function delete_project_image(string $imagePath): void
{
    if ($imagePath === '' || !str_starts_with($imagePath, PROJECT_UPLOAD_URL)) {
        return;
    }

    $filename = basename($imagePath);
    $target = realpath(PROJECT_UPLOAD_DIR . '/' . $filename);
    $uploadRoot = realpath(PROJECT_UPLOAD_DIR);

    if ($target && $uploadRoot && str_starts_with($target, $uploadRoot) && is_file($target)) {
        unlink($target);
    }
}

function h(?string $value): string
{
    return htmlspecialchars((string)$value, ENT_QUOTES, 'UTF-8');
}
