-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 16, 2023 at 01:14 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `newswebsite`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cat_id` varchar(255) NOT NULL,
  `blog_id` varchar(255) NOT NULL,
  `slug` text NOT NULL,
  `title` text NOT NULL,
  `main_pic` text NOT NULL,
  `short_des` varchar(255) NOT NULL,
  `blog_content` longtext NOT NULL,
  `status` varchar(30) DEFAULT 'saved',
  `tags` text DEFAULT NULL,
  `related` text NOT NULL,
  `popular` int(2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `cat_id`, `blog_id`, `slug`, `title`, `main_pic`, `short_des`, `blog_content`, `status`, `tags`, `related`, `popular`, `created_at`, `updated_at`) VALUES
(1, 'D619CC736A', '0EFC272289', 'testing', 'Zhang social media pop also known when smart', '196', 'On sait depuis longtemps que travailler avec du texte lisible et contenant du sens est source de distractions, et empêche de se concentrer sur la mise en page elle-même. L\'avantage du Lorem Ipsum sur un texte générique comme \'Du texte. Du texte. Du texte.', '&lt;p&gt;On sait depuis longtemps que travailler avec du texte lisible et contenant du sens est source de distractions, et emp&amp;ecirc;che de se concentrer sur la mise en page elle-m&amp;ecirc;me. L&amp;#39;avantage du Lorem Ipsum sur un texte g&amp;eacute;n&amp;eacute;rique comme &amp;#39;Du texte. Du texte. Du texte.&amp;#39; est qu&amp;#39;il poss&amp;egrave;de une distribution de lettres plus ou moins normale, et en tout cas comparable avec celle du fran&amp;ccedil;ais standard. De nombreuses suites logicielles de.&lt;/p&gt;\r\n\r\n&lt;p&gt;Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&amp;#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&lt;/p&gt;\r\n\r\n&lt;h3&gt;&lt;strong&gt;Sample Text Listing&lt;/strong&gt;&lt;/h3&gt;\r\n\r\n&lt;ul&gt;\r\n	&lt;li&gt;Donec et lacus mattis ipsum feugiat interdum non id sapien.&lt;/li&gt;\r\n	&lt;li&gt;Quisque et mauris eget nisi vestibulum rhoncus molestie a ante.&lt;/li&gt;\r\n	&lt;li&gt;Curabitur pulvinar ex at tempus sodales.&lt;/li&gt;\r\n	&lt;li&gt;Mauris efficitur magna quis lectus lobortis venenatis.&lt;/li&gt;\r\n	&lt;li&gt;Nunc id enim eget augue molestie lobortis in a purus.&lt;/li&gt;\r\n&lt;/ul&gt;\r\n\r\n&lt;h3&gt;&lt;strong&gt;Donec maximus quam at lectus bibendum, non suscipit nunc tristique.&lt;/strong&gt;&lt;/h3&gt;\r\n\r\n&lt;p&gt;The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &amp;quot;de Finibus Bonorum et Malorum&amp;quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.&lt;/p&gt;', 'published', '', '', 0, '2023-04-25 03:59:38', '2023-09-15 05:10:30'),
(2, 'D619CC736A', '2A4F4B0F45', 'testing-2', 'BEATUFIUL STORES ARE NOW EASY TO MADE!', '195', 'On sait depuis longtemps que travailler avec du texte lisible et contenant du sens est source de distractions, et empêche de se concentrer sur la mise en page elle-même. L\'avantage du Lorem Ipsum sur un texte générique comme \'Du texte. Du texte. Du texte.', '&lt;p&gt;On sait depuis longtemps que travailler avec du texte lisible et contenant du sens est source de distractions, et emp&amp;ecirc;che de se concentrer sur la mise en page elle-m&amp;ecirc;me. L&amp;#39;avantage du Lorem Ipsum sur un texte g&amp;eacute;n&amp;eacute;rique comme &amp;#39;Du texte. Du texte. Du texte.&amp;#39; est qu&amp;#39;il poss&amp;egrave;de une distribution de lettres plus ou moins normale, et en tout cas comparable avec celle du fran&amp;ccedil;ais standard. De nombreuses suites logicielles de.&lt;/p&gt;\r\n\r\n&lt;p&gt;Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&amp;#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&lt;/p&gt;\r\n\r\n&lt;h3&gt;Sample Text Listing&lt;/h3&gt;\r\n\r\n&lt;ul&gt;\r\n	&lt;li&gt;Donec et lacus mattis ipsum feugiat interdum non id sapien.&lt;/li&gt;\r\n	&lt;li&gt;Quisque et mauris eget nisi vestibulum rhoncus molestie a ante.&lt;/li&gt;\r\n	&lt;li&gt;Curabitur pulvinar ex at tempus sodales.&lt;/li&gt;\r\n	&lt;li&gt;Mauris efficitur magna quis lectus lobortis venenatis.&lt;/li&gt;\r\n	&lt;li&gt;Nunc id enim eget augue molestie lobortis in a purus.&lt;/li&gt;\r\n&lt;/ul&gt;\r\n\r\n&lt;h3&gt;Donec maximus quam at lectus bibendum, non suscipit nunc tristique.&lt;/h3&gt;\r\n\r\n&lt;p&gt;The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &amp;quot;de Finibus Bonorum et Malorum&amp;quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.&lt;/p&gt;', 'published', '[\"2\",\"1\"]', '', 0, '2023-06-08 06:18:58', '2023-09-16 03:17:54'),
(3, 'D619CC736A', '8630482E5D', 'testing-3', 'THE STANDARD CHUNK OF LOREM', '196', 'On sait depuis longtemps que travailler avec du texte lisible et contenant du sens est source de distractions, et empêche de se concentrer sur la mise en page elle-même. L\'avantage du Lorem Ipsum sur un texte générique comme \'Du texte. Du texte. Du texte.', '&lt;p&gt;On sait depuis longtemps que travailler avec du texte lisible et contenant du sens est source de distractions, et emp&amp;ecirc;che de se concentrer sur la mise en page elle-m&amp;ecirc;me. L&amp;#39;avantage du Lorem Ipsum sur un texte g&amp;eacute;n&amp;eacute;rique comme &amp;#39;Du texte. Du texte. Du texte.&amp;#39; est qu&amp;#39;il poss&amp;egrave;de une distribution de lettres plus ou moins normale, et en tout cas comparable avec celle du fran&amp;ccedil;ais standard. De nombreuses suites logicielles de.&lt;/p&gt;\r\n\r\n&lt;p&gt;Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&amp;#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&lt;/p&gt;\r\n\r\n&lt;h3&gt;Sample Text Listing&lt;/h3&gt;\r\n\r\n&lt;ul&gt;\r\n	&lt;li&gt;Donec et lacus mattis ipsum feugiat interdum non id sapien.&lt;/li&gt;\r\n	&lt;li&gt;Quisque et mauris eget nisi vestibulum rhoncus molestie a ante.&lt;/li&gt;\r\n	&lt;li&gt;Curabitur pulvinar ex at tempus sodales.&lt;/li&gt;\r\n	&lt;li&gt;Mauris efficitur magna quis lectus lobortis venenatis.&lt;/li&gt;\r\n	&lt;li&gt;Nunc id enim eget augue molestie lobortis in a purus.&lt;/li&gt;\r\n&lt;/ul&gt;\r\n\r\n&lt;h3&gt;Donec maximus quam at lectus bibendum, non suscipit nunc tristique.&lt;/h3&gt;\r\n\r\n&lt;p&gt;The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &amp;quot;de Finibus Bonorum et Malorum&amp;quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.&lt;/p&gt;', 'published', '[\"2\",\"1\"]', '[\"2\",\"5\",\"7\",\"8\",\"9\",\"6\",\"4\",\"3\"]', 0, '2023-06-08 06:19:46', '2023-09-16 03:46:20'),
(4, '36AA31DFC8', 'F5D2029829', 'testjlksdjfldsjfldsf', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit.', '195', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio laudantium molestiae corrupti necessitatibus assumenda amet est quo alias, voluptate ipsam.', '&lt;p&gt;Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat accusamus vel, nulla quod delectus quisquam quasi neque enim, possimus molestias nemo esse adipisci! Facere autem veniam dolore reprehenderit architecto molestiae natus, vitae cupiditate quam sed quae fuga repellat dolores corporis nemo optio libero maiores. Similique itaque obcaecati eveniet officiis illo, expedita veniam ab, maxime cupiditate optio, sequi beatae praesentium. Repudiandae expedita dolores qui, harum obcaecati, beatae praesentium illum placeat non accusantium quo veritatis rem. Amet placeat, ut eum eligendi nostrum excepturi, tenetur asperiores inventore perspiciatis aliquid facilis? Dicta placeat laborum expedita ducimus error officia doloremque quaerat autem molestias commodi natus magnam, repellendus ipsam aspernatur iure libero itaque totam. Officiis nihil provident odio ut fuga praesentium mollitia hic ad labore voluptas dolores tempora doloremque quaerat laborum aliquid alias, culpa, molestias omnis et dolor nobis sunt ipsam blanditiis. Eos quis modi, quia, placeat possimus aspernatur reiciendis libero nemo nobis impedit ad qui perspiciatis quaerat asperiores quasi rerum distinctio? Facilis minima eaque quam cumque hic ea assumenda ab voluptates perferendis beatae suscipit ipsum, optio accusantium praesentium doloremque maiores saepe qui vel eos. Corporis numquam illum ratione harum quas minus necessitatibus ullam facilis! Et eius repellat temporibus ad nostrum culpa voluptate consequuntur assumenda incidunt sit saepe alias, eaque perspiciatis voluptatum autem. Officiis laudantium doloribus tenetur ratione possimus harum aliquid, omnis dicta sunt nam voluptate natus fuga earum hic rerum perferendis voluptas reprehenderit excepturi totam explicabo aliquam maxime provident rem quaerat? Totam neque repellat quos modi, tenetur et odio tempore est veniam quisquam inventore repudiandae harum. Possimus, eum incidunt accusantium temporibus maiores aliquid at aliquam! Tempora porro est expedita. Nostrum obcaecati delectus voluptatum dolor sint natus, repellendus labore corporis necessitatibus fugit eaque voluptatibus ex vero. Minus assumenda repudiandae doloribus repellendus culpa, nihil, tenetur maxime dicta voluptatum ex, amet vel libero. Unde provident eligendi minus eos eum delectus et? Praesentium temporibus, illum veritatis quod laboriosam placeat ipsam incidunt quas alias quaerat fuga aspernatur. Voluptatibus beatae officia consectetur fuga molestias! Atque dolore dolorum aut veniam voluptas ut natus consequatur dolorem voluptatum eos nemo, ipsa inventore ab fugiat reprehenderit cumque odit aliquid, neque dolores! Cupiditate mollitia totam excepturi eaque ex magni rerum pariatur iste suscipit, aliquid molestias iure adipisci architecto laudantium doloribus, est sunt. Voluptatem inventore consequatur animi blanditiis quisquam placeat culpa rem recusandae ullam minima quod totam sapiente perferendis sequi, fuga maiores voluptatibus exercitationem itaque numquam mollitia deserunt quas quia. Numquam, expedita nobis id hic ratione, officia blanditiis dolorum amet voluptates quasi adipisci? Harum nam quas sapiente ullam incidunt? Nostrum iure sint quod accusamus architecto exercitationem possimus nulla sunt eveniet at molestiae quo harum cum amet pariatur dolorem repudiandae, ipsa quis sapiente, minus, praesentium necessitatibus. Unde, quibusdam minima accusamus rerum odit explicabo ea cum facere? Quo sapiente laborum delectus, voluptatum numquam saepe sed itaque modi, exercitationem libero voluptas excepturi doloremque obcaecati accusantium eius illo id, porro veniam harum totam! Illo accusamus ab sapiente sunt natus quia tempore, placeat blanditiis itaque, tempora animi, vitae cumque est qui modi similique recusandae quas dolore! Tempora minima aliquam blanditiis fugiat quis.&lt;/p&gt;', 'published', '[\"2\",\"1\"]', '[\"2\",\"5\",\"7\",\"8\",\"9\",\"6\",\"4\",\"3\"]', 0, '2023-09-15 23:50:25', '2023-09-16 03:45:48'),
(5, '36AA31DFC8', '662D753EF8', 'ewaetsdhgrS', 'Lorem ipsum dolor sit amet consectetur adipisicing.', '196', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore vero reprehenderit, error facilis aperiam maiores expedita est non dolorum repellendus!', '&lt;p&gt;Lorem ipsum dolor sit amet consectetur adipisicing elit. Et nobis doloribus error voluptatum magnam ipsa, rerum quas mollitia unde ipsam consectetur hic dicta, tempora sapiente, dolore perspiciatis corporis adipisci animi eveniet? Dolores sapiente eaque veritatis quo quas! Cupiditate dicta aliquam reiciendis sunt illo voluptates, sit nesciunt, delectus quae error facilis ipsum, placeat ipsa eaque? Consequuntur numquam voluptates ex laborum porro maxime odit doloremque expedita minus rem omnis eos, aperiam incidunt obcaecati maiores quisquam sint magni eveniet fugiat eaque hic officiis. Atque, necessitatibus impedit eligendi excepturi, quas sunt officiis ab fugiat perspiciatis suscipit reiciendis alias dolorum! Ipsum officia perspiciatis voluptates animi neque mollitia aliquam minus omnis excepturi, saepe veritatis fuga soluta alias quia adipisci qui. Fugiat sint minus, non quod dolores, corporis praesentium quasi, a vitae rem odio sed nulla odit ab molestiae? Voluptas, itaque, adipisci quod molestiae nobis, amet quaerat quae enim laudantium reiciendis incidunt sunt cum dolorum blanditiis quo atque quia molestias saepe fugit recusandae veniam unde! Ex alias earum beatae odit maxime ad rem! Accusamus ipsum quis culpa id odio iste assumenda iure qui et necessitatibus nesciunt obcaecati inventore dignissimos eos placeat fugit explicabo cum eum debitis autem tempore saepe, alias voluptatem totam. Doloribus, iure omnis porro eos quos placeat dolor ipsam magnam debitis. Autem, sit praesentium repellat magni, expedita non, quaerat nobis eligendi reiciendis adipisci ad porro. Consequuntur deserunt reiciendis praesentium a mollitia quo quaerat, ullam eaque quidem asperiores, nesciunt pariatur voluptate? Voluptate natus vitae quibusdam corporis quisquam esse, iure aliquam consectetur, quaerat obcaecati impedit eveniet soluta, saepe earum voluptates iste culpa deserunt repudiandae sequi dolorum? Magni voluptatem aut, quisquam animi veritatis itaque molestiae laboriosam sequi consectetur, deleniti praesentium! Laborum quae, sed commodi molestiae impedit nisi dolorum ipsam laudantium deserunt excepturi esse ullam repellat. Sint consectetur dolores libero! Voluptate porro libero, recusandae similique quas iste dicta illo blanditiis fugit a accusantium atque repellat saepe earum doloremque eligendi sapiente excepturi maiores sed consectetur delectus tempora fugiat quo? Reprehenderit exercitationem consectetur ipsam eligendi. Delectus, laborum necessitatibus, in ullam fugit iste vitae eos, expedita doloremque tenetur quidem! Unde nobis eveniet eaque, ea delectus aperiam totam expedita tempore, dolorum necessitatibus minima debitis sit a neque quia quibusdam cupiditate similique accusantium. Id itaque doloremque perferendis consequatur excepturi, laudantium vel modi ex impedit distinctio pariatur, deleniti magni omnis totam provident, voluptatem magnam eum facilis quo minima. Provident rerum, blanditiis optio expedita, ex iste dolore soluta pariatur eveniet consectetur ratione officiis qui numquam commodi magni voluptate rem enim tempore? Quisquam voluptate porro sequi maiores aspernatur nostrum, cum illo dignissimos unde, sunt corporis veritatis odio nihil vel incidunt eligendi architecto! Numquam quis porro nobis maiores consequuntur amet facere quam eligendi fugit laboriosam ex natus, id sequi illo quos nihil tenetur et aspernatur eum dolorem minus? Asperiores cupiditate a ratione iusto. Culpa fuga, nisi officia adipisci consequatur quaerat doloremque harum debitis! Nam quibusdam praesentium, commodi quam ducimus error accusamus magni tenetur aut nihil ut iusto itaque nemo ipsa id eum ullam ea possimus reprehenderit maxime cumque rerum neque accusantium? Sint, facere temporibus deleniti tenetur cupiditate quidem?&lt;/p&gt;', 'published', '[\"2\",\"1\"]', '[\"2\",\"5\",\"7\",\"8\",\"9\",\"6\",\"4\",\"3\",\"1\"]', 1, '2023-09-15 23:50:58', '2023-09-16 03:45:30'),
(6, '36AA31DFC8', '311578B826', 'hjhfdgsteryr', 'Lorem ipsum dolor sit, amet consectetur adipisicing.', '195', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam, voluptates perspiciatis alias ad quas vitae doloremque facilis repellat commodi similique.', '&lt;p&gt;Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quae nobis reiciendis commodi, tenetur corporis ipsam autem explicabo sapiente atque impedit, eos beatae quod veniam excepturi accusantium. Repudiandae, amet cupiditate rerum excepturi minus quam sunt necessitatibus nam molestias in voluptatum aut illum, adipisci quia veniam! Perspiciatis tenetur rerum id eveniet obcaecati corporis modi, magni laborum vitae ab quae unde! Recusandae repellendus fugit, maiores quam vel saepe illo sunt ullam dolorum error et quae, magni accusamus sit. Fugiat quibusdam, repudiandae cupiditate tempora sequi alias soluta. Quos iure non quod eveniet laborum esse, ab eligendi aspernatur ex sed quia excepturi. Quas voluptatem repellendus, suscipit itaque eaque enim, ducimus illo dolorum obcaecati nisi nam ex! Obcaecati quam omnis labore voluptatum minus. Sunt cum voluptatibus assumenda. Porro, tempora fugiat. Nesciunt, porro esse. Quidem officia quia atque at. Soluta placeat cum ullam ducimus voluptatem rem quo, saepe officia obcaecati voluptatum, odio accusantium sunt unde, ex hic quasi explicabo dolorem. Quidem blanditiis ex iusto eveniet nam autem architecto ducimus error explicabo reprehenderit. Debitis et placeat dolorem velit sed assumenda. Numquam hic neque omnis perspiciatis eum, officiis, sunt quibusdam impedit eveniet ipsum eligendi nesciunt optio rerum repudiandae dignissimos. In fugiat explicabo sit dolore beatae quia alias quae quisquam iusto dolor architecto nihil sapiente nisi non tempora, eveniet eum asperiores facilis distinctio corporis officia. Quaerat obcaecati facilis impedit doloremque a odit aliquam eum, iste voluptatem id, quod labore sint nam nulla, consectetur consequatur incidunt porro atque! Libero dolor ratione architecto maiores! Facilis reiciendis dolorum est atque ipsum maxime consequatur nisi, mollitia quod iusto omnis, a vero quia quis, repellendus quam unde voluptatem? Qui nesciunt quo voluptas et delectus natus quisquam recusandae placeat aspernatur consectetur iure vitae ducimus, quas, illum sequi distinctio eius nihil reprehenderit? Accusantium ipsam aspernatur magni quia placeat sit. Quasi libero quos soluta, non hic sapiente in iure eius dolorem? Nisi harum minus corrupti fugit nemo eum voluptatem aspernatur eius dolorum numquam, temporibus illum saepe aperiam, cum sed, vel qui blanditiis obcaecati dicta esse aut doloribus sunt. Soluta quasi nemo, suscipit laboriosam eveniet vitae corporis possimus magnam accusantium ullam neque mollitia. Officiis, aut delectus! Reiciendis eveniet ipsam doloribus modi earum eum eius consequuntur exercitationem optio deserunt nisi totam, necessitatibus recusandae, consectetur aliquam, placeat illo quia tempore. Dignissimos at unde dolore est cum eius. Blanditiis nobis quasi esse, tempora laborum eligendi nesciunt dicta, sit quae magnam ex rerum optio quo quidem culpa, molestias repellat eum aliquid. Dolore, velit, repellendus omnis officia veritatis, exercitationem amet temporibus ipsa nam quo voluptatum. Nihil, quis doloribus. Magni quis atque quas fuga qui reiciendis sit, ullam eveniet nemo sunt eum cupiditate sequi error ratione rerum debitis et praesentium iure mollitia obcaecati excepturi. Excepturi esse officia nostrum, voluptatem consectetur fugiat quisquam ex fugit quae totam corporis quis alias dolores qui animi nihil officiis sapiente eius iusto minima magnam vero tempore? Enim magnam nostrum velit deleniti illum, explicabo facilis minus consectetur aspernatur temporibus rerum commodi facere vero. Perferendis sed reiciendis possimus placeat facilis officia distinctio fugit. Accusamus ex earum laudantium eos placeat aspernatur cum officiis?&lt;/p&gt;', 'published', '[\"2\",\"1\"]', '[\"2\",\"5\",\"7\",\"8\",\"9\",\"6\",\"4\",\"3\",\"1\"]', 0, '2023-09-15 23:53:06', '2023-09-16 03:45:15'),
(7, '4E0844C3B7', 'E985330985', 'ggafwerteg', 'Lorem ipsum dolor sit amet consectetur.', '195', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corporis commodi eum, quam inventore sit dicta! Aliquam ab porro nostrum atque!', '&lt;p&gt;Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ea excepturi sint laudantium officia! Alias cum odit molestiae repellendus deserunt! Voluptatum asperiores officia sequi ea velit ab quis, accusamus exercitationem quaerat voluptate quia minima repellendus iusto obcaecati nisi quidem pariatur? Voluptates, porro corporis perferendis iusto nisi illo magnam praesentium dolore, dicta, quasi impedit nostrum dolorum fuga soluta hic dolores rerum? Nihil velit porro praesentium, fugiat sint impedit enim id vel laborum veritatis, omnis cupiditate quos nam quis laboriosam hic quia saepe dolore a eius totam illo consectetur inventore nisi! Earum tempore numquam possimus sit, quidem hic culpa officia at magnam ut laboriosam? Minima saepe eum debitis sapiente atque quam dolore fugit odit veniam? Aliquam, quis nesciunt voluptate neque harum commodi quam nostrum voluptatum. Excepturi blanditiis debitis quidem mollitia dicta aut, labore id perferendis saepe adipisci impedit, iste porro odit soluta dolorum sint, possimus voluptate magnam nemo quasi? Sunt fuga, nam dignissimos architecto porro aperiam saepe nihil ipsum, accusantium rerum aut assumenda voluptatem, similique praesentium neque libero exercitationem officiis error totam provident facilis ducimus placeat hic optio. Quasi voluptas, inventore nemo molestias quae, nam, sunt assumenda molestiae ratione minima veniam porro provident doloribus vero ab rem neque dolorem sint nostrum tenetur non explicabo! Optio molestiae iste perferendis, sequi porro sunt blanditiis saepe asperiores quasi cupiditate voluptatibus ut doloremque numquam ad quo eius. Ex quod earum animi dolorum quo pariatur labore harum sequi officia. Nobis dicta a pariatur similique dolorum nesciunt eaque sed laborum enim incidunt perferendis, numquam amet sequi architecto deserunt, vitae maxime voluptates? Esse vitae perspiciatis necessitatibus impedit iure, iusto reiciendis fuga assumenda ipsum tempora, incidunt ratione error modi eveniet cumque voluptatibus, provident labore. Velit tempora reprehenderit soluta consectetur repudiandae blanditiis alias vel odit perspiciatis adipisci sapiente atque officiis dolore, aliquid veritatis tempore in repellendus quae molestias excepturi. Non ipsum ullam, earum pariatur molestiae maiores in hic architecto molestias beatae minus animi nemo delectus perspiciatis debitis tempora neque cum sunt! Enim perferendis culpa quos voluptas blanditiis sed eum! Dolores temporibus iusto soluta tempore aliquid maxime quisquam magnam facilis iure aut impedit sapiente repellat molestiae minus illo vero fugiat, porro et odio labore. Molestias sequi minus debitis iusto saepe repellat, quae error quam deleniti officia vitae vel aliquid. Reiciendis expedita molestiae sunt culpa enim quae ducimus? Molestiae, exercitationem corrupti ducimus harum soluta nihil, accusantium provident, eaque eius quae porro eum! Architecto eveniet enim nostrum. Ullam, dignissimos alias? Aut quia sequi distinctio fugiat minima facere incidunt eveniet, eum dolore? At unde adipisci laborum animi sit vitae magnam esse voluptatem officia totam. Et eligendi ipsa dolor qui, laboriosam odio saepe, nulla eveniet consequuntur accusantium cupiditate, reprehenderit similique veniam! Quis suscipit, aliquid possimus iusto explicabo adipisci facilis cumque qui officia nesciunt animi consequatur tempore blanditiis quasi cum autem molestiae consequuntur? Fugiat tempora veniam magnam earum aliquam iste eaque, officiis distinctio nemo perferendis amet rem delectus! Dicta minima dignissimos suscipit quis illo laboriosam. Quibusdam omnis eaque exercitationem totam expedita neque accusantium, consequuntur itaque dolore illo in asperiores provident maxime necessitatibus dolorum labore nisi modi, quas aut?&lt;/p&gt;', 'published', '[\"2\",\"1\"]', '[\"2\",\"5\",\"7\",\"8\",\"9\",\"6\",\"4\",\"3\"]', 1, '2023-09-15 23:54:57', '2023-09-16 03:42:10'),
(8, '4E0844C3B7', 'B734CF0540', 'ikuhgfdwryh', 'Lorem ipsum dolor sit amet consectetur.', '195', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima voluptas voluptatum esse saepe quo rerum, amet praesentium quasi maiores quis.', '&lt;p&gt;Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam esse delectus sint beatae? Vero vitae nisi a ex natus, quod corrupti reprehenderit, at quis architecto alias cum rem possimus repellendus veritatis in unde nulla inventore. Voluptatibus error ex nobis tempore assumenda expedita! Ut repellendus quam dolores harum eius consequuntur magni?&lt;/p&gt;', 'published', '[\"2\",\"1\"]', '[\"2\",\"5\",\"7\",\"8\",\"9\",\"6\",\"4\",\"3\"]', 0, '2023-09-15 23:55:26', '2023-09-16 03:41:49'),
(9, '4E0844C3B7', '44AC15E5D8', 'ytkughghfgdfewr', 'Lorem ipsum dolor sit amet.', '196', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vero reiciendis rem veritatis voluptate voluptatibus asperiores illum illo incidunt nam? Perspiciatis?', '&lt;p&gt;Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vero reiciendis rem veritatis voluptate voluptatibus asperiores illum illo incidunt nam? Perspiciatis?&lt;/p&gt;', 'published', '[\"2\",\"1\"]', '[\"2\",\"5\",\"9\",\"6\",\"4\",\"3\",\"1\"]', 1, '2023-09-15 23:55:53', '2023-09-16 03:36:21');

-- --------------------------------------------------------

--
-- Table structure for table `blog_category`
--

CREATE TABLE `blog_category` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slug` text NOT NULL,
  `cat_id` varchar(255) NOT NULL,
  `cat_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_category`
