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
		category: 'foo'
	},

	edit: function (props) {
		return React.createElement(
			'a',
			{ href: 'https://twitter.com/home?status=' },
			'Tweet!'
		);
	},

	save: function (props) {
		return wp.element.createElement('a', {
			href: 'https://twitter.com/home?status='
		});
	}
});