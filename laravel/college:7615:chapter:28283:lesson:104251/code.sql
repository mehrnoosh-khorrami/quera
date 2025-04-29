
--
-- Table structure for table `survey_forms`
--

CREATE TABLE `survey_forms` (
    `id` int(11) UNSIGNED NOT NULL,
    `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `survey_forms`
--

INSERT INTO `survey_forms` (`id`, `title`) VALUES
(1, 'نظرسنجی پرسان پرسان'),
(2, 'نظرسنجی شرکت X');

-- --------------------------------------------------------

--
-- Table structure for table `survey_form_questions`
--

CREATE TABLE `survey_form_questions` (
    `id` int(11) UNSIGNED NOT NULL,
    `form_id` int(11) NOT NULL,
    `question_text` varchar(255) NOT NULL,
    `question_order` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `survey_form_questions`
--

INSERT INTO `survey_form_questions` (`id`, `form_id`, `question_text`, `question_order`) VALUES
(1, 1, 'آیا از خدمات پرسان پرسان راضی هستید؟', 1),
(2, 1, 'چه‌قدر علاقه‌مندید تا پرسان پرسان را به دوستان خود معرفی کنید؟', 2),
(3, 2, 'نظر شما درباره‌ی شرکت X چیست؟', 1);

-- --------------------------------------------------------

--
-- Table structure for table `survey_form_submissions`
--

CREATE TABLE `survey_form_submissions` (
    `id` int(11) UNSIGNED NOT NULL,
    `question_id` int(11) NOT NULL,
    `user_id` int(11) NOT NULL,
    `data` longtext COLLATE utf16_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci;

--
-- Dumping data for table `survey_form_submissions`
--

INSERT INTO `survey_form_submissions` (`id`, `question_id`, `user_id`, `data`) VALUES
(1, 1, 1, 'بله'),
(2, 2, 1, 'زیاد'),
(3, 1, 2, 'خیر'),
(4, 2, 2, 'کم'),
(5, 3, 1, 'عالیه.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `survey_forms`
--
ALTER TABLE `survey_forms`
    ADD PRIMARY KEY (`id`);

--
-- Indexes for table `survey_form_questions`
--
ALTER TABLE `survey_form_questions`
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
    MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `survey_form_questions`
--
ALTER TABLE `survey_form_questions`
    MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `survey_form_submissions`
--
ALTER TABLE `survey_form_submissions`
    MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;