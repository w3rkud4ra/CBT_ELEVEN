<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * LevelsExams Controller
 *
 * @property \App\Model\Table\LevelsExamsTable $LevelsExams
 *
 * @method \App\Model\Entity\LevelsExam[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class LevelsExamsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Levels']
        ];
        $levelsExams = $this->paginate($this->LevelsExams);

        $this->set(compact('levelsExams'));
    }

    /**
     * View method
     *
     * @param string|null $id Levels Exam id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $levelsExam = $this->LevelsExams->get($id, [
            'contain' => ['Levels']
        ]);

        $this->set('levelsExam', $levelsExam);
    }


    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $levelsExam = $this->LevelsExams->newEntity();
        if ($this->request->is('post')) {
            $levelsExam = $this->LevelsExams->patchEntity($levelsExam, $this->request->getData());
            if ($this->LevelsExams->save($levelsExam)) {
                $this->Flash->success(__('The {0} has been saved.', 'Levels Exam'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Levels Exam'));
        }
        $levels = $this->LevelsExams->Levels->find('list', ['limit' => 200]);
        $this->set(compact('levelsExam', 'levels'));
    }


    /**
     * Edit method
     *
     * @param string|null $id Levels Exam id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $levelsExam = $this->LevelsExams->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $levelsExam = $this->LevelsExams->patchEntity($levelsExam, $this->request->getData());
            if ($this->LevelsExams->save($levelsExam)) {
                $this->Flash->success(__('The {0} has been saved.', 'Levels Exam'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Levels Exam'));
        }
        $levels = $this->LevelsExams->Levels->find('list', ['limit' => 200]);
        $this->set(compact('levelsExam', 'levels'));
    }


    /**
     * Delete method
     *
     * @param string|null $id Levels Exam id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $levelsExam = $this->LevelsExams->get($id);
        if ($this->LevelsExams->delete($levelsExam)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Levels Exam'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Levels Exam'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
