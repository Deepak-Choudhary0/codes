
import MySQLdb

# Open database connection

con= MySQLdb.connect(host='localhost', user='username', passwd='password', db="Database")

# prepare a cursor object using cursor() method

cur= con.cursor()

try:
   cursor.execute("select * from users")
   res = cur.fetchall()
   for row in res:
      id   = row[0]
      name = row[1]
      age  = row[2]
      sex  = row[3]
      print ("%d, %s, %d, %s".format(id, name, age, sex)

   print ("\n")
except:
   print ("Error: unable to fecth data")

db.close()