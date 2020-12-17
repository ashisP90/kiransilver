--
-- Product Type & Video SQL

ALTER TABLE `product` 
ADD `type` TINYINT(2) NOT NULL AFTER `product_image`, 
ADD `video_url` VARCHAR(300) NULL AFTER `type`;

--
-- Product Image SQL

ALTER TABLE `product` ADD `product_image` VARCHAR(300) NULL AFTER `description`;