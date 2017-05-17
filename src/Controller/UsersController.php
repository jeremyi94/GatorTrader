<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 */
class UsersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $users = $this->paginate($this->Users);

        $this->set(compact('users'));
        $this->set('_serialize', ['users']);
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => ['Items']
        ]);

        $this->set('user', $user);
        $this->set('_serialize', ['user']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->data);
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user'));
        $this->set('_serialize', ['user']);
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->data);
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user'));
        $this->set('_serialize', ['user']);
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
    public function login(){
        if($this->request->is('post')){
            $user = $this->Auth->identify();
            if($user){
                $this->Auth->setUser($user);
                //return $this->redirect(['controller' => 'items']);
                return $this->redirect($this->Auth->redirectUrl());
            }
            // Bad Login
            $this->Flash->error('Incorrect Login');
            
        }
        //return $this->redirect($this->referer());
    }
    // Logout
    public function logout()
    {
         $this->Flash->success('You are logged out');
         //return $this->redirect(['controller' => 'items']);
         $this->redirect($this->Auth->logout());
         //return $this->redirect(['controller' => 'items']);
         //return $this->redirect(["/http://sfsuse/~fzolghad/CSC648/"]);
    }
    
      
   /*public function isAuthorized($user){
      return true;
   }*/
    
    /*public function beforeFilter(Event $event){
        parent::beforeFilter();
        $this->Auth->allow('login','add'); 
    }*/
    
    public function account()
    {
        $this->loadComponent('Auth');
        $user = $this->Auth->user('username');
        $this->Auth->setUser($user);
        echo $user;
        $getUser = $this->Users->find()->where(['screen_name' => $user])->first();
        echo $getUser['user_id'];
       // if(!empty($getUser))
       // {
            //$this->Auth->setUser($user);
            //$item = $this->Items->newEntity();
            $myQuery = TableRegistry::get('Items')->find()->where(['user_id' => $getUser['user_id']]); 
            $this->set('userItems', $myQuery);
        //}
        
              
            /*$my_results = array();
            foreach ($myQuery as $row)
            {
                        $my_results[] = ['title' => $row->title, 
                        'description' => $row->description, 
                        'img1' => $row->img1, 
                        'img2' => $row->img2, 
                        'img3' => $row->img3, 
                        'img4' => $row->img4, 
                        'price' => $row->price,
                        'date_posted' => $row->date_posted,
                        'id' => $row->id];
            }
                        $this->set('$my_results',$my_results);
                        $this->render();
            
        }*/    
    }
    
    public function beforeFilter(Event $event)
    {
        $this->Auth->allow('add');
        //$this->set('username',$this->Auth->user('screen_name'));
    
    }
    
    /*public function isAuthorized($user)
    {
        $myName = $user['screen_name'];
        return $myName;
    }*/
    
}
