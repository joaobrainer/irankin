CREATE TABLE `respostas_irankin` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `lang` VARCHAR(10) NOT NULL,
  `pontuacao` INT NOT NULL,
  `respostas` LONGTEXT NOT NULL,
  `created_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `idx_respostas_lang` (`lang`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
