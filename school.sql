-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2023 at 04:39 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `name_admin` varchar(40) NOT NULL,
  `dt` date NOT NULL,
  `gender` varchar(6) NOT NULL,
  `rank` tinyint(4) NOT NULL DEFAULT 0,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name_admin`, `dt`, `gender`, `rank`, `password`, `email`, `image`) VALUES
(5, 'Ahmed', '2023-01-16', 'male', 1, 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', 'mo@yahoo.com', ''),
(9, 'Mohamed saleh Abdalleh essa', '2023-02-22', 'Male', 0, 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', 'mohamed.oka646@yahoo.com', 'vince-fleming-_THUISs23CI-unsplash.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `id` int(11) NOT NULL,
  `test_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `answer` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`id`, `test_id`, `student_id`, `question_id`, `answer`) VALUES
(2, 2, 2, 3, 'A'),
(3, 2, 2, 4, 'A'),
(4, 3, 3, 4, 'A');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `name_book` varchar(20) NOT NULL,
  `pdf` varchar(500) NOT NULL,
  `grade_id` int(11) NOT NULL,
  `classroom_id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `name_book`, `pdf`, `grade_id`, `classroom_id`, `teacher_id`) VALUES
(17, 'Php', '6240_PHP_ Learn PHP in 24 Hours or Less - A Beginner\'s Guide To Learning PHP Programming Now ( PDFDrive ).pdf', 3, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `classrooms`
--

CREATE TABLE `classrooms` (
  `id` int(11) NOT NULL,
  `classroom` varchar(255) NOT NULL,
  `grade_id` int(11) NOT NULL,
  `dt` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `classrooms`
--

INSERT INTO `classrooms` (`id`, `classroom`, `grade_id`, `dt`) VALUES
(2, 'class One Primary', 3, '2023-01-13'),
(3, 'class Two Primary', 3, '0000-00-00'),
(4, 'classThree Primary', 3, '0000-00-00'),
(5, 'class One', 4, '2023-02-01');

-- --------------------------------------------------------

--
-- Table structure for table `grades`
--

CREATE TABLE `grades` (
  `id` int(11) NOT NULL,
  `grade` varchar(255) NOT NULL,
  `dt` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `grades`
--

INSERT INTO `grades` (`id`, `grade`, `dt`) VALUES
(3, 'Primary stage', '2023-01-09'),
(4, 'Preparatory stage 2', '2023-02-01'),
(8, 'Preparatory stage 1', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

CREATE TABLE `marks` (
  `id` int(11) NOT NULL,
  `test_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `mark` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `marks`
--

INSERT INTO `marks` (`id`, `test_id`, `student_id`, `mark`) VALUES
(1, 2, 2, '3'),
(2, 2, 3, '0');

-- --------------------------------------------------------

--
-- Table structure for table `myparents`
--

CREATE TABLE `myparents` (
  `id` int(11) NOT NULL,
  `name_parent` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `student_id` int(11) NOT NULL,
  `ssn` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `test_id` int(11) NOT NULL,
  `question` text NOT NULL,
  `point` varchar(255) NOT NULL,
  `dt` date NOT NULL,
  `correct_answer` varchar(255) NOT NULL,
  `choices` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `test_id`, `question`, `point`, `dt`, `correct_answer`, `choices`) VALUES
(3, 2, 'What do you know Java', '1', '2023-02-15', 'B', '{\"A\":\"s\"}'),
(4, 2, 'What do you know Css', '1', '2023-03-03', 'A', '{\"A\":\"12\",\"B\":\"s\"}'),
(5, 3, 'What do You know program', '1', '2023-02-21', 'A', '{\"A\":\"Program Big area\",\"B\":\"Program small area\"}');

-- --------------------------------------------------------

--
-- Table structure for table `schools`
--

