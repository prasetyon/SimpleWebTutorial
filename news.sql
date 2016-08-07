-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2016 at 01:12 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `news`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE IF NOT EXISTS `berita` (
`NO` int(11) NOT NULL,
  `ID_BERITA` varchar(6) NOT NULL,
  `JUDUL_BERITA` varchar(100) NOT NULL,
  `KETERANGAN_BERITA` varchar(500) NOT NULL,
  `GAMBAR_BERITA` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`NO`, `ID_BERITA`, `JUDUL_BERITA`, `KETERANGAN_BERITA`, `GAMBAR_BERITA`) VALUES
(1, 'LGND01', 'Articuno', 'Articuno, known as Freezer (????? Fur?z??) in Japan, is a fictional character in the Pokémon franchise. Articuno is one of the three winged mirage Legendary Pokémon, along with Zapdos and Moltres. It is a large bird, noted for its ability to control cold. Articuno was one of many designs conceived by Game Freak and finalized by Ken Sugimori in Pokémon Red and Blue. Their names were changed in the English localization to give them more "clever and descriptive names."', 'images/articuno.jpg'),
(2, 'LGND02', 'Zapdos', 'Zapdos (???? Sand??, Thunder in original Japanese language versions) is a Pokémon species in Nintendo and Game Freak''s Pokémon franchise. Zapdos is one of the three winged mirages along with Articuno and Moltres. It was originally conceived by Game Freak''s character development team and finalized by Ken Sugimori. Its English name is a combination of "zap" and "dos", the Spanish word for two.\r\n\r\nIts first appearance was in Pokémon Red and Blue, where it acts as one of the rarest Pokémon.', 'images/zapdos.jpg'),
(3, 'LGND03', 'Moltres', 'Moltres (????? Faiy??, Fire in original Japanese language versions) is a Pokémon species in Nintendo and Game Freak''s Pokémon franchise. Created by Ken Sugimori, Moltres first appeared in the video games Pokémon Red and Blue and later in subsequent sequels. Moltres is one of the three winged mirages, along with Articuno and Zapdos. Their names were changed in the English localization to give them more "clever and descriptive names."', 'images/moltres.jpg'),
(4, 'LGND04', 'Mewtwo', 'Mewtwo (Japanese: ????? Hepburn: My?ts??) is a fictional creature from Nintendo and Game Freak''s Pokémon media franchise. Created by Ken Sugimori, it first appeared in the video games Pokémon Red and Blue and their sequels, and later appeared in various merchandise, spinoff titles, as well as animation adaptations of the franchise.', 'images/mewtwo.jpg'),
(5, 'LGND05', 'Mew', 'Mew (??? My??) is one of the fictional species of creatures from Nintendo''s and Game Freak''s Pokémon media franchise created by Satoshi Tajiri. Mew is a small, pink, Psychic-type Mythical Pokémon. It was added to Pokémon Red and Green by its creator, Game Freak programmer Shigeki Morimoto, as a secret character. As such, its presence has been surrounded by rumors and myths, which contributed to make the Pokémon franchise a success.', 'images/mew.jpg'),
(6, 'NEWS01', 'Pokemon Go!!', 'Pokémon Go (stylized as Pokémon GO) is a free-to-play location-based augmented reality mobile game developed by Niantic for iOS and Android devices. It was released in most regions of the world in July 2016. Making use of GPS and the camera of compatible devices, the game allows players to capture, battle, and train virtual creatures, called Pokémon, who appear on device screens as though in the real world. The game is free-to-play.', 'images/pokemongo.jpg'),
(7, 'STAR01', 'Bulbasaur', 'Bulbasaur, known as Fushigidane (??????) in Japan,[1] is a Pokémon species in Nintendo and Game Freak''s Pokémon franchise. Designed by Ken Sugimori, their name is a combination of the words "bulb" and "dinosaur." First appearing in Pokémon Red and Blue as a Starter Pokémon, they later appeared in subsequent sequels, spin-off games, related merchandise, and animated and printed adaptations of the franchise.', 'images/bulbasaur.jpg'),
(8, 'STAR02', 'Charmander', 'Charmander, known as Hitokage (?????) in Japan, is a Pokémon species in Nintendo and Game Freak''s Pokémon franchise. Created by Ken Sugimori, Charmander first appeared in the video games Pokémon Red and Blue and subsequent sequels, later appearing in various merchandise, spinoff titles and animated and printed adaptations of the franchise. The end of a Charmander''s tail is alight with a flame, and the flame''s size reflects both the physical health and the emotions of the individual.', 'images/charmander.jpg'),
(9, 'STAR03', 'Squirtle', 'Squirtle (Zenigame ????), is a Pokémon species in Nintendo and Game Freak''s Pokémon franchise. It was originally conceived by Game Freak''s character development team and finalized by Ken Sugimori. Its name was changed from Zenigame to Squirtle during the English localization of the series in order to give it a "clever and descriptive name." In animated appearances, Squirtle is voiced in Japanese by Rikako Aikawa and in English localizations by Eric Stuart. Squirtle, in the anime, never evolved.', 'images/squirtle.jpg'),
(10, 'POKE01', 'Caterpie', '', 'images/caterpie.jpg'),
(11, 'POKE02', 'Weedle', '', 'images/weedle.jpg'),
(13, 'POKE04', 'Rattata', '', 'images/ratatta.jpg'),
(14, 'POKE05', 'Spearow', '', 'images/spearow.jpg'),
(15, 'POKE06', 'Ekans', '', 'images/ekans.jpg'),
(16, 'POKE07', 'Pikachu', '', 'images/pikachu.jpg'),
(18, 'POKE09', 'Clefairy', '', 'images/clefairy.jpg'),
(19, 'POKE10', 'Vulpix', '', 'images/vulpix.jpg'),
(20, 'POKE08', 'Sandshrew', 'Sandshrew', 'images/sandshrew.jpg'),
(23, 'POKE11', 'Rhyhorn', 'Rhyhorn', 'images/rhyhorn.png');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `USERNAME` varchar(25) NOT NULL,
  `PASS` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`USERNAME`, `PASS`) VALUES
('admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
 ADD PRIMARY KEY (`NO`), ADD UNIQUE KEY `ID_BERITA` (`ID_BERITA`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`USERNAME`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
MODIFY `NO` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
