#関数の作り方
# def 関数名(引数1,引数2,引数3,...) :
    #関数で行う処理
    # return #戻り値
#関数：「ある仕事を行う命令のまとまり」をブロックに書きまとめたもの
#引数：関数に引き渡すデータ（パラメータとも言うらしい？）
#戻り値：関数が処理した後、結果として戻ってくる値


#関数の種類

#1引数も戻り値もない関数
#決まった仕事をさせたいとき
#例：def1.py
def sayhello() : #関数の作成 「def 関数名() :」
    print("こんにちは") #関数で行う処理

sayhello() #関数の呼び出し(print("こんにちは"))
sayhello() #関数の呼び出し(print("こんにちは"))
sayhello() #関数の呼び出し(print("こんにちは"))

#2引数だけある関数
#違うデータを渡して、処理を調整したいとき
#例：def3.py
def sayhello2(name) :
    print("こんにちは、", name + "さん。")
sayhello2("フタバ")

#3戻り値だけある関数
#結果に変化があるので知りたいとき
#例：def4.py
import random
def omikuji() :
    kuji = ["大吉","中吉","小吉","吉","凶"]
    return random.choice(kuji)
kekka = omikuji()
print("結果は",kekka,"です")

#4引数も戻り値もある関数
#データを渡して計算するときや、実行結果を知りたいとき
#例：def2.py
def postTaxPrice(price) :
    ans = price * 1.1
    return ans

print(postTaxPrice(120),"円")
print(postTaxPrice(128),"円")
print(postTaxPrice(1050),"円")