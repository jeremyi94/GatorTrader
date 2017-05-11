<?php

use Search\Manager;
namespace App\Controller;
use App\Controller\AppController;
 use Cake\ORM\TableRegistry;
 use Cake\ORM\Table;
 
class SearchController extends AppController
{
    
    
    
    public function index()
    {
       $keys = $this->request->query['label'];       
       $query = $this->items->find()->where(["description LIKE"=>"#[^0-9a-z]#i"]);
       $this->set(['query_rows' => $query]);                            
       //$query = $this->items->find()->where(["description LIKE"=>"#[^0-9a-z]#i"]);
       //$this->set(["query_rows"=>$query]);
       //$this->set('articles', $this->paginate($query));
       //$articles = TableRegistry::get('items');
    }
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

