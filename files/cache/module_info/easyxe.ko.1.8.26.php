<?php if(!defined("__XE__")) exit();
$info = new stdClass;
$info->default_index_act = '';
$info->setup_index_act='';
$info->simple_setup_index_act='';
$info->admin_index_act = 'dispEasyxeAdminSetting';
$info->action = new stdClass;
$info->action->dispEasyxeAdminSetting = new stdClass;
$info->action->dispEasyxeAdminSetting->type='view';
$info->action->dispEasyxeAdminSetting->grant='guest';
$info->action->dispEasyxeAdminSetting->standalone='true';
$info->action->dispEasyxeAdminSetting->ruleset='';
$info->action->dispEasyxeAdminSetting->method='';
$info->action->dispEasyxeAdminMenuTree = new stdClass;
$info->action->dispEasyxeAdminMenuTree->type='view';
$info->action->dispEasyxeAdminMenuTree->grant='guest';
$info->action->dispEasyxeAdminMenuTree->standalone='true';
$info->action->dispEasyxeAdminMenuTree->ruleset='';
$info->action->dispEasyxeAdminMenuTree->method='';
$info->action->dispEasyxeAdminCurrentPageDesign = new stdClass;
$info->action->dispEasyxeAdminCurrentPageDesign->type='view';
$info->action->dispEasyxeAdminCurrentPageDesign->grant='guest';
$info->action->dispEasyxeAdminCurrentPageDesign->standalone='true';
$info->action->dispEasyxeAdminCurrentPageDesign->ruleset='';
$info->action->dispEasyxeAdminCurrentPageDesign->method='';
$info->action->dispEasyxeAdminViewPageSource = new stdClass;
$info->action->dispEasyxeAdminViewPageSource->type='view';
$info->action->dispEasyxeAdminViewPageSource->grant='guest';
$info->action->dispEasyxeAdminViewPageSource->standalone='true';
$info->action->dispEasyxeAdminViewPageSource->ruleset='';
$info->action->dispEasyxeAdminViewPageSource->method='';
$info->action->dispEasyxeAdminViewMobilePageSource = new stdClass;
$info->action->dispEasyxeAdminViewMobilePageSource->type='view';
$info->action->dispEasyxeAdminViewMobilePageSource->grant='guest';
$info->action->dispEasyxeAdminViewMobilePageSource->standalone='true';
$info->action->dispEasyxeAdminViewMobilePageSource->ruleset='';
$info->action->dispEasyxeAdminViewMobilePageSource->method='';
$info->action->dispEasyxeAdminGenerateCodeInPage = new stdClass;
$info->action->dispEasyxeAdminGenerateCodeInPage->type='view';
$info->action->dispEasyxeAdminGenerateCodeInPage->grant='guest';
$info->action->dispEasyxeAdminGenerateCodeInPage->standalone='true';
$info->action->dispEasyxeAdminGenerateCodeInPage->ruleset='';
$info->action->dispEasyxeAdminGenerateCodeInPage->method='';
$info->action->dispEasyxeAdminPageAuthorizeLog = new stdClass;
$info->action->dispEasyxeAdminPageAuthorizeLog->type='view';
$info->action->dispEasyxeAdminPageAuthorizeLog->grant='guest';
$info->action->dispEasyxeAdminPageAuthorizeLog->standalone='true';
$info->action->dispEasyxeAdminPageAuthorizeLog->ruleset='';
$info->action->dispEasyxeAdminPageAuthorizeLog->method='';
$info->action->dispEasyxeAdminMemberActivity = new stdClass;
$info->action->dispEasyxeAdminMemberActivity->type='view';
$info->action->dispEasyxeAdminMemberActivity->grant='guest';
$info->action->dispEasyxeAdminMemberActivity->standalone='true';
$info->action->dispEasyxeAdminMemberActivity->ruleset='';
$info->action->dispEasyxeAdminMemberActivity->method='';
$info->action->dispEasyxeAdminChangeModuleLayout = new stdClass;
$info->action->dispEasyxeAdminChangeModuleLayout->type='view';
$info->action->dispEasyxeAdminChangeModuleLayout->grant='guest';
$info->action->dispEasyxeAdminChangeModuleLayout->standalone='true';
$info->action->dispEasyxeAdminChangeModuleLayout->ruleset='';
$info->action->dispEasyxeAdminChangeModuleLayout->method='';
$info->action->getEasyxeAdminMenuItems = new stdClass;
$info->action->getEasyxeAdminMenuItems->type='model';
$info->action->getEasyxeAdminMenuItems->grant='guest';
$info->action->getEasyxeAdminMenuItems->standalone='true';
$info->action->getEasyxeAdminMenuItems->ruleset='';
$info->action->getEasyxeAdminMenuItems->method='';
$info->action->getEasyxeAdminMemberSearchTpl = new stdClass;
$info->action->getEasyxeAdminMemberSearchTpl->type='model';
$info->action->getEasyxeAdminMemberSearchTpl->grant='guest';
$info->action->getEasyxeAdminMemberSearchTpl->standalone='true';
$info->action->getEasyxeAdminMemberSearchTpl->ruleset='';
$info->action->getEasyxeAdminMemberSearchTpl->method='';
$info->action->getEasyxeAdminMemberSearchResult = new stdClass;
$info->action->getEasyxeAdminMemberSearchResult->type='model';
$info->action->getEasyxeAdminMemberSearchResult->grant='guest';
$info->action->getEasyxeAdminMemberSearchResult->standalone='true';
$info->action->getEasyxeAdminMemberSearchResult->ruleset='';
$info->action->getEasyxeAdminMemberSearchResult->method='';
$info->action->getEasyxeAdminInsertMemberFormTpl = new stdClass;
$info->action->getEasyxeAdminInsertMemberFormTpl->type='model';
$info->action->getEasyxeAdminInsertMemberFormTpl->grant='guest';
$info->action->getEasyxeAdminInsertMemberFormTpl->standalone='true';
$info->action->getEasyxeAdminInsertMemberFormTpl->ruleset='';
$info->action->getEasyxeAdminInsertMemberFormTpl->method='';
$info->action->getEasyxeAdminAddonList = new stdClass;
$info->action->getEasyxeAdminAddonList->type='model';
$info->action->getEasyxeAdminAddonList->grant='guest';
$info->action->getEasyxeAdminAddonList->standalone='true';
$info->action->getEasyxeAdminAddonList->ruleset='';
$info->action->getEasyxeAdminAddonList->method='';
$info->action->getEasyxeAdminLayoutUsingModule = new stdClass;
$info->action->getEasyxeAdminLayoutUsingModule->type='model';
$info->action->getEasyxeAdminLayoutUsingModule->grant='guest';
$info->action->getEasyxeAdminLayoutUsingModule->standalone='true';
$info->action->getEasyxeAdminLayoutUsingModule->ruleset='';
$info->action->getEasyxeAdminLayoutUsingModule->method='';
$info->action->procEasyxeAdminSaveSetting = new stdClass;
$info->action->procEasyxeAdminSaveSetting->type='controller';
$info->action->procEasyxeAdminSaveSetting->grant='guest';
$info->action->procEasyxeAdminSaveSetting->standalone='true';
$info->action->procEasyxeAdminSaveSetting->ruleset='';
$info->action->procEasyxeAdminSaveSetting->method='';
$info->action->procEasyxeAdminSaveMessageSetting = new stdClass;
$info->action->procEasyxeAdminSaveMessageSetting->type='controller';
$info->action->procEasyxeAdminSaveMessageSetting->grant='guest';
$info->action->procEasyxeAdminSaveMessageSetting->standalone='true';
$info->action->procEasyxeAdminSaveMessageSetting->ruleset='';
$info->action->procEasyxeAdminSaveMessageSetting->method='';
$info->action->procEasyxeAdminInsertDeniedIP = new stdClass;
$info->action->procEasyxeAdminInsertDeniedIP->type='controller';
$info->action->procEasyxeAdminInsertDeniedIP->grant='guest';
$info->action->procEasyxeAdminInsertDeniedIP->standalone='true';
$info->action->procEasyxeAdminInsertDeniedIP->ruleset='';
$info->action->procEasyxeAdminInsertDeniedIP->method='';
$info->action->procEasyxeAdminInsertDeniedWord = new stdClass;
$info->action->procEasyxeAdminInsertDeniedWord->type='controller';
$info->action->procEasyxeAdminInsertDeniedWord->grant='guest';
$info->action->procEasyxeAdminInsertDeniedWord->standalone='true';
$info->action->procEasyxeAdminInsertDeniedWord->ruleset='';
$info->action->procEasyxeAdminInsertDeniedWord->method='';
$info->action->procEasyxeAdminChangeModuleLayout = new stdClass;
$info->action->procEasyxeAdminChangeModuleLayout->type='controller';
$info->action->procEasyxeAdminChangeModuleLayout->grant='guest';
$info->action->procEasyxeAdminChangeModuleLayout->standalone='true';
$info->action->procEasyxeAdminChangeModuleLayout->ruleset='';
$info->action->procEasyxeAdminChangeModuleLayout->method='';
$info->action->procEasyxeAdminToggleAddonActivate = new stdClass;
$info->action->procEasyxeAdminToggleAddonActivate->type='controller';
$info->action->procEasyxeAdminToggleAddonActivate->grant='guest';
$info->action->procEasyxeAdminToggleAddonActivate->standalone='true';
$info->action->procEasyxeAdminToggleAddonActivate->ruleset='';
$info->action->procEasyxeAdminToggleAddonActivate->method='POST';
$info->action->procEasyxePageAuthorize = new stdClass;
$info->action->procEasyxePageAuthorize->type='controller';
$info->action->procEasyxePageAuthorize->grant='guest';
$info->action->procEasyxePageAuthorize->standalone='true';
$info->action->procEasyxePageAuthorize->ruleset='';
$info->action->procEasyxePageAuthorize->method='POST';
return $info;