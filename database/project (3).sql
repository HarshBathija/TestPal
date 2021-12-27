-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 11, 2017 at 06:51 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `cpp`
--

CREATE TABLE `cpp` (
  `id` int(11) NOT NULL,
  `question` text NOT NULL,
  `a` text NOT NULL,
  `b` text NOT NULL,
  `c` text NOT NULL,
  `d` text NOT NULL,
  `answer` varchar(10) NOT NULL,
  `explaination` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cpp`
--

INSERT INTO `cpp` (`id`, `question`, `a`, `b`, `c`, `d`, `answer`, `explaination`) VALUES
(1, '<p><span style=\"font-family: arial;\">Which of the following statement is correct?</span><br></p>', '<p><span style=\"font-family: arial;\">C++ enables to define functions that take constants as an argument.</span><br></p>', '<p><span style=\"font-family: arial;\">We cannot change the argument of the function that that are declared as constant.</span><br></p>', '<p><span style=\"font-family: arial;\">Both A and B.</span><br></p>', '<p><span style=\"font-family: arial;\">We cannot use the constant while defining the function.</span><br></p>', 'c', '<p><span style=\"font-family: arial;\">No answer description available for this question.</span><br></p>'),
(2, '<p><span style=\"font-family: arial;\">Which of the following statement is correct?</span><br></p>', '<p><span style=\"font-family: arial;\">Overloaded functions can have at most one default argument.</span><br></p>', '<p><span style=\"font-family: arial;\">An overloaded function cannot have default argument.</span><br></p>', '<p><span style=\"font-family: arial;\">All arguments of an overloaded function can be default.</span><br></p>', '<p><span style=\"font-family: arial;\">A function if overloaded more than once cannot have default argument.</span><br></p>', 'c', '<p><span style=\"font-family: arial;\">No answer description available for this question.</span><br></p>');

-- --------------------------------------------------------

--
-- Table structure for table `cpp1`
--

CREATE TABLE `cpp1` (
  `qno` int(11) NOT NULL,
  `answer` varchar(50) NOT NULL,
  `review` varchar(50) NOT NULL DEFAULT '0' COMMENT 'if 0 then review else answer for review ',
  `unvisited` int(11) NOT NULL DEFAULT '0' COMMENT 'if 0 then unvisited ',
  `flag` int(11) NOT NULL DEFAULT '1' COMMENT '1 - Unvisited  2 - Answered  3 - Review   4 - Not Answered',
  `result` int(11) NOT NULL DEFAULT '0' COMMENT '0 - incorrect 1 - correct'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `cpp1`
--

INSERT INTO `cpp1` (`qno`, `answer`, `review`, `unvisited`, `flag`, `result`) VALUES
(1, '', '0', 0, 1, 0),
(2, '', '0', 0, 1, 0),
(3, '', '0', 0, 1, 0),
(4, '', '0', 0, 1, 0),
(5, '', '0', 0, 1, 0),
(6, '', '0', 0, 1, 0),
(7, '', '0', 0, 1, 0),
(8, '', '0', 0, 1, 0),
(9, '', '0', 0, 1, 0),
(10, '', '0', 0, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `css`
--

CREATE TABLE `css` (
  `id` int(11) NOT NULL,
  `question` text NOT NULL,
  `a` text NOT NULL,
  `b` text NOT NULL,
  `c` text NOT NULL,
  `d` text NOT NULL,
  `answer` varchar(10) NOT NULL,
  `explaination` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `css`
--

INSERT INTO `css` (`id`, `question`, `a`, `b`, `c`, `d`, `answer`, `explaination`) VALUES
(1, '<p><span style=\"font-family: Verdana, Geneva, Tahoma, Arial, Helvetica, sans-serif; font-size: 15px; text-align: justify;\">Which of the following defines a measurement in inches?</span><br></p>', '<p>in</p>', '<p>mm</p>', '<p>pc</p>', '<p>pt</p>', 'a', '<p><span style=\"font-family: Verdana, Geneva, Tahoma, Arial, Helvetica, sans-serif; font-size: 15px; text-align: justify;\">in âˆ’ Defines a measurement in inches.</span><br></p>');

-- --------------------------------------------------------

--
-- Table structure for table `css1`
--

CREATE TABLE `css1` (
  `qno` int(11) NOT NULL,
  `answer` varchar(50) NOT NULL,
  `review` varchar(50) NOT NULL DEFAULT '0' COMMENT 'if 0 then review else answer for review ',
  `unvisited` int(11) NOT NULL DEFAULT '0' COMMENT 'if 0 then unvisited ',
  `flag` int(11) NOT NULL DEFAULT '1' COMMENT '1 - Unvisited  2 - Answered  3 - Review   4 - Not Answered',
  `result` int(11) NOT NULL DEFAULT '0' COMMENT '0 - incorrect 1 - correct'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `css1`
--

INSERT INTO `css1` (`qno`, `answer`, `review`, `unvisited`, `flag`, `result`) VALUES
(1, '', '', 1, 4, 0),
(2, '', '0', 0, 1, 0),
(3, '', '0', 0, 1, 0),
(4, '', '0', 0, 1, 0),
(5, '', '0', 0, 1, 0),
(6, '', '0', 0, 1, 0),
(7, '', '0', 0, 1, 0),
(8, '', '0', 0, 1, 0),
(9, '', '0', 0, 1, 0),
(10, '', '', 1, 4, 0);

-- --------------------------------------------------------

--
-- Table structure for table `exams`
--

CREATE TABLE `exams` (
  `eid` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exams`
--

INSERT INTO `exams` (`eid`, `name`, `image`, `link`) VALUES
(1, 'Java', 'Java.jpg', 'http://www.w3schools.in/java-tutorial/intro/'),
(2, 'C++', 'C++.png', 'http://www.w3schools.in/cplusplus-tutorial/intro/'),
(3, 'PHP', 'PHP.jpg', 'https://www.w3schools.com/php/'),
(4, 'Javascript', 'Javascript.jpg', 'https://www.w3schools.com/js/'),
(5, 'HTML5', 'HTML5.jpg', 'https://www.w3schools.com/html/html5_intro.asp'),
(6, 'CSS3', 'CSS3.jpg', 'https://www.w3schools.com/css/css3_intro.asp');

-- --------------------------------------------------------

--
-- Table structure for table `exams-given`
--

CREATE TABLE `exams-given` (
  `id` int(11) NOT NULL,
  `lid` int(11) NOT NULL COMMENT 'Login/User Id',
  `eid` int(11) NOT NULL COMMENT 'Exam ID',
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exams-given`
--

INSERT INTO `exams-given` (`id`, `lid`, `eid`, `time`) VALUES
(3, 1, 1, '2017-08-07 10:31:42'),
(6, 1, 2, '2017-09-09 20:43:16'),
(7, 1, 3, '2017-09-10 09:09:40'),
(8, 1, 4, '2017-09-10 09:23:44'),
(9, 1, 5, '2017-09-10 12:12:17'),
(10, 1, 6, '2017-09-10 12:14:52');

-- --------------------------------------------------------

--
-- Table structure for table `html`
--

CREATE TABLE `html` (
  `id` int(11) NOT NULL,
  `question` text NOT NULL,
  `a` text NOT NULL,
  `b` text NOT NULL,
  `c` text NOT NULL,
  `d` text NOT NULL,
  `answer` varchar(10) NOT NULL,
  `explaination` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `html`
--

INSERT INTO `html` (`id`, `question`, `a`, `b`, `c`, `d`, `answer`, `explaination`) VALUES
(1, '<p><span style=\"padding: 0px; margin: 0px; font-family: Helvetica, &quot;Open Sans&quot;, Arial, sans-serif, Verdana; font-size: 16px;\">The following elements &lt;header&gt;, &lt;footer&gt;, &lt;article&gt;, &lt;section&gt; are the new elements in HTML5. These elements are called</span><br></p>', '<p><span style=\"font-family: Helvetica, &quot;Open Sans&quot;, Arial, sans-serif, Verdana; font-size: 16px;\">Control attributes</span><br></p>', '<p><span style=\"font-family: Helvetica, &quot;Open Sans&quot;, Arial, sans-serif, Verdana; font-size: 16px;\">Semantic elements</span><br></p>', '<p><span style=\"font-family: Helvetica, &quot;Open Sans&quot;, Arial, sans-serif, Verdana; font-size: 16px;\">Graphic elements</span><br style=\"padding: 0px; margin: 0px; font-family: Helvetica, &quot;Open Sans&quot;, Arial, sans-serif, Verdana; font-size: 16px;\"><br></p>', '<p><span style=\"font-family: Helvetica, &quot;Open Sans&quot;, Arial, sans-serif, Verdana; font-size: 16px;\">Multimedia elements</span><br></p>', 'b', '<p>None</p>'),
(2, '<p><span style=\"padding: 0px; margin: 0px; font-family: Helvetica, &quot;Open Sans&quot;, Arial, sans-serif, Verdana; font-size: 16px;\">Which among the following browsers does the HTML5 supports?</span><br></p>', '<p><span style=\"font-family: Helvetica, &quot;Open Sans&quot;, Arial, sans-serif, Verdana; font-size: 16px;\">Safari</span><br></p>', '<p><span style=\"font-family: Helvetica, &quot;Open Sans&quot;, Arial, sans-serif, Verdana; font-size: 16px;\">Firefox</span><br style=\"padding: 0px; margin: 0px; font-family: Helvetica, &quot;Open Sans&quot;, Arial, sans-serif, Verdana; font-size: 16px;\"><br></p>', '<p><span style=\"font-family: Helvetica, &quot;Open Sans&quot;, Arial, sans-serif, Verdana; font-size: 16px;\">Internet Explorer</span><br></p>', '<p><span style=\"font-family: Helvetica, &quot;Open Sans&quot;, Arial, sans-serif, Verdana; font-size: 16px;\">All the mentioned above</span><br></p>', 'd', '<p>None</p>');

-- --------------------------------------------------------

--
-- Table structure for table `html1`
--

CREATE TABLE `html1` (
  `qno` int(11) NOT NULL,
  `answer` varchar(50) NOT NULL,
  `review` varchar(50) NOT NULL DEFAULT '0' COMMENT 'if 0 then review else answer for review ',
  `unvisited` int(11) NOT NULL DEFAULT '0' COMMENT 'if 0 then unvisited ',
  `flag` int(11) NOT NULL DEFAULT '1' COMMENT '1 - Unvisited  2 - Answered  3 - Review   4 - Not Answered',
  `result` int(11) NOT NULL DEFAULT '0' COMMENT '0 - incorrect 1 - correct'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `html1`
--

INSERT INTO `html1` (`qno`, `answer`, `review`, `unvisited`, `flag`, `result`) VALUES
(1, 'c', '', 1, 2, 0),
(2, 'd', '', 1, 2, 0),
(3, '', '0', 0, 1, 0),
(4, '', '0', 0, 1, 0),
(5, '', '0', 0, 1, 0),
(6, '', '0', 0, 1, 0),
(7, '', '0', 0, 1, 0),
(8, '', '0', 0, 1, 0),
(9, '', '0', 0, 1, 0),
(10, '', '', 1, 4, 0);

-- --------------------------------------------------------

--
-- Table structure for table `java`
--

CREATE TABLE `java` (
  `id` int(11) NOT NULL,
  `question` text NOT NULL,
  `a` text NOT NULL,
  `b` text NOT NULL,
  `c` text NOT NULL,
  `d` text NOT NULL,
  `answer` varchar(10) NOT NULL,
  `explaination` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `java`
--

INSERT INTO `java` (`id`, `question`, `a`, `b`, `c`, `d`, `answer`, `explaination`) VALUES
(1, 'Which of these selection statements test only for equality?\n', 'if', 'switch', 'if &amp; switch', 'None of the mentioned', 'b', 'switch statements checks for equality between the controlling variable and its constant cases.'),
(2, 'Which of these are selection statements in Java?', 'if()', 'for()', 'continue', 'break', 'a', 'continue and break are jump statements, and for is an looping statement.'),
(3, 'Which of the following loops will execute the body of loop even when condition controlling the loop is initially false?', 'do-while', 'while', 'for', 'None of the mentioned', 'a', 'None'),
(4, 'Which of these keyword can be used in subclass to call the constructor of superclass?', 'super', 'this', 'extent', 'extends', 'a', 'None'),
(5, 'Which of these is supported by method overriding in Java?', 'Abstraction', 'Encapsulation', 'Polymorphism', 'None of the mentioned', 'c', 'None'),
(6, '<p>class Abc<br>\n  {\n</p><p>      &nbsp;&nbsp;&nbsp;&nbsp;public static void main(String[]args)\n</p><p>&nbsp;&nbsp;&nbsp;&nbsp;      {\n</p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;String[] elements = { \"for\", \"tea\", \"too\" };\n</p><p>&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;String first = (elements.length &gt; 0) ? elements[0]: null;\n</p><p>      &nbsp; &nbsp; &nbsp;}\n</p><p>  }</p>', 'Compilation error', 'An exception is thrown at run time', 'The variable first is set to null', 'The variable first is set to elements[0].', 'd', 'The value at the 0th position will be assigned to the variable first.'),
(7, '<p>What is the output of this program?\n</p><p><br>\nclass A </p><p>{</p><p>&nbsp;&nbsp;&nbsp;&nbsp;int i;\n</p><p>&nbsp;&nbsp;&nbsp;&nbsp;public void display() </p><p>&nbsp;&nbsp;&nbsp;&nbsp;{</p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;System.out.println(i);\n</p><p>&nbsp;&nbsp;&nbsp;&nbsp;        } </p><p>   \n    } </p><p>   \n    class B extends A </p><p>{\n</p><p>&nbsp;&nbsp;&nbsp;&nbsp;        int j;\n</p><p>        &nbsp;&nbsp;&nbsp;&nbsp;public void display() </p><p>&nbsp;&nbsp;&nbsp;&nbsp;{</p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;System.out.println(j);\n</p><p>        &nbsp;&nbsp;&nbsp;&nbsp;} </p><p>\n    } </p><p>   \n    class Dynamic_dispatch </p><p>{\n</p><p>        &nbsp;&nbsp;&nbsp;&nbsp;public static void main(String args[])\n</p><p>        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{\n</p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;            B obj2 = new B();\n</p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;            obj2.i = 1;\n</p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;            obj2.j = 2;\n</p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;            A r;\n</p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;            r = obj2;\n</p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;            r.display(); </p><p>&nbsp;&nbsp;&nbsp;&nbsp;    \n        }\n</p><p>   }</p>', '1', '2', '3', '4', 'b', '<p> r is reference of type A, </p><p>the program assigns a reference of object </p><p>obj2 to r and uses that reference to call function display() of class B.</p><p>\noutput:\n</p><p>$ javac Dynamic_dispatch.java\n</p><p>$ java Dynamic_dispatch\n2</p>'),
(8, 'A class member declared protected becomes member of subclass of which type?', 'public member', 'private member', 'protected member', 'static member', 'b', 'A class member declared protected becomes private member of subclass.'),
(9, 'Which of these class can encapsulate an entire executing program?', 'Void', 'Process', 'Runtime', 'System', 'b', 'None'),
(10, '<p>What is the output of this program?\n</p><p>\n    class Output </p><p>{\n</p><p>        public static void main(String args[]) </p><p>&nbsp;&nbsp;&nbsp;&nbsp;{\n</p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;            byte a[] = { 65, 66, 67, 68, 69, 70 };\n</p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;            byte b[] = { 71, 72, 73, 74, 75, 76 }; </p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; \n            System.arraycopy(a, 2, b, 1, a.length-2);\n</p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;            System.out.print(new String(a) + \" \" + new String(b));\n</p><p>        &nbsp;&nbsp;&nbsp;&nbsp;}\n</p><p>    }</p>', 'ABCDEF GHIJKL', 'ABCDEF GCDEFL', 'GHIJKL ABCDEF', 'GCDEFL GHIJKL', 'b', 'None');

-- --------------------------------------------------------

--
-- Table structure for table `java1`
--

CREATE TABLE `java1` (
  `qno` int(11) NOT NULL,
  `answer` varchar(50) NOT NULL,
  `review` varchar(50) NOT NULL DEFAULT '0' COMMENT 'if 0 then review else answer for review ',
  `unvisited` int(11) NOT NULL DEFAULT '0' COMMENT 'if 0 then unvisited ',
  `flag` int(11) NOT NULL DEFAULT '1' COMMENT '1 - Unvisited  2 - Answered  3 - Review   4 - Not Answered',
  `result` int(11) NOT NULL DEFAULT '0' COMMENT '0 - incorrect 1 - correct'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `java1`
--

INSERT INTO `java1` (`qno`, `answer`, `review`, `unvisited`, `flag`, `result`) VALUES
(1, '', '0', 0, 1, 0),
(2, '', '0', 0, 1, 0),
(3, '', '0', 0, 1, 0),
(4, '', '0', 0, 1, 0),
(5, '', '0', 0, 1, 0),
(6, '', '0', 0, 1, 0),
(7, '', '0', 0, 1, 0),
(8, '', '0', 0, 1, 0),
(9, '', '0', 0, 1, 0),
(10, '', '0', 0, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `javascript`
--

CREATE TABLE `javascript` (
  `id` int(11) NOT NULL,
  `question` text NOT NULL,
  `a` text NOT NULL,
  `b` text NOT NULL,
  `c` text NOT NULL,
  `d` text NOT NULL,
  `answer` varchar(10) NOT NULL,
  `explaination` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `javascript`
--

INSERT INTO `javascript` (`id`, `question`, `a`, `b`, `c`, `d`, `answer`, `explaination`) VALUES
(1, '<span style=\"color: rgb(85, 85, 85); font-family: Arial, Helvetica, sans-serif; text-align: justify; background-color: rgb(253, 253, 253);\">What is the observation made?</span><br>', '<span style=\"color: rgb(85, 85, 85); font-family: Arial, Helvetica, sans-serif; text-align: justify; background-color: rgb(253, 253, 253);\">The omitted value takes â€œundefinedâ€</span><br>', '<span style=\"color: rgb(85, 85, 85); font-family: Arial, Helvetica, sans-serif; text-align: justify; background-color: rgb(253, 253, 253);\">This results in an error</span><br style=\"color: rgb(85, 85, 85); font-family: Arial, Helvetica, sans-serif; text-align: justify; background-color: rgb(253, 253, 253);\"><br>', '<span style=\"color: rgb(85, 85, 85); font-family: Arial, Helvetica, sans-serif; text-align: justify; background-color: rgb(253, 253, 253);\">This results in an exception</span><br style=\"color: rgb(85, 85, 85); font-family: Arial, Helvetica, sans-serif; text-align: justify; background-color: rgb(253, 253, 253);\"><br>', '<span style=\"color: rgb(85, 85, 85); font-family: Arial, Helvetica, sans-serif; text-align: justify; background-color: rgb(253, 253, 253);\">None of the mentioned</span><br>', 'a', '<span style=\"color: rgb(85, 85, 85); font-family: Arial, Helvetica, sans-serif; text-align: justify; background-color: rgb(253, 253, 253);\">If you omit a value from an array literal, the omitted element is given the value.</span><br>');

-- --------------------------------------------------------

--
-- Table structure for table `javascript1`
--

CREATE TABLE `javascript1` (
  `qno` int(11) NOT NULL,
  `answer` varchar(50) NOT NULL,
  `review` varchar(50) NOT NULL DEFAULT '0' COMMENT 'if 0 then review else answer for review ',
  `unvisited` int(11) NOT NULL DEFAULT '0' COMMENT 'if 0 then unvisited ',
  `flag` int(11) NOT NULL DEFAULT '1' COMMENT '1 - Unvisited  2 - Answered  3 - Review   4 - Not Answered',
  `result` int(11) NOT NULL DEFAULT '0' COMMENT '0 - incorrect 1 - correct'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `javascript1`
--

INSERT INTO `javascript1` (`qno`, `answer`, `review`, `unvisited`, `flag`, `result`) VALUES
(1, '', '0', 0, 1, 0),
(2, '', '0', 0, 1, 0),
(3, '', '0', 0, 1, 0),
(4, '', '0', 0, 1, 0),
(5, '', '0', 0, 1, 0),
(6, '', '0', 0, 1, 0),
(7, '', '0', 0, 1, 0),
(8, '', '0', 0, 1, 0),
(9, '', '0', 0, 1, 0),
(10, '', '0', 0, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `rights` int(11) NOT NULL COMMENT '0- Admin 1-User',
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `email`, `name`, `username`, `password`, `rights`, `time`) VALUES
(1, 'rrrssb1@gmail.com', 'Rakshit Bhat', 'admin', 'admin123', 0, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `php`
--

CREATE TABLE `php` (
  `id` int(11) NOT NULL,
  `question` text NOT NULL,
  `a` text NOT NULL,
  `b` text NOT NULL,
  `c` text NOT NULL,
  `d` text NOT NULL,
  `answer` varchar(10) NOT NULL,
  `explaination` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `php`
--

INSERT INTO `php` (`id`, `question`, `a`, `b`, `c`, `d`, `answer`, `explaination`) VALUES
(1, '<p><span style=\"color: rgb(85, 85, 85); font-family: Arial, Helvetica, sans-serif; text-align: justify; background-color: rgb(253, 253, 253);\">Type Hinting was introduced in which version of PHP?</span><br></p>', '<p><span style=\"color: rgb(85, 85, 85); font-family: Arial, Helvetica, sans-serif; text-align: justify; background-color: rgb(253, 253, 253);\">PHP 4</span><br></p>', '<p><span style=\"color: rgb(85, 85, 85); font-family: Arial, Helvetica, sans-serif; text-align: justify; background-color: rgb(253, 253, 253);\">PHP 5</span><br></p>', '<p><span style=\"color: rgb(85, 85, 85); font-family: Arial, Helvetica, sans-serif; text-align: justify; background-color: rgb(253, 253, 253);\">PHP 5.3</span><br></p>', '<p><span style=\"color: rgb(85, 85, 85); font-family: Arial, Helvetica, sans-serif; text-align: justify; background-color: rgb(253, 253, 253);\">PHP 6</span><br></p>', 'b', '<p><span style=\"color: rgb(85, 85, 85); font-family: Arial, Helvetica, sans-serif; text-align: justify; background-color: rgb(253, 253, 253);\">Type hinting gives you the ability to force parameters to be objects of certain class or to be arrays. PHP 5 introduced this feature.</span><br></p>'),
(2, '<ol style=\"list-style-position: inside; color: rgb(85, 85, 85); font-family: monospace; text-align: justify; background-color: rgb(244, 244, 244); margin-right: 0px !important; margin-bottom: 0px !important; margin-left: 0px !important; padding: 0px !important;\"><li class=\"li1\" style=\"line-height: 20px; vertical-align: top; padding-left: 2px; font-size: 12px; position: relative; margin: 0px 0px 0px 20px; list-style: decimal !important;\"><pre class=\"de1\" style=\"border-radius: 0px; padding: 0px; font-family: Consolas, Monaco, &quot;Lucida Console&quot;, monospace; word-wrap: normal; background: rgb(244, 244, 244); border-width: 0px; border-style: initial; border-color: initial; overflow: visible; box-shadow: none; margin-bottom: 0px !important; font-size: 12px !important; line-height: 20px !important;\"><span class=\"kw2\" style=\"overflow: visible; padding: 0px; border: 0px; box-shadow: none; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; word-wrap: normal; color: rgb(0, 0, 0); font-weight: bold; margin: 0px !important; line-height: 20px !important;\">&lt;?php</span></pre></li><li class=\"li1\" style=\"line-height: 20px; vertical-align: top; padding-left: 2px; font-size: 12px; position: relative; margin: 0px 0px 0px 20px; list-style: decimal !important;\"><pre class=\"de1\" style=\"border-radius: 0px; padding: 0px; font-family: Consolas, Monaco, &quot;Lucida Console&quot;, monospace; word-wrap: normal; background: rgb(244, 244, 244); border-width: 0px; border-style: initial; border-color: initial; overflow: visible; box-shadow: none; margin-bottom: 0px !important; font-size: 12px !important; line-height: 20px !important;\">    <span class=\"kw2\" style=\"overflow: visible; padding: 0px; border: 0px; box-shadow: none; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; word-wrap: normal; color: rgb(0, 0, 0); font-weight: bold; margin: 0px !important; line-height: 20px !important;\">function</span> calc<span class=\"br0\" style=\"overflow: visible; padding: 0px; border: 0px; box-shadow: none; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; word-wrap: normal; color: rgb(0, 153, 0); margin: 0px !important; line-height: 20px !important;\">(</span><span class=\"re0\" style=\"overflow: visible; padding: 0px; border: 0px; box-shadow: none; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; word-wrap: normal; color: rgb(0, 0, 136); margin: 0px !important; line-height: 20px !important;\">$price</span><span class=\"sy0\" style=\"overflow: visible; padding: 0px; border: 0px; box-shadow: none; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; word-wrap: normal; color: rgb(51, 153, 51); margin: 0px !important; line-height: 20px !important;\">,</span> <span class=\"re0\" style=\"overflow: visible; padding: 0px; border: 0px; box-shadow: none; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; word-wrap: normal; color: rgb(0, 0, 136); margin: 0px !important; line-height: 20px !important;\">$tax</span><span class=\"br0\" style=\"overflow: visible; padding: 0px; border: 0px; box-shadow: none; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; word-wrap: normal; color: rgb(0, 153, 0); margin: 0px !important; line-height: 20px !important;\">)</span>	</pre></li><li class=\"li1\" style=\"line-height: 20px; vertical-align: top; padding-left: 2px; font-size: 12px; position: relative; margin: 0px 0px 0px 20px; list-style: decimal !important;\"><pre class=\"de1\" style=\"border-radius: 0px; padding: 0px; font-family: Consolas, Monaco, &quot;Lucida Console&quot;, monospace; word-wrap: normal; background: rgb(244, 244, 244); border-width: 0px; border-style: initial; border-color: initial; overflow: visible; box-shadow: none; margin-bottom: 0px !important; font-size: 12px !important; line-height: 20px !important;\">    <span class=\"br0\" style=\"overflow: visible; padding: 0px; border: 0px; box-shadow: none; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; word-wrap: normal; color: rgb(0, 153, 0); margin: 0px !important; line-height: 20px !important;\">{</span></pre></li><li class=\"li1\" style=\"line-height: 20px; vertical-align: top; padding-left: 2px; font-size: 12px; position: relative; margin: 0px 0px 0px 20px; list-style: decimal !important;\"><pre class=\"de1\" style=\"border-radius: 0px; padding: 0px; font-family: Consolas, Monaco, &quot;Lucida Console&quot;, monospace; word-wrap: normal; background: rgb(244, 244, 244); border-width: 0px; border-style: initial; border-color: initial; overflow: visible; box-shadow: none; margin-bottom: 0px !important; font-size: 12px !important; line-height: 20px !important;\">        <span class=\"re0\" style=\"overflow: visible; padding: 0px; border: 0px; box-shadow: none; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; word-wrap: normal; color: rgb(0, 0, 136); margin: 0px !important; line-height: 20px !important;\">$total</span> <span class=\"sy0\" style=\"overflow: visible; padding: 0px; border: 0px; box-shadow: none; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; word-wrap: normal; color: rgb(51, 153, 51); margin: 0px !important; line-height: 20px !important;\">=</span> <span class=\"re0\" style=\"overflow: visible; padding: 0px; border: 0px; box-shadow: none; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; word-wrap: normal; color: rgb(0, 0, 136); margin: 0px !important; line-height: 20px !important;\">$price</span> <span class=\"sy0\" style=\"overflow: visible; padding: 0px; border: 0px; box-shadow: none; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; word-wrap: normal; color: rgb(51, 153, 51); margin: 0px !important; line-height: 20px !important;\">+</span> <span class=\"re0\" style=\"overflow: visible; padding: 0px; border: 0px; box-shadow: none; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; word-wrap: normal; color: rgb(0, 0, 136); margin: 0px !important; line-height: 20px !important;\">$tax</span><span class=\"sy0\" style=\"overflow: visible; padding: 0px; border: 0px; box-shadow: none; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; word-wrap: normal; color: rgb(51, 153, 51); margin: 0px !important; line-height: 20px !important;\">;</span></pre></li><li class=\"li1\" style=\"line-height: 20px; vertical-align: top; padding-left: 2px; font-size: 12px; position: relative; margin: 0px 0px 0px 20px; list-style: decimal !important;\"><pre class=\"de1\" style=\"border-radius: 0px; padding: 0px; font-family: Consolas, Monaco, &quot;Lucida Console&quot;, monospace; word-wrap: normal; background: rgb(244, 244, 244); border-width: 0px; border-style: initial; border-color: initial; overflow: visible; box-shadow: none; margin-bottom: 0px !important; font-size: 12px !important; line-height: 20px !important;\">    <span class=\"br0\" style=\"overflow: visible; padding: 0px; border: 0px; box-shadow: none; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; word-wrap: normal; color: rgb(0, 153, 0); margin: 0px !important; line-height: 20px !important;\">}</span></pre></li><li class=\"li1\" style=\"line-height: 20px; vertical-align: top; padding-left: 2px; font-size: 12px; position: relative; margin: 0px 0px 0px 20px; list-style: decimal !important;\"><pre class=\"de1\" style=\"border-radius: 0px; padding: 0px; font-family: Consolas, Monaco, &quot;Lucida Console&quot;, monospace; word-wrap: normal; background: rgb(244, 244, 244); border-width: 0px; border-style: initial; border-color: initial; overflow: visible; box-shadow: none; margin-bottom: 0px !important; font-size: 12px !important; line-height: 20px !important;\">    <span class=\"re0\" style=\"overflow: visible; padding: 0px; border: 0px; box-shadow: none; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; word-wrap: normal; color: rgb(0, 0, 136); margin: 0px !important; line-height: 20px !important;\">$pricetag</span> <span class=\"sy0\" style=\"overflow: visible; padding: 0px; border: 0px; box-shadow: none; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; word-wrap: normal; color: rgb(51, 153, 51); margin: 0px !important; line-height: 20px !important;\">=</span> <span class=\"nu0\" style=\"overflow: visible; padding: 0px; border: 0px; box-shadow: none; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; word-wrap: normal; color: rgb(204, 102, 204); margin: 0px !important; line-height: 20px !important;\">15</span><span class=\"sy0\" style=\"overflow: visible; padding: 0px; border: 0px; box-shadow: none; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; word-wrap: normal; color: rgb(51, 153, 51); margin: 0px !important; line-height: 20px !important;\">;</span></pre></li><li class=\"li1\" style=\"line-height: 20px; vertical-align: top; padding-left: 2px; font-size: 12px; position: relative; margin: 0px 0px 0px 20px; list-style: decimal !important;\"><pre class=\"de1\" style=\"border-radius: 0px; padding: 0px; font-family: Consolas, Monaco, &quot;Lucida Console&quot;, monospace; word-wrap: normal; background: rgb(244, 244, 244); border-width: 0px; border-style: initial; border-color: initial; overflow: visible; box-shadow: none; margin-bottom: 0px !important; font-size: 12px !important; line-height: 20px !important;\">    <span class=\"re0\" style=\"overflow: visible; padding: 0px; border: 0px; box-shadow: none; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; word-wrap: normal; color: rgb(0, 0, 136); margin: 0px !important; line-height: 20px !important;\">$taxtag</span> <span class=\"sy0\" style=\"overflow: visible; padding: 0px; border: 0px; box-shadow: none; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; word-wrap: normal; color: rgb(51, 153, 51); margin: 0px !important; line-height: 20px !important;\">=</span> <span class=\"nu0\" style=\"overflow: visible; padding: 0px; border: 0px; box-shadow: none; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; word-wrap: normal; color: rgb(204, 102, 204); margin: 0px !important; line-height: 20px !important;\">3</span><span class=\"sy0\" style=\"overflow: visible; padding: 0px; border: 0px; box-shadow: none; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; word-wrap: normal; color: rgb(51, 153, 51); margin: 0px !important; line-height: 20px !important;\">;</span></pre></li><li class=\"li1\" style=\"line-height: 20px; vertical-align: top; padding-left: 2px; font-size: 12px; position: relative; margin: 0px 0px 0px 20px; list-style: decimal !important;\"><pre class=\"de1\" style=\"border-radius: 0px; padding: 0px; font-family: Consolas, Monaco, &quot;Lucida Console&quot;, monospace; word-wrap: normal; background: rgb(244, 244, 244); border-width: 0px; border-style: initial; border-color: initial; overflow: visible; box-shadow: none; margin-bottom: 0px !important; font-size: 12px !important; line-height: 20px !important;\">    calc<span class=\"br0\" style=\"overflow: visible; padding: 0px; border: 0px; box-shadow: none; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; word-wrap: normal; color: rgb(0, 153, 0); margin: 0px !important; line-height: 20px !important;\">(</span><span class=\"re0\" style=\"overflow: visible; padding: 0px; border: 0px; box-shadow: none; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; word-wrap: normal; color: rgb(0, 0, 136); margin: 0px !important; line-height: 20px !important;\">$pricetag</span><span class=\"sy0\" style=\"overflow: visible; padding: 0px; border: 0px; box-shadow: none; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; word-wrap: normal; color: rgb(51, 153, 51); margin: 0px !important; line-height: 20px !important;\">,</span> <span class=\"re0\" style=\"overflow: visible; padding: 0px; border: 0px; box-shadow: none; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; word-wrap: normal; color: rgb(0, 0, 136); margin: 0px !important; line-height: 20px !important;\">$taxtag</span><span class=\"br0\" style=\"overflow: visible; padding: 0px; border: 0px; box-shadow: none; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; word-wrap: normal; color: rgb(0, 153, 0); margin: 0px !important; line-height: 20px !important;\">)</span><span class=\"sy0\" style=\"overflow: visible; padding: 0px; border: 0px; box-shadow: none; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; word-wrap: normal; color: rgb(51, 153, 51); margin: 0px !important; line-height: 20px !important;\">;</span>	</pre></li><li class=\"li1\" style=\"line-height: 20px; vertical-align: top; padding-left: 2px; font-size: 12px; position: relative; margin: 0px 0px 0px 20px; list-style: decimal !important;\"><pre class=\"de1\" style=\"border-radius: 0px; padding: 0px; font-family: Consolas, Monaco, &quot;Lucida Console&quot;, monospace; word-wrap: normal; background: rgb(244, 244, 244); border-width: 0px; border-style: initial; border-color: initial; overflow: visible; box-shadow: none; margin-bottom: 0px !important; font-size: 12px !important; line-height: 20px !important;\">    <span class=\"sy1\" style=\"overflow: visible; padding: 0px; border: 0px; box-shadow: none; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; word-wrap: normal; color: rgb(0, 0, 0); font-weight: bold; margin: 0px !important; line-height: 20px !important;\">?&gt;</span></pre></li></ol>', '<p><span style=\"color: rgb(85, 85, 85); font-family: Arial, Helvetica, sans-serif; text-align: justify; background-color: rgb(253, 253, 253);\">Call By Value</span><br></p>', '<p><span style=\"color: rgb(85, 85, 85); font-family: Arial, Helvetica, sans-serif; text-align: justify; background-color: rgb(253, 253, 253);\">Call By Reference</span><br></p>', '<p><span style=\"color: rgb(85, 85, 85); font-family: Arial, Helvetica, sans-serif; text-align: justify; background-color: rgb(253, 253, 253);\">Default Argument Value</span><br></p>', '<p><span style=\"color: rgb(85, 85, 85); font-family: Arial, Helvetica, sans-serif; text-align: justify; background-color: rgb(253, 253, 253);\">Type Hinting</span><br></p>', 'a', '<p><span style=\"color: rgb(85, 85, 85); font-family: Arial, Helvetica, sans-serif; text-align: justify; background-color: rgb(253, 253, 253);\">When you pass an argument in the above manner or say we pass 15 and 3 directly, it is called passing by value or call by value.</span><br></p>'),
(3, '<p><span style=\"color: rgb(85, 85, 85); font-family: Arial, Helvetica, sans-serif; text-align: justify; background-color: rgb(253, 253, 253);\">Which two predefined variables are used to retrieve information from forms?</span><br></p>', '<p><span style=\"color: rgb(85, 85, 85); font-family: Arial, Helvetica, sans-serif; text-align: justify; background-color: rgb(253, 253, 253);\">$GET &amp; $SET</span><br></p>', '<p><span style=\"color: rgb(85, 85, 85); font-family: Arial, Helvetica, sans-serif; text-align: justify; background-color: rgb(253, 253, 253);\">$_GET &amp; $_SET</span><br></p>', '<p><span style=\"color: rgb(85, 85, 85); font-family: Arial, Helvetica, sans-serif; text-align: justify; background-color: rgb(253, 253, 253);\">$__GET &amp; $__SET</span><br></p>', '<p><span style=\"color: rgb(85, 85, 85); font-family: Arial, Helvetica, sans-serif; text-align: justify; background-color: rgb(253, 253, 253);\">GET &amp; SET</span><br></p>', 'b', '<p><span style=\"color: rgb(85, 85, 85); font-family: Arial, Helvetica, sans-serif; text-align: justify; background-color: rgb(253, 253, 253);\">None</span><br></p>');

-- --------------------------------------------------------

--
-- Table structure for table `php1`
--

CREATE TABLE `php1` (
  `qno` int(11) NOT NULL,
  `answer` varchar(50) NOT NULL,
  `review` varchar(50) NOT NULL DEFAULT '0' COMMENT 'if 0 then review else answer for review ',
  `unvisited` int(11) NOT NULL DEFAULT '0' COMMENT 'if 0 then unvisited ',
  `flag` int(11) NOT NULL DEFAULT '1' COMMENT '1 - Unvisited  2 - Answered  3 - Review   4 - Not Answered',
  `result` int(11) NOT NULL DEFAULT '0' COMMENT '0 - incorrect 1 - correct'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `php1`
--

INSERT INTO `php1` (`qno`, `answer`, `review`, `unvisited`, `flag`, `result`) VALUES
(1, '', '', 1, 4, 0),
(2, '', '', 1, 4, 0),
(3, '', '', 1, 4, 0),
(4, '', '0', 0, 1, 0),
(5, '', '0', 0, 1, 0),
(6, '', '0', 0, 1, 0),
(7, '', '0', 0, 1, 0),
(8, '', '0', 0, 1, 0),
(9, '', '0', 0, 1, 0),
(10, '', '', 1, 4, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cpp`
--
ALTER TABLE `cpp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cpp1`
--
ALTER TABLE `cpp1`
  ADD PRIMARY KEY (`qno`);

--
-- Indexes for table `css`
--
ALTER TABLE `css`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `css1`
--
ALTER TABLE `css1`
  ADD PRIMARY KEY (`qno`);

--
-- Indexes for table `exams`
--
ALTER TABLE `exams`
  ADD PRIMARY KEY (`eid`);

--
-- Indexes for table `exams-given`
--
ALTER TABLE `exams-given`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `html`
--
ALTER TABLE `html`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `html1`
--
ALTER TABLE `html1`
  ADD PRIMARY KEY (`qno`);

--
-- Indexes for table `java`
--
ALTER TABLE `java`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `java1`
--
ALTER TABLE `java1`
  ADD PRIMARY KEY (`qno`);

--
-- Indexes for table `javascript`
--
ALTER TABLE `javascript`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `javascript1`
--
ALTER TABLE `javascript1`
  ADD PRIMARY KEY (`qno`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `php`
--
ALTER TABLE `php`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `php1`
--
ALTER TABLE `php1`
  ADD PRIMARY KEY (`qno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cpp`
--
ALTER TABLE `cpp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `cpp1`
--
ALTER TABLE `cpp1`
  MODIFY `qno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `css`
--
ALTER TABLE `css`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `css1`
--
ALTER TABLE `css1`
  MODIFY `qno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `exams`
--
ALTER TABLE `exams`
  MODIFY `eid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `exams-given`
--
ALTER TABLE `exams-given`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `html`
--
ALTER TABLE `html`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `html1`
--
ALTER TABLE `html1`
  MODIFY `qno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `java`
--
ALTER TABLE `java`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `java1`
--
ALTER TABLE `java1`
  MODIFY `qno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `javascript`
--
ALTER TABLE `javascript`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `javascript1`
--
ALTER TABLE `javascript1`
  MODIFY `qno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `php`
--
ALTER TABLE `php`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `php1`
--
ALTER TABLE `php1`
  MODIFY `qno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
