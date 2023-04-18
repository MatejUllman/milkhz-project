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
VALUES('Šunkove závitky','8 plátků šunky prosciutto crudo 250g lučiny 1 lžíce oleje sůl, pepř 2 hrsti rukoly, nasekané na velké kusy + hrst listů k podávání olivový olej na zastříknutí slunečnicová semínka, nasucho opražená Plátky prosciutta rozložte na pracovní ploše. Lučinu našlehejte v misce s olejem, solí a pepřem. Směsí pomažte šunku, navrch rozdělte rukolu a stočte do svitku. Zatříkněte olejem, posypte semínky.','15 min','snadné','šunkovézávitky.jpg');

INSERT into recepty(nazev,postup,dobaPripravy,narocnost,obrazek) 
VALUES('Minivětrníčky','190-200g másla, špetka soli, 500ml vody, 280g hladké mouky, 6-7 vajec, 200ml smetany ke šlehání, 1 sáček vanilkového cukru, čokoláda na ozdobení, V hrnci přiveďte k varu 500ml vody, máslo a špetku soli. Vsypte mouku a za stálého míchání zahřívejte, aby jste získali celistvé těsto,  které se nebude lepit ani na dno ani na vařečku. Přendejte ho do mísy,nechte vyjít páru a postupně vmíchejte celá vejce. Těsto přendejte do cukrářského sáčku s řezanou trubičkou a na plechu vytvořte malá kolečka. Pečte je asi 10 minut v troubě předehřáté na 180°C. Nechte je vychladnout a pak podélně prořízněte (nedořezávejte zcela). Smetanu ušlehejte dotuha,vmíchejte vanilkový cukra vzniklou šlehačkou plňte  minivětrníčky. Přestříkejte rozehřátou čokoládou a ihned podávejte. ','50 min','snadné','minivětrníčky.jpg');

INSERT into recepty(nazev,postup,dobaPripravy,narocnost,obrazek) 
VALUES('Cuketová bábovka','150g cukety, špetka soli, 4 vejce, 1 lžíce čerstvě vymačkané citronové šťávy, 150g másla, 130g moučkového cukru, 1/2 sáčku vanilkového cukru, 1 kelímek husté zakysané smetany, 250g polohrubé mouky, 1 sáček kypřícího prášku, Cuketu nastrouhejte na hrubo, v míse ji smíchejte se špetkou soli a nechejte 10 minut stát, aby pustila vodu. Z bílku a citronové šťávy vyšlehejte pevný sníh. Máslo, oba cukry a žloutky šlehejte asi 7 minut do světlé a nadýchané pěny. Pak zlehka vmíchejte zakysanou smetanu a poté postupně i mouku  smíchanou s kypřícím práškem. Z cukety vymačkejte tekutinu a pak ji přidejte do těsta. Nakonec přimíchejte i vyšlehané bílky. Pečte v troubě vyhřáté na 150°C asi 50-60 minut nebo dokud  těsto ulpívá na špejli.','110 - 120 min','střední','cuketová bábovka.jpg');

INSERT into recepty(nazev,postup,dobaPripravy,narocnost,obrazek) 
VALUES('Pikantní grilovaná kuřecí prsa',' 2 kuřecí prsa (celkem cca 300-350 g masa), Marináda: 2 lžičky grilovacího koření na kuře, 1 špetka chilli, 4 lžíce rostlinného oleje, 1 lžička kari koření, 1 lžička francouzské hrubozrnné hořčice, sůl, pepř, Nejprve připravíme marinádu smícháním všech ingrediencí. Pokud jsou kuřecí prsa velká, příčně je rozkrojíme na více plátků, které naložíme do marinády a necháme alespoň hodinu uležet. Maso opékáme na grilu nebo grilovací pánvi (případně může stačit pánev). Podávala jsem s hranolky, ale přílohu si každý může zvolit podle vlastní chuti.','25 min','lehká','Pikantní grilovaná kuřecí prsa.jpg ');

INSERT into recepty(nazev,postup,dobaPripravy,narocnost,obrazek) 
VALUES('Zeleninová polévka',' 1 lžíce másla, 3 lžíce dětské krupičky, 1 vejce, 1 l vývaru, sůl, pepř, 1 lžička petrželky, 1 lžička libečku, 1/4 lžičky drceného kmínu, 3 lžíce nastrouhané kořenové zeleniny, 2 lžíce hrášku, 2 stroužky česneku, Na rozehřáté máslo dáme krupičku a opražíme za stálého míchání. Vklepneme vajíčko a mícháme a vařečkou oddělujeme nočky. Zalijeme vývarem, přidáme koření, zeleninu a povaříme. Nakonec přidáme hrášek a prolisovaný česnek.','45 min','snadné','Zeleninová polévka.jpg');

