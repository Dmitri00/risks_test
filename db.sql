create table if not exists `Supplyers` (
 `SupplyerId` integer PRIMARY KEY NOT NULL,
 `SupplyerName` varchar(255) NOT NULL,
 `SupplyerAddress` varchar(255) NOT NULL,
 `SupplyerPhone` varchar(16) NOT NULL
 );
 
create table if not exists `Clients` (
 `ClientId` integer PRIMARY KEY NOT NULL,
 `ClientName` varchar(255) NOT NULL,
 `ClientAddress` varchar(255) NOT NULL,
 `ClientPhone` varchar(16) NOT NULL
 );
