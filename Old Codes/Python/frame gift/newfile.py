import matplotlib.pyplot as plt
data1=[1212,1324,1467,1589,1794,1856]
data2=[]
plt.hist([data1,data2],bins=[1,10,20,30,40,50,60],weights=[[53.02,50.54,51.66,48.58,53.10,52.48,63.95,60.37,61.36,53,53.3,56.47,55.74,55.67],[60,54.26,57.15,53.67,55.23,51.46,64.07,56.34,58.69,46.26,44.75,54.66,54.26,53.47]],rwidth=0.94,color=['Blue','red'],label=['India','China'])
plt.xticks(2008,2010,2012,2014,2016,2018)
plt.xlabel('states')
plt.title('voting')
plt.ylabel('pol voting')
plt.legend()
plt.show()