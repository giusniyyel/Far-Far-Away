-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 23-09-2021 a las 02:44:18
-- Versión del servidor: 8.0.21
-- Versión de PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `farfaraway`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `movies`
--

DROP TABLE IF EXISTS `movies`;
CREATE TABLE IF NOT EXISTS `movies` (
  `id` int NOT NULL AUTO_INCREMENT,
  `thumb` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `nombre` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `movie` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `sinopsis` varchar(200) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `descripcion` varchar(500) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `year` int NOT NULL,
  `genero` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `director` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf32 COLLATE=utf32_spanish_ci;

--
-- Volcado de datos para la tabla `movies`
--

INSERT INTO `movies` (`id`, `thumb`, `nombre`, `movie`, `sinopsis`, `descripcion`, `year`, `genero`, `director`) VALUES
(1, 'moana.jpg', 'Moana', 'moana.mp4', 'Una joven Hawaiana... ', 'Vaiana Waialiki es una joven entusiasta del mar y la única hija de un jefe marinero. Cuando los marineros de su aldea no pueden pescar ningún pez y todas las cosechas fallan, Vaiana descubre que el semidiós Maui causó el infortunio después de robar el corazón de la diosa Te Fiti. La única manera de salvar el destino de la isla es persuadiendo a Maui para que le devuelva el corazón a Te Fiti. Entonces, Vaiana emprende una arriesgada aventura para salvar a su aldea junto al semidiós Maui.', 2016, 'Fantasia', 'Ron Clements, John Musker.'),
(2, 'leon.jpg', 'El rey leon', 'elreyleon.mp4', 'Un pequeño cachorro huye tras la muerte de su padre. ', 'Tras el asesinato de su padre, Simba, un joven león es apartado su reino y tendrá que descubrir con ayuda de amigos de la sabana africana el significado de la responsabilidad y la valentía. Más tarde volverá para recuperar el control de su reino.', 1994, 'Fantasia', 'Rob Minkoff, Roger Allers.'),
(3, 'mulan.png', 'Mulan', 'mulan.mp4', 'Una joven se hace pasar por un chico para salvar...', 'El ejército de los Hunos, encabezado por el malvado Shun Yiu, quiere conquistar China. El emperador, para impedírselo, ha mandado a filas a todos los varones con el fin de proteger el imperio. Por otra parte, Mulán es una chica joven y valiente que vive en una aldea. Su padre está enfermo pero a pesar de ello quiere luchar por su país. Mulán no lo va a consentir y se fugará de casa con la intención de hacerse pasar por un chico y combatir en lugar de su padre.', 1998, 'Bélica', 'Tony Bancroft, Barry Cook.'),
(4, 'tierradeosos.jpg', 'Tierra de osos', 'tierradeosos.mp4', 'Un chico es convertido en oso.', 'Un joven que busca vengar la muerte de su hermano se transforma en oso y hace amistad con un cachorro que acaba de perder a su madre.', 2003, 'Aventura', 'Robert Walker, Aaron Blaise.'),
(5, 'cars.jpg', 'Cars', 'cars.mp4', 'Un auto de carreras queda a la deriva en la ruta 66.', 'El aspirante a campeón de carreras Rayo McQueen parece que está a punto de conseguir el éxito. Su actitud arrogante se desvanece cuando llega a una pequeña comunidad olvidada que le enseña las cosas importantes de la vida que había olvidado.', 2006, 'Fantasia', ' Owen Wilson, Larry the Cable Guy, Bonnie Hunt.'),
(6, 'labellaylabestia.png', 'La bella y la bestia', 'labellaylabestia.mp4', 'Una joven francesa queda atrapa en el castillo de la bestia.', 'Belle, una joven hermosa y brillante, asume el lugar de su padre como prisionero en el castillo de una bestia. Poco a poco, la valiente Belle irá dándose cuenta de que el príncipe bestia no es el malvado ser que todos creen que es y tiene, en realidad, un gran corazón.', 1991, 'Fantasia', 'Gary Trousdale, Kirk Wise'),
(7, 'hercules.jpg', 'Hercules', 'hercules.mp4', 'El hijo de Zeus es despojado de su inmortalidad.', 'Hércules, hijo de Hera y el dios Zeus, es robado del Olimpo por los secuaces de Hades para llevarlo a la Tierra y despojarlo de su inmortalidad. Sin embargo, el plan no resulta como se esperaba y el niño aun conserva algunos poderes divinos. Durante su adolescencia, Hércules deberá demostrar que es digno de volver a ascender al Olimpo con los otros dioses. Con la ayuda del sátiro Filoctetes, Hércules aprenderá a usar su fuerza para luchar contra una serie de criaturas malvadas.', 1997, 'Bélica', 'Ron Clements, John Musker.'),
(8, 'liloystitch.png', 'Lilo & Stitch', 'liloystitch.mp4', 'Una pequeña hawaiana se hace amiga de un experimento intergalatico.', 'Lilo, una niña hawaiana que se siente sola, decide adoptar un \"perro\" muy feo al que llama Stitch, que podría ser la compañía perfecta si no fuera en realidad el fruto de un experimento genético que se ha escapado de un planeta alienígena y que ha aterrizado en la tierra por casualidad. Con su amor y su inquebrantable fe en el \"ohana\" (el concepto hawaiano de la familia), Lilo termina conquistando el corazón de Stitch y le ofrece algo que el original perro nunca pensó tener: un hogar.', 2002, 'Fantasia', 'Chris Sanders, Dean DeBlois.'),
(9, 'toystory.jpg', 'Toy Story', 'toystory.mp4', 'Woody y Buz, dos juguetes se embarcan en la aventura para volver a la habitación de Andy.', 'Cuando su dueño Andy se prepara para ir a la universidad, el vaquero Woody, el astronauta Buzz y el resto de sus amigos juguetes comienzan a preocuparse por su incierto futuro. Todos acaban en una guardería donde comenzarán una serie de trepidantes y divertidas aventuras.', 1995, 'Aventura', 'John Lasseter.'),
(10, 'nemo.jpg', 'Buscando a Nemo', 'buscandoanemo.mp4', 'Un padre busca a su hijo con ayuda de una Dori, una pez con memoria de corto plazo.', 'Nemo, un pequeño pececillo, muy querido y protegido por su padre, se pierde fuera de la gran barrera del arrecife australiano, después de ser capturado por este arrecife, Nemo terminará en una pecera en Sidney. Su padre, un pez payaso, parte en su búsqueda y se embarca en una peligrosa aventura con Dory, un pez con muy poca memoria. Al mismo tiempo, Nemo y sus nuevos amigos ya traman un plan para escapar de la pecera.', 2003, 'Aventura', ' Andrew Stanton.'),
(11, 'monster.jpg', 'Monster, Inc.', 'monster.mp4', 'Mike y Sulli se embarcan en una aventura en el mundo de los monstruos con una niña humana.', 'Monsters, Incorporated es la fábrica de sustos más grande en el mundo de los monstruos y James P. Sullivan es uno de sus mejores asustadores. Sullivan es un monstruo grande e intimidante de piel azul, grandes manchas color púrpura y cuernos. Su asistente, mejor amigo y compañero de cuarto es Mike Wazowski, un pequeño y alegre monstruo verde con un solo ojo. Boo, una niña pequeña visita lugares en donde nunca antes había estado un ser humano.', 2001, 'Fantasia', 'Pete Docter'),
(12, 'losincreibles.png', 'Los Increibles', 'losincreibles.mp4', 'Un súper heroe retirado vuelve a la accion y esta vez tiene compañia.', 'Helen es reclutada para ayudar a que la acción vuelva a la vida de los Súper, mientras Bob se enfrenta a la rutina de su vida diaria \"normal\" en el hogar. En casa debe lidiar con un bebé que está a punto de descubrir sus superpoderes. Mientras tanto un nuevo villano trama un plan brillante y peligroso que lleva a pique toda la estabilidad conseguida y que solo Los Increíbles podrán afrontar juntos.', 2004, 'Fantasia', 'Brad Bird');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` mediumtext CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `apellido` mediumtext CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `password` mediumtext CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `email` mediumtext CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
