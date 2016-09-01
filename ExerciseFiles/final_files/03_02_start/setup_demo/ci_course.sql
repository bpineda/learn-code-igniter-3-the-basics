-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Servidor: localhost:3306
-- Tiempo de generación: 31-08-2016 a las 14:33:27
-- Versión del servidor: 5.5.42
-- Versión de PHP: 7.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de datos: `ci_course`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `agents`
--

CREATE TABLE `agents` (
  `id` int(2) unsigned NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `agents`
--

INSERT INTO `agents` (`id`, `name`, `description`) VALUES
(1, 'Frank Jones', ''),
(2, 'Jenny Smith', ''),
(3, 'Corey Sanchez', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `properties`
--

CREATE TABLE `properties` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `street` text NOT NULL,
  `city` varchar(30) NOT NULL,
  `state` varchar(30) NOT NULL,
  `zip_code` varchar(10) NOT NULL,
  `agents_id` int(4) NOT NULL,
  `status_id` int(2) NOT NULL,
  `latitude` varchar(100) NOT NULL,
  `longitude` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `properties`
--

INSERT INTO `properties` (`id`, `name`, `description`, `street`, `city`, `state`, `zip_code`, `agents_id`, `status_id`, `latitude`, `longitude`, `image`) VALUES
(1, '4 Bedroom 2 Story House', 'Beautiful 3200 sq. foot, 4 bedroom, 2.5 bath, stone exterior home on a 1/4 acre lot, perfect for entertaining and family gatherings. Open kitchen and adjacent living room with glass doors that open up to a large back patio and landscaping throughout. Spacious master suite with private balcony and his and hers walk in closets.', '4669 Raymond Court', 'Greeley', 'CO', '80631', 1, 1, '39.727327', '-104.974558', 'ThinkstockPhotos-145054512.jpg'),
(2, 'Spacious Classic Home', 'Situated on 1 acre with a wraparound driveway, sits this beautiful 4400 sq. foot, 6 bedroom, 3.5 bath brick home. Located at the top of the foothills with scenic views of the valley, this home is an entertainer''s dream. Master chef''s kitchen with double oven and all stainless steel appliances. Game room with a built in bar, and large back yard for year round entertainment.', '148 Euclid Ave.', 'Loveland', 'CO', '80537', 2, 1, '39.754990', '-104.939604', 'ThinkstockPhotos-160415922.jpg'),
(3, '3 Bedroom Condo', 'Description: Newer development close to shopping and schools. This 3 story, 3 bedroom, 2.5 bath, 1700 sq. foot condo, with 2 car attached garage, is perfect for the family that wants to be in the center of it all. Spacious kitchen with large island, and living room area are great for family gatherings. The clubhouse situated in the center of the condos has a gym area, pool, and playground.', '1934 Clover Lane', 'Platteville', 'CO', '80651', 2, 1, '39.769505', '-105.013933', 'ThinkstockPhotos-175767618.jpg'),
(4, 'Unique Condo for Sale', 'Located in a quiet neighborhood west of Denver this quaint 4 story, 3 bedroom, 2 bath condo is a designers dream! 4th story balconies off of the master bath and office space with beautiful mountain views. Newly remodeled kitchen and bathrooms, new carpet and paint throughout.', '8540 Grover Street', 'Golden', 'CO', '80401', 1, 2, '39.750014', '-105.129204', 'ThinkstockPhotos-178044066.jpg'),
(5, 'Office Space for Lease', '2500 Sq. foot office space available in new modern retail complex. 2 restrooms and kitchenette already built into space. Large nearby household demographic, located in strategic busy intersection in an area with untapped potential for professional, retail, or medical facilities.', '994 Main Street, Suite E', 'Parker', 'CO', '80134', 3, 3, '39.709405', '-104.832230', 'ThinkstockPhotos-179240420.jpg'),
(6, 'Traditional Style 2 Story Home', 'This lovely 2600 sq. foot, 3 bedroom plus bonus room, 2.5 bath, home is located in a highly desired neighborhood, with great schools and nearby shopping. Built in 2014 this home has a large living room, spacious kitchen, master suite with oversized spa bathtub, and walk in closet.\r\n', '675 Sandy Rd.', 'Brighton', 'CO', '80603', 1, 2, '40.028771', '-105.043716', 'ThinkstockPhotos-180652110.jpg'),
(7, 'Modern Architectural Home', 'This 1850 sq. foot, 3 bedroom, 2 bath home embraces the mid-century modern style elements of clean rectilinear design. Steel staircase railings and a concert accent wall continue the modern look inside. Cooks kitchen with high end contemporary finishes throughout complete the design. If you’re a modernist at heart, you’ll love this house!', '359 Steele Drive', 'Fort Collins', 'CO', '80524', 2, 1, '40.085532', '-104.586411', 'ThinkstockPhotos-464586322.jpg'),
(8, 'Charming Fixer-upper', 'This 1964 1050 sq. foot, 2 bedroom 1.5 bath is situated close to schools and shopping. Remodeled in 1987, it’s a great option for the do-it-yourself type looking for a place to fix up and call their own. Large recently landscaped yard and carport in the rear.', '970 Douglas Lane', 'Thorton', 'CO', '80602', 3, 3, '40.025616', '-105.274429', 'ThinkstockPhotos-480775533.jpg'),
(9, 'Tudor Home – New Construction', 'New construction in popular Denver community. 4 bedroom, 3 bath, 2650 sq. feet Tudor style home. Large open floor plan is great for families and entertaining. Construction to be complete in early 2017. Buyer has option to choose finishes and appliances.', '7004 Lake Drive', 'Denver', 'CO', '80216', 3, 1, '39.897200', '-104.525986', 'ThinkstockPhotos-509985639.jpg'),
(10, 'Cozy Contemporary Home for Sale', 'Recently remodeled 1800 sq. foot, 3 bedroom 2 bath home in outskirts of town. Beautiful brick fireplace, large yard, covered patio area with sliding glass doors enable you to feel cozy any time of the year. Large master bedroom with walk in closet and built in storage.\r\n', '8701 Brock Rd.', 'Boulder', 'CO', '80303', 2, 3, '40.487797', '-104.867935', 'ThinkstockPhotos-513755334.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `status`
--

CREATE TABLE `status` (
  `id` int(2) unsigned NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `status`
--

INSERT INTO `status` (`id`, `name`, `description`) VALUES
(1, 'Available', ''),
(2, 'Sold', ''),
(3, 'Committed', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `agents`
--
ALTER TABLE `agents`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `agents`
--
ALTER TABLE `agents`
  MODIFY `id` int(2) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `properties`
--
ALTER TABLE `properties`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `status`
--
ALTER TABLE `status`
  MODIFY `id` int(2) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;