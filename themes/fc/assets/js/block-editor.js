wp.blocks.registerBlockStyle( 'core/quote', {
    name: 'fancy-quote',
    label: 'Fancy Quote',
} );

wp.domReady( function () {
    wp.blocks.unregisterBlockStyle( 'core/quote', 'plain' );
    wp.blocks.unregisterBlockStyle( 'core/quote', 'large' );
} );

wp.blocks.registerBlockStyle( 'core/button', {
    name: 'fc-button',
    label: 'FC Button',
} );

wp.domReady( function () {
    wp.blocks.unregisterBlockStyle( 'core/button', 'fill' );
    wp.blocks.unregisterBlockStyle( 'core/button', 'outline' );
} );