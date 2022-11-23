<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\db\ActiveRecord;
use app\models\Coso_channuoi;
use yii\data\Pagination;
/**
 * ContactForm is the model behind the contact form.
 */
class Channuoi_loaichuongtrai extends ActiveRecord
{
    public $cosochannuoi_id;
    public $loaichuongtrai_id;
    public $status;
    public $created_by;
    public $updated_by;  


    /**
     * @return array the validation rules.
     */
    public function rules()
    {
     
        return [
           
            // name, email, subject and body are required
            [['cosochannuoi_id', 'loaichuongtrai_id', 'status'], 'required'],
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

    public function getCoso_channuoi()
    {
       return $this->hasOne(coso_channuoi::class,['id' => 'cosochannuoi_id']);
    }

    public function getAllData(){
          // $list = coso_channuoi::find()->orderBy('id','ASC')->all();       
          $query = channuoi_loaichuongtrai::find();
        
          // get the total number of users
          $count = $query->count();
          //creating the pagination object
          $pagination = new Pagination(['totalCount' => $count, 'defaultPageSize' => 10]);
          //limit the query using the pagination and retrieve the users
          $list = $query->offset($pagination->offset)
             ->limit($pagination->limit)->orderby('id','ASC')->asArray()->with('coso_channuoi')
             ->all();
          
           
          $data = [            
               'list' => $list,              
               'pagination' => $pagination,            
          ];
          return $data;
    }
}
