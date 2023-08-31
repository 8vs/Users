<header>
    <?php $categories = array(
        'Главная'    => '/',
        'Статитстика'    => '/statistic'
    ); ?>

    <nav class="site-header sticky-top py-1" id="my__head">
        <div class="container d-flex flex-column flex-md-row justify-content-between">
            <?php foreach ($categories as $name => $path) {
                echo "<a class=\"py-2 d-none d-md-inline-block\" href=\"$path\">$name</a>";
            } ?>
        </div>
    </nav>
    
    <div id="center__block" class="position-relative overflow-hidden p-1 p-md-1 m-md-1 text-center bg-light">
        <div class="col-md-7 p-lg-1 mx-auto my-1">
            <h2 class="display-4 font-weight-normal">Статистика</h2>
            <p class="lead font-weight-normal">сервис для получения обезличенной статистики по данным пользователей</p>
        </div>
    </div>
</header>

