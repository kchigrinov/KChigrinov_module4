<nav class="navbar navbar-default navbar-static">
  <div class="container-fluid">
    <div class="navbar-header">
      <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".js-navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/" style="padding:15px 15px;">Новости</a>
    </div>
    <div class="collapse navbar-collapse js-navbar">
      <ul class="nav navbar-nav">
        <li><a href="/">Главная</a></li>
        <li class="dropdown">
          <a id="drop1" href="#" class="dropdown-toggle" data-toggle="dropdown">
            Меню
            <span class="caret"></span>
          </a>
          <ul class="dropdown-menu">
              <li>
              <a id="drop1" href="#" class="dropdown-toggle" data-toggle="dropdown">
                Меню
                <span class="caret"></span>
              </a>
              <ul class="dropdown-sub-menu">
                <li><a href="#">Текст подпункта</a></li>
                <li><a href="#">Текст подпункта</a></li>
              </ul>
              </li>
            <?php

            $categories = \DB::table('categories')->get();

            foreach ($categories as $category) {
               echo '<li><a href="/categories/' . $category->id . '">' . $category->title . '</a></li>';
            }

            ?>
          </ul>
        </li>
      </ul>
      <div class="container">
                <div class="col-md-6 search-bar">
                    <div id="custom-search-input">
                        <div class="input-group col-md-12">
                            <form method="get" action="/search">
                                <input type="text" placeholder="Поиск" name="search" class="search">
                                <input type="submit" value="Найти" class="search-button">
                            </form>
                        </div>
                    </div>
                </div>
          <ul class="nav navbar-nav navbar-right">
        <li>
          <a href="/login">
            Войти
          </a>
        </li>
        <li>
          <a href="/register">
            Регистрация
          </a>
        </li>
      </ul>
      </div>
    </div>
  </div>
</nav>




