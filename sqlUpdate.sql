CREATE TABLE `bpsm`.`courses` ( `id` INT NOT NULL AUTO_INCREMENT , `name` VARCHAR(255) NOT NULL , `organizer` VARCHAR(255) NOT NULL , `place` VARCHAR(255) NOT NULL , `duration` VARCHAR(255) NOT NULL DEFAULT '1' , `created_date` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP , `status` INT NOT NULL DEFAULT '1' , PRIMARY KEY (`id`)) ENGINE = InnoDB;

CREATE TABLE `bpsm`.`course_register` ( `id` INT NOT NULL AUTO_INCREMENT , `courseid` INT(11) NOT NULL , `staffid` INT(100) NOT NULL , `register_date` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP , `status` INT NOT NULL DEFAULT '1' , PRIMARY KEY (`id`)) ENGINE = InnoDB;

CREATE TABLE `bpsm`.`course_room` ( `id` INT NOT NULL AUTO_INCREMENT , `courseid` INT(11) NOT NULL , `created_by` INT(100) NOT NULL , `created_date` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP , PRIMARY KEY (`id`)) ENGINE = InnoDB;

CREATE TABLE `bpsm`.`attendance` ( `id` INT NOT NULL AUTO_INCREMENT , `roomid` INT(11) NOT NULL , `staff_course` INT(11) NOT NULL , `created_date` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP , PRIMARY KEY (`id`)) ENGINE = InnoDB;


ALTER TABLE `attendance` ADD INDEX(`roomid`);

ALTER TABLE `attendance` ADD INDEX(`staff_course`);

ALTER TABLE `course_register` ADD INDEX(`courseid`);

ALTER TABLE `course_register` ADD INDEX(`staffid`);

ALTER TABLE `course_room` ADD INDEX(`courseid`);

ALTER TABLE `course_room` ADD INDEX(`created_by`);

INSERT INTO `courses` (`id`, `name`, `organizer`, `place`, `duration`, `created_date`, `status`) VALUES (NULL, 'BENGKEL PEMANTAPAN PENAMBAHBAIKAN PENYELARAS DAN AUDITOR DALAMAN JABATAN KETUA MENTERI MELAKA', 'BAHAGIAN PENGURUSAN SUMBER MANUSIA', 'BILIK MESYUARAT ARAS 1, PUSAT ISLAM, MAJLIS AGAMA ISLAM MELAKA', '1', current_timestamp(), '1');