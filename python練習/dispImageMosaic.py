import tkinter as tk #ウィンドウを表示するモジュール
import tkinter.filedialog as fd #ファイルダイアログを使うモジュール
import PIL.Image #画像を扱うモジュール
import PIL.ImageTk #tkinterで作った画面上に画像を表示させるモジュール

def dispPhoto(path) :
    #画像を読み込む
    newImage = PIL.Image.open(path).convert("L").resize((32,32)).resize((300,300), resample=0)
    #モザイクっぽくするためにモノクロにした後、一度画像サイズを小さくしてから大きくしている

    #そのイメージをラベルに表示する
    imageData = PIL.ImageTk.PhotoImage(newImage)
    imageLabel.configure(image = imageData)
    imageLabel.image = imageData

def openFile(): #ファイルダイアログを開くための関数
    fpach = fd.askopenfilename() #ファイルダイアログを開いて選択したファイル名を取得する

    if fpach: #もしファイル名があったら
        dispPhoto(fpach) #そのファイル名で関数を呼び出す

#画面の作成
root = tk.Tk()
root.geometry("400x350")

btn = tk.Button(text = "ファイルを開く", command = openFile) #ボタンを作って関数を設定する
imageLabel = tk.Label() #画面表示用のラベルを作る
btn.pack() #画面にボタンを配置
imageLabel.pack() #画面にラベルを配置する
tk.mainloop() #作ったウィンドウを表示する