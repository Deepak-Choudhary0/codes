import numpy
acc=0
while True:
	x=input('want to play(y/n):-\n')
	i=0
	z=numpy.random.randint(1,7)
	while(x=='y'):
		y=int(input('guess the number:-'))
		if(y==z):
			print('you guess right')
			acc=acc+10
			print('The right answer is:-',z)
			print('now,your point is:-',acc)
			break
		else:
			print('you guess wrong')
			if(y<z):
				print('right answer is greater than',y)
			elif(y>z):
				print('right answer is less than',y)
			pass
		if(i==2):
			print('you guess wrong many times')
			acc=acc-5
			print('The right answer is:-',z)
			print('now,your point is:-',acc)
			break
		i=i+1
	else:
		break