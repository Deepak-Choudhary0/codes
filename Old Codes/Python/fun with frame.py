import PySimpleGUIWeb as sg

sg.ChangeLookAndFeel('GreenTan')

l=[[sg.T('',size=(50,1))],[sg.T('',size=(1,1)),sg.Frame('sd',[[sg.T('Hotel Management',background_color='lightblue',auto_size_text=False,justification='center',size=(60,2),font=('helventica',35),text_color=('yellow'))],
[sg.T('Hotel Management',justification='center',background_color='lightblue',size=(40,2),text_color=('yellow'),font=('Helventica',30))]],background_color='red')],
[sg.T('Hotel Management',justification='center',background_color='lightblue',size=(40,2),text_color=('yellow'),font=('Helventica',30))]]

w=sg.Window('my window').Layout(l)

e,v=w.Read()