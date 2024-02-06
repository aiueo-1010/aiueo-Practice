from turtle import *
shape("turtle")
col = ["orange","green","gold","plum","tomato"] #使用する色の種類
for i in range(5):
    color(col[i])
    circle(100) #半径100の円を描く
    left(72) #左に72度曲がる
done()