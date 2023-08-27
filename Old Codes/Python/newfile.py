import PySimpleGUIWeb as sg
win = sg.Window('Window').Layout([ [sg.Text('Hello World')], [sg.Button('Exit')]])
e,v = win.Read()
print(e,v)
win.Close()