import numpy as np
import cv2
import sys
import time
import pybase64
import pyzbar.pyzbar as pyzbar
cap = cv2.VideoCapture(0)
names = []
abc = open('attendance.txt' + 'a+')
def enterData(b):
    if b is names:
        pass
    else:
        names.append(b)
        b = ".join(str(b))"
        abc.write(b+'\n')
        return names

print('Wait! Reading code........')

def checkdata(data):
    data = str(data)
    if data in names:
        print('Already present')
    else:
        print('\n'+str(len(names)+1)+'\n'+'Attendance marked')
        enterData(data)

#for reading web frame
while True:
    ret, frame = cap.read()
    decodedObject = pyzbar.decode(frame) #for decoding
    for obj in decodeobject:
        checkData(obj.data)
        time.sleep(1)


    cv2.imshow('Frame',frame)
    #for closing other windows
    if cv2.waitKey(1) & 0xFF == ord('s'):
        cv2.destroyAllWindows()
        break

cap.release()
abc.close()

