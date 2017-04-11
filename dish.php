<?php 
	
	define("TITLE", "Menu Item | Chai Pani ");
	include("template/header.php");	
	
	function strip_bad_char($input)
	{
		$output = preg_replace( "/[^a-zA-Z0-9_-]/", "",$input);
		return $output;
	}
	if (isset($_GET['item']))
	{
		$menuItem = strip_bad_char( $_GET['item']);
		$dish = $menuItems[$menuItem];
	}
	
	function suggestedTip($price, $tip) {
		$totalTip = $price * $tip;
		echo money_format('%.2n', $totalTip);
	}
?>
<hr>
	<div id="dish">
		<h1><?php echo $dish["title"]; ?> <span class="price"><sup>$</sup><?php echo $dish["price"]; ?></span></h1>
		<p><?php echo $dish["blurb"]; ?></p>
		
		<p><em>Suggested tip: <sup>$</sup><?php suggestedTip($dish["price"], 0.20); ?></em></p>
		<br>
		
	</div>
	
<hr>
		<a href="menu.php" class="button previous">&laquo; Back to Menu</a>
<?php 
	include("template/footer.php");	
?>