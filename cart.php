<?php
/**
 *
 * 
 * 
 * 
 */
 
class Cart
{
	/*********************Construct()******************************/
	function __construct()
    { 
    	if(!isset($_COOKIE["PHPSESSID"]))
		{
		  session_start();
		}
    }


    /**
     * @author                          Madhuranga Senadheera
     * Purpose of the function          Description
     * @variable 						: type
     * @return 							return_type 
     */
    public function add($item=null)
    {
    	 
    }
    /*---------------End of add($item=null)---------------*/


    /**
     * @author                          Madhuranga Senadheera
     * Purpose of the function          Description
     * @variable 						: type
     * @return 							return_type 
     */
    public function remove($id=null)
    {
    	
    }
    /*---------------End of remove($id=null)---------------*/


    /**
     * @author                          Madhuranga Senadheera
     * Purpose of the function          Description
     * @variable 						: type
     * @return 							return_type 
     */
    public function clear_all()
    {
    	
    }
    /*---------------End of clear_all()---------------*/
    
    
    
}// End Cart --------------Class{}
//Owner : Madhuranga Senadheera

?>