-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 11, 2018 at 03:20 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `healthcare`
--

-- --------------------------------------------------------

--
-- Table structure for table `diseasetip`
--

CREATE TABLE `diseasetip` (
  `disease` varchar(50) NOT NULL,
  `tips` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `diseasetip`
--

INSERT INTO `diseasetip` (`disease`, `tips`) VALUES
('cold', 'Viruses that cause colds can spread from infected people to others through the air and close personal contact. You can also get infected through contact with stool (poop) or respiratory secretions from an infected person. This can happen when you shake hands with someone who has a cold, or touch a surface, like a doorknob, that has respiratory viruses on it, then touch your eyes, mouth, or nose.'),
('cough', 'If a doctor decides that a cough is caused by the common cold or flu, the general advice will be to rest, drink plenty of fluids, and let it run its course. In the majority of cases, such coughs clear up after 1–2 weeks.'),
('headache', 'The treatment of an acute migraine headache may vary from over-the-counter medicines (OTC), like acetaminophen (Tylenol and others), ibuprofen (Advil, Motrin, etc.), naproxen sodium (Aleve) to prescription medications.'),
('allergy from dust', 'If you think you may have an allergy to any of the components of house dust, see an allergist. To pinpoint the cause of your symptoms, the allergist will ask detailed questions about your work and home environments, family medical history, frequency and severity of symptoms and exposure to pets and other possible triggers.'),
('allergy from noise', 'If you think you have hyperacusis, you''ll see an ear, nose, and throat doctor (otolaryngologist or ENT). He''ll ask about your medical history, look closely at your ears, and give you a hearing test to confirm it. Your treatment will depend on what caused it. In some cases, like with injuries to your brain or ear, the sound sensitivity might get better on its own.');

-- --------------------------------------------------------

--
-- Table structure for table `hospitaldata`
--

CREATE TABLE `hospitaldata` (
  `username` varchar(50) NOT NULL,
  `H1` varchar(100) NOT NULL,
  `H2` varchar(100) NOT NULL,
  `H3` varchar(100) NOT NULL,
  `H4` varchar(100) NOT NULL,
  `H5` varchar(100) NOT NULL,
  `C1` varchar(15) NOT NULL,
  `C2` varchar(15) NOT NULL,
  `C3` varchar(15) NOT NULL,
  `C4` varchar(15) NOT NULL,
  `C5` varchar(15) NOT NULL,
  `A1` varchar(80) NOT NULL,
  `A2` varchar(80) NOT NULL,
  `A3` varchar(80) NOT NULL,
  `A4` varchar(80) NOT NULL,
  `A5` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hospitaldata`
--

INSERT INTO `hospitaldata` (`username`, `H1`, `H2`, `H3`, `H4`, `H5`, `C1`, `C2`, `C3`, `C4`, `C5`, `A1`, `A2`, `A3`, `A4`, `A5`) VALUES
('Pavanjain1996', 'A', 'B', 'C', 'D', 'E', '123', '456', '789', '101', '101', 'ABC', 'DEF', 'GHI', 'JKL', 'MNO');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `age` int(4) NOT NULL,
  `bldgrp` varchar(10) NOT NULL,
  `disease` varchar(500) NOT NULL,
  `Profile` varchar(100) NOT NULL,
  `dis_tip` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`fname`, `lname`, `username`, `password`, `gender`, `age`, `bldgrp`, `disease`, `Profile`, `dis_tip`) VALUES
('Pavan', 'Jain', 'Pavanjain1996', 'action12@on', 'Male', 21, 'O+', 'cold', 'IMG-20180129-WA0000.jpg', 'Viruses that cause colds can spread from infected people to others through the air and close personal contact. You can also get infected through contact with stool (poop) or respiratory secretions from an infected person. This can happen when you shake hands with someone who has a cold, or touch a surface, like a doorknob, that has respiratory viruses on it, then touch your eyes, mouth, or nose.'),
('Pavan', 'Jain', 'pkjain', '123456789', 'Male', 20, 'O+', 'Cough', 'IMG_20170405_214412_559.jpg', 'If a doctor decides that a cough is caused by the common cold or flu, the general advice will be to rest, drink plenty of fluids, and let it run its course. In the majority of cases, such coughs clear up after 1–2 weeks.');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
