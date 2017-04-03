@extends('layout')
@section('search')

<?php
foreach ($news as $singlenews) 
	        {

	            echo '<h3>' . $singlenews->title . '</h3>';
	            echo '<p>' . $singlenews->body . '</p>'; 

	        }

?>

@endsection