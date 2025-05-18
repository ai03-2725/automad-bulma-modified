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
			<@ filelist { glob: '*.jpg, *.jpeg, *.png, *.webp, *.avif', order: asc } @>
			<@ if @{ :filelistCount } > 1 @>
			<div class="columns">
				<@ foreach in filelist { width: 1280, height: @{ carouselHeight | def (750) }, crop: true } @>
					<div class="column is-6">
						<img src="@{ :fileResized }" alt="@{ :basename }" class="img-grid-4x3" style="border-radius: 0.375rem;" />
					</div>
				<@ end @>
			</div>
			<@ end @>
			<@ if not @{checkboxFullWidth} @>
		</div>
	</section>
	<@ end @>

</div>
	
<@ snippets/footer.php @>