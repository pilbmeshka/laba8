<?php get_header(); ?>

<main>
    <section>
        <h1><?php the_title(); ?></h1> <!-- Заголовок страницы -->
        <div>
            <?php
            if (have_posts()):
                while (have_posts()): the_post();
                    the_content(); // Содержимое страницы
                endwhile;
            endif;
            ?>
        </div>
    </section>
</main>

<?php get_footer(); ?>
