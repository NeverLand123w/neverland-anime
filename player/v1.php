<?php 
$api = "https://anikatsu.shashankktiwari.repl.co";
$websiteTitle = "Neverland"; 
$websiteUrl = "//{$_SERVER['SERVER_NAME']}";
$websiteLogo = "/files/images/logo.png";
$contactEmail = "neverlandanime7@gmail.com";
$banner = $websiteUrl . "/files/images/logo.png";$id = $_GET['id']; 
$json = file_get_contents("$api/vidcdn/watch/$id");
$json = json_decode($json, true);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Adless Player</title>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" crossorigin="anonymous">
<script src='<?=$websiteUrl?>/files/js/jwplayer.js'></script>
<style type="text/css">
        body {background-color: #000;}
    </style>
</head>
<body>
<div id="myElement"></div>
<script type="text/javascript">
  var playerInstance = jwplayer("myElement");
  playerInstance.setup({
             
      sources: <?php echo json_encode($json) ?>,  
                    autostart: true,  
    image: "",

    "logo": {
            "file": "https://neverland-anime.ml/files/images/player_logo.png",                        //ADD YOUR LOGO IMAGE FILE
            "link": "",                        //ADD YOUR LOGO IMAGE LINK
            "hide": "false",
            "position": "top-right"
        },
        events: {
        onPause: function(event) {
            setCookie(event.position);
        },
        onPlay: function(event) {
            setCookie(event.position);
        }
      }
    });

  playerInstance.logo(
   'https://neverland-anime.ml/files/images/logo.png',
   'Logo', 
);

    
  
  </script>
</body>
</html> 