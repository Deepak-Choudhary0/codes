#installed PySimeGUI from pip
 
#command is--------->>>pip install pysimplegui
 
import PySimpleGUI as sg

 
#------------changing our window colour-------
 
sg.ChangeLookAndFeel('Topanga')

sg.SetOptions(window_location=(0,0))

'''
#-------------there are many one i tried them as follows--------
#------------>NeutralBlue
#------------>lightyellow
#------------>LightGreen4
#------------>lightbrown1
#------------>Topanga
#------------>GreenTan
#------------>TanBlue
#------------>
sg.Frame('',[ ,text_color='#8E44AD'
             [sg.T('HOTEL MANAGEMENT ',justification='center',size=(28,1),font=('Helventica',42),text_color='red',background_color='lightblue')],
             [sg.T('SYSTEM',justification='center',size=(28,1),font=('Helventica',40),text_color='red',background_color='lightblue')]],background_color='lightblue',size=(100,10))],'''

t=["***Why it is created:-",'This is the man who creates this application for the use of billing management','So you can use it as it was started to provide best details of billing',
   'as many retailers give lend to customers and they forgot it','And Ultimatly they go in loss',
   '***Creaters:-','1:-Deepak Choudhary (Main Coder)','2:-Vikram Singh (Code Helper)',
   '***Bibliography:-','1:-Yono (Logo Creater)','']

#-------layout for main apppication-------
 
L1=[
        [sg.T('',size=(15,1)),sg.Image(r'C:\Users\KVS\Downloads\images\CD.PNG',size=(120,30))],
        [sg.T('Best Billing management application all over India......',size=(60,1),font=('Helventica',19))],
        [sg.T('...........The best freind of Retailer',justification='right',size=(60,1),font=('Helventica',19))],
        [sg.T('New Member ?--(click here)---->>>',size=(105,1),justification='right',text_color='#34495E'),sg.RButton('Sign In',size=(8,1))],
        [sg.T('Already Member?-(click here)-->>>',justification='right',size=(105,1),text_color='#34495E'),sg.Button('Sign Up',size=(8,1))],
        [sg.T('For ',size=(88,1)),sg.T('want to exit-(click here)-->>>',justification='right',size=(15,1),text_color='#34495E'),sg.Button('Exit',size=(8,1))],
        ]
 
#-------------window for application--------
 
w1=sg.Window('Hotel Management App - main window').Layout(L1)
 
#-------------------layout for sign in -------
 
L2=[
        [sg.T('Welcome to our',size=(30,1),font=('Courier',32))],
        [sg.T('',size=(15,1)),sg.Image(r'C:\Users\KVS\Downloads\images\pic.PNG')],
        [sg.T('Hotel Management System',size=(30,1),font=('Helventica',37),text_color='#F39C12',justification='center')],
        [sg.T('Sign IN :-',size=(30,1),font=('Helventica',21))],
        [sg.T('Enter your Name:-',size=(25,1),font=('Courier',20)),sg.In(background_color='lightblue')],
        [sg.T("Enter your Father's Name:-",size=(25,1),font=('Courier',20)),sg.In(background_color='lightblue')],
        [sg.T('Enter your Mobile Number:-',size=(25,1),font=('Courier',20)),sg.In(background_color='lightblue')],
        [sg.T('Enter your City:-',size=(25,1),font=('Courier',20)),sg.In(background_color='lightblue')],
        [sg.T('Enter your Age:-',size=(25,1),font=('Courier',20)),sg.Spin(values=('15','16','17','18','19','20','21','22','23','24','25','26','27','28','29','30','31','32','33','34','35','36','37','38','39','40','41','42','43','44','45','46','47','48','49','50'), initial_value='17',size=(3,1))],
        [sg.T('',size=(6,1)),sg.Button('Submit',size=(7,1)),sg.Button('Cancel',size=(7,1)),sg.Button('Home',size=(7,1))]
        ]
 
