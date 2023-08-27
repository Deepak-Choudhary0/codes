import pandas as pd
import numpy as np

def tier(points):
	if(points>=1200 and points<1700):
		print('Bronze',end=' ')
		if(points>=1300 and points<1400):
			print('IV')
		elif(points>=1400 and points<1500):
			print('III')
		elif(points>=1500 and points<1600):
			print('II')
		elif(points>=1600 and points<1700):
			print('I')
		else:
			print('V')
	elif(points>=1700 and points<2200):
		print('Silver',end=' ')
		if(points>=1800 and points<1900):
			print('IV')
		elif(points>=1900 and points<2000):
			print('III')
		elif(points>=2000 and points<2100):
			print('II')
		elif(points>=2100 and points<2200):
			print('I')
		else:
			print('V')
	elif(points>=2200 and points<2700):
		print('Gold',end=' ')
		if(points>=2300 and points<2400):
			print('IV')
		elif(points>=2400 and points<2500):
			print('III')
		elif(points>=2500 and points<2600):
			print('II')
		elif(points>=2600 and points<2700):
			print('I')
		else:
			print('V')
	elif(points>=2700 and points<3200):
		print('Platinum',end=' ')
		if(points>=2800 and points<2900):
			print('IV')
		elif(points>=2900 and points<3000):
			print('III')
		elif(points>=3000 and points<3100):
			print('II')
		elif(points>=3100 and points<3200):
			print('I')
		else:
			print('V')
	elif(points>=3200 and points<3700):
		print('Diamond',end=' ')
		if(points>=3300 and points<3400):
			print('IV')
		elif(points>=3400 and points<3500):
			print('III')
		elif(points>=3500 and points<3600):
			print('II')
		elif(points>=3600 and points<3700):
			print('I')
		else:
			print('V')
	elif(points>=3700 and points<4200):
		print('Crown',end=' ')
		if(points>=3800 and points<3900):
			print('IV')
		elif(points>=3900 and points<4000):
			print('III')
		elif(points>=4000 and points<4100):
			print('II')
		elif(points>=4100 and points<4200):
			print('I')
		else:
			print('V')
	elif(points>=4200):
		print('Ace')
	else:
		print('Qonquror')

guns={'SMG':['Thomsan SMG','UZI','VECTOR'],'Asault_Rifle':['AKM','M416','M16A4'],'Machine_gun':['DP-28','M249',np.NaN],'Boltaction_Sniper_Rifle':['Kar98','M24','AWM'],'Marksman_rifle':['Mini14','SKS',np.NaN] }
df1=pd.DataFrame(guns)
print(guns)
print(df1)