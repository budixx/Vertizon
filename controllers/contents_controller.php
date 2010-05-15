<?php
class ContentsController extends AppController {

	var $name = 'Contents';
	var $paginate = array('limit' => 1);
	function beforeFilter()
	{
		parent::beforeFilter();
		
		$this->set('body','information');
	}
	
	function index($id = null) 
	{
		$this->Content->recursive = 0;
		$this->set('contents', $this->paginate(array('Type.name' => $id)));
		$this->set(compact('contents'));
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'content'));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('content', $this->Content->read(null, $id));
	}

	function admin_index() {
		$this->Content->recursive = 0;
		$this->set('contents', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'content'));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('content', $this->Content->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->Content->create();
			if ($this->Content->save($this->data)) {
				$this->Session->setFlash(sprintf(__('The %s has been saved', true), 'content'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'content'));
			}
		}
		$types = $this->Content->Type->find('list');
		$this->set(compact('types'));
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'content'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Content->save($this->data)) {
				$this->Session->setFlash(sprintf(__('The %s has been saved', true), 'content'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'content'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Content->read(null, $id);
		}
		$types = $this->Content->Type->find('list');
		$this->set(compact('types'));
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid id for %s', true), 'content'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Content->delete($id)) {
			$this->Session->setFlash(sprintf(__('%s deleted', true), 'Content'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(sprintf(__('%s was not deleted', true), 'Content'));
		$this->redirect(array('action' => 'index'));
	}
}
?>