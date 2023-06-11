-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2023 at 12:12 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spyitfar_spyitfirm`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `blog_headline` varchar(200) NOT NULL,
  `blog_details` text NOT NULL,
  `blog_cover_photo` text NOT NULL,
  `blog_uploaded_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `blog_headline`, `blog_details`, `blog_cover_photo`, `blog_uploaded_date`) VALUES
(1, 'What is Graphic Design?', '  Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quibusdam dolores dicta odio cum, voluptatum exercitationem omnis, quam ipsa magnam doloremque nam deserunt eaque quis, eius mollitia? Quidem neque fugit ab laboriosam, aperiam, ut soluta voluptate sapiente nisi nobis nemo repellat corrupti esse! Quis quibusdam quaerat consequuntur nobis blanditiis placeat impedit, exercitationem et provident recusandae neque reiciendis velit in quos distinctio officiis est iusto saepe ducimus. Facere aliquid nam libero aperiam sequi minima sed, commodi rem architecto praesentium explicabo consequatur, quia, error deleniti ex dolorem quibusdam maxime nemo saepe. Dolorem earum vero eius aliquid expedita obcaecati recusandae aliquam ad mollitia odio, magni a, facere corporis minus assumenda, nemo tempore similique fugiat sint ratione dolor. Similique, et. Molestiae ratione asperiores nesciunt laudantium ullam aperiam repellendus! Incidunt praesentium placeat perferendis quaerat qui nemo, facere ducimus suscipit sequi officia quas! Id officiis recusandae reprehenderit perferendis vitae deleniti in odit ipsa natus aut? Fuga necessitatibus blanditiis a qui consequuntur dicta velit reiciendis soluta libero. Est temporibus assumenda voluptates modi debitis ut aspernatur alias sit perferendis asperiores quaerat similique deleniti commodi, rem incidunt odio magni perspiciatis aut dolore aliquam eveniet vel. Cum nesciunt culpa similique, ut ipsa a. Sit maxime, perspiciatis numquam sunt dolores quidem officiis ex temporibus reiciendis at, amet sint excepturi inventore ratione! Similique soluta dolores commodi dolore. Nostrum ab repellendus provident voluptatem harum suscipit beatae odio ex asperiores ducimus labore laudantium sit aut, debitis ut totam hic veritatis modi doloribus! Quis aspernatur laudantium accusantium cum non consequatur quae reprehenderit dicta ad vero nulla, sapiente ipsam fuga nostrum quisquam delectus id assumenda adipisci, eligendi tenetur laborum facilis sit. Culpa, vitae eos deserunt illum quasi nulla doloribus iste ipsam soluta? Iure exercitationem natus magni aliquid iusto eveniet, officia voluptatem qui, laudantium ipsum illo maxime soluta numquam pariatur laboriosam facere optio fuga consequuntur vitae. Laudantium illo ipsum, minima voluptate eius sequi ducimus libero rem adipisci deserunt, facilis illum veniam? Libero repellendus reprehenderit esse unde rerum tempora provident officiis, aperiam deserunt. Modi, ipsum vel nesciunt quam repellat saepe at earum et beatae adipisci reiciendis exercitationem eligendi nemo amet in odit id eveniet molestiae odio dolor! Nemo quas dignissimos sequi, minima, esse quasi voluptatum fuga ipsam incidunt qui illo, aspernatur commodi accusantium vel a distinctio mollitia tempora? Deleniti quia quaerat sunt aliquam repellat nihil ipsa cumque tempora illum incidunt quae neque soluta velit et quos illo, voluptate voluptatem eius, a dicta provident modi fugiat natus hic? Nesciunt voluptate perspiciatis modi cupiditate officia eius, praesentium at eum ullam aliquid ex. Inventore tempore optio nemo architecto repudiandae vero qui minus a cupiditate! Molestiae, similique voluptatem enim facilis corporis repellat assumenda est autem culpa cupiditate cumque facere veniam maiores. Dicta tenetur laborum delectus! Aliquid unde perspiciatis explicabo obcaecati alias illo. Accusamus cumque tenetur delectus enim vero maiores explicabo? Cum nam cupiditate id quaerat, expedita provident. Ea error repudiandae ex adipisci asperiores ipsam ipsa accusamus quam, eos minima illo, reiciendis nulla, minus temporibus corrupti quaerat. Cumque aliquam totam officiis unde maiores officia in, optio veniam rem! Dolores recusandae ducimus a nam dignissimos.', '15019686351633511090.jpg', '2021-09-29 10:58:30'),
(2, 'What is Web Design?', '  Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quibusdam dolores dicta odio cum, voluptatum exercitationem omnis, quam ipsa magnam doloremque nam deserunt eaque quis, eius mollitia? Quidem neque fugit ab laboriosam, aperiam, ut soluta voluptate sapiente nisi nobis nemo repellat corrupti esse! Quis quibusdam quaerat consequuntur nobis blanditiis placeat impedit, exercitationem et provident recusandae neque reiciendis velit in quos distinctio officiis est iusto saepe ducimus. Facere aliquid nam libero aperiam sequi minima sed, commodi rem architecto praesentium explicabo consequatur, quia, error deleniti ex dolorem quibusdam maxime nemo saepe. Dolorem earum vero eius aliquid expedita obcaecati recusandae aliquam ad mollitia odio, magni a, facere corporis minus assumenda, nemo tempore similique fugiat sint ratione dolor. Similique, et. Molestiae ratione asperiores nesciunt laudantium ullam aperiam repellendus! Incidunt praesentium placeat perferendis quaerat qui nemo, facere ducimus suscipit sequi officia quas! Id officiis recusandae reprehenderit perferendis vitae deleniti in odit ipsa natus aut? Fuga necessitatibus blanditiis a qui consequuntur dicta velit reiciendis soluta libero. Est temporibus assumenda voluptates modi debitis ut aspernatur alias sit perferendis asperiores quaerat similique deleniti commodi, rem incidunt odio magni perspiciatis aut dolore aliquam eveniet vel. Cum nesciunt culpa similique, ut ipsa a. Sit maxime, perspiciatis numquam sunt dolores quidem officiis ex temporibus reiciendis at, amet sint excepturi inventore ratione! Similique soluta dolores commodi dolore. Nostrum ab repellendus provident voluptatem harum suscipit beatae odio ex asperiores ducimus labore laudantium sit aut, debitis ut totam hic veritatis modi doloribus! Quis aspernatur laudantium accusantium cum non consequatur quae reprehenderit dicta ad vero nulla, sapiente ipsam fuga nostrum quisquam delectus id assumenda adipisci, eligendi tenetur laborum facilis sit. Culpa, vitae eos deserunt illum quasi nulla doloribus iste ipsam soluta? Iure exercitationem natus magni aliquid iusto eveniet, officia voluptatem qui, laudantium ipsum illo maxime soluta numquam pariatur laboriosam facere optio fuga consequuntur vitae. Laudantium illo ipsum, minima voluptate eius sequi ducimus libero rem adipisci deserunt, facilis illum veniam? Libero repellendus reprehenderit esse unde rerum tempora provident officiis, aperiam deserunt. Modi, ipsum vel nesciunt quam repellat saepe at earum et beatae adipisci reiciendis exercitationem eligendi nemo amet in odit id eveniet molestiae odio dolor! Nemo quas dignissimos sequi, minima, esse quasi voluptatum fuga ipsam incidunt qui illo, aspernatur commodi accusantium vel a distinctio mollitia tempora? Deleniti quia quaerat sunt aliquam repellat nihil ipsa cumque tempora illum incidunt quae neque soluta velit et quos illo, voluptate voluptatem eius, a dicta provident modi fugiat natus hic? Nesciunt voluptate perspiciatis modi cupiditate officia eius, praesentium at eum ullam aliquid ex. Inventore tempore optio nemo architecto repudiandae vero qui minus a cupiditate! Molestiae, similique voluptatem enim facilis corporis repellat assumenda est autem culpa cupiditate cumque facere veniam maiores. Dicta tenetur laborum delectus! Aliquid unde perspiciatis explicabo obcaecati alias illo. Accusamus cumque tenetur delectus enim vero maiores explicabo? Cum nam cupiditate id quaerat, expedita provident. Ea error repudiandae ex adipisci asperiores ipsam ipsa accusamus quam, eos minima illo, reiciendis nulla, minus temporibus corrupti quaerat. Cumque aliquam totam officiis unde maiores officia in, optio veniam rem! Dolores recusandae ducimus a nam dignissimos.', '18310139981634119675.jpg', '2021-09-29 11:08:33'),
(3, 'What is Web Development?', ' Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quibusdam dolores dicta odio cum, voluptatum exercitationem omnis, quam ipsa magnam doloremque nam deserunt eaque quis, eius mollitia? Quidem neque fugit ab laboriosam, aperiam, ut soluta voluptate sapiente nisi nobis nemo repellat corrupti esse! Quis quibusdam quaerat consequuntur nobis blanditiis placeat impedit, exercitationem et provident recusandae neque reiciendis velit in quos distinctio officiis est iusto saepe ducimus. Facere aliquid nam libero aperiam sequi minima sed, commodi rem architecto praesentium explicabo consequatur, quia, error deleniti ex dolorem quibusdam maxime nemo saepe. Dolorem earum vero eius aliquid expedita obcaecati recusandae aliquam ad mollitia odio, magni a, facere corporis minus assumenda, nemo tempore similique fugiat sint ratione dolor. Similique, et. Molestiae ratione asperiores nesciunt laudantium ullam aperiam repellendus! Incidunt praesentium placeat perferendis quaerat qui nemo, facere ducimus suscipit sequi officia quas! Id officiis recusandae reprehenderit perferendis vitae deleniti in odit ipsa natus aut? Fuga necessitatibus blanditiis a qui consequuntur dicta velit reiciendis soluta libero. Est temporibus assumenda voluptates modi debitis ut aspernatur alias sit perferendis asperiores quaerat similique deleniti commodi, rem incidunt odio magni perspiciatis aut dolore aliquam eveniet vel. Cum nesciunt culpa similique, ut ipsa a. Sit maxime, perspiciatis numquam sunt dolores quidem officiis ex temporibus reiciendis at, amet sint excepturi inventore ratione! Similique soluta dolores commodi dolore. Nostrum ab repellendus provident voluptatem harum suscipit beatae odio ex asperiores ducimus labore laudantium sit aut, debitis ut totam hic veritatis modi doloribus! Quis aspernatur laudantium accusantium cum non consequatur quae reprehenderit dicta ad vero nulla, sapiente ipsam fuga nostrum quisquam delectus id assumenda adipisci, eligendi tenetur laborum facilis sit. Culpa, vitae eos deserunt illum quasi nulla doloribus iste ipsam soluta? Iure exercitationem natus magni aliquid iusto eveniet, officia voluptatem qui, laudantium ipsum illo maxime soluta numquam pariatur laboriosam facere optio fuga consequuntur vitae. Laudantium illo ipsum, minima voluptate eius sequi ducimus libero rem adipisci deserunt, facilis illum veniam? Libero repellendus reprehenderit esse unde rerum tempora provident officiis, aperiam deserunt. Modi, ipsum vel nesciunt quam repellat saepe at earum et beatae adipisci reiciendis exercitationem eligendi nemo amet in odit id eveniet molestiae odio dolor! Nemo quas dignissimos sequi, minima, esse quasi voluptatum fuga ipsam incidunt qui illo, aspernatur commodi accusantium vel a distinctio mollitia tempora? Deleniti quia quaerat sunt aliquam repellat nihil ipsa cumque tempora illum incidunt quae neque soluta velit et quos illo, voluptate voluptatem eius, a dicta provident modi fugiat natus hic? Nesciunt voluptate perspiciatis modi cupiditate officia eius, praesentium at eum ullam aliquid ex. Inventore tempore optio nemo architecto repudiandae vero qui minus a cupiditate! Molestiae, similique voluptatem enim facilis corporis repellat assumenda est autem culpa cupiditate cumque facere veniam maiores. Dicta tenetur laborum delectus! Aliquid unde perspiciatis explicabo obcaecati alias illo. Accusamus cumque tenetur delectus enim vero maiores explicabo? Cum nam cupiditate id quaerat, expedita provident. Ea error repudiandae ex adipisci asperiores ipsam ipsa accusamus quam, eos minima illo, reiciendis nulla, minus temporibus corrupti quaerat. Cumque aliquam totam officiis unde maiores officia in, optio veniam rem! Dolores recusandae ducimus a nam dignissimos.', '3352163171633511053.jpg', '2021-09-29 11:08:42'),
(4, 'What is Digital Marketing?', '  Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quibusdam dolores dicta odio cum, voluptatum exercitationem omnis, quam ipsa magnam doloremque nam deserunt eaque quis, eius mollitia? Quidem neque fugit ab laboriosam, aperiam, ut soluta voluptate sapiente nisi nobis nemo repellat corrupti esse! Quis quibusdam quaerat consequuntur nobis blanditiis placeat impedit, exercitationem et provident recusandae neque reiciendis velit in quos distinctio officiis est iusto saepe ducimus. Facere aliquid nam libero aperiam sequi minima sed, commodi rem architecto praesentium explicabo consequatur, quia, error deleniti ex dolorem quibusdam maxime nemo saepe. Dolorem earum vero eius aliquid expedita obcaecati recusandae aliquam ad mollitia odio, magni a, facere corporis minus assumenda, nemo tempore similique fugiat sint ratione dolor. Similique, et. Molestiae ratione asperiores nesciunt laudantium ullam aperiam repellendus! Incidunt praesentium placeat perferendis quaerat qui nemo, facere ducimus suscipit sequi officia quas! Id officiis recusandae reprehenderit perferendis vitae deleniti in odit ipsa natus aut? Fuga necessitatibus blanditiis a qui consequuntur dicta velit reiciendis soluta libero. Est temporibus assumenda voluptates modi debitis ut aspernatur alias sit perferendis asperiores quaerat similique deleniti commodi, rem incidunt odio magni perspiciatis aut dolore aliquam eveniet vel. Cum nesciunt culpa similique, ut ipsa a. Sit maxime, perspiciatis numquam sunt dolores quidem officiis ex temporibus reiciendis at, amet sint excepturi inventore ratione! Similique soluta dolores commodi dolore. Nostrum ab repellendus provident voluptatem harum suscipit beatae odio ex asperiores ducimus labore laudantium sit aut, debitis ut totam hic veritatis modi doloribus! Quis aspernatur laudantium accusantium cum non consequatur quae reprehenderit dicta ad vero nulla, sapiente ipsam fuga nostrum quisquam delectus id assumenda adipisci, eligendi tenetur laborum facilis sit. Culpa, vitae eos deserunt illum quasi nulla doloribus iste ipsam soluta? Iure exercitationem natus magni aliquid iusto eveniet, officia voluptatem qui, laudantium ipsum illo maxime soluta numquam pariatur laboriosam facere optio fuga consequuntur vitae. Laudantium illo ipsum, minima voluptate eius sequi ducimus libero rem adipisci deserunt, facilis illum veniam? Libero repellendus reprehenderit esse unde rerum tempora provident officiis, aperiam deserunt. Modi, ipsum vel nesciunt quam repellat saepe at earum et beatae adipisci reiciendis exercitationem eligendi nemo amet in odit id eveniet molestiae odio dolor! Nemo quas dignissimos sequi, minima, esse quasi voluptatum fuga ipsam incidunt qui illo, aspernatur commodi accusantium vel a distinctio mollitia tempora? Deleniti quia quaerat sunt aliquam repellat nihil ipsa cumque tempora illum incidunt quae neque soluta velit et quos illo, voluptate voluptatem eius, a dicta provident modi fugiat natus hic? Nesciunt voluptate perspiciatis modi cupiditate officia eius, praesentium at eum ullam aliquid ex. Inventore tempore optio nemo architecto repudiandae vero qui minus a cupiditate! Molestiae, similique voluptatem enim facilis corporis repellat assumenda est autem culpa cupiditate cumque facere veniam maiores. Dicta tenetur laborum delectus! Aliquid unde perspiciatis explicabo obcaecati alias illo. Accusamus cumque tenetur delectus enim vero maiores explicabo? Cum nam cupiditate id quaerat, expedita provident. Ea error repudiandae ex adipisci asperiores ipsam ipsa accusamus quam, eos minima illo, reiciendis nulla, minus temporibus corrupti quaerat. Cumque aliquam totam officiis unde maiores officia in, optio veniam rem! Dolores recusandae ducimus a nam dignissimos.', '696988941634119691.jpg', '2021-10-06 15:03:04'),
(5, 'What is Graphic Design?', '    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quibusdam dolores dicta odio cum, voluptatum exercitationem omnis, quam ipsa magnam doloremque nam deserunt eaque quis, eius mollitia? Quidem neque fugit ab laboriosam, aperiam, ut soluta voluptate sapiente nisi nobis nemo repellat corrupti esse! Quis quibusdam quaerat consequuntur nobis blanditiis placeat impedit, exercitationem et provident recusandae neque reiciendis velit in quos distinctio officiis est iusto saepe ducimus. Facere aliquid nam libero aperiam sequi minima sed, commodi rem architecto praesentium explicabo consequatur, quia, error deleniti ex dolorem quibusdam maxime nemo saepe. Dolorem earum vero eius aliquid expedita obcaecati recusandae aliquam ad mollitia odio, magni a, facere corporis minus assumenda, nemo tempore similique fugiat sint ratione dolor. Similique, et. Molestiae ratione asperiores nesciunt laudantium ullam aperiam repellendus! Incidunt praesentium placeat perferendis quaerat qui nemo, facere ducimus suscipit sequi officia quas! Id officiis recusandae reprehenderit perferendis vitae deleniti in odit ipsa natus aut? Fuga necessitatibus blanditiis a qui consequuntur dicta velit reiciendis soluta libero. Est temporibus assumenda voluptates modi debitis ut aspernatur alias sit perferendis asperiores quaerat similique deleniti commodi, rem incidunt odio magni perspiciatis aut dolore aliquam eveniet vel. Cum nesciunt culpa similique, ut ipsa a. Sit maxime, perspiciatis numquam sunt dolores quidem officiis ex temporibus reiciendis at, amet sint excepturi inventore ratione! Similique soluta dolores commodi dolore. Nostrum ab repellendus provident voluptatem harum suscipit beatae odio ex asperiores ducimus labore laudantium sit aut, debitis ut totam hic veritatis modi doloribus! Quis aspernatur laudantium accusantium cum non consequatur quae reprehenderit dicta ad vero nulla, sapiente ipsam fuga nostrum quisquam delectus id assumenda adipisci, eligendi tenetur laborum facilis sit. Culpa, vitae eos deserunt illum quasi nulla doloribus iste ipsam soluta? Iure exercitationem natus magni aliquid iusto eveniet, officia voluptatem qui, laudantium ipsum illo maxime soluta numquam pariatur laboriosam facere optio fuga consequuntur vitae. Laudantium illo ipsum, minima voluptate eius sequi ducimus libero rem adipisci deserunt, facilis illum veniam? Libero repellendus reprehenderit esse unde rerum tempora provident officiis, aperiam deserunt. Modi, ipsum vel nesciunt quam repellat saepe at earum et beatae adipisci reiciendis exercitationem eligendi nemo amet in odit id eveniet molestiae odio dolor! Nemo quas dignissimos sequi, minima, esse quasi voluptatum fuga ipsam incidunt qui illo, aspernatur commodi accusantium vel a distinctio mollitia tempora? Deleniti quia quaerat sunt aliquam repellat nihil ipsa cumque tempora illum incidunt quae neque soluta velit et quos illo, voluptate voluptatem eius, a dicta provident modi fugiat natus hic? Nesciunt voluptate perspiciatis modi cupiditate officia eius, praesentium at eum ullam aliquid ex. Inventore tempore optio nemo architecto repudiandae vero qui minus a cupiditate! Molestiae, similique voluptatem enim facilis corporis repellat assumenda est autem culpa cupiditate cumque facere veniam maiores. Dicta tenetur laborum delectus! Aliquid unde perspiciatis explicabo obcaecati alias illo. Accusamus cumque tenetur delectus enim vero maiores explicabo? Cum nam cupiditate id quaerat, expedita provident. Ea error repudiandae ex adipisci asperiores ipsam ipsa accusamus quam, eos minima illo, reiciendis nulla, minus temporibus corrupti quaerat. Cumque aliquam totam officiis unde maiores officia in, optio veniam rem! Dolores recusandae ducimus a nam dignissimos.', '12825543021634124608.jpg', '2021-10-13 17:28:22'),
(6, 'What is Web Design?', '    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quibusdam dolores dicta odio cum, voluptatum exercitationem omnis, quam ipsa magnam doloremque nam deserunt eaque quis, eius mollitia? Quidem neque fugit ab laboriosam, aperiam, ut soluta voluptate sapiente nisi nobis nemo repellat corrupti esse! Quis quibusdam quaerat consequuntur nobis blanditiis placeat impedit, exercitationem et provident recusandae neque reiciendis velit in quos distinctio officiis est iusto saepe ducimus. Facere aliquid nam libero aperiam sequi minima sed, commodi rem architecto praesentium explicabo consequatur, quia, error deleniti ex dolorem quibusdam maxime nemo saepe. Dolorem earum vero eius aliquid expedita obcaecati recusandae aliquam ad mollitia odio, magni a, facere corporis minus assumenda, nemo tempore similique fugiat sint ratione dolor. Similique, et. Molestiae ratione asperiores nesciunt laudantium ullam aperiam repellendus! Incidunt praesentium placeat perferendis quaerat qui nemo, facere ducimus suscipit sequi officia quas! Id officiis recusandae reprehenderit perferendis vitae deleniti in odit ipsa natus aut? Fuga necessitatibus blanditiis a qui consequuntur dicta velit reiciendis soluta libero. Est temporibus assumenda voluptates modi debitis ut aspernatur alias sit perferendis asperiores quaerat similique deleniti commodi, rem incidunt odio magni perspiciatis aut dolore aliquam eveniet vel. Cum nesciunt culpa similique, ut ipsa a. Sit maxime, perspiciatis numquam sunt dolores quidem officiis ex temporibus reiciendis at, amet sint excepturi inventore ratione! Similique soluta dolores commodi dolore. Nostrum ab repellendus provident voluptatem harum suscipit beatae odio ex asperiores ducimus labore laudantium sit aut, debitis ut totam hic veritatis modi doloribus! Quis aspernatur laudantium accusantium cum non consequatur quae reprehenderit dicta ad vero nulla, sapiente ipsam fuga nostrum quisquam delectus id assumenda adipisci, eligendi tenetur laborum facilis sit. Culpa, vitae eos deserunt illum quasi nulla doloribus iste ipsam soluta? Iure exercitationem natus magni aliquid iusto eveniet, officia voluptatem qui, laudantium ipsum illo maxime soluta numquam pariatur laboriosam facere optio fuga consequuntur vitae. Laudantium illo ipsum, minima voluptate eius sequi ducimus libero rem adipisci deserunt, facilis illum veniam? Libero repellendus reprehenderit esse unde rerum tempora provident officiis, aperiam deserunt. Modi, ipsum vel nesciunt quam repellat saepe at earum et beatae adipisci reiciendis exercitationem eligendi nemo amet in odit id eveniet molestiae odio dolor! Nemo quas dignissimos sequi, minima, esse quasi voluptatum fuga ipsam incidunt qui illo, aspernatur commodi accusantium vel a distinctio mollitia tempora? Deleniti quia quaerat sunt aliquam repellat nihil ipsa cumque tempora illum incidunt quae neque soluta velit et quos illo, voluptate voluptatem eius, a dicta provident modi fugiat natus hic? Nesciunt voluptate perspiciatis modi cupiditate officia eius, praesentium at eum ullam aliquid ex. Inventore tempore optio nemo architecto repudiandae vero qui minus a cupiditate! Molestiae, similique voluptatem enim facilis corporis repellat assumenda est autem culpa cupiditate cumque facere veniam maiores. Dicta tenetur laborum delectus! Aliquid unde perspiciatis explicabo obcaecati alias illo. Accusamus cumque tenetur delectus enim vero maiores explicabo? Cum nam cupiditate id quaerat, expedita provident. Ea error repudiandae ex adipisci asperiores ipsam ipsa accusamus quam, eos minima illo, reiciendis nulla, minus temporibus corrupti quaerat. Cumque aliquam totam officiis unde maiores officia in, optio veniam rem! Dolores recusandae ducimus a nam dignissimos.', '3120538861634124579.jpg', '2021-10-13 17:28:54'),
(7, 'What is Digital Marketing?', '    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quibusdam dolores dicta odio cum, voluptatum exercitationem omnis, quam ipsa magnam doloremque nam deserunt eaque quis, eius mollitia? Quidem neque fugit ab laboriosam, aperiam, ut soluta voluptate sapiente nisi nobis nemo repellat corrupti esse! Quis quibusdam quaerat consequuntur nobis blanditiis placeat impedit, exercitationem et provident recusandae neque reiciendis velit in quos distinctio officiis est iusto saepe ducimus. Facere aliquid nam libero aperiam sequi minima sed, commodi rem architecto praesentium explicabo consequatur, quia, error deleniti ex dolorem quibusdam maxime nemo saepe. Dolorem earum vero eius aliquid expedita obcaecati recusandae aliquam ad mollitia odio, magni a, facere corporis minus assumenda, nemo tempore similique fugiat sint ratione dolor. Similique, et. Molestiae ratione asperiores nesciunt laudantium ullam aperiam repellendus! Incidunt praesentium placeat perferendis quaerat qui nemo, facere ducimus suscipit sequi officia quas! Id officiis recusandae reprehenderit perferendis vitae deleniti in odit ipsa natus aut? Fuga necessitatibus blanditiis a qui consequuntur dicta velit reiciendis soluta libero. Est temporibus assumenda voluptates modi debitis ut aspernatur alias sit perferendis asperiores quaerat similique deleniti commodi, rem incidunt odio magni perspiciatis aut dolore aliquam eveniet vel. Cum nesciunt culpa similique, ut ipsa a. Sit maxime, perspiciatis numquam sunt dolores quidem officiis ex temporibus reiciendis at, amet sint excepturi inventore ratione! Similique soluta dolores commodi dolore. Nostrum ab repellendus provident voluptatem harum suscipit beatae odio ex asperiores ducimus labore laudantium sit aut, debitis ut totam hic veritatis modi doloribus! Quis aspernatur laudantium accusantium cum non consequatur quae reprehenderit dicta ad vero nulla, sapiente ipsam fuga nostrum quisquam delectus id assumenda adipisci, eligendi tenetur laborum facilis sit. Culpa, vitae eos deserunt illum quasi nulla doloribus iste ipsam soluta? Iure exercitationem natus magni aliquid iusto eveniet, officia voluptatem qui, laudantium ipsum illo maxime soluta numquam pariatur laboriosam facere optio fuga consequuntur vitae. Laudantium illo ipsum, minima voluptate eius sequi ducimus libero rem adipisci deserunt, facilis illum veniam? Libero repellendus reprehenderit esse unde rerum tempora provident officiis, aperiam deserunt. Modi, ipsum vel nesciunt quam repellat saepe at earum et beatae adipisci reiciendis exercitationem eligendi nemo amet in odit id eveniet molestiae odio dolor! Nemo quas dignissimos sequi, minima, esse quasi voluptatum fuga ipsam incidunt qui illo, aspernatur commodi accusantium vel a distinctio mollitia tempora? Deleniti quia quaerat sunt aliquam repellat nihil ipsa cumque tempora illum incidunt quae neque soluta velit et quos illo, voluptate voluptatem eius, a dicta provident modi fugiat natus hic? Nesciunt voluptate perspiciatis modi cupiditate officia eius, praesentium at eum ullam aliquid ex. Inventore tempore optio nemo architecto repudiandae vero qui minus a cupiditate! Molestiae, similique voluptatem enim facilis corporis repellat assumenda est autem culpa cupiditate cumque facere veniam maiores. Dicta tenetur laborum delectus! Aliquid unde perspiciatis explicabo obcaecati alias illo. Accusamus cumque tenetur delectus enim vero maiores explicabo? Cum nam cupiditate id quaerat, expedita provident. Ea error repudiandae ex adipisci asperiores ipsam ipsa accusamus quam, eos minima illo, reiciendis nulla, minus temporibus corrupti quaerat. Cumque aliquam totam officiis unde maiores officia in, optio veniam rem! Dolores recusandae ducimus a nam dignissimos.', '20929945201634124596.jpg', '2021-10-13 17:29:25');

