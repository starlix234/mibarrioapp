-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-10-2025 a las 05:40:13
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mibarrio`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estados`
--

CREATE TABLE `estados` (
  `id_estado` int(11) NOT NULL,
  `estado` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--

CREATE TABLE `noticias` (
  `id_noticia` int(11) NOT NULL,
  `titulo` varchar(150) NOT NULL,
  `descripcion_corta` varchar(255) NOT NULL,
  `contenido` text NOT NULL,
  `imagen` varchar(255) DEFAULT NULL,
  `fecha_publicacion` timestamp NOT NULL DEFAULT current_timestamp(),
  `autor` int(11) NOT NULL,
  `categoria` varchar(50) DEFAULT NULL,
  `estado` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `noticias`
--

INSERT INTO `noticias` (`id_noticia`, `titulo`, `descripcion_corta`, `contenido`, `imagen`, `fecha_publicacion`, `autor`, `categoria`, `estado`) VALUES
(1, 'Lanzamiento del Chip Quantum X: Más rápido que la luz', 'La nueva microtecnología promete revolucionar la computación con velocidades nunca antes vistas.', 'Expertos de Silicon Valley presentaron hoy el **Quantum X**, un microprocesador que utiliza principios de mecánica cuántica para procesar datos. Se espera que los primeros prototipos comerciales estén disponibles para el 2026. Este avance reduciría el tiempo de cálculo para problemas complejos de años a minutos. La inversión inicial ha superado los $5 mil millones de dólares.', '../assets/galeria/1.jpg', '2025-10-17 02:55:00', 1, '1', 'publicado'),
(2, 'El Equipo Delta Gana el Campeonato Nacional en un Final de Infarto', 'Con un gol en el último minuto, el Equipo Delta se corona campeón tras un dramático partido contra Los Titanes.', 'El estadio estalló en júbilo cuando el delantero estrella, Javier \"El Rayo\" Solís, anotó de chilena al minuto 93, asegurando la victoria. El marcador final fue 3-2. El entrenador declaró que este es el resultado de años de dedicación y un espíritu inquebrantable. La celebración se extenderá por toda la ciudad durante el fin de semana.', '../assets/galeria/2.jpg', '2025-10-15 13:30:00', 1, '2', 'publicado'),
(3, 'Descubren Rara Especie de Flor en la Amazonía Peruana', 'Una expedición botánica internacional reporta el hallazgo de una orquídea con propiedades luminiscentes.', 'La flor, nombrada *Lumina Amazonica*, fue encontrada en una zona de difícil acceso de la selva. Los científicos están analizando sus propiedades únicas, sugiriendo un posible uso en la industria farmacéutica. Se ha establecido un perímetro de protección para salvaguardar la zona del descubrimiento.', '../assets/galeria/3.jpg', '2025-10-14 12:00:00', 1, '3', 'borrador'),
(4, 'Avance Histórico: La IA de Google Transforma Tumores \"Fríos\" en \"Calientes\" para Inmunoterapia', 'Científicos utilizan un nuevo algoritmo de IA para identificar una vía molecular clave que permite a', 'La Revolución de la IA en Oncología Investigadores de Google DeepMind y un consorcio de oncólogos han anunciado un descubrimiento que podría redefinir el tratamiento contra el cáncer. Han desarrollado un modelo de Inteligencia Artificial capaz de analizar patrones genéticos de tumores y predecir una vía molecular específica que, al ser modulada, convierte los llamados tumores \"fríos\" (resistentes a la inmunoterapia) en tumores \"calientes\" (sensibles a ella). Detalles del Descubrimiento Los tumores \"fríos\" se caracterizan por una baja infiltración de células T (células inmunitarias). El nuevo algoritmo de IA, apodado OncoAI, identificó una proteína reguladora que, cuando se silencia, desencadena una respuesta inflamatoria masiva dentro del microambiente tumoral. Esto atrae a las células T, volviendo al tumor vulnerable a los tratamientos de inmunoterapia ya existentes. Próximos Pasos Las primeras pruebas preclínicas han mostrado una tasa de éxito del 75% en la sensibilización de modelos de cáncer de páncreas y melanoma. La fase de ensayos clínicos en humanos se espera iniciar a principios de 2026, lo que representa una esperanza significativa para pacientes que actualmente no responden a las terapias convencionales. Este logro subraya el papel crucial y creciente de la Inteligencia Artificial en la medicina de precisión.', '../assets/galeria/img_68f1b28139ca8_Gemini_Generated_Image_w2plsrw2plsrw2pl.png', '2025-10-17 03:05:37', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `post_proyecto`
--

CREATE TABLE `post_proyecto` (
  `id_postulacion` int(11) NOT NULL,
  `id_pro` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_estado` int(11) DEFAULT NULL,
  `fecha_postulacion` date NOT NULL DEFAULT curdate(),
  `fecha_resolucion` date DEFAULT NULL,
  `resolucion` varchar(1000) DEFAULT NULL,
  `comentarios` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyectos`
--

CREATE TABLE `proyectos` (
  `id_pro` int(11) NOT NULL,
  `codigo_unico` varchar(20) NOT NULL,
  `nombre_publicacion` varchar(100) NOT NULL,
  `contenido` varchar(2000) NOT NULL,
  `fecha_publicacion` timestamp NOT NULL DEFAULT current_timestamp(),
  `monto_pro` int(11) NOT NULL,
  `id_estado` int(11) DEFAULT NULL,
  `id_usuario` int(11) NOT NULL,
  `extracto` varchar(100) NOT NULL,
  `imagen` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id_rol` int(11) NOT NULL,
  `rol` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id_rol`, `rol`) VALUES
(1, 'Admin'),
(2, 'Jefe Junta vecinos'),
(3, 'miembro de junta de vecinos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitudes`
--

CREATE TABLE `solicitudes` (
  `id_soli` int(11) NOT NULL,
  `tipo` varchar(20) NOT NULL,
  `asunto` varchar(40) NOT NULL,
  `descripcion` varchar(1000) NOT NULL,
  `estado` varchar(40) NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `primer_nombre` varchar(30) NOT NULL,
  `segundo_nombre` varchar(30) NOT NULL,
  `ape_paterno` varchar(30) NOT NULL,
  `ape_materno` varchar(30) NOT NULL,
  `fecha_nac` date NOT NULL,
  `telefono` int(11) NOT NULL,
  `clave` varchar(20) DEFAULT NULL,
  `id_rol` int(11) NOT NULL,
  `rut` varchar(40) NOT NULL,
  `direccion` varchar(35) DEFAULT NULL,
  `foto` varchar(2000) DEFAULT NULL,
  `correo` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `primer_nombre`, `segundo_nombre`, `ape_paterno`, `ape_materno`, `fecha_nac`, `telefono`, `clave`, `id_rol`, `rut`, `direccion`, `foto`, `correo`) VALUES
(1, 'Mateo', 'constanza', 'Smith', 'leiva', '1994-10-17', 942971785, '12345678', 1, '11.875.755-6', 'Los Alarifes 1115 Puente Alto', '1760665863_meme.jpg', 'gerina.leiva@gmail.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `estados`
--
ALTER TABLE `estados`
  ADD PRIMARY KEY (`id_estado`);

--
-- Indices de la tabla `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`id_noticia`),
  ADD KEY `autor` (`autor`);

--
-- Indices de la tabla `post_proyecto`
--
ALTER TABLE `post_proyecto`
  ADD PRIMARY KEY (`id_postulacion`),
  ADD UNIQUE KEY `unica_postulacion_usuario_proyecto` (`id_pro`,`id_usuario`),
  ADD KEY `id_pro` (`id_pro`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_estado` (`id_estado`);

--
-- Indices de la tabla `proyectos`
--
ALTER TABLE `proyectos`
  ADD PRIMARY KEY (`id_pro`),
  ADD UNIQUE KEY `codigo_unico` (`codigo_unico`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_estado` (`id_estado`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id_rol`);

--
-- Indices de la tabla `solicitudes`
--
ALTER TABLE `solicitudes`
  ADD PRIMARY KEY (`id_soli`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `rut` (`rut`),
  ADD UNIQUE KEY `rut_2` (`rut`),
  ADD KEY `id_rol` (`id_rol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `estados`
--
ALTER TABLE `estados`
  MODIFY `id_estado` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `noticias`
--
ALTER TABLE `noticias`
  MODIFY `id_noticia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `post_proyecto`
--
ALTER TABLE `post_proyecto`
  MODIFY `id_postulacion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `proyectos`
--
ALTER TABLE `proyectos`
  MODIFY `id_pro` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id_rol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `solicitudes`
--
ALTER TABLE `solicitudes`
  MODIFY `id_soli` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `noticias`
--
ALTER TABLE `noticias`
  ADD CONSTRAINT `noticias_ibfk_1` FOREIGN KEY (`autor`) REFERENCES `usuarios` (`id_usuario`);

--
-- Filtros para la tabla `post_proyecto`
--
ALTER TABLE `post_proyecto`
  ADD CONSTRAINT `post_proyecto_ibfk_1` FOREIGN KEY (`id_pro`) REFERENCES `proyectos` (`id_pro`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `post_proyecto_ibfk_2` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `post_proyecto_ibfk_3` FOREIGN KEY (`id_estado`) REFERENCES `estados` (`id_estado`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Filtros para la tabla `proyectos`
--
ALTER TABLE `proyectos`
  ADD CONSTRAINT `proyectos_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `proyectos_ibfk_2` FOREIGN KEY (`id_estado`) REFERENCES `estados` (`id_estado`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Filtros para la tabla `solicitudes`
--
ALTER TABLE `solicitudes`
  ADD CONSTRAINT `solicitudes_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`id_rol`) REFERENCES `roles` (`id_rol`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
