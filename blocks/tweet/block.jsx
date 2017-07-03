/**
 * BLOCK: Tweet
 *
 * Tweet block JS.
 *
 * @since  1.0.0
 */
wp.blocks.registerBlockType( 'gb/tweet', {
	title: gbBlockTweet.i18n.label,
	icon: 'twitter',
	category: 'common',

	attributes: {
		text: gbBlockTweet.i18n.message,
	},

	edit: function( props ) {
		console.log( props );
		return <a href={'https://twitter.com/home?status=' + encodeURIComponent( gbBlockTweet.i18n.message )}>{gbBlockTweet.i18n.linktext}</a>
	},

	save: function( props ) {
		console.log( props );
		return <a href={'https://twitter.com/home?status=' + encodeURIComponent( gbBlockTweet.i18n.message )}>{gbBlockTweet.i18n.linktext}</a>
	}
} );
