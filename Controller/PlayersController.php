<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

class PlayersController extends AppController {

    public function beforeFilter(Event $event) {
        parent::beforeFilter($event);
        $this->Auth->allow(['login', 'add', 'logout', 'resetPassword']);
    }

    public function index() {
        
    }

    public function add() {
        $player = $this->Players->newEntity();
        if ($this->request->is('post')) {
            $player = $this->Players->patchEntity($player, $this->request->data);
            if ($this->Players->save($player)) {
                return $this->redirect(['action' => '../Arenas/index']);
            }
            $this->Flash->error(__("Impossible d'ajouter le joueur."));
        }
        $this->set('player', $player);
    }

    public function login() {
        if ($this->request->is('post')) {
            $player = $this->Auth->identify();
            if ($player) {
                $this->Auth->setUser($player);
                return $this->redirect($this->Auth->redirectUrl());
            } else {
                $this->Flash->error(__('E-mail ou mot de passe invalide.'));
            }
        }
    }

    public function resetPassword() {
        
    }

    public function logout() {
        return $this->redirect($this->Auth->logout());
    }

}
