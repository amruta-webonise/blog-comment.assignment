<?php
class UserShell extends AppShell {
    public $uses = array('User');

    public function main() {
        $user = $this->User->find('all');
//        foreach ($user as $row)
//        {
//            print $row['User']['username'] .' => '. $row['Profile']['email'] . '<br />';
//        }
       $this->out(print_r($user, true));
    }
}
?>
