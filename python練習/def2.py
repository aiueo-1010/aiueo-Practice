#商品の本体価格を渡すと消費税計算を行い消費税込みの金額がわかる関数
def postTaxPrice(price) : #関数名(引数) :
    ans = price * 1.1 #引数(本体価格)に消費税(10%)をかける
    return ans

print(postTaxPrice(120),"円") #関数名(引数(本体価格)),"円"
print(postTaxPrice(128),"円") #関数名(引数(本体価格)),"円"
print(postTaxPrice(1050),"円") #関数名(引数(本体価格)),"円"