-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 14-08-2013 a las 04:16:25
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `db_examen`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alternativa`
--

CREATE TABLE IF NOT EXISTS `alternativa` (
  `AlternativaId` int(11) NOT NULL AUTO_INCREMENT,
  `AlternativaA` varchar(250) COLLATE utf8_spanish_ci DEFAULT NULL,
  `AlternativaB` varchar(250) COLLATE utf8_spanish_ci DEFAULT NULL,
  `AlternativaC` varchar(250) COLLATE utf8_spanish_ci DEFAULT NULL,
  `AlternativaD` varchar(250) COLLATE utf8_spanish_ci DEFAULT NULL,
  `AlternativaE` varchar(250) COLLATE utf8_spanish_ci DEFAULT NULL,
  `PreguntaId` int(11) NOT NULL,
  PRIMARY KEY (`AlternativaId`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=23 ;

--
-- Volcado de datos para la tabla `alternativa`
--

INSERT INTO `alternativa` (`AlternativaId`, `AlternativaA`, `AlternativaB`, `AlternativaC`, `AlternativaD`, `AlternativaE`, `PreguntaId`) VALUES
(1, 'El éxito de un líder', 'Los asuntos no negociables de Long Beach', 'Cuestiones no negociables para la mejora del sistema educativo', 'Manual de estrategias del líder de hoy', '', 1),
(2, 'líneas de acción que no se pueden trucar.', 'palancas que permiten mejorar el clima institucional.', 'palancas que aseguran la mejora del sistema educativo.', 'líneas de acción indispensables para mejorar el sistema.', '', 2),
(3, 'El éxito del líder está en decidir qué cuestiones son “no negociables”.', 'Los líderes que siguen un “manual de estrategias” no son exitosos.', 'El plan de estudios, en todos los casos, siempre es una cuestión no negociable', 'Los estándares y el diseño de planes de estudio siempre son asuntos negociables', '', 3),
(4, 'Mostrar el sistema de trabajo del ministro de Educación de Eslovenia, Slavko Gaber', 'Proponer una estrategia para la mejora del sistema educativo.', 'Explicar que el Ministerio de Educación existe para respaldar a las escuelas.', 'Reflexionar sobre la importancia de los estándares nacionales y la capacitación  profesional.', '', 4),
(5, 'La informatización del texto escrito', 'La revolución tecnológica', 'Las tareas del lector moderno', 'Las nuevas formas de ser lector', '', 5),
(6, 'El lector competente es capaz de transformar la información en conocimiento.', 'Un lector es competente cuando critica la información.', 'No hay una única y universal manera de leer.', 'Un lector competente lee simultáneamente una variedad de textos.', '', 6),
(8, 'Leer es una habilidad que se adquiere en un período exacto de la vida y que se aplica  indistintamente a diversos textos y situaciones.', 'La revolución tecnológica mecaniza la lectura. c.  La apropiación y el uso de la lectura no se acab', 'La apropiación y el uso de la lectura no se acaban nunca, pues siempre es posible  profundizar las competencias lectoras.', 'El texto informatizado posee una presencia abrumadora.', '', 9),
(9, 'Sostener que una vez adquirida la competencia lectora, estas permanecen fijas a lo largo  de la vida.', 'Reflexionar sobre los cambios profundos que aportó la revolución tecnológica en la forma  de ser lector.', 'Explicar el cambio de actitud del lector moderno.', 'Reflexionar sobre el cambio de los soportes, los códigos, los usos y las funciones que  trae consigo la revolución tecnológica.', '', 10),
(10, 'La educación en el Perú', 'Los actores de la educación', 'La complejidad del sistema educativo', 'Cómo mejorar la educación', '', 11),
(11, 'Todo avance es multifactorial', 'Un factor explica todo', 'Todo avance es unilateral', 'Los cambios son el resultante de procesos multisistémicos', '', 12),
(12, 'Los cambios educativos impuestos a rajatabla son los que evidencian mejores resultados.', 'Los cambios involucran una creciente complejidad técnica y política.', 'Es necesario y posible acometer nuevos desafíos para acrecentar la calidad de los  aprendizajes.', 'Todo cambio educativo de envergadura es el resultante del consenso de los actores  involucrados.', '', 13),
(13, 'Reflexionar sobre la importancia del consenso y el involucramiento de los actores para  mejorar la educación.', 'Describir el proceso de mejora del sistema educativo peruano.', 'Fundamentar la necesidad de mejorar la educación.', 'Defender la complejidad de los factores para el mejoramiento de la educación.', '', 14),
(15, 'Los sistema educativos de América Latina', 'Conceptualización de la calidad educativa', 'Retos de la evaluación de la calidad educativa', 'La integralidad de la educación', '', 16),
(16, 'Una educación de calidad se ha de nutrir de una evaluación que permita educar y  desarrollar capacidades sólo de las áreas fundamentales.', 'Es necesario que los sistemas educativos asuman un enfoque global e integrador de la  evaluación.', 'Aún no se ha demostrado si las evaluaciones nacionales optimizan la calidad de la  educación.', 'Par dar cuenta de la calidad educativa se debe medir los aprendizajes cognitivos que  logran los estudiantes en determinadas áreas del saber.', '', 17),
(17, 'Las evaluaciones nacionales pueden ser el mayor obstáculo para la mejora educativa.', 'a evaluación de la calidad educativa debe ser coherente con los principios del  aprendizaje.', 'Con frecuencia se ha evaluado la calidad educativa desde una perspectiva claramente  reduccionista.', 'Con frecuencia se ha evaluado la calidad educativa desde una perspectiva claramente  reduccionista.', '', 18),
(18, 'Reflexionar sobre la brecha entre lo que se considera calidad de la educación y las  acciones que se toman para evaluarla.', 'Proponer orientaciones técnicas para transformar la educación de los países de América  Latina.', 'Promover una educación de real calidad para todos los estudiantes.', 'Reflexionar sobre los nuevos enfoques de evaluación en América Latina.', '', 19),
(19, 'La docencia, una profesión muy sensible', 'La complejidad de la enseñanza', 'Políticas que mejoran la enseñanza', 'La docencia, una profesión esencial', '', 20),
(20, 'ocasional', 'radical', 'fundamental', 'suplementario', '', 21),
(21, 'Es necesario garantizar la calidad de la enseñanza para contar con ciudadanos  competentes.', 'Una ciudadanía educada jamás se equivoca en la elección de sus candidatos.', 'El vínculo entre economía vigorosa y fuerza laboral educada atrae a demagogos e  impostores.', 'La futura fuerza laboral del país depende del crecimiento económico.', '', 22),
(22, 'La calidad de la enseñanza es el elemento más importante para promover altos  niveles de aprendizaje', 'La calidad de la enseñanza tiene consecuencias momentáneas en nuestros  estudiantes.', 'Una economía vigorosa no requiere de una fuerza laboral educada para facilitar la  innovación y la iniciativa.', 'La calidad de la educación es fundamental para la productividad general y global y  para el bienestar personal y general.', 'A y D', 23);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE IF NOT EXISTS `persona` (
  `PersonaId` int(11) NOT NULL AUTO_INCREMENT,
  `PersonaApellido` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `PersonaNombre` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `PersonaEmail` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `PersonaTelefono` varchar(35) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`PersonaId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pregunta`
--

CREATE TABLE IF NOT EXISTS `pregunta` (
  `PreguntaId` int(11) NOT NULL AUTO_INCREMENT,
  `PreguntaNumero` int(11) NOT NULL,
  `Pregunta` varchar(500) COLLATE utf8_spanish_ci NOT NULL,
  `SimulacroId` int(11) NOT NULL,
  PRIMARY KEY (`PreguntaId`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=24 ;

--
-- Volcado de datos para la tabla `pregunta`
--

INSERT INTO `pregunta` (`PreguntaId`, `PreguntaNumero`, `Pregunta`, `SimulacroId`) VALUES
(1, 1, 'El título más adecuado para el texto es:', 1),
(2, 2, 'La expresión: “estas cuestiones no negociables se convierten en puntos de anclaje de la reforma del sistema” quiere decir que las cuestiones no negociables son…', 1),
(3, 3, 'De acuerdo al texto se puede inferir que:', 1),
(4, 4, '¿Cuál ha sido el propósito del autor del texto?', 1),
(5, 5, 'El título más adecuado para el texto es:', 1),
(6, 6, 'La expresión “la tarea del lector se multiplica si no se conforma con &lt;picotear&gt; de aquí y de allá y se propone una mirada crítica sobre una información con frecuencia desordenada y difusa ”, quiere decir que:', 1),
(9, 7, 'De acuerdo al texto se puede inferir que:', 1),
(10, 8, '¿Cuál ha sido el propósito del autor del texto?', 1),
(11, 9, 'El título más adecuado para el texto es:', 1),
(12, 10, 'La expresión “los progresos son la consecuencia de múltiples factores que interactúan y  se refuerzan entre sí de manera sistémica”, quiere decir que:', 1),
(13, 11, 'De acuerdo al texto se puede inferir que:', 1),
(14, 12, '¿Cuál ha sido el propósito del autor del texto?', 1),
(16, 13, '¿Cuál sería el título más adecuado para la lectura?', 1),
(17, 14, 'De acuerdo al texto se puede inferir que:', 1),
(18, 15, 'Cuando los autores afirman que “los sistemas nacionales de evaluación permanecen  atrapados en una conceptualización de la calidad que se reduce y limita a dar cuenta del  desempeño de los estudiantes en áreas curriculares claves, tales como lengua,  matemáticas, ciencias y ciencias sociales ” quieren decir que:', 1),
(19, 16, '¿Cuál ha sido el propósito de los autores del texto?', 1),
(20, 17, 'El título más adecuado para el texto es:', 1),
(21, 18, 'En la expresión, la docencia ha sido llamada la “profesión esencial”, la palabra esencial  hace referencia a:', 1),
(22, 19, 'De acuerdo al texto se puede inferir que:', 1),
(23, 20, 'De acuerdo al texto, ¿cuáles de las siguientes afirmaciones son correctas?', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `puntaje`
--

CREATE TABLE IF NOT EXISTS `puntaje` (
  `PuntajeId` int(11) NOT NULL,
  `PuntajeTotal` int(11) DEFAULT NULL,
  `SimulacroId` int(11) NOT NULL,
  `UsuarioId` int(11) NOT NULL,
  PRIMARY KEY (`PuntajeId`,`SimulacroId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `respuesta`
