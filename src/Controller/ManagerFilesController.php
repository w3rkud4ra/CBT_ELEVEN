<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Utility\Security;

/**
 * ManagerFiles Controller
 *
 * @property \App\Model\Table\ManagerFilesTable $ManagerFiles
 *
 * @method \App\Model\Entity\ManagerFile[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ManagerFilesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        // $managerFiles = $this->paginate($this->ManagerFiles);

        // $this->set(compact('managerFiles'));

        $keyword = $this->request->getQuery('keyword');
        if (!empty($keyword)) {
            # code...
            $this->paginate = [
                'limit' => '15',
                'conditions' => [
                    'ManagerFiles.name LIKE' => "%$keyword%"
                ]
            ];
        }else{
            $this->paginate = [
                'limit' => '15'
            ];
        }
        $managerFile = $this->paginate($this->ManagerFiles->find('all'));

        $this->set('managerFiles', $managerFile);

        $managerFile = $this->ManagerFiles->newEntity();
        if ($this->request->is('post')) {
            // $managerFile = $this->ManagerFiles->patchEntity($managerFile, $this->request->getData());
            $myname = $this->request->getData()['file']['name'];
            $mytmp = $this->request->getData()['file']['tmp_name'];
            $mysize = $this->request->getData()['file']['size'];
            $myext = substr(strchr($myname, "."), 1);
            $ganteng = substr(str_shuffle(MD5(microtime())), 0, 4);
            $mypath = "upload/".Security::hash($myname).$ganteng.".".$myext;
            $file = $this->ManagerFiles->patchEntity($managerFile, $this->request->getData());
            $file->file = Security::hash($myname).$ganteng.".".$myext;
            $file->path = $mypath;
            // debug($this->ManagerFiles->save($file));
            if ($mysize > 20000) {
                if (move_uploaded_file($mytmp, WWW_ROOT.$mypath)) {
                    if ($this->ManagerFiles->save($file)) {
                        $this->Flash->success(__('The {0} has been saved.', 'Manager File'));
        
                        return $this->redirect(['action' => 'index']);
                    }
                    $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Manager File'));
                }
                $this->Flash->error(__('Upload Error. Please, try again.', 'Manager File'));
            }
            $this->Flash->error(__('Maksimal Upload 2 MB. Please, try again.', 'Manager File'));
            
        }
        $this->set(compact('managerFile'));
    }

    /**
     * View method
     *
     * @param string|null $id Manager File id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $managerFile = $this->ManagerFiles->get($id, [
            'contain' => []
        ]);

        $this->set('managerFile', $managerFile);
    }


    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $managerFile = $this->ManagerFiles->newEntity();
        if ($this->request->is('post')) {
            // $managerFile = $this->ManagerFiles->patchEntity($managerFile, $this->request->getData());
            $myname = $this->request->getData()['file']['name'];
            $mytmp = $this->request->getData()['file']['tmp_name'];
            $mysize = $this->request->getData()['file']['size'];
            $myext = substr(strchr($myname, "."), 1);
            $mypath = "upload/".Security::hash($myname).".".$myext;
            $file = $this->ManagerFiles->patchEntity($managerFile, $this->request->getData());
            $file->file = Security::hash($myname).".".$myext;
            $file->path = $mypath;
            // debug($this->ManagerFiles->save($file));
            if ($mysize > 20000) {
                if (move_uploaded_file($mytmp, WWW_ROOT.$mypath)) {
                    if ($this->ManagerFiles->save($file)) {
                        $this->Flash->success(__('The {0} has been saved.', 'Manager File'));
        
                        return $this->redirect(['action' => 'index']);
                    }
                    $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Manager File'));
                }
                $this->Flash->error(__('Upload Error. Please, try again.', 'Manager File'));
            }
            $this->Flash->error(__('Maksimal Upload 2 MB. Please, try again.', 'Manager File'));
            
        }
        $this->set(compact('managerFile'));
    }


    /**
     * Edit method
     *
     * @param string|null $id Manager File id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $managerFile = $this->ManagerFiles->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $managerFile = $this->ManagerFiles->patchEntity($managerFile, $this->request->getData());
            if ($this->ManagerFiles->save($managerFile)) {
                $this->Flash->success(__('The {0} has been saved.', 'Manager File'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Manager File'));
        }
        $this->set(compact('managerFile'));
    }


    /**
     * Delete method
     *
     * @param string|null $id Manager File id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $managerFile = $this->ManagerFiles->get($id);
        if ($this->ManagerFiles->delete($managerFile)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Manager File'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Manager File'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
