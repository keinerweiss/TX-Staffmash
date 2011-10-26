<?php
/* * *************************************************************
 *  Copyright notice
 *
 *  (c) 2011 Ruediger Marwein
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 * ************************************************************* */

/**
 * All to Staffmash
 *
 * @author     Ruediger Marwein
 * @subpackage Controller
 */
class Tx_RmStaffmash_Controller_StaffmashController extends Tx_Extbase_MVC_Controller_ActionController {

	/**
	 * @var Tx_RmStaffmash_Domain_Repository_AddressRepository
	 */
	protected $addressRepository;
	
	/**
	 * Initializes the current action
	 *
	 * @return void
	 */
	public function initializeAction() {
		ini_set('display_errors',1);
		error_reporting(E_ERROR);
		$this->objectManager = t3lib_div::makeInstance('Tx_Extbase_Object_ObjectManager');
		$this->addressRepository = t3lib_div::makeInstance('Tx_RmStaffmash_Domain_Repository_AddressRepository');
		//$this->addressRepository = $this->objectManager->create('Tx_RmStaffmash_Domain_Repository_AddressRepository');
	}

	/**
	 * Index action for this controller.
	 *
	 * @return string The rendered view
	 */
	public function indexAction() {
		// get pairs from session, else load
		$pairs = NULL;
		// $pairs = $GLOBALS['TSFE']->fe_user->getKey('ses','wt_staffmash_pairs');
		if(!$pairs) {
			$pairs = $this->buildShuffledPairs();
		}
		// TODO: action still incomplete
		$this->view->assign('pairs', $pairs);
		
		// initialize result table with pair and hit - empty first
		// put next/first pair in result table, no result
		// remove currently queried pair from list
		
		// store to session
		$GLOBALS['TSFE']->fe_user->setKey('ses','wt_staffmash_pairs',$pairs);
		$GLOBALS['TSFE']->storeSessionData();

		// accept post
		// check pair. if match, put "one" to the result table
		// put next/first pair in result table, no result
		
		// output pair
	}
	
	/**
	 * Returns an array of pairs of addresses.
	 * 
	 * Builds random male pairs and female pairs.
	 * Last pair might be male/female if amount of addresses is not even.
	 * Each pair is an array.
	 * 
	 * @return array
	 */
	protected function buildShuffledPairs() {
		// get random Addresses from tt_address,  separated by gender
		// TODO: IDs would be better due to memory usage
		
		$pairs = array();
		$males = $this->addressRepository->findByGender('m');
		$females = $this->addressRepository->findByGender('f');
		
		foreach($females as $female) {
			echo "Vorname: " . $female->getFirstName() . "<br />"; 
			echo "Nachname: " . $female->getLastName() . "<br />";
		}
		
		/*
		// shuffle mail and female
		shuffle($males);
		shuffle($females);
		
		// build male and female pairs 
		
		while(count($males)>=2) {
			$pairs[] = array(array_shift($males),array_shift($males));
		}
		while(count($females)>=2) {
			$pairs[] = array(array_shift($females),array_shift($females));
		}
		
		// build pairs with leftovers
		// now male/female pair might be generated
		$rest = $males + $females;
		shuffle($rest);
		while(count($rest)>=2) {
			$pairs[] = array(array_shift($rest),array_shift($rest));
		}
		// use random duplicate for last still leftover
		// TODO: check if this case is actually possible
		if(count($rest)) {
			$random = array_rand($pairs);
			$pairs[] = array(array_shift($rest),$random[rand(0,1)]);
		}
		// shuffle pairs
		shuffle($pairs);

		return $pairs;
		*/
	}

}