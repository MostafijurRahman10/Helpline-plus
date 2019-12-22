-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2017 at 09:42 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `help_line_plus`
--

-- --------------------------------------------------------

--
-- Table structure for table `blood_donor`
--

CREATE TABLE `blood_donor` (
  `bdid` int(11) NOT NULL,
  `bid` int(11) NOT NULL,
  `blood_group` varchar(10) NOT NULL,
  `last_donate_date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blood_donor`
--

INSERT INTO `blood_donor` (`bdid`, `bid`, `blood_group`, `last_donate_date`) VALUES
(1, 1, 'B+', '28-December-2016'),
(2, 2, 'B+', '1-January-2017'),
(3, 3, 'A+', '3-April-2017'),
(4, 4, 'B+', '1-January-2017'),
(5, 5, 'B+', '1-January-2017'),
(6, 6, 'B+', '1-January-2017'),
(7, 7, 'A+', '14-February-2017'),
(8, 8, 'A+', '14-February-2017'),
(9, 9, 'O+', '1-January-2017'),
(10, 10, 'O+', '8-September-2016'),
(11, 11, 'B+', '1-January-2017');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `cid` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `com_details` varchar(250) NOT NULL,
  `commenter_id` int(11) NOT NULL,
  `create_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `did` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `email` varchar(100) NOT NULL,
  `specialist` varchar(20) NOT NULL,
  `service_time` varchar(20) NOT NULL,
  `ref_key` varchar(30) NOT NULL,
  `hid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`did`, `name`, `email`, `specialist`, `service_time`, `ref_key`, `hid`) VALUES
(21, 'Md Atiqur Rahman', 'doctor1@gmail.com', 'Neurologist', '4:30pm-8:00pm', '5992f070114c92.30207172', 1),
(22, 'Dr. Shadikul Chowdhury', 'doctor2@gmail.com', 'Cardiologist', '4:30pm-8:00pm', '5992f077cb5874.39375500', 5),
(23, 'Md Mostafa Anwar', 'doctor3@gmail.com', 'Psychiatrist', '4:30pm-8:00pm', '5992f07e394ff3.90047563', 3),
(24, 'Polash Roy', 'doctor4@gmail.com', 'Dentist', '4:30pm-8:00pm', '5992f08bd2fe51.54802287', 4),
(25, 'Dr. Sadat Islam', 'doctor5@gmail.com', 'Microbiologist', '4:30pm-8:00pm', '5992f084336f79.05623468', 5),
(26, 'Moinul Islam', 'doctor6@gmail.com', 'Orthopedic Surgeon', '4:30pm-8:00pm', '5992f099ab8cf1.54161280', 2),
(27, 'Dr. Meherunnessa Chowdhury', 'doctor7@gmail.com', 'Gynecologist', '4:30pm-8:00pm', '5992f93f958720.68229724', 7),
(28, 'Soukot Islam', 'doctor8@gmail.com', 'Dentist', '4:30pm-8:00pm', '5992f94c9c43c7.55751493', 4),
(29, 'Kamrul Hasan', 'doctor9@gmail.com', 'Cardiologist', '4:30pm-8:00pm', '5992f9598ce300.48461520', 1),
(30, 'Dr. Moumita Chowdhury', 'doctor10@gmail.com', 'Gynecologist', '4:30pm-8:00pm', '5992f9655d3277.77532413', 3),
(31, 'Dr. Najmus Sakib', 'doctor11@gmail.com', 'Heart', '5:30pm-8:00pm', '59934cdfa682d2.48586416', 5),
(32, 'Dr. Biraj Kar', 'doctor12@gmail.com', 'ENT', '4:00pm-8:00pm', '5995de6e072cf1.12614201', 18),
(33, 'Dr. Selvia Arshad', 'doctor13@gmail.com', 'Gynecologist', '4:30pm-8:00pm', '59934da43b8464.42219997', 20),
(34, 'Dr. Pushpita Ibnat', 'doctor14@gmail.com', 'Microbiologist', '6:00pm-8:00pm', '59934dae822571.64328195', 14),
(35, 'Dr. Rifa Tasfia Chowdhury', 'doctor15@gmail.com', 'ENT', '6:00pm-10:00pm', '59934dbb11b6d1.20278237', 12),
(36, 'Dr. Niyz Bin Hashem', 'doctor16@gmail.com', 'Gynecologist', '5:30pm-9:00pm', '59934dc8872f24.87051058', 10),
(37, 'Dr. Shahnewaz Shuvo', 'doctor17@gmail.com', 'Cardiologist', '4:30pm-8:00pm', '59934dd4bd75e2.91155584', 17),
(38, 'Dr. Anika Ibnat', 'doctor18@gmail.com', 'Heart', '4:30pm-10:00pm', '59934ddfcb4f74.99968229', 20),
(39, 'Dr. Sabrina Srishty', 'doctor19@gmail.com', 'Orthopedic Surgeon', '8:00pm-10:00pm', '59934deba70d79.48548594', 19),
(40, 'Dr. Nayan Dhar Shawn', 'doctor20@gmail.com', 'ENT', '4:00pm-9:00pm', '5993502b14dc76.86633912', 16);

