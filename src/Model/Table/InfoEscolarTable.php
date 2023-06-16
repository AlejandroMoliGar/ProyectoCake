<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * InfoEscolar Model
 *
 * @method \App\Model\Entity\InfoEscolar newEmptyEntity()
 * @method \App\Model\Entity\InfoEscolar newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\InfoEscolar[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\InfoEscolar get($primaryKey, $options = [])
 * @method \App\Model\Entity\InfoEscolar findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\InfoEscolar patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\InfoEscolar[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\InfoEscolar|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\InfoEscolar saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\InfoEscolar[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\InfoEscolar[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\InfoEscolar[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\InfoEscolar[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class InfoEscolarTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('info_escolar');
        $this->setDisplayField('No_Control');
        $this->setPrimaryKey('No_Control');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->scalar('semestre')
            ->maxLength('semestre', 50)
            ->requirePresence('semestre', 'create')
            ->notEmptyString('semestre');

        $validator
            ->scalar('carreras')
            ->maxLength('carreras', 30)
            ->requirePresence('carreras', 'create')
            ->notEmptyString('carreras');

        $validator
            ->numeric('Promedio_Escolar')
            ->requirePresence('Promedio_Escolar', 'create')
            ->notEmptyString('Promedio_Escolar');

        $validator
            ->integer('Id_Personal')
            ->requirePresence('Id_Personal', 'create')
            ->notEmptyString('Id_Personal')
            ->add('Id_Personal', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->isUnique(['Id_Personal']), ['errorField' => 'Id_Personal']);
        $rules->add($rules->isUnique(['No_Control']), ['errorField' => 'No_Control']);

        return $rules;
    }
}