--

INSERT INTO `blog_category` (`id`, `slug`, `cat_id`, `cat_name`, `created_at`, `updated_at`) VALUES
(1, 'fashion', 'D619CC736A', 'fashion', '2023-04-25 03:44:08', '2023-06-08 05:24:05'),
(2, 'stesdf', '36AA31DFC8', 'drink', '2023-09-15 06:09:21', '2023-09-15 06:09:21'),
(4, 'test', '4E0844C3B7', 'test', '2023-09-15 06:18:48', '2023-09-15 06:18:48'),
(5, 'fsdfsdf', 'D1C8ADA149', 'dsfdsf', '2023-09-15 06:39:23', '2023-09-15 06:39:23'),
(6, 'fgdfgfgas', '8273DB8E68', 'testuyotyjfgdg', '2023-09-15 06:39:33', '2023-09-15 06:39:33'),
(7, 'sfdsf', 'FD0175DC8E', 'uiflgh', '2023-09-15 06:39:38', '2023-09-15 06:39:38');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` int(11) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `city`, `state_id`) VALUES
(1, 'North and Middle Andaman', 32),
(2, 'South Andaman', 32),
(3, 'Nicobar', 32),
(4, 'Adilabad', 1),
(5, 'Anantapur', 1),
(6, 'Chittoor', 1),
(7, 'East Godavari', 1),
(8, 'Guntur', 1),
(9, 'Hyderabad', 1),
(10, 'Kadapa', 1),
(11, 'Karimnagar', 1),
(12, 'Khammam', 1),
(13, 'Krishna', 1),
(14, 'Kurnool', 1),
(15, 'Mahbubnagar', 1),
(16, 'Medak', 1),
(17, 'Nalgonda', 1),
(18, 'Nellore', 1),
(19, 'Nizamabad', 1),
(20, 'Prakasam', 1),
(21, 'Rangareddi', 1),
(22, 'Srikakulam', 1),
(23, 'Vishakhapatnam', 1),
(24, 'Vizianagaram', 1),
(25, 'Warangal', 1),
(26, 'West Godavari', 1),
(27, 'Anjaw', 3),
(28, 'Changlang', 3),
(29, 'East Kameng', 3),
(30, 'Lohit', 3),
(31, 'Lower Subansiri', 3),
(32, 'Papum Pare', 3),
(33, 'Tirap', 3),
(34, 'Dibang Valley', 3),
(35, 'Upper Subansiri', 3),
(36, 'West Kameng', 3),
(37, 'Barpeta', 2),
(38, 'Bongaigaon', 2),
(39, 'Cachar', 2),
(40, 'Darrang', 2),
(41, 'Dhemaji', 2),
(42, 'Dhubri', 2),
(43, 'Dibrugarh', 2),
(44, 'Goalpara', 2),
(45, 'Golaghat', 2),
(46, 'Hailakandi', 2),
(47, 'Jorhat', 2),
(48, 'Karbi Anglong', 2),
(49, 'Karimganj', 2),
(50, 'Kokrajhar', 2),
(51, 'Lakhimpur', 2),
(52, 'Marigaon', 2),
(53, 'Nagaon', 2),
(54, 'Nalbari', 2),
(55, 'North Cachar Hills', 2),
(56, 'Sibsagar', 2),
(57, 'Sonitpur', 2),
(58, 'Tinsukia', 2),
(59, 'Araria', 4),
(60, 'Aurangabad', 4),
(61, 'Banka', 4),
(62, 'Begusarai', 4),
(63, 'Bhagalpur', 4),
(64, 'Bhojpur', 4),
(65, 'Buxar', 4),
(66, 'Darbhanga', 4),
(67, 'Purba Champaran', 4),
(68, 'Gaya', 4),
(69, 'Gopalganj', 4),
(70, 'Jamui', 4),
(71, 'Jehanabad', 4),
(72, 'Khagaria', 4),
(73, 'Kishanganj', 4),
(74, 'Kaimur', 4),
(75, 'Katihar', 4),
(76, 'Lakhisarai', 4),
(77, 'Madhubani', 4),
(78, 'Munger', 4),
(79, 'Madhepura', 4),
(80, 'Muzaffarpur', 4),
(81, 'Nalanda', 4),
(82, 'Nawada', 4),
(83, 'Patna', 4),
(84, 'Purnia', 4),
(85, 'Rohtas', 4),
(86, 'Saharsa', 4),
(87, 'Samastipur', 4),
(88, 'Sheohar', 4),
(89, 'Sheikhpura', 4),
(90, 'Saran', 4),
(91, 'Sitamarhi', 4),
(92, 'Supaul', 4),
(93, 'Siwan', 4),
(94, 'Vaishali', 4),
(95, 'Pashchim Champaran', 4),
(96, 'Bastar', 36),
(97, 'Bilaspur', 36),
(98, 'Dantewada', 36),
(99, 'Dhamtari', 36),
(100, 'Durg', 36),
(101, 'Jashpur', 36),
(102, 'Janjgir-Champa', 36),
(103, 'Korba', 36),
(104, 'Koriya', 36),
(105, 'Kanker', 36),
(106, 'Kawardha', 36),
(107, 'Mahasamund', 36),
(108, 'Raigarh', 36),
(109, 'Rajnandgaon', 36),
(110, 'Raipur', 36),
(111, 'Surguja', 36),
(112, 'Diu', 29),
(113, 'Daman', 29),
(114, 'Central Delhi', 25),
(115, 'East Delhi', 25),
(116, 'New Delhi', 25),
(117, 'North Delhi', 25),
(118, 'North East Delhi', 25),
(119, 'North West Delhi', 25),
(120, 'South Delhi', 25),
(121, 'South West Delhi', 25),
(122, 'West Delhi', 25),
(123, 'North Goa', 26),
(124, 'South Goa', 26),
(125, 'Ahmedabad', 5),
(126, 'Amreli District', 5),
(127, 'Anand', 5),
(128, 'Banaskantha', 5),
(129, 'Bharuch', 5),
(130, 'Bhavnagar', 5),
(131, 'Dahod', 5),
(132, 'The Dangs', 5),
(133, 'Gandhinagar', 5),
(134, 'Jamnagar', 5),
(135, 'Junagadh', 5),
(136, 'Kutch', 5),
(137, 'Kheda', 5),
(138, 'Mehsana', 5),
(139, 'Narmada', 5),
(140, 'Navsari', 5),
(141, 'Patan', 5),
(142, 'Panchmahal', 5),
(143, 'Porbandar', 5),
(144, 'Rajkot', 5),
(145, 'Sabarkantha', 5),
(146, 'Surendranagar', 5),
(147, 'Surat', 5),
(148, 'Vadodara', 5),
(149, 'Valsad', 5),
(150, 'Ambala', 6),
(151, 'Bhiwani', 6),
(152, 'Faridabad', 6),
(153, 'Fatehabad', 6),
(154, 'Gurgaon', 6),
(155, 'Hissar', 6),
(156, 'Jhajjar', 6),
(157, 'Jind', 6),
(158, 'Karnal', 6),
(159, 'Kaithal', 6),
(160, 'Kurukshetra', 6),
(161, 'Mahendragarh', 6),
(162, 'Mewat', 6),
(163, 'Panchkula', 6),
(164, 'Panipat', 6),
(165, 'Rewari', 6),
(166, 'Rohtak', 6),
(167, 'Sirsa', 6),
(168, 'Sonepat', 6),
(169, 'Yamuna Nagar', 6),
(170, 'Palwal', 6),
(171, 'Bilaspur', 7),
(172, 'Chamba', 7),
(173, 'Hamirpur', 7),
(174, 'Kangra', 7),
(175, 'Kinnaur', 7),
(176, 'Kulu', 7),
(177, 'Lahaul and Spiti', 7),
(178, 'Mandi', 7),
(179, 'Shimla', 7),
(180, 'Sirmaur', 7),
(181, 'Solan', 7),
(182, 'Una', 7),
(183, 'Anantnag', 8),
(184, 'Badgam', 8),
(185, 'Bandipore', 8),
(186, 'Baramula', 8),
(187, 'Doda', 8),
(188, 'Jammu', 8),
(189, 'Kargil', 8),
(190, 'Kathua', 8),
(191, 'Kupwara', 8),
(192, 'Leh', 8),
(193, 'Poonch', 8),
(194, 'Pulwama', 8),
(195, 'Rajauri', 8),
(196, 'Srinagar', 8),
(197, 'Samba', 8),
(198, 'Udhampur', 8),
(199, 'Bokaro', 34),
(200, 'Chatra', 34),
(201, 'Deoghar', 34),
(202, 'Dhanbad', 34),
(203, 'Dumka', 34),
(204, 'Purba Singhbhum', 34),
(205, 'Garhwa', 34),
(206, 'Giridih', 34),
(207, 'Godda', 34),
(208, 'Gumla', 34),
(209, 'Hazaribagh', 34),
(210, 'Koderma', 34),
(211, 'Lohardaga', 34),
(212, 'Pakur', 34),
(213, 'Palamu', 34),
(214, 'Ranchi', 34),
(215, 'Sahibganj', 34),
(216, 'Seraikela and Kharsawan', 34),
(217, 'Pashchim Singhbhum', 34),
(218, 'Ramgarh', 34),
(219, 'Bidar', 9),
(220, 'Belgaum', 9),
(221, 'Bijapur', 9),
(222, 'Bagalkot', 9),
(223, 'Bellary', 9),
(224, 'Bangalore Rural District', 9),
(225, 'Bangalore Urban District', 9),
(226, 'Chamarajnagar', 9),
(227, 'Chikmagalur', 9),
(228, 'Chitradurga', 9),
(229, 'Davanagere', 9),
(230, 'Dharwad', 9),
(231, 'Dakshina Kannada', 9),
(232, 'Gadag', 9),
(233, 'Gulbarga', 9),
(234, 'Hassan', 9),
(235, 'Haveri District', 9),
(236, 'Kodagu', 9),
(237, 'Kolar', 9),
(238, 'Koppal', 9),
(239, 'Mandya', 9),
(240, 'Mysore', 9),
(241, 'Raichur', 9),
(242, 'Shimoga', 9),
(243, 'Tumkur', 9),
(244, 'Udupi', 9),
(245, 'Uttara Kannada', 9),
(246, 'Ramanagara', 9),
(247, 'Chikballapur', 9),
(248, 'Yadagiri', 9),
(249, 'Alappuzha', 10),
(250, 'Ernakulam', 10),
(251, 'Idukki', 10),
(252, 'Kollam', 10),
(253, 'Kannur', 10),
(254, 'Kasaragod', 10),
(255, 'Kottayam', 10),
(256, 'Kozhikode', 10),
(257, 'Malappuram', 10),
(258, 'Palakkad', 10),
(259, 'Pathanamthitta', 10),
(260, 'Thrissur', 10),
(261, 'Thiruvananthapuram', 10),
(262, 'Wayanad', 10),
(263, 'Alirajpur', 11),
(264, 'Anuppur', 11),
(265, 'Ashok Nagar', 11),
(266, 'Balaghat', 11),
(267, 'Barwani', 11),
(268, 'Betul', 11),
(269, 'Bhind', 11),
(270, 'Bhopal', 11),
(271, 'Burhanpur', 11),
(272, 'Chhatarpur', 11),
(273, 'Chhindwara', 11),
(274, 'Damoh', 11),
(275, 'Datia', 11),
(276, 'Dewas', 11),
(277, 'Dhar', 11),
(278, 'Dindori', 11),
(279, 'Guna', 11),
(280, 'Gwalior', 11),
(281, 'Harda', 11),
(282, 'Hoshangabad', 11),
(283, 'Indore', 11),
(284, 'Jabalpur', 11),
(285, 'Jhabua', 11),
(286, 'Katni', 11),
(287, 'Khandwa', 11),
(288, 'Khargone', 11),
(289, 'Mandla', 11),
(290, 'Mandsaur', 11),
(291, 'Morena', 11),
(292, 'Narsinghpur', 11),
(293, 'Neemuch', 11),
(294, 'Panna', 11),
(295, 'Rewa', 11),
(296, 'Rajgarh', 11),
(297, 'Ratlam', 11),
(298, 'Raisen', 11),
(299, 'Sagar', 11),
(300, 'Satna', 11),
(301, 'Sehore', 11),
(302, 'Seoni', 11),
(303, 'Shahdol', 11),
(304, 'Shajapur', 11),
(305, 'Sheopur', 11),
(306, 'Shivpuri', 11),
(307, 'Sidhi', 11),
(308, 'Singrauli', 11),
(309, 'Tikamgarh', 11),
(310, 'Ujjain', 11),
(311, 'Umaria', 11),
(312, 'Vidisha', 11),
(313, 'Ahmednagar', 12),
(314, 'Akola', 12),
(315, 'Amrawati', 12),
(316, 'Aurangabad', 12),
(317, 'Bhandara', 12),
(318, 'Beed', 12),
(319, 'Buldhana', 12),
(320, 'Chandrapur', 12),
(321, 'Dhule', 12),
(322, 'Gadchiroli', 12),
(323, 'Gondiya', 12),
(324, 'Hingoli', 12),
(325, 'Jalgaon', 12),
(326, 'Jalna', 12),
(327, 'Kolhapur', 12),
(328, 'Latur', 12),
(329, 'Mumbai City', 12),
(330, 'Mumbai suburban', 12),
(331, 'Nandurbar', 12),
(332, 'Nanded', 12),
(333, 'Nagpur', 12),
(334, 'Nashik', 12),
(335, 'Osmanabad', 12),
(336, 'Parbhani', 12),
(337, 'Pune', 12),
(338, 'Raigad', 12),
(339, 'Ratnagiri', 12),
(340, 'Sindhudurg', 12),
(341, 'Sangli', 12),
(342, 'Solapur', 12),
(343, 'Satara', 12),
(344, 'Thane', 12),
(345, 'Wardha', 12),
(346, 'Washim', 12),
(347, 'Yavatmal', 12),
(348, 'Bishnupur', 13),
(349, 'Churachandpur', 13),
(350, 'Chandel', 13),
(351, 'Imphal East', 13),
(352, 'Senapati', 13),
(353, 'Tamenglong', 13),
(354, 'Thoubal', 13),
(355, 'Ukhrul', 13),
(356, 'Imphal West', 13),
(357, 'East Garo Hills', 14),
(358, 'East Khasi Hills', 14),
(359, 'Jaintia Hills', 14),
(360, 'Ri-Bhoi', 14),
(361, 'South Garo Hills', 14),
(362, 'West Garo Hills', 14),
(363, 'West Khasi Hills', 14),
(364, 'Aizawl', 15),
(365, 'Champhai', 15),
(366, 'Kolasib', 15),
(367, 'Lawngtlai', 15),
(368, 'Lunglei', 15),
(369, 'Mamit', 15),
(370, 'Saiha', 15),
(371, 'Serchhip', 15),
(372, 'Dimapur', 16),
(373, 'Kohima', 16),
(374, 'Mokokchung', 16),
(375, 'Mon', 16),
(376, 'Phek', 16),
(377, 'Tuensang', 16),
(378, 'Wokha', 16),
(379, 'Zunheboto', 16),
(380, 'Angul', 17),
(381, 'Boudh', 17),
(382, 'Bhadrak', 17),
(383, 'Bolangir', 17),
(384, 'Bargarh', 17),
(385, 'Baleswar', 17),
(386, 'Cuttack', 17),
(387, 'Debagarh', 17),
(388, 'Dhenkanal', 17),
(389, 'Ganjam', 17),
(390, 'Gajapati', 17),
(391, 'Jharsuguda', 17),
(392, 'Jajapur', 17),
(393, 'Jagatsinghpur', 17),
(394, 'Khordha', 17),
(395, 'Kendujhar', 17),
(396, 'Kalahandi', 17),
(397, 'Kandhamal', 17),
(398, 'Koraput', 17),
(399, 'Kendrapara', 17),
(400, 'Malkangiri', 17),
(401, 'Mayurbhanj', 17),
(402, 'Nabarangpur', 17),
(403, 'Nuapada', 17),
(404, 'Nayagarh', 17),
(405, 'Puri', 17),
(406, 'Rayagada', 17),
(407, 'Sambalpur', 17),
(408, 'Subarnapur', 17),
(409, 'Sundargarh', 17),
(410, 'Karaikal', 27),
(411, 'Mahe', 27),
(412, 'Puducherry', 27),
(413, 'Yanam', 27),
(414, 'Amritsar', 18),
(415, 'Bathinda', 18),
(416, 'Firozpur', 18),
(417, 'Faridkot', 18),
(418, 'Fatehgarh Sahib', 18),
(419, 'Gurdaspur', 18),
(420, 'Hoshiarpur', 18),
(421, 'Jalandhar', 18),
(422, 'Kapurthala', 18),
(423, 'Ludhiana', 18),
(424, 'Mansa', 18),
(425, 'Moga', 18),
(426, 'Mukatsar', 18),
(427, 'Nawan Shehar', 18),
(428, 'Patiala', 18),
(429, 'Rupnagar', 18),
(430, 'Sangrur', 18),
(431, 'Ajmer', 19),
(432, 'Alwar', 19),
(433, 'Bikaner', 19),
(434, 'Barmer', 19),
(435, 'Banswara', 19),
(436, 'Bharatpur', 19),
(437, 'Baran', 19),
(438, 'Bundi', 19),
(439, 'Bhilwara', 19),
(440, 'Churu', 19),
(441, 'Chittorgarh', 19),
(442, 'Dausa', 19),
(443, 'Dholpur', 19),
(444, 'Dungapur', 19),
(445, 'Ganganagar', 19),
(446, 'Hanumangarh', 19),
(447, 'Juhnjhunun', 19),
(448, 'Jalore', 19),
(449, 'Jodhpur', 19),
(450, 'Jaipur', 19),
(451, 'Jaisalmer', 19),
(452, 'Jhalawar', 19),
(453, 'Karauli', 19),
(454, 'Kota', 19),
(455, 'Nagaur', 19),
(456, 'Pali', 19),
(457, 'Pratapgarh', 19),
(458, 'Rajsamand', 19),
(459, 'Sikar', 19),
(460, 'Sawai Madhopur', 19),
(461, 'Sirohi', 19),
(462, 'Tonk', 19),
(463, 'Udaipur', 19),
(464, 'East Sikkim', 20),
(465, 'North Sikkim', 20),
(466, 'South Sikkim', 20),
(467, 'West Sikkim', 20),
(468, 'Ariyalur', 21),
(469, 'Chennai', 21),
(470, 'Coimbatore', 21),
(471, 'Cuddalore', 21),
(472, 'Dharmapuri', 21),
(473, 'Dindigul', 21),
(474, 'Erode', 21),
(475, 'Kanchipuram', 21),
(476, 'Kanyakumari', 21),
(477, 'Karur', 21),
(478, 'Madurai', 21),
(479, 'Nagapattinam', 21),
(480, 'The Nilgiris', 21),
(481, 'Namakkal', 21),
(482, 'Perambalur', 21),
(483, 'Pudukkottai', 21),
(484, 'Ramanathapuram', 21),
(485, 'Salem', 21),
(486, 'Sivagangai', 21),
(487, 'Tiruppur', 21),
(488, 'Tiruchirappalli', 21),
(489, 'Theni', 21),
(490, 'Tirunelveli', 21),
(491, 'Thanjavur', 21),
(492, 'Thoothukudi', 21),
(493, 'Thiruvallur', 21),
(494, 'Thiruvarur', 21),
(495, 'Tiruvannamalai', 21),
(496, 'Vellore', 21),
(497, 'Villupuram', 21),
(498, 'Dhalai', 22),
(499, 'North Tripura', 22),
(500, 'South Tripura', 22),
(501, 'West Tripura', 22),
(502, 'Almora', 33),
(503, 'Bageshwar', 33),
(504, 'Chamoli', 33),
(505, 'Champawat', 33),
(506, 'Dehradun', 33),
(507, 'Haridwar', 33),
(508, 'Nainital', 33),
(509, 'Pauri Garhwal', 33),
(510, 'Pithoragharh', 33),
(511, 'Rudraprayag', 33),
(512, 'Tehri Garhwal', 33),
(513, 'Udham Singh Nagar', 33),
(514, 'Uttarkashi', 33),
(515, 'Agra', 23),
(516, 'Allahabad', 23),
(517, 'Aligarh', 23),
(518, 'Ambedkar Nagar', 23),
(519, 'Auraiya', 23),
(520, 'Azamgarh', 23),
(521, 'Barabanki', 23),
(522, 'Badaun', 23),
(523, 'Bagpat', 23),
(524, 'Bahraich', 23),
(525, 'Bijnor', 23),
(526, 'Ballia', 23),
(527, 'Banda', 23),
(528, 'Balrampur', 23),
(529, 'Bareilly', 23),
(530, 'Basti', 23),
(531, 'Bulandshahr', 23),
(532, 'Chandauli', 23),
(533, 'Chitrakoot', 23),
(534, 'Deoria', 23),
(535, 'Etah', 23),
(536, 'Kanshiram Nagar', 23),
(537, 'Etawah', 23),
(538, 'Firozabad', 23),
(539, 'Farrukhabad', 23),
(540, 'Fatehpur', 23),
(541, 'Faizabad', 23),
(542, 'Gautam Buddha Nagar', 23),
(543, 'Gonda', 23),
(544, 'Ghazipur', 23),
(545, 'Gorkakhpur', 23),
(546, 'Ghaziabad', 23),
(547, 'Hamirpur', 23),
(548, 'Hardoi', 23),
(549, 'Mahamaya Nagar', 23),
(550, 'Jhansi', 23),
(551, 'Jalaun', 23),
(552, 'Jyotiba Phule Nagar', 23),
(553, 'Jaunpur District', 23),
(554, 'Kanpur Dehat', 23),
(555, 'Kannauj', 23),
(556, 'Kanpur Nagar', 23),
(557, 'Kaushambi', 23),
(558, 'Kushinagar', 23),
(559, 'Lalitpur', 23),
(560, 'Lakhimpur Kheri', 23),
(561, 'Lucknow', 23),
(562, 'Mau', 23),
(563, 'Meerut', 23),
(564, 'Maharajganj', 23),
(565, 'Mahoba', 23),
(566, 'Mirzapur', 23),
(567, 'Moradabad', 23),
(568, 'Mainpuri', 23),
(569, 'Mathura', 23),
(570, 'Muzaffarnagar', 23),
(571, 'Pilibhit', 23),
(572, 'Pratapgarh', 23),
(573, 'Rampur', 23),
(574, 'Rae Bareli', 23),
(575, 'Saharanpur', 23),
(576, 'Sitapur', 23),
(577, 'Shahjahanpur', 23),
(578, 'Sant Kabir Nagar', 23),
(579, 'Siddharthnagar', 23),
(580, 'Sonbhadra', 23),
(581, 'Sant Ravidas Nagar', 23),
(582, 'Sultanpur', 23),
(583, 'Shravasti', 23),
(584, 'Unnao', 23),
(585, 'Varanasi', 23),
(586, 'Birbhum', 24),
(587, 'Bankura', 24),
(588, 'Bardhaman', 24),
(589, 'Darjeeling', 24),
(590, 'Dakshin Dinajpur', 24),
(591, 'Hooghly', 24),
(592, 'Howrah', 24),
(593, 'Jalpaiguri', 24),
(594, 'Cooch Behar', 24),
(595, 'Kolkata', 24),
(596, 'Malda', 24),
(597, 'Midnapore', 24),
(598, 'Murshidabad', 24),
(599, 'Nadia', 24),
(600, 'North 24 Parganas', 24),
(601, 'South 24 Parganas', 24),
(602, 'Purulia', 24),
(603, 'Uttar Dinajpur', 24);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `blog_id` varchar(30) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` text NOT NULL,
  `comment` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `blog_id`, `full_name`, `email`, `comment`, `status`, `created_at`, `updated_at`) VALUES
