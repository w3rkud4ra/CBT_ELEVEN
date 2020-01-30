<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * LevelsExams Model
 *
 * @property \App\Model\Table\LevelsTable&\Cake\ORM\Association\BelongsTo $Levels
 *
 * @method \App\Model\Entity\LevelsExam get($primaryKey, $options = [])
 * @method \App\Model\Entity\LevelsExam newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\LevelsExam[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\LevelsExam|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\LevelsExam saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\LevelsExam patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\LevelsExam[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\LevelsExam findOrCreate($search, callable $callback = null, $options = [])
 */
class LevelsExamsTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('levels_exams');
        $this->setDisplayField('levels_id');
        $this->setPrimaryKey(['levels_id', 'examsid']);

        $this->belongsTo('Levels', [
            'foreignKey' => 'levels_id',
            'joinType' => 'INNER'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('examsid')
            ->allowEmptyString('examsid', null, 'create');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['levels_id'], 'Levels'));

        return $rules;
    }
}