CREATE TABLE `schools` (
  `id` int(11) NOT NULL,
  `school` varchar(30) NOT NULL,
  `dt` date NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `facebook` varchar(500) NOT NULL,
  `instagram` varchar(500) NOT NULL,
  `twitter` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `specializations`
--

CREATE TABLE `specializations` (
  `id` int(11) NOT NULL,
  `name_specialization` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `specializations`
--

INSERT INTO `specializations` (`id`, `name_specialization`) VALUES
(1, 'Computer'),
(2, 'Arabic');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `name_student` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(100) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `image` varchar(500) NOT NULL,
  `grade_id` int(11) NOT NULL,
  `classroom_id` int(11) NOT NULL,
  `dt` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name_student`, `email`, `password`, `gender`, `image`, `grade_id`, `classroom_id`, `dt`) VALUES
(2, 'Ahmed saleh', 'Ahmed@yahoo.com', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', '', '', 3, 3, '0000-00-00'),
(3, 'Khaled Ahmed Mohamed', 'Khaled@yahoo.com', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', 'Male', '', 3, 3, '2023-02-23'),
(4, 'Noha Ahmed ', 'Noha@yahoo.com', '123456789', 'Male', '', 3, 4, '2023-02-08'),
(5, 'Mohamed essa', 'mohamed.oka646@yahoo.com', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', 'Male', '', 8, 5, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `teacherclassrooms`
--

CREATE TABLE `teacherclassrooms` (
  `id` int(11) NOT NULL,
  `classroom_id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `teacherclassrooms`
--

INSERT INTO `teacherclassrooms` (`id`, `classroom_id`, `teacher_id`) VALUES
(1, 2, 1),
(3, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `specialization_id` int(11) NOT NULL,
  `image` varchar(500) NOT NULL,
  `gender` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `name`, `email`, `password`, `specialization_id`, `image`, `gender`) VALUES
(1, 'Mohamed saleh abdallah', 'Moh@yahoo.com', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', 2, '', 'Male'),
(4, 'Ahmed saleh', 'Ahmedsaleh@yahoo.com', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', 2, '', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `tests`
--

CREATE TABLE `tests` (
  `id` int(11) NOT NULL,
  `test` varchar(50) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `disable` tinyint(4) NOT NULL DEFAULT 0,
  `dt` date NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `classroom_id` int(11) NOT NULL,
  `grade_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tests`
--

INSERT INTO `tests` (`id`, `test`, `description`, `disable`, `dt`, `teacher_id`, `classroom_id`, `grade_id`) VALUES
(2, 'Test 1', 'TEST 1 VERY DIFFRENT', 0, '0000-00-00', 1, 3, 3),
(3, 'Test 5', '1122', 0, '2023-02-14', 4, 4, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_id` (`student_id`),
  ADD KEY `question_id` (`question_id`),
  ADD KEY `test_id` (`test_id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`),
  ADD KEY `classroom_id` (`classroom_id`),
  ADD KEY `grade_id` (`grade_id`),
  ADD KEY `teacher_id` (`teacher_id`);

--
-- Indexes for table `classrooms`
--
ALTER TABLE `classrooms`
  ADD PRIMARY KEY (`id`),
  ADD KEY `gender_id` (`grade_id`);

--
-- Indexes for table `grades`
--
ALTER TABLE `grades`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `grade` (`grade`);

--
-- Indexes for table `marks`
--
ALTER TABLE `marks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_id` (`student_id`),
  ADD KEY `test_id` (`test_id`);

--
-- Indexes for table `myparents`
--
ALTER TABLE `myparents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_id` (`student_id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `test_id` (`test_id`);

--
-- Indexes for table `schools`
--
ALTER TABLE `schools`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `specializations`
--
ALTER TABLE `specializations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD KEY `gender_id` (`grade_id`),
  ADD KEY `classroom_id` (`classroom_id`);

--
-- Indexes for table `teacherclassrooms`
--
ALTER TABLE `teacherclassrooms`
  ADD PRIMARY KEY (`id`),
  ADD KEY `classroom_id` (`classroom_id`),
  ADD KEY `teacher_id` (`teacher_id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `specialization_id` (`specialization_id`);

--
-- Indexes for table `tests`
--
ALTER TABLE `tests`
  ADD PRIMARY KEY (`id`),
  ADD KEY `teacher_id` (`teacher_id`),
  ADD KEY `grade_id` (`grade_id`),
  ADD KEY `classroom_id` (`classroom_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `classrooms`
--
ALTER TABLE `classrooms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `grades`
--
ALTER TABLE `grades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `marks`
--
ALTER TABLE `marks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `myparents`
--
ALTER TABLE `myparents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `schools`
--
ALTER TABLE `schools`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `specializations`
--
ALTER TABLE `specializations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `teacherclassrooms`
--
ALTER TABLE `teacherclassrooms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tests`
--
ALTER TABLE `tests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `answers`
--
ALTER TABLE `answers`
  ADD CONSTRAINT `answers_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `answers_ibfk_2` FOREIGN KEY (`question_id`) REFERENCES `questions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `answers_ibfk_3` FOREIGN KEY (`test_id`) REFERENCES `tests` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `books_ibfk_1` FOREIGN KEY (`classroom_id`) REFERENCES `classrooms` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `books_ibfk_2` FOREIGN KEY (`grade_id`) REFERENCES `grades` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `books_ibfk_3` FOREIGN KEY (`teacher_id`) REFERENCES `teachers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `classrooms`
--
ALTER TABLE `classrooms`
  ADD CONSTRAINT `classrooms_ibfk_1` FOREIGN KEY (`grade_id`) REFERENCES `grades` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `marks`
--
ALTER TABLE `marks`
  ADD CONSTRAINT `marks_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `marks_ibfk_2` FOREIGN KEY (`test_id`) REFERENCES `tests` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `myparents`
--
ALTER TABLE `myparents`
  ADD CONSTRAINT `myparents_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `questions_ibfk_1` FOREIGN KEY (`test_id`) REFERENCES `tests` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `schools`
--
ALTER TABLE `schools`
  ADD CONSTRAINT `schools_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `admins` (`id`);

--
-- Constraints for table `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `students_ibfk_1` FOREIGN KEY (`grade_id`) REFERENCES `grades` (`id`),
  ADD CONSTRAINT `students_ibfk_2` FOREIGN KEY (`classroom_id`) REFERENCES `classrooms` (`id`);

--
-- Constraints for table `teacherclassrooms`
--
ALTER TABLE `teacherclassrooms`
  ADD CONSTRAINT `teacherclassrooms_ibfk_1` FOREIGN KEY (`classroom_id`) REFERENCES `classrooms` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `teacherclassrooms_ibfk_2` FOREIGN KEY (`teacher_id`) REFERENCES `teachers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `teachers`
--
ALTER TABLE `teachers`
  ADD CONSTRAINT `teachers_ibfk_1` FOREIGN KEY (`specialization_id`) REFERENCES `specializations` (`id`);

--
-- Constraints for table `tests`
--
ALTER TABLE `tests`
  ADD CONSTRAINT `tests_ibfk_1` FOREIGN KEY (`teacher_id`) REFERENCES `teachers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tests_ibfk_2` FOREIGN KEY (`grade_id`) REFERENCES `grades` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tests_ibfk_3` FOREIGN KEY (`classroom_id`) REFERENCES `classrooms` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
