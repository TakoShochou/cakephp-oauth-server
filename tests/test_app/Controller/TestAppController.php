<?php
declare(strict_types=1);

namespace TestApp\Controller;

use Cake\Controller\Component\AuthComponent;
use Cake\Controller\Controller;

class TestAppController extends Controller
{
    public function initialize(): void
    {
        $this->loadComponent('Auth', [
            'authenticate' => [
                AuthComponent::ALL => [
                    'userModel' => 'Users',
                    'fields' => ['username' => 'email'],
                ],
                'OAuthServer.OAuth',
                'Form',
            ],
            'loginAction' => [
                'plugin' => false,
                'controller' => 'Users',
                'action' => 'login',
            ],
        ]);
    }
}
