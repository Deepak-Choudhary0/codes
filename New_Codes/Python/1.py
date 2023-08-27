import sys
'''      Data Types    (int,float,str,bool,NoneType)  '''
a=28
b=1.5
c="Hello!"
d=True
e=None

#name.py

"""name=input("Name: ")
print("Hello, "+name)
print(f"Hello, {name}")
"""

#conditions.py

"""n=int(input("Number: "))
if n>0:
    print("n is positive")
elif n<0:
    print("n is negative")
else:
    print("n is zero ")"""

#sequences.py

"""name="Harry"  #str
names = ["Harry","Ron","Hermione",name]     #list
coordinateX = 10.0
coordinateY = 20.0
coordinate = (10.0,20.0)    #tuple
print(names)"""

#lists.py

"""names=["Harry","Ron","Hermione","Ginny"]
names.append("Draco")
names.sort()
print(names)"""

#sets.py

"""s=set()

s.add(1)
s.add(2)
s.add(3)
s.add(4)
s.add(3)
print(s)
s.remove(2)
print(s)
print(f"The set has {len(s)} elements.")"""

#loops.py

"""for i in {0,1,2,3,4,5}:
    print(i)
for i in range(21):
    print(i)

names = ["Harry","Ron","Hermione"]
for name in names:
    print(name)

for character in name:
    print(character)"""

#dictionaries.py

"""houses = {"Harry":"Gryffindor","Draco":"Slytherin"}

print(houses["Harry"]) #which house harry is in

houses["Hermione"]= "Gryffindor"  #adding
houses["Harry"]= "Gimmy"  #modifying
print(houses)"""

#functions.py

"""def square(x):
    return x*x

for i in range (10):
    print(f"The Square of {i} is {square(i)}")"""

#squares.py

"""from functions import square

for i in range (10):
    print(f"The Square of {i} is {square(i)}")

#------------------------OR-----------------------------

import functions

for i in range (10):
    print(f"The Square of {i} is {functions.square(i)}")"""

# classes.py

"""class Point():
    def __init__(self,input1,input2):
        self.x=input1
        self.y=input2

p=Point(2,8)
print(p.x)
print(p.y)"""
"""
class Flight(): #Airlines wants to keep track on booking passengers on flight                  #and make sure that no flight gets over booked then its capacity
    def __init__(self,capacity):
        self.capacity = capacity
        self.passengers = []
    
    def add_passenger(self,name):
        if not self.open_seats():
            return False
        self.passengers.append(name)
        return True
    
    def open_seats(self):
        return self.capacity - len(self.passengers)

flight=Flight(3)

people = ["Harry","Ron","Hermione","Gimmy"]

for person in people:
    success = flight.add_passenger(person)
    if success:
        print(f"Added {person} to flight successfully.")
    else:
        print(f"No avilable seats for {person}")

#---------------OR-------To Remove Redunduncy-------------------

for person in people:
    if flight.add_passenger(person):
        print(f"Added {person} to flight successfully.")
    else:
        print(f"No avilable seats for {person}")"""

#decoraters.py

"""def announce(f):
    def wrapper():
        print("About to run the function....")
        f()
        print("Done with the function")
    return wrapper

@announce
def hello():
    print("Hello World!")

hello()"""

#lambda.py

"""people = [
    {"name":"Harry","house":"Gryffindor"},
    {"name":"Cho","house":"Ravenclaw"},
    {"name":"Draco","house":"Slytherin"}
]

def f(person):
    return person["name"]

def k(person):
    return person["house"]

people.sort(key=f)
print(people)

people.sort(key=k)
print(people)

people.sort(key=lambda person: person["name"])
print(people)"""


#exceptions.py

try:
    x = int(input("x: "))
    y = int(input("y: "))
except ValueError:
    print("Error: Invalid input.")
    sys.exit(1)

try:
    result = x/y
except ZeroDivisionError:
    print("Error: Cannot divide by 0.")
    sys.exit(1)
print(f" {x} / {y} = {result} ")           # if y is zero - zerodivisionerror or any var is str-valueerror