SET NAMES latin1;
SET FOREIGN_KEY_CHECKS = 0;

CREATE TABLE `mentors` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `orderNum` int(11) NOT NULL,
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

insert into `mentors` values('1','0','Harris Christiansen','Director Of Ignite','images/mentors/harris.jpg','Driven by curiosity, loves to try new things.','Born and raised in Salt Lake City, Utah, today I spend my time traveling the nation attending hackathons, solving problems and exploring new ideas. I am a skilled programmer with a knack for hardware. I am driven by curiosity, and I love to learn and try new things.','Purdue Hackers Organizer,Apple Intern (Summer 2015)','https://www.facebook.com/harrischristiansen','https://www.github.com/harrischristiansen','http://www.harrischristiansen.com','harris@ignitethefla.me','2015-08-09 21:34:28','2015-08-09 21:34:28'),
 ('2','1','Kelly Kennedy','Director of Recruitment','images/mentors/kelly.jpg','','','Purdue Hackers Organizer, CAT Intern (Summer 2015)','https://www.facebook.com/kelly.kennedy.50159','','','kelly@ignitethefla.me','2015-08-09 21:34:28','2015-08-09 21:34:28'),
 ('3','2','Marcela Foster','Director of Events','images/mentors/marcela.jpg','Changed.','','','https://www.facebook.com/MarcelaFosterIsMostLikelyBetterThanYou','','','','2015-08-09 21:34:28','2015-08-09 21:34:28'),
 ('4','3','Marty Kausas','Mentor','images/mentors/marty.jpg','Interested in new and profitable technologies','','President of Purdue Hackers,Sponsorship Team of Boilermake (Fall 2015),Qualcomm Intern (Summer 2015)','https://www.facebook.com/mkausas','https://www.github.com/mkausas','','mkausas@purdue.edu','2015-08-09 21:34:28','2015-08-09 21:34:28'),
 ('5','4','Ben Alderfer','Mentor','images/mentors/alderfer.jpg','Builds cool shit and breaks things','','Purdue Hackers Organizer,Director of BoilerMake(Fall 2015),Founder of Hack The Anvil(Spring 2015),PlanGrid Intern (Summer 2015)','https://www.facebook.com/benalderfer','https://www.github.com/balderer','http://benalderfer.com','ben.alderfer@gmail.com','2015-08-09 21:34:28','2015-08-09 21:34:28'),
 ('6','5','Spencer Brown','Mentor','images/mentors/spencer.jpg','Startup Junkie, DJ, Full-Stack Web Developer','','Director of BoilerMake (Fall 2014),Sponsorship Lead for Boilermake (Fall 2015),Rival IQ Intern (Summer 2015)','https://www.facebook.com/nworbrecneps','https://www.github.com/spencer-brown','http://www.spencer.sx','me@spencer.sx','2015-08-09 21:34:28','2015-08-09 21:34:28'),
 ('7','6','Caitlin Kennedy','Mentor','images/mentors/caitlin.jpg','Programming Ninja','','Events Manager at Anvil,USB Board Member,Hackathon Enthusiast,Roboticist,Interactive Intelligence Intern (Summer 2015),Xtern (Summer 2015)','https://www.facebook.com/caitlin.kennedy.712','https://www.github.com/CaitlinKennedy','','kenned67@purdue.edu','2015-08-09 21:34:28','2015-08-09 21:34:28'),
 ('8','7','Jack Hammons','Mentor','images/mentors/hammons.jpg','Alan Turing is my spirit animal','','Co-Founder of Purdue Hackers,Exec Board of BoilerMake,Microsoft','https://www.facebook.com/jackchammons','https://www.github.com/jackchammons','','jackchammons@gmail.com','2015-08-09 21:34:28','2015-08-09 21:34:28'),
 ('9','8','Kirby Kohlmorgen','Mentor','images/mentors/kirby.jpg','My name is Kirby. Smiling is my favorite.','','President of USB,Founder of BoilerMake,Pebble Developer Evangelist (2015)','https://www.facebook.com/profile.php?id=1569585824','https://www.github.com/kirbyk','http://kirbyk.me','kirby@purdue.edu','2015-08-09 21:34:28','2015-08-09 21:34:28'),
 ('10','10','Mason Everett','Mentor','images/mentors/mason.jpg','Approachable and adorable','If you want to learn about hackathons. I?m your man to talk to. I aspire to be that guy that anyone can come up to and ask questions or get opinions from. I love climbing, C, Node.js, hackathons, cats and wine.','Purdue Hackers Organizer,Exec Board of BoilerMake,Fathom Voice Intern (Summer 2015)','https://www.facebook.com/mas.everett','https://www.github.com/everetm','http://mdawg.me','me@purdue.edu','2015-08-09 21:34:28','2015-08-09 21:34:28'),
 ('11','11','Chukwudi Uche','Mentor','images/mentors/chukwudi.jpg','You just need to meet me','Trust me. No description can define me. Just talk to me.','Facebook Intern(Summer 2015)','https://www.facebook.com/profile.php?id=100008320128963','https://www.github.com/KarmicDemon','','mailto:cuche@purdue.edu','2015-08-09 21:34:28','2015-08-09 21:34:28'),
 ('12','12','Ed Flanagan','Mentor','images/mentors/ed.jpg','Aspiring data freak.','Ed began teaching himself to code his junior year of high school - he hasn\'t stopped since.<br><br>\nWhile at Purdue he\'s interned twice at Qualcomm and Microsoft this past Summer.<br><br>\nHis CS tracks are Databases and Machine Intelligence - aspiring to work with all things data.<br><br>\nEd is the new Campus Rep. Coordinator for BoilerMake III and can\'t wait to get back to hacking his senior year.','Microsoft Intern (Summer 2015)','https://www.facebook.com/ed.flanagan0','https://www.github.com/ed-flanagan','http://edflanagan.me','ed@purdue.edu','2015-08-09 21:34:28','2015-08-09 21:34:28'),
 ('13','13','Krishnabh Medhi','Mentor','images/mentors/medhi.jpg','Has hacked the mainframe','I like to build cool things. I spent my last summer working for Nvidia, mostly playing Smash Bros or CS:GO in their eSports Lab. Outside of CS, I like music from the 60\'s through the 90\'s, cosmology, philosophy, dark craft beer, soccer and bad conspiracy documentaries. I possess two very rare pepes.','Nvidia Intern(Summer 2015)','https://www.facebook.com/kingshu','https://www.github.com/kingshu','http://kingshu.co.nr','kmedhi@purdue.edu','2015-08-09 21:34:28','2015-08-09 21:34:28'),
 ('14','14','Adam Loeb','Mentor','images/mentors/adam.jpg','Not with that attitude you can\'t!','I am a sophomore heavily involved in CS at Purdue, love mobile development, and am interested in machine learning. I also have experience with a variety of languages and have developed for many different platforms. This past summer I interned at Yelp, and in previous summers I\'ve interned at GE and created apps with friends. In my free time, I enjoy climbing, running, swing dancing, and making music on my trumpet and ukulele.','','https://www.facebook.com/adam.loeb.9','https://www.github.com/aloeb','','loeb.adam@purdue.edu','2015-08-09 21:34:28','2015-08-09 21:34:28'),
 ('15','15','Nicky Semenza','Mentor','images/mentors/nicky.jpg','I like candlelight dinners and banging out code.','','Exec Board of BoilerMake,CourseLoads Developer (2015)','https://www.facebook.com/nickysemenza','https://www.github.com/nickysemenza','http://nickysemenza.com','nicky@nickysemenza.com','2015-08-09 21:34:28','2015-08-09 21:34:28'),
 ('16','20','Scott Opell','Mentor','images/mentors/opell.jpg','Enthusiastic Github User','I\'m currently a senior in CS with pretty diverse internship and co-op experience. I do some tech stuff for BoilerMake and am passionate about making the CS department here the best it can be. I\'m always working to create environments that are inclusive and friendly especially to the inexperienced.','Exec Board of BoilerMake,Treasurer of USB,EMC Intern (Summer 2015)','https://www.facebook.com/scott.opell','https://www.github.com/scottopell','http://scottopell.com','me@scottopell.com','2015-08-09 21:34:28','2015-08-09 21:34:28'),
 ('17','19','Roy Fu','Mentor','images/mentors/roy.jpg','I just want to be neato burrito','','Purdue Hackers Organizer, Exec Board of BoilerMake, PicnicHealth Intern (Summer 2015)','https://www.facebook.com/roystbeef','https://www.github.com/Roystbeef','https://www.royfu.me','royfu@purdue.edu','2015-08-09 21:34:28','2015-08-09 21:34:28'),
 ('18','17','Shane Dewael','Mentor','images/mentors/shane.jpg','I\'m dead.','','Director of The Anvil, Development Team for BoilerMake (Fall 2015), USB Board Member, Formstack Intern (Summer 2015)','https://www.facebook.com/shane.dewael','https://www.github.com/shanedewael','http://shanedewael.com','dewaels@purdue.edu','2015-08-09 21:34:28','2015-08-09 21:34:28'),
 ('19','18','Usmann Khan','Mentor','images/mentors/usmann.jpg','I turn coffee into code. Let\'s do something wonderful.','','Purdue Hackers Communication Director, Treasurer of BoilerMake, Alere Analytics Intern(Summer 2014)','https://www.facebook.com/MyGlassesAreFamous','https://www.github.com/usmannk','https://usmann.me','usmannkhan@purdue.edu','2015-08-09 21:34:28','2015-08-09 21:34:28'),
 ('20','16','Zach Price','Mentor','images/mentors/zach.jpg','I\'m not dead.','','Associate Director of UX for Boilermake (Fall 2015), UX Director for Hack The Anvil','https://www.facebook.com/zach.price118','https://www.github.com/zachprice','','zachprice@purdue.edu','2015-08-09 21:34:28','2015-08-09 21:34:28'),
 ('21','9','Prahasith Veluvolu','Mentor','images/mentors/prahasith.jpg','YC Founder','','Mimir CEO','https://www.facebook.com/pveluvolu','https://github.com/pveluvolu','https://www.mimirhq.com','pveluvolu@mimirllc.com','2015-08-09 21:34:28','2015-08-09 21:34:28');

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

insert into `migrations` values('2015_08_09_212501_create_mentors','1');

SET FOREIGN_KEY_CHECKS = 1;
