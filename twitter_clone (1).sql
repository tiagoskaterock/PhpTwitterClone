-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 26-Maio-2022 às 00:47
-- Versão do servidor: 5.7.38-0ubuntu0.18.04.1
-- versão do PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `twitter_clone`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `senha`, `email`) VALUES
(1, 'Kathe Flukes', 'Ys09zvbCFYZw', 'kflukes0@de.vu'),
(2, 'Devina Clotworthy', 'x7uVk6Ef', 'dclotworthy1@exblog.jp'),
(3, 'Sara-ann Quoit', '4IymJG19JAR', 'squoit2@freewebs.com'),
(4, 'Frasco Ferras', 'GNqPA9j', 'fferras3@microsoft.com'),
(5, 'Gregorio Maharry', 'FAhL4RYdi1Q', 'gmaharry4@meetup.com'),
(6, 'Dore Duchateau', 'zR2aQ5zk', 'dduchateau5@ovh.net'),
(7, 'Cross Ellar', 'FjuMFKCD', 'cellar6@wix.com'),
(8, 'Rhoda Balasini', '5fI7afbzDPw', 'rbalasini7@bigcartel.com'),
(9, 'Rakel Hebblethwaite', 'SNQlq5Qs', 'rhebblethwaite8@archive.org'),
(10, 'Eilis Kildahl', 'hE2t9Y', 'ekildahl9@theatlantic.com'),
(11, 'Kissiah Wahncke', 'ZGJ3CXL3Uz0u', 'kwahnckea@reuters.com'),
(12, 'Cara Hatfull', 'tfJoHgScor', 'chatfullb@jigsy.com'),
(13, 'Lynnelle Smeeton', 'bepy05iw5', 'lsmeetonc@slate.com'),
(14, 'Victor Toombs', 'BsvHKvdb96jw', 'vtoombsd@skyrock.com'),
(15, 'Georg Ubsdell', 'xA91SBjmjM', 'gubsdelle@nymag.com'),
(16, 'Cathi Teodoro', 'VlhRrDQkH', 'cteodorof@businessinsider.com'),
(17, 'Ward Mougel', 'bcRzrc', 'wmougelg@tamu.edu'),
(18, 'Teri Chetter', 'Cm9sNHGFbl18', 'tchetterh@godaddy.com'),
(19, 'Darryl Nudd', '5MzaK7NEtfKw', 'dnuddi@cocolog-nifty.com'),
(20, 'Cloris Mangan', 'OLB0Pw', 'cmanganj@eepurl.com'),
(21, 'Thibaud Fabri', 'w5dtsdFR4LT', 'tfabrik@yelp.com'),
(22, 'Helga Kacheler', '5PSy5Jg', 'hkachelerl@smugmug.com'),
(23, 'Philippine Tattersall', 'lPktOZ', 'ptattersallm@nature.com'),
(24, 'Giavani Hartlebury', '865852', 'ghartleburyn@seesaa.net'),
(25, 'Barnebas Mocquer', 'OxEWbHEpJLcq', 'bmocquero@lulu.com'),
(26, 'Silvain Bycraft', 'yNTs91Hr0b1', 'sbycraftp@odnoklassniki.ru'),
(27, 'Fraser Metheringham', 'Iihh4LN', 'fmetheringhamq@amazon.co.uk'),
(28, 'Hyacintha Kochlin', 'm7qW3Z44NZkK', 'hkochlinr@whitehouse.gov'),
(29, 'Ludwig Texton', '7uR64BAnO', 'ltextons@storify.com'),
(30, 'Craig MacHoste', 'Wp6TDeW', 'cmachostet@shutterfly.com'),
(31, 'Dino Klimentyonok', '7iJMXsCBe3v', 'dklimentyonoku@bluehost.com'),
(32, 'Andonis Jarrad', 'UKKDHc8', 'ajarradv@fda.gov'),
(33, 'Mattheus Capineer', 'X9zYc1nD', 'mcapineerw@ca.gov'),
(34, 'Lynea Roadknight', '4d00hWWrNLP', 'lroadknightx@jugem.jp'),
(35, 'Shalom Nichols', 'zY6tn63YEN', 'snicholsy@clickbank.net'),
(36, 'Nadya Rettie', 'RdoIzRg', 'nrettiez@ibm.com'),
(37, 'Hank Cruttenden', 'HcwnLafFy', 'hcruttenden10@theglobeandmail.com'),
(38, 'Mufinella Harnett', 'UuT2xRAtWI', 'mharnett11@utexas.edu'),
(39, 'Berri Olivari', '2dOnOy', 'bolivari12@statcounter.com'),
(40, 'Leif Harsnep', 'aYKmDJl', 'lharsnep13@reverbnation.com'),
(41, 'Elliot Davey', '1fRYrb0iZGx', 'edavey14@dot.gov'),
(42, 'Keenan Treske', 'MFQUJ4zNJT', 'ktreske15@hatena.ne.jp'),
(43, 'Celestia O\'Glessane', 'NouuNaA9', 'coglessane16@goo.ne.jp'),
(44, 'Marylou Onraet', 'GV0ITdw91t', 'monraet17@wired.com'),
(45, 'Adriane Morrid', 'Dx2OqUgSFSr', 'amorrid18@irs.gov'),
(46, 'Xenos Henworth', 'wDwo2YU', 'xhenworth19@state.gov'),
(47, 'Syman Diben', 'JMCCV3ZTi4w', 'sdiben1a@ftc.gov'),
(48, 'Zach Marcroft', 'vY1OS4dsFD', 'zmarcroft1b@miibeian.gov.cn'),
(49, 'Mitzi Draycott', '3xCD3tu', 'mdraycott1c@unesco.org'),
(50, 'Ichabod Nicklen', 'NxPeJZf97Ob', 'inicklen1d@spotify.com'),
(51, 'Zerk Peidro', '4GyhkQc', 'zpeidro1e@themeforest.net'),
(52, 'Millie Nesby', 'SHPGYU', 'mnesby1f@salon.com'),
(53, 'Corine Hungerford', 'ecmwOl', 'chungerford1g@mtv.com'),
(54, 'Madeline Jaxon', 'lsemQMh', 'mjaxon1h@shutterfly.com'),
(55, 'Mae Flatley', 'ge6Bos', 'mflatley1i@github.com'),
(56, 'Byron Turfes', 'syTVDG', 'bturfes1j@constantcontact.com'),
(57, 'Rik Bathoe', 'tuPFeKd', 'rbathoe1k@howstuffworks.com'),
(58, 'Justinian Friary', 'dlko6us', 'jfriary1l@unblog.fr'),
(59, 'Pieter Thunders', 'OjGvcbJYAP', 'pthunders1m@nsw.gov.au'),
(60, 'Marya Goforth', 'aS4I84mHRUPt', 'mgoforth1n@51.la'),
(61, 'Jody Gallier', 'BCc0bCb81B4', 'jgallier1o@photobucket.com'),
(62, 'Selena Bilovus', 'CeTnpbZuNZxt', 'sbilovus1p@foxnews.com'),
(63, 'Wendeline Rechert', '55A6THH', 'wrechert1q@wix.com'),
(64, 'Wiatt Dine-Hart', '2pbTpV', 'wdinehart1r@upenn.edu'),
(65, 'Cirstoforo Dunton', 'ByjiyxmP', 'cdunton1s@un.org'),
(66, 'Levey Romanet', 'm0MYaSoF6', 'lromanet1t@example.com'),
(67, 'Brier Galero', 'FX3zkCg', 'bgalero1u@furl.net'),
(68, 'Jonathon Skillen', 'q8dUTl', 'jskillen1v@live.com'),
(69, 'Cad Fusco', '3tFVSIH9F5', 'cfusco1w@ycombinator.com'),
(70, 'Yoshiko Issit', 'idu6ujw', 'yissit1x@qq.com'),
(71, 'Korey Jellybrand', '4c1mFD', 'kjellybrand1y@shareasale.com'),
(72, 'Brigitta Ledeker', 'XzL6LmHd', 'bledeker1z@webs.com'),
(73, 'Osgood Whebell', '8ai0oHYmnAy', 'owhebell20@gizmodo.com'),
(74, 'Kingsley Syvret', 'Y4at56puQk', 'ksyvret21@mail.ru'),
(75, 'Kelwin Sprosson', '9r3isXS78', 'ksprosson22@phoca.cz'),
(76, 'Kelvin Radolf', 'LGJVDH3', 'kradolf23@smugmug.com'),
(77, 'Rich Middleditch', 'dZYQfs', 'rmiddleditch24@rediff.com'),
(78, 'Justina McCorkindale', '6HAPpCYZ8Ua', 'jmccorkindale25@un.org'),
(79, 'Faustine Limbourne', 'u5aPk1mQY', 'flimbourne26@naver.com'),
(80, 'Buddie Kmieciak', 'W7GDYKai', 'bkmieciak27@usnews.com'),
(81, 'Caroline Andrault', 'aha5HX7WDRq', 'candrault28@nih.gov'),
(82, 'Ralina Trenaman', 'nrl2Vn5v7nUn', 'rtrenaman29@studiopress.com'),
(83, 'Sharon Dugue', 'Drdnh5lPH', 'sdugue2a@behance.net'),
(84, 'Horace Netherwood', 'whWdUr', 'hnetherwood2b@joomla.org'),
(85, 'Cosimo Hastin', 'hR9RiybR2WZ', 'chastin2c@deliciousdays.com'),
(86, 'Margo Banes', 'Aue6jfB', 'mbanes2d@gov.uk'),
(87, 'Mario Richardet', 'rJqxRlmf', 'mrichardet2e@msu.edu'),
(88, 'Tomasine McNair', 'SReEo2t', 'tmcnair2f@nhs.uk'),
(89, 'Donna MacInherney', 'yNKfJkG', 'dmacinherney2g@icq.com'),
(90, 'Tadd Coiley', 'i8RYCex501', 'tcoiley2h@irs.gov'),
(91, 'Thebault Oriel', 'pZOBzdJD', 'toriel2i@cocolog-nifty.com'),
(92, 'Murial Lawrenson', 'iQB7qxyx', 'mlawrenson2j@wordpress.org'),
(93, 'Valentina Antonnikov', '0LalX3xBa', 'vantonnikov2k@reuters.com'),
(94, 'Hal Wybrew', 'WoJTK1Rz', 'hwybrew2l@prnewswire.com'),
(95, 'Bernadina Basilotta', 'kos1EdKNfTr', 'bbasilotta2m@posterous.com'),
(96, 'Conchita Downe', 'zJck93fVaXA', 'cdowne2n@fda.gov'),
(97, 'Shell Jorger', 'hZk90DmUw', 'sjorger2o@live.com'),
(98, 'Brad Veness', 'QlRHvXfCdj', 'bveness2p@sciencedaily.com'),
(99, 'Coretta Cromleholme', 'JQHFL3Cy', 'ccromleholme2q@columbia.edu'),
(100, 'Rozina Brewin', 'O07LiFO', 'rbrewin2r@mit.edu');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