-- --------------------------------------------------------

--
-- Table structure for table `choose_us`
--

CREATE TABLE `choose_us` (
  `id` int(11) NOT NULL,
  `why_choose_us_title` varchar(200) NOT NULL,
  `why_choose_us_details` text NOT NULL,
  `why_choose_us_cover_photo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `choose_us`
--

INSERT INTO `choose_us` (`id`, `why_choose_us_title`, `why_choose_us_details`, `why_choose_us_cover_photo`) VALUES
(1, 'Attention to Details', 'It’s our attention to the small stuff, scheduling of timelines, and keen project management that makes us stand out from the rest.', '18481841531633931917.jpg'),
(2, 'A Plan for Success', 'You want results. We have found that the best way to get them is with upfront research – of your company, competitors.', '17792398621633931929.jpg'),
(3, 'Creativity', 'We bring our diverse background in advertising, design, branding, public relations, research, and strategic planning to work for your company.', '9104403811633931942.jpg'),
(4, 'Pricing', 'Our prices are competitive and fair. There are no surprise bills. Any unexpected or additional expenses must be pre-approved by you.', '2309067231633931956.jpg'),
(5, 'Meeting Deadlines', 'We have worked with select casinos and state agencies for many years. Their rule – if we miss a deadline, we’re out.', '7905085151633931968.jpg'),
(6, 'Award-Winning', 'We’ve won the international Communicator’s Award on behalf of our clients six times, chosen from over 6000 entries.', '12492298721633933219.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `clients_name` varchar(200) NOT NULL,
  `project_link` text NOT NULL,
  `project_logo_img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `clients_name`, `project_link`, `project_logo_img`) VALUES
