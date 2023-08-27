import datetime as t
import sqlite3
from sqlite3 import Error
# Open database connection

con=sqlite3.connect(r"/storage/emulated/0/Download/Py/MySqlite/Sales.db")

# prepare a cursor object using cursor() method

cur= con.cursor()

try:
   cur.execute("select * from imp")
   res = cur.fetchall()
   for row in res:
       print(row)

   print ("\n")
except Error as e:
   print ("Error: unable to fecth data\n",e)

con.close()


time=t.datetime.today().strftime('%d %b,%Y       %I:%M%p')
t2=t.datetime.strptime('02/02/2020','%m/%d/%Y')
print(t2)