<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

/**
 * Items Controller
 *
 * @property \App\Model\Table\ItemsTable $Items
 */
class ItemsController extends AppController {

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index() {
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
    /* public function view($id = null)
      {
      $item = $this->Items->get($id, [
      'contain' => ['Users']
      ]);

      $this->set('item', $item);
      $this->set('_serialize', ['item']);
      } */
    public function view($id) {
        $query = $this->Items->find();
        $query->where(['id' => $id]);
        foreach ($query as $row) {
            $this->set('id', $row->id);
            $this->set('title', $row->title);
            $this->set('price', $row->price);
            $this->set('description', $row->description);
            $this->set('img1', $row->img1);
            $this->set('img2', $row->img2);
            $this->set('img3', $row->img3);
            $this->set('img4', $row->img4);
            break;
        }
        $this->render('search', 'new');
    }

    public function search() {
        if (array_key_exists('query', $_GET)) {
            $query = htmlspecialchars(stripslashes($_GET['query']));
        } else {    // This allows a category to be searched without a specific search term. (i.e. lists everything in the category.)
            $query = '';
        }
        if (array_key_exists('category', $_GET)) {
            $category = htmlspecialchars(stripslashes($_GET['category']));
        } else {
            $category = 'Everything';
        }
        if ($category == 'Everything') {
            $queryResults = $this->Items->find()->where(['title LIKE' => "%$query%"])
                    ->orWhere(['title LIKE' => "%$query%"]);  // Query methods can also be chained!
        } else {
            $queryResults = $this->Items->find()->where(['title LIKE' => "%$query%", 'category_name' => $category])
                    ->orWhere(['description LIKE' => "%$query%", 'category_name' => $category]);
        }

        $results = array();
        foreach ($queryResults as $result) {
            
            
            $results[] = ['title' => $result->title, 'description' => $result->description,
                'img1' => $result->id . 'a.jpg', 'img2' => $result->id . 'b.jpg',
                'img3' => $result->id . 'c.jpg', 'img4' => $result->id . 'd.jpg',
                'price' => $result->price, 'id' => $result->id];
        }

        $this->set('results', $results);
        $this->render('search', 'new');
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add() {
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
    public function edit($id = null) {
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
    public function delete($id = null) {
        $this->request->allowMethod(['post', 'delete']);
        $item = $this->Items->get($id);
        if ($this->Items->delete($item)) {
            $this->Flash->success(__('The item has been deleted.'));
        } else {
            $this->Flash->error(__('The item could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

}

?>