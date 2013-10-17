	<?php $data = json_decode(file_get_contents('http://comp2203.ecs.soton.ac.uk/labs/lab3/api/location.php?location=3772'));?>

<div id="weather">
	<h3><?php print_r('DATA FOR: ' . $data->name . ', ' . $data->country); ?></h3>
	<p> <?php print_r('Continent: ' . $data->continent); ?></p>
	<p> <?php print_r('Latitude: ' . $data->position->lat); ?>&deg</p>
	<p> <?php print_r('Longitude: ' . $data->position->long); ?>&deg</p>
	<p> <?php print_r('Date & Time: ' . $data->time); ?></p>
	<h4>WEATHER</h4>
	<p> <?php print_r('Weather Type: ' . $data->weather->weatherType); ?></p>
	<p> <?php print_r('Temp: ' . $data->weather->temperature); ?> &deg;C</p>
	<p> <?php print_r('Pressure: ' . $data->weather->pressure . ' mb'); ?></p>
	<p> <?php print_r('Visibility: ' . (($data->weather->visibility) / 1000) . ' km'); ?></p>
	<h5>Wind</h5>
	<p> <?php print_r('Direction (Compass): ' . $data->weather->wind->compass); ?></p>
	<p> <?php print_r('Direction (Angle): ' . $data->weather->wind->angle); ?>&deg</p>
	<p> <?php print_r('Speed: ' . $data->weather->wind->speed); ?> kph</p>
	
</div>