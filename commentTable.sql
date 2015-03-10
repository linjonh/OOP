--2015/3/10
--create table third

DROP TABLE IF EXISTS `comment`;

CREATE TABLE IF NOT EXISTS `comment`(
	`_id` integer primary key NOT NULL AUTO_INCREMENT,
	`_topic_id` integer NOT NULL,
	`comment_user_id` integer NOT NULL,
	`comment_text` text,
	`comment_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
	constraint _foreign_topic_id_constr foreign key _topic_id_key (`_topic_id`) references app.topic(`_id`),
	constraint _foreign_user_id_constr foreign key _user_id_key (`comment_user_id`) references app.user(`_id`)
)AUTO_INCREMENT=0;