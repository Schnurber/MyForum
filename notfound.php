<?php $begin('not') ?>
<script src="https://unpkg.com/react@18/umd/react.development.js"></script>
<script src="https://unpkg.com/react-dom@18/umd/react-dom.development.js"></script>
<script src="https://unpkg.com/babel-standalone@6.15.0/babel.min.js"></script>
<div id="root"> </div>

    <script type="text/babel">

	  class NotFoundComponent extends React.Component {
		render() {
			return (
				<h2><?= t('NOTFOUND') ?></h2>
			);
		}
	  }

	const root = ReactDOM.createRoot(document.getElementById('root'));
	 root.render(
		<div  style={{letterSpacing: "3px" }}>
		<NotFoundComponent />
		</div>
	 );
    </script>
<?php $end('not') ?>

