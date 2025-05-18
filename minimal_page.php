<?php defined('AUTOMAD') or die('Direct access not permitted!'); ?>
<@ snippets/header.php @>
<@ if @{ checkboxNavbarDark } @>
	<@ set { ":navbarColor": "is-dark" } @>
<@ else @>
	<@ set { ":navbarColor": "is-white" } @>
<@ end @>
<@ snippets/navbar.php @>

<div class="main-content-div">

	<@ if not @{checkboxFullWidth} @>
	<section class="section">
		<div class="container content">			
			<@ end @>
			@{ text | markdown }
			<@ if not @{checkboxFullWidth} @>
		</div>
	</section>
	<@ end @>

</div>
	
<@ snippets/footer.php @>