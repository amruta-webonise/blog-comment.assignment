<?php
class PostsController extends AppController
{
public $scaffold = 'admin';
	public $helpers = array('Html', 'Form', 'Session');
	public $components = array('Session');

    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('index', 'logout','view');
    }

	public function index() 
	{
	        $this->set('posts', $this->Post->find('all'));
	}

	public function view($id) 
	{
        if ($this->request->is('post'))
        {
          //  pr($this->request->data);die;

            if ($this->Post->Comment->save($this->request->data))
            {
                if ($this->__sendRegistrationEmail()) {

                    $this->Session->setFlash(__('Mail has been sent to you on your email-id'));

                } else {
                    $this->Session->setFlash(__('There may be some error, please try again'));
                }
                $this->Session->setFlash('Your comment has been saved.');
                $this->redirect(array('action' => 'index'));
            }
            else
            {
                $this->Session->setFlash('Unable to add your comment.');
            }

        }
        else
        {
	        $this->Post->id = $id;
            $this->set('post_id',$id);
	        $this->set('post', $this->Post->read());
        }

	}

	public function add()
	{
        if($this->Auth->user('role_type')==1)
        {
	        if ($this->request->is('post')) 
		    {
		        if ($this->Post->save($this->request->data))
			        {
	                $this->Session->setFlash('Your post has been saved.');
			        $this->redirect(array('action' => 'index'));
            		}
			else 
			{
	                	$this->Session->setFlash('Unable to add your post.');
	        	}

            }
        }
        else
        {
            $this->Session->setFlash('no privileges to add posts');
        }
    }


public function edit($id = null) {
    $this->Post->id = $id;
    if ($this->request->is('get')) {
        $this->request->data = $this->Post->read();
    } else {
        if ($this->Post->save($this->request->data)) {
            $this->Session->setFlash('Your post has been updated.');
            $this->redirect(array('action' => 'index'));
        } else {
            $this->Session->setFlash('Unable to update your post.');
        }
    }
}

public function delete($id) {
    if ($this->request->is('get')) {
        throw new MethodNotAllowedException();
    }
    if ($this->Post->delete($id)) {
        $this->Session->setFlash('The post with id: ' . $id . ' has been deleted.');
        $this->redirect(array('action' => 'index'));
    }
}

    public function __sendRegistrationEmail()
    {

        if ($this->request->is('post') && !empty($this->request->data)) {
            $data['from'] = $this->request->data['Comment']['email'];
            $data['fromName'] = $this->request->data['Comment']['name'];
            $data['to'] = 'amruta@yopmail.com';
            $data['toName'] = 'Admin';
            $data['template'] = 'verify_email'; // this the ctp which goes into your View/Emails/html/verify_email.ctp
            $data['subject'] = 'Welcome to BlogWorld!';
            $this->sendSmtpMail($data);
        }
        return true;
    }

}

?>
