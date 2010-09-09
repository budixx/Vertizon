<?php
class WallpapersController extends AppController {

	var $name = 'Wallpapers';

	function index() {
		$this->Wallpaper->recursive = 0;
		$this->set('wallpapers', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid wallpaper', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('wallpaper', $this->Wallpaper->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Wallpaper->create();
			if ($this->Wallpaper->save($this->data)) {
				$this->Session->setFlash(__('The wallpaper has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The wallpaper could not be saved. Please, try again.', true));
			}
		}
		$sizes = $this->Wallpaper->Size->find('list');
		$this->set(compact('sizes'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid wallpaper', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Wallpaper->save($this->data)) {
				$this->Session->setFlash(__('The wallpaper has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The wallpaper could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Wallpaper->read(null, $id);
		}
		$sizes = $this->Wallpaper->Size->find('list');
		$this->set(compact('sizes'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for wallpaper', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Wallpaper->delete($id)) {
			$this->Session->setFlash(__('Wallpaper deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Wallpaper was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}

	function admin_index() {
		$this->Wallpaper->recursive = 0;
		$this->set('wallpapers', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid wallpaper', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('wallpaper', $this->Wallpaper->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->Wallpaper->create();
			if ($this->Wallpaper->save($this->data)) {
				$this->Session->setFlash(__('The wallpaper has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The wallpaper could not be saved. Please, try again.', true));
			}
		}
		$sizes = $this->Wallpaper->Size->find('list');
		$this->set(compact('sizes'));
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid wallpaper', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Wallpaper->save($this->data)) {
				$this->Session->setFlash(__('The wallpaper has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The wallpaper could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Wallpaper->read(null, $id);
		}
		$sizes = $this->Wallpaper->Size->find('list');
		$this->set(compact('sizes'));
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for wallpaper', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Wallpaper->delete($id)) {
			$this->Session->setFlash(__('Wallpaper deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Wallpaper was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>