-- --------------------------------------------------------

--
-- Table structure for table `fire_brigade`
--

CREATE TABLE `fire_brigade` (
  `fid` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `ref_key` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fire_brigade`
--

INSERT INTO `fire_brigade` (`fid`, `name`, `email`, `ref_key`) VALUES
(1, 'Tejgaon Fire Station', 'firestation1@gmail.com', '5992f0224c82d2.39790645'),
(2, 'Fire Service & Civil', 'firestation2@gmail.com', '5992f02f14e753.59705968'),
(3, 'Palashi Barrack Fire', 'firestation3@gmail.com', '5992f036a7beb3.80805565'),
(4, 'Sutrapur Fire Statio', 'firestation4@gmail.com', '5992f03de56531.40774964'),
(5, 'Kurmitola Fire Stati', 'firestation5@gmail.com', '5992f045168773.86390270'),
(6, 'Lalbagh Fire Station', 'firestation6@gmail.com', '5992f04c4fb997.56883584'),
(7, 'Postogola Fire Stati', 'firestation7@gmail.com', '5992f0554b8418.95343322'),
(8, 'Baridhara Fire Stati', 'firestation8@gmail.com', '5992f05ba67826.87681336'),
(9, 'Demra Fire Station', 'firestation9@gmail.com', '5992f06253aa59.27961220'),
(10, 'Tongi Fire Station', 'firestation10@gmail.com', '5992f0693ea2a4.46151361'),
(11, 'Gazipur Fire Station', 'firestation11@gmail.com', '5993337282d327.33575546'),
(12, 'Siddique Bazar Fire ', 'firestation12@gmail.com', '599335316c75a0.89691109'),
(13, 'Mirpur Fire Station', 'firestation13@gmail.com', '5993362f5738c1.84939893');

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

CREATE TABLE `hospital` (
  `hid` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `category` varchar(20) NOT NULL,
  `service_time` varchar(20) NOT NULL,
  `ref_key` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hospital`
--

INSERT INTO `hospital` (`hid`, `name`, `email`, `category`, `service_time`, `ref_key`) VALUES
(1, 'Holytech Hospital', 'hoytechhospital@gmail.com', 'Trauma Center', '9:00am-10pm', '5992e596e4c366.22238866'),
(2, 'Red Crescent Hospital', 'redcresc@gmail.com', 'General', '9:00am-10pm', '5992e5b64c6260.69446463'),
(3, 'Ahmediya Hospital', 'ahmed@gmail.com', 'Geriatric', '9:00am-10pm', '5992e5e7349393.54066662'),
(4, 'Save life Clinic', 'savelife@gmail.com', 'Oncology', '9:00am-10pm', '5992e5f9c5e725.95409253'),
(5, 'Holy Touch Hospital', 'holytouch@gmail.com', 'Psychiatric', '9:00am-10pm', '5992e60abe13f4.50844185'),
(6, 'Holy Spirit Hospital', 'holyspirit@gmail.com', 'General', '9:00am-10pm', '5992e62f7e2df1.81538358'),
(7, 'Sheba Clinic', 'sheba231@gmail.com', 'General', '9:00am-10pm', '5992e63a93b0a0.35448880'),
(8, 'Touchstone Hospital', 'touchstone@gmai.com', 'General', '9:00am-10pm', '5992e6481111f4.51009194'),
(9, 'Nabuwwat Clinic', 'nabuwwat@gmail.com', 'General', '9:00am-10pm', '5992e958714896.59134393'),
(10, 'Amit Clinic', 'amitclinics@gmail.com', 'Trauma Center', '9:00am-10pm', '5992e98f8c1173.51952297'),
(11, 'Lights Clinic', 'lights@gmail.com', 'Oncology', '9:00am-10pm', '5992e9a5d362a1.79760845'),
(12, 'Apollo Hospital', 'apollo@gmail.com', 'General', 'All day', '59933fe3eac624.61399251'),
(13, 'Al Ashrif Hospital', 'alashrif@gmail.com', 'General', 'All day', '599343f9bc83b4.95897796'),
(14, 'Square Hospital', 'square@gmail.com', 'General', 'All day', '59934504828587.36481656'),
(15, 'Samorita Hospital', 'samorita@gmail.com', 'Oncology', 'All day', '5993457d4761b4.46649965'),
(16, 'Eden Multicare Hospital', 'edenmul@gmail.com', 'General', 'All day', '599345c4ef23b0.34057304'),
(17, 'Al Manar Hospital', 'alamanar@gmail.com', 'General', 'All day', '59934616b32529.50601259'),
(18, 'Ad-deen Hospital', 'addeen@gmail.com', 'General', 'All day', '5993464aa4f8c3.23227344'),
(19, 'Greenland Hospital', 'greenland@gmail.com', 'General', 'All day', '5993465cb17696.43961604'),
(20, 'Delta Hospital', 'delta@gmail.com', 'General', 'All day', '599346804c2c69.51833188');

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `lid` int(11) NOT NULL,
  `ref_key` varchar(30) NOT NULL,
  `house_no` varchar(10) NOT NULL,
  `road_no` varchar(10) NOT NULL,
  `area_name` varchar(40) NOT NULL,
  `city` varchar(20) NOT NULL,
  `zip` varchar(20) NOT NULL,
  `country` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`lid`, `ref_key`, `house_no`, `road_no`, `area_name`, `city`, `zip`, `country`) VALUES
