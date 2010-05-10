<?php
class TypesController extends AppController {

	var $name = 'Types';

	function admin_index() {
		$this->Type->recursive = 0;
		$this->set('types', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'type'));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('type', $this->Type->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->Type->create();
			if ($this->Type->save($this->data)) {
				$this->Session->setFlash(sprintf(__('The %s has been saved', true), 'type'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'type'));
			}
		}
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'type'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Type->save($this->data)) {
				$this->Session->setFlash(sprintf(__('The %s has been saved', true), 'type'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'type'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Type->read(null, $id);
		}
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid id for %s', true), 'type'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Type->delete($id)) {
			$this->Session->setFlash(sprintf(__('%s deleted', true), 'Type'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(sprintf(__('%s was not deleted', true), 'Type'));
		$this->redirect(array('action' => 'index'));
	}
}
?>