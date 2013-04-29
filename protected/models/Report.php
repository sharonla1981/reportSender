<?php

/**
 * This is the model class for table "tbl_report".
 *
 * The followings are the available columns in table 'tbl_report':
 * @property integer $id
 * @property string $name
 * @property integer $user_id
 * @property string $create_time
 * @property integer $create_user_id
 * @property string $update_time
 * @property integer $update_user_id
 * 
 * * The followings are the available model relations:
 * 
 * @property User[] $users
 * @property Send[] $sends
 */
class Report extends ReportSenderActiveRecord
{
    /**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Report the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_report';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, name,create_time, create_user_id, update_time, update_user_id', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
                    'user' => array(self::BELONGS_TO, 'User', 'user_id'),
                    'sends' => array(self::HAS_MANY,'Sendto', 'report_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'name' => 'Report Name',
                        'create_time' => 'Create Time',
			'create_user_id' => 'Create User',
			'update_time' => 'Update Time',
			'update_user_id' => 'Update User',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('name',$this->name,true);
                $criteria->compare('user_id',$this->user_id);
                $criteria->compare('create_time',$this->create_time,true);
		$criteria->compare('create_user_id',$this->create_user_id);
		$criteria->compare('update_time',$this->update_time,true);
		$criteria->compare('update_user_id',$this->update_user_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
        
        //fileExist validator, make sure that report's file deos not exist in the reports directory
        /*public function fileExist($attribute,$params)
        {
            $fileName = isset($_FILES['Report']['name']['path'])? $_FILES['Report']['name']['path'] : null;
            if (file_exists($params['folder'].$fileName))
            {
                $this->addError($attribute, 'The file is already exist');
            }
                        
        }*/
        
        /*public function getRelatedParameters()
        {
            $params = CHtml::listData($this->parameters, 'id', 'name');
            $htmlList = '<ul>';
            
            foreach ($params as $key=>$value)
            {
                $htmlList.= sprintf('<li>%s</li>', CHtml::link($value, array('parameter/view', 'id' => $key)));
            }
            
            $htmlList .= '</ul>';
            
            return $htmlList;
        }*/
        
        /** * @return array of valid users for this project, indexed by user IDs */ 
        public function getUserOptions() 
        { 
            $usersArray = CHtml::listData($this->users, 'id', 'username');
            return $usersArray;           
        }


}