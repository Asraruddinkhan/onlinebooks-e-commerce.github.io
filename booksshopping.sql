--
-- Database: `booksshopping`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('aaa', 'aaa'),
('aaa', 'aaa');

-- --------------------------------------------------------

--
-- Table structure for table `courier`
--

CREATE TABLE `courier` (
  `cid` int(11) NOT NULL,
  `stockid` int(11) NOT NULL,
  `couriername` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courier`
--

INSERT INTO `courier` (`cid`, `stockid`, `couriername`) VALUES
(1, 1, 'DHL');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `paymentID` int(11) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(40) NOT NULL,
  `state` varchar(45) NOT NULL,
  `zip` varchar(45) NOT NULL,
  `cardname` varchar(45) NOT NULL,
  `cardnumber` varchar(45) NOT NULL,
  `expmonth` varchar(40) NOT NULL,
  `expyear` varchar(45) NOT NULL,
  `cvv` varchar(45) NOT NULL,
  `sameadr` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`paymentID`, `firstname`, `email`, `address`, `city`, `state`, `zip`, `cardname`, `cardnumber`, `expmonth`, `expyear`, `cvv`, `sameadr`) VALUES
(1, 'asrar', 'asrar@gmail.com', 'Brampton', 'Sydney', '111', '122', 'Mater', '11212', '12 aug', '2343', '122', 'on'),
(2, '', '', '', '', '', '', '', '', '', '', '', 'on');

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE `purchase` (
  `purchaseid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `stockid` int(11) NOT NULL,
  `date` varchar(30) NOT NULL,
  `paymentamount` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `purchase`
--

INSERT INTO `purchase` (`purchaseid`, `userid`, `stockid`, `date`, `paymentamount`, `status`) VALUES
(1, 1, 1, '2023-03-06', 100, 1);

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `stockid` int(11) NOT NULL,
  `bookname` varchar(30) NOT NULL,
  `price` int(11) NOT NULL,
  `ISBN` varchar(30) NOT NULL,
  `count` int(11) NOT NULL,
  `image` varchar(100) DEFAULT NULL,
  `publisher` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`stockid`, `bookname`, `price`, `ISBN`, `count`, `image`, `publisher`) VALUES
(2, 'wa', 123, '2323', 3, 'WhatsApp Image 2023-12-03 at 10.45.00_0c3d741b.jpg', ''),
(3, 'wa', 123, '2323', 3, 'WhatsApp Image 2023-12-03 at 00.47.21_3bce81fb.jpg', 'adadadad'),
(4, 'wa', 123, '2323', 3, 'WhatsApp Image 2023-12-03 at 00.47.21_3bce81fb.jpg', 'adad'),
(5, 'gfg', 67, '5434', 3, 'WhatsApp Image 2023-12-03 at 00.47.21_3bce81fb.jpg', 'vgdh');

-- --------------------------------------------------------

--
-- Table structure for table `users1`
--

CREATE TABLE `users1` (
  `userid` int(11) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `mobileno` varchar(30) DEFAULT NULL,
  `sex` varchar(20) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users1`
--

INSERT INTO `users1` (`userid`, `name`, `email`, `password`, `mobileno`, `sex`, `address`) VALUES
(1, 'mehak', 'mehak@gmail.com', '123', '12345122', 'f', 'Canada'),
(5, '', '', '', '', '', ''),
(6, '', '', '', '', '', ''),
(7, '', '', '', '', '', ''),
(8, '', '', '', '', '', ''),
(9, '', '', '', '', '', ''),
(10, '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`paymentID`);

--
-- Indexes for table `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`purchaseid`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`stockid`);

--
-- Indexes for table `users1`
--
ALTER TABLE `users1`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `paymentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `purchase`
--
ALTER TABLE `purchase`
  MODIFY `purchaseid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `stock`
--
ALTER TABLE `stock`
  MODIFY `stockid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users1`
--
ALTER TABLE `users1`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