(1, '0EFC272289', 'Vaibhav Goswami', 'testing@gmail.com', 'fdfdsfs', 1, '2023-04-26 23:47:26', '2023-09-16 04:48:10'),
(2, '0EFC272289', 'Vaibhav Goswami', 'goswamivaibhav72@gmail.com', 'sdfdsf', 0, '2023-04-26 23:58:15', '2023-04-26 23:58:15'),
(3, '0EFC272289', 'Vaibhav Goswami', 'goswamivaibhav72@gmail.com', 'dsfdsf', 1, '2023-04-26 23:59:04', '2023-09-16 04:48:05'),
(4, '0EFC272289', 'Vaibhav Goswami', 'testing@gmail.com', 'dfsdf', 1, '2023-04-27 00:00:33', '2023-04-27 00:32:53'),
(5, '0EFC272289', 'Vaibhav Goswami', 'test@gmail.com', 'sdfdsf', 1, '2023-04-27 00:06:18', '2023-09-16 04:48:01'),
(6, '0EFC272289', 'dfsdf', 'digi@gmail.com', 'dfsf', 1, '2023-04-27 00:06:52', '2023-04-27 00:32:48'),
(8, '0EFC272289', 'Vaibhav Goswami', 'testing@gmail.com', 'fdsf', 1, '2023-04-27 00:08:03', '2023-04-27 00:18:09'),
(10, '2A4F4B0F45', 'sdfdsf', 'goswamivaibhav72@gmail.com', 'sdfsdf', 1, '2023-06-08 06:28:48', '2023-06-08 06:29:05'),
(11, '2', 'Digicrowd', 'goswamivaibhav72@gmail.com', 'sfdsf', 1, '2023-09-16 04:46:43', '2023-09-16 04:47:56');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `msg` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `phone`, `subject`, `msg`, `created_at`, `updated_at`) VALUES
(1, 'Vaibhav Goswami', 'testing@gmail.com', '324354', 'ldjfklsj', 'sdfsdf', '2023-04-27 02:10:55', '2023-04-27 02:10:55'),
(2, 'Digicrowd', 'digi@gmail.com', '324354', 'test', 'sdfdsf', '2023-06-01 00:45:12', '2023-06-01 00:45:12'),
(3, 'Digicrowd', 'testing@gmail.com', '324354', 'Testing', 'sdfsdf', '2023-06-01 00:47:15', '2023-06-01 00:47:15'),
(4, 'Digicrowd', 'digi@gmail.com', '7518445857', 'Testing', 'dfsf', '2023-07-04 03:17:59', '2023-07-04 03:17:59');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(5) NOT NULL,
  `countryCode` char(2) NOT NULL DEFAULT '',
  `name` varchar(45) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `countryCode`, `name`) VALUES
