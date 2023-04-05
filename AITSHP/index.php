<!DOCTYPE html>
<html lang="ja">
    <head>
        <?php include('head.html') ?>

        <title>ホーム - 株式会社AITS</title>
    </head>
    <body>

        <!-- header include -->
        <?php include('header.html') ?>
        <!-- ↑この１行はphp、読み込んでるのはhtml -->

        <div class="tabs">
            <ul >
                <li>
                    <a href="">
                        <div class="tab_item background-color">ホーム</div>
                    </a>
                </li>
                <li>
                    <a href="Solution/Solution_index.html">
                        <span class="tab_item">事業内容</span>
                    </a>
                </li>
                <li>
                    <a href="Guide/Guide_index.html">
                        <div class="tab_item">会社案内</div>
                    </a>
                </li>
                <li>
                    <a href="aisatu/aisatu_index.html">
                        <div class="tab_item">ご挨拶</div>
                    </a>
                </li>
                <li>
                    <a href="Contact/Contact_index.html">
                        <div class="tab_item">お問い合わせ</div>
                    </a>
                </li>
                <li>
                    <a href="Careers/Careers_index.html">
                        <div class="tab_item">採用情報</div>
                    </a>
                </li>
            </ul>
        </div>

        <!-- footer include -->
        <?php include('footer.html') ?>
        <!-- ↑この１行はphp、読み込んでるのはhtml -->

    </body>
</html>