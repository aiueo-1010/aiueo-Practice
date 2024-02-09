import tkinter as tk
import random #ランダムを使用するのでimport文を追加

def dispLabel() :
    kuji = ["大吉","中吉","小吉","吉","凶"] #おみくじのリストを用意する
    lbl.configure(text=random.choice(kuji)) #ランダムに1つ選び出して表示する

root = tk.Tk() #画面の作成
root.geometry("200x100") #画面の大きさを決める(xは半角英数字の小文字のエックス)

lbl = tk.Label(text="LABEL") #ラベルの作成
btn = tk.Button(text="PUSH", command = dispLabel) #ボタンを作成し、ボタンを押すと関数を実行

lbl.pack() #画面にラベルを配置する
btn.pack() #画面にボタンを配置する
tk.mainloop() #作ったウィンドウを表示する（これで作った画面が動き出す）