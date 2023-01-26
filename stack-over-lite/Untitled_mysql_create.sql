CREATE TABLE `users` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`username` VARCHAR(255) NOT NULL,
	`password` VARCHAR(255) NOT NULL,
	`email` VARCHAR(255) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `questions` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`title` VARCHAR(255) NOT NULL,
	`details` VARCHAR(255) NOT NULL,
	`user_id` INT NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `answers` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`user_id` INT NOT NULL,
	`question_id` INT NOT NULL,
	`details` TEXT NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `profiles` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`user_id` INT NOT NULL,
	`address` TEXT NOT NULL,
	PRIMARY KEY (`id`)
);

ALTER TABLE `questions` ADD CONSTRAINT `questions_fk0` FOREIGN KEY (`user_id`) REFERENCES `users`(`id`);

ALTER TABLE `answers` ADD CONSTRAINT `answers_fk0` FOREIGN KEY (`user_id`) REFERENCES `users`(`id`);

ALTER TABLE `answers` ADD CONSTRAINT `answers_fk1` FOREIGN KEY (`question_id`) REFERENCES `questions`(`id`);

ALTER TABLE `profiles` ADD CONSTRAINT `profiles_fk0` FOREIGN KEY (`user_id`) REFERENCES `users`(`id`);





