<?php
class ReviewsController extends AppController {

	var $name = 'Reviews';
	var $helpers = array('Media.Media');

	function index() {
		$this->Review->recursive = 0;
		$this->set('reviews', $this->paginate());
	}

	function view($slug) {
		if (!$slug) {
			$this->flashWarning('Invalud Review');
		}
		$review = $this->Review->findBySlug($slug);
		$this->set(compact('review'));
	}

	function admin_index() {
		$this->Review->recursive = 0;
		$this->set('reviews', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid review', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('review', $this->Review->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->Review->create();
			if ($this->Review->save($this->data)) {
				$this->Session->setFlash(__('The review has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The review could not be saved. Please, try again.', true));
			}
		}
		$products = $this->Review->Product->find('list');
		$this->set(compact('products'));
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid review', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Review->save($this->data)) {
				$this->Session->setFlash(__('The review has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The review could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Review->read(null, $id);
		}
		$products = $this->Review->Product->find('list');
		$this->set(compact('products'));
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for review', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Review->delete($id)) {
			$this->Session->setFlash(__('Review deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Review was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>