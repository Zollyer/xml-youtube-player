<?php
//copiar archivo
$video = $_GET['v'];

//copiamos usando la libreria de podsyc para generear el medio en mp4
copy("http://podsync.net/download/hJfLSARrn/".$video.".mp4","videos/".$video.".mp4");
 fclose($temp);
//header('Location: /xml/videos/'.$video.'.mp4'); //<-- redirecionamiento automatico quitado por fallas con algunas plataformas


//consultar si el video existe sino decir que la ID no esta correcta

echo '
(Este es tu video)
#EXTINF: 0 tvg-logo="http://i62.tinypic.com/25hpt92.jpg"group-title="ESTABLES",Ver 
http://sito.com/xml/videos/'.$video.'.mp4';
//direccionamiento xml en forma de lista al servidor http 
?>
