<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exam-Home</title>
    <?php wp_head(); ?>
</head>
<body>
    <header class="pt-5 pb-5">
        <div class="flex w-4/5 m-auto justify-between items-center">
            <div>
            <?php the_custom_logo(); ?>
            </div>
            <nav class="w-2/5">
                <ul class="nav-bar">
                <?php wp_nav_menu(array(
                'theme_location'  => 'top',
                'container'       => null,
                'menu_class'      => 'nav-bar',
            )); ?>
                </ul>
            </nav>
        </div>
    </header>
    