-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 27 Cze 2021, 20:56
-- Wersja serwera: 10.4.11-MariaDB
-- Wersja PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `pomiary`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `cele`
--

CREATE TABLE `cele` (
  `id` int(10) NOT NULL,
  `tresc` varchar(255) NOT NULL,
  `data_nr` date NOT NULL,
  `id_user` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `images`
--

CREATE TABLE `images` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` longblob NOT NULL,
  `id_user` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `obliczane_kalorie`
--

CREATE TABLE `obliczane_kalorie` (
  `id` int(10) NOT NULL,
  `nr_data` date NOT NULL,
  `kcal` float NOT NULL,
  `tluszcze` float NOT NULL,
  `weglowodany` float NOT NULL,
  `bialko` float NOT NULL,
  `id_user` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `pomiary_wagi`
--

CREATE TABLE `pomiary_wagi` (
  `id` int(10) NOT NULL,
  `data_nr` date NOT NULL,
  `waga` float NOT NULL,
  `id_user` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `pora_dnia`
--

CREATE TABLE `pora_dnia` (
  `id` int(10) NOT NULL,
  `nr_data` date NOT NULL,
  `kcal` float NOT NULL,
  `tluszcze` float NOT NULL,
  `weglowodany` float NOT NULL,
  `bialko` float NOT NULL,
  `id_user` int(10) NOT NULL,
  `posilek` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `produkty`
--

CREATE TABLE `produkty` (
  `id` int(10) NOT NULL,
  `nazwa` varchar(255) NOT NULL,
  `kcal` float NOT NULL,
  `tluszcze` float NOT NULL,
  `weglowodany` float NOT NULL,
  `bialko` float NOT NULL,
  `id_user` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `user` varchar(30) NOT NULL,
  `pass` varchar(60) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`id`, `user`, `pass`, `email`) VALUES
(1, 'maciek', '$2y$10$mHdt.9ZhwUppQP0y/narMuN.FD2vI0IowrtyoSywHOsV1loqFwq3O', 'maciek@gmail.com'),
(2, 'mirek', '$2y$10$zMU7AJTXK8OhPLT0PrJSGuWMTmVQDc7T/EDrvv1jqus/K8.Rdea6.', 'mirek@gmail.com'),
(3, 'seba', '$2y$10$pt6hHAWxe1SHlUaBMHRuS.3.xxcBk/XBMnS7ZwDT3xPr.TRCVIQ1K', 'seba@gmail.com'),
(4, 'ania', '$2y$10$enFSIgqbEAMH3WdsFAe7nOPTyEenmZ2wCWMgeETDSS2iSSIFf55mW', 'ania@gmail.com'),
(5, 'pawel', '$2y$10$Wial1WgADBnIoajrogx9jeysSBtfxxXytu6JH9.I2GFcIFdIcMaJa', 'pawel@gmail.com'),
(6, 'kamil', '$2y$10$f9p9EeRKJtOsg5WUb85WmuwtbSrN.FUzBrwzP3t6AepV0Q4M1V.CC', 'kamil@gmail.com'),
(7, 'maciejka99', '$2y$10$wk.rKHXsWC7k9H9D158Z4OXwqMQ/NIMoi4.vMBJw4i2csttjleUua', 'macko@gmail.com'),
(8, 'karol', '$2y$10$l/dgRmS8q2QPeTbsdylwfuiy412/Yyp0AdNzQf0mep.mdoyrxqmma', 'karol@gmail.com'),
(9, 'marta', '$2y$10$m7yvFcKgmY1at1R4Wf.0o.FzLNW2nDons1wcPU6uJ//MV1vrZojY6', 'marta@gmail.com');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `cele`
--
ALTER TABLE `cele`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeksy dla tabeli `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeksy dla tabeli `obliczane_kalorie`
--
ALTER TABLE `obliczane_kalorie`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeksy dla tabeli `pomiary_wagi`
--
ALTER TABLE `pomiary_wagi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeksy dla tabeli `pora_dnia`
--
ALTER TABLE `pora_dnia`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeksy dla tabeli `produkty`
--
ALTER TABLE `produkty`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `cele`
--
ALTER TABLE `cele`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `images`
--
ALTER TABLE `images`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `obliczane_kalorie`
--
ALTER TABLE `obliczane_kalorie`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `pomiary_wagi`
--
ALTER TABLE `pomiary_wagi`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `pora_dnia`
--
ALTER TABLE `pora_dnia`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `produkty`
--
ALTER TABLE `produkty`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `cele`
--
ALTER TABLE `cele`
  ADD CONSTRAINT `cele_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Ograniczenia dla tabeli `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Ograniczenia dla tabeli `obliczane_kalorie`
--
ALTER TABLE `obliczane_kalorie`
  ADD CONSTRAINT `obliczane_kalorie_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Ograniczenia dla tabeli `pomiary_wagi`
--
ALTER TABLE `pomiary_wagi`
  ADD CONSTRAINT `pomiary_wagi_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Ograniczenia dla tabeli `pora_dnia`
--
ALTER TABLE `pora_dnia`
  ADD CONSTRAINT `pora_dnia_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Ograniczenia dla tabeli `produkty`
--
ALTER TABLE `produkty`
  ADD CONSTRAINT `produkty_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
