DROP TABLE IF EXISTS `academy_db`.`categorys`;
CREATE TABLE `academy_db`.`categorys` (
    `id` INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    `name` VARCHAR(255) NOT NULL
) DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;