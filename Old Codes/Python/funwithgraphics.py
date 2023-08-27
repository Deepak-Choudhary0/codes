import math
import time
import PySimpleGUIWeb as sg    

layout = [[sg.Graph(canvas_size=(400, 400), graph_bottom_left=(-105,-105), graph_top_right=(105,105), background_color='white', key='graph', tooltip='This is a cool graph!')],]    

window = sg.Window('Graph of Sine Function', layout, grab_anywhere=True).Finalize()    
graph = window['graph']
def circle():
    for i in range(0,5):
        graph.DrawCircle((0,0), 70+i, line_color='black')
    graph.DrawLine((9,36),(-9,-36))
    graph.DrawLine((-36,9),(36,-9))
    graph.DrawCircle((0,0),1,line_color='red')
circle()
'''graph.DrawCircle((i,i), 1, line_color='red', fill_color='red')
for i in range(20,100,10):
    time.sleep(1)
    graph.DrawLine((10,i),(10,i+10))
    for x in range(10,20,2):
        time.sleep(1)
        graph.DrawCircle((x,i), 1, line_color='red', fill_color='red')'''
'''
# Draw axis    
graph.DrawLine((-100,0), (100,0))    
graph.DrawLine((0,-100), (0,100))    

for x in range(-100, 101, 20):    
    graph.DrawLine((x,-3), (x,3))    
    if x != 0:    
        graph.DrawText( x, (x,-10), color='green')    

for y in range(-100, 101, 20):    
    graph.DrawLine((-3,y), (3,y))    
    if y != 0:    
        graph.DrawText( y, (-10,y), color='blue')    

# Draw Graph    
for x in range(-100,100):    
    y = math.sin(x/20)*50    
    graph.DrawCircle((x,y), 1, line_color='red', fill_color='red')    '''

event, values = window.read()  