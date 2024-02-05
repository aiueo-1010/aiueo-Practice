<?php
    require_once 'attendanceList.php';

    // ajax通信にて送られてきたデータが空じゃない場合のみ処理を実施
    if (isset($_POST['data']) && !empty($_POST['data'])) {
        // attendanceList.phpを初期化して読み込む
        $attendanceList = new attendanceList();
        $result;

        // $_POST['data']にajax通信で送られた値が入ってる（jsで指定したJSONのやつ）
        $kbn = json_decode($_POST['data'], true)[0]['kbn'];

        /*
            これに関してはこんな感じで呼び出す処理の切り分けをしたいってイメージだけなので、どうやって別ファイルの
            functionを呼び出しているか理解ができればよし
        */
        if ($kbn == '1') {
            $result = $attendanceList->testSuzuki($_POST['data']);
        } else {
            $result = $attendanceList->testTanaka($_POST['data']);
        }

        echo $result;
    }
?>