#------------------layout for sign up--------
 
L3=[
        [sg.T('Welcome to our',size=(50,1),font=('Courier',32))],
        [sg.T('',size=(15,1)),sg.Image(r'C:\Users\KVS\Downloads\images\pic.PNG')],
        [sg.T('Hotel Management System',size=(50,1),font=('Helventica',37),text_color='#F39C12')],
        [sg.T('Sign UP :-',size=(50,1),font=('Helventica',21))],
        [sg.T('Enter your username:-',font=('Courier',23),size=(35,1)),sg.In('username',background_color='lightblue')],
        [sg.T('Enter your password:-',font=('Courier',23),size=(35,1)),sg.Input(password_char='*')],
        [sg.T('',size=(28,1)),sg.Button('See password',size=(12,1)),sg.T("",key='k',size=(25,1),background_color='pink',text_color='black')],
        [sg.T('',size=(60,1))],
        [sg.T('',size=(6,1)),sg.Button('Sign Up',size=(7,1)),sg.Button('Cancel',size=(7,1)),sg.Button('Home',size=(7,1))]
         ]
 
#-------layout tor submit of sign in======
 
L4=[
        [sg.T('Welcome',size=(20,1),font=('Courier',32)),sg.T('',size=(20,1),font=('Helventica',28),key='k1',text_color='orange')],
        [sg.T('',size=(15,1)),sg.Image(r'C:\Users\KVS\Downloads\images\pic.PNG')],
        [sg.T('Hotel Management System',size=(30,1),font=('Helventica',37),text_color='#F39C12',justification='center')],
        [sg.T('Sign IN :-',size=(30,1),font=('Helventica',21))],
        [sg.T('Create your UserID:-',size=(25,1),font=('Courier',20)),sg.In()],
        [sg.T("Create your Password:-",size=(25,1),font=('Courier',20)),sg.In(password_char='*')],
        [sg.T("Re-Enter your Password:-",size=(25,1),font=('Courier',20)),sg.In(password_char='*')],
        [sg.T('',size=(36,1)),sg.Button('See password',size=(12,1)),sg.T(" ",key='k',size=(30,1),background_color='#58D68D',text_color='black')],
        [sg.T('')],
        [sg.T('',size=(6,1)),sg.Button('Create Retailer Profile',size=(20,1)),sg.Button('Cancel',size=(7,1)),sg.Button('Home',size=(7,1))]
         ]
 
#-------------layout for created id successfully------------
 
L5=[
        [sg.T('',size=(3,1))],
        [sg.T('',size=(15,1)),sg.Image(r'C:\Users\KVS\Downloads\images\pic.PNG')],
        [sg.T('',size=(1,1)),sg.Frame('frame',[[sg.T('')],
        [sg.T('Profile Details Submited !!! ',justification='center',size=(58,2),font=('Helventica',35),text_color='red')],
        [sg.T('Just One Step More....',font=('courier',20),size=(58,2),justification='center',background_color='black',text_color='white')]],background_color='pink')],
        [sg.T('Best hotel management application in India....',size=(60,1),font=('Helventica',19),text_color='orange',justification='left')],
        [sg.T('......The best freind of Retailer',justification='right',size=(62,1),font=('Helventica',19),text_color='orange')],
        [sg.T('Terms and Conditions:-',size=(29,1),justification='left',text_color='green',font=('courier',20))],
        [sg.T('Privacy policy:',justification='left',size=(10,1),text_color='red'),sg.T('',size=(35,1),key='k1'),sg.Button('Read Policy',size=(10,1))],
        [sg.T('Rules and Regulation:-',justification='left',size=(15,1),text_color='red'),sg.T('',size=(30,1),key='k3'),sg.Button('Read Rules',size=(10,1))],
        [sg.Check('Agree Privacy Policy '),sg.Check('Agree Rules and Regulation')],
        [sg.T('',size=(10,1)),sg.Button('Sign In',size=(10,1)),sg.T('',size=(1,1)),sg.Button('Back',size=(10,1))]
        ]
 
