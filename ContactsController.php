<?php
namespace App\Controller;

use App\Controller\AppController;
use App\Form\ContactForm;


/**
 * Contacts Controller
 *
 * @property \App\Model\Table\ContactsTable $Contacts
 */
class ContactsController extends AppController
{
	public function index() 
	{
		$form = new ContactForm();
		if ($this->request->is('post')) 
		{
			if ($form->execute($this->request->data)) {
				$this->Flash->success('We have received your contact request.');
			} else {
				$this->Flash->error('Check the form.');
			}
		}
		$this->set('form', $form);
	}
}
