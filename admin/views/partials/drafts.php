<?php

/**
 * Provides the 'Drafts' view for the corresponding tab in the Post Meta Box.
 *
 * @link       http://code.tutsplus.com/tutorials/creating-maintainable-wordpress-meta-boxes-the-front-end--cms-22383
 * @since      0.3.0
 *
 * @package    Authors_Commentary
 * @subpackage Authors_Commentary/admin/partials
 */
?>

<div class="inside">
	<textarea id="authors-commentary-drafts" name="authors-commentary-drafts"><?php echo get_post_meta( get_the_ID(), 'authors-commentary-drafts', true ); ?></textarea>
</div>