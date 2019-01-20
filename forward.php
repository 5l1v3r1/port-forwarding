<?php
/*
*******************************
* HELLO WASSAP SCRIPT KIDDIE! *
* MAU RECODE YAH? :v CACAD LO *
*******************************
Port Forwarding Helper
By 74nc0x@soracyberteam

GaNtI cOpYrIgHt TiDaK aKaN mEmBuAt KaMu JaDi HeKeR gAn.
*/
function cek($cmd){
$x=shell_exec(sprintf("which %s", escapeshellarg($cmd)));
return !empty($x);
}
function forward($http,$tcp){
$random=rand(1024,9999);
echo "[!] Port Forwarding By 74nc0x - Sora Cyber Team\n";
system("ssh -R 80:localhost:$http serveo.net -R $random:localhost:$tcp serveo.net");
}
echo "[+] Checking OpenSSH Package ...\n";
sleep(1);
if(!cek('ssh')){
echo "[-] Install OpenSSH Package First!\n";
exit();
}else{
echo "[+] Starting the script ...\n";
sleep(1);
#system('clear');
}
echo "################
# Port Forward #
################\n";
echo "[ HTTP ] Localhost Port (Default: 80)  : ";
$http=trim(fgets(STDIN));
echo "[ TCP  ] Localhost Port (Default: 4444) : ";
$tcp=trim(fgets(STDIN));
if($http && $tcp){
forward($http,$tcp);
}else{
$http=80;$tcp=4444;
forward($http,$tcp);
}
?>
