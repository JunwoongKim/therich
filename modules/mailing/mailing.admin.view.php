<?php
class mailingAdminView extends mailing {

    function init() {
    }

    function dispMailingAdminInsert() {
        // 설정 정보를 받아옴 (module model 객체를 이용)
        $oModuleModel = &getModel('module');
        $config = $oModuleModel->getModuleConfig('mailing');
        Context::set('config',$config);
        
        $groupOutput = executeQueryArray('mailing.getGroups');
        if(!$groupOutput->data) $groupOutput->data = array();
        Context::set('group_list', $groupOutput->data);
        
        // 템플릿 파일 지정
        $this->setTemplatePath($this->module_path.'tpl');
        $this->setTemplateFile('mailing');
    }

}
?>
