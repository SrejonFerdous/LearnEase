-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 31, 2024 at 06:08 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elearn_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `des` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`des`) VALUES
('Welcome to eLearn. It\'s a cloud based learning and training management system through digital resouces. This site maeks it easy for its user to learn anything, anytime, anywhere just with a digital device.\r\nUser need to register first to enjoy the facilities. Then s/he can purchase any course accourding to his choice and can have the lifetime access to this courses. \r\n                      \r\n                          \r\n                          \r\n                          \r\n                          ');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `c_id` int(111) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `subject` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `message` varchar(600) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`c_id`, `name`, `subject`, `email`, `message`) VALUES
(18, 'Srejon Ferdous', 'Cyber Security', 'rayhan.cse.20210104021@aust.edu', 'Please add a course on Cyber Security'),
(19, 'Srejon Ferdous', 'Cyber Security', 'rayhan.cse.20210104021@aust.edu', 'Please Add a cyber security course');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_id` int(11) NOT NULL,
  `course_name` varchar(255) NOT NULL,
  `course_desc` varchar(255) NOT NULL,
  `course_author` varchar(255) NOT NULL,
  `course_img` text NOT NULL,
  `course_duration` varchar(255) NOT NULL,
  `course_price` varchar(255) NOT NULL,
  `course_original_price` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `course_name`, `course_desc`, `course_author`, `course_img`, `course_duration`, `course_price`, `course_original_price`) VALUES
(1, 'Data Communication', 'Get to know more about internet protocol and basics of data communication and Wireless Networking', 'Srejon Ferdous', '../image/courseimage/comu1.jpg', '1 Month', '2000', '2500'),
(2, 'Complete PHP Bootcamp', 'PHP is a widely used server-side programming language which is becoming more powerful day by day.', 'Kamruzzaman Bhuiyan', '../image/courseimage/php1.jpg', '15 Days', '1200', '1500'),
(3, 'Learn Python A-Z', 'Learn to Program and Analyze Data with Python. Develop programs to gather, clean, analyze, and visualize data.', 'Ayesha Gazi Mouri', '../image/courseimage/python1.jpg', '2 Months', '2800', '3200'),
(4, 'Hands On Artificial Intelligence', 'Explore the fascinating and fast-moving field of artificial intelligence with online courses.', 'Shahriar Shibli', '../image/courseimage/ai1.jpg', '6 Months', '5000', '5800'),
(5, 'Website Development: PHP, MySQL, HTML, CSS & Bootstrap', 'Step by Step Web Development Course for Beginners.', 'Mohammad Tanzilur Rahman', '../image/courseimage/wd1.jpg', '6 Months', '6000', '6500'),
(6, 'Algorithms', 'Learn To Think Like A Computer Scientist. Master the fundamentals of the design and analysis of algorithms.', 'Khairul Kabir', '../image/courseimage/algo1.jpg', '3 Months', '4000', '4350'),
(7, 'Data Structure', 'Designed to help understand the fundamentals of Data Structure really well. A must have for programming interviews.', 'Mr. Emam Hossain', '../image/courseimage/datastracture1.jpg', '3 months', '1000', '1200'),
(8, 'Machine Learning', 'Learn how to use NumPy, Pandas, Seaborn , Matplotlib , Plotly , Scikit-Learn , Machine Learning, Tensorflow , and more!', 'Dr.Mohammad Shafiul Alam ', '../image/courseimage/machng1.jpg', '4 months', '1500', '1599'),
(9, 'Numerical methods', 'Numerical integration, linear systems, matrixes, interpolation, Google\'s Page Rank algorithm and differential equations ', 'Ms. Raqeebir Rab', '../image/courseimage/nm1.jpg', '3 months', '1110', '1200'),
(10, 'Database', 'Become an In-demand SQL Master by creating complex databases and building reports through real-world projects ', 'Mr Nazmus Sakib', '../image/courseimage/database1.jpg', '3.5 months', '1000', '1150'),
(11, 'Telecommunication', 'Know more about fixed/wireless network architecture ,OSI Model and basic concepts related to frequency and spectrum ', 'Mr. Tanvir Ahmed', '../image/courseimage/telecommunication1.jpg', '4 months', '1145', '1259'),
(12, 'Pattern Recognition', 'Data science techniques for pattern recognition, data mining and hierarchical clustering, and KDE. ', 'Mr. Faisal Muhammad Shah', '../image/courseimage/pattern1.jpg', '4 months', '1119', '1290');

-- --------------------------------------------------------

--
-- Table structure for table `courseorder`
--

CREATE TABLE `courseorder` (
  `co_id` int(11) NOT NULL,
  `order_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `stu_email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `course_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `courseorder`
--

