import PySimpleGUI as sg
sg.theme('Dark Blue 3') 
#to define a function which is used to create number in tens ,ones
#for e.g. cov(23,4) will give 234 
def calculate(d):
    start_num=""
    end_num=""
    result=0
    for i in range (len(d)+1):
        if d[i] in ('+','-','*','/'):
            constant=d[i]
            break
        else:
            continue
    for j in range(len(d)):
        if(j<i):
            start_num=start_num+d[j]
        elif(j>i):
            end_num=end_num+d[j]
        else:
            i=i
    while(constant in ('+','-','*','/')):
        if(constant=='+'):
            result=float(start_num)+float(end_num)
            break
        elif(constant=='-'):
            result=float(start_num)-float(end_num)
            break
        elif(constant=='*'):
            result=float(start_num)*float(end_num)
            break
        elif(constant=='/'):
            result=float(start_num)/ float(end_num)
            break
        else:
            break
    return result

# please make your creations colorful 
#layout = [[sg.Text("@"*45)], [sg.Text('LIC Lifeinsurance')], [sg.Input("Enter your name here:-")], [sg.Input()],[sg.FileBrowse()], [sg.OK(), sg.Cancel()]] 
layout1 = [[sg.Text("_"*120)], [sg.Text('        Calculator       ')],
           [sg.Text("|         "),sg.Button("1",size=(5,1)),sg.Button("2",size=(5,1)),sg.Button("3",size=(5,1)),sg.Button("+ Add"),sg.Text(" "*100+"|")],
           [sg.Text("|         "),sg.Button("4",size=(5,1)),sg.Button("5",size=(5,1)),sg.Button("6",size=(5,1)),sg.Button("-  Sub"),sg.Text(" "*100+"|")],
           [sg.Text("|         "),sg.Button("7",size=(5,1)),sg.Button("8",size=(5,1)),sg.Button("9",size=(5,1)),sg.Button("*  Mul"),sg.Text(" "*100+"|")],
           [sg.Text("|            "),sg.Text("        "),sg.Button("0",size=(5,1)),sg.Text("           "),sg.Button("/ Div",size=(5,1)),sg.Text(" "*100+"|")],
           [sg.Text('',size=(105,1),key="cal",background_color="Black")],
           [sg.Button("=",size=(5,1)),sg.OK(), sg.Cancel()]] 
window = sg.Window('Deepak Calculator', layout1)
d='' #used for stroring the command which user give
s=0  #used to store the starting number
e=0  #used to store the ending number
times=0 #no. of times loop used
flag=0 #used for number or string
while True:
    event, values = window.Read()
    if(event == '0' or event == '1' or event == '2' or event == '3' or event == '4' or event == '5'
       or event == '6' or event == '7' or event == '8' or event == '9'):
        print("Got it",event)               
        d=d+event
        window["cal"].Update(d)
    elif(event=='+ Add'):
        print("Got it",event)
        d=d+"+"
        window["cal"].Update(d)
        #e+=d[0]
    elif(event=='- Sub'):
        print("Got it",event)
        d=d+"-"
        window["cal"].Update(d)
        #e-=d[0]
    elif(event=='* Mul'):
        print("Got it",event)
        d=d+"*"
        window["cal"].Update(d)
        #e+=d[0]
    elif(event=='/ Div'):
        print("Got it",event)
        d=d+"/"
        window["cal"].Update(d)
        #e+=d[0]
    elif (event == "="):
        print("Got it",event)
        result=calculate(d)
        d=str(result)
        print(result)
        window["cal"].Update(result)
    elif (event == "OK" or event == "Cancel"):
        print(event)
        window.Close()
    else:
        print("Got it",event)
        window.Close()
        break
#print("Why stopped me you $##@")
'''if(values[0]==''):
    print("Enter your NAME")
if(values[1]==''):
    print("Enter your AGE")
if(event=="OK"):
    print("Give me input $#%%")'''
        
'''print(event,values)
print(d)'''