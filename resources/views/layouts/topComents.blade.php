<h2>Топ Комментаторов</h2>
<?php

$topComentators = \DB::select('SELECT u.id, COUNT(user_id) as coments FROM posts p
JOIN users u ON u.id = p.user_id
GROUP BY u.id');

foreach ($topComentators as $topComentator) {
	$ComentatorName = DB::table('users')->where('users.id', '=', $topComentator->id)->get();
	foreach ($ComentatorName as $name) {
		echo ' <a href="/comments/' .$topComentator->id . '">' . $name->name . '</a>-';
	}
	echo $topComentator->coments . 'Комментари(я/ев)';
}

?>