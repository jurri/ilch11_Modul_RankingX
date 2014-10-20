DROP TABLE IF EXISTS `prefix_uranking`;
CREATE TABLE  `prefix_uranking` (
  `ur_pk` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ur_uname` varchar(100) NOT NULL,
  `ur_platz` int(10) unsigned NOT NULL,
  `ur_dtmcreate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ur_pk`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;
 
INSERT INTO `prefix_modules` (`url` ,`name` ,`gshow` ,`ashow` ,`fright`) 
VALUES ('ranking', 'UserRanking', '1', '1', '1');

	