CREATE DATABASE IF NOT EXISTS `receptar` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `receptar`;

-- --------------------------------------------------------

--
-- Struktura tabulky `uzivatel`
--

CREATE or replace TABLE `uzivatel` (
  `email` varchar(30) NOT NULL,
  `heslo` varchar(30) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

ALTER TABLE `uzivatel` CHANGE `id` `id` INT(11) NOT NULL AUTO_INCREMENT, add PRIMARY KEY (`id`); 

CREATE or replace TABLE `recepty` (
  `id` int(11) NOT NULL,
  `nazev` varchar(30) NOT NULL,
  `postup` varchar(80) NOT NULL,
  `dobaPripravy` varchar(30) NOT NULL,
  `narocnost` varchar(30) not null
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

ALTER TABLE `recepty` CHANGE `id` `id` INT(11) NOT NULL AUTO_INCREMENT, add PRIMARY KEY (`id`); 

CREATE or replace TABLE `oblibeneRecepty` (
  `id` int(11) NOT NULL,
  `nazev` varchar(30) NOT NULL,
  `postup` varchar(80) NOT NULL,
  `dobaPripravy` varchar(30) NOT NULL,
  `narocnost` varchar(30) not null
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

ALTER TABLE `oblibeneRecepty` CHANGE `id` `id` INT(11) NOT NULL AUTO_INCREMENT, add PRIMARY KEY (`id`);

CREATE or replace TABLE `odlozeneRecepty` (
  `id` int(11) NOT NULL,
  `nazev` varchar(30) NOT NULL,
  `postup` varchar(80) NOT NULL,
  `dobaPripravy` varchar(30) NOT NULL,
  `narocnost` varchar(30) not null
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

ALTER TABLE `odlozeneRecepty` CHANGE `id` `id` INT(11) NOT NULL AUTO_INCREMENT, add PRIMARY KEY (`id`);