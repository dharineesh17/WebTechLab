-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 06, 2020 at 10:15 AM
-- Server version: 5.1.53
-- PHP Version: 5.3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mutdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `mutdb`
--

CREATE TABLE IF NOT EXISTS `mutdb` (
  `POSITION` int(11) NOT NULL,
  `RESIDUES` varchar(10) NOT NULL,
  `MUTATIONS` varchar(20) NOT NULL,
  `EXON_No` int(11) NOT NULL,
  `CLASS` varchar(20) NOT NULL,
  `DISTRIBUTION` varchar(100) NOT NULL,
  `CODON_CHANGE` text NOT NULL,
  `ONSET` text NOT NULL,
  `STABILITY` text NOT NULL,
  `PUBMED` text NOT NULL,
  `RCSB` varchar(300) NOT NULL,
  `ABS` float NOT NULL,
  `PERCENTAGE` int(11) NOT NULL,
  `EXPOSURE` varchar(100) NOT NULL,
  `CUPDG` varchar(100) NOT NULL,
  `CUPSTAB` varchar(100) NOT NULL,
  `POPDG` varchar(100) NOT NULL,
  `POPSTAB` varchar(100) NOT NULL,
  `ERISDG` varchar(100) NOT NULL,
  `ERISTAB` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mutdb`
--

INSERT INTO `mutdb` (`POSITION`, `RESIDUES`, `MUTATIONS`, `EXON_No`, `CLASS`, `DISTRIBUTION`, `CODON_CHANGE`, `ONSET`, `STABILITY`, `PUBMED`, `RCSB`, `ABS`, `PERCENTAGE`, `EXPOSURE`, `CUPDG`, `CUPSTAB`, `POPDG`, `POPSTAB`, `ERISDG`, `ERISTAB`) VALUES
(4, 'A', 'S', 1, 'B', 'NA', 'NA', 'NA', 'Destabilizing', 'http://www.ncbi.nlm.nih.gov/pubmed/9696308', 'NA', 1.8, 1, 'BURIED', '-2.93', 'Destabilising', '1.17', 'destabilizing', '3.61', 'destabilizing'),
(4, 'A', 'T', 1, 'B', 'Mexico', 'GCC-ACC', 'NA', 'Destabilizing', 'http://www.ncbi.nlm.nih.gov/pubmed/8891072', 'NA', 1.8, 1, 'BURIED', '-2.36', 'Destabilising', '0.77', 'destabilizing', '0.82', 'destabilizing'),
(4, 'A', 'V', 1, 'B', 'Italy-Sweden', 'GCC-GTC', '50-70', 'Destabilizing', 'http://www.ncbi.nlm.nih.gov/pubmed/9083002', ' http://www.rcsb.org/pdb/explore/explore.do?structureId=3GZQ ', 1.8, 1, 'BURIED', '-2.43', 'Destabilising', '-0.26', 'stabilising', '2.33', 'destabilizing'),
(6, 'C', 'F', 1, 'B', 'Mexico', 'TGC-TTT', 'NA', 'Destabilizing', 'http://www.ncbi.nlm.nih.gov/pubmed/12482932', 'NA', 0.55, 0, 'BURIED', '-3.03', 'Destabilising', '0.17', 'destabilizing', '>10', 'destabilizing'),
(6, 'C', 'G', 1, 'B', 'Mexico', 'TGC-GGC', 'NA', 'Destabilizing', 'http://www.ncbi.nlm.nih.gov/pubmed/10624810', 'NA', 0.55, 0, 'BURIED', '-11.89', 'Destabilising', '2.67', 'destabilizing', '8.14', 'destabilizing'),
(7, 'V', 'E', 1, 'B', 'Mexico', 'GTG-GAG', 'NA', 'Destabilizing', 'http://www.ncbi.nlm.nih.gov/pubmed/7980516', 'NA', 27.37, 14, 'BURIED', '2.78', 'Stabilising', '1.98', 'destabilizing', '3.62', 'destabilizing'),
(8, 'L', 'Q', 1, 'B', 'Bangladesh', 'CTG-CAG', 'NA', 'Destabilizing', 'http://www.ncbi.nlm.nih.gov/pubmed/14506936', 'NA', 0.14, 0, 'BURIED', '-11', 'Destabilising', '3.4', 'destabilizing', '4.09', 'destabilizing'),
(8, 'L', 'V', 1, 'B', 'NA', 'CTG-GTG', 'NA', 'Destabilizing', 'http://www.ncbi.nlm.nih.gov/pubmed/8875253', 'NA', 0.14, 0, 'BURIED', '-2.37', 'Destabilising', '1.26', 'destabilizing', '9.36', 'destabilizing'),
(10, 'G', 'V', 1, 'B', 'Korea', 'GGC-GTT', 'NA', 'Destabilizing', 'http://www.ncbi.nlm.nih.gov/pubmed/12480087', 'NA', 34.43, 18, 'BURIED', '0.04', 'Stabilising ', '0.72', 'destabilizing', '7', 'destabilizing'),
(10, 'G', 'R', 1, 'B', 'London', 'GGC-CGC', '68', 'Destabilizing', 'http://www.ncbi.nlm.nih.gov/pubmed/20331403', 'NA', 34.43, 18, 'BURIED', '-2.1', 'Destabilising', '1.65', 'destabilizing', '6.88', 'destabilizing'),
(12, 'G', 'R', 1, 'B', 'Italy', 'GGC-CGC', 'NA', 'Destabilizing', 'http://www.ncbi.nlm.nih.gov/pubmed/10430435', 'NA', 46.69, 24, 'PARTIALLY BURIED', '-2.33', 'Destabilising', '1.08', 'destabilizing', '2.9', 'destabilizing'),
(14, 'V', 'G', 1, 'B', 'Sweden', 'GTG-GGG', '30-40', 'Destabilizing', 'http://www.ncbi.nlm.nih.gov/pubmed/9365366', 'NA', 6.43, 3, 'BURIED', '-8.08', 'Destabilising', '2.77', 'destabilizing', '>10', 'destabilizing'),
(14, 'V', 'M', 1, 'B', 'NA', 'GTG-ATG', 'NA', 'Destabilizing', 'http://www.ncbi.nlm.nih.gov/pubmed/7655471', 'NA', 6.43, 3, 'BURIED', '-4.37', 'Destabilising', '1', 'destabilizing', '>10', 'destabilizing'),
(16, 'G', 'A', 1, 'B', 'America', 'NA', 'NA', 'Destabilizing', 'http://www.ncbi.nlm.nih.gov/pubmed/14506936', 'NA', 9.68, 5, 'BURIED', '0.03', 'Stabilising', '0.6', 'destabilizing', '4.8', 'destabilizing'),
(16, 'G', 'S', 1, 'B', 'Mexico', 'GGC-AGC', 'NA', 'Destabilizing', 'http://www.ncbi.nlm.nih.gov/pubmed/9101297', 'NA', 9.68, 5, 'BURIED', '1.35', 'Stabilising', '0.83', 'destabilizing', '>10', 'destabilizing'),
(19, 'N', 'S', 1, 'B', 'America', 'AAT-AGT', 'NA', 'Destabilizing', 'http://www.ncbi.nlm.nih.gov/pubmed/14506936', 'NA', 42.85, 22, 'PARTIALLY BURIED', '0.23', 'Stabilising', '0.18', 'destabilizing', '2.79', 'destabilizing'),
(20, 'F', 'C', 1, 'B', 'Arabia-British', 'TTC-TGC', 'NA', 'Destabilizing', 'http://www.ncbi.nlm.nih.gov/pubmed/14506936', 'NA', 1.45, 1, 'BURIED', '-1.37', 'Destabilising', '2.68', 'destabilizing', '9.66', 'destabilizing'),
(21, 'E', 'G', 1, 'B', 'NA', 'NA', 'NA', 'Destabilizing', 'http://www.ncbi.nlm.nih.gov/pubmed/8875253', 'NA', 31.05, 16, 'BURIED', '-6.26', 'Destabilising', '0.31', 'destabilizing', '6.15', 'destabilizing'),
(21, 'E', 'K', 1, 'B', 'Australia', 'GAG-AAG', 'NA', 'Destabilizing', 'http://www.ncbi.nlm.nih.gov/pubmed/8069312', 'NA', 31.05, 16, 'BURIED', '-6.03', 'Destabilising', '0.03', 'destabilizing', '4.43', 'destabilizing'),
(22, 'Q', 'L', 1, 'B', 'NA', 'NA', 'NA', 'Stabilizing', 'http://www.ncbi.nlm.nih.gov/pubmed/14506936', 'NA', 0.91, 0, 'BURIED', '5.16', 'Stabilising', '-0.16', 'stabilizing', '6.97', 'destabilizing'),
(37, 'G', 'R', 2, 'B', 'Japan', 'GGA-AGA', '63', 'Destabilizing', 'http://www.ncbi.nlm.nih.gov/pubmed/22670881', 'http://www.rcsb.org/pdb/explore/explore.do?structureId=1AZV', 35.54, 18, 'BURIED', '-2.31', 'Destabilising', '1.24', 'destabilizing', '-1.58', 'stabilizing'),
(38, 'L', 'R', 2, 'B', 'NA', 'NA', 'NA', 'Destabilizing', 'http://www.ncbi.nlm.nih.gov/pubmed/8446170', 'NA', 9.82, 5, 'BURIED', '-6.82', 'Destabilising', '1.88', 'destabilizing', '>10', 'destabilizing'),
(38, 'L', 'V', 2, 'B', 'Brazil', 'CTG-GTG', 'NA', 'Destabilizing', 'http://www.ncbi.nlm.nih.gov/pubmed/9706719', 'NA', 9.82, 5, 'BURIED', '-2.99', 'Destabilising', '1.37', 'destabilizing', '8.98', 'destabilizing'),
(41, 'G', 'D', 2, 'B', 'NA', 'GGC-GAC', 'NA', 'Destabilizing', 'http://www.ncbi.nlm.nih.gov/pubmed/8446170', 'NA', 26.45, 14, 'BURIED', '-0.22', 'Destabilising', '2.35', 'destabilizing', '2.62', 'destabilizing'),
(41, 'G', 'S', 2, 'B', 'Kuwait', 'GGC-AGC', 'NA', 'Destabilizing', 'http://www.ncbi.nlm.nih.gov/pubmed/8446170', 'NA', 26.45, 14, 'BURIED', '-2.03', 'Destabilising', '2.32', 'destabilizing', '1.8', 'destabilizing'),
(43, 'H', 'R', 2, 'B', 'NA', 'CAT-CGT', 'NA', 'Destabilizing', 'http://www.ncbi.nlm.nih.gov/pubmed/8446170', 'http://www.rcsb.org/pdb/explore/explore.do?structureId=1PTZ ', 3.06, 2, 'BURIED', '5.78', 'Stabilising', '1.39', 'destabilizing', '6.58', 'destabilizing'),
(45, 'F', 'C', 2, 'B', 'Italy', 'TTC-TGC', 'NA', 'Destabilizing', 'http://www.ncbi.nlm.nih.gov/pubmed/11369193', 'NA', 0, 0, 'BURIED', '-1.73', 'Destabilising', '2.76', 'destabilizing', '>10', 'destabilizing'),
(46, 'H', 'R', 2, 'M', 'Mexico', 'CAT-CGT', 'NA', 'Destabilizing', 'http://www.ncbi.nlm.nih.gov/pubmed/8298637', 'http://www.rcsb.org/pdb/explore/explore.do?structureId=1OEZ ', 0, 0, 'BURIED', '5.38', 'Stabilising', '1.2', 'destabilizing', '>10', 'destabilizing'),
(47, 'V', 'F', 2, 'B', 'NA', 'NA', 'NA', 'Destabilizing', 'http://www.ncbi.nlm.nih.gov/pubmed/14506936', 'NA', 0, 0, 'BURIED', '-1.22', 'Destabilising', '0.63', 'destabilizing', '9.01', 'destabilizing'),
(48, 'H', 'Q', 2, 'M', 'Australia', 'CAT-CAG', 'NA', 'Destabilizing', 'http://www.ncbi.nlm.nih.gov/pubmed/14506936', 'http://www.rcsb.org/pdb/explore/explore.do?structureId=3GQF', 1.89, 1, 'BURIED', '-2.44', 'Destabilising', '2.25', 'destabilizing', '6.52', 'destabilizing'),
(48, 'H', 'R', 2, 'M', 'NA', 'NA', 'NA', 'Destabilizing', 'http://www.ncbi.nlm.nih.gov/pubmed/8528216', 'NA', 1.89, 1, 'BURIED', '1.75', 'Stabilising', '1.79', 'destabilizing', '4.78', 'destabilizing'),
(49, 'E', 'K', 2, 'B', 'NA', 'NA', 'NA', 'Destabilizing', 'http://www.ncbi.nlm.nih.gov/pubmed/9706719', 'NA', 52.82, 27, 'PARTIALLY BURIED', '-0.84', 'Destabilising', '0.35', 'destabilizing', '1', 'destabilizing'),
(54, 'T', 'R', 2, 'D', 'NA', 'ACA-AGA', 'NA', 'Destabilizing', 'http://www.ncbi.nlm.nih.gov/pubmed/14506936', 'http://www.rcsb.org/pdb/explore/explore.do?structureId=3ECW ', 51.98, 27, 'PARTIALLY BURIED', '-0.33', 'Desatbilising', '0.68', 'destabilizing', '0.52', 'destabilizing'),
(57, 'C', 'R', 2, 'D', 'NA', 'NA', 'NA', 'Stabilizing', 'http://www.ncbi.nlm.nih.gov/pubmed/16469270', 'NA', 16.98, 9, 'BURIED', '2.26', 'Stabilising', '2.29', 'destabilizing', '-1.32', 'stabilizing'),
(59, 'S', 'I', 3, 'D', 'NA', 'AGT-ATT', 'NA', 'Destabilizing', 'http://www.ncbi.nlm.nih.gov/pubmed/14506936', 'NA', 28.55, 15, 'BURIED', '-2.23', 'Destabilising', '0.98', 'destabilizing', '>10', 'destabilizing'),
(65, 'N', 'S', 3, 'M', 'Spain', 'AAT-AGT', 'NA', 'Destabilizing', 'http://www.ncbi.nlm.nih.gov/pubmed/12210393', 'NA', 44.98, 23, 'PARTIALLY BURIED', '-0.25', 'Destabilising', '1.03', 'destabilizing', '7.48', 'destabilizing'),
(67, 'L', 'R', 3, 'M', 'NA', 'NA', 'NA', 'Destabilizing', 'http://www.ncbi.nlm.nih.gov/pubmed/9706719', 'NA', 92.64, 48, 'PARTIALLY BURIED', '-3.54', 'Destabilising', '0.25', 'destabilizing', '1.3', 'destabilizing'),
(72, 'G', 'C', 3, 'M', 'Cape Verde', 'NA', '71', 'Destabilizing', 'http://www.ncbi.nlm.nih.gov/pubmed/16435343', 'NA', 2.29, 1, 'BURIED', '-6.88', 'Destabilising', '-0.09', 'stabilizing', '7.53', 'destabilizing'),
(72, 'G', 'S', 3, 'M', 'NA', 'NA', 'NA', 'Destabilizing', 'http://www.ncbi.nlm.nih.gov/pubmed/9506558', 'NA', 2.29, 1, 'BURIED', '1.76', 'Stabilising', '0.62', 'destabilizing', '6.83', 'destabilizing'),
(76, 'D', 'V', 3, 'M', 'Asian', 'GAT-GTT', 'NA', 'Destabilizing', 'http://www.ncbi.nlm.nih.gov/pubmed/12215228', 'NA', 65.24, 34, 'PARTIALLY BURIED', '1.14', 'Stabilising', '0.3', 'destabilizing', '3.18', 'destabilizing'),
(76, 'D', 'Y', 3, 'M', 'Denmark-Scandavania', 'GAT-TAT', '49-67', 'Destabilizing', 'http://www.ncbi.nlm.nih.gov/pubmed/9365366', 'NA', 65.24, 34, 'PARTIALLY BURIED', '-1.87', 'Destabilisng', '0.81', 'destabilizing', '2.08', 'destabilizing'),
(80, 'H', 'R', 4, 'M', 'NA', 'NA', 'NA', 'Stabilizing', 'http://www.ncbi.nlm.nih.gov/pubmed/20515040', 'NA', 11.16, 6, 'BURIED', '4.55', 'Stabilising', '1.61', 'destabilizing', '-0.79', 'stabilizing'),
(84, 'L', 'F', 4, 'M', 'Italy', 'TTG-TTC', 'NA', 'Destabilizing', 'http://www.ncbi.nlm.nih.gov/pubmed/9506558', 'NA', 2.83, 1, 'BURIED', '-1.72', 'Destabilising ', '1.17', 'destabilizing', '7.67', 'destabilizing'),
(84, 'L', 'V', 4, 'M', 'Japan', 'TTG-GTG', 'NA', 'Destabilizing', 'http://www.ncbi.nlm.nih.gov/pubmed/7755363', 'NA', 2.83, 1, 'BURIED', '-3.66', 'Destabilising ', '1.45', 'destabilizing', '>10', 'destabilizing'),
(85, 'G', 'R', 4, 'M', 'NA', 'GGC-CGC', 'NA', 'Destabilizing', 'http://www.ncbi.nlm.nih.gov/pubmed/8446170', ' http://www.rcsb.org/pdb/explore/explore.do?structureId=2VR6  ', 1.86, 1, 'BURIED', '-2.56', 'Destabilising ', '2.34', 'destabilizing', '1.95', 'destabilizing'),
(85, 'G', 'S', 4, 'M', 'Mexico', 'GGC-AGC', 'NA', 'Destabilizing', 'http://www.ncbi.nlm.nih.gov/pubmed/20075587', 'NA', 1.86, 1, 'BURIED', '-10.37', 'Destabilising ', '2.55', 'destabilizing', '2.15', 'destabilizing'),
(86, 'N', 'D', 4, 'B', 'NA', 'NA', 'NA', 'Destabilizing', 'http://www.ncbi.nlm.nih.gov/pubmed/16469270', 'NA', 37.02, 19, 'BURIED', '1.97', 'Stabilising ', '1.27', 'destabilizing', '5.13', 'destabilizing'),
(86, 'N', 'K', 4, 'B', 'NA', 'AAT-AAA', 'NA', 'Destabilizing', 'http://www.ncbi.nlm.nih.gov/pubmed/17299743', 'NA', 37.02, 19, 'BURIED', '4.96', 'Stabilising ', '1.04', 'destabilizing', '6.88', 'destabilizing'),
(86, 'N', 'S', 4, 'B', 'Mexico-Argentina', 'AAT-AGT', 'NA', 'Destabilizing', 'http://www.ncbi.nlm.nih.gov/pubmed/9556377', 'NA', 37.02, 19, 'BURIED', '-1.47', 'Destabilising ', '0.87', 'destabilizing', '5.34', 'destabilizing'),
(87, 'V', 'A', 4, 'B', 'NA', 'NA', 'NA', 'Destabilizing', 'http://www.ncbi.nlm.nih.gov/pubmed/14506936', 'NA', 6.99, 4, 'BURIED', '-5.13', 'Destabilising ', '2.42', 'destabilizing', '7.4', 'destabilizing'),
(89, 'A', 'T', 4, 'B', 'NA', 'NA', 'NA', 'Destabilizing', 'http://www.ncbi.nlm.nih.gov/pubmed/14506936', 'NA', 1.5, 1, 'BURIED', '-6.81', 'Destabilising ', '0.51', 'destabilizing', '6.15', 'destabilizing'),
(89, 'A', 'V', 4, 'B', 'NA', 'GCT-GTT', 'NA', 'Stabilizing', 'http://www.ncbi.nlm.nih.gov/pubmed/13129803', 'NA', 1.5, 1, 'BURIED', '1.26', 'Stabilising ', '-0.22', 'stabilizing', '8.21', 'destabilizing'),
(90, 'D', 'A', 4, 'B', 'Italy-Finland-Sweden', 'GAC-GCC', 'NA', 'Destabilizing', 'http://www.ncbi.nlm.nih.gov/pubmed/7647793', 'NA', 63.21, 33, 'PARTIALLY BURIED', '-0.5', 'Destabilising ', '1.02', 'destabilizing', '5.19', 'destabilizing'),
(90, 'D', 'V', 4, 'B', 'Mexico', 'GAC-GTC', 'NA', 'Destabilizing', 'http://www.ncbi.nlm.nih.gov/pubmed/15965076', 'NA', 63.21, 33, 'PARTIALLY BURIED', '-0.62', 'Destabilising ', '0.81', 'destabilizing', '5.75', 'destabilizing'),
(93, 'G', 'A', 4, 'B', 'NA', 'GGT-GCT', 'NA', 'Destabilizing', 'http://www.ncbi.nlm.nih.gov/pubmed/8446170', 'http://www.rcsb.org/pdb/explore/explore.do?structureId=2WKO', 5.98, 3, 'BURIED', '-1.56', 'Destabilising ', '2.72', 'destabilizing', '1.83', 'destabilizing'),
(93, 'G', 'C', 4, 'B', 'Brazil', 'GGT-TGT', 'NA', 'Destabilizing', 'http://www.ncbi.nlm.nih.gov/pubmed/8875253', 'NA', 5.98, 3, 'BURIED', '-5.06', ' Destabilising ', '1.51', 'destabilizing', '-13.78', 'stabilizing'),
(93, 'G', 'D', 4, 'B', 'NA', 'GGT-GAT', 'NA', 'Destabilizing', 'http://www.ncbi.nlm.nih.gov/pubmed/21621297', 'NA', 5.98, 3, 'BURIED', '-1.74', 'Destabilising ', '2.31', 'destabilizing', '2.1', 'destabilizing'),
(93, 'G', 'R', 4, 'B', 'Australia', 'GGT-CGT', 'NA', 'Stabilizing', 'http://www.ncbi.nlm.nih.gov/pubmed/18552350', 'NA', 5.98, 3, 'BURIED', '0.96', 'Stabilising ', '1.97', 'destabilizing', '-1.58', 'stabilizing'),
(93, 'G', 'S', 4, 'B', 'Mexico-Germany', 'NA', 'NA', 'Destabilizing', 'http://www.ncbi.nlm.nih.gov/pubmed/12023436', 'NA', 5.98, 3, 'BURIED', '-3.78', 'Destabilising ', '2.23', 'destabilizing', '4.47', 'destabilizing'),
(93, 'G', 'V', 4, 'B', 'NA', 'GGT-GTT', 'NA', 'Destabilizing', 'http://www.ncbi.nlm.nih.gov/pubmed/8938700', 'NA', 5.98, 3, 'BURIED', '-4.66', 'Destabilising ', '2.72', 'destabilizing', '-2.3', 'stabilizing'),
(95, 'A', 'T', 4, 'B', 'Italy', 'GCC-ACC', 'NA', 'Destabilizing', 'http://www.ncbi.nlm.nih.gov/pubmed/11369193', 'NA', 0, 0, 'BURIED', '-3.86', ' Destabilising ', '1.13', 'destabilizing', '5.64', 'destabilizing'),
(96, 'D', 'N', 4, 'B', 'France-Canada', 'NA', 'NA', 'Stabilizing', 'http://www.ncbi.nlm.nih.gov/pubmed/11220750', 'NA', 110.34, 57, 'EXPOSED', '1.65', ' Stabilising ', '-0.22', 'stabilizing', '2.18', 'destabilizing'),
(97, 'V', 'M', 4, 'B', 'NA', 'GTG-ATG', 'NA', 'Destabilizing', 'http://www.ncbi.nlm.nih.gov/pubmed/14506936', 'NA', 6.31, 3, 'BURIED', '-2.92', 'Destabilising ', '1.39', 'destabilizing', '9.8', 'destabilizing'),
(100, 'E', 'G', 4, 'B', 'India-Australia', 'GAA-GGA', 'NA', 'Destabilizing', 'http://www.ncbi.nlm.nih.gov/pubmed/8446170', 'NA', 108.31, 56, 'EXPOSED', '0.85', 'Stabilising ', '0.82', 'destabilizing', '3.65', 'destabilizing'),
(100, 'E', 'K', 4, 'B', 'NA', 'GAA-AAA', 'NA', 'Destabilizing', 'http://www.ncbi.nlm.nih.gov/pubmed/8875253', 'NA', 108.31, 56, 'EXPOSED', '0.22', 'Stabilising ', '0.06', 'destabilizing', '1.99', 'destabilizing'),
(101, 'D', 'G', 4, 'B', 'Australia', 'GAT-GGT', 'NA', 'Destabilizing', 'http://www.ncbi.nlm.nih.gov/pubmed/15965076', 'NA', 9.05, 5, 'BURIED', '-0.48', 'Destabilising ', '1.57', 'destabilizing', '9.01', 'destabilizing'),
(101, 'D', 'H', 4, 'B', 'NA', 'GAT-CAT', '52', 'Destabilizing', 'http://www.ncbi.nlm.nih.gov/pubmed/14759637', 'NA', 9.05, 5, 'BURIED', '1.63', 'Stabilising ', '0.55', 'destabilizing', '9.71', 'destabilizing'),
(101, 'D', 'N', 4, 'B', 'England-Pakistan-Belarus', 'GAT-AAT', 'NA', 'Destabilizing', 'http://www.ncbi.nlm.nih.gov/pubmed/7870076', 'NA', 9.05, 5, 'BURIED', '-0.49', 'Destabilising ', '0.72', 'destabilizing', '6.16', 'destabilizing'),
(101, 'D', 'Y', 4, 'B', 'Japan', 'GAT-TAT', 'NA', 'Destabilizing', 'http://www.ncbi.nlm.nih.gov/pubmed/15235802', 'NA', 9.05, 5, 'BURIED', '4.74', 'Stabilising ', '0.2', 'destabilizing', '8.11', 'destabilizing'),
(104, 'I', 'F', 4, 'B', 'Mexico', 'ATC-TTC', 'NA', 'Destabilizing', 'http://www.ncbi.nlm.nih.gov/pubmed/7501156', 'NA', 1.73, 1, 'BURIED', '-1.81', 'Destabilising ', '0.74', 'destabilizing', '>10', 'destabilizing'),
(105, 'S', 'L', 4, 'B', 'Colombia', 'TCA-TTA', 'NA', 'Destabilizing', 'http://www.ncbi.nlm.nih.gov/pubmed/14506936', 'NA', 8.18, 4, 'BURIED', '0.64', 'Stabilising ', '1.1', 'destabilizing', '1.35', 'destabilizing'),
(106, 'L', 'V', 4, 'B', 'NA', 'CTC-GTC', 'NA', 'Destabilizing', 'http://www.ncbi.nlm.nih.gov/pubmed/8446170', 'NA', 8.16, 4, 'BURIED', '-1.19', 'Destabilising ', '1.1', 'destabilizing', '7.06', 'destabilizing'),
(106, 'L', 'F', 4, 'B', 'London', 'CTC-TTC', 'NA', 'Destabilizing', 'http://www.ncbi.nlm.nih.gov/pubmed/20385392', 'NA', 8.16, 4, 'BURIED', '-2.08', 'Destabilising ', '0.68', 'destabilizing', '6.3', 'destabilizing'),
(108, 'G', 'V', 4, 'B', 'NA', 'NA', 'NA', 'Stabilizing', 'http://www.ncbi.nlm.nih.gov/pubmed/9065559', 'NA', 59.91, 31, 'PARTIALLY BURIED', '2.28', ' Stabilising ', '1.41', 'destabilizing', '-2.3', 'stabilizing'),
(109, 'D', 'Y', 4, 'B', 'NA', 'NA', '50', 'Destabilizing', 'http://www.ncbi.nlm.nih.gov/pubmed/17257622', 'NA', 134.22, 69, 'EXPOSED', '-0.82', 'Destabilising ', '0.46', 'destabilizing', '0.78', 'destabilizing'),
(111, 'C', 'Y', 4, 'B', 'NA', 'NA', 'NA', 'Destabilizing', 'http://www.ncbi.nlm.nih.gov/pubmed/17319283', 'NA', 30.49, 16, 'BURIED', '3.9', 'Stabilising ', '1.22', 'destabilizing', '>10', 'destabilizing'),
(112, 'I', 'M', 4, 'B', 'Asia', 'ATC-ATG', 'NA', 'Destabilizing', 'http://www.ncbi.nlm.nih.gov/pubmed/12210393', 'NA', 0, 0, 'BURIED', '0.24', 'Stabilising ', '1.16', 'destabilizing', '5.79', 'destabilizing'),
(112, 'I', 'T', 4, 'B', 'Australia', 'ATC-ACC', 'NA', 'Destabilizing', 'http://www.ncbi.nlm.nih.gov/pubmed/7951252', 'NA', 0, 0, 'BURIED', '-4.17', 'Destabilising ', '1.23', 'destabilizing', '6.01', 'destabilizing'),
(113, 'I', 'F', 4, 'B', 'NA', 'NA', 'NA', 'Destabilizing', 'http://www.ncbi.nlm.nih.gov/pubmed/8446170', 'NA', 17.83, 9, 'BURIED', '0.72', 'Stabilising ', '0.93', 'destabilizing', '4.23', 'destabilizing'),
(113, 'I', 'T', 4, 'B', 'Italy', 'ATT-ACT', 'NA', 'Destabilizing', 'http://www.ncbi.nlm.nih.gov/pubmed/14506936', 'http://www.rcsb.org/pdb/explore/explore.do?structureId=1UXL', 17.83, 9, 'BURIED', '0.29', 'Stabilising ', '1.56', 'destabilizing', '6.52', 'destabilizing'),
(114, 'G', 'A', 4, 'B', 'NA', 'GGC-GCC', 'NA', 'Destabilizing', 'http://www.ncbi.nlm.nih.gov/pubmed/14506936', 'NA', 0, 0, 'BURIED', '-4.67', 'Destabilising ', '2.19', 'destabilizing', '-1.13', 'stabilizing'),
(115, 'R', 'G', 4, 'B', 'NA', 'CGC-GGC', 'NA', 'Destabilizing', 'http://www.ncbi.nlm.nih.gov/pubmed/15258228', 'NA', 39.11, 20, 'PARTIALLY BURIED', '-0.87', 'Destabilising ', '2.05', 'destabilizing', '4.4', 'destabilizing'),
(116, 'T', 'R', 4, 'B', 'NA', 'NA', 'NA', 'Destabilizing', 'http://www.ncbi.nlm.nih.gov/pubmed/16469270', 'NA', 3.4, 2, 'BURIED', '-0.87', 'Destabilising ', '1.38', 'destabilizing', '6.86', 'destabilizing'),
(118, 'V', 'L', 4, 'B', 'Mexico', 'GTG-CTG', 'NA', 'Destabilizing', 'http://www.ncbi.nlm.nih.gov/pubmed/10751275', 'NA', 0, 0, 'BURIED', '-1.49', 'Destabilising ', '1.18', 'destabilizing', '8.62', 'destabilizing'),
(124, 'D', 'G', 5, 'M', 'Cape Verde', 'GAT-GGT', 'NA', 'Destabilizing', 'http://www.ncbi.nlm.nih.gov/pubmed/14506936', 'NA', 4.27, 2, 'BURIED', '0.53', 'Stabilising ', '1.29', 'destabilizing', '6.21', 'destabilizing'),
(124, 'D', 'V', 5, 'M', 'NA', 'GAT-GTT', 'NA', 'Destabilizing', 'http://www.ncbi.nlm.nih.gov/pubmed/8938700', 'NA', 4.27, 2, 'BURIED', '-2.31', 'Destabilising ', '0.44', 'destabilizing', '-0.42', 'stabilizing'),
(125, 'D', 'H', 5, 'M', 'Australia', 'GAC-CAC', 'NA', 'Destabilizing', 'http://www.ncbi.nlm.nih.gov/pubmed/8528216', 'http://www.rcsb.org/pdb/explore/explore.do?structureId=1P1V ', 39.83, 21, 'PARTIALLY BURIED', '1.36', 'Stabilising ', '0.42', 'destabilizing', '1.28', 'destabilizing'),
(126, 'L', 'S', 5, 'B', 'Mexico', 'TTG-TCG', 'NA', 'Destabilizing', 'http://www.ncbi.nlm.nih.gov/pubmed/11346368', 'NA', 61.88, 32, 'PARTIALLY BURIED', '0.84', 'Stabilising ', '0.61', 'destabilizing', '4.12', 'destabilizing'),
(134, 'S', 'N', 5, 'M', 'Mexico', 'AGT-AAT', 'NA', 'Destabilizing', 'http://www.ncbi.nlm.nih.gov/pubmed/8990014', 'http://www.rcsb.org/pdb/explore/explore.do?structureId=1OZU ', 0.57, 0, 'BURIED', '0.67', 'Stabilising ', '1.43', 'destabilizing', '>10', 'destabilizing'),
(139, 'N', 'H', 5, 'B', 'Spain', 'AAC-CAC', 'NA', 'Destabilizing', 'http://www.ncbi.nlm.nih.gov/pubmed/15050430', 'NA', 42.75, 22, 'PARTIALLY BURIED', '-0.03', 'Destabilising ', '0.68', 'destabilizing', '8.62', 'destabilizing'),
(139, 'N', 'K', 5, 'B', 'NA', 'AAC-AAA', 'NA', 'Destabilizing', 'http://www.ncbi.nlm.nih.gov/pubmed/9822728', 'NA', 42.75, 22, 'PARTIALLY BURIED', '-2.52', 'Destabilising ', '1.81', 'destabilizing', '8.66', 'destabilizing'),
(140, 'A', 'G', 5, 'B', 'NA', 'GCT-GGT', 'NA', 'Destabilizing', 'http://www.ncbi.nlm.nih.gov/pubmed/17257622', 'NA', 0, 0, 'BURIED', '-7.61', 'Destabilising  ', '1.47', 'destabilizing', '6.11', 'destabilizing'),
(141, 'G', 'E', 5, 'B', 'America', 'GGA-GAA', '43', 'Destabilizing', 'http://www.ncbi.nlm.nih.gov/pubmed/14506936', 'NA', 34.54, 18, 'BURIED', '-0.7', 'Destabilising  ', '2.04', 'destabilizing', '3.03', 'destabilizing'),
(144, 'L', 'F', 5, 'B', 'Kuwait-Korea', 'TTG-TTC', 'NA', 'Destabilizing', 'http://www.ncbi.nlm.nih.gov/pubmed/8351519', 'NA', 49.65, 26, 'PARTIALLY BURIED', '0.11', 'Stabilising  ', '0.39', 'destabilizing', '>10', 'destabilizing'),
(144, 'L', 'S', 5, 'B', 'NA', 'TTG-TCG', 'NA', 'Destabilizing', 'http://www.ncbi.nlm.nih.gov/pubmed/7496169', 'NA', 49.65, 26, 'PARTIALLY BURIED', '-1.76', 'Destabilising  ', '1.17', 'destabilizing', '5.41', 'destabilizing'),
(145, 'A', 'G', 5, 'B', 'America', 'NA', 'NA', 'Destabilizing', 'http://www.ncbi.nlm.nih.gov/pubmed/14506936', 'NA', 0, 0, 'BURIED', '-5.94', 'Destabilising  ', '0.89', 'destabilizing', '5.02', 'destabilizing'),
(145, 'A', 'T', 5, 'B', 'NA', 'GCT-ACT', 'NA', 'Destabilizing', 'http://www.ncbi.nlm.nih.gov/pubmed/7496169', 'NA', 0, 0, 'BURIED', '-4.17', 'Destabilising  ', '0.64', 'destabilizing', '7.2', 'destabilizing'),
(146, 'C', 'R', 5, 'D', 'NA', 'NA', 'NA', 'Destabilizing', 'http://www.ncbi.nlm.nih.gov/pubmed/8875253', 'NA', 7.94, 4, 'BURIED', '-10.77', 'Destabilising  ', '2.36', 'destabilizing', '3.89', 'destabilizing'),
(147, 'G', 'R', 5, 'B', 'America', 'GGT-CGT', 'NA', 'Destabilizing', 'http://www.ncbi.nlm.nih.gov/pubmed/14506936', 'NA', 10.41, 5, 'BURIED', '0.55', 'Stabilising  ', '0.77', 'destabilizing', '6.98', 'destabilizing'),
(148, 'V', 'G', 5, 'B', 'NA', 'GTA-GGA', 'NA', 'Destabilizing', 'http://www.ncbi.nlm.nih.gov/pubmed/8351519', 'NA', 21.46, 11, 'BURIED', '-0.22', ' Destabilising  ', '2.25', 'destabilizing', '7.39', 'destabilizing'),
(148, 'V', 'I', 5, 'B', 'Mexico', 'GTA-ATA', 'NA', 'Destabilizing', 'http://www.ncbi.nlm.nih.gov/pubmed/7501156', 'NA', 21.46, 11, 'BURIED', '0.42', 'Stabilising  ', '0.65', 'destabilizing', '1.59', 'destabilizing'),
(149, 'I', 'T', 5, 'B', 'Colombia-Australia', 'ATT-ACT', 'NA', 'Destabilizing', 'http://www.ncbi.nlm.nih.gov/pubmed/7887412', 'NA', 0, 0, 'BURIED', '0.87', 'Stabilising  ', '2.63', 'destabilizing', '9.71', 'destabilizing'),
(151, 'I', 'S', 5, 'B', 'America', 'ATC-AGC', 'NA', 'Destabilizing', 'http://www.ncbi.nlm.nih.gov/pubmed/14506936', 'NA', 44.06, 23, 'PARTIALLY BURIED', '-1.45', 'Destabilising  ', '1.46', 'destabilizing', '3.46', 'destabilizing'),
(151, 'I', 'T', 5, 'B', 'NA', 'ATC-ACC', 'NA', 'Destabilizing', 'http://www.ncbi.nlm.nih.gov/pubmed/8682505', 'NA', 44.06, 23, 'PARTIALLY BURIED', '-1.89', 'Destabilising  ', '1.06', 'destabilizing', '1.66', 'destabilizing');
