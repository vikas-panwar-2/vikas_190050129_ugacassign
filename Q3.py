import sqlite3
import sys
import json

conn = sqlite3.connect('vikas.db')
cur = conn.cursor()
cur.execute('''CREATE TABLE IF NOT EXISTS USERS
         (USERNAME TEXT     NOT NULL,
         PASSWORD           TEXT    NOT NULL
         );''')
f = open('a.json',)
data = json.load(f)

us_name=[]
pswrd=[]
for i in data['user_details']:
	us_name.append(i['USERNAME'])
	pswrd.append(i['PASSWORD'])

for i in range(len(us_name)):
	
	cur.execute("INSERT INTO USERS (USERNAME, PASSWORD) \
      VALUES (?,?)",(us_name[i], pswrd[i]));

conn.commit()
cur.execute("SELECT USERNAME, PASSWORD from USERS")
rows = cur.fetchall()
for row in rows :
	print(row)  
conn.close()