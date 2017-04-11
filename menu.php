<?php 
	define("TITLE", "Menu | Chai Pani ");
	include("template/header.php");	
?>

	<div id = "menu-items">
		<h1> Our Delicious Menu </h1>
		<p>Our menu is full of different spices</p>
		<p> <strong> embrace the spice, never fear them!!!</strong></p>
		
		<hr>
		<ul>
			<?php foreach ($menuItems as $dish => $item) { ?>
				
				<li><a href="dish.php?item=<?php echo $dish; ?>"><?php echo $item["title"]; ?></a> <sup>$</sup><?php echo $item["price"]; ?></li>
			
			<?php } ?>
		</ul>
	</div>

<?php 
	include("template/footer.php");	
?>