SET NAMES latin1;
SET FOREIGN_KEY_CHECKS = 0;

CREATE TABLE `mentors` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tagline` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `orgs` text COLLATE utf8_unicode_ci NOT NULL,
  `facebook` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `github` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `website` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

insert into `mentors` values('1','Harris Christiansen','Director Of Ignite','images/mentors/harris.jpg','Tagline Here','Aliquam massa urna, imperdiet sit amet mi non, bibendum euismod est. Curabitur mi justo, tincidunt vel eros ullamcorper, porta cursus justo. Cras vel neque eros. Vestibulum diam quam, mollis at magna consectetur non, malesuada quis augue. Morbi tincidunt pretium interdum est. Curabitur mi justo, tincidunt vel eros ullamcorper, porta cursus justo. Cras vel neque eros. Vestibulum diam.','','https://www.facebook.com/harrischristiansen','https://www.github.com/harrischristiansen','http://www.harrischristiansen.com','harris@ignitethefla.me','2015-08-09 21:34:28','2015-08-09 21:34:28'),
 ('2','Kelly Kennedy','Director of Recruitment','images/mentors/kelly.jpg','','','','https://www.facebook.com/kelly.kennedy.50159','','','kelly@ignitethefla.me','2015-08-09 21:34:28','2015-08-09 21:34:28'),
 ('3','Marcela Foster','Director of Events','images/mentors/marcela.jpg','','','','https://www.facebook.com/MarcelaFosterIsMostLikelyBetterThanYou','','','','2015-08-09 21:34:28','2015-08-09 21:34:28'),
 ('4','Marty Kausas','Mentor','images/mentors/marty.jpg','President of Purdue Hackers<br>Sponsorship Team of Boilermake (Fall 2015)<br>Qualcomm Intern (Summer 2015)','','','https://www.facebook.com/mkausas','https://www.github.com/mkausas','','mkausas@purdue.edu','2015-08-09 21:34:28','2015-08-09 21:34:28'),
 ('5','Ben Alderfer','Mentor','images/mentors/alderfer.jpg','Builds cool shit and breaks things','','','https://www.facebook.com/benalderfer','https://www.github.com/balderer','http://benalderfer.com','ben.alderfer@gmail.com','2015-08-09 21:34:28','2015-08-09 21:34:28'),
 ('6','Spencer Brown','Mentor','images/mentors/brown.jpg','Director of BoilerMake (Fall 2014)<br>Sponsorship Lead for Boilermake (Fall 2015)','','','https://www.facebook.com/nworbrecneps','https://www.github.com/spencer-brown','http://www.spencer.sx','me@spencer.sx','2015-08-09 21:34:28','2015-08-09 21:34:28'),
 ('7','Caitlin Kennedy','Mentor','images/mentors/caitlin.jpg','Something at Anvil<br>USB Board Member<br>Internactive Intelligence Intern (Summer 2015)','','','https://www.facebook.com/caitlin.kennedy.712','https://www.github.com/CaitlinKennedy','','','2015-08-09 21:34:28','2015-08-09 21:34:28'),
 ('8','Jack Hammons','Mentor','images/mentors/hammons.jpg','Co-Founder of Purdue Hackers<br>Exec Board of BoilerMake','','','https://www.facebook.com/jackchammons','https://www.github.com/jackchammons','','jackchammons@gmail.com','2015-08-09 21:34:28','2015-08-09 21:34:28'),
 ('9','Kirby Kholmorgen','Mentor','images/mentors/kirby.jpg','President of USB<br>Founder of BoilerMake','','','https://www.facebook.com/profile.php?id=1569585824','https://www.github.com/kirbyk','http://kirbyk.me','kirby@purdue.edu','2015-08-09 21:34:28','2015-08-09 21:34:28'),
 ('10','Mason Everett','Mentor','images/mentors/mason.jpg','Purdue Hackers Organizer<br>Exec Board of BoilerMake','','','https://www.facebook.com/mas.everett','https://www.github.com/everetm','http://mdawg.me','me@purdue.edu','2015-08-09 21:34:28','2015-08-09 21:34:28'),
 ('11','Chukwudi Uche','Mentor','images/mentors/chukwudi.jpg','','','','https://www.facebook.com/profile.php?id=100008320128963','https://www.github.com/KarmicDemon','','mailto:cuche@purdue.edu','2015-08-09 21:34:28','2015-08-09 21:34:28'),
 ('12','Ed Flanagan','Mentor','images/mentors/ed.jpg','Microsoft Intern (Summer 2015)','','','https://www.facebook.com/ed.flanagan0','https://www.github.com/ed-flanagan','http://edflanagan.me','ed@purdue.edu','2015-08-09 21:34:28','2015-08-09 21:34:28'),
 ('13','Krishnabh Medhi','Mentor','images/mentors/medhi.jpg','','','','https://www.facebook.com/kingshu','https://www.github.com/kingshu','http://kingshu.co.nr','kmedhi@purdue.edu','2015-08-09 21:34:28','2015-08-09 21:34:28'),
 ('14','Adam Loeb','Mentor','images/mentors/adam.jpg','','','','https://www.facebook.com/adam.loeb.9','https://www.github.com/aloeb','','loeb.adam@purdue.edu','2015-08-09 21:34:28','2015-08-09 21:34:28'),
 ('15','Nicky Semenza','Mentor','images/mentors/nicky.jpg','Exec Board of BoilerMake','','','https://www.facebook.com/nickysemenza','https://www.github.com/nickysemenza','http://nickysemenza.com','nicky@nickysemenza.com','2015-08-09 21:34:28','2015-08-09 21:34:28'),
 ('16','Scott Opell','Mentor','images/mentors/opell.jpg','Exec Board of BoilerMake<br>Treasurer of USB','','','https://www.facebook.com/scott.opell','https://www.github.com/scottopell','http://scottopell.com','me@scottopell.com','2015-08-09 21:34:28','2015-08-09 21:34:28'),
 ('17','Roy Fu','Mentor','images/mentors/roy.jpg','Purdue Hackers Organizer<br>Exec Board of BoilerMake<br>PicnicHealth Intern (Summer 2015)','','','https://www.facebook.com/roystbeef','https://www.github.com/Roystbeef','https://www.royfu.me','royfu@purdue.edu','2015-08-09 21:34:28','2015-08-09 21:34:28'),
 ('18','Shane Dewael','Mentor','images/mentors/shane.jpg','Director of The Anvil<br>Exec Board of BoilerMake<br>USB Board Member','','','https://www.facebook.com/shane.dewael','https://www.github.com/shanedewael','http://shanedewael.com','dewaels@purdue.edu','2015-08-09 21:34:28','2015-08-09 21:34:28'),
 ('19','Usmann Khan','Mentor','images/mentors/usmann.jpg','Purdue Hackers Organizer<br>Exec Board of BoilerMake','','','https://www.facebook.com/MyGlassesAreFamous','https://www.github.com/usmannk','https://usmann.me','usmannkhan@purdue.edu','2015-08-09 21:34:28','2015-08-09 21:34:28'),
 ('20','Zach Price','Mentor','images/mentors/zach.jpg','Exec Board of BoilerMake','','','https://www.facebook.com/zach.price118','https://www.github.com/zachprice','','zachprice@purdue.edu','2015-08-09 21:34:28','2015-08-09 21:34:28'),
 ('21','Prahasith Veluvolu','Mentor','images/mentors/prahasith.jpg','YC Founder','','','https://www.facebook.com/pveluvolu','','','','2015-08-09 21:34:28','2015-08-09 21:34:28');

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

insert into `migrations` values('2015_08_09_212501_create_mentors','1');

SET FOREIGN_KEY_CHECKS = 1;
