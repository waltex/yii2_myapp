<?php

namespace app\models\crud1;

use Yii;

/**
 * This is the model class for table "test2".
 *
 * @property string $id
 * @property string $nome
 *
 * @property Test1[] $test1s
 */
class Test2 extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'test2';
    }

    /**
     * @return \yii\db\Connection the database connection used by this AR class.
     */
    public static function getDb()
    {
        return Yii::$app->get('db2');
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id'], 'integer'],
            [['nome'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'label_id2'),
            'nome' => Yii::t('app', 'label_nome'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTest1s()
    {
        return $this->hasMany(Test1::className(), ['id_test2' => 'id']);
    }

    /**
     * @inheritdoc
     * @return Test2Query the active query used by this AR class.
     */
    public static function find()
    {
        return new Test2Query(get_called_class());
    }
}
