<?php defined('AUTOMAD') or die('Direct access not permitted!'); ?>
<@ snippets/header.php @>

<div class="main-content-div">
	
	<@ snippets/navbar.php @>
	<section class="section">
		<div class="container is-clipped">
			<div class="columns is-8 is-variable">
				<div class="column is-6 content">
					<@ if not @{ checkboxHideTitleAndTeaser } @>
						<@ snippets/teaser.php @>
					<@ end @>
					<br />
					@{ text | markdown }
				</div>
				<div class="column is-6">
					<div class="content">
						<@ filelist { glob: '*slide*.jpg, *slide*.jpeg, *slide*.png, *slide*.webp, *slide*.avif', order: asc } @>
						<@ foreach in filelist { width: 1000 } @>
							<img src="@{ :fileResized }" alt="@{ :basename }" />
							@{ :caption | markdown }
						<@ end @>
					</div>
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