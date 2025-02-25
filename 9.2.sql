
CREATE DATABASE IF NOT EXISTS `dn_contact` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE ` dn_contact `;

-- Table structure for table `CUSTOMERS`

DROP TABLE IF EXISTS `CUSTOMERS`;
CREATE TABLE IF NOT EXISTS `CUSTOMERS` (
  `CUST_ID` int(11) NOT NULL,
  `CUST_NAME` varchar(35) NOT NULL,
  `CUST_PHONE` varchar(20) NOT NULL,
  `CUST_EMAIL` varchar(80) NOT NULL,
  `CUST_ADDRESS` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


-- Indexes for table `CUSTOMERS`
ALTER TABLE `CUSTOMERS`
  ADD PRIMARY KEY (`CUST_ID`);


-- AUTO_INCREMENT for table `CUSTOMERS`
ALTER TABLE `CUSTOMERS`
  MODIFY `CUST_ID` int(11) NOT NULL AUTO_INCREMENT;
