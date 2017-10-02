# Ruleta
PARA REALIZAR LA INSTALISACION:
1- Tener una base de datos de nombre ruleta_db
2- darle privilegios a un usuario con el nombre ruleta 
3- Una tabla Jugador con la siguiente estructura
CREATE TABLE `jugador` (
  `id` int(11) NOT NULL,
  `Identificacion` int(11) NOT NULL,
  `Nombre` varchar(20) NOT NULL,
  `Apellido` varchar(20),
  `Dinero` int(11) NOT NULL,
  `Alias` varchar(25) NOT NULL,
  `Password` varchar(25)  NOT NULL
);
4- La ruta principal es Ruleta/web

INSTRUCIONES:
1-No se puede girar la ruleta si no se han conectado al menos dos jugadores.
2-Para apostar solo se debe seleccionar el porcentaje de dinero que tiene.
3-No se puede terminar el juego si se esta apostando.
4-Solo al Terminar el juego se guardan los cambios.
