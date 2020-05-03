-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2020 at 12:17 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+08:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `baggao`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `content`, `created_at`, `updated_at`) VALUES
(1, 'Bagong website ng Baggao, ilulunsad na sa May 4, 2020.', 'Ang naturang website ay naglalayong makapagbigay ng mapagkakatiwalaang impormasyon, mga datos, at pampublikong rekord upang mas maging transparent ang kasalukuyang Administrasyon sa mamamayan.  ', '2020-05-01 10:50:26', NULL),
(2, 'No entry from Baggao', 'Tuguegarao City Mayor Jeff Soriano told yesterday that the city, meanwhile, wont allow the entry of anyone from Baggao.\r\n\r\nBecause of this, no travel passes will be issued from the Municipal Health Office of Baggao as of the moment.  ', '2020-05-02 09:12:04', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(4, '2020_05_01_111813_create_news_table', 1),
(5, '2020_05_01_135541_create_events_table', 1),
(6, '2020_05_01_140841_create_reports_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `like` int(11) DEFAULT NULL,
  `share` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `image`, `title`, `content`, `like`, `share`, `created_at`, `updated_at`) VALUES
(1, '12.jpg', 'Alokasyon ng 29M Bayanihan Fund, Isusumite Na Ng Alkalde Sa SBi', 'BAGGAO â€“ Pinulong ng alkalde ngayong araw, Abril 23, ang mga Department Heads ng munisipyo para sa agarang pagsumite ng alokasyon para sa Supplemental Annual Investment Program No. 01 CY 2020, o ang pondong ibinaba ng Pamahalaang Panlalawigan na nagkakahalaga ng PhP29, 953, 366.\r\n\r\nSa idinaos na miting, 18M ang inilaang pondo para sa karagdagang relief assistance na ibibigay sa mga taga-Baggao. Naglaan din ng pondo ang alkalde para sa mga hindi naisali sa Social Amelioration Program (SAP) ng DSWD.\r\n\r\nâ€œGusto kong malaman ng mga tao na malaking bahagi ng pondong ito ay ibibigay bilang relief para sa kanila,â€ ani Dunuan sa naturang pagpupulong.\r\n\r\nAng ibang bahagi ng alokasyon ay inilaan sa mga pangangailangang medikal, bitamina, PPE (Personal Protective Equipment), food assistance sa mga frontliners, swabbing booths, donning booths, collapsible tents at mga testing kits sakali mang kailanganin ang mga ito.\r\n\r\nAng pondong ito ay bahagi ng Bayanihan Fund na isinabatas matapos sumailalim sa pandemya ang buong mundo. Kailangang maisumite ang alokasyon sa madaling panahon.', NULL, NULL, '2020-05-01 06:41:22', NULL),
(2, '10.jpg', 'Baggao isa sa mga nalalabing bayan sa Cagayan na hindi pa nakakapagpamahagi ng Social Amelioration Program (SAP).', 'Magkagayunman, ginagawa ng Municipal Social Welfare Department Office ang pagsasapinal ng listahan upang masiguro na totoong kwalipikado ang mga makakatanggap ng ayuda mula sa gobierno nacional.\r\n\r\nLahat ng listahan na isinumite ng mga barangay ay kailangang beripikahin at i-validate ng mga kawani ng MSWD at nahahati sila sa 5 clusters. Nasa 13,819 Social Amelioration Cards ang kailangang iyimprenta.\r\n\r\nMagpapadala ng mensahe si MSWD Officer Lourdes Lazaro sa mga punong barangays kung kalian ang iskedyul ng pagbibigay ng ayuda.\r\n\r\nBatay na rin sa utos ng DSWD, kailangang ipaskil ang listahan ng mga barangay sa kanilang mga barangay halls upang malaman ng mga tao na tanging mga kwalipikado lamang ang nabigyan ng ayuda.\r\n\r\nNagpaalala rin ang DSWD na kakasuhan ang sinuman na hindi totoong kwalipikado.', NULL, NULL, '2020-05-01 06:44:20', NULL),
(3, '9.jpg', 'Registry System for Basic Sectors in Agriculture (RSBSA) ay makakatanggap ng ayuda mula sa departamento.', 'Lahat ng magsasaka na miyembro ng DA sa pamamagitan ng Registry System for Basic Sectors in Agriculture (RSBSA) ay makakatanggap ng ayuda mula sa departamento.\r\n\r\nAng ayuda na manggagaling sa DA ay para sa lahat ng naapektuhan ng Rice Tarrification Law. Makakatanggap ng 5K ang bawat miyembro na inumpisahang itala noon pang Nobyembre 2019.Ang RSBSA ay listahan ng lahat ng mga magsasaka at lahat ay inaanyayahan na maging miyembro ng naturang programa.\r\n\r\nKasama sa maaaring maging miyembro ang mga sumusunod: magsasaka ng mais, palay, mangingisda, manukan, at anuman na may kaugnayan sa agrikultura.\r\n\r\nMaaari ding maging miyembro ang mga farm laborers kahit na wala silang sariling mga sinasaka.Upang maging miyembro, kailangang isumite ang mga sumusunod:\r\n\r\n1. Proof of Ownership (Land Title, Certification, Stewardship Award o CLOA)\r\n\r\n2. Tax Declaration\r\n\r\n3. Valid IDs (Driverâ€™s License, Passport, etc.)\r\n\r\n4. 2x2 IDs na kinuha sa nakalipas na 6 na buwan\r\n\r\nAvailable ang form sa opisina ng DA\r\n\r\nPinapakisuyuhan naman ng DA Baggao ang lahat na siguruhing kumpleto ang mga dokumento upang tiyak na maisama sa listahan. Mape-pending ang anumang aplikasyon na kulang pa sa dokumento.', NULL, NULL, '2020-05-01 06:46:49', NULL),
(4, '8.jpg', 'CAGAYAN MAY BAGONG KASO NG COVID-19 POSITIVE', 'LALAKE, 60-YEARS OLD, RESIDENTE NG BRGY. REMUS, BAGGAO, WALANG TRAVEL HISTORY\r\n\r\nNAKA-CONFINE SA CVMC NAKARANAS NG PAG-UBO NOONG ABRIL-20 AT NAGPAKONSULTA NOONG ABRIL-23.\r\n\r\nUNANG NAGPAKONSULTA SA BAGGAO DISTRICT HOSPITAL.\r\n\r\nSource: CPIO', NULL, NULL, '2020-05-01 06:47:53', NULL),
(5, '7.jpg', 'TALLANG & REMUS will undergo 14-Day Enhance Community Quarantine', 'Isasailalim sa lockdown ang dalawang barangay ng Baggao - Tallang at Remus - na posibleng pinuntahan ng panibagong kumpirmadong COVID-19 case sa Cagayan.\r\n\r\nAng lockdown ay epektibo Abril 28, 2020, 12:01 ng madaling araw.\r\n\r\nAng mga lugar na nasa lockdown ay obligadong magsuot ng face masks kahit nasa bahay lang.', NULL, NULL, '2020-05-01 06:48:35', NULL),
(6, '6.jpg', 'Pagkalat ng COVID sa liblib na bayan pinangangambahan', 'Raymund Catindig (Pilipino Star Ngayon ) - April 29, 2020 - 12:00am\r\n\r\nMANILA, Philippines â€” Pinangangambahan ang pagkalat ng COVID-19 maging sa mga liblib na bayan sa pamamagitan ng community transmission matapos maitala ang ika-31 kaso nito sa Region 2 sa Baggao, Cagayan noong Lunes.\r\n\r\nNaka-confine ngayon sa Cagayan Valley Medical Center ang isang 60 anyos na tindero ng karne sa Barangay Remus. Pumayag isiwalat ni Warlito Mateo ang kanyang pagkakaÂ­kilanlan upang mapadali ang pagsasagawa ng contact tracing sa kanyang mga nakasalamuha.\r\n\r\nAyon kay CVMC head Dr. Glenn Mathew Baggao, maaaring nakuha ni Mateo ang virus sa isa sa mga nakakasalamuha at suki nito sa paglalako ng karne at hindi sa anak niyang overseas Filipino worker na nagbalik mula Taiwan noon pang Pebrero.\r\n\r\nAng Baggao ay nasa paanan ng kabundukan ng Sierra Madre at halos 30 kilometro ang layo nito papasok mula sa national highway. Isinailalim ng awtoridad sa lockdown ang Barangay Remus at Brgy. Tallang kung saan siya maraming suki sa karne ng baboy na umanoâ€™y siya rin ang kumakatay upang maibsan ang pagkalat ng COVID.', NULL, NULL, '2020-05-01 06:49:00', NULL),
(7, '5.jpg', 'Dr. Leticia Cabrera nilinaw na mayroon nang na-traced na 22 mula sa mga nakasalamuha ng COVID-19 positive sa Baggao', 'Ang 4 ay mga kasama niya sa bahay, 11 ay sa komunidad, at 7 ay mga healthworkers.\r\n\r\nAng 22 ay kasalukuyan na ngayong nasa quarantine facilities.', NULL, NULL, '2020-05-01 06:49:30', NULL),
(8, '4.jpg', 'Nakakuha na ng ayudang Social Amelioration Program (SAP) sa apat na lugar sa bayan ng Baggao.', 'Nangunguna dito ang baryo ng BUNUGAN, IBULO, TUNGEL at SANTOR.\r\n\r\nMahigit 539 katao din ang nabenepisyohan sa ara ng Abril 29, 2020.\r\n\r\nSusunod narin a mga iba pang barangay.', NULL, NULL, '2020-05-01 06:50:03', NULL),
(9, '3.jpg', 'BAGGAO â€“ Nakatanggap ang LGU Baggao ng donasyong', 'Nakatanggap ang LGU Baggao ng donasyong nagkakahalaga ng PhP450,000.00 mula sa Okada Foundation, Inc. Ang naturang donasyon ay idinaan sa opisina ng alkalde at naipadala bilang mga relief goods, Abril 27, 2020.\r\n\r\nAng donasyon ay nahahati sa mga sumusunod.\r\n\r\n1. 60 sacks / 3000 kilos ng bigas\r\n\r\n2. 2,000 pcs Birch Tree\r\n\r\n3. 1,000 packs Magic Flakes\r\n\r\n4. 6,000 pcs cup noodles\r\n\r\n5. 2,000 cans of Tuna\r\n\r\n6. 3,000 cans of Hunts pork and beans\r\n\r\nNais ipaabot ng bawat BaggaoeÃ±o ang kanilang pasasalamat.', NULL, NULL, '2020-05-01 06:50:46', NULL),
(10, '2.jpg', 'PALLAGAOâ€”Nagkaroon man ng maliliit na problema ukol sa ayudang galing sa gobierno nasional.', 'Tuloy pa rin ang pamimigay ng ayuda mula sa SAP sa mga residente ng Pallagao, Abril 30, 2020.\r\n\r\nInaasahan na 126 na mahihirap na pamilya sa Pallagao ang makatatanggap ng ayuda mula sa gobierno nasional.\r\n\r\nAyon sa pinakahuling sensus ng barangay, nasa mahigit 250 ang pamilya sa barangay.', NULL, NULL, '2020-05-01 06:51:14', NULL),
(11, '1.jpg', 'Barangay Imurung - Isang lolo nagsauli ng natanggap na ayuda mula sa SAP', 'Wika niya dahil sila ay pensioner na bilang isang Senior Citizen, isasauli nalang para maibigay na lng sa mas nangangailangang kababayan..\r\n\r\nGod bless po lolo.. mabuhay po kayo!', NULL, NULL, '2020-05-01 06:51:49', NULL),
(12, '13.jpg', 'Isang benepisyaryo ang nagsauli ng kanyang natanggap na ayuda', 'Barangay Nangalinan- isang benepisyaryo ang nagsauli nanaman ng kanyang natanggap na ayuda galing sa SAP. Siya ay may asawa at may isang anak, ngunit ang kanyang nanay ay nasa ibang bansa.\r\n\r\nWika niya, ang nanay niya ay biktima rin ng mahigpit na alituntunin ng epidemya at di makalabas para matulungan o mapadalhan sila simula pa nung pumutok ang epidemya, pero kaninang umaga pagkatpos makuha ang ayuda, tinawagan na siya ng kanyang nanay at pwede na silang mabigyan ng tulong.\r\n\r\nSa halip na gamitin ang pera ninais itong ibalik para ibahagi na lng sa mas nangangailangan. Maraming salamat din sa mga opisyales!\r\n\r\nWe heal as one...', NULL, NULL, '2020-05-02 09:10:05', NULL),
(13, '14.png', 'PALLAGAO, DALIN, C. VERSOZA, AGAMAN PROPER - Naibigay na ang kanilang mga ayuda', 'Nitong magkasunod na araw, Abril 30 at Mayo 1, naipamahagi na sa lahat ng benepisyaryo ng SAP ang ayudang mula sa national government. Sa kabila ng mainit na panahon, naging paborable naman ang kalagayan kasama ang mga MSWD staffs sa pangunguna ni Gng. Jennifer Sagun at mga iba pang staffs ng Treasury office kasama narin ang mga Marines at Pulisya na nag eskort sa pamimigay ng ayuda.\r\n\r\nPagdating pa lamang sa mga barangay na ito, makikita na ang pagiging okupado ng mga barangay officials upang gawing komportable ang mga kinatawan ng MSWD. Dalawa ang naatasan para sa beripikasyon at interbyu, habang dalawa naman ang naatasan para sa aktwal na pamimigay ng ayuda.\r\n\r\nMahihinuha ang pag-asa sa mga tumatanggap ng ayuda at ang ngiting nagpapakita ng taos puso nilang pasasalamat sa iniabot ng national government na tulong para sa kanila.\r\n\r\nHindi naman naiwasan ang mga reklamo pero maayos pa din naman itong pinakitunguhan ng mga MSWD staffs. Pasensya at pagpipigil sa sarili ang mabubuting katangian na mapupulot sa mga staffs na ito. Sa impormal na pakikipag-usap kay Gng. Jennifer Sagun, nabanggit niya na hindi naman nila hangad ang atensyon ng mga tao. Aniya, ginagawa lamang nila ang kanilang tungkulin sa bayan kahit na iba-iba ang reaksyon ng mga tao dito.\r\n\r\nNakakatuwa ding ibalita na may mga responsableng benepisyaryo. Isa sa mga nakatanggap sa Pallagao ang miyembro pala ng 4Ps, kaya naman, kinabukasan ay isinauli niya rin ito sa pamamagitan ng kanilang kapitan.\r\n\r\nSa Dalin, ibinili naman ng mag-asawang Limos ang kanilang ayuda sa mga pangunahing pangangailangan nila gaha ng bigas.\r\n\r\nSinisiguro din ng mga MSWD staff na ang mga beripikadong benepisyaryo ay makakatanggao ng ayuda. Halimbawa, isang benepisyaryo sa Pallagao ang sumama sa ospital dahil manganganak ang asawa. Dahil dito, nagkaroon ng espesyal na kaayusan para maibigay ito sa kanila.\r\n\r\nHigit lalo, marami sa ating mga kababayan ang nagpapasalamat sa biyayang kanilang natatanggap. Oo, marami ang may negatibong pananaw sa sistema, pero minabuti ng ilan na makisaya sa kanilang mga kapitbahay na may natanggap na tulong.\r\n\r\nMatagumpay din ang pamamahagi sa mga barangay ng C. Versoza at Agaman Proper.\r\n\r\nPara maidokumento ang pamimigay, dalawang ICT staff din ang sumama sa grupo.', NULL, NULL, '2020-05-02 09:11:04', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`id`, `title`, `content`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Baggao DRRMO at Quick Response Team para i-disinfect ang Baggao District Hospital                 ', 'https://www.facebook.com/baggaoinformationoffice/posts/130785798548223?__tn__=-R', 'photo2.jpg', '2020-05-01 06:59:09', NULL),
(2, 'Nagpaabot din ng tulong si BM AJ Ponce at Cong. Ramon Nolasco                 ', 'https://www.facebook.com/baggaoinformationoffice/posts/130940078532795?__tn__=-R', 'photo3.jpg', '2020-05-01 07:00:04', NULL),
(3, 'Nagtungo ang Baggao DRRMO at Quick Response Team sa Tallang Multipurpose Hall                 ', 'https://www.facebook.com/baggaoinformationoffice/posts/130957431864393?__tn__=-R', 'photo4.jpg', '2020-05-01 07:00:43', NULL),
(4, 'Nag-disinfect din ang Baggao DRRMO at Quick Response Team sa Pamilihang Bayan ng Baggao sa San Jose                 ', 'https://www.facebook.com/baggaoinformationoffice/posts/131058898520913?__tn__=-R', 'photo5.jpg', '2020-05-01 07:01:16', NULL),
(5, 'Kinailangan ding i-disinfect ang bahay nang nagpositibong pasyente sa Remus ng Baggao                 ', 'https://www.facebook.com/baggaoinformationoffice/posts/131060985187371?__tn__=-R', 'photo6.jpg', '2020-05-01 07:01:51', NULL),
(6, 'Namahagi ang Baggao Lionâ€™s Club ng libu-libong super food sa mga frontliners ng Baggao                 ', 'https://www.facebook.com/baggaoinformationoffice/posts/131249635168506?__tn__=-R', 'photo7.jpg', '2020-05-01 07:02:18', NULL),
(7, 'San Antonio - naipamigay na sa 88% na pamilya ang ayuda ng Social Amelioration Program                 ', 'https://www.facebook.com/baggaoinformationoffice/posts/131357688491034?__tn__=-R', 'photo8.jpg', '2020-05-01 07:02:44', NULL),
(8, 'Catugay - Naipamahagi narin sa 88 na pamilya mula sa kabuuang 89 ang ayuda                 ', 'https://www.facebook.com/baggaoinformationoffice/posts/131360185157451?__tn__=-R', 'photo9.jpg', '2020-05-01 07:03:09', NULL),
(9, 'Nag-abot ang KServico Baggao ng nasa 200 packs ng relief sa bayan ng Baggao                 ', 'https://www.facebook.com/baggaoinformationoffice/posts/131481785145291?__tn__=-R', 'photo11.jpg', '2020-05-01 07:03:35', NULL),
(10, 'San Isidro - 100% ng naibigay ang ayuda galing sa SAP                 ', 'https://www.facebook.com/baggaoinformationoffice/posts/131790908447712?__tn__=-R', 'photo112.jpg', '2020-05-01 07:04:02', NULL),
(11, 'Barsat East - Naipamigay na ang 96% na ayuda sa mga benepisyaryo                 ', 'https://www.facebook.com/baggaoinformationoffice/posts/131796581780478?__tn__=-R', 'photo13.jpg', '2020-05-01 07:04:27', NULL),
(12, 'Nangalinan - Siento Porsyento 100% ng naipamigay ang ayuda galing sa Social Amelioration Program                 ', 'https://www.facebook.com/baggaoinformationoffice/posts/132216271738509?__tn__=-R', '14.png', '2020-05-02 09:15:04', NULL),
(13, 'Barsat West - 95% na naibigay ang ayuda galing sa Social Amelioration Program o SAP.                 ', 'https://www.facebook.com/baggaoinformationoffice/posts/132225381737598?__tn__=-R', 'photo15.jpg', '2020-05-02 09:15:54', NULL),
(14, 'Taguing - naibigay na rin ang ayuda galing sa Social Amelioration Program o SAP ngyong araw.                 ', 'https://www.facebook.com/baggaoinformationoffice/posts/132238228402980?__tn__=-R', 'photo16.jpg', '2020-05-02 09:16:33', NULL),
(15, 'San Vicente - naipamahagi narin ang ayuda mula sa Social Amelioration Program o SAP ngyong araw.                 ', 'https://www.facebook.com/baggaoinformationoffice/posts/132240828402720?__tn__=-R', 'photo17.jpg', '2020-05-02 09:17:12', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
