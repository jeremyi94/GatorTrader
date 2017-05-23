<?php
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
                    'controller' => 'pages',
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
