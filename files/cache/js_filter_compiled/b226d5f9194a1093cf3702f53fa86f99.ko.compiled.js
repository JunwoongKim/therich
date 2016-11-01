function send_mail(form){ return legacy_filter('send_mail', form, 'mailing', 'procMailingAdminSendMail', completeSend, ['error','message'], '', {}) };
(function($){
	var v=xe.getApp('validator')[0];if(!v)return false;
	v.cast("ADD_FILTER", ["send_mail", {'sender_nickname': {required:true,maxlength:250},'sender_email': {required:true,maxlength:250},'receive_group': {required:true,maxlength:250},'mailing_allow': {required:true,maxlength:250},'title': {required:true,minlength:1,maxlength:250},'content': {required:true,minlength:1,maxlength:80000}}]);
	
	v.cast('ADD_MESSAGE',['sender_nickname','발송자 닉네임']);
	v.cast('ADD_MESSAGE',['sender_email','발송자 이메일']);
	v.cast('ADD_MESSAGE',['receive_group','받는그룹']);
	v.cast('ADD_MESSAGE',['mailing_allow','mailing_allow']);
	v.cast('ADD_MESSAGE',['title','제목']);
	v.cast('ADD_MESSAGE',['content','내용']);
	v.cast('ADD_MESSAGE',['isnull','%s 값은 필수입니다.']);
	v.cast('ADD_MESSAGE',['outofrange','%s의 글자 수를 맞추어 주세요.']);
	v.cast('ADD_MESSAGE',['equalto','%s이(가) 잘못되었습니다.']);
	v.cast('ADD_MESSAGE',['invalid','%s의 값이 올바르지 않습니다.']);
	v.cast('ADD_MESSAGE',['invalid_email','%s의 값은 올바른 메일 주소가 아닙니다.']);
	v.cast('ADD_MESSAGE',['invalid_userid','%s의 값은 영문, 숫자, _만 가능하며 첫 글자는 영문이어야 합니다.']);
	v.cast('ADD_MESSAGE',['invalid_user_id','%s의 값은 영문, 숫자, _만 가능하며 첫 글자는 영문이어야 합니다.']);
	v.cast('ADD_MESSAGE',['invalid_homepage','%s의 형식이 잘못되었습니다.(예: http://www.xpressengine.com)']);
	v.cast('ADD_MESSAGE',['invalid_url','%s의 형식이 잘못되었습니다.(예: http://www.xpressengine.com)']);
	v.cast('ADD_MESSAGE',['invalid_korean','%s의 형식이 잘못되었습니다. 한글로만 입력해야 합니다.']);
	v.cast('ADD_MESSAGE',['invalid_korean_number','%s의 형식이 잘못되었습니다. 한글과 숫자로만 입력해야 합니다.']);
	v.cast('ADD_MESSAGE',['invalid_alpha','%s의 형식이 잘못되었습니다. 영문으로만 입력해야 합니다.']);
	v.cast('ADD_MESSAGE',['invalid_alpha_number','%s의 형식이 잘못되었습니다. 영문과 숫자로만 입력해야 합니다.']);
	v.cast('ADD_MESSAGE',['invalid_mid','%s의 형식이 잘못되었습니다. 첫 글자는 영문으로 시작해야 하며 \'영문+숫자+_\'로만 입력해야 합니다.']);
	v.cast('ADD_MESSAGE',['invalid_number','%s의 형식이 잘못되었습니다. 숫자로만 입력해야 합니다.']);
	v.cast('ADD_MESSAGE',['invalid_float','%s의 형식이 잘못되었습니다. 실수로만 입력해야 합니다.']);
})(jQuery);