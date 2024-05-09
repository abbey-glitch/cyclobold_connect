-- create an admin table and assign roles and previledges
-- there will be a super admin that can create other admins
-- each and every admin should be able to login into the dashboard

CREATE TABLE IF NOT EXISTS `roles`(
    `id` INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `position` VARCHAR(100),
    `date` timestamp DEFAULT current_timestamp
)

CREATE TABLE IF NOT EXISTS `admins`(
    `id` INT PRIMARY KEY AUTO_INCREMENT,
    `fname` VARCHAR(100),
    `lastname` VARCHAR(100),
    `password` VARCHAR(50),
    `role_id` INT,
    `status` tinyint(0),
     CONSTRAINT role_auth foreign key(`role_id`) REFERENCES `roles`(`id`) ON DELETE CASCADE,
    `created_at` timestamp DEFAULT, 
    `registered` timestamp DEFAULT current_timestamp
);

-- authors table
CREATE TABLE IF NOT EXISTS `authors`(
    `id` INT PRIMARY KEY AUTO_INCREMENT,
    `title` VARCHAR(500),
    `content` LONGTEXT,
    `admin_id` INT,
    CONSTRAINT fk_auth foreign key(`admin_id`) REFERENCES `admins`(`id`) ON DELETE CASCADE,
    `created_at` timestamp DEFAULT current_timestamp
)

-- editor table
CREATE TABLE IF NOT EXISTS `editors`(
    `id` INT PRIMARY KEY AUTO_INCREMENT,
    `admin_id` INT,
    `title` VARCHAR(200),
    `content` LONGTEXT,
    `author_id` INT,
    CONSTRAINT admin_auth foreign key(`admin_id`) REFERENCES `admins`(`id`) ON DELETE CASCADE,
    CONSTRAINT author_auth foreign key(`author_id`) REFERENCES `authors`(`id`) ON DELETE CASCADE,
    `edited_date` timestamp DEFAULT current_timestamp
)

-- publisher table
CREATE TABLE IF NOT EXISTS `publishers`(
    `id` INT PRIMARY KEY AUTO_INCREMENT,
    `admin_id` INT,
    `editor_id` INT,
    `author_id` INT,
    CONSTRAINT pub_auth foreign key(`admin_id`) REFERENCES `admins`(`id`) ON DELETE CASCADE,
    CONSTRAINT edit_auth foreign key(`editor_id`) REFERENCES `editors`(`id`) ON DELETE CASCADE,
    CONSTRAINT aut_auth foreign key(`author_id`) REFERENCES `authors`(`id`) ON DELETE CASCADE,
    `published_date` timestamp DEFAULT current_timestamp
)

-- users Table
CREATE TABLE IF NOT EXISTS `users`(
    `id` INT PRIMARY KEY AUTO_INCREMENT,
    `fname` VARCHAR(50),
    `lname` VARCHAR(50),
    `username` VARCHAR(50),
    `password` VARCHAR(100),
    `confirm_pwd` VARCHAR(100),
    `registered` timestamp DEFAULT current_timestamp
)