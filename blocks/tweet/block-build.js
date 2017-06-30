/**
 * BLOCK: Tweet
 *
 * Tweet block JS.
 *
 * @since  1.0.0
 */
wp.blocks.registerBlockType('gb/tweet', {
	title: 'Tweet',
	icon: 'twitter',
	category: 'common',

	attributes: {
		text: 'Tweet Text'
	},

	edit: function (props) {
		return React.createElement(
			'a',
			{ href: 'https://twitter.com/home?status=Custom%20Tweet!' },
			'Click To Tweet!'
		);
	},

	save: function (props) {
		return React.createElement(
			'a',
			{ href: 'https://twitter.com/home?status=Custom%20Tweet!' },
			'Click To Tweet!'
		);
	}
});
