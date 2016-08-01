<ul>
	<?php 
	for ($ikea=0; $ikea < 14; $ikea++) { 
		echo "<li>".$ikea."</li>";
	}
	 ?>
</ul>


<strong>States:</strong>
<ul>
	<?php 
	$states = array("selangor","johor","melaka");
	foreach ($states as $state) {
		echo "<li>".$state.PHP_EOL."</li>";
	}
	 ?>

</ul>

<strong>States: </strong>
<ul>
   <?php
   $states = array("Selangor", "Johor", "Negeri Sembilan", "Melaka", "Perak", "Perlis", "Kelantan", "Terengganu", "Pulau Pinang", "Pahang", "Sabah", "Sarawak", "Kuala Lumpur", "Labuan", "Putrajaya");
   $num = 0;
   do{
       echo "<li>".$states[$num] . PHP_EOL."</li>";
       $num++;
   }while($num <= 6);
   ?>
</ul>
