<?php
echo $this->Html->link('Sign In', array('controller'=>'users','action'=>'login')) . " | " . $this->Html->link('Sign Up', array('controller'=>'users','action'=>'register'));
?>