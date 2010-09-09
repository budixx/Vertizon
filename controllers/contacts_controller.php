<?php
class ContactsController extends AppController {

	var $name = 'Contacts';

	function index() {
		$body = 'about';
		
		if (!empty($this->data)) {
			$this->Contact->create();
			if ($this->Contact->save($this->data)) {
				$this->flashWarning('Your message has been saved, thank you !',array('action' => 'index'));
				
				#setting up email notification for user
				$details['to'] = $this->data['Contact']['email'];
				$details['subject'] = 'Thank you for your message !';
				$details['template'] = 'contact_user';
				$details['sendAs'] = 'html';
				$this->_sendemail($details,$this->data);
				
				#setting up email notification for staff
				$details['to'] = 'support@vertizon-indonesia.com';
				$details['subject'] = 'New message !';
				$details['template'] = 'contact_admin';
				$details['sendAs'] = 'html';
				$this->_sendemail($details,$this->data);
			}
			else
				$this->Session->setFlash(sprintf(__('Your message could not be saved. Please, correct the errors below.', true), 'contact'));
		}
		$menu = ClassRegistry::init('Menus')->find('first',array('conditions' => array('Menus.name' => 'Contact Us')));
		$this->set(compact('body','menu'));
	}

	function admin_index() {
		$this->Contact->recursive = 0;
		$this->set('contacts', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'contact'));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('contact', $this->Contact->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->Contact->create();
			if ($this->Contact->save($this->data)) {
				$this->Session->setFlash(sprintf(__('The %s has been saved', true), 'contact'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'contact'));
			}
		}
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'contact'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Contact->save($this->data)) {
				$this->Session->setFlash(sprintf(__('The %s has been saved', true), 'contact'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'contact'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Contact->read(null, $id);
		}
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid id for %s', true), 'contact'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Contact->delete($id)) {
			$this->Session->setFlash(sprintf(__('%s deleted', true), 'Contact'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(sprintf(__('%s was not deleted', true), 'Contact'));
		$this->redirect(array('action' => 'index'));
	}
}
?>