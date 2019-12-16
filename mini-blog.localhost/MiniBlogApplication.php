<?php

class MiniblogApplication extends Application
{
    protected $login_action = array('account', 'signin');

    public function getRootDir()
    {
        return dirname(__FILE__);
    }

    protected function registerRoutes()
    {
        return array(
<<<<<<< HEAD
            '/'
                => array('controller' => 'status', 'action' => 'index'),
            '/status/post'
                => array('controller' => 'status', 'action' => 'post'),
            '/user/:user_name'
                => array('controller' => 'status', 'action' => 'user'),
            '/user/:user_name/status/:id'
                => array('controller' => 'status', 'action' => 'show'),
=======
>>>>>>> cf148875bdaeb86a659d7cb7223b443e87fa41ce
            '/account'
                =>array('controller' => 'account', 'action' => 'index'),
            '/account/:action'
                =>array('controller' => 'account'),
<<<<<<< HEAD
            '/follow'
                =>array('controller' => 'account', 'action' => 'follow'),
=======
>>>>>>> cf148875bdaeb86a659d7cb7223b443e87fa41ce
        );
    }

    protected function configure()
    {
        $this->db_manager->connect('master', array(
            'dsn'       =>  'mysql:dbname=mini_blog;host=localhost',
            'user'      =>  'yoshimoto',
<<<<<<< HEAD
            'password'  =>'pan64xiw',
=======
            'password'  =>'6i3)i_G7aUd4L7r',
>>>>>>> cf148875bdaeb86a659d7cb7223b443e87fa41ce
        ));
    }
}
?>