(1, 'AD', 'Andorra'),
(2, 'AE', 'United Arab Emirates'),
(3, 'AF', 'Afghanistan'),
(4, 'AG', 'Antigua and Barbuda'),
(5, 'AI', 'Anguilla'),
(6, 'AL', 'Albania'),
(7, 'AM', 'Armenia'),
(8, 'AO', 'Angola'),
(9, 'AQ', 'Antarctica'),
(10, 'AR', 'Argentina'),
(11, 'AS', 'American Samoa'),
(12, 'AT', 'Austria'),
(13, 'AU', 'Australia'),
(14, 'AW', 'Aruba'),
(15, 'AX', 'Åland'),
(16, 'AZ', 'Azerbaijan'),
(17, 'BA', 'Bosnia and Herzegovina'),
(18, 'BB', 'Barbados'),
(19, 'BD', 'Bangladesh'),
(20, 'BE', 'Belgium'),
(21, 'BF', 'Burkina Faso'),
(22, 'BG', 'Bulgaria'),
(23, 'BH', 'Bahrain'),
(24, 'BI', 'Burundi'),
(25, 'BJ', 'Benin'),
(26, 'BL', 'Saint Barthélemy'),
(27, 'BM', 'Bermuda'),
(28, 'BN', 'Brunei'),
(29, 'BO', 'Bolivia'),
(30, 'BQ', 'Bonaire'),
(31, 'BR', 'Brazil'),
(32, 'BS', 'Bahamas'),
(33, 'BT', 'Bhutan'),
(34, 'BV', 'Bouvet Island'),
(35, 'BW', 'Botswana'),
(36, 'BY', 'Belarus'),
(37, 'BZ', 'Belize'),
(38, 'CA', 'Canada'),
(39, 'CC', 'Cocos [Keeling] Islands'),
(40, 'CD', 'Democratic Republic of the Congo'),
(41, 'CF', 'Central African Republic'),
(42, 'CG', 'Republic of the Congo'),
(43, 'CH', 'Switzerland'),
(44, 'CI', 'Ivory Coast'),
(45, 'CK', 'Cook Islands'),
(46, 'CL', 'Chile'),
(47, 'CM', 'Cameroon'),
(48, 'CN', 'China'),
(49, 'CO', 'Colombia'),
(50, 'CR', 'Costa Rica'),
(51, 'CU', 'Cuba'),
(52, 'CV', 'Cape Verde'),
(53, 'CW', 'Curacao'),
(54, 'CX', 'Christmas Island'),
(55, 'CY', 'Cyprus'),
(56, 'CZ', 'Czech Republic'),
(57, 'DE', 'Germany'),
(58, 'DJ', 'Djibouti'),
(59, 'DK', 'Denmark'),
(60, 'DM', 'Dominica'),
(61, 'DO', 'Dominican Republic'),
(62, 'DZ', 'Algeria'),
(63, 'EC', 'Ecuador'),
(64, 'EE', 'Estonia'),
(65, 'EG', 'Egypt'),
(66, 'EH', 'Western Sahara'),
(67, 'ER', 'Eritrea'),
(68, 'ES', 'Spain'),
(69, 'ET', 'Ethiopia'),
(70, 'FI', 'Finland'),
(71, 'FJ', 'Fiji'),
(72, 'FK', 'Falkland Islands'),
(73, 'FM', 'Micronesia'),
(74, 'FO', 'Faroe Islands'),
(75, 'FR', 'France'),
(76, 'GA', 'Gabon'),
(77, 'GB', 'United Kingdom'),
(78, 'GD', 'Grenada'),
(79, 'GE', 'Georgia'),
(80, 'GF', 'French Guiana'),
(81, 'GG', 'Guernsey'),
(82, 'GH', 'Ghana'),
(83, 'GI', 'Gibraltar'),
(84, 'GL', 'Greenland'),
(85, 'GM', 'Gambia'),
(86, 'GN', 'Guinea'),
(87, 'GP', 'Guadeloupe'),
(88, 'GQ', 'Equatorial Guinea'),
(89, 'GR', 'Greece'),
(90, 'GS', 'South Georgia and the South Sandwich Islands'),
(91, 'GT', 'Guatemala'),
(92, 'GU', 'Guam'),
(93, 'GW', 'Guinea-Bissau'),
(94, 'GY', 'Guyana'),
(95, 'HK', 'Hong Kong'),
(96, 'HM', 'Heard Island and McDonald Islands'),
(97, 'HN', 'Honduras'),
(98, 'HR', 'Croatia'),
(99, 'HT', 'Haiti'),
(100, 'HU', 'Hungary'),
(101, 'ID', 'Indonesia'),
(102, 'IE', 'Ireland'),
(103, 'IL', 'Israel'),
(104, 'IM', 'Isle of Man'),
(105, 'IN', 'India'),
(106, 'IO', 'British Indian Ocean Territory'),
(107, 'IQ', 'Iraq'),
(108, 'IR', 'Iran'),
(109, 'IS', 'Iceland'),
(110, 'IT', 'Italy'),
(111, 'JE', 'Jersey'),
(112, 'JM', 'Jamaica'),
(113, 'JO', 'Jordan'),
(114, 'JP', 'Japan'),
(115, 'KE', 'Kenya'),
(116, 'KG', 'Kyrgyzstan'),
(117, 'KH', 'Cambodia'),
(118, 'KI', 'Kiribati'),
(119, 'KM', 'Comoros'),
(120, 'KN', 'Saint Kitts and Nevis'),
(121, 'KP', 'North Korea'),
(122, 'KR', 'South Korea'),
(123, 'KW', 'Kuwait'),
(124, 'KY', 'Cayman Islands'),
(125, 'KZ', 'Kazakhstan'),
(126, 'LA', 'Laos'),
(127, 'LB', 'Lebanon'),
(128, 'LC', 'Saint Lucia'),
(129, 'LI', 'Liechtenstein'),
(130, 'LK', 'Sri Lanka'),
(131, 'LR', 'Liberia'),
(132, 'LS', 'Lesotho'),
(133, 'LT', 'Lithuania'),
(134, 'LU', 'Luxembourg'),
(135, 'LV', 'Latvia'),
(136, 'LY', 'Libya'),
(137, 'MA', 'Morocco'),
(138, 'MC', 'Monaco'),
(139, 'MD', 'Moldova'),
(140, 'ME', 'Montenegro'),
(141, 'MF', 'Saint Martin'),
(142, 'MG', 'Madagascar'),
(143, 'MH', 'Marshall Islands'),
(144, 'MK', 'Macedonia'),
(145, 'ML', 'Mali'),
(146, 'MM', 'Myanmar [Burma]'),
(147, 'MN', 'Mongolia'),
(148, 'MO', 'Macao'),
(149, 'MP', 'Northern Mariana Islands'),
(150, 'MQ', 'Martinique'),
(151, 'MR', 'Mauritania'),
(152, 'MS', 'Montserrat'),
(153, 'MT', 'Malta'),
(154, 'MU', 'Mauritius'),
(155, 'MV', 'Maldives'),
(156, 'MW', 'Malawi'),
(157, 'MX', 'Mexico'),
(158, 'MY', 'Malaysia'),
(159, 'MZ', 'Mozambique'),
(160, 'NA', 'Namibia'),
(161, 'NC', 'New Caledonia'),
(162, 'NE', 'Niger'),
(163, 'NF', 'Norfolk Island'),
(164, 'NG', 'Nigeria'),
(165, 'NI', 'Nicaragua'),
(166, 'NL', 'Netherlands'),
(167, 'NO', 'Norway'),
(168, 'NP', 'Nepal'),
(169, 'NR', 'Nauru'),
(170, 'NU', 'Niue'),
(171, 'NZ', 'New Zealand'),
(172, 'OM', 'Oman'),
(173, 'PA', 'Panama'),
(174, 'PE', 'Peru'),
(175, 'PF', 'French Polynesia'),
(176, 'PG', 'Papua New Guinea'),
(177, 'PH', 'Philippines'),
(178, 'PK', 'Pakistan'),
(179, 'PL', 'Poland'),
(180, 'PM', 'Saint Pierre and Miquelon'),
(181, 'PN', 'Pitcairn Islands'),
(182, 'PR', 'Puerto Rico'),
(183, 'PS', 'Palestine'),
(184, 'PT', 'Portugal'),
(185, 'PW', 'Palau'),
(186, 'PY', 'Paraguay'),
(187, 'QA', 'Qatar'),
(188, 'RE', 'Réunion'),
(189, 'RO', 'Romania'),
(190, 'RS', 'Serbia'),
(191, 'RU', 'Russia'),
(192, 'RW', 'Rwanda'),
(193, 'SA', 'Saudi Arabia'),
(194, 'SB', 'Solomon Islands'),
(195, 'SC', 'Seychelles'),
(196, 'SD', 'Sudan'),
(197, 'SE', 'Sweden'),
(198, 'SG', 'Singapore'),
(199, 'SH', 'Saint Helena'),
(200, 'SI', 'Slovenia'),
(201, 'SJ', 'Svalbard and Jan Mayen'),
(202, 'SK', 'Slovakia'),
(203, 'SL', 'Sierra Leone'),
(204, 'SM', 'San Marino'),
(205, 'SN', 'Senegal'),
(206, 'SO', 'Somalia'),
(207, 'SR', 'Suriname'),
(208, 'SS', 'South Sudan'),
(209, 'ST', 'São Tomé and Príncipe'),
(210, 'SV', 'El Salvador'),
(211, 'SX', 'Sint Maarten'),
(212, 'SY', 'Syria'),
(213, 'SZ', 'Swaziland'),
(214, 'TC', 'Turks and Caicos Islands'),
(215, 'TD', 'Chad'),
(216, 'TF', 'French Southern Territories'),
(217, 'TG', 'Togo'),
(218, 'TH', 'Thailand'),
(219, 'TJ', 'Tajikistan'),
(220, 'TK', 'Tokelau'),
(221, 'TL', 'East Timor'),
(222, 'TM', 'Turkmenistan'),
(223, 'TN', 'Tunisia'),
(224, 'TO', 'Tonga'),
(225, 'TR', 'Turkey'),
(226, 'TT', 'Trinidad and Tobago'),
(227, 'TV', 'Tuvalu'),
(228, 'TW', 'Taiwan'),
(229, 'TZ', 'Tanzania'),
(230, 'UA', 'Ukraine'),
(231, 'UG', 'Uganda'),
(232, 'UM', 'U.S. Minor Outlying Islands'),
(233, 'US', 'United States'),
(234, 'UY', 'Uruguay'),
(235, 'UZ', 'Uzbekistan'),
(236, 'VA', 'Vatican City'),
(237, 'VC', 'Saint Vincent and the Grenadines'),
(238, 'VE', 'Venezuela'),
(239, 'VG', 'British Virgin Islands'),
(240, 'VI', 'U.S. Virgin Islands'),
(241, 'VN', 'Vietnam'),
(242, 'VU', 'Vanuatu'),
(243, 'WF', 'Wallis and Futuna'),
(244, 'WS', 'Samoa'),
(245, 'XK', 'Kosovo'),
(246, 'YE', 'Yemen'),
(247, 'YT', 'Mayotte'),
(248, 'ZA', 'South Africa'),
(249, 'ZM', 'Zambia'),
(250, 'ZW', 'Zimbabwe');

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `section` varchar(255) NOT NULL,
  `section_name` varchar(255) NOT NULL,
  `data` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`id`, `section`, `section_name`, `data`, `created_at`, `updated_at`) VALUES
