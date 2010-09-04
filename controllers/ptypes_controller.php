<?php
class PtypesController extends AppController {

	var $name = 'Ptypes';
	var $helpers = array('Media.Media');

	function admin_index() {
		$this->Ptype->recursive = 0;
		$this->set('ptypes', $this->paginate());
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->Ptype->create();
			if ($this->Ptype->save($this->data)) {
				$this->Session->setFlash(sprintf(__('The %s has been saved', true), 'ptype'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'ptype'));
			}
		}
		$pbrands = $this->Ptype->Pbrand->find('list');
		$this->set(compact('pbrands'));
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'ptype'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Ptype->save($this->data)) {
				$this->Session->setFlash(sprintf(__('The %s has been saved', true), 'ptype'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'ptype'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Ptype->read(null, $id);
		}
		$pbrands = $this->Ptype->Pbrand->find('list');
		$this->set(compact('pbrands'));
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid id for %s', true), 'ptype'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Ptype->delete($id)) {
			$this->Session->setFlash(sprintf(__('%s deleted', true), 'Ptype'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(sprintf(__('%s was not deleted', true), 'Ptype'));
		$this->redirect(array('action' => 'index'));
	}
}
?>