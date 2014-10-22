<div id="authors-commentary-navigation">

	<h2 class="nav-tab-wrapper current">
		<a class="nav-tab nav-tab-active" href="javascript:;">Draft</a>
		<a class="nav-tab" href="javascript:;">Resources</a>
		<a class="nav-tab" href="javascript:;">Published</a>
	</h2>

	<?php

		// Include the partials for rendering the tabbed content
		include_once( 'partials/drafts.php' );
		include_once( 'partials/resources.php' );
		include_once( 'partials/published.php' );

		// Add a nonce field for security
		wp_nonce_field( 'authors_commentary_save', 'authors_commentary_nonce' );

	?>

</div>