INSERT INTO `courseorder` (`co_id`, `order_id`, `stu_email`, `course_id`, `amount`, `order_date`) VALUES
(108, 'ORDS22635636', 'srejonferdous@gmail.com', 1, 1800, '2023-12-23 06:57:23'),
(109, 'ORDS74573179', 'lamisanoor@gmail.com', 10, 1000, '2024-01-12 19:16:53'),
(110, 'ORDS22953402', 'srejonferdous@gmail.com', 2, 1200, '2024-01-20 15:25:37'),
(111, 'ORDS63109305', 'rabbiul@gmail.com', 2, 1200, '2024-01-20 17:12:11'),
(112, 'ORDS85349211', 'srejonferdous@gmail.com', 4, 5000, '2024-01-21 07:26:39'),
(113, 'ORDS25311019', 'shamim@gmail.com', 3, 2800, '2024-01-21 08:13:41'),
(114, 'ORDS89681668', 'srejonferdous@gmail.com', 6, 4000, '2024-01-26 17:49:12');

-- --------------------------------------------------------

--
-- Table structure for table `lesson`
--

CREATE TABLE `lesson` (
  `lesson_id` int(11) NOT NULL,
  `lesson_name` text NOT NULL,
  `lesson_desc` text NOT NULL,
  `lesson_link` text NOT NULL,
  `course_id` int(11) NOT NULL,
  `course_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `lesson`
--

INSERT INTO `lesson` (`lesson_id`, `lesson_name`, `lesson_desc`, `lesson_link`, `course_id`, `course_name`) VALUES
(32, 'Introduction to Python', 'Introduction to Python Descc', '../lessonVid/python_intro.mp4', 3, 'Learn Python A-Z'),
(33, 'How Python Works', 'How Python Works Desc', '../lessonVid/33.mp4', 3, 'Learn Python A-Z'),
(34, 'Why Python is Powerful', 'Why Python is Powerful Desc', '../lessonVid/34.mp4', 3, 'Learn Python A-Z'),
(35, 'Everyone Should Learn Python', 'Everyone Should Learn Python Desc', '../lessonVid/35.mp4', 3, 'Learn Python A-Z'),
(36, 'Introduction to PHP', 'Introduction to PHP Desc', '../lessonVid/36.mp4', 3, 'Complete PHP Bootcamp'),
(37, 'How PHP Works', 'How PHP Works Desc', '../lessonVid/37.mp4', 2, 'Complete PHP Bootcamp'),
(38, 'Is PHP Really Easy?', 'Is PHP Really Easy? Desc', '../lessonVid/38.mp4', 2, 'Complete PHP Bootcamp'),
(39, 'Introduction to Data Communication', 'Introduction to Guitar 44 Desc', '../lessonVid/39.mp4', 1, 'Data Communication'),
(40, 'Architecture and Protocols', 'Type of Guitar Desc', '../lessonVid/40.mp4', 1, 'Data Communication'),
(41, 'Intro Angular Js', 'Intro Angular Js Desc', '../lessonVid/41.mp4', 4, ' Angular Js '),
(42, 'Introduction To HTML', 'Introduction To HTML Desc', '../lessonVid/42.mp4', 5, 'Website Development: PHP, MYSQL, HTML, CSS & Bootstrap'),
(43, 'Introduction to Boostrap & CSS', 'Introduction to Boostrap & CSS Desc', '../lessonVid/43.mp4', 5, 'Website Development: PHP, MYSQL, HTML, CSS & Bootstrap'),
(44, 'Introduction to MYSQL', 'Introduction to MYSQL Desc', '../lessonVid/44.mp4', 5, 'Website Development: PHP, MYSQL, HTML, CSS & Bootstrap'),
(50, 'Advance use of HTML, Boostrap & CSS', 'Advance use of HTML, Boostrap & CSS Desc', '../lessonVid/50.mp4', 5, 'Website Development: PHP, MYSQL, HTML, CSS & Bootstrap'),
(52, 'Introduction to Algorithms', 'Introduction to Algorithms', '../lessonVid/52.mp4', 6, 'Algorithms'),
(53, 'Advance use of Algorithms', 'Advance use of Algorithms Desc', '../lessonVid/53.mp4', 6, 'Algorithms'),
(54, 'Linear Data Structure', 'Linear Data Structure desc', '../lessonVid/54.mp4', 7, 'Data structure'),
(55, 'Binary tree, BST, Heap and Hash', 'Binary tree, BST, Heap and Hash Desc', '../lessonVid/55.mp4', 7, 'Data Structure'),
(56, 'Graph, Tree, Hashing, Linked list', 'Graph, Tree, Hashing, Linked list desc', '../lessonVid/56.mp4', 7, 'Data Structure'),
(57, 'Advanced Data structure', 'Advanced Data structure desc', '../lessonVid/57.mp4', 7, 'Data Structure'),
(58, 'Introduction to Machine Learning', 'Introduction to Machine Learning desc', '../lessonVid/58.mp4', 8, 'Machine Learning'),
(59, 'Why Machine Learning is the Future', 'Why Machine Learning is the Future desc', '../lessonVid/59.mp4', 8, 'Machine Learning'),
(60, 'Advanced Machine Learning ', 'Advanced Machine Learning desc', '../lessonVid/60.mp4', 8, 'Machine Learning '),
(61, 'System of non-Linear equation', 'System of non-Linear equation desc', '../lessonVid/61.mp4', 9, 'Numerical Methods'),
(62, 'System of Linear equation', 'System of Linear equation', '../lessonVid/62.mp4', 9, 'Numerical Methods'),
(63, 'Interpolation and Regression', 'interpolation and Regression desc', '../lessonVid/63.mp4', 9, 'Numerical Methods'),
(64, 'Ordinary Differential Equations', 'ddd', '../lessonVid/64.mp4', 9, 'Numerical Methods'),
(65, 'Introduction to Database', 'Introduction to Database desc', '../lessonVid/65.mp4', 10, 'Databaase'),
(66, 'Relational Algebra', 'Relational Algebra desc', '../lessonVid/66.mp4', 10, 'Database'),
(67, 'transaction, Normalization and Indexing', 'transaction, Normalization and Indexing desc', '../lessonVid/67.mp4', 10, 'Database'),
(68, 'Interconnection Network Architecture', 'Interconnection Network Architecture desc', '../lessonVid/68.mp4', 10, 'Database'),
(69, 'Introduction to Telecommunication', 'Introduction to Telecommunication desc', '../lessonVid/69.mp4', 11, 'Telecommunication'),
(70, 'The 3G Core Network', 'The 3-3', '../lessonVid/.70.mp4', 11, 'Telecommunication'),
(71, 'International Roaming', 'desc', '../lessonVid/71.mp4', 11, 'Telecommunication'),
(72, 'Long Term evaluation-4G and Beyond', 'dd', '../lessonVid/72.mp4', 11, 'Telecommunication'),
(73, 'Introduction', 's', '../lessonVid/73.mp4', 12, 'Pattern Recognition'),
(74, 'K-Means Clustering', 'dd', '../lessonVid/74.mp4', 12, 'Pattern Recognition'),
(75, 'Hierarchical Clustering', 'gg', '../lessonVid/75.mp4', 12, 'Pattern Recognition'),
(76, 'Gaussian Mixture Models', 'gg', '../lessonVid/76.mp4', 12, 'Pattern Recognition');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `stu_id` int(11) NOT NULL,
  `stu_name` varchar(255) NOT NULL,
  `stu_email` varchar(255) NOT NULL,
  `stu_pass` varchar(255) NOT NULL,
  `stu_occ` varchar(255) NOT NULL,
  `stu_img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`stu_id`, `stu_name`, `stu_email`, `stu_pass`, `stu_occ`, `stu_img`) VALUES
