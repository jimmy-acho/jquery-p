<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title></title>
    <script src="js/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="js/lightbox.js"></script>
    <link type="text/css" rel="stylesheet" href="css/lightbox.css" />

    <style>
      div.resize{
        width: 400px;
        height: 200px;
        background-color: chartreuse;
        overflow: hidden;
      }
    </style>
  </head>
  <body>
    <div id="wrapper">
      <a href="images/asteriks-v-britanii.jpg"
         rel="lightbox[natly]" 
         title="Жерар">Жерар</a>
      <a href="images/sea.jpg"
         rel="lightbox[natly]" 
         title="Морееееееееееее">Морееееееееееее!</a>
      <a class="resize" href="#">Развернуть / свернуть</a>
      <div class="resize">
        Какой-то текст
      </div>
    </div>
    <script>
      var miidle_size = 200;
      jQuery('a.resize').toggle(
              function() {
                jQuery('div.resize').stop().animate({width: miidle_size + "px"}, 400);
              },
              function() {
                jQuery('div.resize').stop().animate({width: "0px"}, 600);
              },
              function() {
                jQuery('div.resize').stop().animate({width: miidle_size + "px"}, 400);
              },
              function() {
                jQuery('div.resize').stop().animate({width: "400px"}, 400);
              }
      );

    </script>
  </body>
</html>
