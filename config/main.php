<?php
/**
 * @author Semenov Alexander <semenov@skeeks.com>
 * @link http://skeeks.com/
 * @copyright 2010 SkeekS (СкикС)
 * @date 15.06.2015
 */
return [
    'bootstrap' => ['log'],

    'components' =>
    [
        'i18n' => [
            'translations' =>
            [
                'skeeks/logdb/app' => [
                    'class'             => 'yii\i18n\PhpMessageSource',
                    'basePath'          => '@skeeks/cms/logDbTarget/messages',
                    'fileMap' => [
                        'skeeks/logdb/app' => 'app.php',
                    ],
                ]
            ]
        ],

        'logDbTargetSettings' => [
            'class'     => 'skeeks\cms\logDbTarget\components\LogDbTargetSettings',
        ],

        'log' => [
            'targets' => [
                [
                    'class'     => 'skeeks\cms\logDbTarget\LogDbTarget',
                ],
            ],
        ]
    ],

    'modules' =>
    [
        'logDbTarget' => [
            'class'         => '\skeeks\cms\logDbTarget\Module',
        ]
    ]
];