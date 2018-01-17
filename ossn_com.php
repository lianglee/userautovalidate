<?php
/**
 * Open Source Social Network
 *
 * @package   Open Source Social Network
 * @author    Open Social Website Core Team <info@informatikon.com>
 * @copyright 2014 iNFORMATIKON TECHNOLOGIES
 * @license   General Public Licence http://www.opensource-socialnetwork.org/licence
 * @link      http://www.opensource-socialnetwork.org/licence
 */
 /**
  * User auto validate
  *
  * @return void;
  */
 function userautovalidate(){
	ossn_add_hook('user', 'send:activation', 'userautovalidate_disable_confirmation');
	ossn_add_hook('user', 'create:validated', 'userautovalidate_enable_member');
 }
 /**
  * userautovalidate_disable_confirmation
  *
  * Disable sending validation email
  *
  * @note don't call this function directly
  * @return false.
  */
 function userautovalidate_disable_confirmation(){
	return false; 
 }
  /**
  * userautovalidate_enable_member
  *
  * Enable instant membership
  *
  * @note don't call this function directly
  * @return true.
  */
 function userautovalidate_enable_member(){
	return true; 
 } 
//initilize userautovalidate
ossn_register_callback('ossn', 'init', 'userautovalidate');
