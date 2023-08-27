import mysqlite3
import random
import time
import pandas as pd
import numpy as np

def tier(points,rank):
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
	elif(points>=4200 and rank<500):
		print('Qonquror')
	elif(points>=4200):
		print('Ace')

guns={'SMG':['Thomsan SMG','UZI','VECTOR'],'Asault_Rifle':['AKM','M416','M16A4'],'Machine_gun':['DP-28','M249',np.NaN],'Boltaction_Sniper_Rifle':['Kar98','M24','AWM'],'Marksman_rifle':['Mini14','SKS',np.NaN] }

df1=pd.DataFrame(guns)
print('Game getting started\n')
print('Loading....\n')
for i in range(1,11):
	print('{} % completed....'.format(i*10))
	time.sleep(1)
c,r,z=1200,10000,0
print('\nGame Starting.....\n')
print('your current Game tier is :- ',end=' ')
tier(c,r)
x=input('want to play game? y/n\n')
while(x=='y'):
	print()
	print(df1)
	print('Which is your favourate Gun...')
	print('Type row no. and column no. which starts from 0')
	x,y=int(input('row no.\n')),int(input('column no.\n'))
	print('you choose')
	e=np.array(df1.iloc[x:x+1,y:y+1])
	print(e[0,0])
	a=random.randint(1,5)
	b=random.randint(1,5)
	print('\n* is target find its row no and column no. to give Headshot')
	print(' ',end='')
	for j in range(1,6):
		print(j,end='')
	print()
	for i in range(1,6):
		print(i,end='')
		for j in range(1,6):
			if(i==a and j==b):
				print('*',end='')
			else:
				print('=',end='')
		print()
	d=eval(input('Enter the row,column of target\n'))
	if(a==d[0] and b==d[1]):
		print('Patt se headshot! \n')
		print('You killed a timtong by headshot with {}'.format(e[0][0]))
		c+=2000
		z+=1
		print('\t\t\t{} Kills'.format(z))
		print('now current Game tier is :- ',end=' ')
		tier(c,r)
		x=input('want to play game? y/n\n')
else:
	print('\nGood Bye! Game Quiting.....')