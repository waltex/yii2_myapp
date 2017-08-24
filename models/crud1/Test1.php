<?php

namespace app\models\crud1;

use Yii;

/**
 * This is the model class for table "test1".
 *
 * @property integer $campoa
 * @property string $campob
 * @property string $campod
 * @property string $campoe
 * @property string $id_test2
 *
 * @property Test2 $idTest2
 */
class Test1 extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'test1';
    }

    /**
     * @return \yii\db\Connection the database connection used by this AR class.
     */
    public static function getDb()
    {
        return Yii::$app->get('db');
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['campoa', 'campob', 'campod', 'campoe', 'id_test2'], 'required'],
            [['campoa', 'id_test2', 'campof'], 'integer'],
            [['campoe'], 'safe'],
            [['campob', 'campod'], 'string', 'max' => 255],
            [['id_test2'], 'exist', 'skipOnError' => true, 'targetClass' => Test2::className(), 'targetAttribute' => ['id_test2' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'campoa' => Yii::t('app', 'label_a1'),
            'campob' => Yii::t('app', 'label_b'),
            'campod' => Yii::t('app', 'label_c'),
            'campoe' => Yii::t('app', 'label_d'),
            'campof' => Yii::t('app', 'label_f'),
            'id_test2' => Yii::t('app', 'label_id_test2'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdTest2()
    {
        return $this->hasOne(Test2::className(), ['id' => 'id_test2']);
    }

    /**
     * @inheritdoc
     * @return Test1Query the active query used by this AR class.
     */
    public static function find()
    {
        return new Test1Query(get_called_class());
    }
}
