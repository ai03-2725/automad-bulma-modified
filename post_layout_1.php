<?php defined('AUTOMAD') or die('Direct access not permitted!'); ?>
<@ snippets/header.php @>

<div class="main-content-div">

	<@ snippets/hero.php @>
	<section class="section">
		<div class="container">		
			<div class="columns is-8">
				<div class="column is-6">
					<div class="content">
						<@ if not @{ checkboxHideTitleAndTeaser } @>
							<@ snippets/teaser.php @>
						<@ end @>
						<br />
						@{ text | markdown }
					</div>	
				</div>
				<div class="column is-6">
					<hr class="is-hidden-tablet" />
					<@ newPagelist { 
						type: 'related',
						template: 'post',
						sort: 'date desc' 
					} @>
					<@ snippets/timeline.php @>
				</div>
			</div>
		</div>
	</section>

</div>
	
<@ snippets/footer.php @>