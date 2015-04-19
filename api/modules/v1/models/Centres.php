<?php

namespace api\modules\v1\models;

use \yii\db\ActiveRecord;

/**
 * Model centres
 *
 * @author Marcos
 */
class Centres extends ActiveRecord {
	/**
	 * @inheritdoc
	 */
	public static function tableName() {
		return 'centres';
	}
	
	/**
	 * Define rules for validation
	 */
	public function rules() {
		return [ 
				[ 
						[ 
								'nom' 
						],
						'required' 
				],
				[ 
						[ 
								'direccio',
								'telefon',
								'poblacio' 
						],
						'default' 
				] 
		];
	}
}