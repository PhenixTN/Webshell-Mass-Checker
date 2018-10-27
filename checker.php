<?php
/*
    Coded By PhenixTN
	Thanks to : Mr.Anderson
	mr.phenix2012@gmail.com
	Issued Oct 27th, 2018
*/
/*

Lamerz Don't change my fucking code :D

Cuz u will still a n00b ^o^

*/
$keyword = array("Webshell", "0byt3m1n1", "IndoXploit","Shell","shell","wso"," Upload Please ","Upload Please","title"); // Edit Here

if(!empty($_POST['check'])) {
	$list = $_POST['list'];
	$shell = explode(PHP_EOL, $list);
	echo '<pre>';
	foreach($shell as $shellchk) {
		$url = trim($shellchk);
		$keyx = '/(' .implode('|', $keyword) .')/';
		$ch = curl_init($url);
		curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
		curl_setopt($ch,CURLOPT_TIMEOUT,10);
		$shellcurl = curl_exec($ch);
		$httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
		curl_close($ch);
		if($httpcode == '200' && preg_match_all("$keyx", $shellcurl))  {
			echo "[OK!] $url\n"; 
$file = fopen("content.txt","a");
echo fwrite($file,"$url\n");
fclose($file);
		}
		else {
			echo "<font color='red'>[BAD] $url</font>\n";
		}
	}
	echo '</pre>';
}
function eof() {$off = chr(92).chr(101).chr(114).chr(111).chr(66).chr(121).chr(116).chr(101);eval(chr(101).chr(99).chr(104).chr(111)." $off.'.".chr(73).chr(68)."';");}
echo "<html>\n";
echo "<head>\n";
echo "<title>Webshell Mass Checker By PhenixTN</title>";
echo '<style type="text/css">body{color:#009900;background:#111111;font-family:\'Courier\'}textarea{color:#009900;background:transparent;border-color:#009900;padding:5px;}input{color:#111111;background:#009900;margin-top:10px;font-size:20px;border:2px double #009900;padding:2px;padding-left:150px;padding-right:150px;font-family:Arial}</style>';
echo "\n</head>";
echo "<body>\n";
echo "<center>";
if(empty($_POST['check'])) {
	echo "<h1>Webshell Mass Checker By Phenix-TN</h1>\n";
	echo '<form method="post">'."\n";
	echo '<textarea name="list" placeholder="https://site.com/shell.php" style="width:700px;height:250px;">'."\n";
	echo "</textarea><br>\n";
	echo '<input type="submit" name="check" value="Check"/>'."\n";
	echo "</form>\n";
} eof();
echo "</center>\n";
echo "</body>\n";
echo "</html>";

// fuck
?>