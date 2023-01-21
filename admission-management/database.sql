SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

CREATE TABLE `admin` (
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `admin` (`username`, `password`) VALUES ('admin', 'admin');

CREATE TABLE `users` (
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `dt` time
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `student` (
  `rollno` varchar(20) NOT NULL PRIMARY KEY,
  `Studentname` varchar(200) NOT NULL,
  `fathersname` varchar(200) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `degree` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `mobileno` int(10) NOT NULL,
  `address` varchar(200) NOT NULL,
  `state` varchar(50) NOT NULL,
  `district` varchar(50) NOT NULL,
  `pincode` int(6) NOT NULL,
  `Qualification` varchar(200) NOT NULL,
  `percentage` float(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;