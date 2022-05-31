<br />
<b>Warning</b>:  "continue" targeting switch is equivalent to "break". Did you mean to use "continue 2"? in <b>C:\laragon\etc\apps\adminer\index.php</b> on line <b>1170</b><br />
-- Adminer 4.6.3 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

CREATE DATABASE `db_form-contact` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `db_form-contact`;

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `tbl_contact`;
CREATE TABLE `tbl_contact` (
  `contact_id` int(11) NOT NULL AUTO_INCREMENT,
  `contact_username` tinytext NOT NULL,
  `contact_mail` tinytext NOT NULL,
  `contact_subject` tinytext NOT NULL,
  `contact_message` tinytext NOT NULL,
  PRIMARY KEY (`contact_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `tbl_contact` (`contact_id`, `contact_username`, `contact_mail`, `contact_subject`, `contact_message`) VALUES
(1,	'root',	'bob142@yopmail.com',	'my shoes',	'Message from: Bobby: fjykjbfyjbtjrj'),
(2,	'Billy',	'bill32@gmail.fr',	'my car',	'Message from: Billy: h,gknfukbfkyfkbyk'),
(3,	'kimberley',	'kim@berley.com',	'my fruitcake',	'Message from: kimberley: kvnllkufkyugkhyktk'),
(4,	'dante',	'dante@test.test',	'have a drink',	'vjhkukfkfkgykytkgykykgdftÃ¨');

DROP TABLE IF EXISTS `tbl_users`;
CREATE TABLE `tbl_users` (
  `user_id` int(7) NOT NULL AUTO_INCREMENT,
  `user_username` varchar(255) NOT NULL,
  `user_mail` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_image` varchar(255) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `tbl_users` (`user_id`, `user_username`, `user_mail`, `user_password`, `user_image`) VALUES
(1,	'boris',	'b@b',	'$2y$10$e.WFC3q6MsHbb0yIQ8ZZY./yXPhFExftUSPrUo.2UQnWqRe74u9Ga',	''),
(2,	'EricJ',	'ericJ@123.test',	'$2y$10$WDHMPibSkl7ea6fKzRdB1eQbn1Rjd4iOjQutFm5RcCYh3MpFpe4pq',	''),
(3,	'Eric',	'eric@123.test',	'$2y$10$4/CBi8fqkZNbiEkpxoBQkuLisdg7XNByJvfjfJTBmpnVXsbYXsa2S',	''),
(4,	'bibi',	'b@b.t',	'$2y$10$f9YLV5Bj0kp3dGZUwfHHU.u1hZ4oVqF6YipAbqo/4QzbcFPhvQIXC',	''),
(6,	'Walter',	'ww@graymatter.com',	'$2y$10$2H6LMKd5htww7BjUTdwc0uNcOUo0kprvTOO.rtRV9WjWxVmFRYeXm',	'photo.jpg'),
(7,	'Walter',	'ww@graymatter.com',	'$2y$10$cGMbkT6s.Rg6ypmN2K3ESOeH0Pe2iBsagSO2ORTRvd9XU1MWALlPG',	'photo.jpg'),
(8,	'walter',	'ww@graymatter.com',	'$2y$10$/0JLiPdBzUyaZkL19EeKkucQrPFyQPFTlbuQjP1q/RLOgKnL9fMJS',	''),
(9,	'bobby',	'b@b',	'$2y$10$E4/rVQ2ehWzNlk8PA9pms.3LysWS0MAWLSWylfQ/KZD1GSulbMTji',	'photo.jpg'),
(10,	'billy',	'b@b',	'$2y$10$qDHwhXXwGtnK2UAWKY661.beLEKqxS1A6MVdq3icNiE4oqSFVPbrG',	'landscape-tree-nature-horizon-sunrise-sunset-88316-pxhere.com_-2048x1365.jpg');

-- 2022-05-31 09:16:24
