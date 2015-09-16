import csv
import pymysql

con = pymysql.connect(
	db='Ignite',
	user='root',
	passwd='root',
	host='localhost',
	port=8889)
c = con.cursor()

scvFile = open('aps.csv','rbU')
scvReader = csv.reader(scvFile, delimiter=',', quotechar='"')

# SCV Values
for row in scvReader:
	if row[0]=="" or row[0]=="Timestamp":
		continue

	availability = "Thu, Sept 3: "+row[6]+"\n"
	availability += "Fri, Sept 4: "+row[7]+"\n"
	availability += "Sat, Sept 5: "+row[8]+"\n"
	availability += "Sun, Sept 6: "+row[9]+"\n"
	availability += "Mon, Sept 7: "+row[10]+"\n"
	availability += "Tue, Sept 8: "+row[11]+"\n"
	availability += "Wed, Sept 9: "+row[12]+"\n"
	availability += "Thu, Sept 10: "+row[13]+"\n"
	availability += "Fri, Sept 14: "+row[14]+"\n"
	availability += "Sat, Sept 15: "+row[15]+"\n"
	
	c.execute("INSERT INTO `applications` (name, email, about, why, experience, availability) VALUES (%s, %s, %s, %s, %s, %s)",(row[1],row[2],row[3],row[4],row[5],availability))
	con.commit()