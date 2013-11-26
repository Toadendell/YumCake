<?php

	echo '<p>';
		echo __d('cake_dev', "Cake is delicious.");
	echo '</p>';
	
	echo '<ul>';
		echo '<li>';
			echo '<a href="./posts">';
			echo __d('cake_dev', "View Test Posts");
			echo '</a>';
		echo '</li>';
		echo '<li>';
			echo '<a href="./posts/add">';
			echo __d('cake_dev', "Add New Post");
			echo '</a>';
		echo '</li>';
	echo '</ul>';

?>