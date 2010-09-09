<?php
class MenusesController extends AppController {

	var $name = 'Menuses';
	
	function view($id)
	{
		$menus = $this->Menus->find('first',array('conditions' => array('Menus.id' => $id)));
		
		$body = empty($menus['ParentMenus']['name']) ? strtolower($menus['Menus']['name']) : strtolower($menus['ParentMenus']['name']);
		
		$this->set(compact('menus','body'));
	}
	
	function admin_index() {
		$this->Menus->recursive = 0;
		$this->set('menuses', $this->paginate('Menus',array('Menus.parent_id !=' => null)));
	}
	
	function admin_main()
	{
		$this->Menus->recursive = 0;
		$this->set('menuses', $this->paginate('Menus',array('Menus.parent_id ' => null)));
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->flashWarning('Invalid Menu');
		}
		$menus = $this->Menus->read(null, $id);
		$this->set(compact('menus'));
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
		$parents = $this->Menus->find('list',array('conditions' => array('parent_id' => null)));
		$this->set(compact('parents'));
	}

	function admin_edit($id = null,$main = null) {
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
		$parents = $this->Menus->find('list',array('conditions' => array('parent_id' => null)));
		$this->set(compact('parents','main'));
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