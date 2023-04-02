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
  `postup` varchar(400) NOT NULL,
  `dobaPripravy` varchar(80) NOT NULL,
  `narocnost` varchar(30) not null,
  `obrazek` varchar(500) not null
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

ALTER TABLE `recepty` CHANGE `id` `id` INT(11) NOT NULL AUTO_INCREMENT, add PRIMARY KEY (`id`); 

CREATE or replace TABLE `oblibeneRecepty` (
  `id` int(11) NOT NULL,
  `nazev` varchar(30) NOT NULL,
  `postup` varchar(400) NOT NULL,
  `dobaPripravy` varchar(80) NOT NULL,
  `narocnost` varchar(30) not null,
  `obrazek` varchar(500) not null
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

ALTER TABLE `oblibeneRecepty` CHANGE `id` `id` INT(11) NOT NULL AUTO_INCREMENT, add PRIMARY KEY (`id`);

CREATE or replace TABLE `odlozeneRecepty` (
  `id` int(11) NOT NULL,
  `nazev` varchar(30) NOT NULL,
  `postup` varchar(400) NOT NULL,
  `dobaPripravy` varchar(80) NOT NULL,
  `narocnost` varchar(30) not null,
  `obrazek` varchar(500) not null
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

ALTER TABLE `odlozeneRecepty` CHANGE `id` `id` INT(11) NOT NULL AUTO_INCREMENT, add PRIMARY KEY (`id`);

INSERT into recepty(nazev,postup,dobaPripravy,narocnost) 
VALUES('Sekaná','Maso vložíme do misky, přidáme kousky rohlíků, majoránku, sůl, pepř, česnek a cokoliv ještě chcete. Směs pořádně promícháme klidně 5 minut. Ze směsi utvořte objekt tvaru doutníkového UFO a vložte do pekáče. Celou sekanou potřeme vodou a předehřejeme troubu na 200 stupňů. Potom stlumte troubu na 150 stupňů a pečte sekanou třeba 45 minut nebo více dle potřeby. Gratuluju máte ůžasnou sekanou.','dost na to, aby jste zhlédli 3 epizody Dva a půl chlapa','zvládneš i ty');