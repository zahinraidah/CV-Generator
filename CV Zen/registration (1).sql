CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `personalinfo` (
  `infoid` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contactno` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `dateofbirth` date NOT NULL,
  `objective` varchar(100),
  FOREIGN KEY (id) REFERENCES users(id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `socialmedia` (
  `mediaid` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `id` int(11) NOT NULL,
  `socialmediatype` varchar(50) NOT NULL,
  `socialmediaid` varchar(100) NOT NULL,
  FOREIGN KEY (id) REFERENCES users(id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `skills` (
  `skillid` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `id` int(11) NOT NULL,
  `skillname` varchar(100) NOT NULL,
  `skillevel` int(100) NOT NULL,
  FOREIGN KEY (id) REFERENCES users(id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `softwareskills` (
  `softwareid` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `id` int(11) NOT NULL,
  `softwarename` varchar(100) NOT NULL,
  `slevel` int(100) NOT NULL,
  FOREIGN KEY (id) REFERENCES users(id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `languages` (
  `languageid` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `id` int(11) NOT NULL,
  `languagename` varchar(100) NOT NULL,
  `languagelevel` int(100) NOT NULL,
  FOREIGN KEY (id) REFERENCES users(id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

DROP TABLE education;
CREATE TABLE `education` (
  `educationid` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `id` int(11) NOT NULL,
  `institute` varchar(100) NOT NULL,
  `field` varchar(100) NOT NULL,
  `degree` varchar(50) NOT NULL,
  `startdate` date NOT NULL,
  `enddate` date,
  FOREIGN KEY (id) REFERENCES users(id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

DROP TABLE workexperience;
CREATE TABLE `workexperience` (
  `wexpid` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `id` int(11) NOT NULL,
  `jobtitle` varchar(100) NOT NULL,
  `organization` varchar(100) NOT NULL,
  `description` varchar(200),
  `startdate` date NOT NULL,
  `enddate` date,
  FOREIGN KEY (id) REFERENCES users(id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

DROP TABLE reference;
CREATE TABLE `reference` (
  `refid` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `id` int(11) NOT NULL,
  `refname` varchar(100) NOT NULL,
  `refdesignation` varchar(100) NOT NULL,
  `reforganization` varchar(100) NOT NULL,
  `refemail` varchar(100) NOT NULL,
  `refcontactno` varchar(100) NOT NULL,
  FOREIGN KEY (id) REFERENCES users(id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;