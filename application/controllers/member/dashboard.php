<?php
/**
*
*
* @copyright  2015
* @license    None
* @version    1.0
* @link       None
* @since      Class available since Release 1.0
*
**/     
        
/***********************************************************************************/
/*                                                                                 */
/* File Name     : Dashboard.php                                           */
/* Purpose       :                                                                 */
/*                                                                                 */
/*                                                                                 */
/***********************************************************************************/
class Dashboard extends Member_Controller
{
    
    function __construct()
    {
        parent::__construct(); 
	}	
 

    /**
     * @author                          Madhuranga Senadheera
     * Purpose of the function          Description
     * @variable                         : type
     * @return                             return_type 
     */
    public function index()
    {
        $this->load->view('member/dashboard_view');
    }
    /*---------------End of index()---------------*/


}

/* End of file User.php */
/* Location: ./system/application/controllers/User.php */