<?php
class FeaturedsController extends AppController {

	var $name = 'Featureds';

	function admin_index() {
		$this->Featured->recursive = 0;
		$this->set('featureds', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid featured', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('featured', $this->Featured->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->Featured->create();
			if ($this->Featured->save($this->data)) {
				$this->Session->setFlash(__('The featured has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The featured could not be saved. Please, try again.', true));
			}
		}
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid featured', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Featured->save($this->data)) {
				$this->Session->setFlash(__('The featured has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The featured could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Featured->read(null, $id);
		}
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for featured', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Featured->delete($id)) {
			$this->Session->setFlash(__('Featured deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Featured was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>