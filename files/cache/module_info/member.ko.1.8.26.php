<?php if(!defined("__XE__")) exit();
$info = new stdClass;
$info->default_index_act = 'dispMemberAdminList';
$info->setup_index_act='';
$info->simple_setup_index_act='';
$info->admin_index_act = 'dispMemberAdminList';
$info->permission = new stdClass;
$info->permission->getApiGroups = 'manager';
$info->menu = new stdClass;
$info->menu->userList = new stdClass;
$info->menu->userList->title='회원 목록';
$info->menu->userList->type='';
$info->menu->userGroup = new stdClass;
$info->menu->userGroup->title='회원 그룹';
$info->menu->userGroup->type='';
$info->menu->userSetting = new stdClass;
$info->menu->userSetting->title='회원 설정';
$info->menu->userSetting->type='';
$info->action = new stdClass;
$info->action->dispMemberInfo = new stdClass;
$info->action->dispMemberInfo->type='view';
$info->action->dispMemberInfo->grant='guest';
$info->action->dispMemberInfo->standalone='true';
$info->action->dispMemberInfo->ruleset='';
$info->action->dispMemberInfo->method='';
$info->action->dispMemberSignUpForm = new stdClass;
$info->action->dispMemberSignUpForm->type='view';
$info->action->dispMemberSignUpForm->grant='guest';
$info->action->dispMemberSignUpForm->standalone='true';
$info->action->dispMemberSignUpForm->ruleset='';
$info->action->dispMemberSignUpForm->method='';
$info->action->dispMemberModifyEmailAddress = new stdClass;
$info->action->dispMemberModifyEmailAddress->type='view';
$info->action->dispMemberModifyEmailAddress->grant='guest';
$info->action->dispMemberModifyEmailAddress->standalone='true';
$info->action->dispMemberModifyEmailAddress->ruleset='';
$info->action->dispMemberModifyEmailAddress->method='';
$info->action->dispMemberModifyInfo = new stdClass;
$info->action->dispMemberModifyInfo->type='view';
$info->action->dispMemberModifyInfo->grant='guest';
$info->action->dispMemberModifyInfo->standalone='true';
$info->action->dispMemberModifyInfo->ruleset='';
$info->action->dispMemberModifyInfo->method='';
$info->action->dispMemberModifyPassword = new stdClass;
$info->action->dispMemberModifyPassword->type='view';
$info->action->dispMemberModifyPassword->grant='guest';
$info->action->dispMemberModifyPassword->standalone='true';
$info->action->dispMemberModifyPassword->ruleset='';
$info->action->dispMemberModifyPassword->method='';
$info->action->dispMemberLoginForm = new stdClass;
$info->action->dispMemberLoginForm->type='view';
$info->action->dispMemberLoginForm->grant='guest';
$info->action->dispMemberLoginForm->standalone='true';
$info->action->dispMemberLoginForm->ruleset='';
$info->action->dispMemberLoginForm->method='';
$info->action->dispMemberLogout = new stdClass;
$info->action->dispMemberLogout->type='view';
$info->action->dispMemberLogout->grant='guest';
$info->action->dispMemberLogout->standalone='true';
$info->action->dispMemberLogout->ruleset='';
$info->action->dispMemberLogout->method='';
$info->action->dispMemberLeave = new stdClass;
$info->action->dispMemberLeave->type='view';
$info->action->dispMemberLeave->grant='guest';
$info->action->dispMemberLeave->standalone='true';
$info->action->dispMemberLeave->ruleset='';
$info->action->dispMemberLeave->method='';
$info->action->dispMemberOwnDocument = new stdClass;
$info->action->dispMemberOwnDocument->type='view';
$info->action->dispMemberOwnDocument->grant='guest';
$info->action->dispMemberOwnDocument->standalone='true';
$info->action->dispMemberOwnDocument->ruleset='';
$info->action->dispMemberOwnDocument->method='';
$info->action->dispMemberScrappedDocument = new stdClass;
$info->action->dispMemberScrappedDocument->type='view';
$info->action->dispMemberScrappedDocument->grant='guest';
$info->action->dispMemberScrappedDocument->standalone='true';
$info->action->dispMemberScrappedDocument->ruleset='';
$info->action->dispMemberScrappedDocument->method='';
$info->action->dispMemberSavedDocument = new stdClass;
$info->action->dispMemberSavedDocument->type='view';
$info->action->dispMemberSavedDocument->grant='guest';
$info->action->dispMemberSavedDocument->standalone='true';
$info->action->dispMemberSavedDocument->ruleset='';
$info->action->dispMemberSavedDocument->method='';
$info->action->dispMemberFindAccount = new stdClass;
$info->action->dispMemberFindAccount->type='view';
$info->action->dispMemberFindAccount->grant='guest';
$info->action->dispMemberFindAccount->standalone='true';
$info->action->dispMemberFindAccount->ruleset='';
$info->action->dispMemberFindAccount->method='';
$info->action->dispMemberGetTempPassword = new stdClass;
$info->action->dispMemberGetTempPassword->type='view';
$info->action->dispMemberGetTempPassword->grant='guest';
$info->action->dispMemberGetTempPassword->standalone='true';
$info->action->dispMemberGetTempPassword->ruleset='';
$info->action->dispMemberGetTempPassword->method='';
$info->action->dispMemberResendAuthMail = new stdClass;
$info->action->dispMemberResendAuthMail->type='view';
$info->action->dispMemberResendAuthMail->grant='guest';
$info->action->dispMemberResendAuthMail->standalone='true';
$info->action->dispMemberResendAuthMail->ruleset='';
$info->action->dispMemberResendAuthMail->method='';
$info->action->dispSavedDocumentList = new stdClass;
$info->action->dispSavedDocumentList->type='view';
$info->action->dispSavedDocumentList->grant='guest';
$info->action->dispSavedDocumentList->standalone='true';
$info->action->dispSavedDocumentList->ruleset='';
$info->action->dispSavedDocumentList->method='';
$info->action->dispMemberSpammer = new stdClass;
$info->action->dispMemberSpammer->type='view';
$info->action->dispMemberSpammer->grant='guest';
$info->action->dispMemberSpammer->standalone='true';
$info->action->dispMemberSpammer->ruleset='';
$info->action->dispMemberSpammer->method='';
$info->menu->userList->index='dispMemberAdminList';
$info->menu->userList->acts[0]='dispMemberAdminList';
$info->action->dispMemberAdminList = new stdClass;
$info->action->dispMemberAdminList->type='view';
$info->action->dispMemberAdminList->grant='guest';
$info->action->dispMemberAdminList->standalone='true';
$info->action->dispMemberAdminList->ruleset='';
$info->action->dispMemberAdminList->method='';
$info->menu->userSetting->index='dispMemberAdminConfig';
$info->menu->userSetting->acts[0]='dispMemberAdminConfig';
$info->action->dispMemberAdminConfig = new stdClass;
$info->action->dispMemberAdminConfig->type='view';
$info->action->dispMemberAdminConfig->grant='guest';
$info->action->dispMemberAdminConfig->standalone='true';
$info->action->dispMemberAdminConfig->ruleset='';
$info->action->dispMemberAdminConfig->method='';
$info->menu->userSetting->acts[1]='dispMemberAdminSignUpConfig';
$info->action->dispMemberAdminSignUpConfig = new stdClass;
$info->action->dispMemberAdminSignUpConfig->type='view';
$info->action->dispMemberAdminSignUpConfig->grant='guest';
$info->action->dispMemberAdminSignUpConfig->standalone='true';
$info->action->dispMemberAdminSignUpConfig->ruleset='';
$info->action->dispMemberAdminSignUpConfig->method='';
$info->menu->userSetting->acts[2]='dispMemberAdminLoginConfig';
$info->action->dispMemberAdminLoginConfig = new stdClass;
$info->action->dispMemberAdminLoginConfig->type='view';
$info->action->dispMemberAdminLoginConfig->grant='guest';
$info->action->dispMemberAdminLoginConfig->standalone='true';
$info->action->dispMemberAdminLoginConfig->ruleset='';
$info->action->dispMemberAdminLoginConfig->method='';
$info->menu->userSetting->acts[3]='dispMemberAdminDesignConfig';
$info->action->dispMemberAdminDesignConfig = new stdClass;
$info->action->dispMemberAdminDesignConfig->type='view';
$info->action->dispMemberAdminDesignConfig->grant='guest';
$info->action->dispMemberAdminDesignConfig->standalone='true';
$info->action->dispMemberAdminDesignConfig->ruleset='';
$info->action->dispMemberAdminDesignConfig->method='';
$info->menu->userList->acts[1]='dispMemberAdminInsert';
$info->action->dispMemberAdminInsert = new stdClass;
$info->action->dispMemberAdminInsert->type='view';
$info->action->dispMemberAdminInsert->grant='guest';
$info->action->dispMemberAdminInsert->standalone='true';
$info->action->dispMemberAdminInsert->ruleset='';
$info->action->dispMemberAdminInsert->method='';
$info->menu->userGroup->index='dispMemberAdminGroupList';
$info->menu->userGroup->acts[0]='dispMemberAdminGroupList';
$info->action->dispMemberAdminGroupList = new stdClass;
$info->action->dispMemberAdminGroupList->type='view';
$info->action->dispMemberAdminGroupList->grant='guest';
$info->action->dispMemberAdminGroupList->standalone='true';
$info->action->dispMemberAdminGroupList->ruleset='';
$info->action->dispMemberAdminGroupList->method='';
$info->menu->userList->acts[2]='dispMemberAdminInfo';
$info->action->dispMemberAdminInfo = new stdClass;
$info->action->dispMemberAdminInfo->type='view';
$info->action->dispMemberAdminInfo->grant='guest';
$info->action->dispMemberAdminInfo->standalone='true';
$info->action->dispMemberAdminInfo->ruleset='';
$info->action->dispMemberAdminInfo->method='';
$info->action->dispMemberAdminInsertJoinForm = new stdClass;
$info->action->dispMemberAdminInsertJoinForm->type='view';
$info->action->dispMemberAdminInsertJoinForm->grant='guest';
$info->action->dispMemberAdminInsertJoinForm->standalone='true';
$info->action->dispMemberAdminInsertJoinForm->ruleset='';
$info->action->dispMemberAdminInsertJoinForm->method='';
$info->action->getMemberMenu = new stdClass;
$info->action->getMemberMenu->type='model';
$info->action->getMemberMenu->grant='guest';
$info->action->getMemberMenu->standalone='true';
$info->action->getMemberMenu->ruleset='';
$info->action->getMemberMenu->method='';
$info->action->getMemberAdminColorset = new stdClass;
$info->action->getMemberAdminColorset->type='model';
$info->action->getMemberAdminColorset->grant='guest';
$info->action->getMemberAdminColorset->standalone='true';
$info->action->getMemberAdminColorset->ruleset='';
$info->action->getMemberAdminColorset->method='';
$info->action->getMemberAdminInsertJoinForm = new stdClass;
$info->action->getMemberAdminInsertJoinForm->type='model';
$info->action->getMemberAdminInsertJoinForm->grant='guest';
$info->action->getMemberAdminInsertJoinForm->standalone='true';
$info->action->getMemberAdminInsertJoinForm->ruleset='';
$info->action->getMemberAdminInsertJoinForm->method='';
$info->action->getMemberAdminIPCheck = new stdClass;
$info->action->getMemberAdminIPCheck->type='model';
$info->action->getMemberAdminIPCheck->grant='guest';
$info->action->getMemberAdminIPCheck->standalone='true';
$info->action->getMemberAdminIPCheck->ruleset='';
$info->action->getMemberAdminIPCheck->method='';
$info->action->getApiGroups = new stdClass;
$info->action->getApiGroups->type='model';
$info->action->getApiGroups->grant='guest';
$info->action->getApiGroups->standalone='true';
$info->action->getApiGroups->ruleset='';
$info->action->getApiGroups->method='';
$info->action->procMemberLogin = new stdClass;
$info->action->procMemberLogin->type='controller';
$info->action->procMemberLogin->grant='guest';
$info->action->procMemberLogin->standalone='true';
$info->action->procMemberLogin->ruleset='@login';
$info->action->procMemberLogin->method='';
$info->action->procMemberLogout = new stdClass;
$info->action->procMemberLogout->type='controller';
$info->action->procMemberLogout->grant='guest';
$info->action->procMemberLogout->standalone='true';
$info->action->procMemberLogout->ruleset='';
$info->action->procMemberLogout->method='';
$info->action->procMemberCheckValue = new stdClass;
$info->action->procMemberCheckValue->type='controller';
$info->action->procMemberCheckValue->grant='guest';
$info->action->procMemberCheckValue->standalone='true';
$info->action->procMemberCheckValue->ruleset='';
$info->action->procMemberCheckValue->method='';
$info->action->procMemberInsert = new stdClass;
$info->action->procMemberInsert->type='controller';
$info->action->procMemberInsert->grant='guest';
$info->action->procMemberInsert->standalone='true';
$info->action->procMemberInsert->ruleset='@insertMember';
$info->action->procMemberInsert->method='';
$info->action->procMemberModifyEmailAddress = new stdClass;
$info->action->procMemberModifyEmailAddress->type='controller';
$info->action->procMemberModifyEmailAddress->grant='guest';
$info->action->procMemberModifyEmailAddress->standalone='true';
$info->action->procMemberModifyEmailAddress->ruleset='modifyEmailAddress';
$info->action->procMemberModifyEmailAddress->method='';
$info->action->procMemberModifyInfoBefore = new stdClass;
$info->action->procMemberModifyInfoBefore->type='controller';
$info->action->procMemberModifyInfoBefore->grant='guest';
$info->action->procMemberModifyInfoBefore->standalone='true';
$info->action->procMemberModifyInfoBefore->ruleset='recheckedPassword';
$info->action->procMemberModifyInfoBefore->method='';
$info->action->procMemberModifyInfo = new stdClass;
$info->action->procMemberModifyInfo->type='controller';
$info->action->procMemberModifyInfo->grant='guest';
$info->action->procMemberModifyInfo->standalone='true';
$info->action->procMemberModifyInfo->ruleset='@insertMember';
$info->action->procMemberModifyInfo->method='';
$info->action->procMemberModifyPassword = new stdClass;
$info->action->procMemberModifyPassword->type='controller';
$info->action->procMemberModifyPassword->grant='guest';
$info->action->procMemberModifyPassword->standalone='true';
$info->action->procMemberModifyPassword->ruleset='modifyPassword';
$info->action->procMemberModifyPassword->method='';
$info->action->procMemberLeave = new stdClass;
$info->action->procMemberLeave->type='controller';
$info->action->procMemberLeave->grant='guest';
$info->action->procMemberLeave->standalone='true';
$info->action->procMemberLeave->ruleset='leaveMember';
$info->action->procMemberLeave->method='';
$info->action->procMemberInsertProfileImage = new stdClass;
$info->action->procMemberInsertProfileImage->type='controller';
$info->action->procMemberInsertProfileImage->grant='guest';
$info->action->procMemberInsertProfileImage->standalone='true';
$info->action->procMemberInsertProfileImage->ruleset='insertProfileImage';
$info->action->procMemberInsertProfileImage->method='';
$info->action->procMemberInsertImageName = new stdClass;
$info->action->procMemberInsertImageName->type='controller';
$info->action->procMemberInsertImageName->grant='guest';
$info->action->procMemberInsertImageName->standalone='true';
$info->action->procMemberInsertImageName->ruleset='insertImageName';
$info->action->procMemberInsertImageName->method='';
$info->action->procMemberInsertImageMark = new stdClass;
$info->action->procMemberInsertImageMark->type='controller';
$info->action->procMemberInsertImageMark->grant='guest';
$info->action->procMemberInsertImageMark->standalone='true';
$info->action->procMemberInsertImageMark->ruleset='insertImageMark';
$info->action->procMemberInsertImageMark->method='';
$info->action->procMemberDeleteProfileImage = new stdClass;
$info->action->procMemberDeleteProfileImage->type='controller';
$info->action->procMemberDeleteProfileImage->grant='guest';
$info->action->procMemberDeleteProfileImage->standalone='true';
$info->action->procMemberDeleteProfileImage->ruleset='';
$info->action->procMemberDeleteProfileImage->method='';
$info->action->procMemberDeleteImageName = new stdClass;
$info->action->procMemberDeleteImageName->type='controller';
$info->action->procMemberDeleteImageName->grant='guest';
$info->action->procMemberDeleteImageName->standalone='true';
$info->action->procMemberDeleteImageName->ruleset='';
$info->action->procMemberDeleteImageName->method='';
$info->action->procMemberDeleteImageMark = new stdClass;
$info->action->procMemberDeleteImageMark->type='controller';
$info->action->procMemberDeleteImageMark->grant='guest';
$info->action->procMemberDeleteImageMark->standalone='true';
$info->action->procMemberDeleteImageMark->ruleset='';
$info->action->procMemberDeleteImageMark->method='';
$info->action->procMemberSiteSignUp = new stdClass;
$info->action->procMemberSiteSignUp->type='controller';
$info->action->procMemberSiteSignUp->grant='guest';
$info->action->procMemberSiteSignUp->standalone='true';
$info->action->procMemberSiteSignUp->ruleset='';
$info->action->procMemberSiteSignUp->method='';
$info->action->procMemberSiteLeave = new stdClass;
$info->action->procMemberSiteLeave->type='controller';
$info->action->procMemberSiteLeave->grant='guest';
$info->action->procMemberSiteLeave->standalone='true';
$info->action->procMemberSiteLeave->ruleset='';
$info->action->procMemberSiteLeave->method='';
$info->action->procMemberScrapDocument = new stdClass;
$info->action->procMemberScrapDocument->type='controller';
$info->action->procMemberScrapDocument->grant='guest';
$info->action->procMemberScrapDocument->standalone='true';
$info->action->procMemberScrapDocument->ruleset='';
$info->action->procMemberScrapDocument->method='';
$info->action->procMemberDeleteScrap = new stdClass;
$info->action->procMemberDeleteScrap->type='controller';
$info->action->procMemberDeleteScrap->grant='guest';
$info->action->procMemberDeleteScrap->standalone='true';
$info->action->procMemberDeleteScrap->ruleset='';
$info->action->procMemberDeleteScrap->method='';
$info->action->procMemberSaveDocument = new stdClass;
$info->action->procMemberSaveDocument->type='controller';
$info->action->procMemberSaveDocument->grant='guest';
$info->action->procMemberSaveDocument->standalone='true';
$info->action->procMemberSaveDocument->ruleset='';
$info->action->procMemberSaveDocument->method='';
$info->action->procMemberDeleteSavedDocument = new stdClass;
$info->action->procMemberDeleteSavedDocument->type='controller';
$info->action->procMemberDeleteSavedDocument->grant='guest';
$info->action->procMemberDeleteSavedDocument->standalone='true';
$info->action->procMemberDeleteSavedDocument->ruleset='';
$info->action->procMemberDeleteSavedDocument->method='';
$info->action->procMemberFindAccount = new stdClass;
$info->action->procMemberFindAccount->type='controller';
$info->action->procMemberFindAccount->grant='guest';
$info->action->procMemberFindAccount->standalone='true';
$info->action->procMemberFindAccount->ruleset='findAccount';
$info->action->procMemberFindAccount->method='GET|POST';
$info->action->procMemberFindAccountByQuestion = new stdClass;
$info->action->procMemberFindAccountByQuestion->type='controller';
$info->action->procMemberFindAccountByQuestion->grant='guest';
$info->action->procMemberFindAccountByQuestion->standalone='true';
$info->action->procMemberFindAccountByQuestion->ruleset='';
$info->action->procMemberFindAccountByQuestion->method='GET|POST';
$info->action->procMemberAuthAccount = new stdClass;
$info->action->procMemberAuthAccount->type='controller';
$info->action->procMemberAuthAccount->grant='guest';
$info->action->procMemberAuthAccount->standalone='true';
$info->action->procMemberAuthAccount->ruleset='';
$info->action->procMemberAuthAccount->method='GET|POST';
$info->action->procMemberAuthEmailAddress = new stdClass;
$info->action->procMemberAuthEmailAddress->type='controller';
$info->action->procMemberAuthEmailAddress->grant='guest';
$info->action->procMemberAuthEmailAddress->standalone='true';
$info->action->procMemberAuthEmailAddress->ruleset='';
$info->action->procMemberAuthEmailAddress->method='GET|POST';
$info->action->procMemberResendAuthMail = new stdClass;
$info->action->procMemberResendAuthMail->type='controller';
$info->action->procMemberResendAuthMail->grant='guest';
$info->action->procMemberResendAuthMail->standalone='true';
$info->action->procMemberResendAuthMail->ruleset='resendAuthMail';
$info->action->procMemberResendAuthMail->method='';
$info->action->procMemberResetAuthMail = new stdClass;
$info->action->procMemberResetAuthMail->type='controller';
$info->action->procMemberResetAuthMail->grant='guest';
$info->action->procMemberResetAuthMail->standalone='true';
$info->action->procMemberResetAuthMail->ruleset='resetAuthMail';
$info->action->procMemberResetAuthMail->method='';
$info->action->procMemberSpammerManage = new stdClass;
$info->action->procMemberSpammerManage->type='controller';
$info->action->procMemberSpammerManage->grant='guest';
$info->action->procMemberSpammerManage->standalone='true';
$info->action->procMemberSpammerManage->ruleset='';
$info->action->procMemberSpammerManage->method='';
$info->action->procMemberAdminInsert = new stdClass;
$info->action->procMemberAdminInsert->type='controller';
$info->action->procMemberAdminInsert->grant='guest';
$info->action->procMemberAdminInsert->standalone='true';
$info->action->procMemberAdminInsert->ruleset='insertAdminMember';
$info->action->procMemberAdminInsert->method='';
$info->action->procMemberAdminDelete = new stdClass;
$info->action->procMemberAdminDelete->type='controller';
$info->action->procMemberAdminDelete->grant='guest';
$info->action->procMemberAdminDelete->standalone='true';
$info->action->procMemberAdminDelete->ruleset='';
$info->action->procMemberAdminDelete->method='';
$info->action->procMemberAdminInsertDefaultConfig = new stdClass;
$info->action->procMemberAdminInsertDefaultConfig->type='controller';
$info->action->procMemberAdminInsertDefaultConfig->grant='guest';
$info->action->procMemberAdminInsertDefaultConfig->standalone='true';
$info->action->procMemberAdminInsertDefaultConfig->ruleset='insertDefaultConfig';
$info->action->procMemberAdminInsertDefaultConfig->method='';
$info->action->procMemberAdminInsertSignupConfig = new stdClass;
$info->action->procMemberAdminInsertSignupConfig->type='controller';
$info->action->procMemberAdminInsertSignupConfig->grant='guest';
$info->action->procMemberAdminInsertSignupConfig->standalone='true';
$info->action->procMemberAdminInsertSignupConfig->ruleset='';
$info->action->procMemberAdminInsertSignupConfig->method='';
$info->action->procMemberAdminInsertLoginConfig = new stdClass;
$info->action->procMemberAdminInsertLoginConfig->type='controller';
$info->action->procMemberAdminInsertLoginConfig->grant='guest';
$info->action->procMemberAdminInsertLoginConfig->standalone='true';
$info->action->procMemberAdminInsertLoginConfig->ruleset='';
$info->action->procMemberAdminInsertLoginConfig->method='';
$info->action->procMemberAdminInsertDesignConfig = new stdClass;
$info->action->procMemberAdminInsertDesignConfig->type='controller';
$info->action->procMemberAdminInsertDesignConfig->grant='guest';
$info->action->procMemberAdminInsertDesignConfig->standalone='true';
$info->action->procMemberAdminInsertDesignConfig->ruleset='';
$info->action->procMemberAdminInsertDesignConfig->method='';
$info->action->procMemberAdminInsertGroup = new stdClass;
$info->action->procMemberAdminInsertGroup->type='controller';
$info->action->procMemberAdminInsertGroup->grant='guest';
$info->action->procMemberAdminInsertGroup->standalone='true';
$info->action->procMemberAdminInsertGroup->ruleset='insertGroup';
$info->action->procMemberAdminInsertGroup->method='';
$info->action->procMemberAdminUpdateGroup = new stdClass;
$info->action->procMemberAdminUpdateGroup->type='controller';
$info->action->procMemberAdminUpdateGroup->grant='guest';
$info->action->procMemberAdminUpdateGroup->standalone='true';
$info->action->procMemberAdminUpdateGroup->ruleset='updateGroup';
$info->action->procMemberAdminUpdateGroup->method='';
$info->action->procMemberAdminDeleteGroup = new stdClass;
$info->action->procMemberAdminDeleteGroup->type='controller';
$info->action->procMemberAdminDeleteGroup->grant='guest';
$info->action->procMemberAdminDeleteGroup->standalone='true';
$info->action->procMemberAdminDeleteGroup->ruleset='deleteGroup';
$info->action->procMemberAdminDeleteGroup->method='';
$info->action->procMemberAdminUpdateMembersGroup = new stdClass;
$info->action->procMemberAdminUpdateMembersGroup->type='controller';
$info->action->procMemberAdminUpdateMembersGroup->grant='guest';
$info->action->procMemberAdminUpdateMembersGroup->standalone='true';
$info->action->procMemberAdminUpdateMembersGroup->ruleset='manageMemberGroup';
$info->action->procMemberAdminUpdateMembersGroup->method='';
$info->action->procMemberAdminDeleteMembers = new stdClass;
$info->action->procMemberAdminDeleteMembers->type='controller';
$info->action->procMemberAdminDeleteMembers->grant='guest';
$info->action->procMemberAdminDeleteMembers->standalone='true';
$info->action->procMemberAdminDeleteMembers->ruleset='';
$info->action->procMemberAdminDeleteMembers->method='';
$info->action->procMemberAdminInsertJoinForm = new stdClass;
$info->action->procMemberAdminInsertJoinForm->type='controller';
$info->action->procMemberAdminInsertJoinForm->grant='guest';
$info->action->procMemberAdminInsertJoinForm->standalone='true';
$info->action->procMemberAdminInsertJoinForm->ruleset='insertJoinForm';
$info->action->procMemberAdminInsertJoinForm->method='';
$info->action->procMemberAdminUpdateJoinForm = new stdClass;
$info->action->procMemberAdminUpdateJoinForm->type='controller';
$info->action->procMemberAdminUpdateJoinForm->grant='guest';
$info->action->procMemberAdminUpdateJoinForm->standalone='true';
$info->action->procMemberAdminUpdateJoinForm->ruleset='';
$info->action->procMemberAdminUpdateJoinForm->method='';
$info->action->procMemberAdminDeleteJoinForm = new stdClass;
$info->action->procMemberAdminDeleteJoinForm->type='controller';
$info->action->procMemberAdminDeleteJoinForm->grant='guest';
$info->action->procMemberAdminDeleteJoinForm->standalone='true';
$info->action->procMemberAdminDeleteJoinForm->ruleset='';
$info->action->procMemberAdminDeleteJoinForm->method='';
$info->action->procMemberAdminUpdateDeniedNickName = new stdClass;
$info->action->procMemberAdminUpdateDeniedNickName->type='controller';
$info->action->procMemberAdminUpdateDeniedNickName->grant='guest';
$info->action->procMemberAdminUpdateDeniedNickName->standalone='true';
$info->action->procMemberAdminUpdateDeniedNickName->ruleset='';
$info->action->procMemberAdminUpdateDeniedNickName->method='';
$info->action->procMemberAdminInsertDeniedID = new stdClass;
$info->action->procMemberAdminInsertDeniedID->type='controller';
$info->action->procMemberAdminInsertDeniedID->grant='guest';
$info->action->procMemberAdminInsertDeniedID->standalone='true';
$info->action->procMemberAdminInsertDeniedID->ruleset='insertDeniedId';
$info->action->procMemberAdminInsertDeniedID->method='';
$info->action->procMemberAdminUpdateDeniedID = new stdClass;
$info->action->procMemberAdminUpdateDeniedID->type='controller';
$info->action->procMemberAdminUpdateDeniedID->grant='guest';
$info->action->procMemberAdminUpdateDeniedID->standalone='true';
$info->action->procMemberAdminUpdateDeniedID->ruleset='';
$info->action->procMemberAdminUpdateDeniedID->method='';
$info->action->procMemberAdminUpdateGroupOrder = new stdClass;
$info->action->procMemberAdminUpdateGroupOrder->type='controller';
$info->action->procMemberAdminUpdateGroupOrder->grant='guest';
$info->action->procMemberAdminUpdateGroupOrder->standalone='true';
$info->action->procMemberAdminUpdateGroupOrder->ruleset='';
$info->action->procMemberAdminUpdateGroupOrder->method='';
$info->action->procMemberAdminSelectedMemberManage = new stdClass;
$info->action->procMemberAdminSelectedMemberManage->type='controller';
$info->action->procMemberAdminSelectedMemberManage->grant='guest';
$info->action->procMemberAdminSelectedMemberManage->standalone='true';
$info->action->procMemberAdminSelectedMemberManage->ruleset='updateSeletecdMemberInfo';
$info->action->procMemberAdminSelectedMemberManage->method='';
$info->action->procMemberAdminGroupConfig = new stdClass;
$info->action->procMemberAdminGroupConfig->type='controller';
$info->action->procMemberAdminGroupConfig->grant='guest';
$info->action->procMemberAdminGroupConfig->standalone='true';
$info->action->procMemberAdminGroupConfig->ruleset='';
$info->action->procMemberAdminGroupConfig->method='';
return $info;