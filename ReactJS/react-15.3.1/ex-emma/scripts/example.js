
  var CommentBox = React.createClass({
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