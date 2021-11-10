-- Database: `christ`
- Table structure for table `sysinfo`
--

CREATE TABLE `sysinfo` (
  `stu-id` int(11) NOT NULL,
  `stu-name` varchar(50) NOT NULL,
  `age` int(3) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `course` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `stdinfo` (`'stu-id', 'stu-name', 'age', 'gender', 'course', 'address') VALUES
('$sid', '$sanme', '$age', '$gender', '$course', '$addr');