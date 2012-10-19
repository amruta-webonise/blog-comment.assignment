<?php
/**
 * Created by JetBrains PhpStorm.
 * User: webonise
 * Date: 19/10/12
 * Time: 10:14 AM
 * To change this template use File | Settings | File Templates.
 */
class CommentsController extends AppController
{
    public $scaffold = 'admin';
    public $helpers = array('Html', 'Form', 'Session');
    public $components = array('Session');

    public function index()
    {
        $this->set('comments', $this->Comment->find('all'));
    }

    public function approve($id=null)
    {
        $comment=$this->Comment->find('first',array('fields'=>array('Comment.id','Comment.is_approved'),'conditions'=>array('Comment.id'=>$id)));
       // pr($comment);die;
        $saveData['Comment']['id']=$comment['Comment']['id'];
        $saveData['Comment']['is_approved']=1;
        if($this->Comment->save($saveData))
        {
            $this->Session->setFlash('The comment has been approved');
            $this->redirect(array('controller'=>'comments','action'=>'index'));
        }
        else{
            $this->Session->setFlash('The comment has not been approved');
            $this->redirect(array('controller'=>'comments','action'=>'index'));
        }
        $this->autoRender=false;
    }

    public function disapprove($id=null)
    {

        $comment=$this->Comment->find('first',array('fields'=>array('Comment.id','Comment.is_approved'),'conditions'=> array('Comment.id'=>$id)));
        //pr($comment);die;
        $saveData['Comment']['id']=$comment['Comment']['id'];
        $saveData['Comment']['is_approved']=0;
        if($this->Comment->save($saveData))
        {
            $this->Session->setFlash('The comment has been disapproved');
            $this->redirect(array('controller'=>'comments','action'=>'index'));
        }
        else{
            $this->Session->setFlash('The comment has not been disapproved');
            $this->redirect(array('controller'=>'comments','action'=>'index'));
        }
        $this->autoRender=false;

    }

    public function delete($id) {
        if ($this->request->is('get')) {
            throw new MethodNotAllowedException();
        }
        if ($this->Comment->delete($id)) {
            $this->Session->setFlash('The comment with id: ' . $id . ' has been deleted.');
            $this->redirect(array('action' => 'index'));
        }
}
}