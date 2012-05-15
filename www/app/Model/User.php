<?php
App::uses('AppModel','Model');

class User extends AppModel {
	public $name = 'User';
	public $hasOne = 'Userprofile';
	public $belongsTo = 'Group';
	
	public function beforeSave() {
		if(isset($this->data[$this->alias]['password'])) {
			$this->data[$this->alias]['password'] = AuthComponent::password($this->data[$this->alias]['password']);
		}
		return true;
	}
}