(1, '5992a9f7469c12.45692507', '465', '1', 'Rampura', 'Dhaka', '1219', 'Bangladesh'),
(2, '5992aa740633f2.57265639', '165', '6', 'Badda', 'Dhaka', '1210', 'Bangladesh'),
(3, '5992aa864ac032.51521343', '205', '5', 'Norda', 'Dhaka', '1200', 'Bangladesh'),
(4, '5992aa91ed91c3.44753080', '401', '2', 'Khilgaon', 'Dhaka', '1225', 'Bangladesh'),
(5, '5992aa9eb3eae4.28582251', '235', '3', 'Rampura', 'Dhaka', '1219', 'Bangladesh'),
(6, '5992aaab030f46.08648080', '235', '3', 'Rampura', 'Dhaka', '1219', 'Bangladesh'),
(7, '5992aab6e6b335.68027699', '320', '2', 'Ramna', 'Dhaka', '1250', 'Bangladesh'),
(8, '5992aac3323f44.06386195', '102', '5', 'New Market', 'Dhaka', '1260', 'Bangladesh'),
(9, '599328a57e8aa9.32940731', '325', '8', 'Jatrabari', 'Dhaka', '1229', 'Bangladesh'),
(10, '59932b27132678.53565107', '245', '7', 'Deoggan', 'Dhaka', '1275', 'Bangladesh'),
(11, '59932be91494b0.51308215', '311', '2', 'Kamrangircha', 'Dhaka', '1248', 'Bangladesh'),
(12, '59932cfea79ab4.74080947', '214', '9', 'Hazaribagh', 'Dhaka', '1243', 'Bangladesh'),
(13, '59932dc9cb6339.85185561', '145', '2', 'Savar', 'Dhaka', '1285', 'Bangladesh'),
(14, '59932e5c4e9a04.02532617', '166', '3', 'Tejgaon', 'Dhaka', '1236', 'Bangladesh'),
(15, '59932f0cd3ff10.64458353', '172', '7', 'Keraniganj', 'Dhaka', '1212', 'Bangladesh'),
(16, '59932fb1c9b534.80365012', '198', '2', 'Ashulia', 'Dhaka', '1247', 'Bangladesh'),
(17, '59933059963433.45748491', '122', '7', 'Madhupur', 'Dhaka', '1231', 'Bangladesh'),
(18, '59933174d053c6.06118844', '122', '7', 'Kalihati', 'Dhaka', '1211', 'Bangladesh'),
(19, '59933196ee4ab8.35792618', '122', '7', 'Ghatail', 'Dhaka', '1233', 'Bangladesh'),
(20, '599331c39a7663.23352629', '122', '7', 'Kotwali', 'Dhaka', '1239', 'Bangladesh'),
(21, '5992f0224c82d2.39790645', '102', '1', 'Tejgaon', 'Dhaka', '1201', 'Bangladesh'),
(22, '5992f02f14e753.59705968', '135', '3', 'Mohammadpur', 'Dhaka', '1205', 'Bangladesh'),
(23, '5992f036a7beb3.80805565', '205', '4', 'Dhakeshwari', 'Dhaka', '1207', 'Bangladesh'),
(24, '5992f03de56531.40774964', '305', '9', 'R M Dash Rd', 'Dhaka', '1209', 'Bangladesh'),
(25, '5992f045168773.86390270', '401', '8', 'Kurmitola', 'Dhaka', '1204', 'Bangladesh'),
(26, '5992f04c4fb997.56883584', '177', '7', 'Lalbagh', 'Dhaka', '1203', 'Bangladesh'),
(27, '5992f0554b8418.95343322', '209', '6', 'Postogola', 'Dhaka', '1208', 'Bangladesh'),
(28, '5992f05ba67826.87681336', '203', '2', 'Baridhara', 'Dhaka', '1210', 'Bangladesh'),
(29, '5992f06253aa59.27961220', '304', '4', 'Demra', 'Dhaka', '1211', 'Bangladesh'),
(30, '5992f0693ea2a4.46151361', '407', '5', 'Tongi', 'Dhaka', '1212', 'Bangladesh'),
(31, '5993337282d327.33575546', '414', '5', 'Gazipur', 'Dhaka', '1213', 'Bangladesh'),
(32, '599335316c75a0.89691109', '441', '7', 'Siddique Bazar', 'Dhaka', '1224', 'Bangladesh'),
(33, '5993362f5738c1.84939893', '114', '3', 'Mirpur', 'Dhaka', '1224', 'Bangladesh'),
(34, '5992e596e4c366.22238866', '465', '1', 'Rampura', 'Dhaka', '1219', 'Bangladesh'),
(35, '5992e5b64c6260.69446463', '165', '6', 'Badda', 'Dhaka', '1210', 'Bangladesh'),
(36, '5992e5e7349393.54066662', '205', '5', 'Norda', 'Dhaka', '1200', 'Bangladesh'),
(37, '5992e5f9c5e725.95409253', '401', '2', 'Khilgaon', 'Dhaka', '1225', 'Bangladesh'),
(38, '5992e60abe13f4.50844185', '235', '3', 'Rampura', 'Dhaka', '1219', 'Bangladesh'),
(39, '5992e62f7e2df1.81538358', '235', '3', 'Rampura', 'Dhaka', '1219', 'Bangladesh'),
(40, '5992e63a93b0a0.35448880', '320', '2', 'Ramna', 'Dhaka', '1250', 'Bangladesh'),
(41, '5992e6481111f4.51009194', '102', '5', 'New Market', 'Dhaka', '1260', 'Bangladesh'),
(42, '5992e958714896.59134393', '301', '1', 'Dhanmondi', 'Dhaka', '1235', 'Bangladesh'),
(43, '5992e98f8c1173.51952297', '177', '4', 'Khilkhet', 'Dhaka', '1261', 'Bangladesh'),
(44, '5992e9a5d362a1.79760845', '210', '9', 'Mirpur', 'Dhaka', '1201', 'Bangladesh'),
(45, '59933fe3eac624.61399251', '423', '1', 'Bashundhara', 'Dhaka', '1264', 'Bangladesh'),
(46, '599343f9bc83b4.95897796', '122', '7', 'Bir Uttom Road', 'Dhaka', '1214', 'Bangladesh'),
(47, '59934504828587.36481656', '321', '3', 'Panthapath', 'Dhaka', '1248', 'Bangladesh'),
(48, '5993457d4761b4.46649965', '164', '1', 'Dhanmondi', 'Dhaka', '1272', 'Bangladesh'),
(49, '599345c4ef23b0.34057304', '311', '4', 'Lalmatia', 'Dhaka', '1249', 'Bangladesh'),
(50, '59934616b32529.50601259', '236', '9', 'Azampur', 'Dhaka', '1260', 'Bangladesh'),
(51, '5993464aa4f8c3.23227344', '329', '2', 'Shantinagar', 'Dhaka', '1244', 'Bangladesh'),
(52, '5993465cb17696.43961604', '177', '5', 'Satmasjid Road', 'Dhaka', '1240', 'Bangladesh'),
(53, '599346804c2c69.51833188', '441', '3', 'Humayun Road', 'Dhaka', '1241', 'Bangladesh'),
(54, '5992f070114c92.30207172', '102', '2', 'Rampura', 'Dhaka', '1219', 'Bangladesh'),
(55, '5992f077cb5874.39375500', '109', '3', 'Badda', 'Dhaka', '1212', 'Bangladesh'),
(56, '5992f07e394ff3.90047563', '205', '4', 'Mirpur', 'Dhaka', '1211', 'Bangladesh'),
(57, '5992f08bd2fe51.54802287', '315', '1', 'Mohammadpur', 'Dhaka', '1218', 'Bangladesh'),
(58, '5992f084336f79.05623468', '405', '7', 'Shantinagar', 'Dhaka', '1233', 'Bangladesh'),
(59, '5992f099ab8cf1.54161280', '201', '8', 'Baridhara', 'Dhaka', '1215', 'Bangladesh'),
(60, '5992f93f958720.68229724', '309', '5', 'Uttora', 'Dhaka', '1225', 'Bangladesh'),
(61, '5992f94c9c43c7.55751493', '318', '4', 'Mirpur', 'Dhaka', '1211', 'Bangladesh'),
(62, '5992f9598ce300.48461520', '409', '6', 'Elephant Road', 'Dhaka', '1208', 'Bangladesh'),
(63, '5992f9655d3277.77532413', '215', '1', 'Khilkhet', 'Dhaka', '1205', 'Bangladesh'),
(64, '59934cdfa682d2.48586416', '225', '3', 'Humayun Road', 'Dhaka', '1208', 'Bangladesh'),
(65, '5995de6e072cf1.12614201', '314', '2', 'Lalmatia', 'Dhaka', '1241', 'Bangladesh'),
(66, '59934da43b8464.42219997', '214', '4', 'Satmasjid Road', 'Dhaka', '1246', 'Bangladesh'),
(67, '59934dae822571.64328195', '332', '6', 'Azampur', 'Dhaka', '1252', 'Bangladesh'),
(68, '59934dbb11b6d1.20278237', '362', '7', 'Ramna', 'Dhaka', '1235', 'Bangladesh'),
(69, '59934dc8872f24.87051058', '154', '5', 'New Market', 'Dhaka', '1215', 'Bangladesh'),
(70, '59934dd4bd75e2.91155584', '422', '8', 'Panthapath', 'Dhaka', '1219', 'Bangladesh'),
(71, '59934ddfcb4f74.99968229', '357', '2', 'Bir Uttom Road', 'Dhaka', '1223', 'Bangladesh'),
(72, '59934deba70d79.48548594', '194', '4', 'Dhanmondi', 'Dhaka', '1232', 'Bangladesh'),
(73, '5993502b14dc76.86633912', '159', '9', 'Dhanmondi', 'Dhaka', '1227', 'Bangladesh'),
(74, '5995e4c604a044.26789393', '465/28/B', '2', 'Rampura TV centre', 'Dhaka', '1219', 'Bangladesh'),
(75, '5995e5ca882c40.16534865', '115', '5', 'Merul', 'Dhaka', '1219', 'Bangladesh'),
(76, '5995e6bf96b7f7.02512707', '465/28/B', '2', 'Rampura TV centre', 'Dhaka', '1219', 'Bangladesh'),
(77, '5995e7734522d3.25948472', '241', '7', 'Bashundhara R/A', 'Dhaka', '1229', 'Bangladesh'),
(78, '5995e8269f39e2.69260335', '241', '7', 'Bashundhara R/A', 'Dhaka', '1229', 'Bangladesh'),
(79, '5995e8dc404846.31501770', '241', '7', 'Bashundhara R/A', 'Dhaka', '1229', 'Bangladesh'),
(80, '5995e977bb5477.06976623', '112', '5', 'Bashundhara R/A', 'Dhaka', '1229', 'Bangladesh'),
(81, '5995ea1420e927.39078154', '215', '3', 'Norda', 'Dhaka', '1229', 'Bangladesh'),
(82, '5995eaba041991.07274439', '235', '2', 'Rampura Bazar', 'Dhaka', '1219', 'Bangladesh'),
(83, '5995eb57dd81f5.97519484', '105', '1', 'Rampura', 'Dhaka', '1219', 'Bangladesh'),
(84, '5995ec05036bb3.79933321', '151', '2', 'Rampura Bazar', 'Dhaka', '1219', 'Bangladesh');

