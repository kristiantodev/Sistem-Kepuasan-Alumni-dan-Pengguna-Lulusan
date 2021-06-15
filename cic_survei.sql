-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 12 Agu 2020 pada 03.51
-- Versi Server: 5.5.32
-- Versi PHP: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `cic_survei`
--
CREATE DATABASE IF NOT EXISTS `cic_survei` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `cic_survei`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `alumni`
--

CREATE TABLE IF NOT EXISTS `alumni` (
  `id_user` varchar(30) NOT NULL,
  `nim` varchar(20) NOT NULL,
  `nama` varchar(60) NOT NULL,
  `id_prodi` int(5) NOT NULL,
  `tgl_yudisium` date NOT NULL,
  `hp` varchar(20) NOT NULL,
  `email` varchar(60) NOT NULL,
  `tgl_bekerja` date NOT NULL,
  `id_instansi` int(5) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `alumni`
--

INSERT INTO `alumni` (`id_user`, `nim`, `nama`, `id_prodi`, `tgl_yudisium`, `hp`, `email`, `tgl_bekerja`, `id_instansi`, `jabatan`) VALUES
('5ecbe9035bb3d', '2016102002', 'Syifa Ulkarim', 1, '0000-00-00', '089', 'kris@gmail.com', '0000-00-00', 2, 'Programmer'),
('5ecc072df2442', '2016102003', 'Moch. Rully', 1, '0000-00-00', '', '', '0000-00-00', 1, 'Programmer'),
('5eccbea2f0c37', '2016102005', 'Irfan Riyadi', 1, '0000-00-00', '', 'kristiantorpl@gmail.com', '0000-00-00', 2, 'Designer'),
('5ee9c3a45194f', '2016102001', 'Kristianto', 2, '0000-00-00', '0895443', 'kristiantorpl@gmail.com', '2020-08-29', 4, 'Programmer'),
('5ef615b4224cf', '2016114004', 'Nopi F', 2, '0000-00-00', '', '', '0000-00-00', 2, 'Sekretaris'),
('5ef6161e51318', '2016114003', 'Rifka S', 1, '0000-00-00', '', '', '0000-00-00', 2, 'Sekretaris II'),
('5f01f8da1086d', '2016114006', 'Wahyu', 1, '0000-00-00', '987', 'w@cic.ac.id', '0000-00-00', 2, '-'),
('5f01fa5723043', '1', 'Lina', 1, '0000-00-00', '', '', '0000-00-00', 0, ''),
('5f01fa78386ad', '2', 'Marry Amanda Eka Putri', 2, '0000-00-00', '', '', '0000-00-00', 0, ''),
('5f01faa0e24b9', '3', 'Angga Mardhian Locano', 1, '0000-00-00', '', '', '0000-00-00', 0, ''),
('5f01faf99afd3', '4', 'Ayu', 2, '0000-00-00', '', '', '0000-00-00', 0, ''),
('5f01fb104fa86', '5', 'Novitasari', 2, '0000-00-00', '', '', '0000-00-00', 0, ''),
('5f01fb30584c6', '6', 'M. Fihri Aziz Assuyuti', 1, '0000-00-00', '', '', '0000-00-00', 0, ''),
('5f01fb4857ddb', '7', 'Apri', 2, '0000-00-00', '', '', '0000-00-00', 0, ''),
('5f01fb6473faa', '8', 'Catherine V. D.', 2, '0000-00-00', '', '', '0000-00-00', 0, ''),
('5f01fb812a825', '9', 'Jenyver Mulidawati', 6, '0000-00-00', '', '', '0000-00-00', 0, ''),
('5f01fbd2e4b6d', '10', 'Jeffri Purwanto', 4, '0000-00-00', '', '', '0000-00-00', 0, ''),
('5f01fbfc3862b', '11', 'Syahrurafli suhaedy', 4, '0000-00-00', '', '', '0000-00-00', 0, ''),
('5f01fc1de6afa', '12', 'Shafira Firdaussamar', 4, '0000-00-00', '', '', '0000-00-00', 0, ''),
('5f01fc3af0acc', '13', 'Isep Saefullah', 4, '0000-00-00', '', '', '0000-00-00', 0, ''),
('5f01fc5ebf772', '14', 'Dita firgi', 4, '0000-00-00', '', '', '0000-00-00', 0, ''),
('5f01fc7d96baf', '15', 'Egi', 1, '0000-00-00', '', '', '0000-00-00', 0, ''),
('5f01fc998cf26', '16', 'Fairuz Maulana', 4, '0000-00-00', '', '', '0000-00-00', 0, ''),
('5f01fe444f9aa', '17', 'Defi Hanipah', 5, '0000-00-00', '', '', '0000-00-00', 0, ''),
('5f01fe684e078', '18', 'Alfi Lisdiani', 5, '0000-00-00', '', '', '0000-00-00', 0, ''),
('5f01fedb2a674', '19', 'Riska Nurfardillah', 5, '0000-00-00', '', '', '0000-00-00', 0, ''),
('5f01ff40acff5', '20', 'Sarah', 4, '0000-00-00', '', '', '0000-00-00', 0, ''),
('5f01ff5d0c0f5', '21', 'Wiwiek Hanifah Ediyanto', 5, '0000-00-00', '', '', '0000-00-00', 0, ''),
('5f01ff7e8a55f', '22', 'Saldi', 3, '0000-00-00', '', '', '0000-00-00', 0, ''),
('5f01ff99ebb3f', '23', 'Annissa Ulfah', 4, '0000-00-00', '', '', '0000-00-00', 0, ''),
('5f01ffb921db2', '24', 'Fajar', 4, '0000-00-00', '', '', '0000-00-00', 0, ''),
('5f01ffd7c331c', '25', 'Arum', 2, '0000-00-00', '', '', '0000-00-00', 0, ''),
('5f0200072df55', '26', 'Kiran Agustin', 6, '0000-00-00', '', '', '0000-00-00', 0, ''),
('5f04a4ede5962', '27', 'Ahmad Taufik', 1, '0000-00-00', '', '', '0000-00-00', 0, ''),
('5f04a6346cf19', '28', 'Anita Sesar Ria', 2, '0000-00-00', '', '', '0000-00-00', 0, ''),
('5f04a9cde0236', '29', 'Fitri Sihombing', 2, '0000-00-00', '', '', '0000-00-00', 0, ''),
('5f04aa0b2a605', '30', 'Ananda Savira Tamara Putri', 2, '0000-00-00', '', '', '0000-00-00', 0, ''),
('5f0ea89d4b790', '2014142002', 'Maria Lusia', 1, '2018-08-02', '', '', '0000-00-00', 11, 'IT Support'),
('5f0eac212fc17', '2012102019', 'Eki Indradi', 1, '2016-08-28', '087779992208', 'eki@gmail.com', '2016-09-28', 11, 'IT Support'),
('5f32a7ee14a8e', '2013112001', 'Hakim', 1, '2016-08-28', '-', 'wkwk@gmail.com', '2016-09-28', 8, 'Programmer'),
('5f32b1bca16e2', '2012102017', 'Ida', 1, '2020-08-12', '-', 'haha@gmail.com', '2020-02-03', 8, 'Sekretaris II');

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_respon`
--

CREATE TABLE IF NOT EXISTS `detail_respon` (
  `id_detail` int(20) NOT NULL AUTO_INCREMENT,
  `id_kep` int(10) NOT NULL,
  `id_pertanyaan` int(10) NOT NULL,
  `skor_kinerja` int(1) NOT NULL,
  `skor_harapan` int(1) NOT NULL,
  PRIMARY KEY (`id_detail`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=675 ;

--
-- Dumping data untuk tabel `detail_respon`
--

INSERT INTO `detail_respon` (`id_detail`, `id_kep`, `id_pertanyaan`, `skor_kinerja`, `skor_harapan`) VALUES
(241, 1, 10, 4, 3),
(242, 1, 11, 4, 2),
(243, 1, 12, 4, 1),
(244, 1, 13, 3, 4),
(245, 1, 14, 3, 2),
(246, 1, 15, 3, 1),
(247, 1, 16, 2, 4),
(248, 1, 17, 2, 3),
(249, 1, 18, 2, 1),
(250, 1, 19, 1, 4),
(251, 1, 20, 1, 3),
(252, 1, 21, 1, 2),
(253, 1, 22, 3, 4),
(254, 1, 23, 2, 4),
(255, 1, 24, 1, 4),
(256, 1, 25, 4, 3),
(257, 1, 26, 2, 3),
(258, 1, 27, 1, 3),
(259, 1, 28, 4, 2),
(260, 1, 29, 3, 2),
(261, 1, 30, 1, 2),
(262, 1, 31, 4, 1),
(290, 4, 10, 4, 2),
(291, 4, 11, 2, 3),
(292, 4, 12, 3, 2),
(293, 4, 13, 2, 4),
(294, 4, 14, 4, 2),
(295, 4, 15, 2, 4),
(296, 4, 16, 3, 2),
(297, 4, 17, 4, 2),
(298, 4, 18, 2, 3),
(299, 4, 19, 3, 2),
(300, 4, 20, 2, 3),
(301, 4, 21, 4, 1),
(302, 4, 22, 2, 3),
(303, 4, 23, 3, 2),
(304, 4, 24, 4, 3),
(305, 4, 25, 2, 4),
(306, 4, 26, 4, 2),
(307, 4, 27, 2, 4),
(308, 4, 28, 3, 1),
(309, 4, 29, 4, 2),
(310, 4, 30, 2, 1),
(311, 4, 31, 2, 3),
(312, 2, 10, 3, 1),
(313, 2, 11, 2, 3),
(314, 2, 12, 4, 2),
(315, 2, 13, 1, 4),
(316, 2, 14, 3, 2),
(317, 2, 15, 1, 4),
(318, 2, 16, 4, 2),
(319, 2, 17, 2, 4),
(320, 2, 18, 4, 1),
(321, 2, 19, 1, 4),
(322, 2, 20, 4, 2),
(323, 2, 21, 2, 4),
(324, 2, 22, 3, 1),
(325, 2, 23, 1, 4),
(326, 2, 24, 3, 2),
(327, 2, 25, 4, 2),
(328, 2, 26, 4, 1),
(329, 2, 27, 2, 4),
(330, 2, 28, 4, 4),
(331, 2, 29, 2, 4),
(332, 2, 30, 2, 3),
(333, 2, 31, 3, 2),
(334, 5, 10, 4, 3),
(335, 5, 11, 3, 2),
(336, 5, 12, 2, 1),
(337, 5, 13, 4, 3),
(338, 5, 14, 3, 2),
(339, 5, 15, 2, 1),
(340, 5, 16, 4, 3),
(341, 5, 17, 3, 2),
(342, 5, 18, 2, 1),
(343, 5, 19, 4, 3),
(344, 5, 20, 3, 2),
(345, 5, 21, 2, 1),
(346, 5, 22, 4, 3),
(347, 5, 23, 3, 2),
(348, 5, 24, 2, 1),
(349, 5, 25, 4, 3),
(350, 5, 26, 3, 2),
(351, 5, 27, 2, 1),
(352, 5, 28, 4, 3),
(353, 5, 29, 3, 2),
(354, 5, 30, 2, 1),
(355, 5, 31, 4, 3),
(356, 1551, 1, 3, 3),
(357, 1551, 2, 3, 3),
(358, 1551, 3, 3, 3),
(359, 1551, 4, 3, 3),
(360, 1551, 5, 4, 3),
(361, 1551, 6, 4, 3),
(362, 1551, 7, 3, 3),
(363, 1551, 8, 3, 3),
(364, 1551, 9, 3, 3),
(365, 2499, 1, 4, 4),
(366, 2499, 2, 3, 4),
(367, 2499, 3, 3, 4),
(368, 2499, 4, 3, 4),
(369, 2499, 5, 4, 4),
(370, 2499, 6, 4, 4),
(371, 2499, 7, 4, 4),
(372, 2499, 8, 4, 4),
(373, 2499, 9, 4, 4),
(374, 25741, 1, 3, 3),
(375, 25741, 2, 3, 2),
(376, 25741, 3, 3, 3),
(377, 25741, 4, 2, 2),
(378, 25741, 5, 1, 3),
(379, 25741, 6, 1, 3),
(380, 25741, 7, 3, 2),
(381, 25741, 8, 3, 3),
(382, 25741, 9, 1, 3),
(383, 30274, 1, 3, 3),
(384, 30274, 2, 3, 2),
(385, 30274, 3, 3, 2),
(386, 30274, 4, 2, 2),
(387, 30274, 5, 1, 2),
(388, 30274, 6, 2, 3),
(389, 30274, 7, 2, 2),
(390, 30274, 8, 3, 2),
(391, 30274, 9, 2, 2),
(392, 16960, 1, 3, 3),
(393, 16960, 2, 3, 3),
(394, 16960, 3, 3, 3),
(395, 16960, 4, 2, 3),
(396, 16960, 5, 2, 2),
(397, 16960, 6, 2, 3),
(398, 16960, 7, 3, 3),
(399, 16960, 8, 3, 3),
(400, 16960, 9, 3, 3),
(401, 9811, 1, 3, 3),
(402, 9811, 2, 3, 2),
(403, 9811, 3, 3, 3),
(404, 9811, 4, 2, 3),
(405, 9811, 5, 2, 3),
(406, 9811, 6, 4, 3),
(407, 9811, 7, 4, 3),
(408, 9811, 8, 3, 3),
(409, 9811, 9, 3, 3),
(410, 22172, 1, 1, 2),
(411, 22172, 2, 2, 2),
(412, 22172, 3, 1, 4),
(413, 22172, 4, 1, 4),
(414, 22172, 5, 3, 3),
(415, 22172, 6, 2, 3),
(416, 22172, 7, 2, 3),
(417, 22172, 8, 1, 2),
(418, 22172, 9, 1, 2),
(419, 6309, 1, 3, 2),
(420, 6309, 2, 2, 2),
(421, 6309, 3, 3, 3),
(422, 6309, 4, 2, 4),
(423, 6309, 5, 2, 3),
(424, 6309, 6, 2, 3),
(425, 6309, 7, 4, 2),
(426, 6309, 8, 4, 3),
(427, 6309, 9, 3, 3),
(428, 6190, 1, 3, 3),
(429, 6190, 2, 3, 3),
(430, 6190, 3, 3, 3),
(431, 6190, 4, 1, 3),
(432, 6190, 5, 1, 3),
(433, 6190, 6, 2, 3),
(434, 6190, 7, 3, 3),
(435, 6190, 8, 3, 3),
(436, 6190, 9, 2, 3),
(437, 29818, 1, 4, 3),
(438, 29818, 2, 4, 3),
(439, 29818, 3, 3, 3),
(440, 29818, 4, 3, 3),
(441, 29818, 5, 2, 3),
(442, 29818, 6, 3, 4),
(443, 29818, 7, 4, 4),
(444, 29818, 8, 4, 3),
(445, 29818, 9, 3, 3),
(446, 29739, 1, 1, 4),
(447, 29739, 2, 3, 4),
(448, 29739, 3, 1, 4),
(449, 29739, 4, 3, 4),
(450, 29739, 5, 2, 4),
(451, 29739, 6, 3, 4),
(452, 29739, 7, 3, 4),
(453, 29739, 8, 3, 4),
(454, 29739, 9, 2, 4),
(455, 24030, 1, 3, 3),
(456, 24030, 2, 1, 4),
(457, 24030, 3, 3, 3),
(458, 24030, 4, 2, 3),
(459, 24030, 5, 4, 3),
(460, 24030, 6, 2, 4),
(461, 24030, 7, 2, 4),
(462, 24030, 8, 3, 4),
(463, 24030, 9, 2, 4),
(464, 1632, 1, 2, 3),
(465, 1632, 2, 2, 4),
(466, 1632, 3, 2, 3),
(467, 1632, 4, 1, 4),
(468, 1632, 5, 1, 4),
(469, 1632, 6, 3, 4),
(470, 1632, 7, 3, 3),
(471, 1632, 8, 1, 2),
(472, 1632, 9, 1, 2),
(473, 19344, 1, 2, 3),
(474, 19344, 2, 2, 3),
(475, 19344, 3, 2, 3),
(476, 19344, 4, 2, 3),
(477, 19344, 5, 2, 3),
(478, 19344, 6, 2, 4),
(479, 19344, 7, 2, 3),
(480, 19344, 8, 2, 3),
(481, 19344, 9, 2, 3),
(482, 15799, 1, 3, 3),
(483, 15799, 2, 3, 4),
(484, 15799, 3, 1, 4),
(485, 15799, 4, 1, 4),
(486, 15799, 5, 2, 4),
(487, 15799, 6, 1, 4),
(488, 15799, 7, 3, 4),
(489, 15799, 8, 1, 4),
(490, 15799, 9, 1, 4),
(491, 32719, 1, 3, 3),
(492, 32719, 2, 2, 2),
(493, 32719, 3, 2, 3),
(494, 32719, 4, 2, 2),
(495, 32719, 5, 3, 2),
(496, 32719, 6, 2, 2),
(497, 32719, 7, 2, 2),
(498, 32719, 8, 2, 3),
(499, 32719, 9, 2, 3),
(500, 2337, 1, 2, 2),
(501, 2337, 2, 1, 3),
(502, 2337, 3, 2, 2),
(503, 2337, 4, 2, 3),
(504, 2337, 5, 3, 3),
(505, 2337, 6, 3, 3),
(506, 2337, 7, 2, 3),
(507, 2337, 8, 1, 3),
(508, 2337, 9, 1, 3),
(509, 25102, 1, 3, 3),
(510, 25102, 2, 2, 2),
(511, 25102, 3, 3, 3),
(512, 25102, 4, 2, 2),
(513, 25102, 5, 2, 2),
(514, 25102, 6, 1, 2),
(515, 25102, 7, 3, 3),
(516, 25102, 8, 4, 3),
(517, 25102, 9, 2, 3),
(518, 10517, 1, 3, 3),
(519, 10517, 2, 4, 4),
(520, 10517, 3, 2, 3),
(521, 10517, 4, 3, 3),
(522, 10517, 5, 2, 2),
(523, 10517, 6, 3, 2),
(524, 10517, 7, 4, 2),
(525, 10517, 8, 3, 3),
(526, 10517, 9, 3, 3),
(527, 13359, 1, 1, 2),
(528, 13359, 2, 2, 3),
(529, 13359, 3, 2, 3),
(530, 13359, 4, 1, 3),
(531, 13359, 5, 2, 2),
(532, 13359, 6, 2, 3),
(533, 13359, 7, 2, 2),
(534, 13359, 8, 2, 2),
(535, 13359, 9, 2, 2),
(536, 30596, 1, 3, 3),
(537, 30596, 2, 3, 3),
(538, 30596, 3, 3, 3),
(539, 30596, 4, 3, 3),
(540, 30596, 5, 3, 3),
(541, 30596, 6, 3, 3),
(542, 30596, 7, 3, 3),
(543, 30596, 8, 3, 3),
(544, 30596, 9, 3, 3),
(545, 8518, 1, 3, 3),
(546, 8518, 2, 3, 2),
(547, 8518, 3, 2, 2),
(548, 8518, 4, 2, 2),
(549, 8518, 5, 3, 3),
(550, 8518, 6, 2, 2),
(551, 8518, 7, 3, 2),
(552, 8518, 8, 1, 3),
(553, 8518, 9, 1, 3),
(554, 6531, 1, 3, 3),
(555, 6531, 2, 3, 3),
(556, 6531, 3, 3, 4),
(557, 6531, 4, 3, 3),
(558, 6531, 5, 3, 3),
(559, 6531, 6, 3, 3),
(560, 6531, 7, 3, 3),
(561, 6531, 8, 2, 3),
(562, 6531, 9, 3, 3),
(563, 30464, 1, 3, 4),
(564, 30464, 2, 3, 3),
(565, 30464, 3, 3, 3),
(566, 30464, 4, 3, 4),
(567, 30464, 5, 3, 4),
(568, 30464, 6, 2, 3),
(569, 30464, 7, 3, 2),
(570, 30464, 8, 1, 4),
(571, 30464, 9, 2, 4),
(572, 19309, 1, 2, 3),
(573, 19309, 2, 2, 2),
(574, 19309, 3, 2, 2),
(575, 19309, 4, 1, 2),
(576, 19309, 5, 1, 3),
(577, 19309, 6, 1, 3),
(578, 19309, 7, 1, 3),
(579, 19309, 8, 1, 3),
(580, 19309, 9, 1, 3),
(581, 1902, 1, 3, 2),
(582, 1902, 2, 2, 2),
(583, 1902, 3, 3, 2),
(584, 1902, 4, 2, 2),
(585, 1902, 5, 2, 3),
(586, 1902, 6, 3, 3),
(587, 1902, 7, 3, 2),
(588, 1902, 8, 2, 2),
(589, 1902, 9, 2, 2),
(590, 2692, 1, 3, 4),
(591, 2692, 2, 4, 4),
(592, 2692, 3, 4, 4),
(593, 2692, 4, 4, 4),
(594, 2692, 5, 3, 4),
(595, 2692, 6, 3, 2),
(596, 2692, 7, 3, 4),
(597, 2692, 8, 3, 3),
(598, 2692, 9, 3, 2),
(599, 5509, 1, 3, 3),
(600, 5509, 2, 3, 3),
(601, 5509, 3, 4, 4),
(602, 5509, 4, 3, 4),
(603, 5509, 5, 4, 4),
(604, 5509, 6, 4, 4),
(605, 5509, 7, 4, 4),
(606, 5509, 8, 4, 3),
(607, 5509, 9, 3, 3),
(608, 21828, 1, 3, 3),
(609, 21828, 2, 4, 4),
(610, 21828, 3, 3, 4),
(611, 21828, 4, 2, 4),
(612, 21828, 5, 2, 3),
(613, 21828, 6, 2, 4),
(614, 21828, 7, 2, 4),
(615, 21828, 8, 1, 4),
(616, 21828, 9, 1, 4),
(617, 28738, 1, 3, 3),
(618, 28738, 2, 3, 3),
(619, 28738, 3, 4, 3),
(620, 28738, 4, 2, 3),
(621, 28738, 5, 2, 3),
(622, 28738, 6, 3, 3),
(623, 28738, 7, 3, 3),
(624, 28738, 8, 2, 3),
(625, 28738, 9, 2, 3),
(626, 13869, 1, 3, 3),
(627, 13869, 2, 3, 3),
(628, 13869, 3, 3, 3),
(629, 13869, 4, 1, 3),
(630, 13869, 5, 3, 3),
(631, 13869, 6, 3, 3),
(632, 13869, 7, 2, 3),
(633, 13869, 8, 2, 4),
(634, 13869, 9, 1, 4),
(635, 31492, 1, 2, 3),
(636, 31492, 2, 1, 3),
(637, 31492, 3, 2, 3),
(638, 31492, 4, 1, 3),
(639, 31492, 5, 2, 2),
(640, 31492, 6, 1, 2),
(641, 31492, 7, 2, 1),
(642, 31492, 8, 1, 3),
(643, 31492, 9, 2, 2),
(644, 18222, 1, 3, 4),
(645, 18222, 2, 3, 2),
(646, 18222, 3, 3, 4),
(647, 18222, 4, 3, 2),
(648, 18222, 5, 3, 2),
(649, 18222, 6, 2, 3),
(650, 18222, 7, 3, 2),
(651, 18222, 8, 1, 3),
(652, 18222, 9, 2, 3),
(653, 7, 10, 4, 2),
(654, 7, 11, 2, 3),
(655, 7, 12, 3, 2),
(656, 7, 13, 3, 2),
(657, 7, 14, 4, 3),
(658, 7, 15, 2, 3),
(659, 7, 16, 3, 2),
(660, 7, 17, 2, 3),
(661, 7, 18, 3, 2),
(662, 7, 19, 1, 4),
(663, 7, 20, 3, 2),
(664, 7, 21, 2, 4),
(665, 7, 22, 3, 2),
(666, 7, 23, 1, 4),
(667, 7, 24, 3, 2),
(668, 7, 25, 2, 3),
(669, 7, 26, 3, 2),
(670, 7, 27, 2, 4),
(671, 7, 28, 3, 2),
(672, 7, 29, 2, 3),
(673, 7, 30, 3, 2),
(674, 7, 31, 2, 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `indikator`
--

CREATE TABLE IF NOT EXISTS `indikator` (
  `id_indikator` int(5) NOT NULL AUTO_INCREMENT,
  `nm_indikator` varchar(60) NOT NULL,
  `level` varchar(15) NOT NULL,
  PRIMARY KEY (`id_indikator`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data untuk tabel `indikator`
--

INSERT INTO `indikator` (`id_indikator`, `nm_indikator`, `level`) VALUES
(2, 'Kurikulum', 'Alumni'),
(4, 'Pelayanan Karir', 'Alumni'),
(5, 'Sarana dan Prasarana', 'Alumni'),
(7, 'Etika', 'Stakeholder'),
(8, 'Keahlian Pada Bidang Ilmu (Kompetensi Utama)', 'Stakeholder'),
(9, 'Kemampuan Berbahasa Asing', 'Stakeholder'),
(10, 'Penggunaan Teknologi Informasi', 'Stakeholder'),
(11, 'Kemampuan Berkomunikasi', 'Stakeholder'),
(12, 'Kerjasama Tim', 'Stakeholder'),
(13, 'Pengembangan Diri', 'Stakeholder');

-- --------------------------------------------------------

--
-- Struktur dari tabel `instansi`
--

CREATE TABLE IF NOT EXISTS `instansi` (
  `id_instansi` int(5) NOT NULL AUTO_INCREMENT,
  `nm_instansi` varchar(60) NOT NULL,
  `alamat` text NOT NULL,
  PRIMARY KEY (`id_instansi`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data untuk tabel `instansi`
--

INSERT INTO `instansi` (`id_instansi`, `nm_instansi`, `alamat`) VALUES
(0, '-', '-\r\n'),
(1, 'Telkom Cirebon', 'Indonesia tanah airku, tanah tumpah darahku.'),
(2, 'Microsoft ID', 'Jakarta'),
(3, 'Dinas Perbuhungan Cirebon', ''),
(4, 'KPKNL Cirebon', ''),
(5, 'About Cirebon (Kantor Berita)', ''),
(6, 'PT Kahatex', ''),
(7, 'SMK NU Kaplongan', ''),
(8, 'PT. Raya Konsult', 'Desa Tolengas RT.02/RW.04 Sukasari Kab. Sumedang'),
(9, 'Metro  Kuningan', 'Kuningan'),
(10, 'PT. Arqin Property', 'Kasepuhan, Cirebon'),
(11, 'PT Propan', 'Tuparev Cirebon');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kep_alumni`
--

CREATE TABLE IF NOT EXISTS `kep_alumni` (
  `id_kep` int(10) NOT NULL,
  `id_user` varchar(40) NOT NULL,
  `id_periode` int(5) NOT NULL,
  `kritik_saran` text NOT NULL,
  `tgl_input` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_kep`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kep_alumni`
--

INSERT INTO `kep_alumni` (`id_kep`, `id_user`, `id_periode`, `kritik_saran`, `tgl_input`) VALUES
(1551, '5f01fa5723043', 3, '', '2020-07-05 16:36:32'),
(1632, '5f01fc3af0acc', 3, '', '2020-07-05 17:20:21'),
(1902, '5f0200072df55', 3, '', '2020-07-06 04:48:49'),
(2337, '5f01fe444f9aa', 3, '', '2020-07-06 04:20:14'),
(2499, '5f01fa78386ad', 3, '', '2020-07-05 16:39:03'),
(2692, '5f04a4ede5962', 3, '', '2020-07-07 16:42:48'),
(5509, '5f04a6346cf19', 3, '', '2020-07-07 16:47:24'),
(6190, '5f01fb812a825', 3, '', '2020-07-05 17:06:38'),
(6309, '5f01fb6473faa', 3, '', '2020-07-05 17:02:47'),
(6531, '5f01ff99ebb3f', 3, '', '2020-07-06 04:39:33'),
(8518, '5f01ff7e8a55f', 3, '', '2020-07-06 04:36:30'),
(9811, '5f01fb30584c6', 3, '', '2020-07-05 16:55:38'),
(10517, '5f01fedb2a674', 3, '', '2020-07-06 04:27:22'),
(13359, '5f01ff40acff5', 3, '', '2020-07-06 04:30:32'),
(13869, '5f04aa0b2a605', 3, '', '2020-07-07 17:07:30'),
(15799, '5f01fc7d96baf', 3, '', '2020-07-05 17:26:33'),
(16960, '5f01fb104fa86', 3, '', '2020-07-05 16:53:09'),
(18222, '5f0eac212fc17', 1, '<p>terbaik</p>', '2020-08-11 14:39:42'),
(19309, '5f01ffd7c331c', 3, '', '2020-07-06 04:44:40'),
(19344, '5f01fc5ebf772', 3, '', '2020-07-05 17:23:53'),
(21828, '5ef615b4224cf', 3, '', '2020-07-07 16:53:24'),
(22172, '5f01fb4857ddb', 3, '', '2020-07-05 16:59:52'),
(24030, '5f01fc1de6afa', 3, '', '2020-07-05 17:15:35'),
(25102, '5f01fe684e078', 3, '', '2020-07-06 04:23:06'),
(25741, '5f01faa0e24b9', 3, '', '2020-07-05 16:45:10'),
(28738, '5f04a9cde0236', 3, '', '2020-07-07 17:03:54'),
(29739, '5f01fbfc3862b', 3, '', '2020-07-05 17:12:12'),
(29818, '5f01fbd2e4b6d', 3, '', '2020-07-05 17:09:45'),
(30274, '5f01faf99afd3', 3, '', '2020-07-05 16:50:07'),
(30464, '5f01ffb921db2', 3, '', '2020-07-06 04:42:15'),
(30596, '5f01ff5d0c0f5', 3, '', '2020-07-06 04:31:56'),
(31492, '5eccbea2f0c37', 1, '', '2020-07-10 16:29:34'),
(32719, '5f01fc998cf26', 3, '', '2020-07-05 17:30:24');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kep_plulusan`
--

CREATE TABLE IF NOT EXISTS `kep_plulusan` (
  `id_kep` int(5) NOT NULL AUTO_INCREMENT,
  `id_user` varchar(50) NOT NULL,
  `id_periode` int(5) NOT NULL,
  `nim` varchar(20) NOT NULL,
  `kritik_saran` text NOT NULL,
  `status_isi` int(2) NOT NULL,
  PRIMARY KEY (`id_kep`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data untuk tabel `kep_plulusan`
--

INSERT INTO `kep_plulusan` (`id_kep`, `id_user`, `id_periode`, `nim`, `kritik_saran`, `status_isi`) VALUES
(1, '5ecb656a271c3', 3, '2016102002', '<p>CIC Terbaik</p>', 1),
(2, '5ecb656a271c3', 3, '2016102005', '<p>CIC Mantap</p>', 1),
(3, '5ecb614d464e6', 3, '2016102003', '', 2),
(4, '5ef38b4a012db', 3, '2016102001', '<p>Memuaskan...</p>', 1),
(5, '5ecb656a271c3', 3, '2016114004', '<p>haha</p>', 1),
(6, '5ecb614d464e6', 3, '2012102019', '', 2),
(7, '5ef38b4a012db', 3, '2014142002', '<p>hahha</p>', 1),
(8, '5ef38b4a012db', 3, '2012102019', '', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `periode`
--

CREATE TABLE IF NOT EXISTS `periode` (
  `id_periode` int(5) NOT NULL AUTO_INCREMENT,
  `nm_periode` varchar(60) NOT NULL,
  `tahun` int(4) NOT NULL,
  `isactive` int(1) NOT NULL,
  PRIMARY KEY (`id_periode`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data untuk tabel `periode`
--

INSERT INTO `periode` (`id_periode`, `nm_periode`, `tahun`, `isactive`) VALUES
(1, 'Survei Kepuasan', 2019, 2),
(3, 'Survei Kepuasan', 2020, 1),
(5, 'Survei Kepuasan', 2021, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pertanyaan`
--

CREATE TABLE IF NOT EXISTS `pertanyaan` (
  `id_pertanyaan` int(5) NOT NULL AUTO_INCREMENT,
  `pertanyaan` longtext NOT NULL,
  `id_indikator` int(2) NOT NULL,
  PRIMARY KEY (`id_pertanyaan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Dumping data untuk tabel `pertanyaan`
--

INSERT INTO `pertanyaan` (`id_pertanyaan`, `pertanyaan`, `id_indikator`) VALUES
(1, 'Kesesuaian Kurikulum Universitas CIC dengan dunia kerja.', 2),
(2, 'Kesesuaian Mata Kuliah dengan dunia kerja.', 2),
(3, 'Kesesuaian visi, misi, tujuan Program Studi dengan dunia kerja.', 2),
(4, 'Upaya Universitas CIC dalam meningkatkan skill lulusan.', 2),
(5, 'Pelaksanaan Bimbingan Karir dalam memasuki dunia kerja.', 4),
(6, 'Upaya Universitas CIC dalam memberikan info lowongan kerja.', 4),
(7, 'Upaya Universitas CIC memperkenalkan lulusan di dunia kerja.', 4),
(8, 'Keseuaian Sarana Penunjang yang digunakan.', 5),
(9, 'Keseuaian Prasarana (ruangan/fasilitas) yang digunakan.', 5),
(10, 'Etika dalam Kerja', 7),
(11, 'Keramahan dan Kesopanan.', 7),
(12, 'Kepribadian dan moral dalam dunia kerja.', 7),
(13, 'Kemampuan dalam menerapkan keahlian dalam pekerjaan.', 8),
(14, 'Produktivitas kerja.', 8),
(15, 'Kemampuan menyelesaikan masalah dalam pekerjaan.', 8),
(16, 'Kemampuan memanfaatkan Pengetahuan dalam pekerjaan.', 8),
(17, 'Kemampuan menggunakan bahasa Inggris secara lisan.', 9),
(18, 'Kemampuan menggunakan bahasa Inggris secara tulisan.', 9),
(19, 'Kemampuan menguasai teknologi komputer dan internet.', 10),
(20, 'Kemampuan memanfaatkan teknologi komputer dan internet dalam pekerjaan.', 10),
(21, 'Kematangan dalam pengendalian diri / emosi.', 11),
(22, 'Kepercayaan diri.', 11),
(23, 'Kemampuan mengemukakan ide atau pendapat.', 11),
(24, 'Kemampuan berinteraksi dalam berorganisasi.', 11),
(25, 'Kemampuan bekerja sama dengan tim.', 12),
(26, 'Mampu mendiskusikan dan memutuskan berbagi pekerjaan.', 12),
(27, 'Keterbukaan terhadap kritik dan saran.', 12),
(28, 'Cepat dalam mengembangkan kemampuan diri.', 13),
(29, 'Memiliki rasa ingin tahu yang kuat terhadap pekerjaan baru.', 13),
(30, 'Motivasi mempelajari hal baru dalam pekerjaan.', 13),
(31, 'Memiliki inisiatif dalam pekerjaan.', 13);

-- --------------------------------------------------------

--
-- Struktur dari tabel `prodi`
--

CREATE TABLE IF NOT EXISTS `prodi` (
  `id_prodi` int(6) NOT NULL AUTO_INCREMENT,
  `nm_prodi` varchar(40) NOT NULL,
  `fakultas` varchar(3) NOT NULL,
  PRIMARY KEY (`id_prodi`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data untuk tabel `prodi`
--

INSERT INTO `prodi` (`id_prodi`, `nm_prodi`, `fakultas`) VALUES
(1, 'Teknik Informatika', 'FTI'),
(2, 'Sistem Informasi (SIKA)', 'FTI'),
(3, 'Desain Komunikasi Visual', 'FTI'),
(4, 'D3 Manajemen Informatika', 'FTI'),
(5, 'D3 Komputeri Akuntansi', 'FTI'),
(6, 'D3 Manajemen Bisnis', 'FEB'),
(7, 'Manajemen', 'FEB'),
(8, 'Akuntansi', 'FEB');

-- --------------------------------------------------------

--
-- Struktur dari tabel `riwayat`
--

CREATE TABLE IF NOT EXISTS `riwayat` (
  `id_riwayat` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` varchar(30) NOT NULL,
  `nm_instansi` varchar(50) NOT NULL,
  `tgl_bekerja` date NOT NULL,
  `tgl_keluar` date NOT NULL,
  `jabatan` varchar(30) NOT NULL,
  `kesesuaian` varchar(30) NOT NULL,
  PRIMARY KEY (`id_riwayat`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `riwayat`
--

INSERT INTO `riwayat` (`id_riwayat`, `id_user`, `nm_instansi`, `tgl_bekerja`, `tgl_keluar`, `jabatan`, `kesesuaian`) VALUES
(2, '5f0eac212fc17', 'PT Propan', '2016-09-28', '2018-09-28', 'Programmer', 'Tinggi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `stakeholder`
--

CREATE TABLE IF NOT EXISTS `stakeholder` (
  `id_user` varchar(60) NOT NULL,
  `nama_p` varchar(60) NOT NULL,
  `jabatan_p` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `id_instansi` int(5) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `stakeholder`
--

INSERT INTO `stakeholder` (`id_user`, `nama_p`, `jabatan_p`, `email`, `id_instansi`) VALUES
('5ecb614d464e6', 'Syifa Ulkarim', 'Guru', 'syifaulkarim@gmail.com', 1),
('5ecb656a271c3', 'Kristianto', 'IT Konsultan', 'kristiantorpl@gmail.com', 2),
('5ef38b4a012db', 'Henri Ristanto', 'Sub. Umum', 'henri@gmail.com', 4),
('5f32c0546f0ed', 'Humam', 'Programmer', 'humamfumi46@gmail.com', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` varchar(60) NOT NULL,
  `username` varchar(60) NOT NULL,
  `password` varchar(200) NOT NULL,
  `prodi` int(2) NOT NULL,
  `nm_user` varchar(50) NOT NULL,
  `level` varchar(20) NOT NULL,
  `foto` varchar(20) NOT NULL,
  PRIMARY KEY (`id_user`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `prodi`, `nm_user`, `level`, `foto`) VALUES
('1', 'Kemahasiswaan', '$2y$10$gULCedUyIy0vjPr9mJWHAOE6tcGdIzJwy9h8XDt0nOB4BHJIhNIeS', 0, 'Amroni Duraji, M.M', 'Administrator', '1.jpg'),
('5ecbe9035bb3d', '2016102002', '$2y$10$GTq2YvQ0r4aflodls6E/nOd4GxbGj60wUgoBN.rbxubHzdEFIATNK', 0, '', 'Alumni', '5ecbe9035bb3d.jpg'),
('5ecc072df2442', '2016102003', '$2y$10$dMI8imA8A//Z9ytLA2cFmOYg4NGxA5DR7Mj3OlJjI9CRrOzzfmUwW', 0, '', 'Alumni', '5ecc072df2442.png'),
('5eccbea2f0c37', '2016102005', '$2y$10$JqyyiYdtc6Pwywc9yv4eAeszX3M0o1uSue4MgwQBDEWFSiBespxm2', 0, '', 'Alumni', 'default.jpg'),
('5ee9c3a45194f', '2016102001', '$2y$10$55TgfjLbll7LvYRYnSzPr.p2mj3w7qonS3m1DraqKrpSeB0zOa7kG', 0, '', 'Alumni', '5ee9c3a45194f.jpg'),
('5eea3d456d45b', 'kaprodi_ti', '$2y$10$2Xf8w9DC9p9T/NnoiJ0d0.CPOwtwFLDLV66jUCx8Q3yJIvAxjJJuW', 1, 'Kusnadi, M.Kom', 'Kaprodi', '5eea3d456d45b.jpg'),
('5eea3d7be2f9f', 'dekan_fti', '$2y$10$ERv.77k.jlUHp2wlNg/jA.0q5L5.jPbrdbWG2WqndeG10cUyhNwwS', 1, 'Marsani Asfi, M.Si', 'Dekan', 'default.jpg'),
('5eea3ef3c60bb', 'kaprodi_sika', '$2y$10$GTq2YvQ0r4aflodls6E/nOd4GxbGj60wUgoBN.rbxubHzdEFIATNK', 2, 'Lena Magdalena, M.Si', 'Kaprodi', 'default.jpg'),
('5eee1a4e37061', 'kaprodi_mi', '$2y$10$LQs7I9EVx8YQsOg/U8w.ku003UFY3p4DjN3sbro/q4Do9Fh6thtPO', 4, 'Wanda Ilham, M.Kom', 'Kaprodi', 'default.jpg'),
('5eee1a899ac19', 'kaprodi_ka', '$2y$10$faSYmoQPOqmfuAfHJt8/QOz0gcq/iNPTkv8lFVE/I2Bhbg7efTu8i', 5, 'Suwandi, S.E, M.M.', 'Kaprodi', 'default.jpg'),
('5eee1ad69b2df', 'kaprodi_mb', '$2y$10$B54xStZFJsahjov/NP9uS.SeDbTbBevvugmNujtGnWsJfLvCbszHy', 6, 'Amroni Duraji, M.M', 'Kaprodi', 'default.jpg'),
('5ef38b4a012db', 'henri@gmail.com', '$2y$10$HsmKrnKrZUPWI8cDkX4JAeYWrmEzh2B8GhtNxPCEVtaOPlalMBwdC', 0, '', 'Stakeholder', 'default.jpg'),
('5ef615b4224cf', '2016114004', '$2y$10$bFbhZVhbGYytXkzNIRO2AujBYAqI8JLCorOEax3jhvZEvpLt2ofmG', 0, '', 'Alumni', 'default.jpg'),
('5ef6161e51318', '2016114003', '$2y$10$A4cxLbLs2spBEV84X7Dj.OALhT7rn69Am8sGDQbcDTQv1y6bxzk7W', 0, '', 'Alumni', 'default.jpg'),
('5f01f8da1086d', '2016114006', '$2y$10$2uyG9UsRutm0fJseGGebGuvnAHAcchfBwdLO1tSNBXL/OAE6XEcUK', 0, '', 'Alumni', 'default.jpg'),
('5f01fa5723043', '1', '$2y$10$WWwnNRftbYFPQx.dMopgkuuNb/RDTo4byN4sKcIWLwgf5gFLQEyWu', 0, '', 'Alumni', 'default.jpg'),
('5f01fa78386ad', '2', '$2y$10$slueUt.fsYQ1CKhRY2x9bOKSmeAthmDOPl7734yJjpyGgXbPAZejG', 0, '', 'Alumni', 'default.jpg'),
('5f01faa0e24b9', '3', '$2y$10$tzxSSS2xz.Vhj.E962Z5GeOu8hGLWirP4er1XKwEBZ5a4oEFoJdCC', 0, '', 'Alumni', 'default.jpg'),
('5f01faf99afd3', '4', '$2y$10$0hF3lJfoH9hn3cyQFY6y8Ohg/6X/YWPm.MsYvJdUOhJY.iaOpNfUO', 0, '', 'Alumni', 'default.jpg'),
('5f01fb104fa86', '5', '$2y$10$QJLRPCHrbkox9YgKLJS2bO5avWu2g6NlPVs4MmxXl9qP1wol.YJpe', 0, '', 'Alumni', 'default.jpg'),
('5f01fb30584c6', '6', '$2y$10$oLXEH7APZ4aJCepzF2WXsuc5LHK354XwwZhiGThN8yfLYGvX8d7Ke', 0, '', 'Alumni', 'default.jpg'),
('5f01fb4857ddb', '7', '$2y$10$NSDSO/Dastm4CsI6e9QLv.zzKQOPtSRsdZoOzt4ASzlu4RWViUQ92', 0, '', 'Alumni', 'default.jpg'),
('5f01fb6473faa', '8', '$2y$10$q2TyGVqj8PVkUKHh5hYXS.hap.20zNSKGWdyUX.itPZ4oUgHEJknK', 0, '', 'Alumni', 'default.jpg'),
('5f01fb812a825', '9', '$2y$10$111O.LXh0zriUvzehpWsguxv6jIal1ZH7sbepEzij31xEiWdX/tnK', 0, '', 'Alumni', 'default.jpg'),
('5f01fbd2e4b6d', '10', '$2y$10$SpynAOmzvuYeNF4EkyaMa.wad8uUbHNUzNuDxhgY.uY5IULa626H6', 0, '', 'Alumni', 'default.jpg'),
('5f01fbfc3862b', '11', '$2y$10$Iwql.pKxDxYfDLPW7HxFDuqexgRlx.9kQk7lo3jbkLOVzCEiHoLkK', 0, '', 'Alumni', 'default.jpg'),
('5f01fc1de6afa', '12', '$2y$10$t3IMdpBZSROFMyzl39CQmuKN5R3QSCpUJji2qOjj4qI44d.ns2tFq', 0, '', 'Alumni', 'default.jpg'),
('5f01fc3af0acc', '13', '$2y$10$QA3eDnkPv4K8IxjCvfpv2u1ywzDDACFAfVzxyTcgRVhiW9XQG1nCa', 0, '', 'Alumni', 'default.jpg'),
('5f01fc5ebf772', '14', '$2y$10$sIdvf4SEGc5mqfUg8Cs/q.2EjARdk4AJkHT65fe347sb5XvaGjCm2', 0, '', 'Alumni', 'default.jpg'),
('5f01fc7d96baf', '15', '$2y$10$.Npuxgdtme2edSWqpKn8C.ikwUkaMHNIib29RQNsWixsavZ5jT2s2', 0, '', 'Alumni', 'default.jpg'),
('5f01fc998cf26', '16', '$2y$10$pgGrUx4tSxsSqtQ9YSI6xe7vzvha974ifJgS/bplRTZOMTna5y4ii', 0, '', 'Alumni', 'default.jpg'),
('5f01fe444f9aa', '17', '$2y$10$nFdl6CAr8rWcpqN6qeDFuO.4eSpaNv9pC8MS0SutoYPhcQSTXMSOi', 0, '', 'Alumni', 'default.jpg'),
('5f01fe684e078', '18', '$2y$10$MdpBNuZ1qjnoAyQgpzJLX.6aRl2Ccp3me7ZLN/3dQnGkWNG2oWH1S', 0, '', 'Alumni', 'default.jpg'),
('5f01fedb2a674', '19', '$2y$10$lYzvUDyOwjDzwlsy287W0uXqt3gVAJ5sV5NqFnsEcermjkHeyHISq', 0, '', 'Alumni', 'default.jpg'),
('5f01ff40acff5', '20', '$2y$10$fCWMFUzSIF6dbnkRUXMQq.1RT5KhGm6F2TGx7sr3oBl5vQ1zpcj3G', 0, '', 'Alumni', 'default.jpg'),
('5f01ff5d0c0f5', '21', '$2y$10$C3oEQcDENox2.PU99jA38uX80uzo35Pk55OGh23qkLpUgBwfvt.KC', 0, '', 'Alumni', 'default.jpg'),
('5f01ff7e8a55f', '22', '$2y$10$kXp7g1aWrc6HoP3XYuEphuwI.u8mZNyiblNFuTm272XLoImEfxcoe', 0, '', 'Alumni', 'default.jpg'),
('5f01ff99ebb3f', '23', '$2y$10$zmu4evU1pQByklUCs28nwuZkSqwx7oekzOKQ969jGQOc3d00eK/t2', 0, '', 'Alumni', 'default.jpg'),
('5f01ffb921db2', '24', '$2y$10$Q80CnL0alCM3nakahSDQ1Oyo6KzVXO8Kwdyej627vo2TLdVPC9tvy', 0, '', 'Alumni', 'default.jpg'),
('5f01ffd7c331c', '25', '$2y$10$hOJlzGTGmPoBnZXAvO.dF.TdTFal7PXbZmTYnRPKpnuKGuH0.EXhK', 0, '', 'Alumni', 'default.jpg'),
('5f0200072df55', '26', '$2y$10$2dUXcaBErOxqJxJk9p/4f.rLZz.LySwxbqAEFovc1tOWKyjReYrae', 0, '', 'Alumni', 'default.jpg'),
('5f04a4ede5962', '27', '$2y$10$AjZiU0zRXa9mbChZv.Rru.8nq/Ucc95cL1rybUarMGMmg1jm6GQ4O', 0, '', 'Alumni', 'default.jpg'),
('5f04a6346cf19', '28', '$2y$10$XijK1evZm4WXmqMV./UXCersaueBXUI0r0ibimyTO3bRz37Ga72DK', 0, '', 'Alumni', 'default.jpg'),
('5f04a9cde0236', '29', '$2y$10$5/jzcBNF16AvcSsR8T7uzOLYBzD3AiyQCynRlTMIf/1qkHP1cfZuy', 0, '', 'Alumni', 'default.jpg'),
('5f04aa0b2a605', '30', '$2y$10$WVmefNey9C17tivqAMfugOFpSZGMZTVek9OJ6q0dwIg4KUvJF38Ie', 0, '', 'Alumni', 'default.jpg'),
('5f0ea89d4b790', '2014142002', '$2y$10$6QE4de8E64ljFxYI0NfLIORlD3VYqGba7DUL/llPgW1zixdws4G4u', 0, '', 'Alumni', '5f0ea89d4b790.jpg'),
('5f0eac212fc17', '2012102019', '$2y$10$6xSDzxYzdSDwA4Gg90WbD.eMsAMyHNsIqYjny9YexxYV6f1yXEkkS', 0, '', 'Alumni', '5f0eac212fc17.jpg'),
('5f11bb568f55f', 'kemahasiswaan_ti', '$2y$10$r3hDJxcXMK7sdLMmLvAWQumMwo8FooDNCucaio09bLkePuFDAMrfO', 1, 'Tiara Eka Putri', 'Kemahasiswaan', 'default.jpg'),
('5f12adaf22e58', 'wkwk@gmail.com', '$2y$10$vcFawwxTydTw/E4hccdrpuvXB1Ot5/imvAVdnigsRn4HvN5Ul8JWi', 0, '', 'Stakeholder', 'default.jpg'),
('5f32a7ee14a8e', '2013112001', '$2y$10$cT7fqvc2cvE7IjjZh7rBie8kxTS5hVhxZVyPhm4h9XjeWglCkNh3O', 0, '', 'Alumni', '5f32a7ee14a8e.jpg'),
('5f32b1bca16e2', '2012102017', '$2y$10$QQ6MkPRL9IgdQcj7KKoaPuT6SMG4EuHQI1aUHA6yOYS/f8zCZhm/K', 0, '', 'Alumni', '5f32b1bca16e2.jpg'),
('5f32b27e4bffe', 'haha@gmail.com', '$2y$10$fQanHpxNJ0NVrJFw50Eca.3of1Dnpke9ERhGgKIgjrhsYwbCF6u7K', 0, '', 'Stakeholder', 'default.jpg'),
('5f32c0546f0ed', 'humamfumi46@gmail.com', '$2y$10$2ch1N.77tOvxI.EVYn6DWu7iynUruacemftaQTfHGvDjUep5gfgT2', 0, '', 'Stakeholder', 'default.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
