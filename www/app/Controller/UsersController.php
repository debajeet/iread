<?php
App::uses('AppController','Controller');

class UsersController extends AppController {
	
	public function index() {
		$this->set('users',$this->User->find('all'));
	}
	
	public function register() {
		if($this->request->is('post')) {
			$this->User->create();
			if($this->User->saveAll($this->request->data, array('deep'=>'true'))) {
				$this->Session->setFlash('User created successfully!!');
				$this->redirect(array('action'=>'index'));
			}
			else {
				$this->setFlash('There was a problem signing you up. Please try again!!');
			}
		}
		else {
			$this->set('groups',$this->User->Group->find('list'));
		}
	}
	
}