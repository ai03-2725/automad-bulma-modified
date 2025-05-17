<?php defined('AUTOMAD') or die('Direct access not permitted!'); ?>
<@ snippets/header.php @>

<div class="main-content-div">

	<@ snippets/hero.php @>
	<section class="section">
		<div class="container">			
			<div class="columns is-8 is-variable">
				<div class="column <@ if @{ checkboxHideMenu } @>is-12<@ else @>is-8<@ end @> content">
					<@ if not @{ checkboxHideTitleAndTeaser } @>
						<@ snippets/teaser.php @>
					<@ end @>
					<br />
					@{ text | markdown }
				</div>	
				<@ if not @{ checkboxHideMenu } @>
				<div class="column is-4">
					<hr class="is-hidden-tablet" />
					<@ snippets/menu.php @>
				</div>
				<@ end @>
			</div>
		</div>
	</section>

</div>
	
<@ snippets/footer.php @>