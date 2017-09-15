<?php

//$GLOBALS ["SQL_GET_TIME_SERVER_RESPONSES"] = 








/*
Query 1:
SELECT 
DISTINCT (TIME(Fecha)) AS Hora,
Sesion,
COUNT((Sesion)) as NumeroPeticiones,
(TIMEDIFF(MAX(Fecha), MIN(Fecha))) as TiempoSesion,
GROUP_CONCAT(DISTINCT(Contexto) SEPARATOR ', ') as ContextosMasUsados
FROM cdrprincipal
WHERE DATE(Fecha) = '2017-09-14'
GROUP BY Sesion*/