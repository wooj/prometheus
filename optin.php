<?php

if( get_field('optin_number'))
{
	$optin_number = get_field('optin_number'); 
}
else
{
	$optin_number = 0 ; 
}

if ( function_exists( 'ot_get_option' ) ) {

  $optin_codes = ot_get_option( 'optin_codes', array() );
  if ( !empty( $optin_codes) ) {
  echo '<center><img width="160" style="position:relative;top:40px;" src="'.$optin_codes[$optin_number]['image'].'"></center>';

  echo '<optin><content>'.$optin_codes[$optin_number]['content'].'</content>'.$optin_codes[$optin_number]['code'].'</optin>';
  
  }
  
  }
  
  
  
  ?>
  