#-----------------here after submit of sign in window and create profile then,-----------
#------->_ i have to give one line progress meter to show the progress of creating id and also one for going by sign up
 
L6=[
        [sg.T('hii..')]
        ]
 
#-------------string for privacy policy---------
 
 
 
p_policy=['What information is collected and how can we use it?',
          '*Types of information collected:-',
          '1.In order to provide our services to you, we will ask you to provide personal information that is necessary to provide those services to you.',
          '2.If you do not provide your personal information, we may not be able to provide you with our products or services.',
          '3.We will only collect the information that is necessary for its specified, explicit and legitimate purposes and not further',
          'processed in a manner that is incompatible with those purposes. ',
          '*How the personal information can be used:-',
          'Personal information is collected for providing services and / or products to you,and legal compliance on our part under applicable laws.',
          '*We may use your personal information for the following purposes:',
          '>Providing, processing, maintaining, improving and developing our goods and/or services to you,',
          'including after-sales and customer support and for services on your device or through our websites.',
          '>Communicating with you about your service or any general queries, such as updates,',
          ' customer inquiry support, information about our events, notices.',
          'NOTE:-We Will Not Sell Your DATA to Other Companies',
          '................This our Privcy Policy..............']
 
#-----------string for rules and regulation----
 
p_rules=['Our Rules and Regulations:-',
         '01-Do not use such Services in a way that distracts you and prevents you from obeying traffic or safety laws.',
         '02-All Data is Safe',
         '03-If You Cancel The Sign in Process Data in this case will not be saved',
         '04-Do not misuse our Services, for example, do not interfere with our Services or try to access them using a method other',
         ' than the interface and the instructions that we provide.',
         '05-You may use our Services only as permitted by law, including applicable export and control laws and regulations.',
         '06-We may suspend or stop providing our Services to you if you do not comply with our terms or policies or if ',
         'we are investigating suspected misconduct.',
         '07-Using our Services does not give you ownership of any intellectual property rights in our Services or the content that you access.',
         '08-You may not use content from our Services unless you obtain permission from its owner or are otherwise permitted by law.',
         '09-To protect your Hotel Management account , keep your password confidential.',
         '10-You are responsible for the activity that happens on or through your Hotel Management Account.']
 
#----------------status of sign in window---------
 
s_signin=False
 
#--------------status for sign up window-------
 
s_signup=False
 
#------------status for password-----
 
s_password=False
 
#---------------status for submit of sign in window--------
 
s_submit_signin=False
 
#----------status of creating profile window------
 
s_create_profile=False
 
#-------------event loop(as many times loop have to be iterated )-----
 
 
 
