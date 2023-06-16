<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * PagosBecas Model
 *
 * @method \App\Model\Entity\PagosBeca newEmptyEntity()
 * @method \App\Model\Entity\PagosBeca newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\PagosBeca[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\PagosBeca get($primaryKey, $options = [])
 * @method \App\Model\Entity\PagosBeca findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\PagosBeca patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\PagosBeca[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\PagosBeca|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PagosBeca saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PagosBeca[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\PagosBeca[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\PagosBeca[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\PagosBeca[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class PagosBecasTable extends Table
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

        $this->setTable('pagos_becas');
        $this->setDisplayField('Id_Pagos');
        $this->setPrimaryKey('Id_Pagos');
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
            ->scalar('SI')
            ->maxLength('SI', 20)
            ->requirePresence('SI', 'create')
            ->notEmptyString('SI');

        $validator
            ->scalar('NO')
            ->maxLength('NO', 20)
            ->requirePresence('NO', 'create')
            ->notEmptyString('NO');

        return $validator;
    }
}