(33, 'Srejon Ferdous', 'srejonferdous@gmail.com', 'LionelSrejon10', 'Student', '../image/stusrejon.jpg'),
(34, 'Lamisa Noor', 'lamisanoor@gmail.com', 'cg4', '', '../image/stulamisa.jpg'),
(35, 'Rabbiul Haque', 'rabbiul@gmail.com', 'Rabbiul11', '', ''),
(36, 'Shamim Alam', 'shamim@gmail.com', 'Shamim1', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `team_id` int(11) NOT NULL,
  `team_name` text NOT NULL,
  `team_roll` text NOT NULL,
  `team_sem` text NOT NULL,
  `team_dept` text NOT NULL,
  `team_varsity` text NOT NULL,
  `team_img` text NOT NULL,
  `team_mobile` text NOT NULL,
  `team_email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`team_id`, `team_name`, `team_roll`, `team_sem`, `team_dept`, `team_varsity`, `team_img`, `team_mobile`, `team_email`) VALUES
(1, 'RAYHAN FERDOUS SREJON', '20210104021', '3.1', 'Computer Science & Engineering', 'Ahsanullah University of Science & Technology', '../teamImg/srejon.jpg', '01755007664', 'srejonferdous@gmail.com'),
(2, 'MD SHAMIM ALAM', '20210104001', '3.1', 'Computer Science & Engineering', 'Ahsanullah University of Science & Technology', '../teamimg/shamim.jpg', '01*********', 'shamim@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `courseorder`
--
ALTER TABLE `courseorder`
  ADD PRIMARY KEY (`co_id`);

--
-- Indexes for table `lesson`
--
ALTER TABLE `lesson`
  ADD PRIMARY KEY (`lesson_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`stu_id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`team_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `c_id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `courseorder`
--
ALTER TABLE `courseorder`
  MODIFY `co_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;

--
-- AUTO_INCREMENT for table `lesson`
--
ALTER TABLE `lesson`
  MODIFY `lesson_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `stu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `team_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
