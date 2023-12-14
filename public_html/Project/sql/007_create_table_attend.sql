CREATE TABLE IF NOT EXISTS `Attending`(
    `id` INT AUTO_INCREMENT,
    `event_id` INT,
    `user_id` INT,
    PRIMARY KEY (`id`),
    FOREIGN KEY (`event_id`) REFERENCES Events(`id`),
    FOREIGN KEY (`user_id`) REFERENCES Users(`id`)
)