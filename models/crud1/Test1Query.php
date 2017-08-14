<?php

namespace app\models\crud1;

/**
 * This is the ActiveQuery class for [[Test1]].
 *
 * @see Test1
 */
class Test1Query extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return Test1[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Test1|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
