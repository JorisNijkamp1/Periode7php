-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 06 okt 2017 om 15:20
-- Serverversie: 10.1.21-MariaDB
-- PHP-versie: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `slijterij`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE `users` (
  `id` int(8) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(40) NOT NULL,
  `adres` varchar(250) NOT NULL,
  `geboortedatum` varchar(255) NOT NULL,
  `postcode` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `adres`, `geboortedatum`, `postcode`) VALUES
(17, 'Rodney Schiphorst', 'rodneyschiphorst@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'apeldoorn 69', '1994-12-08', '7241 KK'),
(16, 'Jorisswag', 'halo123@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Beusekamplaan, 17', '1998-02-11', '7241 HD'),
(15, 'Joris Nijkamp', 'jorisnijkamp@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Beusekamplaan', '1111-01-11', '7241 HD'),
(13, 'Joirriss', 'orla@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'henkie 12', '11-10-1998', '8273HD'),
(14, 'jaja', 'jjaj@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'jdjdjd', '11111-11-11', 'jdjddj');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
