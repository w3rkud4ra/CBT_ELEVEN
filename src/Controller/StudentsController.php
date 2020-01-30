<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Students Controller
 *
 * @property \App\Model\Table\StudentsTable $Students
 *
 * @method \App\Model\Entity\Student[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class StudentsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $keyword = $this->request->getQuery('keyword');
        if (!empty($keyword)) {
            # code...
            $this->paginate = [
                'limit' => '15',
                'contain' => ['Levels'],
                'conditions' => [
                    'Students.name LIKE' => "%$keyword%"
                ]
            ];
        }else{
            $this->paginate = [
                'limit' => '15',
                'contain' => ['Levels']
            ];
        }
        $student = $this->paginate($this->Students->find('all'));

        $this->set('students', $student);
    }

    /**
     * View method
     *
     * @param string|null $id Student id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $student = $this->Students->get($id, [
            'contain' => ['Levels', 'Answers', 'Results', 'Levels.Majors']
        ]);

        $this->set('student', $student);
    }


    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $student = $this->Students->newEntity();
        if ($this->request->is('post')) {
            $student = $this->Students->patchEntity($student, $this->request->getData());
            if ($this->Students->save($student)) {
                $this->Flash->success(__('The {0} has been saved.', 'Student'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Student'));
        }
        $levels = $this->Students->Levels->find('list', ['limit' => 200]);
        $this->set(compact('student', 'levels'));
    }


    /**
     * Edit method
     *
     * @param string|null $id Student id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $student = $this->Students->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $student = $this->Students->patchEntity($student, $this->request->getData());
            if ($this->Students->save($student)) {
                $this->Flash->success(__('The {0} has been saved.', 'Student'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Student'));
        }
        $levels = $this->Students->Levels->find('list', ['limit' => 200]);
        $this->set(compact('student', 'levels'));
    }


    /**
     * Delete method
     *
     * @param string|null $id Student id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $student = $this->Students->get($id);
        if ($this->Students->delete($student)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Student'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Student'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
