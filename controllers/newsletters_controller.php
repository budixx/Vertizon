<?php
class NewslettersController extends AppController {

	var $name = 'Newsletters';
	
	function add() {
		if(!empty($this->data)) {
			$this->Newsletter->create();
			if($this->Newsletter->save($this->data)) {
				$this->flashWarning('Thank you for register to our newsletter !');
			}
			else {
				$this->flashWarning('You already registered to our newsletter !');
			}
		}
		else {
			$this->flashWarning('Sorry your email cannot be registered !');
		}
	}
	
	function admin_index() {
		$this->Newsletter->recursive = 0;
		$this->set('newsletters', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid newsletter', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('newsletter', $this->Newsletter->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->Newsletter->create();
			if ($this->Newsletter->save($this->data)) {
				$this->Session->setFlash(__('The newsletter has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The newsletter could not be saved. Please, try again.', true));
			}
		}
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid newsletter', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Newsletter->save($this->data)) {
				$this->Session->setFlash(__('The newsletter has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The newsletter could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Newsletter->read(null, $id);
		}
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for newsletter', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Newsletter->delete($id)) {
			$this->Session->setFlash(__('Newsletter deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Newsletter was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>