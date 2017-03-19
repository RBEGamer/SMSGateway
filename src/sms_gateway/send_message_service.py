#!/usr/bin/python


import MySQLdb
import serial
import time




try:
    con = _mysql.connect('localhost', 'sms_gat', 'sms_gat', 'sms_gateway')
        
    con.query("SELECT VERSION()")
    result = con.use_result()
    
    print "MySQL version: %s" % \
        result.fetch_row()[0]
    
except _mysql.Error, e:
  
    print "Error %d: %s" % (e.args[0], e.args[1])
    sys.exit(1)

finally:
	print("ok")
	con.close()


#3 leds netz sending error


# reset chip
# connect to serial 9600 baud check version; set baudrate to x


#reset pin toglle + wait 5 seconds
# AT -> OK //ping
# AT+CMGF=1 -> OK //check mode
# AT+CPIN="0000" -> //set pin wait 5 seconds



#open mysql check new messages
# AT -> ok // cehck pin
#AT+CMGF=1  //set sms mode
#AT+CSMP: 1,169,0,0 ->OK // set message mode
#AT+CMGS="+31638740161" -> > //set number
#message here +ctrl+z finsh
#+CMGS: 62 //message id store in db
#delete db entry
#set log
#set send_messages
#check new entry

