#find int or not
for i in range(4):
	d=input('dk')
	try:
		int(d)
		print('t')
	except ValueError :
		print('f')