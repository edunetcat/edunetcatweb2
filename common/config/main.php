<?php
return [ 
        'vendorPath' => dirname ( dirname ( __DIR__ ) ) . '/vendor',
        'components' => [ 
                'cache' => [ 
                        'class' => 'yii\caching\FileCache' 
                ],
                'request' => [ 
                        'enableCookieValidation' => true,
                        'enableCsrfValidation' => true,
                        'cookieValidationKey' => 'xxxxxxx' 
                ] 
        ] 
];
