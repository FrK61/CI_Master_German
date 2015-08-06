<?php if ( ! defined('BASEPATH')) exit('No direct script access  allowed'); 

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


class Admin_Controller extends MY_Controller
{
  function __construct()
  {
    parent::__construct();
    echo 'This is from admin controller';
  }
}