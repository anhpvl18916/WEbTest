USE BookDB;
CREATE TABLE `order_detail` (
  `orderId` int(11) unsigned NOT NULL ,
  `bookId` int(12) NOT NULL ,
  `number` int(11) DEFAULT NULL,
  `orderDetailCost` int(11) DEFAULT NULL,
  primary key (`orderId`),
  foreign key (`bookId`) references `book`(`bookId`) 
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
