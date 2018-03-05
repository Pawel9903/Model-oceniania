-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 02 Mar 2018, 13:43
-- Wersja serwera: 10.1.30-MariaDB
-- Wersja PHP: 7.0.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `opiniondb`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_polish_ci NOT NULL,
  `surname` varchar(255) COLLATE utf8_polish_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_polish_ci NOT NULL,
  `category` varchar(255) COLLATE utf8_polish_ci NOT NULL,
  `rating` int(11) NOT NULL,
  `description` varchar(255) COLLATE utf8_polish_ci NOT NULL,
  `imageName` varchar(255) COLLATE utf8_polish_ci NOT NULL,
  `imageUrl` varchar(255) COLLATE utf8_polish_ci NOT NULL,
  `imageType` varchar(255) COLLATE utf8_polish_ci NOT NULL,
  `imageSize` int(255) NOT NULL,
  `ip` varchar(255) COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `reviews`
--

INSERT INTO `reviews` (`id`, `name`, `surname`, `email`, `category`, `rating`, `description`, `imageName`, `imageUrl`, `imageType`, `imageSize`, `ip`) VALUES
(72, 'Jan', 'Polak', 'jan@w.pl', 'Inne', 2, 'opis', '28152architecture-2256489_1920.jpg', 'images/28152architecture-2256489_1920.jpg', 'image/jpeg', 790437, '::1'),
(73, 'Piotr', 'Kowal', 'pio@wsp.pl', 'Ocena produktu', 1, 'opis', '54730calculator-925385_1920.jpg', 'images/54730calculator-925385_1920.jpg', 'image/jpeg', 544706, '::1'),
(74, 'Jan', 'Kowalski', 'jan@p.pl', 'Inne', 2, 'opis', '5639358bff6e69193d.jpg', 'images/5639358bff6e69193d.jpg', 'image/jpeg', 563823, '::1'),
(75, 'Monika', 'Wtorek', 'mon@aaa.pl', 'Inne', 5, '', '', 'images/', '', 0, '::1'),
(76, 'Andrzej', 'Kaczka', 'andr@s.com', 'Ocena produktu', 3, 'opis', '48621workshop-1746275_1920.jpg', 'images/48621workshop-1746275_1920.jpg', 'image/jpeg', 321017, '::1'),
(77, 'Rafał', 'Stary', 'stary@www.com', 'Ocena produktu', 3, 'opis', '', 'images/', '', 0, '::1'),
(78, 'Janek', 'Poniedziałek', 'janek@wwwww.pl', 'Ocena firmy', 5, 'opis firmy', '93570flatiron-building-1704695_1920.jpg', 'images/93570flatiron-building-1704695_1920.jpg', 'image/jpeg', 660929, '::1');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
