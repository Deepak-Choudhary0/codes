#imported module from 
#-------------->python.pysimplegui/org

import PySimpleGUIWeb as sg

#------------------creating a empty list for each registration

x=[ ]
y={0:'',2:'',3:''}

#----------------->_Layout for GUI_<----------
sg.ChangeLookAndFeel('Green Tan')  #changing colour

l1=[[sg.T('BIO-DATA',font='courier 45',size=(60,2))],
       [sg.Text('what is your Name-------------------',font='Courier 20'),sg.In('Name',                                  size=(18,1))],
       [sg.T('',text_color='red',key='k1')],
       [sg.Text('what is your Mobile No.-------------',font='Courier 20'),sg.In('10 digit No.',                                    size=(10,1))],
       [sg.T('',text_color='red',key='k2')],
       [sg.Text('what is your City-------------------',font='Courier 20'),sg.In("City",                                         size=(18,1))],
       [sg.T('',text_color='red',key='k3')],
       [sg.Button('Submit',size=(7,1)),sg.Button('Exit',size=(7,1)),sg.T('',                                           text_color="red",key='k4')]]

#-------------->_Creating window for GUI_<--------

w=sg.Window('TITTLE').Layout(l1)
e=0

#=======
#sg.Popup(v)
e,v=w.read()
def p_e():
	if(v==y):
		sg.Popup('3 not')
		#w.FindElement('k4').Update('^'*30+'-'*5+'>ALL ENTERIES MUST BE FILLED')
		#e,v=w.read()
	elif(v[0]==y[0]):
		sg.Popup('2 not')
		#w.FindElement('k1').Update('^'*70+'-'*5+'>Name MUST BE FILLED')
		#e,v=w.read()
	elif(v[1]==y[1]):
		sg.Popup('1 not')
		#w.FindElement('k2').Update('^'*70+'-'*5+'>Mobile No. MUST BE FILLED')
		#e,v=w.read()
	elif(v[2]==y[2]):
		sg.Popup('0 not')
		#w.FindElement('k3').Update('^'*70+'-'*5+'>City MUST BE FILLED')
		#e,v=w.read()
p_e()
'''
#=============creating a error code====

p_error="You are using browser so we can't go back automatic [press back twice or Alt+F4]"

#============>_event loop_<==========
while True:
	e,v=w.read()
	if(e=='Exit'):
		sg.PopupError(p_error)
		w.close()
		break
	elif(e=='Submit'):
		p_e(e,v)
		sg.Popup('Welcome',v[0],'your City name is:',v[2],'I will contact you at',v[1])
		break
	'''