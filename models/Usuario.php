<?php

namespace app\models;

use Yii;
use yii\web\IdentityInterface;
/**
 * This is the model class for table "usuario".
 *
 * @property integer $id
 * @property integer $id_persona
 * @property integer $id_perfil
 * @property string $usuario
 * @property string $clave
 * @property integer $estado
 * @property string $clave_temporal
 * @property string $link_verificacion
 * @property string $ini_session
 * @property string $close_session
 *
 * @property Perfil $idPerfil
 */
class Usuario extends \yii\db\ActiveRecord implements IdentityInterface
{
    /**
     * @inheritdoc
     */
    public $username;
    public $auth_key;
    public $descripcion;
    public $ruta;
    public $mid;
    public $apmaterno;
    public $appaterno;
    public $nombre;
    public $nombrex,$id_personax,$item_namex,$clavex;
    public static function tableName()
    {
        return 'usuario';
    }
    public function rules()
    {
        return [
            [['id_persona', 'estado'], 'integer'],
            [['nombre','item_name','clave'], 'required','on'=>'nuevo'],
            [['clavex'], 'required','on'=>'modifica'],
            [['ini_session', 'close_session', 'created_at'], 'safe'],
            [['item_name'], 'string', 'max' => 200],
            [['usuario'], 'string', 'max' => 100],
            [['clave', 'clave_temporal'], 'string', 'max' => 20],
            [['link_verificacion'], 'string', 'max' => 250]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'user_id' => 'User ID',
            'id_persona' => 'Id Persona',
            'item_name' => 'Item Name',
            'usuario' => 'Usuario',
            'clave' => 'Clave',
            'estado' => 'Estado',
            'clave_temporal' => 'Clave Temporal',
            'link_verificacion' => 'Link Verificacion',
            'ini_session' => 'Ini Session',
            'close_session' => 'Close Session',
            'created_at' => 'Created At',
        ];
    }
    public function scenarios()
    {
        return [
            'nuevo'=>['nombre','usuario','id_persona', 'clave','estado','item_name','clave'],
            'modifica'=>['nombrex','id_personax','item_namex','clavex','clave'],
            'consulta'=>['link_verificacion','clave'],
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getItemName()
    {
        return $this->hasOne(Perfil::className(), ['name' => 'item_name']);
    }
    
    public function getPersona()
    {
        return $this->hasOne(Persona::className(), ['id' => 'id_persona']);
    }
    /*asda*/
    public static function findIdentity($id)
    {      
        return static::findOne($id);
    }
    
    public function getId()
    {
        return $this->getPrimaryKey();
    }
        
    public static function findByUsername($username)
    {
       return static::find()->where('usuario=:usuario and estado=1',[':usuario' => $username])->one();
    }
    
    public function validatePassword($password,$username)
    {
        return static::find()->where('clave=:clave and usuario=:usuario and estado=1',[':clave' => $password,':usuario' => $username])->one();
    }
    public function getUsername()
    {
        
        return $this->username;
    }
    
    
    
    public static function findIdentityByAccessToken($token, $type = null)
    {
        
        if ($user['accessToken'] === $token) {
           return new static($user);
        }       
        return null;
    }
    
    public function getAuthKey()
    {
        return $this->auth_key;
    }
    
    public function validateAuthKey($authKey)
    {
        return $this->getAuthKey() === $authKey;
    }
}
