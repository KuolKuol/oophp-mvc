<?php Message::displayMessage(); ?>
<div>
	<?php foreach($viewmodel as $item) : ?>
		<div>
			<h3><?php echo $item['title']; ?></h3>
			<small>Publised on: <?php echo $item['create_date']; ?></small>
			<br>
			<small>Published by: <?php echo $item['username']; ?></small>
			<p><?php echo $item['body']; ?></p>
			<a href="posts/show/<?php echo $item['id'];?>">Link</a>
		</div>
		<hr/>
	<?php endforeach; ?>
</div>


<!-- <?php //if(isset($_SESSION['is_logged_in'])): ?>
	<a href="<?php //echo ROOT_PATH; ?>posts/create">Create Post</a>
<?php //endif;?> -->