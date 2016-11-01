<?php
class mailing extends ModuleObject {
    function moduleInstall() {
        $oModuleController = &getController('module');
        $oModuleController->insertActionForward('mailing', 'view', 'dispMailingAdminInsert');

        return new Object();
    }

    function checkUpdate() {
        $oModuleModel = &getModel('module');
        $act = $oModuleModel->getActionForward('dispMailingAdminInsert');
        if(!$act) return true;
        
        return false;
    }

    function moduleUpdate() {
    	$this->moduleInstall();
        return new Object(0, 'success_updated');
    }

    function recompileCache() {
    }
}
?>