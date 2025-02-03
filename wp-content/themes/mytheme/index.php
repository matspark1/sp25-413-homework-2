<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matt's Site</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <?php wp_head() ?>
</head>

<body>
    <nav>
        <ul>
            <li>Home</li>
            <li>About</li>
            <li>Contant</li>
        </ul>
    </nav>
    <h1>Matt's Website</h1>
    <?php
    if (have_posts()) :
        while (have_posts()) :
            the_post();
    ?>
            <div class="post-box">
                <h4><?php the_title() ?></h4>
                <div class="post-info">
                    <p>
                        <i class="fa-regular fa-user"></i>
                        <?php the_author() ?>
                    </p>
                    <p><i class="fa-regular fa-calendar-days"></i> <?php the_date() ?></p>


                </div>
                <div class="post-ex">
                    <p class="content"><i class="fa-regular fa-comment"></i> <?php the_excerpt() ?></p>
                </div>

            </div>



    <?php
        endwhile;
    endif;
    ?>
    <?php wp_footer() ?>
</body>

</html>