<?php

namespace app\models;
use Yii;
use yii\base\NotSupportedException;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;
/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property string $username
 * @property string $auth_key
 * @property string $password_hash
 * @property string $password_reset_token
 * @property string $email
 * @property int $status
 * @property int $role
 * @property int $created_at
 * @property int $update_at
 */
class User extends ActiveRecord implements IdentityInterface
{
    const STATUS_DELETED = 0;
    const STATUS_ACTIVE = 10;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%users}}';
    }

    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
        ];
    }

    /**
     * @inheritdoc
    */
    public function rules()
    {
        return [
            ['status', 'default', 'value' => self::STATUS_ACTIVE],
            ['status', 'in', 'range' => [self::STATUS_ACTIVE, self::STATUS_DELETED]],
        ];
    }

    public static function findIdentity($id) {
        return static::findOne(['id' => $id, 'status' => self::STATUS_ACTIVE]);
        $user = self::find()
        ->where([
        “id” => $id
        ])
        ->one();
        if (!count($user)) {
        return null;
        }
        return new static($user);
        }
        
        /**
        * @inheritdoc
        */
        public static function findIdentityByAccessToken($token, $userType = null) {
        throw new NotSupportedException('"findIdentityByAccessToken" is not implemented.');
        $user = self::find()
        ->where([“accessToken” => $token])
        ->one();
        if (!count($user)) {
        return null;
        }
        return new static($user);
        }
        
        /**
        * Finds user by username
        *
        * @param string $username
        * @return static|null
        */
        public static function findByUsername($username) {
        return static::findOne(['username' => $username, 'status' => self::STATUS_ACTIVE]);
        $user = self::find()
        ->where([
        “username” => $username
        ])
        ->one();
        if (!count($user)) {
        return null;
        }
        return new static($user);
        }
        
        /**
        * @inheritdoc
        */
        public function getId() {
        return $this->getPrimaryKey();
        }
        
        /**
        * @inheritdoc
        */
        public function getAuthKey() {
        return $this->authKey;
        }
        
        /**
        * @inheritdoc
        */
        public function validateAuthKey($authKey) {
        return $this->authKey === $authKey;
        }
        
        /**
        * Validates password
        *
        * @param string $password password to validate
        * @return boolean if password provided is valid for current user
        */
        public function validatePassword($password) {
        return Yii::$app->security->validatePassword($password, $this->password_hash);
        return $this->password === $password;
        }
        /**
     * Generates password hash from password and sets it to the model
    *
    * @param string $password
    */
    public function setPassword($password)
    {
        $this->password_hash = Yii::$app->security->generatePasswordHash($password);
    }

    /**
     * Generates "remember me" authentication key
    */
    public function generateAuthKey()
    {
        $this->auth_key = Yii::$app->security->generateRandomString();
    }

    /**
     * {@inheritdoc}
     */
    
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'auth_key' => 'Auth Key',
            'password_hash' => 'Password Hash',
            'password_reset_token' => 'Password Reset Token',
            'email' => 'Email',
            'status' => 'Status',
            'role' => 'Role',
            'created_at' => 'Created At',
            'update_at' => 'Update At',
        ];
    }
}
