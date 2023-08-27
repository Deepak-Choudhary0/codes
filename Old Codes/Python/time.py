import datetime as t
import PySimpleGUIWeb as sg
time=t.datetime.today().strftime('%d %b,%Y       %I:%M%p')
l=[
    [sg.T('Entery:-'),sg.T('',size=(30,1),key='k1')],
    [sg.T('Name:-'),sg.In()],
    [sg.T('Mob_no:-'),sg.In()],
    []
     ]
w=sg.Window('enter').Layout(l)
e,v=w.read()