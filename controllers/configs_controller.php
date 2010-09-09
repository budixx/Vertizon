<?php
class ConfigsController extends AppController {

	var $name = 'Configs';

	function admin_index() {
		$this->Config->recursive = 0;
		$this->set('configs', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid config', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('config', $this->Config->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->Config->create();
			if ($this->Config->save($this->data)) {
				$this->Session->setFlash(__('The config has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The config could not be saved. Please, try again.', true));
			}
		}
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid config', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Config->save($this->data)) {
				$this->Session->setFlash(__('The config has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The config could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Config->read(null, $id);
		}
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for config', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Config->delete($id)) {
			$this->Session->setFlash(__('Config deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Config was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>