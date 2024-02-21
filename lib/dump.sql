
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `myforum`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_posts`
--

CREATE TABLE `tbl_posts` (
  `id` int(11) NOT NULL,
  `thread_ID` int(11) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_threads`
--

CREATE TABLE `tbl_threads` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for exported tables
--

--
-- Indexes for table `tbl_posts`
--
ALTER TABLE `tbl_posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `thread_ID` (`thread_ID`);

--
-- Indexes for table `tbl_threads`
--
ALTER TABLE `tbl_threads`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exported tables
--

--
-- AUTO_INCREMENT for table `tbl_posts`
--
ALTER TABLE `tbl_posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_threads`
--
ALTER TABLE `tbl_threads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints of exportet tables
--

--
-- Constraints of table `tbl_posts`
--
ALTER TABLE `tbl_posts`
  ADD CONSTRAINT `tbl_posts_ibfk_1` FOREIGN KEY (`thread_ID`) REFERENCES `tbl_threads` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
