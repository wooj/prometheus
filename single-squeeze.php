<?php include (get_template_directory().'/includes/header-blank.php'); ?>

<html>
<body>

<?php 

$template = get_field('squeeze_page_type'); 

switch($template) :  

case $template : 
include(get_template_directory().'/includes/templates/squeeze_pages/'.$template.'.php');
break;

endswitch;

?>

 <body>
 
 </html>
