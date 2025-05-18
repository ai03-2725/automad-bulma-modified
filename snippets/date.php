<?php defined('AUTOMAD') or die('Direct access not permitted!'); ?>
<@ if @{ :template | match ('(blog|post)') } @>
	@{ date | dateFormat (@{ formatDateBlog | def ('F jS Y') }) }
<@ else @>
	@{ date | dateFormat (@{ formatDate | def ('F jS Y') }) }
<@ end @>