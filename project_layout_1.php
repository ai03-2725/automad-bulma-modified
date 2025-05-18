<?php defined('AUTOMAD') or die('Direct access not permitted!'); ?>
<@ snippets/header.php @>

<div class="main-content-div">
	
	<@ snippets/hero.php @>
	<section class="section">
		<div class="container">
			<div class="columns is-8">
				<div class="column <@ if @{ checkboxHideMenu } @>is-12<@ else @>is-8<@ end @> content">
					<@ if not @{ checkboxHideTitleAndTeaser } @>
						<@ snippets/teaser.php @>
					<@ end @>
					<br />
					@{ text | markdown }
				</div>	
			</div>
			<br />
		</div>
		<@ if not @{ checkboxHideMenu } @>
		<@ newPagelist {
			type: 'related',
			sort: @{ sortPages },
			template: @{ templateFilter }
		} @>
		<@ snippets/pagelist.php @>
		<@ end @>
	</section>

</div>
	
<@ snippets/footer.php @>