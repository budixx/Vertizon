<?php
class ContactsController extends AppController {

	var $name = 'Contacts';

	function index() {
		$this->Contact->recursive = 0;
		$this->set('contacts', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'contact'));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('contact', $this->Contact->read(null, $id));
	}

	function add() {
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

	function edit($id = null) {
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

	function delete($id = null) {
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