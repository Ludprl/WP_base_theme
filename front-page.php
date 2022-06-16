<?php get_header() ?>
<h1>Home</h1>
<div class="blog__group">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="blog__card">
        <?php the_post_thumbnail('medium', ['class' => 'card-img-top', 'alt' => '', 'style' => 'height: auto;']) ?>
        <div class="blog__card__body">
            <h5 class="blog__card__title"><?php the_title(); ?></h5>
            <h6 class="blog__card__subtitle"><?php the_category() ?></h6>
            <p class="blog__card__text"><?php the_excerpt() ?></p>
            <a href="<?php the_permalink() ?>" class="btn">Lire la suite</a>
        </div>
    </div>

    <?php endwhile;
    else : ?>
</div>
<p>Aucun article</p>
<?php endif; ?>

<?php get_footer() ?>