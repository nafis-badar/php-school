-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 28, 2019 at 12:22 AM
-- Server version: 5.7.14
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sms`
--

-- --------------------------------------------------------

--
-- Table structure for table `modules`
--

DROP TABLE IF EXISTS `modules`;
CREATE TABLE `modules` (
  `id` int(11) NOT NULL,
  `file` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `modules`
--

INSERT INTO `modules` (`id`, `file`) VALUES
(1, 'error.php');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

DROP TABLE IF EXISTS `pages`;
CREATE TABLE `pages` (
  `ID` int(11) NOT NULL,
  `LinkName` varchar(100) DEFAULT NULL,
  `Content` mediumtext,
  `Identity` varchar(100) DEFAULT NULL,
  `Type` varchar(11) DEFAULT NULL,
  `IsMenu` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `CODE` text,
  `Icon` varchar(45) DEFAULT NULL,
  `MID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `OnClick` varchar(255) DEFAULT NULL,
  `Href` varchar(255) DEFAULT NULL,
  `IsActive` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `HasSubMenu` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `IsSubMenu` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `SORT` int(10) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`ID`, `LinkName`, `Content`, `Identity`, `Type`, `IsMenu`, `CODE`, `Icon`, `MID`, `OnClick`, `Href`, `IsActive`, `HasSubMenu`, `IsSubMenu`, `SORT`) VALUES
(1, 'Home page', 'home.php', 'index', 'page', 0, '', '', 66, '', '', 1, 0, 0, 0),
(2, 'Operation', 'Operation', 'operation', 'page', 1, '', '', 0, '', '', 1, 1, 0, 0),
(3, 'Master', 'Master', 'master', 'page', 1, NULL, '', 0, NULL, NULL, 1, 1, 0, 0),
(4, 'gallery', 'gallerycontent.php', 'gallery', 'page', 0, NULL, '', 0, NULL, NULL, 0, 0, 0, 0),
(5, 'Item Group', 'itemgroup.php', 'itemgroup', 'page', 0, 'redirectBypagewithIDValue(\'itemgroup\',0,0);', '', 75, NULL, NULL, 1, 0, 1, 0),
(6, 'Item category', 'itemcategory.php', 'itemcategory', 'page', 0, 'redirectBypagewithIDValue(\'itemcategory\',0,0);', '', 75, '', '', 1, 0, 1, 0),
(7, 'productsearch', 'productsearch.php', 'productsearch', 'page', 0, NULL, '', 0, NULL, NULL, 0, 0, 0, 0),
(8, 'cart', 'cart.php', 'cart', 'page', 0, NULL, '', 0, NULL, NULL, 0, 0, 0, 0),
(9, 'signup', 'signup.php', 'signup', 'page', 0, NULL, '', 0, NULL, NULL, 0, 0, 0, 0),
(10, 'login', 'login.php', 'login', 'page', 0, NULL, '', 0, NULL, NULL, 0, 0, 0, 0),
(11, 'Menu', 'index_view.php', 'menu', 'page', 0, NULL, '', 0, NULL, NULL, 1, 0, 0, 0),
(12, 'memberprofile', 'memberprofile.php', 'memberprofile', 'page', 0, NULL, '', 0, NULL, NULL, 0, 0, 0, 0),
(13, 'admin', 'adminprogram.php', 'admin', 'page', 0, NULL, '', 0, NULL, NULL, 0, 0, 0, 0),
(14, 'contactus', 'contact.php', 'contactus', 'page', 0, NULL, '', 0, NULL, NULL, 0, 0, 0, 0),
(15, 'Journal', 'journal.php', 'journal', 'page', 0, NULL, '', 0, 'redirectBypagewithIDValue(\'journal\',5,0);', NULL, 1, 0, 0, 0),
(16, 'Journal Index', 'index/journal.php', 'indexjournal', 'page', 1, NULL, '', 2, 'redirectBypagewithIDValue(\'indexjournal\',5,0);', NULL, 1, 0, 1, 3),
(17, 'Purchase', 'po.php', 'purchase', 'page', 0, '', '', 0, 'redirectBypagewithIDValue(\'po\',9,0);', '', 1, 0, 0, 0),
(18, 'Purchase Index', 'index/po.php', 'indexpurchase', 'page', 1, '', 'fa fa-list', 2, 'redirectBypagewithIDValue(\'indexpo\',9,0);', '', 1, 0, 1, 1),
(19, 'Sales', 'po.php', 'sales', 'page', 0, '', '', 2, 'redirectBypagewithIDValue(\'po\',16,0);', '', 1, 0, 1, 2),
(20, 'Sales Register', 'index/po.php', 'indexsales', 'page', 1, '', '', 2, 'redirectBypagewithIDValue(\'indexpo\',16,0);', '', 1, 0, 1, 2),
(21, 'Dash Board', 'index_view.php', 'userpage', 'page', 0, NULL, '', 0, NULL, NULL, 0, 0, 0, 0),
(22, 'company', 'company.entry.php', 'company', 'page', 0, NULL, '', 0, NULL, NULL, 0, 0, 0, 0),
(23, 'Office', 'office.php', 'office', 'page', 0, NULL, '', 0, NULL, NULL, 0, 0, 0, 0),
(24, 'Office Index', 'officereport.php', 'officereport', 'page', 0, NULL, '', 0, NULL, NULL, 0, 0, 0, 0),
(25, 'Storage', 'storage.php', 'storage', 'page', 0, NULL, '', 0, 'redirectBypagewithIDValue(\'storage\',0,0);', NULL, 1, 0, 0, 0),
(26, 'Storage Index', 'index/storage.php', 'indexstorage', 'page', 1, NULL, '', 75, 'redirectBypagewithIDValue(\'indexstorage\',0,0);', NULL, 1, 0, 1, 0),
(27, 'Department', 'department.php', 'department', 'page', 0, '', 'glyphicon glyphicon-plus', 75, 'redirectBypagewithIDValue(\'department\',0,0);', '', 1, 0, 1, 33),
(28, 'Department Index', 'departmentreport.php', 'departmentreport', 'page', 0, '', 'fa fa-list', 75, 'redirectBypagewithIDValue(\'departmentreport\',0,0);', '', 1, 0, 1, 34),
(29, 'Transport', 'transport.php', 'transport', 'page', 0, NULL, '', 0, NULL, NULL, 0, 0, 0, 0),
(30, 'Tranport Index', 'transportreport.php', 'transportreport', 'page', 0, NULL, '', 0, NULL, NULL, 0, 0, 0, 0),
(31, 'Employee', 'employee.php', 'employee', 'page', 0, NULL, 'glyphicon glyphicon-plus', 75, 'redirectBypagewithIDValue(\'employee\',0,0);', NULL, 1, 0, 1, 31),
(32, 'Employee Index', 'employeereport.php', 'employeereport', 'page', 1, '', 'fa fa-list', 75, 'redirectBypagewithIDValue(\'employeereport\',0,0);', '', 1, 0, 1, 32),
(33, 'Account Ledger', 'ledger.php', 'ledger', 'page', 0, '', '', 37, 'redirectBypagewithIDValue(\'ledger\',0,0);', '', 1, 0, 0, 0),
(34, 'Account Ledger Index', 'index/ledger.php', 'indexledger', 'page', 1, '', '', 75, 'redirectBypagewithIDValue(\'indexledger\',0,0);', '', 1, 0, 1, 0),
(35, 'Account Group', 'acgroup.php', 'acgroup', 'page', 0, '', '', 36, 'redirectBypagewithIDValue(\'acgroup\',0,0);', '', 1, 0, 0, 0),
(36, 'Account Group Index', 'index/acgroup.php', 'indexacgroup', 'page', 1, '', '', 75, 'redirectBypagewithIDValue(\'indexacgroup\',0,0);', '', 1, 0, 1, 0),
(37, 'Item', 'item.php', 'item', 'page', 0, NULL, '', 0, 'redirectBypagewithIDValue(\'item\',0,0);', NULL, 1, 0, 0, 0),
(38, 'Item Index', 'index/item.php', 'indexitem', 'page', 1, '', 'fa fa-list', 3, 'redirectBypagewithIDValue(\'indexitem\',0,0);', '', 1, 0, 1, 3),
(39, 'VoucherType', 'vouchertype.php', 'vouchertype', 'page', 0, '', '', 0, 'redirectBypagewithIDValue(\'vouchertype\',0,0);', '', 1, 0, 0, 0),
(40, 'VoucherType Index', 'index/vouchertype.php', 'indexvouchertype', 'page', 1, '', '', 3, 'redirectBypagewithIDValue(\'indexvouchertype\',0,0);', '', 1, 0, 1, 8),
(41, 'productUpdate01', 'productUpdate01.php', 'productUpdate01', 'cont', 0, NULL, '', 0, NULL, NULL, 0, 0, 0, 0),
(42, 'Item Group Index', 'index/itemgroup.php', 'indexitemgroup', 'page', 1, '', '', 3, 'redirectBypagewithIDValue(\'indexitemgroup\',0,0);', '', 1, 0, 1, 4),
(43, 'Item Category Index', 'index/itemcategory.php', 'indexitemcategory', 'page', 1, '', '', 3, 'redirectBypagewithIDValue(\'indexitemcategory\',0,0);', '', 1, 0, 1, 5),
(44, 'Unit', 'unit.php', 'unit', 'page', 0, '', 'glyphicon glyphicon-plus', 0, 'redirectBypagewithIDValue(\'unit\',0,0);', '', 1, 0, 1, 16),
(45, 'Unit Index', 'index/unit.php', 'indexunit', 'page', 1, '', 'fa fa-list', 3, 'redirectBypagewithIDValue(\'indexunit\',0,0);', '', 1, 0, 1, 6),
(46, 'Purchase Order', 'po.php', 'po', 'page', 0, NULL, '', 47, 'redirectBypagewithIDValue(\'po\',10,0);', NULL, 1, 0, 1, 0),
(47, 'Purchase Order Index', 'index/po.php', 'indexpo', 'page', 1, '', '', 2, 'redirectBypagewithIDValue(\'indexpo\',10,0);', '', 1, 0, 1, 3),
(50, 'logout', 'logout.php', 'logout', 'page', 0, NULL, '', 0, NULL, NULL, 0, 0, 0, 0),
(51, 'member', 'member.php', 'member', 'page', 0, NULL, '', 0, NULL, NULL, 0, 0, 0, 0),
(52, 'memberreport', 'memberreport.php', 'memberreport', 'page', 0, NULL, '', 0, NULL, NULL, 0, 0, 0, 0),
(53, 'createquiz', 'createquiz.php', 'createquiz', 'page', 0, NULL, '', 0, NULL, NULL, 0, 0, 0, 0),
(54, 'specimen', 'specimen.php', 'specimen', 'page', 0, NULL, '', 0, NULL, NULL, 0, 0, 0, 0),
(55, 'delivery', 'delivery.php', 'delivery', 'page', 0, NULL, '', 0, NULL, NULL, 0, 0, 0, 0),
(56, 'queries', 'queries.php', 'queries', 'page', 0, NULL, '', 0, NULL, NULL, 0, 0, 0, 0),
(57, 'answer', 'answer.php', 'answer', 'page', 0, NULL, '', 0, NULL, NULL, 0, 0, 0, 0),
(58, 'List Of Patient', 'patientreport.php', 'patientreport', 'page', 0, '', 'fa fa-list', 66, 'redirectBypagewithIDValue(\'patientreport\',0,0)', '', 1, 0, 1, 62),
(59, 'doctors', 'doctorreport.php', 'doctors', 'page', 0, NULL, '', 0, NULL, NULL, 0, 0, 0, 0),
(60, 'labassistant', 'labassistant.php', 'labassistant', 'page', 0, NULL, '', 0, NULL, NULL, 0, 0, 0, 0),
(61, 'employee', 'employeereport.php', 'official', 'page', 0, NULL, '', 0, NULL, NULL, 0, 0, 0, 0),
(62, 'Add Test', 'test.php', 'test', 'page', 0, '', 'glyphicon glyphicon-plus', 74, 'redirectBypagewithIDValue(\'test\',0,0);', '#', 1, 0, 1, 8),
(63, 'storeroom', 'storeroom.php', 'storeroom', 'page', 0, NULL, '', 0, NULL, NULL, 0, 0, 0, 0),
(64, 'testdepartment', 'testdepartment.php', 'testdepartment', 'page', 0, NULL, '', 0, NULL, NULL, 0, 0, 0, 0),
(65, 'lab', 'lab.php', 'lab', 'page', 0, NULL, '', 0, NULL, NULL, 0, 0, 0, 0),
(66, 'Pathology', 'developer.php', 'developer', 'page', 0, '', 'glyphicon glyphicon-list-alt', 0, '', '', 1, 1, 0, 6),
(67, 'Doctor', 'doctor.php', 'doctor', 'page', 0, '', 'fa fa-user-md', 0, 'redirectBypagewithIDValue(\'doctors\',0,0)', '#', 1, 0, 0, 21),
(68, 'Patient', 'patient.php', 'patient', 'page', 0, '', 'glyphicon glyphicon-user', 66, 'redirectBypagewithIDValue(\'patient\',0,0)', '#', 1, 0, 1, 61),
(69, 'List of Test', 'testsearch.php', 'testsearch', 'page', 0, '', 'glyphicon glyphicon-list-alt', 74, 'redirectBypagewithIDValue(\'testsearch\',0,0);', '#', 1, 0, 1, 10),
(70, 'Test Group', 'list.testgroup.php', 'testgroupreport', 'page', 0, '', 'fa fa-list', 74, 'redirectBypagewithIDValue(\'testgroupreport\',0,0)', '#', 1, 0, 1, 13),
(71, 'Test Category', 'list.testcategory.php', 'testcategoryreport', 'page', 0, '', 'fa fa-list', 74, 'redirectBypagewithIDValue(\'testcategoryreport\',0,0)', '#', 1, 0, 1, 14),
(72, 'Booking', 'dashboard.php', 'dashboard', 'page', 0, '', 'glyphicon glyphicon-home', 0, 'redirectBypage(\'userpage\');', '', 1, 1, 0, 5),
(73, 'Organisation', 'company.entry.php', 'organisation', 'page', 1, NULL, 'fa fa-building-o', 75, 'redirectBypage(\'organisation\');', NULL, 1, 0, 1, 6),
(74, 'Test', '', '', 'page', 0, '', 'glyphicon glyphicon-list-alt', 75, '', '', 1, 1, 1, 8),
(75, 'Settings', NULL, NULL, NULL, 1, NULL, 'glyphicon glyphicon-cog', 0, NULL, NULL, 1, 1, 0, 30),
(76, 'Perform Test', 'test.perform.php', 'testperform', 'page', 0, NULL, 'fa fa-search', 0, 'redirectBypagewithIDValue(\'testperform\',0,0);', '#', 1, 0, 0, 9),
(77, 'Add Source', 'agency.php', 'agency', 'page', 0, '', 'glyphicon glyphicon-plus', 75, 'redirectBypagewithIDValue(\'agency\',0,0);', '#', 1, 0, 1, 22),
(78, 'Sources', 'agencyreport.php', 'agencies', 'page', 0, '', 'glyphicon glyphicon-user', 0, 'redirectBypagewithIDValue(\'agencies\',0,0);', '#', 1, 0, 0, 23),
(79, 'Create a Booking', 'booking.php', 'booking', 'page', 0, '', 'glyphicon glyphicon-plus', 72, 'redirectBypagewithIDValue(\'booking\',0,0);', '#', 1, 0, 1, 51),
(80, 'List of Booking', 'list.booking.php', 'bookings', 'page', 0, '', 'glyphicon glyphicon-list-alt', 72, 'redirectBypagewithIDValue(\'bookings\',0,0);', '#', 1, 0, 1, 52),
(81, 'Test group', 'testgroup.php', 'testgroup', 'page', 0, '', 'glyphicon glyphicon-plus', 74, 'redirectBypagewithIDValue(\'testgroup\',0,0);', '', 1, 0, 1, 17),
(82, 'Test Category', 'testcategory.php', 'testcategory', 'page', 0, '', 'glyphicon glyphicon-plus', 74, 'redirectBypagewithIDValue(\'testcategory\',0,0);', '', 1, 0, 1, 18),
(83, 'Test Report', 'testreport.php', 'testreport', 'page', 0, NULL, NULL, 0, NULL, NULL, 0, 0, 0, 0),
(84, 'Payment', 'test.payment.php', 'testpayment', 'page', 0, NULL, NULL, 0, NULL, NULL, 0, 0, 0, 0),
(85, 'Cancellation', 'test.cancellation.php', 'cancellation', 'page', 0, NULL, NULL, 0, NULL, NULL, 0, 0, 0, 0),
(86, 'Report', NULL, NULL, NULL, 1, NULL, 'glyphicon glyphicon-list-alt', 0, NULL, NULL, 1, 1, 0, 20),
(87, 'Daily Business Report', 'report.dbr.php', 'dbr', 'page', 0, '', 'glyphicon glyphicon-list-alt', 86, 'redirectBypagewithIDValue(\'dbr\',0,0);', '', 1, 0, 1, 861),
(88, 'Daily Collection Report', 'report.dcr.php', 'dcr', 'page', 0, '', 'glyphicon glyphicon-list-alt', 86, 'redirectBypagewithIDValue(\'dcr\',0,0);', '', 1, 0, 1, 862),
(89, 'Booking Status', 'booking.status.php', 'booking_status', 'page', 0, NULL, NULL, 0, NULL, NULL, 0, 0, 0, 0),
(90, 'Designation', 'designation.php', 'designation', 'page', 0, '', 'glyphicon glyphicon-plus', 75, 'redirectBypagewithIDValue(\'designation\',0,0);', '', 1, 0, 1, 35),
(91, 'List of Designation', 'designationreport.php', 'designationreport', 'page', 0, '', 'fa fa-list', 75, 'redirectBypagewithIDValue(\'designationreport\',0,0);', '', 1, 0, 1, 36),
(92, 'User Role', 'user.permission.php', 'userrole', 'page', 1, '', 'fa fa-list', 0, 'redirectBypagewithIDValue(\'userrole\',0,0);', '', 1, 0, 0, 39),
(93, 'Error Page', 'error.page.php', 'error', 'page', 0, NULL, NULL, 0, NULL, NULL, 1, 0, 0, 0),
(94, 'Pages', 'pages.php', 'pages', 'page', 1, '', 'fa fa-list', 0, 'redirectBypagewithIDValue(\'pages\',0,0);', '', 1, 0, 0, 1),
(95, 'Supplier', 'supplier.php', 'supplier', 'page', 0, '', '', 0, 'redirectBypagewithIDValue(\'supplier\',0,0);', '', 1, 0, 0, 0),
(96, 'Supplier Index', 'index/supplier.php', 'indexsupplier', 'page', 1, '', 'fa fa-list', 0, 'redirectBypagewithIDValue(\'indexsupplier\',0,0);', '', 1, 0, 0, 0),
(97, 'Customer', 'customer.php', 'customer', 'page', 0, '', '', 0, 'redirectBypagewithIDValue(\'customer\',0,0);', '', 1, 0, 0, 0),
(98, 'Customer Index', 'index/customer.php', 'indexcustomer', 'page', 1, '', 'fa fa-list', 0, 'redirectBypagewithIDValue(\'indexcustomer\',0,0);', '', 1, 0, 0, 0),
(99, 'VoucherType Additional', 'vouchertype.additional.php', 'vouchertypeadditional', 'page', 0, NULL, NULL, 0, 'redirectBypagewithIDValue(\'vouchertypeadditional\',0,0);', NULL, 1, 0, 0, 0),
(100, 'Payroll Period', 'payrollperiod.php', 'payrollperiod', 'page', 0, '', '', 0, 'redirectBypagewithIDValue(\'payrollperiod\',0,0);', '', 1, 0, 1, 0),
(101, 'Payroll Period Index', 'index/payrollperiod.php', 'indexpayrollperiod', 'page', 1, '', '', 0, 'redirectBypagewithIDValue(\'indexpayrollperiod\',0,0);', '', 1, 0, 0, 0),
(102, 'Payroll', 'payroll.php', 'payroll', 'page', 0, NULL, 'indexpayroll', 0, 'redirectBypagewithIDValue(\'payroll\',0,0);', NULL, 1, 0, 0, 0),
(103, 'Payroll Index', 'index/payroll.php', 'indexpayroll', 'page', 0, '', '', 0, 'redirectBypagewithIDValue(\'indexpayroll\',0,0);', '', 1, 0, 0, 0),
(104, 'PDF Upload', 'popup.php', 'pdfupload', 'page', 1, '', '', 0, 'redirectBypagewithIDValue(\'pdfupload\',0,0);', '', 1, 0, 0, 0),
(105, 'Payroll Self', 'payrollself.php', 'payrollself', 'page', 0, '', '', 0, 'redirectBypagewithIDValue(\'payrollself\',0,0);', '', 1, 0, 0, 0),
(106, 'News', 'news.php', 'news', 'page', 0, '', '', 0, 'redirectBypagewithIDValue(\'news\',0,0);', '', 1, 0, 0, 0),
(107, 'News Index', 'index/news.php', 'indexnews', 'page', 0, '', '', 0, 'redirectBypagewithIDValue(\'indexnews\',0,0);', '', 1, 0, 0, 0),
(108, 'Register', 'register.php', 'register', 'page', 1, NULL, NULL, 86, 'redirectBypagewithIDValue(\'register\',0,0);', NULL, 1, 0, 1, 1),
(109, 'Opening Stock', 'po.php', 'openingstock', 'page', 0, NULL, NULL, 0, 'redirectBypagewithIDValue(\'po\',24,0);', NULL, 1, 0, 0, 0),
(110, 'Opening Stock Index', 'index/po.php', 'indexopeningstock', 'page', 1, '', '', 3, 'redirectBypagewithIDValue(\'indexpo\',24,0);', '', 1, 0, 1, 6),
(111, 'Stock Register', 'stockregister.php', 'stockregister', 'page', 1, NULL, NULL, 86, 'redirectBypagewithIDValue(\'stockregister\',0,0);', NULL, 1, 0, 1, 2),
(112, 'Transaction', 'Transaction.php', 'Transaction', 'page', 0, NULL, NULL, 0, 'redirectBypagewithIDValue(\'Transaction\',0,0);', NULL, 1, 0, 0, 0),
(113, 'Admission', 'Admission.php', 'admission', 'page', 0, NULL, NULL, 0, 'redirectBypagewithIDValue(\'admission\',0,0);', NULL, 1, 0, 0, 0),
(114, 'Student', 'student.php', 'student', 'page', 0, NULL, NULL, 0, 'redirectBypagewithIDValue(\'student\',0,0);', NULL, 1, 0, 0, 0),
(115, 'Teacher', 'teacher.php', 'teacher', 'page', 0, NULL, NULL, 0, 'redirectBypagewithIDValue(\'teacher\',0,0);', NULL, 1, 0, 0, 0),
(116, 'Student Index', 'index/student.php', 'indexstudent', 'page', 0, NULL, NULL, 0, 'redirectBypagewithIDValue(\'indexstudent\',0,0);', NULL, 1, 0, 0, 0),
(117, 'Class Index', 'index/sclass.php', 'indexsclass', 'page', 0, NULL, NULL, 0, 'redirectBypagewithIDValue(\'indexsclass\',0,0);', NULL, 1, 0, 0, 0),
(118, 'Class', 'sclass.php', 'sclass', 'page', 0, NULL, NULL, 0, 'redirectBypagewithIDValue(\'sclass\',0,0);', NULL, 1, 0, 0, 0),
(119, 'Section Index', 'index/section.php', 'indexsection', 'page', 0, NULL, NULL, 0, 'redirectBypagewithIDValue(\'indexsection\',0,0);', NULL, 1, 0, 0, 0),
(120, 'Section', 'section.php', 'section', 'page', 0, NULL, NULL, 0, 'redirectBypagewithIDValue(\'section\',0,0);', NULL, 1, 0, 0, 0),
(121, 'Student Image Upload', 'StudentImageUpload.php', 'studentimageupload', 'page', 0, NULL, NULL, 0, 'redirectBypagewithIDValue(\'studentimageupload\',0,0);', NULL, 1, 0, 0, 0),
(122, 'Teacher Index', 'index/teacher.php', 'indexteacher', 'page', 0, NULL, NULL, 0, 'redirectBypagewithIDValue(\'indexteacher\',0,0);', NULL, 1, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_academicyear`
--

DROP TABLE IF EXISTS `tbl_academicyear`;
CREATE TABLE `tbl_academicyear` (
  `AcademicYear` int(10) UNSIGNED NOT NULL,
  `FromDate` date DEFAULT NULL,
  `ToDate` date DEFAULT NULL,
  `IsCurrent` int(10) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_academicyear`
--

INSERT INTO `tbl_academicyear` (`AcademicYear`, `FromDate`, `ToDate`, `IsCurrent`) VALUES
(2019, '2019-01-01', '2019-12-31', 0),
(2020, '2020-01-01', '2020-12-31', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_accounttype`
--

DROP TABLE IF EXISTS `tbl_accounttype`;
CREATE TABLE `tbl_accounttype` (
  `ID` int(10) UNSIGNED NOT NULL,
  `Name` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_accounttype`
--

INSERT INTO `tbl_accounttype` (`ID`, `Name`) VALUES
(1, 'Acctivity Accounts'),
(2, 'Inventory Accounts'),
(3, 'Additional Accounts'),
(4, 'Tax Accounts');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_address`
--

DROP TABLE IF EXISTS `tbl_address`;
CREATE TABLE `tbl_address` (
  `ID` int(10) UNSIGNED NOT NULL,
  `HouseNo` varchar(45) DEFAULT NULL,
  `AddressLine1` varchar(100) DEFAULT NULL,
  `AddressLine2` varchar(100) DEFAULT NULL,
  `LANDMARK` varchar(45) DEFAULT NULL,
  `VILL` varchar(45) DEFAULT NULL,
  `PO` varchar(45) DEFAULT NULL,
  `DIST` varchar(45) DEFAULT NULL,
  `PIN` varchar(15) DEFAULT NULL,
  `State` varchar(45) DEFAULT NULL,
  `StateID` varchar(45) DEFAULT NULL,
  `Country` varchar(45) DEFAULT NULL,
  `CountryID` varchar(45) DEFAULT NULL,
  `ContactPerson` varchar(45) DEFAULT NULL,
  `ContactNo` varchar(100) DEFAULT NULL,
  `Email` varchar(45) DEFAULT NULL,
  `WebSite` varchar(45) DEFAULT NULL,
  `Address` text,
  `MacID` varchar(45) DEFAULT NULL,
  `CreatedBy` int(10) UNSIGNED DEFAULT NULL,
  `CreateTime` datetime DEFAULT NULL,
  `OldID` int(10) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_address`
--

INSERT INTO `tbl_address` (`ID`, `HouseNo`, `AddressLine1`, `AddressLine2`, `LANDMARK`, `VILL`, `PO`, `DIST`, `PIN`, `State`, `StateID`, `Country`, `CountryID`, `ContactPerson`, `ContactNo`, `Email`, `WebSite`, `Address`, `MacID`, `CreatedBy`, `CreateTime`, `OldID`) VALUES
(1, NULL, '', '', '', '', '', '', '', 'WBs', '33', '', '91', '', '999999', 'sa@g.com', '', 'DRAEAE\nfasfasfs', '0', 3, '2019-03-14 20:42:07', 0),
(2, '', '', '', '', '', '', '', '', 'Wb', '33', '', '91', '', '7063125844', 'pratima@gmail.com', '', 'qeqweq', '0', 3, '2019-12-28 05:44:01', 0),
(3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'AMADPUR,BIRBHUM', NULL, NULL, '2016-11-11 15:04:59', 0),
(4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'DO', NULL, NULL, '2016-11-11 15:04:59', 0),
(5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'NABAGRAM,P.O- MANKUNDU, P.S.- BHADRESWAR, DIST- HOOGHLY, PIN- 712139', NULL, NULL, '2016-11-11 15:55:08', 0),
(6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'KALNA, JAPATPARA, BURDWAN PIN- 713409\n', NULL, NULL, '2016-11-11 16:02:56', 0),
(7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'KAMTAI, P.O- MEGHSAR, P.S- PANDUA , HOOGHLY, PIN- 712149', NULL, NULL, '2016-11-11 16:29:50', 0),
(8, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '25 R.K.BANERJEE SARANI, P.O.- M.G.COLONY, HOOGHLY, PIN- 712139', NULL, NULL, '2016-11-11 16:36:05', 0),
(9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'UTTAR BENAPUR, P.O- BENAPUR CHANDANAPARA, BAGNAN, HOWRAH', NULL, NULL, '2016-11-11 16:39:02', 0),
(10, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ARAMBAG, P.O = P.S- ARAMBAG, HOOGHLY.', NULL, NULL, '2016-11-11 16:41:09', 0),
(11, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'DAHARKUNDU, ARAMBAG, HOOGHLY', NULL, NULL, '2016-11-11 16:44:26', 0),
(12, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'PALPARA LANE, NABADOY PALLY, BHADRESWAR, P.O- MANKUNDU, HOOGHLY', NULL, NULL, '2016-11-11 16:46:31', 0),
(13, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'SAKTI PARA, BARANILPUR, BURDWAN', NULL, NULL, '2016-11-11 16:47:53', 0),
(14, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'RAJA BALLAV BATI, HARIPAL, HOOGHLY PIN- 712405', NULL, NULL, '2016-11-11 16:49:10', 0),
(15, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'PALPARA LANE, P.O- BHADRESWAR, HOOGHLY,. PIN- 712125', NULL, NULL, '2016-11-11 16:52:19', 0),
(16, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'BARASAT, DASHOBHUJA TALA, CHANDANNAGAR , HOOGHLY', NULL, NULL, '2016-11-11 16:55:30', 0),
(17, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'MAHANAD NAGARPARA, P.O- MAHANAD, P.S- POLBA, HOOGHLY , PIN- 712149', NULL, NULL, '2016-11-11 17:30:22', 0),
(18, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'MOLOY PUR, P.S.- ARAMBAGH, HOOGHLY, PIN- 712420', NULL, NULL, '2016-11-12 13:08:34', 0),
(19, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ANKUPUR, KIRNAHAR, P.S. - NANOOR, BIRBHUM', NULL, NULL, '2016-11-12 13:13:45', 0),
(20, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'SIJA, KHAMARGACHI, HOOGHLY, PIN- 712515', NULL, NULL, '2016-11-12 13:19:54', 0),
(21, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'BILAYET PUR, P.O- SINHET, P.S.- DADPUR, HOOGHLY, PIN- 712305', NULL, NULL, '2016-11-12 13:32:01', 0),
(22, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'KHASMORAH, DOMJUR, HOWRAH, PIN- 711411', NULL, NULL, '2016-11-12 13:37:21', 0),
(23, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '123F GANDHI  GRAM, KANPUR, PIN- 208007', NULL, NULL, '2016-11-12 13:41:06', 0),
(24, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'BABUPUR, P.O- BUDHIA, P.S- E. BAZAR, MALDA, PIN- 732128', NULL, NULL, '2016-11-12 13:56:58', 0),
(25, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '10 NS ROAD, NEAR SUBAS  MAIDAN, P.O - TELINEPARA, HOOGHLY', NULL, NULL, '2016-11-12 14:04:29', 0),
(26, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '70/B/26 K.B. LANE, P.O.- RISHRA, HOOGHLY', NULL, NULL, '2016-11-12 14:08:32', 0),
(27, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '70A/2/92/1 K.B. LANE, SRIRSMPUR, HOOGHLY', NULL, NULL, '2016-11-12 14:13:52', 0),
(28, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '130/124 BAGAHI, KJDWAI NAGAR, KANPUR, PIN- 208023', NULL, NULL, '2016-11-12 14:19:09', 0),
(29, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'KHAMORAH, DOMJUR, HOWRAH', NULL, NULL, '2016-11-12 14:24:37', 0),
(30, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'VILL+POST - RUDRAPUR, DOMJUR, HOWRAH, PIN- 711411', NULL, NULL, '2016-11-12 14:28:57', 0),
(31, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'GOURNOI, KHAMARGACHHI, BALAGARH, HOOGHLY', NULL, NULL, '2016-11-12 14:33:42', 0),
(32, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'MAKAIYA, BALUR, RATUA, MALDA, PIN- 732205', NULL, NULL, '2016-11-12 14:41:31', 0),
(33, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'MAKAIYA, RATUA, MALDA', NULL, NULL, '2016-11-12 14:48:04', 0),
(34, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'VILL+P.O- MOLOYPUR, P.S.- ARAMBAGH, DIST- HOOGHLY, PIN- 712420', NULL, NULL, '2016-11-12 15:07:48', 0),
(35, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'NAKRAKURI, DEOTALA, GAZOLE, MALDA', NULL, NULL, '2016-11-12 15:11:43', 0),
(36, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'DASPARA, JAGADISHPURHAT, LILUAH, PIN-711328', NULL, NULL, '2016-11-12 15:21:04', 0),
(37, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'JAGADISHPURHAT, DASPARA,LILUAH, PIN- 711328', NULL, NULL, '2016-11-12 15:23:31', 0),
(38, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'NARAYANPUR, RADHANAGAR, SHYAMPUR, HOWRAH, PIN- 711312', NULL, NULL, '2016-11-12 15:28:06', 0),
(39, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'SHYAMPUR, HOWRAH', NULL, NULL, '2016-11-12 15:30:47', 0),
(40, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'CHANDANNAGAR , HOOGHLY', NULL, NULL, '2016-11-12 15:42:43', 0),
(41, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'NARAYANPUR, RADHANAGAR, SHYAMPUR, HOWRAH', NULL, NULL, '2016-11-12 16:05:13', 0),
(42, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'SP SUKHABRISTI ACTION AREA 3', NULL, NULL, '2016-11-15 13:20:52', 0),
(43, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'KAHARPARA, BARHARWA, SAHI BAGAN, JHARKHAND', NULL, NULL, '2016-11-15 13:24:38', 0),
(44, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'BAMANGACHHI, DUTTAPUKUR, 24PGS(N), PIN- 743248', NULL, NULL, '2016-11-15 13:30:01', 0),
(45, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'BAMANGACHHI, DUTTAPUKUR, 24PGS(N)', NULL, NULL, '2016-11-15 13:33:48', 0),
(46, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4/53 RANI RASHMONI GARDEN LANE, KOLKATA- 700015', NULL, NULL, '2016-11-15 13:37:43', 0),
(47, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'PURB SONATIKARI, CHANDPARA BAZAR, GAIGHATA, 24 PGS(N)', NULL, NULL, '2016-11-15 14:50:34', 0),
(48, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'SONATIKARI, CHANDPARA BAZAR, 24 PGS(N)', NULL, NULL, '2016-11-15 14:56:40', 0),
(49, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'AMADPUR, BIRBHUM', NULL, NULL, '2016-11-15 14:59:23', 0),
(50, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'DHAKURIA, P.O- DHAKURIA KALIBARI, 24 PGS (N)', NULL, NULL, '2016-11-15 15:06:59', 0),
(51, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'BARASEHANA, JHIKRA, GAIGHATA, 24 PGS (N)', NULL, NULL, '2016-11-15 15:11:57', 0),
(52, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'BONBONIA, HABRA, 24 PGS (N)', NULL, NULL, '2016-11-15 15:16:30', 0),
(53, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'BONBONIA, HABRA', NULL, NULL, '2016-11-15 15:19:25', 0),
(54, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'GOAL BATHAN, GAIGHATA, 24 PGS (N)', NULL, NULL, '2016-11-15 15:23:40', 0),
(55, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'SABAIPUR, GOAL BATHAN,  GAIGHATA, 24 PGS (N)', NULL, NULL, '2016-11-15 15:27:32', 0),
(56, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'PURB SONATIKARI, CHANDPARA BAZAR', NULL, NULL, '2016-11-15 15:31:17', 0),
(57, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'BHADURIA, COLONY RAM CHANDRA PUR, GAIGHATA, 24 PGS (N)\nPIN- 743287', NULL, NULL, '2016-11-15 15:43:39', 0),
(58, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'KHARUA RAJAPUR (DAKSHIN PARA),  P.O- KHARUA RAJAPUR, BONGAON, 24 PGS (N), PIN- 743245', NULL, NULL, '2016-11-15 15:47:09', 0),
(59, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'PURBA SONATIKARI,P.O.- CHANDPARA BAZAR, P.S.- GAIGHATA, 24 PGS (N), \nPIN- 743245', NULL, NULL, '2016-11-15 15:52:45', 0),
(60, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'VILL+P.O- HIJULI, DHANTALA, NADIA, PIN- 741201', NULL, NULL, '2016-11-15 15:58:21', 0),
(61, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'DHAKURIA SHAKTI COLONY, P.O- DHAKURIA KALIBARI, GAIGHATA, 24 PGS (N), PIN-743246', NULL, NULL, '2016-11-15 16:04:52', 0),
(62, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'DHAKURIA, P.O- DHAKURIA KALIBARI, P.S- GAIGHATA, 24 PGS (N), PIN- 743245', NULL, NULL, '2016-11-15 16:10:19', 0),
(63, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'KHANTURA SAHEB BAGAN, P.O- KHANTURA, 24 PGS (N)\nPIN- 743273', NULL, NULL, '2016-11-15 16:15:24', 0),
(64, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'BARAN BERIA PASCHIMPARA, P.O- BARAN BERIA, P.S- DHANTALA, NADIA,\nPIN-741504', NULL, NULL, '2016-11-15 16:20:32', 0),
(65, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'SOUTH ARANGHATA, P.O- ARANGHATA, NADIA,PIN- 741501', NULL, NULL, '2016-11-15 16:26:14', 0),
(66, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'UTTARPARA, P.O- HALALPUR, P.S- DHANTALA, NADIA, PIN- 741201', NULL, NULL, '2016-11-15 16:29:57', 0),
(67, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'DHAKURIA KALIBARI, P.S- GAIGHATA, 24 PGS (N), PIN- 743245', NULL, NULL, '2016-11-15 16:37:02', 0),
(68, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'SONATIKARI P.O- CHANDPARA BAZAR, GAIGHATA, 24 PGS (N)', NULL, NULL, '2016-11-15 16:42:37', 0),
(69, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'DHAKURIA, P.O- DHAKURIA KALIBARI, CHANDPARA', NULL, NULL, '2016-11-15 16:46:21', 0),
(70, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'CHHITKA, P.O- CHHITKA DASPARA, P.S- TEHATTA, PIN- 741163', NULL, NULL, '2016-11-15 16:51:20', 0),
(71, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'SONATIKARI, P.O- CHANDPARA BAZAR, 24 PGS (N), PIN- 743245', NULL, NULL, '2016-11-15 16:56:08', 0),
(72, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'SONATIKARI, CHANDPARA BAZAR, GAIGHATA, 24 PGS (N)', NULL, NULL, '2016-11-15 17:07:29', 0),
(73, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'DHAKURIA, P.O- DHAKURIA KALIBARI, P.S- GAIGHATA, 24 PGS  (N),', NULL, NULL, '2016-11-15 17:15:04', 0),
(74, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'SATBERIA, GOPALNAGAR, 24 PGS (N)', NULL, NULL, '2016-11-15 17:18:53', 0),
(75, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'UDAYAN PALLY, P.O- BATANAGAR, P.S- MAHESHTALA, 24 PGS (N)', NULL, NULL, '2016-11-15 17:21:55', 0),
(76, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'MAGURKHALI, P.O- RUDRAPUR, P.S- BADURIA, 24 PGS (N)', NULL, NULL, '2016-11-15 17:36:41', 0),
(77, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'SINGA, NADIA', NULL, NULL, '2016-11-15 17:38:32', 0),
(78, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'SINGA, P.O- DIGWAGRAM, HABRA,  PIN- 741257', NULL, NULL, '2016-11-15 17:43:09', 0),
(79, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'MAGURKHALI,P.O- RUDRAPUR, P.S- BADURIA, 24 PGS (N)\nPIN- 743401', NULL, NULL, '2016-11-15 17:49:43', 0),
(80, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '18, DUMDUM ROAD, GHUGHUDANGA, BELGACHIA, PIN- 700030', NULL, NULL, '2016-11-15 17:53:08', 0),
(81, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'RAMCHANDRAPUR( MATHPARA), P.O- COLONY RAMCHANDRAPUR, 24 PGS (N), PIN-743287', NULL, NULL, '2016-11-15 17:56:53', 0),
(82, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'C/O- SANKAR ROY, NETAJI SUBHASH PALLY(MAIN ROAD), P.O- DURGAPUR-1,P.S- COKE OVEN, BURDWAN, PIN- 713201', NULL, NULL, '2016-11-15 18:01:20', 0),
(83, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'KALINGA, P.O- ANDHARMANIK, P.S- BADURIA, 24 PGS(N), PIN- 743401', NULL, NULL, '2016-11-15 18:06:58', 0),
(84, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'KALUPUR, BONGAON, 24PGS(N), PIN- 743235', NULL, NULL, '2016-11-15 18:17:28', 0),
(85, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '205 B. BLOCK, ANANDA NIKETAN, SUKCHAR, KOLKATA', NULL, NULL, '2016-11-16 11:50:13', 0),
(86, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '9/1 PALPARA LANE, P.O- MANKUNDU, HOOGHLY, PIN- 712139', NULL, NULL, '2016-11-16 11:56:52', 0),
(87, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'MOHADANGA COLONY, P.O- MANKUNDU, HOOGHLY, PIN-712139', NULL, NULL, '2016-11-16 11:59:28', 0),
(88, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'TELENIPARA, BHADRESWAR, P.O- BHADRESWAR, HOOGHLY, PIN- 712125', NULL, NULL, '2016-11-16 12:05:49', 0),
(89, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'BARASAT, DASHOBHUJA TALA, GARER DHAR, CHANDAN NAGAR, HOOGHLY, PIN- 712136', NULL, NULL, '2016-11-16 12:17:01', 0),
(90, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'CHANDANNAGAR, HOOGHLY, PIN- 712136', NULL, NULL, '2016-11-16 12:21:03', 0),
(91, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'KATHARI, P.O- TAKI, P.S- BASIRHAT, 24 PGS (N), PIN- 743429', NULL, NULL, '2016-11-16 12:29:00', 0),
(92, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ANANDA NIKETAN HOSING, H.C. DUTTA ROAD, P.O- SUKCHAR,, B.T. ROAD, KOL- 7000115', NULL, NULL, '2016-11-15 23:14:45', 0),
(93, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'PARASIDUNGRI, P.O- SUKLARA, EAST SINGBHUM\nPIN-832304', NULL, NULL, '2016-11-15 23:21:28', 0),
(94, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'DULMI NADIHA, PURULIA, PIN- 723101', NULL, NULL, '2016-11-15 23:25:17', 0),
(95, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'DEOLTAND, P.S- ICHAGARH, SERAIKELA KHARSWAN, JAMSEDPUR, PIN- 832404', NULL, NULL, '2016-11-15 23:29:00', 0),
(96, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'BARA GAMHARIA, ST ROAD, SHAKTI NAGAR, P.S- ADITYAPUS, SARAIKELA, TATANAGAR, PIN- 832108', NULL, NULL, '2016-11-15 23:35:37', 0),
(97, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'BABURAMDIH, P.S- TAMAR, RANCHI, PIN- 835225', NULL, NULL, '2016-11-15 23:49:08', 0),
(98, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'DEOLTAND, P.S- ICHAGARH, SERAIKELA KHARSWAN, JHARKHAND, JAMSEDPUR, PIN- 832404', NULL, NULL, '2016-11-15 23:57:16', 0),
(99, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'CHALTABERIA, P.O+ P.S- DUTTAPUKUR, 24PGS(N), PIN- 743248', NULL, NULL, '2016-11-16 00:02:25', 0),
(100, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '8/34, HATIBAGAN ROAD(NORTH), P.O- ENTALLY, P.S- BENIAPUKUR, PIN- 700014', NULL, NULL, '2016-11-16 00:08:33', 0),
(101, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'TAKI DAXINRARI PARA, P.O- TAKI, P.S.- HASNABAD, 24 PGS (N), ', NULL, NULL, '2016-11-16 00:14:01', 0),
(102, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'SRIRAMPUR, P.O+P.S- ANDAL, BURDWAN, PIN- 713321', NULL, NULL, '2016-11-16 00:25:10', 0),
(103, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'DIGNALA, P.O- ANDAL, BURDWAN, PIN- 713321', NULL, NULL, '2016-11-16 00:37:44', 0),
(104, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'DIGNALA, P.O- ANDAL, BARDDHAMAN, PIN- 713321', NULL, NULL, '2016-11-16 00:42:09', 0),
(105, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'SRIRSMPUR, P.O+P.S- ANDAL, BURDWAN, ', NULL, NULL, '2016-11-16 00:47:57', 0),
(106, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'SRIRAMPUR, P.O+P.S- ANDAL, BURDWAN, ', NULL, NULL, '2016-11-16 00:56:32', 0),
(107, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1/5 COLONY (NEAR DURGA MANDIR), ANDAL BURDWAN', NULL, NULL, '2016-11-16 01:00:41', 0),
(108, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1/5 COLONY(NEAR DURGA MANDIR), ANDAL BURDWAN,', NULL, NULL, '2016-11-16 01:04:30', 0),
(109, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'GITANJALI PARK, FLAT NO- 2 (1ST FLOOR), PRATHAM APARTMENT, ANDAL MORE, PIN- 713321', NULL, NULL, '2016-11-16 01:12:07', 0),
(110, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'GITANJALI PARK , ANDAL MORE,', NULL, NULL, '2016-11-16 01:14:14', 0),
(111, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5-7 RAMANUJAM ROAD, 3 DURGAPUR, BURDWAN, PIN- 713205', NULL, NULL, '2016-11-16 01:18:10', 0),
(112, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'WORK SHOP COLONY, ANDAL, BURDWAN, PIN-713321', NULL, NULL, '2016-11-16 01:30:26', 0),
(113, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'PAKHANNA, P.S- BARJORA, BANKURA, PIN- 722208', NULL, NULL, '2016-11-16 01:39:22', 0),
(114, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'RAMNAGAR, P.O- PANDAVESWAR, BURDWAN, PIN- 713346', NULL, NULL, '2016-11-16 01:45:51', 0),
(115, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'NATUNGRAM, P.O+P.S- TARAKESWAR, PIN- 712410', NULL, NULL, '2016-11-16 02:01:04', 0),
(116, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '18/17 BHARATI ROAD,B ZONE, DURGAPUR, PIN- 713205', NULL, NULL, '2016-11-16 02:05:29', 0),
(117, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '18/17 BHARATI ROAD B ZONE, DURGAPUR, BURDWAN', NULL, NULL, '2016-11-16 02:09:00', 0),
(118, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '18/17 BHARATI ROAD B ZONE, DURGAPUR, BURDWAN, PIN- 713205', NULL, NULL, '2016-11-16 02:12:06', 0),
(119, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '3A/4 RABINDRA PALLY DHANDABAG,P.O- AMRAI, DURGAPUR, BURDWAN, PIN- 713203', NULL, NULL, '2016-11-16 02:19:58', 0),
(120, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'NEAR JBS CLUB, BAISHNAD PARA, BENACHITY, DURGAPUR, BURDWAN', NULL, NULL, '2016-11-16 02:27:05', 0),
(121, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'RAMNAGAR, P.O- RAMNAGAR, VIA-  PANDAVESWAR, PIN- 713346', NULL, NULL, '2016-11-16 02:31:37', 0),
(122, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'PAKHANNA, BARJORA, BANKURA, PIN- 722208', NULL, NULL, '2016-11-16 02:35:34', 0),
(123, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'TENTULTALA COLONY, KALI MANDIR, DURGAPUR, PIN- 713215', NULL, NULL, '2016-11-16 02:41:28', 0),
(124, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'PAKHANNA, BANKURA, BARJORA, PIN- 722208', NULL, NULL, '2016-11-16 02:44:33', 0),
(125, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'KALINAGAR HAT, P.O- KALINAGAR, P.S- SANDESH KHALI, 24 PGS(N),  ', NULL, NULL, '2016-11-16 02:59:46', 0),
(126, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'KALINAGAR, SANDESH KHALI, 24 PGS(N), PIN- 743442', NULL, NULL, '2016-11-16 03:02:49', 0),
(127, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'SHANKCHURA, P.O- DAKSHIN BAGUNDI, BASIRHAT, 24PGS(N), PIN- 743429', NULL, NULL, '2016-11-16 03:05:56', 0),
(128, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'BARA SHEKPURA, MADHUPUR, MADHUPUR, PIN- 815353', NULL, NULL, '2016-11-16 03:09:09', 0),
(129, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'BARA SHEKHPURA, MADHUPUR, PIN- 815353', NULL, NULL, '2016-11-16 03:12:17', 0),
(130, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'BARA SHAEKHAPURA, MADHUPUR, PIN- 815353', NULL, NULL, '2016-11-16 03:15:27', 0),
(131, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'TILI, P.O- KALUPUR, 24PGS (N), BONGAON, PIN- 743235', NULL, NULL, '2016-11-16 22:35:22', 0),
(132, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'TILI, P.O- KALUPUR, P.S- BOGAIGHATA, 24 PGS(N),', NULL, NULL, '2016-11-16 22:39:02', 0),
(133, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4/53 RANI RASHMONI GARDEN LANE, KOLKATA, PIN- 700015', NULL, NULL, '2016-11-17 00:17:25', 0),
(134, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'KALUPUR, BONGAON, 24 PGS(N), PIN- 743235', NULL, NULL, '2016-11-17 00:26:02', 0),
(135, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'KAROLA BABUPARA, P.O- THAKURNAGAR, P.S- GAIGHATA, 24 PGS (N), PIN- 743287', NULL, NULL, '2016-11-17 00:30:57', 0),
(136, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'GOBARDANGA KALIBARI MORE,  P.O- GOBARDANGA, HABRA, PIN- 743235', NULL, NULL, '2016-11-17 00:38:37', 0),
(137, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'MAGUR KHALI, RUDRAPUR, P.S- BADURIA, 24 PGS (N), PIN- 743401', NULL, NULL, '2016-11-17 01:06:46', 0),
(138, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'KALINGA, P.O- ANDHARMANIK, 24PGS(N)', NULL, NULL, '2016-11-17 01:10:10', 0),
(139, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'NETAJI SUBHAS PALLY, DURGAPUR-1, P.S- COKE OVEN, BURDWAN, PIN- 713201', NULL, NULL, '2016-11-17 01:15:23', 0),
(140, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'UTTAR MAHADIPUR, P.S- ENGLISHBAZAR, MALDA', NULL, NULL, '2016-11-17 01:25:44', 0),
(141, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'BULBULCHANDI, HABIBPUR,MALDA PIN- 732122', NULL, NULL, '2016-11-17 01:31:13', 0),
(142, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'MALDA, ENGLISH BAZAR', NULL, NULL, '2016-11-17 01:35:12', 0),
(143, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'SARADAPALLY, MALDA, PIN- 732101', NULL, NULL, '2016-11-17 01:38:35', 0),
(144, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'RAMKELI GOUR, MALDA, ENGLISH BAZAR,', NULL, NULL, '2016-11-17 01:42:40', 0),
(145, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'UDHUYA, RADHANAGAR, JHARKHAND,', NULL, NULL, '2016-11-17 01:45:30', 0),
(146, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'MALDA, ENGLISH BAZAR, PIN- 732101', NULL, NULL, '2016-11-17 01:50:16', 0),
(147, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'UTTAR MAHADIPUR, ENGLISHBAZAR, MALDA', NULL, NULL, '2016-11-17 01:54:27', 0),
(148, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'KISHALAY SCHOOL LANE, P.O- BAMANGACHI, 24PGS (N)', NULL, NULL, '2016-11-21 00:26:44', 0),
(149, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '14 PJ MILLS LINE, BAGKHAL, RISHRA, PIN- 712248', NULL, NULL, '2016-11-21 01:25:28', 0),
(150, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'BHALUKA BAZAR, H.C.PUR, MALDA', NULL, NULL, '2016-11-21 01:33:05', 0),
(151, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'MAKAIYA,P.O- BALUR, P.S- RATUA, MALDA, PIN- 732205', NULL, NULL, '2016-11-21 01:38:09', 0),
(152, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ANKU PUR, P.O KIRNAHAR, P.S- NANOOR, BIRBHUM, PIN- 731302', NULL, NULL, '2016-11-21 02:48:12', 0),
(153, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'SRIRAM PUR, HOOGHLY', NULL, NULL, '2016-11-21 02:57:21', 0),
(154, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'BALUPUR,  RATUA, MALDA', NULL, NULL, '2016-11-21 03:02:56', 0),
(155, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'BALUPUR, RATUA, MALDA,', NULL, NULL, '2016-11-21 03:06:59', 0),
(156, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'KAMTAI, MEGHSAR, HOOGHLY', NULL, NULL, '2016-11-21 03:26:32', 0),
(157, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'BAMANGACHHI, P.S- DUTTAPUKUR, 24PGS(N)', NULL, NULL, '2016-11-21 03:31:34', 0),
(158, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'GOURNOI, P.O- KHAMARGACHHI, P.S- BALAGARH, HOOGHLY, PIN- 712515', NULL, NULL, '2016-11-21 03:35:49', 0),
(159, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'DASPARA, JAGADISH PUR,  P.O- JAGADISHPUR HAT, P.S- LILUAH, PIN- 711328', NULL, NULL, '2016-11-21 03:44:58', 0),
(160, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'MAKAIYA,', NULL, NULL, '2016-11-21 03:48:11', 0),
(161, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'MAKAIYA, P.S- RATUA, MALDA, PIN- 732205', NULL, NULL, '2016-11-21 22:06:19', 0),
(162, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'PALPARA LANE, P.O- BHADRESWAR, HOOGHLY', NULL, NULL, '2016-11-21 22:12:33', 0),
(163, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'DHAKURIA, DHAKURIA KALIBARI,24PGS(N)', NULL, NULL, '2016-11-21 22:17:18', 0),
(164, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'SONATIKARI, CHANDPARABAZAR, GAIGHATA', NULL, NULL, '2016-11-21 22:21:44', 0),
(165, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'DHAKURIA, KALIBARI,(N)24 PGS', NULL, NULL, '2016-11-21 22:31:02', 0),
(166, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'TARAKESWAR,HOOGHLY', NULL, NULL, '2016-11-21 23:23:55', 0),
(167, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'SRIRAMPUR,ANDAL ,BURDWAN', NULL, NULL, '2016-11-21 23:28:03', 0),
(168, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'BAISHNAB PARA, BENACHITY, DURGAPUR', NULL, NULL, '2016-11-21 23:32:50', 0),
(169, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'PAKHANNA, BARJORA, BANKURA', NULL, NULL, '2016-11-21 23:37:50', 0),
(170, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'DURGAPUR,BURDWAN', NULL, NULL, '2016-11-21 23:40:31', 0),
(171, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'SRIRAMPUR, ANDAL, BURDWAN', NULL, NULL, '2016-11-21 23:59:35', 0),
(172, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'SONATIKARI, CHANDPARA BAZAR, GAIGHATA, PIN- 743245', NULL, NULL, '2016-11-22 00:32:05', 0),
(173, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'JHAUDANGA,GAIGHATA', NULL, NULL, '2016-11-22 00:38:41', 0),
(174, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '13/40 ANEE BASANT AVENEW,DURGAPUR, BURDWAN', NULL, NULL, '2016-11-22 00:49:56', 0),
(175, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'KALINGA, ANDHARMANIK, 24PGS(N), PIN- 743401', NULL, NULL, '2016-11-22 01:10:43', 0),
(176, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'RAMNAGAR, BURDWAN', NULL, NULL, '2016-11-22 01:14:14', 0),
(177, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'SRIRAMPUR, ANDAL, BURDWAN, ', NULL, NULL, '2016-11-22 01:22:37', 0),
(178, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'NARAYANPUR, P.O- RADHANAGAR, P.S- SHYAMPUR, HOWRAH.', NULL, NULL, '2016-11-22 01:38:29', 0),
(179, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'JAGADISHPUR HAT, DASPARA', NULL, NULL, '2016-11-22 01:41:26', 0),
(180, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'GOAL BATHAN, P.S- GAIGHATA, 24PGS(N), PIN- 743245', NULL, NULL, '2016-11-22 02:16:21', 0),
(181, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'SABAIPUR, GOAL BATHAN, P.S- GAIGHATA, 24PGS(N)', NULL, NULL, '2016-11-22 02:20:26', 0),
(182, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'KAROLA, BABUPARA, THAKUR NAGAR, 24 PGS (N)', NULL, NULL, '2016-11-22 02:25:24', 0),
(183, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'KALUPUR, BONGAON, 24 PGS (N)', NULL, NULL, '2016-11-22 02:36:04', 0),
(184, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'PURBA SONATIKARI, CHANDPARA BAZAR, GAIGHATA, 24 PGS (N)', NULL, NULL, '2016-11-22 02:45:53', 0),
(185, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ANDAL, BURDWAN,', NULL, NULL, '2016-11-22 02:51:56', 0),
(186, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'PALPARA LANE, BHADRESWAR, HOOGHLY', NULL, NULL, '2016-11-22 23:42:19', 0),
(187, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'DEVNAGARI, NEAR MAHADEOGHAT- PATAN ROAD, MAHADEOGHAT, RAIPUR', NULL, NULL, '2016-11-23 01:02:50', 0),
(188, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'DEVNAGARI, NEAR- MAHADEOGHAT, PATAN ROAD, RAIPUR', NULL, NULL, '2016-11-23 01:42:20', 0),
(189, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'NARAYANPUR, P.O- RADHANAGAR, P.S- SHYAMPUR, HOWRAH, PIN- 711312', NULL, NULL, '2016-11-23 03:08:03', 0),
(190, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'MONDALGACHI, NEAR KISHALAY SCHOOL, P.O- BAMANGACHI, 24 PGS (N), PIN- 743248', NULL, NULL, '2016-11-23 03:15:32', 0),
(191, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'TILI, P.O- KALUPUR, P.S- GAIGHATA, 24 PGS (N)', NULL, NULL, '2016-11-29 15:24:13', 0),
(192, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'TILI, KALUPUR, GAIGHATA, 24 PGS (N)', NULL, NULL, '2016-11-29 15:29:36', 0),
(193, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'AHMEDPUR, BIRBHUM,PIN- 731201', NULL, NULL, '2016-11-29 22:43:51', 0),
(194, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'KHANTURA, SAHEB BAGAN, 24PGS (N)', NULL, NULL, '2016-12-05 02:45:18', 0),
(195, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'DEWOLTAND, P.S- TCHAGHAR, JAMSEDPUR, STATE - JHARKHAND', NULL, NULL, '2016-12-20 12:52:00', 0),
(196, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'DALGRAM, P.O+ P.S- CHANDIL, DIS- SERAIKELA, PIN- 832401, STATE - JHARKHAND.', NULL, NULL, '2016-12-20 12:59:08', 0),
(197, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'URMAL, P.O- URMAL.TOLA BIDRI, P.S- CHOWKA, DIST- SERAIKELA, JHARKHAND', NULL, NULL, '2016-12-20 13:05:22', 0),
(198, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'CHELIYAMA, P.S- NIMDIH, JAMSEDPUR, STATE- JHARKHAND, PIN- 832401', NULL, NULL, '2016-12-20 13:07:49', 0),
(199, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'SRIRAMPUR, ANDAL, BURDWAN, PIN- 713321', NULL, NULL, '2016-12-20 13:11:03', 0),
(200, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'DAS PARA, SRIRAMPUR, ANDAL, BURDWAN, PIN- 713321', NULL, NULL, '2016-12-20 13:13:36', 0),
(201, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'BABURAMDIH, P.S- TAMAR, RANCHI, STATE- JHARKHAND, PIN- 835225', NULL, NULL, '2016-12-20 13:16:31', 0),
(202, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'PURULIA, NIMTANR, MISSION ROAD, PIN- 723101', NULL, NULL, '2016-12-20 13:19:13', 0),
(203, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'BARA GAMHARIA ST. ROAD, SHAKTI NAGAR, P.O- ADITYAPUR, SARAIKELA, TATANAGAR', NULL, NULL, '2016-12-20 13:21:42', 0),
(204, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'TOLA LUPINDIH, PANCHAYAT-YASHPUR, P.O- GAMHARIA, UDAYAPUR, SERAIKELA-KHARSAWAN, JHARKHAND, PIN- 832108', NULL, NULL, '2016-12-20 13:24:32', 0),
(205, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'CHOTA GAMHARIA VANIVIDYA  MANDIR ROAD, SERAIKELA- KHARSAWAN, PIN- 832108', NULL, NULL, '2016-12-20 13:28:43', 0),
(206, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'NIMTANR WARD, P.O- PURULIA, PIN- 723101', NULL, NULL, '2016-12-20 13:44:04', 0),
(207, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'MAGURKHALI, BADURIA', NULL, NULL, '2016-12-22 15:39:29', 0),
(208, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'PANPUR, , P.S- AMTA, HOWRAH, PIN- 711401', NULL, NULL, '2016-12-24 13:26:09', 0),
(209, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'PANPUR, P.S- AMTA, HOWRAH, PIN- 711401', NULL, NULL, '2016-12-24 13:32:37', 0),
(210, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ABCDLOP', NULL, NULL, '2017-01-10 19:16:19', 0),
(211, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ABCDVFG', NULL, NULL, '2017-01-10 19:20:51', 0),
(212, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'asasaABCD', NULL, NULL, '2017-01-10 22:59:39', 0),
(213, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'MAL ST KOLKATA: 700006', NULL, NULL, '2017-01-10 23:02:57', 0),
(214, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'KOLKAT 700006', NULL, NULL, '2017-01-10 23:04:21', 0),
(215, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'kolk06WB', NULL, NULL, '2017-01-10 23:13:58', 0),
(216, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'KOL006', NULL, NULL, '2017-01-10 23:16:30', 0),
(217, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'KOL06', NULL, NULL, '2017-01-10 23:20:33', 0),
(218, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'JHARKHAND 02', NULL, NULL, '2017-01-11 00:05:05', 0),
(219, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'DELHI 05', NULL, NULL, '2017-01-11 00:18:44', 0),
(220, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'CHENNAI 7171', NULL, NULL, '2017-01-11 00:21:19', 0),
(221, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ABCDsss', NULL, NULL, '2017-01-11 01:35:18', 0),
(222, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'BAGUIATI', NULL, NULL, '2017-01-12 03:23:53', 0),
(223, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'sasasas', NULL, NULL, '2017-01-12 03:26:57', 0),
(224, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '324', NULL, NULL, '2017-11-30 03:04:21', 0),
(225, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'as sa sa sas', NULL, NULL, '2017-12-01 04:31:15', 0),
(226, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'as sa sa sasAddress', NULL, NULL, '2017-12-01 04:34:20', 0),
(227, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'as sa sa sasAddressdddd', NULL, NULL, '2017-12-01 04:38:02', 0),
(228, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '321', NULL, NULL, '2017-12-01 04:39:18', 0),
(229, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '321E', NULL, NULL, '2017-12-01 04:40:18', 0),
(230, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '321EF', NULL, NULL, '2017-12-01 04:42:55', 0),
(231, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '122D', NULL, NULL, '2017-12-01 04:44:09', 0),
(232, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '122Df', NULL, NULL, '2017-12-01 04:46:06', 0),
(233, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'dd21', NULL, NULL, '2017-12-01 04:46:51', 0),
(234, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'dd21sa', NULL, NULL, '2017-12-01 04:49:23', 0),
(235, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'da', NULL, NULL, '2017-12-01 04:50:10', 0),
(236, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'daf', NULL, NULL, '2017-12-01 04:51:28', 0),
(237, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'dafd', NULL, NULL, '2017-12-01 04:53:41', 0),
(238, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'fdaa', NULL, NULL, '2017-12-01 04:54:19', 0),
(239, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'fdg\r\ndg\r\ndg\r\n', NULL, NULL, '2018-11-27 03:50:15', 0),
(240, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'PIRUVILLAI', NULL, NULL, '2018-11-28 03:22:58', 0),
(241, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'SAASA', NULL, NULL, '2018-11-28 16:34:03', 0),
(242, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'sasas', NULL, NULL, '2018-11-28 17:01:08', 0),
(243, NULL, '', '', '', '', '', '', '', 'West Bengal', '33', 'India', '91', '', '+919007409663', 'samirram007@gmail.com', '', 'Hatiara, Panditbattala, Kolkata-157', '0', 3, '2019-03-29 20:56:34', 0),
(244, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'sadsadasd', NULL, NULL, '2018-12-10 09:49:20', 0),
(245, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '                   sadsadasd                  ', NULL, NULL, '2018-12-10 09:49:58', 0),
(246, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '                                      sadsadasd                                    ', NULL, NULL, '2018-12-10 09:54:43', 0),
(247, NULL, '', '', '', '', '', '', '', 'WB', '33', '', '91', '', '65956', '51@@rr.co', '', 'dsadasfasfa sfasf asfas                                     ', '0', 1, '2019-12-05 03:36:13', 0),
(248, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ' sadsadasd                                                      ', NULL, NULL, '2018-12-10 10:05:51', 0),
(249, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '                    sadsadasd                                                                        ', NULL, NULL, '2018-12-10 10:11:54', 0),
(250, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '                                       sadsadasd                                                                                          ', NULL, NULL, '2018-12-10 10:13:10', 0),
(251, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '                                                          sadsadasd                                                                                                            ', NULL, NULL, '2018-12-10 10:13:43', 0),
(252, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '                                                                             sadsadasd                                                                                                                              ', NULL, NULL, '2018-12-10 10:16:04', 0),
(253, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '                                                                                                sadsadasd                                                                                                                                                ', NULL, NULL, '2018-12-10 10:17:40', 0),
(254, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '                                                                                                                   sadsadasd                                                                                                                                                                  ', NULL, NULL, '2018-12-10 10:23:30', 0),
(255, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '                                                                                                                                      sadsadasd                                                                                                                                                                                    ', NULL, NULL, '2018-12-10 10:25:32', 0),
(256, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '                                                                                                                                                         sadsadasd                                                                                                                                                                                                      ', NULL, NULL, '2018-12-10 10:26:29', 0),
(257, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '                                                                                                                                                                            sadsadasd                                                                                                                                                                                                                        ', NULL, NULL, '2018-12-10 10:26:57', 0),
(258, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'sakdfask kdaks dkh                                     ', NULL, NULL, '2018-12-10 10:28:27', 0),
(259, NULL, '', '', '', '', '', '', '', 'WB', '33', '', '91', '', '999', '', '', 'fasfafa', '0', 1, '2019-12-05 03:36:34', 0),
(260, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '12111212131                                     ', NULL, NULL, '2018-12-10 10:55:47', 0);
INSERT INTO `tbl_address` (`ID`, `HouseNo`, `AddressLine1`, `AddressLine2`, `LANDMARK`, `VILL`, `PO`, `DIST`, `PIN`, `State`, `StateID`, `Country`, `CountryID`, `ContactPerson`, `ContactNo`, `Email`, `WebSite`, `Address`, `MacID`, `CreatedBy`, `CreateTime`, `OldID`) VALUES
(261, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'dfnsdkfhksd hfkhksdkf                                     ', NULL, NULL, '2018-12-10 11:53:21', 0),
(262, NULL, '', '', '', '', '', '', '', 'WB', '33', '', '91', '', '9065652111', 'samir@gmail.com', '', 'ABCD BAGUIATI DUM DUM K\nKOLKATA:700157                                     ', '0', 1, '2019-12-12 22:25:09', 0),
(263, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<p>fdg\r\ndg\r\ndg</p>', NULL, NULL, '2018-12-14 03:32:14', 0),
(264, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </p>', NULL, NULL, '2018-12-26 14:21:53', 0),
(265, NULL, '', '', '', '', '', '', '', 'West Bengal', '33', 'India', '91', '', '+919007409663', 'samirram007@gmail.com', '', 'Hatiara, Panditbattala, Kolkata-1573432', '0', 3, '2019-03-29 20:06:45', 0),
(266, NULL, '', '', '', '', '', '', '', 'West Bengal', '33', 'India', '91', '', '+919007409663', 'samirram007@gmail.com', '', 'Hatiara, Panditbattala, Kolkata-157fd', '0', 3, '2019-03-29 20:08:37', 0),
(267, NULL, '', '', '', '', '', '', '', 'West Bengal', '33', 'India', '91', '', '+919007409663', 'samirram007@gmail.com', '', 'Hatiara, Panditbattala, Kolkata-157sdfsd', '0', 3, '2019-03-29 20:11:21', 0),
(268, NULL, '', '', '', '', '', '', '', 'West Bengal', '33', 'India', '91', '', '+919007409663', 'samirram007@gmail.com', '', 'Hatiara, Panditbattala, Kolkata-157sd', '0', 3, '2019-03-29 20:12:08', 0),
(269, NULL, '', '', '', '', '', '', '', 'West Bengal', '33', 'India', '91', '', '+919007409663', 'samirram007@gmail.com', '', 'Hatiara, Panditbattala, Kolkata-157sds', '0', 3, '2019-03-29 20:12:17', 0),
(270, NULL, '', '', '', '', '', '', '', 'West Bengal', '33', 'India', '91', '', '9007409663', 'samirram007@gmail.com', '', 'Hatiara, Panditbattala, Kolkata-157e', '0', 3, '2019-03-29 20:21:24', 0),
(271, NULL, '', '', '', '', '', '', '', 'West Bengal', '33', 'India', '91', '', '+919007409663', 'samirram007@gmail.com', '', 'Hatiara, Panditbattala, Kolkata-700157', '0', 3, '2019-08-06 23:24:32', 0),
(272, NULL, '', '', '', '', '', '', '', 'WB', '33', 'India', '91', '', '+919007409663', 'samirram@gmail.com', '', 'HATR  ', '0', 3, '2019-03-29 21:05:13', 0),
(273, NULL, '', '', '', '', '', '', '', 'WB', '33', 'India', '91', '', '007409663', 'samim007@gmail.com', '', 'Hatiara, Panditbattala, Kolkata-157', '0', 3, '2019-04-04 08:39:56', 0),
(274, '', '', '', '', '', '', '', '', '', '33', '', '91', '', '', '', '', '', '0', 3, '2019-12-28 05:45:23', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bom`
--

DROP TABLE IF EXISTS `tbl_bom`;
CREATE TABLE `tbl_bom` (
  `ID` int(10) UNSIGNED NOT NULL,
  `Name` varchar(45) DEFAULT NULL,
  `Description` varchar(255) DEFAULT NULL,
  `ItemID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `Quantity` double NOT NULL DEFAULT '1',
  `UnitID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `CreatedBy` int(10) UNSIGNED NOT NULL DEFAULT '1',
  `ModifiedBy` int(10) UNSIGNED NOT NULL DEFAULT '1',
  `CreateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `CreateModifyTime` datetime DEFAULT NULL,
  `PhaseID` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_bom`
--

INSERT INTO `tbl_bom` (`ID`, `Name`, `Description`, `ItemID`, `Quantity`, `UnitID`, `CreatedBy`, `ModifiedBy`, `CreateTime`, `CreateModifyTime`, `PhaseID`) VALUES
(1, 'BOM01', 'ABC', 1, 1, 1, 1, 1, '2017-01-29 16:25:42', '2017-01-29 21:55:42', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bomdetails`
--

DROP TABLE IF EXISTS `tbl_bomdetails`;
CREATE TABLE `tbl_bomdetails` (
  `ID` int(10) UNSIGNED NOT NULL,
  `BOMID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `ItemID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `Quantity` double NOT NULL DEFAULT '0',
  `UnitID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `ItemCost` double NOT NULL DEFAULT '0',
  `TotalCost` double NOT NULL DEFAULT '0',
  `CreatedBy` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `ModifiedBy` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `CreateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `CreateModifyTime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_bomdetails`
--

INSERT INTO `tbl_bomdetails` (`ID`, `BOMID`, `ItemID`, `Quantity`, `UnitID`, `ItemCost`, `TotalCost`, `CreatedBy`, `ModifiedBy`, `CreateTime`, `CreateModifyTime`) VALUES
(1, 1, 4, 10, 1, 10, 100, 101, 101, '2017-01-29 16:25:58', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_boolean`
--

DROP TABLE IF EXISTS `tbl_boolean`;
CREATE TABLE `tbl_boolean` (
  `ID` int(10) UNSIGNED NOT NULL,
  `Value` int(11) DEFAULT NULL,
  `Text` varchar(45) DEFAULT NULL,
  `BooleanType` int(10) UNSIGNED DEFAULT NULL,
  `CreatedBy` int(10) UNSIGNED DEFAULT NULL,
  `CreateModifyTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_boolean`
--

INSERT INTO `tbl_boolean` (`ID`, `Value`, `Text`, `BooleanType`, `CreatedBy`, `CreateModifyTime`) VALUES
(1, 1, 'True', 1, NULL, '2013-02-04 08:00:00'),
(2, 0, 'false', 1, NULL, '2013-02-04 08:00:00'),
(3, 1, 'Yes', 2, NULL, '2013-02-04 08:00:00'),
(4, 0, 'No', 2, NULL, '2013-02-04 08:00:00'),
(5, 1, 'Dr', 3, NULL, '2013-02-04 08:00:00'),
(6, -1, 'Cr', 3, NULL, '2013-02-04 08:00:00'),
(7, 1, 'By', 4, NULL, '2013-02-04 08:00:00'),
(8, -1, 'To', 4, NULL, '2013-02-04 08:00:00'),
(9, 1, 'Addactive', 5, NULL, '2013-05-01 22:37:41'),
(10, -1, 'Deductive', 5, NULL, '2013-05-01 22:37:41'),
(11, 0, '-Select-', 0, NULL, '2013-08-30 10:44:14'),
(12, 1, '+', 6, NULL, '2015-01-25 07:40:10'),
(13, -1, '-', 6, NULL, '2015-01-25 07:40:10');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_calculationmethod`
--

DROP TABLE IF EXISTS `tbl_calculationmethod`;
CREATE TABLE `tbl_calculationmethod` (
  `ID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `Name` varchar(250) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_calculationmethod`
--

INSERT INTO `tbl_calculationmethod` (`ID`, `Name`) VALUES
(1, 'Item Total'),
(2, 'Current Total'),
(3, 'Tax Auto Calc'),
(4, 'Tax Manual Calc'),
(5, 'Manual value'),
(6, 'Rate Manual'),
(7, 'Track Pre Accounts'),
(8, 'Instrument Details');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cart`
--

DROP TABLE IF EXISTS `tbl_cart`;
CREATE TABLE `tbl_cart` (
  `ID` int(10) UNSIGNED NOT NULL,
  `OfficeID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `Createdby` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `CreateTime` datetime DEFAULT NULL,
  `ModifyBy` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `ModifyTime` datetime DEFAULT NULL,
  `TransactionID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `CartDate` date DEFAULT NULL,
  `InventoryNature` int(11) NOT NULL DEFAULT '0',
  `EffectInventoryValue` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `VoucherID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `VoucherDetailsID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `CartTypeID` int(10) UNSIGNED NOT NULL,
  `ItemPriceTypeID` int(10) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cartdetails`
--

DROP TABLE IF EXISTS `tbl_cartdetails`;
CREATE TABLE `tbl_cartdetails` (
  `ID` int(10) UNSIGNED NOT NULL,
  `EntryIndex` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `CartID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `TestDate` date DEFAULT NULL,
  `ReportDate` date DEFAULT NULL,
  `CollectionCenterID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `LabID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `TransactionID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `VoucherID` varchar(45) DEFAULT NULL,
  `DocumentNo` varchar(45) DEFAULT NULL,
  `ItemID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `ItemGroupID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `ItemCategoryID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `PrimaryUnitID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `SecondaryUnitID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `MRP` double NOT NULL DEFAULT '0',
  `ItemCost` double NOT NULL DEFAULT '0',
  `Price` double NOT NULL DEFAULT '0',
  `BillingQuantity` double NOT NULL DEFAULT '0',
  `ActualQuantity` double NOT NULL DEFAULT '0',
  `PrimaryRate` double NOT NULL DEFAULT '0',
  `SecondaryRate` double NOT NULL DEFAULT '0',
  `DiscountPercentage` double NOT NULL DEFAULT '0',
  `PrimaryDiscountRate` double NOT NULL DEFAULT '0',
  `SecondaryDiscountRate` double NOT NULL DEFAULT '0',
  `TaxClassID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `CGSTPercentage` double NOT NULL DEFAULT '0',
  `SGSTPercentage` double NOT NULL DEFAULT '0',
  `CGST` double NOT NULL DEFAULT '0',
  `SGST` double NOT NULL DEFAULT '0',
  `Amount` double NOT NULL DEFAULT '0',
  `CreatedBy` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `CreateTime` datetime DEFAULT NULL,
  `ModifyBy` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `ModifyTime` datetime DEFAULT NULL,
  `IsCancelled` int(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT '1=Request and  2=Cancelled',
  `CancellationRequestBy` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `CancellationRequestTime` datetime DEFAULT NULL,
  `CancellationConfirmBy` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `CancellationConfirmTime` datetime DEFAULT NULL,
  `IsDeleted` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `IsEditable` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `StorageID` int(10) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_carttype`
--

DROP TABLE IF EXISTS `tbl_carttype`;
CREATE TABLE `tbl_carttype` (
  `ID` int(10) UNSIGNED NOT NULL,
  `Name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_carttype`
--

INSERT INTO `tbl_carttype` (`ID`, `Name`) VALUES
(1, 'PurchaseCart'),
(2, 'SalesCart'),
(3, 'TransferCart');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cart_details_temp`
--

DROP TABLE IF EXISTS `tbl_cart_details_temp`;
CREATE TABLE `tbl_cart_details_temp` (
  `ID` int(10) UNSIGNED NOT NULL,
  `CartID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `TestDate` date DEFAULT NULL,
  `ReportDate` date DEFAULT NULL,
  `CollectionCenterID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `LabID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `TransactionID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `Quantity_Billing` double NOT NULL DEFAULT '0',
  `Quantity_Actual` double NOT NULL DEFAULT '0',
  `Rate_Primary` double NOT NULL DEFAULT '0',
  `Rate_Secondary` double NOT NULL DEFAULT '0',
  `Discount_Percentage` double NOT NULL DEFAULT '0',
  `Discount_Rate_Primary` double NOT NULL DEFAULT '0',
  `Discount_Rate_Secondary` double NOT NULL DEFAULT '0',
  `Amount` double NOT NULL DEFAULT '0',
  `CreatedBy` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `CreateTime` datetime DEFAULT NULL,
  `ModifyBy` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `ModifyTime` datetime DEFAULT NULL,
  `EntryIndex` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `DocumentNo` varchar(45) DEFAULT NULL,
  `VoucherID` varchar(45) DEFAULT NULL,
  `ItemID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `ItemGroupID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `ItemCategoryID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `Unit_Primary` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `Unit_Secondary` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `IsCancelled` int(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT '1=Request and  2=Cancelled',
  `CancellationRequestBy` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `CancellationRequestTime` datetime DEFAULT NULL,
  `CancellationConfirmBy` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `CancellationConfirmTime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cart_temp`
--

DROP TABLE IF EXISTS `tbl_cart_temp`;
CREATE TABLE `tbl_cart_temp` (
  `ID` int(10) UNSIGNED NOT NULL,
  `OfficeID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `Createdby` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `CreateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ModifyBy` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `ModifyTime` datetime DEFAULT NULL,
  `TransactionID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `CartDate` date DEFAULT NULL,
  `InventoryNature` int(11) NOT NULL DEFAULT '0',
  `EffectInventoryValue` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `VoucherID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `VoucherDetailsID` int(10) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_currency`
--

DROP TABLE IF EXISTS `tbl_currency`;
CREATE TABLE `tbl_currency` (
  `ID` int(10) UNSIGNED NOT NULL,
  `CurrencyName` varchar(45) DEFAULT NULL,
  `Symbol` varchar(5) DEFAULT NULL,
  `SubUnit` int(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'Like Paisa for Rupees',
  `NoOfDecimalPlace` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `IsActive` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `Narration` varchar(255) DEFAULT NULL,
  `CreatedBy` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `ModifiedBy` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `CreateTime` datetime DEFAULT NULL,
  `ModifyTime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_instrumentetails`
--

DROP TABLE IF EXISTS `tbl_instrumentetails`;
CREATE TABLE `tbl_instrumentetails` (
  `ID` int(10) UNSIGNED NOT NULL,
  `AccountID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `TAccountID` varchar(45) DEFAULT NULL,
  `Bank` varchar(100) DEFAULT NULL,
  `BankBranch` varchar(45) DEFAULT NULL,
  `BankAddress` varchar(45) DEFAULT NULL,
  `InstrumentID` int(10) UNSIGNED DEFAULT NULL,
  `InstrumentNo` varchar(45) DEFAULT NULL,
  `TransactionDate` date NOT NULL,
  `BankCode` varchar(45) DEFAULT NULL,
  `Amount` double NOT NULL DEFAULT '0',
  `VoucherID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `VoucherDetailsID` int(10) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_instrumenttype`
--

DROP TABLE IF EXISTS `tbl_instrumenttype`;
CREATE TABLE `tbl_instrumenttype` (
  `ID` int(10) UNSIGNED NOT NULL,
  `Name` varchar(45) NOT NULL,
  `Alias` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_instrumenttype`
--

INSERT INTO `tbl_instrumenttype` (`ID`, `Name`, `Alias`) VALUES
(1, 'CASH', 'CASH'),
(2, 'Cheque', 'CHQ'),
(3, 'Credit Card', 'CRC'),
(4, 'Debit Card', 'DRC'),
(5, 'DEMAND DRAFT', 'DD'),
(6, 'NEFT/RTGS', ''),
(7, 'Net Banking', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_item`
--

DROP TABLE IF EXISTS `tbl_item`;
CREATE TABLE `tbl_item` (
  `ID` int(10) UNSIGNED NOT NULL,
  `Name` varchar(45) NOT NULL,
  `HSN` varchar(10) DEFAULT NULL,
  `Alias` varchar(200) DEFAULT NULL,
  `PrintName` varchar(45) DEFAULT NULL,
  `SKU` varchar(45) DEFAULT NULL COMMENT 'Stock Keeping Units',
  `UPC` varchar(45) DEFAULT NULL COMMENT 'Universal Product Codes',
  `ModelNo` varchar(45) DEFAULT NULL,
  `PartNo` varchar(45) DEFAULT NULL,
  `Description` text,
  `ItemCategoryID` int(10) UNSIGNED DEFAULT '0',
  `ItemGroupID` int(10) UNSIGNED DEFAULT '0',
  `UnitID` int(10) UNSIGNED DEFAULT '0',
  `MRP` double NOT NULL DEFAULT '0',
  `ItemCost` double NOT NULL DEFAULT '0',
  `Price` double NOT NULL DEFAULT '0',
  `CreatedBy` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `CreateTime` datetime DEFAULT NULL,
  `ModifiedBy` int(10) DEFAULT NULL,
  `ModifyTime` datetime DEFAULT NULL,
  `TaxRate` double NOT NULL DEFAULT '0',
  `ServiceCharge` double NOT NULL DEFAULT '0',
  `IsFinancialItem` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `IsFinishGoods` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `IsRawMaterial` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `IsUnFinishGoods` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `IsDeleted` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `CostingMethodID` int(10) UNSIGNED DEFAULT '0',
  `PricingMethodID` int(10) UNSIGNED DEFAULT '0',
  `IsStockItem` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `IsNonStockItem` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `IsNegetiveSalesAllow` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `IsSalesAsNewManufacture` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `IsPurchaseAsConsumed` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `IsRejectionAsScrap` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `Unit02ID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `Unit01Value` double NOT NULL DEFAULT '1',
  `Unit02Value` double NOT NULL DEFAULT '1',
  `Quantity` double NOT NULL DEFAULT '0',
  `MaintainBatch` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `MaintainSerial` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `ImagePath` varchar(200) NOT NULL DEFAULT 'Images/Products',
  `Image` varchar(100) NOT NULL DEFAULT 'product.jpg',
  `VoucherTypeID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `minsalequantity` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `totalquantity` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `RecorderPoint` double NOT NULL DEFAULT '0',
  `RecorderPointAlerm` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `IsPackage` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `InsiderID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `ReportingTypeID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `IsSpecimenRequired` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `RangeValue` varchar(200) DEFAULT NULL,
  `HasMethod` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `ReportingInGroup` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `MethodDescription` varchar(255) DEFAULT NULL,
  `DepartmentID` int(10) UNSIGNED NOT NULL,
  `Duration` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `IsInHouseTest` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `Specimen` varchar(200) DEFAULT NULL,
  `StorageID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `PurchaseTaxClassID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `SalesTaxClassID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `CGSTPercentage` double NOT NULL DEFAULT '0',
  `SGSTPercentage` double NOT NULL DEFAULT '0',
  `IGSTPercentage` double NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='i';

-- --------------------------------------------------------

--
-- Table structure for table `tbl_itemaccounts`
--

DROP TABLE IF EXISTS `tbl_itemaccounts`;
CREATE TABLE `tbl_itemaccounts` (
  `ID` int(10) UNSIGNED NOT NULL,
  `ItemID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `AccountID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `RoundingMethodID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `RoundingLimit` double NOT NULL DEFAULT '0',
  `CreateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `CreateModifyTime` datetime DEFAULT NULL,
  `CreatedBy` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `ModifiedBy` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `VoucherTypeID` int(10) UNSIGNED NOT NULL,
  `Percentage` double NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_itembatch`
--

DROP TABLE IF EXISTS `tbl_itembatch`;
CREATE TABLE `tbl_itembatch` (
  `ID` int(10) UNSIGNED NOT NULL,
  `ItemID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `CartID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `CartDetailsID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `InventoryNature` int(11) NOT NULL DEFAULT '0',
  `IsEffectInventoryValue` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `BatchNo` varchar(45) DEFAULT NULL,
  `BatchDate` date DEFAULT NULL,
  `ExpDate` varchar(10) DEFAULT NULL,
  `MfgDate` varchar(10) DEFAULT NULL,
  `MRP` double NOT NULL DEFAULT '0',
  `ItemCost` double NOT NULL DEFAULT '0',
  `Price` double NOT NULL DEFAULT '0',
  `Rate` double NOT NULL DEFAULT '0',
  `Quantity` double NOT NULL DEFAULT '0',
  `UnitID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `DiscountPercentage` double NOT NULL DEFAULT '0',
  `PrimaryDiscountRate` double NOT NULL DEFAULT '0',
  `SecondaryDiscountRate` double NOT NULL DEFAULT '0',
  `TaxClassID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `CGSTPercentage` double NOT NULL DEFAULT '0',
  `SGSTPercentage` double NOT NULL DEFAULT '0',
  `CGST` double NOT NULL DEFAULT '0',
  `SGST` double NOT NULL DEFAULT '0',
  `Amount` double NOT NULL DEFAULT '0',
  `CreatedBy` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `ModifedBy` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `CreateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ModifyTime` datetime DEFAULT NULL,
  `StorageID` int(10) UNSIGNED NOT NULL DEFAULT '1',
  `IsDeleted` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `IsEditable` int(10) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_itembatch`
--

INSERT INTO `tbl_itembatch` (`ID`, `ItemID`, `CartID`, `CartDetailsID`, `InventoryNature`, `IsEffectInventoryValue`, `BatchNo`, `BatchDate`, `ExpDate`, `MfgDate`, `MRP`, `ItemCost`, `Price`, `Rate`, `Quantity`, `UnitID`, `DiscountPercentage`, `PrimaryDiscountRate`, `SecondaryDiscountRate`, `TaxClassID`, `CGSTPercentage`, `SGSTPercentage`, `CGST`, `SGST`, `Amount`, `CreatedBy`, `ModifedBy`, `CreateTime`, `ModifyTime`, `StorageID`, `IsDeleted`, `IsEditable`) VALUES
(1, 4, 14, 27, 1, 1, '210', '2019-08-01', '3', '3', 0, 0, 0, 23, 3, 1, 0, 0, 0, 0, 0, 0, 0, 0, 200, 3, 0, '2019-08-01 13:42:03', '2019-08-01 19:12:03', 1, 0, 0),
(2, 3, 14, 28, 1, 1, '20', '2019-08-01', '232', '23', 0, 0, 0, 23, 232, 6, 0, 0, 0, 0, 0, 0, 0, 0, 2323, 3, 0, '2019-08-01 13:58:57', '2019-08-01 19:28:57', 1, 0, 0),
(3, 2, 14, 29, 1, 1, '60', '2019-08-01', '565', '56', 0, 0, 0, 5656, 20, 2, 0, 0, 0, 0, 0, 0, 0, 0, 5656, 3, 0, '2019-08-01 14:01:55', '2019-08-01 19:31:55', 1, 0, 0),
(4, 23, 14, 30, 1, 1, '200', '2019-08-01', '2002', '2001', 0, 0, 0, 2003, 20, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2004, 3, 0, '2019-08-01 14:06:09', '2019-08-01 19:36:09', 1, 0, 0),
(5, 23, 14, 31, 1, 1, '650', '2019-08-01', '65', '65', 0, 0, 0, 65, 65, 0, 0, 0, 0, 0, 0, 0, 0, 0, 65, 3, 0, '2019-08-01 14:06:35', '2019-08-01 19:36:35', 1, 0, 0),
(6, 6, 14, 32, 1, 1, '650', '2019-08-01', '6666', '6666', 0, 0, 0, 6, 6, 1, 0, 0, 0, 0, 0, 0, 0, 0, 600, 3, 0, '2019-08-01 14:08:28', '2019-08-01 19:38:28', 1, 0, 0),
(7, 3, 15, 33, 1, 1, '320', '2019-08-01', '3', '333', 0, 0, 0, 3, 3, 6, 0, 0, 0, 0, 0, 0, 0, 0, 333, 3, 0, '2019-08-01 14:09:41', '2019-08-01 19:39:41', 1, 0, 0),
(8, 3, 15, 33, 1, 1, '650', '2019-08-01', '222222', '22222', 0, 0, 0, 22, 22, 6, 0, 0, 0, 0, 0, 0, 0, 0, 22, 3, 0, '2019-08-01 14:10:29', '2019-08-01 19:40:29', 1, 0, 0),
(9, 3, 15, 33, 1, 1, '322', '2019-08-01', '22/5', '22/5', 0, 0, 0, 20, 1, 6, 0, 0, 0, 0, 0, 0, 0, 0, 300, 3, 0, '2019-08-01 14:12:21', '2019-08-01 19:42:21', 1, 0, 0),
(10, 6, 15, 34, 1, 1, '22012', '2019-08-01', '22/9', '12/2', 0, 0, 0, 65, 60, 1, 0, 0, 0, 0, 0, 0, 0, 0, 6598, 3, 0, '2019-08-01 14:25:00', '2019-08-01 19:55:00', 1, 0, 0),
(11, 6, 15, 34, 1, 1, '450', '2019-08-01', '454', '4545', 0, 0, 0, 454, 454, 1, 0, 0, 0, 0, 0, 0, 0, 0, 4545, 3, 0, '2019-08-01 14:25:07', '2019-08-01 19:55:07', 1, 0, 0),
(12, 18, 17, 39, -1, 0, '230', '2019-08-01', '232', '2323', 0, 0, 0, 2323, 2323, 0, 0, 0, 0, 0, 0, 0, 0, 0, 232, 3, 0, '2019-08-01 15:37:41', '2019-08-01 21:07:41', 1, 0, 0),
(13, 1, 17, 40, -1, 0, '2220', '2019-08-01', '22/22', '22/22', 0, 0, 0, 60, 3, 5, 0, 0, 0, 0, 0, 0, 0, 0, 180, 3, 0, '2019-08-01 16:03:06', '2019-08-01 21:33:06', 1, 0, 0),
(14, 1, 17, 40, -1, 0, '33000', '2019-08-01', '26/9', '21/5', 0, 0, 0, 80, 5, 5, 0, 0, 0, 0, 0, 0, 0, 0, 400, 3, 0, '2019-08-01 16:03:28', '2019-08-01 21:33:28', 1, 0, 0),
(15, 26, 17, 41, -1, 0, '6550', '2019-08-01', '2/2', '6/6', 0, 0, 0, 100, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 500, 3, 0, '2019-08-01 16:05:22', '2019-08-01 21:35:22', 1, 0, 0),
(16, 26, 17, 42, -1, 0, '6550', '2019-08-01', '2/2', '6/6', 0, 0, 0, 3, 100, 0, 0, 0, 0, 0, 0, 0, 0, 0, 300, 3, 0, '2019-08-01 16:06:50', '2019-08-01 21:36:50', 1, 0, 0),
(17, 26, 17, 42, -1, 0, '6550', '2019-08-01', '2/2', '6/6', 0, 0, 0, 60, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 180, 3, 0, '2019-08-01 16:07:10', '2019-08-01 21:37:10', 1, 0, 0),
(18, 31, 17, 43, -1, 0, '220', '2019-08-01', '33', '33', 0, 0, 0, 30, 30, 0, 0, 0, 0, 0, 0, 0, 0, 0, 900, 3, 0, '2019-08-01 16:53:02', '2019-08-01 22:23:02', 1, 0, 0),
(19, 26, 20, 46, 1, 1, '6550', '2019-08-02', '2/2', '6/6', 0, 0, 0, 10, 56, 1, 0, 0, 0, 0, 0, 0, 0, 0, 560, 3, 0, '2019-08-02 13:41:16', '2019-08-02 19:11:16', 1, 0, 0),
(20, 26, 20, 47, 1, 1, '6550', '2019-08-02', '2/2', '6/6', 0, 0, 0, 50, 103, 1, 0, 0, 0, 0, 0, 0, 0, 0, 5015, 3, 0, '2019-08-02 14:19:22', '2019-08-02 19:49:22', 1, 0, 0),
(21, 5, 20, 47, 1, 1, '120', '2019-08-02', '33', '33', 0, 0, 0, 30, 3, 1, 0, 0, 0, 0, 0, 0, 0, 0, 90, 3, 0, '2019-08-02 14:20:29', '2019-08-02 19:50:29', 1, 0, 0),
(22, 4, 23, 48, 1, 1, '230', '2019-08-02', '23', '23', 0, 0, 0, 30, 3, 1, 0, 0, 0, 0, 0, 0, 0, 0, 90, 3, 0, '2019-08-02 14:28:12', '2019-08-02 19:58:12', 1, 0, 0),
(23, 4, 23, 48, 1, 1, '3300', '2019-08-02', '2323', '3223', 0, 0, 0, 100, 5, 1, 0, 0, 0, 0, 0, 0, 0, 0, 500, 3, 0, '2019-08-02 14:28:22', '2019-08-02 19:58:22', 1, 0, 0),
(24, 6, 23, 49, 1, 1, '30', '2019-08-02', '65', '33', 0, 90, 100, 90, 5, 1, 0, 0, 0, 0, 0, 0, 0, 0, 450, 3, 0, '2019-08-02 15:22:37', '2019-08-02 20:52:37', 1, 0, 0),
(25, 6, 23, 49, 1, 1, '6', '2019-08-02', '65', '66', 0, 90, 100, 90, 3, 1, 0, 0, 0, 0, 0, 0, 0, 0, 270, 3, 0, '2019-08-02 15:23:36', '2019-08-02 20:53:36', 1, 0, 0),
(26, 6, 23, 49, 1, 1, '565', '2019-08-02', '565', '5656', 0, 90, 100, 90, 5, 1, 0, 0, 0, 0, 0, 0, 0, 0, 450, 3, 0, '2019-08-02 15:24:29', '2019-08-02 20:54:29', 1, 0, 0),
(27, 6, 23, 49, 1, 1, '', '2019-08-02', '', '', 0, 90, 100, 90, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 0, '2019-08-02 15:25:14', '2019-08-02 20:55:14', 1, 0, 0),
(28, 2, 23, 50, 1, 1, '232', '2019-08-02', '23', '232', 0, 90, 100, 90, 6, 2, 0, 0, 0, 0, 0, 0, 0, 0, 450, 3, 0, '2019-08-02 15:27:12', '2019-08-02 20:57:12', 1, 0, 0),
(29, 2, 23, 50, 1, 1, '23', '2019-08-02', '23', '2323', 0, 90, 100, 90, 10, 2, 0, 0, 0, 0, 0, 0, 0, 0, 900, 3, 0, '2019-08-02 15:27:21', '2019-08-02 20:57:21', 1, 0, 0),
(30, 15, 23, 51, 1, 1, '23', '2019-08-02', '56/12', '65', 0, 90, 100, 100, 5, 1, 0, 0, 0, 0, 0, 0, 0, 0, 500, 3, 0, '2019-08-02 15:54:29', '2019-08-02 21:24:29', 1, 0, 0),
(31, 15, 23, 51, 1, 1, '23565', '2019-08-02', '565', '5656', 0, 90, 100, 100, 90, 1, 0, 0, 0, 0, 0, 0, 0, 0, 9000, 3, 0, '2019-08-02 15:54:51', '2019-08-02 21:24:51', 1, 0, 0),
(32, 15, 23, 51, 1, 1, '23', '2019-08-02', '56', '66', 0, 90, 100, 50, 40, 1, 0, 0, 0, 0, 0, 0, 0, 0, 2000, 3, 0, '2019-08-02 15:55:32', '2019-08-02 21:25:32', 1, 0, 0),
(33, 14, 23, 51, 1, 1, '23', '2019-08-02', '33', '323', 0, 90, 100, 100, 50, 1, 0, 0, 0, 0, 0, 0, 0, 0, 5000, 3, 0, '2019-08-02 15:59:31', '2019-08-02 21:29:31', 1, 0, 0),
(34, 3, 23, 52, 1, 1, '12', '2019-08-02', '12', '12', 0, 90, 100, 90, 3, 6, 0, 0, 0, 0, 0, 0, 0, 0, 270, 3, 0, '2019-08-02 16:28:44', '2019-08-02 21:58:44', 1, 0, 0),
(35, 3, 23, 53, 1, 1, '23', '2019-08-02', '23', '23', 0, 90, 100, 23, 23, 6, 0, 0, 0, 0, 0, 0, 0, 0, 529, 3, 0, '2019-08-02 16:29:51', '2019-08-02 21:59:51', 1, 0, 0),
(36, 3, 23, 53, 1, 1, '65', '2019-08-02', '112', '55', 0, 90, 100, 90, 10, 6, 0, 0, 0, 0, 0, 0, 0, 0, 900, 3, 0, '2019-08-02 16:29:58', '2019-08-02 21:59:58', 1, 0, 0),
(37, 3, 23, 53, 1, 1, '90021', '2019-08-02', '1212', '33/22', 0, 90, 100, 90, 1212, 6, 0, 0, 0, 0, 0, 0, 0, 0, 109080, 3, 0, '2019-08-02 16:30:15', '2019-08-02 22:00:15', 1, 0, 0),
(38, 4, 21, 61, -1, 0, '230', '2019-08-03', '23', '23', 0, 90, 100, 90, 2, 1, 0, 0, 0, 0, 0, 0, 0, 0, 180, 3, 0, '2019-08-03 15:11:48', '2019-08-03 20:41:48', 1, 0, 0),
(39, 4, 21, 61, -1, 0, '230', '2019-08-03', '23', '23', 0, 90, 100, 90, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 90, 3, 0, '2019-08-03 15:11:56', '2019-08-03 20:41:56', 1, 0, 0),
(40, 4, 21, 62, -1, 0, '210', '2019-08-03', '3', '3', 0, 90, 100, 90, 2, 1, 0, 0, 0, 0, 0, 0, 0, 0, 180, 3, 0, '2019-08-03 15:12:30', '2019-08-03 20:42:30', 1, 0, 0),
(41, 5, 21, 63, -1, 0, '120', '2019-08-03', '33', '33', 0, 90, 100, 90, 2, 1, 0, 0, 0, 0, 0, 0, 0, 0, 180, 3, 0, '2019-08-03 15:19:23', '2019-08-03 20:49:23', 1, 0, 0),
(68, 3, 24, 74, -1, 0, '12', '2019-08-04', '12', '12', 0, 90, 100, 90, 3, 6, 0, 0, 0, 0, 0, 0, 0, 0, 270, 3, 0, '2019-08-04 12:55:11', '2019-08-04 18:25:11', 1, 0, 0),
(69, 3, 24, 74, -1, 0, '23', '2019-08-04', '23', '23', 0, 90, 100, 90, 3, 6, 0, 0, 0, 0, 0, 0, 0, 0, 270, 3, 0, '2019-08-04 12:55:22', '2019-08-04 18:25:22', 1, 0, 0),
(70, 4, 24, 75, -1, 0, '210', '2019-08-04', '3', '3', 0, 90, 100, 90, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 90, 3, 0, '2019-08-04 12:55:34', '2019-08-04 18:25:34', 1, 0, 0),
(71, 4, 24, 75, -1, 0, '3300', '2019-08-04', '2323', '3223', 0, 90, 100, 90, 4, 1, 0, 0, 0, 0, 0, 0, 0, 0, 360, 3, 0, '2019-08-04 12:55:39', '2019-08-04 18:25:39', 1, 0, 0),
(72, 3, 24, 74, -1, 0, '320', '2019-08-04', '3', '333', 0, 90, 100, 90, 2, 6, 0, 0, 0, 0, 0, 0, 0, 0, 180, 3, 0, '2019-08-04 12:55:56', '2019-08-04 18:25:56', 1, 0, 0),
(73, 3, 24, 74, -1, 0, '322', '2019-08-04', '22/5', '22/5', 0, 90, 100, 90, 1, 6, 0, 0, 0, 0, 0, 0, 0, 0, 90, 3, 0, '2019-08-04 12:59:18', '2019-08-04 18:29:18', 1, 0, 0),
(74, 3, 24, 74, -1, 0, '20', '2019-08-04', '232', '23', 0, 90, 100, 90, 200, 6, 0, 0, 0, 0, 0, 0, 0, 0, 18000, 3, 0, '2019-08-04 13:05:08', '2019-08-04 18:35:08', 1, 0, 0),
(75, 1, 25, 76, 1, 1, '1201', '2019-08-04', '03/20', '22/05', 0, 90, 100, 90, 5, 5, 0, 0, 0, 0, 0, 0, 0, 0, 450, 3, 0, '2019-08-04 13:23:41', '2019-08-04 18:53:41', 1, 0, 0),
(76, 3, 25, 77, 1, 1, '5505', '2019-08-04', '12/20', '12/06', 0, 90, 100, 90, 6, 6, 0, 0, 0, 0, 0, 0, 0, 0, 540, 3, 0, '2019-08-04 13:25:04', '2019-08-04 18:55:04', 1, 0, 0),
(77, 3, 25, 77, 1, 1, '2305', '2019-08-04', '21', '11', 0, 90, 100, 90, 2, 6, 0, 0, 0, 0, 0, 0, 0, 0, 180, 3, 0, '2019-08-04 13:26:50', '2019-08-04 18:56:50', 1, 0, 0),
(78, 3, 25, 77, 1, 1, '5503', '2019-08-04', '60/60', '12/12', 0, 90, 100, 90, 90, 6, 0, 0, 0, 0, 0, 0, 0, 0, 8100, 3, 0, '2019-08-04 13:34:02', '2019-08-04 19:04:02', 1, 0, 0),
(79, 5, 25, 88, 1, 1, '12', '2019-08-05', '23', '23', 0, 90, 100, 90, 5, 1, 0, 0, 0, 0, 0, 0, 0, 0, 450, 3, 0, '2019-08-05 14:43:35', '2019-08-05 20:13:35', 1, 0, 0),
(80, 5, 25, 88, 1, 1, '65', '2019-08-05', '5656', '23', 0, 90, 100, 90, 20, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1800, 3, 0, '2019-08-05 14:43:45', '2019-08-05 20:13:45', 1, 0, 0),
(81, 7, 25, 89, 1, 1, '659', '2019-08-05', '12/20', '22/12', 0, 90, 100, 90, 60, 1, 0, 0, 0, 0, 0, 0, 0, 0, 5400, 3, 0, '2019-08-05 14:44:14', '2019-08-05 20:14:14', 1, 0, 0),
(82, 7, 25, 89, 1, 1, '90', '2019-08-05', '12/20', '56', 0, 90, 100, 90, 50, 1, 0, 0, 0, 0, 0, 0, 0, 0, 4500, 3, 0, '2019-08-05 14:44:41', '2019-08-05 20:14:41', 1, 0, 0),
(83, 1, 29, 90, -1, 0, '1201', '2019-08-05', '03/20', '22/05', 0, 90, 100, 90, 30, 5, 0, 0, 0, 0, 0, 0, 0, 0, 2700, 3, 0, '2019-08-05 15:07:16', '2019-08-05 20:37:16', 1, 0, 0),
(84, 6, 29, 91, -1, 0, '22012', '2019-08-05', '22/9', '12/2', 0, 90, 100, 90, 20, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1800, 3, 0, '2019-08-05 15:10:51', '2019-08-05 20:40:51', 1, 0, 0),
(85, 6, 29, 91, -1, 0, '450', '2019-08-05', '454', '4545', 0, 90, 100, 90, 50, 1, 0, 0, 0, 0, 0, 0, 0, 0, 4500, 3, 0, '2019-08-05 15:10:58', '2019-08-05 20:40:58', 1, 0, 0),
(86, 4, 29, 92, -1, 0, '3300', '2019-08-05', '2323', '3223', 0, 90, 100, 90, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 90, 3, 0, '2019-08-05 15:11:44', '2019-08-05 20:41:44', 1, 0, 0),
(87, 2, 30, 93, -1, 0, '23', '2019-08-06', '23', '2323', 0, 90, 100, 90, 5, 2, 0, 0, 0, 0, 0, 0, 0, 0, 450, 3, 0, '2019-08-06 11:14:20', '2019-08-06 16:44:20', 1, 0, 0),
(88, 1, 31, 94, 1, 1, '23', '2019-08-06', '23', '23', 0, 90, 100, 90, 50, 5, 0, 0, 0, 0, 0, 0, 0, 0, 4500, 3, 0, '2019-08-06 14:00:48', '2019-08-06 19:30:48', 1, 0, 0),
(89, 1, 31, 94, 1, 1, '65', '2019-08-06', '56', '56', 0, 90, 100, 90, 10, 5, 0, 0, 0, 0, 0, 0, 0, 0, 900, 3, 0, '2019-08-06 14:00:56', '2019-08-06 19:30:56', 1, 0, 0),
(90, 2, 31, 95, 1, 1, '23', '2019-08-06', '232', '23', 0, 90, 100, 90, 60, 2, 0, 0, 0, 0, 0, 0, 0, 0, 5400, 3, 0, '2019-08-06 14:01:17', '2019-08-06 19:31:17', 1, 0, 0),
(91, 2, 31, 95, 1, 1, '898', '2019-08-06', '232', '464', 0, 90, 100, 90, 20, 2, 0, 0, 0, 0, 0, 0, 0, 0, 1800, 3, 0, '2019-08-06 14:01:31', '2019-08-06 19:31:31', 1, 0, 0),
(92, 3, 31, 96, 1, 1, '65', '2019-08-06', '232', '6323', 0, 90, 100, 90, 10, 6, 0, 0, 0, 0, 0, 0, 0, 0, 900, 3, 0, '2019-08-06 14:01:53', '2019-08-06 19:31:53', 1, 0, 0),
(93, 3, 31, 96, 1, 1, '55', '2019-08-06', '44', '544', 0, 90, 100, 90, 25, 6, 0, 0, 0, 0, 0, 0, 0, 0, 2250, 3, 0, '2019-08-06 14:02:00', '2019-08-06 19:32:00', 1, 0, 0),
(94, 1, 32, 97, -1, 1, '23', '2019-08-06', '23', '23', 0, 90, 100, 90, 20, 5, 0, 0, 0, 0, 0, 0, 0, 0, 1800, 3, 0, '2019-08-06 14:50:13', '2019-08-06 20:20:13', 1, 0, 0),
(95, 1, 32, 97, -1, 1, '65', '2019-08-06', '56', '56', 0, 90, 100, 90, 5, 5, 0, 0, 0, 0, 0, 0, 0, 0, 450, 3, 0, '2019-08-06 14:50:18', '2019-08-06 20:20:18', 1, 0, 0),
(96, 3, 32, 98, -1, 1, '20', '2019-08-06', '232', '23', 0, 90, 100, 90, 20, 6, 0, 0, 0, 0, 0, 0, 0, 0, 1800, 3, 0, '2019-08-06 14:50:31', '2019-08-06 20:20:31', 1, 0, 0),
(97, 3, 32, 98, -1, 1, '5503', '2019-08-06', '60/60', '12/12', 0, 90, 100, 90, 30, 6, 0, 0, 0, 0, 0, 0, 0, 0, 2700, 3, 0, '2019-08-06 14:50:37', '2019-08-06 20:20:37', 1, 0, 0),
(98, 1, 33, 99, 1, 1, 'r5e4234', '2019-08-06', '', '', 0, 90, 100, 90, 20, 5, 0, 0, 0, 0, 0, 0, 0, 0, 1800, 3, 0, '2019-08-06 14:59:01', '2019-08-06 20:29:01', 1, 0, 0),
(99, 3, 34, 100, 1, 1, '12', '2019-08-06', '12', '12', 0, 90, 100, 90, 20, 6, 0, 0, 0, 0, 0, 0, 0, 0, 1800, 3, 0, '2019-08-06 15:08:25', '2019-08-06 20:38:25', 1, 0, 0),
(100, 1, 36, 101, 1, 1, '23', '2019-08-06', '565', '66', 0, 90, 100, 90, 50, 5, 0, 0, 0, 0, 0, 0, 0, 0, 4500, 3, 0, '2019-08-06 16:28:11', '2019-08-06 21:58:11', 1, 0, 0),
(101, 1, 36, 101, 1, 1, '23', '2019-08-06', '33', '12', 0, 90, 100, 90, 22, 5, 0, 0, 0, 0, 0, 0, 0, 0, 1980, 3, 0, '2019-08-06 16:28:18', '2019-08-06 21:58:18', 1, 0, 0),
(102, 2, 36, 102, 1, 1, '2333', '2019-08-06', '23/23', '23/23', 0, 90, 100, 90, 50, 2, 0, 0, 0, 0, 0, 0, 0, 0, 4500, 3, 0, '2019-08-06 16:28:43', '2019-08-06 21:58:43', 1, 0, 0),
(103, 2, 36, 102, 1, 1, '1245', '2019-08-06', '20/20', '12/12', 0, 90, 100, 90, 60, 2, 0, 0, 0, 0, 0, 0, 0, 0, 5400, 3, 0, '2019-08-06 16:28:54', '2019-08-06 21:58:54', 1, 0, 0),
(104, 3, 35, 103, 1, 1, '22', '2019-08-17', '22', '20', 0, 90, 100, 90, 5, 6, 0, 0, 0, 0, 0, 0, 0, 0, 450, 1, 0, '2019-08-16 23:15:26', '2019-08-17 04:45:26', 1, 0, 0),
(105, 4, 35, 104, 1, 1, '20', '2019-08-23', '12/20', '30/19', 0, 90, 100, 90, 5, 1, 0, 0, 0, 0, 0, 0, 0, 0, 450, 1, 0, '2019-08-22 19:03:36', '2019-08-23 00:33:36', 1, 0, 0),
(106, 3, 39, 105, 1, 1, '2', '2019-08-24', '', '', 0, 90, 100, 90, 50, 6, 0, 0, 0, 0, 0, 0, 0, 0, 4500, 1, 0, '2019-08-23 21:10:49', '2019-08-24 02:40:49', 1, 0, 0),
(107, 4, 37, 106, -1, 1, '20', '2019-10-23', '12/20', '30/19', 0, 90, 100, 90, 5, 1, 0, 0, 0, 0, 0, 0, 0, 0, 450, 1, 0, '2019-10-22 22:52:04', '2019-10-23 04:22:04', 1, 0, 0),
(108, 3, 44, 111, 1, 1, '12', '2019-12-07', '12', '12', 0, 90, 100, 90, 200, 6, 0, 0, 0, 0, 0, 0, 0, 0, 18000, 1, 0, '2019-12-06 20:19:24', '2019-12-07 01:49:24', 10057, 0, 0),
(109, 3, 44, 111, 1, 1, '2304', '2019-12-07', '12', '12/12', 0, 90, 100, 90, 30, 6, 0, 0, 0, 0, 0, 0, 0, 0, 2700, 1, 0, '2019-12-06 20:48:58', '2019-12-07 02:18:58', 10322, 0, 0),
(110, 8, 44, 112, 1, 1, '60', '2019-12-07', '1', '1', 0, 90, 100, 90, 500, 1, 0, 0, 0, 0, 0, 0, 0, 0, 45000, 1, 0, '2019-12-06 20:50:09', '2019-12-07 02:20:09', 10322, 0, 0),
(111, 2, 44, 113, 1, 1, '600', '2019-12-07', '12/12', '12/12', 0, 90, 100, 90, 30, 2, 0, 0, 0, 0, 0, 0, 0, 0, 2700, 1, 0, '2019-12-06 20:51:55', '2019-12-07 02:21:55', 10324, 0, 0),
(112, 6, 44, 110, 1, 1, '30', '2019-12-07', '45', '45', 0, 90, 100, 90, 50, 1, 0, 0, 0, 0, 0, 0, 0, 0, 4500, 1, 0, '2019-12-06 20:53:43', '2019-12-07 02:23:43', 10057, 0, 0),
(113, 3, 45, 109, -1, 1, '20', '2019-12-07', '232', '23', 0, 90, 100, 90, 12, 6, 0, 0, 0, 0, 0, 0, 0, 0, 1080, 1, 0, '2019-12-06 21:22:58', '2019-12-07 02:52:58', 10321, 0, 0),
(114, 3, 45, 109, -1, 1, '22', '2019-12-07', '22', '20', 0, 90, 100, 90, 3, 6, 0, 0, 0, 0, 0, 0, 0, 0, 270, 1, 0, '2019-12-06 21:23:11', '2019-12-07 02:53:11', 10322, 0, 0),
(115, 5, 45, 108, -1, 1, '120', '2019-12-07', '33', '33', 0, 90, 100, 90, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 90, 1, 0, '2019-12-06 22:16:50', '2019-12-07 03:46:50', 10324, 0, 0),
(116, 4, 44, 114, 1, 1, '6', '2019-12-09', '6', '6', 0, 90, 100, 90, 60, 1, 0, 0, 0, 0, 0, 0, 0, 0, 5400, 1, 0, '2019-12-08 21:50:56', '2019-12-09 03:20:56', 10057, 0, 0),
(117, 4, 46, 115, 1, 1, '3', '2019-12-09', '6', '6', 0, 90, 100, 90, 6, 1, 0, 0, 0, 0, 0, 0, 0, 0, 540, 1, 0, '2019-12-08 22:10:25', '2019-12-09 03:40:25', 10057, 0, 0),
(118, 6, 45, 117, -1, 1, '565', '2019-12-10', '565', '5656', 0, 90, 100, 90, 5, 1, 0, 0, 0, 0, 0, 0, 0, 0, 450, 1, 0, '2019-12-09 22:35:59', '2019-12-10 04:05:59', 10322, 0, 0),
(119, 3, 32, 98, -1, 1, '2', '2019-12-15', '', '', 0, 90, 100, 0, 10, 6, 0, 0, 0, 0, 0, 0, 0, 0, 900, 3, 0, '2019-12-14 23:13:31', '2019-12-15 04:43:31', 10321, 0, 0),
(120, 4, 43, 0, 1, 1, '90', '2019-12-15', '12/20', '12/12', 0, 90, 100, 10, 60, 1, 0, 0, 0, 0, 0, 0, 0, 0, 5400, 3, 0, '2019-12-14 23:15:54', '2019-12-15 04:45:54', 10322, 0, 0),
(121, 5, 43, 0, 1, 1, '63', '2019-12-15', '2', '2', 0, 90, 100, 0, 20, 1, 90, 0, 0, 0, 0, 0, 0, 0, 1800, 3, 0, '2019-12-14 23:27:37', '2019-12-15 04:57:37', 10322, 0, 0),
(122, 3, 43, 0, 1, 1, '90', '2019-12-15', '9', '9', 0, 90, 100, 0, 90, 6, 90, 0, 0, 0, 0, 0, 0, 0, 8100, 3, 0, '2019-12-14 23:28:24', '2019-12-15 04:58:24', 10322, 0, 0),
(123, 3, 43, 0, 1, 1, '90', '2019-12-15', '90', '90', 0, 90, 100, 20, 90, 6, 90, 0, 0, 0, 0, 0, 0, 0, 8100, 3, 0, '2019-12-14 23:40:00', '2019-12-15 05:10:00', 10321, 0, 0),
(124, 1, 32, 97, -1, 1, 'r5e4234', '2019-12-15', '', '', 0, 90, 100, 0, 10, 5, 90, 0, 0, 0, 0, 0, 0, 0, 900, 3, 0, '2019-12-14 23:42:05', '2019-12-15 05:12:05', 10324, 0, 0),
(125, 3, 32, 98, -1, 1, '22', '2019-12-15', '22', '20', 100, 90, 100, 0, 2, 6, 90, 0, 0, 50, 9, 9, 0, 0, 180, 3, 0, '2019-12-14 23:47:14', '2019-12-15 05:17:14', 10321, 0, 0),
(126, 5, 43, 0, 1, 1, '90', '2019-12-15', '5', '50', 100, 90, 100, 10, 50, 1, 90, 0, 0, 0, 9, 9, 0, 0, 4500, 3, 0, '2019-12-14 23:51:05', '2019-12-15 05:21:05', 10322, 0, 0),
(127, 4, 43, 0, 1, 1, '9', '2019-12-15', '9', '9', 100, 90, 100, 10, 500, 1, 90, 0, 0, 50, 9, 9, 0, 0, 45000, 3, 0, '2019-12-14 23:54:10', '2019-12-15 05:24:10', 10324, 0, 0),
(128, 4, 43, 0, 1, 1, '2', '2019-12-15', '2', '2', 100, 90, 100, 10, 600, 1, 90, 0, 0, 50, 9, 9, 0, 0, 54000, 3, 0, '2019-12-14 23:55:00', '2019-12-15 05:25:00', 10324, 0, 0),
(129, 4, 43, 126, 1, 1, '90', '2019-12-15', '90', '90', 100, 90, 100, 10, 90, 1, 90, 0, 0, 50, 9, 9, 0, 0, 8100, 3, 0, '2019-12-15 00:05:26', '2019-12-15 05:35:26', 10324, 0, 0),
(130, 3, 32, 98, -1, 1, '2305', '2019-12-15', '21', '11', 100, 90, 100, 0, 90, 6, 90, 0, 0, 50, 9, 9, 0, 0, 8100, 3, 0, '2019-12-15 00:14:59', '2019-12-15 05:44:59', 10321, 0, 0),
(131, 7, 43, 127, 1, 1, '23', '2019-12-15', '12/20', '12/19', 250, 90, 100, 10, 50, 1, 90, 0, 0, 0, 9, 9, 0, 0, 4500, 3, 0, '2019-12-15 07:25:46', '2019-12-15 12:55:46', 10324, 0, 0),
(132, 4, 37, 106, -1, 1, '2', '2019-12-15', '2', '2', 100, 90, 100, 0, 100, 1, 90, 0, 0, 50, 9, 9, 0, 0, 9000, 3, 0, '2019-12-15 07:27:38', '2019-12-15 12:57:38', 10324, 0, 0),
(133, 3, 44, 111, 1, 1, '6566', '2019-12-17', '12/22', '12/20', 100, 90, 100, 10, 600, 6, 90, 0, 0, 50, 9, 9, 0, 0, 54000, 3, 0, '2019-12-16 18:34:53', '2019-12-17 00:04:53', 10322, 0, 0),
(134, 4, 37, 106, -1, 1, '90', '2019-12-17', '12/20', '12/12', 100, 90, 100, 0, 20, 1, 90, 0, 0, 50, 9, 9, 0, 0, 1800, 3, 0, '2019-12-16 18:36:13', '2019-12-17 00:06:13', 10324, 0, 0),
(135, 7, 44, 128, 1, 1, '90', '2019-12-17', '6', '6', 200, 90, 100, 10, 20, 1, 90, 0, 0, 0, 9, 9, 0, 0, 1800, 3, 0, '2019-12-16 20:48:45', '2019-12-17 02:18:45', 10321, 0, 0),
(136, 3, 52, 129, 1, 1, '33', '2019-12-17', '3/12/2020', '3/12/2019', 100, 90, 100, 10, 60, 6, 90, 0, 0, 50, 9, 9, 0, 0, 4860, 3, 0, '2019-12-16 22:44:18', '2019-12-17 04:14:18', 10322, 0, 0),
(137, 3, 52, 129, 1, 1, '65', '2019-12-17', '8/2019', '05/2020', 100, 90, 100, 10, 60, 6, 90, 0, 0, 50, 9, 9, 0, 0, 4860, 3, 0, '2019-12-16 23:14:41', '2019-12-17 04:44:41', 10324, 0, 0),
(138, 6, 52, 130, 1, 1, '660', '2019-12-17', '8/2023', '12/2020', 200, 90, 100, 187, 100, 1, 10, 0, 0, 50, 9, 9, 0, 0, 16830, 3, 0, '2019-12-16 23:20:28', '2019-12-17 04:50:28', 10322, 0, 0),
(139, 6, 52, 130, 1, 1, '30', '2019-12-17', '9/2023', '12/2020', 200, 90, 100, 90, 500, 1, 20, 0, 0, 50, 9, 9, 0, 0, 36000, 3, 0, '2019-12-16 23:23:51', '2019-12-17 04:53:51', 10322, 0, 0),
(140, 6, 52, 130, 1, 1, '90', '2019-12-17', '8/2021', '5/2019', 400, 90, 100, 250, 50, 1, 10, 0, 0, 50, 9, 9, 0, 0, 11250, 3, 0, '2019-12-16 23:27:08', '2019-12-17 04:57:08', 10322, 0, 0),
(141, 6, 52, 130, 1, 1, '20', '2019-12-17', '12/2020', '12/2020', 200, 90, 100, 100, 50, 1, 10, 0, 0, 50, 9, 9, 0, 0, 4500, 3, 0, '2019-12-16 23:28:17', '2019-12-17 04:58:17', 10322, 0, 0),
(142, 6, 52, 130, 1, 1, '10', '2019-12-17', '12/2022', '10/2020', 200, 90, 100, 120, 200, 1, 10, 0, 0, 50, 9, 9, 0, 0, 21600, 3, 0, '2019-12-16 23:30:38', '2019-12-17 05:00:38', 10322, 0, 0),
(143, 3, 52, 129, 1, 1, '60', '2019-12-17', '8/2020', '12/2020', 100, 90, 100, 90, 100, 6, 10, 0, 0, 50, 9, 9, 0, 0, 8100, 3, 0, '2019-12-16 23:31:44', '2019-12-17 05:01:44', 10322, 0, 0),
(144, 3, 52, 129, 1, 1, '30', '2019-12-17', '8/2022', '12/20', 100, 90, 100, 90, 20, 6, 10, 0, 0, 50, 9, 9, 0, 0, 1620, 3, 0, '2019-12-16 23:51:40', '2019-12-17 05:21:40', 10322, 0, 0),
(145, 3, 51, 131, -1, 1, '12', '2019-12-17', '12', '12', 100, 90, 100, 90, 20, 6, 0, 0, 0, 50, 9, 9, 0, 0, 1800, 3, 0, '2019-12-16 23:59:26', '2019-12-17 05:29:26', 10322, 0, 0),
(146, 5, 51, 132, -1, 1, '120', '2019-12-18', '33', '33', 0, 90, 100, 90, 60, 1, 0, 0, 0, 0, 9, 9, 0, 0, 5400, 3, 0, '2019-12-17 19:19:22', '2019-12-18 00:49:22', 10322, 0, 0),
(147, 5, 51, 132, -1, 1, '90', '2019-12-18', '5', '50', 0, 90, 100, 90, 50, 1, 0, 0, 0, 0, 9, 9, 0, 0, 4500, 3, 0, '2019-12-17 19:20:20', '2019-12-18 00:50:20', 10057, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_itembatchcheck`
--

DROP TABLE IF EXISTS `tbl_itembatchcheck`;
CREATE TABLE `tbl_itembatchcheck` (
  `ID` int(10) UNSIGNED NOT NULL,
  `Name` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_itembatchcheck`
--

INSERT INTO `tbl_itembatchcheck` (`ID`, `Name`) VALUES
(1, 'In'),
(2, 'Out'),
(3, 'Return');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_itemcategory`
--

DROP TABLE IF EXISTS `tbl_itemcategory`;
CREATE TABLE `tbl_itemcategory` (
  `ID` int(10) UNSIGNED NOT NULL,
  `MID` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Alias` varchar(45) DEFAULT NULL,
  `Description` text,
  `CreatedBy` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `CreateTime` datetime DEFAULT NULL,
  `TaxRate` double NOT NULL DEFAULT '0',
  `ServiceCharge` double NOT NULL DEFAULT '0',
  `ImagePath` varchar(200) NOT NULL DEFAULT 'Images/products',
  `Image` varchar(255) NOT NULL DEFAULT 'product.jpg',
  `ModifiedBy` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `ModifyTime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_itemcategory`
--

INSERT INTO `tbl_itemcategory` (`ID`, `MID`, `Name`, `Alias`, `Description`, `CreatedBy`, `CreateTime`, `TaxRate`, `ServiceCharge`, `ImagePath`, `Image`, `ModifiedBy`, `ModifyTime`) VALUES
(1, 1, 'Test(Culture)', 'Test(Culture)', 'Test(Culture)', 103, '2018-12-04 04:20:22', 0, 0, 'Images/Products', 'product.jpg', 0, NULL),
(2, 2, 'E', 'E', 'Examination', 0, '2018-12-04 04:19:25', 0, 0, '', '', 1, '2019-07-27 00:20:05'),
(3, 1, 'Specimen', 'Specimen', 'Specimen', 0, '2018-12-04 04:18:36', 0, 0, 'Images/products', 'product.jpg', 0, NULL),
(4, 5, 'Body Fluids', 'Body Fluids', 'Body Fluids', 0, '2018-12-04 04:17:39', 0, 0, 'Images/products', 'product.jpg', 0, NULL),
(5, 1, 'Body Organ', 'Body Organ', '', 1, '2018-12-04 04:11:30', 0, 0, 'Images/products', 'product.jpg', 0, NULL),
(6, 6, 'Investigation', 'Investigation', 'Investigation', 1, '2018-12-04 04:34:02', 0, 0, 'Images/products', 'product.jpg', 0, NULL),
(7, 7, 'Test( Method)', 'Test( Method)', 'Test Method', 1, '2018-12-05 05:14:10', 0, 0, 'Images/products', 'product.jpg', 0, NULL),
(8, 1, 'LT', 'LT', 'LT', 1, '2019-07-27 00:11:47', 0, 0, '', '', 1, '2019-07-27 00:11:47'),
(9, 1, 'Test(Culture)', 'Test(Culture)', 'Test(Culture)', 1, '2019-07-27 00:12:27', 0, 0, '', '', 1, '2019-07-27 00:12:27'),
(10, 1, 'Test(Culture)', 'Test(Culture)', 'Test(Culture)', 1, '2019-07-27 00:13:32', 0, 0, '', '', 1, '2019-07-27 00:13:32'),
(11, 1, 'Test(Culture)', 'Test(Culture)', 'Test(Culture)', 1, '2019-07-27 00:14:09', 0, 0, '', '', 1, '2019-07-27 00:14:09'),
(12, 1, 'Test(Culture)', 'Test(Culture)', 'Test(Culture)', 1, '2019-07-27 00:14:46', 0, 0, '', '', 1, '2019-07-27 00:14:46'),
(13, 1, 'Test(Culture)', 'Test(Culture)', 'Test(Culture)', 1, '2019-07-27 00:15:15', 0, 0, '', '', 1, '2019-07-27 00:15:15'),
(14, 1, 'Test(Culture)', 'Test(Culture)', 'Test(Culture)', 1, '2019-07-27 00:15:25', 0, 0, '', '', 1, '2019-07-27 00:15:25'),
(15, 1, 'Test(Culture)', 'Test(Culture)', 'Test(Culture)fsdf', 1, '2019-07-27 00:15:29', 0, 0, '', '', 1, '2019-07-27 00:15:29'),
(16, 1, 'Test(Culture)', 'Test(Culture)', 'Test(Culture)', 1, '2019-07-27 00:17:40', 0, 0, '', '', 1, '2019-07-27 00:17:40'),
(17, 1, 'Test(Culture)d', 'Test(Culture)', 'Test(Culture)', 1, '2019-07-27 00:17:58', 0, 0, '', '', 1, '2019-07-27 00:17:58'),
(18, 1, 'LTt', 'LTt', 'LT', 1, '2019-07-27 00:18:14', 0, 0, '', '', 1, '2019-07-27 00:18:14');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_itemgroup`
--

DROP TABLE IF EXISTS `tbl_itemgroup`;
CREATE TABLE `tbl_itemgroup` (
  `ID` int(10) UNSIGNED NOT NULL,
  `MID` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Alias` varchar(45) DEFAULT NULL,
  `Description` text,
  `ImagePath` varchar(255) NOT NULL DEFAULT 'images/products',
  `Image` varchar(200) NOT NULL DEFAULT 'product.jpg',
  `CreatedBy` int(10) UNSIGNED DEFAULT NULL,
  `CreateTime` datetime DEFAULT NULL,
  `ModifiedBy` int(10) UNSIGNED NOT NULL,
  `ModifyTime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_itemgroup`
--

INSERT INTO `tbl_itemgroup` (`ID`, `MID`, `Name`, `Alias`, `Description`, `ImagePath`, `Image`, `CreatedBy`, `CreateTime`, `ModifiedBy`, `ModifyTime`) VALUES
(1, 0, '_Primary', '_Primary', '_Primary', 'images/products\r\n', 'product.jpg', 1, '2013-04-15 03:57:07', 0, NULL),
(2, 1, 'Patholog', 'Patholog', 'Clinical pathology. Clinical pathology is a medical specialty that is concerned with the diagnosis of disease based on the laboratory analysis of bodily fluids such as blood and urine, as well as tissues, using the tools of chemistry, clinical microbiology, hematology and molecular pathology.', '', '', 1, '2018-12-04 03:58:46', 3, '2019-08-06 23:25:05'),
(3, 1, 'X-ray', 'X-ray', 'Description: X-ray, or radiography, is the oldest and most common form of medical imaging. An X-ray machine produces a controlled beam of radiation, which is used to create an image of the inside of your body. ... Dense tissue, such as bone, blocks most of the radiation and appears white on the film.', 'images/products', 'product.jpg', 1, '2018-12-04 04:00:20', 0, NULL),
(4, 1, 'Radiology', 'Radiology', 'A radiologist is a medical doctor who is trained in executing and interpreting medical images such as X-rays, CT scans, ultrasounds, and MRIs and using them to treat health problems in patients. ... Radiologists may specialize in nuclear medicine, therapeutic radiology, interventional radiology or other subspecialties', 'images/products', 'product.jpg', 1, '2018-12-04 03:59:39', 0, NULL),
(5, 1, 'MED', 'MED', 'Clinical pathology. Clinical pathology is a medical specialty that is concerned with the diagnosis of disease based on the laboratory analysis of bodily fluids such as blood and urine, as well as tissues, using the tools of chemistry, clinical microbiology, hematology and molecular pathology.', '', '', 1, '2019-07-27 00:05:10', 1, '2019-07-27 00:05:10');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_itempricelist`
--

DROP TABLE IF EXISTS `tbl_itempricelist`;
CREATE TABLE `tbl_itempricelist` (
  `ID` int(10) UNSIGNED NOT NULL,
  `PriceLevelID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `ItemID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `ApplicableDate` date NOT NULL,
  `ValuationMethodID` varchar(45) DEFAULT NULL,
  `Rate` double NOT NULL DEFAULT '0',
  `DiscountPercentage` double NOT NULL DEFAULT '0',
  `UnitID` int(10) UNSIGNED DEFAULT '0',
  `CreatedBy` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `CreateModifyTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `PriceTypeID` int(10) UNSIGNED NOT NULL DEFAULT '1',
  `AddORSub` int(11) NOT NULL DEFAULT '1',
  `CalculatedOn` int(10) UNSIGNED NOT NULL DEFAULT '1',
  `DiscountAccountID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `TaxTypeID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `TaxClassID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `TaxAccountID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `TaxPercentage` double NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_itempricetype`
--

DROP TABLE IF EXISTS `tbl_itempricetype`;
CREATE TABLE `tbl_itempricetype` (
  `ID` int(10) UNSIGNED NOT NULL,
  `PriceType` varchar(45) NOT NULL,
  `Alias` varchar(45) DEFAULT NULL,
  `CreatedBy` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `CreateModifyTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_itempricetype`
--

INSERT INTO `tbl_itempricetype` (`ID`, `PriceType`, `Alias`, `CreatedBy`, `CreateModifyTime`) VALUES
(1, 'Cost Price', 'CP', 1, '2015-02-02 21:30:55'),
(2, 'Sale Price', 'SP', 1, '2015-02-02 21:30:55'),
(3, 'Maximum Retail Price', 'MRP', 1, '2019-08-02 17:13:52');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_itemserial`
--

DROP TABLE IF EXISTS `tbl_itemserial`;
CREATE TABLE `tbl_itemserial` (
  `ID` int(10) UNSIGNED NOT NULL,
  `BatchID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `ShareID` varchar(45) DEFAULT NULL,
  `NoOfShare` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `ShareNo_From` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `ShareNo_To` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `ShareAllocationDate` date DEFAULT NULL,
  `ApplicationID` varchar(45) DEFAULT NULL,
  `ApplicationDate` date DEFAULT NULL,
  `CartID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `CartDetailsID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `TransactionID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `OfficeID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `ItemID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `ItemGroupID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `ItemCategoryID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `PresumeShareNo` int(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'in case of multi(RD)',
  `PresumeRedeemDate` date DEFAULT NULL,
  `PresumeRedeemAmount` double NOT NULL COMMENT '0',
  `IsCurrentlyUnderProcess` int(10) UNSIGNED NOT NULL COMMENT '0',
  `CreatedBy` int(10) UNSIGNED NOT NULL,
  `ModifyBy` int(10) UNSIGNED NOT NULL,
  `CreateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `CreateModifyTime` datetime NOT NULL,
  `MemberID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `NomineeName` varchar(45) DEFAULT NULL,
  `NomineeAge` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `NomineeRelation` varchar(45) DEFAULT NULL,
  `InstallmentNoFrom` int(10) UNSIGNED NOT NULL DEFAULT '1',
  `InstallmentNoTo` int(10) UNSIGNED NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_itemserial`
--

INSERT INTO `tbl_itemserial` (`ID`, `BatchID`, `ShareID`, `NoOfShare`, `ShareNo_From`, `ShareNo_To`, `ShareAllocationDate`, `ApplicationID`, `ApplicationDate`, `CartID`, `CartDetailsID`, `TransactionID`, `OfficeID`, `ItemID`, `ItemGroupID`, `ItemCategoryID`, `PresumeShareNo`, `PresumeRedeemDate`, `PresumeRedeemAmount`, `IsCurrentlyUnderProcess`, `CreatedBy`, `ModifyBy`, `CreateTime`, `CreateModifyTime`, `MemberID`, `NomineeName`, `NomineeAge`, `NomineeRelation`, `InstallmentNoFrom`, `InstallmentNoTo`) VALUES
(1, 0, '1', 3000, 1, 3001, '2016-05-17', '56', '2016-05-17', 31, 35, 31, 10001, 1, 1, 1, 3000, '2016-05-17', 30000, 1, 1, 1, '2016-05-17 22:14:32', '2016-05-17 00:00:00', 0, NULL, 0, NULL, 1, 1),
(2, 0, '2', 1500, 3002, 4502, '2016-05-17', '48', '2016-05-04', 28, 28, 28, 10009, 1, 1, 1, 18000, '2016-05-17', 199950, 1, 1, 1, '2016-05-17 22:14:44', '2016-05-17 00:00:00', 0, NULL, 0, NULL, 1, 1),
(3, 0, '3', 20, 4503, 4523, '2016-05-18', '53', '2016-05-17', 31, 32, 31, 10001, 2, 1, 0, 480, '2016-05-18', 5500, 1, 1, 1, '2016-05-18 07:15:57', '2016-05-18 00:00:00', 101691, '', 0, '', 1, 1),
(4, 0, '4', 20, 4524, 4544, '2016-05-18', '54', '2016-05-17', 31, 33, 31, 10001, 1, 1, 0, 240, '2016-05-18', 2666, 1, 1, 1, '2016-05-18 07:16:00', '2016-05-18 00:00:00', 101694, '', 0, '', 1, 1),
(5, 0, '5', 20, 4545, 4565, '2016-05-18', '52', '2016-05-17', 30, 31, 30, 10001, 1, 1, 0, 240, '2016-05-18', 2666, 1, 1, 1, '2016-05-18 07:16:01', '2016-05-18 00:00:00', 101699, '', 0, '', 1, 1),
(6, 0, '6', 20, 4566, 4586, '2016-05-18', '51', '2016-05-15', 29, 30, 29, 10001, 2, 1, 0, 480, '2016-05-18', 5500, 1, 1, 1, '2016-05-18 07:16:03', '2016-05-18 00:00:00', 101696, '', 0, '', 1, 1),
(7, 0, '7', 450, 4587, 5037, '2016-05-18', '41', '2016-05-04', 25, 24, 25, 10009, 1, 1, 0, 5400, '2016-05-18', 59985, 1, 1, 1, '2016-05-18 07:21:18', '2016-05-18 00:00:00', 101698, '', 0, '', 1, 1),
(8, 0, '8', 600, 5038, 5638, '2016-05-18', '43', '2016-05-04', 26, 25, 26, 10009, 1, 1, 0, 7200, '2016-05-18', 79980, 1, 1, 1, '2016-05-18 07:21:20', '2016-05-18 00:00:00', 101699, '', 0, '', 1, 1),
(9, 0, '9', 3000, 5639, 8639, '2016-05-24', '55', '2016-05-24', 34, 34, 34, 10001, 14, 3, 0, 3000, '2016-05-24', 30000, 1, 1, 1, '2016-05-24 07:44:03', '2016-05-24 00:00:00', 101703, '', 0, 'FATHER', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_itemsupplier`
--

DROP TABLE IF EXISTS `tbl_itemsupplier`;
CREATE TABLE `tbl_itemsupplier` (
  `ID` int(10) UNSIGNED NOT NULL,
  `ItemID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `SupplierID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `IsActive` int(10) UNSIGNED NOT NULL DEFAULT '1',
  `IsDefault` int(10) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_itemtax`
--

DROP TABLE IF EXISTS `tbl_itemtax`;
CREATE TABLE `tbl_itemtax` (
  `ID` int(10) UNSIGNED NOT NULL,
  `ItemID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `AccountID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `RoundingMethodID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `RoundingLimit` double NOT NULL DEFAULT '0',
  `CreateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `CreateModifyTime` datetime DEFAULT NULL,
  `CreatedBy` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `ModifiedBy` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `VoucherTypeID` int(10) UNSIGNED NOT NULL,
  `Percentage` double NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_itemtax`
--

INSERT INTO `tbl_itemtax` (`ID`, `ItemID`, `AccountID`, `RoundingMethodID`, `RoundingLimit`, `CreateTime`, `CreateModifyTime`, `CreatedBy`, `ModifiedBy`, `VoucherTypeID`, `Percentage`) VALUES
(1, 1, 10064, 1, 2, '2018-11-29 19:00:32', '2018-11-30 00:30:32', 1, 1, 16, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_itemunit`
--

DROP TABLE IF EXISTS `tbl_itemunit`;
CREATE TABLE `tbl_itemunit` (
  `ID` int(10) UNSIGNED NOT NULL,
  `ItemID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `UnitID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `ItemCost` double NOT NULL DEFAULT '0',
  `Price` double NOT NULL DEFAULT '0',
  `CreateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `CreateModifyTime` datetime DEFAULT NULL,
  `UnitRatio` double NOT NULL DEFAULT '1',
  `CreatedBy` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `ModifiedBy` int(10) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_itemunit`
--

INSERT INTO `tbl_itemunit` (`ID`, `ItemID`, `UnitID`, `ItemCost`, `Price`, `CreateTime`, `CreateModifyTime`, `UnitRatio`, `CreatedBy`, `ModifiedBy`) VALUES
(1, 1, 1, 8, 10, '2017-01-22 21:20:17', NULL, 1, 0, 0),
(2, 1, 2, 4, 5, '2017-01-22 21:20:40', NULL, 0.5, 0, 0),
(3, 4, 2, 100, 120, '2017-01-22 21:33:34', NULL, 1, 0, 0),
(4, 2, 2, 100, 250, '2017-01-23 08:21:05', '2017-01-23 13:51:05', 2, 10056, 10056),
(5, 5, 8, 30, 35, '2017-01-27 00:59:25', '2017-01-27 06:29:25', 100, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_item_insider`
--

DROP TABLE IF EXISTS `tbl_item_insider`;
CREATE TABLE `tbl_item_insider` (
  `ID` int(10) UNSIGNED NOT NULL,
  `MID` varchar(45) NOT NULL,
  `ItemID` varchar(45) NOT NULL,
  `ReportingTypeID` varchar(45) NOT NULL DEFAULT '0',
  `ReportingInGroup` int(10) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_item_insider`
--

INSERT INTO `tbl_item_insider` (`ID`, `MID`, `ItemID`, `ReportingTypeID`, `ReportingInGroup`) VALUES
(1, '16', '1', '8', 1),
(2, '16', '2', '7', 1),
(3, '16', '3', '7', 1),
(5, '16', '9', '7', 1),
(6, '16', '10', '7', 1),
(7, '16', '12', '7', 1),
(8, '16', '13', '7', 1),
(9, '16', '14', '7', 1),
(10, '16', '15', '7', 1),
(11, '17', '4', '7', 1),
(12, '17', '5', '7', 1),
(13, '17', '6', '7', 1),
(14, '17', '7', '7', 1),
(15, '17', '8', '7', 1),
(16, '16', '17', '6', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_master`
--

DROP TABLE IF EXISTS `tbl_master`;
CREATE TABLE `tbl_master` (
  `ID` int(10) UNSIGNED NOT NULL,
  `MID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `CODE` varchar(45) DEFAULT NULL,
  `MembershipID` varchar(45) DEFAULT NULL,
  `Name` varchar(100) DEFAULT NULL,
  `Alias` varchar(45) DEFAULT NULL,
  `PrintName` varchar(100) DEFAULT NULL,
  `Description` text,
  `MasterTypeID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `DrCr` int(11) DEFAULT NULL COMMENT 'AcMaster',
  `Debit` int(11) DEFAULT NULL,
  `Credit` int(11) DEFAULT NULL,
  `IsMaster` int(10) UNSIGNED DEFAULT NULL,
  `IsMasterGroup` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `CostCategoryID` int(10) UNSIGNED DEFAULT NULL,
  `MasterGroupID` int(10) UNSIGNED NOT NULL DEFAULT '1',
  `DesignationID` int(10) UNSIGNED DEFAULT NULL,
  `PersonOrganisationID` int(10) UNSIGNED DEFAULT NULL,
  `AllocateRevenueItems` int(10) UNSIGNED DEFAULT NULL COMMENT 'CostCategory',
  `AllocateNonRevenueItems` int(10) UNSIGNED DEFAULT NULL COMMENT 'CostCategory',
  `AccountID` int(10) UNSIGNED DEFAULT NULL COMMENT 'instrumentType',
  `IsActive` int(10) UNSIGNED DEFAULT NULL COMMENT 'instrumentType',
  `IsBehaveAsSubLedger` int(10) UNSIGNED DEFAULT NULL,
  `IsAffectGrossProfit` int(10) UNSIGNED DEFAULT NULL,
  `SORT` int(10) UNSIGNED DEFAULT NULL,
  `CreditPeriod` int(10) UNSIGNED DEFAULT NULL,
  `CreditLimit` int(10) UNSIGNED DEFAULT NULL,
  `MaintainBillByBill` varchar(45) DEFAULT NULL,
  `TaxClassID` int(10) UNSIGNED DEFAULT NULL,
  `TaxTypeID` int(10) UNSIGNED DEFAULT NULL,
  `Percentage` double DEFAULT NULL,
  `IsCalculative` int(10) UNSIGNED DEFAULT NULL,
  `OpeningBalance` double NOT NULL DEFAULT '0',
  `ClosingBalance` double NOT NULL DEFAULT '0',
  `Asset` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `Liabilities` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `Expense` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `Income` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `NetDebitCreditBalanceForReporting` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `UseForCalculation` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `AllocationMethodID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `CreatedBy` int(10) UNSIGNED NOT NULL DEFAULT '1',
  `ModifiedBy` int(10) UNSIGNED DEFAULT NULL,
  `CreateTime` datetime DEFAULT NULL,
  `ModifyTime` datetime DEFAULT NULL,
  `PDID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `Nominee` varchar(100) DEFAULT NULL,
  `Relation` varchar(45) DEFAULT NULL,
  `NomineeAge` varchar(10) DEFAULT NULL,
  `NomineeDOB` varchar(20) DEFAULT NULL,
  `NomineeContact` varchar(30) DEFAULT NULL,
  `NomineeAddressID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `OperationArea` varchar(100) DEFAULT NULL,
  `OfficeID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `DocumentNo` varchar(45) DEFAULT NULL,
  `RegisterDate` date DEFAULT NULL,
  `ImageID` varchar(45) DEFAULT NULL,
  `IsSystemConfigured` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `IsHidden` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `PriceLevelID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `AttendanceTypeID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `DepartmentID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `DoctorID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `Capacity` double NOT NULL DEFAULT '0',
  `ClassTeacherID` int(10) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_master`
--

INSERT INTO `tbl_master` (`ID`, `MID`, `CODE`, `MembershipID`, `Name`, `Alias`, `PrintName`, `Description`, `MasterTypeID`, `DrCr`, `Debit`, `Credit`, `IsMaster`, `IsMasterGroup`, `CostCategoryID`, `MasterGroupID`, `DesignationID`, `PersonOrganisationID`, `AllocateRevenueItems`, `AllocateNonRevenueItems`, `AccountID`, `IsActive`, `IsBehaveAsSubLedger`, `IsAffectGrossProfit`, `SORT`, `CreditPeriod`, `CreditLimit`, `MaintainBillByBill`, `TaxClassID`, `TaxTypeID`, `Percentage`, `IsCalculative`, `OpeningBalance`, `ClosingBalance`, `Asset`, `Liabilities`, `Expense`, `Income`, `NetDebitCreditBalanceForReporting`, `UseForCalculation`, `AllocationMethodID`, `CreatedBy`, `ModifiedBy`, `CreateTime`, `ModifyTime`, `PDID`, `Nominee`, `Relation`, `NomineeAge`, `NomineeDOB`, `NomineeContact`, `NomineeAddressID`, `OperationArea`, `OfficeID`, `DocumentNo`, `RegisterDate`, `ImageID`, `IsSystemConfigured`, `IsHidden`, `PriceLevelID`, `AttendanceTypeID`, `DepartmentID`, `DoctorID`, `Capacity`, `ClassTeacherID`) VALUES
(1, 0, '', '0', 'NAVA JYOTI VIDYAPITH', 'NJV', '', '', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 3, '2019-03-14 20:42:07', '2019-03-14 20:42:07', 1, '', '', '', '', '', 0, '', 0, '', '2019-03-05', '0', 0, 0, 0, 0, 0, 0, 0, 0),
(101, 101, 'PA', NULL, '_PRIMARY', 'PRIMARY ACCOUNTS', '', NULL, 6, 1, NULL, NULL, 0, 0, NULL, 101, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 10, '2015-12-28 12:30:58', '2015-12-28 19:34:27', 0, NULL, NULL, '0', NULL, NULL, 0, NULL, 0, NULL, '2015-12-28', NULL, 1, 0, 0, 0, 0, 0, 0, 0),
(102, 101, NULL, NULL, 'ASSET', 'REAL ACCOUNTS', '', NULL, 6, 1, 1, -1, NULL, 1, NULL, 101, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, NULL, '2015-12-28 12:30:58', NULL, 0, NULL, NULL, '0', NULL, NULL, 0, NULL, 0, NULL, '2015-12-28', NULL, 1, 0, 0, 0, 0, 0, 0, 0),
(103, 101, NULL, NULL, 'LIABILITY', 'PERSONAL ACCOUNTS', '', NULL, 6, -1, -1, 1, NULL, 1, NULL, 101, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, NULL, '2015-12-28 12:30:58', NULL, 0, NULL, NULL, '0', NULL, NULL, 0, NULL, 0, NULL, '2015-12-28', NULL, 1, 0, 0, 0, 0, 0, 0, 0),
(104, 101, NULL, NULL, 'INCOME', 'NOMINAL ACCOUNTS', '', NULL, 6, -1, -1, 1, NULL, 1, NULL, 101, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, NULL, '2015-12-28 12:30:58', NULL, 0, NULL, NULL, '0', NULL, NULL, 0, NULL, 0, NULL, '2015-12-28', NULL, 1, 0, 0, 0, 0, 0, 0, 0),
(105, 101, NULL, NULL, 'EXPENSE', 'NOMINAL ACCOUNTS', '', NULL, 6, 1, 1, -1, NULL, 1, NULL, 101, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, NULL, '2015-12-28 12:30:58', NULL, 0, NULL, NULL, '0', NULL, NULL, 0, NULL, 0, NULL, '2015-12-28', NULL, 1, 0, 0, 0, 0, 0, 0, 0),
(106, 101, NULL, NULL, 'EQUITY', 'PERSONAL ACCOUNTS', '', NULL, 6, -1, -1, 1, NULL, 1, NULL, 101, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, NULL, '2015-12-28 12:30:58', NULL, 0, NULL, NULL, '0', NULL, NULL, 0, NULL, 0, NULL, '2015-12-28', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(107, 101, NULL, NULL, 'PROFITn LOSS', NULL, '', NULL, 6, NULL, NULL, NULL, NULL, 0, NULL, 101, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, NULL, '2015-12-28 12:30:58', NULL, 0, NULL, NULL, '0', NULL, NULL, 0, NULL, 0, NULL, '2015-12-28', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(108, 111, '', NULL, 'STOCK IN HAND', '', '', NULL, 6, 1, NULL, NULL, 0, 0, NULL, 102, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 10, '2015-12-28 12:30:58', '2015-12-28 19:33:22', 0, NULL, NULL, '0', NULL, NULL, 0, NULL, 0, NULL, '2015-12-28', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(109, 101, '', '0', 'BRANCH / DIVISION', '', '', '', 6, -1, 0, 0, 0, 0, 0, 103, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 3, '2015-12-28 12:30:58', '2019-03-28 20:59:42', 0, '', '', '', '', '', 0, '', 0, '', NULL, '0', 0, 0, 0, 0, 0, 0, 0, 0),
(110, 122, '', NULL, 'BANK OD A/C', 'BANK OCC A/C', '', NULL, 6, 1, NULL, NULL, 0, 0, NULL, 103, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 10, '2015-12-28 12:30:58', '2015-12-28 15:48:13', 0, NULL, NULL, '0', NULL, NULL, 0, NULL, 0, NULL, '2015-12-28', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(111, 101, 'CA01', NULL, 'CURRENT ASSET', 'CURRENT ASSET', '', NULL, 6, 1, NULL, NULL, 0, 0, NULL, 102, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 10, '2015-12-28 12:30:58', '2015-12-28 15:50:33', 0, NULL, NULL, '0', NULL, NULL, 0, NULL, 0, NULL, '2015-12-28', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(112, 111, '', NULL, 'CASH IN HAND', '', '', NULL, 6, 1, NULL, NULL, 0, 0, NULL, 102, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 10, '2015-12-28 12:30:58', '2015-12-28 15:49:18', 0, NULL, NULL, '0', NULL, NULL, 0, NULL, 0, NULL, '2015-12-28', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(113, 111, '', NULL, 'CLOSING STOCK', '', '', NULL, 6, 1, NULL, NULL, 0, 0, NULL, 102, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 10, '2015-12-28 12:30:58', '2015-12-28 21:21:47', 0, NULL, NULL, '0', NULL, NULL, 0, NULL, 0, NULL, '2015-12-28', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(114, 116, '', NULL, 'DUTIES n TAXES', '', '', NULL, 6, 1, NULL, NULL, 0, 0, NULL, 103, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 10, '2015-12-28 12:30:58', '2015-12-28 16:25:15', 0, NULL, NULL, '0', NULL, NULL, 0, NULL, 0, NULL, '2015-12-28', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(115, 111, '', NULL, 'BANK ACCOUNT', '', '', NULL, 6, 1, NULL, NULL, 0, 0, NULL, 102, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 10, '2015-12-28 12:30:58', '2015-12-28 15:46:15', 0, NULL, NULL, '0', NULL, NULL, 0, NULL, 0, NULL, '2015-12-28', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(116, 101, '', NULL, 'CURRENT LIABILITY', 'CURRENT LIABILITY', '', NULL, 6, 1, NULL, NULL, 0, 0, NULL, 103, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 10, '2015-12-28 12:30:58', '2015-12-28 15:53:00', 0, NULL, NULL, '0', NULL, NULL, 0, NULL, 0, NULL, '2015-12-28', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(117, 101, '', NULL, 'LONG TERM LIABILITY', '', '', NULL, 6, 1, NULL, NULL, 0, 0, NULL, 103, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 10, '2015-12-28 12:30:58', '2015-12-28 16:26:28', 0, NULL, NULL, '0', NULL, NULL, 0, NULL, 0, NULL, '2015-12-28', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(118, 101, '', NULL, 'FIXED ASSET', '', '', NULL, 6, 1, NULL, NULL, 0, 0, NULL, 102, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 10, '2015-12-28 12:30:58', '2015-12-28 19:26:53', 0, NULL, NULL, '0', NULL, NULL, 0, NULL, 0, NULL, '2015-12-28', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(119, 101, 'CA01', NULL, 'CAPITAL ACCOUNT', 'CAPITAL ACCOUNT', '', NULL, 6, 1, NULL, NULL, 0, 0, NULL, 103, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 10, '2015-12-28 12:30:58', '2015-12-28 15:49:24', 0, NULL, NULL, '0', NULL, NULL, 0, NULL, 0, NULL, '2015-12-28', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(120, 119, '', NULL, 'RESERVE & SERPLUS', '', '', NULL, 6, 1, NULL, NULL, 0, 0, NULL, 103, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 10, '2015-12-28 12:30:58', '2015-12-28 19:32:00', 0, NULL, NULL, '0', NULL, NULL, 0, NULL, 0, NULL, '2015-12-28', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(121, 116, '', NULL, 'PROVISION', '', '', NULL, 6, 1, NULL, NULL, 0, 0, NULL, 103, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 10, '2015-12-28 12:30:58', '2015-12-28 19:30:34', 0, NULL, NULL, '0', NULL, NULL, 0, NULL, 0, NULL, '2015-12-28', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(122, 116, '', NULL, 'LOANS[LIABILITY]', '', '', NULL, 6, 1, NULL, NULL, 0, 0, NULL, 103, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 10, '2015-12-28 12:30:58', '2015-12-28 19:28:52', 0, NULL, NULL, '0', NULL, NULL, 0, NULL, 0, NULL, '2015-12-28', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(123, 111, '', NULL, 'INVESTMENTS', '', '', NULL, 6, 1, NULL, NULL, 0, 0, NULL, 102, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 10, '2015-12-28 12:30:58', '2015-12-28 19:27:58', 0, NULL, NULL, '0', NULL, NULL, 0, NULL, 0, NULL, '2015-12-28', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(124, 111, '', '0', 'LOANS AND ADVANCE [ASSET]', '', '', '', 0, 0, 0, 0, 0, 0, 0, 102, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 3, '2015-12-28 12:30:58', '2019-03-27 11:10:16', 0, '', '', '', '', '', 0, '', 0, '', NULL, '0', 0, 0, 0, 0, 0, 0, 0, 0),
(125, 101, '', NULL, 'PURCHASE ACCOUNT', '', '', NULL, 6, 1, NULL, NULL, 0, 0, NULL, 105, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 10, '2015-12-28 12:30:58', '2015-12-28 19:31:21', 0, NULL, NULL, '0', NULL, NULL, 0, NULL, 0, NULL, '2015-12-28', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(126, 101, '', NULL, 'SALES ACCOUNT', '', '', NULL, 6, 1, NULL, NULL, 0, 0, NULL, 104, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 10, '2015-12-28 12:30:58', '2015-12-28 19:32:27', 0, NULL, NULL, '0', NULL, NULL, 0, NULL, 0, NULL, '2015-12-28', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(127, 101, '', NULL, 'DIRECT INCOME', 'Operating Revenues', '', 'Operating revenues are the amounts earned from carrying out the company\'s main activities. For example, the sales of merchandise are a retailer\'s operating revenues.\r\n\r\nA few examples of accounts for recording operating revenues include:\r\n\r\nSales\r\nSales Revenues\r\nService Revenues\r\nFees Earned\r\nSales - Product Line #1\r\nSales - Product Line #2\r\nThe revenue accounts are expected to have credit balances (since revenues cause the stockholders\' or owner\'s equity to increase). Contra revenue accounts such as Sales Returns and Allowances and Sales Discounts will have debit balances.\r\n\r\nUnder the accrual method of accounting, revenues are reported as of the date the goods are sold or the services have been performed. If a service is provided on December 27, but the customer is allowed to pay in February, the revenues are reported on the income statement that includes December 27.\r\n\r\nAt the end of the accounting year, the balance in each of the accounts for recording operating revenues will be closed in order to start the next accounting year with a zero balance.', 6, 1, NULL, NULL, 0, 0, NULL, 104, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 10, '2015-12-28 12:30:58', '2015-12-28 16:19:50', 0, NULL, NULL, '0', NULL, NULL, 0, NULL, 0, NULL, '2015-12-28', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(128, 101, '', NULL, 'DIRECT EXPENSE', 'Operating Expenses', '', 'Operating expenses are the expenses incurred in earning operating revenues. For example, advertising expense is one of the operating expenses of a retailer.\r\n\r\nA few of the many accounts used to record operating expenses include:\r\n\r\nCost of Goods Sold\r\nCost of Goods Sold - Product Line #1\r\nSalaries Expense\r\nFringe Benefit Expense\r\nRent Expense\r\nUtilities Expense\r\nUtilities Expense - Store #45\r\nDepreciation Expense - Buildings\r\nDepreciation Expense - Equipment\r\nRepairs Expense\r\nThe accounts for operating expenses should have debit balances.\r\n\r\nUnder the accrual method of accounting, the expenses should be reported in the same accounting period as the related revenues. If that is not certain, then an expense should be reported in the accounting period in which its cost expires or is used up.\r\n\r\nExpenses are often organized by function such as manufacturing, selling, and general administrative. At other times expenses will be organized by responsibility such as Department #1, Sales Region #5, Warehouse #2, Legal Department, etc.\r\n\r\nAt the end of the accounting year, the balance in each of the accounts used for recording operating expenses will be closed in order to start the next accounting year with a zero balance.', 6, 1, NULL, NULL, 0, 0, NULL, 105, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 10, '2015-12-28 12:30:58', '2015-12-28 16:18:01', 0, NULL, NULL, '0', NULL, NULL, 0, NULL, 0, NULL, '2015-12-28', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(129, 101, '', NULL, 'INDIRECT INCOME', 'Non-Operating Revenues and Gains', '', 'Revenues earned outside of a company\'s main business activities are referred to as non-operating revenues or as other revenues. For example, the interest earned by a retailer on its idle cash balances is part of non-operating or other revenues.\r\n\r\nGains often occur when a company sells an asset that was used in the business, and the cash received was greater than the asset\'s carrying amount on the company\'s books. For example, if a company car is sold for $10,000 and its book value is $9,000, there will be a gain of $1,000.\r\n\r\nThe accounts that report non-operating revenues, other revenues, and gains are expected to have credit balances since they cause stockholders\' equity to increase.', 6, 1, NULL, NULL, 0, 0, NULL, 104, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 10, '2015-12-28 12:30:58', '2015-12-28 19:27:35', 0, NULL, NULL, '0', NULL, NULL, 0, NULL, 0, NULL, '2015-12-28', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(130, 101, '', NULL, 'INDIRECT EXPENSE', 'Non-Operating Expenses and Losses', '', 'The expenses incurred in order to earn non-operating revenues are reported as non-operating expenses or other expenses. In addition, interest expense for a retailer is a non-operating expense or other expense. (On the other hand, the interest expense paid by a bank for the use of depositors\' money is one of the bank\'s operating expenses.)\r\n\r\nLosses are reported when a company disposes of a long-term asset for the cash, and the amount of cash received is less than the book value of the asset. For example, if a company car is sold for $7,500 and its book value is $9,000, a loss of $1,500 will be reported. Another example of a loss is the loss from a lawsuit.\r\n\r\nThe accounts for non-operating expenses and losses will have debit balances since they cause stockholders\' equity to decrease.', 6, 1, NULL, NULL, 0, 0, NULL, 105, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 10, '2015-12-28 12:30:58', '2015-12-28 19:27:12', 0, NULL, NULL, '0', NULL, NULL, 0, NULL, 0, NULL, '2015-12-28', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(131, 111, '', '0', 'Sundry Debtors', '', '', '', 6, 1, 0, 0, 0, 0, 0, 102, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 3, '2015-12-28 12:30:58', '2019-03-29 09:09:10', 0, '', '', '', '', '', 0, '', 0, '', NULL, '0', 0, 0, 0, 0, 0, 0, 0, 0),
(132, 116, '', '0', 'Sundry Creditors', '', '', '', 6, -1, 0, 0, 0, 0, 0, 103, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 3, '2015-12-28 12:30:58', '2019-03-29 09:08:48', 0, '', '', '', '', '', 0, '', 0, '', NULL, '0', 0, 0, 0, 0, 0, 0, 0, 0),
(133, 124, '', NULL, 'SECURED LOANS', '', '', NULL, 6, 1, NULL, NULL, 0, 0, NULL, 102, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 10, '2015-12-28 12:30:58', '2015-12-28 19:33:03', 0, NULL, NULL, '0', NULL, NULL, 0, NULL, 0, NULL, '2015-12-28', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(134, 116, '', NULL, 'UNSECURED LOANS', '', '', NULL, 6, 1, NULL, NULL, 0, 0, NULL, 103, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 10, '2015-12-28 12:30:58', '2015-12-28 19:33:41', 0, NULL, NULL, '0', NULL, NULL, 0, NULL, 0, NULL, '2015-12-28', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(135, 111, NULL, NULL, 'OPENING STOCK', NULL, '', NULL, 6, NULL, NULL, NULL, NULL, 0, NULL, 101, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, NULL, '2015-12-28 12:30:58', NULL, 0, NULL, NULL, '0', NULL, NULL, 0, NULL, 0, NULL, '2015-12-28', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(136, 130, '', NULL, 'DIRECTORS REMUNARATION', '', '', NULL, 6, 1, NULL, NULL, 0, 0, NULL, 105, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 10, '2015-12-28 12:30:58', '2015-12-28 16:24:28', 0, NULL, NULL, '0', NULL, NULL, 0, NULL, 0, NULL, '2015-12-28', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(1001, 112, '', NULL, 'CASH', '', '', 'Cash includes currency, coins, checking account balances, petty cash funds, and customers\' checks that have not yet been deposited. A company is likely to have a separate general ledger account for each checking account, petty cash fund, etc. but will combine the amounts and will report the total as Cash (or Cash and Cash Equivalents) on the balance sheet.', 7, 1, NULL, NULL, 0, 0, NULL, 102, NULL, NULL, NULL, NULL, NULL, 1, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 10, '2015-12-28 12:30:58', '2015-12-28 21:35:10', 0, NULL, NULL, '0', NULL, NULL, 0, NULL, 0, NULL, '2015-12-28', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(1002, 101, NULL, NULL, 'PROFIT & LOSS A/C', NULL, '', NULL, 7, 0, NULL, NULL, 0, 0, NULL, 101, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, NULL, '2015-12-28 12:30:58', NULL, 0, NULL, NULL, '0', NULL, NULL, 0, NULL, 0, NULL, '2015-12-28', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(1003, 101, NULL, NULL, 'BALANCE B/F', NULL, '', NULL, 7, 0, NULL, NULL, 0, 0, NULL, 101, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, NULL, '2015-12-28 12:30:58', NULL, 0, NULL, NULL, '0', NULL, NULL, 0, NULL, 0, NULL, '2015-12-28', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(1004, 101, '', NULL, 'BALANCE C/F', '', '', NULL, 7, 0, NULL, NULL, 0, 0, NULL, 101, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 10, '2015-12-28 12:30:58', '2015-12-28 19:43:19', 0, NULL, NULL, '0', NULL, NULL, 0, NULL, 0, NULL, '2015-12-28', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(1005, 111, '', NULL, 'OPENING STOCK', '', '', NULL, 7, 1, NULL, NULL, 0, 0, NULL, 102, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 10, '2015-12-28 12:30:58', '2015-12-28 21:40:54', 0, NULL, NULL, '0', NULL, NULL, 0, NULL, 0, NULL, '2015-12-28', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(1006, 111, '', NULL, 'Inventory', '', '', 'Inventory is the cost of goods that have been purchased or manufactured and have not yet been sold.', 7, 1, NULL, NULL, 0, 0, NULL, 102, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 10, '2015-12-28 12:30:58', '2015-12-28 21:28:22', 0, NULL, NULL, '0', NULL, NULL, 0, NULL, 0, NULL, '2015-12-28', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(1007, 111, '', NULL, 'WORK IN PROGRESS', '', '', NULL, 7, 1, NULL, NULL, 0, 0, NULL, 102, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 10, '2015-12-28 12:30:58', '2015-12-28 21:23:24', 0, NULL, NULL, '0', NULL, NULL, 0, NULL, 0, NULL, '2015-12-28', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(1008, 119, '', NULL, 'CAPITAL A/C', '', '', NULL, 7, 1, NULL, NULL, 0, 0, NULL, 103, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 10, '2015-12-28 12:30:58', '2015-12-28 20:09:53', 0, NULL, NULL, '0', NULL, NULL, 0, NULL, 0, NULL, '2015-12-28', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(1009, 125, '', '0', 'PURCHASE A/C', '', '', '', 7, 1, 0, 0, 0, 0, 0, 105, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 3, '2015-12-28 12:30:58', '2019-03-28 21:03:33', 0, '', '', '', '', '', 0, '', 0, '', NULL, '0', 0, 0, 0, 0, 0, 0, 0, 0),
(1010, 126, '', '0', 'Sales A/c', '', '', '', 7, -1, 0, 0, 0, 0, 0, 104, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 3, '2015-12-28 12:30:58', '2019-07-31 20:00:42', 0, '', '', '', '', '', 0, '', 0, '', NULL, '0', 0, 0, 0, 0, 0, 0, 0, 0),
(1011, 125, '', NULL, 'PURCHASE RETURN A/C', '', '', NULL, 7, 1, NULL, NULL, 0, 0, NULL, 105, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 10, '2015-12-28 12:30:58', '2015-12-28 21:36:21', 0, NULL, NULL, '0', NULL, NULL, 0, NULL, 0, NULL, '2015-12-28', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(1012, 126, '', NULL, 'SALES RETURN A/C', '', '', NULL, 7, 1, NULL, NULL, 0, 0, NULL, 104, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 10, '2015-12-28 12:30:58', '2016-01-07 00:35:32', 0, NULL, NULL, '0', NULL, NULL, 0, NULL, 0, NULL, '2015-12-28', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(1013, 127, '', NULL, 'CLOSING STOCK [INCOME]', '', '', NULL, 7, 1, NULL, NULL, 0, 0, NULL, 104, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 10, '2015-12-28 12:30:58', '2015-12-28 21:41:46', 0, NULL, NULL, '0', NULL, NULL, 0, NULL, 0, NULL, '2015-12-28', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(1014, 101, '', NULL, 'SUSPENSE A/C', '', '', NULL, 7, 1, NULL, NULL, 0, 0, NULL, 103, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 10, '2015-12-28 12:30:58', '2015-12-28 21:27:59', 0, NULL, NULL, '0', NULL, NULL, 0, NULL, 0, NULL, '2015-12-28', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(1015, 130, '', NULL, 'BANK CHARGES', '', '', NULL, 7, 1, NULL, NULL, 0, 0, NULL, 105, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 10, '2015-12-28 12:30:58', '2015-12-28 20:08:53', 0, NULL, NULL, '0', NULL, NULL, 0, NULL, 0, NULL, '2015-12-28', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(1016, 129, '', NULL, 'BANK INTEREST', '', '', NULL, 7, 1, NULL, NULL, 0, 0, NULL, 104, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 10, '2015-12-28 12:30:58', '2015-12-28 20:09:27', 0, NULL, NULL, '0', NULL, NULL, 0, NULL, 0, NULL, '2015-12-28', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(1017, 130, '', NULL, 'Salaries Expense', '', '', NULL, 7, 1, NULL, NULL, 0, 0, NULL, 105, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 10, '2015-12-28 12:30:58', '2015-12-28 21:36:02', 0, NULL, NULL, '0', NULL, NULL, 0, NULL, 0, NULL, '2015-12-28', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(1018, 132, '', '0', 'Samir Ram', '', '', '', 7, -1, 0, 0, 0, 0, 0, 103, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '1', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 3, '2015-12-28 12:30:58', '2019-03-29 20:12:46', 274, '', '', '', '', '', 0, '', 0, '', NULL, '0', 0, 0, 0, 0, 0, 0, 0, 0),
(1019, 128, '', NULL, 'ROUND OFF', 'Round Off', '', NULL, 7, 1, NULL, NULL, 0, 0, NULL, 105, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 10, '2015-12-28 12:30:58', '2015-12-30 04:19:16', 0, NULL, NULL, '0', NULL, NULL, 0, NULL, 0, NULL, '2015-12-28', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(1020, 128, '', NULL, 'CARRIAGE OUTWARD', '', '', NULL, 7, 1, NULL, NULL, 0, 0, NULL, 105, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 10, '2015-12-28 12:30:58', '2015-12-28 21:42:02', 0, NULL, NULL, '0', NULL, NULL, 0, NULL, 0, NULL, '2015-12-28', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(1021, 130, '', '0', 'DISCOUNT ALLOWED', '', '', '', 7, 1, 0, 0, 0, 0, 0, 105, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 3, '2015-12-28 12:30:58', '2019-07-31 18:25:06', 0, '', '', '', '', '', 0, '', 0, '', NULL, '0', 0, 0, 0, 0, 0, 0, 0, 0),
(1022, 111, '', NULL, 'LOANS AND ADVANCE [ASSET]', '', '', NULL, 7, 1, NULL, NULL, 0, 0, NULL, 102, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 10, '2015-12-28 12:30:58', '2015-12-28 21:22:54', 0, NULL, NULL, '0', NULL, NULL, 0, NULL, 0, NULL, '2015-12-28', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(1023, 112, '', NULL, 'Pending/Waiting Instrument', '', '', NULL, 7, 1, NULL, NULL, 0, 0, NULL, 102, NULL, NULL, NULL, NULL, NULL, 1, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 10, '2015-12-28 12:30:58', '2015-12-28 21:40:34', 0, NULL, NULL, '0', NULL, NULL, 0, NULL, 0, NULL, '2015-12-28', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(1024, 130, '', NULL, 'CARRIAGE INWARD', '', '', NULL, 7, 1, NULL, NULL, 0, 0, NULL, 105, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 10, '2015-12-28 12:30:58', '2015-12-28 20:10:28', 0, NULL, NULL, '0', NULL, NULL, 0, NULL, 0, NULL, '2015-12-28', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(1025, 128, '', NULL, 'WAGES', '', '', NULL, 7, 1, NULL, NULL, 0, 0, NULL, 105, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 10, '2015-12-28 12:30:58', '2015-12-28 20:11:11', 0, NULL, NULL, '0', NULL, NULL, 0, NULL, 0, NULL, '2015-12-28', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(1026, 128, '', NULL, 'COST OF GOODS SOLD', '', '', NULL, 7, 1, NULL, NULL, 0, 0, NULL, 105, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 10, '2015-12-28 12:30:58', '2015-12-29 00:22:55', 0, NULL, NULL, '0', NULL, NULL, 0, NULL, 0, NULL, '2015-12-28', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(1027, 111, '', NULL, 'Short-term Investments', '', NULL, 'Short-term or temporary investments may include certificates of deposit, bonds, notes, etc. that will mature in less than one year. It may also include investments in the common or preferred stock of another corporation if the stock can be easily sold on a stock exchange.', 7, 1, NULL, NULL, 0, 0, NULL, 102, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 10, '2015-12-30 04:50:03', '2015-12-30 05:26:32', 0, NULL, NULL, '0', NULL, NULL, 0, NULL, 0, NULL, '2015-12-30', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(1028, 131, '', '0', 'HAPPY', '', '', '', 7, 1, 0, 0, 0, 0, 0, 102, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 3, '2015-12-30 04:50:03', '2019-03-29 21:05:13', 279, '', '', '', '', '', 0, '', 0, '', NULL, '0', 0, 0, 0, 0, 0, 0, 0, 0),
(1029, 111, '', NULL, 'Allowance for Doubtful Accounts (a contra-asset account)', '', NULL, 'The Allowance for Doubtful Accounts is a contra-asset account since its balance is intended to be a credit balance (or a zero balance). When the balance in this account is combined with the balance in Accounts Receivable, the resulting amount is known as the net realizable value of the receivables. The Allowance for Doubtful Accounts is used under the allowance method of reporting bad debts expense.', 7, 1, NULL, NULL, 0, 0, NULL, 102, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 10, '2015-12-30 04:50:03', '2015-12-30 05:25:10', 0, NULL, NULL, '0', NULL, NULL, 0, NULL, 0, NULL, '2015-12-30', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(1030, 111, '', NULL, 'Accrued Revenues/Receivables', '', NULL, 'Under the accrual method of accounting, revenues are to be reported when goods or services have been delivered even if a sales invoice has not been generated. This account will report the amounts that a company has a right to receive but the sales invoices have yet to be prepared or entered in Accounts Receivable.', 7, 1, NULL, NULL, 0, 0, NULL, 102, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 10, '2015-12-30 04:50:03', '2015-12-30 05:24:42', 0, NULL, NULL, '0', NULL, NULL, 0, NULL, 0, NULL, '2015-12-30', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(1031, 111, '', NULL, 'Prepaid Expenses', '', NULL, 'These are future expenses that have already been paid. The amounts appear as assets until the costs have been used up or expire. A common example of a prepaid expense is the payment for vehicle insurance. To illustrate this, let\'s assume that on December 29, a new company pays $6,000 for the insurance covering its vehicles for the six-month period that will begin on January 1. As of December 31, the entire $6,000 will be a prepaid expense because none of the cost has expired. Since none of the cost expired in December, there is no insurance expense in December. The insurance expense will begin in January at a rate of $1,000 per month. This is depicted in the following chart:\r\n\r\n61X-table-07\r\n*The expense is the amount that is expiring during the month.\r\n**The prepaid amounts are the unexpired amounts and should be the balance in the asset account Prepaid Expenses or Prepaid Insurance at the end of each of the months.', 7, 1, NULL, NULL, 0, 0, NULL, 102, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 10, '2015-12-30 04:50:03', '2015-12-30 05:26:17', 0, NULL, NULL, '0', NULL, NULL, 0, NULL, 0, NULL, '2015-12-30', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(1032, 111, '', NULL, 'Supplies', '', NULL, 'Supplies could be office supplies, manufacturing supplies, packaging supplies or other supplies that are on hand. The cost of the supplies that remain on hand is reported as an asset.', 7, 1, NULL, NULL, 0, 0, NULL, 102, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 10, '2015-12-30 04:51:19', '2015-12-30 05:26:48', 0, NULL, NULL, '0', NULL, NULL, 0, NULL, 0, NULL, '2015-12-30', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(1033, 111, '', NULL, 'Long-term Investments', '', NULL, 'This account or asset category will be reported on the balance sheet immediately following current assets. It may include investments in the common stock, preferred stock, and bonds of another corporation. It also includes real estate being held for sale and also the money that is restricted for a long-term purpose such as a building project or the repurchase of bonds payable. The cash surrender value of a life insurance policy owned by a company is also reported under this asset heading.', 7, 1, NULL, NULL, 0, 0, NULL, 102, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 10, '2015-12-30 04:51:19', '2015-12-30 05:26:02', 0, NULL, NULL, '0', NULL, NULL, 0, NULL, 0, NULL, '2015-12-30', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(1034, 118, '', NULL, 'Land', '', NULL, 'This account represents the property portion of the balance sheet heading "Property, plant and equipment." It reports the cost of land used in a business. Since land is assumed to last indefinitely, the cost of land is not depreciated.', 7, 1, NULL, NULL, 0, 0, NULL, 102, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 10, '2015-12-30 04:51:19', '2015-12-30 05:25:22', 0, NULL, NULL, '0', NULL, NULL, 0, NULL, 0, NULL, '2015-12-30', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(1035, 118, '', NULL, 'Buildings', '', NULL, 'This account will report the cost of the building used in the business. The cost of buildings will be depreciated over their useful lives.', 7, 1, NULL, NULL, 0, 0, NULL, 102, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 10, '2015-12-30 04:51:19', '2015-12-30 05:14:16', 0, NULL, NULL, '0', NULL, NULL, 0, NULL, 0, NULL, '2015-12-30', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(1036, 118, '', NULL, 'Equipment', '', NULL, 'This account reports the cost of the machinery and equipment used in the business. The cost of equipment will be depreciated over the equipment\'s useful life.', 7, 1, NULL, NULL, 0, 0, NULL, 102, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 10, '2015-12-30 04:51:19', '2015-12-30 05:15:09', 0, NULL, NULL, '0', NULL, NULL, 0, NULL, 0, NULL, '2015-12-30', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(1037, 118, '', NULL, 'Vehicles', '', NULL, 'This account reports the cost of trucks, trailers, and automobiles used in the business. The cost of vehicles is to be depreciated over the vehicles\' useful lives.', 7, 1, NULL, NULL, 0, 0, NULL, 102, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 10, '2015-12-30 04:51:19', '2015-12-30 05:27:01', 0, NULL, NULL, '0', NULL, NULL, 0, NULL, 0, NULL, '2015-12-30', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(1038, 118, '', NULL, 'Furniture and Fixtures', '', NULL, 'This account reports the cost of desks, chairs, shelving, etc. that are used in the business. The cost of furniture and fixtures is to be depreciated over the useful lives.', 7, 1, NULL, NULL, 0, 0, NULL, 102, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 10, '2015-12-30 04:51:19', '2015-12-30 05:14:42', 0, NULL, NULL, '0', NULL, NULL, 0, NULL, 0, NULL, '2015-12-30', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(1039, 111, '', NULL, 'Accumulated Depreciation (a contra-asset account)', '', NULL, 'Accumulated Depreciation is known as a contra asset account because it has a credit balance instead of a debit balance that is typical for asset accounts. Whenever Depreciation Expense is debited for the periodic depreciation of the buildings, equipment, vehicles, etc. the account Accumulated Depreciation is credited. The credit balance in Accumulated Depreciation will continue to grow until an asset is sold or scrapped. However, the maximum amount of the credit balance is the cost of the asset(s).', 7, 1, NULL, NULL, 0, 0, NULL, 102, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 10, '2015-12-30 04:51:19', '2015-12-30 05:24:54', 0, NULL, NULL, '0', NULL, NULL, 0, NULL, 0, NULL, '2015-12-30', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(1040, 116, '', NULL, 'Short-term Loans Payable', '', NULL, 'This account will report the amount of loans which will be due within one year of the date of the balance sheet.', 7, 1, NULL, NULL, 0, 0, NULL, 103, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 10, '2015-12-30 05:46:36', '2015-12-30 06:16:16', 0, NULL, NULL, '0', NULL, NULL, 0, NULL, 0, NULL, '2015-12-30', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(1041, 117, '', NULL, 'Current Portion of Long-term Debt', '', NULL, 'This account or line description reports the principal portion of a long-term debt that will have to be paid within one year of the date of the balance sheet. (The portion of the debt that is not due within one year is reported as a noncurrent liability.)', 7, 1, NULL, NULL, 0, 0, NULL, 103, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 10, '2015-12-30 05:46:36', '2015-12-30 06:21:46', 0, NULL, NULL, '0', NULL, NULL, 0, NULL, 0, NULL, '2015-12-30', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(1042, 116, '', NULL, 'Accrued Expenses', '', NULL, 'Under the accrual method, the amounts in this account are owed but have not yet been recorded in Accounts Payable. This account could include the vendor invoices awaiting processing, employee wages and benefits earned but not yet recorded, and other expenses incurred but not yet recorded.', 7, 1, NULL, NULL, 0, 0, NULL, 103, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 10, '2015-12-30 05:46:36', '2015-12-30 06:19:32', 0, NULL, NULL, '0', NULL, NULL, 0, NULL, 0, NULL, '2015-12-30', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(1043, 129, '', NULL, 'Unearned or Deferred Revenues', '', NULL, 'Unearned revenues reports the amounts received in advance of having been earned. For example, if a law firm requires that a client pay $4,000 in advance for future legal work, the law firm will record the cash of $4,000 and also the liability to deliver $4,000 of legal services. The law firm cannot report the $4,000 as revenue until it is earned. This liability account could have the title Unearned Revenues or Deferred Legal Fees. As the legal services are performed and therefore are earned, the law firm will reduce the liability account and will report the amount as revenues.', 7, 1, NULL, NULL, 0, 0, NULL, 104, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 10, '2015-12-30 05:46:36', '2015-12-30 06:16:44', 0, NULL, NULL, '0', NULL, NULL, 0, NULL, 0, NULL, '2015-12-30', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(1044, 117, '', NULL, 'Installment Loans Payable', '', NULL, 'Installment loans are loans that require a series of payments. A common example is a three-year automobile loan that requires monthly payments. The principal due within one year of the balance sheet date will be reported as a current liability and the remainder of the principal owed will be reported as a noncurrent liability. (The future interest is not recorded as a liability, since it is not due or payable as of the date of the balance sheet.)', 7, 1, NULL, NULL, 0, 0, NULL, 103, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 10, '2015-12-30 05:46:36', '2015-12-30 06:17:59', 0, NULL, NULL, '0', NULL, NULL, 0, NULL, 0, NULL, '2015-12-30', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(1045, 117, '', NULL, 'Mortgage Loans Payable', '', NULL, 'Mortgage loans are usually long-term loans with real estate pledged as collateral. The principal due within one year of the balance sheet will be reported as a current liability and the remainder of the principal owed is reported as a noncurrent liability. (The future interest is not recorded as a liability, since it is not due or payable as of the date of the balance sheet.)', 7, 1, NULL, NULL, 0, 0, NULL, 103, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 10, '2015-12-30 05:46:36', '2015-12-30 06:23:08', 0, NULL, NULL, '0', NULL, NULL, 0, NULL, 0, NULL, '2015-12-30', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(1046, 101, '', NULL, 'Retained Earnings', '', NULL, 'Generally, the amount of a corporation\'s retained earnings is the cumulative amount of earnings (net income) since the corporation was formed minus the cumulative amount of dividends that have been declared since the corporation was formed.\r\n\r\nThe current accounting period\'s earnings (or net income) will be added to this account and the current period\'s dividends will be deducted.\r\n\r\nNote: Revenues will cause retained earnings to increase, while expenses will cause retained earnings to decrease.\r\nRetained earnings is a component of stockholders\' equity, but it is separate from paid-in capital. Hence, the amounts reported under retained earnings are not considered to be permanent capital.', 7, 1, NULL, NULL, 0, 0, NULL, 106, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 10, '2015-12-30 05:46:36', '2015-12-30 06:24:53', 0, NULL, NULL, '0', NULL, NULL, 0, NULL, 0, NULL, '2015-12-30', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(1047, 128, '', NULL, 'Fringe Benefit Expense', '', NULL, NULL, 7, 1, NULL, NULL, 0, 0, NULL, 105, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 10, '2015-12-30 05:46:36', '2015-12-30 06:11:58', 0, NULL, NULL, '0', NULL, NULL, 0, NULL, 0, NULL, '2015-12-30', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(1048, 128, '', NULL, 'Rent Expense', '', NULL, NULL, 7, 1, NULL, NULL, 0, 0, NULL, 105, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 10, '2015-12-30 05:46:36', '2015-12-30 06:15:10', 0, NULL, NULL, '0', NULL, NULL, 0, NULL, 0, NULL, '2015-12-30', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(1049, 128, '', NULL, 'Utilities Expense', '', NULL, NULL, 7, 1, NULL, NULL, 0, 0, NULL, 105, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 10, '2015-12-30 06:00:00', '2015-12-30 06:24:08', 0, NULL, NULL, '0', NULL, NULL, 0, NULL, 0, NULL, '2015-12-30', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(1050, 128, '', NULL, 'Depreciation Expense - Buildings', '', NULL, NULL, 7, 1, NULL, NULL, 0, 0, NULL, 105, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 10, '2015-12-30 06:00:00', '2015-12-30 06:22:28', 0, NULL, NULL, '0', NULL, NULL, 0, NULL, 0, NULL, '2015-12-30', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(1051, 128, '', NULL, 'Depreciation Expense - Equipment', '', NULL, NULL, 7, 1, NULL, NULL, 0, 0, NULL, 105, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 10, '2015-12-30 06:00:00', '2015-12-30 06:22:46', 0, NULL, NULL, '0', NULL, NULL, 0, NULL, 0, NULL, '2015-12-30', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(1052, 128, '', NULL, 'Repairs Expense', '', NULL, NULL, 7, 1, NULL, NULL, 0, 0, NULL, 105, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 10, '2015-12-30 06:00:00', '2015-12-30 06:23:25', 0, NULL, NULL, '0', NULL, NULL, 0, NULL, 0, NULL, '2015-12-30', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(1053, 127, '', NULL, 'Fees Earned', '', NULL, NULL, 7, 1, NULL, NULL, 0, 0, NULL, 104, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 10, '2015-12-30 06:14:28', '2015-12-30 06:18:14', 0, NULL, NULL, '0', NULL, NULL, 0, NULL, 0, NULL, '2015-12-30', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(1054, 129, 'JF01', NULL, 'Joining Fees', 'Joining Fees', 'Joining Fees', 'Joining Fees', 7, 1, NULL, NULL, 0, 0, NULL, 104, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 10, '2015-12-30 06:14:28', '2015-12-30 06:24:33', 0, NULL, NULL, '0', NULL, NULL, 0, NULL, 0, NULL, '2015-12-30', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(1055, 116, NULL, NULL, 'Share Application and Allotment A/c', 'Share Application and Allotment A/c', 'Share Application and Allotment A/c', NULL, 7, 1, NULL, NULL, NULL, 0, NULL, 104, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, NULL, '2016-04-07 03:44:47', NULL, 0, NULL, NULL, '0', NULL, NULL, 0, NULL, 0, NULL, '2016-04-07', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(1066, 116, '', '0', 'Share Capitals', '', '', '', 7, -1, 0, 0, 0, 0, 0, 103, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 3, '2016-04-07 03:44:47', '2019-03-28 21:04:07', 0, '', '', '', '', '', 0, '', 0, '', NULL, '0', 0, 0, 0, 0, 0, 0, 0, 0),
(1067, 0, NULL, NULL, 'Share Holder/Applicant', 'Share Holder/Applicant', 'Share Holder/Applicant', NULL, 7, 1, NULL, NULL, NULL, 0, NULL, 104, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, NULL, '2016-04-07 03:58:34', NULL, 0, NULL, NULL, '0', NULL, NULL, 0, NULL, 0, NULL, '2016-04-07', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(1068, 116, NULL, NULL, 'Share Application(Equity)', 'Share Application(Equity)', 'Share Application(Equity)', 'Share Application(Equity)', 7, 1, NULL, NULL, NULL, 0, NULL, 104, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, NULL, '2016-04-09 01:25:47', NULL, 0, NULL, NULL, '0', NULL, NULL, 0, NULL, 0, NULL, '2016-04-09', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(1069, 115, NULL, NULL, 'BANK ACCOUNT1', NULL, NULL, NULL, 7, 1, NULL, NULL, NULL, 0, NULL, 102, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, NULL, '2016-04-10 13:40:05', NULL, 0, NULL, NULL, '0', NULL, NULL, 0, NULL, 0, NULL, '2016-04-10', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(1070, 115, NULL, NULL, 'BANK ACCOUNT2', NULL, NULL, NULL, 7, 1, NULL, NULL, NULL, 0, NULL, 102, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, NULL, '2016-04-10 13:40:05', NULL, 0, NULL, NULL, '0', NULL, NULL, 0, NULL, 0, NULL, '2016-04-10', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10001, 1, 'BC0001', NULL, 'NEW TOWN', 'NEW TOWN', 'NEW TOWN', '', 18, 0, 1, 1, 1, 1, 0, 1, 0, 246, 1, 1, 1, 1, 1, 1, 1, 100000, 0, '1', 0, 0, 100, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 10056, '2016-03-24 03:21:11', '2017-01-10 20:42:35', 246, NULL, NULL, '0', NULL, NULL, 0, NULL, 0, NULL, '2017-01-11', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10056, 1, '', '0', 'Teacher22', '', '', '', 43, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 3, '2016-04-12 07:45:13', '2019-12-28 05:44:01', 123, '', '', '', '', '', 0, '', 0, '', '2016-03-17', '0', 0, 0, 0, 0, 10319, 0, 0, 0),
(10057, 0, 'MS001', '0', 'Class1', '', '', '', 44, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 1, '2016-11-11 22:51:04', '2019-12-05 03:32:04', 3, '', '', '', '', '', 0, '', 0, '', '2016-11-11', '0', 1, 0, 0, 0, 0, 0, 0, 0),
(10058, 10057, 'RA00002', NULL, 'TANMAY DAS', NULL, 'TANMAY DAS', NULL, 34, NULL, NULL, NULL, NULL, 0, NULL, 1, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-11 22:51:58', '2016-11-11 23:55:08', 4, '', 'FATHER', '', NULL, NULL, 0, NULL, 10001, '', '2016-11-11', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10059, 10057, 'RA00003', NULL, 'SURAJIT PAL', NULL, 'SURAJIT PAL', NULL, 34, NULL, NULL, NULL, NULL, 0, NULL, 1, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-11 22:53:21', '2016-11-12 00:02:56', 5, '', 'FATHER', '', NULL, NULL, 0, NULL, 10001, '', '2016-11-11', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10060, 10059, 'RA00004', NULL, 'SANDIP BISWAS', NULL, 'SANDIP BISWAS', NULL, 34, NULL, NULL, NULL, NULL, 0, NULL, 1, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-11 23:04:59', '2016-11-15 22:56:40', 6, 'SWAPNA BISWAS', 'FATHER', '', NULL, NULL, 0, NULL, 10001, '', '2016-11-11', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10061, 10060, 'RA00005', NULL, 'TANUSRI MONDAL', NULL, 'TANUSRI MONDAL', NULL, 34, NULL, NULL, NULL, NULL, 0, NULL, 1, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-11 23:20:52', '2016-11-30 06:40:23', 7, 'N. MONDAL', 'FATHER', '', NULL, NULL, 0, NULL, 10001, '', '2016-11-11', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10062, 10061, 'RA00006', NULL, 'SOUMEN DEY', NULL, 'SOUMEN DEY', NULL, 34, NULL, NULL, NULL, NULL, 0, NULL, 1, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-11 23:24:37', '2016-11-11 23:24:37', 8, '', 'FATHER', '', NULL, NULL, 0, NULL, 10001, '', '2016-11-11', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10063, 114, '', '0', 'CGST', '', '', '', 7, -1, 0, 0, 0, 0, 0, 103, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 3, '2016-11-11 23:26:49', '2019-03-28 21:01:11', 0, '', '', '', '', '', 0, '', 0, '', NULL, '0', 0, 0, 0, 0, 0, 0, 0, 0),
(10064, 114, '', '0', 'INPUT GST', '', '', '', 7, -1, 0, 0, 0, 0, 0, 103, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 3, '2016-11-11 23:28:57', '2019-07-31 18:29:14', 0, '', '', '', '', '', 0, '', 0, '', NULL, '0', 0, 0, 0, 0, 0, 0, 0, 0),
(10065, 114, '', '0', 'EXEMPT', '', '', '', 7, -1, 0, 0, 0, 0, 0, 103, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 3, '2016-11-11 23:30:13', '2019-03-28 21:03:13', 0, '', '', '', '', '', 0, '', 0, '', NULL, '0', 0, 0, 0, 0, 0, 0, 0, 0);
INSERT INTO `tbl_master` (`ID`, `MID`, `CODE`, `MembershipID`, `Name`, `Alias`, `PrintName`, `Description`, `MasterTypeID`, `DrCr`, `Debit`, `Credit`, `IsMaster`, `IsMasterGroup`, `CostCategoryID`, `MasterGroupID`, `DesignationID`, `PersonOrganisationID`, `AllocateRevenueItems`, `AllocateNonRevenueItems`, `AccountID`, `IsActive`, `IsBehaveAsSubLedger`, `IsAffectGrossProfit`, `SORT`, `CreditPeriod`, `CreditLimit`, `MaintainBillByBill`, `TaxClassID`, `TaxTypeID`, `Percentage`, `IsCalculative`, `OpeningBalance`, `ClosingBalance`, `Asset`, `Liabilities`, `Expense`, `Income`, `NetDebitCreditBalanceForReporting`, `UseForCalculation`, `AllocationMethodID`, `CreatedBy`, `ModifiedBy`, `CreateTime`, `ModifyTime`, `PDID`, `Nominee`, `Relation`, `NomineeAge`, `NomineeDOB`, `NomineeContact`, `NomineeAddressID`, `OperationArea`, `OfficeID`, `DocumentNo`, `RegisterDate`, `ImageID`, `IsSystemConfigured`, `IsHidden`, `PriceLevelID`, `AttendanceTypeID`, `DepartmentID`, `DoctorID`, `Capacity`, `ClassTeacherID`) VALUES
(10066, 114, '', '0', 'EPF', '', '', '', 7, -1, 0, 0, 0, 0, 0, 103, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 3, '2016-11-11 23:32:03', '2019-03-28 21:02:36', 0, '', '', '', '', '', 0, '', 0, '', NULL, '0', 0, 0, 0, 0, 0, 0, 0, 0),
(10067, 10066, 'RA00011', NULL, 'DEBASISH CHATTERJEE', NULL, 'DEBASISH CHATTERJEE', NULL, 34, NULL, NULL, NULL, NULL, 0, NULL, 1, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-11 23:34:54', '2016-11-12 00:46:31', 13, 'S. CHATTERJEE', 'FATHER', '', NULL, NULL, 0, NULL, 10001, '', '2016-11-11', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10068, 10067, 'RA00012', NULL, 'KAMAL KANTI DEY', NULL, 'KAMAL KANTI DEY', NULL, 34, NULL, NULL, NULL, NULL, 0, NULL, 1, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-11 23:35:49', '2016-11-12 00:47:53', 14, '', 'FATHER', '', NULL, NULL, 0, NULL, 10001, '', '2016-11-11', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10069, 10068, 'RA00013', NULL, 'SURAJIT PAL', NULL, 'SURAJIT PAL', NULL, 34, NULL, NULL, NULL, NULL, 0, NULL, 1, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-11 23:36:51', '2016-11-12 00:49:10', 15, '', 'FATHER', '', NULL, NULL, 0, NULL, 10001, '', '2016-11-11', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10070, 10069, 'RA00014', NULL, 'BIMAL KANTI DEY', NULL, 'BIMAL KANTI DEY', NULL, 34, NULL, NULL, NULL, NULL, 0, NULL, 1, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-11 23:38:41', '2016-11-12 00:52:19', 16, 'SWAPNA DEY', 'FATHER', '', NULL, NULL, 0, NULL, 10001, '', '2016-11-11', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10071, 10070, 'RA00015', NULL, 'MADHAB CHANDRA DOLAI', NULL, 'MADHAB CHANDRA DOLAI', NULL, 34, NULL, NULL, NULL, NULL, 0, NULL, 1, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-11 23:45:52', '2016-11-16 19:56:52', 17, 'KAJAL DOLAI', 'FATHER', '', NULL, NULL, 0, NULL, 10001, '', '2016-11-11', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10072, 10071, 'RA00016', NULL, 'HIRALAL ROY', NULL, 'HIRALAL ROY', NULL, 34, NULL, NULL, NULL, NULL, 0, NULL, 1, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-11 23:47:17', '2016-11-16 19:59:28', 18, 'M. ROY', 'FATHER', '', NULL, NULL, 0, NULL, 10001, '', '2016-11-11', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10073, 1, 'RA00017', NULL, 'SIKHA MAJI', NULL, 'SIKHA MAJI', NULL, 34, NULL, NULL, NULL, NULL, 0, NULL, 1, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-12 00:29:50', '2016-12-21 21:12:36', 19, 'SURJA SEKHAR MAJI', 'HUSBAND', '', NULL, NULL, 0, NULL, 10001, '', '2016-11-12', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10074, 10073, 'RA00018', NULL, 'DEBABRATA DAS', NULL, 'DEBABRATA DAS', NULL, 34, NULL, NULL, NULL, NULL, 0, NULL, 1, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-12 01:30:22', '2016-11-12 21:03:06', 20, '', 'FATHER', '', NULL, NULL, 0, NULL, 10001, '', '2016-11-12', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10075, 10073, 'RA00019', NULL, 'CHANDAN DAS', NULL, 'CHANDAN DAS', NULL, 34, NULL, NULL, NULL, NULL, 0, NULL, 1, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-12 21:08:34', '2016-11-12 21:08:34', 21, 'TUKSONA DAS', 'FATHER', '', NULL, NULL, 0, NULL, 10001, '', '2016-11-12', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10076, 10073, 'RA00020', NULL, 'ACHINTA KUMAR GHOSH', NULL, 'ACHINTA KUMAR GHOSH', NULL, 34, NULL, NULL, NULL, NULL, 0, NULL, 1, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-12 21:13:45', '2016-11-12 21:13:45', 22, 'RAKHI GHOSH', 'FATHER', '', NULL, NULL, 0, NULL, 10001, '', '2016-11-12', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10077, 10073, 'RA00021', NULL, 'TAPAN KUMAR GHOSH', NULL, 'TAPAN KUMAR GHOSH', NULL, 34, NULL, NULL, NULL, NULL, 0, NULL, 1, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-12 21:19:54', '2016-11-12 21:19:54', 23, 'SHEFALI GHOSH', 'FATHER', '', NULL, NULL, 0, NULL, 10001, '', '2016-11-12', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10078, 10073, 'RA00022', NULL, 'ATUL BHATTACHARYA', NULL, 'ATUL BHATTACHARYA', NULL, 34, NULL, NULL, NULL, NULL, 0, NULL, 1, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-12 21:24:58', '2016-11-12 21:24:58', 24, '', 'FATHER', '', NULL, NULL, 0, NULL, 10001, '', '2016-11-12', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10079, 10073, 'RA00023', NULL, 'SOMNATH DHAK', NULL, 'SOMNATH DHAK', NULL, 34, NULL, NULL, NULL, NULL, 0, NULL, 1, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-12 21:32:01', '2016-11-12 21:32:01', 25, 'SULATA DHAK', 'FATHER', '', NULL, NULL, 0, NULL, 10001, '', '2016-11-12', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10080, 10073, 'RA00024', NULL, 'PRODYUMNA KUMAR GHOSH', NULL, 'PRODYUMNA KUMAR GHOSH', NULL, 34, NULL, NULL, NULL, NULL, 0, NULL, 1, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-12 21:37:21', '2016-11-12 21:37:21', 26, 'UTTARA GHOSH', 'FATHER', '', NULL, NULL, 0, NULL, 10001, 'OF2016072900116', '2016-11-12', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10081, 10073, 'RA00025', NULL, 'TRIBHUVAN SINGH', NULL, 'TRIBHUVAN SINGH', NULL, 34, NULL, NULL, NULL, NULL, 0, NULL, 1, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-12 21:41:06', '2016-11-12 21:41:40', 27, 'ARCHANA SINGH', 'FATHER', '', NULL, NULL, 0, NULL, 10001, '', '2016-11-12', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10082, 1, 'RA00026', NULL, 'FREEDOM OF INDIA', NULL, 'FREEDOM OF INDIA', NULL, 34, NULL, NULL, NULL, NULL, 0, NULL, 1, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-12 21:43:47', '2016-11-12 21:43:47', 28, '', 'FATHER', '', NULL, NULL, 0, NULL, 10001, '', '2016-11-12', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10083, 10082, 'RA00027', NULL, 'MD NAZIR HUSSAIN', NULL, 'MD NAZIR HUSSAIN', NULL, 34, NULL, NULL, NULL, NULL, 0, NULL, 1, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-12 21:51:03', '2016-11-12 21:51:03', 29, 'S.HAQUE', 'FATHER', '', NULL, NULL, 0, NULL, 10001, '', '2016-11-12', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10084, 10082, 'RA00028', NULL, 'MD AKTARUL HOQUE', NULL, 'MD AKTARUL HOQUE', NULL, 34, NULL, NULL, NULL, NULL, 0, NULL, 1, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-12 21:56:58', '2016-11-12 21:56:58', 30, 'AKTARA BIBI', 'FATHER', '', NULL, NULL, 0, NULL, 10001, '', '2016-11-12', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10085, 10083, 'RA00029', NULL, 'BHIMA PAIK', NULL, 'BHIMA PAIK', NULL, 34, NULL, NULL, NULL, NULL, 0, NULL, 1, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-12 22:04:29', '2016-11-12 22:04:29', 31, 'NIRUPAMA PAIK', 'FATHER', '', NULL, NULL, 0, NULL, 10001, '', '2016-11-12', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10086, 10085, 'RA00030', NULL, 'SUDAMA SHAW', NULL, 'SUDAMA SHAW', NULL, 34, NULL, NULL, NULL, NULL, 0, NULL, 1, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-12 22:08:32', '2016-11-12 22:08:32', 32, 'PUNAM DEVI', 'FATHER', '', NULL, NULL, 0, NULL, 10001, '', '2016-11-12', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10087, 10086, 'RA00031', NULL, 'SANJIT KUMAR SHAW', NULL, 'SANJIT KUMAR SHAW', NULL, 34, NULL, NULL, NULL, NULL, 0, NULL, 1, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-12 22:13:52', '2016-11-12 22:13:52', 33, 'MINA DEBI SHAW', 'FATHER', '', NULL, NULL, 0, NULL, 10001, '', '2016-11-12', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10088, 10081, 'RA00032', NULL, 'PRAMOD KUMAR GUPTA', NULL, 'PRAMOD KUMAR GUPTA', NULL, 34, NULL, NULL, NULL, NULL, 0, NULL, 1, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-12 22:19:09', '2016-11-12 22:19:09', 34, 'ANANY BHARAT', 'FATHER', '', NULL, NULL, 0, NULL, 10001, '', '2016-11-12', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10089, 10080, 'RA00033', NULL, 'UTTARA GHOSH', NULL, 'UTTARA GHOSH', NULL, 34, NULL, NULL, NULL, NULL, 0, NULL, 1, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-12 22:24:37', '2016-11-12 22:24:37', 35, 'PRODYUMNA KUMAR GHOSH', 'FATHER', '', NULL, NULL, 0, NULL, 10001, '', '2016-11-12', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10090, 10089, 'RA00034', NULL, 'SUKHENDU KHANRAH', NULL, 'SUKHENDU KHANRAH', NULL, 34, NULL, NULL, NULL, NULL, 0, NULL, 1, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-12 22:28:57', '2016-11-12 22:28:57', 36, 'MADHABI KHANRAH', 'FATHER', '', NULL, NULL, 0, NULL, 10001, '', '2016-11-12', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10091, 10077, 'RA00035', NULL, 'SATYA NARAYAN GHOSH', NULL, 'SATYANARAYAN GHOSH', NULL, 34, NULL, NULL, NULL, NULL, 0, NULL, 1, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-12 22:33:42', '2016-11-12 22:33:42', 37, '', 'FATHER', '', NULL, NULL, 0, NULL, 10001, '', '2016-11-12', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10092, 10084, 'RA00036', NULL, 'HUSNARA BIBI', NULL, 'HUSNARA BIBI', NULL, 34, NULL, NULL, NULL, NULL, 0, NULL, 1, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-12 22:41:31', '2016-11-12 22:49:41', 38, 'MD SAFIUL ALAM', 'FATHER', '', NULL, NULL, 0, NULL, 10001, '', '2016-11-12', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10093, 10092, 'RA00037', NULL, 'OSMAN ABDUL GANI', NULL, 'OSMAN ABDUL GANI', NULL, 34, NULL, NULL, NULL, NULL, 0, NULL, 1, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-12 22:48:04', '2016-11-12 22:48:35', 39, 'RINA MANDAL', 'FATHER', '', NULL, NULL, 0, NULL, 10001, '', '2016-11-12', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10094, 10075, 'RA00038', NULL, 'RAJIB SANTRA', NULL, 'RAJIB SANTRA', NULL, 34, NULL, NULL, NULL, NULL, 0, NULL, 1, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-12 23:07:48', '2016-11-12 23:07:48', 40, 'PUJA SANTRA', 'FATHER', '', NULL, NULL, 0, NULL, 10001, '', '2016-11-12', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10095, 10078, 'RA00039', NULL, 'HAZRAT ALI ANSARI', NULL, 'HAZRAT ALI ANSARI', NULL, 34, NULL, NULL, NULL, NULL, 0, NULL, 1, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-12 23:11:43', '2016-11-12 23:11:43', 41, 'PARUL BIBI', 'FATHER', '', NULL, NULL, 0, NULL, 10001, '', '2016-11-12', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10096, 10089, 'RA00040', NULL, 'SWAPAN MONDAL', NULL, 'SWAPAN MONDAL', NULL, 34, NULL, NULL, NULL, NULL, 0, NULL, 1, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-12 23:21:04', '2016-11-12 23:21:04', 42, 'SULEKHA MONDAL', 'FATHER', '', NULL, NULL, 0, NULL, 10001, '', '2016-11-12', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10097, 10096, 'RA00041', NULL, 'SULEKHA MONDAL', NULL, 'SULEKHA MONDAL', NULL, 34, NULL, NULL, NULL, NULL, 0, NULL, 1, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-12 23:23:31', '2016-12-20 23:44:34', 43, 'SWAPAN MONDAL', 'FATHER', '', NULL, NULL, 0, NULL, 10001, '', '2016-11-12', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10098, 10078, 'RA00042', NULL, 'AFSAR ALI KHAN', NULL, 'AFSAR ALI KHAN', NULL, 34, NULL, NULL, NULL, NULL, 0, NULL, 1, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-12 23:28:06', '2016-11-12 23:28:06', 44, 'CHABI KHATUN', 'FATHER', '', NULL, NULL, 0, NULL, 10001, '', '2016-11-12', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10099, 10098, 'RA00043', NULL, 'AKLIMA KHATUN', NULL, 'AKLIMA KHATUN', NULL, 34, NULL, NULL, NULL, NULL, 0, NULL, 1, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-12 23:30:47', '2016-12-20 23:49:01', 45, 'AFSAR ALI KHAN', 'FATHER', '', NULL, NULL, 0, NULL, 10001, '', '2016-11-12', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10100, 10077, 'RA00044', NULL, 'NILAVA GHOSH', NULL, 'NILAVA GHOSH', NULL, 34, NULL, NULL, NULL, NULL, 0, NULL, 1, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-12 23:35:16', '2016-11-22 08:08:10', 46, 'SHEFALI GHOSH', 'FATHER', '', NULL, NULL, 0, NULL, 10001, '', '2016-11-12', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10101, 10072, 'RA00045', NULL, 'FULESWARI MUKHARJEE', NULL, 'FULESWARI MUKHARJEE', NULL, 34, NULL, NULL, NULL, NULL, 0, NULL, 1, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-12 23:42:43', '2016-11-16 20:05:49', 47, 'SACHIN MUKHARJEE', 'FATHER', '', NULL, NULL, 0, NULL, 10001, '', '2016-11-12', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10102, 10098, 'RA00046', NULL, 'CHHABI KHATUN', NULL, 'CHHABI KHATUN', NULL, 34, NULL, NULL, NULL, NULL, 0, NULL, 1, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-13 00:05:13', '2016-11-13 00:05:13', 48, 'AFSAR ALI KHATUN', 'FATHER', '', NULL, NULL, 0, NULL, 10001, '', '2016-11-13', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10103, 10082, 'RA00047', NULL, 'MD IMROZ', NULL, 'MD IMROZ', NULL, 40, NULL, NULL, NULL, NULL, 0, NULL, 1, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-15 21:20:52', '2016-11-15 21:20:52', 49, '', 'FATHER', '', NULL, NULL, 0, NULL, 10001, '', '2016-11-15', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10104, 10082, 'RA00048', NULL, 'DILIP KUMAR RAMANI', NULL, 'DILIP KUMAR RAMANI', NULL, 40, NULL, NULL, NULL, NULL, 0, NULL, 1, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-15 21:24:38', '2016-11-15 21:24:38', 50, 'MAYA DEVI', 'FATHER', '', NULL, NULL, 0, NULL, 10001, '', '2016-11-15', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10105, 10082, 'RA00049', NULL, 'SOMA ROY', NULL, 'SOMA ROY', NULL, 40, NULL, NULL, NULL, NULL, 0, NULL, 1, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-15 21:30:01', '2016-11-15 21:30:01', 51, 'AMITAVA ROY', 'FATHER', '', NULL, NULL, 0, NULL, 10001, '', '2016-11-15', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10106, 10105, 'RA00050', NULL, 'BHAJAN ROY', NULL, 'BHAJAN ROY', NULL, 40, NULL, NULL, NULL, NULL, 0, NULL, 1, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-15 21:33:48', '2016-11-15 21:33:48', 52, 'SOMA ROY', 'FATHER', '', NULL, NULL, 0, NULL, 10001, '', '2016-11-15', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10107, 10082, 'RA00051', NULL, 'ADMIN LOGIN', NULL, 'ADMIN LOGIN', NULL, 40, NULL, NULL, NULL, NULL, 0, NULL, 1, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-15 21:37:43', '2016-11-15 21:37:43', 53, 'SANDIP DUTTA', 'FATHER', '', NULL, NULL, 0, NULL, 10001, '', '2016-11-15', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10108, 10083, 'RC00100001', NULL, 'MD NAZIR HUSSAIN', NULL, 'MD NAZIR HUSSAAIN', NULL, 40, NULL, NULL, NULL, NULL, 0, NULL, 1, 7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-15 22:02:34', '2016-11-25 07:08:01', 29, 'TAJINA KHATUN', 'FATHER', NULL, '', NULL, 0, NULL, 10001, '', '2016-11-15', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10109, 10060, 'RA00052', NULL, 'SWAPNA BISWAS', NULL, 'SWAPNA BISWAS', NULL, 34, NULL, NULL, NULL, NULL, 0, NULL, 1, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-15 22:50:34', '2016-11-15 23:02:46', 55, 'SANDIP BISWAS', 'FATHER', '', NULL, NULL, 0, NULL, 10001, '', '2016-11-15', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10110, 10109, 'RA00053', NULL, 'PARTHA BHOWMICK', NULL, 'PARTHA BHOWMICK', NULL, 34, NULL, NULL, NULL, NULL, 0, NULL, 1, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-15 23:06:59', '2016-11-15 23:06:59', 56, '', 'FATHER', '', NULL, NULL, 0, NULL, 10001, '', '2016-11-15', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10111, 10110, 'RA00054', NULL, 'RAJU BAIRAGI', NULL, 'RAJU BAIRAGI', NULL, 34, NULL, NULL, NULL, NULL, 0, NULL, 1, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-15 23:11:57', '2016-11-15 23:11:57', 57, 'SANGITA BISWAS', 'FATHER', '', NULL, NULL, 0, NULL, 10001, '', '2016-11-15', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10112, 10111, 'RA00055', NULL, 'BISWA NATH BOSE', NULL, 'BISWA NATH BOSE', NULL, 34, NULL, NULL, NULL, NULL, 0, NULL, 1, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-15 23:16:30', '2016-11-15 23:16:30', 58, 'SWAPNA BOSE', 'FATHER', '', NULL, NULL, 0, NULL, 10001, '', '2016-11-15', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10113, 10112, 'RA00056', NULL, 'SWAPNA BOSE', NULL, 'SWAPNA BOSE', NULL, 34, NULL, NULL, NULL, NULL, 0, NULL, 1, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-15 23:19:25', '2016-11-15 23:20:00', 59, 'BISWANATH BOSE', 'FATHER', '', NULL, NULL, 0, NULL, 10001, '', '2016-11-15', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10114, 10113, 'RA00057', NULL, 'NANDITA BISWAS', NULL, 'NANDITA BISWAS', NULL, 34, NULL, NULL, NULL, NULL, 0, NULL, 1, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-15 23:23:40', '2016-11-15 23:23:40', 60, 'SANJAY BISWAS', 'FATHER', '', NULL, NULL, 0, NULL, 10001, '', '2016-11-15', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10115, 10114, 'RA00058', NULL, 'SANJAY BISWAS', NULL, 'SANJAY BISWAS', NULL, 34, NULL, NULL, NULL, NULL, 0, NULL, 1, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-15 23:27:32', '2016-11-15 23:27:32', 61, 'NANDITA BISWAS', 'FATHER', '', NULL, NULL, 0, NULL, 10001, '', '2016-11-15', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10116, 10115, 'RA00059', NULL, 'ATUL CHANDRA BISWAS', NULL, 'ATUL CHANDRA BISWAS', NULL, 34, NULL, NULL, NULL, NULL, 0, NULL, 1, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-15 23:31:17', '2016-12-20 23:54:15', 62, 'SHEELA BISWAS', 'FATHER', '', NULL, NULL, 0, NULL, 10001, '', '2016-11-15', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10117, 10116, 'RA00060', NULL, 'PARVINA KHATUN MONDAL', NULL, 'PARVINA KHATUN MONDAL', NULL, 34, NULL, NULL, NULL, NULL, 0, NULL, 1, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-15 23:37:41', '2016-11-15 23:37:41', 63, 'BAPI MONDAL', 'FATHER', '', NULL, NULL, 0, NULL, 10001, '', '2016-11-15', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10118, 10117, 'RA00061', NULL, 'MADHAB CHANDRA DAS', NULL, 'MADHAB CHANDRA DAS', NULL, 34, NULL, NULL, NULL, NULL, 0, NULL, 1, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-15 23:43:39', '2016-11-15 23:43:39', 64, 'DIPA DAS', 'FATHER', '', NULL, NULL, 0, NULL, 10001, '', '2016-11-15', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10119, 10118, 'RA00062', NULL, 'ASHISH KUMAR SARKAR', NULL, 'ASHISH KUMAR SARKAR', NULL, 34, NULL, NULL, NULL, NULL, 0, NULL, 1, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-15 23:47:09', '2016-11-15 23:47:37', 65, 'SWAPNA SARKAR', 'FATHER', '', NULL, NULL, 0, NULL, 10001, '', '2016-11-15', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10120, 10116, 'RA00063', NULL, 'SHEELA BISWAS', NULL, 'SHEELA BISWAS', NULL, 34, NULL, NULL, NULL, NULL, 0, NULL, 1, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-15 23:52:45', '2016-11-16 19:44:16', 66, 'ATUL CHANDRA BISWAS', 'FATHER', '', NULL, NULL, 0, NULL, 10001, '', '2016-11-15', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10121, 10110, 'RA00064', NULL, 'BAPI CHOWDHURY', NULL, 'BAPI CHOWDHURY', NULL, 34, NULL, NULL, NULL, NULL, 0, NULL, 1, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-15 23:58:21', '2016-11-15 23:58:21', 67, 'MITA CHOWDHURY', 'FATHER', '', NULL, NULL, 0, NULL, 10001, '', '2016-11-15', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10122, 10121, 'RA00065', NULL, 'JAKIR HOSSAIN MONDAL', NULL, 'JAKIR HOSSAIN MONDAL', NULL, 34, NULL, NULL, NULL, NULL, 0, NULL, 1, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-16 00:04:52', '2016-11-16 00:04:52', 68, '', 'FATHER', '', NULL, NULL, 0, NULL, 10001, '', '2016-11-15', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10123, 10122, 'RA00066', NULL, 'SAMIR KUMAR ROY', NULL, 'SAMIR KUMAR ROY', NULL, 34, NULL, NULL, NULL, NULL, 0, NULL, 1, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-16 00:10:19', '2016-11-16 00:10:19', 69, 'SAGAR ROY', 'FATHER', '', NULL, NULL, 0, NULL, 10001, '', '2016-11-16', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10124, 10123, 'RA00067', NULL, 'PRIYANKA DUTTA', NULL, 'PRIYANKA DUTTA', NULL, 34, NULL, NULL, NULL, NULL, 0, NULL, 1, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-16 00:15:24', '2016-12-20 23:33:40', 70, 'SWAPNA DUTTA', 'FATHER', '', NULL, NULL, 0, NULL, 10001, '', '2016-11-16', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10125, 10124, 'RA00068', NULL, 'ASHIT KUMAR BISWAS', NULL, 'ASHIT KUMAR BISWAS', NULL, 34, NULL, NULL, NULL, NULL, 0, NULL, 1, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-16 00:20:32', '2016-11-16 00:20:32', 71, 'MITHU BISWAS', 'FATHER', '', NULL, NULL, 0, NULL, 10001, '', '2016-11-16', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10126, 10121, 'RA00069', NULL, 'MANAS RANJAN DATTA', NULL, 'MANAS RANJAN DATTA', NULL, 34, NULL, NULL, NULL, NULL, 0, NULL, 1, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-16 00:26:14', '2016-11-16 00:26:14', 72, 'PRANATI DATTA', 'FATHER', '', NULL, NULL, 0, NULL, 10001, '', '2016-11-16', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10127, 10126, 'RA00070', NULL, 'KRISHNA BISWAS', NULL, 'KRISHNA BISWAS', NULL, 34, NULL, NULL, NULL, NULL, 0, NULL, 1, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-16 00:29:57', '2016-11-16 00:29:57', 73, 'ALOKA BISWAS', 'FATHER', '', NULL, NULL, 0, NULL, 10001, '', '2016-11-16', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10128, 10122, 'RA00071', NULL, 'ASHOK KUMAR SARKAR', NULL, 'ASHOK KUMAR SARKAR', NULL, 34, NULL, NULL, NULL, NULL, 0, NULL, 1, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-16 00:37:02', '2016-11-16 00:37:02', 74, 'KALYANI BISWAS SARKAR', 'FATHER', '', NULL, NULL, 0, NULL, 10001, '', '2016-11-16', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10129, 10128, 'RA00072', NULL, 'BAPPADITYA ROY', NULL, 'BAPPADITYA ROY', NULL, 34, NULL, NULL, NULL, NULL, 0, NULL, 1, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-16 00:42:37', '2016-11-16 00:42:37', 75, 'SANGITA SAHA', 'FATHER', '', NULL, NULL, 0, NULL, 10001, '', '2016-11-16', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10130, 10123, 'RA00073', NULL, 'SAGAR ROY', NULL, 'SAGAR ROY', NULL, 34, NULL, NULL, NULL, NULL, 0, NULL, 1, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-16 00:46:21', '2016-11-16 00:46:21', 76, 'SAMIR KUMAR ROY', 'FATHER', '', NULL, NULL, 0, NULL, 10001, '', '2016-11-16', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10131, 10130, 'RA00074', NULL, 'DOLON KANTI TIKADAR', NULL, 'DOLON KANTI TIKADAR', NULL, 34, NULL, NULL, NULL, NULL, 0, NULL, 1, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-16 00:51:20', '2016-11-16 00:51:20', 77, 'SASWATI TIKADAR', 'FATHER', '', NULL, NULL, 0, NULL, 10001, '', '2016-11-16', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10132, 10131, 'RA00075', NULL, 'PRAVASH  CHAKRABORTY', NULL, 'PRAVASH  CHAKRABORTY', NULL, 34, NULL, NULL, NULL, NULL, 0, NULL, 1, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-16 00:56:08', '2016-11-16 00:56:08', 78, 'PIYALI CHAKRABORTY', 'FATHER', '', NULL, NULL, 0, NULL, 10001, '', '2016-11-16', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10133, 10124, 'RA00076', NULL, 'NITA SAHA', NULL, 'NITA SAHA', NULL, 34, NULL, NULL, NULL, NULL, 0, NULL, 1, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-16 01:07:29', '2016-11-16 01:08:31', 79, 'NIRMOLA RANI SAHA', 'FATHER', '', NULL, NULL, 0, NULL, 10001, '', '2016-11-16', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10134, 10133, 'RA00077', NULL, 'ASHIS HOWLADER', NULL, 'ASHIS HOWLADER', NULL, 34, NULL, NULL, NULL, NULL, 0, NULL, 1, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-16 01:15:04', '2016-11-16 01:15:04', 80, 'TAMALI HOWLADER MONDAL', 'FATHER', '', NULL, NULL, 0, NULL, 10001, '', '2016-11-16', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10135, 10134, 'RA00078', NULL, 'DEBASISH DAS', NULL, 'DEBASISH DAS', NULL, 34, NULL, NULL, NULL, NULL, 0, NULL, 1, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-16 01:18:53', '2016-11-16 01:18:53', 81, 'SNIGDHA DAS', 'FATHER', '', NULL, NULL, 0, NULL, 10001, '', '2016-11-16', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10136, 10112, 'RA00079', NULL, 'PAYEL DEY', NULL, 'PAYEL DEY', NULL, 34, NULL, NULL, NULL, NULL, 0, NULL, 1, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-16 01:21:55', '2016-11-16 01:21:55', 82, 'TAPASHI DEY', 'FATHER', '', NULL, NULL, 0, NULL, 10001, '', '2016-11-16', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10137, 10136, 'RA00080', NULL, 'DULAL ROY', NULL, 'DULAL ROY', NULL, 34, NULL, NULL, NULL, NULL, 0, NULL, 1, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-16 01:36:41', '2016-11-16 01:36:41', 83, 'SANTANA ROY', 'FATHER', '', NULL, NULL, 0, NULL, 10001, '', '2016-11-16', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10138, 10137, 'RA00081', NULL, 'AJIT  KUMAR SARKAR', NULL, 'AJIT  KUMAR SARKAR', NULL, 34, NULL, NULL, NULL, NULL, 0, NULL, 1, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-16 01:38:32', '2016-11-16 01:38:32', 84, 'BASANTI SARKAR', 'FATHER', '', NULL, NULL, 0, NULL, 10001, '', '2016-11-16', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10139, 10138, 'RA00082', NULL, 'BIMAL SARKAR', NULL, 'BIMAL SARKAR', NULL, 34, NULL, NULL, NULL, NULL, 0, NULL, 1, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-16 01:43:09', '2016-11-16 01:43:09', 85, 'SUMITRA SARKAR', 'FATHER', '', NULL, NULL, 0, NULL, 10001, '', '2016-11-16', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10140, 10139, 'RA00083', NULL, 'GOBINDA MONDAL', NULL, 'GOBINDA MONDAL', NULL, 34, NULL, NULL, NULL, NULL, 0, NULL, 1, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-16 01:49:43', '2016-11-16 01:49:43', 86, 'PIU MONDAL', 'FATHER', '', NULL, NULL, 0, NULL, 10001, '', '2016-11-16', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10141, 10140, 'RA00084', NULL, 'RABI BAIDYA', NULL, 'RABI BAIDYA', NULL, 34, NULL, NULL, NULL, NULL, 0, NULL, 1, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-16 01:53:08', '2016-11-16 01:53:08', 87, 'KALI DAS BAIDYA', 'FATHER', '', NULL, NULL, 0, NULL, 10001, '', '2016-11-16', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10142, 10136, 'RA00085', NULL, 'BIBEKANANDA BISWAS', NULL, 'BIBEKANANDA BISWAS', NULL, 34, NULL, NULL, NULL, NULL, 0, NULL, 1, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-16 01:56:53', '2016-11-16 01:56:53', 88, 'CHAMPA BISWAS', 'FATHER', '', NULL, NULL, 0, NULL, 10001, '', '2016-11-16', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10143, 10142, 'RA00086', NULL, 'SAJAL ROY', NULL, 'SAJAL ROY', NULL, 34, NULL, NULL, NULL, NULL, 0, NULL, 1, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-16 02:01:20', '2016-11-16 02:01:20', 89, 'SMT TANU ROY', 'FATHER', '', NULL, NULL, 0, NULL, 10001, '', '2016-11-16', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10144, 10140, 'RA00087', NULL, 'BIDHU BHUSAN MANDAL', NULL, 'BIDHU BHUSAN MANDAL', NULL, 34, NULL, NULL, NULL, NULL, 0, NULL, 1, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-16 02:06:58', '2016-11-16 02:06:58', 90, 'SHAMPA MONDAL', 'FATHER', '', NULL, NULL, 0, NULL, 10001, '', '2016-11-16', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10145, 10119, 'RA00088', NULL, 'SHASHANKA SARKAR', NULL, 'SHASHANKA SARKAR', NULL, 34, NULL, NULL, NULL, NULL, 0, NULL, 1, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-16 02:17:28', '2016-11-16 02:20:28', 91, 'MAYA SARKAR', 'FATHER', '', NULL, NULL, 0, NULL, 10001, '', '2016-11-16', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10146, 10058, 'RA00089', NULL, 'TAPAN KUMAR DUTTA', NULL, 'TAPAN KUMAR DUTTA', NULL, 34, NULL, NULL, NULL, NULL, 0, NULL, 1, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-16 19:50:13', '2016-11-30 06:38:43', 92, '', 'FATHER', '', NULL, NULL, 0, NULL, 10001, '', '2016-11-16', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10147, 10061, 'RA00090', NULL, 'ATANU LAHA', NULL, 'ATANU LAHA', NULL, 34, NULL, NULL, NULL, NULL, 0, NULL, 1, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-16 20:14:03', '2016-11-16 20:14:03', 93, '', 'FATHER', '', NULL, NULL, 0, NULL, 10001, '', '2016-11-16', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10148, 10147, 'RA00091', NULL, 'REBA LAHA (SUR)', NULL, 'REBA LAHA (SUR)', NULL, 34, NULL, NULL, NULL, NULL, 0, NULL, 1, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-16 20:17:01', '2016-11-22 07:50:48', 94, 'ATANU LAHA', 'FATHER', '', NULL, NULL, 0, NULL, 10001, '', '2016-11-16', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10149, 10147, 'RA00092', NULL, 'AMIT ADHIKARI', NULL, 'AMIT ADHIKARI', NULL, 34, NULL, NULL, NULL, NULL, 0, NULL, 1, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-16 20:21:03', '2016-11-16 20:21:03', 95, 'SRABANTI ADHIKARI', 'FATHER', '', NULL, NULL, 0, NULL, 10001, '', '2016-11-16', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10150, 10146, 'RA00093', NULL, 'POLLY GHOSH', NULL, 'POLLY GHOSH', NULL, 34, NULL, NULL, NULL, NULL, 0, NULL, 1, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-16 20:29:00', '2016-11-16 20:29:00', 96, '', 'FATHER', '', NULL, NULL, 0, NULL, 10001, '', '2016-11-16', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10151, 10146, 'RA00094', NULL, 'RINA DUTTA', NULL, 'RINA DUTTA', NULL, 34, NULL, NULL, NULL, NULL, 0, NULL, 1, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-16 07:14:45', '2016-11-16 07:14:45', 97, 'TAPAN KUMAR DUTTA', 'FATHER', '', NULL, NULL, 0, NULL, 10001, '', '2016-11-16', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10152, 10151, 'RA00095', NULL, 'SATISH CHANDRA MAHATO', NULL, 'SATISH CHANDRA MAHATO', NULL, 34, NULL, NULL, NULL, NULL, 0, NULL, 1, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-16 07:21:28', '2016-11-16 07:21:28', 98, 'ANURUPA MAHATO', 'FATHER', '', NULL, NULL, 0, NULL, 10001, '', '2016-11-16', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10153, 10151, 'RA00096', NULL, 'PRAKASH BANERJEE', NULL, 'PRAKASH BANERJEE', NULL, 34, NULL, NULL, NULL, NULL, 0, NULL, 1, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-16 07:25:17', '2016-11-16 07:25:17', 99, 'PRIYANKA BANERJEE', 'FATHER', '', NULL, NULL, 0, NULL, 10001, '', '2016-11-16', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10154, 10153, 'RA00097', NULL, 'SUNIL KUMAR PRAMANIK', NULL, 'SUNIL KUMAR PRAMANIK', NULL, 34, NULL, NULL, NULL, NULL, 0, NULL, 1, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-16 07:29:00', '2016-11-16 07:29:00', 100, 'KABITA KUMARI', 'FATHER', '', NULL, NULL, 0, NULL, 10001, '', '2016-11-16', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10155, 10154, 'RA00098', NULL, 'HIRATAN KUMBHAKAR', NULL, 'HIRATAN KUMBHAKAR', NULL, 34, NULL, NULL, NULL, NULL, 0, NULL, 1, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-16 07:35:37', '2016-11-16 07:35:37', 101, 'SHIVANI DEVI', 'FATHER', '', NULL, NULL, 0, NULL, 10001, '', '2016-11-16', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10156, 10155, 'RA00099', NULL, 'NARESH PRASAD SAHU', NULL, 'NARESH PRASAD SAHU', NULL, 34, NULL, NULL, NULL, NULL, 0, NULL, 1, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-16 07:49:08', '2016-11-16 07:49:08', 102, 'RENUKA SAHA', 'FATHER', '', NULL, NULL, 0, NULL, 10001, '', '2016-11-16', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10157, 10153, 'RA00100', NULL, 'PRIYANKA ROY (BANERJEE)', NULL, 'PRIYANKA ROY (BANERJEE)', NULL, 34, NULL, NULL, NULL, NULL, 0, NULL, 1, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-16 07:52:48', '2016-11-16 07:52:48', 103, 'PRAKASH BANERJEE', 'FATHER', '', NULL, NULL, 0, NULL, 10001, '', '2016-11-16', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10158, 10154, 'RA00101', NULL, 'KABITA KUMARI', NULL, 'KABITA KUMARI', NULL, 34, NULL, NULL, NULL, NULL, 0, NULL, 1, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-16 07:57:16', '2016-11-16 07:57:16', 104, 'SUNIL KUMAR PRAMANIK', 'FATHER', '', NULL, NULL, 0, NULL, 10001, '', '2016-11-16', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10159, 10152, 'RA00102', NULL, 'DIPANKAR MONDAL', NULL, 'DIPANKAR MONDAL', NULL, 34, NULL, NULL, NULL, NULL, 0, NULL, 1, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-16 08:02:25', '2016-11-16 08:02:25', 105, 'TUMPA MONDAL', 'FATHER', '', NULL, NULL, 0, NULL, 10001, '', '2016-11-16', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10160, 10159, 'RA00103', NULL, 'SUBRATA NARAYAN SEAL', NULL, 'SUBRATA NARAYAN SEAL', NULL, 34, NULL, NULL, NULL, NULL, 0, NULL, 1, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-16 08:08:33', '2016-11-16 08:08:33', 106, 'LAKSHMIMANI SEAL', 'FATHER', '', NULL, NULL, 0, NULL, 10001, '', '2016-11-16', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10161, 10150, 'RA00104', NULL, 'RENUKA GHOSH', NULL, 'RENUKA GHOSH', NULL, 34, NULL, NULL, NULL, NULL, 0, NULL, 1, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-16 08:14:01', '2016-11-23 06:58:55', 107, 'AJIT GHOSH', 'FATHER', '', NULL, NULL, 0, NULL, 10001, '', '2016-11-16', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10162, 10150, 'RA00105', NULL, 'SANKAR KUMAR GHOSH', NULL, 'SANKAR KUMAR GHOSH', NULL, 34, NULL, NULL, NULL, NULL, 0, NULL, 1, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-16 08:18:03', '2016-11-23 06:59:32', 108, 'POLLY GHOSH', 'FATHER', '', NULL, NULL, 0, NULL, 10001, '', '2016-11-16', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10163, 10161, 'RA00106', NULL, 'BIPAD TARAN PAL', NULL, 'BIPAD TARAN PAL', NULL, 34, NULL, NULL, NULL, NULL, 0, NULL, 1, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-16 08:25:10', '2016-11-16 08:25:50', 109, 'PRATIMA PAL', 'FATHER', '', NULL, NULL, 0, NULL, 10001, '', '2016-11-16', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10164, 10163, 'RA00107', NULL, 'PRATYUSH KUMAR PAL', NULL, 'PRATYUSH KUMAR PAL', NULL, 34, NULL, NULL, NULL, NULL, 0, NULL, 1, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-16 08:30:02', '2016-11-16 08:30:02', 110, 'PRATIMA PAL', 'FATHER', '', NULL, NULL, 0, NULL, 10001, '', '2016-11-16', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10165, 10164, 'RA00108', NULL, 'KAKOLEE MONDAL', NULL, 'KAKOLEE MONDAL', NULL, 34, NULL, NULL, NULL, NULL, 0, NULL, 1, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-16 08:37:44', '2016-11-16 08:37:44', 111, 'BHOLA NATH MONDAL', 'FATHER', '', NULL, NULL, 0, NULL, 10001, '', '2016-11-16', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10166, 10164, 'RA00109', NULL, 'BHOLA NATH MONDAL', NULL, 'BHOLA NATH MONDAL', NULL, 34, NULL, NULL, NULL, NULL, 0, NULL, 1, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-16 08:42:09', '2016-11-16 08:42:09', 112, 'KAKOLEE MONDAL', 'FATHER', '', NULL, NULL, 0, NULL, 10001, '', '2016-11-16', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10167, 10165, 'RA00110', NULL, 'TAPAN KUMAR DALAL', NULL, 'TAPAN KUMAR DALAL', NULL, 34, NULL, NULL, NULL, NULL, 0, NULL, 1, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-16 08:47:57', '2016-11-16 08:47:57', 113, 'SMT MALATI DALAL', 'FATHER', '', NULL, NULL, 0, NULL, 10001, '', '2016-11-16', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10168, 10167, 'RA00111', NULL, 'MADHURI DALAL', NULL, 'MADHURI DALAL', NULL, 34, NULL, NULL, NULL, NULL, 0, NULL, 1, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-16 08:52:04', '2016-11-16 08:52:04', 114, 'SWAPAN KUMAR DALAL', 'FATHER', '', NULL, NULL, 0, NULL, 10001, '', '2016-11-16', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10169, 10167, 'RA00112', NULL, 'MALATI DALAL', NULL, 'MALATI DALAL', NULL, 34, NULL, NULL, NULL, NULL, 0, NULL, 1, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-16 08:56:32', '2016-11-16 08:56:32', 115, 'TAPAN KUMAR DALAL', 'FATHER', '', NULL, NULL, 0, NULL, 10001, '', '2016-11-16', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10170, 10168, 'RA00113', NULL, 'DEBDAS BANERJEE', NULL, 'DEBDAS BANERJEE', NULL, 34, NULL, NULL, NULL, NULL, 0, NULL, 1, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-16 09:02:32', '2016-11-16 09:04:30', 117, 'BANANI BANERJEE', 'FATHER', '', NULL, NULL, 0, NULL, 10001, '', '2016-11-16', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10171, 10170, 'RA00114', NULL, 'SOVAN PAUL', NULL, 'SOVAN PAUL', NULL, 34, NULL, NULL, NULL, NULL, 0, NULL, 1, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-16 09:12:07', '2016-11-16 09:12:07', 118, 'SMT MITA PAUL', 'FATHER', '', NULL, NULL, 0, NULL, 10001, '', '2016-11-16', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10172, 10171, 'RA00115', NULL, 'MITA PAUL', NULL, 'MITA PAUL', NULL, 34, NULL, NULL, NULL, NULL, 0, NULL, 1, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-16 09:14:14', '2016-11-16 09:14:14', 119, 'SOVAN PAUL', 'FATHER', '', NULL, NULL, 0, NULL, 10001, '', '2016-11-16', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10173, 10171, 'RA00116', NULL, 'SUSMITA MONDAL', NULL, 'SUSMITA MONDAL', NULL, 34, NULL, NULL, NULL, NULL, 0, NULL, 1, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-16 09:18:10', '2016-11-16 09:18:10', 120, 'DHARANI DHAR MONDAL', 'FATHER', '', NULL, NULL, 0, NULL, 10001, '', '2016-11-16', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10174, 10173, 'RA00117', NULL, 'KRISHNA DAS PARAMANIK', NULL, 'KRISHNA DAS PARAMANIK', NULL, 34, NULL, NULL, NULL, NULL, 0, NULL, 1, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-16 09:26:06', '2016-11-16 09:26:06', 121, 'MITHU PARAMANIK', 'FATHER', '', NULL, NULL, 0, NULL, 10001, '', '2016-11-16', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10175, 10174, 'RA00118', NULL, 'MRITUNJOY BANERJEE', NULL, 'MRITUNJOY BANERJEE', NULL, 34, NULL, NULL, NULL, NULL, 0, NULL, 1, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-16 09:30:26', '2016-11-22 08:59:44', 122, 'MAMATA BANERJEE', 'FATHER', '', NULL, NULL, 0, NULL, 10001, '', '2016-11-16', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10176, 10163, 'RA00119', NULL, 'PRATIMA PAL', NULL, 'PRATIMA PAL', NULL, 34, NULL, NULL, NULL, NULL, 0, NULL, 1, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-16 09:35:53', '2016-11-16 09:35:53', 123, 'PRATYUSH KUMAR PAL', 'FATHER', '', NULL, NULL, 0, NULL, 10001, '', '2016-11-16', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10177, 10176, 'RA00120', NULL, 'PARTHA SARATHI MANDAL', NULL, 'PARTHA SARATHI MANDAL', NULL, 34, NULL, NULL, NULL, NULL, 0, NULL, 1, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-16 09:39:22', '2016-12-23 23:03:01', 124, 'MANASHI MANDAL', 'FATHER', '', NULL, NULL, 0, NULL, 10001, '', '2016-11-16', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10178, 10176, 'RA00121', NULL, 'SAMARESH MONDAL', NULL, 'SAMARESH MONDAL', NULL, 34, NULL, NULL, NULL, NULL, 0, NULL, 1, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-16 09:45:51', '2016-12-09 10:08:34', 125, 'GITA MONDAL', 'FATHER', '', NULL, NULL, 0, NULL, 10001, '', '2016-11-16', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10179, 10177, 'RA00122', NULL, 'NIRMAL MAN', NULL, 'NIRMAL MAN', NULL, 34, NULL, NULL, NULL, NULL, 0, NULL, 1, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-16 10:01:04', '2016-11-16 10:01:04', 126, '', 'FATHER', '', NULL, NULL, 0, NULL, 10001, '', '2016-11-16', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10180, 10179, 'RA00123', NULL, 'PRAVAT DAS', NULL, 'PRAVAT DAS', NULL, 34, NULL, NULL, NULL, NULL, 0, NULL, 1, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-16 10:05:29', '2016-11-16 10:05:29', 127, 'SUCHIMITA DAS', 'FATHER', '', NULL, NULL, 0, NULL, 10001, '', '2016-11-16', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10181, 10180, 'RA00124', NULL, 'SUCHIMITA DAS', NULL, 'SUCHIMITA DAS', NULL, 34, NULL, NULL, NULL, NULL, 0, NULL, 1, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-16 10:09:00', '2016-11-16 10:09:00', 128, 'PRAVAT DAS', 'FATHER', '', NULL, NULL, 0, NULL, 10001, '', '2016-11-16', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10182, 10180, 'RA00125', NULL, 'SOUGATIK DAS', NULL, 'SOUGATIK DAS', NULL, 34, NULL, NULL, NULL, NULL, 0, NULL, 1, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-16 10:12:06', '2016-11-16 10:12:06', 129, 'PRAVAT DAS', 'FATHER', '', NULL, NULL, 0, NULL, 10001, '', '2016-11-16', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10183, 10181, 'RA00126', NULL, 'ASIT KUMAR CHAKRABORTY', NULL, 'ASIT KUMAR CHAKRABORTY', NULL, 34, NULL, NULL, NULL, NULL, 0, NULL, 1, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-16 10:19:58', '2016-12-21 00:00:41', 130, 'MITA CHAKRABORTY', 'FATHER', '', NULL, NULL, 0, NULL, 10001, '', '2016-11-16', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10184, 10183, 'RA00127', NULL, 'TARAK NATH DAS', NULL, 'TARAK NATH DAS', NULL, 34, NULL, NULL, NULL, NULL, 0, NULL, 1, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-16 10:27:05', '2016-11-16 10:27:05', 131, 'DIPTI DAS', 'FATHER', '', NULL, NULL, 0, NULL, 10001, '', '2016-11-16', NULL, 0, 0, 0, 0, 0, 0, 0, 0);
INSERT INTO `tbl_master` (`ID`, `MID`, `CODE`, `MembershipID`, `Name`, `Alias`, `PrintName`, `Description`, `MasterTypeID`, `DrCr`, `Debit`, `Credit`, `IsMaster`, `IsMasterGroup`, `CostCategoryID`, `MasterGroupID`, `DesignationID`, `PersonOrganisationID`, `AllocateRevenueItems`, `AllocateNonRevenueItems`, `AccountID`, `IsActive`, `IsBehaveAsSubLedger`, `IsAffectGrossProfit`, `SORT`, `CreditPeriod`, `CreditLimit`, `MaintainBillByBill`, `TaxClassID`, `TaxTypeID`, `Percentage`, `IsCalculative`, `OpeningBalance`, `ClosingBalance`, `Asset`, `Liabilities`, `Expense`, `Income`, `NetDebitCreditBalanceForReporting`, `UseForCalculation`, `AllocationMethodID`, `CreatedBy`, `ModifiedBy`, `CreateTime`, `ModifyTime`, `PDID`, `Nominee`, `Relation`, `NomineeAge`, `NomineeDOB`, `NomineeContact`, `NomineeAddressID`, `OperationArea`, `OfficeID`, `DocumentNo`, `RegisterDate`, `ImageID`, `IsSystemConfigured`, `IsHidden`, `PriceLevelID`, `AttendanceTypeID`, `DepartmentID`, `DoctorID`, `Capacity`, `ClassTeacherID`) VALUES
(10185, 10178, 'RA00128', NULL, 'GITA MONDAL', NULL, 'GITA MONDAL', NULL, 34, NULL, NULL, NULL, NULL, 0, NULL, 1, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-16 10:31:37', '2016-11-16 10:31:37', 132, 'SAMARESH MONDAL', 'FATHER', '', NULL, NULL, 0, NULL, 10001, '', '2016-11-16', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10186, 10177, 'RA00129', NULL, 'MANASHI MANDAL', NULL, 'MANASHI MANDAL', NULL, 34, NULL, NULL, NULL, NULL, 0, NULL, 1, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-16 10:35:34', '2016-11-16 10:35:34', 133, 'PARTHA SARATHI MANDAL', 'FATHER', '', NULL, NULL, 0, NULL, 10001, '', '2016-11-16', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10187, 10185, 'RA00130', NULL, 'BIPLAB SANYAL', NULL, 'BIPLAB SANYAL', NULL, 34, NULL, NULL, NULL, NULL, 0, NULL, 1, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-16 10:41:28', '2016-11-16 10:41:28', 134, 'TANUSREE SANYAL', 'FATHER', '', NULL, NULL, 0, NULL, 10001, '', '2016-11-16', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10188, 10186, 'RA00131', NULL, 'ANUPAM GOSWAMI', NULL, 'ANUPAM GOSWAMI', NULL, 34, NULL, NULL, NULL, NULL, 0, NULL, 1, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-16 10:44:33', '2016-11-16 10:44:33', 135, 'SWAPAN GOSWAMI', 'FATHER', '', NULL, NULL, 0, NULL, 10001, '', '2016-11-16', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10189, 10188, 'RA00132', NULL, 'NAREN SARKAR', NULL, 'NAREN SARKAR', NULL, 34, NULL, NULL, NULL, NULL, 0, NULL, 1, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-16 10:47:49', '2016-11-16 10:47:49', 136, 'SOMA SARKAR', 'FATHER', '', NULL, NULL, 0, NULL, 10001, '', '2016-11-16', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10190, 10189, 'RA00133', NULL, 'SUSMITA SHIT', NULL, 'SUSMITA SHIT', NULL, 34, NULL, NULL, NULL, NULL, 0, NULL, 1, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-16 10:49:09', '2016-11-16 10:49:09', 137, '', 'FATHER', '', NULL, NULL, 0, NULL, 10001, '', '2016-11-16', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10191, 10162, 'RA00134', NULL, 'REBA PATRA', NULL, 'REBA PATRA', NULL, 34, NULL, NULL, NULL, NULL, 0, NULL, 1, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-16 10:59:46', '2016-11-23 06:57:39', 138, 'SHYAMAL PATRA', 'FATHER', '', NULL, NULL, 0, NULL, 10001, '', '2016-11-16', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10192, 10191, 'RA00135', NULL, 'SHYAMAL PATRA', NULL, 'SHYAMAL PATRA', NULL, 34, NULL, NULL, NULL, NULL, 0, NULL, 1, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-16 11:02:49', '2016-11-16 11:02:49', 139, 'REBA PATRA', 'FATHER', '', NULL, NULL, 0, NULL, 10001, '', '2016-11-16', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10193, 10192, 'RA00136', NULL, 'RAJU MANDAL', NULL, 'RAJU MANDAL', NULL, 34, NULL, NULL, NULL, NULL, 0, NULL, 1, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-16 11:05:56', '2016-11-16 11:05:56', 140, 'RESHMA MANDAL', 'FATHER', '', NULL, NULL, 0, NULL, 10001, '', '2016-11-16', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10194, 10193, 'RA00137', NULL, 'DEEPAK KUMAR SAW', NULL, 'DEEPAK KUMAR SAW', NULL, 34, NULL, NULL, NULL, NULL, 0, NULL, 1, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-16 11:09:09', '2016-11-16 11:09:09', 141, 'SIMA KUMARI', 'FATHER', '', NULL, NULL, 0, NULL, 10001, '', '2016-11-16', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10195, 10194, 'RA00138', NULL, 'SANDIP KUMAR SAW', NULL, 'SANDIP KUMAR SAW', NULL, 34, NULL, NULL, NULL, NULL, 0, NULL, 1, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-16 11:12:17', '2016-11-16 11:12:17', 142, 'CHHAYA DEVI', 'FATHER', '', NULL, NULL, 0, NULL, 10001, '', '2016-11-16', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10196, 10195, 'RA00139', NULL, 'SHAMBHU KUMAR SAW', NULL, 'SHAMBHU KUMAR SAW', NULL, 34, NULL, NULL, NULL, NULL, 0, NULL, 1, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-16 11:15:27', '2016-11-16 11:15:27', 143, 'DIPU KUMAR SAW', 'FATHER', '', NULL, NULL, 0, NULL, 10001, '', '2016-11-16', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10197, 10145, 'RA00140', NULL, 'KRISHNA DAS GOLDAR', NULL, 'KRISHNA DAS GOLDAR', NULL, 34, NULL, NULL, NULL, NULL, 0, NULL, 1, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-17 06:35:22', '2016-11-17 06:35:22', 144, 'RIYA GOLDAR', 'FATHER', '', NULL, NULL, 0, NULL, 10001, '', '2016-11-17', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10198, 10197, 'RA00141', NULL, 'RIYA GOLDAR', NULL, 'RIYA GOLDAR', NULL, 34, NULL, NULL, NULL, NULL, 0, NULL, 1, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-17 06:39:02', '2016-11-17 06:39:02', 145, 'KRISHNA DAS GOLDAR', 'FATHER', '', NULL, NULL, 0, NULL, 10001, '', '2016-11-17', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10199, 10107, 'RA00142', NULL, 'SANDIP DUTTA', NULL, 'SANDIP DUTTA', NULL, 34, NULL, NULL, NULL, NULL, 0, NULL, 1, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-17 08:17:25', '2016-11-17 08:17:25', 146, 'DILIP KUMAR DUTTA', 'FATHER', '', NULL, NULL, 0, NULL, 10001, '', '2016-11-17', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10200, 10145, 'RA00143', NULL, 'MAYA SARKAR', NULL, 'MAYA SARKAR', NULL, 34, NULL, NULL, NULL, NULL, 0, NULL, 1, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-17 08:26:02', '2016-11-17 08:26:02', 147, 'SHASHANKA SARKAR', 'FATHER', '', NULL, NULL, 0, NULL, 10001, '', '2016-11-17', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10201, 10114, 'RA00144', NULL, 'PROTIMA SARKAR', NULL, 'PROTIMA SARKAR', NULL, 34, NULL, NULL, NULL, NULL, 0, NULL, 1, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-17 08:30:57', '2016-11-17 08:30:57', 148, 'RABINDRANATH SARKAR', 'FATHER', '', NULL, NULL, 0, NULL, 10001, '', '2016-11-17', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10202, 10201, 'RA00145', NULL, 'SAMENDU GHATAK', NULL, 'SAMENDU GHATAK', NULL, 34, NULL, NULL, NULL, NULL, 0, NULL, 1, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-17 08:38:37', '2016-11-17 08:38:37', 149, 'MADHUSUDAN GHATAK', 'FATHER', '', NULL, NULL, 0, NULL, 10001, '', '2016-11-17', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10203, 10140, 'RA00146', NULL, 'SANTANA ROY', NULL, 'SANTANA ROY', NULL, 34, NULL, NULL, NULL, NULL, 0, NULL, 1, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-17 09:06:46', '2016-11-17 09:06:46', 150, 'DULAL ROY', 'FATHER', '', NULL, NULL, 0, NULL, 10001, '', '2016-11-17', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10204, 10144, 'RA00147', NULL, 'SHAMPA MONDAL', NULL, 'SHAMPA MONDAL', NULL, 34, NULL, NULL, NULL, NULL, 0, NULL, 1, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-17 09:10:10', '2016-11-17 09:10:10', 151, 'BIDHU BHUSAN MONDAL', 'FATHER', '', NULL, NULL, 0, NULL, 10001, '', '2016-11-17', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10205, 10143, 'RA00148', NULL, 'ASHIS KUMAR ROY', NULL, 'ASHIS KUMAR ROY', NULL, 34, NULL, NULL, NULL, NULL, 0, NULL, 1, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-17 09:15:23', '2016-11-17 09:15:23', 152, 'KANIKA ROY', 'FATHER', '', NULL, NULL, 0, NULL, 10001, '', '2016-11-17', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10206, 10082, 'RA00149', NULL, 'PRADIP MANDAL', NULL, 'PRADIP MANDAL', NULL, 34, NULL, NULL, NULL, NULL, 0, NULL, 1, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-17 09:25:44', '2016-11-17 09:25:44', 153, 'SANGITA MANDAL', 'FATHER', '', NULL, NULL, 0, NULL, 10001, '', '2016-11-17', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10207, 10206, 'RA00150', NULL, 'KANGKAN SARKAR', NULL, 'KANGKAN SARKAR', NULL, 34, NULL, NULL, NULL, NULL, 0, NULL, 1, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-17 09:31:13', '2016-11-17 09:31:13', 154, 'SUCHITRA SARKAR', 'FATHER', '', NULL, NULL, 0, NULL, 10001, '', '2016-11-17', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10208, 10206, 'RA00151', NULL, 'DEBOBRATA SINHA', NULL, 'DEBOBRATA SINHA', NULL, 34, NULL, NULL, NULL, NULL, 0, NULL, 1, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-17 09:35:12', '2016-11-17 09:35:12', 155, 'SUBIR SINHA', 'FATHER', '', NULL, NULL, 0, NULL, 10001, '', '2016-11-17', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10209, 10206, 'RA00152', NULL, 'SOMA DEV', NULL, 'SOMA DEV', NULL, 34, NULL, NULL, NULL, NULL, 0, NULL, 1, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-17 09:38:35', '2016-11-17 09:38:35', 156, 'SISIR KUMAR DEV', 'FATHER', '', NULL, NULL, 0, NULL, 10001, '', '2016-11-17', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10210, 10206, 'RA00153', NULL, 'SIBU DAS', NULL, 'SIBU DAS', NULL, 34, NULL, NULL, NULL, NULL, 0, NULL, 1, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-17 09:42:40', '2016-11-17 09:42:40', 157, 'BANDANA CHOUDHURY', 'FATHER', '', NULL, NULL, 0, NULL, 10001, '', '2016-11-17', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10211, 10210, 'RA00154', NULL, 'DILIP CHOUDHURY', NULL, 'DILIP CHOUDHURY', NULL, 34, NULL, NULL, NULL, NULL, 0, NULL, 1, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-17 09:45:30', '2016-11-17 09:45:30', 158, 'RINA DEVI', 'FATHER', '', NULL, NULL, 0, NULL, 10001, '', '2016-11-17', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10212, 10206, 'RA00155', NULL, 'MADHUMITA MISHRA', NULL, 'MADHUMITA MISHRA', NULL, 34, NULL, NULL, NULL, NULL, 0, NULL, 1, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-17 09:50:16', '2016-11-17 09:50:16', 159, 'UJJWAL MUKHARJEE', 'FATHER', '', NULL, NULL, 0, NULL, 10001, '', '2016-11-17', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10213, 10206, 'RA00156', NULL, 'BILTU CHOWDHURY', NULL, 'BILTU CHOWDHURY', NULL, 34, NULL, NULL, NULL, NULL, 0, NULL, 1, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-17 09:54:27', '2016-11-25 08:36:20', 160, 'TANUSHREE CHOUDHURY', 'FATHER', '', NULL, NULL, 0, NULL, 10001, '', '2016-11-17', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10214, 10082, 'RA00157', NULL, 'SIPRA CHAKRABORTY', NULL, 'SIPRA CHAKRABORTY', NULL, 34, NULL, NULL, NULL, NULL, 0, NULL, 1, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-18 11:19:40', '2016-11-21 08:26:44', 161, 'AKASH CHAKRABORTY', 'FATHER', '14', NULL, NULL, 0, NULL, 10001, '', '2016-11-18', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10215, 10084, 'RC00100002', NULL, 'BABLU PRAMANIK', NULL, 'BABLU PRAMANIK', NULL, 32, NULL, NULL, NULL, NULL, 0, NULL, 1, 7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-21 09:33:05', '2016-11-21 09:33:05', 162, 'MUNMUN PRAMANIK', 'FATHER', NULL, NULL, NULL, 0, NULL, 10001, '', '2016-11-21', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10216, 10084, 'RC00100003', NULL, 'HUSNARA BIBI', NULL, 'HUSNARA BIBI', NULL, 32, NULL, NULL, NULL, NULL, 0, NULL, 1, 7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-21 09:38:09', '2016-11-21 09:38:09', 163, 'SAFIUL ALAM', 'FATHER', NULL, NULL, NULL, 0, NULL, 10001, '', '2016-11-21', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10217, 10073, 'RC00100004', NULL, 'ACHINTA KUMAR GHOSH', NULL, 'ACHINTA KUMAR GHOSH', NULL, 32, NULL, NULL, NULL, NULL, 0, NULL, 1, 7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-21 10:48:12', '2016-11-25 06:27:15', 22, 'RAKHI GHOSH', 'FATHER', NULL, '', NULL, 0, NULL, 10001, '', '2016-11-21', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10218, 10085, 'RC00100005', NULL, 'SUDAMA SHAW', NULL, 'SUDAMA SHAW', NULL, 32, NULL, NULL, NULL, NULL, 0, NULL, 1, 7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-21 10:53:13', '2016-11-21 11:10:54', 32, 'PUNAM DEVI', 'FATHER', NULL, NULL, NULL, 0, NULL, 10001, '', '2016-11-21', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10219, 10086, 'RC00100006', NULL, 'SANJIT KUMAR SHAW', NULL, 'SANJIT KUMAR SHAW', NULL, 32, NULL, NULL, NULL, NULL, 0, NULL, 1, 7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-21 10:57:21', '2016-11-21 11:09:50', 33, 'MINA DEBI SHAW', 'FATHER', NULL, NULL, NULL, 0, NULL, 10001, '', '2016-11-21', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10220, 10093, 'RC00100007', NULL, 'NAREN MANDAL', NULL, 'NAREN MANDAL', NULL, 32, NULL, NULL, NULL, NULL, 0, NULL, 1, 7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-21 11:02:56', '2016-11-21 11:13:26', 167, '', 'FATHER', NULL, NULL, NULL, 0, NULL, 10001, '', '2016-11-21', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10221, 10092, 'RC00100008', NULL, 'SABRINA BIBI', NULL, 'SABRINA BIBI', NULL, 32, NULL, NULL, NULL, NULL, 0, NULL, 1, 7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-21 11:06:59', '2016-11-21 11:08:34', 168, 'MD. BADARUA JAMAN', 'FATHER', NULL, NULL, NULL, 0, NULL, 10001, '', '2016-11-21', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10222, 10092, 'RC00100009', NULL, 'KRISHNA KUNDU', NULL, 'KRISHNA KUNDU', NULL, 32, NULL, NULL, NULL, NULL, 0, NULL, 1, 7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-21 11:17:24', '2016-11-21 11:17:24', 169, 'ANIMA KUNDU', 'FATHER', NULL, NULL, NULL, 0, NULL, 10001, '', '2016-11-21', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10223, 10073, 'RC00100010', NULL, 'DEBABRATA DAS', NULL, 'DEBABRATA DAS', NULL, 32, NULL, NULL, NULL, NULL, 0, NULL, 1, 7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-21 11:22:39', '2016-11-21 11:22:39', 20, '', 'FATHER', NULL, NULL, NULL, 0, NULL, 10001, '', '2016-11-21', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10224, 10073, 'RC00100011', NULL, 'SIKHA MAJI', NULL, 'SIKHA MAJI', NULL, 32, NULL, NULL, NULL, NULL, 0, NULL, 1, 7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-21 11:26:32', '2016-12-20 23:37:24', 19, 'SURJA SEKHAR MAJI', 'HUSBAND', NULL, '', NULL, 0, NULL, 10001, '', '2016-11-21', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10225, 10105, 'RC00100012', NULL, 'BHAJAN ROY', NULL, 'BHAJAN ROY', NULL, 32, NULL, NULL, NULL, NULL, 0, NULL, 1, 7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-21 11:31:34', '2016-11-25 06:30:18', 52, 'SOMA ROY', 'FATHER', NULL, '', NULL, 0, NULL, 10001, '', '2016-11-21', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10226, 10077, 'RC00100013', NULL, 'SATYA NARAYAN GHOSH', NULL, 'SATYA NARAYAN GHOSH', NULL, 32, NULL, NULL, NULL, NULL, 0, NULL, 1, 7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-21 11:35:49', '2016-11-21 11:37:46', 37, '', 'FATHER', NULL, NULL, NULL, 0, NULL, 10001, '', '2016-11-21', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10227, 10089, 'RC00100014', NULL, 'SWAPAN MONDAL', NULL, 'SWAPAN MONDAL', NULL, 32, NULL, NULL, NULL, NULL, 0, NULL, 1, 7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-21 11:44:58', '2016-12-20 21:56:50', 174, 'SULEKHA MONDAL', 'FATHER', NULL, '', NULL, 0, NULL, 10001, '', '2016-11-21', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10228, 10070, 'RC00100015', NULL, 'BIMAL KANTI DEY', NULL, 'BIMAL KANTI DEY', NULL, 32, NULL, NULL, NULL, NULL, 0, NULL, 1, 7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-21 11:48:11', '2016-12-05 11:16:59', 16, 'SWAPNA DEY', 'FATHER', NULL, '', NULL, 0, NULL, 10001, '', '2016-11-21', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10229, 10092, 'RC00100016', NULL, 'OSMAN ABDUL GANI', NULL, 'OSMAN ABDUL GANI', NULL, 32, NULL, NULL, NULL, NULL, 0, NULL, 1, 7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-22 06:12:33', '2016-11-23 07:47:29', 39, '', 'FATHER', NULL, NULL, NULL, 0, NULL, 10001, '', '2016-11-22', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10230, 10110, 'RC00100017', NULL, 'JAKIR  HOSSAIN MONDAL', NULL, 'JAKIR  HOSSAIN MONDAL', NULL, 32, NULL, NULL, NULL, NULL, 0, NULL, 1, 7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-22 06:17:18', '2016-11-22 06:17:18', 68, 'SABITA MONDAL', 'FATHER', NULL, NULL, NULL, 0, NULL, 10001, '', '2016-11-22', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10231, 10122, 'RC00100018', NULL, 'BAPPADITYA ROY', NULL, 'BAPPADITYA ROY', NULL, 32, NULL, NULL, NULL, NULL, 0, NULL, 1, 7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-22 06:21:44', '2016-11-22 06:21:44', 75, 'SANGITA SAHA', 'FATHER', NULL, NULL, NULL, 0, NULL, 10001, '', '2016-11-22', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10232, 10110, 'RC00100019', NULL, 'SUBRATA BHATTACHARJEE', NULL, 'SUBRATA BHATTACHARJEE', NULL, 32, NULL, NULL, NULL, NULL, 0, NULL, 1, 7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-22 06:25:33', '2016-11-22 06:25:33', 179, 'UMA BHATTACHARJEE', 'FATHER', NULL, NULL, NULL, 0, NULL, 10001, '', '2016-11-22', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10233, 10110, 'RC00100020', NULL, 'PARTHA BHOWMICK', NULL, 'PARTHA BHOWMICK', NULL, 32, NULL, NULL, NULL, NULL, 0, NULL, 1, 7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-22 06:31:02', '2016-12-05 09:03:14', 56, 'AAYUSHI BHOWMICK', 'FATHER', NULL, '', NULL, 0, NULL, 10001, '', '2016-11-22', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10234, 10094, 'RC00100021', NULL, 'RAJIB SANTRA ', NULL, 'RAJIB SANTRA ', NULL, 32, NULL, NULL, NULL, NULL, 0, NULL, 1, 7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-22 06:34:38', '2016-11-22 06:34:38', 40, 'PUJA SANTRA', 'FATHER', NULL, NULL, NULL, 0, NULL, 10001, '', '2016-11-22', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10235, 10078, 'RC00100022', NULL, 'ATUL BHATTACHARYA', NULL, 'ATUL BHATTACHARYA', NULL, 32, NULL, NULL, NULL, NULL, 0, NULL, 1, 7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-22 06:38:19', '2016-12-20 21:53:37', 24, 'APARNA BHATTACHARYA', 'FATHER', NULL, '', NULL, 0, NULL, 10001, '', '2016-11-22', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10236, 10191, 'RC00100023', NULL, 'SANKAR KUMAR GHOSH ', NULL, 'SANKAR KUMAR GHOSH ', NULL, 32, NULL, NULL, NULL, NULL, 0, NULL, 1, 7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-22 06:45:56', '2016-11-22 06:46:33', 108, 'POLLY GHOSH', 'FATHER', NULL, NULL, NULL, 0, NULL, 10001, '', '2016-11-22', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10237, 10165, 'RC00100024', NULL, 'BIPAD TARAN PAL ', NULL, 'BIPAD TARAN PAL ', NULL, 32, NULL, NULL, NULL, NULL, 0, NULL, 1, 7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-22 06:52:56', '2016-11-22 06:53:43', 184, 'PRATIMA PAL', 'FATHER', NULL, NULL, NULL, 0, NULL, 10001, '', '2016-11-22', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10238, 10176, 'RC00100025', NULL, 'BIPAD TARAN PAL ', NULL, 'BIPAD TARAN PAL ', NULL, 32, NULL, NULL, NULL, NULL, 0, NULL, 1, 7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-22 06:56:18', '2016-11-22 07:34:41', 185, 'PRATIMA PAL', 'FATHER', NULL, NULL, NULL, 0, NULL, 10001, '', '2016-11-22', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10239, 10164, 'RC00100026', NULL, 'PRATYUSH KUMAR PAL ', NULL, 'PRATYUSH KUMAR PAL ', NULL, 32, NULL, NULL, NULL, NULL, 0, NULL, 1, 7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-22 07:00:15', '2016-11-22 07:34:18', 110, 'PRATIMA PAL', 'FATHER', NULL, NULL, NULL, 0, NULL, 10001, '', '2016-11-22', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10240, 10167, 'RC00100027', NULL, 'TAPAN KUMAR DALAL', NULL, 'TAPAN KUMAR DALAL', NULL, 32, NULL, NULL, NULL, NULL, 0, NULL, 1, 7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-22 07:13:36', '2016-11-22 07:34:07', 113, 'MALATI DALAL', 'FATHER', NULL, NULL, NULL, 0, NULL, 10001, '', '2016-11-22', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10241, 10169, 'RC00100028', NULL, 'MALATI DALAL', NULL, 'MALATI DALAL', NULL, 32, NULL, NULL, NULL, NULL, 0, NULL, 1, 7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-22 07:16:57', '2016-11-22 07:33:53', 188, 'TAPAN KUMAR DALAL', 'FATHER', NULL, NULL, NULL, 0, NULL, 10001, '', '2016-11-22', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10242, 10179, 'RC00100029', NULL, 'NIRMAL MAN ', NULL, 'NIRMAL MAN ', NULL, 32, NULL, NULL, NULL, NULL, 0, NULL, 1, 7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-22 07:23:55', '2016-11-22 07:33:37', 126, 'JHARNA MAN', 'FATHER', NULL, NULL, NULL, 0, NULL, 10001, '', '2016-11-22', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10243, 10168, 'RC00100030', NULL, 'MADHURI DALAL ', NULL, 'MADHURI DALAL ', NULL, 32, NULL, NULL, NULL, NULL, 0, NULL, 1, 7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-22 07:28:03', '2016-11-22 07:33:24', 114, 'SWAPAN KR. DALAL', 'FATHER', NULL, NULL, NULL, 0, NULL, 10001, '', '2016-11-22', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10244, 10184, 'RC00100031', NULL, 'TARAK NATH DAS ', NULL, 'TARAK NATH DAS ', NULL, 32, NULL, NULL, NULL, NULL, 0, NULL, 1, 7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-22 07:32:50', '2016-11-22 07:32:50', 131, 'DIPTI DAS', 'FATHER', NULL, NULL, NULL, 0, NULL, 10001, '', '2016-11-22', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10245, 10166, 'RC00100032', NULL, 'PARTHA SARATHI MANDAL', NULL, 'PARTHA SARATHI MANDAL', NULL, 32, NULL, NULL, NULL, NULL, 0, NULL, 1, 7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-22 07:37:50', '2016-12-23 21:35:54', 124, 'MANASHI MANDAL', 'FATHER', NULL, '', NULL, 0, NULL, 10001, '', '2016-11-22', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10246, 10181, 'RC00100033', NULL, 'SUCHIMITA DAS', NULL, 'SUCHIMITA DAS', NULL, 32, NULL, NULL, NULL, NULL, 0, NULL, 1, 7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-22 07:40:31', '2016-11-23 08:46:17', 128, '', 'FATHER', NULL, NULL, NULL, 0, NULL, 10001, '', '2016-11-22', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10247, 10182, 'RC00100034', NULL, 'PRAVAT DAS ', NULL, 'PRAVAT DAS ', NULL, 32, NULL, NULL, NULL, NULL, 0, NULL, 1, 7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-22 07:45:05', '2016-11-23 08:49:16', 127, '', 'FATHER', NULL, NULL, NULL, 0, NULL, 10001, '', '2016-11-22', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10248, 1, 'RC00100035', NULL, 'PRATIMA BISWAS', NULL, 'PRATIMA BISWAS', NULL, 32, NULL, NULL, NULL, NULL, 0, NULL, 1, 7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-22 07:47:41', '2016-11-22 07:47:41', 195, '', 'FATHER', NULL, NULL, NULL, 0, NULL, 10001, '', '2016-11-22', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10249, 10306, '', NULL, 'REBA LAHA', 'REBA LAHA', 'REBA LAHA', '', 36, 0, 1, 1, 0, 1, 0, 1, 0, 94, 1, 1, 10105, 1, 1, 1, 1, 100000, 0, '1', 0, 0, 100, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 1, '2016-11-22 07:50:13', '2018-12-10 10:26:57', 94, 'ATANU LAHA', 'FATHER', NULL, NULL, NULL, 0, NULL, 10001, '', '2016-11-22', NULL, 0, 0, 0, 0, 0, 10306, 0, 0),
(10250, 10304, '', NULL, 'POP', 'POP', 'POP', '', 36, 0, 1, 1, 0, 1, 0, 1, 0, 123, 1, 1, 10108, 1, 1, 1, 1, 100000, 0, '1', 0, 0, 100, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 1, '2016-11-22 07:55:04', '2018-12-10 10:04:20', 123, 'PRATYUSH KUMAR PAL', 'FATHER', NULL, NULL, NULL, 0, NULL, 10001, '', '2016-11-22', NULL, 0, 0, 0, 0, 0, 10304, 0, 0),
(10251, 10325, '', NULL, 'SUBIR MOLLA', 'SUBIR MOLLA', 'SUBIR MOLLA', '', 36, 0, 1, 1, 0, 1, 0, 1, 0, 198, 1, 1, 10332, 1, 1, 1, 1, 100000, 0, '1', 0, 0, 100, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 1, '2016-11-22 08:16:38', '2018-12-10 10:28:27', 198, '', 'FATHER', NULL, NULL, NULL, 0, NULL, 10001, '', '2016-11-22', NULL, 0, 0, 0, 0, 0, 10325, 0, 0),
(10252, 0, '', NULL, '', '', '', '', 36, 0, 1, 1, 0, 1, 0, 1, 0, 62, 1, 1, 0, 1, 1, 1, 1, 100000, 0, '1', 0, 0, 100, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 1, '2016-11-22 08:29:17', '2018-12-10 09:04:04', 62, 'SHEELA BISWAS', 'FATHER', NULL, NULL, NULL, 0, NULL, 10001, '', '2016-11-22', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10253, 10304, '', NULL, 'SADHANA BISWAS ', 'SADHANA BISWAS ', 'SADHANA BISWAS ', '', 36, 0, 1, 1, 0, 1, 0, 1, 0, 200, 1, 1, 10331, 1, 1, 1, 1, 100000, 0, '1', 0, 0, 100, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 1, '2016-11-22 08:38:41', '2018-12-10 09:58:57', 200, 'GOPAL BISWAS', 'HUSBAND', NULL, '', NULL, 0, NULL, 10001, '', '2016-11-22', NULL, 0, 0, 0, 0, 0, 10304, 0, 0),
(10254, 10305, '', NULL, '', '', '', '', 36, 0, 1, 1, 0, 1, 0, 1, 0, 21, 1, 1, 10108, 1, 1, 1, 1, 100000, 0, '1', 0, 0, 100, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 1, '2016-11-22 08:46:52', '2018-12-10 09:09:08', 21, 'TUKSONA DAS', 'WIFE', NULL, '', NULL, 0, NULL, 10001, '', '2016-11-22', NULL, 0, 0, 0, 0, 0, 10305, 0, 0),
(10255, 10174, 'RC00100042', NULL, 'KRISHNA DAS  PARAMANIK ', NULL, 'KRISHNA DAS  PARAMANIK ', NULL, 32, NULL, NULL, NULL, NULL, 0, NULL, 1, 7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-22 08:49:56', '2016-12-23 21:14:14', 202, 'MITHU PARAMANIK', 'WIFE', NULL, '', NULL, 0, NULL, 10001, '', '2016-11-22', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10256, 10100, 'RC00100043', NULL, 'NILAVA GHOSH', NULL, 'NILAVA GHOSH', NULL, 32, NULL, NULL, NULL, NULL, 0, NULL, 1, 7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-22 08:56:06', '2016-12-23 21:13:52', 46, 'SHEFALI GHOSH', 'MOTHER', NULL, '', NULL, 0, NULL, 10001, '', '2016-11-22', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10257, 10175, 'RC00100044', NULL, 'MRITUNJOY BANERJEE', NULL, 'MRITUNJOY BANERJEE', NULL, 32, NULL, NULL, NULL, NULL, 0, NULL, 1, 7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-22 08:59:14', '2016-12-23 21:13:38', 122, 'MAMATA  BANERJEE', 'WIFE', NULL, '', NULL, 0, NULL, 10001, '', '2016-11-22', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10258, 10144, 'RC00100045', NULL, 'SHAMPA MONDAL ', NULL, 'SHAMPA MONDAL ', NULL, 32, NULL, NULL, NULL, NULL, 0, NULL, 1, 7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-22 09:07:42', '2016-12-23 21:13:24', 205, '', 'OTHER', NULL, '', NULL, 0, NULL, 10001, '', '2016-11-22', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10259, 10166, 'RC00100046', NULL, 'SAMARESH MONDAL', NULL, 'SAMARESH MONDAL', NULL, 32, NULL, NULL, NULL, NULL, 0, NULL, 1, 7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-22 09:14:14', '2016-12-23 21:12:52', 125, 'GITA MONDAL', 'WIFE', NULL, '', NULL, 0, NULL, 10001, '', '2016-11-22', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10260, 10166, 'RC00100047', NULL, 'PRATYUSH KUMAR PAL', NULL, 'PRATYUSH KUMAR PAL', NULL, 32, NULL, NULL, NULL, NULL, 0, NULL, 1, 7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-22 09:22:37', '2016-12-23 21:12:36', 207, 'PRATIMA PAL', 'MOTHER', NULL, '', NULL, 0, NULL, 10001, '', '2016-11-22', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10261, 10185, 'RC00100048', NULL, 'BIPAD TARAN PAL', NULL, 'BIPAD TARAN PAL', NULL, 32, NULL, NULL, NULL, NULL, 0, NULL, 1, 7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-22 09:25:52', '2016-12-23 21:12:19', 208, 'PRATIMA PAL', 'WIFE', NULL, '', NULL, 0, NULL, 10001, '', '2016-11-22', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10262, 10099, 'RC00100049', NULL, 'AFSAR ALI KHAN', NULL, 'AFSAR ALI KHAN', NULL, 32, NULL, NULL, NULL, NULL, 0, NULL, 1, 7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-22 09:38:29', '2016-12-23 21:12:04', 44, 'ARMAN KHAN', 'OTHER', NULL, '', NULL, 0, NULL, 10001, '', '2016-11-22', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10263, 10097, 'RC00100050', NULL, 'SULEKHA MONDAL', NULL, 'SULEKHA MONDAL', NULL, 32, NULL, NULL, NULL, NULL, 0, NULL, 1, 7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-22 09:41:26', '2016-12-23 21:11:47', 43, 'SWAPAN MONDAL', 'HUSBAND', NULL, '', NULL, 0, NULL, 10001, '', '2016-11-22', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10264, 10096, 'RC00100051', NULL, 'SWAPAN MONDAL', NULL, 'SWAPAN MONDAL', NULL, 32, NULL, NULL, NULL, NULL, 0, NULL, 1, 7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-22 09:45:29', '2016-12-23 21:11:21', 42, 'SULEKHA MONDAL', 'WIFE', NULL, '', NULL, 0, NULL, 10001, '', '2016-11-22', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10265, 10120, 'RC00100052', NULL, 'SUNDARI BANIK (SARDAR)', NULL, 'SUNDARI BANIK (SARDAR)', NULL, 32, NULL, NULL, NULL, NULL, 0, NULL, 1, 7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-22 09:48:21', '2016-12-23 21:11:06', 212, 'ANUP SARDAR', 'OTHER', NULL, '', NULL, 0, NULL, 10001, '', '2016-11-22', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10266, 10121, 'RC00100053', NULL, 'KRISHNA BISWAS', NULL, 'KRISHNA BISWAS', NULL, 32, NULL, NULL, NULL, NULL, 0, NULL, 1, 7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-22 09:54:56', '2016-12-23 21:10:40', 73, 'ALOKA BISWAS', 'WIFE', NULL, '', NULL, 0, NULL, 10001, '', '2016-11-22', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10267, 10114, 'RC00100054', NULL, 'NANDITA BISWAS', NULL, 'NANDITA BISWAS', NULL, 32, NULL, NULL, NULL, NULL, 0, NULL, 1, 7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-22 10:16:21', '2016-12-23 21:10:25', 60, 'SANJAY BISWAS', 'HUSBAND', NULL, '', NULL, 0, NULL, 10001, '', '2016-11-22', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10268, 10115, 'RC00100055', NULL, 'SANJAY BISWAS', NULL, 'SANJAY BISWAS', NULL, 32, NULL, NULL, NULL, NULL, 0, NULL, 1, 7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-22 10:20:26', '2016-12-23 21:10:11', 61, 'NANDITA BISWAS', 'WIFE', NULL, '', NULL, 0, NULL, 10001, '', '2016-11-22', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10269, 10201, 'RC00100056', NULL, 'PROTIMA SARKAR', NULL, 'PROTIMA SARKAR', NULL, 32, NULL, NULL, NULL, NULL, 0, NULL, 1, 7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-22 10:25:25', '2016-12-23 21:09:56', 148, 'RABINDRANATH SARKAR', 'HUSBAND', NULL, '', NULL, 0, NULL, 10001, '', '2016-11-22', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10270, 10202, 'RC00100057', NULL, 'SAMENDU GHATAK', NULL, 'SAMENDU GHATAK', NULL, 32, NULL, NULL, NULL, NULL, 0, NULL, 1, 7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-22 10:31:35', '2016-12-23 21:09:43', 149, 'MADHUSUDAN GHATAK', 'FATHER', NULL, '', NULL, 0, NULL, 10001, '', '2016-11-22', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10271, 10145, 'RC00100058', NULL, 'SHASHANKA SARKAR', NULL, 'SHASHANKA SARKAR', NULL, 32, NULL, NULL, NULL, NULL, 0, NULL, 1, 7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-22 10:36:04', '2016-12-23 21:09:21', 91, 'MAYA SARKAR', 'WIFE', NULL, '', NULL, 0, NULL, 10001, '', '2016-11-22', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10272, 10200, 'RC00100059', NULL, 'MAYA SARKAR', NULL, 'MAYA SARKAR', NULL, 32, NULL, NULL, NULL, NULL, 0, NULL, 1, 7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-22 10:40:34', '2016-12-23 21:09:09', 147, 'SHASHANKA SARKAR', 'HUSBAND', NULL, '', NULL, 0, NULL, 10001, '', '2016-11-22', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10273, 10120, 'RC00100060', NULL, 'SHEELA BISWAS', NULL, 'SHEELA BISWAS', NULL, 32, NULL, NULL, NULL, NULL, 0, NULL, 1, 7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-22 10:44:06', '2016-12-23 21:08:51', 66, 'ATUL CHANDRA BISWAS', 'HUSBAND', NULL, '', NULL, 0, NULL, 10001, '', '2016-11-22', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10274, 10177, 'RC00100061', NULL, 'KAKOLEE MONDAL', NULL, 'KAKOLEE MONDAL', NULL, 32, NULL, NULL, NULL, NULL, 0, NULL, 1, 7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-22 10:51:56', '2016-12-23 21:08:35', 111, 'BHOLANATH MONDAL', 'WIFE', NULL, '', NULL, 0, NULL, 10001, '', '2016-11-22', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10275, 10196, 'RA00158', NULL, 'DEBABRATA SEN', NULL, 'DEBABRATA SEN', NULL, 34, NULL, NULL, NULL, NULL, 0, NULL, 1, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-23 09:02:51', '2016-11-23 09:02:51', 222, 'MRS. MADHUMITA SEN', 'FATHER', '42', NULL, NULL, 0, NULL, 10001, '', '2016-11-23', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10276, 10275, 'RC00100062', NULL, 'DEBABRATA SEN', NULL, 'DEBABRATA SEN', NULL, 32, NULL, NULL, NULL, NULL, 0, NULL, 1, 7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-23 09:42:20', '2016-12-23 21:08:25', 222, 'MRS MADHUMITA SEN', 'WIFE', NULL, '', NULL, 0, NULL, 10001, '', '2016-11-23', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10277, 10102, 'RC00100063', NULL, 'AFSAR ALI KHAN', NULL, 'AFSAR ALI KHAN', NULL, 32, NULL, NULL, NULL, NULL, 0, NULL, 1, 7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-23 11:08:03', '2016-11-23 11:08:03', 224, 'ANSURA BIBI', 'FATHER', NULL, NULL, NULL, 0, NULL, 10001, '', '2016-11-23', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10278, 10214, 'RC00100064', NULL, 'DEBASIS DAS', NULL, 'DEBASIS DAS', NULL, 32, NULL, NULL, NULL, NULL, 0, NULL, 1, 7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-23 11:15:32', '2016-12-23 21:07:44', 225, 'MANGALA DAS', 'SISTER', NULL, '', NULL, 0, NULL, 10001, '', '2016-11-23', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10279, 10198, 'RC00100065', NULL, 'RIYA GOLDAR', NULL, 'RIYA GOLDAR', NULL, 32, NULL, NULL, NULL, NULL, 0, NULL, 1, 7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-29 23:24:13', '2016-12-23 21:05:11', 145, 'KRISHNA DAS GOLDER', 'HUSBAND', NULL, '', NULL, 0, NULL, 10001, '', '2016-11-29', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10280, 10197, 'RC00100066', NULL, 'KRISHNA DAS GOLDAR', NULL, 'KRISHNA DAS GOLDAR', NULL, 32, NULL, NULL, NULL, NULL, 0, NULL, 1, 7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-29 23:29:36', '2016-12-23 21:04:58', 144, 'RIYA GOLDER', 'WIFE', NULL, '', NULL, 0, NULL, 10001, '', '2016-11-29', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10281, 10061, 'RC00100067', NULL, 'TANUSRI MONDAL', NULL, 'TANUSRI MONDAL', NULL, 32, NULL, NULL, NULL, NULL, 0, NULL, 1, 7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-11-30 06:43:51', '2016-12-23 21:08:11', 7, 'NRIPENDU MONDAL', 'HUSBAND', NULL, '', NULL, 0, NULL, 10001, '', '2016-11-30', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10282, 10124, 'RC00100068', NULL, 'PRIYANKA DUTTA', NULL, 'PRIYANKA DUTTA', NULL, 32, NULL, NULL, NULL, NULL, 0, NULL, 1, 7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-12-05 10:45:18', '2016-12-23 21:01:36', 70, 'SWAPNA DUTTA', 'MOTHER', NULL, '', NULL, 0, NULL, 10001, '', '2016-12-05', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10283, 10057, 'RC00100069', NULL, 'WINS INDIA', NULL, 'WINS INDIA', NULL, 32, NULL, NULL, NULL, NULL, 0, NULL, 1, 7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-12-13 11:17:56', '2016-12-13 11:17:56', 3, '', 'FATHER', NULL, '', NULL, 0, NULL, 10001, 'RA00001', '2016-12-13', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10284, 10060, 'RC00100070', NULL, 'SANDIP BISWAS', NULL, 'SANDIP BISWAS', NULL, 32, NULL, NULL, NULL, NULL, 0, NULL, 1, 7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-12-15 08:37:59', '2016-12-23 21:03:35', 6, 'SWAPNA BISWAS', 'WIFE', NULL, '', NULL, 0, NULL, 10001, 'RA00004', '2016-12-15', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10285, 10291, 'RC00100071', NULL, 'PRATIMA PAL', NULL, 'PRATIMA PAL', NULL, 32, NULL, NULL, NULL, NULL, 0, NULL, 1, 7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-12-20 20:17:24', '2016-12-23 21:03:24', 123, 'PRATYUSH KUMAR PAL', 'SON', NULL, '', NULL, 0, NULL, 10001, 'RA00119', '2016-12-20', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10286, 10156, 'RA00159', NULL, 'AJIT MANJHI', NULL, 'AJIT MANJHI', NULL, 34, NULL, NULL, NULL, NULL, 0, NULL, 1, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-12-20 20:52:00', '2016-12-20 20:53:04', 230, 'SIMA MANJHI', 'FATHER', '36', NULL, NULL, 0, NULL, 10001, '', '2016-12-19', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10287, 10286, 'RA00160', NULL, 'MD IQBAL', NULL, 'MD IQBAL', NULL, 34, NULL, NULL, NULL, NULL, 0, NULL, 1, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-12-20 20:56:19', '2016-12-20 20:56:19', 231, 'ISHRAT JAHAN', 'FATHER', '57', NULL, NULL, 0, NULL, 10001, '', '2016-12-20', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10288, 10287, 'RA00161', NULL, 'SUNIL DAS', NULL, 'SUNIL DAS', NULL, 34, NULL, NULL, NULL, NULL, 0, NULL, 1, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-12-20 20:59:08', '2016-12-20 20:59:08', 232, 'SUMITA DAS', 'FATHER', '', NULL, NULL, 0, NULL, 10001, '', '2016-12-20', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10289, 10288, 'RA00162', NULL, 'MIHIR CHANDRA MAHATO', NULL, 'MIHIR CHANDRA MAHATO', NULL, 34, NULL, NULL, NULL, NULL, 0, NULL, 1, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-12-20 21:05:22', '2016-12-20 21:05:22', 233, 'BHARATI MAHATO', 'FATHER', '37', NULL, NULL, 0, NULL, 10001, '', '2016-12-20', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10290, 10289, 'RA00163', NULL, 'PRABODH KUMAR MANDAL', NULL, 'PRABODH KUMAR MANDAL', NULL, 34, NULL, NULL, NULL, NULL, 0, NULL, 1, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-12-20 21:07:49', '2016-12-20 21:07:49', 234, 'ARCHANA MANDAL', 'FATHER', '38', NULL, NULL, 0, NULL, 10001, '', '2016-12-20', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10291, 10166, 'RA00164', NULL, 'NISHIT KARMAKAR', NULL, 'NISHIT KARMAKAR', NULL, 34, NULL, NULL, NULL, NULL, 0, NULL, 1, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-12-20 21:11:03', '2016-12-20 21:11:03', 235, 'KEYA KARMAKAR', 'FATHER', '22', NULL, NULL, 0, NULL, 10001, '', '2016-12-20', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10292, 10291, 'RA00165', NULL, 'SOMNATH MAHANTA', NULL, 'SOMNATH MAHANTA', NULL, 34, NULL, NULL, NULL, NULL, 0, NULL, 1, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-12-20 21:13:36', '2016-12-20 21:13:36', 236, 'TANUSRI MAHANTA', 'FATHER', '27', NULL, NULL, 0, NULL, 10001, '', '2016-12-20', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10293, 10156, 'RA00166', NULL, 'REKHA SAHU', NULL, 'REKHA SAHU', NULL, 34, NULL, NULL, NULL, NULL, 0, NULL, 1, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-12-20 21:16:31', '2016-12-20 21:16:31', 237, 'NARESH PRASAD SAHU', 'FATHER', '33', NULL, NULL, 0, NULL, 10001, '', '2016-12-20', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10294, 132, 'RA00167', NULL, 'SIMA DAS MODAK', NULL, 'SIMA DAS MODAK', NULL, 34, NULL, NULL, NULL, NULL, 0, NULL, 1, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-12-20 21:19:13', '2016-12-20 21:19:13', 238, 'ASHOK KUMAR MODAK', 'FATHER', '55', NULL, NULL, 0, NULL, 10001, '', '2016-12-20', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10295, 132, 'RA00168', NULL, 'SHIVANI DEVI', NULL, 'SHIVANI DEVI', NULL, 34, NULL, NULL, NULL, NULL, 0, NULL, 1, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-12-20 21:21:42', '2016-12-20 21:21:42', 239, 'HIRATAN KUMBHAKAR', 'FATHER', '', NULL, NULL, 0, NULL, 10001, '', '2016-12-20', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10296, 132, 'RA00169', NULL, 'ANIL MAJHI', NULL, 'ANIL MAJHI', NULL, 34, NULL, NULL, NULL, NULL, 0, NULL, 1, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-12-20 21:24:32', '2016-12-20 21:24:32', 240, 'MANGAL MAJHI', 'FATHER', '32', NULL, NULL, 0, NULL, 10001, '', '2016-12-20', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10297, 132, 'RA00170', NULL, 'BABU RAM BINDHANI', NULL, 'BABU RAM BINDHANI', NULL, 34, NULL, NULL, NULL, NULL, 0, NULL, 1, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-12-20 21:28:43', '2016-12-20 21:28:43', 241, 'LAXMI DEVI', 'FATHER', '34', NULL, NULL, 0, NULL, 10001, '', '2016-12-20', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10298, 132, 'RC00100072', NULL, 'PRABODH KUMAR MANDAL', NULL, 'PRABODH KUMAR MANDAL', NULL, 32, NULL, NULL, NULL, NULL, 0, NULL, 1, 7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-12-20 21:32:49', '2016-12-23 21:03:11', 234, 'ARCHANA MANDAL', 'WIFE', NULL, '', NULL, 0, NULL, 10001, 'RA00163', '2016-12-20', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10299, 132, 'RC00100073', NULL, 'ASHOK KUMAR MODAK', NULL, 'ASHOK KUMAR MODAK', NULL, 32, NULL, NULL, NULL, NULL, 0, NULL, 1, 7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2016-12-20 21:44:04', '2016-12-23 21:02:55', 242, 'SIMA DAS MODAK', 'WIFE', NULL, '25/11/1972', NULL, 0, NULL, 10001, '', '2016-12-20', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10300, 10325, 'RC00100074', NULL, 'MIHIR CHANDRA MAHATO', 'MIHIR CHANDRA MAHATO', 'MIHIR CHANDRA MAHATO', '', 37, 0, 1, 1, 0, 1, 0, 1, 10308, 233, 1, 1, 1, 1, 1, 1, 1, 100000, 0, '1', 0, 0, 100, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 1, '2016-12-20 21:46:37', '2018-12-13 22:02:15', 233, 'BHARATI MAHATO', 'WIFE', NULL, '', NULL, 0, NULL, 10001, 'RA00162', '2016-12-20', NULL, 0, 0, 0, 10317, 10314, 0, 0, 0),
(10301, 10306, 'RC00100075', NULL, 'DULAL ROY', 'DULAL ROY', 'DULAL ROY', '', 37, 0, 1, 1, 0, 1, 0, 1, 10310, 83, 1, 1, 1, 1, 1, 1, 1, 100000, 0, '1', 0, 0, 100, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 1, '2016-12-22 23:20:22', '2018-11-28 16:35:12', 83, 'SANTANA ROY', 'WIFE', NULL, '', NULL, 0, NULL, 10001, 'RA00080', '2016-12-22', NULL, 0, 0, 0, 10318, 10313, 0, 0, 0),
(10302, 1, 'RC00100076', NULL, 'DULAL ROY', 'DULAL ROY', 'DULAL ROY', '', 37, 0, 1, 1, 0, 1, 0, 1, 10308, 243, 1, 1, 1, 1, 1, 1, 1, 100000, 0, '1', 0, 0, 100, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 1, '2016-12-22 23:39:29', '2018-12-06 15:06:30', 243, 'SANTANA ROY', 'WIFE', NULL, '', NULL, 0, NULL, 10001, '', '2016-12-22', NULL, 0, 0, 0, 10318, 10313, 0, 0, 0),
(10303, 1, 'RC00100077', NULL, 'BIPAD TARAN PAL', 'BIPAD TARAN PAL', 'BIPAD TARAN PAL', '', 37, 0, 1, 1, 0, 1, 0, 1, 10309, 109, 1, 1, 1, 1, 1, 1, 1, 100000, 0, '1', 0, 0, 100, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 1, '2016-12-23 22:03:45', '2018-11-28 04:52:25', 109, 'PRATIMA PAL', 'FATHER', NULL, '', NULL, 0, NULL, 10001, 'RA00106', '2016-12-23', NULL, 0, 0, 0, 10316, 10313, 0, 0, 0),
(10304, 1, 'RA00171', NULL, 'DILIP KUMAR MITRA', 'DILIP KUMAR MITRA', 'DILIP KUMAR MITRA', '', 37, 0, 1, 1, 0, 1, 0, 1, 10311, 244, 1, 1, 1, 1, 1, 1, 1, 100000, 0, '1', 0, 0, 100, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 1, '2016-12-24 21:26:09', '2018-12-07 05:59:11', 244, 'JAYA MITRA', 'WIFE', '44', NULL, NULL, 0, NULL, 10001, '', '2016-12-24', NULL, 0, 0, 0, 10318, 10314, 0, 0, 0);
INSERT INTO `tbl_master` (`ID`, `MID`, `CODE`, `MembershipID`, `Name`, `Alias`, `PrintName`, `Description`, `MasterTypeID`, `DrCr`, `Debit`, `Credit`, `IsMaster`, `IsMasterGroup`, `CostCategoryID`, `MasterGroupID`, `DesignationID`, `PersonOrganisationID`, `AllocateRevenueItems`, `AllocateNonRevenueItems`, `AccountID`, `IsActive`, `IsBehaveAsSubLedger`, `IsAffectGrossProfit`, `SORT`, `CreditPeriod`, `CreditLimit`, `MaintainBillByBill`, `TaxClassID`, `TaxTypeID`, `Percentage`, `IsCalculative`, `OpeningBalance`, `ClosingBalance`, `Asset`, `Liabilities`, `Expense`, `Income`, `NetDebitCreditBalanceForReporting`, `UseForCalculation`, `AllocationMethodID`, `CreatedBy`, `ModifiedBy`, `CreateTime`, `ModifyTime`, `PDID`, `Nominee`, `Relation`, `NomineeAge`, `NomineeDOB`, `NomineeContact`, `NomineeAddressID`, `OperationArea`, `OfficeID`, `DocumentNo`, `RegisterDate`, `ImageID`, `IsSystemConfigured`, `IsHidden`, `PriceLevelID`, `AttendanceTypeID`, `DepartmentID`, `DoctorID`, `Capacity`, `ClassTeacherID`) VALUES
(10305, 1, 'RC00100078', NULL, 'DILIP KUMAR MITRA', 'DILIP KUMAR MITRA', 'DILIP KUMAR MITRA', '', 37, 0, 1, 1, 0, 1, 0, 1, 10310, 244, 1, 1, 1, 1, 1, 1, 1, 100000, 0, '1', 0, 0, 100, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 1, '2016-12-24 21:26:58', '2018-11-28 13:53:53', 244, 'JAYA MITRA', 'WIFE', NULL, '', NULL, 0, NULL, 10001, 'RA00171', '2016-12-24', NULL, 0, 0, 0, 10318, 10313, 0, 0, 0),
(10306, 1, 'RC00100079', NULL, 'DILIP KUMAR MITRA', 'DILIP KUMAR MITRA', 'DILIP KUMAR MITRA', '', 37, 0, 1, 1, 0, 1, 0, 1, 10311, 245, 1, 1, 1, 1, 1, 1, 1, 100000, 0, '1', 0, 0, 100, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 1, '2016-12-24 22:00:02', '2018-11-28 04:52:45', 245, 'JAYA MITRA', 'WIFE', NULL, '', NULL, 0, NULL, 10001, '', '2016-12-24', NULL, 0, 0, 0, 10317, 10313, 0, 0, 0),
(10307, 0, 'BC0002', NULL, 'KOLKATA', 'KOLKATA', 'KOLKATA', 'KOLKATA', 0, 0, 1, 1, 1, 1, 0, 1, 0, 0, 1, 1, 1, 1, 1, 1, 1, 1000000, 0, '1', 0, 0, 100, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2017-01-10 17:42:56', '2017-01-10 17:42:56', 1, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, NULL, '2017-01-12', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10308, 0, 'rc002', NULL, 'Pathologist', 'Pathologist', 'Pathologist', 'Pathologist', 21, 0, 1, 1, 1, 1, 0, 1, 0, 0, 1, 1, 1, 1, 1, 1, 1, 1000000, 0, '1', 0, 0, 100, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2017-01-10 17:43:58', '2017-01-10 17:43:58', 1, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, NULL, '2017-01-10', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10309, 0, 'rc002', NULL, 'Radiologist', 'Radiologist', 'Radiologist', 'Radiologist', 21, 0, 1, 1, 1, 1, 0, 1, 0, 247, 1, 1, 1, 1, 1, 1, 1, 1000000, 0, '1', 0, 0, 100, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2017-01-10 17:45:26', '2017-01-10 17:45:26', 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, NULL, '2017-01-10', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10310, 0, 'K002', NULL, 'General Physician', 'General Physician', 'General Physician', 'General Physician', 21, 0, 1, 1, 1, 1, 0, 1, 0, 248, 1, 1, 1, 1, 1, 1, 1, 1000000, 0, '1', 0, 0, 100, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2017-01-10 17:46:30', '2017-01-10 17:46:30', 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, NULL, '2017-01-10', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10311, 0, 'K002', NULL, 'Homotologist', 'Homotologist', 'Homotologist', 'Homotologist', 21, 0, 1, 1, 1, 1, 0, 1, 0, 248, 1, 1, 1, 1, 1, 1, 1, 1000000, 0, '1', 0, 0, 100, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2017-01-10 17:46:30', '2017-01-10 17:46:30', 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, NULL, '2017-01-10', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10312, 0, 'K002', NULL, 'KOLKATA', 'KOLKATA', 'KOLKATA', 'KOLKATA', 0, 0, 1, 1, 1, 1, 0, 1, 0, 248, 1, 1, 1, 1, 1, 1, 1, 1000000, 0, '1', 0, 0, 100, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2017-01-10 17:46:30', '2017-01-10 17:46:30', 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, NULL, '2017-01-10', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10313, 10001, 'K002', NULL, 'Pathology', 'Pathology', 'Pathology', '', 19, 0, 1, 1, 0, 1, 0, 1, 0, 247, 1, 1, 1, 1, 1, 1, 1, 100000, 0, '1', 0, 0, 100, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2017-01-10 17:49:02', '2017-01-11 12:59:02', 247, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, NULL, '2016-01-10', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10314, 10001, 'JHR002', NULL, 'Radiology', 'Radiology', 'Radiology', '', 19, 0, 1, 1, 1, 1, 0, 1, 0, 252, 1, 1, 1, 1, 1, 1, 1, 100000, 0, '1', 0, 0, 100, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2017-01-10 18:35:05', '2017-01-11 12:58:27', 252, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, NULL, '2016-08-05', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10315, 10001, 'DH003', NULL, 'Delivery', 'Delivery', 'Delivery', '', 19, 0, 1, 1, 1, 1, 0, 1, 0, 253, 1, 1, 1, 1, 1, 1, 1, 100000, 0, '1', 0, 0, 100, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2017-01-10 18:48:44', '2017-01-10 20:43:15', 253, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, NULL, '2017-01-02', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10316, 10001, 'CH04', NULL, 'Hired Doctor', 'Hired Doctor', 'Hired Doctor', '', 38, 0, 1, 1, 1, 1, 0, 1, 0, 254, 1, 1, 1, 1, 1, 1, 1, 100000, 0, '1', 0, 0, 100, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2017-01-10 18:51:19', '2017-01-10 20:43:24', 254, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, NULL, '2016-10-03', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10317, 10314, 'Wh01', NULL, 'Consulted Doctor', 'Consulted Doctor', 'Consulted Doctor', '', 38, 0, 1, 1, 0, 1, 0, 1, 0, 255, 1, 1, 1, 1, 1, 1, 1, 100000, 0, '1', 0, 0, 100, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2017-01-11 12:31:33', '2017-01-11 12:39:44', 255, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, NULL, '2017-01-10', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10318, 10317, 'Wh02', NULL, 'Referal Doctor', 'Referal Doctor', 'Referal Doctor', 'Referal Doctor', 38, 0, 1, 1, 0, 1, 0, 1, 0, 256, 1, 1, 1, 1, 1, 1, 1, 1000000, 0, '1', 0, 0, 100, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2017-01-11 13:06:02', '2017-01-11 13:06:02', 256, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, NULL, '2017-01-11', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10319, 1, 'AC', NULL, 'Accounts', 'Accounts', 'Accounts', 'Accounts', 26, 0, 1, 1, 1, 1, 0, 1, 0, 257, 1, 1, 1, 1, 1, 1, 1, 1000000, 0, '1', 0, 0, 100, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 10056, '2017-01-11 13:27:10', '2017-01-11 13:27:10', 257, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, NULL, '2017-01-11', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10320, 1, 'HR', NULL, 'HR', 'HR', 'HR', '', 26, 0, 1, 1, 0, 1, 0, 1, 0, 258, 1, 1, 1, 1, 1, 1, 1, 100000, 0, '1', 0, 0, 100, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 1, '2017-01-11 13:46:55', '2017-02-09 11:39:53', 258, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, NULL, '2017-01-08', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10321, 0, 'MS002', '0', 'Class2', '', '', '', 44, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 1, '2017-01-11 18:03:06', '2019-12-05 03:36:13', 259, '', '', '', '', '', 0, '', 0, '', '2017-01-06', '0', 0, 0, 0, 0, 0, 0, 0, 0),
(10322, 0, 'MS002', '0', 'Class3', '', '', '', 44, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 1, '2017-01-11 18:18:05', '2019-12-05 03:36:34', 260, '', '', '', '', '', 0, '', 0, '', '2017-01-07', '0', 0, 0, 0, 0, 0, 0, 0, 0),
(10323, 1, 'E00003', NULL, 'Teacher3', 'Teacher3', 'Teacher3', '', 43, 0, 1, 1, 0, 1, 0, 1, 0, 265, 1, 1, 1, 1, 1, 1, 1, 100000, 0, '1', 0, 0, 100, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 1, '2017-01-11 21:58:18', '2018-12-31 08:38:52', 265, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, NULL, '2017-01-11', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10324, 10322, 'CL3(A)', '0', 'Class3 Section A', '', '', '', 44, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10056, 3, '2017-01-12 11:57:21', '2019-12-27 13:42:17', 266, '', '', '', '', '', 0, '', 0, '', NULL, '0', 0, 0, 0, 0, 0, 0, 50, 10352),
(10325, 10303, 'DOC2154', NULL, 'AVI', 'AVI', 'AVI', '', 37, 0, 1, 1, 0, 1, 0, 1, 10311, 246, 1, 1, 1, 1, 1, 1, 1, 100000, 0, '1', 0, 0, 100, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, '2018-11-28 03:22:58', '2018-11-28 03:27:39', 246, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, NULL, '2018-11-28', NULL, 0, 0, 0, 10316, 10313, 0, 0, 0),
(10326, 10056, '', NULL, 'Samir Ra', 'Samir Ra', 'Samir Ra', 'Samir Ra', 36, 0, 1, 1, 0, 1, 0, 1, 0, 247, 1, 1, 1, 1, 1, 1, 1, 1000000, 0, '1', 0, 0, 100, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, '2018-11-28 17:14:49', '2018-11-28 17:14:49', 247, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, NULL, '2018-11-28', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10327, 10306, '8', NULL, 'Sam Ram', 'Sam Ram', 'Sam Ram', '', 36, 0, 1, 1, 0, 1, 0, 1, 0, 248, 1, 1, 10333, 1, 1, 1, 1, 100000, 0, '1', 0, 0, 100, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, '2018-11-28 17:19:26', '2018-12-10 09:18:56', 248, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, NULL, '2018-11-28', NULL, 0, 0, 0, 0, 0, 10306, 0, 0),
(10328, 1, 'P00009', NULL, 'Samir Ram', 'Samir Ram', 'Samir Ram', 'Samir Ram', 36, 0, 1, 1, 0, 1, 0, 1, 0, 250, 1, 1, 1, 1, 1, 1, 1, 1000000, 0, '1', 0, 0, 100, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, '2018-11-28 17:23:10', '2018-11-28 17:23:10', 250, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, NULL, '2018-11-28', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10329, 1, 'D00009', NULL, 'Samir Ram', 'Samir Ram', 'Samir Ram', 'Samir Ram', 37, 0, 1, 1, 0, 1, 0, 1, 10310, 251, 1, 1, 1, 1, 1, 1, 1, 1000000, 0, '1', 0, 0, 100, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, '2018-11-28 17:24:11', '2018-11-28 17:24:11', 251, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, NULL, '2018-11-28', NULL, 0, 0, 0, 10318, 10313, 0, 0, 0),
(10330, 1, 'D00010', NULL, 'Samir Ramer', 'Samir Ramer', 'Samir Ramer', 'Samir Ramer', 37, 0, 1, 1, 0, 1, 0, 1, 10310, 0, 1, 1, 1, 1, 1, 1, 1, 1000000, 0, '1', 0, 0, 100, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, '2018-12-02 03:01:30', '2018-12-02 03:01:30', 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, NULL, '2018-12-02', NULL, 0, 0, 0, 10318, 10313, 0, 0, 0),
(10331, 1, 'P00010', NULL, 'SULTAN MEDICAL', 'SULTAN MEDICAL', 'SULTAN MEDICAL', '', 40, 0, 1, 1, 0, 1, 0, 1, 0, 252, 1, 1, 1, 1, 1, 1, 1, 100000, 0, '1', 0, 0, 100, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, '2018-12-02 14:26:06', '2018-12-02 14:34:51', 252, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, NULL, '2018-12-02', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10332, 1, 'A00007', NULL, 'consutant P', 'consutant P', 'consutant P', '', 40, 0, 1, 1, 0, 1, 0, 1, 0, 253, 1, 1, 1, 1, 1, 1, 1, 100000, 0, '1', 0, 0, 100, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, '2018-12-02 14:29:18', '2018-12-02 14:34:09', 253, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, NULL, '2018-12-02', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10333, 1, 'A00008', NULL, 'consult', 'consult', 'consult', 'consult', 40, 0, 1, 1, 0, 1, 0, 1, 0, 254, 1, 1, 1, 1, 1, 1, 1, 1000000, 0, '1', 0, 0, 100, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, '2018-12-02 14:29:39', '2018-12-02 14:29:39', 254, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, NULL, '2018-12-02', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10334, 1, 'A00009', NULL, 'ss', 'ss', 'ss', 'ss', 40, 0, 1, 1, 0, 1, 0, 1, 0, 255, 1, 1, 1, 1, 1, 1, 1, 1000000, 0, '1', 0, 0, 100, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, '2018-12-02 14:30:11', '2018-12-02 14:30:11', 255, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, NULL, '2018-12-02', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10335, 1, 'A00010', NULL, 'SP FIRM', 'SP FIRM', 'SP FIRM', '', 40, 0, 1, 1, 0, 1, 0, 1, 0, 256, 1, 1, 1, 1, 1, 1, 1, 100000, 0, '1', 0, 0, 100, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, '2018-12-02 14:30:20', '2018-12-02 14:31:20', 256, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, NULL, '2018-12-02', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10336, 1, 'A00011', NULL, 'SD', 'SD', 'SD', '', 40, 0, 1, 1, 0, 1, 0, 1, 0, 257, 1, 1, 1, 1, 1, 1, 1, 100000, 0, '1', 0, 0, 100, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, '2018-12-02 14:30:58', '2018-12-02 14:33:55', 257, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, NULL, '2018-12-02', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10337, 10301, 'P00001', NULL, 'mithun pat', 'mithun pat', 'mithun pat', '', 36, 0, 1, 1, 0, 1, 0, 1, 0, 258, 1, 1, 0, 1, 1, 1, 1, 100000, 0, '1', 0, 0, 100, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 10309, '2018-12-06 15:51:59', '2018-12-25 08:49:15', 258, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, NULL, '2018-12-06', NULL, 0, 0, 0, 0, 0, 10301, 0, 0),
(10338, 10306, 'P00011', NULL, 'NEW PATIENT', 'NEW PATIENT', 'NEW PATIENT', 'NEW PATIENT', 36, 0, 1, 1, 0, 1, 0, 1, 0, 259, 1, 1, 10107, 1, 1, 1, 1, 1000000, 0, '1', 0, 0, 100, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, '2018-12-10 09:56:43', '2018-12-10 09:56:43', 259, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, NULL, '2018-12-10', NULL, 0, 0, 0, 0, 0, 10306, 0, 0),
(10339, 10329, 'P00012', NULL, 'DEBU PAL', 'DEBU PAL', 'DEBU PAL', 'DEBU PAL', 36, 0, 1, 1, 0, 1, 0, 1, 0, 260, 1, 1, 10108, 1, 1, 1, 1, 1000000, 0, '1', 0, 0, 100, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, '2018-12-10 10:29:03', '2018-12-10 10:29:03', 260, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, NULL, '2018-12-10', NULL, 0, 0, 0, 0, 0, 10329, 0, 0),
(10340, 10303, 'P00013', NULL, 'PP', 'PP', 'PP', 'PP', 36, 0, 1, 1, 0, 1, 0, 1, 0, 261, 1, 1, 10331, 1, 1, 1, 1, 1000000, 0, '1', 0, 0, 100, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, '2018-12-10 10:48:21', '2018-12-10 10:48:21', 261, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, NULL, '2018-12-10', NULL, 0, 0, 0, 0, 0, 10303, 0, 0),
(10341, 10300, 'P00014', NULL, 'DSE', 'DSE', 'DSE', 'DSE', 36, 0, 1, 1, 0, 1, 0, 1, 0, 262, 1, 1, 10106, 1, 1, 1, 1, 1000000, 0, '1', 0, 0, 100, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, '2018-12-10 10:50:14', '2018-12-10 10:50:14', 262, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, NULL, '2018-12-10', NULL, 0, 0, 0, 0, 0, 10300, 0, 0),
(10342, 10304, 'P00015', NULL, 'jkhgfjghjfg', 'jkhgfjghjfg', 'jkhgfjghjfg', 'jkhgfjghjfg', 36, 0, 1, 1, 0, 1, 0, 1, 0, 263, 1, 1, 10108, 1, 1, 1, 1, 1000000, 0, '1', 0, 0, 100, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, '2018-12-10 10:51:38', '2018-12-10 10:51:38', 263, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, NULL, '2018-12-10', NULL, 0, 0, 0, 0, 0, 10304, 0, 0),
(10343, 10306, 'P00016', NULL, 'NEW PATEINFNFNF', 'NEW PATEINFNFNF', 'NEW PATEINFNFNF', 'NEW PATEINFNFNF', 36, 0, 1, 1, 0, 1, 0, 1, 0, 264, 1, 1, 10331, 1, 1, 1, 1, 1000000, 0, '1', 0, 0, 100, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, '2018-12-10 10:55:47', '2018-12-10 10:55:47', 264, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, NULL, '2018-12-10', NULL, 0, 0, 0, 0, 0, 10306, 0, 0),
(10344, 10303, 'P00017', NULL, 'Thik Thak Patient', 'Thik Thak Patient', 'Thik Thak Patient', '', 36, 0, 1, 1, 0, 1, 0, 1, 0, 265, 1, 1, 10108, 1, 1, 1, 1, 100000, 0, '1', 0, 0, 100, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, '2018-12-10 10:57:00', '2018-12-10 18:51:40', 265, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, NULL, '2018-12-10', NULL, 0, 0, 0, 0, 0, 10303, 0, 0),
(10345, 10304, 'P00018', NULL, 'CAPTURE Take', 'CAPTURE Take', 'CAPTURE Take', '', 36, 0, 1, 1, 0, 1, 0, 1, 0, 266, 1, 1, 10104, 1, 1, 1, 1, 100000, 0, '1', 0, 0, 100, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, '2018-12-10 10:59:56', '2018-12-12 23:35:43', 266, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, NULL, '2018-12-10', NULL, 0, 0, 0, 0, 0, 10304, 0, 0),
(10346, 10304, 'P00019', NULL, 'rterterte', 'rterterte', 'rterterte', 'rterterte', 36, 0, 1, 1, 0, 1, 0, 1, 0, 267, 1, 1, 10108, 1, 1, 1, 1, 1000000, 0, '1', 0, 0, 100, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, '2018-12-10 11:04:33', '2018-12-10 11:04:33', 267, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, NULL, '2018-12-10', NULL, 0, 0, 0, 0, 0, 10304, 0, 0),
(10347, 10304, 'P00020', NULL, 'PATIENT FDS', 'PATIENT FDS', 'PATIENT FDS', 'PATIENT FDS', 36, 0, 1, 1, 0, 1, 0, 1, 0, 268, 1, 1, 10332, 1, 1, 1, 1, 1000000, 0, '1', 0, 0, 100, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, '2018-12-10 11:53:21', '2018-12-10 11:53:21', 268, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, NULL, '2018-12-10', NULL, 0, 0, 0, 0, 0, 10304, 0, 0),
(10348, 0, 'P00021', NULL, 'NAME', 'NAME', 'NAME', '', 36, 0, 1, 1, 0, 1, 0, 1, 0, 269, 1, 1, 0, 1, 1, 1, 1, 100000, 0, '1', 0, 0, 100, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, '2018-12-10 19:11:47', '2018-12-10 19:12:03', 269, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, NULL, '2018-12-10', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10349, 1, 'P00022', NULL, 'Ram', 'Ram', 'Ram', 'Ram', 36, 0, 1, 1, 0, 1, 0, 1, 0, 270, 1, 1, 1, 1, 1, 1, 1, 1000000, 0, '1', 0, 0, 100, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, '2018-12-13 20:30:22', '2018-12-13 20:30:22', 270, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, NULL, '2018-12-13', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10350, 1, '', '0', 'Teacher4', 'Teacher4', 'Teacher4', '', 43, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, '2018-12-31 22:10:12', '2019-05-02 10:27:54', 271, '', '', '', '', '', 0, '', 0, '', '2018-12-31', '0', 0, 0, 0, 0, 10319, 0, 0, 0),
(10351, 1, 'P00004', NULL, 'MRINMOY SEN', 'MRINMOY SEN', 'MRINMOY SEN', 'MRINMOY SEN', 27, 0, 1, 1, 0, 1, 0, 1, 0, 272, 1, 1, 1, 1, 1, 1, 1, 1000000, 0, '1', 0, 0, 100, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, '2018-12-26 22:21:38', '2018-12-26 08:51:38', 272, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, NULL, '2018-12-26', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10352, 1, 'P00005', NULL, 'Teacher1', 'Teacher1', 'Teacher1', 'Teacher1', 43, 0, 1, 1, 0, 1, 0, 1, 0, 273, 1, 1, 1, 1, 1, 1, 1, 1000000, 0, '1', 0, 0, 100, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, '2018-12-26 22:21:53', '2018-12-26 08:51:53', 273, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, NULL, '2018-12-26', NULL, 0, 0, 0, 0, 0, 0, 0, 0),
(10353, 130, '', '0', 'MARKETTING1', '', '', '', 6, 0, 0, 0, 0, 0, 0, 105, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 3, '2019-03-27 11:15:36', '2019-03-27 11:15:36', 0, '', '', '', '', '', 0, '', 0, '', NULL, '0', 0, 0, 0, 0, 0, 0, 0, 0),
(10354, 130, '', '0', 'MARKETTING2', '', '', '', 6, 0, 0, 0, 0, 0, 0, 105, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 3, '2019-03-27 11:15:36', '2019-03-27 11:15:36', 0, '', '', '', '', '', 0, '', 0, '', NULL, '0', 0, 0, 0, 0, 0, 0, 0, 0),
(10355, 128, '', '0', 'CALL', '', '', '', 6, 0, 0, 0, 0, 0, 0, 105, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 3, '2019-03-27 11:16:35', '2019-03-27 11:16:35', 0, '', '', '', '', '', 0, '', 0, '', NULL, '0', 0, 0, 0, 0, 0, 0, 0, 0),
(10356, 132, '', '0', 'Prabir Ram', '', '', '', 7, 1, 0, 0, 0, 0, 0, 103, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '1', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 3, '2019-03-29 20:16:43', '2019-03-29 20:16:43', 0, '', '', '', '', '', 0, '', 0, '', NULL, '0', 0, 0, 0, 0, 0, 0, 0, 0),
(10357, 132, '', '0', 'Samir Ram', '', '', '', 7, -1, 0, 0, 0, 0, 0, 103, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '1', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 3, '2019-03-29 20:19:27', '2019-03-29 20:56:54', 278, '', '', '', '', '', 0, '', 0, '', NULL, '0', 0, 0, 0, 0, 0, 0, 0, 0),
(10358, 132, '', '0', 'Samirrt', '', '', '', 7, -1, 0, 0, 0, 0, 0, 103, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '1', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 3, '2019-03-29 20:20:52', '2019-03-29 20:56:34', 275, '', '', '', '', '', 0, '', 0, '', NULL, '0', 0, 0, 0, 0, 0, 0, 0, 0),
(10359, 132, '', '0', 'RamHARI', '', '', '', 7, 1, 0, 0, 0, 0, 0, 103, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '1', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 3, '2019-03-29 20:21:24', '2019-03-29 20:21:24', 276, '', '', '', '', '', 0, '', 0, '', NULL, '0', 0, 0, 0, 0, 0, 0, 0, 0),
(10360, 132, '', '0', 'Abir Ram', '', '', '', 7, -1, 0, 0, 0, 0, 0, 103, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 3, '2019-03-29 20:54:59', '2019-08-06 23:24:32', 277, '', '', '', '', '', 0, '', 0, '', NULL, '0', 0, 0, 0, 0, 0, 0, 0, 0),
(10361, 131, '', '0', 'RAM CUSTOMER', '', '', '', 7, 1, 0, 0, 0, 0, 0, 102, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 3, '2019-03-29 21:05:46', '2019-04-04 08:39:56', 280, '', '', '', '', '', 0, '', 0, '', NULL, '0', 0, 0, 0, 0, 0, 0, 0, 0),
(10362, 115, '', '0', 's.b.i bank a/c', '', '', '', 7, 1, 0, 0, 0, 0, 0, 102, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 3, '2019-04-04 19:05:10', '2019-04-04 19:05:10', 0, '', '', '', '', '', 0, '', 0, '', NULL, '0', 0, 0, 0, 0, 0, 0, 0, 0),
(10363, 131, '', '0', 'Arindam', '', '', '', 7, 1, 0, 0, 0, 0, 0, 102, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, '2019-04-07 17:44:47', '2019-04-07 17:44:47', 281, '', '', '', '', '', 0, '', 0, '', NULL, '0', 0, 0, 0, 0, 0, 0, 0, 0),
(10364, 114, '', '0', 'OUTPUT GST', '', '', '', 7, -1, 0, 0, 0, 0, 0, 103, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 3, '2019-05-02 11:22:38', '2019-07-31 18:29:30', 0, '', '', '', '', '', 0, '', 0, '', NULL, '0', 0, 0, 0, 0, 0, 0, 0, 0),
(10365, 131, '', '0', '', '', '', '', 7, 1, 0, 0, 0, 0, 0, 102, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, '2019-07-20 18:49:09', '2019-07-20 18:49:09', 282, '', '', '', '', '', 0, '', 0, '', NULL, '0', 0, 0, 0, 0, 0, 0, 0, 0),
(10366, 129, '', '0', 'DISCOUNT RECEIVED', '', '', '', 7, -1, 0, 0, 0, 0, 0, 104, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 3, '2019-07-31 18:25:48', '2019-07-31 18:25:48', 0, '', '', '', '', '', 0, '', 0, '', NULL, '0', 0, 0, 0, 0, 0, 0, 0, 0),
(10367, 131, '', '0', 'sssss', '', '', '', 42, 1, 0, 0, 0, 0, 0, 102, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 3, '2019-12-27 01:12:13', '2019-12-27 02:19:42', 285, '', '', '', '', '', 0, '', 0, '', NULL, '0', 0, 0, 0, 0, 0, 0, 0, 0),
(10368, 131, '', '0', 'ss', '', '', '', 42, 1, 0, 0, 0, 0, 0, 102, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 3, '2019-12-27 01:26:12', '2019-12-27 01:26:12', 0, '', '', '', '', '', 0, '', 0, '', NULL, '0', 0, 0, 0, 0, 0, 0, 0, 0),
(10369, 131, '', '0', 'fdg', '', '', '', 42, 1, 0, 0, 0, 0, 0, 102, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 3, '2019-12-27 01:28:02', '2019-12-27 01:28:02', 0, '', '', '', '', '', 0, '', 0, '', NULL, '0', 0, 0, 0, 0, 0, 0, 0, 0),
(10370, 131, '', '0', 'ss', '', '', '', 42, 1, 0, 0, 0, 0, 0, 102, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 3, '2019-12-27 01:32:09', '2019-12-27 01:32:09', 0, '', '', '', '', '', 0, '', 0, '', NULL, '0', 0, 0, 0, 0, 0, 0, 0, 0),
(10371, 131, '44', '0', 'fdfdf123', '', '', '', 42, 1, 0, 0, 0, 0, 0, 102, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 3, '2019-12-27 01:42:07', '2019-12-27 17:58:51', 291, '', '', '', '', '', 0, '', 0, '', NULL, '0', 0, 0, 0, 0, 0, 0, 0, 0),
(10372, 131, '', '0', 'ss', '', '', '', 42, 1, 0, 0, 0, 0, 0, 102, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 3, '2019-12-27 01:43:45', '2019-12-27 01:43:45', 0, '', '', '', '', '', 0, '', 0, '', NULL, '0', 0, 0, 0, 0, 0, 0, 0, 0),
(10373, 131, '', '0', 'xxx', '', '', '', 42, 1, 0, 0, 0, 0, 0, 102, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 3, '2019-12-27 01:45:14', '2019-12-27 03:10:32', 283, '', '', '', '', '', 0, '', 0, '', NULL, '0', 0, 0, 0, 0, 0, 0, 0, 0),
(10374, 10322, 'CL3(B)', '0', 'Class3 Section B', '', '', '', 44, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 3, '2019-12-27 13:48:57', '2019-12-27 13:48:57', 0, '', '', '', '', '', 0, '', 0, '', NULL, '0', 0, 0, 0, 0, 0, 0, 50, 10352),
(10375, 10321, 'CL2(A)', '0', 'Sec: A', '', '', '', 44, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 3, '2019-12-27 13:50:39', '2019-12-28 05:32:20', 0, '', '', '', '', '', 0, '', 0, '', NULL, '0', 0, 0, 0, 0, 0, 0, 50, 10352),
(10376, 10057, 'CL1(A)', '0', 'Section A', '', '', '', 44, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 3, '2019-12-27 18:02:03', '2019-12-27 18:02:03', 0, '', '', '', '', '', 0, '', 0, '', NULL, '0', 0, 0, 0, 0, 0, 0, 60, 10352),
(10377, 1, '', '0', 'ABC TEACHER', '', '', '', 43, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 3, '2019-12-28 05:45:05', '2019-12-28 05:45:23', 292, '', '', '', '', '', 0, '', 0, '', '2019-12-28', '0', 0, 0, 0, 0, 10319, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mastertype`
--

DROP TABLE IF EXISTS `tbl_mastertype`;
CREATE TABLE `tbl_mastertype` (
  `Name` varchar(100) DEFAULT NULL,
  `ID` int(10) UNSIGNED NOT NULL,
  `MID` int(10) UNSIGNED NOT NULL,
  `DetailsTable` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_mastertype`
--

INSERT INTO `tbl_mastertype` (`Name`, `ID`, `MID`, `DetailsTable`) VALUES
('Company', 1, 0, NULL),
('Cost Category', 2, 0, NULL),
('Cost Centre', 3, 1, NULL),
('Godown/ WareHouse/Storage', 4, 1, NULL),
('Accounting Master Group', 5, 0, NULL),
('Accounting Group', 6, 0, NULL),
('Accounting Ledger', 7, 0, NULL),
('Accounting Sub Ledger', 8, 0, NULL),
('Voucher Category', 9, 0, NULL),
('VoucherType', 10, 0, NULL),
('Tax Class', 11, 0, NULL),
('Tax Type', 12, 0, NULL),
('Tax', 13, 0, NULL),
('Item Group', 14, 0, NULL),
('Item Category', 15, 0, NULL),
('Item', 16, 0, NULL),
('Unit', 17, 0, NULL),
('Office/Branch', 18, 2, NULL),
('Department', 19, 2, NULL),
('Human Resources', 20, 2, NULL),
('Designation', 21, 0, NULL),
('Instrument Type', 22, 0, NULL),
('Item Costing Type', 23, 0, NULL),
('Item Pricing type', 24, 0, NULL),
('Role', 25, 0, NULL),
('EmployeeGroup', 26, 0, NULL),
('Employee', 27, 0, NULL),
('User', 28, 0, NULL),
('Scheme', 29, 0, NULL),
('Expense', 30, 0, NULL),
('Loan', 31, 0, NULL),
('Customer/Individual', 32, 0, NULL),
('Customer/Organisation', 33, 0, NULL),
('Member/Associate/Individual', 34, 0, NULL),
('Transport', 35, 0, NULL),
('Patient', 36, 0, NULL),
('Doctor', 37, 0, NULL),
('AttendanceType', 38, 0, NULL),
('Test', 39, 16, NULL),
('Agency', 40, 0, 'tbl_master'),
('Payment Method', 41, 0, NULL),
('Student', 42, 0, NULL),
('Teacher', 43, 0, NULL),
('Class', 44, 0, NULL),
('Section', 45, 44, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_news`
--

DROP TABLE IF EXISTS `tbl_news`;
CREATE TABLE `tbl_news` (
  `ID` int(10) UNSIGNED NOT NULL,
  `HeadLine` varchar(255) NOT NULL,
  `HighLights` text,
  `News` text,
  `NewsDate` datetime DEFAULT NULL,
  `Image1` varchar(45) DEFAULT NULL,
  `CreatedBy` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `CreateTime` datetime DEFAULT NULL,
  `ModifiedBy` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `ModifyTime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_news`
--

INSERT INTO `tbl_news` (`ID`, `HeadLine`, `HighLights`, `News`, `NewsDate`, `Image1`, `CreatedBy`, `CreateTime`, `ModifiedBy`, `ModifyTime`) VALUES
(1, 'Cong dismantled idea of Narendra Modi: Rahul', 'Rahul Gandhi mocked the PM for holding his first press c .. \r\n\r\nRead more at:\r\nhttp://timesofindia.indiatimes.com/articleshow/69374926.cms?utm_source=contentofinterest&utm_medium=text&utm_campaign=cppst', 'NEW DELHI: Congress president Rahul Gandhi on Friday claimed .. \r\n\r\nRead more at:\r\nhttp://timesofindia.indiatimes.com/articleshow/69374926.cms?utm_source=contentofinterest&utm_medium=text&utm_campaign=cppst', '2019-05-18 00:00:00', NULL, 0, NULL, 0, NULL),
(2, 'Will green card turn into \'Build America\' visa?', 'Every year the US issues nearly 1.1 million green cards, .. \r\n\r\nRead more at:\r\nhttp://timesofindia.indiatimes.com/articleshow/69376428.cms?utm_source=contentofinterest&utm_medium=text&utm_campaign=cppst', 'WASHINGTON: US President Donald Trump has said he will repla .. \r\n\r\nRead more at:\r\nhttp://timesofindia.indiatimes.com/articleshow/69376428.cms?utm_source=contentofinterest&utm_medium=text&utm_campaign=cppst', '2019-05-18 00:00:00', NULL, 0, NULL, 0, NULL),
(3, 'Deepika living a lime green life for Day 2 at Cannes', NULL, 'On Day 2, Deepika Padukone has taken some inspiration from her beau Ranveer Singh as she chose to wear a lime green dress which is definitely looking super fancy! We are rather impressed to see Deepika Padukone experimenting with this look as she is carrying it off well by making a stunning appearance on Day 2 of Cannes Film Festival.\r\nThe actress has left us awestruck yet again in a lime shaded tulle gown by Giambattista Valli accessorised with a pink headband- looking every bit of a lime dream!', '2019-05-18 00:00:00', NULL, 0, NULL, 0, NULL),
(4, 'Cannes \'19: See Kangana\'s beautiful dress for Day 4', '  ', '  We all are were waiting with bated breath for the second-day appearance of Bollywood\'s Queen Kangana Ranaut Cannes Film Festival 2019. The actress rocked yesterday in a golden saree teamed with maroon gloves and she slayed the red carpet. And now, her Day 2 look will win your hearts as she looks like a royal queen, making an entry in a long white dress with a fish cut! Check out her second day look here:', '2019-05-18 00:00:00', NULL, 0, NULL, 1, '2019-05-17 20:54:52'),
(5, 'abc', '  sss', '  sdsd', '2019-05-17 20:55:06', NULL, 1, '2019-05-17 20:55:06', 1, '2019-05-17 20:55:06'),
(6, 'sdsa', '  sadsa', '  dsadasd', '2019-05-18 02:26:38', NULL, 1, '2019-05-18 02:26:38', 1, '2019-05-18 02:26:38');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payrolldetails`
--

DROP TABLE IF EXISTS `tbl_payrolldetails`;
CREATE TABLE `tbl_payrolldetails` (
  `ID` int(10) UNSIGNED NOT NULL,
  `PayrollID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `MasterID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `File` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `Folder` varchar(45) DEFAULT NULL,
  `CreatedBy` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `CreateTime` datetime DEFAULT NULL,
  `ModifiedBy` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `ModifyTime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_payrolldetails`
--

INSERT INTO `tbl_payrolldetails` (`ID`, `PayrollID`, `MasterID`, `File`, `Folder`, `CreatedBy`, `CreateTime`, `ModifiedBy`, `ModifyTime`) VALUES
(2, 1, 10323, 0, 'testupload', 1, '2019-05-15 23:31:35', 1, '2019-05-15 23:31:35'),
(3, 1, 10350, 1, 'testupload', 1, '2019-05-15 23:31:35', 1, '2019-05-16 14:36:05'),
(4, 1, 10351, 1, 'testupload', 1, '2019-05-15 23:31:35', 1, '2019-05-16 14:29:37'),
(5, 1, 10352, 1, 'testupload', 1, '2019-05-15 23:31:35', 1, '2019-05-16 14:36:21'),
(6, 3, 10056, 0, 'testupload', 1, '2019-05-16 00:13:12', 1, '2019-05-16 00:13:12'),
(7, 3, 10323, 0, 'testupload', 1, '2019-05-16 00:13:12', 1, '2019-05-16 00:13:12'),
(8, 3, 10350, 0, 'testupload', 1, '2019-05-16 00:13:12', 1, '2019-05-16 00:13:12'),
(9, 3, 10351, 0, 'testupload', 1, '2019-05-16 00:13:12', 1, '2019-05-16 00:13:12'),
(10, 3, 10352, 0, 'testupload', 1, '2019-05-16 00:13:12', 1, '2019-05-16 00:13:12'),
(11, 4, 10056, 1, 'testupload', 1, '2019-05-16 00:30:12', 1, '2019-05-16 19:22:27'),
(12, 4, 10323, 0, 'testupload', 1, '2019-05-16 00:30:12', 1, '2019-05-16 00:30:12'),
(13, 4, 10350, 1, 'testupload', 1, '2019-05-16 00:30:12', 1, '2019-11-24 02:00:56'),
(14, 4, 10351, 0, 'testupload', 1, '2019-05-16 00:30:12', 1, '2019-05-16 00:30:12'),
(15, 4, 10352, 0, 'testupload', 1, '2019-05-16 00:30:12', 1, '2019-05-16 00:30:12'),
(16, 2, 10056, 0, 'testupload', 1, '2019-05-16 00:31:31', 1, '2019-05-16 00:31:31'),
(17, 2, 10323, 0, 'testupload', 1, '2019-05-16 00:31:31', 1, '2019-05-16 00:31:31'),
(18, 2, 10350, 0, 'testupload', 1, '2019-05-16 00:31:31', 1, '2019-05-16 00:31:31'),
(19, 2, 10351, 0, 'testupload', 1, '2019-05-16 00:31:31', 1, '2019-05-16 00:31:31'),
(20, 2, 10352, 0, 'testupload', 1, '2019-05-16 00:31:31', 1, '2019-05-16 00:31:31'),
(21, 1, 10056, 1, 'testupload', 1, '2019-05-16 00:31:38', 1, '2019-05-16 14:28:06'),
(22, 0, 10056, 0, 'testupload', 1, '2019-05-16 14:58:46', 1, '2019-05-16 14:58:46'),
(23, 0, 10323, 0, 'testupload', 1, '2019-05-16 14:58:46', 1, '2019-05-16 14:58:46'),
(24, 0, 10350, 0, 'testupload', 1, '2019-05-16 14:58:46', 1, '2019-05-16 14:58:46'),
(25, 0, 10351, 0, 'testupload', 1, '2019-05-16 14:58:46', 1, '2019-05-16 14:58:46'),
(26, 0, 10352, 0, 'testupload', 1, '2019-05-16 14:58:46', 1, '2019-05-16 14:58:46'),
(27, 5, 10056, 0, 'testupload', 1, '2019-05-26 08:30:26', 1, '2019-05-26 08:30:26'),
(28, 5, 10323, 1, 'testupload', 1, '2019-05-26 08:30:26', 1, '2019-05-26 08:36:21'),
(29, 5, 10350, 0, 'testupload', 1, '2019-05-26 08:30:26', 1, '2019-05-26 08:30:26'),
(30, 5, 10351, 0, 'testupload', 1, '2019-05-26 08:30:26', 1, '2019-05-26 08:30:26'),
(31, 5, 10352, 0, 'testupload', 1, '2019-05-26 08:30:26', 1, '2019-05-26 08:30:26');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payrollmaster`
--

DROP TABLE IF EXISTS `tbl_payrollmaster`;
CREATE TABLE `tbl_payrollmaster` (
  `ID` int(10) UNSIGNED NOT NULL,
  `PayrollNo` varchar(45) DEFAULT NULL,
  `PayrollPeriodID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `PayrollDate` date DEFAULT NULL,
  `CreatedBy` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `CreateTime` datetime DEFAULT NULL,
  `ModifiedBy` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `ModifyTime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_payrollmaster`
--

INSERT INTO `tbl_payrollmaster` (`ID`, `PayrollNo`, `PayrollPeriodID`, `PayrollDate`, `CreatedBy`, `CreateTime`, `ModifiedBy`, `ModifyTime`) VALUES
(1, 'PRMARCH2019', 1, '2019-05-05', 0, NULL, 0, NULL),
(2, 'PRAPRIL2019', 2, '2019-05-11', 1, '2019-05-11 20:15:10', 1, '2019-05-11 20:15:10'),
(3, 'PRMAY2019', 3, '2019-05-11', 1, '2019-05-11 20:16:57', 1, '2019-05-11 20:16:57'),
(4, 'PRJUNE', 4, '2019-05-15', 1, '2019-05-15 22:30:36', 1, '2019-05-15 22:30:36'),
(5, 'PRJULY 2019', 5, '2019-05-26', 1, '2019-05-26 08:30:17', 1, '2019-05-26 08:30:17');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payrollperiod`
--

DROP TABLE IF EXISTS `tbl_payrollperiod`;
CREATE TABLE `tbl_payrollperiod` (
  `ID` int(10) UNSIGNED NOT NULL,
  `Name` varchar(45) NOT NULL,
  `FromDate` date DEFAULT NULL,
  `ToDate` date DEFAULT NULL,
  `CreatedBy` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `CreateTime` datetime DEFAULT NULL,
  `ModifiedBy` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `ModifyTime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_payrollperiod`
--

INSERT INTO `tbl_payrollperiod` (`ID`, `Name`, `FromDate`, `ToDate`, `CreatedBy`, `CreateTime`, `ModifiedBy`, `ModifyTime`) VALUES
(1, 'MARCH2019', '2019-02-01', '2019-02-28', 1, '2019-05-04 07:44:17', 1, '2019-05-04 07:44:17'),
(2, 'APRIL2019', '2019-03-01', '2019-03-31', 1, '2019-05-04 07:37:12', 1, '2019-05-04 07:37:12'),
(3, 'MAY2019', '2019-04-01', '2019-04-30', 1, '2019-05-04 07:35:12', 1, '2019-05-04 07:35:12'),
(4, 'JUNE2019', '2019-06-01', '2019-06-30', 1, '2019-05-15 22:30:34', 1, '2019-05-15 22:30:34'),
(5, 'JULY 2019', '2019-06-01', '2019-06-30', 1, '2019-05-26 08:29:51', 1, '2019-05-26 08:29:51');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pd`
--

DROP TABLE IF EXISTS `tbl_pd`;
CREATE TABLE `tbl_pd` (
  `ID` int(10) UNSIGNED NOT NULL,
  `Name` varchar(100) NOT NULL,
  `AddressID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `LocalAddressID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `GurdianName` varchar(100) DEFAULT NULL,
  `GurdianRelation` varchar(100) DEFAULT NULL,
  `SpouseName` varchar(100) DEFAULT NULL,
  `ContactNo` varchar(20) DEFAULT NULL,
  `PAN` varchar(20) DEFAULT NULL,
  `VAT` varchar(20) DEFAULT NULL,
  `DOB` date DEFAULT NULL,
  `Age` varchar(45) NOT NULL DEFAULT '--NOT',
  `DOJ` date DEFAULT NULL,
  `Gender` varchar(100) DEFAULT NULL,
  `Email` varchar(45) DEFAULT NULL,
  `Website` varchar(45) DEFAULT NULL,
  `EPFNo` varchar(45) DEFAULT NULL,
  `ESINo` varchar(45) DEFAULT NULL,
  `PassportNo` varchar(45) DEFAULT NULL,
  `Country` varchar(45) DEFAULT NULL,
  `AadhaarNo` varchar(45) DEFAULT NULL,
  `Path` varchar(45) DEFAULT NULL,
  `Image` varchar(45) DEFAULT NULL,
  `ImageID` varchar(45) DEFAULT NULL,
  `CreateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ModifyTime` datetime DEFAULT NULL,
  `CreatedBy` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `ModifiedBy` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `Description` text,
  `BankName` varchar(100) DEFAULT NULL,
  `BankBranch` varchar(100) DEFAULT NULL,
  `AccountNo` varchar(45) DEFAULT NULL,
  `BANKCODE` varchar(45) DEFAULT NULL,
  `Occupation` varchar(45) DEFAULT NULL,
  `Fax` varchar(45) DEFAULT NULL,
  `VoterID` varchar(45) DEFAULT NULL,
  `area_operation` varchar(45) DEFAULT NULL,
  `BankAccountType` varchar(20) DEFAULT NULL,
  `OLDID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `MaritalStatus` varchar(10) DEFAULT NULL,
  `Education` text,
  `Nationality` varchar(45) DEFAULT NULL,
  `AnnualIncome` double DEFAULT '0',
  `TagLine` varchar(200) DEFAULT NULL,
  `TEL` varchar(45) DEFAULT NULL,
  `State` varchar(45) DEFAULT NULL,
  `CIN` varchar(45) DEFAULT NULL,
  `TAN` varchar(45) DEFAULT NULL,
  `CST` varchar(45) DEFAULT NULL,
  `TIN` varchar(45) DEFAULT NULL,
  `GST` varchar(45) DEFAULT NULL,
  `MAP` varchar(250) DEFAULT NULL,
  `WhatsApp` varchar(10) DEFAULT NULL,
  `DesignationID` int(10) UNSIGNED DEFAULT NULL,
  `Religion` varchar(45) DEFAULT NULL,
  `FatherName` varchar(100) DEFAULT NULL,
  `FatherEducation` varchar(100) DEFAULT NULL,
  `FatherOccupation` varchar(100) DEFAULT NULL,
  `MotherName` varchar(100) DEFAULT NULL,
  `MotherEducation` varchar(100) DEFAULT NULL,
  `MotherOccupation` varchar(100) DEFAULT NULL,
  `Dependents` int(10) UNSIGNED DEFAULT NULL,
  `GurdianOccupation` varchar(100) DEFAULT NULL,
  `PreviousSchool` varchar(100) DEFAULT NULL,
  `PreviousClass` varchar(45) DEFAULT NULL,
  `ReasonOfLeaving` text,
  `BirthMark` varchar(100) DEFAULT NULL,
  `AnyDisease` int(10) UNSIGNED DEFAULT NULL,
  `DiseasePeriod` varchar(100) DEFAULT NULL,
  `Disease` varchar(100) DEFAULT NULL,
  `DiseasePrecaution` varchar(100) DEFAULT NULL,
  `AdmissionClass` varchar(45) DEFAULT NULL,
  `AdmissionAge` varchar(45) DEFAULT NULL,
  `AdmissionDate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Personal Details';

--
-- Dumping data for table `tbl_pd`
--

INSERT INTO `tbl_pd` (`ID`, `Name`, `AddressID`, `LocalAddressID`, `GurdianName`, `GurdianRelation`, `SpouseName`, `ContactNo`, `PAN`, `VAT`, `DOB`, `Age`, `DOJ`, `Gender`, `Email`, `Website`, `EPFNo`, `ESINo`, `PassportNo`, `Country`, `AadhaarNo`, `Path`, `Image`, `ImageID`, `CreateTime`, `ModifyTime`, `CreatedBy`, `ModifiedBy`, `Description`, `BankName`, `BankBranch`, `AccountNo`, `BANKCODE`, `Occupation`, `Fax`, `VoterID`, `area_operation`, `BankAccountType`, `OLDID`, `MaritalStatus`, `Education`, `Nationality`, `AnnualIncome`, `TagLine`, `TEL`, `State`, `CIN`, `TAN`, `CST`, `TIN`, `GST`, `MAP`, `WhatsApp`, `DesignationID`, `Religion`, `FatherName`, `FatherEducation`, `FatherOccupation`, `MotherName`, `MotherEducation`, `MotherOccupation`, `Dependents`, `GurdianOccupation`, `PreviousSchool`, `PreviousClass`, `ReasonOfLeaving`, `BirthMark`, `AnyDisease`, `DiseasePeriod`, `Disease`, `DiseasePrecaution`, `AdmissionClass`, `AdmissionAge`, `AdmissionDate`) VALUES
(1, 'NAVA JYOTI VIDYAPITH', 1, 1, '', '', '', '999999', '', '', NULL, '', '2019-03-05', '', 'sa@g.com', '', '', '', '', '', '', '', '', '', '2016-03-30 06:55:21', '2019-03-14 20:42:07', 0, 3, '', '', '', '', '', '', '', '', '', '', 0, '', '', '', 0, 'YOUR POCKET ACCOUNT', '', 'WBs', '', '', '', '', '12121', '', '', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'Moumita Das', 2, 2, '', 'self', NULL, '8961572714', '', '', '1991-11-19', '--NOT', '2016-03-17', 'FEMALE', 'rini191191@gmail.com', '', NULL, NULL, NULL, NULL, '', NULL, 'user01.png', NULL, '2016-03-30 06:58:15', NULL, 0, 1, NULL, '', '', '', '', 'travel', '', '', NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'Main Storage', 2, 2, '', '', '', '0000000000', '', '', NULL, '', '2016-11-11', '', '', '', '', '', '', '', '', '', '', '', '2016-11-11 17:21:04', '2019-12-05 03:32:04', 10056, 1, '', '', '', '', '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '', '', '', '', '', '', '', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'TANMAY DAS', 2, 5, 'LATE KARTICK CHANDRA DAS', 'FATHER', NULL, '7890789234', 'AIIPD8335R', NULL, '2016-11-11', '--NOT', '2016-11-11', 'MALE', 'dastanmay1980@gmail.com', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-11 17:21:58', '2016-11-11 23:55:08', 10056, 10056, '', '', '', '', '', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'SURAJIT PAL', 2, 6, 'LATE SUDHIR PAL', 'FATHER', NULL, '9332155047', 'BBMPP4998J', NULL, '2016-11-12', '--NOT', '2016-11-11', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-11 17:23:21', '2016-11-12 00:02:56', 10056, 10056, '', '', '', '', '', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'SANDIP BISWAS', 4, 48, 'NIMAI CHANDRA BISWAS', 'FATHER', NULL, '9932486524', '', NULL, '2016-11-15', '--NOT', '2016-12-15', 'MALE', 'BISWASSANDIP276@GMAIL.COM', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-11 17:34:59', '2016-12-23 21:03:35', 10056, 10056, '', 'UBI', 'CHANDPARA BAZAR', '0140010114619', '', '', NULL, '', '', '', 0, '', '', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, 'TANUSRI MONDAL', 2, 49, 'NRIPENDU MONDAL', 'FATHER', NULL, '9332193241', 'BAAPM3643L', NULL, '2016-11-30', '--NOT', '2016-11-30', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-11 17:50:52', '2016-12-23 21:08:11', 10056, 10056, '', 'SBI', 'AHMEDPUR', '31904493307', 'SBIN0002002', '', NULL, '', '', '', 0, '', '', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, 'SOUMEN DEY', 2, 2, 'LAKSHMAN DEY', 'FATHER', NULL, '9007876330', 'AFSPD9517L', NULL, '2016-11-11', '--NOT', '2016-11-11', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-11 17:54:37', '2016-11-11 23:24:37', 10056, 10056, '', 'SBI', 'GOURHATI', '34748782439', '', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, 'SUBHAS CHANDRA MAHANTA', 2, 8, 'SUBAL CHANDRA MAHANTA', 'FATHER', NULL, '9062361545', 'ATRPM5264A', NULL, '2016-11-12', '--NOT', '2016-11-11', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-11 17:56:49', '2016-11-12 00:36:06', 10056, 10056, '', 'SBI', 'MANKUNDU', '11456172301', '', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, 'NETAI PRAMANIK', 2, 9, 'RATI KANTA PRAMANIK', 'FATHER', NULL, '9126884883', 'BAFPP4523B', NULL, '2016-11-12', '--NOT', '2016-11-11', 'MALE', 'PRAMANIKNETAI007@GMAIL.COM', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-11 17:58:57', '2016-11-12 00:39:02', 10056, 10056, '', '', '', '', '', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, 'TAPAN KUMAR MAJHI', 2, 10, 'SUKUMAR MAJHI', 'FATHER', NULL, '8768717020', 'AIIQR9331R', NULL, '2016-11-12', '--NOT', '2016-11-11', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-11 18:00:13', '2016-11-12 00:41:09', 10056, 10056, '', '', '', '', '', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, 'SUBHAS BHAUMIK', 2, 11, 'LT JUGAL BHAUMIK', 'FATHER', NULL, '8820417960', 'AXSPB2770R', NULL, '2016-11-12', '--NOT', '2016-11-11', 'MALE', 'subhasbhoumik1969@gmail.com', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-11 18:02:03', '2016-11-12 00:44:26', 10056, 10056, '', 'BANK OF INDIA', 'ARAMBAG', '429710100001399', '', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, 'DEBASISH CHATTERJEE', 2, 12, 'MAKHANLAL CHATTERJEE', 'FATHER', NULL, '9062361545', 'ASTPS9331F', NULL, '2016-11-12', '--NOT', '2016-11-11', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-11 18:04:54', '2016-11-12 00:46:31', 10056, 10056, '', '', '', '', '', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(14, 'KAMAL KANTI DEY', 2, 13, '', 'FATHER', NULL, '7998017917', '', NULL, '2016-11-12', '--NOT', '2016-11-11', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-11 18:05:49', '2016-11-12 00:47:53', 10056, 10056, '', '', '', '', '', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(15, 'SURAJIT PAL', 2, 14, '', 'FATHER', NULL, '7998017917', 'CWIPP8735R', NULL, '2016-11-12', '--NOT', '2016-11-11', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-11 18:06:51', '2016-11-12 00:49:10', 10056, 10056, '', '', '', '', '', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(16, 'BIMAL KANTI DEY', 2, 15, 'SUDHIR KUMAR DEY', 'FATHER', NULL, '7998017917', 'AOVPD8598R', NULL, '2016-11-12', '--NOT', '2016-11-11', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-11 18:08:41', '2016-11-12 00:52:19', 10056, 10056, '', 'ORIENTAL BANK OF COMMERCE', 'CHANDAN NAGAR', '19732191023572', 'ORBC0101973', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(17, 'MADHAB CHANDRA DOLAI', 2, 86, 'LATE GAJENDRA NATH DOLAI', 'FATHER', NULL, '9830597068', 'AISPD5550C', NULL, '2016-11-16', '--NOT', '2016-11-11', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-11 18:15:52', '2016-11-16 19:56:52', 10056, 10056, '', 'SBI', 'MANKUNDU', '34629706351', 'SBIN0006772', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(18, 'HIRALAL ROY', 2, 87, 'P.K. ROY', 'FATHER', NULL, '9051487748', '', NULL, '2016-11-16', '--NOT', '2016-11-11', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-11 18:17:17', '2016-11-16 19:59:28', 10056, 10056, '', '', '', '', '', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(19, 'SIKHA MAJI', 2, 7, 'SURJA SEKHAR MAJI', 'FATHER', NULL, '9647573025', '', NULL, '2016-12-21', '--NOT', '2016-11-12', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-11 18:59:50', '2016-12-21 21:12:36', 10056, 10056, '', 'PNB', 'BHASTRA,HOOGHLY', '1167000100172224', 'PUNB0116700', '', NULL, '', '', '', 0, '', '', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(20, 'DEBABRATA DAS', 2, 17, '', 'FATHER', NULL, '9475904041', 'AXSPD6386K', NULL, '2016-11-12', '--NOT', '2016-11-12', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-11 20:00:22', '2016-11-12 21:03:06', 10056, 10056, '', 'MAHANAD CENTRAL BANK OF INDIA', 'NAGARPARA', '3285982614', 'CBIN0282856', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(21, '', 0, 0, 'HARADHAN DAS', 'FATHER', NULL, '9733691341', 'BLOPD1865Q', NULL, '2016-11-12', '--NOT', '2016-11-22', 'MALE', '', NULL, NULL, NULL, NULL, '', '', 'images/member', 'user01.png', '11', '2016-11-12 15:38:34', '2018-12-10 09:09:08', 10056, 1, '', 'PASCHIM BANGA GRAMIN BANK', 'MOLOYPUR', '11050100001939', 'UCBAQRRBPBG', '', NULL, '', '', '', 0, '', '', NULL, 0, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, '                                     ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(22, 'ACHINTA KUMAR GHOSH', 2, 19, 'LATE JAGANNATH GHOSH', 'FATHER', NULL, '9564772027', 'AVOPG8358H', NULL, '2016-11-12', '--NOT', '2016-11-12', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-12 15:43:45', '2016-11-12 21:13:45', 10056, 10056, '', 'CORPORATION BANK', 'KIRANAHAR BAZAR', '143500101000130', 'CORP0001435', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(23, 'TAPAN KUMAR GHOSH', 2, 20, 'LATE DEBENDRA NATH GHOSH', 'FATHER', NULL, '9932542426', 'AHWPG9231E', NULL, '2016-11-12', '--NOT', '2016-11-12', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-12 15:49:54', '2016-11-12 21:19:54', 10056, 10056, '', 'UCO BANK', 'JIRAT', '06030110032077', 'UCBA0000603', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(24, 'ATUL BHATTACHARYA', 2, 2, '', 'FATHER', NULL, '9231265066', '', NULL, '2016-11-12', '--NOT', '2016-11-22', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-12 15:54:58', '2016-12-20 21:53:37', 10056, 10056, '', 'SBI 		', 'BANKRA', '32248961545', 'SBIN0012431', '', NULL, '', '', '', 0, '', '', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(25, 'SOMNATH DHAK', 2, 21, 'LATE PASUPATI DHAK', 'FATHER', NULL, '8017756875', 'ARFPD9322E', NULL, '2016-11-12', '--NOT', '2016-11-12', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-12 16:02:01', '2016-11-12 21:32:01', 10056, 10056, '', 'UBI', 'UTBI0SIN254', '0162010313476', 'SINGUR', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(26, 'PRODYUMNA KUMAR GHOSH', 2, 22, 'LATE BISHNUPADA GHOSH', 'FATHER', NULL, '9831398039', 'APSPG1415Q', NULL, '2016-11-12', '--NOT', '2016-11-12', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-12 16:07:21', '2016-11-12 21:37:21', 10056, 10056, '', 'SBI', 'DOMJUR', '30736967966', 'SBIN0004783', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(27, 'TRIBHUVAN SINGH', 2, 23, 'SHIV KUMAR SINGH', 'FATHER', NULL, '8726367766', 'BJOPS6847N', NULL, '2016-11-12', '--NOT', '2016-11-12', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-12 16:11:06', '2016-11-12 21:41:40', 10056, 10056, '', 'SBI', 'KANPUR', '20033491296', 'SBIN0009023', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(28, 'FREEDOM OF INDIA', 2, 2, '', 'FATHER', NULL, '9647573025', '', NULL, '2016-11-12', '--NOT', '2016-11-12', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-12 16:13:47', '2016-11-12 21:43:47', 10056, 10056, '', '', '', '', '', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(29, 'MD NAZIR HUSSAIN', 2, 2, 'S.HAQUE', 'FATHER', NULL, '7890732589', '', NULL, '2016-11-12', '--NOT', '2016-11-12', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-12 16:21:03', '2016-11-12 21:51:03', 10056, 10056, '', '', '', '', '', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(30, 'MD AKTARUL HOQUE', 2, 24, 'MD EBRAHIM', 'FATHER', NULL, '9733371488', 'AICPH4015Q', NULL, '2016-11-12', '--NOT', '2016-11-12', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-12 16:26:58', '2016-11-12 21:56:58', 10056, 10056, '', 'SBI', 'ARAPUR', '32883940917', 'SBIN0007088', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(31, 'BHIMA PAIK', 2, 25, 'LATE ISWAR PAIK', 'FATHER', NULL, '9331761798', 'BEOPP3572H', NULL, '2016-11-12', '--NOT', '2016-11-12', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-12 16:34:29', '2016-11-12 22:04:29', 10056, 10056, '', '', '', '', '', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(32, 'SUDAMA SHAW', 2, 26, 'LATE B. SHAW', 'FATHER', NULL, '9330054746', '', NULL, '2016-11-12', '--NOT', '2016-11-12', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-12 16:38:32', '2016-11-12 22:08:32', 10056, 10056, '', 'SBI', 'RISHRA', '10410234053', 'SBIN0001771', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(33, 'SANJIT KUMAR SHAW', 2, 27, 'JAGLAL SHAW', 'FATHER', NULL, '8820305530', 'CSOPS1832G', NULL, '2016-11-12', '--NOT', '2016-11-12', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-12 16:43:52', '2016-11-12 22:13:52', 10056, 10056, '', 'CANARA BANK', 'RISHRA', '5001101003208', 'CNRB0005001', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(34, 'PRAMOD KUMAR GUPTA', 2, 28, 'R.K. GUPTA', 'FATHER', NULL, '9044228822', 'AHMPG9090P', NULL, '2016-11-12', '--NOT', '2016-11-12', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-12 16:49:09', '2016-11-12 22:19:09', 10056, 10056, '', 'HDFC BANK', 'KANPUR', '02901050031441', 'HDFC0000298', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(35, 'UTTARA GHOSH', 2, 29, 'PRODYUMNA KUMAR GHOSH', 'FATHER', NULL, '9836576435', '', NULL, '2016-11-12', '--NOT', '2016-11-12', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-12 16:54:37', '2016-11-12 22:24:37', 10056, 10056, '', 'UBI', 'DOMJUR', '0178010438353', 'UTBI0DOM247', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(36, 'SUKHENDU KHANRAH', 2, 30, 'LATE NEPAL CHANDRA KHANRAH', 'FATHER', NULL, '9038472376', 'ARVPK6727C', NULL, '2016-11-12', '--NOT', '2016-11-12', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-12 16:58:57', '2016-11-12 22:28:57', 10056, 10056, '', 'IDBI', 'DOMJUR', '1013104000001847', 'IBKL0001013', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(37, 'SATYANARAYAN GHOSH', 2, 31, 'SACHINDRANATH GHOSH', 'FATHER', NULL, '9007300627', 'BEFPG3956M', NULL, '2016-11-12', '--NOT', '2016-11-12', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-12 17:03:42', '2016-11-12 22:33:42', 10056, 10056, '', 'SBI', 'JIRAT BUS STAND', '20203070376', 'SBIN0014090', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(38, 'HUSNARA BIBI', 2, 32, 'MD ABRAHIM', 'FATHER', NULL, '9733273507', 'CAUPB0305H', NULL, '2016-11-12', '--NOT', '2016-11-12', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-12 17:11:31', '2016-11-12 22:49:41', 10056, 10056, '', 'SBI', 'BALUPURHAT', '11888590439', '', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(39, 'OSMAN ABDUL GANI', 2, 33, 'LATE SAYEDUR RAHAMAN', 'FATHER', NULL, '7076979582', '', NULL, '2016-11-12', '--NOT', '2016-11-12', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-12 17:18:04', '2016-11-12 22:48:35', 10056, 10056, '', '', '', '', '', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(40, 'RAJIB SANTRA', 2, 34, 'LATE HORIMOHON SANTRA', 'FATHER', NULL, '8016151806', '', NULL, '2016-11-12', '--NOT', '2016-11-12', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-12 17:37:48', '2016-11-12 23:07:48', 10056, 10056, '', 'PACHIM BANGA GRAMIN BANK', 'MOLOYPUR', '1150100001820', 'UCBARRBPBG', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(41, 'HAZRAT ALI ANSARI', 2, 35, 'AHAMMED ANSARI', 'FATHER', NULL, '9593957239', '', NULL, '2016-11-12', '--NOT', '2016-11-12', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-12 17:41:43', '2016-11-12 23:11:43', 10056, 10056, '', 'BANK OF INDIA', 'GAZOLE', '432310110001228', 'BKID004323', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(42, 'SWAPAN MONDAL', 2, 36, 'LATE SUDARSHAN MONDAL', 'FATHER', NULL, '9830354107', 'AERPM6235L', NULL, '2016-11-12', '--NOT', '2016-11-22', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-12 17:51:04', '2016-12-23 21:11:21', 10056, 10056, '', 'UCO BANK', 'JAGADISH PUR', '12740100000837', 'UCBA0001274', '', NULL, '', '', '', 0, '', '', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(43, 'SULEKHA MONDAL', 2, 37, 'SWAPAN MONDAL', 'FATHER', NULL, '9831867890', 'AQFPM5006P', NULL, '2016-12-20', '--NOT', '2016-11-22', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-12 17:53:31', '2016-12-23 21:11:47', 10056, 10056, '', 'SBI ', 'JAGADISHPUR', '10869775125', 'SBIN0012430', '', NULL, '', '', '', 0, '', '', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(44, 'AFSAR ALI KHAN', 2, 38, 'SOFIUDDIN ALI KHAN', 'FATHER', NULL, '9609652866', 'BETPK8917E', NULL, '2016-11-12', '--NOT', '2016-11-22', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-12 17:58:06', '2016-12-23 21:12:04', 10056, 10056, '', 'UBI', 'SHYAMPUR', '2070010036670', 'UTBI0SYMY15', '', NULL, '', '', '', 0, '', '', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(45, 'AKLIMA KHATUN', 2, 39, 'SOFIUDDIN ALI KHAN', 'FATHER', NULL, '9609652866', '', NULL, '2016-12-20', '--NOT', '2016-11-12', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-12 18:00:47', '2016-12-20 23:49:01', 10056, 10056, '', 'UBI', 'SHYAMPUR', '2070010030737', 'UTBI0SYMY15', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(46, 'NILAVA GHOSH', 2, 20, 'TAPAN KUMAR GHOSH', 'FATHER', NULL, '7602817025', 'BDMPG3220L', NULL, '2016-11-22', '--NOT', '2016-11-22', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-12 18:05:16', '2016-12-23 21:13:52', 10056, 10056, '', 'UCO', 'JIRAT', '06030110045688', 'UCBA0000603', '', NULL, '', '', '', 0, '', '', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(47, 'FULESWARI MUKHARJEE', 2, 88, 'RAMAPROSAD MUKHARJEE', 'FATHER', NULL, '8337072953', 'AQQPM4112R', NULL, '2016-11-16', '--NOT', '2016-11-12', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-12 18:12:43', '2016-11-16 20:05:49', 10056, 10056, '', 'SBI', 'BHADRESWAR', '30382259433', 'SBIN0002021', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(48, 'CHHABI KHATUN', 2, 41, 'AFSAR ALI KHATUN', 'FATHER', NULL, '9609652866', '', NULL, '2016-11-13', '--NOT', '2016-11-13', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-12 18:35:13', '2016-11-13 00:05:13', 10056, 10056, '', 'UBI', 'SHYAMPUR', '2070010052854', 'UTBIOSYMY15', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(49, 'MD IMROZ', 2, 42, 'MD AKHTAR', 'FATHER', NULL, '9831716656', 'AAVPI8265L', NULL, '2016-11-15', '--NOT', '2016-11-15', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-15 15:50:52', '2016-11-15 21:20:52', 10056, 10056, '', 'HDFC BANK', 'STEPHEN HOUSE', '00081330013418', 'HDFC0000008', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(50, 'DILIP KUMAR RAMANI', 2, 43, 'CHEDI RAMANI', 'FATHER', NULL, '9931736932', 'ATUPR5145G', NULL, '2016-11-15', '--NOT', '2016-11-15', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-15 15:54:38', '2016-11-15 21:24:38', 10056, 10056, '', 'UCO BANK', 'BARHARWA', '03680100006064', 'UCBA0000368', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(51, 'SOMA ROY', 2, 44, 'BHAJAN ROY', 'FATHER', NULL, '9231970759', 'BDRPR7909G', NULL, '2016-11-15', '--NOT', '2016-11-15', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-15 16:00:01', '2016-11-15 21:30:01', 10056, 10056, '', 'BANK OF INDIA', 'BAMANGACHHI', '438310110002032', 'BKID0004383', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(52, 'BHAJAN ROY', 2, 45, 'LATE JITENDRA ROY', 'FATHER', NULL, '9231970759', 'AGRPR1366B', NULL, '2016-11-15', '--NOT', '2016-11-15', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-15 16:03:48', '2016-11-15 21:33:48', 10056, 10056, '', 'BANK OF INDIA', 'BAMANGACHHI', '438310110009078', 'BKID0004383', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(53, 'DILIP KUMAR DUTTA', 2, 46, 'LATE K.L.DUTTA', 'FATHER', NULL, '9331085974', 'AHGPD7301N', NULL, '2016-11-15', '--NOT', '2016-11-15', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-15 16:07:43', '2016-11-15 21:37:43', 10056, 10056, '', 'SBI', '4A PAGLADANGA 1ST LANE', '20122376261', 'SBIN0008761', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(54, 'MD NAZIR HUSSAAIN', 2, 149, 'SAMSUL HAQUE', 'FATHER', NULL, '7890732589', '', NULL, '1983-02-20', '--NOT', '2016-11-15', 'MALE', 'mdnazir123@gmail.com', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-15 16:32:34', '2016-11-25 07:08:01', 10056, 10056, '', '', '', '', 'UTIB0000545', '', NULL, '', '', '', 0, '', '', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(55, 'SWAPNA BISWAS', 2, 47, 'SANDIP BISWAS', 'FATHER', NULL, '9933001565', 'CFGPB2858J', NULL, '2016-11-15', '--NOT', '2016-11-15', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-15 17:20:34', '2016-11-15 23:02:46', 10056, 10056, '', '', '', '', '', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(56, 'PARTHA BHOWMICK', 2, 50, 'LATE BIRENDRA CHANDRA BHOWMICK', 'FATHER', NULL, '7076857034', 'AQJPB8966B', NULL, '2016-11-15', '--NOT', '2016-11-15', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-15 17:36:59', '2016-11-15 23:06:59', 10056, 10056, '', 'UBI', 'CHANDPARA', '', '', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(57, 'RAJU BAIRAGI', 2, 51, 'PARIMAL BAIRAGI', 'FATHER', NULL, '9153386303', 'CETPB5293M', NULL, '2016-11-15', '--NOT', '2016-11-15', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-15 17:41:57', '2016-11-15 23:11:57', 10056, 10056, '', 'UBI', 'CHANDPARA', '0140010367677', 'UTBI0CPA297', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(58, 'BISWA NATH BOSE', 2, 52, 'LATE JITENDRA NATH BOSE', 'FATHER', NULL, '9851583306', 'AWAPB9899E', NULL, '2016-11-15', '--NOT', '2016-11-15', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-15 17:46:30', '2016-11-15 23:16:30', 10056, 10056, '', 'SBI', 'HABRA', '35889152974', 'SBIN0001643', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(59, 'SWAPNA BOSE', 2, 53, 'BISWANATH BOSE', 'FATHER', NULL, '7384394160', 'CBUPB0280L', NULL, '2016-11-15', '--NOT', '2016-11-15', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-15 17:49:25', '2016-11-15 23:20:00', 10056, 10056, '', 'BANK OF INDIA', 'HABRA', '29680100011331', 'BARBOHABRAX', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(60, 'NANDITA BISWAS', 2, 54, 'AJIT BISWAS', 'FATHER', NULL, '9088990360', 'BFCPB0445Q', NULL, '2016-11-15', '--NOT', '2016-11-22', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-15 17:53:40', '2016-12-23 21:10:25', 10056, 10056, '', 'ICICI BANK', 'HABRA', '161301504512', 'ICIC0001613', '', NULL, '', '', '', 0, '', '', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(61, 'SANJAY BISWAS', 2, 55, 'GOBINDA BISWAS', 'FATHER', NULL, '7797978128', 'AUCPB6353P', NULL, '2016-11-15', '--NOT', '2016-11-22', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-15 17:57:32', '2016-12-23 21:10:11', 10056, 10056, '', 'ICICI BANK', 'HABRA', '161301505052', 'ICIC0001613', '', NULL, '', '', '', 0, '', '', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(62, '', 0, 0, 'NAGENDRA NATH BISWAS', 'FATHER', NULL, '7063569607', '', NULL, '2016-12-20', '--NOT', '2016-11-22', 'MALE', '', NULL, NULL, NULL, NULL, '', '', 'images/member', 'user01.png', '11', '2016-11-15 18:01:17', '2018-12-10 09:04:04', 10056, 1, '', 'SBI ', 'CHANDPARA', '11219726295', 'SBIN0006046', '', NULL, '', '', '', 0, NULL, '', NULL, 0, NULL, '', '', NULL, NULL, NULL, NULL, NULL, '                                     ', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(63, 'PARVINA KHATUN MONDAL', 2, 2, '', 'FATHER', NULL, '8436161646', 'DCNPM03783', NULL, '2016-11-15', '--NOT', '2016-11-15', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-15 18:07:41', '2016-11-15 23:37:41', 10056, 10056, '', 'BANDHAN BANK', '', '50160005877825', '', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(64, 'MADHAB CHANDRA DAS', 2, 57, 'LATE  NAREN CHANDRA DAS', 'FATHER', NULL, '7477548429', 'BCIPD8506P', NULL, '2016-11-15', '--NOT', '2016-11-15', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-15 18:13:39', '2016-11-15 23:43:39', 10056, 10056, '', 'UBI', 'BONGAON', '0125013342323', 'UTBI0BNN256', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(65, 'ASHISH KUMAR SARKAR', 2, 58, 'BROJABIHARI SARKAR', 'FATHER', NULL, '7872845572', '', NULL, '2016-11-15', '--NOT', '2016-11-15', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-15 18:17:09', '2016-11-15 23:47:37', 10056, 10056, '', '', '', '', '', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(66, 'SHEELA BISWAS', 2, 59, 'ATUL CHANDRA BISWAS', 'FATHER', NULL, '9002782976', 'BQVPB4749R', NULL, '2016-11-16', '--NOT', '2016-11-22', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-15 18:22:45', '2016-12-23 21:08:51', 10056, 10056, '', 'UBI', 'CHANDPARA', '0140010505932', '', '', NULL, '', '', '', 0, '', '', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(67, 'BAPI CHOWDHURY', 2, 60, 'LATE SATISH  CHANDRA CHOWDHURY', 'FATHER', NULL, '9563232063', '', NULL, '2016-11-15', '--NOT', '2016-11-15', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-15 18:28:21', '2016-11-15 23:58:21', 10056, 10056, '', '', '', '', '', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(68, 'JAKIR HOSSAIN MONDAL', 2, 61, 'MOJER MONDAL', 'FATHER', NULL, '9681297936', 'AXXPM0120D', NULL, '2016-11-15', '--NOT', '2016-11-15', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-15 18:34:52', '2016-11-16 00:04:52', 10056, 10056, '', 'SBI', 'CHANDPARA', '31945084034', 'SBIN0006046', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(69, 'SAMIR KUMAR ROY', 2, 62, 'SRI SANTOSH KUMAR ROY', 'FATHER', NULL, '8759538042', 'AOWPR9757F', NULL, '2016-11-16', '--NOT', '2016-11-16', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-15 18:40:19', '2016-11-16 00:10:19', 10056, 10056, '', 'SBI', 'CHANDPARA', '30347238084', 'SBIN0006046', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(70, 'PRIYANKA DUTTA', 2, 63, 'KASHINATH DUTTA', 'FATHER', NULL, '9932946939', 'AQXPD4231F', NULL, '2016-12-20', '--NOT', '2016-12-05', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-15 18:45:24', '2016-12-23 21:01:36', 10056, 10056, '', 'BANK OF INDIA  ', 'KHANTURA', '433010100019573', 'SBIN0008766', '', NULL, '', '', '', 0, '', '', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(71, 'ASHIT KUMAR BISWAS', 2, 64, 'LATE DASHURATHI BISWAS', 'FATHER', NULL, '7557081503', 'AMVPB9211D', NULL, '2016-11-16', '--NOT', '2016-11-16', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-15 18:50:32', '2016-11-16 00:20:32', 10056, 10056, '', 'SBI', 'BAGULA ', '11262316254', 'SBIN0001302', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(72, 'MANAS RANJAN DATTA', 2, 65, 'LATE NANDA DULAL DATTA', 'FATHER', NULL, '9732759357', 'PKQPD7768F', NULL, '2016-11-16', '--NOT', '2016-11-16', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-15 18:56:14', '2016-11-16 00:26:14', 10056, 10056, '', 'SBI', 'RANAGHAT', '11331333125', 'SBIN000166', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(73, 'KRISHNA BISWAS', 2, 66, 'LATE SURYA BISWAS', 'FATHER', NULL, '9270195895', 'BNAPB7684M', NULL, '2016-11-16', '--NOT', '2016-11-22', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-15 18:59:57', '2016-12-23 21:10:40', 10056, 10056, '', 'SBI', 'RANAGHAT,NADIA', '36064058428', 'SBIN000166', '', NULL, '', '', '', 0, '', '', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(74, 'ASHOK KUMAR SARKAR', 2, 67, 'LATE MANINDRA NATH SARKAR', 'FATHER', NULL, '9647083839', 'DKOPS5049N', NULL, '2016-11-16', '--NOT', '2016-11-16', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-15 19:07:02', '2016-11-16 00:37:02', 10056, 10056, '', 'SBI', 'CHANDPARA BAZAR', '11219725815', 'SBIN0006046', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(75, 'BAPPADITYA ROY', 2, 68, 'LATE ANANDA ROY', 'FATHER', NULL, '9932942357', 'ALEPR7283B', NULL, '2016-11-16', '--NOT', '2016-11-16', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-15 19:12:37', '2016-11-16 00:42:37', 10056, 10056, '', 'UBI', 'CHANDPARA BAZAR', '0140010117112', 'UTBIOCPA297', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(76, 'SAGAR ROY', 2, 69, 'SANTOSH KUMAR ROY', 'FATHER', NULL, '9800737837', 'ARNPR1863Q', NULL, '2016-11-16', '--NOT', '2016-11-16', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-15 19:16:21', '2016-11-16 00:46:21', 10056, 10056, '', 'SBI', 'THAKURNAGAR', '30847167849', 'SBIN0010419', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(77, 'DOLON KANTI TIKADAR', 2, 70, 'NIRANJAN TIKADAR', 'FATHER', NULL, '7890874762', 'AIJPT0277F', NULL, '2016-11-16', '--NOT', '2016-11-16', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-15 19:21:20', '2016-11-16 00:51:20', 10056, 10056, '', 'BANK OF INDIA', 'BAGULA', '429410110007085', 'BKID0004294', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(78, 'PRAVASH  CHAKRABORTY', 2, 71, 'PROMOD CHAKRABORTY', 'FATHER', NULL, '9474987804', 'AGRPC2109B', NULL, '2016-11-16', '--NOT', '2016-11-16', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-15 19:26:08', '2016-11-16 00:56:08', 10056, 10056, '', 'SBI', 'CHANDPARA BAZAR', '11219752850', 'SBIN0006046', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(79, 'NITA SAHA', 2, 72, 'LATE JUGAL KISHORE SAHA', 'FATHER', NULL, '8759930319', 'GNYPSI255N', NULL, '2016-11-16', '--NOT', '2016-11-16', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-15 19:37:29', '2016-11-16 01:08:31', 10056, 10056, '', 'UBI', 'CHANDPARA', '0140010492652', 'UTBICPA297', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(80, 'ASHIS HOWLADER', 2, 73, 'LATE ATUL KRISHNA HOWLADER', 'FATHER', NULL, '7076812712', 'AGPPH7502R', NULL, '2016-11-16', '--NOT', '2016-11-16', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-15 19:45:04', '2016-11-16 01:15:04', 10056, 10056, '', 'UBI', 'CHANDPARA', '0140010523851', 'UTBIOCPA297', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(81, 'DEBASISH DAS', 2, 74, 'SRINIBASH DAS', 'FATHER', NULL, '7602200219', 'AKEPD3701F', NULL, '2016-11-16', '--NOT', '2016-11-16', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-15 19:48:53', '2016-11-16 01:18:53', 10056, 10056, '', 'ALLAHABAD BANK', 'CHALKI', '21802719697', 'ALLA0211497', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(82, 'PAYEL DEY', 2, 75, 'BIDYUT DEY', 'FATHER', NULL, '9804223510', 'CKJPD1605F', NULL, '2016-11-16', '--NOT', '2016-11-16', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-15 19:51:55', '2016-11-16 01:21:55', 10056, 10056, '', '', '', '', '', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(83, 'DULAL ROY', 2, 2, 'SUPADA ROY', 'FATHER', NULL, '9732414275', 'AORPR1119N', NULL, '2016-11-16', '--NOT', '2016-12-22', 'MALE', '', NULL, NULL, NULL, NULL, '', '', 'images/member', 'user01.png', '11', '2016-11-15 20:06:41', '2018-11-28 16:35:12', 10056, 1, '', 'BANK OF INDIA', 'KHOLAPOTA', '422918210000590', '', '', NULL, '', '', '', 0, '', '', NULL, 0, NULL, '', '', NULL, NULL, NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(84, 'AJIT  KUMAR SARKAR', 2, 77, 'TARAK NATH SARKAR', 'FATHER', NULL, '8535874430', '', NULL, '2016-11-16', '--NOT', '2016-11-16', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-15 20:08:32', '2016-11-16 01:38:32', 10056, 10056, '', '', '', '', '', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(85, 'BIMAL SARKAR', 2, 78, 'TARAK CHANDRA SARKAR', 'FATHER', NULL, '8159016789', '', NULL, '2016-11-16', '--NOT', '2016-11-16', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-15 20:13:09', '2016-11-16 01:43:09', 10056, 10056, '', 'SBI', 'NAGARUKHRA', '31196127502', 'SBIN0012372', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(86, 'GOBINDA MONDAL', 2, 79, 'LATE MONOHAR MONDAL', 'FATHER', NULL, '9733580615', 'AMAPM5110H', NULL, '2016-11-16', '--NOT', '2016-11-16', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-15 20:19:43', '2016-11-16 01:49:43', 10056, 10056, '', 'SBI', 'BADURIA', '20024333057', '', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(87, 'RABI BAIDYA', 2, 80, 'CHANDRA KANTA BAIDYA', 'FATHER', NULL, '9088973976', 'AVOPB6536B', NULL, '2016-11-16', '--NOT', '2016-11-16', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-15 20:23:08', '2016-11-16 01:53:08', 10056, 10056, '', 'SBI', 'DUMDUM', '10161130634', 'SBIN0001895', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(88, 'BIBEKANANDA BISWAS', 2, 81, 'LATE CHARUCHANDRA BISWAS', 'FATHER', NULL, '9933979887', 'ANPPB8439C', NULL, '2016-11-16', '--NOT', '2016-11-16', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-15 20:26:53', '2016-11-16 01:56:53', 10056, 10056, '', 'SBI', 'CHANDPARA', '11219728011', 'SBIN0006046', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_pd` (`ID`, `Name`, `AddressID`, `LocalAddressID`, `GurdianName`, `GurdianRelation`, `SpouseName`, `ContactNo`, `PAN`, `VAT`, `DOB`, `Age`, `DOJ`, `Gender`, `Email`, `Website`, `EPFNo`, `ESINo`, `PassportNo`, `Country`, `AadhaarNo`, `Path`, `Image`, `ImageID`, `CreateTime`, `ModifyTime`, `CreatedBy`, `ModifiedBy`, `Description`, `BankName`, `BankBranch`, `AccountNo`, `BANKCODE`, `Occupation`, `Fax`, `VoterID`, `area_operation`, `BankAccountType`, `OLDID`, `MaritalStatus`, `Education`, `Nationality`, `AnnualIncome`, `TagLine`, `TEL`, `State`, `CIN`, `TAN`, `CST`, `TIN`, `GST`, `MAP`, `WhatsApp`, `DesignationID`, `Religion`, `FatherName`, `FatherEducation`, `FatherOccupation`, `MotherName`, `MotherEducation`, `MotherOccupation`, `Dependents`, `GurdianOccupation`, `PreviousSchool`, `PreviousClass`, `ReasonOfLeaving`, `BirthMark`, `AnyDisease`, `DiseasePeriod`, `Disease`, `DiseasePrecaution`, `AdmissionClass`, `AdmissionAge`, `AdmissionDate`) VALUES
(89, 'SAJAL ROY', 2, 82, 'LATE NANI GOPAL ROY', 'FATHER', NULL, '7407195493', 'AMFPR3599A', NULL, '2016-11-16', '--NOT', '2016-11-16', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-15 20:31:20', '2016-11-16 02:01:20', 10056, 10056, '', 'SBI', 'DURGAPUR', '34006890073', 'SBIN0007337', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(90, 'BIDHU BHUSAN MANDAL', 2, 83, 'SHAMPA MONDAL', 'FATHER', NULL, '8436668416', 'AKJPM7077Q', NULL, '2016-11-16', '--NOT', '2016-11-16', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-15 20:36:58', '2016-11-16 02:06:58', 10056, 10056, '', 'SBI', 'BADURIA', '20343713536', 'SBIN0002005', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(91, 'SHASHANKA SARKAR', 2, 84, 'SATISH SARKAR', 'FATHER', NULL, '9733770101', 'FVEPS1013M', NULL, '2016-11-16', '--NOT', '2016-11-22', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-15 20:47:28', '2016-12-23 21:09:21', 10056, 10056, '', 'IDBI', 'BONGAON', '1467104000059574', 'IBKL0001467', '', NULL, '', '', '', 0, '', '', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(92, 'TAPAN KUMAR DUTTA', 2, 2, '', 'FATHER', NULL, '9476120690', '', NULL, '2016-11-30', '--NOT', '2016-11-16', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-16 14:20:13', '2016-11-30 06:38:43', 10056, 10056, '', 'UCO', 'PANIHATI', '01870110011522', 'UCBA0000187', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(93, 'ATANU LAHA', 2, 2, '', 'FATHER', NULL, '9903771292', '', NULL, '2016-11-16', '--NOT', '2016-11-16', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-16 14:44:03', '2016-11-16 20:14:03', 10056, 10056, '', '', '', '', '', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(94, 'REBA LAHA', 257, 257, 'ATANU LAHA', 'FATHER', NULL, '9038322282', '', NULL, '2016-11-22', '52 years', '2016-11-22', 'MALE', '', NULL, NULL, NULL, NULL, '', '', 'images/member', 'user01.png', '11', '2016-11-16 14:47:01', '2018-12-10 10:26:57', 10056, 1, '', 'SYNDICATE BANK', 'CHANDANNAGAR', '953372210004130', 'SYNB0009537', '', NULL, '', '', '', 0, NULL, '', NULL, 0, NULL, '', 'WB', NULL, NULL, NULL, NULL, NULL, '                                                                                                                                                                            sadsadasd                                                                     ', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(95, 'AMIT ADHIKARI', 2, 90, 'LATE MURARI MOHAN ADHIKARI', 'FATHER', NULL, '9836890397', '', NULL, '2016-11-16', '--NOT', '2016-11-16', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-16 14:51:03', '2016-11-16 20:21:03', 10056, 10056, '', '', '', '', '', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(96, 'POLLY GHOSH', 2, 91, 'SANKAR KUMAR GHOSH', 'FATHER', NULL, '9476120690', 'BOBPG3735E', NULL, '2016-11-16', '--NOT', '2016-11-16', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-16 14:59:00', '2016-11-16 20:29:00', 10056, 10056, '', 'IDBI BANK', 'SHANKCHURA', '1355104000052304', 'IBKL0001355', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(97, 'RINA DUTTA', 2, 92, 'LATE UPEN DUTTA', 'FATHER', NULL, '8599903297', 'AUXPO6452C', NULL, '2016-11-16', '--NOT', '2016-11-16', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-16 01:44:45', '2016-11-16 07:14:45', 10056, 10056, '', 'UCO', 'PANIHATI', '01870110010846', 'UCBA0000187', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(98, 'SATISH CHANDRA MAHATO', 2, 93, 'LATE BHUT NATH MAHATO', 'FATHER', NULL, '9801341157', 'AMCPM7037K', NULL, '2016-11-16', '--NOT', '2016-11-16', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-16 01:51:28', '2016-11-16 07:21:28', 10056, 10056, '', 'CANARA BANK', 'JAMSEDPUR', '2970101041907', 'CMRB0002970', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(99, 'PRAKASH BANERJEE', 2, 94, 'RAM KAMAL BANERJEE', 'FATHER', NULL, '9733854928', 'AYLPB7157J', NULL, '2016-11-16', '--NOT', '2016-11-16', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-16 01:55:17', '2016-11-16 07:25:17', 10056, 10056, '', 'SBI', 'PURULIA', '11377407798', 'SBIN0000160', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(100, 'SUNIL KUMAR PRAMANIK', 2, 95, 'LT. CHHUTU PRAMANIK', 'FATHER', NULL, '7004804091', 'CMFPP1028Q', NULL, '2016-11-16', '--NOT', '2016-11-16', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-16 01:59:00', '2016-11-16 07:29:00', 10056, 10056, '', '', '', '', '', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(101, 'HIRATAN KUMBHAKAR', 2, 96, 'SHRABAN', 'FATHER', NULL, '7004804091', '', NULL, '2016-11-16', '--NOT', '2016-11-16', 'MALE', 'hiratankumbhakar@gmail.com', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-16 02:05:37', '2016-11-16 07:35:37', 10056, 10056, '', 'BANK OF INDIA', 'GAMHARIA', '30050100000427', 'BARBAGAMHAR', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(102, 'NARESH PRASAD SAHU', 2, 97, 'SRI RATAN SAHU', 'FATHER', NULL, '9835512161', 'AWMPS5696N', NULL, '2016-11-16', '--NOT', '2016-11-16', 'MALE', 'nareshprasadsahu@gmail.com', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-16 02:19:08', '2016-11-16 07:49:08', 10056, 10056, '', 'BANK OF INDIA', 'CHOWKA', '453710100006766', 'BKID0004537', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(103, 'PRIYANKA ROY (BANERJEE)', 2, 94, 'PRAKASH BANERJEE', 'FATHER', NULL, '9733854928', 'ASOPR8575M', NULL, '2016-11-16', '--NOT', '2016-11-16', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-16 02:22:48', '2016-11-16 07:52:48', 10056, 10056, '', 'SBI', 'PURULIA TOWN', '34876255348', 'SBIN0010227', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(104, 'KABITA KUMARI', 2, 98, 'SUNIL KUMAR PRAMANIK', 'FATHER', NULL, '9334697128', 'DUDPK8443R', NULL, '2016-11-16', '--NOT', '2016-11-16', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-16 02:27:16', '2016-11-16 07:57:16', 10056, 10056, '', 'BANK OF INDIA', 'CHOWKA', '453718210000502', 'BKID0004537', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(105, 'DIPANKAR MONDAL', 2, 99, 'BISHNUPADA MONDAL', 'FATHER', NULL, '7407776372', 'BMBPM0878G', NULL, '2016-11-16', '--NOT', '2016-11-16', 'MALE', 'dipankarm@gmail.com', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-16 02:32:25', '2016-11-16 08:02:25', 10056, 10056, '', '', '', '', '', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(106, 'SUBRATA NARAYAN SEAL', 2, 100, 'LATE SATYENDRANATH SEAL', 'FATHER', NULL, '9143260756', 'AZXPS7283H', NULL, '2016-11-16', '--NOT', '2016-11-16', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-16 02:38:33', '2016-11-16 08:08:33', 10056, 10056, '', 'SBI', 'LADIES PARK BRANCH', '32431174287', 'SBIN0016632', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(107, 'RENUKA GHOSH', 2, 101, 'AJIT GHOSH', 'FATHER', NULL, '9734316525', 'AWZPG0508Q', NULL, '2016-11-23', '--NOT', '2016-11-16', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-16 02:44:01', '2016-11-23 06:58:55', 10056, 10056, '', 'IDBI', 'SHANKCHURA BAZAR', '1355104000070434', 'IBKL0001355', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(108, 'SANKAR KUMAR GHOSH', 2, 91, 'BISWNATH GHOSH', 'FATHER', NULL, '9734316525', 'AOOPG6122K', NULL, '2016-11-23', '--NOT', '2016-11-16', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-16 02:48:03', '2016-11-23 06:59:32', 10056, 10056, '', 'SBI', 'TAKI', '31085992325', 'SBIN0006867', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(109, 'BIPAD TARAN PAL', 2, 2, 'KANAILAL PAL', 'FATHER', NULL, '8001869419', 'AIHPP5551A', NULL, '2016-11-16', '--NOT', '2016-12-23', 'MALE', '', NULL, NULL, NULL, NULL, '', '', 'images/member', 'user01.png', '11', '2016-11-16 02:55:10', '2018-11-28 04:52:25', 10056, 1, '', 'SBI', 'DURGAPUR STEEL PLANT MAIN GATE', '30865687472', 'SBIN0000074', '', NULL, '', '', '', 0, '', '', NULL, 0, NULL, '', '', NULL, NULL, NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(110, 'PRATYUSH KUMAR PAL', 2, 102, 'BIPAD TARAN PAL', 'FATHER', NULL, '7477454314', 'DCNPP7068D', NULL, '2016-11-16', '--NOT', '2016-11-16', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-16 03:00:02', '2016-11-16 08:30:02', 10056, 10056, '', 'UBI', 'ANDAL', '1558010056391', 'UTBIOADLF67', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(111, 'KAKOLEE MONDAL', 2, 103, 'BIPAD TARAN PAL', 'FATHER', NULL, '7431003834', 'BVCPM4997C', NULL, '2016-11-16', '--NOT', '2016-11-22', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-16 03:07:44', '2016-12-23 21:08:35', 10056, 10056, '', 'SBI', 'PANAGARH', '33679958150', 'SBIN0003676', '', NULL, '', '', '', 0, '', '', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(112, 'BHOLA NATH MONDAL', 2, 104, 'RANJIT MONDAL', 'FATHER', NULL, '7431003834', 'BHPPM2452P', NULL, '2016-11-16', '--NOT', '2016-11-16', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-16 03:12:09', '2016-11-16 08:42:09', 10056, 10056, '', 'SBI', 'PANAGARH', '33679958150', '', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(113, 'TAPAN KUMAR DALAL', 2, 105, 'LATE KHANDU DALAL', 'FATHER', NULL, '7063715075', '', NULL, '2016-11-16', '--NOT', '2016-11-16', 'MALE', 'tkdalal68@gmail.com', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-16 03:17:57', '2016-11-16 08:47:57', 10056, 10056, '', '', 'ANDAL', '', '', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(114, 'MADHURI DALAL', 2, 102, 'AJIT KUMAR MONDAL', 'FATHER', NULL, '7098435129', '', NULL, '2016-11-16', '--NOT', '2016-11-16', 'MALE', 'tkdalal68@gmail.com', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-16 03:22:04', '2016-11-16 08:52:04', 10056, 10056, '', 'BANDHAN BANK', 'ANDAL, SRIRAMPUR,', '50160008075383', 'BDBL0001711', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(115, 'MALATI DALAL', 2, 106, 'TAPAN KUMAR DALAL', 'FATHER', NULL, '8670311403', 'CEUPD4838P', NULL, '2016-11-16', '--NOT', '2016-11-16', 'MALE', 'tkdalal68@gmail.com', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-16 03:26:32', '2016-11-16 08:56:32', 10056, 10056, '', 'BANDHAN BANK', 'SRIRAMPUR', '50160007544048', 'BDBL0001711', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(116, 'DEBDAS BANERJEE', 2, 107, 'ANANTA KUMAR BANERJEE', 'FATHER', NULL, '9800924668', 'AUCPB0672P', NULL, '2016-11-16', '--NOT', '2016-11-16', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-16 03:30:41', '2016-11-16 09:00:41', 10056, 10056, '', 'UBI', 'RANIGANJ', '0734010109685', 'UTBIORNJC05', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(117, 'DEBDAS BANERJEE', 2, 108, 'ANANTA KUMAR BANERJEE', 'FATHER', NULL, '9800924668', 'AUCPB0672P', NULL, '2016-11-16', '--NOT', '2016-11-16', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-16 03:32:32', '2016-11-16 09:04:30', 10056, 10056, '', 'UBI', 'RANIGANJ', '0734010109685', '', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(118, 'SOVAN PAUL', 2, 109, 'SRI RATHINDRA NATH PAUL', 'FATHER', NULL, '8609017555', 'ALEPP9463L', NULL, '2016-11-16', '--NOT', '2016-11-16', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-16 03:42:07', '2016-11-16 09:12:07', 10056, 10056, '', 'SBI', 'ANDAL', '31307541056', '', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(119, 'MITA PAUL', 2, 110, 'SOVAN PAUL', 'FATHER', NULL, '7031520281', '', NULL, '2016-11-16', '--NOT', '2016-11-16', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-16 03:44:14', '2016-11-16 09:14:14', 10056, 10056, '', '', '', '', '', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(120, 'SUSMITA MONDAL', 2, 111, 'DHARANI DHAR MONDAL', 'FATHER', NULL, '8900716637', 'ASQPM0961M', NULL, '2016-11-16', '--NOT', '2016-11-16', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-16 03:48:10', '2016-11-16 09:18:10', 10056, 10056, '', 'SBI', 'DURGAPUR', '31042517496', 'SBIN0007503', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(121, 'KRISHNA DAS PARAMANIK', 2, 0, 'DAYAMOY PARAMANIK', 'FATHER', NULL, '8001528661', 'APTPP9573K', NULL, '2016-11-16', '--NOT', '2016-11-16', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-16 03:56:06', '2016-11-16 09:26:06', 10056, 10056, '', 'SBI', 'DURGAPUR', '33952661431', 'SBIN0007503', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(122, 'MRITUNJOY BANERJEE', 2, 112, 'PRASANTA BANERJEE', 'FATHER', NULL, '9547405563', 'AQGPB5918G', NULL, '2016-11-22', '--NOT', '2016-11-22', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-16 04:00:26', '2016-12-23 21:13:38', 10056, 10056, '', 'SBI', 'ANDAL', '31943078215', 'SBIN00010222', '', NULL, '', '', '', 0, '', '', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(123, 'Mithun Saha', 2, 2, 'DHIRENDRANATH PAL', 'FATHER', NULL, '7063125844', 'AIKPP4259Q', NULL, '2016-11-16', '27', '2016-03-17', 'MALE', 'pratima@gmail.com', NULL, NULL, NULL, NULL, '', '', 'images/member', 'user01.png', '11', '2016-11-16 04:05:53', '2018-12-26 08:50:42', 10056, 1, '', 'BANDHAN BANK', 'SRIRAMPUR', '50160006608596', 'BDBL0001711', '', NULL, '', '', '', 0, '', '', NULL, 0, NULL, '9475380096', 'Wb', NULL, NULL, NULL, NULL, NULL, '', '9475380095', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(124, 'PARTHA SARATHI MANDAL', 2, 113, 'DHIRENDRANATH MANDAL', 'FATHER', NULL, '9635296768', 'BOMPM5947K', NULL, '2016-12-23', '--NOT', '2016-11-16', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-16 04:09:22', '2016-12-23 23:03:01', 10056, 10056, '', 'SBI', 'PAKHANNA, BANKURA', '33791674010', 'SBIN0015940', '', NULL, '', '', '', 0, '', '', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(125, 'SAMARESH MONDAL', 2, 114, 'LATE BHUTNATH MONDAL', 'FATHER', NULL, '9851313862', 'AKGPM9962R', NULL, '2016-12-09', '--NOT', '2016-11-22', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-16 04:15:51', '2016-12-23 21:12:52', 10056, 10056, '', 'BANDHAN BANK', 'DALURBANDH', '50160006627020', 'BDBL0001460', '', NULL, '', '', '', 0, '', '', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(126, 'NIRMAL MAN', 2, 115, 'NAKUL MAN', 'FATHER', NULL, '8372870610', '', NULL, '2016-11-16', '--NOT', '2016-11-16', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-16 04:31:04', '2016-11-16 10:01:04', 10056, 10056, '', 'UBI', 'JOYKRISHNA BAZAR', '1406010155', 'UTBIOJKBF36', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(127, 'PRAVAT DAS', 2, 116, 'BAIDYANATH DAS', 'FATHER', NULL, '9474640579', '', NULL, '2016-11-16', '--NOT', '2016-11-16', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-16 04:35:29', '2016-11-16 10:05:29', 10056, 10056, '', 'DURGAPUR STEEL PEOPLES CO. OPERATIVE BANK', 'DURGAPUR', '001011000009470', 'IBKL0256DSC', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(128, 'SUCHIMITA DAS', 2, 117, 'W.O- PRAVAT DAS', 'FATHER', NULL, '9474640579', 'AIDPD2334D', NULL, '2016-11-16', '--NOT', '2016-11-16', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-16 04:39:00', '2016-11-16 10:09:00', 10056, 10056, '', 'DURGAPUR STEEL PEOPLES CO. OPERATIVE BANK LIMITED', 'DURGAPUR', '001011000009470', 'IBKL0256DSC', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(129, 'SOUGATIK DAS', 2, 118, 'PRAVAT DAS', 'FATHER', NULL, '9474640579', '', NULL, '2016-11-16', '--NOT', '2016-11-16', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-16 04:42:06', '2016-11-16 10:12:06', 10056, 10056, '', '', '', '', '', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(130, 'ASIT KUMAR CHAKRABORTY', 2, 119, 'BISWANATH CHAKRABORTY', 'FATHER', NULL, '9126043456', '', NULL, '2016-12-20', '--NOT', '2016-11-16', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-16 04:49:58', '2016-12-21 00:00:41', 10056, 10056, '', 'BANK OF MAHARASHTRA', 'DURGAPUR', ' 20166913490', 'DURGAPUR', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(131, 'TARAK NATH DAS', 2, 120, 'SAILENDRANATH DAS', 'FATHER', NULL, '9232688693', 'ANFPD6514N', NULL, '2016-11-16', '--NOT', '2016-11-16', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-16 04:57:05', '2016-11-16 10:27:05', 10056, 10056, '', 'BANK OF INDIA', 'DURGAPUR', '00440100008609', 'BARBODURGAP', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(132, 'GITA MONDAL', 2, 121, 'SAMARESH MONDAL', 'FATHER', NULL, '9851313862', 'BIVPM7206C', NULL, '2016-11-16', '--NOT', '2016-11-16', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-16 05:01:37', '2016-11-16 10:31:37', 10056, 10056, '', 'BANDHAN BANK', 'DALURBANDH', '50160006627020', 'BDBL0001460', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(133, 'MANASHI MANDAL', 2, 122, 'PARTHA SARATHI MANDAL', 'FATHER', NULL, '9635296768', 'BUFPM8064E', NULL, '2016-11-16', '--NOT', '2016-11-16', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-16 05:05:34', '2016-11-16 10:35:34', 10056, 10056, '', '', '', '', '', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(134, 'BIPLAB SANYAL', 2, 123, 'MAHENDRA SANYAL', 'FATHER', NULL, '9333617840', 'BGJPS2116M', NULL, '2016-11-16', '--NOT', '2016-11-16', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-16 05:11:28', '2016-11-16 10:41:28', 10056, 10056, '', 'SBI', 'DURGAPUR', '33796164785', 'SBIN0016650', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(135, 'ANUPAM GOSWAMI', 2, 124, 'LT NEMAI CHANDRA GOSWAMI', 'FATHER', NULL, '9474038934', 'AHSPG8652R', NULL, '2016-11-16', '--NOT', '2016-11-16', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-16 05:14:33', '2016-11-16 10:44:33', 10056, 10056, '', 'SBI', 'PAKHANNA', '10306854781', 'SBIN0015940', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(136, 'NAREN SARKAR', 2, 122, 'LT. CHANDI DAS SARKAR', 'FATHER', NULL, '9002337728', 'DLGPS2646N', NULL, '2016-11-16', '--NOT', '2016-11-16', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-16 05:17:49', '2016-11-16 10:47:49', 10056, 10056, '', 'SBI', 'PAKHANNA', '33573874278', 'SBIN0015940', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(137, 'SUSMITA SHIT', 2, 2, 'GANGADHAR SHIT', 'FATHER', NULL, '9733245328', '', NULL, '2016-11-16', '--NOT', '2016-11-16', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-16 05:19:09', '2016-11-16 10:49:09', 10056, 10056, '', '', '', '', '', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(138, 'REBA PATRA', 2, 125, 'SHYAMAL PATRA', 'FATHER', NULL, '9564589536', '', NULL, '2016-11-23', '--NOT', '2016-11-16', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-16 05:29:46', '2016-11-23 06:57:39', 10056, 10056, '', 'IDBI', 'SHANKCHURA BAZAR BRANCH', '1355104000071187', 'IBKL0001355', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(139, 'SHYAMAL PATRA', 2, 126, ' NITAI PATRA', 'FATHER', NULL, '9775912070', 'BUJPP3356D', NULL, '2016-11-16', '--NOT', '2016-11-16', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-16 05:32:49', '2016-11-16 11:02:49', 10056, 10056, '', 'SBI', 'BOYERMARI', '32033667707', 'SBIN0008734', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(140, 'RAJU MANDAL', 2, 127, 'KAJEM ALI MANDAL', 'FATHER', NULL, '9775185613', 'ARYPM7722N', NULL, '2016-11-16', '--NOT', '2016-11-16', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-16 05:35:56', '2016-11-16 11:05:56', 10056, 10056, '', 'SBI', 'DANDIRHAT', '33444811352', 'SBIN0016643', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(141, 'DEEPAK KUMAR SAW', 2, 128, 'PRABHU SAW', 'FATHER', NULL, '8271714438', 'DYDPS8317E', NULL, '2016-11-16', '--NOT', '2016-11-16', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-16 05:39:09', '2016-11-16 11:09:09', 10056, 10056, '', 'CANARA BANK', 'MADHUPUR', '4902101001076', 'CNRB0004902', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(142, 'SANDIP KUMAR SAW', 2, 129, 'PRABHU SAW', 'FATHER', NULL, '0947111412', 'CKAPK9920P', NULL, '2016-11-16', '--NOT', '2016-11-16', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-16 05:42:17', '2016-11-16 11:12:17', 10056, 10056, '', 'CENTRAL BANK OF INDIA', 'MADHUPUR', '3408131510', 'CBIN0284536', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(143, 'SHAMBHU KUMAR SAW', 2, 130, 'LOKNATH SAW', 'FATHER', NULL, '9060229430', 'GZAPS3961M', NULL, '2016-11-16', '--NOT', '2016-11-16', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-16 05:45:27', '2016-11-16 11:15:27', 10056, 10056, '', 'CENTRAL BANK OF INDIA', 'MADHUPUR', '3953363243', 'CBIN0284536', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(144, 'KRISHNA DAS GOLDAR', 2, 131, 'LATE HARI DAS GOLDAR', 'FATHER', NULL, '9002903030', 'AIWPG1559J', NULL, '2016-11-17', '--NOT', '2016-11-29', 'MALE', 'kdgoldar@gmail.com', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-17 01:05:22', '2016-12-23 21:04:58', 10056, 10056, '', 'IDBI', 'BONGAON', '1467104000029829', 'IBKL0001467', '', NULL, '', '', '', 0, '', '', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(145, 'RIYA GOLDAR', 2, 132, 'KRISHNA DAS GOLDAR', 'FATHER', NULL, '9932533311', 'ARAPG1710C', NULL, '2016-11-17', '--NOT', '2016-11-29', 'MALE', 'riyagoldar1710@gmail.com', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-17 01:09:02', '2016-12-23 21:05:11', 10056, 10056, '', 'IDBI', 'BONGAON', '146710400005885', 'IBKL0001467', '', NULL, '', '', '', 0, '', '', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(146, 'SANDIP DUTTA', 2, 133, 'DILIP KUMAR DUTTA', 'FATHER', NULL, '9830084821', 'AKGPD1796C', NULL, '2016-11-17', '--NOT', '2016-11-17', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-17 02:47:25', '2016-11-17 08:17:25', 10056, 10056, '', 'PNB', 'BELEGHATA', '1415000100135872', 'PUNB0141500', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(147, 'MAYA SARKAR', 2, 134, 'SANKAR BISWAS', 'FATHER', NULL, '8436201836', 'FVEPS1178F', NULL, '2016-11-17', '--NOT', '2016-11-22', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-17 02:56:02', '2016-12-23 21:09:09', 10056, 10056, '', 'BANK OF INDIA', 'BONGAON', '415210110001190', 'BIKID0004152', '', NULL, '', '', '', 0, '', '', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(148, 'PROTIMA SARKAR', 2, 135, 'RABINDRANATH SARKAR', 'FATHER', NULL, '8768552205', 'FCOPS1889C', NULL, '2016-11-17', '--NOT', '2016-11-22', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-17 03:00:57', '2016-12-23 21:09:56', 10056, 10056, '', 'ICICI BANK', 'HABRA', '161301503842', 'ICIC0001613', '', NULL, '', '', '', 0, '', '', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(149, 'SAMENDU GHATAK', 2, 136, 'MADHUSUDAN GHATAK', 'FATHER', NULL, '9614833235', 'AKTPG5050B', NULL, '2016-11-17', '--NOT', '2016-11-22', 'MALE', 'bappaghatak77@gmail.com', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-17 03:08:37', '2016-12-23 21:09:43', 10056, 10056, '', 'ICICI BANK', 'HABRA', '161301505022', 'ICIC0001613', '', NULL, '', '', '', 0, '', '', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(150, 'SANTANA ROY', 2, 137, 'NANDA KISHOR MONDAL', 'FATHER', NULL, '9732414275', 'AORPR1005B', NULL, '2016-11-17', '--NOT', '2016-11-17', 'MALE', 'dulal.r@yahoo.com', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-17 03:36:46', '2016-11-17 09:06:46', 10056, 10056, '', 'SBI', 'KHOLAPOTA', '20081212127', 'SBIN0012381', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(151, 'SHAMPA MONDAL', 2, 138, 'BIDHU BHUSAN MONDAL', 'FATHER', NULL, '8436668416', 'CLOPM6234B', NULL, '2016-11-17', '--NOT', '2016-11-17', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-17 03:40:10', '2016-11-17 09:10:10', 10056, 10056, '', 'SBI', 'BADURIA', '20343713401', 'SBIN0002005', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(152, 'ASHIS KUMAR ROY', 2, 139, 'LATE NANI GOPAL ROY', 'FATHER', NULL, '7407247130', 'ASRPR7608C', NULL, '2016-11-17', '--NOT', '2016-11-17', 'MALE', 'ashiskumarroy1993@gmail.com', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-17 03:45:23', '2016-11-17 09:15:23', 10056, 10056, '', 'UCO', 'BURDWAN,DURGAPUR', '01380100006638', 'UCBA0000138', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(153, 'PRADIP MANDAL', 2, 140, 'LATE SITA NATH MONDAL', 'FATHER', NULL, '9800842562', 'BTFPM7873N', NULL, '2016-11-17', '--NOT', '2016-11-17', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-17 03:55:44', '2016-11-17 09:25:44', 10056, 10056, '', '', '', '', '', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(154, 'KANGKAN SARKAR', 2, 141, 'KAMAL SARKAR', 'FATHER', NULL, '9932979864', 'DVZPS0879A', NULL, '2016-11-17', '--NOT', '2016-11-17', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-17 04:01:13', '2016-11-17 09:31:13', 10056, 10056, '', '', '', '', '', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(155, 'DEBOBRATA SINHA', 2, 142, 'PRABIR KUMAR SINHA', 'FATHER', NULL, '7679790715', 'DHUPS0029B', NULL, '2016-11-17', '--NOT', '2016-11-17', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-17 04:05:12', '2016-11-17 09:35:12', 10056, 10056, '', 'SBI', 'RATHBARI', '33045288616', 'SBIN0008436', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(156, 'SOMA DEV', 2, 143, 'SISIR KUMAR DEV', 'FATHER', NULL, '7362940704', 'ARYPD1459M', NULL, '2016-11-17', '--NOT', '2016-11-17', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-17 04:08:35', '2016-11-17 09:38:35', 10056, 10056, '', 'AXIS BANK', 'MALDA', '910010032227687', 'UTIB0000389', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(157, 'SIBU DAS', 2, 144, 'LAKSHMAN DAS', 'FATHER', NULL, '9851518861', 'ASUPD4665N', NULL, '2016-11-17', '--NOT', '2016-11-17', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-17 04:12:40', '2016-11-17 09:42:40', 10056, 10056, '', 'SYNDICATE BANK', 'RAMKRISHNA PALLY', '955022009650', 'SYNB0009650', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(158, 'DILIP CHOUDHURY', 2, 145, 'BIDHU CHOUDHURY', 'FATHER', NULL, '9534032115', '', NULL, '2016-11-17', '--NOT', '2016-11-17', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-17 04:15:30', '2016-11-17 09:45:30', 10056, 10056, '', '', '', '', '', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(159, 'MADHUMITA MISHRA', 2, 146, 'UJJWAL MUMUKHARJEE', 'FATHER', NULL, '9609127259', '', NULL, '2016-11-17', '--NOT', '2016-11-17', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-17 04:20:16', '2016-11-17 09:50:16', 10056, 10056, '', '', '', '', '', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(160, 'BILTU CHOWDHURY', 2, 147, 'LATE SAMBHU CHARAN CHOUDHURY', 'FATHER', NULL, '8641867233', 'AQHPC8989K', NULL, '2016-11-25', '--NOT', '2016-11-17', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-17 04:24:27', '2016-11-25 08:36:20', 10056, 10056, '', '', '', '', 'CBIN0281973', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(161, 'SIPRA CHAKRABORTY', 2, 148, 'S.CH.KUNDU', 'FATHER', NULL, '9874661160', 'AHGPC4375F', NULL, '2016-11-21', '--NOT', '2016-11-18', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-18 05:49:40', '2016-11-21 08:26:44', 10056, 10056, '', 'ALLAHABAD', 'BAMANGACHI', '20569991696', 'ALLA0210869', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(162, 'BABLU PRAMANIK', 2, 150, 'SATISH PRAMANIK', 'FATHER', NULL, '9002637461', 'BSCPP7400E', NULL, '1980-01-01', '--NOT', '2016-11-21', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-21 04:03:05', '2016-11-21 09:33:05', 10056, 10056, '', 'S.B.I. ', 'BALUPURHAT', '30493333137', 'SBIN0006849', 'BUSINESS', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(163, 'HUSNARA BIBI', 2, 151, 'MD ABRAHIM', 'FATHER', NULL, '9733273507', 'CAUPB0305H', NULL, '1987-04-10', '--NOT', '2016-11-21', 'FEMALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-21 04:08:09', '2016-11-21 09:38:09', 10056, 10056, '', '', '', '', '', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(164, 'ACHINTA KUMAR GHOSH', 2, 152, 'LATE JAGANNATH GHOSH', 'FATHER', NULL, '9564772027', 'AVOPG8358H', NULL, '1981-11-11', '--NOT', '2016-11-21', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-21 05:18:12', '2016-11-25 06:27:15', 10056, 10056, '', 'CORPORATION BANK ', 'KIRANAHAR BAZAR', '143500101000130', 'CORP0001435', '', NULL, '', '', '', 0, '', '', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(165, 'SUDAMA SHAW', 2, 2, 'LATE B.SHAW', 'FATHER', NULL, '9330654746', '', NULL, '2016-11-21', '--NOT', '2016-11-21', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-21 05:23:13', '2016-11-21 11:10:54', 10056, 10056, '', 'S.B.I.', 'RISHRA', ' 10410234053', 'SBIN0001771', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(166, 'SANJIT KUMAR SHAW', 2, 153, 'JAGLAL SHAW', 'FATHER', NULL, '8820305530', '', NULL, '2016-11-21', '--NOT', '2016-11-21', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-21 05:27:21', '2016-11-21 11:09:50', 10056, 10056, '', 'CANARA BANK', 'RISHRA', ' A/C-5001101003208', 'CNRB0005001', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(167, 'NAREN MANDAL', 2, 154, 'RAJEN MANDAL', 'FATHER', NULL, '7073979582', '', NULL, '2016-11-21', '--NOT', '2016-11-21', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-21 05:32:56', '2016-11-21 11:13:26', 10056, 10056, '', 'SBI', 'BALUPURHAT', 'AC/NO-33365538121', 'SBIN0006849', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(168, 'SABRINA BIBI', 2, 155, 'MD. BADARUA JAMAN', 'FATHER', NULL, '7550908892', '', NULL, '2016-11-21', '--NOT', '2016-11-21', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-21 05:36:59', '2016-11-21 11:08:34', 10056, 10056, '', 'S.B.I.', 'BALUPUR HAT', ' A/C-30926063013', 'SBIN0006849', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(169, 'KRISHNA KUNDU', 2, 2, 'HARADHAN KUNDU', 'FATHER', NULL, '7602120767', '', NULL, '2016-11-21', '--NOT', '2016-11-21', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-21 05:47:24', '2016-11-21 11:17:24', 10056, 10056, '', 'S.B.I. ', 'BALUPUR', 'A/C-33480487182', 'SBIN0006849', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(170, 'DEBABRATA DAS', 2, 2, '', 'FATHER', NULL, '9475904041', '', NULL, '2016-11-21', '--NOT', '2016-11-21', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-21 05:52:39', '2016-11-21 11:22:39', 10056, 10056, '', 'MAHANAD CENTRAL BANK OF INDIA ', 'NAGARPARA', 'A/C-3285982614', 'CBIN0282856', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(171, 'SIKHA MAJI', 2, 156, 'SURJA SEKHAR MAJI', 'FATHER', NULL, '7584074375', '', NULL, '1970-01-01', '--NOT', '2016-11-21', 'FEMALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-21 05:56:32', '2016-11-25 07:20:49', 10056, 10056, '', '', '', '', 'PUNB0116700', '', NULL, '', '', '', 0, 'MARRIED', '', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(172, 'BHAJAN ROY', 2, 157, 'LT JITENDRA ROY', 'FATHER', NULL, '9231970759', 'AGRPR1366B', NULL, '1957-05-08', '--NOT', '2016-11-21', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-21 06:01:34', '2016-11-25 06:30:18', 10056, 10056, '', 'BANK OF INDIA ', 'BAMANGACHHI', 'A/C-438310110009078', 'BKID0004383', '', NULL, '', '', '', 0, '', '', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(173, 'SATYA NARAYAN GHOSH', 2, 158, 'SACHINDRA NATH GHOSH', 'FATHER', NULL, '9007300627', '', NULL, '2016-11-21', '--NOT', '2016-11-21', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-21 06:05:49', '2016-11-21 11:37:46', 10056, 10056, '', 'S.B.I.', 'JIRAT', ' A/C-20203070376', 'SBINOO14090', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(174, 'SWAPAN MONDAL', 2, 159, 'LATE SUDARSHAN MONDAL', 'FATHER', NULL, '9830354107', 'AERPM6235L', NULL, '2016-11-21', '--NOT', '2016-11-21', 'MALE', 'swapan070864@gmail.com', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-21 06:14:58', '2016-12-20 21:56:50', 10056, 10056, '', 'UCO BANK ', 'JAGADISH PUR', 'A/C-12740100000837', 'UCBA0001274', '', NULL, '', '', '', 0, '', '', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_pd` (`ID`, `Name`, `AddressID`, `LocalAddressID`, `GurdianName`, `GurdianRelation`, `SpouseName`, `ContactNo`, `PAN`, `VAT`, `DOB`, `Age`, `DOJ`, `Gender`, `Email`, `Website`, `EPFNo`, `ESINo`, `PassportNo`, `Country`, `AadhaarNo`, `Path`, `Image`, `ImageID`, `CreateTime`, `ModifyTime`, `CreatedBy`, `ModifiedBy`, `Description`, `BankName`, `BankBranch`, `AccountNo`, `BANKCODE`, `Occupation`, `Fax`, `VoterID`, `area_operation`, `BankAccountType`, `OLDID`, `MaritalStatus`, `Education`, `Nationality`, `AnnualIncome`, `TagLine`, `TEL`, `State`, `CIN`, `TAN`, `CST`, `TIN`, `GST`, `MAP`, `WhatsApp`, `DesignationID`, `Religion`, `FatherName`, `FatherEducation`, `FatherOccupation`, `MotherName`, `MotherEducation`, `MotherOccupation`, `Dependents`, `GurdianOccupation`, `PreviousSchool`, `PreviousClass`, `ReasonOfLeaving`, `BirthMark`, `AnyDisease`, `DiseasePeriod`, `Disease`, `DiseasePrecaution`, `AdmissionClass`, `AdmissionAge`, `AdmissionDate`) VALUES
(175, 'BIMAL KANTI DEY', 2, 186, 'SUDHEER KUMAR DEY', 'FATHER', NULL, '7998017917', '', NULL, '2016-11-23', '--NOT', '2016-11-21', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-21 06:18:11', '2016-12-05 11:16:59', 10056, 10056, '', '', '', '', 'ORBC0101973', '', NULL, '', '', '', 0, '', '', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(176, 'OSMAN ABDUL GANI', 2, 2, '', 'FATHER', NULL, '7076979582', 'AOVPD8598R', NULL, '2016-11-23', '--NOT', '2016-11-22', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-22 00:42:33', '2016-11-23 07:47:29', 10056, 10056, '', ' UBI BANK ', '	CHANCHAL', 'A/C-0515010108073', 'UTBIOCHC003', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(177, 'JAKIR  HOSSAIN MONDAL', 2, 163, 'MOJER ALI MONDAL', 'FATHER', NULL, '9681297936', '', NULL, '2016-11-22', '--NOT', '2016-11-22', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-22 00:47:18', '2016-11-22 06:17:18', 10056, 10056, '', 'SBI ', 'CHANDPARA', 'A/C- 31945084034', 'SBIN0006046', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(178, 'BAPPADITYA ROY', 2, 164, 'LT- ANANDA ROY', 'FATHER', NULL, '9932942357', '', NULL, '2016-11-22', '--NOT', '2016-11-22', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-22 00:51:44', '2016-11-22 06:21:44', 10056, 10056, '', 'UBI ', 'CHANDPARA', 'A/C-0140010117112', 'UTBIOCPA297', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(179, 'SUBRATA BHATTACHARJEE', 2, 2, 'UMA BHATTACHARJEE', 'FATHER', NULL, '9332254770', '', NULL, '2016-11-22', '--NOT', '2016-11-22', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-22 00:55:33', '2016-11-22 06:25:33', 10056, 10056, '', 'SBI', 'CHANDPARA', ' A/C-20053051169', 'SBIN0006046	', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(180, 'PARTHA BHOWMICK', 2, 165, ' LT  BIRENDRA CHANDRA  BHOWMICK', 'FATHER', NULL, '7076857034', '', NULL, '2016-11-22', '--NOT', '2016-11-22', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-22 01:01:02', '2016-12-05 09:03:14', 10056, 10056, '', '', '', '', 'UTBI0CPA297	', '', NULL, '', '', '', 0, '', '', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(181, 'RAJIB SANTRA ', 2, 2, 'LT HORIMOHON SANTRA', 'FATHER', NULL, '8016151806', '', NULL, '2016-11-22', '--NOT', '2016-11-22', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-22 01:04:38', '2016-11-22 06:34:38', 10056, 10056, '', 'PASCHIM BANGA GRAMIN BANK', 'MOLOYPUR', ' A/C-11050100001820', 'UCBAORRBPBG	', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(182, 'ATUL BHATTACHARYA ', 2, 2, 'LT GANGA NARAYAN  BHATTACHARYA', 'FATHER', NULL, '9231265066', '', NULL, '2016-11-22', '--NOT', '2016-11-22', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-22 01:08:19', '2016-11-22 06:38:19', 10056, 10056, '', 'SBI ', '	BANKRA', 'A/C-32248961545', 'SBIN0012431', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(183, 'SANKAR KUMAR GHOSH ', 2, 2, 'BISWANATH GHOSH', 'FATHER', NULL, '9734316525', '', NULL, '2016-11-22', '--NOT', '2016-11-22', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-22 01:15:56', '2016-11-22 06:46:33', 10056, 10056, '', 'ALLAHABAD BANK ', 'TAKI', 'A/C-  21375550440	', 'ALLA0210043	', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(184, 'BIPAD TARAN PAL ', 2, 2, 'LT KANAI LAL PAL', 'FATHER', NULL, '8001869419', '', NULL, '2016-11-22', '--NOT', '2016-11-22', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-22 01:22:56', '2016-11-22 06:53:43', 10056, 10056, '', 'SBI  	', 'DURGAPUR', 'A/C-30865687472', 'SBIN0000074	', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(185, 'BIPAD TARAN PAL ', 2, 2, 'LT KANAI LAL PAL', 'FATHER', NULL, '8001869419', '', NULL, '0001-01-01', '--NOT', '2016-11-22', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-22 01:26:18', '2016-11-22 07:34:41', 10056, 10056, '', 'SBI  	', 'DURGAPUR', 'A/C-30865687472', 'SBIN0000074	', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(186, 'PRATYUSH KUMAR PAL ', 2, 2, 'BIPAD TARAN PAL', 'FATHER', NULL, '7477454314', '', NULL, '0001-01-01', '--NOT', '2016-11-22', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-22 01:30:15', '2016-11-22 07:34:18', 10056, 10056, '', 'UBI	', 'ANDAL', ' A/C-1558010056391', 'UTBI0ADLF67	', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(187, 'TAPAN KUMAR DALAL', 2, 2, ' LT KHANDU DALAL', 'FATHER', NULL, '7063715075', '', NULL, '0001-01-01', '--NOT', '2016-11-22', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-22 01:43:36', '2016-11-22 07:34:07', 10056, 10056, '', 'SBI ', 'ANDAL', 'A/C-30702376326	', 'SBIN0010222	', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(188, 'MALATI DALAL', 2, 2, ' TAPAN KUMAR DALAL', 'FATHER', NULL, '8670311403', '', NULL, '0001-01-01', '--NOT', '2016-11-22', 'FEMALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-22 01:46:57', '2016-11-22 07:33:53', 10056, 10056, '', 'BANDHAN BANK ', 'SRIRAMPUR', 'A/C-50160007544048	', 'BDBL0001711	', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(189, 'NIRMAL MAN ', 2, 166, 'NAKUL MAN', 'FATHER', NULL, '8372870610', '', NULL, '0001-01-01', '--NOT', '2016-11-22', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-22 01:53:55', '2016-11-22 07:33:37', 10056, 10056, '', 'UBI BANK 	', 'JOYKRISHNA BAZAR(1406)', 'A/C-1406010155625', 'UTBI0JKBF36	', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(190, 'MADHURI DALAL ', 2, 167, 'SWAPAN KR. DALAL', 'FATHER', NULL, '7098435129', '', NULL, '0001-01-01', '--NOT', '2016-11-22', 'FEMALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-22 01:58:03', '2016-11-22 07:33:24', 10056, 10056, '', 'BANDHAN BANK 	', 'SRIRAMPUR', 'A/C-50160008075383', 'BDBL0001711   	', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(191, 'TARAK NATH DAS ', 2, 168, 'SAILENDRA NATH DAS', 'FATHER', NULL, '9232688693', '', NULL, '0001-01-01', '--NOT', '2016-11-22', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-22 02:02:50', '2016-11-22 07:32:50', 10056, 10056, '', 'BANK OF BARODA 	', 'DURGAPUR', 'A/C-00440100008609', 'BARBODURGAP    	', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(192, 'PARTHA SARATHI MANDAL', 2, 169, ' DHIRENDRA NATH MANDAL', 'FATHER', NULL, '9635296768', '', NULL, '2016-11-22', '--NOT', '2016-11-22', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-22 02:07:50', '2016-11-29 22:55:19', 10056, 10056, '', 'BANDHAN BANK', '	SRIRAMPUR', ' A/C-50160009253571', '	SBIN0015940', '', NULL, '', '', '', 0, '', '', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(193, 'SUCHIMITA DAS', 2, 170, ' PRAVAT DAS', 'FATHER', NULL, '9474640579', '', NULL, '2016-11-23', '--NOT', '2016-11-22', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-22 02:10:31', '2016-11-23 08:46:17', 10056, 10056, '', 'DURGAPUR STEEL PEOPLES CO-OPARATIVE BANK LTD. ', '	DURGAPUR', 'A/C-001011000009470', 'IBKL0256DSC', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(194, 'PRAVAT DAS ', 2, 2, 'BAIDYANATH DAS', 'FATHER', NULL, '9474640579', '', NULL, '2016-11-23', '--NOT', '2016-11-22', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-22 02:15:05', '2016-11-23 08:49:16', 10056, 10056, '', 'DURGAPUR STEEL PEOPLES CO-OPERATIVE BANK LTD. ', 'DURGAPUR', 'A/C-001011000009470		', 'IBKL0256DSC', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(195, 'PRATIMA BISWAS', 2, 2, '', 'FATHER', NULL, '', '', NULL, '2016-11-22', '--NOT', '2016-11-22', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-22 02:17:41', '2016-11-22 07:47:41', 10056, 10056, '', '', '', '', '', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(196, 'REBA LAHA (SUR) ', 2, 2, 'ATANU LAHA', 'FATHER', NULL, '9038322282', '', NULL, '2016-11-22', '--NOT', '2016-11-22', 'FEMALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-22 02:20:13', '2016-11-22 07:52:07', 10056, 10056, '', '', '', '', '', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(197, 'PRATIMA PAL', 2, 171, ' BIPAD TARAN PAL', 'FATHER', NULL, '9475380095', '', NULL, '2016-11-23', '--NOT', '2016-11-22', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-22 02:25:04', '2016-11-23 06:36:46', 10056, 10056, '', 'BANDHAN BANK 	', 'SRIRAMPUR', 'A/C-50160006608596', 'BDBL0001711 	', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(198, 'SUBIR MOLLA', 258, 258, 'BISHWANATH CHAKRABORTY', 'FATHER', NULL, '9126043456', '', NULL, '2016-11-22', '35 Years', '2016-11-22', 'MALE', '', NULL, NULL, NULL, NULL, '', '', 'images/member', 'user01.png', '11', '2016-11-22 02:46:38', '2018-12-10 10:28:27', 10056, 1, '', 'BANK OF MAHARASHTRA ', 'DURGAPUR', 'A/C-20166913490', 'MAHB0001336', '', NULL, '', '', '', 0, NULL, '', NULL, 0, NULL, '32323232232', 'wb', NULL, NULL, NULL, NULL, NULL, 'sakdfask kdaks dkh                                     ', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(199, 'ATUL CHANDRA  BISWAS ', 2, 172, 'L-NAGENDRA NATH BISWAS', 'FATHER', NULL, '7063569607', '', NULL, '2016-11-22', '--NOT', '2016-11-22', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-22 02:59:17', '2016-11-22 08:32:41', 10056, 10056, '', 'SBI', 'CHANDPARA', ' A/C- 11219726295 	', 'SBIN0006046	', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(200, 'SADHANA BISWAS ', 2, 2, 'GOPAL BISWAS', 'FATHER', NULL, '9932514194', '', NULL, '2016-11-22', '--NOT', '2016-11-22', 'MALE', '', NULL, NULL, NULL, NULL, '', '', 'images/member', 'user01.png', '11', '2016-11-22 03:08:41', '2018-12-10 09:58:57', 10056, 1, '', 'THE WEST BENGAL STATE CO.OPERATIVE BANK LTD. 		', 'CHANDPARA', 'A/C-129347066985', 'WBSC0000033', '', NULL, '', '', '', 0, '', '', NULL, 0, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, '                                     ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201, 'CHANDAN DAS ', 2, 2, 'HARADHAN DAS', 'FATHER', NULL, ' 973369134', '', NULL, '0001-01-01', '--NOT', '2016-11-22', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-22 03:16:52', '2016-11-22 08:46:52', 10056, 10056, '', 'PASCHIM BANGA GRAMIN BANK', '	MOLOYPUR', ' A/C-11050100001939	', 'UCBAQRRBPBG ', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(202, 'KRISHNA DAS  PARAMANIK ', 2, 174, 'DAYAMOY  PARAMANIK', 'FATHER', NULL, '8001528661', 'APTPP9573K', NULL, '2016-11-22', '--NOT', '2016-11-22', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-22 03:19:56', '2016-12-23 21:14:14', 10056, 10056, '', 'SBI 	', 'DURGAPUR', 'A/C-33952661431', 'SBIN0007503	', '', NULL, '', '', '', 0, '', '', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(203, 'NILAVA GHOSH ', 2, 2, 'TAPAN KUMAR GHOSH', 'FATHER', NULL, '7602817025', 'BDMPG3220L', NULL, '2016-11-22', '--NOT', '2016-11-22', 'MALE', 'NILAVAGHOSH16@GMAIL.COM', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-22 03:26:06', '2016-11-22 08:57:02', 10056, 10056, '', 'UCO BANK 	', 'JIRAT', ' A/C-06030110045688', 'UCBA0000603	', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(204, 'MRITUNJOY  BANERJEE ', 2, 2, 'PRASANTA  BANERJEE', 'FATHER', NULL, '9547405563', '', NULL, '2016-11-23', '--NOT', '2016-11-22', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-22 03:29:14', '2016-11-23 20:16:42', 10056, 117, '', 'SBI  	', '	ANDAL(BANBAHAL ROAD)', '31943078215', 'SBIN0010222 ', '', NULL, '', '', '', 0, '', '', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(205, 'SHAMPA MONDAL ', 2, 175, 'BIDHU BHUSAN MONDAL', 'FATHER', NULL, '8436668416', 'CLQPM6234B', NULL, '1966-09-15', '--NOT', '2016-11-22', 'MALE', 'SHAMPAM405@GMAIL.COM', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-22 03:37:42', '2016-12-23 21:13:24', 10056, 10056, '', 'SBI  	', 'BADURIA', 'A/C Â€Ï¿Ï¿Ï¿½ 20343713401', 'SBIN0002005	', '', NULL, '', '', '', 0, '', '', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(206, 'SAMARESH MONDAL', 2, 176, ' LT BHUTNATH MONDAL', 'FATHER', NULL, '9851313862', '', NULL, '2016-11-22', '--NOT', '2016-11-22', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-22 03:44:14', '2016-11-22 09:14:47', 10056, 10056, '', 'BANDHAN BANK 	', 'DALURBANDH', 'A/C-50160006627020', 'BDBL0001460  	', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(207, 'PRATYUSH KUMAR PAL', 2, 177, ' BIPAD TARAN PAL', 'FATHER', NULL, '7477454314', 'DCNPP70680', NULL, '2016-11-22', '--NOT', '2016-11-22', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-22 03:52:37', '2016-12-23 21:12:36', 10056, 10056, '', 'UBI  		', 'ANDAL', 'A/C-1558010056391', 'UTBI0ADLF67 ', '', NULL, '', '', '', 0, '', '', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(208, 'BIPAD TARAN PAL', 2, 2, ' LT KANAI LAL PAL', 'FATHER', NULL, '8001869419', 'AJHPP5551A', NULL, '2016-11-22', '--NOT', '2016-11-22', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-22 03:55:52', '2016-12-23 21:12:19', 10056, 10056, '', 'AXIS BANK  	', '	DURGAPUR', 'A/C-213010100010469', 'UTIB0000213 ', '', NULL, '', '', '', 0, '', '', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(209, 'AFSAR ALI KHAN ', 2, 178, 'SOFIUDDIN KHAN', 'FATHER', NULL, '9609652866', 'BETPK8917E', NULL, '2016-11-22', '--NOT', '2016-11-22', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-22 04:08:29', '2016-11-22 09:38:54', 10056, 10056, '', 'UBI	 	', 'SHYAMPUR', ' A/C-2070010036670 ', 'UTBIOSYMY15', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(210, 'SULEKHA MONDAL ', 2, 179, 'SWAPAN MONDAL', 'FATHER', NULL, '9831867890', '', NULL, '2016-11-22', '--NOT', '2016-11-22', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-22 04:11:26', '2016-11-22 09:41:57', 10056, 10056, '', 'SBI', '	JAGADISHPUR', ' A/C-10869775125	', 'SBIN0012430', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(211, 'SWAPAN MONDAL ', 2, 179, 'LT SUDARSHAN MONDAL', 'FATHER', NULL, '9830354107', 'AERPM62357', NULL, '1964-08-07', '--NOT', '2016-11-22', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-22 04:15:29', '2016-11-22 09:45:29', 10056, 10056, '', 'UCO BANK 	', 'JAGADISHPUR', 'A/C-12740100000837', 'UCBA0001274	', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(212, 'SUNDARI BANIK (SARDAR)', 2, 2, ' CHITTA SARDAR', 'FATHER', NULL, '8900972726', 'CGXPB8916M', NULL, '2016-11-22', '--NOT', '2016-11-22', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-22 04:18:21', '2016-12-23 21:11:06', 10056, 10056, '', 'UBI  	 	', 'CHANDPARA', 'A/C -0140010114982', 'UTBI0CPA297', '', NULL, '', '', '', 0, '', '', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(213, 'KRISHNA BISWAS', 2, 2, ' LT Â€Ï¿Ï¿½ SURYA BISWAS', 'FATHER', NULL, '7063131090', '', NULL, '2016-11-22', '--NOT', '2016-11-22', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-22 04:24:56', '2016-11-22 09:55:54', 10056, 10056, '', 'SBI  	', 'RANAGHAT NADIA', 'A/C Â€Ï¿Ï¿½ 36064058428', '	SBIN0000166', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(214, 'NANDITA BISWAS ', 2, 180, 'AJIT BISWAS', 'FATHER', NULL, '9088990360', 'BFCPBO445Q', NULL, '2016-11-22', '--NOT', '2016-11-22', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-22 04:46:21', '2016-11-22 10:16:47', 10056, 10056, '', 'ICICI BANK 	', '	HABRA', 'A/C-161301504512', 'ICIC0001613 ', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(215, 'SANJAY BISWAS ', 2, 181, 'GOBINDA BISWAS', 'FATHER', NULL, '7797978128', 'AUCPB6353P', NULL, '2016-11-22', '--NOT', '2016-11-22', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-22 04:50:26', '2016-11-22 10:20:52', 10056, 10056, '', 'ICICI BANK 	 	', 'HABRA', 'A/C-161301505052', 'ICIC0001613', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(216, 'PROTIMA  SARKAR ', 2, 182, 'RABINDRANATH SARKAR', 'FATHER', NULL, '8768552205', '', NULL, '2016-11-22', '--NOT', '2016-11-22', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-22 04:55:25', '2016-11-22 10:26:16', 10056, 10056, '', 'ICICI BANK 	 ', '	HABRA', 'A/C-161301503842', 'ICIC0001613', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(217, 'SAMENDU GHATAK ', 2, 2, 'MADHUSUDAN GHATAK', 'FATHER', NULL, '9614833235', '', NULL, '2016-11-22', '--NOT', '2016-11-22', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-22 05:01:35', '2016-11-22 10:32:18', 10056, 10056, '', 'ICICI BANK ', 'HABRA', 'A/C-161301505022', '	ICIC0001613  	', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(218, 'SHASHANKA SARKAR ', 2, 183, 'SATISH SARKAR ', 'FATHER', NULL, '9733770101', 'FVEPS1013M', NULL, '2016-11-22', '--NOT', '2016-11-22', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-22 05:06:04', '2016-11-22 10:36:37', 10056, 10056, '', 'IDBI BANK 	', 'BONGAON', ' A/C-1467104000059574', 'IBKL0001467 	', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(219, 'MAYA SARKAR ', 2, 183, 'SANKAR  BISWAS ', 'FATHER', NULL, '8436201836', 'FVEPS1178F', NULL, '0001-01-01', '--NOT', '2016-11-22', 'FEMALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-22 05:10:34', '2016-11-22 10:40:34', 10056, 10056, '', 'BANK OF INDIA 	', 'BONGAON', '	 A/C-415210110001190', 'BKID0004152 ', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(220, 'SHEELA BISWAS ', 2, 184, 'ATUL CHANDRA BISWAS', 'FATHER', NULL, '9002782976', 'BQVPB4749R', NULL, '1963-11-15', '--NOT', '2016-11-22', 'FEMALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-22 05:14:06', '2016-11-22 10:45:53', 10056, 10056, '', 'UBI 	', 'CHANDPARA', 'A/C-0140010505932', '	UTBI0CPA297 ', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(221, 'KAKOLEE MONDAL ', 2, 185, 'BHOLANATH MONDAL', 'FATHER', NULL, '7431003834', 'BVCPM4997C', NULL, '2016-11-22', '--NOT', '2016-11-22', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-22 05:21:56', '2016-11-22 10:52:56', 10056, 10056, '', 'BANDHAN BANK		', 'SRIRAMPUR', 'A/C-50160009253571', ' BDBL0001711', '', NULL, '', '', ' ', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(222, 'DEBABRATA SEN', 2, 187, 'LATE DIPAK KUMAR SEN', 'FATHER', NULL, '0917986552', 'DJPPS9518N', NULL, '2016-11-23', '--NOT', '2016-11-23', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-23 03:32:51', '2016-12-23 21:08:25', 10056, 10056, '', 'SBI', 'SUNDERNAGAR', '30998120228', 'SBIN0012326', '', NULL, '', '', '', 0, '', '', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(223, 'DEBABRATA SEN', 2, 188, 'LATE DIPAK KUMAR SEN', 'FATHER', NULL, '9179865529', 'DJPPS9518N', NULL, '2016-11-23', '--NOT', '2016-11-23', 'MALE', 'DEBSEN1966@REDIFFMAIL.COM', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-23 04:12:20', '2016-11-23 20:13:25', 10056, 117, '', 'SBI', 'SUNDARNAGAR, RAIPUR', '30998120228', 'SBIN0012326', '', NULL, '', '', '', 0, '', '', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(224, 'AFSAR ALI KHAN', 2, 189, 'SOFIUDDIN ALI KHAN', 'FATHER', NULL, '9609652866', 'BETPK8917S', NULL, '1989-03-30', '--NOT', '2016-11-23', 'MALE', 'KHANAFSARALI@GMAIL.COM', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-23 05:38:03', '2016-11-23 11:08:03', 10056, 10056, '', 'UBI ', '	SHYAMPUR', 'A/C-2070010036670', 'UTBI0SYMY15 ', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(225, 'DEBASIS DAS', 2, 190, 'HARIPADA DAS', 'FATHER', NULL, '8013399786', 'AMXPO2578F', NULL, '1988-03-24', '--NOT', '2016-11-23', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-23 05:45:32', '2016-12-23 21:07:44', 10056, 10056, '', 'SBI ', '	NEW TOWN ACTION AREA-II, RAJARHAT', 'A/C- 35852161946', 'SBIN0014532 ', '', NULL, '', '', '', 0, '', '', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(226, 'RIYA GOLDER', 2, 191, 'KRISHNA DAS GOLDER', 'FATHER', NULL, '9732205424', 'ARAPG1710C', NULL, '1991-04-03', '--NOT', '2016-11-29', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-29 17:54:13', '2016-11-29 23:25:05', 10056, 10056, '', 'BANDHAN BANK', '	SRIRAMPUR', ' A/C-50160009253571', 'IBKL0001467', '', NULL, '', '', '', 0, 'MARRIED', 'MP', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(227, 'KRISHNA DAS GOLDAR', 2, 192, 'LATE HARI DAS GOLDAR', 'FATHER', NULL, '9002903030', 'AIWPG1559J', NULL, '1975-02-20', '--NOT', '2016-11-29', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-29 17:59:36', '2016-12-05 08:29:21', 10056, 10056, '', 'BANDHAN BANK', '	SRIRAMPUR', ' A/C-50160009253571', 'IBKL0001467', '', NULL, '', '', '', 0, 'MARRIDE', '', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(228, 'TANUSRI MONDAL', 2, 193, 'NRIPENDU MONDAL', 'FATHER', NULL, '9332193241', 'BAAPM3643L', NULL, '1985-10-08', '--NOT', '2016-11-30', 'FEMALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-11-30 01:13:51', '2016-11-30 06:43:51', 10056, 10056, '', 'SBI', 'AHMEDPUR', '31904493307', 'SBIN0002002', '', NULL, '', '', '', 0, 'MARRIED', '', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(229, 'PRIYANKA DUTTA', 2, 194, 'KASHINATH DUTTA', 'FATHER', NULL, '9932946939', 'AQXPD4231F', NULL, '1985-10-08', '--NOT', '2016-12-05', 'FEMALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-12-05 05:15:18', '2016-12-05 10:45:18', 10056, 10056, '', '', '', '', 'BKID0004330', '', NULL, '', '', '', 0, '', '', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(230, 'AJIT MANJHI', 2, 195, 'MADAN MANJHI', 'FATHER', NULL, '7004986269', 'BFLPM3652K', NULL, '2016-12-20', '--NOT', '2016-12-19', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-12-20 15:22:00', '2016-12-20 20:53:04', 10056, 10056, '', 'SBI', 'RANGAMATI', '30849032218', 'SBIN0006313', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(231, 'MD IQBAL', 2, 2, 'MOHAMAD SADRUL', 'FATHER', NULL, '9334021286', '', NULL, '2016-12-20', '--NOT', '2016-12-20', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-12-20 15:26:19', '2016-12-20 20:56:19', 10056, 10056, '', '', '', '', '', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(232, 'SUNIL DAS', 2, 196, 'LATE TARANI DAS', 'FATHER', NULL, '9693745339', '', NULL, '2016-12-20', '--NOT', '2016-12-20', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-12-20 15:29:08', '2016-12-20 20:59:08', 10056, 10056, '', 'SBI', 'CHANDIL', '', '', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(233, 'MIHIR CHANDRA MAHATO', 263, 263, 'LATE KALIPADA MAHATO', 'FATHER', NULL, '9386232880', 'ATCPM6420H', NULL, '2016-12-20', '--NOT', '2016-12-20', 'MALE', 'sat@gmail.com', NULL, NULL, NULL, NULL, 'INDIA', '', 'images/member', 'user01.png', '11', '2016-12-20 15:35:22', '2018-12-13 22:02:15', 10056, 1, '', '', '', '', '', '', NULL, '', '', '', 0, '', '<p>MD, MBBS</p>', NULL, 0, NULL, '34234234', 'WB', NULL, NULL, NULL, NULL, NULL, '<p>fdg\r\ndg\r\ndg</p>', '034234', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(234, 'PRABODH KUMAR MANDAL', 2, 198, 'LATE BHABATARAN MANDAL', 'FATHER', NULL, '7765919823', 'CAEPM2217F', NULL, '2016-12-20', '--NOT', '2016-12-20', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-12-20 15:37:49', '2016-12-23 21:03:11', 10056, 10056, '', '', '', '', '', '', NULL, '', '', '', 0, '', '', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(235, 'NISHIT KARMAKAR', 2, 199, 'MIHIR KUMAR KARMAKAR', 'FATHER', NULL, '9732060630', 'BITPK2717C', NULL, '2016-12-20', '--NOT', '2016-12-20', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-12-20 15:41:03', '2016-12-20 21:11:03', 10056, 10056, '', 'BANK OF INDIA', 'DURGAPUR', '436910110007593', 'BKID0004369', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(236, 'SOMNATH MAHANTA', 2, 200, 'SATRUGHANA MAHANTA', 'FATHER', NULL, '9933332940', 'BGBPM7259R', NULL, '2016-12-20', '--NOT', '2016-12-20', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-12-20 15:43:36', '2016-12-20 21:13:36', 10056, 10056, '', 'SBI', 'ANDAL', '34948863220', 'SBIN0010222', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(237, 'REKHA SAHU', 2, 201, 'ARJUN SAHU', 'FATHER', NULL, '9576763825', '', NULL, '2016-12-20', '--NOT', '2016-12-20', 'MALE', 'REKHASAHU91@GMAIL.COM', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-12-20 15:46:31', '2016-12-20 21:16:31', 10056, 10056, '', 'SBI', 'RANGAMATI', '32053335494', 'SBIN0006313', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(238, 'SIMA DAS MODAK', 202, 202, 'ASHOK KUMAR MODAK', 'FATHER', NULL, '9002434417', '', NULL, '2016-12-20', '--NOT', '2016-12-20', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-12-20 15:49:13', '2016-12-20 21:19:13', 10056, 10056, '', 'SBI', 'PURULIA(MAIN)', '11377398613', 'SBIN0000160', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(239, 'SHIVANI DEVI', 2, 203, 'HIRATAN KUMBHAKAR', 'FATHER', NULL, '9155233555', '', NULL, '2016-12-20', '--NOT', '2016-12-20', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-12-20 15:51:42', '2016-12-20 21:21:42', 10056, 10056, '', '', '', '', '', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(240, 'ANIL MAJHI', 2, 204, 'RAM MAJHI', 'FATHER', NULL, '9234137830', '', NULL, '2016-12-20', '--NOT', '2016-12-20', 'MALE', '', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-12-20 15:54:32', '2016-12-20 21:24:32', 10056, 10056, '', '', '', '', '', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(241, 'BABU RAM BINDHANI', 2, 205, 'LT. KRISHNA BINDHANI', 'FATHER', NULL, '7739408238', 'AXPPB0581K', NULL, '2016-12-20', '--NOT', '2016-12-20', 'MALE', 'BABURAMBINDHANI.2015@GMAIL.COM', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-12-20 15:58:43', '2016-12-20 21:28:43', 10056, 10056, '', 'SBI', 'GAMHARIA', '33411688994', 'SBIN0012634', '', NULL, '', '', '', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(242, 'ASHOK KUMAR MODAK', 2, 206, 'LATE NISHI KANTA DAS MODAK', 'FATHER', NULL, '9002434417', '', NULL, '1970-01-01', '--NOT', '2016-12-20', 'MALE', 'ASHOKMODAK1959@GMAIL.COM', NULL, NULL, NULL, NULL, NULL, '', 'images/member', 'user01.png', '11', '2016-12-20 16:14:04', '2016-12-23 21:02:55', 10056, 10056, '', 'SBI  ', 'PURULIA', '11377398613', 'SBIN0000160 	', '', NULL, '', '', '', 0, 'MARRIED', 'MA. , B.ED', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(243, 'DULAL ROY', 2, 2, 'SUPADA ROY', 'FATHER', NULL, '9732414275', '', NULL, '1968-02-10', '--NOT', '2016-12-22', 'MALE', '', NULL, NULL, NULL, NULL, '', '', 'images/member', 'user01.png', '11', '2016-12-22 18:09:29', '2018-12-06 15:06:30', 10056, 1, '', 'BANK OF INDIA', 'KHOLAPOTA', '422918210000590', 'BKID0004229', '', NULL, '', '', '', 0, 'MARRIED', '', NULL, 0, NULL, '', '', NULL, NULL, NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(244, 'DILIP KUMAR MITRA', 2, 2, 'ADITYA PRASAD MITRA', 'FATHER', NULL, '9775284004', 'ALRPM6522B', NULL, '2016-12-24', '--NOT', '2016-12-24', 'MALE', '', NULL, NULL, NULL, NULL, '', '', 'images/member', 'user01.png', '11', '2016-12-24 15:56:09', '2018-12-07 05:59:11', 10056, 1, '', 'UBI', 'ANDUL BAZAR ROAD', '0176010293945', 'UTBIOAN0258', '', NULL, '', '', '', 0, 'MARRIED', 'H.S', NULL, 0, NULL, '', '', NULL, NULL, NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(245, 'DILIP KUMAR MITRA', 2, 2, 'ADITYA PRASAD MITRA', 'FATHER', NULL, '9775284004', 'ALRPM6522B', NULL, '1963-06-01', '--NOT', '2016-12-24', 'MALE', '', NULL, NULL, NULL, NULL, '', '', 'images/member', 'user01.png', '11', '2016-12-24 16:30:02', '2018-11-28 04:52:45', 10056, 1, '', 'UBI', 'ANDUL BAZAR ROAD', '0176010293945', 'UTBIOAN0258', '', NULL, '', '', '', 0, 'MARRIED', 'H.S', NULL, 0, NULL, '', '', NULL, NULL, NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(246, 'AVI', 240, 240, NULL, NULL, NULL, '5161615615', NULL, NULL, NULL, '--NOT', '2018-11-28', NULL, 'pp@ouh.com', NULL, NULL, NULL, NULL, 'india', NULL, NULL, NULL, NULL, '2018-11-27 21:52:58', '2018-11-28 03:27:39', 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'w', NULL, 0, NULL, '95423132', 'keral', NULL, NULL, NULL, NULL, NULL, 'PIRUVILLAI', '5656616156', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(247, 'Samir Ra', 243, 243, NULL, NULL, NULL, '9007409663', NULL, NULL, NULL, '--NOT', '2018-11-28', NULL, 'samirram007@gmail.com', NULL, NULL, NULL, NULL, 'India', NULL, NULL, NULL, NULL, '2018-11-28 11:44:49', '2018-11-28 17:14:49', 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, '', NULL, 0, NULL, '8240707689', 'West Bengal', NULL, NULL, NULL, NULL, NULL, 'Hatiara, Panditbattala, Kolkata-157', '9007409663', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(248, 'Sam Ram', 0, 0, NULL, NULL, NULL, '9007409663', NULL, NULL, NULL, '38 YEARS', '2018-11-28', 'MALE', 'samirram007@gmail.com', NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, '2018-11-28 11:49:26', '2018-12-10 09:18:56', 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, '', NULL, 0, NULL, '', 'West Bengal', NULL, NULL, NULL, NULL, NULL, '                                     ', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(249, 'Samir Ram', 243, 243, NULL, NULL, NULL, '9007409663', NULL, NULL, NULL, '--NOT', '2018-11-28', NULL, 'samirram007@gmail.com', NULL, NULL, NULL, NULL, 'India', NULL, NULL, NULL, NULL, '2018-11-28 11:50:40', '2018-11-28 17:20:40', 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, '', NULL, 0, NULL, '', 'West Bengal', NULL, NULL, NULL, NULL, NULL, 'Hatiara, Panditbattala, Kolkata-157', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(250, 'Samir Ram', 243, 243, NULL, NULL, NULL, '9007409663', NULL, NULL, NULL, '--NOT', '2018-11-28', NULL, 'samirram007@gmail.com', NULL, NULL, NULL, NULL, 'India', NULL, NULL, NULL, NULL, '2018-11-28 11:53:10', '2018-11-28 17:23:10', 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, '', NULL, 0, NULL, '', 'West Bengal', NULL, NULL, NULL, NULL, NULL, 'Hatiara, Panditbattala, Kolkata-157', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(251, 'Samir Ram', 243, 243, NULL, NULL, NULL, '', NULL, NULL, NULL, '--NOT', '2018-11-28', NULL, 'samirram007@gmail.com', NULL, NULL, NULL, NULL, 'India', NULL, NULL, NULL, NULL, '2018-11-28 11:54:11', '2018-11-28 17:24:11', 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, '', NULL, 0, NULL, '+919007409663', 'West Bengal', NULL, NULL, NULL, NULL, NULL, 'Hatiara, Panditbattala, Kolkata-157', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(252, 'SULTAN MEDICAL', 243, 243, NULL, NULL, NULL, '9007409663', NULL, NULL, NULL, '--NOT', '2018-12-02', NULL, 'samirram007@gmail.com', NULL, NULL, NULL, NULL, 'India', NULL, NULL, NULL, NULL, '2018-12-02 08:56:06', '2018-12-02 14:34:51', 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, '', NULL, 0, NULL, '', 'West Bengal', NULL, NULL, NULL, NULL, NULL, 'Hatiara, Panditbattala, Kolkata-157', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(253, 'consutant P', 2, 2, NULL, NULL, NULL, '', NULL, NULL, NULL, '--NOT', '2018-12-02', NULL, '', NULL, NULL, NULL, NULL, 'India', NULL, NULL, NULL, NULL, '2018-12-02 08:59:18', '2018-12-02 14:34:09', 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, '', NULL, 0, NULL, '', 'WB', NULL, NULL, NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(254, 'consult', 2, 2, NULL, NULL, NULL, '', NULL, NULL, NULL, '--NOT', '2018-12-02', NULL, '', NULL, NULL, NULL, NULL, 'India', NULL, NULL, NULL, NULL, '2018-12-02 08:59:39', '2018-12-02 14:29:39', 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, '', NULL, 0, NULL, '', 'WB', NULL, NULL, NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(255, 'ss', 2, 2, NULL, NULL, NULL, '', NULL, NULL, NULL, '--NOT', '2018-12-02', NULL, '', NULL, NULL, NULL, NULL, 'India', NULL, NULL, NULL, NULL, '2018-12-02 09:00:11', '2018-12-02 14:30:11', 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, '', NULL, 0, NULL, '', 'WB', NULL, NULL, NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(256, 'SP FIRM', 2, 2, NULL, NULL, NULL, '', NULL, NULL, NULL, '--NOT', '2018-12-02', NULL, '', NULL, NULL, NULL, NULL, 'India', NULL, NULL, NULL, NULL, '2018-12-02 09:00:20', '2018-12-02 14:31:20', 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, '', NULL, 0, NULL, '', 'WB', NULL, NULL, NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(257, 'SD', 2, 2, NULL, NULL, NULL, '', NULL, NULL, NULL, '--NOT', '2018-12-02', NULL, '', NULL, NULL, NULL, NULL, 'India', NULL, NULL, NULL, NULL, '2018-12-02 09:00:58', '2018-12-02 14:33:55', 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, '', NULL, 0, NULL, '', 'WB', NULL, NULL, NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(258, 'mithun pat', 2, 2, NULL, NULL, NULL, '', NULL, NULL, NULL, '', '2018-12-06', '', '', NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, '2018-12-06 10:21:59', '2018-12-25 08:49:15', 1, 10309, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, '', NULL, 0, NULL, '', 'WB', NULL, NULL, NULL, NULL, NULL, '                                     ', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(259, 'Storage', 247, 247, '', '', '', '65956', '', '', NULL, '', '2017-01-06', '', '51@@rr.co', '', '', '', '', '', '', '', '', '', '2018-12-10 04:26:43', '2019-12-05 03:36:13', 1, 1, '', '', '', '', '', '', '', '', '', '', 0, '', '', '', 0, '', '', 'WB', '', '', '', '', '', '', '', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(260, 'STORAGE3', 259, 259, '', '', '', '999', '', '', NULL, '', '2017-01-07', '', '', '', '', '', '', '', '', '', '', '', '2018-12-10 04:59:03', '2019-12-05 03:36:34', 1, 1, '', '', '', '', '', '', '', '', '', '', 0, '', '', '', 0, '', '', 'WB', '', '', '', '', '', '', '', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(261, 'PP', 2, 2, NULL, NULL, NULL, '', NULL, NULL, NULL, '', '2018-12-10', '', '', NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, '2018-12-10 05:18:21', '2018-12-10 10:48:21', 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, 'WB', NULL, NULL, NULL, NULL, NULL, '                                     ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_pd` (`ID`, `Name`, `AddressID`, `LocalAddressID`, `GurdianName`, `GurdianRelation`, `SpouseName`, `ContactNo`, `PAN`, `VAT`, `DOB`, `Age`, `DOJ`, `Gender`, `Email`, `Website`, `EPFNo`, `ESINo`, `PassportNo`, `Country`, `AadhaarNo`, `Path`, `Image`, `ImageID`, `CreateTime`, `ModifyTime`, `CreatedBy`, `ModifiedBy`, `Description`, `BankName`, `BankBranch`, `AccountNo`, `BANKCODE`, `Occupation`, `Fax`, `VoterID`, `area_operation`, `BankAccountType`, `OLDID`, `MaritalStatus`, `Education`, `Nationality`, `AnnualIncome`, `TagLine`, `TEL`, `State`, `CIN`, `TAN`, `CST`, `TIN`, `GST`, `MAP`, `WhatsApp`, `DesignationID`, `Religion`, `FatherName`, `FatherEducation`, `FatherOccupation`, `MotherName`, `MotherEducation`, `MotherOccupation`, `Dependents`, `GurdianOccupation`, `PreviousSchool`, `PreviousClass`, `ReasonOfLeaving`, `BirthMark`, `AnyDisease`, `DiseasePeriod`, `Disease`, `DiseasePrecaution`, `AdmissionClass`, `AdmissionAge`, `AdmissionDate`) VALUES
(262, 'DSE', 2, 2, NULL, NULL, NULL, '', NULL, NULL, NULL, '', '2018-12-10', '', '', NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, '2018-12-10 05:20:14', '2018-12-10 10:50:14', 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, 'WB', NULL, NULL, NULL, NULL, NULL, '                                     ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(263, 'jkhgfjghjfg', 2, 2, NULL, NULL, NULL, '', NULL, NULL, NULL, '', '2018-12-10', '', '', NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, '2018-12-10 05:21:38', '2018-12-10 10:51:38', 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, 'WB', NULL, NULL, NULL, NULL, NULL, '                                     ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(264, 'NEW PATEINFNFNF', 260, 260, NULL, NULL, NULL, '96666', NULL, NULL, NULL, '29 YEARS', '2018-12-10', 'FMALE', '3', NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, '2018-12-10 05:25:47', '2018-12-10 10:55:47', 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, 'WB', NULL, NULL, NULL, NULL, NULL, '12111212131                                     ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(265, 'Mithun Mandal', 2, 2, NULL, NULL, NULL, '9851441994', NULL, NULL, NULL, '', '2017-01-11', '', '', NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, '2018-12-10 05:27:00', '2018-12-31 08:38:52', 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, '', 'WB', NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(266, 'Class4', 0, 0, '', '', '', '', '', '', NULL, '', NULL, '', '', '', '', '', '', '', '', '', '', '0', '2018-12-10 05:29:56', '2019-12-27 13:38:36', 1, 3, '', '', '', '', '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', 0, '', '', '', '', '', 0, '', '', '', '', '', NULL),
(267, 'rterterte', 2, 2, NULL, NULL, NULL, '', NULL, NULL, NULL, '', '2018-12-10', '', '', NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, '2018-12-10 05:34:33', '2018-12-10 11:04:33', 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, 'WB', NULL, NULL, NULL, NULL, NULL, '                                     ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(268, 'PATIENT FDS', 261, 261, NULL, NULL, NULL, '9863212457', NULL, NULL, NULL, '25', '2018-12-10', 'MALE', 'sasa@gmail.cm', NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, '2018-12-10 06:23:21', '2018-12-10 11:53:21', 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, 'WB', NULL, NULL, NULL, NULL, NULL, 'dfnsdkfhksd hfkhksdkf                                     ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(269, 'NAME', 2, 2, NULL, NULL, NULL, '', NULL, NULL, NULL, '', '2018-12-10', '', '', NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, '2018-12-10 13:41:47', '2018-12-10 19:12:03', 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, 'WB', NULL, NULL, NULL, NULL, NULL, '                                     ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(270, 'Ram', 2, 2, NULL, NULL, NULL, '9007409663', NULL, NULL, NULL, '', '2018-12-13', '', 'samirram007@gmail.com', NULL, NULL, NULL, NULL, 'India', NULL, NULL, NULL, NULL, '2018-12-13 15:00:22', '2018-12-13 20:30:22', 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, '', NULL, 0, NULL, '', 'West Bengal', NULL, NULL, NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(271, 'SOBHA', 2, 2, '', '', '', '9775996048', '', '', NULL, '', '2018-12-31', '', '', '', '', '', '', '', '', '', '', '', '2018-12-31 16:40:12', '2019-05-02 10:27:54', 1, 1, '', '', '', '', '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '', '', '', '', '', '', '', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(272, 'MRINMOY SEN', 2, 2, NULL, NULL, NULL, '9775996048', NULL, NULL, NULL, '--NOT', '2018-12-26', NULL, '', NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, '2018-12-26 16:51:38', '2018-12-26 08:51:38', 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, '', '', NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(273, 'SANKU SAHA', 264, 264, NULL, NULL, NULL, '9775996048', NULL, NULL, NULL, '--NOT', '2018-12-26', NULL, '', NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, '2018-12-26 16:51:53', '2018-12-26 08:51:53', 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, '', '', NULL, NULL, NULL, NULL, NULL, '<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(274, 'Samir Ram', 269, 0, '', '', '', '9007409663', '', '', NULL, '', NULL, '', 'samirram007@gmail.com', '', '', '', '', 'India', '', '', '', '', '2019-03-29 14:42:46', '2019-03-29 20:12:46', 3, 3, '', '', '', '', '', '', '', '', '', '', 0, '', '', '', 0, '', '', 'West Bengal', '', '', '', '', '', '', '', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(275, 'Samirrt', 243, 0, '', '', '', '+919007409663', '', '', NULL, '', NULL, '', 'samirram007@gmail.com', '', '', '', '', 'India', '', '', '', '', '2019-03-29 14:50:52', '2019-03-29 20:56:34', 3, 3, '', '', '', '', '', '', '', '', '', '', 0, '', '', '', 0, '', '', 'West Bengal', '', '', '', '', '', '', '', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(276, 'RamHARI', 270, 0, '', '', '', '9007409663', '', '', NULL, '', NULL, '', 'samirram007@gmail.com', '', '', '', '', 'India', '', '', '', '', '2019-03-29 14:51:24', '2019-03-29 20:21:24', 3, 3, '', '', '', '', '', '', '', '', '', '', 0, '', '', '', 0, '', '', 'West Bengal', '', '', '', '', '', '', '', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(277, 'Abir Ram', 271, 0, '', '', '', '+919007409663', '', '', NULL, '', NULL, '', 'samirram007@gmail.com', '', '', '', '', 'India', '', '', '', '', '2019-03-29 15:24:59', '2019-08-06 23:24:32', 3, 3, '', '', '', '', '', '', '', '', '', '', 0, '', '', '', 0, '', '', 'West Bengal', '', '', '', '', '', '', '', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(278, 'Samir Ram', 243, 0, '', '', '', '+919007409663', '', '', NULL, '', NULL, '', 'samirram007@gmail.com', '', '', '', '', 'India', '', '', '', '', '2019-03-29 15:26:54', '2019-03-29 20:56:54', 3, 3, '', '', '', '', '', '', '', '', '', '', 0, '', '', '', 0, '', '', 'West Bengal', '', '', '', '', '', '', '', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(279, 'HAPPY', 272, 0, '', '', '', '+919007409663', '', '', NULL, '', NULL, '', 'samirram@gmail.com', '', '', '', '', 'India', '', '', '', '', '2019-03-29 15:35:13', '2019-03-29 21:05:13', 3, 3, '', '', '', '', '', '', '', '', '', '', 0, '', '', '', 0, '', '', 'WB', '', '', '', '', '', '', '', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(280, 'RAM CUSTOMER', 273, 0, '', '', '', '007409663', '', '', NULL, '', NULL, '', 'samim007@gmail.com', '', '', '', '', 'India', '', '', '', '', '2019-03-29 15:35:46', '2019-04-04 08:39:56', 3, 3, '', '', '', '', '', '', '', '', '', '', 0, '', '', '', 0, '', '', 'WB', '', '', '', '', '', '', '', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(281, 'Arindam', 274, 0, '', '', '', '', '', '', NULL, '', NULL, '', '', '', '', '', '', '', '', '', '', '', '2019-04-07 12:14:47', '2019-04-07 17:44:47', 1, 1, '', '', '', '', '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '', '', '', '', '', '', '', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(282, '', 274, 0, '', '', '', '', '', '', NULL, '', NULL, '', '', '', '', '', '', '', '', '', '', '', '2019-07-20 13:19:09', '2019-07-20 18:49:09', 1, 1, '', '', '', '', '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '', '', '', '', '', '', '', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(283, 'xxx', 274, 0, '', '', '', '', '', '', NULL, '', NULL, '', '', '', '', '', '', 'INDIA', '', '', '', '0', '2019-12-26 20:15:14', '2019-12-27 03:10:32', 3, 3, '', '', '', '', '', '', '', '', '', '', 0, '', '', '', 0, '', '', 'WB', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', 0, '', '', '', '', '', 0, '1', '', '', '', 'Invalid birthday - Please try again!', '2019-12-25'),
(284, 'ds', 274, 0, '', '', '', '', '', '', NULL, '', NULL, '', '', '', '', '', '', 'INDIA', '', '', '', '', '2019-12-26 20:15:14', '2019-12-27 01:45:14', 3, 3, '', '', '', '', '', '', '', '', '', '', 0, '', '', '', 0, '', '', 'WB', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', 0, '', '', '', '', '', 0, '1', '', '', '', '0 years 0 months 0 days', '2019-12-27'),
(285, 'sssss', 274, 0, '', '', '', '', '', '', NULL, '', NULL, '', '', '', '', '', '', 'INDIA', '', '', '', '0', '2019-12-26 20:49:42', '2019-12-27 02:19:42', 3, 3, '', '', '', '', '', '', '', '', '', '', 0, '', '', '', 0, '', '', 'WB', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', 0, '', '', '', '', '', 0, '1', '', '', '', '0 years 0 months 0 days', '2019-12-27'),
(286, '', 274, 0, '', '', '', '', '', '', NULL, '', NULL, '', '', '', '', '', '', 'INDIA', '', '', '', '0', '2019-12-26 21:09:59', '2019-12-27 02:39:59', 3, 3, '', '', '', '', '', '', '', '', '', '', 0, '', '', '', 0, '', '', 'WB', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', 0, '', '', '', '', '', 0, '1', '', '', '', '0 years 0 months 0 days', '2019-12-27'),
(287, '', 274, 0, '', '', '', '', '', '', NULL, '', NULL, '', '', '', '', '', '', 'INDIA', '', '', '', '0', '2019-12-26 21:09:59', '2019-12-27 02:39:59', 3, 3, '', '', '', '', '', '', '', '', '', '', 0, '', '', '', 0, '', '', 'WB', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', 0, '', '', '', '', '', 0, '1', '', '', '', '0 years 0 months 0 days', '2019-12-27'),
(288, '', 274, 0, '', '', '', '', '', '', NULL, '', NULL, '', '', '', '', '', '', 'INDIA', '', '', '', '0', '2019-12-26 21:12:38', '2019-12-27 02:42:38', 3, 3, '', '', '', '', '', '', '', '', '', '', 0, '', '', '', 0, '', '', 'WB', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', 0, '', '', '', '', '', 0, '1', '', '', '', '0 years 0 months 0 days', '2019-12-27'),
(289, 'dddd', 274, 0, '', '', '', '', '', '', NULL, '', NULL, '', '', '', '', '', '', 'INDIA', '', '', '', '0', '2019-12-26 21:16:12', '2019-12-27 02:46:12', 3, 3, '', '', '', '', '', '', '', '', '', '', 0, '', '', '', 0, '', '', 'WB', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', 0, '', '', '', '', '', 0, '1', '', '', '', '0 years 0 months 0 days', '2019-12-27'),
(290, '', 274, 0, '', '', '', '', '', '', NULL, '', NULL, '', '', '', '', '', '', 'INDIA', '', '', '', '0', '2019-12-26 21:16:53', '2019-12-27 02:46:53', 3, 3, '', '', '', '', '', '', '', '', '', '', 0, '', '', '', 0, '', '', 'WB', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', 0, '', '', '', '', '', 0, '1', '', '', '', '0 years 0 months 0 days', '2019-12-27'),
(291, 'fdfdf123', 274, 0, 'g', 'gr', '', '444', '', '', '2019-12-06', '', NULL, 'MALE', '', '', '', '', '', 'INDIA', 'a', '', '', '0', '2019-12-26 21:17:00', '2019-12-27 17:58:51', 3, 3, '', '', '', '', '', '', '', '', '', '', 0, '', '', 'INDIAN', 0, '', '', 'WB', '', '', '', '', '', '', '', 0, 'r', 'f', 'FE', 'Fo', 'm', 'Me', 'Mo', 10, 'go', 'psa', '4', 'lv', 'g', 1, '7', 'yy', 'uu', '7', '0 years 0 months 21 days', '2019-12-27'),
(292, 'ABC TEACHER', 274, 0, '', '', '', '', '', '', NULL, '', NULL, '', '', '', '', '', '', '', '', '', '', '0', '2019-12-28 00:15:05', '2019-12-28 05:45:05', 3, 3, '', '', '', '', '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', 0, '', '', '', '', '', 0, '1', '', '', '', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_servicetype`
--

DROP TABLE IF EXISTS `tbl_servicetype`;
CREATE TABLE `tbl_servicetype` (
  `ID` int(10) UNSIGNED NOT NULL,
  `Name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_servicetype`
--

INSERT INTO `tbl_servicetype` (`ID`, `Name`) VALUES
(1, 'Trading'),
(2, 'Manufacturing'),
(3, 'Service');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_studentclass`
--

DROP TABLE IF EXISTS `tbl_studentclass`;
CREATE TABLE `tbl_studentclass` (
  `AcademicYear` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `StudentID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `ClassID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `SecID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `RollNo` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `IsAdmission` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `VoucherID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `Amount` double NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_studentclass`
--

INSERT INTO `tbl_studentclass` (`AcademicYear`, `StudentID`, `ClassID`, `SecID`, `RollNo`, `IsAdmission`, `VoucherID`, `Amount`) VALUES
(2019, 10371, 10057, 10376, 20, 1, 0, 20000),
(2020, 10371, 10321, 10375, 1, 0, 0, 10000);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tax`
--

DROP TABLE IF EXISTS `tbl_tax`;
CREATE TABLE `tbl_tax` (
  `ID` int(10) UNSIGNED NOT NULL,
  `TaxID` varchar(45) NOT NULL,
  `Prefix` varchar(45) DEFAULT NULL,
  `PercentageOfCalculation` double NOT NULL DEFAULT '0',
  `Nature` int(11) NOT NULL DEFAULT '1',
  `_Desc` varchar(200) DEFAULT NULL,
  `CreatedBy` varchar(45) NOT NULL,
  `CreateModifyTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ParentAccountID` varchar(45) DEFAULT NULL,
  `IsDefault` int(10) UNSIGNED NOT NULL DEFAULT '1',
  `IsActive` int(10) UNSIGNED NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_taxclass`
--

DROP TABLE IF EXISTS `tbl_taxclass`;
CREATE TABLE `tbl_taxclass` (
  `ID` int(10) UNSIGNED NOT NULL,
  `CODE` varchar(45) DEFAULT NULL,
  `Name` varchar(200) DEFAULT NULL,
  `Alias` varchar(200) DEFAULT NULL,
  `Percentage` double NOT NULL DEFAULT '0',
  `TaxTypeID` varchar(45) NOT NULL,
  `IsSalesTax` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `CreatedBy` varchar(45) DEFAULT NULL,
  `CreateModifyTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `IsDeleted` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `IsPurchaseTax` int(10) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_taxclass`
--

INSERT INTO `tbl_taxclass` (`ID`, `CODE`, `Name`, `Alias`, `Percentage`, `TaxTypeID`, `IsSalesTax`, `CreatedBy`, `CreateModifyTime`, `IsDeleted`, `IsPurchaseTax`) VALUES
(1, 'TC1', 'Branch Transfer Inward (As Agent/Auctioneer)', 'Branch Transfer Inward (As Agent/Auctioneer)', 0, 'Exempted', 0, NULL, '2013-07-18 14:49:51', 0, 0),
(2, 'TC2', 'Branch Transfer Inward (Within west Bengal)', 'Branch Transfer Inward (Within west Bengal)', 0, 'Exempted', 0, NULL, '2013-07-18 14:49:51', 0, 0),
(3, 'TC3', 'Consignment/Branch Transfer Inward', 'Consignment/Branch Transfer Inward', 0, 'Exempted', 0, NULL, '2013-07-18 14:49:51', 0, 0),
(4, 'TC4', 'Consignment/Branch Transfer Inward (Within State)', 'Consignment/Branch Transfer Inward (Within State)', 0, 'Exempted', 0, NULL, '2013-07-18 14:49:51', 0, 0),
(5, 'TC5', 'Consignment/Branch Transfer Outward', 'Consignment/Branch Transfer Outward', 0, 'Exempted', 1, NULL, '2013-07-18 14:49:51', 0, 0),
(6, 'TC6', 'Consignment/Branch Transfer Outward - Exempted Goods', 'Consignment/Branch Transfer Outward - Exempted Goods', 0, 'Exempted', 1, NULL, '2013-07-18 14:49:51', 0, 0),
(7, 'TC7', 'Consignment/Branch Transfer Outward- Imorted Goods', 'Consignment/Branch Transfer Outward- Imorted Goods', 0, 'Exempted', 1, NULL, '2013-07-18 14:49:51', 0, 0),
(8, 'TC8', 'Consignment/Branch Transfer Outward  - Rate >12.5%', 'Consignment/Branch Transfer Outward  - Rate >12.5%', 0, 'Exempted', 1, NULL, '2013-07-18 14:49:51', 0, 0),
(9, 'TC9', 'Consignment/Branch Transfer Outward - Rate <4%', 'Consignment/Branch Transfer Outward - Rate <4%', 0, 'Exempted', 1, NULL, '2013-07-18 14:49:51', 0, 0),
(10, 'TC10', 'Consignment/Branch Transfer Outward (Within State )', 'Consignment/Branch Transfer Outward (Within State )', 0, 'Exempted', 1, NULL, '2013-07-18 14:49:51', 0, 0),
(11, 'TC11', 'Export', 'Export', 0, 'Exempted', 1, NULL, '2013-07-18 14:49:51', 0, 0),
(12, 'TC12', 'Import', 'Import', 0, 'Exempted', 1, NULL, '2013-07-18 14:49:51', 0, 0),
(13, 'TC13', 'Input Vat @ 1% (Purchase@1%)', 'Input Vat @ 1% (Purchase@1%)', 1, 'Vat', 0, NULL, '2013-07-18 14:49:51', 0, 0),
(14, 'TC14', 'Input Vat @ 12.5% (Purchase@12.5%)', 'Input Vat @ 12.5% (Purchase@12.5%)', 12.5, 'Vat', 0, NULL, '2013-07-18 14:49:51', 0, 0),
(15, 'TC15', 'Input Vat @ 4% (Purchase@ 4%)', 'Input Vat @ 4% (Purchase@ 4%)', 4, 'Vat', 0, NULL, '2013-07-18 14:49:51', 0, 0),
(16, 'TC16', 'Inter - State Purchases', 'Inter - State Purchases', 0, 'Exempted', 0, NULL, '2013-07-18 14:49:52', 0, 0),
(17, 'TC17', 'Inter - State Sale', 'Inter - State Sale', 0, 'CST', 1, NULL, '2013-07-18 14:49:52', 0, 0),
(18, 'TC18', 'Other Exempt Sale', 'Other Exempt Sale', 0, 'Exempted', 1, NULL, '2013-07-18 14:49:52', 0, 0),
(19, 'TC19', 'Output Vat @ 1% ( Sale @ 1%)', 'Output Vat @ 1% ( Sale @ 1%)', 1, 'Vat', 1, NULL, '2013-07-18 14:49:52', 0, 0),
(20, 'TC20', 'Output Vat @ 12.5% ( Sale @ 12.5%)', 'Output Vat @ 12.5% ( Sale @ 12.5%)', 12.5, 'Vat', 1, NULL, '2013-07-18 14:49:52', 0, 0),
(21, 'TC21', 'Output Vat @ 12.5% on works Content (Work Content @12.5%)', 'Output Vat @ 12.5% on works Content (Work Content @12.5%)', 12.5, 'Vat', 1, NULL, '2013-07-18 14:49:52', 0, 0),
(22, 'TC22', 'Output Vat @ 4% (Sale @ 4%) ', 'Output Vat @ 4% (Sale @ 4%) ', 4, 'Vat', 1, NULL, '2013-07-18 14:49:52', 0, 0),
(23, 'TC23', 'Output Vat @ 4% on works Content (Work Content @4%)', 'Output Vat @ 4% on works Content (Work Content @4%)', 4, 'Vat', 1, NULL, '2013-07-18 14:49:52', 0, 0),
(24, 'TC24', 'Purchase From URDs Capital Goods @ 12.5%', 'Purchase From URDs Capital Goods @ 12.5%', 12.5, 'Vat', 0, NULL, '2013-07-18 14:49:52', 0, 0),
(25, 'TC25', 'Purchase From URDs Capital Goods @ 4%', 'Purchase From URDs Capital Goods @ 4%', 4, 'Vat', 0, NULL, '2013-07-18 14:49:52', 0, 0),
(26, 'TC26', 'Purchase From URDs - Other Goods (Box 15E)', 'Purchase From URDs - Other Goods (Box 15E)', 0, 'Exempted', 0, NULL, '2013-07-18 14:49:52', 0, 0),
(27, 'TC27', 'Purchase From URDs - Taxable Goods @ 1%', 'Purchase From URDs - Taxable Goods @ 1%', 1, 'Vat', 0, NULL, '2013-07-18 14:49:52', 0, 0),
(28, 'TC28', 'Purchase From URDs - Taxable Goods @ 12.5%', 'Purchase From URDs - Taxable Goods @ 12.5%', 12.5, 'Vat', 0, NULL, '2013-07-18 14:49:52', 0, 0),
(29, 'TC29', 'Purchase From URDs - Taxable Goods @ 4%', 'Purchase From URDs - Taxable Goods @ 4%', 4, 'Vat', 0, NULL, '2013-07-18 14:49:52', 0, 0),
(30, 'TC30', 'Purchase of Raw Jute- By Millers ', 'Purchase of Raw Jute- By Millers ', 2, 'Vat', 0, NULL, '2013-07-18 14:49:52', 0, 0),
(31, 'TC31', 'Purchase of Raw Jute- By Shippers', 'Purchase of Raw Jute- By Shippers', 0, 'Exempted', 0, NULL, '2013-07-18 14:49:52', 0, 0),
(32, 'TC32', 'Purchase of Capital Goods @ 12.5%', 'Purchase of Capital Goods @ 12.5%', 12.5, 'Vat', 0, NULL, '2013-07-18 14:49:52', 0, 0),
(33, 'TC33', 'Purchase of Capital Goods @ 4%', 'Purchase of Capital Goods @ 4%', 4, 'Vat', 0, NULL, '2013-07-18 14:49:52', 0, 0),
(34, 'TC34', 'Purchase - Exempted', 'Purchase - Exempted', 0, 'Exempted', 0, NULL, '2013-07-18 14:49:52', 0, 0),
(35, 'TC35', 'Purchase From Composition Dealers', 'Purchase From Composition Dealers', 0, 'Exempted', 0, NULL, '2013-07-18 14:49:52', 0, 0),
(36, 'TC36', 'Purchase From Unregisterd Dealers', 'Purchase From Unregisterd Dealers', 0, 'Vat', 0, NULL, '2013-07-18 14:49:52', 0, 0),
(37, 'TC37', 'Purchase In The Course Of Import India', 'Purchase In The Course Of Import India', 0, 'Exempted', 0, NULL, '2013-07-18 14:49:52', 0, 0),
(38, 'TC38', 'Purchase MRP Based', 'Purchase MRP Based', 0, 'Exempted', 0, NULL, '2013-07-18 14:49:52', 0, 0),
(39, 'TC39', 'Purchase Others', 'Purchase Others', 0, 'Vat', 0, NULL, '2013-07-18 14:49:52', 0, 0),
(40, 'TC40', 'Sale In The Course Of Export Out Of India', 'Sale In The Course Of Export Out Of India', 0, 'Exempted', 1, NULL, '2013-07-18 14:49:52', 0, 0),
(41, 'TC41', 'Sale - Exempt', 'Sale - Exempt', 0, 'Exempted', 1, NULL, '2013-07-18 14:49:52', 0, 0),
(42, 'TC42', 'Sales In the Course Of Import Into India', 'Sales In the Course Of Import Into India', 0, 'Exempted', 1, NULL, '2013-07-18 14:49:52', 0, 0),
(43, 'TC43', 'Sales Based On MRP', 'Sales Based On MRP', 0, 'Exempted', 1, NULL, '2013-07-18 14:49:52', 0, 0),
(44, 'TC44', 'Sale Through Ouctioneer/Agents', 'Sale Through Ouctioneer/Agents', 0, 'Exempted', 1, NULL, '2013-07-18 14:49:52', 0, 0),
(45, 'TC45', 'Sale Through Broker ( Private Trity sales )', 'Sale Through Broker ( Private Trity sales )', 0, 'Exempted', 1, NULL, '2013-07-18 14:49:52', 0, 0),
(46, 'TC46', 'sale To Local Agent', 'sale To Local Agent', 0, 'Exempted', 1, NULL, '2013-07-18 14:49:52', 0, 0),
(47, 'TC47', 'sale Zero Rated', 'sale Zero Rated', 0, 'Zero Rated', 1, NULL, '2013-07-18 14:49:52', 0, 0),
(48, 'TC48', 'Work Contract', 'Work Contract', 0, 'Exempted', 1, NULL, '2013-07-18 14:49:52', 0, 0),
(49, 'TC49', 'Work Contract Exempt', 'Work Contract Exempt', 0, 'Exempted', 1, NULL, '2013-07-18 14:49:52', 0, 0),
(50, 'TC50', 'Input Vat @ 5% (Purchase@ 5%)', 'Input Vat @ 5% (Purchase@ 5%)', 5, 'VAT', 0, NULL, '2013-11-06 13:39:14', 0, 1),
(51, 'TC51', 'Output Vat @ 5% (Sale @ 5%) ', 'Output Vat @ 5% (Sale @ 5%) ', 5, 'VAT', 1, NULL, '2013-11-06 13:40:01', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_taxtype`
--

DROP TABLE IF EXISTS `tbl_taxtype`;
CREATE TABLE `tbl_taxtype` (
  `ID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `Code` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `Name` varchar(200) CHARACTER SET latin1 DEFAULT NULL,
  `IsDeleted` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `CreatedBy` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `CreatemodifyTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Description` varchar(500) CHARACTER SET latin1 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_taxtype`
--

INSERT INTO `tbl_taxtype` (`ID`, `Code`, `Name`, `IsDeleted`, `CreatedBy`, `CreatemodifyTime`, `Description`) VALUES
(0, 'ZeroRated', '-SELECT-', 0, NULL, '2013-07-27 21:50:29', NULL),
(1, 'CENVAT', 'CENVAT', 0, NULL, '2013-06-13 11:11:47', NULL),
(2, 'CST', 'CST', 0, NULL, '2013-06-13 11:11:47', NULL),
(3, 'Excise', 'Excise', 0, NULL, '2013-06-13 11:11:47', NULL),
(4, 'FBT', 'FBT', 0, NULL, '2013-06-13 11:11:47', NULL),
(5, 'Others', 'Others', 0, NULL, '2013-06-13 11:11:47', NULL),
(6, 'ServiceTax', 'Service Tax', 0, NULL, '2013-06-13 11:11:47', NULL),
(7, 'TCS', 'TCS', 0, NULL, '2013-06-13 11:11:47', NULL),
(8, 'TDS', 'TDS', 0, NULL, '2013-06-13 11:11:47', NULL),
(9, 'VAT', 'VAT', 0, NULL, '2013-06-13 11:11:47', NULL),
(10, 'Exempted', 'Exempted', 0, NULL, '2013-07-27 21:50:10', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_unit`
--

DROP TABLE IF EXISTS `tbl_unit`;
CREATE TABLE `tbl_unit` (
  `ID` int(10) UNSIGNED NOT NULL,
  `Name` varchar(100) DEFAULT NULL,
  `Alias` varchar(45) DEFAULT NULL,
  `Description` varchar(200) DEFAULT NULL,
  `CreatedBy` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `CreateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ModifiedBy` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `ModifyTime` datetime DEFAULT NULL,
  `UnitTypeID` int(10) UNSIGNED NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_unit`
--

INSERT INTO `tbl_unit` (`ID`, `Name`, `Alias`, `Description`, `CreatedBy`, `CreateTime`, `ModifiedBy`, `ModifyTime`, `UnitTypeID`) VALUES
(1, 'PCS', 'PCS', 'PCS', 1, '2013-04-16 16:02:42', 3, '2019-08-06 23:29:17', 1),
(2, 'MM', 'MM', 'MM', 0, '2017-01-22 21:27:39', 3, '2019-08-06 23:28:27', 1),
(3, 'PG', 'PG', '', 0, '2017-01-27 06:05:33', 0, '2018-12-06 16:33:46', 1),
(4, 'MM(1ST HR)', 'MM(1ST HR)', '', 0, '2017-01-27 06:05:33', 0, '2018-12-06 16:34:39', 1),
(5, 'G/DL', 'G/DL', '', 0, '2017-01-27 06:05:33', 0, '2018-12-06 16:35:01', 1),
(6, '10//CUMM', '10//CUMM', '', 0, '2017-01-27 06:07:04', 0, '2018-12-06 16:35:50', 1),
(7, 'Liter', 'LT', 'LITER', 0, '2017-01-27 06:27:58', 0, NULL, 1),
(8, 'MiliLiter', 'ML', 'MiliLiter', 0, '2017-01-27 06:29:03', 0, NULL, 1),
(9, 'TOLL', 'TOLL', 'COUNT', 1, '2018-11-19 20:58:59', 0, '2018-11-30 04:47:55', 1),
(10, 'ml/hr', 'ml/hr', 'ml/hr', 1, '2018-12-04 00:04:50', 0, '2018-12-04 05:34:50', 1),
(11, 'ng/ml', 'ng/ml', '', 10311, '2018-12-18 08:48:15', 0, '2019-01-01 05:14:42', 1),
(12, 'g/dl', 'g/dl', '', 10311, '2018-12-18 08:48:48', 0, '2018-12-18 08:48:48', 1),
(13, 'iu/ml', 'iu/ml', '', 10311, '2018-12-18 08:49:06', 0, '2018-12-18 08:49:06', 1),
(14, 'mg/dl', 'mg/dl', '', 1, '2018-12-18 09:07:19', 0, '2018-12-18 09:07:19', 1),
(15, 'ng/ml      ', 'ng/ml      ', '', 10309, '2019-01-01 05:13:48', 0, '2019-01-01 05:13:48', 1),
(16, 'mmol/L', 'mmol/L', '', 10309, '2019-01-10 05:35:42', 0, '2019-01-10 05:35:42', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_valuationmethods`
--

DROP TABLE IF EXISTS `tbl_valuationmethods`;
CREATE TABLE `tbl_valuationmethods` (
  `ID` int(10) UNSIGNED NOT NULL,
  `ValuationMethodsID` varchar(45) NOT NULL,
  `ValuationMethods` varchar(45) NOT NULL,
  `Prefix` varchar(45) DEFAULT NULL,
  `CreatedBy` varchar(45) DEFAULT NULL,
  `CreateModifyTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `IsCosting` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `IsPricing` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `IsDeleted` int(10) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_valuationmethods`
--

INSERT INTO `tbl_valuationmethods` (`ID`, `ValuationMethodsID`, `ValuationMethods`, `Prefix`, `CreatedBy`, `CreateModifyTime`, `IsCosting`, `IsPricing`, `IsDeleted`) VALUES
(1, 'VM01', 'At Zero Cost', 'At Zero Cost', 'ADMIN', '2013-06-10 17:35:06', 1, 0, 1),
(2, 'VM02', 'At Zero Price', 'At Zero Price', 'ADMIN', '2013-06-10 17:35:07', 0, 1, 1),
(3, 'VM03', 'Avg. Cost', 'Avg. Cost', 'ADMIN', '2013-06-10 17:35:07', 1, 0, 0),
(4, 'VM04', 'Avg. Price', 'Avg. Price', 'ADMIN', '2013-06-10 17:35:07', 0, 1, 0),
(5, 'VM05', 'Default', 'Default', 'ADMIN', '2013-06-10 17:35:07', 1, 1, 1),
(6, 'VM06', 'FIFO', 'FIFO', 'ADMIN', '2013-06-10 17:35:07', 0, 0, 0),
(7, 'VM07', 'FIFO Perpetual', 'FIFO Perpetual', 'ADMIN', '2013-06-10 17:35:07', 0, 1, 0),
(8, 'VM08', 'Last Purchase Cost', 'Last Purchase Cost', 'ADMIN', '2013-06-10 17:35:07', 1, 0, 0),
(9, 'VM09', 'Last Sale Price', 'Last Sale Price', 'ADMIN', '2013-06-10 17:35:07', 0, 1, 0),
(10, 'VM10', 'LIFO Annual', 'LIFO Annual', 'ADMIN', '2013-06-10 17:35:07', 0, 1, 0),
(11, 'VM11', 'LIFO Perpetual', 'LIFO Perpetual', 'ADMIN', '2013-06-10 17:35:07', 0, 1, 0),
(12, 'VM12', 'Monthly Avg. Cost', 'Monthly Avg. Cost', 'ADMIN', '2013-06-10 17:35:07', 1, 0, 0),
(13, 'VM13', 'Std. Cost', 'Std. Cost', 'ADMIN', '2013-06-10 17:35:07', 1, 0, 0),
(14, 'VM14', 'Std. Price', 'Std. Price', 'ADMIN', '2013-06-10 17:35:07', 0, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_voucheraccount`
--

DROP TABLE IF EXISTS `tbl_voucheraccount`;
CREATE TABLE `tbl_voucheraccount` (
  `ID` int(10) UNSIGNED NOT NULL,
  `AccountTypeID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `DrCr` int(11) NOT NULL DEFAULT '0',
  `CalculationMethodID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `Percentage` int(10) UNSIGNED NOT NULL DEFAULT '100',
  `AcGroupID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `AccountID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `IsPermanent` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `VoucherTypeID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `IsEditable` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `IsDeleted` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `IsTaxable` int(10) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_voucheraccount`
--

INSERT INTO `tbl_voucheraccount` (`ID`, `AccountTypeID`, `DrCr`, `CalculationMethodID`, `Percentage`, `AcGroupID`, `AccountID`, `IsPermanent`, `VoucherTypeID`, `IsEditable`, `IsDeleted`, `IsTaxable`) VALUES
(64, 2, 1, 1, 100, 0, 1010, 1, 17, 0, 0, 1),
(65, 1, -1, 2, 100, 131, 0, 1, 17, 0, 0, 0),
(66, 4, 1, 3, 18, 0, 10364, 1, 17, 0, 0, 0),
(67, 0, 1, 2, 0, 0, 0, 1, 17, 0, 1, 0),
(68, 1, 0, 2, 0, 25, 0, 1, 4, 0, 0, 0),
(69, 4, 0, 15, 0, 0, 44, 1, 4, 0, 0, 0),
(70, 3, 0, 2, 0, 30, 0, 1, 4, 0, 0, 0),
(71, 3, 0, 2, 0, 28, 0, 1, 4, 0, 0, 0),
(72, 3, 0, 2, 0, 29, 0, 1, 4, 0, 0, 0),
(73, 3, 0, 2, 0, 27, 0, 1, 4, 0, 0, 0),
(74, 1, -1, 2, 100, 131, 0, 1, 16, 0, 0, 1),
(75, 4, 1, 3, 18, 0, 10364, 1, 16, 0, 0, 0),
(76, 3, -1, 6, 0, 0, 1021, 1, 16, 0, 0, 1),
(77, 3, 0, 2, 0, 27, 0, 1, 16, 0, 0, 0),
(78, 3, 0, 2, 0, 30, 0, 1, 16, 0, 0, 0),
(79, 3, 0, 2, 0, 28, 0, 1, 16, 0, 0, 0),
(80, 2, 1, 1, 100, 0, 1009, 1, 9, 1, 0, 1),
(81, 1, -1, 2, 100, 132, 0, 1, 9, 0, 0, 0),
(82, 3, -1, 6, 0, 0, 10366, 0, 9, 0, 0, 1),
(83, 4, 1, 3, 18, 0, 10064, 0, 9, 0, 0, 0),
(84, 0, 1, 3, 18, 0, 0, 0, 9, 0, 1, 0),
(85, 0, 1, 2, 0, 0, 0, 1, 9, 0, 1, 0),
(86, 1, 0, 2, 0, 26, 0, 1, 12, 0, 0, 0),
(87, 3, 0, 2, 0, 29, 0, 1, 12, 0, 0, 0),
(88, 3, 0, 2, 0, 27, 0, 1, 12, 0, 0, 0),
(89, 3, 0, 2, 0, 30, 0, 1, 12, 0, 0, 0),
(90, 3, 0, 2, 0, 28, 0, 1, 12, 0, 0, 0),
(91, 3, -1, 8, 100, 115, 0, 1, 7, 0, 0, 0),
(92, 3, -1, 5, 100, 0, 1001, 1, 7, 0, 0, 0),
(93, 2, 0, 2, 0, 0, 9, 1, 12, 0, 0, 0),
(94, 3, -1, 8, 100, 0, 1001, 1, 11, 0, 0, 0),
(95, 2, 0, 2, 0, 8, 0, 1, 1, 0, 0, 0),
(96, 2, 0, 2, 0, 11, 0, 1, 1, 0, 0, 0),
(97, 1, 0, 2, 0, 11, 0, 1, 1, 0, 0, 0),
(98, 1, 0, 2, 0, 25, 0, 1, 21, 0, 0, 0),
(99, 4, 0, 2, 0, 0, 44, 1, 21, 0, 0, 0),
(100, 1, 0, 2, 0, 26, 0, 1, 22, 0, 0, 0),
(101, 3, 0, 2, 0, 0, 44, 1, 22, 0, 0, 0),
(102, 1, 0, 2, 0, 0, 14, 1, 8, 0, 0, 0),
(103, 2, 0, 2, 0, 0, 6, 1, 8, 0, 0, 0),
(104, 2, 0, 2, 0, 0, 10, 1, 21, 0, 0, 0),
(105, 2, 0, 2, 0, 0, 10, 1, 4, 0, 0, 0),
(106, 4, 0, 15, 0, 0, 44, 1, 22, 0, 0, 0),
(107, 2, 0, 2, 0, 0, 9, 1, 22, 0, 0, 0),
(108, 0, 1, 0, 0, 0, 0, 1, 9, 0, 1, 0),
(109, 4, 0, 15, 0, 0, 44, 1, 12, 0, 0, 0),
(110, 2, 1, 1, 100, 0, 1010, 1, 16, 0, 0, 0),
(111, 3, 1, 6, 0, 0, 1021, 0, 17, 0, 0, 1),
(112, 3, -1, 2, 0, 0, 1027, 1, 5, 0, 0, 0),
(113, 2, 1, 1, 100, 0, 1009, 1, 10, 0, 0, 0),
(114, 1, -1, 2, 100, 132, 0, 1, 10, 0, 0, 0),
(115, 0, -1, 1, 100, 0, 0, 1, 10, 0, 1, 0),
(116, 0, 1, 1, 100, 101, 1001, 1, 17, 0, 1, 0),
(117, 0, 1, 2, 100, 101, 1001, 1, 17, 0, 1, 0),
(118, 0, 1, 2, 100, 101, 1001, 1, 17, 0, 1, 0),
(119, 0, 1, 2, 100, 101, 1001, 1, 17, 0, 1, 0),
(120, 0, 1, 2, 100, 101, 1001, 0, 17, 0, 1, 0),
(121, 0, 1, 2, 100, 101, 1001, 1, 17, 0, 1, 0),
(122, 0, 1, 2, 100, 101, 1001, 1, 17, 0, 1, 0),
(123, 0, 1, 2, 100, 101, 1001, 1, 17, 0, 1, 0),
(124, 4, 1, 3, 18, 0, 10064, 0, 10, 0, 0, 0),
(125, 2, 1, 1, 100, 0, 1005, 0, 24, 0, 0, 1),
(126, 3, -1, 6, 0, 0, 10366, 0, 10, 0, 0, 0),
(127, 3, 1, 6, 100, 0, 1010, 1, 10, 0, 0, 1),
(128, 1, -1, 1, 100, 0, 1006, 0, 24, 0, 0, 1),
(129, 3, 1, 2, 100, 0, 1017, 1, 5, 0, 0, 0),
(130, 3, -1, 8, 100, 115, 0, 1, 11, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_vouchercategory`
--

DROP TABLE IF EXISTS `tbl_vouchercategory`;
CREATE TABLE `tbl_vouchercategory` (
  `ID` int(10) UNSIGNED NOT NULL,
  `VoucherCategory` varchar(200) NOT NULL,
  `ProcessID` varchar(45) DEFAULT NULL,
  `CreatedBy` varchar(45) DEFAULT NULL,
  `CreatemodifyTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ActivityHead` varchar(45) DEFAULT NULL,
  `InventoryHead` varchar(45) DEFAULT NULL,
  `AditionalHead` varchar(45) DEFAULT NULL,
  `InvevntoryID` int(10) UNSIGNED DEFAULT '0',
  `CostCentreID` int(10) UNSIGNED DEFAULT '0',
  `AppClassID` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_vouchercategory`
--

INSERT INTO `tbl_vouchercategory` (`ID`, `VoucherCategory`, `ProcessID`, `CreatedBy`, `CreatemodifyTime`, `ActivityHead`, `InventoryHead`, `AditionalHead`, `InvevntoryID`, `CostCentreID`, `AppClassID`) VALUES
(1, 'Inventory Movement', NULL, NULL, '2013-08-30 10:29:55', NULL, NULL, NULL, NULL, NULL, ''),
(2, 'Bank Reconcilation', NULL, NULL, '2013-08-30 10:29:55', NULL, NULL, NULL, NULL, NULL, ''),
(3, 'Item Invoice', NULL, NULL, '2013-08-30 10:29:55', NULL, NULL, NULL, NULL, NULL, ''),
(4, 'Item With Accounts {Invoice}', NULL, NULL, '2013-08-31 19:16:17', NULL, NULL, NULL, NULL, NULL, ''),
(5, 'Accounts {Invoice}', NULL, NULL, '2013-08-31 19:16:17', NULL, NULL, NULL, NULL, NULL, ''),
(6, 'Manufacturing Voucher', NULL, NULL, '2013-08-31 19:16:17', NULL, NULL, NULL, NULL, NULL, ''),
(7, 'DebitCredit', NULL, NULL, '2013-08-31 19:16:17', NULL, NULL, NULL, NULL, NULL, ''),
(8, 'Attendance', NULL, NULL, '2013-10-16 22:17:04', NULL, NULL, NULL, NULL, NULL, ''),
(9, 'Payroll', NULL, NULL, '2013-10-16 22:19:25', NULL, NULL, NULL, NULL, NULL, ''),
(10, 'CreditDebit', NULL, NULL, '2013-10-31 21:02:08', NULL, NULL, NULL, NULL, NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_voucherdetails`
--

DROP TABLE IF EXISTS `tbl_voucherdetails`;
CREATE TABLE `tbl_voucherdetails` (
  `ID` int(10) UNSIGNED NOT NULL,
  `EntryIndex` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `transactionid` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `VoucherID` int(10) UNSIGNED DEFAULT '0',
  `AccountTypeID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `AccountID` int(10) UNSIGNED DEFAULT '0',
  `SubAccountID` int(10) UNSIGNED DEFAULT NULL,
  `Debit` double NOT NULL DEFAULT '0',
  `Credit` double NOT NULL DEFAULT '0',
  `PaymentReceiptTypeID` int(10) UNSIGNED DEFAULT '0',
  `CalculationMethodID` int(10) UNSIGNED DEFAULT '1',
  `AttendanceTypeID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `VoucherNature` int(11) NOT NULL DEFAULT '0',
  `Note` text,
  `InstrumentID` int(10) UNSIGNED DEFAULT NULL,
  `TaxAccountID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `TaxClassID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `TaxTypeID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `TaxRate` double NOT NULL DEFAULT '0',
  `IsTaxable` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `TaxableAmount` double NOT NULL DEFAULT '0',
  `ServiceChargeAccountID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `ServiceChargeRate` double NOT NULL DEFAULT '0',
  `ServiceChargableAmount` double NOT NULL DEFAULT '0',
  `DiscountAccountID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `DiscountID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `DiscountRate` double NOT NULL DEFAULT '0',
  `DiscountValue` double NOT NULL DEFAULT '0',
  `HasItem` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `CostCategoryID` int(10) UNSIGNED DEFAULT NULL,
  `CostCentreID` int(10) UNSIGNED DEFAULT NULL,
  `GodownID` int(10) UNSIGNED DEFAULT '0',
  `IsClosed` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `IsSaved` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `IsDeleted` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `IsEditable` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `CustomerID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `BillingName` varchar(100) DEFAULT NULL,
  `BillingAddressID` int(10) UNSIGNED DEFAULT NULL,
  `SalesTaxNo` varchar(45) DEFAULT NULL,
  `DeliveryDetailsID` int(10) UNSIGNED DEFAULT NULL,
  `PaymentMode` varchar(100) DEFAULT NULL,
  `IsCancelled` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `AdjustMethodID` int(10) UNSIGNED DEFAULT NULL,
  `CancelledBy` int(10) UNSIGNED DEFAULT NULL,
  `CancelTime` datetime DEFAULT NULL,
  `CancelNote` varchar(250) DEFAULT NULL,
  `EntryPointID` int(10) UNSIGNED NOT NULL DEFAULT '2',
  `MacID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `CreateEntryPointID` int(10) UNSIGNED NOT NULL DEFAULT '2',
  `ModifyEntryPointID` int(10) UNSIGNED NOT NULL DEFAULT '2',
  `ModifyMacID` int(10) UNSIGNED NOT NULL DEFAULT '1',
  `CreatedBy` int(10) UNSIGNED NOT NULL DEFAULT '1',
  `ModifiedBy` int(10) UNSIGNED DEFAULT NULL,
  `ModifyTime` datetime NOT NULL,
  `CreateTime` datetime DEFAULT NULL,
  `PriceLevelID` int(10) UNSIGNED NOT NULL DEFAULT '1',
  `DesignationID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `Grade` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `Percentage` double NOT NULL DEFAULT '0',
  `DrCr` int(11) NOT NULL DEFAULT '0',
  `HasParent` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `HasChild` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `ParentControlID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `ChildControlID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `ControlID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `SourceGodownID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `DestinationGodownID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `SourceOfficeID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `DestinationOfficeID` int(10) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 DELAY_KEY_WRITE=1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_voucherdetails_temp`
--

DROP TABLE IF EXISTS `tbl_voucherdetails_temp`;
CREATE TABLE `tbl_voucherdetails_temp` (
  `ID` int(10) UNSIGNED NOT NULL,
  `EntryIndex` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `transactionid` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `VoucherID` int(10) UNSIGNED DEFAULT '0',
  `ActivityAccountID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `InventoryAccountID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `AccountID` int(10) UNSIGNED DEFAULT '0',
  `SubAccountID` int(10) UNSIGNED DEFAULT NULL,
  `Debit` double NOT NULL DEFAULT '0',
  `Credit` double NOT NULL DEFAULT '0',
  `PaymentReceiptTypeID` int(10) UNSIGNED DEFAULT '0',
  `CalculationMethodID` int(10) UNSIGNED DEFAULT '1',
  `AttendanceTypeID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `VoucherNature` int(11) NOT NULL DEFAULT '0',
  `Note` text,
  `InstrumentID` int(10) UNSIGNED DEFAULT NULL,
  `TaxAccountID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `TaxClassID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `TaxTypeID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `TaxRate` double NOT NULL DEFAULT '0',
  `TaxableAmount` double NOT NULL DEFAULT '0',
  `ServiceChargeAccountID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `ServiceChargeRate` double NOT NULL DEFAULT '0',
  `ServiceChargableAmount` double NOT NULL DEFAULT '0',
  `DiscountAccountID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `DiscountID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `DiscountRate` double NOT NULL DEFAULT '0',
  `DiscountValue` double NOT NULL DEFAULT '0',
  `HasItem` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `CostCategoryID` int(10) UNSIGNED DEFAULT NULL,
  `CostCentreID` int(10) UNSIGNED DEFAULT NULL,
  `GodownID` int(10) UNSIGNED DEFAULT '0',
  `IsClosed` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `IsSaved` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `IsDelete` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `CustomerID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `BillingName` varchar(100) DEFAULT NULL,
  `BillingAddressID` int(10) UNSIGNED DEFAULT NULL,
  `SalesTaxNo` varchar(45) DEFAULT NULL,
  `DeliveryDetailsID` int(10) UNSIGNED DEFAULT NULL,
  `PaymentMode` varchar(100) DEFAULT NULL,
  `IsCancelled` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `AdjustMethodID` int(10) UNSIGNED DEFAULT NULL,
  `CancelledBy` int(10) UNSIGNED DEFAULT NULL,
  `CancelTime` datetime DEFAULT NULL,
  `CancelNote` varchar(250) DEFAULT NULL,
  `EntryPointID` int(10) UNSIGNED NOT NULL DEFAULT '2',
  `MacID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `CreateEntryPointID` int(10) UNSIGNED NOT NULL DEFAULT '2',
  `ModifyEntryPointID` int(10) UNSIGNED NOT NULL DEFAULT '2',
  `ModifyMacID` int(10) UNSIGNED NOT NULL DEFAULT '1',
  `CreatedBy` int(10) UNSIGNED NOT NULL DEFAULT '1',
  `ModifiedBy` int(10) UNSIGNED DEFAULT NULL,
  `ModifyTime` datetime NOT NULL,
  `CreateTime` datetime DEFAULT NULL,
  `PriceLevelID` int(10) UNSIGNED NOT NULL DEFAULT '1',
  `DesignationID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `Grade` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `Percentage` double NOT NULL DEFAULT '0',
  `DrCr` int(11) NOT NULL DEFAULT '0',
  `HasParent` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `HasChild` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `ParentControlID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `ChildControlID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `ControlID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `SourceGodownID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `DestinationGodownID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `SourceOfficeID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `DestinationOfficeID` int(10) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 DELAY_KEY_WRITE=1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_vouchergroup`
--

DROP TABLE IF EXISTS `tbl_vouchergroup`;
CREATE TABLE `tbl_vouchergroup` (
  `ID` int(10) UNSIGNED NOT NULL,
  `Name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_vouchergroup`
--

INSERT INTO `tbl_vouchergroup` (`ID`, `Name`) VALUES
(1, 'PO>GRN>PI'),
(2, 'SO/GDN/SI'),
(3, 'JOURNAL/CONTRA'),
(4, 'PAYMENT/RECEIPT'),
(5, 'DEBIT NOTE/ CREDIT NOTE');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_vouchermaster`
--

DROP TABLE IF EXISTS `tbl_vouchermaster`;
CREATE TABLE `tbl_vouchermaster` (
  `ID` int(10) UNSIGNED NOT NULL,
  `RefVoucherID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `AssignmentID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `VoucherNo` varchar(45) DEFAULT NULL,
  `VoucherCategoryID` int(10) UNSIGNED DEFAULT '0',
  `VoucherTypeID` int(10) UNSIGNED DEFAULT '0',
  `VoucherDate` date NOT NULL,
  `TestDate` date DEFAULT NULL,
  `ActiveDate` date DEFAULT NULL,
  `TargetDate` date DEFAULT NULL,
  `DocumentNo` varchar(45) DEFAULT NULL,
  `InventoryNature` int(11) NOT NULL DEFAULT '0',
  `IsEffectInventoryValue` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `AccountsNature` int(11) NOT NULL DEFAULT '0',
  `IsEffectLedgerValue` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `PayrollNature` int(11) NOT NULL DEFAULT '0',
  `IsEffectPayrollValue` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `VoucherNature` int(11) NOT NULL DEFAULT '0',
  `IsOptional` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `Note` varchar(255) DEFAULT NULL,
  `Signatory` varchar(100) DEFAULT NULL,
  `IsMfgJournal` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `HasItem` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `IsClosed` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `IsSaved` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `IsDelete` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `IsCancelled` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `CancelledBy` int(10) UNSIGNED DEFAULT NULL,
  `CancelTime` datetime DEFAULT NULL,
  `CancelNote` varchar(250) DEFAULT NULL,
  `OfficeID` int(10) UNSIGNED NOT NULL DEFAULT '2',
  `MacID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `FiscalYearID` int(10) UNSIGNED NOT NULL DEFAULT '1920',
  `CalenderYearID` int(10) UNSIGNED NOT NULL DEFAULT '19',
  `MonthID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `DateID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `CompanyID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `AppRegistrationID` varchar(45) DEFAULT NULL,
  `CreateOfficeID` int(10) UNSIGNED NOT NULL DEFAULT '2',
  `ModifyOfficeID` int(10) UNSIGNED NOT NULL DEFAULT '2',
  `ModifyMacID` int(10) UNSIGNED NOT NULL DEFAULT '1',
  `CreatedBy` int(10) UNSIGNED NOT NULL DEFAULT '1',
  `ModifiedBy` int(10) UNSIGNED DEFAULT NULL,
  `ModifyTime` datetime DEFAULT NULL,
  `CreateTime` datetime DEFAULT NULL,
  `PriceLevelID` int(10) UNSIGNED NOT NULL DEFAULT '1',
  `DrCr` int(11) NOT NULL DEFAULT '0',
  `ShowDiscount` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `TaxablePeritem` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `EmployeeID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `CPID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `CartID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `CartDetailsID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `IsVerified` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `VerifiedBy` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `VerifiedTime` datetime DEFAULT NULL,
  `VerifyNote` text,
  `DebitAccountID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `CreditAccountID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `BillingAddressID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `ShippingAddressID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `PDID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `PatientID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `DoctorID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `AccountID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `HasCreditNote` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `HasDebitNote` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `WhichEntry` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `ItemBatchCheckID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `ItemPriceTypeID` int(10) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 DELAY_KEY_WRITE=1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_vouchermasterref`
--

DROP TABLE IF EXISTS `tbl_vouchermasterref`;
CREATE TABLE `tbl_vouchermasterref` (
  `ID` int(10) UNSIGNED NOT NULL,
  `VouvherID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `RefVoucherID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `CreatedBy` int(10) UNSIGNED DEFAULT NULL,
  `ModifiedBy` int(10) UNSIGNED DEFAULT NULL,
  `CreateTime` datetime DEFAULT NULL,
  `ModifyTime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_vouchermaster_temp`
--

DROP TABLE IF EXISTS `tbl_vouchermaster_temp`;
CREATE TABLE `tbl_vouchermaster_temp` (
  `ID` int(10) UNSIGNED NOT NULL,
  `RefVoucherID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `AssignmentID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `VoucherNo` varchar(45) DEFAULT NULL,
  `VoucherCategoryID` int(10) UNSIGNED DEFAULT '0',
  `VoucherTypeID` int(10) UNSIGNED DEFAULT '0',
  `VoucherDate` date NOT NULL,
  `TestDate` date DEFAULT NULL,
  `ActiveDate` date DEFAULT NULL,
  `TargetDate` date DEFAULT NULL,
  `DocumentNo` varchar(45) DEFAULT NULL,
  `InventoryNature` int(11) NOT NULL DEFAULT '0',
  `IsEffectInventoryValue` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `AccountsNature` int(11) NOT NULL DEFAULT '0',
  `IsEffectLedgerValue` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `PayrollNature` int(11) NOT NULL DEFAULT '0',
  `IsEffectPayrollValue` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `VoucherNature` int(11) NOT NULL DEFAULT '0',
  `IsOptional` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `Note` text,
  `Signatory` varchar(100) DEFAULT NULL,
  `IsMfgJournal` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `HasItem` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `IsClosed` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `IsSaved` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `IsDelete` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `IsCancelled` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `CancelledBy` int(10) UNSIGNED DEFAULT NULL,
  `CancelTime` datetime DEFAULT NULL,
  `CancelNote` varchar(250) DEFAULT NULL,
  `OfficeID` int(10) UNSIGNED NOT NULL DEFAULT '2',
  `MacID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `FiscalYearID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `CalenderYearID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `MonthID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `DateID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `CompanyID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `AppRegistrationID` varchar(45) DEFAULT NULL,
  `CreateOfficeID` int(10) UNSIGNED NOT NULL DEFAULT '2',
  `ModifyOfficeID` int(10) UNSIGNED NOT NULL DEFAULT '2',
  `ModifyMacID` int(10) UNSIGNED NOT NULL DEFAULT '1',
  `CreatedBy` int(10) UNSIGNED NOT NULL DEFAULT '1',
  `ModifiedBy` int(10) UNSIGNED DEFAULT NULL,
  `ModifyTime` datetime DEFAULT NULL,
  `CreateTime` datetime DEFAULT NULL,
  `PriceLevelID` int(10) UNSIGNED NOT NULL DEFAULT '1',
  `DrCrEffect` int(11) NOT NULL DEFAULT '0',
  `ShowDiscount` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `TaxablePeritem` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `EmployeeID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `CPID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `CartID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `CartDetailsID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `IsVerified` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `VerifiedBy` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `VerifiedTime` datetime DEFAULT NULL,
  `VerifyNote` text,
  `DebitAccountID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `CreditAccountID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `BillingAddressID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `ShippingAddressID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `PDID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `PatientID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `DoctorID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `AccountID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `HasCreditNote` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `HasDebitNote` int(10) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 DELAY_KEY_WRITE=1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_vouchersession`
--

DROP TABLE IF EXISTS `tbl_vouchersession`;
CREATE TABLE `tbl_vouchersession` (
  `ID` int(10) UNSIGNED NOT NULL,
  `UserID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `VoucherTypeID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `VoucherID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `IsClosed` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `CreateTime` datetime DEFAULT NULL,
  `CloseTime` datetime DEFAULT NULL,
  `CloseBy` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_vouchersession`
--

INSERT INTO `tbl_vouchersession` (`ID`, `UserID`, `VoucherTypeID`, `VoucherID`, `IsClosed`, `CreateTime`, `CloseTime`, `CloseBy`) VALUES
(1, 3, 10, 1, 1, '2019-07-30 00:04:44', '2019-07-31 17:16:00', 3),
(2, 3, 10, 1, 1, '2019-07-30 19:22:38', '2019-07-31 17:16:00', 3),
(3, 3, 17, 2, 1, '2019-07-30 21:47:33', '2019-07-31 20:26:02', 3),
(4, 3, 10, 3, 1, '2019-07-31 17:16:03', '2019-07-31 18:56:51', 3),
(5, 3, 10, 4, 1, '2019-07-31 18:56:54', '2019-07-31 18:59:31', 3),
(6, 3, 10, 5, 1, '2019-07-31 18:59:33', '2019-07-31 19:00:13', 3),
(7, 3, 10, 6, 1, '2019-07-31 19:00:39', '2019-08-02 18:25:30', 3),
(8, 3, 9, 7, 1, '2019-07-31 19:09:11', '2019-07-31 19:30:36', 3),
(9, 3, 10, 6, 1, '2019-07-31 19:15:50', '2019-08-02 18:25:30', 3),
(10, 3, 9, 8, 1, '2019-07-31 19:30:37', '2019-07-31 19:44:30', 3),
(11, 3, 9, 8, 1, '2019-07-31 19:34:29', '2019-07-31 19:44:30', 3),
(12, 3, 9, 8, 1, '2019-07-31 19:43:55', '2019-07-31 19:44:30', 3),
(13, 3, 9, 9, 1, '2019-07-31 19:44:35', '2019-07-31 20:40:41', 3),
(14, 3, 17, 10, 1, '2019-07-31 19:47:52', '2019-07-31 20:27:07', 3),
(15, 3, 10, 6, 1, '2019-07-31 20:00:53', '2019-08-02 18:25:30', 3),
(16, 3, 17, 11, 1, '2019-07-31 20:05:54', '2019-08-01 20:03:32', 3),
(17, 3, 17, 10, 1, '2019-07-31 20:18:59', '2019-07-31 20:27:07', 3),
(18, 3, 9, 9, 1, '2019-07-31 20:25:01', '2019-07-31 20:40:41', 3),
(19, 3, 17, 2, 1, '2019-07-31 20:25:41', '2019-07-31 20:26:02', 3),
(20, 3, 17, 11, 1, '2019-07-31 20:26:10', '2019-08-01 20:03:32', 3),
(21, 3, 17, 10, 1, '2019-07-31 20:26:16', '2019-07-31 20:27:07', 3),
(22, 3, 17, 11, 1, '2019-07-31 20:26:44', '2019-08-01 20:03:32', 3),
(23, 3, 17, 10, 1, '2019-07-31 20:26:47', '2019-07-31 20:27:07', 3),
(24, 3, 17, 11, 1, '2019-07-31 20:26:51', '2019-08-01 20:03:32', 3),
(25, 3, 17, 10, 1, '2019-07-31 20:27:05', '2019-07-31 20:27:07', 3),
(26, 3, 17, 11, 1, '2019-07-31 20:27:08', '2019-08-01 20:03:32', 3),
(27, 3, 17, 11, 1, '2019-07-31 20:27:19', '2019-08-01 20:03:32', 3),
(28, 3, 9, 12, 1, '2019-07-31 20:40:43', '2019-07-31 20:42:50', 3),
(29, 3, 9, 13, 1, '2019-07-31 20:42:52', '2019-07-31 20:59:17', 3),
(30, 3, 9, 14, 1, '2019-07-31 20:59:19', '2019-08-01 19:39:22', 3),
(31, 3, 9, 14, 1, '2019-07-31 22:57:12', '2019-08-01 19:39:22', 3),
(32, 3, 17, 11, 1, '2019-08-01 07:43:55', '2019-08-01 20:03:32', 3),
(33, 3, 17, 11, 1, '2019-08-01 07:44:09', '2019-08-01 20:03:32', 3),
(34, 3, 17, 11, 1, '2019-08-01 07:44:36', '2019-08-01 20:03:32', 3),
(35, 3, 10, 6, 1, '2019-08-01 08:40:47', '2019-08-02 18:25:30', 3),
(36, 3, 9, 15, 1, '2019-08-01 19:39:23', '2019-08-01 20:03:19', 3),
(37, 3, 17, 16, 1, '2019-08-01 20:03:34', '2019-08-01 20:04:32', 3),
(38, 3, 17, 17, 1, '2019-08-01 20:04:35', '2019-08-02 18:52:37', 3),
(39, 3, 9, 18, 1, '2019-08-02 18:23:59', '2019-08-02 18:26:30', 3),
(40, 3, 10, 19, 1, '2019-08-02 18:25:31', '2019-08-02 19:37:55', 3),
(41, 3, 9, 20, 1, '2019-08-02 18:35:13', '2019-08-02 19:57:56', 3),
(42, 3, 17, 21, 1, '2019-08-02 18:52:38', '2019-08-03 21:04:09', 3),
(43, 3, 10, 19, 1, '2019-08-02 19:37:53', '2019-08-02 19:37:55', 3),
(44, 3, 10, 22, 1, '2019-08-02 19:37:57', '2019-08-04 19:32:44', 3),
(45, 3, 9, 23, 1, '2019-08-02 19:57:58', '2019-10-23 04:28:44', 1),
(46, 3, 9, 23, 1, '2019-08-02 21:32:29', '2019-10-23 04:28:44', 1),
(47, 3, 17, 24, 1, '2019-08-03 21:04:11', '2019-08-05 20:08:14', 3),
(48, 3, 9, 23, 1, '2019-08-03 22:16:25', '2019-10-23 04:28:44', 1),
(49, 3, 9, 25, 1, '2019-08-03 22:16:53', '2019-08-05 20:20:04', 3),
(50, 3, 10, 26, 1, '2019-08-04 19:32:46', '2019-08-04 22:44:56', 3),
(51, 3, 10, 27, 1, '2019-08-04 22:44:59', '2019-12-17 02:31:58', 3),
(52, 3, 10, 28, 1, '2019-08-05 20:08:43', '2019-08-05 20:12:13', 3),
(53, 3, 10, 28, 1, '2019-08-05 20:10:26', '2019-08-05 20:12:13', 3),
(54, 3, 17, 29, 1, '2019-08-05 20:12:34', '2019-08-06 16:44:01', 3),
(55, 3, 9, 25, 1, '2019-08-05 20:15:05', '2019-08-05 20:20:04', 3),
(56, 3, 10, 27, 1, '2019-08-05 20:35:32', '2019-12-17 02:31:58', 3),
(57, 3, 17, 30, 0, '2019-08-06 16:44:03', NULL, NULL),
(58, 3, 9, 31, 1, '2019-08-06 16:54:30', '2019-10-23 04:21:38', 1),
(59, 3, 16, 32, 1, '2019-08-06 20:13:28', '2019-12-15 12:56:50', 3),
(60, 3, 9, 31, 1, '2019-08-06 20:25:44', '2019-10-23 04:21:38', 1),
(61, 3, 9, 31, 1, '2019-08-06 20:27:30', '2019-10-23 04:21:38', 1),
(62, 3, 9, 33, 1, '2019-08-06 20:27:58', '2019-08-06 20:30:22', 3),
(63, 3, 9, 34, 1, '2019-08-06 20:37:43', '2019-08-06 20:38:34', 3),
(64, 3, 9, 35, 1, '2019-08-07 02:08:38', '2019-08-23 00:33:53', 1),
(65, 3, 24, 36, 1, '2019-08-07 03:08:14', '2019-08-06 22:00:56', 3),
(66, 3, 24, 36, 0, '2019-08-07 03:34:13', NULL, NULL),
(67, 1, 16, 37, 1, '2019-08-17 01:12:57', '2019-12-17 00:32:11', 3),
(68, 1, 5, 38, 0, '2019-08-17 02:22:59', NULL, NULL),
(69, 1, 9, 35, 1, '2019-08-17 02:23:18', '2019-08-23 00:33:53', 1),
(70, 1, 9, 35, 1, '2019-08-17 04:46:52', '2019-08-23 00:33:53', 1),
(71, 1, 9, 39, 1, '2019-08-23 00:33:58', '2019-12-06 02:03:42', 1),
(72, 3, 9, 39, 1, '2019-08-30 22:56:09', '2019-12-06 02:03:42', 1),
(73, 3, 16, 32, 1, '2019-09-05 00:33:41', '2019-12-15 12:56:50', 3),
(74, 3, 0, 0, 0, '2019-09-05 00:33:44', NULL, NULL),
(75, 1, 0, 0, 0, '2019-10-20 02:49:11', NULL, NULL),
(76, 1, 9, 31, 1, '2019-10-20 03:20:00', '2019-10-23 04:21:38', 1),
(77, 1, 9, 23, 1, '2019-10-23 04:25:04', '2019-10-23 04:28:44', 1),
(78, 1, 9, 39, 1, '2019-11-24 01:53:37', '2019-12-06 02:03:42', 1),
(79, 1, 9, 40, 1, '2019-12-06 02:03:43', '2019-12-06 02:41:34', 1),
(80, 1, 9, 41, 1, '2019-12-06 02:41:36', '2019-12-15 12:56:10', 3),
(81, 1, 9, 42, 1, '2019-12-06 03:06:57', '2019-12-17 02:18:53', 3),
(82, 1, 16, 43, 1, '2019-12-06 03:07:06', '2019-12-12 22:35:10', 1),
(83, 1, 9, 42, 1, '2019-12-07 02:49:57', '2019-12-17 02:18:53', 3),
(84, 1, 9, 42, 1, '2019-12-08 04:19:11', '2019-12-17 02:18:53', 3),
(85, 1, 24, 44, 0, '2019-12-09 03:40:08', NULL, NULL),
(86, 1, 10, 45, 1, '2019-12-09 04:50:05', '2019-12-10 04:11:19', 1),
(87, 1, 10, 45, 1, '2019-12-10 04:06:44', '2019-12-10 04:11:19', 1),
(88, 1, 10, 46, 1, '2019-12-10 04:11:21', '2019-12-12 02:44:08', 1),
(89, 1, 10, 47, 1, '2019-12-12 02:44:10', '2019-12-12 03:21:06', 1),
(90, 1, 9, 48, 1, '2019-12-12 03:21:16', '2019-12-12 22:21:30', 1),
(91, 1, 9, 48, 1, '2019-12-12 22:21:06', '2019-12-12 22:21:30', 1),
(92, 1, 9, 42, 1, '2019-12-12 22:21:32', '2019-12-17 02:18:53', 3),
(93, 1, 9, 42, 1, '2019-12-12 22:27:04', '2019-12-17 02:18:53', 3),
(94, 1, 16, 49, 1, '2019-12-12 22:35:25', '2019-12-22 03:22:25', 3),
(95, 1, 9, 42, 1, '2019-12-12 22:36:50', '2019-12-17 02:18:53', 3),
(96, 1, 16, 43, 0, '2019-12-12 22:41:17', NULL, NULL),
(97, 3, 9, 42, 1, '2019-12-13 00:59:09', '2019-12-17 02:18:53', 3),
(98, 3, 9, 50, 1, '2019-12-15 01:55:38', '2019-12-17 00:03:21', 3),
(99, 3, 9, 41, 1, '2019-12-15 01:56:16', '2019-12-15 12:56:10', 3),
(100, 3, 16, 37, 1, '2019-12-15 12:56:52', '2019-12-17 00:32:11', 3),
(101, 3, 9, 50, 1, '2019-12-17 00:03:17', '2019-12-17 00:03:21', 3),
(102, 3, 9, 42, 1, '2019-12-17 00:03:23', '2019-12-17 02:18:53', 3),
(103, 3, 9, 42, 1, '2019-12-17 00:32:19', '2019-12-17 02:18:53', 3),
(104, 3, 9, 51, 1, '2019-12-17 02:18:55', '2019-12-17 02:33:33', 3),
(105, 3, 10, 52, 0, '2019-12-17 02:32:00', NULL, NULL),
(106, 3, 9, 53, 1, '2019-12-17 02:33:36', '2019-12-17 02:41:28', 3),
(107, 3, 9, 54, 1, '2019-12-17 02:41:30', '2019-12-17 05:21:58', 3),
(108, 3, 16, 49, 1, '2019-12-17 05:22:06', '2019-12-22 03:22:25', 3),
(109, 3, 16, 49, 1, '2019-12-18 02:11:04', '2019-12-22 03:22:25', 3),
(110, 3, 16, 55, 0, '2019-12-22 03:22:53', NULL, NULL),
(111, 3, 29, 56, 0, '2019-12-22 04:02:19', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_vouchertype`
--

DROP TABLE IF EXISTS `tbl_vouchertype`;
CREATE TABLE `tbl_vouchertype` (
  `ID` int(10) UNSIGNED NOT NULL,
  `VoucherType` varchar(45) NOT NULL,
  `Alias` varchar(45) DEFAULT NULL,
  `Name` varchar(100) DEFAULT NULL,
  `PrintName` varchar(100) DEFAULT NULL,
  `OptionalPrintName` varchar(100) DEFAULT NULL,
  `CreatedBy` varchar(45) DEFAULT NULL,
  `CreateModifyTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Description` varchar(200) DEFAULT NULL,
  `MID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `IsMaster` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `ClassName` varchar(45) DEFAULT NULL,
  `ReportClassName` varchar(45) DEFAULT NULL,
  `VoucherCategoryID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `IsManufacturingJournal` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `LedgerHead` varchar(400) DEFAULT NULL,
  `GroupHead` varchar(400) DEFAULT NULL,
  `ProcedureTypeID` varchar(45) DEFAULT NULL,
  `AccountsNature` int(11) NOT NULL DEFAULT '0',
  `IsEffectLedgerValue` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `InventoryNature` int(11) NOT NULL DEFAULT '0',
  `IsEffectInventoryValue` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `PayrollNature` int(11) NOT NULL DEFAULT '0',
  `IsEffectPayrollValue` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `IsOptional` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `RefVoucherTypeID` int(10) UNSIGNED DEFAULT '0',
  `TrackDownInventory` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `VoucherNature` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `ItemBatchCheckID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `ItemPriceTypeID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `TransactionVoucherTypeID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `InventoryVoucherTypeID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `ReurnVoucherTypeID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `CartTypeID` int(10) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_vouchertype`
--

INSERT INTO `tbl_vouchertype` (`ID`, `VoucherType`, `Alias`, `Name`, `PrintName`, `OptionalPrintName`, `CreatedBy`, `CreateModifyTime`, `Description`, `MID`, `IsMaster`, `ClassName`, `ReportClassName`, `VoucherCategoryID`, `IsManufacturingJournal`, `LedgerHead`, `GroupHead`, `ProcedureTypeID`, `AccountsNature`, `IsEffectLedgerValue`, `InventoryNature`, `IsEffectInventoryValue`, `PayrollNature`, `IsEffectPayrollValue`, `IsOptional`, `RefVoucherTypeID`, `TrackDownInventory`, `VoucherNature`, `ItemBatchCheckID`, `ItemPriceTypeID`, `TransactionVoucherTypeID`, `InventoryVoucherTypeID`, `ReurnVoucherTypeID`, `CartTypeID`) VALUES
(1, 'Contra', 'CNTR', 'Contra', 'Contra', 'Contra', '1', '2013-10-31 22:45:12', '', 1, 1, '', 'DeliveryNote01', 10, 0, NULL, '\'AC2\',\'AC3\'', 'P01', 1, 1, 0, 0, 0, 1, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0),
(2, 'Credit Note', 'CRNT', 'Credit Note', 'Credit Note', 'Credit Note', '1', '2013-09-26 18:22:54', '', 2, 1, '', 'DeliveryNote01', 4, 0, NULL, NULL, 'P01', -1, 1, 1, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0),
(3, 'Debit Note', 'DRNT', 'Debit Note', 'Debit Note', 'Debit Note', '1', '2013-09-26 18:26:12', '', 3, 1, '', 'DeliveryNote01', 4, 0, NULL, NULL, 'P01', 1, 1, -1, 0, 0, 0, 0, 3, 0, 0, 0, 0, 0, 0, 0, 0),
(4, 'Delivery Note', 'DENT', 'Delivery Note', 'Delivery Note', 'Delivery Note', '1', '2015-05-20 21:48:27', '', 4, 1, '', 'DeliveryNote01', 4, 0, NULL, NULL, 'P01', 1, 0, -1, 1, 1, 1, 0, 4, 0, 0, 0, 0, 0, 0, 0, 0),
(5, 'Journal', 'JRNL', 'Journal', 'Journal', 'Journal', '1', '2013-11-08 15:41:17', '', 5, 1, '', 'DeliveryNote01', 7, 0, NULL, NULL, 'P03', 1, 1, 0, 0, 0, 1, 0, 5, 0, 0, 0, 0, 0, 0, 0, 0),
(6, 'Memorandum', 'MEMO', 'Memorandum', 'Memorandum', 'Memorandum', NULL, '2013-02-04 08:00:00', NULL, 6, 1, NULL, NULL, 1, 0, NULL, NULL, 'PO1', 0, 0, 0, 0, 0, 0, 0, 6, 0, 0, 0, 0, 0, 0, 0, 0),
(7, 'Payment', 'PYMT', 'Payment', 'Payment', 'Payment', '1', '2013-09-19 22:14:49', '', 7, 1, '', '', 5, 0, NULL, NULL, 'P01', -1, 1, 0, 0, 0, 0, 0, 7, 0, 0, 0, 0, 0, 0, 0, 0),
(8, 'Physical Stock', 'PSTK', 'Physical Stock', 'Physical Stock', 'Physical Stock', NULL, '2013-02-04 08:00:00', NULL, 8, 1, NULL, NULL, 4, 0, NULL, NULL, 'PO1', 1, 0, 1, 1, 0, 0, 0, 8, 0, 0, 1, 1, 0, 0, 0, 0),
(9, 'Purchase', 'PRSE', 'Purchase', 'Invoice', 'Invoice', '1', '2015-05-20 22:10:08', '', 1, 1, '', 'Invoice01', 4, 0, NULL, NULL, 'P01', -1, 1, 1, 1, -1, 0, 0, 10, 0, 0, 1, 1, 7, 0, 0, 1),
(10, 'Purchase Order', 'PODR', 'PO', 'Purchase Order', 'Purchase Order', '1', '2017-04-08 12:21:06', '', 10, 1, '', '', 4, 0, NULL, NULL, 'P01', -1, 1, 1, 0, 1, 1, 0, 10, 0, 0, 0, 1, 0, 0, 0, 0),
(11, 'Receipt', 'RCPT', 'Receipt', 'Receipt', 'Receipt', '1', '2013-10-31 08:23:58', '', 11, 1, '', 'DeliveryNote01', 5, 0, NULL, NULL, 'P03', 1, 1, 0, 0, 0, 1, 0, 11, 0, 0, 0, 0, 0, 0, 0, 0),
(12, 'Receipt Note', 'RPTN', 'Receipt Note', 'Receipt Note', 'Receipt Note', '1', '2013-09-30 22:47:24', '', 12, 1, '', 'DeliveryNote01', 4, 0, NULL, NULL, 'P01', -1, 0, 1, 1, 0, 0, 0, 12, 0, 0, 0, 0, 0, 0, 0, 0),
(13, 'Rejections In', 'REJI', 'Rejections In', 'Rejections In', 'Rejections In', '1', '2013-02-04 08:00:00', NULL, 13, 1, NULL, NULL, 1, 0, NULL, NULL, 'PO1', 0, 0, 0, 0, 0, 0, 0, 13, 0, 0, 0, 0, 0, 0, 0, 0),
(14, 'Rejections Out', 'REJO', 'Rejections Out', 'Rejections Out', 'Rejections Out', '1', '2013-02-04 08:00:00', NULL, 14, 1, NULL, NULL, 1, 0, NULL, NULL, 'PO1', 0, 0, 0, 0, 0, 0, 0, 14, 0, 0, 0, 0, 0, 0, 0, 0),
(15, 'Reversing Journal', 'REVJ', 'Reversing Journal', 'Reversing Journal', 'Reversing Journal', NULL, '2013-02-04 08:00:00', NULL, 15, 1, NULL, NULL, 1, 0, NULL, NULL, 'PO1', 0, 0, 0, 0, 0, 0, 0, 15, 0, 0, 0, 0, 0, 0, 0, 0),
(16, 'Sales', 'Sales', 'Sales', 'Invoice cum Chalan', 'Performa Invoice', '1', '2015-05-20 21:55:11', '', 1, 1, '', 'Invoice01', 4, 0, NULL, NULL, 'P01', 1, 1, -1, 1, -1, 0, 0, 16, 0, 0, 2, 2, 11, 0, 0, 2),
(17, 'Sales Order', 'SODR', 'Sales Order', 'Sales Order', 'Sales Order', '1', '2015-01-25 07:56:24', '', 17, 1, '', 'SalesOrder01', 4, 0, NULL, NULL, 'P01', 1, 0, -1, 0, 1, 1, 0, 0, 0, 0, 2, 2, 0, 0, 0, 0),
(18, 'Stock Journal', 'STKJ', 'Stock Journal', 'Stock Journal', 'Stock Journal', NULL, '2013-02-04 08:00:00', NULL, 18, 1, NULL, NULL, 1, 0, NULL, NULL, 'P01', 0, 0, 0, 0, 0, 0, 0, 18, 0, 0, 0, 0, 0, 0, 0, 0),
(19, 'Arttendance', 'ATTD', 'Arttendance', 'Arttendance', 'Arttendance', '1', '2013-10-16 23:52:00', '', 19, 1, '', 'DeliveryNote01', 8, 0, NULL, NULL, 'P01', 0, 0, 0, 0, 1, 1, 0, 19, 0, 0, 0, 0, 0, 0, 0, 0),
(20, 'Payroll', 'PYRL', 'Payroll', 'Payroll', 'Payroll', NULL, '2013-02-04 08:00:00', NULL, 20, 1, NULL, NULL, 1, 0, NULL, NULL, 'PO1', 0, 0, 0, 0, 0, 0, 0, 20, 0, 0, 0, 0, 0, 0, 0, 0),
(21, 'Sales Invoice Cum Chalan', 'SINV', 'Sales Invoice Cum Chalan', 'Invoice Cum Chalan', 'Sales Invoice Cum Chalan', '1', '2013-05-21 12:48:16', '', 16, 0, 'frmKOT', 'SalesInvoiceChalan', 1, 0, NULL, NULL, 'PO1', 1, 1, -1, 1, 1, 1, 0, 21, 0, 0, 0, 0, 0, 0, 0, 0),
(22, 'Purchase Invoice Cum Chalan', 'POCC', 'Purchase Invoice Cum Chalan', 'Purchase Invoice Cum Chalan', 'Purchase Invoice Cum Chalan', '1', '2015-02-23 20:56:58', '', 9, 0, '', 'DeliveryNote01', 4, 0, NULL, NULL, '', -1, 1, 1, 1, 1, 1, 0, 22, 0, 0, 0, 0, 0, 0, 0, 0),
(23, 'Manufacture Journal', 'MFGJ', 'Manufacture Journal', 'Manufacture Journal', 'Manufacture Journal', '1', '2013-02-04 08:00:00', NULL, 23, 0, 'frmManufacturingJournal', NULL, 1, 0, NULL, NULL, 'PO1', 0, 0, 0, 0, 0, 0, 0, 23, 0, 0, 0, 0, 0, 0, 0, 0),
(24, 'OpeningStock', 'OSTK', 'OpeningStock', 'OpeningStock', 'OpeningStock', '1', '2013-10-02 04:40:53', '', 24, 0, '', 'DeliveryNote01', 3, 0, NULL, NULL, 'P01', 1, 0, 1, 1, 0, 0, 0, 24, 0, 0, 1, 1, 0, 0, 0, 0),
(25, 'Booking', 'BK', 'Booking', 'Booking', 'Booking', '1', '2014-08-24 20:25:45', NULL, 16, 0, NULL, NULL, 4, 0, NULL, NULL, 'P01', 1, 1, -1, 0, -1, 0, 0, 16, 0, 0, 0, 0, 0, 0, 0, 0),
(26, 'LOAN APPLICATION', 'LAPP', 'LOAN APPLICATION', 'LOAN APPLICATION', 'LOAN APPLICATION', NULL, '2015-11-17 08:13:59', NULL, 16, 0, NULL, NULL, 1, 0, NULL, NULL, NULL, 1, 1, -1, 0, 1, 0, 0, 16, 0, 0, 0, 0, 0, 0, 0, 0),
(27, 'LOAN DISBURSEMENT', 'LDBM', 'LOAN DISBURSEMENT', 'LOAN DISBURSEMENT', 'LOAN DISBURSEMENT', NULL, '2015-11-17 08:13:59', NULL, 16, 0, NULL, NULL, 2, 0, NULL, NULL, NULL, 1, 1, -1, 0, 1, 0, 0, 16, 0, 0, 0, 0, 0, 0, 0, 0),
(28, 'LOAN COLLECTION', 'LCLL', 'LOAN COLLECTION', 'LOAN COLLECTION', 'LOAN COLLECTION', NULL, '2015-12-02 21:23:35', NULL, 16, 0, NULL, NULL, 0, 0, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(29, 'Cash Sales', 'CHSL', 'Cash Sales', 'Cash Sales', 'Cash Sales', NULL, '2019-12-21 22:03:52', NULL, 16, 0, NULL, NULL, 4, 0, NULL, NULL, NULL, 1, 1, -1, 1, -1, 0, 0, 16, 0, 0, 2, 2, 11, 0, 0, 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `UserName` varchar(100) DEFAULT NULL,
  `Name` varchar(100) DEFAULT NULL,
  `Password` varchar(255) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `Mob` varchar(20) DEFAULT NULL,
  `LastLoginTime` datetime DEFAULT NULL,
  `CreaterTime` datetime DEFAULT NULL,
  `IsActivated` int(11) NOT NULL DEFAULT '0',
  `UserTypeID` int(11) NOT NULL DEFAULT '0',
  `MasterID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `LastLogoutTime` datetime DEFAULT NULL,
  `IsLogIn` int(11) NOT NULL DEFAULT '0',
  `ImageID` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 DELAY_KEY_WRITE=1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `UserName`, `Name`, `Password`, `Email`, `Mob`, `LastLoginTime`, `CreaterTime`, `IsActivated`, `UserTypeID`, `MasterID`, `LastLogoutTime`, `IsLogIn`, `ImageID`) VALUES
(1, 'samr', 'XXX', 'sam', 'xxx@gmail.com', '9007409663', '2019-04-09 03:44:38', '2015-07-29 19:50:42', 1, 1, 10107, '2017-01-04 11:17:17', 1, NULL),
(2, 'demo', 'ADMIN', 'demo', 'tejasadmin@gmail.com', '9007409664', '2019-12-28 05:30:51', '2015-08-08 02:54:46', 1, 1, 10107, '2016-05-09 12:58:47', 1, NULL),
(3, 'admin', 'ADMIN', 'pass', 'tejasuser@gmail.com', '222', '2019-12-28 05:31:43', '2015-08-10 11:27:52', 1, 1, 10107, NULL, 1, NULL),
(10056, 'E00002', 'MOUMITA DAS', '8961572714', '', '', '2017-01-10 12:51:03', '2016-04-09 00:13:07', 1, 1, 10056, '2016-12-24 13:50:43', 1, NULL),
(10057, 'RA00001', 'WINS INDIA', '0000000000', '', '0000000000', NULL, '2016-11-11 22:51:04', 0, 5, 10057, NULL, 0, NULL),
(10058, 'RA00002', 'TANMOY DAS', '0000000000', 'dastanmay1980@gmail.com', '7890789234', NULL, '2016-11-11 22:51:58', 1, 5, 10058, NULL, 0, NULL),
(10059, 'RA00003', 'SURAJIT PAL', '0000000000', '', '9332155047', NULL, '2016-11-11 22:53:21', 1, 5, 10059, NULL, 0, NULL),
(10060, 'RA00004', 'PRITANKA MONDAL', '7001606798', 'BISWASSANDIP276@GMAIL.COM', '9932486524', NULL, '2016-11-11 23:04:59', 1, 5, 10060, NULL, 0, NULL),
(10061, 'RA00005', 'SANDIP BISWAS', '9932486524', '', '9332193241', NULL, '2016-11-11 23:20:52', 1, 5, 10061, NULL, 0, NULL),
(10062, 'RA00006', 'SOUMEN DEY', '9007876330', '', '9007876330', NULL, '2016-11-11 23:24:37', 0, 5, 10062, NULL, 0, NULL),
(10063, 'RA00007', 'SUBHAS CHANDRA MAHANTA', '9062361545', '', '9062361545', NULL, '2016-11-11 23:26:49', 1, 5, 10063, NULL, 0, NULL),
(10064, 'RA00008', 'NETAI PRAMANIK', '9126884883', 'PRAMANIKNETAI007@GMAIL.COM', '9126884883', NULL, '2016-11-11 23:28:57', 1, 5, 10064, NULL, 0, NULL),
(10065, 'RA00009', 'TAPAN KUMAR MAJHI', '8768717020', '', '8768717020', NULL, '2016-11-11 23:30:13', 1, 5, 10065, NULL, 0, NULL),
(10066, 'RA00010', 'SUBHAS BHAUMIK', '8820417960', 'subhasbhoumik1969@gmail.com', '8820417960', NULL, '2016-11-11 23:32:03', 1, 5, 10066, NULL, 0, NULL),
(10067, 'RA00011', 'DEBASISH CHATTERJEE', '9062361545', '', '9062361545', NULL, '2016-11-11 23:34:54', 1, 5, 10067, NULL, 0, NULL),
(10068, 'RA00012', 'KAMAL KANTI DEY', '7998017917', '', '7998017917', NULL, '2016-11-11 23:35:49', 1, 5, 10068, NULL, 0, NULL),
(10069, 'RA00013', 'SURAJIT PAL', '7998017917', '', '7998017917', NULL, '2016-11-11 23:36:51', 1, 5, 10069, NULL, 0, NULL),
(10070, 'RA00014', 'BIMAL KANTI DEY', '7998017917', '', '7998017917', NULL, '2016-11-11 23:38:41', 1, 5, 10070, NULL, 0, NULL),
(10071, 'RA00015', 'ATANU LAHA', '9903771292', '', '9830597068', NULL, '2016-11-11 23:45:52', 1, 5, 10071, NULL, 0, NULL),
(10072, 'RA00016', 'REBA LAHA (SUR)', '9038322282', '', '9051487748', NULL, '2016-11-11 23:47:17', 1, 5, 10072, NULL, 0, NULL),
(10073, 'RA00017', 'SIKHA MAJI', '7584074375', '', '9647573025', NULL, '2016-11-12 00:29:50', 1, 5, 10073, NULL, 0, NULL),
(10074, 'RA00018', 'DEBABRATA DAS', '9475904041', '', '9475904041', NULL, '2016-11-12 01:30:22', 1, 5, 10074, NULL, 0, NULL),
(10075, 'RA00019', 'CHANDAN DAS', '9733691341', '', '9733691341', NULL, '2016-11-12 21:08:34', 0, 5, 10075, NULL, 0, NULL),
(10076, 'RA00020', 'ACHINTA KUMAR GHOSH', '9564772027', '', '9564772027', NULL, '2016-11-12 21:13:45', 0, 5, 10076, NULL, 0, NULL),
(10077, 'RA00021', 'TAPAN KUMAR GHOSH', '9932542426', '', '9932542426', NULL, '2016-11-12 21:19:54', 0, 5, 10077, NULL, 0, NULL),
(10078, 'RA00022', 'ATUL BHATTACHARYA', '9231265066', '', '9231265066', NULL, '2016-11-12 21:24:58', 0, 5, 10078, NULL, 0, NULL),
(10079, 'RA00023', 'SOMNATH DHAK', '8017756875', '', '8017756875', NULL, '2016-11-12 21:32:01', 0, 5, 10079, NULL, 0, NULL),
(10080, 'RA00024', 'PRODYUMNA KUMAR GHOSH', '9831398039', '', '9831398039', NULL, '2016-11-12 21:37:21', 0, 5, 10080, NULL, 0, NULL),
(10081, 'RA00025', 'TRIBHUVAN SINGH', '8726367766', '', '8726367766', NULL, '2016-11-12 21:41:06', 1, 5, 10081, NULL, 0, NULL),
(10082, 'RA00026', 'FREEDOM OF INDIA', '9647573025', '', '9647573025', NULL, '2016-11-12 21:43:47', 0, 5, 10082, NULL, 0, NULL),
(10083, 'RA00027', 'MD NAZIR HUSSAIN', '7890732589', '', '7890732589', NULL, '2016-11-12 21:51:03', 0, 5, 10083, NULL, 0, NULL),
(10084, 'RA00028', 'MD AKTARUL HOQUE', '9733371488', '', '9733371488', NULL, '2016-11-12 21:56:58', 0, 5, 10084, NULL, 0, NULL),
(10085, 'RA00029', 'BHIMA PAIK', '9331761798', '', '9331761798', NULL, '2016-11-12 22:04:29', 0, 5, 10085, NULL, 0, NULL),
(10086, 'RA00030', 'SUDAMA SHAW', '9330054746', '', '9330054746', NULL, '2016-11-12 22:08:32', 0, 5, 10086, NULL, 0, NULL),
(10087, 'RA00031', 'SANJIT KUMAR SHAW', '8820305530', '', '8820305530', NULL, '2016-11-12 22:13:52', 0, 5, 10087, NULL, 0, NULL),
(10088, 'RA00032', 'PRAMOD KUMAR GUPTA', '9044228822', '', '9044228822', NULL, '2016-11-12 22:19:09', 0, 5, 10088, NULL, 0, NULL),
(10089, 'RA00033', 'UTTARA GHOSH', '9836576435', '', '9836576435', NULL, '2016-11-12 22:24:37', 0, 5, 10089, NULL, 0, NULL),
(10090, 'RA00034', 'SUKHENDU KHANRAH', '9038472376', '', '9038472376', NULL, '2016-11-12 22:28:57', 0, 5, 10090, NULL, 0, NULL),
(10091, 'RA00035', 'SATYANARAYAN GHOSH', '9007300627', '', '9007300627', NULL, '2016-11-12 22:33:42', 0, 5, 10091, NULL, 0, NULL),
(10092, 'RA00036', 'HUSNARA BIBI', '9733273507', '', '9733273507', NULL, '2016-11-12 22:41:31', 1, 5, 10092, NULL, 0, NULL),
(10093, 'RA00037', 'OSMAN ABDUL GANI', '7076979582', '', '7076979582', NULL, '2016-11-12 22:48:04', 1, 5, 10093, NULL, 0, NULL),
(10094, 'RA00038', 'RAJIB SANTRA', '8016151806', '', '8016151806', NULL, '2016-11-12 23:07:48', 0, 5, 10094, NULL, 0, NULL),
(10095, 'RA00039', 'HAZRAT ALI ANSARI', '9593957239', '', '9593957239', NULL, '2016-11-12 23:11:43', 0, 5, 10095, NULL, 0, NULL),
(10096, 'RA00040', 'SWAPAN MONDAL', '9830354107', '', '9830354107', NULL, '2016-11-12 23:21:04', 0, 5, 10096, NULL, 0, NULL),
(10097, 'RA00041', 'SULEKHA MONDAL', '9831867890', '', '9831867890', NULL, '2016-11-12 23:23:31', 1, 5, 10097, NULL, 0, NULL),
(10098, 'RA00042', 'AFSAR ALI KHAN', '9609652866', '', '9609652866', NULL, '2016-11-12 23:28:06', 0, 5, 10098, NULL, 0, NULL),
(10099, 'RA00043', 'AKLIMA KHATUN', '9609652866', '', '9609652866', NULL, '2016-11-12 23:30:47', 1, 5, 10099, NULL, 0, NULL),
(10100, 'RA00044', 'NILAVA GHOSH', '7602817025', '', '7602817025', NULL, '2016-11-12 23:35:16', 1, 5, 10100, NULL, 0, NULL),
(10101, 'RA00045', 'AMIT ADHIKARY', '9836890397', '', '8337072953', NULL, '2016-11-12 23:42:43', 1, 5, 10101, NULL, 0, NULL),
(10102, 'RA00046', 'CHHABI KHATUN', '9609652866', '', '9609652866', NULL, '2016-11-13 00:05:13', 0, 5, 10102, NULL, 0, NULL),
(10103, 'RA00047', 'MD IMROZ', '9831716656', '', '9831716656', NULL, '2016-11-15 21:20:52', 0, 5, 10103, NULL, 0, NULL),
(10104, 'RA00048', 'DILIP KUMAR RAMANI', '9931736932', '', '9931736932', NULL, '2016-11-15 21:24:38', 0, 5, 10104, NULL, 0, NULL),
(10105, 'RA00049', 'SOMA ROY', '9231970759', '', '9231970759', NULL, '2016-11-15 21:30:01', 0, 5, 10105, NULL, 0, NULL),
(10106, 'RA00050', 'BHAJAN ROY', '9231970759', '', '9231970759', NULL, '2016-11-15 21:33:48', 0, 5, 10106, NULL, 0, NULL),
(10107, 'RA00051', 'DILIP KUMAR DUTTA', '9331085974', '', '9331085974', NULL, '2016-11-15 21:37:43', 0, 5, 10107, NULL, 0, NULL),
(10108, 'RC00100001', 'MD NAZIR HUSSAAIN', '7890732589', 'mdnazir123@gmail.com', '7890732589', NULL, '2016-11-25 07:08:01', 0, 5, 10108, NULL, 0, NULL),
(10109, 'RA00052', 'SWAPNA BISWAS', '9933001565', '', '9933001565', NULL, '2016-11-15 22:50:34', 1, 5, 10109, NULL, 0, NULL),
(10110, 'RA00053', 'PARTHA BHOWMICK', '7076857034', '', '7076857034', NULL, '2016-11-15 23:06:59', 0, 5, 10110, NULL, 0, NULL),
(10111, 'RA00054', 'RAJU BAIRAGI', '9153386303', '', '9153386303', NULL, '2016-11-15 23:11:57', 0, 5, 10111, NULL, 0, NULL),
(10112, 'RA00055', 'BISWA NATH BOSE', '9851583306', '', '9851583306', NULL, '2016-11-15 23:16:30', 0, 5, 10112, NULL, 0, NULL),
(10113, 'RA00056', 'SWAPNA BOSE', '7384394160', '', '7384394160', NULL, '2016-11-15 23:19:25', 1, 5, 10113, NULL, 0, NULL),
(10114, 'RA00057', 'NANDITA BISWAS', '9088990360', '', '9088990360', NULL, '2016-11-15 23:23:40', 0, 5, 10114, NULL, 0, NULL),
(10115, 'RA00058', 'SANJAY BISWAS', '7797978128', '', '7797978128', NULL, '2016-11-15 23:27:32', 0, 5, 10115, NULL, 0, NULL),
(10116, 'RA00059', 'ATUL CHANDRA BISWAS', '7063569607', '', '7063569607', NULL, '2016-11-15 23:31:17', 1, 5, 10116, NULL, 0, NULL),
(10117, 'RA00060', 'PARVINA KHATUN MONDAL', '8436161646', '', '8436161646', NULL, '2016-11-15 23:37:41', 0, 5, 10117, NULL, 0, NULL),
(10118, 'RA00061', 'MADHAB CHANDRA DAS', '7477548429', '', '7477548429', NULL, '2016-11-15 23:43:39', 0, 5, 10118, NULL, 0, NULL),
(10119, 'RA00062', 'ASHISH KUMAR SARKAR', '7872845572', '', '7872845572', NULL, '2016-11-15 23:47:09', 1, 5, 10119, NULL, 0, NULL),
(10120, 'RA00063', 'SHEELA BISWAS', '9002782976', '', '9002782976', NULL, '2016-11-15 23:52:45', 1, 5, 10120, NULL, 0, NULL),
(10121, 'RA00064', 'BAPI CHOWDHURY', '9563232063', '', '9563232063', NULL, '2016-11-15 23:58:21', 0, 5, 10121, NULL, 0, NULL),
(10122, 'RA00065', 'JAKIR HOSSAIN MONDAL', '9681297936', '', '9681297936', NULL, '2016-11-16 00:04:52', 0, 5, 10122, NULL, 0, NULL),
(10123, 'RA00066', 'SAMIR KUMAR ROY', '8759538042', '', '8759538042', NULL, '2016-11-16 00:10:19', 0, 5, 10123, NULL, 0, NULL),
(10124, 'RA00067', 'PRIYANKA DUTTA', '9932946939', '', '9932946939', NULL, '2016-11-16 00:15:24', 1, 5, 10124, NULL, 0, NULL),
(10125, 'RA00068', 'ASHIT KUMAR BISWAS', '7557081503', '', '7557081503', NULL, '2016-11-16 00:20:32', 0, 5, 10125, NULL, 0, NULL),
(10126, 'RA00069', 'MANAS RANJAN DATTA', '9732759357', '', '9732759357', NULL, '2016-11-16 00:26:14', 0, 5, 10126, NULL, 0, NULL),
(10127, 'RA00070', 'KRISHNA BISWAS', '9270195895', '', '9270195895', NULL, '2016-11-16 00:29:57', 0, 5, 10127, NULL, 0, NULL),
(10128, 'RA00071', 'ASHOK KUMAR SARKAR', '9647083839', '', '9647083839', NULL, '2016-11-16 00:37:02', 0, 5, 10128, NULL, 0, NULL),
(10129, 'RA00072', 'BAPPADITYA ROY', '9932942357', '', '9932942357', NULL, '2016-11-16 00:42:37', 0, 5, 10129, NULL, 0, NULL),
(10130, 'RA00073', 'SAGAR ROY', '9800737837', '', '9800737837', NULL, '2016-11-16 00:46:21', 0, 5, 10130, NULL, 0, NULL),
(10131, 'RA00074', 'DOLON KANTI TIKADAR', '7890874762', '', '7890874762', NULL, '2016-11-16 00:51:20', 0, 5, 10131, NULL, 0, NULL),
(10132, 'RA00075', 'PRAVASH  CHAKRABORTY', '9474987804', '', '9474987804', NULL, '2016-11-16 00:56:08', 0, 5, 10132, NULL, 0, NULL),
(10133, 'RA00076', 'NITA SAHA', '8759930319', '', '8759930319', NULL, '2016-11-16 01:07:29', 1, 5, 10133, NULL, 0, NULL),
(10134, 'RA00077', 'ASHIS HOWLADER', '7076812712', '', '7076812712', NULL, '2016-11-16 01:15:04', 0, 5, 10134, NULL, 0, NULL),
(10135, 'RA00078', 'DEBASISH DAS', '7602200219', '', '7602200219', NULL, '2016-11-16 01:18:53', 0, 5, 10135, NULL, 0, NULL),
(10136, 'RA00079', 'PAYEL DEY', '9804223510', '', '9804223510', NULL, '2016-11-16 01:21:55', 0, 5, 10136, NULL, 0, NULL),
(10137, 'RA00080', 'DULAL ROY', '9732414275', '', '9732414275', NULL, '2016-11-16 01:36:41', 0, 5, 10137, NULL, 0, NULL),
(10138, 'RA00081', 'AJIT  KUMAR SARKAR', '8535874430', '', '8535874430', NULL, '2016-11-16 01:38:32', 0, 5, 10138, NULL, 0, NULL),
(10139, 'RA00082', 'BIMAL SARKAR', '8159016789', '', '8159016789', NULL, '2016-11-16 01:43:09', 0, 5, 10139, NULL, 0, NULL),
(10140, 'RA00083', 'GOBINDA MONDAL', '9733580615', '', '9733580615', NULL, '2016-11-16 01:49:43', 0, 5, 10140, NULL, 0, NULL),
(10141, 'RA00084', 'RABI BAIDYA', '9088973976', '', '9088973976', NULL, '2016-11-16 01:53:08', 0, 5, 10141, NULL, 0, NULL),
(10142, 'RA00085', 'BIBEKANANDA BISWAS', '9933979887', '', '9933979887', NULL, '2016-11-16 01:56:53', 0, 5, 10142, NULL, 0, NULL),
(10143, 'RA00086', 'SAJAL ROY', '7407195493', '', '7407195493', NULL, '2016-11-16 02:01:20', 0, 5, 10143, NULL, 0, NULL),
(10144, 'RA00087', 'BIDHU BHUSAN MANDAL', '8436668416', '', '8436668416', NULL, '2016-11-16 02:06:58', 0, 5, 10144, NULL, 0, NULL),
(10145, 'RA00088', 'SHASHANKA SARKAR', '9733770101', '', '9733770101', NULL, '2016-11-16 02:17:28', 1, 5, 10145, NULL, 0, NULL),
(10146, 'RA00089', 'TAPAN KUMAR DUTTA', '7044335277', '', '9476120690', NULL, '2016-11-16 19:50:13', 1, 5, 10146, NULL, 0, NULL),
(10147, 'RA00090', 'ATANU LAHA', '9903771292', '', '9903771292', NULL, '2016-11-16 20:14:03', 0, 5, 10147, NULL, 0, NULL),
(10148, 'RA00091', 'REBA LAHA', '9038322282', '', '9038322282', NULL, '2016-11-16 20:17:01', 1, 5, 10148, NULL, 0, NULL),
(10149, 'RA00092', 'AMIT ADHIKARI', '9836890397', '', '9836890397', NULL, '2016-11-16 20:21:03', 0, 5, 10149, NULL, 0, NULL),
(10150, 'RA00093', 'POLLY GHOSH', '9476120690', '', '9476120690', NULL, '2016-11-16 20:29:00', 0, 5, 10150, NULL, 0, NULL),
(10151, 'RA00094', 'RINA DUTTA', '8599903297', '', '8599903297', NULL, '2016-11-16 07:14:45', 0, 5, 10151, NULL, 0, NULL),
(10152, 'RA00095', 'SATISH CHANDRA MAHATO', '9801341157', '', '9801341157', NULL, '2016-11-16 07:21:28', 0, 5, 10152, NULL, 0, NULL),
(10153, 'RA00096', 'PRAKASH BANERJEE', '9733854928', '', '9733854928', NULL, '2016-11-16 07:25:17', 0, 5, 10153, NULL, 0, NULL),
(10154, 'RA00097', 'SUNIL KUMAR PRAMANIK', '7004804091', '', '7004804091', NULL, '2016-11-16 07:29:00', 0, 5, 10154, NULL, 0, NULL),
(10155, 'RA00098', 'HIRATAN KUMBHAKAR', '7004804091', 'hiratankumbhakar@gmail.com', '7004804091', NULL, '2016-11-16 07:35:37', 0, 5, 10155, NULL, 0, NULL),
(10156, 'RA00099', 'NARESH PRASAD SAHU', '9835512161', 'nareshprasadsahu@gmail.com', '9835512161', NULL, '2016-11-16 07:49:08', 0, 5, 10156, NULL, 0, NULL),
(10157, 'RA00100', 'PRIYANKA ROY (BANERJEE)', '9733854928', '', '9733854928', NULL, '2016-11-16 07:52:48', 0, 5, 10157, NULL, 0, NULL),
(10158, 'RA00101', 'KABITA KUMARI', '9334697128', '', '9334697128', NULL, '2016-11-16 07:57:16', 0, 5, 10158, NULL, 0, NULL),
(10159, 'RA00102', 'DIPANKAR MONDAL', '7407776372', 'dipankarm@gmail.com', '7407776372', NULL, '2016-11-16 08:02:25', 0, 5, 10159, NULL, 0, NULL),
(10160, 'RA00103', 'SUBRATA NARAYAN SEAL', '9143260756', '', '9143260756', NULL, '2016-11-16 08:08:33', 0, 5, 10160, NULL, 0, NULL),
(10161, 'RA00104', 'RENUKA GHOSH', '9734316525', '', '9734316525', NULL, '2016-11-16 08:14:01', 1, 5, 10161, NULL, 0, NULL),
(10162, 'RA00105', 'SANKAR KUMAR GHOSH', '9734316525', '', '9734316525', NULL, '2016-11-16 08:18:03', 1, 5, 10162, NULL, 0, NULL),
(10163, 'RA00106', 'RENUKA GHOSH', '8001869419', '', '8001869419', NULL, '2016-11-16 08:25:10', 1, 5, 10163, NULL, 0, NULL),
(10164, 'RA00107', 'PRATYUSH KUMAR PAL', '7477454314', '', '7477454314', NULL, '2016-11-16 08:30:02', 0, 5, 10164, NULL, 0, NULL),
(10165, 'RA00108', 'KAKOLEE MONDAL', '7431003834', '', '7431003834', NULL, '2016-11-16 08:37:44', 0, 5, 10165, NULL, 0, NULL),
(10166, 'RA00109', 'BHOLA NATH MONDAL', '7431003834', '', '7431003834', NULL, '2016-11-16 08:42:09', 0, 5, 10166, NULL, 0, NULL),
(10167, 'RA00110', 'TAPAN KUMAR DALAL', '7063715075', 'tkdalal68@gmail.com', '7063715075', NULL, '2016-11-16 08:47:57', 0, 5, 10167, NULL, 0, NULL),
(10168, 'RA00111', 'MADHURI DALAL', '7098435129', 'tkdalal68@gmail.com', '7098435129', NULL, '2016-11-16 08:52:04', 0, 5, 10168, NULL, 0, NULL),
(10169, 'RA00112', 'MALATI DALAL', '8670311403', 'tkdalal68@gmail.com', '8670311403', NULL, '2016-11-16 08:56:32', 0, 5, 10169, NULL, 0, NULL),
(10170, 'RA00113', 'DEBDAS BANERJEE', '9800924668', '', '9800924668', NULL, '2016-11-16 09:02:32', 1, 5, 10170, NULL, 0, NULL),
(10171, 'RA00114', 'SOVAN PAUL', '8609017555', '', '8609017555', NULL, '2016-11-16 09:12:07', 0, 5, 10171, NULL, 0, NULL),
(10172, 'RA00115', 'MITA PAUL', '7031520281', '', '7031520281', NULL, '2016-11-16 09:14:14', 0, 5, 10172, NULL, 0, NULL),
(10173, 'RA00116', 'SUSMITA MONDAL', '8900716637', '', '8900716637', NULL, '2016-11-16 09:18:10', 0, 5, 10173, NULL, 0, NULL),
(10174, 'RA00117', 'KRISHNA DAS PARAMANIK', '8001528661', '', '8001528661', NULL, '2016-11-16 09:26:06', 0, 5, 10174, NULL, 0, NULL),
(10175, 'RA00118', 'MRTUNJOY BANERJEE', '9547405563', '', '9547405563', NULL, '2016-11-16 09:30:26', 0, 5, 10175, NULL, 0, NULL),
(10176, 'RA00119', 'PRATIMA PAL', '9475380095', '', '9475380095', NULL, '2016-11-16 09:35:53', 0, 5, 10176, NULL, 0, NULL),
(10177, 'RA00120', 'PARTHA SARATHI MANDAL', '9635296768', '', '9635296768', NULL, '2016-11-16 09:39:22', 1, 5, 10177, NULL, 0, NULL),
(10178, 'RA00121', 'SAMARESH MONDAL', '9851313862', '', '9851313862', NULL, '2016-11-16 09:45:51', 1, 5, 10178, NULL, 0, NULL),
(10179, 'RA00122', 'NIRMAL MAN', '8372870610', '', '8372870610', NULL, '2016-11-16 10:01:04', 0, 5, 10179, NULL, 0, NULL),
(10180, 'RA00123', 'PRAVAT DAS', '9474640579', '', '9474640579', NULL, '2016-11-16 10:05:29', 0, 5, 10180, NULL, 0, NULL),
(10181, 'RA00124', 'SUCHIMITA DAS', '9474640579', '', '9474640579', NULL, '2016-11-16 10:09:00', 0, 5, 10181, NULL, 0, NULL),
(10182, 'RA00125', 'SOUGATIK DAS', '9474640579', '', '9474640579', NULL, '2016-11-16 10:12:06', 0, 5, 10182, NULL, 0, NULL),
(10183, 'RA00126', 'ASIT KUMAR CHAKRABORTY', '9126043456', '', '9126043456', NULL, '2016-11-16 10:19:58', 1, 5, 10183, NULL, 0, NULL),
(10184, 'RA00127', 'TARAK NATH DAS', '9232688693', '', '9232688693', NULL, '2016-11-16 10:27:05', 0, 5, 10184, NULL, 0, NULL),
(10185, 'RA00128', 'GITA MONDAL', '9851313862', '', '9851313862', NULL, '2016-11-16 10:31:37', 0, 5, 10185, NULL, 0, NULL),
(10186, 'RA00129', 'MANASHI MANDAL', '9635296768', '', '9635296768', NULL, '2016-11-16 10:35:34', 0, 5, 10186, NULL, 0, NULL),
(10187, 'RA00130', 'BIPLAB SANYAL', '9333617840', '', '9333617840', NULL, '2016-11-16 10:41:28', 0, 5, 10187, NULL, 0, NULL),
(10188, 'RA00131', 'ANUPAM GOSWAMI', '9474038934', '', '9474038934', NULL, '2016-11-16 10:44:33', 0, 5, 10188, NULL, 0, NULL),
(10189, 'RA00132', 'NAREN SARKAR', '9002337728', '', '9002337728', NULL, '2016-11-16 10:47:49', 0, 5, 10189, NULL, 0, NULL),
(10190, 'RA00133', 'SUSMITA SHIT', '9733245328', '', '9733245328', NULL, '2016-11-16 10:49:09', 0, 5, 10190, NULL, 0, NULL),
(10191, 'RA00134', 'REBA PATRA', '9564589536', '', '9564589536', NULL, '2016-11-16 10:59:46', 1, 5, 10191, NULL, 0, NULL),
(10192, 'RA00135', 'SHYAMAL PATRA', '9775912070', '', '9775912070', NULL, '2016-11-16 11:02:49', 0, 5, 10192, NULL, 0, NULL),
(10193, 'RA00136', 'RAJU MANDAL', '9775185613', '', '9775185613', NULL, '2016-11-16 11:05:56', 0, 5, 10193, NULL, 0, NULL),
(10194, 'RA00137', 'DEEPAK KUMAR SAW', '8271714438', '', '8271714438', NULL, '2016-11-16 11:09:09', 0, 5, 10194, NULL, 0, NULL),
(10195, 'RA00138', 'SANDIP KUMAR SAW', '0947111412', '', '0947111412', NULL, '2016-11-16 11:12:17', 0, 5, 10195, NULL, 0, NULL),
(10196, 'RA00139', 'SHAMBHU KUMAR SAW', '9060229430', '', '9060229430', NULL, '2016-11-16 11:15:27', 0, 5, 10196, NULL, 0, NULL),
(10197, 'RA00140', 'KRISHNA DAS GOLDAR', '9002903030', 'kdgoldar@gmail.com', '9002903030', NULL, '2016-11-17 06:35:22', 0, 5, 10197, NULL, 0, NULL),
(10198, 'RA00141', 'RIYA GOLDAR', '9932533311', 'riyagoldar1710@gmail.com', '9932533311', NULL, '2016-11-17 06:39:02', 0, 5, 10198, NULL, 0, NULL),
(10199, 'RA00142', 'SANDIP DUTTA', '9830084821', '', '9830084821', NULL, '2016-11-17 08:17:25', 0, 5, 10199, NULL, 0, NULL),
(10200, 'RA00143', 'MAYA SARKAR', '8436201836', '', '8436201836', NULL, '2016-11-17 08:26:02', 0, 5, 10200, NULL, 0, NULL),
(10201, 'RA00144', 'PROTIMA SARKAR', '8768552205', '', '8768552205', NULL, '2016-11-17 08:30:57', 0, 5, 10201, NULL, 0, NULL),
(10202, 'RA00145', 'SAMENDU GHATAK', '9614833235', 'bappaghatak77@gmail.com', '9614833235', NULL, '2016-11-17 08:38:37', 0, 5, 10202, NULL, 0, NULL),
(10203, 'RA00146', 'SANTANA ROY', '9732414275', 'dulal.r@yahoo.com', '9732414275', NULL, '2016-11-17 09:06:46', 0, 5, 10203, NULL, 0, NULL),
(10204, 'RA00147', 'SHAMPA MONDAL', '8436668416', '', '8436668416', NULL, '2016-11-17 09:10:10', 0, 5, 10204, NULL, 0, NULL),
(10205, 'RA00148', 'ASHIS KUMAR ROY', '7407247130', 'ashiskumarroy1993@gmail.com', '7407247130', NULL, '2016-11-17 09:15:23', 0, 5, 10205, NULL, 0, NULL),
(10206, 'RA00149', 'PRADIP MANDAL', '9800842562', '', '9800842562', NULL, '2016-11-17 09:25:44', 0, 5, 10206, NULL, 0, NULL),
(10207, 'RA00150', 'KANGKAN SARKAR', '9932979864', '', '9932979864', NULL, '2016-11-17 09:31:13', 0, 5, 10207, NULL, 0, NULL),
(10208, 'RA00151', 'DEBOBRATA SINHA', '7679790715', '', '7679790715', NULL, '2016-11-17 09:35:12', 0, 5, 10208, NULL, 0, NULL),
(10209, 'RA00152', 'SOMA DEV', '7362940704', '', '7362940704', NULL, '2016-11-17 09:38:35', 0, 5, 10209, NULL, 0, NULL),
(10210, 'RA00153', 'SIBU DAS', '9851518861', '', '9851518861', NULL, '2016-11-17 09:42:40', 0, 5, 10210, NULL, 0, NULL),
(10211, 'RA00154', 'DILIP CHOUDHURY', '9534032115', '', '9534032115', NULL, '2016-11-17 09:45:30', 0, 5, 10211, NULL, 0, NULL),
(10212, 'RA00155', 'MADHUMITA MISHRA', '9609127259', '', '9609127259', NULL, '2016-11-17 09:50:16', 0, 5, 10212, NULL, 0, NULL),
(10213, 'RA00156', 'BILTU CHOUDHURY', '8641867233', '', '8641867233', NULL, '2016-11-17 09:54:27', 1, 5, 10213, NULL, 0, NULL),
(10214, 'RA00157', 'SIPRA CHAKRABORTY', '9874661160', '', '0917986552', NULL, '2016-11-18 11:19:40', 1, 5, 10275, NULL, 0, NULL),
(10217, 'RC00100004', 'ACHINTA KUMAR GHOSH', '9564772027', '', '9564772027', NULL, '2016-11-25 06:27:15', 0, 5, 10217, NULL, 0, NULL),
(10224, 'RC00100011', 'SIKHA MAJI', '7584074375', '', '7584074375', NULL, '2016-11-25 06:52:24', 1, 5, 10224, NULL, 0, NULL),
(10225, 'RC00100012', 'BHAJAN ROY', '9231970759', '', '9231970759', NULL, '2016-11-25 06:30:18', 0, 5, 10225, NULL, 0, NULL),
(10227, 'RC00100014', 'SWAPAN MONDAL', '9830354107', 'swapan070864@gmail.com', '9830354107', NULL, '2016-12-20 21:56:50', 0, 5, 10227, NULL, 0, NULL),
(10228, 'RC00100015', 'BIMAL KANTI DEY', '7998017917', '', '7998017917', NULL, '2016-12-05 10:30:54', 1, 5, 10228, NULL, 0, NULL),
(10233, 'RC00100020', 'PARTHA BHOWMICK', '7076857034', '', '7076857034', NULL, '2016-12-05 08:51:59', 1, 5, 10233, NULL, 0, NULL),
(10235, 'RC00100022', 'ATUL BHATTACHARYA', '9231265066', '', '9231265066', NULL, '2016-12-20 21:52:13', 1, 5, 10235, NULL, 0, NULL),
(10245, 'RC00100032', 'PARTHA SARATHI MANDAL', '9635296768', '', '9635296768', NULL, '2016-11-29 22:55:19', 1, 5, 10245, NULL, 0, NULL),
(10253, 'RC00100040', 'SADHANA BISWAS ', '9932514194', '', '9932514194', NULL, '2016-12-23 21:14:48', 0, 5, 10253, NULL, 0, NULL),
(10254, 'RC00100041', 'CHANDAN DAS', '9733691341', '', '9733691341', NULL, '2016-12-23 21:14:25', 0, 5, 10254, NULL, 0, NULL),
(10255, 'RC00100042', 'KRISHNA DAS  PARAMANIK ', '8001528661', '', '8001528661', NULL, '2016-12-23 21:14:14', 0, 5, 10255, NULL, 0, NULL),
(10256, 'RC00100043', 'NILAVA GHOSH', '7602817025', '', '7602817025', NULL, '2016-12-23 21:13:52', 0, 5, 10256, NULL, 0, NULL),
(10257, 'RC00100044', 'MRITUNJOY  BANERJEE ', '9547405563', '', '9547405563', NULL, '2016-11-23 20:16:42', 1, 5, 10257, NULL, 0, NULL),
(10258, 'RC00100045', 'SHAMPA MONDAL ', '8436668416', 'SHAMPAM405@GMAIL.COM', '8436668416', NULL, '2016-12-23 21:13:24', 0, 5, 10258, NULL, 0, NULL),
(10259, 'RC00100046', 'SAMARESH MONDAL', '9851313862', '', '9851313862', NULL, '2016-12-23 21:12:52', 0, 5, 10259, NULL, 0, NULL),
(10260, 'RC00100047', 'PRATYUSH KUMAR PAL', '7477454314', '', '7477454314', NULL, '2016-12-23 21:12:36', 0, 5, 10260, NULL, 0, NULL),
(10261, 'RC00100048', 'BIPAD TARAN PAL', '8001869419', '', '8001869419', NULL, '2016-12-23 21:12:19', 0, 5, 10261, NULL, 0, NULL),
(10262, 'RC00100049', 'AFSAR ALI KHAN', '9609652866', '', '9609652866', NULL, '2016-12-23 21:12:04', 0, 5, 10262, NULL, 0, NULL),
(10263, 'RC00100050', 'SULEKHA MONDAL', '9831867890', '', '9831867890', NULL, '2016-12-20 21:58:16', 1, 5, 10263, NULL, 0, NULL),
(10264, 'RC00100051', 'SWAPAN MONDAL', '9830354107', '', '9830354107', NULL, '2016-12-23 21:11:21', 0, 5, 10264, NULL, 0, NULL),
(10265, 'RC00100052', 'SUNDARI BANIK (SARDAR)', '8900972726', '', '8900972726', NULL, '2016-12-23 21:11:06', 0, 5, 10265, NULL, 0, NULL),
(10266, 'RC00100053', 'KRISHNA BISWAS', '9270195895', '', '9270195895', NULL, '2016-12-23 21:10:40', 0, 5, 10266, NULL, 0, NULL),
(10267, 'RC00100054', 'NANDITA BISWAS', '9088990360', '', '9088990360', NULL, '2016-12-23 21:10:25', 0, 5, 10267, NULL, 0, NULL),
(10268, 'RC00100055', 'SANJAY BISWAS', '7797978128', '', '7797978128', NULL, '2016-12-23 21:10:11', 0, 5, 10268, NULL, 0, NULL),
(10269, 'RC00100056', 'PROTIMA SARKAR', '8768552205', '', '8768552205', NULL, '2016-12-23 21:09:56', 0, 5, 10269, NULL, 0, NULL),
(10270, 'RC00100057', 'SAMENDU GHATAK', '9614833235', 'bappaghatak77@gmail.com', '9614833235', NULL, '2016-12-23 21:09:43', 0, 5, 10270, NULL, 0, NULL),
(10271, 'RC00100058', 'SHASHANKA SARKAR', '9733770101', '', '9733770101', NULL, '2016-12-23 21:09:21', 0, 5, 10271, NULL, 0, NULL),
(10272, 'RC00100059', 'MAYA SARKAR', '8436201836', '', '8436201836', NULL, '2016-12-23 21:09:09', 0, 5, 10272, NULL, 0, NULL),
(10273, 'RC00100060', 'SHEELA BISWAS', '9002782976', '', '9002782976', NULL, '2016-12-23 21:08:51', 0, 5, 10273, NULL, 0, NULL),
(10274, 'RC00100061', 'KAKOLEE MONDAL', '7431003834', '', '7431003834', NULL, '2016-12-23 21:08:35', 0, 5, 10274, NULL, 0, NULL),
(10276, 'RC00100062', 'DEBABRATA SEN', '9179865529', '', '0917986552', NULL, '2016-11-23 20:06:13', 1, 5, 10276, NULL, 0, NULL),
(10278, 'RC00100064', 'DEBASIS DAS', '8013399786', '', '8013399786', NULL, '2016-12-23 21:05:24', 1, 5, 10278, NULL, 0, NULL),
(10279, 'RC00100065', 'RIYA GOLDER', '9732205424', 'riyagoldar1710@gmail.com', '9932533311', NULL, '2016-11-29 23:24:13', 1, 5, 10279, NULL, 0, NULL),
(10280, 'RC00100066', 'KRISHNA DAS GOLDER', '9002903030', 'kdgoldar@gmail.com', '9002903030', NULL, '2016-11-29 23:29:36', 1, 5, 10280, NULL, 0, NULL),
(10281, 'RC00100067', 'TANUSRI MONDAL', '9332193241', '', '9332193241', NULL, '2016-11-30 06:43:51', 1, 5, 10281, NULL, 0, NULL),
(10282, 'RC00100068', 'PRIYANKA DUTTA', '9932946939', '', '9932946939', NULL, '2016-12-05 10:45:18', 1, 5, 10282, NULL, 0, NULL),
(10283, 'RC00100069', 'WINS INDIA', '0000000000', '', '0000000000', NULL, '2016-12-13 11:17:56', 0, 5, 10283, NULL, 0, NULL),
(10284, 'RC00100070', 'SANDIP BISWAS', '9932486524', 'BISWASSANDIP276@GMAIL.COM', '9932486524', NULL, '2016-12-15 08:37:59', 1, 5, 10284, NULL, 0, NULL),
(10285, 'RC00100071', 'PRATIMA PAL', '9475380095', '', '9475380095', NULL, '2016-12-20 20:17:24', 1, 5, 10285, NULL, 0, NULL),
(10286, 'RA00159', 'AJIT MANJHI', '7004986269', '', '7004986269', NULL, '2016-12-20 20:52:00', 1, 5, 10286, NULL, 0, NULL),
(10287, 'RA00160', 'MD IQBAL', '9334021286', '', '9334021286', NULL, '2016-12-20 20:56:19', 0, 5, 10287, NULL, 0, NULL),
(10288, 'RA00161', 'SUNIL DAS', '9693745339', '', '9693745339', NULL, '2016-12-20 20:59:08', 0, 5, 10288, NULL, 0, NULL),
(10289, 'RA00162', 'MIHIR CHANDRA MAHATO', '9386232880', '', '9386232880', NULL, '2016-12-20 21:05:22', 0, 5, 10289, NULL, 0, NULL),
(10290, 'RA00163', 'PRABODH KUMAR MANDAL', '7765919823', '', '7765919823', NULL, '2016-12-20 21:07:49', 0, 5, 10290, NULL, 0, NULL),
(10291, 'RA00164', 'NISHIT KARMAKAR', '9732060630', '', '9732060630', NULL, '2016-12-20 21:11:03', 0, 5, 10291, NULL, 0, NULL),
(10292, 'RA00165', 'SOMNATH MAHANTA', '9933332940', '', '9933332940', NULL, '2016-12-20 21:13:36', 0, 5, 10292, NULL, 0, NULL),
(10293, 'RA00166', 'REKHA SAHU', '9576763825', 'REKHASAHU91@GMAIL.COM', '9576763825', NULL, '2016-12-20 21:16:31', 0, 5, 10293, NULL, 0, NULL),
(10294, 'RA00167', 'SIMA DAS MODAK', '9002434417', '', '9002434417', NULL, '2016-12-20 21:19:13', 0, 5, 10294, NULL, 0, NULL),
(10295, 'RA00168', 'SHIVANI DEVI', '9155233555', '', '9155233555', NULL, '2016-12-20 21:21:42', 0, 5, 10295, NULL, 0, NULL),
(10296, 'RA00169', 'ANIL MAJHI', '9234137830', '', '9234137830', NULL, '2016-12-20 21:24:32', 0, 5, 10296, NULL, 0, NULL),
(10297, 'RA00170', 'BABU RAM BINDHANI', '7739408238', 'BABURAMBINDHANI.2015@GMAIL.COM', '7739408238', NULL, '2016-12-20 21:28:43', 0, 5, 10297, NULL, 0, NULL),
(10298, 'RC00100072', 'PRABODH KUMAR MANDAL', '7765919823', '', '7765919823', NULL, '2016-12-20 21:32:49', 1, 5, 10298, NULL, 0, NULL),
(10299, 'RC00100073', 'ASHOK KUMAR MODAK', '9002434417', 'ASHOKMODAK1959@GMAIL.COM', '9002434417', NULL, '2016-12-20 21:44:04', 1, 5, 10299, NULL, 0, NULL),
(10300, 'RC00100074', 'MIHIR CHANDRA MAHATO', '9386232880', '', '9386232880', NULL, '2016-12-20 21:46:37', 1, 5, 10300, NULL, 0, NULL),
(10301, 'RC00100075', 'DULAL ROY', '9732414275', '', '9732414275', NULL, '2016-12-22 23:20:22', 1, 5, 10301, NULL, 0, NULL),
(10302, 'RC00100076', 'DULAL ROY', '9732414275', '', '9732414275', NULL, '2016-12-22 23:39:29', 0, 5, 10302, NULL, 0, NULL),
(10303, 'RC00100077', 'BIPAD TARAN PAL', '8001869419', '', '8001869419', NULL, '2016-12-23 22:03:45', 1, 5, 10303, NULL, 0, NULL),
(10304, 'RA00171', 'DILIP KUMAR MITRA', '9775284004', '', '9775284004', NULL, '2016-12-24 21:26:09', 1, 5, 10304, NULL, 0, NULL),
(10305, 'RC00100078', 'DILIP KUMAR MITRA', '9775284004', '', '9775284004', NULL, '2016-12-24 21:26:58', 1, 5, 10305, NULL, 0, NULL),
(10306, 'RC00100079', 'DILIP KUMAR MITRA', '9775284004', '', '9775284004', NULL, '2016-12-24 22:00:02', 0, 5, 10306, NULL, 0, NULL),
(10307, 'E00003', 'Mithun Mandal', '9851441994', '', '9851441994', '2018-12-29 00:58:31', '2018-12-31 22:08:52', 1, 5, 10323, NULL, 1, NULL),
(10309, 'P00003', 'subhra mandal', '9775996048', '', '9775996048', '2018-12-25 00:48:38', '2018-12-31 22:10:12', 1, 5, 10350, NULL, 1, NULL),
(10311, 'P00004', 'MRINMOY SEN', '9775996048', '', '9775996048', '2018-12-26 00:52:14', '2018-12-26 22:21:38', 1, 5, 10351, NULL, 1, NULL),
(10312, 'P00005', 'SANKU SAHA', '9775996048', '', '9775996048', '2018-12-29 00:57:49', '2018-12-26 22:21:53', 1, 5, 10352, NULL, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `usertype`
--

DROP TABLE IF EXISTS `usertype`;
CREATE TABLE `usertype` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `createtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `usertype`
--

INSERT INTO `usertype` (`id`, `name`, `createtime`) VALUES
(1, 'Admin', '2015-07-18 06:22:50'),
(2, 'Developer', '2015-07-18 06:24:29'),
(3, 'Employee', '2015-07-18 06:25:23'),
(4, 'Member', '2015-07-18 06:25:23');

-- --------------------------------------------------------

--
-- Table structure for table `user_pages`
--

DROP TABLE IF EXISTS `user_pages`;
CREATE TABLE `user_pages` (
  `ID` int(10) UNSIGNED NOT NULL,
  `PageID` int(10) UNSIGNED NOT NULL,
  `MasterID` int(10) UNSIGNED NOT NULL,
  `IsActive` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_pages`
--

INSERT INTO `user_pages` (`ID`, `PageID`, `MasterID`, `IsActive`) VALUES
(1, 77, 10323, 1),
(2, 62, 10323, 1),
(3, 72, 10354, 1),
(4, 79, 10354, 1),
(5, 80, 10354, 1),
(6, 92, 10354, 1),
(9, 92, 10056, 1),
(10, 81, 10056, 1),
(11, 77, 10056, 1),
(12, 62, 10056, 1),
(13, 44, 10056, 1),
(14, 72, 10056, 1),
(15, 79, 10056, 1),
(16, 87, 10056, 1),
(17, 88, 10056, 1),
(18, 27, 10056, 1),
(19, 90, 10056, 1),
(20, 67, 10056, 1),
(21, 31, 10056, 1),
(22, 93, 10056, 1),
(23, 80, 10056, 1),
(24, 28, 10056, 1),
(25, 91, 10056, 1),
(26, 32, 10056, 1),
(27, 58, 10056, 1),
(28, 69, 10056, 1),
(29, 45, 10056, 1),
(30, 73, 10056, 1),
(31, 66, 10056, 1),
(32, 68, 10056, 1),
(33, 76, 10056, 1),
(34, 70, 10056, 1),
(35, 82, 10056, 1),
(36, 71, 10056, 1),
(37, 74, 10056, 1),
(38, 75, 10056, 1),
(39, 78, 10056, 1),
(40, 86, 10056, 1),
(41, 79, 10359, 0),
(45, 77, 10351, 0),
(46, 11, 10056, 1),
(47, 44, 10323, 1),
(48, 72, 10323, 1),
(49, 79, 10323, 1),
(50, 87, 10323, 1),
(51, 88, 10323, 1),
(52, 27, 10323, 1),
(53, 38, 10056, 1),
(54, 37, 10056, 1),
(55, 17, 10056, 1),
(56, 18, 10056, 1),
(57, 6, 10056, 1),
(58, 43, 10056, 1),
(59, 5, 10056, 1),
(60, 42, 10056, 1),
(61, 46, 10056, 1),
(62, 47, 10056, 1),
(63, 94, 10056, 1),
(64, 34, 10056, 1),
(65, 36, 10056, 1),
(66, 33, 10056, 1),
(67, 35, 10056, 1),
(68, 40, 10056, 1),
(69, 39, 10056, 1),
(70, 97, 10056, 1),
(71, 98, 10056, 1),
(72, 96, 10056, 1),
(73, 95, 10056, 1),
(74, 99, 10056, 1),
(75, 34, 10323, 1),
(76, 5, 10323, 0),
(77, 101, 10056, 1),
(78, 100, 10056, 1),
(79, 103, 10056, 1),
(80, 102, 10056, 1),
(81, 104, 10056, 1),
(82, 45, 10323, 1),
(83, 19, 10056, 1),
(84, 20, 10056, 1),
(85, 108, 10056, 1),
(86, 110, 10056, 1),
(87, 109, 10056, 1),
(88, 111, 10056, 1),
(89, 16, 10056, 1),
(90, 15, 10056, 1),
(91, 112, 10056, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `modules`
--
ALTER TABLE `modules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Index_3` (`MID`),
  ADD KEY `Index_2` (`LinkName`) USING BTREE;

--
-- Indexes for table `tbl_academicyear`
--
ALTER TABLE `tbl_academicyear`
  ADD PRIMARY KEY (`AcademicYear`) USING BTREE;

--
-- Indexes for table `tbl_accounttype`
--
ALTER TABLE `tbl_accounttype`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_address`
--
ALTER TABLE `tbl_address`
  ADD PRIMARY KEY (`ID`) USING BTREE;

--
-- Indexes for table `tbl_bom`
--
ALTER TABLE `tbl_bom`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_bomdetails`
--
ALTER TABLE `tbl_bomdetails`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_boolean`
--
ALTER TABLE `tbl_boolean`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_calculationmethod`
--
ALTER TABLE `tbl_calculationmethod`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_cartdetails`
--
ALTER TABLE `tbl_cartdetails`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_carttype`
--
ALTER TABLE `tbl_carttype`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_cart_details_temp`
--
ALTER TABLE `tbl_cart_details_temp`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_cart_temp`
--
ALTER TABLE `tbl_cart_temp`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_currency`
--
ALTER TABLE `tbl_currency`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_instrumentetails`
--
ALTER TABLE `tbl_instrumentetails`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_instrumenttype`
--
ALTER TABLE `tbl_instrumenttype`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_item`
--
ALTER TABLE `tbl_item`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_itemaccounts`
--
ALTER TABLE `tbl_itemaccounts`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_itembatch`
--
ALTER TABLE `tbl_itembatch`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_itembatchcheck`
--
ALTER TABLE `tbl_itembatchcheck`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_itemcategory`
--
ALTER TABLE `tbl_itemcategory`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID` (`ID`) USING BTREE;

--
-- Indexes for table `tbl_itemgroup`
--
ALTER TABLE `tbl_itemgroup`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_itempricelist`
--
ALTER TABLE `tbl_itempricelist`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_itempricetype`
--
ALTER TABLE `tbl_itempricetype`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_itemserial`
--
ALTER TABLE `tbl_itemserial`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_itemsupplier`
--
ALTER TABLE `tbl_itemsupplier`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_itemtax`
--
ALTER TABLE `tbl_itemtax`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_itemunit`
--
ALTER TABLE `tbl_itemunit`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_item_insider`
--
ALTER TABLE `tbl_item_insider`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_master`
--
ALTER TABLE `tbl_master`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_mastertype`
--
ALTER TABLE `tbl_mastertype`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_news`
--
ALTER TABLE `tbl_news`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_payrolldetails`
--
ALTER TABLE `tbl_payrolldetails`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_payrollmaster`
--
ALTER TABLE `tbl_payrollmaster`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_payrollperiod`
--
ALTER TABLE `tbl_payrollperiod`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_pd`
--
ALTER TABLE `tbl_pd`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_servicetype`
--
ALTER TABLE `tbl_servicetype`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_studentclass`
--
ALTER TABLE `tbl_studentclass`
  ADD PRIMARY KEY (`AcademicYear`,`StudentID`,`ClassID`,`SecID`);

--
-- Indexes for table `tbl_tax`
--
ALTER TABLE `tbl_tax`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Index_2` (`TaxID`);

--
-- Indexes for table `tbl_taxclass`
--
ALTER TABLE `tbl_taxclass`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Index_2` (`CODE`) USING BTREE;

--
-- Indexes for table `tbl_taxtype`
--
ALTER TABLE `tbl_taxtype`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Index_2` (`Code`) USING BTREE;

--
-- Indexes for table `tbl_unit`
--
ALTER TABLE `tbl_unit`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_valuationmethods`
--
ALTER TABLE `tbl_valuationmethods`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Index_3` (`ValuationMethods`),
  ADD KEY `Index_2` (`ValuationMethodsID`);

--
-- Indexes for table `tbl_voucheraccount`
--
ALTER TABLE `tbl_voucheraccount`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_vouchercategory`
--
ALTER TABLE `tbl_vouchercategory`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_voucherdetails`
--
ALTER TABLE `tbl_voucherdetails`
  ADD PRIMARY KEY (`ID`,`EntryPointID`,`MacID`) USING BTREE;

--
-- Indexes for table `tbl_voucherdetails_temp`
--
ALTER TABLE `tbl_voucherdetails_temp`
  ADD PRIMARY KEY (`ID`,`EntryPointID`,`MacID`) USING BTREE;

--
-- Indexes for table `tbl_vouchergroup`
--
ALTER TABLE `tbl_vouchergroup`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_vouchermaster`
--
ALTER TABLE `tbl_vouchermaster`
  ADD PRIMARY KEY (`ID`) USING BTREE;

--
-- Indexes for table `tbl_vouchermasterref`
--
ALTER TABLE `tbl_vouchermasterref`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_vouchermaster_temp`
--
ALTER TABLE `tbl_vouchermaster_temp`
  ADD PRIMARY KEY (`ID`) USING BTREE;

--
-- Indexes for table `tbl_vouchersession`
--
ALTER TABLE `tbl_vouchersession`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_vouchertype`
--
ALTER TABLE `tbl_vouchertype`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `idx_VoucherCategory` (`VoucherCategoryID`),
  ADD KEY `idx_RefVoucherType` (`RefVoucherTypeID`),
  ADD KEY `Index_3` (`MID`) USING BTREE;

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `UserID` (`UserName`) USING BTREE,
  ADD KEY `Email` (`Email`) USING BTREE;

--
-- Indexes for table `usertype`
--
ALTER TABLE `usertype`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `user_pages`
--
ALTER TABLE `user_pages`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Index_2` (`PageID`,`MasterID`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123;
--
-- AUTO_INCREMENT for table `tbl_accounttype`
--
ALTER TABLE `tbl_accounttype`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_address`
--
ALTER TABLE `tbl_address`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=275;
--
-- AUTO_INCREMENT for table `tbl_bom`
--
ALTER TABLE `tbl_bom`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_bomdetails`
--
ALTER TABLE `tbl_bomdetails`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_boolean`
--
ALTER TABLE `tbl_boolean`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_cartdetails`
--
ALTER TABLE `tbl_cartdetails`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_carttype`
--
ALTER TABLE `tbl_carttype`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_cart_details_temp`
--
ALTER TABLE `tbl_cart_details_temp`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_cart_temp`
--
ALTER TABLE `tbl_cart_temp`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_currency`
--
ALTER TABLE `tbl_currency`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_instrumentetails`
--
ALTER TABLE `tbl_instrumentetails`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_instrumenttype`
--
ALTER TABLE `tbl_instrumenttype`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tbl_item`
--
ALTER TABLE `tbl_item`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_itemaccounts`
--
ALTER TABLE `tbl_itemaccounts`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_itembatch`
--
ALTER TABLE `tbl_itembatch`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=148;
--
-- AUTO_INCREMENT for table `tbl_itembatchcheck`
--
ALTER TABLE `tbl_itembatchcheck`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_itemcategory`
--
ALTER TABLE `tbl_itemcategory`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `tbl_itemgroup`
--
ALTER TABLE `tbl_itemgroup`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_itempricelist`
--
ALTER TABLE `tbl_itempricelist`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_itempricetype`
--
ALTER TABLE `tbl_itempricetype`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_itemserial`
--
ALTER TABLE `tbl_itemserial`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tbl_itemsupplier`
--
ALTER TABLE `tbl_itemsupplier`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_itemtax`
--
ALTER TABLE `tbl_itemtax`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_itemunit`
--
ALTER TABLE `tbl_itemunit`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_item_insider`
--
ALTER TABLE `tbl_item_insider`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `tbl_master`
--
ALTER TABLE `tbl_master`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10378;
--
-- AUTO_INCREMENT for table `tbl_mastertype`
--
ALTER TABLE `tbl_mastertype`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `tbl_news`
--
ALTER TABLE `tbl_news`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_payrolldetails`
--
ALTER TABLE `tbl_payrolldetails`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `tbl_payrollmaster`
--
ALTER TABLE `tbl_payrollmaster`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_payrollperiod`
--
ALTER TABLE `tbl_payrollperiod`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_pd`
--
ALTER TABLE `tbl_pd`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=293;
--
-- AUTO_INCREMENT for table `tbl_servicetype`
--
ALTER TABLE `tbl_servicetype`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_tax`
--
ALTER TABLE `tbl_tax`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_taxclass`
--
ALTER TABLE `tbl_taxclass`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
--
-- AUTO_INCREMENT for table `tbl_unit`
--
ALTER TABLE `tbl_unit`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `tbl_valuationmethods`
--
ALTER TABLE `tbl_valuationmethods`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `tbl_voucheraccount`
--
ALTER TABLE `tbl_voucheraccount`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=131;
--
-- AUTO_INCREMENT for table `tbl_vouchercategory`
--
ALTER TABLE `tbl_vouchercategory`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tbl_voucherdetails`
--
ALTER TABLE `tbl_voucherdetails`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_voucherdetails_temp`
--
ALTER TABLE `tbl_voucherdetails_temp`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_vouchergroup`
--
ALTER TABLE `tbl_vouchergroup`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_vouchermaster`
--
ALTER TABLE `tbl_vouchermaster`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_vouchermasterref`
--
ALTER TABLE `tbl_vouchermasterref`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_vouchermaster_temp`
--
ALTER TABLE `tbl_vouchermaster_temp`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_vouchersession`
--
ALTER TABLE `tbl_vouchersession`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;
--
-- AUTO_INCREMENT for table `tbl_vouchertype`
--
ALTER TABLE `tbl_vouchertype`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `user_pages`
--
ALTER TABLE `user_pages`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
