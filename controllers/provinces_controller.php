<?php
class ProvincesController extends AppController {

	var $name = 'Provinces';

	function admin_index() {
		$this->Province->recursive = 0;
		$this->set('provinces', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid province', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('province', $this->Province->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->Province->create();
			if ($this->Province->save($this->data)) {
				$this->Session->setFlash(__('The province has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The province could not be saved. Please, try again.', true));
			}
		}
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid province', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Province->save($this->data)) {
				$this->Session->setFlash(__('The province has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The province could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Province->read(null, $id);
		}
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for province', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Province->delete($id)) {
			$this->Session->setFlash(__('Province deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Province was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>