(2, 'section-2', '3 Category', '{\"_token\":\"KTUbq45vEZSucxxyhKrFBHaVfALl7fTdg7i4TDUB\",\"section\":\"section-2\",\"section_name\":\"3 Category\",\"category1\":\"1\",\"category2\":\"2\",\"category3\":\"4\"}', '2023-09-15 06:09:39', '2023-09-15 06:19:01'),
(4, 'section-3', '3 Blog Section', '{\"_token\":\"KTUbq45vEZSucxxyhKrFBHaVfALl7fTdg7i4TDUB\",\"section\":\"section-3\",\"section_name\":\"3 Blog Section\",\"blog1\":\"2\",\"blog2\":\"3\",\"blog3\":\"1\"}', '2023-09-15 06:19:08', '2023-09-15 06:19:08'),
(5, 'section-4', 'More blogs', '{\"_token\":\"KTUbq45vEZSucxxyhKrFBHaVfALl7fTdg7i4TDUB\",\"section\":\"section-4\",\"section_name\":\"More blogs\",\"blogCheckbox\":[\"2\",\"5\",\"7\",\"8\",\"9\",\"6\",\"4\",\"3\",\"1\"]}', '2023-09-15 06:22:55', '2023-09-16 01:00:43'),
(6, 'section-5', 'More blogs', '{\"_token\":\"KTUbq45vEZSucxxyhKrFBHaVfALl7fTdg7i4TDUB\",\"section\":\"section-5\",\"section_name\":\"More blogs\",\"blogCheckbox\":[\"2\",\"5\",\"7\",\"8\",\"9\",\"6\",\"4\"]}', '2023-09-15 06:31:27', '2023-09-16 04:00:36'),
(7, 'section-1', 'slider', '{\"_token\":\"KTUbq45vEZSucxxyhKrFBHaVfALl7fTdg7i4TDUB\",\"section\":\"section-1\",\"section_name\":\"slider\",\"blogCheckbox\":[\"2\",\"5\",\"7\",\"8\",\"9\",\"3\",\"1\"],\"sliderSectionItem1\":\"2\",\"sliderSectionItem2\":\"3\"}', '2023-09-15 06:46:32', '2023-09-16 03:46:41');

