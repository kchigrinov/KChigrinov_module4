<ul>
<?php

foreach ($categories as $category) {
	echo '<li>';
	echo '<a href="/categories/' . $category->id . '">';
    echo $category->title;
    echo '</a></li>';
}

?>
</ul>