<script src="/js/bootstrap-dropdown.js" type="text/javascript"></script>
<script type="text/javascript">

    $('.dropdown-toggle').dropdown()
</script>

<?php
echo $this->Form->create('User', array('action' => 'edit'));

echo $this->Form->input('username');
echo $this->Form->input('password');
echo $this->Form->input('id', array('type' => 'hidden'));

echo $this->Form->input('Profile.name');
echo $this->Form->input('Profile.email');
echo $this->Form->end('Save');
?>