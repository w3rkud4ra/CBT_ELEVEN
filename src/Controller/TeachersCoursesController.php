<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * TeachersCourses Controller
 *
 * @property \App\Model\Table\TeachersCoursesTable $TeachersCourses
 *
 * @method \App\Model\Entity\TeachersCourse[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TeachersCoursesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Teachers', 'Courses']
        ];
        $teachersCourses = $this->paginate($this->TeachersCourses);

        $this->set(compact('teachersCourses'));
    }

    /**
     * View method
     *
     * @param string|null $id Teachers Course id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $teachersCourse = $this->TeachersCourses->get($id, [
            'contain' => ['Teachers', 'Courses']
        ]);

        $this->set('teachersCourse', $teachersCourse);
    }


    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $teachersCourse = $this->TeachersCourses->newEntity();
        if ($this->request->is('post')) {
            $teachersCourse = $this->TeachersCourses->patchEntity($teachersCourse, $this->request->getData());
            if ($this->TeachersCourses->save($teachersCourse)) {
                $this->Flash->success(__('The {0} has been saved.', 'Teachers Course'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Teachers Course'));
        }
        $teachers = $this->TeachersCourses->Teachers->find('list', ['limit' => 200]);
        $courses = $this->TeachersCourses->Courses->find('list', ['limit' => 200]);
        $this->set(compact('teachersCourse', 'teachers', 'courses'));
    }


    /**
     * Edit method
     *
     * @param string|null $id Teachers Course id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $teachersCourse = $this->TeachersCourses->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $teachersCourse = $this->TeachersCourses->patchEntity($teachersCourse, $this->request->getData());
            if ($this->TeachersCourses->save($teachersCourse)) {
                $this->Flash->success(__('The {0} has been saved.', 'Teachers Course'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Teachers Course'));
        }
        $teachers = $this->TeachersCourses->Teachers->find('list', ['limit' => 200]);
        $courses = $this->TeachersCourses->Courses->find('list', ['limit' => 200]);
        $this->set(compact('teachersCourse', 'teachers', 'courses'));
    }


    /**
     * Delete method
     *
     * @param string|null $id Teachers Course id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $teachersCourse = $this->TeachersCourses->get($id);
        if ($this->TeachersCourses->delete($teachersCourse)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Teachers Course'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Teachers Course'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
