<?php if(!defined('__XE__')) exit();
$xml_info = (object)(array(
   'author' => 
  array (
    0 => 
    (object)(array(
       'name' => '김민수(misol)',
       'email_address' => 'misol.kr@gmail.com',
       'homepage' => 'https://github.com/misol',
    )),
  ),
   'extra_vars' => 
  (object)(array(
     'soo_daum_local_api_key' => 
    (object)(array(
       'group' => NULL,
       'name' => 'soo_daum_local_api_key',
       'title' => '다음 API REST/JS Key(선택, 다음 지도를 사용할 경우 필수)',
       'type' => 'text',
       'description' => 'https://developers.daum.net/console 에서 앱 만들기 후, API 키 메뉴에서 REST/JS API 키 항목을 통해 웹 브라우저용 API 키를 발급 받으신 키를 입력해주세요.',
       'value' => NULL,
    )),
     'soo_naver_secret_key' => 
    (object)(array(
       'group' => NULL,
       'name' => 'soo_naver_secret_key',
       'title' => 'Client Secret(선택. 네이버 지도의 경우)',
       'type' => 'text',
       'description' => 'https://developers.naver.com/appinfo 에서 앱 등록 후 Client Secret 키를 발급받은 후 입력해주세요.',
       'value' => NULL,
    )),
     'soo_map_api' => 
    (object)(array(
       'group' => NULL,
       'name' => 'soo_map_api',
       'title' => '지도 API Key(선택. 네이버 지도의 경우 Client ID)',
       'type' => 'text',
       'description' => 'https://developers.daum.net/console 에서 앱 만들기 후, API 키 메뉴에서 REST/JS API 키 항목을 통해 웹 브라우저용 API 키를 발급 받으시거나, https://developers.naver.com/appinfo 에서 Client ID 키를 발급받은 후 입력해주세요.
			다음 지도를 이용하실 경우, 위 다음 API REST/JS Key에서 입력한 키와 동일한 키를 입력하셔야 다음 지도를 이용하실 수 있습니다.
			아무 값을 입력하지 않을 경우, 구글 지도가 나타납니다.',
       'value' => NULL,
    )),
     'soo_map_api_type' => 
    (object)(array(
       'group' => NULL,
       'name' => 'soo_map_api_type',
       'title' => '지도 API Key 발급자(다음, 네이버 API 사용시 권장)',
       'type' => 'select',
       'description' => '다음 지도 API Key 가 32자 인 경우 반드시 선택해주시기 바랍니다.',
       'value' => NULL,
       'options' => 
      array (
        0 => 
        (object)(array(
           'title' => '자동 선택(다음 또는 구글 지도 아님)',
           'value' => '',
        )),
        1 => 
        (object)(array(
           'title' => '다음',
           'value' => 'daum',
        )),
        2 => 
        (object)(array(
           'title' => '구글',
           'value' => 'google',
        )),
      ),
    )),
     'soo_user_position' => 
    (object)(array(
       'group' => NULL,
       'name' => 'soo_user_position',
       'title' => '지도에 독자 위치 표시',
       'type' => 'select',
       'description' => '지도에 본문 내용 중 지도를 보고 있는 사람의 위치를 나타냅니다.',
       'value' => NULL,
       'options' => 
      array (
        0 => 
        (object)(array(
           'title' => '표시 안 함',
           'value' => 'N',
        )),
        1 => 
        (object)(array(
           'title' => '표시함',
           'value' => 'Y',
        )),
      ),
    )),
  )),
   'component_name' => 'map_components',
   'title' => '지도',
   'description' => '지도를 원하는 곳에 추가하거나 수정할 수 있습니다. OpenStreetMap, Google Maps API, 다음 지도 API, 다음 로컬 API 등이 사용되었습니다.',
   'version' => '1.4',
   'date' => '2016-07-30',
   'homepage' => NULL,
   'license' => 'GPLv3',
   'license_link' => 'http://www.gnu.org/licenses/gpl-3.0.html',
));