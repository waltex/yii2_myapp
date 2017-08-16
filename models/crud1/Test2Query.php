<?php

namespace app\models\crud1;

/**
 * This is the ActiveQuery class for [[Test2]].
 *
 * @see Test2
 */
class Test2Query extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return Test2[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Test2|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
