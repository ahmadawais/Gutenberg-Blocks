/**
 * BLOCK: Tweet
 *
 * Tweet block JS.
 *
 * @since  1.0.0
 */
wp.blocks.registerBlockType( 'gb/tweet', {
	title: 'Tweet',
	icon: 'twitter',
	category: 'common',

	attributes: {
		text: 'Tweet Text',
	},

	edit: function( props ) {
		return (
			<textarea>
				<a href='https://twitter.com/home?status=Custom%20Tweet!'>Click To Tweet!</a>
			</textarea>
		);
	},

	save: function( props ) {
		return <a href='https://twitter.com/home?status=Custom%20Tweet!'>Click To Tweet!</a>
	}
} );
