import numpy as np
import pandas as pd
'''a=np.array([[1,2],[3,4],[5.6]])
b=(a>[2])
print (b)
print(a[b])'''
df=pd.DataFrame({'a':[1,1,1,2,2,2],'b':['a','b','c','a','b','c'],'c':[1,2,3,4,5,6]})
print(df)
a=df.pivot(index='a',columns='b',values='c')
print(df)
print(a)