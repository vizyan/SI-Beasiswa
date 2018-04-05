<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Alert
{
    protected $CI;

    public function __construct()
    {
        $this->CI =& get_instance();
    }

    public function failedMessage($message){
        return '<div class="alert alert-danger">
                    <div class="alert-icon">
                        <i class="material-icons">error_outline</i>
                    </div>
                    <button type="button" aria-hidden="true" class="close" data-dismiss="alert">×</button>
                    <span>'.$message.'</span>
	            </div>';
    }

    public function successMessage($message){
        return '<div class="alert alert-success">
                    <div class="alert-icon">
	                   <i class="material-icons">check</i>
                    </div>
	               <button type="button" aria-hidden="true" class="close" data-dismiss="alert">×</button>
	               <span>'.$message.'</span>
	            </div>';
    }
}
