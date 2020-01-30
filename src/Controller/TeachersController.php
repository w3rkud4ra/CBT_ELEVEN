<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Teachers Controller
 *
 * @property \App\Model\Table\TeachersTable $Teachers
 *
 * @method \App\Model\Entity\Teacher[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TeachersController extends AppController
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
                'contain' => ['Users'],
                'conditions' => [
                    'Teachers.name LIKE' => "%$keyword%"
                ]
            ];
        }else{
            $this->paginate = [
                'limit' => '15',
                'contain' => ['Users']
            ];
        }
        $teacher = $this->paginate($this->Teachers->find('all'));

        $this->set('teachers', $teacher);
    }

    /**
     * View method
     *
     * @param string|null $id Teacher id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $teacher = $this->Teachers->get($id, [
            'contain' => ['Users', 'QuestionCourses' => 
            function($s){
                return $s->contain(['Courses']);
            }
            , 'TeacherCourses' => 
            function($q){
                return $q->contain(['Courses', 'Levels']);
            }]
        ]);

        $this->set('teacher', $teacher);
    }


    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $teacher = $this->Teachers->newEntity();
        if ($this->request->is('post')) {
            $teacher = $this->Teachers->patchEntity($teacher, $this->request->getData());
            if ($this->Teachers->save($teacher)) {
                $this->Flash->success(__('The {0} has been saved.', 'Teacher'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Teacher'));
        }
        $users = $this->Teachers->Users->find('list', ['limit' => 200]);
        $this->set(compact('teacher', 'users'));
    }


    /**
     * Edit method
     *
     * @param string|null $id Teacher id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $teacher = $this->Teachers->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $teacher = $this->Teachers->patchEntity($teacher, $this->request->getData());
            if ($this->Teachers->save($teacher)) {
                $this->Flash->success(__('The {0} has been saved.', 'Teacher'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Teacher'));
        }
        $users = $this->Teachers->Users->find('list', ['limit' => 200]);
        $this->set(compact('teacher', 'users'));
    }


    /**
     * Delete method
     *
     * @param string|null $id Teacher id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $teacher = $this->Teachers->get($id);
        if ($this->Teachers->delete($teacher)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Teacher'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Teacher'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
