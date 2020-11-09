<?php
$user_id = 53704205;
$request_params = array(
'group_id' => $user_id,
'fields' => 'members_count',
'v' => '5.80',
'access_token' => 'e59612aae59612aae59612aaa0e5e2c3b3ee596e59612aaba3e2fd1ad92bae19c77518a'
);
$get_params = http_build_query($request_params);
$result = json_decode(file_get_contents('https://api.vk.com/method/groups.getById?'. $get_params));
echo ($result -> response[0] -> members_count);
?>