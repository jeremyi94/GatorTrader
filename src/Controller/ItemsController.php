<?php
namespace App\Controller;
use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\Event\Event;
use cake\Datasource\ConnectionManager;
/**
 * Items Controller
 *
 * @property \App\Model\Table\ItemsTable $Items
 */
class ItemsController extends AppController
{
      
    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('Upload');
        $this->Auth->allow(['myaccount']);
    }
    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
       $this->paginate =['limit' => 20,'order' => ['Items' => 'asc' ]];
       $items = $this->paginate('Items');
       $this->set(compact('items'));
    
        $this->paginate = [
            'contain' => ['Users']
        ];
        $items = $this->paginate($this->Items);
        $this->set(compact('items'));
        $this->set('_serialize', ['items']);
    }
    /**
     * View method
     *
     * @param string|null $id Item id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    /*public function view($id = null)
    {
        $item = $this->Items->get($id, [
            'contain' => ['Users']
        ]);
        $this->set('item', $item);
        $this->set('_serialize', ['item']);
    }*/
    public function view($id, $user = null)
    {
        $query = $this->Items->find();
        if($user){
            $query->where(['user_id' => $id]);
        } else {
            $query->where(['id' => $id]);
        }
        foreach ($query as $row){
          $this->set('title', $row->title);
          $this->set('price', $row->price);
          $this->set('description',$row->description);
          $this->set('img1',$row->img1);
          $this->set('img2',$row->img2);
          $this->set('img3',$row->img3);
          $this->set('img4',$row->img4);
          $this->set('date_posted',$row->date_posted);
          break;
        }
        $this->render();
    }
   
    
    public function search()
    {
        $this->paginate = [
            'contain' => ['Users']
        ];
        $items = $this->paginate($this->Items);
        $this->set(compact('items'));
        $this->set('_serialize', ['items']);
        
        
        if (array_key_exists('query',$_GET))
        {
            $query = htmlspecialchars(stripslashes($_GET['query']));
        }
        else    // This allows a category to be searched without a specific search term. (i.e. lists everything in the category.)
        {
            $query = '';
        }
        if (array_key_exists('category', $_GET))
        {
            $category = htmlspecialchars(stripslashes($_GET['category']));
        }
        else
        {
            $category = 'Everything';
        }
        if ($category == 'Everything')
        {
            $queryResults = $this->Items->find()->where(['title LIKE' => "%$query%"])
                                                ->orWhere(['description LIKE' => "%$query%"]);  // Query methods can also be chained!
        
            $this->set('articles', $this->paginate($queryResults));
        }
        else
        {
            $queryResults = $this->Items->find()->where(['title LIKE' => "%$query%", 'category_name' => $category])
                                                ->orWhere(['description LIKE' => "%$query%", 'category_name' => $category]);
            $this->set('articles', $this->paginate($queryResults));
        }
    
        $results = array();
        foreach ($queryResults as $result){
          $results[] = ['title' => $result->title, 
                        'description' => $result->description, 
                        'img1' => $result->img1, 
                        'img2' => $result->img2, 
                        'img3' => $result->img3, 
                        'img4' => $result->img4, 
                        'price' => $result->price,
                        'date_posted' => $result->date_posted,
                        'id' => $result->id];
        }
        $this->set('results',$results);
        $this->render();
    }
    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $item = $this->Items->newEntity();
        if ($this->request->is('post')) {
            $item = $this->Items->patchEntity($item, $this->request->data);
            if ($this->Items->save($item)) {
                $this->Flash->success(__('The item has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The item could not be saved. Please, try again.'));
        }
        $users = $this->Items->Users->find('list', ['limit' => 200]);
        $this->set(compact('item', 'users'));
        $this->set('_serialize', ['item']);
    }
    /**
     * Edit method
     *
     * @param string|null $id Item id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $item = $this->Items->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $item = $this->Items->patchEntity($item, $this->request->data);
            if ($this->Items->save($item)) {
                $this->Flash->success(__('The item has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The item could not be saved. Please, try again.'));
        }
        $users = $this->Items->Users->find('list', ['limit' => 200]);
        $this->set(compact('item', 'users'));
        $this->set('_serialize', ['item']);
    }
    /**
     * Delete method
     *
     * @param string|null $id Item id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $item = $this->Items->get($id);
        if ($this->Items->delete($item)) {
            $this->Flash->success(__('The item has been deleted.'));
        } else {
            $this->Flash->error(__('The item could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
    
    /*public function beforeFilter(Event $event)
    {
        $this->Auth->allow('search','login','myaccount');
        //$this->set('username',$this->Auth->user('screen_name'));
    }*/
    
    public function myaccount()
    {
        $this->loadComponent('Auth');
        //$user = $this->request->session()->read('Auth.User');
        {
        $user = $this->Auth->user('username');
        echo $user;
        $username;
            $i = 0;
            foreach( $this->request->session()->read('Auth.User') as $row){
                
                $username = $row;
                if($i++ === 4) break;
            }
        //$userId = TableRegistry::get('users')->find()->where(['screen_name' => $user])->first()->get('id');
        //$userId = TableRegistry::get('users')->find()->where(['screen_name' => 'f'])->first()->id;
        $userId = TableRegistry::get('users')->find()->where(['screen_name' => $username])->first()->id;
        //$userId = TableRegistry::get('users')->find()->where(['screen_name' => $user]);
        //echo $user;
        $items = $this->Items->find()->where(['user_id' => $userId]);
        //$messages = TableRegistry::get('messages')->find('all')->Where(['messages.sender_name' => $user])
                     //->OrWhere(['messages.receiver_name' => $user]);
             //$this->set('items', $items);
             //$this->set('messages', $messages);
             //$this->set(['usern' => $user]);
        }
        //$this->set(compact('items'));
        //$this->set('_serialize', ['items']);
            $this->set('items', $items);
    }
    
    
    
    
     public function isAuthorized($user){
      return true;
   }
}
1 Comment Collapse  This snippet was truncated for display: see it in full.
ItemsController



