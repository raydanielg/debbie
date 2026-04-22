CREATE TABLE `tbl_user` (
  `tbl_user_id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `contact_number` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`tbl_user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
