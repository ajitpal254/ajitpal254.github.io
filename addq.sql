-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2019 at 12:12 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `brainbox`
--

-- --------------------------------------------------------

--
-- Table structure for table `addq`
--

CREATE TABLE `addq` (
  `id` int(11) NOT NULL,
  `question` varchar(300) DEFAULT NULL,
  `answer1` varchar(300) DEFAULT NULL,
  `answer2` varchar(300) DEFAULT NULL,
  `answer3` varchar(300) DEFAULT NULL,
  `answer4` varchar(300) DEFAULT NULL,
  `correct_answer` varchar(300) DEFAULT NULL,
  `Category` varchar(200) DEFAULT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addq`
--

INSERT INTO `addq` (`id`, `question`, `answer1`, `answer2`, `answer3`, `answer4`, `correct_answer`, `Category`, `category_id`) VALUES
(1, 'The output of this program is  int  main () { cout << \"Hello World!\" return 0; }', 'Hello World', 'Syntax error', '0', 'Hello World!', '4', 'C', 1),
(2, 'Value of a in a = (b = 5, b + 5); is', 'Junk value', 'Syntax error', '5', '10', '4', 'C', 1),
(3, 'Which of the following members do get inherited(in case of private inheritance) but become private members in child class', 'Public', ' Private', 'Protected', 'All the above', '4', 'C', 1),
(4, 'class derived: public base1, public base2 { } is an example of', 'Polymorphic inheritance', 'Multilevel inheritance', 'Hierarchical inheritance', 'Multiple inheritance', '4', 'C', 1),
(5, 'If a member needs to have unique value for all the objects of that same class, declare the member as', 'Global variable outside class', ' Local variable inside constructor', ' Static variable inside class', 'Dynamic variable inside class', '2', 'C', 1),
(6, 'Which of the following is a valid destructor of the class name \"Country\"?', 'int ~Country()', 'void Country()', ' int ~Country(Country obj)', '~Country()', '4', 'C', 1),
(7, 'Which one of the following is not a fundamental data type in C++?', ' float', 'string', 'int', 'wchar_t', '1', 'C', 1),
(8, 'int a = 10;  void main() { int a = 20; cout << a << ::a; } The output of this program is', 'Syntax error', '10 20', '20 10', '20 20', '3', 'C', 1),
(9, 'The output of { int a = 5; int b = 10; cout << (a>b?a:b); }', '5', '10', 'Syntax error', ' None of above', '2', 'C', 1),
(10, 'Which one of the following is not a fundamental data type in C++?', ' float', 'string', 'int', 'wchar_t', '2', 'C', 1),
(11, '', '.html', '.xml', '.php', '.ph', '3', 'PHP', 2),
(12, 'A PHP script should start with ___ and end with ___:', '< php >', '< ? php ?>', 'PHP', 'php', '4', 'PHP', 2),
(13, 'Which function will return true if a variable is an array or false if it is not?', 'this_array()', 'do_array()', 'is_array()', 'in_array()', '3', 'PHP', 2),
(14, 'Type Hinting was introduced in which version of PHP?', 'PHP 4', 'PHP 3', 'PHP 5.3', 'PHP 6', '2', 'PHP', 2),
(15, 'Which one of the following functions can be used to compress a string?', 'zip_compress()', 'zip()', 'compress()', 'gzcompress()', '4', 'PHP', 2),
(16, ' PHPâ€™s numerically indexed array begin with position __.', '1', '2', '0', '-1', '3', 'PHP', 2),
(17, 'Which function will return true if a variable is an array or false if it is not?', 'this_array()', 'is_array()', 'do_array()', 'in_array()', '2', 'PHP', 2),
(18, 'The practice of separating the user from the true inner workings of an application through well-known interfaces is known as..', 'Polymorphism', ' Inheritance', 'Encapsulation', 'Abstraction', '3', 'PHP', 2),
(19, 'The practice of creating objects based on predefined classes is often referred to as.. ', 'class creation', 'object creation', 'object instantiation', 'class instantiation', '4', 'PHP', 2),
(20, 'Which one of the following property scopes is not supported by PHP?', 'friendly', ' final', 'public', 'static', '1', 'PHP', 2),
(21, 'Java is a ........... language.', 'weakly typed', 'strogly typed', 'moderate typed', 'None of these', '2', 'JAVA', 3),
(22, 'How many primitive data types are there in Java? ', '6', '7', '8', '9', '8', 'JAVA', 3),
(23, 'In Java byte, short, int and long all of these are ', 'Signed', 'Unsigned', 'Both of the above', 'None of the above', '1', 'JAVA', 3),
(24, 'Size of int in Java is ', '16 bit', '32 bit', '64 bit', 'Depends on execution environment', '2', 'JAVA', 3),
(25, 'The smallest integer type is ......... and its size is ......... bits. ', 'short, 8', 'byte, 8', 'short, 16', 'byte, 16', '2', 'JAVA', 3),
(26, 'Size of float and double in Java is ', '32 and 64', '32 and 32', '64 and 64', '64 and32', '1', 'JAVA', 3),
(27, 'Automatic type conversion in Java takes place when ', 'Two type are compatible.', 'size of destination type is equal of source type.', 'size of destination type is larger than source type.', ' All of the above', '3', 'JAVA', 3),
(28, 'Which of these keyword can be used in subclass to call the constructor of superclass?', 'super', 'this', 'extent', 'extends', '1', 'JAVA', 3),
(29, 'What is the process of defining a method in subclass having same name & type signature as a method in its superclass?', 'Method overloading', 'Method overriding', ' Method hiding', 'None of the mentioned', '2', 'JAVA', 3),
(30, 'Which of these keywords can be used to prevent Method overriding?', 'static', 'constant', 'protected', ' final', '4', 'JAVA', 3),
(31, 'You are developing a web application that is ', 'Use the output cache', ' Use a cache object', 'Use the ASP.NET central cache', 'Use the client cache', '2', '.NET', 4),
(32, 'What ASP.NET object encapsulates the state of the client and the browser?', 'Application Object', 'Session Object', 'Response Object', 'Request Object', '2', '.NET', 4),
(33, 'You need to store state data that is accessible to any user who connects to your Web application. Which object should you use?', 'Session', 'Application', 'Response.Cookies', ' Response.ViewState', '2', '.NET', 4),
(34, ' The controls can ___________________ their eventhandlers, allowing the main DataGrid event handler to take care of its constituents.', 'invoke event', 'raise event', 'bubble event', ' instantiate event', '3', '.NET', 4),
(35, '__________________ is the Microsoft IIS server running, handling ASP.NET requests among other things', 'aspnet_isapi.dll', 'aspnet_wp.exe', 'inetinfo.exe', ' None', '3', '.NET', 4),
(36, 'What namespace does the Web page belong in the .NET Framework class hierarchy?', 'System.Web.Control', 'System.Web.RootBuilder', 'System.Web.UserControl', 'System.Web.UI.Page', '4', '.NET', 4),
(37, 'Which one of the following is the fastest way to concat strings in ASP.NET?', 'Concat method of the String object', 'Append method of the StringBuilder object', 'Plus sign operator ', 'Substring method', '2', '.NET', 4),
(38, 'When does Garbage collector run?', 'When application is running low of memory', ' It runs random', 'When application is running for more than 15 minutes', 'None of the above', '1', '.NET', 4),
(39, 'Which one of the following is the type of assembly that contains localized resources?', 'Satellite', 'Shared', 'Unshared', 'localized', '1', '.NET', 4),
(40, '__________________ method(s) are used with Application object to ensure only one process accesses a variable at a time.', 'Synchronize', 'ThreadLock', 'Sychronize()', ' Lock() and UnLock()', '4', '.NET', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addq`
--
ALTER TABLE `addq`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addq`
--
ALTER TABLE `addq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
