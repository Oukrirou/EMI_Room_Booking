<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <input hidden type="checkbox" name="menu" id="menu"><!--for barside menu-->
	<nav class="barnav">
		<label for="menu"><i class="fas fa-bars menu"></i></label>
		<img class="Emilogo" src="Images/logo.gif">
		<span class="supertitle">EMI<span class="minititle">Salle</span></span>
		<label for="notify"><i class="fas fa-bell notifi"></i></label>
	</nav>
	<div class="notify">
		<label for="notify"><i class="fas fa-bell notifi bt">Notify :</i></label>
		<div class="notify_content">
			<br>
		</div>
    </div>
<!--Barside ---------------------------------------------->
	<div class="barside">
		 <a href="./index.html"><i class="fas fa-home"> </i>Home</a>
		 <a href="list_salle.php"><i class="fas fa-list"></i> List of Rooms</a>
		 <a href="./reserv.html"><i class="fas fa-calendar"></i> My Reservation</a>
		 <a href="./addroom.html"><i class="fa fa-calendar-plus"></i> Add room</a>
		 <a href="bookroom.php"><i class="fas fa-building"></i> Reserve Room</a>
		 <a href="./profil.html"><i class="fas fa-user"></i> Profil</a>
    </div>
</body>
</html>
