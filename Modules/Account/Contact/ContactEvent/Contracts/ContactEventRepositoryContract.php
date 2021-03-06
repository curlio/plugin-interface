<?php
namespace Plenty\Modules\Account\Contact\ContactEvent\Contracts;

use Plenty\Modules\Account\Contact\ContactEvent\Models\ContactEvent;
use Plenty\Repositories\Models\PaginatedResult;

/**
 * The ContactEventRepositoryContract is the interface for the contact event repository. This interface allows to list contact events.
 */
interface ContactEventRepositoryContract 
{

	/**
	 * Lists contact events identified by the contact that is currently logged into the system.
	 */
	public function listEvents(
		array $columns = [], 
		int $page = 1, 
		int $itemsPerPage = 50
	):PaginatedResult;

	/**
	 * Lists contact events by contact id.
	 */
	public function listEventsByContactId(
		int $contactId, 
		array $columns = [], 
		int $page = 1, 
		int $itemsPerPage = 50
	):PaginatedResult;

	/**
	 * Adds an entry to the table customer events by contact id.
	 */
	public function createEvent(
		array $data
	):ContactEvent;

	/**
	 * Updates an entry of the table customer events by contact event id.
	 */
	public function updateEvent(
		int $contactEventId, 
		array $data
	):ContactEvent;

	/**
	 * Deletes an entry of the table customer events by contact event id.
	 */
	public function deleteEvent(
		int $contactEventId
	);

}