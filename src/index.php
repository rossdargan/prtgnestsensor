<?php  
 header('Content-Type: text/xml');  
 require_once('nest.class.php');  
 // Your Nest username and password.  
 $username = $_ENV['USERNAME'];  
 $password = $_ENV['PASSWORD'];  
 // The timezone you're in  
 // See http://php.net/manual/en/timezones.php for the possible values.  
 date_default_timezone_set('Europe/London');  
 $nest = new Nest($username, $password);  
 // Get the device information:  
 $infos = $nest->getDeviceInfo();  
 // Start XML Output  
 echo "<nest>";  
 // Print the current temperature  
 printf("<nesttemp> %.01f </nesttemp> \n", $infos->current_state->temperature, $infos->scale);  
 // Print the current humidity  
 printf("<nesthumidity> %.01f </nesthumidity> \n", $infos->current_state->humidity, $infos->scale);  
 //Print Auto Away 0 or 1  
 printf("<autoaway>%.0f</autoaway>", $infos->current_state->auto_away);  
 //Print Manual Away 0 or 1  
 printf("<manualaway>%.0f</manualaway>", $infos->current_state->manual_away);  
 //Print Battery Level  
 printf("<battery>%.02f</battery>", $infos->current_state->battery_level);  
 //Close XML  
 echo "</nest>";  
 ?>  