while True:
    e1,v1=w1.Read()
    if(not s_signin and e1=='Sign In'):
        w1.Hide()
        s_signin=True
        w2=sg.Window('Sign In window - w2').Layout(L2)
        while True:
            e2,v2=w2.Read()
            if(e2=='Home'):
                s_signin=False
                w2.Close()
                w1.UnHide()
                break
            elif(e2=='Cancel'):
                w2.Close()
                w1.Close()
                break
            elif(e2=='Submit'):
                s_submit_signin=True
                w2.Hide()
                w4=sg.Window('Create ID and Password- w4').Layout(L4)
                while True:
                    e4,v4=w4.Read(timeout=10)
                    w4.FindElement('k1').Update(v2[0].upper())
                    if(e4=='See password'):
                        w4.FindElement('k').Update(v4[2])
                    if(not s_create_profile and e4=='Create Retailer Profile'):
                        s_create_profile=True
                        w4.Hide()
                        w5=sg.Window('').Layout(L5)
                        while True:
                            e5,v5=w5.Read()
                            if(e5=='Read Policy'):
                                l=[
                                [sg.T(p_policy[14],size=(100,1),text_color='lightblue',justification='center')],
                                [sg.T(p_policy[0],size=(100,1),text_color='red',justification='center')],
                                [sg.T(p_policy[1],size=(100, 1),text_color='green')],
                                [sg.T('',size=(2,1)),sg.T(p_policy[2],size=(97,1))],
                                [sg.T('',size=(2,1)),sg.T(p_policy[3],size=(97,1))],
                                [sg.T('',size=(2,1)),sg.T(p_policy[4],size=(97,1))],
                                [sg.T('',size=(3,1)),sg.T(p_policy[5],size=(96,1))],
                                [sg.T(p_policy[6],size=(100,1),text_color='green')],
                                [sg.T('',size=(3,1)),sg.T(p_policy[7],size=(96,1))],
                                [sg.T(p_policy[8],size=(100,1),text_color='green')],
                                [sg.T('',size=(3,1)),sg.T(p_policy[9],size=(96,1))],
                                [sg.T('',size=(4,1)),sg.T(p_policy[10],size=(95,1))],
                                [sg.T('',size=(3,1)),sg.T(p_policy[11],size=(96,1))],
                                [sg.T('',size=(4,1)),sg.T(p_policy[12],size=(95,1))],
                                [sg.T('',size=(30,1)),sg.T(p_policy[13],size=(69,1),text_color='orange')],
                                [sg.T('',size=(45,1)),sg.Button("ok",size=(10,1))]]
                                w=sg.Window('').Layout(l)
                                e,v=w.Read()
                                w.Close()
                            elif(e5=='Read Rules'):
                                l=[
                                [sg.T(p_policy[0],size=(103,1),text_color='red',justification='center')],
                                [sg.T('',size=(2,1)),sg.T(p_rules[1],size=(100,1))],
                                [sg.T('',size=(2,1)),sg.T(p_rules[2],size=(100,1))],
                                [sg.T('',size=(2,1)),sg.T(p_rules[3],size=(100,1))],
                                [sg.T('',size=(2,1)),sg.T(p_rules[4],size=(100,1))],
                                [sg.T('',size=(4,1)),sg.T(p_rules[5],size=(98,1))],
                                [sg.T('',size=(2,1)),sg.T(p_rules[6],size=(97+3,1))],
                                [sg.T('',size=(2,1)),sg.T(p_rules[7],size=(97+3,1))],
                                [sg.T('',size=(4,1)),sg.T(p_rules[8],size=(98,1))],
                                [sg.T('',size=(2,1)),sg.T(p_rules[9],size=(97+3,1))],
                                [sg.T('',size=(2,1)),sg.T(p_rules[10],size=(97+3,1))],
                                [sg.T('',size=(2,1)),sg.T(p_rules[11],size=(97+3,1))],
                                [sg.T('',size=(2,1)),sg.T(p_rules[12],size=(97+3,1))],
                                [sg.T('',size=(30,1)),sg.Button('Ok',size=(9,1))]
                                ]
                                w=sg.Window('').Layout(l)
                                e,v=w.Read()
                                w.Close()
                            elif(e5=='Back'):
                                s_create_profile=False
                                w5.Close()
                                w4.UnHide()
                                break
    elif(e1 in (None,'Exit')):
        w1.Close()
        break
    elif(not s_signup and e1=='Sign Up'):
        s_signup=True
        w3=sg.Window('').Layout(L3)
        w1.Hide()
        while True:
            e3,v3=w3.Read(timeout=100)
            if(e3=='See password'):
                s_password=True
                e3,v3=w3.Read(timeout=10)
                w3.FindElement('k').Update(v3[1])
            elif(e3=='Home'):
                s_signup=False
                w3.Close()
                w1.UnHide()
                break
            elif(e3=='Cancel'):
                w3.Close()
                w1.Close()
                break
            elif(e3=='Sign Up'):
                sg.Popup('')