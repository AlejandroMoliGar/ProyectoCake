<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * InfoBecas Model
 *
 * @method \App\Model\Entity\InfoBeca newEmptyEntity()
 * @method \App\Model\Entity\InfoBeca newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\InfoBeca[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\InfoBeca get($primaryKey, $options = [])
 * @method \App\Model\Entity\InfoBeca findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\InfoBeca patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\InfoBeca[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\InfoBeca|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\InfoBeca saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\InfoBeca[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\InfoBeca[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\InfoBeca[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\InfoBeca[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class InfoBecasTable extends Table
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

        $this->setTable('info_becas');
        $this->setDisplayField('ID_IBeca');
        $this->setPrimaryKey('ID_IBeca');
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
            ->nonNegativeInteger('No_Control')
            ->requirePresence('No_Control', 'create')
            ->notEmptyString('No_Control');

        $validator
            ->integer('Id_Personal')
            ->requirePresence('Id_Personal', 'create')
            ->notEmptyString('Id_Personal');

        $validator
            ->nonNegativeInteger('Id_beca')
            ->requirePresence('Id_beca', 'create')
            ->notEmptyString('Id_beca');

        return $validator;
    }
}
