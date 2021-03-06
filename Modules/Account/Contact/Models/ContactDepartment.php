<?php
namespace Plenty\Modules\Account\Contact\Models;


/**
 * contact department model
 */
abstract class ContactDepartment 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$id;
	public		$position;
	public		$names;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}