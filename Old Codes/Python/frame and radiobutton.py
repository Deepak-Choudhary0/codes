import PySimpleGUIWeb as sg
l=[[sg.T('hii..')],[sg.Frame('Deepak',background_color='red',key='ou',size=(30,4),layout=[
[sg.Text('hii this is my')],[sg.Column([[sg.T('deepu')]],background_color='lightblue')]])],[sg.T('by...'),sg.Radio('ms check',group_id='o',size=(13,1))]]
w=sg.Window('hi').Layout(l)
e,v=w.Read()