--

CREATE TABLE IF NOT EXISTS `respuesta` (
  `RespuestaId` int(11) NOT NULL AUTO_INCREMENT,
  `Respuesta` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `PreguntaId` int(11) NOT NULL,
  `RespuestaPuntaje` int(11) DEFAULT NULL,
  PRIMARY KEY (`RespuestaId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `respuestausuario`
--

CREATE TABLE IF NOT EXISTS `respuestausuario` (
  `RespuestaUsuarioId` int(11) NOT NULL,
  `RespuestaUsuario` char(1) COLLATE utf8_spanish_ci DEFAULT NULL,
  `UsuarioId` int(11) NOT NULL,
  `SimulacroId` int(11) NOT NULL,
  PRIMARY KEY (`RespuestaUsuarioId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `simulacro`
--

CREATE TABLE IF NOT EXISTS `simulacro` (
  `SimulacroId` int(11) NOT NULL AUTO_INCREMENT,
  `SimulacroNumero` int(11) DEFAULT NULL,
  `SimulacroNombre` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `SimulacroEstado` char(1) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`SimulacroId`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `simulacro`
--

INSERT INTO `simulacro` (`SimulacroId`, `SimulacroNumero`, `SimulacroNombre`, `SimulacroEstado`) VALUES
(1, 1, 'Simulacro 01', 'A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `texto`
--

CREATE TABLE IF NOT EXISTS `texto` (
  `TextoId` int(11) NOT NULL AUTO_INCREMENT,
  `TextoTitulo` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `Texto` text COLLATE utf8_spanish_ci,
  `SimulacroId` int(11) NOT NULL,
  `TextoEstado` char(1) COLLATE utf8_spanish_ci NOT NULL DEFAULT 'A',
  PRIMARY KEY (`TextoId`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `texto`
--

INSERT INTO `texto` (`TextoId`, `TextoTitulo`, `Texto`, `SimulacroId`, `TextoEstado`) VALUES
(1, 'Texto I', 'La designación de un nuevo líder plantea una disyuntiva para el sistema, pero lo que estos líderes hacen con esa oportunidad es lo que determina su éxito o su fracaso.  Nuestra investigación demuestra que una vez que asumen sus cargos, los nuevos líderes exitosos siguen un “manual de estrategias”, independientemente del nivel de desempeño del sistema, su cultura o ubicación geográfica.<br />\r\n<br />\r\nEl primer gran reto del nuevo líder será decidir qué palancas se deben utilizar para mejorar el sistema. Para cada una de estas, el líder debe definir un pequeño conjunto de normas o medidas fundamentales: las llamamos “no negociables”, tomando prestado un término de uso frecuente por los líderes del sistema en Long Beach. Estas cuestiones no negociables se convierten en puntos de anclaje de la reforma del sistema. Los líderes exitosos se mantienen atentos para asegurar que exista poca o ninguna negociación en su puesta en práctica, aunque se negocien otros aspectos de la reforma frecuentemente. Según lo observado por un líder del sistema de Lituania: “Una reforma es como un gran tazón de sopa. El cocinero revuelve la sopa, pero si la cuchara es muy corta, sólo mezcla la superficie. La cuchara debe ser lo suficientemente larga como para alcanzar la carne y las papas que se encuentran en el fondo”. La “carne y las papas” son las cuestiones no negociables.<br />\r\n<br />\r\nDos de los asuntos no negociables de Long Beach fueron los estándares de aprendizaje y la capacitación profesional. Según lo subrayado por un líder: “Nuestro principal objetivo era terminar con el trabajo aislado y ser muy claros en el hecho de que las oficinas centrales existen para respaldar a las escuelas... apropiarse de los estándares y la capacitación profesional era la única manera de hacerlo realidad”. De igual modo, cuando el nuevo ministro de Educación de Eslovenia, Slavko Gaber, asumió su cargo en 1992, se concentró en los recursos, el plan de estudios y la capacitación profesional como cuestiones no negociables. El Ministro también asumió un compromiso con el modo en que se realizarían esos cambios: “Lo más importante fue que los docentes se involucraran... los docentes tenían la sensación de que se les exigía”. Por ejemplo, realizó consultas con los docentes sobre los estándares y el diseño de planes de estudio de cuatro años, negándose a ceder ante la presión política de ponerle fin al debate, aun cuando vencía el plazo para anunciar el nuevo plan de estudios. Por el contrario, se presentó ante el Parlamento y les pidió más tiempo para continuar el proceso de consulta con los docentes. Tres meses después, Gaber había resuelto con éxito junto a los docentes los problemas relativos a la distribución del tiempo por asignatura, y en 1996 anunciaba la reforma del nuevo plan de estudios.<br />\r\n<br />\r\n“Cómo continúan mejorando los sistemas educativos de mayor progreso en el mundo”<br />\r\nMona Mourshed, ChineziChijioke, Michael Barber', 0, 'A'),
(2, 'Texto II', 'La revolución tecnológica que estamos viviendo en las últimas décadas ha provocado la informatización del texto impreso y abre paso a una nueva forma de ser lector, el que construye su propio texto; navegando por la red, a través de los webs, chats, blogs, etc., el lector construye su propia ruta y no se limita a seguir la que fue marcada por autores con frecuencia desaparecidos o, como mínimo, desconocidos. Para la lectura, la informatización tiene consecuencias aparentemente contradictorias: ser lector es ahora, según se mire, más fácil o más difícil. Por una parte, la información es mucho más abundante e inmediata, y los canales de producción y acceso cada vez menos selectivos. Por otra parte, interactuar con el flujo incesante de información –en la que con frecuencia confluyen elementos distractores de enorme atractivo y que favorecen una «mente de malabarista»– exige unas competencias que no requiere en el mismo grado la lectura de información analítica de textos ordenados y concebidos según una lógica<br />\r\n<br />\r\nAparentemente, al menos, la tarea del lector se multiplica si no se conforma con «picotear» de aquí y de allá y se propone una mirada crítica sobre una información con frecuencia desordenada y difusa. Esta lectura posmoderna o hermenéutica hace más perentoria aún la necesidad de contribuir a formar lectores activos, dotados de criterio, capaces de combinar la lectura rápida y muchas veces superficial que a menudo requiere la red con la capacidad de concentrarse en la lectura lineal de textos narrativos o expositivos.<br />\r\n<br />\r\nAsí, nos vamos acercando al lector moderno, un lector que procesa el texto, que accede al conocimiento de otros (e incrementa y transforma el suyo propio) a través de la lectura de múltiples textos, que son leídos por y para uno mismo, en un silencio conducente a la reflexión. Este lector moderno, que elije, procesa, dialoga con el texto y lo interpela; ese lector que todos proponemos en nuestras instituciones de educación para formar ciudadanos libres e ilustrados, ese lector es, en perspectiva histórica, un invento bastante reciente.<br />\r\n<br />\r\n“Competencia lectora y aprendizaje”<br />\r\nIsabel Solé', 1, 'A'),
(3, 'Texto III', 'Los cambios en educación son difíciles, complejos y prolongados. Son procesos largos en su gestación, diseño, aplicación y despliegue. Lo que un Presidente y un Ministro siembran no se cosecha sino hasta varios gobiernos después.<br />\r\n<br />\r\nMejorar la educación de un país exige persistencia, vocación y trabajo en equipo. Los progresos son la consecuencia de múltiples factores que interactúan y se refuerzan entre sí de manera sistémica.<br />\r\n<br />\r\nLos estudios y mediciones suelen arrojar resultados variados, y eso hace más difícil discernir lo que es esencial de cambiar. No hay recetas simples. Además, como los costos financieros son elevados y los resultados tardan en manifestarse, los gobiernos enfrentan la necesidad de conciliar la inversión en educación con sus potenciales efectos electorales.<br />\r\n<br />\r\nUn bono en dinero a la familia es más directo, pues produce la percepción de mejoría inmediata. La construcción de grandes obras públicas se ve, pues su materialidad es indiscutible y se pueden inaugurar muchas durante un mismo periodo de gobierno. Estas obras suelen tener un reconocimiento palpable y dan más votos que inversiones en educación, las que con frecuencia son cuestionadas –sea por ignorancia, simplismo o afán crítico– por quienes imaginan frutos de rápida maduración, como si se tratara de una empresa.<br />\r\n<br />\r\nLograr un progreso en comprensión de lectura o habilidad matemática, o elevar un promedio nacional, a la par de aumentar la cobertura –en niños y jóvenes que antes se encontraban fuera de la escuela por discapacidad, por provenir de familias disfuncionales o carentes de recursos– puede tomar a lo menos una década. Ello, sin contar con que en educación hay múltiples actores con ideas, ideologías e intereses distintos y cada uno –en particular los más opinantes– cree saber cómo se arreglan las cosas con dos o tres brochazos.<br />\r\n<br />\r\nLa escasa comprensión de la complejidad de los factores involucrados en el mejoramiento de la educación conduce a formular apreciaciones tajantes como que “la educación es un desastre”, que no solo menosprecian los logros obtenidos y suelen venir acompañadas de recetas fáciles e inconducentes, sino que alejan cualquier posibilidad de solución y desmoralizan a profesores, directivos, expertos, funcionarios, padres y estudiantes. En tal sentido, el diagnóstico de la calidad de la educación debe ser certero y estar fundado en evidencias, y las acciones tendientes a elevarla deben estar inspiradas en una voluntad maciza.<br />\r\n<br />\r\nEs posible, entonces, que los gobiernos se aproximen con cautela o resuelvan postergar decisiones, que –aunque son trascendentes– lucen azarosas o infructuosas. Peor es caer en la tentación simplista de jugar  con medidas llamativas para ganar  un aplauso pasajero, apostando a ganar en el corto plazo y decidiendo “que pague el siguiente” cuando las cosas no funcionan.<br />\r\n<br />\r\nPor ello es tan decisivo capturar con sabiduría la oportunidad de impulsar acuerdos sustantivos para convenir cambios de envergadura y hacerlo con seriedad, informando y consultando para alcanzar el respaldo y la eficacia que requieren los cambios profundos y perdurables en educación.<br />\r\n<br />\r\n“Cómo construir consensos en educación”<br />\r\nSergio Bitar', 1, 'a'),
(5, 'Texto IV', 'Un hecho especialmente llamativo es que, hace ya tiempo, los sistemas educativos de los distintos países de América Latina se hallan en tensión por el grave desencuentro entre las acciones que se toman en la esfera de la evaluación de la calidad de la educación y el concepto quede esta se tiene. Esta tensión se ve reflejada en la fragmentación y reducción de los ámbitos de calidad evaluados y la cada vez mayor integralidad exigida y demandada al concepto de calidad educativa a lograr.<br />\r\n<br />\r\nEfectivamente, mientras el concepto de calidad educativa concita una adhesión mayoritaria y creciente por asumirlo y comprenderlo en tanto referente que ha de atender los aspectos cognitivos, expresivos, ciudadanos y valóricos necesarios para el desarrollo integral de los seres humanos, los sistemas nacionales de evaluación permanecen atrapados en una conceptualización de la calidad que se reduce y limita a dar cuenta del desempeño de los estudiantes en áreas curriculares claves, tales como lengua, matemáticas, ciencias y ciencias sociales.<br />\r\n<br />\r\nAsí, frente a la imperiosa necesidad de generar condiciones y recursos para que las escuelas ofrezcan una educación integral acorde a las necesidades de un pleno desarrollo e inclusión social, las sistemáticas y generalizadas evaluaciones nacionales entregan poderosas señales que hacen del logro cognitivo lo prioritario e importante de medir y monitorearen el campo educativo formal. Más aún, se ha responsabilizado a los sistemas nacionales de evaluación de haber privilegiado un concepto de calidad restringido a ciertas disciplinas y estándares que difícilmente pueden cumplir las escuelas que atienden a los sectores pobres, pudiendo incluso incentivar la selección y exclusión para contar con los mejores estudiantes.<br />\r\n<br />\r\nLas críticas a esta fragmentación y reducción de la calidad educativa por parte de las evaluaciones nacionales estandarizadas se ven incrementadas por la desconfianza y dudas respecto de la utilidad de la información que ellas generan, la confiabilidad y validez de las pruebas utilizadas, los criterios de medición y la falta de consideración de la diversidad social y cultural del país en el que se aplican, entre otros elementos. Una de las más duras críticas es, sin duda, aquella que sostiene que las mediciones nacionales y las comparaciones internacionales terminan legitimando diferencias que, en lugar de dar cuenta de desigualdad en los procesos educativos, aluden al origen social de los niños.<br />\r\n<br />\r\n“Retos en la evaluación de la calidad de la educación en América latina”<br />\r\nF. Javier Murillo y Marcela Román', 1, 'A'),
(6, 'Texto V', 'Justificadamente, la docencia ha sido llamada la “profesión esencial”. Después de todo, es el sistema educacional de una nación el que produce la futura fuerza laboral del país. En la economía global, una ciudadanía educada e innovadora es crítica para el bienestar de una nación. Asimismo, una ciudadanía educada es esencial para el compromiso y la participación política. Para escoger a sus líderes, los ciudadanos de una sociedad democrática deben ser capaces de evaluar las propuestas de los candidatos que compiten por su voto.<br />\r\n<br />\r\nNaturalmente, también existen otras condiciones esenciales: las demandas de una economía vigorosa en conjunto con una fuerza laboral educada, condiciones económicas que faciliten la innovación y la iniciativa, y donde sea posible generar capital, entre otras. Pero incluso cuando se cumplen las condiciones económicas necesarias, si no existe una fuerza laboral educada es probable que la economía se estanque. Y sin una ciudadanía educada, una nación es vulnerable a demagogos e impostores.<br />\r\n<br />\r\nPor otra parte, entre los diversos elementos de un sistema educativo, el más importante para promover altos niveles de aprendizaje en los estudiantes es la calidad de la enseñanza. Ciertamente, existen muchos otros factores, incluyendo la calidad del currículum, el acceso a los recursos y a la tecnología computacional,  y la estructura de la gestión escolar. Sin embargo, las investigaciones son claras en un punto: ¡los docentes son importantes! La calidad de la enseñanza a la cual están expuestos los estudiantes tiene consecuencias duraderas para las perspectivas de dichos estudiantes.<br />\r\n<br />\r\nPor lo tanto, ninguna nación comprometida con el crecimiento económico y el acceso a este por parte de sus ciudadanos puede ignorar el desafío de fortalecer la profesión docente.<br />\r\n<br />\r\nEs importante reconocer, desde el inicio, que la insistencia de las autoridades responsables de la formulación de las políticas en el mejoramiento de la enseñanza no se debe a que crean, necesariamente, que la enseñanza tiene una baja calidad y debe ser “corregida”. Por el contrario, la realidad es que la enseñanza es tan difícil que nunca es perfecta; en otras palabras, independientemente de cuán exitosa sea una lección, siempre, por su propia naturaleza, puede ser perfeccionada. La enseñanza es un trabajo extremadamente complejo; los docentes toman (literalmente) cientos de decisiones cada día, frecuentemente en circunstancias que pueden calificarse como desfavorables, por ejemplo, de manera intempestiva o basándose en información incompleta.  Y,  sin embargo,  es preciso tomar decisiones, los estudiantes están a punto de llegar y el maestro debe decidirse por un curso de acción. Y, durante una lección, se presentan oportunidades y ciertamente la necesidad frecuente de realizar ajustes a mitad de la clase, por razones de flexibilidad y sensibilidad frente a las características de los estudiantes. Estas acciones requieren de una profunda comprensión de los contenidos, un exhaustivo conocimiento de los estudiantes y un amplio repertorio de estrategias pedagógicas. Altos niveles de aprendizaje de los estudiantes requieren altos niveles de habilidades docentes.<br />\r\nCompetencias docentes: desarrollo, apoyo y evaluación<br />\r\nCharlotte Danielson', 1, 'A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `textopregunta`
--

CREATE TABLE IF NOT EXISTS `textopregunta` (
  `TextoPreguntaId` int(11) NOT NULL AUTO_INCREMENT,
  `PreguntaId` int(11) NOT NULL,
  `TextoId` int(11) NOT NULL,
  PRIMARY KEY (`TextoPreguntaId`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=23 ;

--
-- Volcado de datos para la tabla `textopregunta`
--

INSERT INTO `textopregunta` (`TextoPreguntaId`, `PreguntaId`, `TextoId`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 3, 1),
(4, 4, 1),
(5, 5, 2),
(6, 6, 2),
(8, 9, 2),
(9, 10, 2),
(10, 11, 3),
(11, 12, 3),
(12, 13, 3),
(13, 14, 3),
(15, 16, 5),
(16, 17, 5),
(17, 18, 5),
(18, 19, 5),
(19, 20, 6),
(20, 21, 6),
(21, 22, 6),
(22, 23, 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `UsuarioId` int(11) NOT NULL,
  `UsuarioNick` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `UsuarioPassword` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `PersonaId` int(11) NOT NULL,
  PRIMARY KEY (`UsuarioId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