-- --------------------------------------------------------

--
-- Table structure for table `mobile_numbers`
--

CREATE TABLE `mobile_numbers` (
  `mid` int(11) NOT NULL,
  `ref_key` varchar(30) NOT NULL,
  `numbers` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mobile_numbers`
--

INSERT INTO `mobile_numbers` (`mid`, `ref_key`, `numbers`) VALUES
(1, '5992a9f7469c12.45692507', '01500000001'),
(2, '5992aa740633f2.57265639', '01500000002'),
(3, '5992aa864ac032.51521343', '01500000003'),
(4, '5992aa91ed91c3.44753080', '01500000004'),
(5, '5992aa9eb3eae4.28582251', '01500000005'),
(6, '5992aaab030f46.08648080', '01500000006'),
(7, '5992aab6e6b335.68027699', '01500000007'),
(8, '5992aac3323f44.06386195', '01500000008'),
(9, '599328a57e8aa9.32940731', '01500000009'),
(10, '59932b27132678.53565107', '01500000010'),
(11, '59932be91494b0.51308215', '01500000011'),
(12, '59932cfea79ab4.74080947', '01500000012'),
(13, '59932dc9cb6339.85185561', '01500000013'),
(14, '59932e5c4e9a04.02532617', '01500000014'),
(15, '59932f0cd3ff10.64458353', '01500000015'),
(16, '59932fb1c9b534.80365012', '01500000016'),
(17, '59933059963433.45748491', '01500000017'),
(18, '59933174d053c6.06118844', '01500000018'),
(19, '59933196ee4ab8.35792618', '01500000019'),
(20, '599331c39a7663.23352629', '01500000020'),
(21, '5992f0224c82d2.39790645', '01700000001'),
(22, '5992f02f14e753.59705968', '01700000002'),
(23, '5992f036a7beb3.80805565', '01700000003'),
(24, '5992f03de56531.40774964', '01700000004'),
(25, '5992f045168773.86390270', '01700000005'),
(26, '5992f04c4fb997.56883584', '01700000006'),
(27, '5992f0554b8418.95343322', '01700000007'),
(28, '5992f05ba67826.87681336', '01700000008'),
(29, '5992f06253aa59.27961220', '01700000009'),
(30, '5992f0693ea2a4.46151361', '01700000010'),
(31, '5993337282d327.33575546', '01700000011'),
(32, '599335316c75a0.89691109', '01700000012'),
(33, '5993362f5738c1.84939893', '01700000013'),
(34, '5992e596e4c366.22238866', '01800000001'),
(35, '5992e5b64c6260.69446463', '01800000002'),
(36, '5992e5e7349393.54066662', '01800000003'),
(37, '5992e5f9c5e725.95409253', '01800000004'),
(38, '5992e60abe13f4.50844185', '01800000005'),
(39, '5992e62f7e2df1.81538358', '01800000006'),
(40, '5992e63a93b0a0.35448880', '01800000007'),
(41, '5992e6481111f4.51009194', '01800000008'),
(42, '5992e958714896.59134393', '01800000009'),
(43, '5992e98f8c1173.51952297', '01800000010'),
(44, '5992e9a5d362a1.79760845', '01800000011'),
(45, '59933fe3eac624.61399251', '01800000012'),
(46, '599343f9bc83b4.95897796', '01800000013'),
(47, '59934504828587.36481656', '01800000014'),
(48, '5993457d4761b4.46649965', '01800000015'),
(49, '599345c4ef23b0.34057304', '01800000016'),
(50, '59934616b32529.50601259', '01800000017'),
(51, '5993464aa4f8c3.23227344', '01800000018'),
(52, '5993465cb17696.43961604', '01800000019'),
(53, '599346804c2c69.51833188', '01800000020'),
(54, '5992f070114c92.30207172', '01900000001'),
(55, '5992f077cb5874.39375500', '01900000002'),
(56, '5992f07e394ff3.90047563', '01900000003'),
(57, '5992f08bd2fe51.54802287', '01900000004'),
(58, '5992f084336f79.05623468', '01900000005'),
(59, '5992f099ab8cf1.54161280', '01900000006'),
(60, '5992f93f958720.68229724', '01900000007'),
(61, '5992f94c9c43c7.55751493', '01900000008'),
(62, '5992f9598ce300.48461520', '01900000009'),
(63, '5992f9655d3277.77532413', '01900000010'),
(64, '59934cdfa682d2.48586416', '01900000011'),
(65, '5995de6e072cf1.12614201', '01900000012'),
(66, '59934da43b8464.42219997', '01900000013'),
(67, '59934dae822571.64328195', '01900000014'),
(68, '59934dbb11b6d1.20278237', '01900000015'),
(69, '59934dc8872f24.87051058', '01900000016'),
(70, '59934dd4bd75e2.91155584', '01900000017'),
(71, '59934ddfcb4f74.99968229', '01900000018'),
(72, '59934deba70d79.48548594', '01900000019'),
(73, '5993502b14dc76.86633912', '019000000020'),
(74, '5995e4c604a044.26789393', '01521109085'),
(75, '5995e5ca882c40.16534865', '01751481473'),
(76, '5995e6bf96b7f7.02512707', '01937595521'),
(77, '5995e7734522d3.25948472', '01624712366'),
(78, '5995e8269f39e2.69260335', '01982209069'),
(79, '5995e8dc404846.31501770', '01840905553'),
(80, '5995e977bb5477.06976623', '01621328203'),
(81, '5995ea1420e927.39078154', '01759176196'),
(82, '5995eaba041991.07274439', '01554874116'),
(83, '5995eb57dd81f5.97519484', '01537003272'),
(84, '5995ec05036bb3.79933321', '01681894770');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `pid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `post_details` varchar(250) NOT NULL,
  `category` varchar(20) NOT NULL,
  `create_date` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`pid`, `uid`, `post_details`, `category`, `create_date`) VALUES
