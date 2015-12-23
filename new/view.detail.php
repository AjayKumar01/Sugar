<?php
//if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
if(!defined('sugarEntry'))define('sugarEntry',true);
/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */

//require_once('modules/Users/UserViewHelper.php');
require_once('modules/Users/views/view.detail.php');

class customUsersViewDetail extends UsersViewDetail {
	
	
 	function customUsersViewDetail(){
 		parent::UsersViewDetail();
 	}

    

    function display() {
      global $current_user;
		parent::display();
        //return parent::display();
    //    echo "text";
    $isAdmin = is_admin($current_user);
		if(!$isAdmin){		
        $hideField = <<<EOD
			<script type="text/javascript">
				$("#detailpanel_2").hide();
			</script>
EOD;
echo $hideField;
    }
}


    /**
     * getHelpText
     *
     * This is a protected function that returns the help text portion.  It is called from getModuleTitle.
     * We override the function from SugarView.php to make sure the create link only appears if the current user
     * meets the valid criteria.
     *
     * @param $module String the formatted module name
     * @return $theTitle String the HTML for the help text
     */
 

}
