<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Beca Model
 *
 * @property \App\Model\Table\PagosTable&\Cake\ORM\Association\BelongsToMany $Pagos
 *
 * @method \App\Model\Entity\Beca newEmptyEntity()
 * @method \App\Model\Entity\Beca newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Beca[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Beca get($primaryKey, $options = [])
 * @method \App\Model\Entity\Beca findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Beca patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Beca[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Beca|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Beca saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Beca[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Beca[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Beca[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Beca[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class BecaTable extends Table
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

        $this->setTable('beca');
        $this->setDisplayField('Id_beca');
        $this->setPrimaryKey('Id_beca');

        $this->belongsToMany('Pagos', [
            'foreignKey' => 'beca_id',
            'targetForeignKey' => 'pago_id',
            'joinTable' => 'pagos_becas',
        ]);
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
            ->scalar('Nombre_Beca')
            ->maxLength('Nombre_Beca', 20)
            ->requirePresence('Nombre_Beca', 'create')
            ->notEmptyString('Nombre_Beca');

        $validator
            ->scalar('Categoria')
            ->maxLength('Categoria', 20)
            ->requirePresence('Categoria', 'create')
            ->notEmptyString('Categoria');

        $validator
            ->scalar('Descripcion')
            ->maxLength('Descripcion', 100)
            ->requirePresence('Descripcion', 'create')
            ->notEmptyString('Descripcion');

        $validator
            ->scalar('Periodo')
            ->maxLength('Periodo', 30)
            ->requirePresence('Periodo', 'create')
            ->notEmptyString('Periodo');

        $validator
            ->integer('Monto')
            ->requirePresence('Monto', 'create')
            ->notEmptyString('Monto');

        $validator
            ->scalar('Duracion_beca')
            ->maxLength('Duracion_beca', 50)
            ->requirePresence('Duracion_beca', 'create')
            ->notEmptyString('Duracion_beca');

        $validator
            ->integer('Pagos')
            ->allowEmptyString('Pagos');

        return $validator;
    }
}
