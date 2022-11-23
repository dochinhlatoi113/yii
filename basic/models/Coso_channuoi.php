<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\db\ActiveRecord;
use app\models\Channuoi_loaichuongtrai;
 
/**
 * ContactForm is the model behind the contact form.
 */
class Coso_channuoi extends ActiveRecord
{
    public $maso;
    public $chucoso;
    public $lat;
    public $long;
    public $diachi;  
    public $dienthoai;
    public $tongdan;
    public $cocau;
    public $ghichu;
    public $xulychatthai_id;
    public $status;
    public $created_by;
    public $updated_by;
    public $masocu;
    public $sonha;
    public $tenduong;
    public $tenpho;
    public $khupho;
    public $gheom;
    public $phuongxa_id;
    public $maphuong;
    /**
     * @return array the validation rules.
     */
    public function rules()
    {
     
        return [
           
            // name, email, subject and body are required
            [['maso', 'chucoso', 'lat','long'.'diachi','dienthoai','tongdan','cocau','ghichu','xulychathtai_id','status','created_by','updated_by','created_at','updated_at','masocu','sonha','tento','khupho','geom','phuongxa_id','maphuong'], 'required'],
            // // email has to be a valid email address
            // ['email', 'email'],
            // // verifyCode needs to be entered correctly
            // ['verifyCode', 'captcha'],
        ];
    }

    /**
     * @return array customized attribute labels
     */
    // public function attributeLabels()
    // {
    //     return [
    //         'verifyCode' => 'Verification Code',
    //     ];
    // }

    /**
     * Sends an email to the specified email address using the information collected by this model.
     * @param string $email the target email address
     * @return bool whether the model passes validation
     */
    // public function contact($email)
    // {
    //     if ($this->validate()) {
    //         Yii::$app->mailer->compose()
    //             ->setTo($email)
    //             ->setFrom([Yii::$app->params['senderEmail'] => Yii::$app->params['senderName']])
    //             ->setReplyTo([$this->email => $this->name])
    //             ->setSubject($this->subject)
    //             ->setTextBody($this->body)
    //             ->send();

    //         return true;
    //     }
    //     return false;
    // }

    public function getChannuoi_loaichuongtrai()
    {
       return $this->hasMany(channuoi_loaichuongtrai::class,['cosochannuoi_id'=>'id']);
    }
}
