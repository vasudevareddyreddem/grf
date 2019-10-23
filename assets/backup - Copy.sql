ALTER TABLE `grf`.`journals`   
  ADD COLUMN `fb` TEXT NULL AFTER `seo_description`,
  ADD COLUMN `tw` TEXT NULL AFTER `fb`,
  ADD COLUMN `gp` TEXT NULL AFTER `tw`,
  ADD COLUMN `yt` TEXT NULL AFTER `gp`,
  ADD COLUMN `ld` TEXT NULL AFTER `yt`;
