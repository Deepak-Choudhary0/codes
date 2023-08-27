import PySimpleGUIWeb as sg
import numpy
acc=0
def cal():
	c=0
	z=numpy.random.randint(1,7)
	while True:
		if(v[0]==z):
			c+=10
			return True,z
			break
		else:
			c-=5
			return False,z
			break
	acc+=c
sg.ChangeLookAndFeel('Green Tan')
l1=[[sg.T('GUESS-GAME',font='courier 45',size=(60,2))],
       [sg.Text('guess a number-------------------',font='Courier 20'),sg.In('Number',                                  size=(18,1))],
       [sg.T('status'),sg.T('',text_color='red',key='k1',size=(25,1),background_color='lightblue'),sg.T('',text_color='red',key='k2',size=(18,1))],
       [sg.RButton('Submit',size=(20,1)),sg.Button('Exit',size=(7,1))]]
w=sg.Window('TITTLE').Layout(l1)
while True:
	e,v=w.Read()
	if(e=='Exit'):
		sg.PopupError('error')
		w.close()
		break
	else:
		x,y=cal()
		if(x==True):
			w.FindElement('k1').Update('Right answer your balance is '+str(acc))
		elif(x==False):
			w.FindElement('k1').Update('wrong answer your balance is '+str(acc))
			if(int(v[0])<y):
				w.FindElement('k2').Update('true answer is greater than your answer')
			elif(int(v[0])>y):
				w.FindElement('k2').Update('true answer is less than your answer')
		break