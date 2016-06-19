<?php 
	#lo ideal: pasar los usuarios que se elimen a una lista de usuarios que han sido dados de baja, que la validacion que se ocupa cuando se ingresa un nuevo usuario tambien pregunte sobre si ese usuario ya habia estado antes registrado, que se elimen los datos en otras tablas cuando se de de baja un usuario, como los reportes extraordinarios y tambien analizar todo el cambio de roles entre supervisores y usuarios. es un desmadre que hay que analizar muy detalladamente para crear la logica de codigo pero necesario :p.    

	#cuando se modifique el checklist de un inmueble generar un historial en otra tabla
	#en el historial que se genere de reportes podriamos hace que cuando registre una id de un usuario que ya se dio de baja, me ponga que el usuario ya fue dado de baja, y que me haga una consulta a la tabla usuario dados de baja para que me diga el nombre del usuario que hizo la baja

	#tambien cuando se elimina un inmueble se deberia quitar el checklist, los reportes, el supervisor que esta a cargo de un inmuble, se le deberian de dar avisos al supervisor, los usuarios que trabajan con el inmueble, oh mejor se deberia hacer una validacion, en la que no haya supervisores relacionados con el inmueble, ni reportes, ni estados del checklist sin atender, jefes de turno o demas, tambien mandar el inmueble a otra tabla para hacer cosas y consultar futuras con el mientras a eliminar a la de delete

	#organizar el ajax el ccs tambien

	#tambien cuando se quiere eliminar un checklist se tendra que validar si el checklst no tiene un estado que no sea sin novedad

	#falta tambien una opcion para eliminar la categoria, igual que con otras coasa, se tendra que validar o verificar que no hay checklist relacionados con la categoria

	# que significara check en sql

	#para hacer mejor la forma en como se elimina un checklist se debera de poner a la tabla estados inmuebles check un campo id_checklist para identificar presisamente de donde viene la relacion con la tabla checklist

	#faltaria en algunas cosas donde su tabla tenga una fecha de modificacion agregarle precisamente la fecha de modificacion, ver tablas

	#generar un historial de reportes checklist(mas bien es relacionar, que la id del registro este directamente relacionada con el checklist que se este generando, ademas que ahora todos los check list necesitan estar habilitados, con opciones como sin novedad, input para escribir o bien una opcion que diga que no se reviso para que cuando el guardia que entre lo revise y pueda hacer el checkeo)

	#podriamos brindar la opcion de guardar un reporte, ya sabemos, la url, para que el admin o x persona quiera ver un reporte solo haga una simple busqueda y listo

	#propuestas, que haya diferentes busquedas de un reporte, todos los reportes generador por un supervisor, cliente en relacion con una empresa, reportes que ha hecho un supervisor, reportes que ha hecho un cliente	

	#preguntar a cesar si es necesario generar datos, todos, de los inmuebles, guardias supervisores etc. 

	#Falta una logica en los jefes de turno, un turno 1 o un turno 2 o cuantos turnos ?? 

	#canciones nuevas,la de tove lo, drake nueva one dance, bastille, toman fuerza sia y zara
?>