DROP TABLE IF EXISTS `topic`;

CREATE TABLE IF NOT EXISTS `topic` (
	`_id` integer primary key NOT NULL AUTO_INCREMENT,
	`_user_id`integer NOT NULL,
	`_create_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
	`_comment_count` integer NOT NULL DEFAULT 0,
	constraint _foreign_key foreign key _USER_ID (`_user_id`) references app.user(`id`) 
)AUTO_INCREMENT=0;

