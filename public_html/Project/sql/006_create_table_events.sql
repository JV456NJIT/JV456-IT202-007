CREATE TABLE IF NOT EXISTS `Events`(
    `id` INT AUTO_INCREMENT,
    `api_id` VARCHAR(255),
    `description` VARCHAR(255),
    `image` TEXT,
    `artist` TEXT,
    `venue` TEXT,
    `country` TEXT,
    `locality` TEXT,
    `time` TIMESTAMP,
    `created` TIMESTAMP,
    `modified` TIMESTAMP,
    PRIMARY KEY (`id`),
    UNIQUE KEY (`api_id`),
    UNIQUE KEY (`description`)
)