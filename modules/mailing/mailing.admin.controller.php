<?php
class mailingAdminController extends mailing {
  function init() {
  }

  function procMailingAdminSendMail() {
    // 기본 정보를 받음
    $args = Context::gets('sender_nickname','sender_email','receive_group','title','content','mailing_allow');   
  
    $oMail = new Mail();
    $oMail->setTitle($args->title);
    
    $mailing_allow = $args->mailing_allow;
    $content = $args->content;
    
    $oMail->setContent($content);
    $oMail->setSender($args->sender_nickname, $args->sender_email);
    
  	// 첨부파일을 가져옴
  	$primary_key = Context::get('primary_key');
  	if($primary_key !='0') {
    	$args->primary_key = $primary_key;
      $output = executeQueryArray('mailing.getFileAttach', $args);
      if(!$output->toBool()) {
          return $output;
      }
      $attach_file = $output->data;
      foreach($attach_file as $m){
        $oMail->addAttachment($m->uploaded_filename, $m->source_filename);
      }
    }
    
    $cnt = 0;

    if($args->receive_group == 'all') {
      // 모듈 정보를 가져옴
	    $oModuleModel = &getModel('module');
	    $config = $oModuleModel->getModuleConfig('mailing');

	    // Email List를 가져옴
	    $args->is_mailing = 'Y';
	    $output = executeQueryArray('mailing.getEmailAddrList');

	    if(!$output->toBool()) {
	        return $output;
	    }

		    if($output->data){
		      $member_list = $output->data;
		      foreach($member_list as $m) {
		          
            //DB연결 끊김 방지하고 메일 큐에 부담을 줄인다
            if(($cnt%100)==0) {
              sleep(5);
              $oDB = &DB::getInstance();
              $oDB->begin();
            }
	          if($mailing_allow == 'Y') {
	            if($m->allow_mailing == 'Y') {
                $oMail->setReceiptor($m->nick_name, $m->email_address);
                $oMail->send();
                $cnt++;
	            }
	          } else {
              $oMail->setReceiptor($m->nick_name, $m->email_address);
              $oMail->send();
              $cnt++;
	          }
		      }
		    }
      } else {
        $group_srl = Context::get('receive_group');
        // 모듈 정보를 가져옴
        $oModuleModel = &getModel('module');
        $config = $oModuleModel->getModuleConfig('mailing');

        // Email List를 가져옴
        $args->is_mailing = 'Y';

        $args->group_srl = $group_srl;
        $output = executeQueryArray('mailing.getGroupEmailAddrList', $args);

        if(!$output->toBool()) {
          return $output;
        }

        if($output->data){
          $member_list = $output->data;
          foreach($member_list as $m) {
            
            //DB연결 끊김 방지하고 메일 큐에 부담을 줄인다
            if(($cnt%100)==0) {
              sleep(5);
              $oDB = &DB::getInstance();
              $oDB->begin();
            }
	          if($mailing_allow == 'Y') {
	            if($m->allow_mailing == 'Y') {
                $oMail->setReceiptor($m->nick_name, $m->email_address);
                $oMail->send();
                $cnt++;
	            }
	          } else {
              $oMail->setReceiptor($m->nick_name, $m->email_address);
              $oMail->send();
              $cnt++;
	          }
          }
        }
      }
      
      $this->setMessage( sprintf(Context::getLang('msg_send_success'), $cnt) );
    } //end function
   
} // end class
?>
