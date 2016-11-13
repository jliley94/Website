-- phpMyAdmin SQL Dump
-- version 3.5.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2016 at 10:01 PM
-- Server version: 5.1.73-log
-- PHP Version: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `b2028870_db3`
--

-- --------------------------------------------------------

--
-- Table structure for table `achievements`
--

CREATE TABLE IF NOT EXISTS `achievements` (
  `achievementID` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(20) NOT NULL,
  `desc` varchar(50) NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`achievementID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `achievements`
--

INSERT INTO `achievements` (`achievementID`, `title`, `desc`, `image`) VALUES
(1, 'one small step', 'youve completed the very first lesson and quiz.', 'images/step.png'),
(2, 'perfect 10', 'answered every question in a quiz correctly', 'images/10.png'),
(3, 'FIRE!', 'You have been using this app every day for a week', 'images/fire!.png');

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE IF NOT EXISTS `content` (
  `contentID` int(11) NOT NULL AUTO_INCREMENT,
  `lessonID` int(11) NOT NULL,
  `hiraganaID` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` varchar(1000) NOT NULL,
  PRIMARY KEY (`contentID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=56 ;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`contentID`, `lessonID`, `hiraganaID`, `title`, `description`) VALUES
(1, 1, 0, 'Welcome to Hiragana', 'This application has been designed as a tool to help teach and revise the Japanese Hiragana syllabary. Using interactive input from the user to help them remember the information they are learning. This application is currently a prototype and not fully functional but the basic functionality and user interface is available for testing. These lessons use text, images, as well as audio to teach you the user how to read and pronounce the Japanese Hiragana syllabary. I hope you enjoy using this application as much as i enjoyed making it.'),
(2, 1, 0, 'In this Lesson', 'In this lesson we will start by looking at the voule sounds. Unlike english, the japanese ''syllabary'' convay sylabols instead of just letters, this makes life a whole lot easier as the sylabol sound doesnt ever change like it does in english. Lets dive in and look at the first character!'),
(3, 1, 1, 'The A character', 'As you can see by the picture, it doesnt look a lot like an A, but once you get used to these characters they dont look as inimidating so bare with me! First things first, how it sounds. On any of the characters troughout these lessons, you can simply click on the image to hear the correct pronounciation. Try it now... as you can hear, it is prounounced as in ''Fast'' as aposed to ''Ape'' keep that in mind when practicing. Okay lets move on to the next character.'),
(4, 1, 2, 'the I', 'Okay i imagine youre starting to get the idea, each page will cover a new letter. So once youve given it a listen youll see that its pronouced like ''machine'' not like ''fit''. '),
(5, 1, 3, 'The U', 'When pronouncing this one think ''Flute'' not ''Jumper'' '),
(6, 1, 4, 'the E', 'When pronouncing this one think ''den'' not ''leek'' '),
(7, 1, 5, 'The O', 'When pronouncing this one think ''yolk'' not ''open'' '),
(8, 1, 0, 'Conclusion', 'Boom! well done youre already at the end of the first lesson. How these lessons will work is first there will be a short lesson, then you will be quizzed. Dont worry its not too hard, its completed after correctly answering 10 questions right. After completing the quiz you unlock the next lesson and possibly some achievements if you do well eough.'),
(9, 2, 0, 'Title', 'This is a prototype application, for this reason some of the text for this site has yet to be writen as this is currently being tested for functionality rather than educational content. Text text text.... lots of text, keep the text coming. This is a prototype application, for this reason some of the text for this site has yet to be writen as this is currently being tested for functionality rather than educational content. Text text text.... lots of text, keep the text coming. This is a prototype application, for this reason some of the text for this site has yet to be writen as this is currently being tested for functionality rather than educational content. Text text text.... lots of text, keep the text coming.'),
(10, 2, 6, 'the ka', 'This is a prototype application, for this reason some of the text for this site has yet to be writen as this is currently being tested for functionality rather than educational content. Text text text.... lots of text, keep the text coming. This is a prototype application, for this reason some of the text for this site has yet to be writen as this is currently being tested for functionality rather than educational content. Text text text.... lots of text, keep the text coming. This is a prototype application, for this reason some of the text for this site has yet to be writen as this is currently being tested for functionality rather than educational content. Text text text.... lots of text, keep the text coming.'),
(11, 2, 7, 'the ki', 'This is a prototype application, for this reason some of the text for this site has yet to be writen as this is currently being tested for functionality rather than educational content. Text text text.... lots of text, keep the text coming. This is a prototype application, for this reason some of the text for this site has yet to be writen as this is currently being tested for functionality rather than educational content. Text text text.... lots of text, keep the text coming. This is a prototype application, for this reason some of the text for this site has yet to be writen as this is currently being tested for functionality rather than educational content. Text text text.... lots of text, keep the text coming.'),
(12, 2, 8, 'The ku', 'This is a prototype application, for this reason some of the text for this site has yet to be writen as this is currently being tested for functionality rather than educational content. Text text text.... lots of text, keep the text coming. This is a prototype application, for this reason some of the text for this site has yet to be writen as this is currently being tested for functionality rather than educational content. Text text text.... lots of text, keep the text coming. This is a prototype application, for this reason some of the text for this site has yet to be writen as this is currently being tested for functionality rather than educational content. Text text text.... lots of text, keep the text coming.'),
(13, 2, 9, 'The ke', 'This is a prototype application, for this reason some of the text for this site has yet to be writen as this is currently being tested for functionality rather than educational content. Text text text.... lots of text, keep the text coming. This is a prototype application, for this reason some of the text for this site has yet to be writen as this is currently being tested for functionality rather than educational content. Text text text.... lots of text, keep the text coming. This is a prototype application, for this reason some of the text for this site has yet to be writen as this is currently being tested for functionality rather than educational content. Text text text.... lots of text, keep the text coming.'),
(14, 2, 10, 'The ko', 'This is a prototype application, for this reason some of the text for this site has yet to be writen as this is currently being tested for functionality rather than educational content. Text text text.... lots of text, keep the text coming. This is a prototype application, for this reason some of the text for this site has yet to be writen as this is currently being tested for functionality rather than educational content. Text text text.... lots of text, keep the text coming. This is a prototype application, for this reason some of the text for this site has yet to be writen as this is currently being tested for functionality rather than educational content. Text text text.... lots of text, keep the text coming.'),
(15, 2, 0, 'Title', 'This is a prototype application, for this reason some of the text for this site has yet to be writen as this is currently being tested for functionality rather than educational content. Text text text.... lots of text, keep the text coming. This is a prototype application, for this reason some of the text for this site has yet to be writen as this is currently being tested for functionality rather than educational content. Text text text.... lots of text, keep the text coming. This is a prototype application, for this reason some of the text for this site has yet to be writen as this is currently being tested for functionality rather than educational content. Text text text.... lots of text, keep the text coming.'),
(16, 3, 0, 'Title', 'This is a prototype application, for this reason some of the text for this site has yet to be writen as this is currently being tested for functionality rather than educational content. Text text text.... lots of text, keep the text coming. This is a prototype application, for this reason some of the text for this site has yet to be writen as this is currently being tested for functionality rather than educational content. Text text text.... lots of text, keep the text coming. This is a prototype application, for this reason some of the text for this site has yet to be writen as this is currently being tested for functionality rather than educational content. Text text text.... lots of text, keep the text coming.'),
(17, 3, 11, 'Title sa', 'This is a prototype application, for this reason some of the text for this site has yet to be writen as this is currently being tested for functionality rather than educational content. Text text text.... lots of text, keep the text coming. This is a prototype application, for this reason some of the text for this site has yet to be writen as this is currently being tested for functionality rather than educational content. Text text text.... lots of text, keep the text coming. This is a prototype application, for this reason some of the text for this site has yet to be writen as this is currently being tested for functionality rather than educational content. Text text text.... lots of text, keep the text coming.'),
(18, 3, 12, 'Title shi', 'This is a prototype application, for this reason some of the text for this site has yet to be writen as this is currently being tested for functionality rather than educational content. Text text text.... lots of text, keep the text coming. This is a prototype application, for this reason some of the text for this site has yet to be writen as this is currently being tested for functionality rather than educational content. Text text text.... lots of text, keep the text coming. This is a prototype application, for this reason some of the text for this site has yet to be writen as this is currently being tested for functionality rather than educational content. Text text text.... lots of text, keep the text coming.'),
(19, 3, 13, 'Title su', 'This is a prototype application, for this reason some of the text for this site has yet to be writen as this is currently being tested for functionality rather than educational content. Text text text.... lots of text, keep the text coming. This is a prototype application, for this reason some of the text for this site has yet to be writen as this is currently being tested for functionality rather than educational content. Text text text.... lots of text, keep the text coming. This is a prototype application, for this reason some of the text for this site has yet to be writen as this is currently being tested for functionality rather than educational content. Text text text.... lots of text, keep the text coming.'),
(20, 3, 14, 'Title se', 'This is a prototype application, for this reason some of the text for this site has yet to be writen as this is currently being tested for functionality rather than educational content. Text text text.... lots of text, keep the text coming. This is a prototype application, for this reason some of the text for this site has yet to be writen as this is currently being tested for functionality rather than educational content. Text text text.... lots of text, keep the text coming. This is a prototype application, for this reason some of the text for this site has yet to be writen as this is currently being tested for functionality rather than educational content. Text text text.... lots of text, keep the text coming.'),
(21, 3, 15, 'Title so', 'This is a prototype application, for this reason some of the text for this site has yet to be writen as this is currently being tested for functionality rather than educational content. Text text text.... lots of text, keep the text coming. This is a prototype application, for this reason some of the text for this site has yet to be writen as this is currently being tested for functionality rather than educational content. Text text text.... lots of text, keep the text coming. This is a prototype application, for this reason some of the text for this site has yet to be writen as this is currently being tested for functionality rather than educational content. Text text text.... lots of text, keep the text coming.'),
(22, 4, 16, 'Title ta', 'This is a prototype application, for this reason some of the text for this site has yet to be writen as this is currently being tested for functionality rather than educational content. Text text text.... lots of text, keep the text coming. This is a prototype application, for this reason some of the text for this site has yet to be writen as this is currently being tested for functionality rather than educational content. Text text text.... lots of text, keep the text coming. This is a prototype application, for this reason some of the text for this site has yet to be writen as this is currently being tested for functionality rather than educational content. Text text text.... lots of text, keep the text coming.'),
(23, 4, 17, 'Title chi', 'This is a prototype application, for this reason some of the text for this site has yet to be writen as this is currently being tested for functionality rather than educational content. Text text text.... lots of text, keep the text coming. This is a prototype application, for this reason some of the text for this site has yet to be writen as this is currently being tested for functionality rather than educational content. Text text text.... lots of text, keep the text coming. This is a prototype application, for this reason some of the text for this site has yet to be writen as this is currently being tested for functionality rather than educational content. Text text text.... lots of text, keep the text coming.'),
(24, 4, 18, 'Title tsu', 'This is a prototype application, for this reason some of the text for this site has yet to be writen as this is currently being tested for functionality rather than educational content. Text text text.... lots of text, keep the text coming. This is a prototype application, for this reason some of the text for this site has yet to be writen as this is currently being tested for functionality rather than educational content. Text text text.... lots of text, keep the text coming. This is a prototype application, for this reason some of the text for this site has yet to be writen as this is currently being tested for functionality rather than educational content. Text text text.... lots of text, keep the text coming.'),
(25, 4, 19, 'Title te', 'This is a prototype application, for this reason some of the text for this site has yet to be writen as this is currently being tested for functionality rather than educational content. Text text text.... lots of text, keep the text coming. This is a prototype application, for this reason some of the text for this site has yet to be writen as this is currently being tested for functionality rather than educational content. Text text text.... lots of text, keep the text coming. This is a prototype application, for this reason some of the text for this site has yet to be writen as this is currently being tested for functionality rather than educational content. Text text text.... lots of text, keep the text coming.'),
(26, 4, 20, 'Title to', 'This is a prototype application, for this reason some of the text for this site has yet to be writen as this is currently being tested for functionality rather than educational content. Text text text.... lots of text, keep the text coming. This is a prototype application, for this reason some of the text for this site has yet to be writen as this is currently being tested for functionality rather than educational content. Text text text.... lots of text, keep the text coming. This is a prototype application, for this reason some of the text for this site has yet to be writen as this is currently being tested for functionality rather than educational content. Text text text.... lots of text, keep the text coming.'),
(27, 6, 26, 'Title ha', 'This is a prototype application, for this reason some of the text for this site has yet to be writen as this is currently being tested for functionality rather than educational content. Text text text.... lots of text, keep the text coming. This is a prototype application, for this reason some of the text for this site has yet to be writen as this is currently being tested for functionality rather than educational content. Text text text.... lots of text, keep the text coming. This is a prototype application, for this reason some of the text for this site has yet to be writen as this is currently being tested for functionality rather than educational content. Text text text.... lots of text, keep the text coming.'),
(28, 6, 27, 'Title hi', 'This is a prototype application, for this reason some of the text for this site has yet to be writen as this is currently being tested for functionality rather than educational content. Text text text.... lots of text, keep the text coming. This is a prototype application, for this reason some of the text for this site has yet to be writen as this is currently being tested for functionality rather than educational content. Text text text.... lots of text, keep the text coming. This is a prototype application, for this reason some of the text for this site has yet to be writen as this is currently being tested for functionality rather than educational content. Text text text.... lots of text, keep the text coming.'),
(29, 6, 28, 'Title fu', 'This is a prototype application, for this reason some of the text for this site has yet to be writen as this is currently being tested for functionality rather than educational content. Text text text.... lots of text, keep the text coming. This is a prototype application, for this reason some of the text for this site has yet to be writen as this is currently being tested for functionality rather than educational content. Text text text.... lots of text, keep the text coming. This is a prototype application, for this reason some of the text for this site has yet to be writen as this is currently being tested for functionality rather than educational content. Text text text.... lots of text, keep the text coming.'),
(30, 6, 29, 'Title he', 'This is a prototype application, for this reason some of the text for this site has yet to be writen as this is currently being tested for functionality rather than educational content. Text text text.... lots of text, keep the text coming. This is a prototype application, for this reason some of the text for this site has yet to be writen as this is currently being tested for functionality rather than educational content. Text text text.... lots of text, keep the text coming. This is a prototype application, for this reason some of the text for this site has yet to be writen as this is currently being tested for functionality rather than educational content. Text text text.... lots of text, keep the text coming.'),
(31, 6, 30, 'Title ho', 'This is a prototype application, for this reason some of the text for this site has yet to be writen as this is currently being tested for functionality rather than educational content. Text text text.... lots of text, keep the text coming. This is a prototype application, for this reason some of the text for this site has yet to be writen as this is currently being tested for functionality rather than educational content. Text text text.... lots of text, keep the text coming. This is a prototype application, for this reason some of the text for this site has yet to be writen as this is currently being tested for functionality rather than educational content. Text text text.... lots of text, keep the text coming.'),
(33, 5, 21, 'Title na', 'This is a prototype application, for this reason some of the text for this site has yet to be writen as this is currently being tested for functionality rather than educational content. Text text text.... lots of text, keep the text coming. This is a prototype application, for this reason some of the text for this site has yet to be writen as this is currently being tested for functionality rather than educational content. Text text text.... lots of text, keep the text coming. This is a prototype application, for this reason some of the text for this site has yet to be writen as this is currently being tested for functionality rather than educational content. Text text text.... lots of text, keep the text coming.'),
(34, 5, 22, 'Title ni', 'This is a prototype application, for this reason some of the text for this site has yet to be writen as this is currently being tested for functionality rather than educational content. Text text text.... lots of text, keep the text coming. This is a prototype application, for this reason some of the text for this site has yet to be writen as this is currently being tested for functionality rather than educational content. Text text text.... lots of text, keep the text coming. This is a prototype application, for this reason some of the text for this site has yet to be writen as this is currently being tested for functionality rather than educational content. Text text text.... lots of text, keep the text coming.'),
(35, 5, 23, 'Title nu', 'This is a prototype application, for this reason some of the text for this site has yet to be writen as this is currently being tested for functionality rather than educational content. Text text text.... lots of text, keep the text coming. This is a prototype application, for this reason some of the text for this site has yet to be writen as this is currently being tested for functionality rather than educational content. Text text text.... lots of text, keep the text coming. This is a prototype application, for this reason some of the text for this site has yet to be writen as this is currently being tested for functionality rather than educational content. Text text text.... lots of text, keep the text coming.'),
(36, 5, 24, 'Title ne', 'This is a prototype application, for this reason some of the text for this site has yet to be writen as this is currently being tested for functionality rather than educational content. Text text text.... lots of text, keep the text coming. This is a prototype application, for this reason some of the text for this site has yet to be writen as this is currently being tested for functionality rather than educational content. Text text text.... lots of text, keep the text coming. This is a prototype application, for this reason some of the text for this site has yet to be writen as this is currently being tested for functionality rather than educational content. Text text text.... lots of text, keep the text coming.'),
(37, 5, 25, 'Title no', 'This is a prototype application, for this reason some of the text for this site has yet to be writen as this is currently being tested for functionality rather than educational content. Text text text.... lots of text, keep the text coming. This is a prototype application, for this reason some of the text for this site has yet to be writen as this is currently being tested for functionality rather than educational content. Text text text.... lots of text, keep the text coming. This is a prototype application, for this reason some of the text for this site has yet to be writen as this is currently being tested for functionality rather than educational content. Text text text.... lots of text, keep the text coming.'),
(38, 7, 31, 'Title ma', 'This is a prototype application, for this reason some of the text for this site has yet to be writen as this is currently being tested for functionality rather than educational content. Text text text.... lots of text, keep the text coming. This is a prototype application, for this reason some of the text for this site has yet to be writen as this is currently being tested for functionality rather than educational content. Text text text.... lots of text, keep the text coming. This is a prototype application, for this reason some of the text for this site has yet to be writen as this is currently being tested for functionality rather than educational content. Text text text.... lots of text, keep the text coming.'),
(39, 7, 32, 'Title mi', 'This is a prototype application, for this reason some of the text for this site has yet to be writen as this is currently being tested for functionality rather than educational content. Text text text.... lots of text, keep the text coming. This is a prototype application, for this reason some of the text for this site has yet to be writen as this is currently being tested for functionality rather than educational content. Text text text.... lots of text, keep the text coming. This is a prototype application, for this reason some of the text for this site has yet to be writen as this is currently being tested for functionality rather than educational content. Text text text.... lots of text, keep the text coming.'),
(40, 7, 33, 'Title mu', 'This is a prototype application, for this reason some of the text for this site has yet to be writen as this is currently being tested for functionality rather than educational content. Text text text.... lots of text, keep the text coming. This is a prototype application, for this reason some of the text for this site has yet to be writen as this is currently being tested for functionality rather than educational content. Text text text.... lots of text, keep the text coming. This is a prototype application, for this reason some of the text for this site has yet to be writen as this is currently being tested for functionality rather than educational content. Text text text.... lots of text, keep the text coming.'),
(41, 7, 34, 'Title me', 'This is a prototype application, for this reason some of the text for this site has yet to be writen as this is currently being tested for functionality rather than educational content. Text text text.... lots of text, keep the text coming. This is a prototype application, for this reason some of the text for this site has yet to be writen as this is currently being tested for functionality rather than educational content. Text text text.... lots of text, keep the text coming. This is a prototype application, for this reason some of the text for this site has yet to be writen as this is currently being tested for functionality rather than educational content. Text text text.... lots of text, keep the text coming.'),
(42, 7, 35, 'Title mo', 'This is a prototype application, for this reason some of the text for this site has yet to be writen as this is currently being tested for functionality rather than educational content. Text text text.... lots of text, keep the text coming. This is a prototype application, for this reason some of the text for this site has yet to be writen as this is currently being tested for functionality rather than educational content. Text text text.... lots of text, keep the text coming. This is a prototype application, for this reason some of the text for this site has yet to be writen as this is currently being tested for functionality rather than educational content. Text text text.... lots of text, keep the text coming.'),
(43, 8, 36, 'Title ya', 'This is a prototype application, for this reason some of the text for this site has yet to be writen as this is currently being tested for functionality rather than educational content. Text text text.... lots of text, keep the text coming. This is a prototype application, for this reason some of the text for this site has yet to be writen as this is currently being tested for functionality rather than educational content. Text text text.... lots of text, keep the text coming. This is a prototype application, for this reason some of the text for this site has yet to be writen as this is currently being tested for functionality rather than educational content. Text text text.... lots of text, keep the text coming.'),
(44, 8, 37, 'Title yu', 'This is a prototype application, for this reason some of the text for this site has yet to be writen as this is currently being tested for functionality rather than educational content. Text text text.... lots of text, keep the text coming. This is a prototype application, for this reason some of the text for this site has yet to be writen as this is currently being tested for functionality rather than educational content. Text text text.... lots of text, keep the text coming. This is a prototype application, for this reason some of the text for this site has yet to be writen as this is currently being tested for functionality rather than educational content. Text text text.... lots of text, keep the text coming.'),
(45, 8, 38, 'Title yo', 'This is a prototype application, for this reason some of the text for this site has yet to be writen as this is currently being tested for functionality rather than educational content. Text text text.... lots of text, keep the text coming. This is a prototype application, for this reason some of the text for this site has yet to be writen as this is currently being tested for functionality rather than educational content. Text text text.... lots of text, keep the text coming. This is a prototype application, for this reason some of the text for this site has yet to be writen as this is currently being tested for functionality rather than educational content. Text text text.... lots of text, keep the text coming.'),
(46, 9, 39, 'Title ra', 'This is a prototype application, for this reason some of the text for this site has yet to be writen as this is currently being tested for functionality rather than educational content. Text text text.... lots of text, keep the text coming. This is a prototype application, for this reason some of the text for this site has yet to be writen as this is currently being tested for functionality rather than educational content. Text text text.... lots of text, keep the text coming. This is a prototype application, for this reason some of the text for this site has yet to be writen as this is currently being tested for functionality rather than educational content. Text text text.... lots of text, keep the text coming.'),
(47, 9, 40, 'Title ri', 'This is a prototype application, for this reason some of the text for this site has yet to be writen as this is currently being tested for functionality rather than educational content. Text text text.... lots of text, keep the text coming. This is a prototype application, for this reason some of the text for this site has yet to be writen as this is currently being tested for functionality rather than educational content. Text text text.... lots of text, keep the text coming. This is a prototype application, for this reason some of the text for this site has yet to be writen as this is currently being tested for functionality rather than educational content. Text text text.... lots of text, keep the text coming.'),
(48, 9, 41, 'Title ru', 'This is a prototype application, for this reason some of the text for this site has yet to be writen as this is currently being tested for functionality rather than educational content. Text text text.... lots of text, keep the text coming. This is a prototype application, for this reason some of the text for this site has yet to be writen as this is currently being tested for functionality rather than educational content. Text text text.... lots of text, keep the text coming. This is a prototype application, for this reason some of the text for this site has yet to be writen as this is currently being tested for functionality rather than educational content. Text text text.... lots of text, keep the text coming.'),
(49, 9, 42, 'Title re', 'This is a prototype application, for this reason some of the text for this site has yet to be writen as this is currently being tested for functionality rather than educational content. Text text text.... lots of text, keep the text coming. This is a prototype application, for this reason some of the text for this site has yet to be writen as this is currently being tested for functionality rather than educational content. Text text text.... lots of text, keep the text coming. This is a prototype application, for this reason some of the text for this site has yet to be writen as this is currently being tested for functionality rather than educational content. Text text text.... lots of text, keep the text coming.'),
(50, 9, 43, 'Title ro', 'This is a prototype application, for this reason some of the text for this site has yet to be writen as this is currently being tested for functionality rather than educational content. Text text text.... lots of text, keep the text coming. This is a prototype application, for this reason some of the text for this site has yet to be writen as this is currently being tested for functionality rather than educational content. Text text text.... lots of text, keep the text coming. This is a prototype application, for this reason some of the text for this site has yet to be writen as this is currently being tested for functionality rather than educational content. Text text text.... lots of text, keep the text coming.'),
(51, 10, 44, 'Title wa', 'This is a prototype application, for this reason some of the text for this site has yet to be writen as this is currently being tested for functionality rather than educational content. Text text text.... lots of text, keep the text coming. This is a prototype application, for this reason some of the text for this site has yet to be writen as this is currently being tested for functionality rather than educational content. Text text text.... lots of text, keep the text coming. This is a prototype application, for this reason some of the text for this site has yet to be writen as this is currently being tested for functionality rather than educational content. Text text text.... lots of text, keep the text coming.'),
(52, 10, 45, 'Title wi', 'This is a prototype application, for this reason some of the text for this site has yet to be writen as this is currently being tested for functionality rather than educational content. Text text text.... lots of text, keep the text coming. This is a prototype application, for this reason some of the text for this site has yet to be writen as this is currently being tested for functionality rather than educational content. Text text text.... lots of text, keep the text coming. This is a prototype application, for this reason some of the text for this site has yet to be writen as this is currently being tested for functionality rather than educational content. Text text text.... lots of text, keep the text coming.'),
(53, 10, 46, 'Title we', 'This is a prototype application, for this reason some of the text for this site has yet to be writen as this is currently being tested for functionality rather than educational content. Text text text.... lots of text, keep the text coming. This is a prototype application, for this reason some of the text for this site has yet to be writen as this is currently being tested for functionality rather than educational content. Text text text.... lots of text, keep the text coming. This is a prototype application, for this reason some of the text for this site has yet to be writen as this is currently being tested for functionality rather than educational content. Text text text.... lots of text, keep the text coming.'),
(54, 10, 47, 'Title wo', 'This is a prototype application, for this reason some of the text for this site has yet to be writen as this is currently being tested for functionality rather than educational content. Text text text.... lots of text, keep the text coming. This is a prototype application, for this reason some of the text for this site has yet to be writen as this is currently being tested for functionality rather than educational content. Text text text.... lots of text, keep the text coming. This is a prototype application, for this reason some of the text for this site has yet to be writen as this is currently being tested for functionality rather than educational content. Text text text.... lots of text, keep the text coming.'),
(55, 11, 48, 'Title n', 'This is a prototype application, for this reason some of the text for this site has yet to be writen as this is currently being tested for functionality rather than educational content. Text text text.... lots of text, keep the text coming. This is a prototype application, for this reason some of the text for this site has yet to be writen as this is currently being tested for functionality rather than educational content. Text text text.... lots of text, keep the text coming. This is a prototype application, for this reason some of the text for this site has yet to be writen as this is currently being tested for functionality rather than educational content. Text text text.... lots of text, keep the text coming.');

-- --------------------------------------------------------

--
-- Table structure for table `hiragana`
--

CREATE TABLE IF NOT EXISTS `hiragana` (
  `hiraganaID` int(11) NOT NULL AUTO_INCREMENT,
  `level` int(11) NOT NULL,
  `english` varchar(3) CHARACTER SET latin1 NOT NULL,
  `image` varchar(255) CHARACTER SET latin1 NOT NULL,
  `audio` varchar(255) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`hiraganaID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=49 ;

--
-- Dumping data for table `hiragana`
--

INSERT INTO `hiragana` (`hiraganaID`, `level`, `english`, `image`, `audio`) VALUES
(1, 1, 'a', 'hiragana/a.png', 'audio/a.mp3'),
(2, 1, 'i', 'hiragana/i.png', 'audio/i.mp3'),
(3, 1, 'u', 'hiragana/u.png', 'audio/u.mp3'),
(4, 1, 'e', 'hiragana/e.png', 'audio/e.mp3'),
(5, 1, 'o', 'hiragana/o.png', 'audio/o.mp3'),
(6, 2, 'ka', 'hiragana/ka.png', 'audio/ka.mp3'),
(7, 2, 'ki', 'hiragana/ki.png', 'audio/ki.mp3'),
(8, 2, 'ku', 'hiragana/ku.png', 'audio/ku.mp3'),
(9, 2, 'ke', 'hiragana/ke.png', 'audio/ke.mp3'),
(10, 2, 'ko', 'hiragana/ko.png', 'audio/ko.mp3'),
(11, 3, 'sa', 'hiragana/sa.png', 'audio/sa.mp3'),
(12, 3, 'shi', 'hiragana/shi.png', 'audio/shi.mp3'),
(13, 3, 'su', 'hiragana/su.png', 'audio/su.mp3'),
(14, 3, 'se', 'hiragana/se.png', 'audio/se.mp3'),
(15, 3, 'so', 'hiragana/so.png', 'audio/so.mp3'),
(16, 4, 'ta', 'hiragana/ta.png', 'audio/ta.mp3'),
(17, 4, 'chi', 'hiragana/chi.png', 'audio/chi.mp3'),
(18, 4, 'tsu', 'hiragana/tsu.png', 'audio/tsu.mp3'),
(19, 4, 'te', 'hiragana/te.png', 'audio/te.mp3'),
(20, 4, 'to', 'hiragana/to.png', 'audio/to.mp3'),
(21, 5, 'na', 'hiragana/na.png', 'audio/na.mp3'),
(22, 5, 'ni', 'hiragana/ni.png', 'audio/ni.mp3'),
(23, 5, 'nu', 'hiragana/nu.png', 'audio/nu.mp3'),
(24, 5, 'ne', 'hiragana/ne.png', 'audio/ne.mp3'),
(25, 5, 'no', 'hiragana/no.png', 'audio/no.mp3'),
(26, 6, 'ha', 'hiragana/ha.png', 'audio/ha.mp3'),
(27, 6, 'hi', 'hiragana/hi.png', 'audio/hi.mp3'),
(28, 6, 'fu', 'hiragana/fu.png', 'audio/fu.mp3'),
(29, 6, 'he', 'hiragana/he.png', 'audio/he.mp3'),
(30, 6, 'ho', 'hiragana/ho.png', 'audio/ho.mp3'),
(31, 7, 'ma', 'hiragana/ma.png', 'audio/ma.mp3'),
(32, 7, 'mi', 'hiragana/mi.png', 'audio/mi.mp3'),
(33, 7, 'mu', 'hiragana/mu.png', 'audio/mu.mp3'),
(34, 7, 'me', 'hiragana/me.png', 'audio/me.mp3'),
(35, 7, 'mo', 'hiragana/mo.png', 'audio/mo.mp3'),
(36, 8, 'ya', 'hiragana/ya.png', 'audio/ya.mp3'),
(37, 8, 'yu', 'hiragana/yu.png', 'audio/yu.mp3'),
(38, 8, 'yo', 'hiragana/yo.png', 'audio/yo.mp3'),
(39, 8, 'ra', 'hiragana/ra.png', 'audio/ra.mp3'),
(40, 8, 'ri', 'hiragana/ri.png', 'audio/ri.mp3'),
(41, 8, 'ru', 'hiragana/ru.png', 'audio/ru.mp3'),
(42, 8, 're', 'hiragana/re.png', 'audio/re.mp3'),
(43, 8, 'ro', 'hiragana/ro.png', 'audio/ro.mp3'),
(44, 9, 'wa', 'hiragana/wa.png', 'audio/wa.mp3'),
(45, 9, 'wi', 'hiragana/wi.png', 'audio/wi.mp3'),
(46, 9, 'we', 'hiragana/we.png', 'audio/we.mp3'),
(47, 9, 'wo', 'hiragana/wo.png', 'audio/wo.mp3'),
(48, 10, 'n', 'hiragana/n.png', 'audio/n.mp3');

-- --------------------------------------------------------

--
-- Table structure for table `lessons`
--

CREATE TABLE IF NOT EXISTS `lessons` (
  `lessonID` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(25) NOT NULL,
  `desc` varchar(150) NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`lessonID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `lessons`
--

INSERT INTO `lessons` (`lessonID`, `title`, `desc`, `image`) VALUES
(1, 'Lesson 1: Voules', 'In this lesson we will look at the 5 characters that give us the voules.', 'images/lesson1.png'),
(2, 'Lesson 2: The K Series', 'In this lesson we will look at the 5 characters in the K series', 'images/lesson2.png'),
(3, 'Lesson 3: The S Series', 'In this lesson we will look at the 5 characters in the S series', 'images/lesson3.png'),
(4, 'Lesson 4: The T Series', 'In this lesson we will look at the 5 characters in the S series', 'images/lesson3.png'),
(5, 'Lesson 5: The N Series', 'In this lesson we will look at the 5 characters in the N series', 'images/lesson5.png'),
(6, 'Lesson 6: The h Series', 'In this lesson we will look at the 5 characters in the H series', 'images/lesson6.png'),
(7, 'Lesson 7: The M Series', 'In this lesson we will look at the 5 characters in the M series', 'images/lesson7.png'),
(8, 'Lesson 8: The Y Series', 'In this lesson we will look at the 3 characters in the Y series', 'images/lesson8.png'),
(9, 'Lesson 9: The W Series', 'In this lesson we will look at the 4 characters in the W series', 'images/lesson9.png'),
(10, 'Lesson 10: N', 'In this lesson we will look N, because it didnt fit into any other category.', 'images/lesson10.png');

-- --------------------------------------------------------

--
-- Table structure for table `userachievements`
--

CREATE TABLE IF NOT EXISTS `userachievements` (
  `userAchID` int(11) NOT NULL AUTO_INCREMENT,
  `userID` int(11) NOT NULL,
  `achievementID` int(11) NOT NULL,
  PRIMARY KEY (`userAchID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `userachievements`
--

INSERT INTO `userachievements` (`userAchID`, `userID`, `achievementID`) VALUES
(18, 1, 1),
(19, 1, 2),
(20, 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `usermarks`
--

CREATE TABLE IF NOT EXISTS `usermarks` (
  `markID` int(11) NOT NULL AUTO_INCREMENT,
  `userID` int(11) NOT NULL,
  `hiraganaID` int(11) NOT NULL,
  `correct` int(11) NOT NULL,
  `wrong` int(11) NOT NULL,
  `ratio` float NOT NULL,
  PRIMARY KEY (`markID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=57 ;

--
-- Dumping data for table `usermarks`
--

INSERT INTO `usermarks` (`markID`, `userID`, `hiraganaID`, `correct`, `wrong`, `ratio`) VALUES
(1, 1, 2, 96, 26, 0.786885),
(4, 1, 5, 90, 21, 0.810811),
(5, 1, 3, 77, 16, 0.827957),
(6, 1, 4, 98, 20, 0.830508),
(7, 1, 1, 89, 24, 0.787611),
(8, 1, 6, 9, 0, 1),
(9, 1, 7, 12, 5, 0.705882),
(10, 1, 8, 9, 8, 0.529412),
(11, 1, 9, 14, 2, 0.875),
(12, 1, 16, 10, 13, 0.434783),
(13, 1, 12, 5, 0, 1),
(14, 1, 15, 5, 1, 0.833333),
(15, 1, 13, 2, 1, 0.666667),
(16, 1, 16, 12, 12, 0.5),
(17, 1, 18, 1, 0, 1),
(32, 1, 10, 5, 9, 0.357143),
(55, 1, 11, 2, 2, 0.5),
(56, 1, 14, 1, 1, 0.5);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `userID` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `level` int(11) NOT NULL,
  `lastActive` date NOT NULL,
  `streak` int(11) NOT NULL,
  PRIMARY KEY (`userID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `username`, `password`, `level`, `lastActive`, `streak`) VALUES
(1, 'testUser1', 'password', 3, '2016-09-15', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
