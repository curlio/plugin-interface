<?php
namespace Plenty\Modules\Tag\Models;


/**
 * The tag relationship model.
 */
abstract class TagRelationship 
{

	const TAG_TYPE_CATEGORY = 'category';

	const TAG_TYPE_TICKET = 'ticket';

	const TAG_TYPE_ITEM = 'item';

	const TAG_TYPE_BOARD = 'board';

	const TAG_TYPE_CONTACT = 'contact';

	const RELATIONSHIP_AVAILABILITY_RELATION = 'availability';

	const RELATIONSHIP_TAG_RELATION = 'tag';

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$tagId;
	public		$tagType;
	public		$relationshipValue;
	public		$relationshipUUID5;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}