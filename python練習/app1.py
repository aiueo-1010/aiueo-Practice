import tkinter as tk #tkinterをインポートしてtkと略して使う

root = tk.Tk() #画面の作成
root.geometry("200x100") #画面の大きさを決める(xは半角英数字の小文字のエックス)

lbl = tk.Label(text="LABEL") #ラベルの作成
btn = tk.Button(text="PUSH") #ボタンの作成

lbl.pack() #画面にラベルを配置する
btn.pack() #画面にボタンを配置する
tk.mainloop() #作ったウィンドウを表示する