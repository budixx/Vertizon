<?php
class PbrandsController extends AppController {

	var $name = 'Pbrands';
	var $helpers = array('Media.Media');

	function index($slug = null) {
		if (!$slug) {
			$this->flashWarning('Invalid Brand');
		}
		$this->Pbrand->recursive = 1;
		$pcategory = $this->Pbrand->Pcategory->findBySlug($slug);
		$pbrands = $this->paginate('Pbrand',array('Pbrand.pcategory_id' => $pcategory['Pcategory']['id']));
		
		$left_category = $pcategory['Pcategory']['id'];
		$body = 'product';
		
		$this->set(compact('pbrands','pcategory','body','left_category'));
	}

	function admin_index() {
		$this->Pbrand->recursive = 0;
		$this->set('pbrands', $this->paginate());
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->Pbrand->create();
			if ($this->Pbrand->save($this->data)) {
				$this->Session->setFlash(sprintf(__('The %s has been saved', true), 'pbrand'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'pbrand'));
			}
		}
		$pcategories = $this->Pbrand->Pcategory->find('list');
		$this->set(compact('pcategories'));
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'pbrand'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Pbrand->save($this->data)) {
				$this->Session->setFlash(sprintf(__('The %s has been saved', true), 'pbrand'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'pbrand'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Pbrand->read(null, $id);
		}
		$pcategories = $this->Pbrand->Pcategory->find('list');
		$this->set(compact('pcategories'));
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid id for %s', true), 'pbrand'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Pbrand->delete($id)) {
			$this->Session->setFlash(sprintf(__('%s deleted', true), 'Pbrand'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(sprintf(__('%s was not deleted', true), 'Pbrand'));
		$this->redirect(array('action' => 'index'));
	}
}
?>