<?php if ( ! defined('BASEPATH')) exit('No direct script access  allowed'); 

/*
 * MY_Controller agiert als ein übergreifender Elterncontroller für alle Controller
 * und erlaubt den Usern einzuloggen bevor sie Zugriff erhalten.
 */
 
  
class MY_Controller extends CI_Controller {
    
    
  function __construct()
    {
    parent::__construct();
  
  }  
  
}

class Admin_Controller extends MY_Controller
{
  function __construct()
  {
    parent::__construct();
    echo 'This is from admin controller';
  }
}

class Public_Controller extends MY_Controller
{
  function __construct()
  {
    parent::__construct();
    echo 'This is from public controller';
  }
}