from turtle import *
shape("turtle")
col = ["orange","green","gold","plum","tomato"] #使用する色の種類
for i in range(5): #以下を5回繰り返す
    color(col[i]) #線の色を変える
    forward(200) #まっすぐ200進む
    left(144) #左に144度曲がる
done()