(1, '7etouch', 'https://7etouch.com/', '13555242321633510304.png'),
(2, 'spyitfirm', 'www.spyitfirm.com', '4889284911633510394.png'),
(3, 'spyitfirm', 'www.spyitfirm.com', '13146869911633510421.png'),
(4, 'spyitfirm', 'www.spyitfirm.com', '5582696611633510438.png'),
(5, 'spyitfirm', 'www.spyitfirm.com', '4776670551633510455.png'),
(6, 'spyitfirm', 'www.spyitfirm.com', '6839333631633510469.png'),
(7, 'spyitfirm', 'www.spyitfirm.com', '10826353141633510486.png');

-- --------------------------------------------------------

--
-- Table structure for table `client_testimonials`
--

CREATE TABLE `client_testimonials` (
  `id` int(11) NOT NULL,
  `client_name` text NOT NULL,
  `client_details` varchar(200) NOT NULL,
  `client_address` varchar(200) NOT NULL,
  `client_comments` text NOT NULL,
  `project_logo_img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `client_testimonials`
--

INSERT INTO `client_testimonials` (`id`, `client_name`, `client_details`, `client_address`, `client_comments`, `project_logo_img`) VALUES
(1, 'slatif', 'Owner of 7etouch	', 'Bangladesh', 'He is a professional seller. He is a static  website designer. He understands his task and did everything fine. Recommended.', '5296735621634014313.png'),
(2, 'leonard46', 'Owner of 7etouch	', 'United States', 'Seller really help me a lot, and the work is really fast. I really recommend this seller. And I for sure will make a business with him again.', '15073114041634014382.png'),
(3, 'trevino34', 'Owner of 7etouch	', 'United Kingdom', 'The delivery date and quality of the code  were outstanding! Fantastic work that exceeds expectations! Highly recommended, will definitely use his services again!', '1412967451634014472.png'),
(4, 'retrica4361', 'Owner of 7etouch	', 'Canada', 'Very knowledgeable and thorough. A great experience and I would definitely work with him again.', '11432406341634615421.png'),
(5, 'slatif	', 'Owner of 7etouch	', 'Bangladesh', 'He is a professional seller. He is a static website designer. He understands his task and did everything fine. Recommended.	', '8450376531634017201.png'),
(6, 'retrica4361', 'Owner of 7etouch	', 'Canada', 'Very knowledgeable and thorough. A great experience and I would definitely work with him again.	', '4017542211634017236.png'),
(7, 'retrica4361	', 'Owner of 7etouch', 'United Kingdom', 'He is a professional seller. He is a static website designer. He understands his task and did everything fine. Recommended.	', '1569265981634615435.png'),
(8, 'trevino34', 'Owner of 7etouch', 'United States', 'The seller really helps me a lot, and the work is really fast. I really recommend this seller. And I for sure will make business with him again.', '13716530661634615445.png');

-- --------------------------------------------------------

--
-- Table structure for table `company_overviews`
--

CREATE TABLE `company_overviews` (
  `id` int(11) NOT NULL,
  `default_item_name` varchar(300) NOT NULL,
  `default_item_value` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `company_overviews`
--

INSERT INTO `company_overviews` (`id`, `default_item_name`, `default_item_value`) VALUES
(1, 'company_history', 'Spy IT Firm is started its journey in 2021 and it’s providing training facilities for IT skill enhancement. The institution is founded by Mr. Sabbir Ahammed, who as a young talent wanted to make the language of the IT world easier by creating leaders and by contributing to the success of individuals.\r\n\r\nSo to bring it into reality it has started the journey with a motto of growing, meeting emerging needs, and now it becomes one of the successful IT firms in Bangladesh. Till now we have achieved remarkable success and expecting to go a long run in this beautiful journey.'),
(2, 'company_mission', 'Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.'),
(3, 'company_vision', 'Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.\r\ntime.');

-- --------------------------------------------------------

--
-- Table structure for table `company_profiles`
--

CREATE TABLE `company_profiles` (
  `id` int(11) NOT NULL,
  `default_item_name` varchar(300) NOT NULL,
  `default_item_value` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `company_profiles`
--

INSERT INTO `company_profiles` (`id`, `default_item_name`, `default_item_value`) VALUES
(1, 'founded', '2021-01-01'),
(2, 'team_member', '5'),
(3, 'company_profile_photo', '10223207201634273192.png');

-- --------------------------------------------------------

--
-- Table structure for table `contacts_messages`
--

CREATE TABLE `contacts_messages` (
  `id` int(11) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `email_address` varchar(100) NOT NULL,
  `phone_number` varchar(50) NOT NULL,
  `subject` text NOT NULL,
  `message` text NOT NULL,
  `message_sending_date` datetime NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'unread'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contacts_messages`
--

INSERT INTO `contacts_messages` (`id`, `full_name`, `email_address`, `phone_number`, `subject`, `message`, `message_sending_date`, `status`) VALUES
(1, 'Sabbir Ahammed', 'sabbir@gmail.com', '01953321402', 'Test Subject', ' Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores aliquam velit esse eveniet obcaecati quia ducimus nihil quisquam commodi eligendi. Sit iste, id quia assumenda animi fugiat cupiditate tempore exercitationem? Id omnis consequatur itaque maxime deleniti? Autem ratione modi velit neque quas officiis tenetur voluptate nesciunt nostrum sequi cum dolorem natus itaque quisquam tempore ullam dolore sapiente aut, numquam a delectus facilis molestias architecto. Suscipit unde quibusdam nemo debitis, adipisci, ea alias possimus fugiat, itaque et dignissimos odio cumque illo voluptatibus amet dolores sint quasi est? Mollitia id consequuntur corrupti aperiam inventore perspiciatis eos, necessitatibus autem sequi nam placeat eligendi sed voluptatibus dolores architecto? Odio suscipit rem illo nemo dignissimos ex aliquid aperiam ipsum, assumenda vero eos vel sequi dolor explicabo iure consectetur adipisci quod fugit quo iusto, omnis tempora. Rerum harum numquam delectus? Nobis deserunt amet ipsa quasi laborum. Consectetur doloremque qui ullam nemo facilis voluptatem repellat provident ipsa quas est perferendis reprehenderit, dolore laboriosam laudantium minus nihil impedit velit quod aperiam placeat, dicta enim veritatis laborum! Dignissimos non laboriosam corrupti tenetur id atque suscipit minus nam aliquam iste veniam, quae culpa sapiente recusandae eos hic sunt cumque, eveniet porro. Labore, soluta aut odit in quibusdam facere libero ex fugiat neque consequuntur quam sapiente quis. Repudiandae temporibus ratione aspernatur fugit amet ullam minima quam nihil nemo est praesentium doloribus ipsum quasi esse, perferendis eius explicabo, blanditiis soluta eos. Quasi quis sed qui quos neque similique aspernatur illo, alias eos eaque, repellat aliquam mollitia quia? At dolores repellat ex quo.', '2021-09-27 14:32:05', 'read'),
(2, 'Sovon Ahammed	', 'sovon@gmail.com', '01517 805999', 'I Need Graphics Design Services.', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores aliquam velit esse eveniet obcaecati quia ducimus nihil quisquam commodi eligendi. Sit iste, id quia assumenda animi fugiat cupiditate tempore exercitationem? Id omnis consequatur itaque maxime deleniti? Autem ratione modi velit neque quas officiis tenetur voluptate nesciunt nostrum sequi cum dolorem natus itaque quisquam tempore ullam dolore sapiente aut, numquam a delectus facilis molestias architecto. Suscipit unde quibusdam nemo debitis, adipisci, ea alias possimus fugiat, itaque et dignissimos odio cumque illo voluptatibus amet dolores sint quasi est? Mollitia id consequuntur corrupti aperiam inventore perspiciatis eos, necessitatibus autem sequi nam placeat eligendi sed voluptatibus dolores architecto? Odio suscipit rem illo nemo dignissimos ex aliquid aperiam ipsum, assumenda vero eos vel sequi dolor explicabo iure consectetur adipisci quod fugit quo iusto, omnis tempora. Rerum harum numquam delectus? Nobis deserunt amet ipsa quasi laborum. Consectetur doloremque qui ullam nemo facilis voluptatem repellat provident ipsa quas est perferendis reprehenderit, dolore laboriosam laudantium minus nihil impedit velit quod aperiam placeat, dicta enim veritatis laborum! Dignissimos non laboriosam corrupti tenetur id atque suscipit minus nam aliquam iste veniam, quae culpa sapiente recusandae eos hic sunt cumque, eveniet porro. Labore, soluta aut odit in quibusdam facere libero ex fugiat neque consequuntur quam sapiente quis. Repudiandae temporibus ratione aspernatur fugit amet ullam minima quam nihil nemo est praesentium doloribus ipsum quasi esse, perferendis eius explicabo, blanditiis soluta eos. Quasi quis sed qui quos neque similique aspernatur illo, alias eos eaque, repellat aliquam mollitia quia? At dolores repellat ex quo.', '2021-10-26 10:11:49', 'read'),
(3, 'Id6zlw5k1a', 'axmanova.vera@inbox.ru', '83491942553', ' Ð‘Ð°Ð»aÐ½Ñ Ð·aÑ‡Ð¸ÑÐ»ÐµÐ½ ', ' \r\n Ð’Ñ‹ Ð±ÑƒÐ´ÐµÑ‚Ðµ Ð·Ð°Ð±Ð»Ð¾ÐºÐ¸Ñ€Ð¾Ð²Ð°Ð½Ñ‹  \r\n \r\nÐŸÐ¾Ð´Ñ€Ð¾Ð±Ð½ÐµÐµ: https://forms.yandex.ru/u/AAAAAspyitfirm.comBBBBB/success/', '2022-05-24 12:40:58', 'read'),
(4, 'Tyronetut', 'support@capitalfund-hk.com', '83493875776', 'Business Funding', 'Capital Fund International Limited has been working in close partnership with various Business/Financial Consultants and every business and industrial sector all over the world. \r\n \r\nOur Financial services; Funding, Loan, collateral Facilities/Instrument and expertise is the safety net that you require in your Business. \r\n \r\nRequire funding/ Loan from 1 Million to 10 Billion USD/EURO/GBP and Above? \r\n \r\n+852 3008 8373 \r\nCapital Fund International Limited \r\nhttp://www.capitalfund-hk.com/ \r\ninfo@capitalfund-hk.com', '2022-12-22 12:47:04', 'read');

-- --------------------------------------------------------

--
-- Table structure for table `contact_details`
--

CREATE TABLE `contact_details` (
  `id` int(11) NOT NULL,
  `default_item_name` varchar(200) NOT NULL,
  `default_item_value` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_details`
--

INSERT INTO `contact_details` (`id`, `default_item_name`, `default_item_value`) VALUES
(1, 'company_address', 'Dhaka, BD'),
(2, 'phone_number_one', '01878136530'),
(3, 'phone_number_two', '01878136530'),
(4, 'email_address_one', 'info@spyitfirm.com'),
(5, 'email_address_two', 'contact@spyitfirm.com');

-- --------------------------------------------------------

--
-- Table structure for table `fun_facts`
--

CREATE TABLE `fun_facts` (
  `id` int(11) NOT NULL,
  `fun_fact_icon_name` varchar(200) NOT NULL,
  `fun_fact_title` varchar(200) NOT NULL,
  `fun_fact_qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fun_facts`
--

INSERT INTO `fun_facts` (`id`, `fun_fact_icon_name`, `fun_fact_title`, `fun_fact_qty`) VALUES
(1, 'fa-trophy', 'AWARD WINNER', 55),
(2, 'fa-coffee', 'CUP OF COFFEES', 54),
(3, 'fa-handshake-o', 'HAPPY CLIENTS', 26),
(4, 'fa-hourglass', 'PROJECT COMPLETED', 33);

-- --------------------------------------------------------

--
-- Table structure for table `portfolios`
--

CREATE TABLE `portfolios` (
  `id` int(11) NOT NULL,
  `portfolio_name` varchar(200) NOT NULL,
  `portfolio_category_name` varchar(200) NOT NULL,
  `live_portfolio_link` text NOT NULL,
  `portfolio_details` text NOT NULL,
  `portfolio_cover_photo` text NOT NULL,
  `portfolio_banner_photo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `portfolios`
--

INSERT INTO `portfolios` (`id`, `portfolio_name`, `portfolio_category_name`, `live_portfolio_link`, `portfolio_details`, `portfolio_cover_photo`, `portfolio_banner_photo`) VALUES
(1, 'GYM Website Design', 'web_design', 'www.spyitfirm.com', 'Gym Expert is a clean, modern, and fully responsive HTML Template. it is designed for Sport, Gym, Fitness, aerobics, Yoga, Boxing, trainers, Coach, businesses, or any type of person or business who wants to showcase their work, services, and professional way.\r\n\r\nGym Expert Template’s uniqueness is due to its amazingly beautiful designs and easy-to-use Website template solution that maximizes user satisfaction. It is built using bootstrap 4 frameworks, works totally responsive, is easy to customize, has well-commented codes, and is SEO friendly\r\n\r\nThis template was made with Bootstrap, using HTML5, CSS3, JS, and jQuery.\r\n\r\nWe have included best practices of web development\r\n\r\nFeatures:\r\nAWESOME MULTI-PAGES.\r\n3 Different Header Styles.\r\nClean & Modern Design.\r\nValid HTML5 & CSS3.\r\nLatest Bootstrap.\r\nFully responsive.\r\nWorking PHP / Ajax Contact Form\r\nSticky Menu When Scrolling Down\r\nUnlimited Colors(Just Change Color Code).\r\nCross Browser Optimization.\r\nFree Updates.\r\nGoogle fonts.\r\nGoogle Map.\r\nStandard custom code Created.\r\nAll files are well commented.\r\nAnd much more Fun…\r\nFont Used:\r\nMontserrat\r\nSans Serif\r\nIcon Used:\r\nFont Awesome Icons\r\nFlat icons\r\nWhat do you get?\r\nAll HTML files.\r\nDocumentation', '12035666681634123944.jpg', '16220904931633594806.png'),
(2, 'Technology Website Design', 'web_design', 'www.spyitfirm.com', 'Gym Expert is a clean, modern, and fully responsive HTML Template. it is designed for Sport, Gym, Fitness, Aerobic, Yoga, Boxing, Trainer, Coach, businesses or any type of person or business who wants to showcase their work, services and professional way.\r\n\r\nGym Expert Template’s uniqueness is due to its amazingly beautiful designs and easy to use Website template solution that maximizes user satisfaction. It is built using bootstrap 4 framework, works totally responsive, easy to customise, well commented codes and seo friendly\r\n\r\nThis template made with Bootstrap, using HTML5, CSS3, JS and jQuery.\r\n\r\nWe have included best practice of web development\r\n\r\nFeatures:\r\nAWESOME MULTI-PAGES.\r\n3 Different Header Styles.\r\nClean &amp; Modern Design.\r\nValid HTML5 &amp; CSS3.\r\nLatest Bootstrap.\r\nFully responsive.\r\nWorking PHP / Ajax Contact Form\r\nSticky Menu When Scrolling Down\r\nUnlimited Colors(Just Change Color Code).\r\nCross Browser Optimization.\r\nFree Updates.\r\nGoogle fonts.\r\nGoogle Map.\r\nStanderd custom code Created.\r\nAll files are well commented.\r\nAnd much more Fun…\r\nFont Used:\r\nMontserrat\r\nSans Serif\r\nIcon Used:\r\nFont Awesome Icons\r\nFlaticons\r\nWhat do you get?\r\nAll HTML files.\r\nDocumentation', '1633907351633594869.jpg', '8343444231633594869.png'),
(3, 'Technology Website Design', 'web_design', 'www.spyitfirm.com', 'Gym Expert is a clean, modern, and fully responsive HTML Template. it is designed for Sport, Gym, Fitness, Aerobic, Yoga, Boxing, Trainer, Coach, businesses or any type of person or business who wants to showcase their work, services and professional way.\r\n\r\nGym Expert Template’s uniqueness is due to its amazingly beautiful designs and easy to use Website template solution that maximizes user satisfaction. It is built using bootstrap 4 framework, works totally responsive, easy to customise, well commented codes and seo friendly\r\n\r\nThis template made with Bootstrap, using HTML5, CSS3, JS and jQuery.\r\n\r\nWe have included best practice of web development\r\n\r\nFeatures:\r\nAWESOME MULTI-PAGES.\r\n3 Different Header Styles.\r\nClean &amp; Modern Design.\r\nValid HTML5 &amp; CSS3.\r\nLatest Bootstrap.\r\nFully responsive.\r\nWorking PHP / Ajax Contact Form\r\nSticky Menu When Scrolling Down\r\nUnlimited Colors(Just Change Color Code).\r\nCross Browser Optimization.\r\nFree Updates.\r\nGoogle fonts.\r\nGoogle Map.\r\nStanderd custom code Created.\r\nAll files are well commented.\r\nAnd much more Fun…\r\nFont Used:\r\nMontserrat\r\nSans Serif\r\nIcon Used:\r\nFont Awesome Icons\r\nFlaticons\r\nWhat do you get?\r\nAll HTML files.\r\nDocumentation', '9763826411633594903.jpg', '14149492571633594903.png'),
(4, 'Portfolio Website Design', 'web_design', 'www.spyitfirm.com', 'Gym Expert is a clean, modern, and fully responsive HTML Template. it is designed for Sport, Gym, Fitness, Aerobic, Yoga, Boxing, Trainer, Coach, businesses or any type of person or business who wants to showcase their work, services and professional way.\r\n\r\nGym Expert Template’s uniqueness is due to its amazingly beautiful designs and easy to use Website template solution that maximizes user satisfaction. It is built using bootstrap 4 framework, works totally responsive, easy to customise, well commented codes and seo friendly\r\n\r\nThis template made with Bootstrap, using HTML5, CSS3, JS and jQuery.\r\n\r\nWe have included best practice of web development\r\n\r\nFeatures:\r\nAWESOME MULTI-PAGES.\r\n3 Different Header Styles.\r\nClean & Modern Design.\r\nValid HTML5 & CSS3.\r\nLatest Bootstrap.\r\nFully responsive.\r\nWorking PHP / Ajax Contact Form\r\nSticky Menu When Scrolling Down\r\nUnlimited Colors(Just Change Color Code).\r\nCross Browser Optimization.\r\nFree Updates.\r\nGoogle fonts.\r\nGoogle Map.\r\nStanderd custom code Created.\r\nAll files are well commented.\r\nAnd much more Fun…\r\nFont Used:\r\nMontserrat\r\nSans Serif\r\nIcon Used:\r\nFont Awesome Icons\r\nFlaticons\r\nWhat do you get?\r\nAll HTML files.\r\nDocumentation', '21325160601633944239.jpg', '18244911451633594937.png'),
(5, 'Clendar Design', 'graphic_design', 'www.spyitfirm.com', 'A calendar is a system of organizing days. This is done by giving names to periods of time, typically days, weeks, months and years.\r\n\r\nCalendars are often some of the most exciting projects that come across a designer&#039;s desk. They&#039;re large, colorful and leave plenty of room for creative minds to add that special touch through imagery and concept. Get some creative calendar design tips now from these calendar design essentials.', '15609146431633595076.jpg', '15615971081633595076.jpg'),
(6, 'Business Card Design', 'graphic_design', 'www.spyitfirm.com', 'Business cards are cards bearing business information about a company or individual. They are shared during formal introductions as a convenience and a memory aid.\r\n\r\nA business card typically includes the giver&#039;s name, company or business affiliation (usually with a logo) and contact information such as street addresses, telephone number(s), fax number, e-mail addresses and website.', '17520400371633595288.jpg', '3155138701633595288.jpg'),
(7, 'Business Card Design', 'graphic_design', 'www.spyitfirm.com', 'Business cards are cards bearing business information about a company or individual. They are shared during formal introductions as a convenience and a memory aid.\r\n\r\nA business card typically includes the giver&#039;s name, company or business affiliation (usually with a logo) and contact information such as street addresses, telephone number(s), fax number, e-mail addresses and website.', '4364065601633595339.jpg', '6147134491633595339.jpg'),
(8, 'FB Cover Photo Design', 'graphic_design', 'www.spyitfirm.com', 'A cover photo is the larger photo at the top of your profile, above your profile picture. Like your profile picture, cover photos are public, which means anyone visiting your profile will be able to see them.\r\n\r\nTo add or change your cover photo: Click your profile picture in the top right of Facebook.', '5636989521633595374.jpg', '10003699951633595374.jpg'),
(9, 'Search engine optimization (SEO)', 'digital_marketing', 'www.spyitfirm.com', 'Search engine optimization (SEO) is the process of improving the quality and quantity of website traffic to a website or a web page from search engines.SEO targets unpaid traffic (known as \"natural\" or \"organic\" results) rather than direct traffic or paid traffic.\r\n\r\nAs an Internet marketing strategy, SEO considers how search engines work, the computer-programmed algorithms that dictate search engine behavior, what people search for, the actual search terms or keywords typed into search engines, and which search engines are preferred by their targeted audience. SEO is performed because a website will receive more visitors from a search engine when websites rank higher on the search engine results page (SERP).', '13591186201633595442.jpg', '18455742921633595442.jpg'),
(10, 'Social Media Marketing (SMM)', 'digital_marketing', 'www.spyitfirm.com', 'The term social media marketing (SMM) refers to the use of social media and social networks to market a company&#039;s products and services. Social media marketing provides companies with a way to engage with existing customers and reach new ones while allowing them to promote their desired culture, mission, or tone.\r\n\r\nSocial media has changed the way we function as a society, including the way we connect with one another. As platforms like Facebook, Twitter, and Instagram took off, businesses also took notice. They began to use these sites to further their interests through social media marketing.', '2152226311633595467.jpg', '21321098951633595467.jpg'),
(11, 'Data analysis', 'digital_marketing', 'www.spyitfirm.com', 'Data analysis is a process of inspecting, cleansing, transforming, and modeling data with the goal of discovering useful information, informing conclusions, and supporting decision-making.\r\n\r\nData mining is a particular data analysis technique that focuses on statistical modeling and knowledge discovery for predictive rather than purely descriptive purposes, while business intelligence covers data analysis that relies heavily on aggregation, focusing mainly on business information.', '1698144151633595503.jpg', '4401479791633595503.jpg'),
(12, 'Affiliate Marketing', 'digital_marketing', 'www.spyitfirm.com', 'Affiliate marketing is one of the oldest forms of marketing, and the Internet has brought new life to this old standby. With affiliate marketing, influencers promote other people’s products and get a commission every time a sale is made or a lead is introduced.\r\n\r\nMany well-known companies like Amazon have affiliate programs that pay out millions of dollars per month to websites that sell their products', '4232252021633595527.jpg', '11799093771633595527.jpg'),
(13, 'Web Development1', 'web_development', 'www.spyitfirm.com', 'Web Development1\r\n', '6784614791634123846.jpg', '11861813991634124148.png'),
(14, 'Web Development2', 'web_development', 'www.spyitfirm.com', 'Web Development2\r\n', '6550446131634123872.jpg', '11268002771633944426.jpg'),
(15, 'Web Development3', 'web_development', 'www.spyitfirm.com', 'Web Development3\r\n', '13878285151634123886.jpg', '17635739261633944451.jpg'),
(16, 'Web Development4', 'web_development', 'www.spyitfirm.com', 'Web Development4\r\n', '16881309791634123927.jpg', '15744480131633944467.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `service_icon_name` varchar(100) NOT NULL,
  `services_name` varchar(100) NOT NULL,
  `services_details` text NOT NULL,
  `services_cover_photo` varchar(200) NOT NULL,
  `services_banner_photo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `service_icon_name`, `services_name`, `services_details`, `services_cover_photo`, `services_banner_photo`) VALUES
(1, 'fa-dashboard', 'Graphic Design', '    Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis nobis voluptatibus deserunt illo id mollitia, vero necessitatibus, soluta illum animi, cum pariatur possimus nihil fuga minima. Placeat vero atque quasi dolorum. Inventore, officia nam accusamus accusantium ratione amet aut, illo quia veritatis molestias perspiciatis facere suscipit quos tempora necessitatibus iure quibusdam voluptatibus. Obcaecati quibusdam deserunt repellat doloremque voluptatem corrupti sapiente, excepturi itaque modi dolorem labore enim. Voluptatum cum nostrum dolor amet cumque nihil. Illo quod enim deleniti nemo ullam soluta non sit vero ea, laudantium, nostrum praesentium ipsum quidem molestias amet animi illum quibusdam omnis error, reiciendis esse accusantium debitis quis explicabo. Voluptas perferendis debitis repudiandae earum amet rerum minima porro sed quos necessitatibus? Minima, eaque! Ratione accusantium atque provident, eaque distinctio odit nam! Omnis, quia nihil consectetur ullam ut veritatis expedita ipsam illo aperiam eaque ipsa explicabo rem, dicta a odit et ab saepe similique molestias amet laborum. Voluptatibus quis dolores consequuntur, accusantium aut doloremque fuga id molestiae perspiciatis. Itaque aperiam, deserunt commodi quidem provident maiores repudiandae officiis est minus, mollitia nam repellendus omnis obcaecati, doloribus vero nostrum totam consequuntur suscipit blanditiis? Blanditiis in sit saepe. Itaque perspiciatis nemo minima commodi incidunt iusto tenetur laudantium distinctio perferendis iste, fuga impedit deserunt mollitia amet, delectus, provident corrupti corporis quasi! Tenetur commodi rem sint voluptatum. Quos, a aut ab voluptas perspiciatis praesentium quasi aspernatur perferendis. Mollitia labore facilis, porro dolores iure velit atque non sint eaque blanditiis dolorum in nemo sequi praesentium hic aliquid itaque commodi placeat soluta quia ea cupiditate. Quo harum debitis odit necessitatibus asperiores animi laboriosam iusto? Qui, hic harum enim labore id aliquid obcaecati totam adipisci sint voluptate ad, est deleniti sunt aliquam ipsam architecto recusandae maiores molestias! In laudantium vero optio iste, quo repellendus aliquid! Sapiente eos, nihil ratione voluptatum recusandae fugit repellat vel quis nam minima cupiditate vero dolorum quasi praesentium ipsum molestiae dolorem aliquid rerum quisquam. Molestiae tempore dignissimos explicabo eius hic tenetur eum, reiciendis corrupti quasi facere animi dolorem ut nobis ducimus nam vel quos placeat quia perferendis possimus. Repellat dolorem excepturi porro doloremque quam? Explicabo commodi beatae nulla nobis fugit maxime dolores at, tempore ut itaque illo et repellendus unde id deleniti saepe, laboriosam, quis libero esse eveniet. Aliquam minus, ab similique debitis assumenda molestias, libero amet perferendis fuga porro sint doloremque eveniet ratione? Cum velit provident ex officia non et ab, alias delectus facere vero soluta debitis mollitia perspiciatis doloribus dignissimos error veniam quia earum reprehenderit! Vitae excepturi delectus iure amet cupiditate, illo sapiente, reiciendis similique quo, quaerat ab ad ex et autem quis dolore pariatur enim fugit necessitatibus quos fuga laudantium. Ea numquam incidunt reprehenderit, amet distinctio molestiae repudiandae eligendi velit architecto! Voluptatibus repellendus minima quae corrupti temporibus nostrum, beatae officiis impedit laudantium repudiandae doloremque earum cupiditate amet dicta adipisci sit non, deserunt doloribus ullam praesentium quas id pariatur? Sapiente perspiciatis quam suscipit voluptatibus ipsum labore perferendis eum ducimus exercitationem eaque blanditiis ea, ratione quaerat officiis rem, commodi unde odio possimus voluptates tempora facere eius. Laboriosam voluptatibus quo eaque culpa?', '18367830041634699011.jpg', '7446754331632992662.png'),
(2, 'fa-code', 'Web Design', '    Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis nobis voluptatibus deserunt illo id mollitia, vero necessitatibus, soluta illum animi, cum pariatur possimus nihil fuga minima. Placeat vero atque quasi dolorum. Inventore, officia nam accusamus accusantium ratione amet aut, illo quia veritatis molestias perspiciatis facere suscipit quos tempora necessitatibus iure quibusdam voluptatibus. Obcaecati quibusdam deserunt repellat doloremque voluptatem corrupti sapiente, excepturi itaque modi dolorem labore enim. Voluptatum cum nostrum dolor amet cumque nihil. Illo quod enim deleniti nemo ullam soluta non sit vero ea, laudantium, nostrum praesentium ipsum quidem molestias amet animi illum quibusdam omnis error, reiciendis esse accusantium debitis quis explicabo. Voluptas perferendis debitis repudiandae earum amet rerum minima porro sed quos necessitatibus? Minima, eaque! Ratione accusantium atque provident, eaque distinctio odit nam! Omnis, quia nihil consectetur ullam ut veritatis expedita ipsam illo aperiam eaque ipsa explicabo rem, dicta a odit et ab saepe similique molestias amet laborum. Voluptatibus quis dolores consequuntur, accusantium aut doloremque fuga id molestiae perspiciatis. Itaque aperiam, deserunt commodi quidem provident maiores repudiandae officiis est minus, mollitia nam repellendus omnis obcaecati, doloribus vero nostrum totam consequuntur suscipit blanditiis? Blanditiis in sit saepe. Itaque perspiciatis nemo minima commodi incidunt iusto tenetur laudantium distinctio perferendis iste, fuga impedit deserunt mollitia amet, delectus, provident corrupti corporis quasi! Tenetur commodi rem sint voluptatum. Quos, a aut ab voluptas perspiciatis praesentium quasi aspernatur perferendis. Mollitia labore facilis, porro dolores iure velit atque non sint eaque blanditiis dolorum in nemo sequi praesentium hic aliquid itaque commodi placeat soluta quia ea cupiditate. Quo harum debitis odit necessitatibus asperiores animi laboriosam iusto? Qui, hic harum enim labore id aliquid obcaecati totam adipisci sint voluptate ad, est deleniti sunt aliquam ipsam architecto recusandae maiores molestias! In laudantium vero optio iste, quo repellendus aliquid! Sapiente eos, nihil ratione voluptatum recusandae fugit repellat vel quis nam minima cupiditate vero dolorum quasi praesentium ipsum molestiae dolorem aliquid rerum quisquam. Molestiae tempore dignissimos explicabo eius hic tenetur eum, reiciendis corrupti quasi facere animi dolorem ut nobis ducimus nam vel quos placeat quia perferendis possimus. Repellat dolorem excepturi porro doloremque quam? Explicabo commodi beatae nulla nobis fugit maxime dolores at, tempore ut itaque illo et repellendus unde id deleniti saepe, laboriosam, quis libero esse eveniet. Aliquam minus, ab similique debitis assumenda molestias, libero amet perferendis fuga porro sint doloremque eveniet ratione? Cum velit provident ex officia non et ab, alias delectus facere vero soluta debitis mollitia perspiciatis doloribus dignissimos error veniam quia earum reprehenderit! Vitae excepturi delectus iure amet cupiditate, illo sapiente, reiciendis similique quo, quaerat ab ad ex et autem quis dolore pariatur enim fugit necessitatibus quos fuga laudantium. Ea numquam incidunt reprehenderit, amet distinctio molestiae repudiandae eligendi velit architecto! Voluptatibus repellendus minima quae corrupti temporibus nostrum, beatae officiis impedit laudantium repudiandae doloremque earum cupiditate amet dicta adipisci sit non, deserunt doloribus ullam praesentium quas id pariatur? Sapiente perspiciatis quam suscipit voluptatibus ipsum labore perferendis eum ducimus exercitationem eaque blanditiis ea, ratione quaerat officiis rem, commodi unde odio possimus voluptates tempora facere eius. Laboriosam voluptatibus quo eaque culpa?', '12671468911634699041.png', '3656285241634038800.jpg'),
(3, 'fa-database', 'Web Development', '   Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis nobis voluptatibus deserunt illo id mollitia, vero necessitatibus, soluta illum animi, cum pariatur possimus nihil fuga minima. Placeat vero atque quasi dolorum. Inventore, officia nam accusamus accusantium ratione amet aut, illo quia veritatis molestias perspiciatis facere suscipit quos tempora necessitatibus iure quibusdam voluptatibus. Obcaecati quibusdam deserunt repellat doloremque voluptatem corrupti sapiente, excepturi i	', '16499421991634699079.jpg', '16499026541634699079.jpg'),
(4, 'fa-bullhorn', 'Digital Marketing', '    Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis nobis voluptatibus deserunt illo id mollitia, vero necessitatibus, soluta illum animi, cum pariatur possimus nihil fuga minima. Placeat vero atque quasi dolorum. Inventore, officia nam accusamus accusantium ratione amet aut, illo quia veritatis molestias perspiciatis facere suscipit quos tempora necessitatibus iure quibusdam voluptatibus. Obcaecati quibusdam deserunt repellat doloremque voluptatem corrupti sapiente, excepturi i	', '11581163161634699501.jpg', '3487867841634699501.png');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(11) NOT NULL,
  `slider_content_title` varchar(300) NOT NULL,
  `slider_content_subtitle` varchar(500) NOT NULL,
  `slider_details` text NOT NULL,
  `slider_btn_name` varchar(200) NOT NULL,
  `slider_btn_link` text NOT NULL,
  `slider_banner_img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `slider_content_title`, `slider_content_subtitle`, `slider_details`, `slider_btn_name`, `slider_btn_link`, `slider_banner_img`) VALUES
(1, 'WELCOME TO Spy IT Firm', 'We Create Smart Generation', 'Spy IT Firm is an outsourcing firm based on freelance & outsourcing. Spy IT Firm started its journey in online outsourcing and service in January 2021.', 'View company profile', 'https://www.youtube.com/channel/UCUklvchGkfoy5EWPg6Ep9MQ', '1544219801634116890.jpg'),
(2, 'WELCOME TO Spy IT Firm', 'We Create Smart Generation', 'Spy IT Firm is an outsourcing firm based on freelance & outsourcing. Spy IT Firm started its journey in online outsourcing and service in January 2021.', 'View company profile', 'https://www.youtube.com/channel/UCUklvchGkfoy5EWPg6Ep9MQ', '15440786691634116904.jpg'),
(3, 'WELCOME TO Spy IT Firm', 'We Create Smart Generation', 'Spy IT Firm is an outsourcing firm based on freelance & outsourcing. Spy IT Firm started its journey in online outsourcing and service in January 2021.	', 'View company profile', 'https://www.youtube.com/channel/UCUklvchGkfoy5EWPg6Ep9MQ', '21092718881634117211.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `subscribes`
--

CREATE TABLE `subscribes` (
  `id` int(11) NOT NULL,
  `subscriber_email` varchar(100) NOT NULL,
  `subscribe_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subscribes`
--

INSERT INTO `subscribes` (`id`, `subscriber_email`, `subscribe_date`) VALUES
(1, 'sabbir@gmail.com', '2021-09-27 14:50:55'),
(2, 'sabbirbd@gmail.com', '2021-09-27 14:52:55');

-- --------------------------------------------------------

--
-- Table structure for table `team_members`
--

CREATE TABLE `team_members` (
  `id` int(11) NOT NULL,
  `team_member_name` varchar(100) NOT NULL,
  `team_member_designation` varchar(200) NOT NULL,
  `team_member_facebook_link` text NOT NULL,
  `team_member_twitter_link` text NOT NULL,
  `team_member_instaggram_link` text NOT NULL,
  `team_member_linkedin_link` text NOT NULL,
  `team_member_photo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `team_members`
--

INSERT INTO `team_members` (`id`, `team_member_name`, `team_member_designation`, `team_member_facebook_link`, `team_member_twitter_link`, `team_member_instaggram_link`, `team_member_linkedin_link`, `team_member_photo`) VALUES
(1, 'Md Sabbir Ahammed', 'Web Designer Officer', 'https://www.facebook.com/spysabbirahammed', 'https://twitter.com/spysabbir', 'https://www.instagram.com/spysabbir/', 'https://www.linkedin.com/in/spysabbir/', '11699536141634210660.jpg'),
(2, 'Shovon Saba', 'Web Developer Officer', 'fxdghfgjj', 'ghjghkhglhk', 'ftgkghkjghkgh', 'kgfjghkjhgjgh', '5900383041634209281.jpg'),
(3, 'Shahariar Alif', 'Digital Marketing Officer', 'chgfhfgjghjgh', 'jghkjgkhjkljh', 'khkfhdfgdfhg', 'dfhgfjhfgjhfg', '4204361221634206565.jpg'),
(4, 'Name', 'Marketing Officer', 'gdfgf', 'hfghghfghf', 'ghfghgh', 'fghgfhgfh', '15415213971634206595.jpg'),
(5, 'All Shahariar', 'Graphic Designer Officer', 'dsfgdfgf', 'dfhggfhfgjghkg', 'destrwerwerewewrewrwer', 'rewrewrewrtwe', '13965505231634207209.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `theme_default`
--

CREATE TABLE `theme_default` (
  `id` int(11) NOT NULL,
  `default_item_name` varchar(200) NOT NULL,
  `default_item_value` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `theme_default`
--

INSERT INTO `theme_default` (`id`, `default_item_name`, `default_item_value`) VALUES
(1, 'company_name', 'Spy IT Firm'),
(2, 'company_slogan', 'We Create Smart Generation'),
(3, 'company_email_address', 'contact@spyitfirm.com'),
(4, 'company_phone_number', '+8801878-136530'),
(5, 'company_about_details', 'Spy It Firm is an Outsourcing firm based on Freelance & Outsourcing. Spy It Firm started its journey in online outsourcing and service in January 2021. The main objective of Spy It Firm is to provide high-quality services to our valuable clients and achieve their full satisfaction. Spy It Firm deals with all kinds of freelance & outsourcing activities including any sort of IT-enabled training and services.\r\n\r\nAs one of the leading IT solution providers of Bangladesh, we are working with the vision of making the nation proficient in the Global IT village by building a platform that serves business owners as well as freelancers with comprehensive training for IT skills and professional enterprise solutions.'),
(6, 'company_address', ' Nawjor, Chowrasta, Gazipur, Dhaka, BD'),
(7, 'facebook_link', 'https://www.facebook.com/spyitfirm'),
(8, 'twitter_link', 'https://twitter.com/spyitfirm'),
(9, 'instagram_link', 'https://www.instagram.com/spyitfirm/'),
(10, 'linkedin_link', 'https://www.linkedin.com/in/spyitfirm/'),
(11, 'pinterest_link', 'https://www.pinterest.com/spyitfirm/'),
(12, 'youtube_link', 'https://www.youtube.com/channel/UCUklvchGkfoy5EWPg6Ep9MQ'),
(13, 'logo_photo', '10230289001635157342.png'),
(14, 'main_banner_photo', '17939174011635157342.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `designation` varchar(50) NOT NULL DEFAULT 'user',
  `gender` varchar(10) NOT NULL,
  `date_of_birth` date NOT NULL,
  `email_address` varchar(200) NOT NULL,
  `phone_number` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `profile_img` varchar(200) NOT NULL,
  `about_me` text NOT NULL,
  `facebook_profile_link` varchar(200) NOT NULL,
  `twitter_profile_link` varchar(200) NOT NULL,
  `instagram_profile_link` varchar(200) NOT NULL,
  `linkedin_profile_link` varchar(200) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `designation`, `gender`, `date_of_birth`, `email_address`, `phone_number`, `password`, `profile_img`, `about_me`, `facebook_profile_link`, `twitter_profile_link`, `instagram_profile_link`, `linkedin_profile_link`, `created_at`) VALUES
(1, 'Sabbir Ahammed', 'admin', 'male', '1999-10-09', 'admin@email.com', '+8801953 321402', '25d55ad283aa400af464c76d713c07ad', '18781332681634791165.png', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem obcaecati voluptas dignissimos enim veniam aut cupiditate doloribus velit, dolorum quisquam incidunt nisi itaque quis eos deserunt fugiat rerum dolor laboriosam in tenetur nulla quas sequi nam minima. Nesciunt recusandae, iusto officia sit expedita ipsam! Ut accusantium odit possimus hic reiciendis!', 'https://www.facebook.com/spysabbirahammed', 'https://twitter.com/spysabbir', 'https://www.instagram.com/spysabbir/', 'https://www.linkedin.com/in/spysabbir/', '2021-10-21 10:37:12');

-- --------------------------------------------------------

--
-- Table structure for table `working_process`
--

CREATE TABLE `working_process` (
  `id` int(11) NOT NULL,
  `process_title` varchar(200) NOT NULL,
  `process_details` text NOT NULL,
  `process_cover_photo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `working_process`
--

INSERT INTO `working_process` (`id`, `process_title`, `process_details`, `process_cover_photo`) VALUES
(1, 'Planning', 'The work planning process structure evolved from research, discussion, and review by means of a successive series of \"Plan, Do, Study, Act\" (PDSA) cycles.', '15496141421633861973.jpg'),
(2, 'Designing', 'This is why I often recommend to teams and leaders that they create a process map of their ideal design process. In other words, a template that everyone can refer to as they bring a product from idea to ship.', '14042400461633860966.jpg'),
(3, 'Developing', 'Processes can be formal or informal. Formal processes – also known as procedures –  are documented, and have well-established steps.', '10958034531633860992.jpg'),
(4, 'Launching', 'The key to successful project delivery is the consistency of the process. Specifically, you can develop a project management process, an approach that breaks down the key stages of every project into precise phases.', '20188174271633861004.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `choose_us`
--
ALTER TABLE `choose_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client_testimonials`
--
ALTER TABLE `client_testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company_overviews`
--
ALTER TABLE `company_overviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company_profiles`
--
ALTER TABLE `company_profiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts_messages`
--
ALTER TABLE `contacts_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_details`
--
ALTER TABLE `contact_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fun_facts`
--
ALTER TABLE `fun_facts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolios`
--
ALTER TABLE `portfolios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribes`
--
ALTER TABLE `subscribes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team_members`
--
ALTER TABLE `team_members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `theme_default`
--
ALTER TABLE `theme_default`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `working_process`
--
ALTER TABLE `working_process`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `choose_us`
--
ALTER TABLE `choose_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `client_testimonials`
--
ALTER TABLE `client_testimonials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `company_overviews`
--
ALTER TABLE `company_overviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `company_profiles`
--
ALTER TABLE `company_profiles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contacts_messages`
--
ALTER TABLE `contacts_messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contact_details`
--
ALTER TABLE `contact_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `fun_facts`
--
ALTER TABLE `fun_facts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `portfolios`
--
ALTER TABLE `portfolios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `subscribes`
--
ALTER TABLE `subscribes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `team_members`
--
ALTER TABLE `team_members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `theme_default`
--
ALTER TABLE `theme_default`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `working_process`
--
ALTER TABLE `working_process`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
