-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2017 at 01:04 PM
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
(3, 1, 1, '2017-08-07 10:31:42');

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
(1, 'Which of these selection statements test only for equality?\r\n', 'if', 'switch', 'if & switch', 'None of the mentioned', 'b', 'switch statements checks for equality between the controlling variable and its constant cases.'),
(2, 'Which of these are selection statements in Java?', 'if()', 'for()', 'continue', 'break', 'a', 'continue and break are jump statements, and for is an looping statement.'),
(3, 'Which of the following loops will execute the body of loop even when condition controlling the loop is initially false?', 'do-while', 'while', 'for', 'None of the mentioned', 'a', 'None'),
(4, 'Which of these keyword can be used in subclass to call the constructor of superclass?', 'super', 'this', 'extent', 'extends', 'a', 'None'),
(5, 'Which of these is supported by method overriding in Java?', 'Abstraction', 'Encapsulation', 'Polymorphism', 'None of the mentioned', 'c', 'None'),
(6, 'class Abc<br>\n  {\n      public static void main(String[]args)\n      {\n          String[] elements = { \"for\", \"tea\", \"too\" };\n          String first = (elements.length > 0) ? elements[0]: null;\n      }\n  }', 'Compilation error', 'An exception is thrown at run time', 'The variable first is set to null', 'The variable first is set to elements[0].', 'd', 'The value at the 0th position will be assigned to the variable first.'),
(7, 'What is the output of this program?\n<br>\nclass A {\n        int i;\n        public void display() {\n            System.out.println(i);\n        }    \n    }    \n    class B extends A {\n        int j;\n        public void display() {\n            System.out.println(j);\n        } \n    }    \n    class Dynamic_dispatch {\n        public static void main(String args[])\n        {\n            B obj2 = new B();\n            obj2.i = 1;\n            obj2.j = 2;\n            A r;\n            r = obj2;\n            r.display();     \n        }\n   }', '1', '2', '3', '4', 'b', ' r is reference of type A, the program assigns a reference of object obj2 to r and uses that reference to call function display() of class B.\r\noutput:\r\n$ javac Dynamic_dispatch.java\r\n$ java Dynamic_dispatch\r\n2'),
(8, 'A class member declared protected becomes member of subclass of which type?', 'public member', 'private member', 'protected member', 'static member', 'b', 'A class member declared protected becomes private member of subclass.'),
(9, 'Which of these class can encapsulate an entire executing program?', 'Void', 'Process', 'Runtime', 'System', 'b', 'None'),
(10, 'What is the output of this program?\r\n\r\n    class Output {\r\n        public static void main(String args[]) {\r\n            byte a[] = { 65, 66, 67, 68, 69, 70 };\r\n            byte b[] = { 71, 72, 73, 74, 75, 76 };  \r\n            System.arraycopy(a, 2, b, 1, a.length-2);\r\n            System.out.print(new String(a) + \" \" + new String(b));\r\n        }\r\n    }', 'ABCDEF GHIJKL', 'ABCDEF GCDEFL', 'GHIJKL ABCDEF', 'GCDEFL GHIJKL', 'b', 'None');

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
(1, '', '', 1, 4, 0),
(2, 'b', '', 1, 2, 0),
(3, 'd', 'd', 1, 3, 0),
(4, 'a', 'a', 1, 3, 0),
(5, 'b', '', 1, 2, 0),
(6, '', '', 1, 4, 0),
(7, '', '0', 0, 1, 0),
(8, '', '0', 0, 1, 0),
(9, '', '0', 0, 1, 0),
(10, '', '', 1, 4, 0);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `rights` int(11) NOT NULL COMMENT '0- Admin 1-User',
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `name`, `username`, `password`, `rights`, `time`) VALUES
(1, 'Rakshit Bhat', 'admin', 'admin123', 0, '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `exams`
--
ALTER TABLE `exams`
  MODIFY `eid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `exams-given`
--
ALTER TABLE `exams-given`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `java`
--
ALTER TABLE `java`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `java1`
--
ALTER TABLE `java1`
  MODIFY `qno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
