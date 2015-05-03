<?php

namespace api\modules\v1\controllers;

use yii\rest\ActiveController;
use yii\filters\Cors;

/**
 * Missatges Controller API
 *
 * @author Marcos
 */
class MissatgesController extends ActiveController {
    public function behaviors() {
        $behaviors = parent::behaviors ();
        $behaviors ['corsFilter'] = [ 
                'class' => Cors::className (),
                'cors' => [ 
                        'Origin' => [ 
                                '*' 
                        ],
                        // 'Access-Control-Request-Method' => ['*'],
                        'Access-Control-Request-Method' => [ 
                                'POST',
                                'GET',
                                'PUT',
                                'DELETE',
                                'HEADER',
                                'OPTIONS' 
                        ],
                        'Access-Control-Request-Headers' => [ 
                                '*' 
                        ] 
                ] 
        ];
        // 'Access-Control-Request-Headers' => ['Expiry'],
        
        
        
        return $behaviors;
    }
    public $modelClass = 'api\modules\v1\models\Missatges';
}

