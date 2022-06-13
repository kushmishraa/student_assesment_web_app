-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2022 at 02:33 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adbms`
--

-- --------------------------------------------------------

--
-- Table structure for table `announcement`
--

CREATE TABLE `announcement` (
  `a_id` int(11) NOT NULL,
  `a_date` datetime NOT NULL,
  `a_subject` varchar(255) NOT NULL,
  `a_text` varchar(255) NOT NULL,
  `a_links` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `announcement`
--

INSERT INTO `announcement` (`a_id`, `a_date`, `a_subject`, `a_text`, `a_links`) VALUES
(1, '2022-05-25 13:00:00', 'Presentation Skill Test Scheduled for FYMCA', 'Presentation skill test scheduled on 26-05-2022 at 4pm for FYMCA Batch 2. Meet link attached below.', 'https://meet.google.com/xot-pzip-wnh'),
(6, '2022-06-03 09:26:24', 'SYMCA Batch 3: Written Skill Test', 'All students are expected to upload their papers/report on the below mentioned link by 5-06-2022.', 'https://drive.google.com/drive/My-drive'),
(7, '2022-06-03 20:11:59', 'FYMCA Batch 1: Communication skill test', 'Prepare for your Group Discussions which are to be held on 4-06-22.', '-'),
(8, '2022-06-06 14:33:28', 'TY.MCA- GD for batch2', 'Group Discussion Test has been scheduled for TYMCA on 12-06-22 at 4pm sharp. The meeting link has been attached for the same.', 'https://meet.google.com/xot-pzip-wnh');

-- --------------------------------------------------------

--
-- Table structure for table `assign_student`
--

CREATE TABLE `assign_student` (
  `assign_id` int(11) NOT NULL,
  `stud_id` int(11) NOT NULL,
  `stud_department` varchar(255) NOT NULL,
  `f_id` int(11) NOT NULL,
  `f_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assign_student`
--

INSERT INTO `assign_student` (`assign_id`, `stud_id`, `stud_department`, `f_id`, `f_name`) VALUES
(1, 1, 'IT', 2, 'Mrs.Poonam Mehta'),
(2, 2, 'IT', 2, 'Mrs.Poonam Mehta'),
(3, 4, 'IT', 4, 'Mr. Rajesh Sharma'),
(5, 7, 'IT', 4, 'Mr. Rajesh Sharma'),
(6, 6, 'IT', 2, 'Mrs.Poonam Mehta'),
(7, 4, 'IT', 4, 'Mr. Rajesh Sharma');

-- --------------------------------------------------------

--
-- Table structure for table `communication_skill`
--

CREATE TABLE `communication_skill` (
  `c_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `comm_test_date` datetime NOT NULL,
  `comm_test_score` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `communication_skill`
--

INSERT INTO `communication_skill` (`c_id`, `student_id`, `comm_test_date`, `comm_test_score`) VALUES
(1, 1, '2022-05-24 12:30:00', 10),
(2, 1, '2022-06-06 14:34:00', 0),
(3, 1, '2022-06-06 14:38:44', 4);

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `faculty_id` int(11) NOT NULL,
  `faculty_name` varchar(255) NOT NULL,
  `faculty_password` varchar(255) NOT NULL,
  `faculty_email` varchar(255) NOT NULL,
  `faculty_mob_no` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`faculty_id`, `faculty_name`, `faculty_password`, `faculty_email`, `faculty_mob_no`) VALUES
(1, 'Mrs. Archana Pawar', ' 12345 ', ' archana.pawar@vit.edu ', '123455444'),
(2, 'Mrs.Poonam Mehta', '54321', 'poonam.mehta@vit.edu', '123434543'),
(4, 'Mr. Rajesh Sharma', ' rajesh.vit ', ' rajesh.sharma@vit.edu ', '1122334466'),
(5, 'Mr. Pushkar Sharma', 'pushkar.vit', 'pushkar.sharma@vit.edu', '9922152926');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `f_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `f_topic` varchar(255) NOT NULL,
  `positive` varchar(255) NOT NULL,
  `negative` varchar(255) NOT NULL,
  `f_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`f_id`, `student_id`, `f_topic`, `positive`, `negative`, `f_time`) VALUES
