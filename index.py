#!bin/python

import os
#os.system('ifconfig');

def my_function():
  print """
====================================
          Laravel Helper With Python
           Coded By AriKUN | IndoSec
====================================
1. Start Server    |  6. Make:Midd
2. Make:Contrll    |  7. Make:Seed
3. Make:Mod        |  8. Make:Prov
4. Make:MIg        |  9. Make:Fact
5. Make:Mod + Mig  | 10. Make:Req
====================================
"""
my_function()
masukan = raw_input("Kamu Memilih : ")



if masukan == '1':

	print "Start Server"
	os.system('php artisan serv')
elif masukan == '2':

	a = raw_input('New Controller : ')
	os.system('php artisan make:controller '+a)

elif masukan == '3':

	a = raw_input('New Model : ')
	os.system('php artisan make:model '+a)

elif masukan == '4':

	a = raw_input('New Migration : ')
	os.system('php artisan make:migration '+a)
	
elif masukan == '5':

	a = raw_input('New Model + Mig : ')
	os.system('php artisan make:model '+a+"-m")
	pass



