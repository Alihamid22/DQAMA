-- Creates the database for the portfolio application when it does not exist.
CREATE DATABASE IF NOT EXISTS portfolio
	CHARACTER SET utf8mb4
	COLLATE utf8mb4_unicode_ci;

-- Selects the portfolio database for the remaining statements.
USE portfolio;

-- Stores the main profile, contact, statistics, and biography fields.
CREATE TABLE IF NOT EXISTS profile (
	id TINYINT UNSIGNED NOT NULL PRIMARY KEY,
	full_name VARCHAR(120) NOT NULL,
	role_label VARCHAR(180) NOT NULL,
	email VARCHAR(255) NOT NULL,
	phone VARCHAR(50),
	location VARCHAR(120),
	website VARCHAR(255),
	portrait_url VARCHAR(500),
	bio TEXT,
	years_experience TINYINT UNSIGNED NOT NULL DEFAULT 0,
	projects_launched SMALLINT UNSIGNED NOT NULL DEFAULT 0,
	industries SMALLINT UNSIGNED NOT NULL DEFAULT 0,
	client_retention TINYINT UNSIGNED,
	updated_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB;

-- Stores links to external social media or professional profiles.
CREATE TABLE IF NOT EXISTS social_links (
	id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
	platform VARCHAR(40) NOT NULL,
	url VARCHAR(500) NOT NULL,
	sort_order TINYINT UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB;

-- Stores the skills displayed on the portfolio and CV pages.
CREATE TABLE IF NOT EXISTS skills (
	id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
	name VARCHAR(120) NOT NULL,
	description TEXT,
	sort_order TINYINT UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB;

-- Stores the ordered steps in the design and development process.
CREATE TABLE IF NOT EXISTS process_steps (
	id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
	step_number TINYINT UNSIGNED NOT NULL,
	name VARCHAR(80) NOT NULL,
	description TEXT NOT NULL,
	sort_order TINYINT UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB;

-- Stores the services offered through the portfolio.
CREATE TABLE IF NOT EXISTS services (
	id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
	name VARCHAR(120) NOT NULL,
	description TEXT,
	sort_order TINYINT UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB;

-- Stores portfolio projects, descriptions, media, links, and display order.
CREATE TABLE IF NOT EXISTS projects (
	id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
	title VARCHAR(160) NOT NULL,
	category VARCHAR(100),
	description TEXT,
	image_url VARCHAR(500),
	project_url VARCHAR(500),
	featured BOOLEAN NOT NULL DEFAULT FALSE,
	sort_order TINYINT UNSIGNED NOT NULL DEFAULT 0,
	created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB;

-- Stores education or qualification entries for the CV page.
CREATE TABLE IF NOT EXISTS education (
	id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
	qualification VARCHAR(180) NOT NULL,
	institution VARCHAR(180) NOT NULL,
	year_completed YEAR,
	sort_order TINYINT UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB;

-- Stores professional experience entries for the CV page.
CREATE TABLE IF NOT EXISTS experience (
	id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
	job_title VARCHAR(180) NOT NULL,
	company VARCHAR(180) NOT NULL,
	start_year YEAR,
	end_year YEAR,
	is_current BOOLEAN NOT NULL DEFAULT FALSE,
	description TEXT,
	sort_order TINYINT UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB;

-- Stores individual bullet points connected to an experience entry.
CREATE TABLE IF NOT EXISTS experience_points (
	id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
	experience_id INT UNSIGNED NOT NULL,
	point TEXT NOT NULL,
	sort_order TINYINT UNSIGNED NOT NULL DEFAULT 0,
	CONSTRAINT fk_experience_points_experience
		FOREIGN KEY (experience_id) REFERENCES experience(id) ON DELETE CASCADE
) ENGINE=InnoDB;

-- Stores short achievement or qualification highlights for the CV page.
CREATE TABLE IF NOT EXISTS highlights (
	id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
	text TEXT NOT NULL,
	sort_order TINYINT UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB;

-- Stores messages submitted through the contact form and tracks their status.
CREATE TABLE IF NOT EXISTS inquiries (
	id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
	name VARCHAR(120) NOT NULL,
	email VARCHAR(255) NOT NULL,
	project_type VARCHAR(120),
	message TEXT NOT NULL,
	status ENUM('new', 'read', 'replied', 'archived') NOT NULL DEFAULT 'new',
	created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
	updated_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB;
