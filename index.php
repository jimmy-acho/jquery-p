<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title></title>
    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script src="http://code.jquery.com/jquery-migrate-1.1.1.min.js"></script>
    <script type="text/javascript" src="js/lightbox.js"></script>
    <link type="text/css" rel="stylesheet" href="css/lightbox.css" />
    <style>
      div.resize{
        width: 300px;
        height: 200px;
        background-color: chartreuse;
        overflow: hidden;
      }
      
    </style>
  </head>
  <body>
    <div id="wrapper">
      <a href="http://kinoafisha.ua/upload/2012/12/films/5369/fotos/1356215445asteriks-v-britanii.jpg"
         rel="lightbox" >Жерар</a>
      <a class="resize" href="#">Развернуть / свернуть</a>
      <div class="resize">
        Какой-то текст
      </div>
    </div>
    <script>
      var miidle_size = 200;
      jQuery('a.resize').toggle(
        function(){
          jQuery('div.resize').stop().animate({width:miidle_size+"px"},400);
        },
        function(){
          jQuery('div.resize').stop().animate({width:"0px"},600);
        },
        function(){
          jQuery('div.resize').stop().animate({width:miidle_size+"px"},400);
        },
        function(){
          jQuery('div.resize').stop().animate({width:"300px"},400);
        }    
        );
    </script>
  </body>
</html>