<ul>
<?php

foreach ($news as $singlenews) {
	echo '<li>' . $singlenews->title . '</li>';
	echo '<li>' . $singlenews->body . '</li>';
	echo '<li>' . $singlenews->created_at . '</li>';
}

?>
</ul>