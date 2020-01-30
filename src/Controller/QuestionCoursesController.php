<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * QuestionCourses Controller
 *
 * @property \App\Model\Table\QuestionCoursesTable $QuestionCourses
 *
 * @method \App\Model\Entity\QuestionCourse[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class QuestionCoursesController extends AppController
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
        $questionCourses = $this->paginate($this->QuestionCourses);

        $this->set(compact('questionCourses'));
    }

    /**
     * View method
     *
     * @param string|null $id Question Course id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $questionCourse = $this->QuestionCourses->get($id, [
            'contain' => ['Teachers', 'Courses']
        ]);

        $this->set('questionCourse', $questionCourse);
    }


    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $questionCourse = $this->QuestionCourses->newEntity();
        if ($this->request->is('post')) {
            $questionCourse = $this->QuestionCourses->patchEntity($questionCourse, $this->request->getData());
            if ($this->QuestionCourses->save($questionCourse)) {
                $this->Flash->success(__('The {0} has been saved.', 'Question Course'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Question Course'));
        }
        $teachers = $this->QuestionCourses->Teachers->find('list', ['limit' => 200]);
        $courses = $this->QuestionCourses->Courses->find('list', ['limit' => 200]);
        $this->set(compact('questionCourse', 'teachers', 'courses'));
    }


    /**
     * Edit method
     *
     * @param string|null $id Question Course id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $questionCourse = $this->QuestionCourses->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $questionCourse = $this->QuestionCourses->patchEntity($questionCourse, $this->request->getData());
            if ($this->QuestionCourses->save($questionCourse)) {
                $this->Flash->success(__('The {0} has been saved.', 'Question Course'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Question Course'));
        }
        $teachers = $this->QuestionCourses->Teachers->find('list', ['limit' => 200]);
        $courses = $this->QuestionCourses->Courses->find('list', ['limit' => 200]);
        $this->set(compact('questionCourse', 'teachers', 'courses'));
    }


    /**
     * Delete method
     *
     * @param string|null $id Question Course id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $questionCourse = $this->QuestionCourses->get($id);
        if ($this->QuestionCourses->delete($questionCourse)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Question Course'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Question Course'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
