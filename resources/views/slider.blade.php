<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">

    <?php
      $news = DB::table('tidings')->limit(4)->orderBy('created_at', 'DESC')->get();
      $i = 0;
      foreach ($news as $singlenews) 
      {
            if ($i==0) {
                  echo '<div class="item active">' . 
                            '<a href=news/' . $singlenews->id . '>' . 
                                $singlenews->title.
                            '</a>' . 
                            '<a href=news/' . $singlenews->id . '>' .
                                '<img id="slider_image" src="/public/images/' . $singlenews->image . '">
                            </a>' .
                        '</div>';
            } else {
                  echo '<div class="item">' . 
                            '<a href=news/' . $singlenews->id . '>' . 
                                $singlenews->title . 
                            '</a>' .
                            '<a href=news/' . $singlenews->id . '>' . 
                                '<img id="slider_image" src="/public/images/' . $singlenews->image . '">
                            </a>' .    
                        '</div>';
          }
          $i++;
      }
    ?>
</div>   

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <img class="arrow" src="/public/images/arrow_left.png">
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <img class="arrow" src="/public/images/arrow_right.png">
    <span class="sr-only">Next</span>
  </a>
</div>


