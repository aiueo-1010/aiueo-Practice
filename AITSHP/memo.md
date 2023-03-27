- **~~localhost:8080で画面表示すると下記がでる~~（出なくなった。理由不明、起動したら表示されなくなってた）**<br>
    >Warning: include(head.html): failed to open stream: No such file or directory in /var/www/html/index.php on line 23

    >Warning: include(): Failed opening 'head.html' for inclusion (include_path='.:/usr/local/lib/php') in /var/www/html/index.php on line 23

    >Warning: include(header.html): failed to open stream: No such file or directory in /var/www/html/index.php on line 29

    >Warning: include(): Failed opening 'header.html' for inclusion (include_path='.:/usr/local/lib/php') in /var/www/html/index.php on line 29
    コンテンツ部分です

    >Warning: include(footer.html): failed to open stream: No such file or directory in /var/www/html/index.php on line 38

    >Warning: include(): Failed opening 'footer.html' for inclusion (include_path='.:/usr/local/lib/php') in /var/www/html/index.php on line 38`

- **cssの内容を変えても画面が変わらない**<br>
    ファイルを正常に読み込めてない？<br>
    css等で指定しないのに背景が黒なのはなぜ？<br> 
    ┗指定しないと黒なのか？

- **DockerfileのPHPバージョン変更の仕方が不明**<br>
    再度調査、それでもわからなければ聞く

- **headの指定cssはページごとにcssの内容を変えるのであればincludeを使用しない方がいいのでは？**<br>
    要確認

- **Dockerのコンテナが起動できない**<br>
    - イメージのbuild<br>
    docker image build -t aitshp:latest .<br>
    ┗ここはできる<br>
    - Dockerコンテナの起動<br>
    docker container run -p 8080:80  --name aitshp -v ${PWD}:/var/www/html php8.2-apache<br>
    ┗下記エラー？が出る<br>
    >docker: Error response from daemon: pull access denied for php8.2-apache, repository does not exist or may require 'docker login': denied: requested access to the resource is denied.
See 'docker run --help'.<br>

    Dockerfileのphpの部分は8.2に変更済み