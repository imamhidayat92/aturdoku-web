<?php

class AccountsController extends AppController {
    public function index() {
        $accounts = $this->Account->find('all', array(
            'conditions' => array(
                'User.id' => $this->Auth->user('id')
            )
        ));
        $this->set('accounts', $accounts);
        
        $this->set('title_for_layout', "");
    }
    
    public function add() {
        if ($this->request->isPost()) {
            if ($this->Account->save($this->request->data)) {
                $this->Session->setFlash("", 'success');
                $this->redirect(array('controller' => 'accounts', 'action' => 'index'));
            }
            
            $this->Session->setFlash("", 'fail');
        }
        
        $this->set('title_for_layout', "Tambah Akun Baru");
    }
    
    public function edit($id) {
        if ($this->request->isPost()) {
            if ($this->Account->save($this->request->data)) {
                $this->Session->setFlash("", 'success');
                $this->redirect(array('controller' => 'accounts', 'action' => 'index'));
            }
            
            $this->Session->setFlash("", 'fail');
        }
        
        $account = $this->Accound->findByid($id);
        $this->set('account', $account);
        
        $this->set('title_for_layout', "Ubah Akun");
    }
    
    public function update($id) {
        if ($this->request->isPost()) {
            if ($this->Account->save($this->request->data)) {
                $this->Session->setFlash("", 'success');
                $this->redirect(array('controller' => 'accounts', 'action' => 'index'));
            }
            
            $this->Session->setFlash("", 'fail');           
        }
        $account = $this->Accound->findByid($id);
        $this->set('account', $account);
        
        $this->set('title_for_layout', "Perbarui Saldo Akun");
    }
    
    public function delete($id) {
        
    }
}
?>
