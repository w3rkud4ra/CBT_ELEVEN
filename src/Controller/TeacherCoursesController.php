<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * TeacherCourses Controller
 *
 * @property \App\Model\Table\TeacherCoursesTable $TeacherCourses
 *
 * @method \App\Model\Entity\TeacherCourse[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TeacherCoursesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Teachers', 'Courses', 'Levels']
        ];
        $teacherCourses = $this->paginate($this->TeacherCourses);

        $this->set(compact('teacherCourses'));
    }

    /**
     * View method
     *
     * @param string|null $id Teacher Course id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $teacherCourse = $this->TeacherCourses->get($id, [
            'contain' => ['Teachers', 'Courses', 'Levels']
        ]);

        $this->set('teacherCourse', $teacherCourse);
    }


    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $teacherCourse = $this->TeacherCourses->newEntity();
        if ($this->request->is('post')) {
            $teacherCourse = $this->TeacherCourses->patchEntity($teacherCourse, $this->request->getData());
            if ($this->TeacherCourses->save($teacherCourse)) {
                $this->Flash->success(__('The {0} has been saved.', 'Teacher Course'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Teacher Course'));
        }
        $teachers = $this->TeacherCourses->Teachers->find('list', ['limit' => 200]);
        $courses = $this->TeacherCourses->Courses->find('list', ['limit' => 200]);
        $levels = $this->TeacherCourses->Levels->find('list', ['limit' => 200]);
        $this->set(compact('teacherCourse', 'teachers', 'courses', 'levels'));
    }


    /**
     * Edit method
     *
     * @param string|null $id Teacher Course id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $teacherCourse = $this->TeacherCourses->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $teacherCourse = $this->TeacherCourses->patchEntity($teacherCourse, $this->request->getData());
            if ($this->TeacherCourses->save($teacherCourse)) {
                $this->Flash->success(__('The {0} has been saved.', 'Teacher Course'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Teacher Course'));
        }
        $teachers = $this->TeacherCourses->Teachers->find('list', ['limit' => 200]);
        $courses = $this->TeacherCourses->Courses->find('list', ['limit' => 200]);
        $levels = $this->TeacherCourses->Levels->find('list', ['limit' => 200]);
        $this->set(compact('teacherCourse', 'teachers', 'courses', 'levels'));
    }


    /**
     * Delete method
     *
     * @param string|null $id Teacher Course id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $teacherCourse = $this->TeacherCourses->get($id);
        if ($this->TeacherCourses->delete($teacherCourse)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Teacher Course'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Teacher Course'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
