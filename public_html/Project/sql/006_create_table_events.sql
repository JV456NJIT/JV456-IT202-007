CREATE TABLE IF NOT EXISTS `Events`(
    `id` INT AUTO_INCREMENT,
    `api_id` VARCHAR(255),
    `description` VARCHAR(255),
    `image` TEXT,
    `artist` TEXT,
    `location` TEXT,
    `time` TIMESTAMP,
    PRIMARY KEY (`id`),
    UNIQUE KEY (`api_id`),
    UNIQUE KEY (`description`)
)