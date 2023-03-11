<?php
return array (
  'uuid' => '3d086620-649e-30cb-f611-485ff5c2e28b',
  'typeId' => '6',
#  'recipients' => 'daisuke.narita@aits-net.com, info@aits-net.com',
  'recipients' => 'naoya.nagahori@aits-net.com',
  'subject' => '求人申し込み',
  'reply' => 'ご応募いただきありがとうございます。
折り返し担当者よりご連絡させていただきます。',
  'buttonText' => '応募する',
  'captchaEnabled' => true,
  'type' => 'contact',
  'fields' => 
  array (
    0 => 
    array (
      'name' => 'name',
      'type' => 'textfield',
      'title' => '氏名',
      'required' => true,
    ),
    1 => 
    array (
      'name' => 'field1',
      'type' => 'textfield',
      'title' => 'ふりがな',
      'required' => true,
    ),
    2 => 
    array (
      'name' => 'field3',
      'type' => 'textfield',
      'title' => '年齢',
      'required' => true,
    ),
    3 => 
    array (
      'name' => 'mail',
      'type' => 'email',
      'title' => 'ご連絡メールアドレス',
      'required' => true,
    ),
    4 => 
    array (
      'name' => 'field2',
      'type' => 'textfield',
      'title' => 'ご連絡電話番号',
      'required' => true,
    ),
    5 => 
    array (
      'name' => 'message',
      'type' => 'textarea',
      'title' => '備考',
      'required' => true,
    ),
  ),
  'badCaptcha' => '入力したテキストが、画像のテキストと一致していません。',
  'wrongRequest' => 'リクエストが正しくありません',
  'isPassCaptcha' => false,
  'recaptchaPrivateKey' => '6LcIkNMSAAAAAL_dH5rlWS0XsGfXg9IODumFDHeK',
);
?>