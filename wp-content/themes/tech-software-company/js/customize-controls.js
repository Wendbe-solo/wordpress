( function( api ) {

	// Extends our custom "tech-software-company" section.
	api.sectionConstructor['tech-software-company'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );