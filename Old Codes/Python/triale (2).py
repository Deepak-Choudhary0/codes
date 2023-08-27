import PySimpleGUIWeb as sg
L6=[
        [sg.T('',size=(3,1)),sg.Frame('frame',[#[sg.T('')],
        [sg.T('Hotel Management App,India',justification='center',size=(54,2),font=('Helventica',30),text_color='green',background_color='yellow')]],background_color='lightblue')],
        [sg.T('',size=(1,1)),sg.Frame('frame',[#[sg.T('')],
        [sg.T('Profile Details Submited !!! ',justification='center',size=(58,2),font=('Helventica',40),text_color='red')],
        [sg.T('Just One Step More....',font=('courier',20),size=(58,2),justification='center',background_color='black',text_color='white')]],background_color='pink')],
        [sg.T('Best hotel management application all over India....',size=(60,1),font=('Helventica',19),text_color='orange',justification='left')],
        [sg.T('......The best freind of Retailer',justification='right',size=(65,1),font=('Helventica',19),text_color='orange')],
        [sg.T('Terms and Conditions:-',size=(29,1),justification='left',text_color='purple',font=('courier',20))],
        [sg.T('Privacy policy:',justification='left',size=(10,1)),sg.T('',size=(40,1)),sg.Button('Read Policy',size=(10,1))],
        [sg.T('',size=(55,4))],
        [sg.T('Rules and Regulation:-',justification='left',size=(15,1)),sg.T('',size=(35,1)),sg.Button('Read Rules',size=(10,1))],
        [sg.T('',size=(55,4))],
        [sg.Check('Read Privacy Policy '),sg.Check('Read Rules and Regulations')],
        [sg.T('',size=(40,1)),sg.Button('Sign In',size=(10,1)),sg.T('',size=(1,1)),sg.Button('Exit',size=(10,1))]
        ]
w=sg.Window('').Layout(L6)
while True:
	e,v=w.read()
	if v[0] is True and v[1] is True:
		sg.Popup('hi')