(1, 1, 'Emergency blood needed for a child.\r\nBlood Group: O-\r\nNumber of Units: 5 bags\r\nLocation: Dhaka Medical College Hospital\r\nContact Number: 01500000000', 'Blood Request', '17-08-2017'),
(2, 4, 'Emergency blood needed for a pregnant woman.\r\nBlood Group: A+\r\nNumber of Units: 2 bags\r\nLocation: Apollo Hospitals\r\nContact Number: 01500000001', 'Blood Request', '17-08-2017'),
(3, 5, 'Emergency blood needed for a blood cancer patient.\r\nBlood Group: A+\r\nNumber of Units: 8 bags\r\nLocation: Labaid Specialized Hospital\r\nContact Number: 01500000002', 'Blood Request', '17-08-2017'),
(4, 2, 'Emergency blood needed for an accident patient.\r\nBlood Group: B+\r\nNumber of Units: 5 bags\r\nLocation: Popular Diagnostic Centre Ltd\r\nContact Number: 01500000003', 'Blood Request', '17-08-2017');

-- --------------------------------------------------------

--
-- Table structure for table `security`
--

CREATE TABLE `security` (
  `sid` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `category` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `ref_key` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `security`
--

INSERT INTO `security` (`sid`, `name`, `category`, `email`, `ref_key`) VALUES
(1, 'Rampura Thana', 'Police', 'police1@gmail.com', '5992a9f7469c12.45692507'),
(2, 'Badda Thana', 'Police', 'police2@gmail.com', '5992aa740633f2.57265639'),
(3, 'Vatara Thana', 'Police', 'police3@gmail.com', '5992aa864ac032.51521343'),
(4, 'Khilgaon Thana', 'Police', 'police4@gmail.com', '5992aa91ed91c3.44753080'),
(5, 'Rampura Rab', 'Rab', 'rab1@gmail.com', '5992aa9eb3eae4.28582251'),
(6, 'Mouchak Rab', 'Rab', 'rab2@gmail.com', '5992aaab030f46.08648080'),
(7, 'Ramna Thana', 'Police', 'police5@gmail.com', '5992aab6e6b335.68027699'),
(8, 'New Market Thana', 'Police', 'police6@gmail.com', '5992aac3323f44.06386195'),
(9, 'Jatrabari Thana', 'Police', 'police7@gmail.com', '599328a57e8aa9.32940731'),
(10, 'Deoggan Thana', 'Police', 'police8@gmail.com', '59932b27132678.53565107'),
(11, 'Kamrangircha Thana', 'Police', 'police9@gmail.com', '59932be91494b0.51308215'),
(12, 'Hazaribagh Rab', 'Rab', 'rab3@gmail.com', '59932cfea79ab4.74080947'),
(13, 'Savar Thana', 'Police', 'police10@gmail.com', '59932dc9cb6339.85185561'),
(14, 'Tejgaon Thana', 'Police', 'police11@gmail.com', '59932e5c4e9a04.02532617'),
(15, 'Keraniganj Thana', 'Police', 'police12@gmail.com', '59932f0cd3ff10.64458353'),
(16, 'Ashulia Thana', 'Police', 'police13@gmail.com', '59932fb1c9b534.80365012'),
(17, 'Madhupur Thana', 'Police', 'police14@gmail.com', '59933059963433.45748491'),
(18, 'Kalihati Thana', 'Police', 'police15@gmail.com', '59933174d053c6.06118844'),
(19, 'Ghatail Thana', 'Police', 'police16@gmail.com', '59933196ee4ab8.35792618'),
(20, 'Kotwali Thana', 'Police', 'police17@gmail.com', '599331c39a7663.23352629');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `en_pass` varchar(80) NOT NULL,
  `salt` varchar(10) NOT NULL,
  `img_url` varchar(50) NOT NULL,
  `ref_key` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `fname`, `lname`, `email`, `en_pass`, `salt`, `img_url`, `ref_key`) VALUES
