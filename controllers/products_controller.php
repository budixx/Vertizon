<?php
class ProductsController extends AppController {

	var $name = 'Products';
	var $helpers = array('Phpthumb','Media.Media','Ajax','Ajaxupload');

	function beforeFilter() {
		parent::beforeFilter();

		$body = 'product';
		$this->set(compact('body'));
	}
	
	function index($slug) {
		if (!$slug) {
			$this->flashWarning('Invalid Product Type');
		}
		$this->Product->recursive = 1;
		$ptype = $this->Product->Ptype->findBySlug($slug);
		$pcategory = ClassRegistry::init('Pcategory')->find('first',array('conditions' => array('Pcategory.id' => $ptype['Pbrand']['pcategory_id'])));
		$products = $this->paginate('Product',array('Product.ptype_id' => $ptype['Ptype']['id']));

		$this->set(compact('products','ptype','pcategory'));
	}

	function view($slug = null) {
		if (!$slug) {
			$this->flashWarning('Invalid Product');
		}
		$product = $this->Product->findBySlug($slug);
		$ptype = $this->Product->Ptype->findBySlug($product['Ptype']['slug']);
		$pcategory = ClassRegistry::init('Pcategory')->find('first',array('conditions' => array('Pcategory.id' => $ptype['Pbrand']['pcategory_id'])));
		
		$this->set(compact('product','ptype','pcategory'));
	}

	function admin_index() {
		$this->Product->recursive = 0;
		$this->set('products', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'product'));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('product', $this->Product->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->Product->create();
			if ($this->Product->save($this->data)) {
				$this->Session->setFlash(sprintf(__('The %s has been saved', true), 'product'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'product'));
			}
		}
		$ptypes = $this->Product->Ptype->find('list');
		$this->set(compact('ptypes'));
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'product'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Product->save($this->data)) {
				$this->Session->setFlash(sprintf(__('The %s has been saved', true), 'product'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'product'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Product->read(null, $id);
		}
		$ptypes = $this->Product->Ptype->find('list');
		$this->set(compact('ptypes'));
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid id for %s', true), 'product'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Product->delete($id)) {
			$this->Session->setFlash(sprintf(__('%s deleted', true), 'Product'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(sprintf(__('%s was not deleted', true), 'Product'));
		$this->redirect(array('action' => 'index'));
	}
	
	function admin_photo($id = null) {
		$this->layout = 'ajax';

		if(!empty($this->data)) {
			$data['Photo']['product_id'] = $_POST['id'];
			$data['Photo']['file'] = $this->data['Product']['File'];

			$this->Product->Photo->create();
			$this->Product->Photo->save($data);
		}
		$photos = $this->Product->Photo->find('all',array('conditions' => array('Photo.product_id' => isset($id) ? $id : $data['Photo']['product_id'])));
		$this->set(compact('photos'));
	}
	
	function admin_deletephoto($id = null) {
		$this->layout = 'ajax';
		$photo = $this->Product->Photo->find('first',array('conditions' => array('Photo.id' => $id)));
		
		$this->Product->Photo->recursive = -1;
		if(!empty($photo)) $this->Product->Photo->delete($id);

		$photos = $this->Product->Photo->find('all',array('conditions' => array('Photo.product_id' => $photo['Photo']['product_id'])));
		$this->set(compact('photos'));
	}
}
?>