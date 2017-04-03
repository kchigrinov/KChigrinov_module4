@extends('layout')
@section('topcoments')
<?php

foreach ($user as $params) {
	echo '<h1>' . $params->name . '</h1><br />';
}

foreach ($posts as $post) {
	$tidings = \DB::table('tidings')->where('tidings.id', '=', $post->tiding_id)->get();
	foreach ($tidings as $tiding) {
		echo '<h4>' . $tiding->title . '</h4><br />';
	}
	echo 'Комментарий:' . $post->body . '<br />';
}	

?>

@endsection