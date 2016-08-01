<strong>Malaysia States:</strong><br/>


   <?php
   $states = array("Selangor", "Johor", "Negeri Sembilan", "Melaka", "Perak", "Perlis", "Kelantan", "Terengganu", "Pulau Pinang", "Pahang", "Sabah", "Sarawak", "Kuala Lumpur", "Labuan", "Putrajaya");
   $ibunegeri = array("shah alam", "johor bahru", "seremban", "bandar Melaka", "ipoh", "kuala Perlis", "kota bahru", "kuala Terengganu", "georgetown", "pekan", "kota kinabalu", "kuching", "wilayah", "Labuan", "Putrajaya");
   $shortname = array("SGR", "JHR", "KDH", "MLK", "PRK", "PLS", "KTN", "TRG", "PNG", "PHG", "SBH", "SWK", "KL", "LB", "PJ");

   //echo "<div style="text:align:center;">";
   echo "<table border='1' cellspacing='0' cellpadding='0'>";
   echo "<tr><td width=150px align=center><strong>Negeri</strong></td><td width=150px align=center><strong>Ibu Negeri</strong></td><td width=150px align=center><strong>Nama Pendek</strong></td>";
	//echo "</div>";

   $num = 0;
   do{
   		echo "<table border='1' cellspacing='0' cellpadding='0'>";
   		if($states[$num]=="Johor")
       		echo "<tr><td width=150px align=center><strong>".$states[$num]."</strong></td><td width=150px align=center><strong>".$ibunegeri[$num]."</strong></td><td width=150px align=center><strong>".$shortname[$num]."</strong></tr></table>";
       
       	else
       		echo "<tr><td width=150px align=center>".$states[$num]."</td><td width=150px align=center>".$ibunegeri[$num]."</td><td width=150px align=center>".$shortname[$num]."</tr></table>";

       $num++;
   }while($num <= 13);
   
   ?>
<hr/>
<strong>*Bold</strong> state is the state you're living in.