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
    public function upload()
    {
        if ( !empty( $this->request->data ) ) {
            $this->Upload->send($this->request->data['uploadfile']);
        }
    }
    
    
    
    
     public function isAuthorized($user){
      return true;
   }
}
