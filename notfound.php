<?php $begin('not') ?>
<script src="https://unpkg.com/react@16/umd/react.development.js"></script>
<script src="https://unpkg.com/react-dom@16/umd/react-dom.development.js"></script>
<script src="https://unpkg.com/babel-standalone@6.15.0/babel.min.js"></script>
<div id="notf"> </div>

    <script type="text/babel">

	  class NotFoundComponent extends React.Component {
		render() {
			return (
				<h2><?= t('NOTFOUND') ?></h2>
			);
		}
	  }

	  ReactDOM.render(
		<div  style={{letterSpacing: "3px" }}>
		<NotFoundComponent />
		</div>
		, document.getElementById("notf"));
    </script>
<?php $end('not') ?>

