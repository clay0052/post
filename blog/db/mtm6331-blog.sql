-- phpMyAdmin SQL Dump
-- version 4.7.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 18, 2017 at 01:04 PM
-- Server version: 5.6.35
-- PHP Version: 7.0.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mtm6331-blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(6) UNSIGNED NOT NULL,
  `category_slug` varchar(255) NOT NULL,
  `category_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_slug`, `category_name`) VALUES
(1, 'html', 'HTML'),
(2, 'css', 'CSS'),
(3, 'javascript', 'JavaScript'),
(4, 'php', 'PHP'),
(5, 'sql', 'SQL');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(6) UNSIGNED NOT NULL,
  `post_slug` varchar(255) NOT NULL,
  `post_title` varchar(120) NOT NULL,
  `post_date` datetime NOT NULL,
  `post_excerpt` text,
  `post_body` text,
  `category_id` int(6) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `post_slug`, `post_title`, `post_date`, `post_excerpt`, `post_body`, `category_id`) VALUES
(1, 'hello-html5', 'Hello HTML5!', '2014-10-23 21:23:49', '<p>HTML5 introduces many new features,\r\n elements and attributes that can be used to enhance your site.</p>', '<p>HTML5 is the latest evolution of the standard that defines HTML. The term represents two different concepts. It is a new version of the language HTML, with new elements, attributes, and behaviors, and a larger set of technologies that allows the building of more diverse and powerful Web sites and applications. This set is sometimes called HTML5 & friends and often shortened to just HTML5.*</p>\r\n\r\n<p><small><sup>*</sup>https://developer.mozilla.org/en-US/docs/Web/Guide/HTML/HTML5</small></p>', 1),
(2, 'es2015', 'ES2015', '2015-07-01 23:53:04', '<p>This next version to JavaScript is huge leap forward for the language.</p>', '<p>ES2015 (formally ES6) is a fantastic step forward for the JavaScript language. It brings new features and sugaring for patterns that required significant boilerplate in ES5. This includes classes, arrow functions and modules. In this episode, we cover tools we use to take full advantage of ES2015 when building JavaScript web-apps.*</p>\r\n\r\n<p><small><sup>*</sup>https://developers.google.com/web/shows/ttt/series-2/es2015</small></p>', 3),
(3, 'flexbox', 'Flexbox', '2017-12-03 22:40:14', '<p>In the past, floats and positioning were the only reliable cross browser-compatible tools to create site layouts,\r\n but then Flexbox came along.</p>', '<p>A new technology, but with support now fairly widespread across browsers, Flexbox is starting to become ready for widespread use. Flexbox provides tools to allow rapid creation of complex, flexible layouts, and features that historically proved difficult with CSS. This article explains all the fundamentals.*</p>\r\n\r\n<p><small><sup>*</sup>https://developer.mozilla.org/en-US/docs/Learn/CSS/CSS_layout/Flexbox</small></p>', 2),
(4, '5-new-features-php-7', '5 New Features in PHP 7', '2017-11-01 06:00:00', '<p>I’m very happy to introduce you to the first MAJOR release of PHP in over a decade.</p>', '<p>The PHP community is VERY excited to welcome this latest release. But that doesn’t mean PHP has been stagnant all this time. On the contrary, minor releases of PHP 5 brought many exciting features to PHP, including support of Object-Oriented programming and many features associated with that.</p>\r\n\r\n<p>So, first off, why 7 and not 6? Let’s just say, unicode didn’t go so well. As with many projects, requirements were not well defined and people couldn’t agree on things, so the project ground to a halt. Besides unicode, for encoding special and international characters, almost all the features being discussed for PHP 6 were eventually implemented in PHP 5.3 and later, so we really didn’t miss anything else. Through it all, many things were learned and a new process for feature requests was put in place. When the feature set for a major release was accepted, it was decided, to avoid confusion with a dead project, and to skip to version 7 for the latest release.*</p>\r\n\r\n<p><small><sup>*</sup><a href=\"http://blog.teamtreehouse.com/5-new-features-php-7\" target=\"_blank\">http://blog.teamtreehouse.com/5-new-features-php-7</a></small></p>\r\n', 4),
(5, 'introduction-to-sql', 'Introduction to SQL', '2017-12-05 07:00:00', '<p>SQL is a simple but powerful language for communicating with a Database Management System.</p>', '<p>Structure Query Language(SQL) is a programming language used for storing and managing data in RDBMS. SQL was the first commercial language introduced for E.F Codd\'s Relational model. Today almost all RDBMS(MySql, Oracle, Infomix, Sybase, MS Access) uses SQL as the standard database language. SQL is used to perform all type of data operations in RDBMS.*</p>\r\n\r\n<p><small><sup>*</sup>https://www.studytonight.com/dbms/introduction-to-sql</small></p>', 5),
(6, 'using-jquery-asynchronously-loading-image', 'Use jQuery to Asynchronously Load an Image', '2015-06-30 11:00:00', '<p>Learn how to load images asynchronously using jQuery</p>', '<p>Whether you’re loading a high-resolution image in an image gallery or you have a game with lots of image assets and sprites, using jQuery to load your images will make your appear to be more responsive.*</p>\r\n\r\n<p><small><sup>*</sup><a href=\"http://blog.teamtreehouse.com/using-jquery-asynchronously-loading-image\" target=\"_blank\">http://blog.teamtreehouse.com/using-jquery-asynchronously-loading-image</a></small></p>', 3),
(7, 'php7-10-things-you-need-to-know', 'PHP 7: 10 Things You Need to Know', '2015-10-02 10:00:00', '<p>With the final version of PHP 7 coming soon, there are a few things you should know.</p>', '<p>Are you a web developer or a website owner? Do your sites run on PHP-enabled CMS such as WordPress, Drupal, Joomla or Magento? Then I have good news for you: the feature-complete beta of the new PHP 7 was recently released. The 7.0.0 major release contains so many cool features that we decided to dedicate a whole post to it. But first, we need to slide in a few reminders.</p>\r\n\r\n<p>Note that PHP 7 is still in the development phase so don’t use it in production until November when the final version will be released. If – as a future user – you want to take your fair share from the development process, you can help with downloading the latest beta, playing around with it in your testing environment and reporting bugs you found during the testing. To find out when the next beta will be out, here’s the project timetable.*</p>\r\n\r\n<p><small><sup>*</sup><a href=\"https://www.hongkiat.com/blog/php7/\" target=\"_blank\">https://www.hongkiat.com/blog/php7/</a></small></p>', 4),
(8, 'an-overview-of-html5-semantics', 'An Overview of HTML5 Semantics', '2016-02-16 09:33:44', '<p>What are HTML5 semantics and why should we use them?</p>', '<p>What are HTML5 semantics and why should we use them? What is divitis and why shouldn’t we use it? This post is meant to answer all these questions, and more.*</p>\r\n\r\n<p><small><sup>*</sup></small><a href=\"https://codepen.io/mi-lee/post/an-overview-of-html5-semantics\" target=\"_blank\">https://codepen.io/mi-lee/post/an-overview-of-html5-semantics</a></p>', 1);

--
-- Triggers `posts`
--
DELIMITER $$
CREATE TRIGGER `New Post` BEFORE INSERT ON `posts` FOR EACH ROW SET NEW.post_date=NOW()
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`),
  ADD UNIQUE KEY `post_slug` (`post_slug`),
  ADD KEY `category_id` (`category_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`category_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
