CREATE TABLE photo (
    photo_id int(11) NOT NULL AUTO_INCREMENT COMMENT 'Primary Key',
    name varchar(100) NOT NULL COMMENT 'Name',
    type varchar(255) NOT NULL COMMENT 'file type',
	 user_id int(11) NOT NULL COMMENT 'User ID photo owner',
    created_at datetime NOT NULL COMMENT 'Created date',
    PRIMARY KEY (photo_id)
  ) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1;
  
CREATE TABLE photo_likes (
    likes_id int(11) NOT NULL AUTO_INCREMENT COMMENT 'Primary Key',
    photo_id int(11) NOT NULL COMMENT 'Photo ID',
    user_id int(11) NOT NULL COMMENT 'User ID who likes',
    created_at datetime NOT NULL COMMENT 'Created date',
    PRIMARY KEY (likes_id)
  ) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1;
  
CREATE TABLE photo_comments (
    comments_id int(11) NOT NULL AUTO_INCREMENT COMMENT 'Primary Key',
    photo_id int(11) NOT NULL COMMENT 'Photo ID',
    user_id int(11) NOT NULL COMMENT 'User ID who comments',
    comments text NULL COMMENT 'User Comments', 
    created_at datetime NOT NULL COMMENT 'Created date',
    PRIMARY KEY (comments_id)
  ) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1;
  
CREATE TABLE `user` (
	`user_id` INT(11) NOT NULL AUTO_INCREMENT,
	`user_name` VARCHAR(100) NULL DEFAULT NULL,
	`user_email` VARCHAR(100) NULL DEFAULT NULL,
	`user_password` VARCHAR(200) NULL DEFAULT NULL,
	`user_avatar` VARCHAR(100) NULL DEFAULT NULL,
	`user_created_at` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
	PRIMARY KEY (`user_id`)
)
COLLATE='latin1_swedish_ci'
ENGINE=InnoDB
AUTO_INCREMENT=1;
