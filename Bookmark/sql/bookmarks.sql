DROP TABLE IF EXISTS `academy_db`.`bookmarks`;
CREATE TABLE `academy_db`.`bookmarks` (
    `id` INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    `title` VARCHAR(255) NOT NULL,
    `url` VARCHAR(255) NOT NULL,
    `category_id` VARCHAR(10) NOT NULL,
    `finish_flag` TINYINT(1) NOT NULL DEFAULT 0
) DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;