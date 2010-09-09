<?php
class DealersController extends AppController {

	var $name = 'Dealers';

	function index() {
		$this->Dealer->recursive = 0;
		$this->set('dealers', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid dealer', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('dealer', $this->Dealer->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Dealer->create();
			if ($this->Dealer->save($this->data)) {
				$this->Session->setFlash(__('The dealer has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The dealer could not be saved. Please, try again.', true));
			}
		}
		$cities = $this->Dealer->City->find('list');
		$this->set(compact('cities'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid dealer', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Dealer->save($this->data)) {
				$this->Session->setFlash(__('The dealer has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The dealer could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Dealer->read(null, $id);
		}
		$cities = $this->Dealer->City->find('list');
		$this->set(compact('cities'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for dealer', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Dealer->delete($id)) {
			$this->Session->setFlash(__('Dealer deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Dealer was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}

	function admin_index() {
		$this->Dealer->recursive = 0;
		$this->set('dealers', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid dealer', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('dealer', $this->Dealer->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->Dealer->create();
			if ($this->Dealer->save($this->data)) {
				$this->Session->setFlash(__('The dealer has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The dealer could not be saved. Please, try again.', true));
			}
		}
		$cities = $this->Dealer->City->find('list');
		$this->set(compact('cities'));
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid dealer', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Dealer->save($this->data)) {
				$this->Session->setFlash(__('The dealer has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The dealer could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Dealer->read(null, $id);
		}
		$cities = $this->Dealer->City->find('list');
		$this->set(compact('cities'));
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for dealer', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Dealer->delete($id)) {
			$this->Session->setFlash(__('Dealer deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Dealer was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>