(1, 1, 'Presentation feedback', 'Fluency in English, maintained the pace during presentation', 'Can improve delivery of introduction and summary content of presentation', '2022-05-28 11:00:00'),
(2, 6, 'Written Skill Feedback', 'The font size and alignment were appropriate.', 'Citations and references were missing.', '2022-06-04 18:34:52'),
(3, 1, 'Communication Feedback', 'You are able to converse on different abstract topics with ease.', 'Vocabulary needs to be improved.', '2022-06-06 14:31:04');

-- --------------------------------------------------------

--
-- Table structure for table `presentation_skill`
--

CREATE TABLE `presentation_skill` (
  `p_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `p_test_date` datetime NOT NULL,
  `p_test_score` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `presentation_skill`
--

INSERT INTO `presentation_skill` (`p_id`, `student_id`, `p_test_date`, `p_test_score`) VALUES
(1, 1, '2022-06-05 23:50:35', 4),
(2, 2, '2022-06-05 23:51:51', 10),
(3, 6, '2022-06-05 23:54:23', 5),
(4, 1, '2022-06-06 00:12:48', 6);

-- --------------------------------------------------------

--
-- Table structure for table `questions_communication`
--

CREATE TABLE `questions_communication` (
  `q_comm_id` int(11) NOT NULL,
  `c_question` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions_communication`
--

INSERT INTO `questions_communication` (`q_comm_id`, `c_question`) VALUES
(1, 'Speaks with appropriate speed, pitch and volume.'),
(2, 'Able to discuss abstract topics outside his/her personal experience.'),
(3, 'Uses appropriate vocabulary for explain'),
(4, 'Initiates a conversation appropriately without interrupting'),
(5, 'Takes turns during a conversation'),
(6, 'Maintains or changes a topic of conversation appropriate'),
(7, 'Initiates and asserts an opinion/ concern appropriately'),
(8, 'Uses a range of words');

-- --------------------------------------------------------

--
-- Table structure for table `questions_presentation`
--

CREATE TABLE `questions_presentation` (
  `q_presentation_id` int(11) NOT NULL,
  `p_question` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions_presentation`
--

INSERT INTO `questions_presentation` (`q_presentation_id`, `p_question`) VALUES
(1, 'The speaker greeted the audience\r\nwarmly.'),
(2, 'The presenter involved the\r\naudience.'),
(3, 'The speaker handled questions\r\nand comments with calm courtesy.'),
(4, 'The talk contained effective\r\nexamples and illustrations.'),
(5, 'The presenter defined technical\r\nterms and statistics for us.'),
(6, 'The speaker used his/her hands to\r\nhelp communicate ideas visually.'),
(7, 'The speaker tried to use verbal\r\nfocusing techniques.'),
(8, 'The introduction told me what to\r\nexpect from the presentation.'),
(9, 'The talk was designed in a logical\r\nway from beginning to middle and\r\nend.'),
(10, 'The speaker summarized the main\r\npoints before finishing.');

-- --------------------------------------------------------

--
-- Table structure for table `questions_writing`
--

CREATE TABLE `questions_writing` (
  `q_written_id` int(11) NOT NULL,
  `w_question` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions_writing`
--

INSERT INTO `questions_writing` (`q_written_id`, `w_question`) VALUES
(1, 'Does it answer the purpose stated (or implied) in the brief?'),
(2, 'Does it answer the needs of the projected reader?'),
(3, 'Has the material been placed in the appropriate sections?'),
(4, 'Has all the material been checked for accuracy?'),
(5, 'Are graphs and tables carefully labelled?'),
(6, 'Is data in graphs or tables also explained in words and analysed?'),
(7, 'Does the discussion/conclusion show how the results relate to\r\nobjectives set out in the introduction?'),
(8, 'Have all illustrations and figures taken from someone else''s work\r\nbeen cited correctly?'),
(9, 'Is it written throughout in appropriate style (i.e. no colloquialisms\r\nor contractions, using an objective tone, specific rather than\r\nvague)?'),
(10, 'Has every idea taken from or inspired by someone else''s work\r\nbeen acknowledged with a reference?');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `department` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `mob_no` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `first_name`, `last_name`, `dob`, `department`, `password`, `mob_no`, `email`) VALUES
(1, 'ritika', 'joshi', '2000-05-19', 'IT', 'ritika.123', '1234567990', 'ritika@vit.edu'),
(2, 'samplename', 'samplesurname', '2000-03-15', 'IT', 'sample.123', '1122334455', 'sample@gmail.com'),
(3, 'John', 'Doe', '1999-05-27', 'IT', 'johnvit', '9152092294', 'john@vit.edu'),
(4, 'Kylie', 'Stewart', '1998-03-17', 'AI', 'kylie.vit', '9138519313', 'kylie@vit.edu'),
(5, 'Justin', 'Turner', '1999-08-08', 'AI', 'justin.vit', '9138560914', 'justin@vit.edu'),
(6, 'Harry', 'Dyer', '2000-01-21', 'IT', 'harry.vit', '9138931312', 'harry@vit.edu'),
(7, 'Sarah', 'Thomas', '1998-08-27', 'AI', 'sarah.vit', '9158303550', 'sarah@vit.edu'),
(8, 'Vishnu', 'Prasad', '2000-06-15', 'AI', 'vishnuvit', '9922152849', 'vishnu@vit.edu'),
(9, 'Sakshi', 'Pawar', '1998-08-22', 'IT', 'sakshi.vit', '9158750120', 'sakshi.pawar@vit.edu');

-- --------------------------------------------------------

--
-- Table structure for table `task`
--

CREATE TABLE `task` (
  `task_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `task_name` varchar(255) NOT NULL,
  `task_description` varchar(255) NOT NULL,
  `task_duedate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `task`
--

INSERT INTO `task` (`task_id`, `student_id`, `task_name`, `task_description`, `task_duedate`) VALUES
(1, 1, 'Upload Resume', 'Create your resume with additional details of personal strengths and weaknesses', '2022-06-05 18:00:00'),
(2, 6, 'Write a Report', 'Refer papers written in IEEE format for writing reports . The topic for report is case study on linux operating system.', '2022-06-25 00:00:00'),
(3, 6, 'Written Skills Feedback', '', '0000-00-00 00:00:00'),
(4, 6, 'Written Skills Feedback', '', '0000-00-00 00:00:00'),
(5, 1, 'Strength & Weakness Analysis', 'List down your interpersonal traits and categorize them into strengths and weakness', '2022-06-12 15:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `written_skill`
--

CREATE TABLE `written_skill` (
  `w_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `w_test_date` datetime NOT NULL,
  `w_test_score` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `written_skill`
--

INSERT INTO `written_skill` (`w_id`, `student_id`, `w_test_date`, `w_test_score`) VALUES
(1, 1, '2022-05-22 16:30:00', 9),
(2, 1, '2022-06-06 14:43:56', 9);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `announcement`
--
ALTER TABLE `announcement`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `assign_student`
--
ALTER TABLE `assign_student`
  ADD PRIMARY KEY (`assign_id`);

--
-- Indexes for table `communication_skill`
--
ALTER TABLE `communication_skill`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`faculty_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `presentation_skill`
--
ALTER TABLE `presentation_skill`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `questions_communication`
--
ALTER TABLE `questions_communication`
  ADD PRIMARY KEY (`q_comm_id`);

--
-- Indexes for table `questions_presentation`
--
ALTER TABLE `questions_presentation`
  ADD PRIMARY KEY (`q_presentation_id`);

--
-- Indexes for table `questions_writing`
--
ALTER TABLE `questions_writing`
  ADD PRIMARY KEY (`q_written_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `task`
--
ALTER TABLE `task`
  ADD PRIMARY KEY (`task_id`);

--
-- Indexes for table `written_skill`
--
ALTER TABLE `written_skill`
  ADD PRIMARY KEY (`w_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `announcement`
--
ALTER TABLE `announcement`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `assign_student`
--
ALTER TABLE `assign_student`
  MODIFY `assign_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `communication_skill`
--
ALTER TABLE `communication_skill`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `faculty_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `f_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `presentation_skill`
--
ALTER TABLE `presentation_skill`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `questions_communication`
--
ALTER TABLE `questions_communication`
  MODIFY `q_comm_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `questions_presentation`
--
ALTER TABLE `questions_presentation`
  MODIFY `q_presentation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `questions_writing`
--
ALTER TABLE `questions_writing`
  MODIFY `q_written_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `task`
--
ALTER TABLE `task`
  MODIFY `task_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `written_skill`
--
ALTER TABLE `written_skill`
  MODIFY `w_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
