<?php error_reporting(0);salam();
// TTD : N93NT0T_H4X0R A.K.A. Mr.7ev3n - INDONESIAN H4X0R LITE
function salam(){echo"

\e[34m                \e[38;5;208m,----.        .--------------+       \e[93m+      \e[93m+                                                \e[93m+
\e[34m          ____ \e[38;5;208m/      \  __  /      \e[34m_____   \e[38;5;208m/        \e[93m+                 \e[93m+         \e[93m+           \e[93m+                     \e[93m+
\e[34m         /\    \ \e[38;5;208m/     \(  )/     -\e[34m/\    \ \e[38;5;208m/   \e[93m+                \e[93m+                                        \e[93m+
\e[34m        /::\    \ \e[38;5;208m/   ,' \/ ;   --\e[34m/::\    \ \e[93m+                  \e[32m     ///,        ////                \e[93m+   \e[93m+
\e[34m       /::::\    \ \e[38;5;208m/ / :    : ---\e[34m/::::\    \     \e[93m+      \e[93m+         \e[32m  \  /,      /  >.                \e[93m+       \e[93m+            \e[93m+
\e[34m      /::::::\    \ \e[38;5;208m/ `;    '---\e[34m/::::::\    \ \e[93m+     \e[93m+     \e[93m+       \e[32m   \  /,   _/  /.                      \e[93m+
\e[34m     /:::/\:::\    \ \e[38;5;208m  //..\\   \e[34m/:::/\:::\    \                    \e[32m    \_  /_/   /.\e[36mVersion    \e[93m+
\e[34m    /:::/  \:::\    \ \e[38;5;208mUU====UU\e[34m/:::/__\:::\    \      \e[93m+      \e[93m+       \e[32m     \__/_   <  \e[36m3.1                  \e[93m+
\e[34m   /:::/    \:::\    \ \e[38;5;208m /||\\  \e[34m\:::\   \:::\    \                   \e[93m+    \e[32m/<<< \_\_                \e[93m+    \e[93m+            \e[93m+   
\e[34m  /:::/    / \:::\    \ \e[38;5;208m``'``\e[34m__\:::\   \:::\    \   \e[93m+      \e[93m+       \e[32m    /\e[91m,\e[32m)^>>_._ \               \e[93m+
\e[34m /:::/    /   \:::\    \   /\   \:::\   \:::\    \     \e[93m+            \e[32m  (/   \\ /\\\             \e[93m+
\e[34m/:::/____/     \:::\____\_/::\   \:::\   \:::\____\    \e[38;5;208m)\e[93m+               \e[93m+    \e[32m // ````            \e[93m+
\e[36m\:::\    \      \::/    / \:::\   \:::\   \::/    /   \e[38;5;208m(\)       \e[93m+  \e[93m+    \e[38;5;208m)    \e[32m(\e[93m+\e[32m(`    \e[93m+           \e[93m+
\e[36m \:::\    \      \/____/   \:::\   \:::\   \/____/   \e[38;5;208m))/(\)   \e[93m+    \e[38;5;208m(   )/(    (    ( \e[93m+  
\e[36m  \:::\    \                \:::\   \:::\    \      \e[38;5;208m(/(( ))\  (   )(  )\())   )\( )( (          \e[93m+
\e[36m   \:::\    \                \:::\   \:::\____\      \e[38;5;208m) (_) (_)()/\( (()\ ((_)\  /((_)(()\             \e[93m+
\e[36m    \:::\    \                \:::\  /:::/    /      \e[38;5;208m )|   \  (_) ((_)| |(_)(_))   ((_)                 \e[93m+
\e[36m     \:::\    \                \:::\/:::/    /         \e[91m| |) |/ _ \| '_|| / / / -_) | '_|                     \e[93m+
\e[36m      \:::\    \                \::::::/    /          \e[91m|___/ \___/|_|  |_\_\ \___| |_|                       \e[93m+
\e[36m       \:::\____\                \::::/    /              \e[97m©2020 \e[93mCoded By - Mr.7ev3n                \e[93m+
\e[36m        \::/    /                 \::/    /                  \e[97m~  \e[35mN93NT0T H4X0R  \e[97m~                \e[93m+
\e[36m         \/____/                   \/____/                \e[97m~~ \e[35mINDONESIAN CYBER LITE \e[97m~~            \e[93m+
";sleep(5);
}
function Curl ($url, $post = 0, $headers = 0, $proxy = 0){
        $ch = curl_init();
        $options = array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_SSL_VERIFYPEER => 0,
            CURLOPT_SSL_VERIFYHOST => 0,
            CURLOPT_FOLLOWLOCATION => 1,
            CURLOPT_HEADER         => 1,
			CURLOPT_TIMEOUT        => 30,
        );
        if($proxy){
            $options[CURLOPT_PROXY] = $proxy;
            $options[CURLOPT_PROXYTYPE] = CURLPROXY_SOCKS5;
        }
        if($post){
            $options[CURLOPT_POST] = 1;
            $options[CURLOPT_POSTFIELDS] = $post;
        }
        if($headers){
            $options[CURLOPT_HTTPHEADER] = $headers;
        }
        curl_setopt_array($ch, $options);
        $response = curl_exec($ch);
        $httpcode = curl_getinfo($ch);
        if(!$httpcode) return "Curl Error : ".curl_error($ch); else{
            $header = substr($response, 0, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
            $body = substr($response, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
            curl_close($ch);
            return array($header, $body);
        }
}
function get_string($string, $start, $end){
        $str = explode($start, $string);
        $str = explode($end, $str[1]);
        return $str[0];
    }
function parse($link){
    $parse = parse_url($link);
    return $parse['scheme'] . "://" . $parse['host'] . "/";
}
function saved($nama, $data){
		$myfile = fopen($nama, "a");
		fwrite($myfile, $data);
		fclose($myfile);
}
function ask($dork){
    for ($i = 1;$i <= 201;$i+= 1) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://www.ask.com/web?q=".rawurlencode($dork)."&qsrc=998&page=".$i);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_TIMEOUT, 30);
		$data = curl_exec($ch);
		preg_match_all('#<p class="PartialSearchResults-item-url">(.*?)</p>#si', $data, $findlink);		
		if($findlink[1] != NULL){
			foreach ($findlink[1] as $link){
				$links = "http://$link";
				saved("ask_dump.txt","$links\n");
				echo"\e[97m[\e[34mask\e[97m][\e[38;5;208mpage\e[97m:\e[92m$i\e[97m]\n";
				$allLinks[] = $links;
			}
		}else{ break;}//sleep(2);
    }
    return array_unique($allLinks);
}
function bing($dork){
    for ($i = 1;$i <= 201;$i+= 10) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://www.bing.com/search?q=".rawurlencode($dork)."&first=".$i."&FORM=PERE");
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_TIMEOUT, 30);
		$data = curl_exec($ch);
        preg_match_all('#<h2><a href="(.*?)" h="ID#si', $data, $links);
        if($links[1] != NULL){
			foreach ($links[1] as $link) {
			saved("bing_dump.txt","$link\n");
			echo"\e[97m[\e[35mbing\e[97m][\e[38;5;208mpage\e[97m:\e[92m$i\e[97m]\n";
            $allLinks[] = $link; 
			}
		}else{ break;}//sleep(2);
    }
        return array_unique(array_map("urldecode", $allLinks));
}
function google($dork){
$i = 0;
 while(true){
		$headers = array();
        $headers[] = 'Referer: https://cse.google.com/cse?cx=partner-pub-2698861478625135:3033704849';
        $headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.'.rand(0000, 3333).'.169 Safari/537.36';
		$getInfo = Curl("https://cse.google.com/cse.js?hpg=1&cx=partner-pub-2698861478625135:3033704849", 0, $headers);
        preg_match('#"cse_token": "(.*?)"#si', $getInfo[1], $cseToken);
        $url = "https://cse.google.com/cse/element/v1?rsz=filtered_cse&num=10&&start=".$i."&hl=en&source=gcsc&gss=.com&cselibv=921554e23151c152&cx=partner-pub-2698861478625135:3033704849&q=".rawurlencode($dork)."&safe=off&cse_tok=".$cseToken[1]."&exp=csqr,cc&callback=google.search.cse.api16950";
		$json = Curl($url, 0, $headers);
        preg_match_all('#"clicktrackUrl": "(.*?)"#si', $json[1], $trackUrl);
		$i = $i+10;
		if($trackUrl[1] != NULL){
			foreach($trackUrl[1] as $index => $key){
				$jem1 = urldecode(get_string($key, '&q=', '&sa'));
				saved("google_dump.txt","$jem1\n");
				echo"\e[97m[\e[36mgoogle\e[97m][\e[38;5;208mpage\e[97m:\e[92m$i\e[97m]\n";
				$allLinks[] = urldecode(get_string($key, '&q=', '&sa'));
			}
		}else{break;sleep(2);}//sleep(2);
	}
return array_unique($allLinks);
}



$dork1 = file($argv[1], FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
foreach($dork1 as $dorkr1){
$dork2 = file("Sites/$argv[2].txt", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
	foreach($dork2 as $dorkr2){
$dork = "$dorkr1 site:$dorkr2";
$garap = ask($dork);
$garap = bing($dork);
$garap = google($dork);
$done = implode("\n", array_unique(array_map("parse", $garap)));
saved("result.txt","$done\n");
$c = count(file("result.txt"));
$user = getenv("username");
$date = date('H:i:s');
echo "$done
\e[93m++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
\e[93m+ \e[93m@author    \e[93m: \e[93mMr.7ev3n                   \e[93m+ 
\e[93m+ \e[91m@github    \e[93m: \e[91mhttps://github.com/N93NT0T \e[93m+ \e[97m[\e[91mSite \e[97m: \e[38;5;208m$dorkr2\e[97m]
\e[93m+ \e[92m@youtube   \e[93m: \e[92mbit.ly/n93nt0t             \e[93m+ \e[97m[ \e[34mToTaL \e[97m: \e[32m$c \e[97m]
\e[93m+ \e[35m@twitter   \e[93m: \e[35mbit.ly/t_ng93nt0t          \e[93m+ \e[97m[ \e[92m$date \e[97m]
\e[93m+ \e[34m@instagram \e[93m: \e[34mbit.ly/i_n93nt0t           \e[93m+ \e[97m~ \e[35mSemangat \e[93m$user \e[97m~
\e[93m+ \e[36m@facebook  \e[93m: \e[36mbit.ly/fb_n93nt0t          \e[93m+ 
\e[93m++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
";




	}
}
?>