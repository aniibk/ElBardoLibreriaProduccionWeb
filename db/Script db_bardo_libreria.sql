-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-07-2021 a las 02:30:18
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bardo_libreria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `campos_dinamicos`
--

CREATE TABLE `campos_dinamicos` (
  `id` int(255) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `opciones` varchar(255) NOT NULL,
  `tipo` varchar(255) NOT NULL,
  `activo` int(1) NOT NULL DEFAULT 1,
  `eliminado` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `campos_dinamicos`
--

INSERT INTO `campos_dinamicos` (`id`, `nombre`, `opciones`, `tipo`, `activo`, `eliminado`) VALUES
(1, 'Estado', 'Nuevo|usado', 'select', 1, 0),
(4, 'tipo edicion', 'dura|blanda|bolsillo', 'select', 1, 0),
(5, 'ediciones', 'Tenemos la primera edición!', 'p', 1, 0),
(6, 'tapas', 'tenemos portadas en cuero', 'p', 1, 0),
(7, 'bañado en oro', 'edición especial bañada en oro con textos escritos a mano.', 'p', 1, 0),
(10, 'comprarias el volumen siguiente?', 'si|no', 'radio', 1, 0),
(11, 'Que mejorarías del libro?', 'traducción|redacción|diseño de tapas|otros', 'checkbox', 1, 0),
(12, 'por qué?', '', 'textarea', 1, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `id` int(255) NOT NULL,
  `libro_id` int(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `descripcion` text NOT NULL,
  `fecha` datetime NOT NULL,
  `valoracion` tinyint(4) NOT NULL,
  `activo` bit(1) NOT NULL DEFAULT b'0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`id`, `libro_id`, `email`, `descripcion`, `fecha`, `valoracion`, `activo`) VALUES
(95, 1, '2@gmail.com', 'La saga Potter crece a la par que el lector y profundiza en los personajes, sus conflictos y sus historias individuales. Sin embargo, al intentar variar aquello que le salió tan bien en las primeras entregas y darle un matiz más oscuro y adulto (que incluso se acerca al terror) J. K. Rowling irá perdiendo espontaneidad hasta perder la saga de las manos. Sin ir más lejos, aspectos como el del enamoramiento y el paso de la infancia a la adolescencia de Potter los encuentro muy poco logrados. Magia, fantasía y aventuras que no falten.', '2021-04-03 00:00:00', 3, b'1'),
(96, 1, '3@gmail.com', 'Este cuarto libro inicia la maduración de la saga, pensando tal vez en el crecimiento de los lectores, ademas cuenta con la competición que le da un ritmo ameno respecto a los anteriores libros. Que buen ritmo para contar la historia tiene la autora para no hacerlo pesado.', '2021-04-03 00:00:00', 4, b'0'),
(97, 1, '4@gmail.com', 'La verdad es que es un pequeño paso atrás en calidad respecto al anterior por que la autora le da demasiada importancia (y páginas) al Torneo y no a la trama principal de la historia. Aun así el final es tan épico y fantástico que te deja con un gran sabor de boca, y deseando leer más.', '2021-04-03 00:00:00', 4, b'0'),
(98, 2, '5@gmail.com', 'En la línea de sus predecesoras, emocionante y emotiva, combinando los sentimientos y pasiones de los protagonistas con las fabulosas aventuras en esta nueva tierra. Pero siendo ya una seguidora incondicional de esta saga, me decepcionó un poco como se desarrolló la llegada de Brianna. Creo que la autora no le sacó todo el partido posible a lo que podría haber sido un encuentro realmente emotivo con sus padres y se centró más en las adversidades de su relación con Roger, la que tampoco está a la altura de lo que Diana Gabaldón nos tenía acostumbrados, sobre todo porque en esta entrega pasan a tener un protagonismo equivalente al de Jaimie y Claire. Sin embargo, sigue siendo una novela maravillosa, con un estilo narrativo inmejorable que te mantiene completamente atrapado en sus páginas.', '2021-04-03 00:00:00', 5, b'1'),
(99, 2, '6@gmail.com', 'La historia de los protagonistas, Jamie y Claire decae un poco en detrimento de la de su hija Brianna y Roger, y aunque es un poco más tranquila que las anteriores entregas, sigue siendo muy entrenida.', '2021-04-03 00:00:00', 4, b'1'),
(100, 2, '7@gmail.com', 'Al igual que los anteriores de la saga la lectura de este libro te hace desear en algún momento compartir todas las aventuras que viven los protagonistas.', '2021-04-03 00:00:00', 4, b'1'),
(101, 2, '8@gmail.com', 'Esta saga, a pesar de tantas buenas críticas, la abandoné hace tiempo y aunque parezca imposible, sigo disfrutando de la historia con la serie. Qué sin duda, y es mi humilde opinión, es superior a esta. Retomé la lectura con este libro, llevada por las ansias de conocer el desenlace de la temporada, y sigo opinando lo mismo; se extiende demasiado y no consigue que la lectura me atrape, me esfuerzo por acabar los libros.', '2021-04-03 00:00:00', 3, b'1'),
(102, 3, '9@gmail.com', 'La trama es muy sencilla igual que la investigación que me parece más una excusa para desarrollar al personaje principal y para realizar una muy buena ambientación sobre el Valle de Aosta. La novela me ha resultado entretenida sobre todo por el giro del guión que desarrolla matices más duros y personales de la historia.', '2021-04-03 00:00:00', 3, b'1'),
(103, 3, '10@gmail.com', 'Muy entretenida, aunque me gustó más la primera novela. A mi parecer, le falta algo más de acción. Aun así, totalmente recomendable por el humor y el valle de Aosta.', '2021-04-03 00:00:00', 4, b'1'),
(104, 3, '11@gmail.com', 'Muy entretenido y divertido. Se lee muy fácilmente. El personaje protagonista es total.', '2021-04-03 00:00:00', 4, b'1'),
(105, 3, '12@gmail.com', 'Segundo libro de la serie Rocco Schiavone. Lo recomiendo absolutamente. Hay espacio incluso para el humor.', '2021-04-03 00:00:00', 4, b'1'),
(106, 4, '13@gmail.com', 'Una novela corta, entretenida y muy agradable de leer nuevos episodios de Montalbano.', '2021-04-03 00:00:00', 4, b'1'),
(107, 4, '14@gmail.com', 'La Voz del violín es la típica novela que te llevas a un viaje de 10 días. Pequeña, entretenida, personaje principal muy bien caracterizado y una historia a ratos intrigante, a ratos irónica... Un libro como cientos de miles. Si lo lees, ni te decepcionará, ni te apasionará. En mi humilde pero objetiva opinión. Un saludo!', '2021-04-03 00:00:00', 2, b'1'),
(108, 4, '15@gmail.com', 'Un caso más del comisario Montalbano, divertido, rápido de leer y sin complicaciones.', '2021-04-03 00:00:00', 3, b'1'),
(109, 4, '16@gmail.com', 'Cuarta entrega de Montalbano, que sigue desvelando al lector facetas desconocidas de su personalidad, que lo hacen cada vez más cercano y admirable. Es muy interesante la relación que mantiene con sus subordinados, un muy divertido grupo de policías de Vigàta, ante el que Camilleri desata su aguda ironía sin piedad. Sicilia, su gastronomía y sus gentes, siguen muy presentes en toda la obra, marcada por los numerosos cambios de personal en la jefatura policial y en los científicos forenses, que obligan a Salvo a lidiar con más obstáculos de los deseados. Muy buena novela.', '2021-04-03 00:00:00', 5, b'1'),
(110, 5, '17@gmail.com', 'Está entretenido e interesante. El libro está escrito de manera sencilla, pero como habla de mitología griega a veces puede sonar un poco complicado. Aprendes mucho sobre las creencias, heroés y dioses en los que creían. Puedes llegar a identificarte con las personalidades de los personajes. Las aventuras que tienen los personajes hace la lectura fascinante. Cada libro de la saga tiene una parte que te sorprende ya que esperabas otra cosa. A mi en lo personal me ha gustado mucho porque he llegado a encariñarme con los personajes por el hecho de que son muchos libros.', '2021-04-03 00:00:00', 3, b'1'),
(111, 5, '18@gmail.com', 'Es una buena continuacion y el final me ha dejado impresionado, pero convencido que las peliculas son malas.', '2021-04-03 00:00:00', 3, b'1'),
(112, 5, '19@gmail.com', 'El libro es muy divertido y es interesante si te gusta la mitologia griega y tenes un cierto conocimiento de los hechos y personajes que nombra. Pero por otra parte el estilo es demasiado simple lo que convierte en una copia mitologica de Harry Potter', '2021-04-03 00:00:00', 2, b'1'),
(113, 5, '20@gmail.com', 'Diré cosas que a los seguidores de Percy Jackson les molestará, pero este libro es bastante simple. La historia es normalita y sólo le salva el curioso final. Además, las numerosas similitudes de esta saga con la de Harry Potter hacen cuestionarme la originalidad de la serie...Prescindible.', '2021-04-03 00:00:00', 1, b'1'),
(114, 6, '21@gmail.com', 'Excelente libro. Mezcla futbol, amistad y negocios. Me parecen fantasticas las conversaciones entre los amigos y los pensamientos de cada uno sobre el otro. Te atrapa en todo momento. Llega un punto en el que no podes parar de leer.', '2021-04-03 00:00:00', 5, b'1'),
(115, 6, '22@gmail.com', 'Me gusto mucho el libro y la forma de escribir de Sacheri. Se me hizo una lectura rapida y me divirtio muchola camaraderia de los amigos (algo que siempre envidie de los hombres) y la pasion del futbol. Ahora voy a ver la pelicula a ver que tal la adaptacion.', '2021-04-03 00:00:00', 5, b'1'),
(116, 6, '23@gmail.com', 'Una ternura absoluta de libro. Siempre Sacheri la dulzura justa. De todas maneras, este es sin duda su mejor libro.', '2021-04-03 00:00:00', 5, b'1'),
(117, 6, '24@gmail.com', 'Una gran historia la que nos cuenta Sacheri, con mucho fútbol, lealtad, compromiso y sobre todo amistad. Se lee fácil y no te aburre en ningún momento.', '2021-04-03 00:00:00', 5, b'1'),
(118, 7, '25@gmail.com', 'La historia es muy sencilla, casi cotidiana pero lo importante es la magnífica narración que hace Sacheri. Me ha encantado la ambientación, la descripción de personajes, la trama, el ritmo, el estilo literario…Lo peor :Me han sobrado algunas largas conversaciones referidas al contexto histórico.Lo mejor:Como el autor logra introducirte en la historia para no dejarte salir hasta que terminas el libro. Muy bueno!', '2021-04-03 00:00:00', 5, b'1'),
(119, 7, '26@gmail.com', 'Excelente Sacheri, como siempre. La historia me resultó atrapante desde el principio y me sorprendió mucho como encarna la trama desde la protagonista mujer. Muy buenas referencias históricas para situar al lector en la tumultosa Argentina post-peronismo. Muy recomendable.', '2021-04-03 00:00:00', 5, b'1'),
(120, 7, '27@gmail.com', 'Me ha gustado mucho. Una historia que al principio parece intrascendente pero que la maestría de Sacheri hace que te enganche con su hábil manejo de situaciones y personajes y en este caso, además, se mete en el alma y la piel de su protagonista, una voz femenina, que nos transmite sin paliativos todos sus sentimientos, carencias, dudas, pensamientos, contradicciones… Me han sobrado un poco las frecuentes conversaciones y discusiones sobre la política de Argentina en los años 50/60, pero en general es una novela amena , bien construída y excelentemente narrada.', '2021-04-03 00:00:00', 5, b'1'),
(121, 7, '28@gmail.com', 'Linda historia de una familia tipo de clase media de los 50 en argentina. Entretenida, con un dilema moral, un amor inapropiado y un final excelente e inesperado. A mi Criterio Un poco aburridos los capítulos que charlan y discuten de política pero buena historia.', '2021-04-03 00:00:00', 3, b'1'),
(122, 8, '29@gmail.com', 'Excelente como toda la obra de bodoc.', '2021-04-03 00:00:00', 5, b'1'),
(123, 8, '30@gmail.com', 'La historia es interesante y familiar, al menos para los latinoamericanos. Por momentos la narrativa es muy lenta, hay capítulos que realmente te dan ganas de no leerlos y pasar directo a la acción, pero todo es parte de la gestación de la revolución que se da en la historia, y ninguna revolución se hace de la noche a la mañana. Está bien pero no es tan atrapante como otros libros de la autora.', '2021-04-03 00:00:00', 3, b'1'),
(124, 8, '31@gmail.com', 'Me pareció un verdadero bodrio', '2021-04-03 00:00:00', 1, b'1'),
(125, 8, '32@gmail.com', 'No ha sabido capturar las letras como en otras de sus obras, pero aun asi me parece un libro recomendable.', '2021-04-03 00:00:00', 2, b'1'),
(126, 9, '33@gmail.com', 'Esta es una novela rara. No tiene un plot que te vuele la cabeza y en general los libros en los que no pasa nada me terminan embolando y los dejo, pero la poética con que Silvia te va narrando todo eso hace que estés enganchado y encuentres belleza en las metáforas, en las pequeñas cosas que nos presenta y terminemos encariñándonos del personaje. Una novela de iniciación muy bella.', '2021-04-03 00:00:00', 4, b'1'),
(127, 9, '34@gmail.com', 'Fantástica novela. La adolescencia en el extranjero, la adolescencia de las palabras, de las amistades, de los romances. Todo con dulce de leche en lata.', '2021-04-03 00:00:00', 4, b'1'),
(128, 9, '36@gmail.com', 'Si bien prefiero otro tipo de lecturas, este libro fue muy entretenido.', '2021-04-03 00:00:00', 3, b'1'),
(129, 10, '37@gmail.com', 'En esta nueva novela , la escritora aborda el tema del aborto en un marco familiar de profunda ortodoxia religiosa. El nudo narrativo gira en torno a ese aparente crimen no resuelto, que en realidad esconde un sinnúmero de sucesos causados por el dominio de ciertos prejuicios y valores dogmáticos . Cada protagonista da su versión ‘verosímil’ , trata de justificar en cierto modo sus propias actitudes y decisiones. En definitiva, casi todos tratan de desligarse lo más posible de sus propios demonios y evitar que la culpa actúe como una filosa espada de Damocles. Si bien pueden notarse ciertos estereotipos y algunas situaciones tal vez un tanto inverosímiles, la novela construye logradas relaciones conflictivas y la narración es ágil y engancha.', '2021-04-03 00:00:00', 4, b'1'),
(130, 10, '38@gmail.com', 'Una novela que me atrapó desde el primer momento. De esas que invitan a devorar y cada hoja te atrapa un poco más. El final se puede anticipar con el correr de los capítulos pero no por eso deja de ser atrapante. Bien escrita. Con un ida y vuelta del presente al pasado. Muy interesante.', '2021-04-03 00:00:00', 4, b'1'),
(131, 10, '39gmail.com', 'Catedrales es un libro en el que todo gira alrededor de un asesinato no resuelto cometido hace 30 años. A través de varios personajes involucrados se van desvelando hechos que nos dan una clara visión de lo que pasó. No es una novela con grandes sorpresas, enseguida se adivina lo sucedido, pero tampoco lo pretende. Se centra más en los personajes, en su relación y cómo les ha afectado la muerte de Ana. Muy buen libro para disfrutar de una prosa intimista y unos personajes potentes. Recomendado.', '2021-04-03 00:00:00', 4, b'1'),
(132, 10, '40@gmail.com', 'No empiecen este libro buscando un policial o un thriller porque no van a encontrar misterio y probablemente sientan predecible la cantidad de información con la que, como lectores, contamos en todo momento. Lo interesante y cautivante desde el inicio de esta novela es el realismo de los temas que toca, es como la autora se anima a hablar sin ser políticamente correcta acerca de religión, creencias, vínculos familiares, mentiras, entre tantos otros tópicos que no quiero adelantar para que los descubran de a poco y para que experimenten con el cuerpo la cantidad de emociones que el libro produce.', '2021-04-03 00:00:00', 4, b'1'),
(133, 11, '41@gmail.com', 'Volumen muy recomendable.', '2021-04-03 00:00:00', 4, b'1'),
(134, 11, '42@gmail.com', 'Es una de las mejores obras de Nabokov, para mí mejor incluso que Lolita, y disfruté mucho leyendo ambos...', '2021-04-03 00:00:00', 4, b'1'),
(135, 11, '43@gmail.com', '770 páginas de Nabokov cuentista, flojos abstenerse!', '2021-04-03 00:00:00', 5, b'1'),
(136, 11, '44@gmail.com', 'Un placer para los sentidos!!', '2021-04-03 00:00:00', 5, b'1'),
(137, 12, '45@gmail.com', 'Arundhati Roy prueba que es una pensadora apasionada, inteligente y documentada.', '2021-04-03 00:00:00', 4, b'1'),
(138, 12, '46@gmail.com', 'Mi corazón sedicioso es una recopilación de escritos políticos de Arundhati Roy.', '2021-04-03 00:00:00', 4, b'1'),
(139, 12, '47@gmail.com', 'Leerla siempre es estimulante por más que en ocasiones sus juicios puedan resultar demasiado sumarísimos, por ejemplo los que se refieren en abstracto a la democracia liberal.', '2021-04-03 00:00:00', 3, b'1'),
(140, 12, '48@gmail.com', 'Da la sensación de que todo resulta más certero y particularmente inapelable cuando la autora se ocupa de asuntos concretos y cercanos a su realidad.', '2021-04-03 00:00:00', 2, b'1'),
(141, 13, '49@gmail.com', 'Primer libro que leo de esta autora y me dejo con ganas de más. Desgarradora página a página. Simple. Breve. Dura. Se lee de un tirón. Muy recomendable. No es una novela de mujeres es una novela para mujeres.', '2021-04-03 00:00:00', 5, b'1'),
(142, 13, '50@gmail.com', 'Delicada disección del corazón de algunas madrastras de blancanieves. Novela lúcida de la no siempre, saludable relación madre e hija. Y llegadxs a este punto me pregunto: por qué el psicoanálisis no nos ha dejado un nombre para éste fenómeno como lo hizo con Edipo o Electra? O por qué la Biblia, rebosante de héroes y villanxs no nos deja muestras de este conflicto humano? Por qué en definitiva, las mujeres a estas alturas del S XXI debemos elaborar nuestra propia cosmogonía?', '2021-04-03 00:00:00', 5, b'1'),
(143, 13, '51@gmail.com', 'Lo encontré de casualidad y me llamó la atención el titulo y el precio barato. Realmente fue un descubrimiento exquisito. Es un libro bello. La historia, los personajes y los diálogos, concretos y consisos, muy bien logrados. Sencillo pero sumamente bien escrito. Hermoso final. Buscaré más libros de la autora.', '2021-04-03 00:00:00', 4, b'1'),
(144, 13, '52@gmail.com', 'Entretenida historia sobre la pasión, el amor infantil y la guerra. Se deja leer.', '2021-03-04 00:00:00', 3, b'1'),
(145, 14, '53@gmail.com', 'Literatura alcohólica, en ocasiones más bien diabólica, para un conjunto de relatos cortos sobre marginalidad y malditismo.', '2021-03-04 00:00:00', 4, b'1'),
(146, 14, '54@gmail.com', 'Irregular selección de relatos. En principio hay muchos con sexo y violencia, bastante flojitos, incluso alguno me ha molestado, no me parece divertida la violencia contra las mujeres. Después mejora con algunos cuentos mas realistas protagonizados por Chinaski que están bastante bien. Pero es solo al final, con los tres últimos relatos, mas largos y todos de Chinaski, cuando me he reencontrado con todo el sabor ácido y amargo del Bukowski que tanto me gusta. Me he divertido especialmente con aquel en que Hank narra su operación de hemorroides, todo su sufrimiento al tener que soportar a sus compañeros de habitación y lo que es peor, aguantar la tele.', '2021-03-04 00:00:00', 4, b'1'),
(147, 14, '55@gmail.com', 'Morador del underground, da una mirada corrosiva y cáustica de la vida. Horada con mordacidad y provocación el sórdido universo del que el propio autor es protagonista.', '2021-03-04 00:00:00', 4, b'1'),
(148, 14, '56@gmail.com', 'Bukowski en su maxima expresion. Siempre es un gusto encontrarlo.', '2021-03-04 00:00:00', 5, b'1'),
(149, 15, '57@gmail.com', 'Excepcional obra -una vez más, aunque seguramente habría que plantear Mi lucha como bloque inseparable- de un autor que aporta fuerza y frescura a un panorama internacional excesivamente cargado de intelectualismo formal. Las obras de Knausgard no se leen, se viven, se palpan, se siente en la piel y en lo más hondo de las entrañas. Indiscutiblemente, una obra maestra de nuestro tiempo.', '2021-03-04 00:00:00', 5, b'1'),
(150, 15, '58@gmail.com', 'Para mí de los que he leído-hasta el cuarto- tal vez sea el más flojo. Es una saga bien escrita, aunque por lo ambiciosa esperaba mucho más.', '2021-03-04 00:00:00', 2, b'1'),
(151, 15, '59@gmail.com', 'Igual que con el primer volumen, se va leyendo, nada se avanza a nivel argumental, pasa de una situación a otra y a otra sin resolver ninguna, el argumento sigue sin avanzar, te pierdes (al menos yo) con sus discusiones filosóficas... pero no puedes dejar de leerlo.', '2021-03-04 00:00:00', 3, b'1'),
(152, 15, '60@gmail.com', 'Quizás es porque te sientes identificado con sus situaciones cotidianas, con sus frustraciones, con sus alegrías. Describe una vida con sus medianías, sus momentos buenos y sobre todo ese poso de frustración perpetua que nos atenaza. No sé si continuaré con la serie', '2021-03-04 00:00:00', 1, b'1'),
(153, 16, '61@gmail.com', 'El libro es bueno, pero se hace un poquito extenso.', '2021-03-04 00:00:00', 3, b'1'),
(154, 16, '62@gmail.com', 'Si bien esta historia llegó a tener mucho reconocimiento por la película, considero que el libro está al menos entre los 3 mejores del autor. como único punto negativo: Los pasajes en que cuenta apariciones antiguas del payaso (como en el tiroteo o la fábrica) sirven y ayudan a comprender mejor todo, pero se hacen un poco densos. El punto que más resalto: La construcción de los lugares y personajes. Cuando vi la última película tenía más expectativa por saber como iban a representar a Derry y los Barrens que de ver la peli en si.', '2021-03-04 00:00:00', 4, b'1'),
(155, 16, '63@gmail.com', 'Me ha costado muchísimo terminarlo. El principio del libro (las primeras 600 páginas) se me han hecho larguísimas, hasta que le he pillado el ritmo., Me molestan mucho los libros que dan tantos saltos temporales para contar dos historias paralelas, una en el presente y otra en el pasado, como en este caso. Personalmente prefiero que me cuenten la historia del pasado primero y la historia del presente después, máxime cuando no hay ninguna necesidad de ocultarla, pues nada de lo que ocurre en el pasado le puede quitar emoción a lo que ocurre en el presente. Es un recurso literario muy pobre que se ha puesto muy de moda (y ahora no lo digo por el Sr. King, que posiblemente fuera de los primeros en utilizarlo), pues se basa en la ocultación de información al lector, cosa que me molesta muchísimo, pues me siento tratado como un tonto.', '2021-03-04 00:00:00', 1, b'1'),
(156, 16, '64@gmail.com', 'Una historia fantástica, con excelentes personajes y un canto a la amistad. Un poco flojo el final pero igual no deja de redondear una gran novela.', '2021-03-04 00:00:00', 4, b'1'),
(157, 17, '65@gmail.com', 'Es un buen libro, de aventuras, divertido, con muchos contrastes entre los personajes e historias con mucha imaginación. Sobre todo es un libros o libros (porque son 3) para adolescentes.; pero como adultos tambien puedes disfrutar.', '2021-03-04 00:00:00', 4, b'1'),
(158, 17, '66@gmail.com', 'Tres aventuras fantasticas, en la selva amazonica, en un reino enclavado en la cordillera del Himalaya, y en el corazon de Africa, maravillosa.', '2021-03-04 00:00:00', 5, b'1'),
(159, 17, '67@gmail.com', 'Es muy interesante y divertido. Recomiendo leerlo.', '2021-03-04 00:00:00', 4, b'1'),
(160, 17, '68@gmail.com', 'buenisimo...', '2021-03-04 00:00:00', 4, b'1'),
(161, 18, '69@gmail.com', 'Un libro para el que hay que tener ganas de leerlo, si no se hace pesado y tedioso. Me gusta más la segunda parte (diario de viajes) que la primera. Estoy contento con la compra :)', '2021-03-04 00:00:00', 4, b'1'),
(162, 18, '70@gmail.com', 'Es un tipico libro Kafkiano.', '2021-03-04 00:00:00', 3, b'1'),
(163, 18, '71@gmail.com', 'Encantada con esta maravilla de la literatura. Amo la forma de escribir de Kafka. Desde que lei La metamorfosis no puedo parar de leerlo.', '2021-03-04 00:00:00', 5, b'1'),
(164, 18, '72@gmail.com', 'Es un libro muy raro.', '2021-03-04 00:00:00', 2, b'1'),
(165, 19, '73@gmail.com', 'Lectura agradable y amena, entretenida', '2021-03-04 00:00:00', 4, b'1'),
(166, 19, '74@gmail.com', 'Un gran clásico de la literatura y por derecho propio, poco más se puede decir. Muy recomendable, sobre todo la primera parte que narra la infancia del protagonista, para mi gusto lo más potente del libro.', '2021-03-04 00:00:00', 4, b'1'),
(167, 19, '75@gmail.com', 'Es fabulosa la narrativa. El detalle a ultranza, la evocación de escenas, situaciones, personajes.. todo juega y suma en esta obra. No soy de clásicos pero este es sin duda un imperdible.', '2021-03-04 00:00:00', 3, b'1'),
(168, 19, '76@gmail.com', 'Creo que es un clásico infravalorado, sin duda uno de mis libros favoritos de Dickens.', '2021-03-04 00:00:00', 2, b'1'),
(169, 20, '77@gmail.com', 'Me gustó mucho, para mi parecer: aquí hubiera terminado la historia de Tatiana y Alexander. El jardín de verano fué innecesario, a mi gusto me resultó pesado terminarlo.', '2021-03-04 00:00:00', 2, b'1'),
(170, 20, '78@gmail.com', 'muy recomendable, de fácil lectura, una historia muy conmovedora que no paras de leer.', '2021-03-04 00:00:00', 4, b'1'),
(171, 20, '79@gmail.com', 'está bien, sobre todo me ha gustado la parte de alexander pero el primero era precioso.', '2021-03-04 00:00:00', 4, b'0'),
(172, 20, '80@gmail.com', 'Vaya pedazo de segunda parte para El Jinete de Bronce. MARAVILLOSO', '2021-03-04 00:00:00', 5, b'1'),
(173, 21, '81@gmail.com', 'Como siempre la autora nos lleva a la epoca y conocemos de nuestra historia de manera amena', '2021-03-04 00:00:00', 4, b'1'),
(174, 21, '82@gmail.com', 'Si bien el libro se explaya en acontecimientos conocidos, el verdadero sentir de Belgrano esta muy bien relatado, haciendonos ver el lado humano del procer.', '2021-03-04 00:00:00', 4, b'1'),
(175, 21, '83@gmail.com', 'Excelente. Altamente recomendable.', '2021-03-04 00:00:00', 5, b'1'),
(176, 21, '84@gmail.com', 'Otra obra maestra de Canale.', '2021-03-04 00:00:00', 5, b'1'),
(177, 22, '85@gmail.com', 'En la línea del autor, que siempre nada en las mismas aguas. Es interesante, pero sobre todo te despierta las ganas de pasarte por El Prado y buscar todas las obras que menciona, y observarlas.', '2021-03-04 00:00:00', 4, b'1'),
(178, 22, '86@gmail.com', 'Esperaba algo mas....me ha dejado un poco decepcionada.He aprendido algo más del arte pictórico,eso si que es cierto,pero insisto un poco decepcionada Un saludo.', '2021-03-04 00:00:00', 2, b'1'),
(179, 22, '87@gmail.com', 'Una pequeña decepción, esperaba mucho más de este libro. Su mayor logro es aportar datos desconocidos de los cuadros, despertando la curiosidad, pero poco más.', '2021-03-04 00:00:00', 2, b'1'),
(180, 22, '88@gmail.com', 'Las 3/4 partes del libro son buenas, pero en los capítulos finales la trama es complicdísima de seguir y desde luego el final es impropio de una novela de la que esperaba muchísimo más.', '2021-03-04 00:00:00', 2, b'1'),
(181, 23, '89@gmail.com', 'Fabuloso, con una música y unos interpretes maravillosos.', '2021-03-04 00:00:00', 5, b'1'),
(182, 23, '90@gmail.com', 'Me encanto. La música es impresionante, y el autor supo elegir a los intérpretes de su obra. Hago mención especial a Mercedes Sosa como La Pitonisa, estuvo brillante.', '2021-03-04 00:00:00', 5, b'1'),
(183, 23, '91@gmail.com', 'Una historia muy bella entre fantasía y realidad sobre lo que es el amor. Me ha dejado un buen sabor de boca.', '2021-03-04 00:00:00', 4, b'1'),
(184, 23, '92@gmail.com', 'yo no me olvido de nada, el olvido es para los que se van sin pagar. Yo ya pagué', '2021-03-04 00:00:00', 5, b'1'),
(185, 24, '93@gmail.com', 'Es entretenido pero trata el tema del sexo de una manera burda y vasta(eso me parece a mi), el final ha quedado un poco abierto por lo que me temo que habrá más, pero yo no pienso leerlo, vamos que lo considero totalmente prescindible.', '2021-03-04 00:00:00', 2, b'1'),
(186, 24, '94@gmail.com', 'De este libro me gusto la idea, una sociedad secreta para mujeres, creo que se podía haber sacado más jugo, pero la historia de la protagonista engancha. Me ha parecido entretenido, divertido y ameno. Tengo que decir que me ha parecido bastante más profundo que el sexo, es más de superación personal, aceptación de uno mismo, recuperar la confianza perdida y liberación.', '2021-03-04 00:00:00', 4, b'1'),
(191, 6, 'marcos@marcos.com', 'as', '2021-07-15 00:38:32', 5, b'0'),
(192, 6, 'marcos@marcos.com', 'as', '2021-07-15 00:42:48', 5, b'0'),
(193, 6, 'marcos@marcos.com', 'as', '2021-07-15 00:46:08', 5, b'0'),
(194, 6, 'marcos@marcos.com', 'as', '2021-07-15 00:47:09', 5, b'0'),
(195, 6, 'marcos@marcos.com', 'as', '2021-07-15 01:28:26', 5, b'0'),
(196, 6, 'asdasdasd@asd', 'lindo libro', '2021-07-15 01:32:09', 5, b'0'),
(197, 1, 'marcos@marcos.com', 'asd', '2021-07-15 01:41:35', 4, b'0'),
(198, 1, 'marcos@marcos.com', 'asd', '2021-07-15 01:54:22', 4, b'0'),
(199, 1, 'marcos@marcos', 'libro entretenido', '2021-07-15 02:12:02', 4, b'0'),
(200, 3, 'marcos@marcos.com', 'buen libro', '2021-07-15 02:23:52', 4, b'0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentario_dinam`
--

CREATE TABLE `comentario_dinam` (
  `id` int(255) NOT NULL,
  `comentario_id` int(255) NOT NULL,
  `campo_din_id` int(255) NOT NULL,
  `valor` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `comentario_dinam`
--

INSERT INTO `comentario_dinam` (`id`, `comentario_id`, `campo_din_id`, `valor`) VALUES
(18, 199, 10, 'si'),
(19, 199, 1, 'usado'),
(20, 199, 4, 'bolsillo'),
(21, 199, 12, 'la escritora es fenomenal'),
(22, 199, 11, 'Diseño de tapas|Otros'),
(23, 200, 1, 'usado'),
(24, 200, 12, 'no vale la pena comprar el libro como nuevo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consultas`
--

CREATE TABLE `consultas` (
  `id` int(255) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellidos` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `telefono` varchar(255) NOT NULL,
  `asunto` varchar(255) DEFAULT NULL,
  `para` varchar(255) DEFAULT NULL,
  `mensaje` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `consultas`
--

INSERT INTO `consultas` (`id`, `nombre`, `apellidos`, `email`, `telefono`, `asunto`, `para`, `mensaje`) VALUES
(3, 'asd', 'asdasd', 'marcos@marcos.com', '123123123', 'asdasd', 'Informes', 'asdasdasd'),
(4, 'marcos', 'kukuchka', 'marcos.kukuchka@gmail.com.ar', '122525552', 'prueba entrega segundo parcial', 'Informes', 'prueba segundo parcial'),
(5, 'marcos', 'asd', 'marcops@marcos', '1234567', 'asdasd', 'Ventas', 'asdasd'),
(6, 'seba', 'asdasd', 'asdasd@asdasd.com', '123123', '13213123', 'Informes', 'asdasdasd'),
(7, 'asdasd', 'asdasd', 'asdasd@asdasd.com', '123123', 'asdasd', 'Informes', 'asdasdasd'),
(8, 'asdasd', 'asdasd', 'asdasd@asdasd.com', '123123', 'asdasd', 'Informes', 'asdasdasd'),
(9, 'asdasd', 'asdasd', 'asdasd@asdasd.com', '123123', 'asdasd', 'Informes', 'asdasdasd'),
(10, 'asd', 'asdasd', 'asdasd@asdasd.com', '21231231', 'aa', 'Informes', 'asdasdasd'),
(11, 'asd', 'asdasd', 'asdasd@asdasd.com', '21231231', 'aa', 'Informes', 'asdasdasd'),
(12, 'asdasd', 'asdasd', 'asdasdasd@asd', '123123', '123123', 'Informes', 'asdasdasd'),
(13, '6zdfzx', 'asdasd', 'putos@putos', '123123123', '123123', 'Pedidos', 'asdasdasd'),
(14, 'asd', 'asdasd', 'asdasd@asdasd.com', '123123123', 'tengo dudas', 'Pedidos', 'asdasdasd'),
(15, 'asd', 'asdasd', 'marcos@marcos.com', '1312312', '123123', 'Pedidos', 'ASDASDASDASD');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `editoriales`
--

CREATE TABLE `editoriales` (
  `id` int(255) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `activo` bit(1) NOT NULL DEFAULT b'1',
  `eliminado` bit(1) NOT NULL DEFAULT b'0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `editoriales`
--

INSERT INTO `editoriales` (`id`, `nombre`, `activo`, `eliminado`) VALUES
(1, 'Planeta', b'1', b'1'),
(2, 'de bolsillo', b'1', b'1'),
(3, 'salamandra', b'1', b'0'),
(4, 'alfaguara', b'1', b'0'),
(5, 'anagrama', b'1', b'0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `generos`
--

CREATE TABLE `generos` (
  `id` int(255) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `activo` bit(1) NOT NULL DEFAULT b'1',
  `eliminado` bit(1) NOT NULL DEFAULT b'0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `generos`
--

INSERT INTO `generos` (`id`, `nombre`, `activo`, `eliminado`) VALUES
(1, 'operata crliolla', b'1', b'1'),
(2, 'ficción', b'1', b'1'),
(3, 'terror', b'1', b'0'),
(4, 'novela histórica', b'1', b'1'),
(5, 'biografía', b'1', b'0'),
(6, 'fantasía', b'1', b'0'),
(7, 'ensayos', b'1', b'0'),
(8, 'cuentos', b'1', b'0'),
(9, 'policial', b'1', b'0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libros`
--

CREATE TABLE `libros` (
  `id` int(255) NOT NULL,
  `editorial_id` int(255) NOT NULL,
  `genero_id` int(255) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `descripcion` text DEFAULT NULL,
  `precio` float(100,2) NOT NULL,
  `stock` int(255) NOT NULL,
  `destacado` bit(1) NOT NULL DEFAULT b'0',
  `fecha` date NOT NULL,
  `imagenPortada` varchar(255) DEFAULT NULL,
  `imagenBanner` varchar(255) DEFAULT NULL,
  `activo` bit(1) NOT NULL DEFAULT b'1',
  `eliminado` bit(1) NOT NULL DEFAULT b'0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `libros`
--

INSERT INTO `libros` (`id`, `editorial_id`, `genero_id`, `nombre`, `descripcion`, `precio`, `stock`, `destacado`, `fecha`, `imagenPortada`, `imagenBanner`, `activo`, `eliminado`) VALUES
(1, 3, 6, 'Harry Potter y el caliz de fuego', 'Tras otro abominable verano con los Dursley, Harry se dispone a iniciar el cuarto curso en Hogwarts, la famosa escuela de magia y hechicería. A sus catorce años, a Harry le gustaría ser un joven mago como los demás, sin embargo, al llegar al colegio, le espera una gran sorpresa que lo obligará a enfrentarse a los desafíos más temibles de toda su vida', 1699.00, 4, b'1', '2021-06-30', 'assets/img/productos/1/1_mini.jpg', 'assets/img/productos/1/1_banner.jpg', b'1', b'0'),
(2, 3, 2, 'Tambores de otoño', 'Jamie y Claire no pueden volver a Escocia debido a que Jamie sigue con pedido de captura, por lo que deciden comenzar una nueva vida en las colonias americanas junto a Fergus y el Joven Ian. El grupo se dirige primero a Charleston y luego a Wilmington, antes de establecerse en los inhóspitos cerros boscosos de Carolina del Norte con la esperanza de construir una cabaña autosustentable. La esposa de Fergus, Marsali, se quedó en la isla de Jamaica esperando la llegada del primer hijo de ambos. Al mismo tiempo, Brianna Randall y su pretendiente, el historiador Roger MacKenzie, permanecen seguros en el siglo XX. Ahora huérfana por la partida de su madre al pasado, Brianna lucha por aceptar su pérdida y satisfacer su curiosidad por un padre que nunca ha conocido, solo para descubrir una trágica historia que amenaza la felicidad de sus padres en el pasado. Éste descubrimiento hace que Brianna viaje sola a través del tiempo en una misión para salvar a sus padres mientras Roger va tras ella.', 1399.00, 4, b'0', '2021-06-25', 'assets/img/productos/2/2_mini.jpg', 'assets/img/productos/2/2_banner.jpg', b'1', b'1'),
(3, 3, 9, 'La costilla de Adan', 'Forzado a abandonar su querida Roma natal debido a ciertas irregularidades en el desempeño de su labor policial, Rocco Schiavone es enviado al valle de Aosta, que pese a estar situado en la península Itálica, para un meridional como él es lo más parecido a aterrizar en Marte. Rodeado de imponentes montañas, atenazado por un frío glacial y desconcertado ante el carácter circunspecto de los habitantes del lugar, Rocco encara su segundo caso con el mismo talante de siempre, irritable y transgresor hasta el límite de lo permisible, pero imbuido de un profundo sentido de la justicia. Cuando una mujer es hallada muerta en su casa y, en la penumbra, se extienden las secuelas de lo que en apariencia ha sido un robo violento, el subjefe Schiavone se resiste a la tentación de creer lo evidente. Una serie de coincidencias y divergencias, sumadas a la ambigüedad de algunos personajes, transformará gradualmente el escenario del crimen en una espesa niebla de misterios.', 1049.00, 4, b'1', '2021-06-30', 'assets/img/productos/3/3_mini.jpg', 'assets/img/productos/3/3_banner.jpg', b'1', b'0'),
(4, 3, 9, 'La voz del violin', 'La aparente paz siciliana se ve truncada por el asesinato de una extraña. Una joven hermosa, mujer de un médico boloñés, aparece muerta en el chalet de ambos. Pocas pertenencias la acompañaban en la escena del crimen, aparte de un misterioso violín guardado en su estuche. Su bolsa de joyas se ha esfumado y todas las miradas se centran en un pariente desequilibrado que ha desaparecido la misma noche del crimen. Montalbano, con su parsimonia habitual, inicia la investigación. No cree a nadie, no se fía de nadie. Tras la muerte de un sospechoso, sus superiores dan por cerrado el caso, pero él, ni hablar. Transitando los límites de la legalidad, como es su costumbre, Montalbano ha de relacionarse y pactar con los elementos más indeseables y abyectos del hampa, iniciando un viaje a lo más oscuro del alma humana, en el fondo, su territorio predilecto.', 1049.00, 4, b'1', '2021-04-03', 'assets/img/productos/4/4_mini.jpg', 'assets/img/productos/4/4_banner.jpg', b'1', b'0'),
(5, 3, 6, 'El mar de los monstruos', 'Desde que sabe que es hijo de un dios y una mortal, Percy Jackson espera que el destino le depare continuas aventuras. Y su expectativa se cumplirá con creces. Aunque el nuevo curso en la Escuela Meriwether transcurre con inusual normalidad, un simple partido de pelota quemada acaba en batalla campal contra una banda de feroces gigantes y el gimnasio del colegio convertido en pasto de las llamas. A partir de ahí las cosas se precipitan: el perímetro mágico que protege el Campamento Mestizo es emponzoñado por un misterioso enemigo y la única seguridad con que contaban los semidioses desaparece. Así, para impedir este daño irreparable, Percy y sus amigos inician la travesía del temible Mar de los Monstruos en busca de lo único que puede salvar el campamento: el Vellocino de Oro. Pero antes Percy descubrirá un secreto acerca de su familia, una inquietante revelación que lo hará preguntarse si ser hijo de Poseidón es un honor o simplemente una broma cruel. El mar de los monstruos es la emocionante continuación de la serie de aventuras Percy Jackson y los Dioses del Olimpo, iniciada con El ladrón del rayo. En pleno siglo XXI, los antiguos dioses griegos han creado un mundo secreto a nuestro alrededor, donde el monte Olimpo se encuentra encima del Empire State y el reino de Hades en el subsuelo de Los Ángeles.', 999.00, 4, b'0', '2021-06-30', 'assets/img/productos/5/5_mini.jpg', 'assets/img/productos/5/5_banner.jpg', b'1', b'0'),
(6, 4, 2, 'Papeles en el viento', 'Alejandro, El Mono, ha muerto. Su hermano y sus amigos, un grupo de hierro desde la infancia, apenas se dan tiempo para el dolor. Les preocupa Guadalupe, la hija del Mono. Quieren darle todo el amor que sentían por su amigo y asegurarle un futuro. Pero en el banco no quedó un peso. El Mono invirtió todo el dinero que tenía en la compra de un jugador de fútbol, un muchacho que prometía pero se quedó en promesa. Ahora está a préstamo en un club zaparrastroso del Interior. Y los trescientos mil dólares que costó su pase, a punto de evaporarse.¿Cómo vender a un delantero que no hace goles? ¿Cómo moverse en un mundo cuyas reglas se desconocen? ¿Cómo seguir siendo amigos si los fracasos van abriendo fisuras en las antiguas lealtades? Fernando, Mauricio y el Ruso, con las escasas herramientas que poseen, desplegarán una serie de estrategias nacidas del ingenio, la torpeza, el desconcierto o la inspiración, para conseguir su objetivo.Eduardo Sacheri demuestra una vez más su capacidad para construir personajes entrañables y contar historias que llegan de inmediato al lector. Papeles en el viento es un canto a la amistad, y una prueba de que el amor y el humor pueden más que la melancolía. Una invitación a pensar sobre el poder de la vida para abrirse paso a través del dolor y poner otra vez en marcha la rueda de los días.', 949.00, 4, b'1', '2021-04-03', 'assets/img/productos/6/6_mini.jpg', 'assets/img/productos/6/6_banner.jpg', b'1', b'0'),
(7, 4, 4, 'Lo mucho que te ame', 'Creo que si alguien supiese la historia de mi vida la vería como una vida mal vivida, llena de secretos, traiciones, ocultamientos. Pero en esta historia en la que casi todo lo que hago lo hago mal, me permito creer que hay una cosa, una sola cosa, que hago bien.» Lo mucho que te amé es la nueva novela de Eduardo Sacheri. Una historia que nos lleva a la década del 50 en Buenos Aires, en el seno de una familia de origen español. Cuenta la historia de Ofelia, una de las cuatro hermanas Fernández Mollé, una muchacha formal, feliz, a punto de casarse. Pero una tarde su vida cambia abruptamente para convertirse en una maraña de sentimientos encontrados: delicia, inquietud, felicidad, incertidumbre, miedo y mucha culpa. Con grandes vaivenes interiores y a través de difíciles decisiones, se va convirtiendo en una mujer adulta que enfrenta a su propio modo las circunstancias que le han tocado.', 899.00, 4, b'1', '2021-04-03', 'assets/img/productos/7/7_mini.jpg', 'assets/img/productos/7/7_banner.jpg', b'1', b'0'),
(8, 4, 4, 'Memorias impuras', 'El virrey ha muerto y, mientras preparan las exequias, en la ciudad de Álbora esperan un seguro estallido de violencia. En castigo por haber sido la amante y el gran amor del virrey, Junia, la virreyna, encierra a Bérnaba en el calabozo del pueblo, donde cualquiera que lo desee puede pasar la noche con ella. Bérnaba, la hermosa, recluida con sus dos hijos y repudiada por todos, resiste y concibe la revolución en su propio cuerpo. Todas las razas que habitan el Virreynato se rebelan: los crudos, los mitimaes y los cue cués anhelan la independencia amparados en una profecía y bajo las órdenes de los maestros de la Logia Bagual. Pero las luchas internas entre los revolucionarios, sumadas al terror que encarnan la virreyna y su consejero, Cayo Catarina, y a las aspiraciones al poder de los hacendados, los prestamistas y el Protomedicato desatan una trama tan parecida a la nuestra que se lee con la avidez de quien asiste a su propia historia.', 1299.00, 4, b'1', '2021-04-03', 'assets/img/productos/8/8_mini.jpg', 'assets/img/productos/8/8_banner.jpg', b'1', b'0'),
(9, 4, 2, 'Ginebra', 'El agua de la tierra se evapora, el viento raspa las piedras, las hojas caen de los árboles, las palabras... ¿a dónde van a parar las palabras?» Novela del exilio con reminiscencias punk, novela de soledades y lenguas entrelazadas, Ginebra explora las vetas de la memoria de una niña de 13 años que debe huir del país con su padre y aterriza en una ciudad extraña que, a pesar de lo incierto, le abre un mundo de posibilidades. Allí conocerá a Jo Haydn, coleccionista de uñas, hija del responsable del simulacro del big bang, huérfana de madre suicida. También a Oli Dusex, con quien tendrá su primera relación sexual y lo fortuito de su pérdida. El cuarteto se completa con Amo-a-quien-me-ame, una joven drogadicta, dueña de una motocicleta rosa de vetas plateadas que la protagonista roba, desconociendo las gozosas y nostálgicas consecuencias. Estos cuatro jinetes posapocalípticos giran alrededor del lago, como agujas de un reloj sumergido, dando rienda suelta a sus deseos y miedos, apurando la vida en una ciudad con huellas de Jorge Luis Borges y gusto a chocolate, nieve y soledad. ¿Cómo se establecen los vínculos más arraigados en la adolescencia? ¿Cuánto de la lengua permite ligarnos, perdernos, equivocarnos, renacer? ¿Qué es lo propio sino la pérdida? Porque así como el exilio puede ser una condena, el encuentro con lo distinto puede convertirse en la travesía de la sorpresa.', 979.00, 4, b'1', '2021-04-03', 'assets/img/productos/9/9_mini.jpg', 'assets/img/productos/9/9_banner.jpg', b'1', b'0'),
(10, 4, 9, 'Catedrales', 'Hace treinta años, en un terreno baldío de un barrio tranquilo, apareció descuartizado y quemado el cadáver de una adolescente. La investigación se cerró sin culpables y su familia -de clase media educada, formal y católica- silenciosamente se fue resquebrajando Pero, pasado ese largo tiempo, la verdad oculta saldrá a la luz gracias al persistente amor del padre de la víctima. Esa verdad mostrará con crudeza lo que se esconde detrás de las apariencias; la crueldad a la que pueden llevar la obediencia y el fanatismo religioso; la complicidad de los temerosos e indiferentes, y también, la soledad y el desvalimiento de quienes se animan a seguir su propio camino, ignorando mandatos heredados. Como en Las viudas de los jueves, en Elena sabe y en Una suerte pequeña, Claudia Piñeiro ahonda con maestría en los lazos familiares, en los prejuicios sociales y en las ideologías e instituciones que marcan los mundos privados, y nos entrega una novela conmovedora y valiente, certera como una flecha clavada en el corazón de este drama secreto.', 899.00, 4, b'1', '2021-04-03', 'assets/img/productos/10/10_mini.jpg', 'assets/img/productos/10/10_banner.jpg', b'1', b'0'),
(11, 5, 8, 'Cuentos completos', 'Un hombre que está escribiendo en su despacho es interrumpido por un duende del bosque, un concertista de piano se dispone a poner fin a su carrera, un barbero afeita al hombre que lo torturó, un soñador tímido hace un pacto con el Diablo... Los sesenta y ocho relatos de Vladimir Nabokov que se incluyen en esta edición definitiva de su obra cuentística, preparada por su hijo Dmitri, permiten disfrutar de su inconmensurable virtuosismo literario: de sus piruetas temáticas y formales, de sus inquietantes ambigüedades, de su elegante manejo del idioma, de la presencia de los temas ?como el del doble? que lo fascinaban y de los muchos lugares que dejaron huella en él: la Rusia de su infancia, la Inglaterra de sus años de estudiante, la Alemania y la Francia del exilio y después esos Estados Unidos que siempre observó con sagaz y nada complaciente mirada de europeo. La incorporación de este libro al catálogo de Anagrama permite añadir una pieza más al puzle de la rica producción literaria de Nabokov, del que hemos publicado el grueso de su obra novelística. Y, como en las novelas, en estos cuentos brilla la inagotable inventiva de uno de los escritores auténticamente imprescindibles del siglo XX.', 2950.00, 4, b'1', '2021-04-03', 'assets/img/productos/11/11_mini.jpg', 'assets/img/productos/11/11_banner.jpg', b'1', b'0'),
(12, 5, 7, 'Mi corazon sedicioso', 'Arundhati Roy investiga y denuncia. Los imprescindibles ensayos políticos de la escritora india. Este volumen reúne una amplia selección de los mejores textos de carácter político y social escritos por la autora. En estas páginas aborda temas como la retórica belicista que justifica guerras; la política exterior de los imperios–americano y soviético–; la corrupción política; el cambio climático; el capitalismo depredador; el terrorismo; los desequilibrios sociales de la India, ese país que vive al mismo tiempo en varios siglos, anclado en el pasado y proyectado hacia el futuro; los conflictos territoriales entre la India y Pakistán; el poder de las élites, el control de la tierra y los indiscriminados desplazamientos de población para la construcción de grandes presas; los claroscuros de la figura de Gandhi; la deriva nacionalista en la India; la energía nuclear utilizada con fines bélicos; las grietas de la democracia y la represión de la disidencia.', 1799.00, 4, b'0', '2021-04-03', 'assets/img/productos/12/12_mini.jpg', 'assets/img/productos/12/12_banner.jpg', b'1', b'0'),
(13, 5, 5, 'Amelie Nothomb', 'Hija de diplomatico, Amelie Nothomb paso buena parte de su ninez en Oriente. De ahi le quedo una pasion por Japon mezcla de deslumbramiento y encontronazo, de fascinacion por una cultura y choque con unas pautas sociales desquiciantes y humillantes. Este libro reune seis novelas autobiograficas de la escritora belga, en las que evoca episodios de su infancia y adolescencia la crueldad, la inocencia, el desconcierto, el hambre de conocer vividas en Oriente, y tambien varios viajes de regreso a Japon en los que se enfrenta al delirante mundo empresarial nipon, al amor de un joven avido lector de Stendhal, al reencuentro con la ninera que la cuido cuando era nina, a recorridos que la llevan del bullicioso Tokio a Hiroshima y al espiritual Monte Fuji. / This book combines six autobiographical novels by the Belgian writer, covering episodes from her childhood, adolescence, living in the East, and several trips to Japan where she faces their delirious business world, reunites with the nanny who cared for her as a child, and journeys to Mount Fuji.', 2950.00, 4, b'0', '2021-04-03', 'assets/img/productos/13/13_mini.jpg', 'assets/img/productos/13/13_banner.jpg', b'1', b'0'),
(14, 5, 2, 'Se busca una mujer', 'En este libro ambientado en Los Ángeles se nota la continua presencia de la gran urbe en toda la escritura de Charles Bukowski, ciudad infernal, a pesar de estar situada en medio de paraíso californiano, sueño de todo pobre ciudadano USA, con sus naranjas, su sol y su vino, vino del que Bukowski da buena cuenta toda su vida, como el whisky, como la cerveza, que habrán de ser, inevitablemente, su fuente de inspiración.', 895.00, 4, b'0', '2021-04-03', 'assets/img/productos/14/14_mini.jpg', 'assets/img/productos/14/14_banner.jpg', b'1', b'0'),
(15, 5, 2, 'Un hombre enamorado', 'De ser hijo a ser padre. Éste es el paso del autor en la segunda parte de las seis que conforman Mi lucha, esa inmensa novela autobiográfica que la crítica ha descrito como «un proyecto demencial que sólo los verdaderos genios pueden alcanzar». Karl Ove deja a su mujer y se marcha a Estocolmo. Allí se hace amigo de Geir, otro noruego, intelectual y fanático del boxeo. Y vuelve a encontrarse con Linda, una poeta que le había fascinado en un encuentro de escritores, y que será su segunda mujer. Su mundo cambia mientras él escribe y cuenta cómo es volverse a enamorar, los goces y los engorros de la paternidad, la necesidad de escribir, la cotidianeidad de la vida en familia o el cómico fracaso de sus vacaciones, la humillación de las clases de preparación al parto, las peleas con los vecinos... Knausgård escribe con una veracidad punzante sobre los instantes que componen una vida, la de un hombre que anhela con igual intensidad la soledad y el amor.', 1095.00, 4, b'0', '2021-04-03', 'assets/img/productos/15/15_mini.jpg', 'assets/img/productos/15/15_banner.jpg', b'1', b'0'),
(16, 2, 3, 'IT', '¿Quien o que mutila y mata a los niños de un pequeño pueblo norteamericano? ¿Por que llega cíclicamente el horror a Derry en forma de un payaso siniestro que va sembrando la destrucción a su paso? Esto es lo que se proponen averiguar los protagonistas de esta novela. Tras veintisiete años de tranquilidad y lejanía, una antigua promesa infantil les hace volver al lugar en el que vivieron su infancia y juventud como una terrible pesadilla. Regresan a Derry para enfrentarse con su pasado y enterrar definitivamente la amenaza que los amargó durante su niñez. Saben que pueden morir, pero son conscientes de que no conocerán la paz hasta que aquella cosa sea destruida para siempre.', 1899.00, 4, b'1', '2021-05-23', 'assets/img/productos/16/16_mini.jpg', 'assets/img/productos/16/16_banner.jpg', b'0', b'0'),
(17, 2, 6, 'Memorias del aguila y del jaguar', 'ISABEL ALLENDE nos invita a acompañar a Alex Cold y a su abuela Kate en sus aventuras por el mundo. En La Ciudad de las Bestias, se internan en la selva amazónica en busca de una extraña bestia semihumana; en El Reino del Dragón de Oro, descubren la sabiduría oriental en un recóndito reino del Himalaya, a la vez que hacen frente a unos desalmados traficantes de antigüedades; El Bosque de los Pigmeos nos sitúa en el corazón de una África misteriosa en la que se dan cita la solidaridad y la magia.', 1599.00, 0, b'1', '2021-04-03', 'assets/img/productos/17/17_mini.jpg', 'assets/img/productos/17/17_banner.jpg', b'1', b'0'),
(18, 2, 5, 'Diarios', 'Este volumen invita al lector a conocer el lado más íntimo del padre de la literatura del siglo XX a través de sus diarios, legajos y cuadernos de viaje, editados por orden cronológico y respetando fielmente los manuscritos originales del escritor checo, sin las supresiones y censuras de Max Brod. Estas páginas ofrecen una panorámica de la vida de Kafka, sus paseos por Praga, sus sueños, sus sentimientos hacia el padre idolatrado y la mujer con la que no lograba casarse, su contienda personal con la culpa y la percepción de sí mismo como un paria, en una rendición de cuentas de una intensidad casi insoportable.', 1699.00, 4, b'1', '2021-05-23', 'assets/img/productos/18/18_mini.jpg', 'assets/img/productos/18/18_banner.jpg', b'1', b'0'),
(19, 2, 5, 'Grandes esperanzas', 'El corazón humano es un instrumento de muchas cuerdas; el perfecto conocedor de los hombres las sabe hacer vibrar todas, como un buen músico.» Charles Dickens Kent, Inglaterra, finales del siglo XIX. El huérfano Pip vive una existencia humilde con su hermana y su cuñado, a quien ayuda en su taller de herrería. Cuando la rica señorita Havisham requiere a Pip como acompañante de ella y de su bella hija, el joven se dará cuenta de las penurias de su clase social y deseará cada vez con más fuerza subir posiciones en el escalafón social. Pip recibirá entonces la visita de un abogado de Londres, quien le informará de que un benefactor anónimo le quiere convertir en un caballero. Sin embargo, Pip descubrirá que el valor de la amistad y de la moral no se puede comprar con dinero.', 1599.00, 4, b'0', '2021-04-03', 'assets/img/productos/19/19_mini.jpg', 'assets/img/productos/19/19_banner.jpg', b'1', b'0'),
(20, 2, 4, 'Tatiana y Alexander', 'Embarazada, enferma y absolutamente desolada, Tatiana ha logrado llegar a Estados Unidos. Entregada a la fuerza de las circunstancias y alejada de su convulsionada tierra, la joven comenzará una nueva existencia con la secreta ilusión de que, en alguna parte, el hombre al que ama sea capaz de vencer a las oscuras garras del destino. Mientras, Alexander sufre el hostigamiento de las fuerzas represoras en las gelidas tierras de la Unión Sovietica, y tan solo el recuerdo de su esposa, junto con la velada esperanza de que siga con vida, alimenta su espíritu ante la adversidad. Al tiempo que la contienda llega a su final, ambos lucharán contra sus destinos y la desesperación en busca del amor perdido y la inquebrantable esperanza del reencuentro.', 1579.00, 4, b'0', '2021-04-03', 'assets/img/productos/20/20_mini.jpg', 'assets/img/productos/20/20_banner.jpg', b'1', b'0'),
(21, 4, 5, 'Amores prohibidos', 'Manuel fue acercándose de a poco a la damita de ojos negros, hasta que sus labios comenzaron a susurrarle frases bonitas al oído. Los ojos de Maruja se entornaron y sonrió levemente. ‘El joven americano sí que sabe hablarle a una dama. No me equivoqué. Ahora quiero su cuerpo pegado al mío’, pensó.” El primer romántico del Río de la Plata fue un incomprendido. Manuel Belgrano no era militar y debió ocupar un rol inesperado. Además de ser un intelectual de avanzada, fue responsable de cambios políticos y sociales mal vistos por lo más rancio de la sociedad porteña. Tampoco cumplía con las normas de la masculinidad de su época: no era autoritario ni arremetedor. Por el contrario, fue un hombre sensible, refinado, elegante. Adorado por las mujeres, vivió romances tórridos con españolas, argentinas y francesas. Sin embargo, fueron tres las que marcaron su piel a fuego. Con la primera, Pepa Ezcurra, una jovencita de la sociedad porteña, mantuvo una relación clandestina que no pudo hacerse pública y de la cual nació un hijo criado por el mismísimo Juan Manuel de Rosas. En su paso por Europa fue una francesa de armas tomar la que robó su corazón: Isabel Pichegru. Ya de adulto, se deja seducir por una “niña” de la burguesía tucumana, Dolores Helguero. Tampoco se compromete con ella, pero viven una pasión que también trajo una hija al mundo. Manuel Belgrano murió solo y pobre. Nunca supo que el “hijo” de Rosas era suyo y apenas conoció a Mónica Manuela, su hija mujer. Mucho es lo que se ha escrito sobre Manuel Belgrano, y un sinfín de versiones intentó recomponer una figura patria que poco tiene que ver con ese hombre de carne y hueso presa de sus deseos más ocultos. Hacia esa zona de luces y sombras parte Florencia Canale en su nueva novela, Amores secretos. Un libro que reconstruye la vida privada del prócer y que a la vez confirma a su autora como una de las más innovadoras en el género de la novela histórica en la Argentina.', 1330.00, 4, b'1', '0000-00-00', 'assets/img/productos/21/21_mini.jpg', 'assets/img/productos/21/21_banner.jpg', b'1', b'0'),
(22, 1, 4, 'El maestro del prado', 'Descubre de la mano de Javier Sierra los secretos que se ocultan tras las pinturas más importantes del Museo del Prado. Al más puro estilo de los relatos de enigmas de Javier Sierra.El maestro del Prado presenta un apasionante recorrido por las historias más desconocidas y secretas de una de las pinacotecas más importantes del mundo, el Museo del Prado. Una historia fascinante de cómo un aprendiz de escritor aprendió a mirar cuadros y a entender unos mensajes ocultos que difieren de la ortodoxia de la Iglesia católica, una institución que en el Renacimiento era visto más como opresores que como espiritual. Una nueva obra que entusiasmará a los miles de seguidores de Javier Sierra.', 1560.00, 4, b'0', '2021-05-23', 'assets/img/productos/22/22_mini.jpg', 'assets/img/productos/22/22_banner.jpg', b'1', b'0'),
(23, 1, 1, 'Lo que me costo el amor de Laura', 'Esta operéta criolla en dos actos, cuenta la historia de Manuel, que al conocer a Laura se enamora desesperadamente. Laura le pide que para conquistarla obtenga la llave del amor. Dicha llave se encuentra en algúnsítio del Barrio del Dolor, un distrito siniestro del que nadie ha regresado jamás. Un locutor guiará al público en este viaje dantesco, donde el enamorado se encontrará con vecinos muy particulares, que ayudarán a conseguir la llave. Esta historia entre tangos y ritmos criollos denotan la alta capacidad creativa musical de su autor: Alejandro Dolina.', 1040.00, 4, b'1', '2021-05-23', 'assets/img/productos/23/23_mini.jpg', 'assets/img/productos/23/23_banner.jpg', b'1', b'0'),
(24, 1, 2, 'Secret', 'Cassie Robichaud, una joven viuda, es introducida en S.E.C.R.E.T., un selecto club underground de Nueva Orleans que ayuda a las mujeres a disfrutar al máximo de su sexualidad. Asesorada por una matriarca clandestina, Cassie es invitada a experimentar sus fantasías más íntimas siempre que respete los requisitos del club.', 239.00, 4, b'0', '2021-05-23', 'assets/img/productos/24/24_mini.jpg', 'assets/img/productos/24/24_banner.jpg', b'1', b'0'),
(29, 4, 5, 'marcops', 'un libro masasd asdasdasd', 12346.00, 0, b'1', '2021-06-28', 'assets/img/productos/29/29_mini.jpeg', 'assets/img/productos/29/29_banner.jpeg', b'1', b'1'),
(30, 5, 8, 'asd', 'qasd123asdasdasd', 123123120.00, 0, b'1', '2021-06-28', 'assets/img/productos/30/30_mini.jpeg', 'assets/img/productos/30/30_banner.jpeg', b'1', b'1'),
(31, 4, 3, 'horacinio', 'asdasdasdasdasdasdasdasd', 1999.00, 0, b'1', '2021-06-29', 'assets/img/productos/31/31_mini.jpeg', 'assets/img/productos/31/31_banner.jpeg', b'1', b'1'),
(32, 5, 6, 'qweqweqwe', 'qweqweqweqweqweqwe', 123123120.00, 0, b'1', '2021-07-01', 'assets/img/productos/32/32_mini.jpeg', 'assets/img/productos/32/32_banner.jpeg', b'1', b'0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `newsletter`
--

CREATE TABLE `newsletter` (
  `id` int(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `privilegios`
--

CREATE TABLE `privilegios` (
  `id` int(255) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `nivel_acceso` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `privilegios`
--

INSERT INTO `privilegios` (`id`, `nombre`, `nivel_acceso`) VALUES
(1, 'Consultar', 1),
(2, 'edición', 3),
(3, 'control total', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto_campo_din`
--

CREATE TABLE `producto_campo_din` (
  `id` int(255) NOT NULL,
  `producto_id` int(255) NOT NULL,
  `campo_din_id` int(255) NOT NULL,
  `activo` int(1) NOT NULL DEFAULT 0,
  `eliminado` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `producto_campo_din`
--

INSERT INTO `producto_campo_din` (`id`, `producto_id`, `campo_din_id`, `activo`, `eliminado`) VALUES
(72, 1, 7, 1, 0),
(73, 1, 10, 1, 0),
(74, 1, 12, 1, 0),
(75, 1, 1, 1, 0),
(76, 1, 4, 1, 0),
(77, 1, 11, 1, 0),
(78, 3, 1, 1, 0),
(79, 3, 12, 1, 0),
(80, 3, 5, 1, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` int(255) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `privilegios_id` int(255) NOT NULL,
  `activo` bit(1) NOT NULL DEFAULT b'1',
  `eliminado` bit(1) NOT NULL DEFAULT b'0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `nombre`, `privilegios_id`, `activo`, `eliminado`) VALUES
(1, 'empleado', 1, b'1', b'0'),
(4, 'encargado', 2, b'1', b'0'),
(5, 'Admin', 3, b'1', b'0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sectores`
--

CREATE TABLE `sectores` (
  `id` int(11) NOT NULL,
  `sector` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `sectores`
--

INSERT INTO `sectores` (`id`, `sector`, `email`) VALUES
(1, 'Ventas', 'ventas@elbardo.com.ar'),
(2, 'Informes', 'info@elbardo.com.ar'),
(3, 'Pedidos', 'pedidos@elbardo.com.ar'),
(4, 'Reclamos', 'reclamos@elbardo.com.ar');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(255) NOT NULL,
  `dni` varchar(255) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellidos` varchar(255) DEFAULT NULL,
  `telefono` varchar(255) NOT NULL,
  `direccion` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `imagen` varchar(255) NOT NULL DEFAULT '/assets/img/avatar/Avatar.png',
  `salt` int(255) NOT NULL,
  `rol_id` int(255) NOT NULL DEFAULT 1,
  `activo` bit(1) NOT NULL DEFAULT b'1',
  `eliminado` bit(1) NOT NULL DEFAULT b'0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `dni`, `nombre`, `apellidos`, `telefono`, `direccion`, `email`, `pass`, `imagen`, `salt`, `rol_id`, `activo`, `eliminado`) VALUES
(21, '32704468', 'Marcos ', 'K', '1125608471', 'Av Corrientes 4500', 'marcos@marcos', 'ee7a9533066aaf05c722da3683f75521', 'assets/img/avatar/users/20/20_avatar.jpeg', 7238784, 1, b'1', b'0'),
(30, '32000000', 'Seba', 'L', '1122334455', 'por adroge', 'seba@seba', '832735411c8c28f965248c7d3864b34d', 'assets/img/avatar/users/30/30_avatar.jpeg', 5212118, 1, b'1', b'0'),
(31, '10001', 'admin', 'admin', '666999666999', 'en un sótano ', 'admin@admin', '163d3233019b674e2e603711ac1a6b09', 'assets/img/avatar/users/31/31_avatar.jpeg', 1192116, 5, b'1', b'0'),
(32, '123456798', 'porfe', 'prodfe', '123465465', 'asdasd', 'profe@profe', '89b1cd4de467071de9acb56becf7d6d5', 'assets/img/avatar/users/32/32_avatar.jpeg', 7313503, 5, b'1', b'0');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `campos_dinamicos`
--
ALTER TABLE `campos_dinamicos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_libro_comentario` (`libro_id`);

--
-- Indices de la tabla `comentario_dinam`
--
ALTER TABLE `comentario_dinam`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comentario_id` (`comentario_id`),
  ADD KEY `campo_din_id` (`campo_din_id`);

--
-- Indices de la tabla `consultas`
--
ALTER TABLE `consultas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `editoriales`
--
ALTER TABLE `editoriales`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `generos`
--
ALTER TABLE `generos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `libros`
--
ALTER TABLE `libros`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_libro_editorial` (`editorial_id`),
  ADD KEY `fk_libro_genero` (`genero_id`);

--
-- Indices de la tabla `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `privilegios`
--
ALTER TABLE `privilegios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `producto_campo_din`
--
ALTER TABLE `producto_campo_din`
  ADD PRIMARY KEY (`id`),
  ADD KEY `producto_id` (`producto_id`),
  ADD KEY `campo_din_id` (`campo_din_id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `privilegios_id` (`privilegios_id`);

--
-- Indices de la tabla `sectores`
--
ALTER TABLE `sectores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uq_email` (`email`),
  ADD KEY `rol_id` (`rol_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `campos_dinamicos`
--
ALTER TABLE `campos_dinamicos`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=201;

--
-- AUTO_INCREMENT de la tabla `comentario_dinam`
--
ALTER TABLE `comentario_dinam`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `consultas`
--
ALTER TABLE `consultas`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `editoriales`
--
ALTER TABLE `editoriales`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `generos`
--
ALTER TABLE `generos`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `libros`
--
ALTER TABLE `libros`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de la tabla `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `privilegios`
--
ALTER TABLE `privilegios`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `producto_campo_din`
--
ALTER TABLE `producto_campo_din`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `sectores`
--
ALTER TABLE `sectores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD CONSTRAINT `fk_libro_comentario` FOREIGN KEY (`libro_id`) REFERENCES `libros` (`id`);

--
-- Filtros para la tabla `comentario_dinam`
--
ALTER TABLE `comentario_dinam`
  ADD CONSTRAINT `comentario_dinam_ibfk_1` FOREIGN KEY (`comentario_id`) REFERENCES `comentarios` (`id`),
  ADD CONSTRAINT `comentario_dinam_ibfk_2` FOREIGN KEY (`campo_din_id`) REFERENCES `campos_dinamicos` (`id`);

--
-- Filtros para la tabla `libros`
--
ALTER TABLE `libros`
  ADD CONSTRAINT `fk_libro_editorial` FOREIGN KEY (`editorial_id`) REFERENCES `editoriales` (`id`),
  ADD CONSTRAINT `fk_libro_genero` FOREIGN KEY (`genero_id`) REFERENCES `generos` (`id`);

--
-- Filtros para la tabla `producto_campo_din`
--
ALTER TABLE `producto_campo_din`
  ADD CONSTRAINT `producto_campo_din_ibfk_1` FOREIGN KEY (`producto_id`) REFERENCES `libros` (`id`),
  ADD CONSTRAINT `producto_campo_din_ibfk_2` FOREIGN KEY (`campo_din_id`) REFERENCES `campos_dinamicos` (`id`);

--
-- Filtros para la tabla `roles`
--
ALTER TABLE `roles`
  ADD CONSTRAINT `roles_ibfk_1` FOREIGN KEY (`privilegios_id`) REFERENCES `privilegios` (`id`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`rol_id`) REFERENCES `roles` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
