CREATE TABLE IF NOT EXISTS `drugs` (
  `drug` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(100) NOT NULL,
  `dose` bigint(20) NOT NULL,
  `firstname` varchar(200) NOT NULL,
  `lastname` varchar(250) NOT NULL,
  `expiry date` date NOT NULL,
  `lab located` varchar(100) NOT NULL,
  
  PRIMARY KEY (`drugID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;


CREATE TABLE IF NOT EXISTS `patients` (
  `first name` varchar(200) NOT NULL,
  `last name` varchar(200) NOT NULL,
  `drugQuantity` int(11) NOT NULL,
  `drug id` int(11) NOT NULL,
  
  PRIMARY KEY (`patientID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=44 ;
