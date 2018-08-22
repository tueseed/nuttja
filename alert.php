<?php
function push_msg()
{  
    //$access_token = 'ZP+VUHsKMsZL45YWEXAeX7xIuij8//+W38Hqee/U2nyYzCF+v1fbJx78yNrsKAVFJJ7BcZfl1+0fkL66TzZV0FtBf/PpBbuqGmilCwK5+NE1TjEeHwV90c7SsIV6TfMlNlaGIcIzhIVkeRnBUrwygwdB04t89/1O/w1cDnyilFU=';
	$access_token = 'REGnVB/OI7mwsa9/5EQOtchj3pUn47bh7sknrm1X+pUs+mbYG/33SqFGogTb/FU6ii3A/3r2ERT+DQGQZ6B/92ofjUMJiQYWx65sVDO5PqG1h9dM3M0hrYgcBy1ZjJ6nIaUjjoSH9smAIhRYY5FU+wdB04t89/1O/w1cDnyilFU=';
    $messages = [ 'type' => 'text', 
    'text' => 'ทดสอบ PUSH จ้า'
    ];
    $url = 'https://api.line.me/v2/bot/message/push';
    $data = ['to' => $obj_group['group_id'],'messages' => [$messages]];
    $post = json_encode($data);
    $headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    $result = curl_exec($ch);
    curl_close($ch);  
}
/*require('./db/connect-db.php');
$sql = "SELECT * FROM tbl_office";
$query = mysqli_query($conn,$sql);
while($obj = mysqli_fetch_array($query))
{
    echo $obj["office_name"]."<br>";

}*/
$group_id ="Ccd9652f5c7325dac8f78719ec74d6be0";
push_msg($group_id);

?>