<?php $font_combo = get_field('font_combo'); ?>

<?php 

switch($font_combo) :

case "josefin+opensans" :
echo "<link href='http://fonts.googleapis.com/css?family=Josefin+Slab:700' rel='stylesheet' type='text/css'>";
echo "<style>body{font-size:16px;font-family:opensans;font-weight:100;}headline,xxxlarge,xxlarge,xlarge{font-family:'Josefin Slab',serif;}xxxlarge,headline{font-size:48px !important;text-shadow:1px 1px 4px #555;}</style>";
break;

case "league+opensans" :
echo "<style>body{font-size:16px !important;font-family:opensans;font-weight:100;}headline,xxxlarge,xxlarge,xlarge{ font-family:league;}xxxlarge,headline { font-size:56px !important;text-shadow:0 0 5px #aaa; }</style>";
break;

case "lobster+cabin" :
echo "<link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'><link href='http://fonts.googleapis.com/css?family=Cabin' rel='stylesheet' type='text/css'>";
echo "<style>body{font-size:16px;font-family:'Cabin';font-weight:100;}headline,xxxlarge,xxlarge,xlarge{font-family:'Lobster',serif;}xxxlarge,headline{font-size:48px !important;text-shadow:1px 1px 4px #555;}</style>";
break;

case "raleway+goudy" :
echo "<link href='http://fonts.googleapis.com/css?family=Goudy+Bookletter+1911' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Raleway:100' rel='stylesheet' type='text/css'>";
echo "<style>body{font-size:16px;font-family:'Raleway';font-weight:100;}headline,xxxlarge,xxlarge,xlarge{font-family:'Goudy Bookletter 1911',serif;}xxxlarge,headline{font-size:48px !important;text-shadow:1px 1px 4px #555;}</style>";
break;

case "allerta+crimson" :
echo "<link href='http://fonts.googleapis.com/css?family=Crimson+Text' rel='stylesheet' type='text/css'><link href='http://fonts.googleapis.com/css?family=Allerta' rel='stylesheet' type='text/css'>";
echo "<style>body{font-size:16px;font-family:'Crimson Text';font-weight:100;}headline,xxxlarge,xxlarge,xlarge{font-family:'Allerta',serif;}xxxlarge,headline{font-size:48px !important;text-shadow:1px 1px 4px #555;}</style>";
break;

case "arvo+ptsans" :
echo "<link href='http://fonts.googleapis.com/css?family=Arvo' rel='stylesheet' type='text/css'><link href='http://fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet' type='text/css'>
";
echo "<style>body{font-size:16px;font-family:'PT Sans';font-weight:100;}headline,xxxlarge,xxlarge,xlarge{font-family:'Arvo',serif;}xxxlarge,headline{font-size:48px !important;text-shadow:1px 1px 4px #555;}</style>";
break;


case "molengo+lekton" :
echo "<link href='http://fonts.googleapis.com/css?family=Lekton' rel='stylesheet' type='text/css'><link href='http://fonts.googleapis.com/css?family=Molengo' rel='stylesheet' type='text/css'>
";
echo "<style>body{font-size:16px;font-family:'Lekton';font-weight:100;}headline,xxxlarge,xxlarge,xlarge{font-family:'Molengo',serif;}xxxlarge,headline{font-size:48px !important;text-shadow:1px 1px 4px #555;}</style>";
break;

case "molengo+lekton" :
echo "<link href='http://fonts.googleapis.com/css?family=Droid+Serif' rel='stylesheet' type='text/css'><link href='http://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>

";
echo "<style>body{font-size:16px;font-family:'Droid Sans';font-weight:100;}headline,xxxlarge,xxlarge,xlarge{font-family:'Droid Serif',serif;}xxxlarge,headline{font-size:48px !important;text-shadow:1px 1px 4px #555;}</style>";
break;

case "corben+nubile" :
echo "<link href='http://fonts.googleapis.com/css?family=Corben:bold' rel='stylesheet' type='text/css'><link href='http://fonts.googleapis.com/css?family=Nobile' rel='stylesheet' type='text/css'>";
echo "<style>body{font-size:16px;line-height:1.25;font-family:'Nobile';font-weight:100;}headline,xxxlarge,xxlarge,xlarge{font-family:'Corben',serif;}xxxlarge,headline{font-size:32px !important;text-shadow:1px 1px 4px #555;}</style>";
break;

case "ubuntu+vollkorn" :
echo "<link href='http://fonts.googleapis.com/css?family=Ubuntu:bold' rel='stylesheet' type='text/css'><link href='http://fonts.googleapis.com/css?family=Vollkorn' rel='stylesheet' type='text/css'>";
echo"<style>body{font-size:16px;font-family:'Vollkorn';font-weight:100;}headline,xxxlarge,xxlarge,xlarge{font-family:'Ubuntu',serif;}xxxlarge,headline{font-size:34px !important;text-shadow:1px 1px 4px #555;}</style>";
break;




endswitch;


?>