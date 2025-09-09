<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php 
            if (is_404(  )) {
                echo "Страница не найдена";
            } else {
                the_title( );
            }
        ?>
    </title>
    <link rel="stylesheet" href="./styles/main.css">
    <?php wp_head(); ?>
</head>
<body>
    <header>
        <div class="header-container">
            <h1>Digital Marketing Agency</h1>
            <p class="text-header">Award winning digital marketing agency in Singapore. A home-grown company since 2018.</p>
            <button type="button" class="button-header">Find out more</button>
        </div>
    </header>