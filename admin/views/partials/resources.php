<?php

/**
 * Provides the 'Resources' view for the corresponding tab in the Post Meta Box.
 *
 * @link       http://code.tutsplus.com/tutorials/creating-maintainable-wordpress-meta-boxes-the-front-end--cms-22383
 * @since      0.3.0
 *
 * @package    Authors_Commentary
 * @subpackage Authors_Commentary/admin/partials
 */
?>

<div class="inside hidden">
	<div id="authors-commentary-resources">
		<?php $resources = get_post_meta( get_the_ID(), 'authors-commentary-resources', true ); ?>
		<?php foreach ( $resources as $resource ) { ?>
			<input type="text" value="<?php echo $resource; ?>" />
		<?php } ?>
	</div><!-- #authors-commentary-resources -->
	<p><input type="submit" id="authors-commentary-add-resource" value="Add Resource" class="button" />
</div>