(1, 'Sujit', 'Debnath', 'sujit@gmail.com', 'jh7a3ovv14I9lYayFCROHZcRRlFmZjI5MmQ5YTA4', 'ff292d9a08', '5995ece4479321.78974215.jpg', '5995e4c604a044.26789393'),
(2, 'KN', 'Roy', 'komol@gmail.com', 'ozXIF0UKJxREezD/ECgUTTzuiw9lMTcyYTE0MzU0', 'e172a14354', '5995e5ca87cab4.12366113.jpg', '5995e5ca882c40.16534865'),
(3, 'Biswajit', 'Debnath', 'biswajit@gmail.com', 'jNs+MgnH2K8OVBS33CgKl59YvEQyMmViOGNlYTI5', '22eb8cea29', '5995e6bf965a61.35801277.jpg', '5995e6bf96b7f7.02512707'),
(4, 'Joydip', 'Chowdhury', 'joydip@gmail.com', 'LoRI6JZIicSmUOETZGrBidhGA5szZmM1NjIzNWU3', '3fc56235e7', '5995e77344c8f6.95583353.jpg', '5995e7734522d3.25948472'),
(5, 'Mohammad Azwad', 'Hasan Chowdhury', 'azwad@gmail.com', 'gbdqKpKLb+dr0dvlGTO8qxxB641lNGYxYzE0MTA0', 'e4f1c14104', '5995e8269eddb8.10828208.jpg', '5995e8269f39e2.69260335'),
(6, 'Niyaz', 'Bin Hashem', 'niloy@gmail.com', '9C6GjcwWbbP/TcJJ7J1qRL7L91oyMjAxYzk4NWM0', '2201c985c4', '5995e8dc3f8da6.93542905.jpg', '5995e8dc404846.31501770'),
(7, 'Kazi Asfaq', 'Ahmed Ador', 'ador@gmail.com', 'bpbsCJ79HO/zy5lJ8K+GZ/36FmVjNmUyYTZmMDY4', 'c6e2a6f068', '5995e977baf5f0.41627401.jpg', '5995e977bb5477.06976623'),
(8, 'Asif', 'Khan', 'asif@gmail.com', 'QB9OnJ+judJkrk6Hdcmm5gIcs2NhYTE1OTg5NTBm', 'aa1598950f', '5995ea14202ab4.32452676.jpg', '5995ea1420e927.39078154'),
(9, 'Asadujjaman', 'Nayeem', 'nayem@gmail.com', 'YfE97lFEkz0FRYpFrUsSjOi0twtiMzg5MWU1NjQw', 'b3891e5640', '5995eaba03b656.86969073.jpg', '5995eaba041991.07274439'),
(10, 'Mohammad Mehedi', 'Hasan Tonmoy', 'tonmoy@gmail.com', 'fnXiWE4f1kQv+aMXmxKcUOVVIcQ4MmRkNDZkNDcz', '82dd46d473', '5995eb57dd2304.83306033.jpg', '5995eb57dd81f5.97519484'),
(11, 'KH', 'Himel', 'himel@gmail.com', 'H/n+RJuoosqW0Vn830f96qs9mrNkMWJmN2VmMjI3', 'd1bf7ef227', '5995ec05030b44.05461610.jpg', '5995ec05036bb3.79933321');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blood_donor`
--
ALTER TABLE `blood_donor`
  ADD PRIMARY KEY (`bdid`),
  ADD KEY `bid` (`bid`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`cid`),
  ADD KEY `pid` (`pid`),
  ADD KEY `commenter_id` (`commenter_id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`did`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `ref_key` (`ref_key`),
  ADD KEY `hid` (`hid`);