INSERT into recepty(nazev,postup,dobaPripravy,narocnost,obrazek) 
VALUES('Bramborové placky',' 420 g brambor uvařených ve slupce, 1 vejce, 250 g kysaného zelí, 150 -200 g hladké mouky (podle potřeby), sůl, pepř, 1 cibule, 150 g uzeného masa (nebo uzeniny), 1 jarní cibulka, sádlo (nebo olej), Na tuku osmahneme nakrájenou cibuli, přidáme na kostičky nakrájené uzené maso a orestujeme. Brambory oloupeme a nastrouháme na jemném struhadle. Přidáme vymačkané a nakrájené zelí, vejce, sůl, pepř a jarní cibulku nakrájenou najemno i se zelenou částí. Přidáme orestovanou cibuli s uzeným masem, mouku a propracujeme. Tvoříme placky a na malém množství tuku osmažíme z obou stran.','60 min','sřední','bramborové placky.jpg');

INSERT into recepty(nazev,postup,dobaPripravy,narocnost,obrazek) 
VALUES('Kuřecí čtvrty "uzené"',' 3-4 kuřecí čtvrtky, praganda - na 1 kg masa 20 g (nebo běžná sůl+1/2 lžičky moučkového cukru), tekutý kouř, Maso osolíme, pořádně vetřeme sůl. Uložíme do pevně uzavíratelné misky s poklopem. Necháme v lednici 3-4 dny. Poté potřeme mašlovačkou uzeným kouřem a opět uzavřeme na dva dny do lednice. Připravíme pomalý hrnec s mřížkou nebo pařáčkem. Maso uložíme, potřeme opět kouřem a pomalíme 5-6 hodin na low. Během pomalení ještě 2x potřeme kouřem. A je hotovo, maso je šťavnaté a jako dort.','315min','obtížné','kuřecí čtvrty uzené.jpg');

INSERT into recepty(nazev,postup,dobaPripravy,narocnost,obrazek) 
VALUES('Jehněčí plíce na zelenině',' 1 jehněčí plíce, 1 cibule, 2 špičaté červené papriky, 150 g kukuřice, 150 g hrášku, 1 polévková lžíce petrželky, 1 lžíce houbového koření, olej, pažitka, sůl, Na oleji osmahněte nadrobno nakrájenou cibuli. Přidejte na kostičky nakrájené plíce a nechte zatáhnout. Zalijeme vodou, přidáme houbové koření a petrželku, osolíme a dusíme asi 15 minut. Poté přidáme kukuřici, hrášek a na plátky nakrájenou papriku. Společně dusíme ještě asi 5 minut. Podávejte s kuskusem, rýží nebo těstovinami posypané nasekanou pažitkou.','30 minut','střední','Jehněčí plíce na zelenině.jpg');

INSERT into recepty(nazev,postup,dobaPripravy,narocnost,obrazek) 
VALUES('Svíčková z jelena',' 500 g jeleního masa, 1 cibule, 1/2 celeru, 4 mrkve, 3 střední petržele, 5 pepřů, 6 jalovců, 2 bobkové listy, 6 kuliček nového koření, mouka, mléko, smetana celá, 2 lžičky hořčice, Na cibulce zpěníme na kostičky nakrájenou kořenovou zeleninu. Maso osolíme, prošpikujeme slaninou (já ho nešpikovala), opečeme. Až je maso zatažené. zalijeme vodou,přidáme koření a necháme 30 minut vařit, pak necháme vychladnout a dáme přes noc do lednice odležet. Na druhý den maso společně ze zeleninou dusíme do měkka, maso pak vyjmeme a zeleninu promixujeme nebo propasírujeme. Pak přidáme záklechtku (mouka v mléku), 1 smetanu, 2 lžičky hořčice.','130 min','obtížné','Svíčková z jelena.jpg');

INSERT into recepty(nazev,postup,dobaPripravy,narocnost,obrazek) 
VALUES('Rajská omáčka',' 1 litr rajčatové šťávy (100%), 1/4 litru vývaru (hovězí), 1 lžíce cukru, 2 lžíce hladké mouky, 100 g másla, 1 větší cibule, 5 hřebíčků, 4 kuličky nového koření, 2 bobkové listy, sůl, pepř, V hrnci rozpustíme máslo, přidáme jemně nasekanou cibuli a necháme ji zesklovatět. Poté přidáme hladkou mouku a vytvoříme světlou cibulovo-máslovou jíšku. Jíšku zalijeme vývarem a dobře rozmícháme do hladka. Hned poté přidáme rajskou šťávu, koření a necháme 20 minut probublávat. V průběhu vaření musíme omáčku pravidelně promíchávat, ať se nechytá ke dnu. Pokud je třeba, hustotu omáčky můžeme ještě upravit přidáním vývaru. Tipy, díky kterým bude vaše rajská dokonalá: Po provaření omáčky vyjmeme koření a pro docílení dokonalé jemnosti omáčku rozmixujeme ponorným mixérem zcela do hladka. Dochutíme dle potřeby cukrem a solí. Podáváme s vařeným hovězím masem (krk, žebro, loupaná plec) a houskovým knedlíkem.','100 minut','střední','Rajská omáčka.jpg');