1 new message since 9:56 PM
Mark as read (esc)
Files

farbod1371
Untitled  
Open in new window  More actions
App controller: <?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link      http://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;
use Cake\Controller\Controller;
use Cake\Event\Event;
use Cake\Datasource\ConnectionManager;
/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link http://book.cakephp.org/3.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller
{
    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * e.g. `$this->loadComponent('Security');`
     *
     * @return void
     */
    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('RequestHandler');
        $this->loadComponent('Flash');
        //$this->loadComponent('Csrf');
        /*$this->loadComponent('Auth', [
        'authorize' => 'Controller',
        'unauthorizedRedirect' => $this->referer(),
    ]);*/
        //$this->Auth->allow(['display', 'password', 'reset', 'logout']);
        
        $this->loadComponent('Auth', [
                'authenticate' => [
                    'Form' => [
                        'fields' => [
                            'username' => 'screen_name',
                            'password' => 'password',
                            //'screen_name' =>'screen_name'
                        ]
                    ]
                ],
                'loginAction' => [
                    'controller' => 'Users',
                    'action' => 'login'
                ],
                'logoutRedirect' => [
                    'controller' => 'Pages',
                    'action' => 'home'
                ],
                
                
            
                //'unauthorizedRedirect' => $this->referer(),
                //'unauthorizedRedirect' => "/http://sfsuse.com/~fzolghad/CSC648/",
                'authorize' => 'Controller'
            ]);
        /*
         * Enable the following components for recommended CakePHP security settings.
         * see http://book.cakephp.org/3.0/en/controllers/components/security.html
         */
        //$this->loadComponent('Security');
        //$this->loadComponent('Csrf');
        
    }
    
    /**
     * Before render callback.
     * @param \Cake\Event\Event $event The beforeRender event.
     * @return \Cake\Network\Response|null|void
     */
    public function beforeRender(Event $event)
    {
        if (!array_key_exists('_serialize', $this->viewVars) &&
            in_array($this->response->type(), ['application/json', 'application/xml'])
        ) {
            $this->set('_serialize', true);
        }
        
        
        
        /*$this->loadComponent('Auth');
        if($this->Auth->user('username') !== null)
        {
            $this->set(['loggedInUser' => $this->Auth->user('username')]);
        }else{
            $this->set(['loggedInUser' => '']);
        }*/
        // Login Check
        $this->loadComponent('Auth');
        if($this->request->session()->read('Auth.User'))
        {
            //$myUser = $this->Auth->user('username');
            $username;
            $i = 0;
            foreach( $this->request->session()->read('Auth.User') as $row){
                
                $username = $row;
                if($i++ === 4) break; // if i want to get the user or email, i have to change the value for i
            }
            //echo $this->request->session()->read('Auth.User')->user;
            $this->set('loggedIn', true);
            $this->set('username', $username);
        } 
        else 
        {
            $this->set('loggedIn', false); 
        }
        /*if($this->Auth->user('username') != null)
        {
            $this->set(['screenUsername' => $this->Auth->user('username')]);
            
            $theEmail = $this->Auth->user('username');
            $query = TableRegistry::get('Users')->find('screen_name')->where('email = "'. $theEmail . '"'  );
            $this->set(['screenName' => $query]);
        }*/
    }
    
   public function isAuthorized($user){
      return true;
   }
    
    
    
    public function beforeFilter(Event $event)
    {
        $this->Auth->allow('search');
        //$this->set('username',$this->Auth->user('screen_name'));
    }
    
    
}
 wrap
Today at 9:55 PM • 5kB Plain Text snippet •  Private snippet shared with you
