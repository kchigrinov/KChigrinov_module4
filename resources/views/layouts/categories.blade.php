<?php
    
    $categories = \DB::table('categories')->orderBy('created_at', 'DESC')->get();

	foreach ($categories as $key => $category) {
        echo '<h3><a href="/categories/' . $category->id . '">';
        echo $category->title;
        echo '</a>';
		echo '</h3><br />';
		
		$news = DB::table('tidings')
            ->join('categories', 'tidings.category_id', '=', 'categories.id')
            ->select('tidings.id', 'tidings.title', 'tidings.body', 'tidings.created_at')
            ->where('tidings.category_id', '=', $category->id)
            ->orderBy('tidings.created_at', 'DESC')
            ->limit(5)
            ->get();

    	foreach ($news as $singlenews) {
            echo '<span><a href=news/' . $singlenews->id . '>' . $singlenews->title . '</a></span><br />';
    	}
	}

?>
