var React = require('react');
var ReactDOM = require('react-dom');

	var CommenBox = React.createClaass({
	render: function(){
		return (
			<div className ="commentBox">
				Hello, world! I am a CommnetBox.
			</div>
			);
	}
});
	ReactDOM.render(
		<CommentBox />,
		document.getElementById('content')
		);