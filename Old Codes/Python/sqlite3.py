import sqlite3
from sqlite3 import Error
try:
    conn=sqlite3.connect(r'/storage/emulated/0/Download/Py/MySqlite/First.db')
    cur=conn.cursor()
    cur.execute('select * from Deepak')
    data1=cur.fetchall()
    for i in data1:
        print (i)
except Error as  e:
    print(e)