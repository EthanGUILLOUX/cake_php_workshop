<?php

namespace App\Controller;

class ProduitsController extends AppController
{
    public function index()
    {
        $this->loadComponent('Paginator');
        $produits = $this->Paginator->paginate($this->Produits->find());
        $this->set(compact('produits'));
    }
    public function add()
    {
        $produit = $this->Produits->newEmptyEntity();
        if ($this->request->is('post')) {
            $produit = $this->Produits->patchEntity($produit, $this->request->getData());
            if ($this->Produits->save($produit)) {
                $this->Flash->success(__('Le produit a été créé avec succès.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Impossible de créer le produit.'));
        }
        $this->set(compact('produit'));
    }
}