-- --------------------------------------------------------

--
-- Table structure for table `logins`
--

CREATE TABLE `logins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(12) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_fa_email` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_fa_phone` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `logins`
--

INSERT INTO `logins` (`id`, `role`, `user_id`, `email`, `phone`, `password`, `two_fa_email`, `two_fa_phone`, `created_at`, `updated_at`) VALUES
(2, 'ADMIN', '123443', 'admin@gmail.com', '123456789', '$2y$10$iPTIfKy4yBWCsQZr0waxie6sfHQx1UO22j55CaZ0z6H03Rrsb8cpW', 'NO', ' NO', '2022-11-27 23:47:05', '2022-11-27 23:47:05');

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `img_name` text NOT NULL,
  `title` text DEFAULT NULL,
  `caption` text DEFAULT NULL,
  `alt` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `img_name`, `title`, `caption`, `alt`, `description`, `deleted_at`, `created_at`, `updated_at`) VALUES
(195, '93112465db7480.jpg', NULL, NULL, NULL, NULL, NULL, '2023-09-15 04:46:08', '2023-09-15 04:46:08'),
(196, 'e3dfe0ebf79229.jpg', 'sdfsdf', 'sdfdsf', 'sdfdsf', 'sdfdsf', NULL, '2023-09-15 04:46:08', '2023-09-15 04:48:23');

-- --------------------------------------------------------

--
-- Table structure for table `meta`
--

CREATE TABLE `meta` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `url` text NOT NULL,
  `page_name` text NOT NULL,
  `title` text NOT NULL,
  `keywords` text NOT NULL,
  `description` text NOT NULL,
  `og_url` text NOT NULL,
  `og_title` text NOT NULL,
  `og_image_url` text NOT NULL,
  `og_description` text NOT NULL,
  `page_topic` text DEFAULT NULL,
  `distribution` text DEFAULT NULL,
  `twitter_title` text DEFAULT NULL,
  `twitter_img_url` text DEFAULT NULL,
  `twitter_des` text DEFAULT NULL,
  `js_schema` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_08_19_000000_create_failed_jobs_table', 1),
(2, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(3, '2023_05_12_103707_create_product_category_models_table', 2),
(4, '2023_05_12_115248_create_product_models_table', 3),
(5, '2023_05_13_071102_create_product_variation_models_table', 4),
(6, '2023_06_06_093609_create_coupon_models_table', 5),
(7, '2023_06_07_085647_create_shipping_address_models_table', 6),
(8, '2023_06_07_103017_create_wish_list_models_table', 7),
(9, '2023_08_12_082355_create_order_models_table', 8),
(10, '2023_09_04_090242_create_multi_categories_table', 9),
(11, '2023_09_14_120806_create_tags_models_table', 10),
(12, '2023_09_15_093616_create_home_models_table', 11),
(13, '2023_09_15_094836_create_home_models_table', 12);

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `country_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `name`, `country_id`) VALUES
(1, 'ANDHRA PRADESH', 105),
(2, 'ASSAM', 105),
(3, 'ARUNACHAL PRADESH', 105),
(4, 'BIHAR', 105),
(5, 'GUJRAT', 105),
(6, 'HARYANA', 105),
(7, 'HIMACHAL PRADESH', 105),
(8, 'JAMMU & KASHMIR', 105),
(9, 'KARNATAKA', 105),
(10, 'KERALA', 105),
(11, 'MADHYA PRADESH', 105),
(12, 'MAHARASHTRA', 105),
(13, 'MANIPUR', 105),
(14, 'MEGHALAYA', 105),
(15, 'MIZORAM', 105),
(16, 'NAGALAND', 105),
(17, 'ORISSA', 105),
(18, 'PUNJAB', 105),
(19, 'RAJASTHAN', 105),
(20, 'SIKKIM', 105),
(21, 'TAMIL NADU', 105),
(22, 'TRIPURA', 105),
(23, 'UTTAR PRADESH', 105),
(24, 'WEST BENGAL', 105),
(25, 'DELHI', 105),
(26, 'GOA', 105),
(27, 'PONDICHERY', 105),
(28, 'LAKSHDWEEP', 105),
(29, 'DAMAN & DIU', 105),
(30, 'DADRA & NAGAR', 105),
(31, 'CHANDIGARH', 105),
(32, 'ANDAMAN & NICOBAR', 105),
(33, 'UTTARANCHAL', 105),
(34, 'JHARKHAND', 105),
(35, 'CHATTISGARH', 105);

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tag` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `tag`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'testing', 'testing', '2023-09-15 03:41:24', '2023-09-15 03:41:24'),
(2, 'sdfdsf', 'dsfsd', '2023-09-15 03:42:29', '2023-09-15 03:42:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_category`
--
ALTER TABLE `blog_category`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cat_name` (`cat_name`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `state_id` (`state_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logins`
--
ALTER TABLE `logins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_id` (`user_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `meta`
--
ALTER TABLE `meta`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`),
  ADD UNIQUE KEY `tag` (`tag`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `blog_category`
--
ALTER TABLE `blog_category`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=604;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=251;

--
-- AUTO_INCREMENT for table `home`
--
ALTER TABLE `home`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `logins`
--
ALTER TABLE `logins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=197;

--
-- AUTO_INCREMENT for table `meta`
--
ALTER TABLE `meta`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
