CREATE TABLE `searchs_result` (
  `id` int(11) NOT NULL,
  `id_site` int(11) NOT NULL,
  `keyword` varchar(255) COLLATE utf8_polish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

ALTER TABLE `searchs_result`
  ADD PRIMARY KEY (`id`);
  
  ALTER TABLE `searchs_result`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;COMMIT;
  
 ALTER TABLE `searchs_result` ADD FOREIGN KEY (`id_site`) REFERENCES `sites`(`id`);