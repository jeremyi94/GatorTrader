<?php
namespace App\Controller;
use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\Event\Event;
use cake\Datasource\ConnectionManager;
/**
 * Messages Controller
 *
 * @property \App\Model\Table\MessagesTable $Messages
 */
class MessagesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Items']
        ];
        $messages = $this->paginate($this->Messages);
        $this->set(compact('messages'));
        $this->set('_serialize', ['messages']);
    }
    /**
     * View method
     *
     * @param string|null $id Message id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $message = $this->Messages->get($id, [
            'contain' => ['Items']
        ]);
        $this->set('message', $message);
        $this->set('_serialize', ['message']);
    }
    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $message = $this->Messages->newEntity();
        if ($this->request->is('post')) {
            $message = $this->Messages->patchEntity($message, $this->request->data);
            if ($this->Messages->save($message)) {
                $this->Flash->success(__('The message has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The message could not be saved. Please, try again.'));
        }
        $items = $this->Messages->Items->find('list', ['limit' => 200]);
        $this->set(compact('message', 'items'));
        $this->set('_serialize', ['message']);
    }
    /**
     * Edit method
     *
     * @param string|null $id Message id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $message = $this->Messages->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $message = $this->Messages->patchEntity($message, $this->request->data);
            if ($this->Messages->save($message)) {
                $this->Flash->success(__('The message has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The message could not be saved. Please, try again.'));
        }
        $items = $this->Messages->Items->find('list', ['limit' => 200]);
        $this->set(compact('message', 'items'));
        $this->set('_serialize', ['message']);
    }
    /**
     * Delete method
     *
     * @param string|null $id Message id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $message = $this->Messages->get($id);
        if ($this->Messages->delete($message)) {
            $this->Flash->success(__('The message has been deleted.'));
        } else {
            $this->Flash->error(__('The message could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
    
    /*public function inbox()
    {
        $messages = $this->Messages->find('all', ['conditions' => ['sender_id' => $this->Auth->user('id')]]);   
    }*/
    
    public function privatemessages()
    {
        $this->loadComponent('Auth');
        //$user = $this->request->session()->read('Auth.User');
        {
        $user = $this->Auth->user('username');
        echo $user;
        $username;
            $i = 0;
            foreach( $this->request->session()->read('Auth.User') as $row)
             {
                
                $username = $row;
                if($i++ === 4) break;
            }
        $myItemId = TableRegistry::get('items')->find()->first()->id;
        $myMessages = TableRegistry::get('messages')->find()->where(['receiver_name' => $username])
                                                            ->andWhere(['item_id' => $myItemId]);
        }
        $this->set('myMessages', $myMessages);
    
        
     }
    
    
}
