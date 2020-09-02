<?php
/**
 * Block Patterns
 *
 * @package linkinbio
 * @since 1.0.0
 */

/**
 * Register Block Pattern Category.
 */
if ( function_exists( 'register_block_pattern_category' ) ) {
	
	register_block_pattern_category(
		'linkinbio',
		array( 'label' => __( 'Link in Bio', 'linkinbio' ) )
	);
}

/**
 * Register Custom Block Patterns
 */
if ( function_exists( 'register_block_pattern' ) ) {
	register_block_pattern(
		'linkinbio/links',
		array (
			'title'		=> __( 'Link in Bio: General Links', 'linkinbio' ),
			'categories'=> array( 'linkinbio' ),
			'content'	=> "<!-- wp:buttons {\"className\":\"is-style-linkinbio-large-transparent-white-buttons\"} -->\n<div class=\"wp-block-buttons is-style-linkinbio-large-transparent-white-buttons\"><!-- wp:button -->\n<div class=\"wp-block-button\"><a class=\"wp-block-button__link\" href=\"#\">Read this article</a></div>\n<!-- /wp:button -->\n\n<!-- wp:button -->\n<div class=\"wp-block-button\"><a class=\"wp-block-button__link\" href=\"#\">Purchase this book</a></div>\n<!-- /wp:button -->\n\n<!-- wp:button -->\n<div class=\"wp-block-button\"><a class=\"wp-block-button__link\" href=\"#\">Visit our website</a></div>\n<!-- /wp:button -->\n\n<!-- wp:button -->\n<div class=\"wp-block-button\"><a class=\"wp-block-button__link\" href=\"#\">Visit our store</a></div>\n<!-- /wp:button -->\n\n<!-- wp:button -->\n<div class=\"wp-block-button\"><a class=\"wp-block-button__link\" href=\"#\">Join our Facebook group</a></div>\n<!-- /wp:button -->\n\n<!-- wp:button -->\n<div class=\"wp-block-button\"><a class=\"wp-block-button__link\" href=\"#\">Get more information</a></div>\n<!-- /wp:button --></div>\n<!-- /wp:buttons -->\n\n<!-- wp:social-links {\"align\":\"center\",\"className\":\"is-style-linkinbio-transparent-white-buttons\"} -->\n<ul class=\"wp-block-social-links aligncenter is-style-linkinbio-transparent-white-buttons\"><!-- wp:social-link {\"url\":\"https://wordpress.org\",\"service\":\"wordpress\"} /-->\n\n<!-- wp:social-link {\"url\":\"https://facebook.com\",\"service\":\"facebook\"} /-->\n\n<!-- wp:social-link {\"url\":\"https://twitter.com\",\"service\":\"twitter\"} /-->\n\n<!-- wp:social-link {\"url\":\"https://instsagram.com\",\"service\":\"instagram\"} /-->\n\n<!-- wp:social-link {\"service\":\"linkedin\"} /-->\n\n<!-- wp:social-link {\"service\":\"youtube\"} /--></ul>\n<!-- /wp:social-links -->",
		)
	);
	register_block_pattern(
		'linkinbio/music',
		array (
			'title'		=> __( 'Link in Bio: Music', 'linkinbio' ),
			'categories'=> array( 'linkinbio' ),
			'content'	=> "<!-- wp:embed {\"url\":\"https://www.youtube.com/watch?v=_qX8CYToBbQ\",\"type\":\"video\",\"providerNameSlug\":\"youtube\",\"responsive\":true,\"className\":\"wp-embed-aspect-16-9 wp-has-aspect-ratio\"} -->\n<figure class=\"wp-block-embed is-type-video is-provider-youtube wp-block-embed-youtube wp-embed-aspect-16-9 wp-has-aspect-ratio\"><div class=\"wp-block-embed__wrapper\">\nhttps://www.youtube.com/watch?v=_qX8CYToBbQ\n</div></figure>\n<!-- /wp:embed -->\n\n<!-- wp:columns -->\n<div class=\"wp-block-columns\"><!-- wp:column -->\n<div class=\"wp-block-column\"><!-- wp:buttons {\"className\":\"is-style-linkinbio-large-transparent-white-buttons\"} -->\n<div class=\"wp-block-buttons is-style-linkinbio-large-transparent-white-buttons\"><!-- wp:button -->\n<div class=\"wp-block-button\"><a class=\"wp-block-button__link\">Soundcloud</a></div>\n<!-- /wp:button -->\n\n<!-- wp:button -->\n<div class=\"wp-block-button\"><a class=\"wp-block-button__link\">Bandcamp</a></div>\n<!-- /wp:button -->\n\n<!-- wp:button -->\n<div class=\"wp-block-button\"><a class=\"wp-block-button__link\">YouTube</a></div>\n<!-- /wp:button --></div>\n<!-- /wp:buttons --></div>\n<!-- /wp:column -->\n\n<!-- wp:column -->\n<div class=\"wp-block-column\"><!-- wp:buttons {\"className\":\"is-style-linkinbio-large-transparent-white-buttons\"} -->\n<div class=\"wp-block-buttons is-style-linkinbio-large-transparent-white-buttons\"><!-- wp:button -->\n<div class=\"wp-block-button\"><a class=\"wp-block-button__link\">Spotify</a></div>\n<!-- /wp:button -->\n\n<!-- wp:button -->\n<div class=\"wp-block-button\"><a class=\"wp-block-button__link\">Apple Music</a></div>\n<!-- /wp:button -->\n\n<!-- wp:button -->\n<div class=\"wp-block-button\"><a class=\"wp-block-button__link\">Tidal</a></div>\n<!-- /wp:button --></div>\n<!-- /wp:buttons --></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns -->\n\n<!-- wp:social-links {\"align\":\"center\",\"className\":\"is-style-linkinbio-transparent-white-buttons\"} -->\n<ul class=\"wp-block-social-links aligncenter is-style-linkinbio-transparent-white-buttons\"><!-- wp:social-link {\"url\":\"https://wordpress.org\",\"service\":\"wordpress\"} /-->\n\n<!-- wp:social-link {\"url\":\"https://facebook.com\",\"service\":\"facebook\"} /-->\n\n<!-- wp:social-link {\"url\":\"https://twitter.com\",\"service\":\"twitter\"} /-->\n\n<!-- wp:social-link {\"url\":\"https://instsagram.com\",\"service\":\"instagram\"} /-->\n\n<!-- wp:social-link {\"service\":\"linkedin\"} /-->\n\n<!-- wp:social-link {\"service\":\"youtube\"} /--></ul>\n<!-- /wp:social-links -->\n\n<!-- wp:paragraph -->\n<p></p>\n<!-- /wp:paragraph -->",
		)
	);
	register_block_pattern(
		'linkinbio/podcast',
		array (
			'title'		=> __( 'Link in Bio: Podcast', 'linkinbio' ),
			'categories'=> array( 'linkinbio' ),
			'content'	=> "<!-- wp:buttons {\"className\":\"is-style-linkinbio-large-transparent-white-buttons\"} -->\n<div class=\"wp-block-buttons is-style-linkinbio-large-transparent-white-buttons\"><!-- wp:button {\"borderRadius\":10} -->\n<div class=\"wp-block-button\"><a class=\"wp-block-button__link\" style=\"border-radius:10px\">iTunes</a></div>\n<!-- /wp:button -->\n\n<!-- wp:button {\"borderRadius\":10} -->\n<div class=\"wp-block-button\"><a class=\"wp-block-button__link\" style=\"border-radius:10px\">Spotify</a></div>\n<!-- /wp:button -->\n\n<!-- wp:button {\"borderRadius\":10} -->\n<div class=\"wp-block-button\"><a class=\"wp-block-button__link\" style=\"border-radius:10px\">Soundcloud</a></div>\n<!-- /wp:button -->\n\n<!-- wp:button {\"borderRadius\":10} -->\n<div class=\"wp-block-button\"><a class=\"wp-block-button__link\" style=\"border-radius:10px\">Stitcher</a></div>\n<!-- /wp:button --></div>\n<!-- /wp:buttons -->\n\n<!-- wp:social-links {\"align\":\"center\",\"className\":\"is-style-linkinbio-transparent-white-buttons\"} -->\n<ul class=\"wp-block-social-links aligncenter is-style-linkinbio-transparent-white-buttons\"><!-- wp:social-link {\"url\":\"https://wordpress.org\",\"service\":\"wordpress\"} /-->\n\n<!-- wp:social-link {\"url\":\"https://facebook.com\",\"service\":\"facebook\"} /-->\n\n<!-- wp:social-link {\"url\":\"https://twitter.com\",\"service\":\"twitter\"} /-->\n\n<!-- wp:social-link {\"url\":\"https://instsagram.com\",\"service\":\"instagram\"} /-->\n\n<!-- wp:social-link {\"service\":\"linkedin\"} /-->\n\n<!-- wp:social-link {\"service\":\"youtube\"} /--></ul>\n<!-- /wp:social-links -->",
		)
	);
	register_block_pattern(
		'linkinbio/news',
		array (
			'title'		=> __( 'Link in Bio: News', 'linkinbio' ),
			'categories'=> array( 'linkinbio' ),
			'content'	=> "<!-- wp:media-text {\"mediaId\":33,\"mediaLink\":\"https://cldup.com/qyENGEu4xF.png\",\"linkDestination\":\"none\",\"mediaType\":\"image\",\"mediaWidth\":15,\"isStackedOnMobile\":false,\"imageFill\":true,\"backgroundColor\":\"foreground\"} -->\n<div class=\"wp-block-media-text alignwide is-image-fill has-foreground-background-color has-background\" style=\"grid-template-columns:15% auto\"><figure class=\"wp-block-media-text__media\" style=\"background-image:url(https://cldup.com/qyENGEu4xF.png);background-position:50% 50%\"><img src=\"https://cldup.com/qyENGEu4xF.png\" alt=\"\" class=\"wp-image-33\"/></figure><div class=\"wp-block-media-text__content\"><!-- wp:paragraph {\"placeholder\":\"Content…\"} -->\n<p><a href=\"#\">Figma vs. Sketch vs. Photoshop, etc.</a></p>\n<!-- /wp:paragraph --></div></div>\n<!-- /wp:media-text -->\n\n<!-- wp:media-text {\"mediaId\":33,\"mediaLink\":\"https://cldup.com/0HUn1bAhLC.png\",\"linkDestination\":\"none\",\"mediaType\":\"image\",\"mediaWidth\":15,\"isStackedOnMobile\":false,\"imageFill\":true,\"backgroundColor\":\"foreground\"} -->\n<div class=\"wp-block-media-text alignwide is-image-fill has-foreground-background-color has-background\" style=\"grid-template-columns:15% auto\"><figure class=\"wp-block-media-text__media\" style=\"background-image:url(https://cldup.com/0HUn1bAhLC.png);background-position:50% 50%\"><img src=\"https://cldup.com/0HUn1bAhLC.png\" alt=\"\" class=\"wp-image-33\"/></figure><div class=\"wp-block-media-text__content\"><!-- wp:paragraph {\"placeholder\":\"Content…\"} -->\n<p><a href=\"#\">The best places to build and host your portfolio website</a></p>\n<!-- /wp:paragraph --></div></div>\n<!-- /wp:media-text -->\n\n<!-- wp:media-text {\"mediaId\":33,\"mediaLink\":\"https://cldup.com/Mhxn94ZnKV.png\",\"linkDestination\":\"none\",\"mediaType\":\"image\",\"mediaWidth\":15,\"isStackedOnMobile\":false,\"imageFill\":true,\"backgroundColor\":\"foreground\"} -->\n<div class=\"wp-block-media-text alignwide is-image-fill has-foreground-background-color has-background\" style=\"grid-template-columns:15% auto\"><figure class=\"wp-block-media-text__media\" style=\"background-image:url(https://cldup.com/Mhxn94ZnKV.png);background-position:50% 50%\"><img src=\"https://cldup.com/Mhxn94ZnKV.png\" alt=\"\" class=\"wp-image-33\"/></figure><div class=\"wp-block-media-text__content\"><!-- wp:paragraph {\"placeholder\":\"Content…\"} -->\n<p><a href=\"#\">Is remote work here to stay?</a></p>\n<!-- /wp:paragraph --></div></div>\n<!-- /wp:media-text -->\n\n<!-- wp:media-text {\"mediaId\":33,\"mediaLink\":\"https://cldup.com/4SI-6R6hgG.png\",\"linkDestination\":\"none\",\"mediaType\":\"image\",\"mediaWidth\":15,\"isStackedOnMobile\":false,\"imageFill\":true,\"backgroundColor\":\"foreground\"} -->\n<div class=\"wp-block-media-text alignwide is-image-fill has-foreground-background-color has-background\" style=\"grid-template-columns:15% auto\"><figure class=\"wp-block-media-text__media\" style=\"background-image:url(https://cldup.com/4SI-6R6hgG.png);background-position:50% 50%\"><img src=\"https://cldup.com/4SI-6R6hgG.png\" alt=\"\" class=\"wp-image-33\"/></figure><div class=\"wp-block-media-text__content\"><!-- wp:paragraph {\"placeholder\":\"Content…\"} -->\n<p><a href=\"#\">2020: The year Letraset makes a comeback</a></p>\n<!-- /wp:paragraph --></div></div>\n<!-- /wp:media-text -->\n\n<!-- wp:media-text {\"mediaId\":33,\"mediaLink\":\"https://cldup.com/yjWLTy2fEs.png\",\"linkDestination\":\"none\",\"mediaType\":\"image\",\"mediaWidth\":15,\"isStackedOnMobile\":false,\"imageFill\":true,\"backgroundColor\":\"foreground\"} -->\n<div class=\"wp-block-media-text alignwide is-image-fill has-foreground-background-color has-background\" style=\"grid-template-columns:15% auto\"><figure class=\"wp-block-media-text__media\" style=\"background-image:url(https://cldup.com/yjWLTy2fEs.png);background-position:50% 50%\"><img src=\"https://cldup.com/yjWLTy2fEs.png\" alt=\"\" class=\"wp-image-33\"/></figure><div class=\"wp-block-media-text__content\"><!-- wp:paragraph {\"placeholder\":\"Content…\"} -->\n<p><a href=\"#\">Computers are overrated</a></p>\n<!-- /wp:paragraph --></div></div>\n<!-- /wp:media-text -->\n\n<!-- wp:media-text {\"mediaId\":33,\"mediaLink\":\"https://cldup.com/4Zz9ic7e5H.png\",\"linkDestination\":\"none\",\"mediaType\":\"image\",\"mediaWidth\":15,\"isStackedOnMobile\":false,\"imageFill\":true,\"backgroundColor\":\"foreground\"} -->\n<div class=\"wp-block-media-text alignwide is-image-fill has-foreground-background-color has-background\" style=\"grid-template-columns:15% auto\"><figure class=\"wp-block-media-text__media\" style=\"background-image:url(https://cldup.com/4Zz9ic7e5H.png);background-position:50% 50%\"><img src=\"https://cldup.com/4Zz9ic7e5H.png\" alt=\"\" class=\"wp-image-33\"/></figure><div class=\"wp-block-media-text__content\"><!-- wp:paragraph {\"placeholder\":\"Content…\"} -->\n<p><a href=\"#\">Where’s the line between design and art?</a></p>\n<!-- /wp:paragraph --></div></div>\n<!-- /wp:media-text -->\n\n<!-- wp:social-links {\"align\":\"center\",\"className\":\"is-style-linkinbio-secondary-color-buttons is-style-linkinbio-foreground-color-buttons\"} -->\n<ul class=\"wp-block-social-links aligncenter is-style-linkinbio-secondary-color-buttons is-style-linkinbio-foreground-color-buttons\"><!-- wp:social-link {\"url\":\"https://wordpress.org\",\"service\":\"wordpress\"} /-->\n\n<!-- wp:social-link {\"url\":\"https://facebook.com\",\"service\":\"facebook\"} /-->\n\n<!-- wp:social-link {\"url\":\"https://twitter.com\",\"service\":\"twitter\"} /-->\n\n<!-- wp:social-link {\"url\":\"https://instsagram.com\",\"service\":\"instagram\"} /-->\n\n<!-- wp:social-link {\"service\":\"linkedin\"} /-->\n\n<!-- wp:social-link {\"service\":\"youtube\"} /--></ul>\n<!-- /wp:social-links -->",
		)
	);
} 