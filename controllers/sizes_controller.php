<?php
class SizesController extends AppController {

	var $name = 'Sizes';

	function admin_index() {
		$this->Size->recursive = 0;
		$this->set('sizes', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid size', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('size', $this->Size->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->Size->create();
			if ($this->Size->save($this->data)) {
				$this->Session->setFlash(__('The size has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The size could not be saved. Please, try again.', true));
			}
		}
		$wallpapers = $this->Size->Wallpaper->find('list');
		$this->set(compact('wallpapers'));
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid size', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Size->save($this->data)) {
				$this->Session->setFlash(__('The size has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The size could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Size->read(null, $id);
		}
		$wallpapers = $this->Size->Wallpaper->find('list');
		$this->set(compact('wallpapers'));
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for size', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Size->delete($id)) {
			$this->Session->setFlash(__('Size deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Size was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>