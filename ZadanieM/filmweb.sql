-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 27 Paź 2021, 13:13
-- Wersja serwera: 10.4.17-MariaDB
-- Wersja PHP: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `filmweb`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `aktorzy`
--

CREATE TABLE `aktorzy` (
  `imie` varchar(64) NOT NULL,
  `nazwisko` varchar(64) NOT NULL,
  `rok_urodzenia` date NOT NULL,
  `rok_debiutu` date NOT NULL,
  `rok_końca` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `aktorzy`
--

INSERT INTO `aktorzy` (`imie`, `nazwisko`, `rok_urodzenia`, `rok_debiutu`, `rok_końca`) VALUES
('Kewin', 'Kok', '0000-00-00', '0000-00-00', '0000-00-00'),
('Jakub', 'Rozpieronóg', '0000-00-00', '0000-00-00', '0000-00-00'),
('Grzegorz', 'Pierożek', '0000-00-00', '0000-00-00', '0000-00-00'),
('Daniel', 'Krzywonóg', '0000-00-00', '0000-00-00', '0000-00-00'),
('Marcel', 'Sycylijski', '0000-00-00', '0000-00-00', '0000-00-00'),
('Janusz', 'Pierwszy', '0000-00-00', '0000-00-00', '0000-00-00'),
('Karol', 'Kok', '0000-00-00', '0000-00-00', '0000-00-00'),
('Paweł', 'Drugi', '0000-00-00', '0000-00-00', '0000-00-00'),
('Paweł', 'Trzeci', '0000-00-00', '0000-00-00', '0000-00-00'),
('Daniel', 'Plus', '0000-00-00', '0000-00-00', '0000-00-00'),
('Kewin', 'Minus', '0000-00-00', '0000-00-00', '0000-00-00'),
('Marceli', 'Beznóg', '0000-00-00', '0000-00-00', '0000-00-00'),
('Janusz', 'Chongsquare', '0000-00-00', '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `filmy`
--

CREATE TABLE `filmy` (
  `Tytuł` varchar(64) NOT NULL,
  `gatunek` varchar(64) NOT NULL,
  `rok_premiery` date NOT NULL,
  `rok_premiery_pl` date NOT NULL,
  `długość` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `reżyserzy`
--

CREATE TABLE `reżyserzy` (
  `imie` varchar(64) NOT NULL,
  `nazwisko` varchar(64) NOT NULL,
  `rok_debiutu` date NOT NULL,
  `ilość_filmów` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `wytwórnie`
--

CREATE TABLE `wytwórnie` (
  `nazwa` varchar(64) NOT NULL,
  `lokalizacja` varchar(64) NOT NULL,
  `ilość_filmów` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
