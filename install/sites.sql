CREATE TABLE `sites` (
  `id` int(11) NOT NULL,
  `url` text COLLATE utf8_polish_ci NOT NULL,
  `content` text COLLATE utf8_polish_ci NOT NULL,
  `status` varchar(13) COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

ALTER TABLE `sites` ADD PRIMARY KEY (`id`);
ALTER TABLE `sites` MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;COMMIT;
