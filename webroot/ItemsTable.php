<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Items Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Users
 * @property \Cake\ORM\Association\HasMany $Messages
 *
 * @method \App\Model\Entity\Item get($primaryKey, $options = [])
 * @method \App\Model\Entity\Item newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Item[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Item|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Item patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Item[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Item findOrCreate($search, callable $callback = null, $options = [])
 */
class ItemsTable extends Table
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

        $this->table('items');
        $this->displayField('title');
        $this->primaryKey('user_id');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('Messages', [
            'foreignKey' => 'item_id'
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
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('category_name', 'create')
            ->notEmpty('category_name');

        $validator
            ->requirePresence('title', 'create')
            ->notEmpty('title');

        $validator
            ->requirePresence('description', 'create')
            ->notEmpty('description');

        $validator
            ->decimal('price')
            ->requirePresence('price', 'create')
            ->notEmpty('price');

        $validator
            ->requirePresence('img1', 'create')
            ->notEmpty('img1');

        $validator
            ->requirePresence('img2', 'create')
            ->notEmpty('img2');

        $validator
            ->requirePresence('img3', 'create')
            ->notEmpty('img3');

        $validator
            ->requirePresence('img4', 'create')
            ->notEmpty('img4');

        $validator
            ->integer('sold')
            ->requirePresence('sold', 'create')
            ->notEmpty('sold');

        $validator
            ->dateTime('date_posted')
            ->requirePresence('date_posted', 'create')
            ->notEmpty('date_posted');

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
        $rules->add($rules->existsIn(['user_id'], 'Users'));

        return $rules;
    }
}
