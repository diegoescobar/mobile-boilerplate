<?php include('header.php'); ?>

<nav>Menu</nav>

<section id="header">
	<h1>Title</h1>
	<h3>Byline</h3>
</section>

<section id="content">
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin in neque nisl. Vestibulum pellentesque consectetur posuere. Mauris lorem est, faucibus id auctor quis, porttitor at neque. Nam nulla dui, sollicitudin eget lobortis eget, viverra nec orci. Donec a neque felis, porta gravida est. Maecenas ultrices leo ut leo blandit condimentum eget ut tellus. Sed vitae tincidunt felis. Nunc posuere vehicula nisi, sed feugiat lectus dapibus imperdiet. Nullam nulla enim, ultrices at tristique lacinia, dignissim quis augue. Maecenas lobortis eleifend dapibus. In neque orci, aliquam eget vulputate eget, pretium fringilla mi. Nam consectetur consectetur mauris vehicula lacinia. Phasellus et dolor faucibus velit interdum aliquet. Aenean hendrerit est et orci faucibus faucibus.
	</p>


	<form onsubmit="return false;" action="#" method="post">
		<p>
			<label for="text">Text</label>
			<input id="text" type="text" placeholder="text field"/>
		</p>
		<p>
			<label for="textarea">Textarea</label>
			<textarea id="textarea" placeholder="text field"></textarea>
		</p>
		<p>
			<input type="submit" value="Submit"/>
			<input type="reset" value="Reset" />
		</p>
	</form>
</section>
<?php include('footer.php'); ?>