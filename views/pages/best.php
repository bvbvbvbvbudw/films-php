<?php
/**
 * @var \App\Kernel\View\ViewInterface $view
 * @var array<\App\Models\Movie> $movies
 */
?>

<?php $view->component('start'); ?>

    <main>
        <div class="container">
            <h3 class="mt-3">The best!</h3>
            <hr>
            <div class="movies">
                <?php foreach ($movies as $movie) { ?>
                    <?php if ($movie->avgRating() > 5){?>
                        <?php $view->component('movie', ['movie' => $movie]); ?>
                    <?php }?>
                <?php } ?>
            </div>
        </div>
    </main>

<?php $view->component('end'); ?>