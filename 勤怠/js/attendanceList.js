$(function(){
    // 登録ボタン押下時
    $("#regist").on("click", function(){
        const url = "app/handler/attendanceListHandler.php";
    
        // postで送りたい値をJSON形式で定義
        let data = [
            {
                name: "test1",
                kbn: "1",
            }
        ];
    
        // json文字列に変換
        data = JSON.stringify(data);
    
        /*
            ajax通信(非同期通信)
            画面リロードさせたくないときとかによく使われる
        */
        $.ajax({
            type: "POST", // POST通信・GET通信は知ってると思うが、忘れてるだろうから確認しておくように。
            url: url,     // 実際にどこの何を呼び出すかを定義。htmlからjsとかcssを呼び出す時と同じ定義の仕方。ただし、フレームワーク使ったりすると全然違うので注意
            data: {       // 送りたいデータを定義。別にJSONじゃなくても問題なし。複数データを送りたいなら基本はJSON
                    data: data
            }
    
        // 成功時の処理
        }).done(function (data) {
            data = JSON.parse(data);
            console.log(data);
    
        // 失敗時の処理
        }).fail(function (XMLHttpRequest, textStatus, errorThrown) {
                return;
    
        });
    
    });
});

// window onloadと同様のタイミングで実行される
window.addEventListener("load",function() {
    /*
        ※今は気にしなくてよし
        これを使えば若干レンダリングが遅くても読込後（厳密には画像は読み込まれる前だが）に画面表示されるため、
        上から順に表示されることはなさそう。
        ただし、vueやらReactやらでもっといいやり方があるのであればそっちで作りたいかも
    */
    document.body.style.visibility = 'visible';
});
