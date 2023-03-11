<?php
return array (
  'uuid' => '856edb6d-64ac-a7f3-f310-26f331967cbe',
  'typeId' => '6',
#  'recipients' => 'info@aits-net.com',
  'recipients' => 'naoya.nagahori@aits-net.com',
  'subject' => 'お問い合わせ',
  'reply' => 'メッセージが送信されました。ありがとうございました。',
  'buttonText' => 'メールを送信する',
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
      'name' => 'mail',
      'type' => 'email',
      'title' => 'メールアドレス',
      'required' => true,
    ),
    2 => 
    array (
      'name' => 'field1',
      'type' => 'textfield',
      'title' => '件名',
      'required' => true,
    ),
    3 => 
    array (
      'name' => 'message',
      'type' => 'textarea',
      'title' => 'お問い合わせ内容',
      'required' => true,
    ),
  ),
  'badCaptcha' => '入力したテキストが、画像のテキストと一致していません。',
  'wrongRequest' => 'リクエストが正しくありません',
  'isPassCaptcha' => false,
  'recaptchaPrivateKey' => '6LcIkNMSAAAAAL_dH5rlWS0XsGfXg9IODumFDHeK',
);
?>