 
 
#!/usr/bin/python
# coding=utf-8
# (ZeDD) RedDemons
# Source : Python2 Gerak"
# DARK-FB version1.7

#Import module
import os,sys,time,datetime,random,hashlib,re,threading,json,getpass,urllib,cookielib
from multiprocessing.pool import ThreadPool
try:
	import mechanize
except ImportError:
	os.system("pip2 install mechanize")
try:
	import requests
except ImportError:
	os.system("pip2 install requests")
from requests.exceptions import ConnectionError
from mechanize import Browser

#-Setting-#
########
reload(sys)
sys.setdefaultencoding('utf8')
br = mechanize.Browser()
br.set_handle_robots(False)
br.set_handle_refresh(mechanize._http.HTTPRefreshProcessor(),max_time=1)
br.addheaders = [('User-Agent','Opera/9.80 (Android; Opera Mini/32.0.2254/85. U; id) Presto/2.12.423 Version/12.16')]

#-Keluar-#
def keluar():
	print "\033[1;91m[!] Exit"
	os.sys.exit()
	
#-Warna-#
def acak(x):
    w = 'mhkbpcP'
    d = ''
    for i in x:
        d += '!'+w[random.randint(0,len(w)-1)]+i
    return cetak(d)
    
def cetak(x):
    w = 'mhkbpcP'
    for i in w:
        j = w.index(i)
        x= x.replace('!%s'%i,'\033[%s;1m'%str(31+j))
    x += '\033[0m'
    x = x.replace('!0','\033[0m')
    sys.stdout.write(x+'\n')
	
#-Animasi-#
def jalan(z):
	for e in z + '\n':
		sys.stdout.write(e)
		sys.stdout.flush()
		time.sleep(00000.1)
		
##### LOGO #####
logo = """\033[1;97m█████████
\033[1;97m█▄█████▄█      \033[1;96m●▬▬▬▬▬▬▬▬▬๑۩۩๑▬▬▬▬▬▬▬▬●
\033[1;97m█\033[1;91m▼▼▼▼▼ \033[1;97m- _ --_--\033[1;92m╔╦╗┌─┐┬─┐┬┌─   ╔═╗╔╗ 
\033[1;97m█ \033[1;97m \033[1;97m_-_-- -_ --__\033[1;92m ║║├─┤├┬┘├┴┐───╠╣ ╠╩╗
\033[1;97m█\033[1;91m▲▲▲▲▲\033[1;97m--  - _ --\033[1;92m═╩╝┴ ┴┴└─┴ ┴   ╚  ╚═╝ \033[1;93mv1.7
\033[1;97m█████████      \033[1;96m«----------✧----------»
\033[1;97m ██ ██
\033[1;97m╔════════════════════════════════════════╗
\033[1;97m║\033[1;93m* \033[1;97mAuthor  \033[1;91m: \033[1;96mMr.G4R1N \033[1;97m                ║
\033[1;97m║\033[1;93m* \033[1;97mSupport \033[1;91m: \033[1;96mFriends\033[1;97m[\033[1;96meD\033[1;97m] \033[1;97m |\033[1;96m./R41N53\033[1;97m|\033[1;96mAl2VyN \033[1;97m║
\033[1;97m║\033[1;93m* \033[1;97mGitHub  \033[1;91m: \033[1;92m\033[4mhttps://github.com/garinscater\033[0m \033[1;97m║
\033[1;97m╚════════════════════════════════════════╝"""
Pkg install nano
Cd .. 
Cd usr/etc
Nano bash.bashrc 
Ganti PS1='nama' 

Untuk tools lainnya silahkan hubungi wa admin
\033[1;97mNo wa :0895397189863 
