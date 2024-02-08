-- Adminer 4.8.1 MySQL 8.0.26 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `cheatz`;
CREATE TABLE `cheatz` (
  `Command` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Description` varchar(600) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(600) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `possible appendixes` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `section` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `man page` varchar(600) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `cheatz` (`Command`, `Description`, `link`, `possible appendixes`, `section`, `man page`) VALUES
('ls',	'it list info about the current directory you are in',	'http://solace.ist.rit.edu/~iste240t14/Final%20Site/sectionPages/nav.php',	'-a, -l, -r, -s, -S ...',	'Navigation',	'https://man7.org/linux/man-pages/man1/ls.1.html'),
('mkdir',	'used to make a directory',	'http://solace.ist.rit.edu/~iste240t14/Final%20Site/sectionPages/nav.php',	'-p, -m ...',	'Navigation',	'https://man7.org/linux/man-pages/man1/mkdir.1.html'),
('rmdir',	'used to remove an empty directory',	'http://solace.ist.rit.edu/~iste240t14/Final%20Site/sectionPages/nav.php',	'-p, -v ...',	'Navigation',	'https://man7.org/linux/man-pages/man1/rmdir.1.html'),
('mv',	'used to move a file, type it\'s current location then where you want to move it',	'http://solace.ist.rit.edu/~iste240t14/Final%20Site/sectionPages/nav.php',	'-b, -f, -n, -v ...',	'Navigation',	'https://man7.org/linux/man-pages/man1/mv.1p.html'),
('cd',	'used to change the directory you are in ',	'http://solace.ist.rit.edu/~iste240t14/Final%20Site/sectionPages/nav.php',	'None',	'Navigation',	'https://man7.org/linux/man-pages/man1/cd.1p.html'),
('pwd',	'shows the name of the directory you are in',	'http://solace.ist.rit.edu/~iste240t14/Final%20Site/sectionPages/nav.php',	'-L, -P',	'Navigation',	'https://man7.org/linux/man-pages/man1/pwd.1.html'),
('cp',	'used to copy one or several things to somewhere else. type in what you want copied and then the place and name you want it copied as',	'http://solace.ist.rit.edu/~iste240t14/Final%20Site/sectionPages/nav.php',	'-l, -f, -r, -b ...',	'Navigation',	'https://man7.org/linux/man-pages/man1/cp.1.html'),
('vim',	'a text editor in the terminal',	'http://solace.ist.rit.edu/~iste240t14/Final%20Site/sectionPages/nav.php',	'None',	'Navigation',	'https://linuxcommand.org/lc3_man_pages/vim1.html'),
('clear',	'pushes lines up and out of site giving you a clean looking terminal',	'http://solace.ist.rit.edu/~iste240t14/Final%20Site/sectionPages/fileMan.php',	'-T, -V, -x',	'FileManipulation',	'https://man7.org/linux/man-pages/man1/clear.1.html'),
('exit',	'exits the terminal',	'http://solace.ist.rit.edu/~iste240t14/Final%20Site/sectionPages/fileMan.php',	'None',	'FileManipulation',	'https://man7.org/linux/man-pages/man3/exit.3.html'),
('whatis',	'gives a short description of a command',	'http://solace.ist.rit.edu/~iste240t14/Final%20Site/sectionPages/fileMan.php',	'-d, -v, -l ...',	'FileManipulation',	'https://man7.org/linux/man-pages/man1/whatis.1.html'),
('top',	'shows the amount of tasks running',	'http://solace.ist.rit.edu/~iste240t14/Final%20Site/sectionPages/fileMan.php',	'None',	'FileManipulation',	'https://man7.org/linux/man-pages/man1/top.1.html'),
('chmod',	'a command that changes the permissions of files. ',	'http://solace.ist.rit.edu/~iste240t14/Final%20Site/sectionPages/fileMan.php',	'None',	'FileManipulation',	'https://man7.org/linux/man-pages/man2/chmod.2.html'),
('cat',	'displays the text inside of a file',	'None',	'-A, -n, -b ...',	'Miscellaneous',	'https://man7.org/linux/man-pages/man1/cat.1.html'),
('grep',	'allows you to search for something inside of a file system or inside a file',	'None',	'-E, -F, -c ...',	'Miscellaneous',	'https://man7.org/linux/man-pages/man1/grep.1p.html');

-- 2021-12-03 02:19:15