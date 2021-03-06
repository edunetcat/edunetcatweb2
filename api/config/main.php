<?php
$params = array_merge ( require (__DIR__ . '/../../common/config/params.php'), require (__DIR__ . '/../../common/config/params-local.php'), require (__DIR__ . '/params.php'), require (__DIR__ . '/params-local.php') );

return [ 
        
        'id' => 'app-api',
        'basePath' => dirname ( __DIR__ ),
        'bootstrap' => [ 
                'log' 
        ],
        'modules' => [ 
                'v1' => [ 
                        'basePath' => '@app/modules/v1',
                        'class' => 'api\modules\v1\Module' 
                ] 
        ],
        'components' => [ 
                'request' => [ 
                        'class' => '\yii\web\Request',
                        'parsers' => [ 
                                'application/json' => 'yii\web\JsonParser' 
                        ] 
                ],
                'user' => [ 
                        'identityClass' => 'common\models\User',
                        'enableAutoLogin' => false 
                ],
                'log' => [ 
                        'traceLevel' => YII_DEBUG ? 3 : 0,
                        'targets' => [ 
                                [ 
                                        'class' => 'yii\log\FileTarget',
                                        'levels' => [ 
                                                'error',
                                                'warning' 
                                        ] 
                                ] 
                        ] 
                ],
                'urlManager' => [ 
                        'enablePrettyUrl' => true,
                        'enableStrictParsing' => true,
                        'showScriptName' => false,
                        'rules' => [ 
                                
                                [ 
                                        'class' => 'yii\rest\UrlRule',
                                        'controller' => 'v1/centres',
                                        'tokens' => [ 
                                                '{id}' => '<id:\\w+>' 
                                        ] 
                                ],
                                [ 
                                        'class' => 'yii\rest\UrlRule',
                                        'controller' => 'v1/tipususuari',
                                        'tokens' => [ 
                                                '{id}' => '<id:\\w+>' 
                                        ] 
                                ],
                                [ 
                                        'class' => 'yii\rest\UrlRule',
                                        'controller' => 'v1/missatges',
                                        'tokens' => [ 
                                                '{id}' => '<id:\\w+>' 
                                        ] 
                                ],
                                [ 
                                        'class' => 'yii\rest\UrlRule',
                                        'controller' => 'v1/cursos',
                                        'tokens' => [ 
                                                '{id}' => '<id:\\w+>' 
                                        ] 
                                ],
                                [ 
                                        'class' => 'yii\rest\UrlRule',
                                        'controller' => 'v1/assignatures',
                                        'tokens' => [ 
                                                '{id}' => '<id:\\w+>' 
                                        ] 
                                ],
                                'v1/persona' => 'v1/persona',
                                'v1/persona/<id>' => 'v1/persona/view',
                                'v1/tipususuari' => 'v1/tipususuari',
                                'v1/tipususuari/<id>' => 'v1/tipususuari',
                                'v1/login/<user>/<password>' => 'v1/login/login',
                                'v1/lamevainfo/<key>' => '/v1/persona/lamevainfo' 
                        ] 
                ] 
        ],
        'params' => $params 
];



