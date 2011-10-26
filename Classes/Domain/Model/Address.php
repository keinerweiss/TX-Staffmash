<?php
/***************************************************************
 *  Copyright notice
 *
 *  (c) 2011 Ruediger Marwein <ruediger.marwein@googlemail.com>
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
 ***************************************************************/

/**
 * A Address (tt_address)
 *
 * @package RmStaffMash
 * @subpackage Domain\Model
 * @scope prototype
 * @entity
 * @api
 */
class Tx_RmStaffMash_Domain_Model_Address extends Tx_Extbase_DomainObject_AbstractEntity {

	
	/**
	 * @var int
	 */
	protected $uid;
	
	/**
	 * @var string
	 */
	protected $name;
	
	/**
	 * @var string
	 */
	protected $firstName;

	/**
	 * @var string
	 */
	protected $lastName;
	
	/**
	 * @var string
	 */
	protected $image;
	
	/**
	 * @var string
	 */
	protected $gender;
	
	/**
	 * Constructs a new Address
	 *
	 * @api
	 */
	public function __construct() {
		$this->firstName = '';
		$this->lastName = '';
		$this->image = '';
		$this->gender = 'm';
	}

	/**
	 * Sets the name value
	 *
	 * @param string $firstname
	 * @return void
	 * @api
	 */
	public function setName($name) {
		$this->name = $name;
	}

	/**
	 * Returns the name value
	 *
	 * @return string
	 * @api
	 */
	public function getName() {
		return $this->name;
	}
	
	/**
	 * Sets the firstName value
	 *
	 * @param string $firstname
	 * @return void
	 * @api
	 */
	public function setFirstName($firstname) {
		$this->firstName = $firstname;
	}

	/**
	 * Returns the firstName value
	 *
	 * @return string
	 * @api
	 */
	public function getFirstName() {
		return $this->firstName;
	}
	
	/**
	 * Sets the lastName value
	 *
	 * @param string $lastname
	 * @return void
	 * @api
	 */
	public function setLastName($lastname) {
		$this->lastName = $lastname;
	}

	/**
	 * Returns the lastName value
	 *
	 * @return string
	 * @api
	 */
	public function getLastName() {
		return $this->lastName;
	}

	/**
	 * Sets the gender value
	 *
	 * @param string $gender
	 * @return void
	 * @api
	 */
	public function setGender($gender) {
		$this->gender = $gender;
	}

	/**
	 * Returns the firstName value
	 *
	 * @return string
	 * @api
	 */
	public function getGender() {
		return $this->gender;
	}
	
	/**
	 * Sets the image value
	 *
	 * @param string $image
	 * @return void
	 * @api
	 */
	public function setImage($image) {
		$this->image = $image;
	}
	
	/**
	 * Returns the image value
	 *
	 * @return string
	 * @api
	 */
	public function getImage() {
		return $this->image;
	}

}
?>