--2015/3/10
--craete table second

DROP TABLE IF EXISTS `topic`;

CREATE TABLE IF NOT EXISTS `topic` (
	`_id` integer primary key NOT NULL AUTO_INCREMENT,
	`_user_id` integer NOT NULL,
	`create_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
	`comment_count` integer NOT NULL DEFAULT 0,
	`title` text,
	`topic_content`	text,
	`images` text,
	`image_count` integer, 
	constraint _foreign_key foreign key _USER_ID (`_user_id`) references app.user(`_id`) 
)AUTO_INCREMENT=0;

