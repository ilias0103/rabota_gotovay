<?php
/*
Template Name: blog
*/
?>
<?php get_header(); ?>

    <section class="banner pt-56 pb-56">
        <div class="w-2/5 m-auto">
            <h1 class="text-slate-300 font-extrabold text-8xl">Blog</h1>
        </div>
    </section>

    <section id="blog" class="mt-20">

        <div class="w-4/5 m-auto">

          
            <?php
global $post;

$myposts = get_posts([
	'numberposts' => -1,
]);

if( $myposts ){
	foreach( $myposts as $post ){
		setup_postdata( $post );
		?>

            <div class="post mt-7">
                <div>
                    <h3 class="text-4xl"><?php the_title(); ?></h3>
                    <div class="post-info flex">
                        <p class="text-gray-400 mr-4">Autor:<?php the_author(); ?></p>
                        <p class="text-gray-400">Date:<?php the_date('d.m.Y'); ?></p>
                    </div>
                </div>
                <div>
                    <div class="post-img">
                    <?php
                    if ( has_post_thumbnail() ) {
                        the_post_thumbnail('large', array('class' => 'mix-blend-multiply bg-black'));
                    } else {
                        echo '<img class="mix-blend-multiply bg-black" src="' . get_template_directory_uri() . '/assets/img/800x800.png" alt="">';
                    }
                    ?>
                    </div>
                    <div>
                    <?php the_content(); ?>
                    </div>
                </div>
                <div class="flex justify-end mt-5">
                    <a href="#" class="btn">Read</a>
                </div>
            </div>
            <?php } } wp_reset_postdata(); ?>


        </div>

        <div class="w-4/5 m-auto">
            <div class="flex w-1/3 m-auto mt-10">
                <div class="border-2 w-1/5 text-center"><a href="#" class="text-xl"><-</p></div>
                <div class="border-2 w-1/5 text-center"><a href="#" class="text-xl">1</a></div>
                <div class="border-2 w-1/5 text-center"><a href="#" class="text-xl">2</a></div>
                <div class="border-2 w-1/5 text-center"><a href="#" class="text-xl">3</a></div>
                <div class="border-2 w-1/5 text-center"><a href="#" class="text-xl">...</a></div>
                <div class="border-2 w-1/5 text-center"><a href="#" class="text-xl">10</a></div>
                <div class="border-2 w-1/5 text-center"><a href="#" class="text-xl">11</a></div>
                <div class="border-2 w-1/5 text-center"><a href="#" class="text-xl">12</a></div>
                <div class="border-2 w-1/5 text-center"><a href="#" class="text-xl">-></a></div>
            </div>
        </div>
    </section>

    <?php get_footer(); ?>