<!DOCTYPE html>
<html>
    <head>
        <title>お試し</title>

        <!-- お試しなのでcdnだが、基本はダウンロードしてそれを読み込む -->
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

        <!-- 個別js・CSSの呼び出し -->
        <script src="js/attendanceList.js"></script>
        <link rel="stylesheet" href="css/attendanceList.css">
    </head>

    <!--
        課題
            レスポンシブデザインを作るにはどのようにコードを書いたらいいのかを勉強する必要がある
            メディアクエリとかview portとかそういうのがあるのは知っているが実装するとどんなコードになるのかを知っておく必要がある

            index.phpにアクセスがあったときにログイン済みかチェックしてログインできていなければログイン画面に、
            ログインできていれば勤怠入力画面に遷移するようにする
                index.php内でDBアクセスしてそこから画面遷移させれば多分疑似的にルーティングみたいなことができるはず
    -->

    <body style="visibility: visibility;">
        <div>
            <div>
                <!-- 20～31日 -->
                <table class="table-style">
                    <thead>
                        <tr>
                            <th style="width: 10%">
                                日付
                            </th>
                            <th style="width: 10%">
                                区分
                            </th>
                            <th style="width: 10%">
                                出勤
                            </th>
                            <th style="width: 10%">
                                退勤
                            </th>
                            <th style="width: 10%">
                                休憩
                            </th>
                            <th style="width: 10%">
                                稼働時間
                            </th>
                            <th style="width: 10%">
                                残業時間
                            </th>
                            <th style="width: 25%">
                                備考
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <button id="regist">登録</button>
                        <?php
                            // 当月取得
                            $year = date('Y');
                            $month = date('m');
                            $lastDay = date('d', mktime('0', '0', '0', $month, '0', $year));
                            // 曜日配列
                            $weekList = [
                                '日','月','火','水','木','金','土'
                            ];
                            // 表示日数変数
                            $loopCnt;
                            // 表示日付基準日
                            $dispDay = date('m/20');

                            // 2/29
                            if ($lastDay === 29) {
                                $loopCnt = 10;
                            
                            // 通常2月
                            } else if ($lastDay === 28) {
                                $loopCnt = 9;

                            // 30日
                            } else if ($lastDay === 30) {
                                $loopCnt = 11;

                            // 31日
                            } else {
                                $loopCnt = 12;
                            }

                            for ($i = 1; $i <= $loopCnt; $i++) {
                                // 日付の加算
                                if ($i != 1) {
                                    $dispDay = date('m/d', strtotime('1 day' . $dispDay));
                                }

                                $week1 = $weekList[date('w', strtotime($dispDay))];

                        ?>
                            <tr>
                                <td>
                                    <span id="day_<?php echo $i ?>">
                                        <?php echo $dispDay; ?>
                                    </span>
                                    <?php
                                        if ($week1 === '土') {
                                    ?>
                                        <span style="color: blue;">
                                            <?php echo $week1 ?>
                                        </span>
                                    <?php } else if ($week1 === '日') { ?>
                                        <span style="color: red;">
                                            <?php echo $week1 ?>
                                        </span>
                                    <?php } else { ?>
                                        <span>
                                            <?php echo $week1 ?>
                                        </span>
                                    <?php } ?>
                                </td>
                                <td>
                                    <select>
                                        <option>出勤</option>
                                        <option>休日</option>
                                        <option>有給</option>
                                        <option>休出</option>
                                    </select>
                                </td>
                                <td>
                                    <input type="time" />
                                </td>
                                <td>
                                    <input type="time" />
                                </td>
                                <td>
                                    <input type="time" />
                                </td>
                                <td>
                                    <span>
                                        08:00
                                    </span>
                                </td>
                                <td>
                                    <span>
                                        02:00
                                    </span>
                                </td>
                                <td>
                                    <input type="text" />
                                </td>
                            </tr>
                        <?php
                            }
                        ?>
                    </tbody>
                </table>
            </div>

            <div>
                <!-- 1～19日 -->
                <table class="table-style">
                    <!--
                        headerは設定しない
                        設定しないと上下でレイアウトがずれてしまう
                        横幅を％で指定するか固定長にするか
                        固定長にしてある程度のウインドウサイズまで小さくなったらスマホ用の表示に切り替えるのが一番丸い気がする
                    -->
                    <tbody>
                        <?php
                            // 翌月初の取得
                            $firstDay = date('m/d', strtotime('first day of'));
                            $firstDay = date('m/d', strtotime('1 month' . $firstDay));

                            /*
                             当月の1～19日まで分をループさせるようにする
                            */
                            for ($j = 1; $j <= 19; $j++) {
                                // 日付の加算
                                if ($j != 1) {
                                    $firstDay = date('m/d', strtotime('1 day' . $firstDay));
                                }

                                $week2 = $weekList[date('w', strtotime($firstDay))];

                        ?>
                            <tr>
                                <td style="width: 10%">
                                    <span>
                                        <?php echo $firstDay; ?>
                                    </span>
                                    <?php
                                        if ($week2 === '土') {
                                    ?>
                                        <span style="color: blue;">
                                            <?php echo $week2; ?>
                                        </span>
                                    <?php } else if ($week2 === '日') { ?>
                                        <span style="color: red;">
                                            <?php echo $week2; ?>
                                        </span>
                                    <?php } else { ?>
                                        <span>
                                            <?php echo $week2; ?>
                                        </span>
                                    <?php } ?>
                                </td>
                                <td style="width: 10%">
                                    <select>
                                        <option>出勤</option>
                                        <option>休日</option>
                                        <option>有給</option>
                                        <option>休出</option>
                                    </select>
                                </td>
                                <td style="width: 10%">
                                    <input type="time" />
                                </td>
                                <td style="width: 10%">
                                    <input type="time" />
                                </td>
                                <td style="width: 10%">
                                    <input type="time" />
                                </td>
                                <td style="width: 10%">
                                    <span>
                                        08:00
                                    </span>
                                </td>
                                <td style="width: 10%">
                                    <span>
                                        02:00
                                    </span>
                                </td>
                                <td style="width: 25%">
                                    <input type="text" />
                                </td>
                            </tr>
                        <?php
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </body>
</html>