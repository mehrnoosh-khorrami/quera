SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `posran_porsan`
--

-- --------------------------------------------------------

--
-- Table structure for table `survey_forms`
--

CREATE TABLE `survey_forms` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `question_texts` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `survey_forms`
--

INSERT INTO `survey_forms` (`id`, `title`, `question_texts`) VALUES
(1, 'نظرسنجی پرسان پرسان', '[\"آیا از خدمات پرسان پرسان راضی هستید؟\",\"چه‌قدر علاقه‌مندید تا پرسان پرسان را به دوستان خود معرفی کنید؟\"]'),
(2, 'نظرسنجی شرکت X', '[\"نظر شما درباره‌ی شرکت X چیست؟\"]');

-- --------------------------------------------------------

--
-- Table structure for table `survey_form_submissions`
--

CREATE TABLE `survey_form_submissions` (
  `id` int(11) NOT NULL,
  `form_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `data` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `survey_form_submissions`
--

INSERT INTO `survey_form_submissions` (`id`, `form_id`, `user_id`, `data`) VALUES
(1, 1, 1, '[\"بله\",\"زیاد\"]'),
(2, 1, 2, '[\"خیر\",\"کم\"]'),
(3, 2, 1, '[\"عالیه.\"]');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `survey_forms`
--
ALTER TABLE `survey_forms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `survey_form_submissions`
--
ALTER TABLE `survey_form_submissions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `survey_forms`
--
ALTER TABLE `survey_forms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `survey_form_submissions`
--
ALTER TABLE `survey_form_submissions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
