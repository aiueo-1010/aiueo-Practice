<?php

    /* 
        phpのあれやこれやが書ける
        メール飛ばしたりDB接続したり etc...
    */

?>

<html>
    <head>
        <!-- header include -->
        <?php include('head.html') ?>
        <!-- ↑この１行はphp、読み込んでるのはhtml -->
    </head>
    <body>

        <!-- header include -->
        <?php include('header.html') ?>
        <!-- ↑この１行はphp、読み込んでるのはhtml -->

        <!-- ページごとに変わるコンテンツ部分を記述 -->
        <div class="content">
            コンテンツ部分です
        </div>

        <!-- footer include -->
        <?php include('footer.html') ?>
        <!-- ↑この１行はphp、読み込んでるのはhtml -->
    </body>
</html>