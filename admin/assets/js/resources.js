/**
 * Creates a new input element to be appended to the DOM that's used to represent a single
 * resource (be it an address, tweet, image URL, etc.) to be referenced in the post.
 *
 * @since    0.4.0
 * @param    object    $    A reference to the jQuery object
 * @return   object         An input element to be appended to the DOM.
 */
function createInputElement( $ ) {

	var $inputElement, iInputCount;

	/* First, count the number of input fields that already exist. This is how we're going to
	 * implement the name and ID attributes of the element.
	 */
	iInputCount = $( '#authors-commentary-resources' ).children().length;
	iInputCount++;

	// Next, create the actual input element and then return it to the caller
	$inputElement =
		$( '<input />' )
			.attr( 'type', 'text' )
			.attr( 'name', 'authors-commentary-resources[' + iInputCount + ']' )
			.attr( 'id', 'authors-commentary-resource-' + iInputCount )
			.attr( 'value', '' );


	return $inputElement;


}

(function( $ ) {
	'use strict';

	$(function() {

		var $inputElement;

		$( '#authors-commentary-add-resource' ).on( 'click', function( evt ) {

			evt.preventDefault();

			/* Create a new input element that will be used to capture the users input
			 * and append it to the container just above this button.
			 */
			$( '#authors-commentary-resources' ).append ( createInputElement( $ ) );



		});

	});

})( jQuery );