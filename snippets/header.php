<?php defined('AUTOMAD') or die('Direct access not permitted!'); ?>
<!doctype html>
<html lang="en">
<head>
	<@ set {
		metaTitle: "@{ sitename } / @{ title | def ('404') }"
	} @>
    <title>@{ metaTitle | stripTags }</title>
	<@ Automad/MetaTags {
		description: @{ textTeaser | stripTags },
		ogTitle: @{ metaTitle | stripTags },
		ogDescription: @{ textTeaser | stripTags },
		ogImage: @{ ogImage },
		twitterCard: 'summary_large_image'
	} @>
	<@ with @{ favicon } @><link href="@{ :file }" rel="shortcut icon" type="image/x-icon" /><@ end @>
	<@ with @{ appleTouchIcon } @><link href="@{ :file }" rel="apple-touch-icon" /><@ end @>
	<script defer src="https://use.fontawesome.com/releases/v5.6.3/js/all.js" integrity="sha384-EIHISlAOj4zgYieurP0SdoiBYfGJKkgWedPHH4jCzpCXLmzVsw1ouK59MuUtP4a1" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="@{ bulmaCss | def ('/packages/ai03/automad-bulma-modified/dist/bulma.min.css') }" />
	<link rel="stylesheet" href="/packages/ai03/automad-bulma-modified/dist/bulma-carousel.min.css" />
	<link rel="stylesheet" href="/packages/ai03/automad-bulma-modified/dist/automad-bulma.css" />
	<@ if @{ :template | match ('/(blog|post)/') } @>
		<link rel="stylesheet" href="/packages/ai03/automad-bulma-modified/dist/bulma-timeline.min.css" />
	<@ end @>
	@{ itemsHeader }
</head>

<body>
	<div class="main-wrapper-div">