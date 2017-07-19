
--
-- Database: `db_example`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `role`, `status`) VALUES
(1, 'Abc', 'Admin', 1),
(2, 'Xyz', 'Sub Admin', 0),
(3, 'Demo', 'Editor', 0),
(6, 'Demo Insert', 'Editor', 0),
(7, 'Demo Insert', 'Editor', 1),
(8, 'Demo Insert', 'Editor', 0),
(9, 'Demo Insert', 'Editor', 1),
(10, 'Demo Insert', 'Editor', 1),
(11, 'Demo Insert', 'Editor', 1),
(12, 'Demo Insert', 'Editor', 1),
(13, 'Demo Insert', 'Editor', 1),
(14, 'Demo Insert', 'Editor', 1),
(15, 'Demo Insert', 'Editor', 1),
(16, 'Demo Insert', 'Editor', 1),
(17, 'Demo Insert', 'Editor', 1),
(18, 'Demo Insert', 'Editor', 1),
(19, 'Demo Insert', 'Editor', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);
