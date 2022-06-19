-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 19 Cze 2022, 13:19
-- Wersja serwera: 10.4.11-MariaDB
-- Wersja PHP: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `grindtracker`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `classes`
--

CREATE TABLE `classes` (
  `ID` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `classes`
--

INSERT INTO `classes` (`ID`, `name`) VALUES
(1, 'Warrior'),
(2, 'Ranger'),
(3, 'Sorceress'),
(4, 'Berserker'),
(5, 'Tamer'),
(6, 'Musa'),
(7, 'Maehwa'),
(8, 'Valkyrie'),
(9, 'Kunoichi'),
(10, 'Ninja'),
(11, 'Wizard'),
(12, 'Witch'),
(13, 'Dark Knight'),
(14, 'Striker'),
(15, 'Mystic'),
(16, 'Archer'),
(17, 'Lahn'),
(18, 'Shai'),
(19, 'Guardian'),
(20, 'Hashashin'),
(21, 'Nova'),
(22, 'Sage'),
(23, 'Corsair'),
(24, 'Drakania');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `itemdata`
--

CREATE TABLE `itemdata` (
  `ID` int(11) NOT NULL,
  `SessionID` int(11) NOT NULL,
  `ItemID` int(11) NOT NULL,
  `count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `itemdata`
--

INSERT INTO `itemdata` (`ID`, `SessionID`, `ItemID`, `count`) VALUES
(18, 20, 160, 7500),
(19, 20, 62, 71),
(20, 20, 196, 85),
(21, 20, 63, 68),
(22, 20, 197, 13),
(23, 20, 111, 6),
(24, 20, 16, 4),
(25, 20, 165, 3),
(26, 20, 17, 11),
(27, 20, 12, 0),
(28, 20, 171, 0),
(29, 20, 208, 1),
(30, 20, 209, 2),
(31, 20, 210, 1),
(32, 20, 207, 0),
(33, 20, 224, 2),
(34, 20, 164, 0),
(35, 21, 160, 3602),
(36, 21, 62, 46),
(37, 21, 63, 32),
(38, 21, 197, 3),
(39, 21, 165, 2),
(40, 21, 196, 15),
(41, 21, 111, 1),
(42, 21, 16, 2),
(43, 21, 17, 1),
(44, 21, 12, 0),
(45, 21, 171, 0),
(46, 21, 208, 0),
(47, 21, 209, 0),
(48, 21, 210, 1),
(49, 21, 207, 0),
(50, 21, 224, 1),
(51, 21, 164, 1),
(52, 22, 163, 1256),
(53, 22, 62, 15),
(54, 22, 197, 11),
(55, 22, 63, 12),
(56, 22, 196, 4),
(57, 22, 111, 2),
(58, 22, 16, 0),
(59, 22, 17, 1),
(60, 22, 8, 0),
(61, 22, 9, 0),
(62, 22, 10, 1),
(63, 22, 11, 0),
(64, 22, 52, 0),
(65, 22, 54, 0),
(66, 22, 59, 1),
(67, 22, 60, 0),
(68, 22, 61, 1),
(69, 22, 171, 0),
(70, 22, 208, 0),
(71, 22, 209, 1),
(72, 22, 210, 0),
(73, 22, 207, 1),
(74, 22, 224, 1),
(75, 23, 160, 8125),
(76, 23, 62, 82),
(77, 23, 63, 73),
(78, 23, 196, 66),
(79, 23, 197, 13),
(80, 23, 111, 4),
(81, 23, 165, 2),
(82, 23, 16, 2),
(83, 23, 17, 7),
(84, 23, 12, 0),
(85, 23, 171, 1),
(86, 23, 208, 0),
(87, 23, 209, 2),
(88, 23, 210, 1),
(89, 23, 207, 1),
(90, 23, 224, 4),
(91, 23, 164, 0),
(92, 24, 160, 8721),
(93, 24, 62, 105),
(94, 24, 63, 96),
(95, 24, 196, 96),
(96, 24, 197, 27),
(97, 24, 165, 5),
(98, 24, 16, 4),
(99, 24, 17, 11),
(100, 24, 111, 11),
(101, 24, 12, 2),
(102, 24, 171, 0),
(103, 24, 208, 1),
(104, 24, 209, 2),
(105, 24, 210, 3),
(106, 24, 207, 0),
(107, 24, 224, 5),
(108, 24, 164, 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `items`
--

CREATE TABLE `items` (
  `ID` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `items`
--

INSERT INTO `items` (`ID`, `name`, `price`) VALUES
(1, 'Forest Fury', 18000),
(8, 'HE-ISR', 0),
(9, 'HE-IKR', 0),
(10, 'HE-IKnbR', 0),
(11, 'HE-IGR', 0),
(12, 'Ouk Pill of time and tide', 0),
(16, 'Essence of Insight', 0),
(17, 'Starlit Jade\'s Breath', 0),
(52, 'MC Special eva', 0),
(54, 'AMCoN-S', 0),
(59, 'AMCoN-FS', 0),
(60, 'AMCoN-G', 0),
(61, 'AMCoN-A', 0),
(62, 'BSA', 0),
(63, 'BSW', 0),
(111, 'Dragon scale fossil', 0),
(160, 'Jade trash', 0),
(161, 'Murrowak trash', 0),
(162, 'Limbo trash', 0),
(163, 'Winter tree fosil trash', 0),
(164, 'Flame of Frost', 0),
(165, 'Ember of Frost', 0),
(166, 'Carrapace', 0),
(171, 'Witch token', 0),
(196, 'Dust', 0),
(197, 'Caphras', 0),
(207, 'Iridescent LS', 0),
(208, 'LSoF', 0),
(209, 'LSoE', 0),
(210, 'LSoW', 0),
(224, 'Artifact', 0);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `sessions`
--

CREATE TABLE `sessions` (
  `ID` int(11) NOT NULL,
  `Time` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `ZoneID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `sessions`
--

INSERT INTO `sessions` (`ID`, `Time`, `UserID`, `ZoneID`) VALUES
(20, 60, 14, 1),
(21, 30, 14, 1),
(22, 15, 14, 3),
(23, 60, 12, 1),
(24, 60, 12, 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `userdata`
--

CREATE TABLE `userdata` (
  `ID` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `classID` int(11) DEFAULT NULL,
  `spec` text DEFAULT NULL,
  `AP` int(11) DEFAULT NULL,
  `AAP` int(11) DEFAULT NULL,
  `DP` int(11) DEFAULT NULL,
  `isAdmin` binary(1) NOT NULL DEFAULT '\0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `userdata`
--

INSERT INTO `userdata` (`ID`, `username`, `email`, `password`, `classID`, `spec`, `AP`, `AAP`, `DP`, `isAdmin`) VALUES
(12, 'Testuser', 'hehemail@testmail.com', 'newpassword', 2, 'Awa', 293, 288, 371, 0x00),
(14, 'Testuser2', 'testmail@testmail.com', 'password', 1, 'Awa', 269, 271, 315, 0x00);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `zone`
--

CREATE TABLE `zone` (
  `ID` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `itemAmount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `zone`
--

INSERT INTO `zone` (`ID`, `name`, `itemAmount`) VALUES
(1, 'Jade', 17),
(2, 'Murrowak', 24),
(3, 'WinterTreeFossil', 23),
(4, 'Limbo', 19),
(5, 'Orcs', 12),
(6, 'GyfinLower', 16),
(7, 'SwampFogan', 18),
(8, 'Crypt', 18),
(9, 'Biraghi', 16),
(10, 'StarsEnd', 15),
(11, 'AshForest', 15),
(12, 'SycraiaLower', 17),
(13, 'Hystria', 19),
(14, 'Aakman', 19),
(15, 'Thornwood', 19),
(16, 'Kratuga', 18),
(17, 'Bloody', 15),
(18, 'Polly', 20),
(19, 'Gahaz', 20),
(20, 'SwampNaga', 16),
(21, 'DesertNaga', 18),
(22, 'Titium', 17),
(23, 'Centaur', 17),
(24, 'Crescent', 16),
(25, 'Sulfur', 26),
(26, 'PilaKu', 22),
(27, 'CastleRuins', 12),
(28, 'Imps', 13),
(29, 'Abandoned', 13),
(30, 'Turo', 20),
(31, 'Olun', 15),
(32, 'Padix', 13),
(33, 'Mirumok', 19),
(34, 'GyfinUpper', 22),
(35, 'Waragon', 16),
(36, 'Basilisk', 18),
(37, 'Kagtum', 25),
(38, 'SharekhanDay', 25),
(39, 'SharekhanNight', 25),
(40, 'Ranaros', 22),
(41, 'Manshaum', 23),
(42, 'Tshira', 23),
(43, 'SycraiaUpper', 18),
(44, 'Shultz', 18),
(45, 'Protty', 16),
(46, 'Fadus', 22),
(47, 'Navarn', 17),
(48, 'MarieCave', 13);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`ID`);

--
-- Indeksy dla tabeli `itemdata`
--
ALTER TABLE `itemdata`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ItemData_fk0` (`SessionID`),
  ADD KEY `ItemData_fk1` (`ItemID`);

--
-- Indeksy dla tabeli `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`ID`);

--
-- Indeksy dla tabeli `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Sessions_fk0` (`UserID`),
  ADD KEY `Sessions_fk1` (`ZoneID`);

--
-- Indeksy dla tabeli `userdata`
--
ALTER TABLE `userdata`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `UserData_fk0` (`classID`);

--
-- Indeksy dla tabeli `zone`
--
ALTER TABLE `zone`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `classes`
--
ALTER TABLE `classes`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT dla tabeli `itemdata`
--
ALTER TABLE `itemdata`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT dla tabeli `items`
--
ALTER TABLE `items`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=225;

--
-- AUTO_INCREMENT dla tabeli `sessions`
--
ALTER TABLE `sessions`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT dla tabeli `userdata`
--
ALTER TABLE `userdata`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT dla tabeli `zone`
--
ALTER TABLE `zone`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `itemdata`
--
ALTER TABLE `itemdata`
  ADD CONSTRAINT `ItemData_fk0` FOREIGN KEY (`SessionID`) REFERENCES `sessions` (`ID`),
  ADD CONSTRAINT `ItemData_fk1` FOREIGN KEY (`ItemID`) REFERENCES `items` (`ID`);

--
-- Ograniczenia dla tabeli `sessions`
--
ALTER TABLE `sessions`
  ADD CONSTRAINT `Sessions_fk0` FOREIGN KEY (`UserID`) REFERENCES `userdata` (`ID`),
  ADD CONSTRAINT `Sessions_fk1` FOREIGN KEY (`ZoneID`) REFERENCES `zone` (`ID`);

--
-- Ograniczenia dla tabeli `userdata`
--
ALTER TABLE `userdata`
  ADD CONSTRAINT `UserData_fk0` FOREIGN KEY (`classID`) REFERENCES `classes` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