--
-- Indexes for table `fire_brigade`
--
ALTER TABLE `fire_brigade`
  ADD PRIMARY KEY (`fid`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `ref_key` (`ref_key`);

--
-- Indexes for table `hospital`
--
ALTER TABLE `hospital`
  ADD PRIMARY KEY (`hid`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `ref_key` (`ref_key`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`lid`),
  ADD UNIQUE KEY `ref_key` (`ref_key`);

--
-- Indexes for table `mobile_numbers`
--
ALTER TABLE `mobile_numbers`
  ADD PRIMARY KEY (`mid`),
  ADD UNIQUE KEY `ref_key` (`ref_key`),
  ADD UNIQUE KEY `numbers` (`numbers`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`pid`),
  ADD KEY `uid` (`uid`);

--
-- Indexes for table `security`
--
ALTER TABLE `security`
  ADD PRIMARY KEY (`sid`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `ref_key` (`ref_key`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `ref_key` (`ref_key`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blood_donor`
--
ALTER TABLE `blood_donor`
  MODIFY `bdid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `did` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `fire_brigade`
--
ALTER TABLE `fire_brigade`
  MODIFY `fid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `hospital`
--
ALTER TABLE `hospital`
  MODIFY `hid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `lid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;
--
-- AUTO_INCREMENT for table `mobile_numbers`
--
ALTER TABLE `mobile_numbers`
  MODIFY `mid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `security`
--
ALTER TABLE `security`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
