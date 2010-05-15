<?php
class MenusesController extends AppController {

	var $name = 'Menuses';

	function admin_index() {
		$this->Menus->recursive = 0;
		$this->set('menuses', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'menu'));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('menus', $this->Menus->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->Menus->create();
			if ($this->Menus->save($this->data)) {
				$this->Session->setFlash(sprintf(__('The %s has been saved', true), 'menu'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'menu'));
			}
		}
		$parentMenuses = $this->Menus->ParentMenu->find('list');
		$this->set(compact('parentMenuses'));
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'menu'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Menus->save($this->data)) {
				$this->Session->setFlash(sprintf(__('The %s has been saved', true), 'menu'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'menu'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Menus->read(null, $id);
		}
		$parentMenuses = $this->Menus->ParentMenu->find('list');
		$this->set(compact('parentMenuses'));
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid id for %s', true), 'menu'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Menus->delete($id)) {
			$this->Session->setFlash(sprintf(__('%s deleted', true), 'Menu'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(sprintf(__('%s was not deleted', true), 'Menu'));
		$this->redirect(array('action' => 'index'));
	}
}
?>