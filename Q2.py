import sqlite3
import sys

conn = sqlite3.connect('abc.db')
conn.execute('''CREATE TABLE IF NOT EXISTS USERS
         (USERNAME TEXT     NOT NULL,
         PASSWORD           TEXT    NOT NULL
         );''')
conn.execute("INSERT INTO USERS (USERNAME, PASSWORD) \
      VALUES ('ABC', '123')");

conn.execute("INSERT INTO USERS (USERNAME, PASSWORD) \
      VALUES ('BCA', '231')");

conn.execute("INSERT INTO USERS (USERNAME, PASSWORD) \
      VALUES ('CAB', '312')");

conn.execute("INSERT INTO USERS (USERNAME, PASSWORD) \
      VALUES ('BCC', '233')");

conn.commit()

cursor = conn.execute("SELECT USERNAME, PASSWORD from USERS")

for row in cursor:
	if sys.argv[1]==row[0]:
		if sys.argv[2]==row[1]:
			print('Login successful')
			break
		else:
			print('Wrong Password')
			break
else:
	print('No match for username, kindly register.')

conn.close()