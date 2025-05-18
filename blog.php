<?php defined('AUTOMAD') or die('Direct access not permitted!'); ?>
<@ snippets/header.php @>

<div class="main-content-div">

	<@ snippets/hero.php @>	
	<@ newPagelist { 
		filter: @{ ?filter },
		search: @{ ?search },
		template: @{ templateFilter | def ('post') },
		sort: 'date desc'
	} @>
	<section class="section">
		<div class="container">	
			<div class="columns is-8">
				<div class="column is-4">
					<div class="content">
						<h1>@{ title }</h1>
						<div class="is-size-4">
							@{ textTeaser | markdown }
						</div>
						<br />
						@{ text | markdown }
					</div>	
				</div>
				<div class="column is-8">
					<@ snippets/filters.php @>
					<br>
					<@ snippets/timeline.php @>
				</div>
			</div>
		</div>
	</section>

</div>
	
<@ snippets/footer.php @>