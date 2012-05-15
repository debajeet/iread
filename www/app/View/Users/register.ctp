<?php
echo $this->Form->create('User');
echo $this->Form->input('User.username');
echo $this->Form->input('User.password');
echo $this->Form->input('User.confirm_password');
echo $this->Form->input('User.group_id', array('options'=>$groups));
echo $this->Form->input('Userprofile.firstname');
echo $this->Form->input('Userprofile.middlename');
echo $this->Form->input('Userprofile.lastname');
echo $this->Form->input('Userprofile.shopname');
echo $this->Form->input('Userprofile.email');
echo $this->Form->input('Userprofile.address');
echo $this->Form->input('Userprofile.city');
echo $this->Form->input('Userprofile.state');
echo $this->Form->input('Userprofile.pincode');
echo $this->Form->input('Userprofile.lat');
echo $this->Form->input('Userprofile.lon');
echo $this->Form->end('Register');
?>