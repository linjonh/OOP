--2015/3/10
--create table fourth.

DROP TABLE IF EXISTS `friends`;

CREATE TABLE IF NOT EXISTS friends(
	`_id` integer primary key NOT NULL AUTO_INCREMENT,
	`user_owner_id` integer NOT NULL,
	`friends_id` integer NOT NULL,
	constraint _foreign_owner_constr foreign key foreign_owner_key (`user_owner_id`) references app.user(`_id`),
	constraint _foreign_friend_constr foreign key foreign_friend_key (`friends_id`) references app.user(`_id`)
)AUTO_INCREMENT = 0;
