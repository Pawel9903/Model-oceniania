-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 28 Lut 2018, 20:05
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
  `imageUrl` varchar(255) COLLATE utf8_polish_ci NOT NULL,
  `imageType` varchar(255) COLLATE utf8_polish_ci NOT NULL,
  `imageSize` int(20) NOT NULL,
  `ip` varchar(255) COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `reviews`
--

INSERT INTO `reviews` (`id`, `name`, `surname`, `email`, `category`, `rating`, `description`, `imageUrl`, `imageType`, `imageSize`, `ip`) VALUES
(41, 'Jan', 'Nowak', 'jan@wp.pl', 'Ocena firmy', 4, 'opis firmy', 'images/38626bus3.jpg', 'image/jpeg', 91298, '::1'),
(42, 'Adam', 'Nowak', 'adam@wp.pl', 'Ocena produktu', 5, 'opis', 'images/3385658bff6e69193d.jpg', 'image/jpeg', 563823, '::1'),
(43, 'Piotr', 'Polak', 'pio@wp.pl', 'Ocena firmy', 1, '', 'images/68625busi.jpg', 'image/jpeg', 123922, '::1'),
(45, 'Monika', 'Kowal', 'mon@wp.pl', 'Ocena firmy', 5, 'opis opis opis', 'images/', '', 0, '::1'),
(46, 'Katarzyna', 'Kowalska', 'kat@wp.pl', 'Ocena produktu', 2, 'opis test', 'images/9037258bfefda5f685.jpg', 'image/jpeg', 447890, '::1'),
(47, 'Michał', 'Poniedziałek', 'michu@wp.pl', 'Inne', 5, 'opis opis', 'images/30377bus2.jpg', 'image/jpeg', 165562, '::1'),
(48, 'Pawel', 'Wtorek', 'pawel@wp.pl', 'Inne', 3, 'opis opis', 'images/', '', 0, '::1'),
(49, 'Paulina', 'Środa', 'paul@wp.pl', 'Ocena produktu', 4, 'opis', 'images/4757458bff6e69193d.jpg', 'image/jpeg', 563823, '::1'),
(50, 'Andrzej', 'Kaczka', 'and@wp.pl', 'Inne', 4, 'opis', 'images/77912bus3.jpg', 'image/jpeg', 91298, '::1');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
