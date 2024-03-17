import pandas as pd
data = {
    "国語" : [90,50,None,40],
    "数学" : [80,None,None,50]
}
idx = ["A太","B助","C子","D郎"]
dfA = pd.DataFrame(data, index=idx)
dfB = dfA.fillna(method = 'ffill')
print(dfB)
