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

INSERT into recepty(nazev,postup,dobaPripravy,narocnost,obrazek) 
VALUES('Sekaná','Maso vložíme do misky, přidáme kousky rohlíků, majoránku, sůl, pepř, česnek a cokoliv ještě chcete. Směs pořádně promícháme klidně 5 minut. Ze směsi utvořte objekt tvaru doutníkového UFO a vložte do pekáče. Celou sekanou potřeme vodou a předehřejeme troubu na 200 stupňů. Potom stlumte troubu na 150 stupňů a pečte sekanou třeba 45 minut nebo více dle potřeby. Gratuluju máte úžasnou sekanou.','dost na to, aby jste zhlédli 3 epizody Dva a půl chlapa','zvládneš i ty','sekana.png');

INSERT into recepty(nazev,postup,dobaPripravy,narocnost,obrazek) 
VALUES('Beef tea','V konvici ohřejeme vodu. Do hrňíčku vložíme 1 až 2 lžíce bovrilu a zamícháme. Necháme odstát 5 minut a máme hotovo.','okolo 10 minut záleží na konvici','lehké','https://cdn.vox-cdn.com/thumbor/JlYl0rO7yyzLEzqZj-NUHJQQOic=/0x0:272x391/1200x0/filters:focal(0x0:272x391):no_upscale()/cdn.vox-cdn.com/uploads/chorus_asset/file/3711804/1929495_12997602002_7560_n.0.jpg');

INSERT into recepty(nazev,postup,dobaPripravy,narocnost,obrazek) 
VALUES('Šunkove závitky','15 min','snadné','
8 plátků šunky prosciutto crudo
250g lučiny
1 lžíce oleje
sůl, pepř
2 hrsti rukoly, nasekané na velké kusy + hrst listů k podávání
olivový olej na zastříknutí
slunečnicová semínka, nasucho opražená

Plátky prosciutta rozložte na pracovní ploše.
Lučinu našlehejte v misce s olejem, solí a pepřem.
Směsí pomažte šunku, navrch rozdělte rukolu a stočte do svitku.
Zatříkněte olejem, posypte semínky.','');

INSERT into recepty(nazev,postup,dobaPripravy,narocnost,obrazek) 
VALUES();

INSERT into recepty(nazev,postup,dobaPripravy,narocnost,obrazek) 
VALUES();

INSERT into recepty(nazev,postup,dobaPripravy,narocnost,obrazek) 
VALUES();

INSERT into recepty(nazev,postup,dobaPripravy,narocnost,obrazek) 
VALUES();

INSERT into recepty(nazev,postup,dobaPripravy,narocnost,obrazek) 
VALUES();

INSERT into recepty(nazev,postup,dobaPripravy,narocnost,obrazek) 
VALUES();

INSERT into recepty(nazev,postup,dobaPripravy,narocnost,obrazek) 
VALUES();

INSERT into recepty(nazev,postup,dobaPripravy,narocnost,obrazek) 
VALUES();

INSERT into recepty(nazev,postup,dobaPripravy,narocnost,obrazek) 
VALUES();