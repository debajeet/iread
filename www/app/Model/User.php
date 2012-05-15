<?php
App::uses('AppModel','Model');

class User extends AppModel {
	public $name = 'User';
	public $hasOne = 'Userprofile';
	public $belongsTo = 'Group';
}