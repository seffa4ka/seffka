<?php

namespace app\models;

use yii\base\BaseObject;
use yii\base\NotSupportedException;
use yii\web\IdentityInterface;

class User extends BaseObject implements IdentityInterface
{
    /**
     * {@inheritdoc}
     * @throws NotSupportedException
     */
    public static function findIdentity($id)
    {
        throw new NotSupportedException('"findIdentity" is not implemented.');
    }

    /**
     * {@inheritdoc}
     * @throws NotSupportedException
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        throw new NotSupportedException('"findIdentityByAccessToken" is not implemented.');
    }

    /**
     * {@inheritdoc}
     * @throws NotSupportedException
     */
    public function getId()
    {
        throw new NotSupportedException('"getId" is not implemented.');
    }

    /**
     * {@inheritdoc}
     * @throws NotSupportedException
     */
    public function getAuthKey()
    {
        throw new NotSupportedException('"getAuthKey" is not implemented.');
    }

    /**
     * {@inheritdoc}
     * @throws NotSupportedException
     */
    public function validateAuthKey($authKey)
    {
        throw new NotSupportedException('"validateAuthKey" is not implemented.');
    }
}
