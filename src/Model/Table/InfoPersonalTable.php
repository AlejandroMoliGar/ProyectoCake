<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * InfoPersonal Model
 *
 * @method \App\Model\Entity\InfoPersonal newEmptyEntity()
 * @method \App\Model\Entity\InfoPersonal newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\InfoPersonal[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\InfoPersonal get($primaryKey, $options = [])
 * @method \App\Model\Entity\InfoPersonal findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\InfoPersonal patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\InfoPersonal[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\InfoPersonal|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\InfoPersonal saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\InfoPersonal[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\InfoPersonal[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\InfoPersonal[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\InfoPersonal[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class InfoPersonalTable extends Table
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

        $this->setTable('info_personal');
        $this->setDisplayField('Id_Personal');
        $this->setPrimaryKey('Id_Personal');
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
            ->scalar('Nombre')
            ->maxLength('Nombre', 20)
            ->requirePresence('Nombre', 'create')
            ->notEmptyString('Nombre');

        $validator
            ->scalar('Apellido_Paterno')
            ->maxLength('Apellido_Paterno', 20)
            ->requirePresence('Apellido_Paterno', 'create')
            ->notEmptyString('Apellido_Paterno');

        $validator
            ->scalar('Apellido_Materno')
            ->maxLength('Apellido_Materno', 20)
            ->requirePresence('Apellido_Materno', 'create')
            ->notEmptyString('Apellido_Materno');

        $validator
            ->scalar('Telefono')
            ->maxLength('Telefono', 15)
            ->requirePresence('Telefono', 'create')
            ->notEmptyString('Telefono');

        $validator
            ->scalar('Correo_electronico')
            ->maxLength('Correo_electronico', 30)
            ->requirePresence('Correo_electronico', 'create')
            ->notEmptyString('Correo_electronico');

        return $validator;
    }
}
