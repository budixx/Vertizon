<?php
class PcategoriesController extends AppController {

	var $name = 'Pcategories';
	var $helpers = array('Media.Media');

	function index() {
		$this->Pcategory->recursive = 0;
		
		$body = 'product';
		$pcategories = $this->paginate();
		
		$this->set(compact('body','pcategories'));
	}

	function admin_index() {
		$this->Pcategory->recursive = 0;
		$this->set('pcategories', $this->paginate());
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->Pcategory->create();
			if ($this->Pcategory->save($this->data)) {
				$this->Session->setFlash(sprintf(__('The %s has been saved', true), 'pcategory'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'pcategory'));
			}
		}
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'pcategory'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Pcategory->save($this->data)) {
				$this->Session->setFlash(sprintf(__('The %s has been saved', true), 'pcategory'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'pcategory'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Pcategory->read(null, $id);
		}
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid id for %s', true), 'pcategory'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Pcategory->delete($id)) {
			$this->Session->setFlash(sprintf(__('%s deleted', true), 'Pcategory'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(sprintf(__('%s was not deleted', true), 'Pcategory'));
		$this->redirect(array('action' => 'index'));
	}
}
?>