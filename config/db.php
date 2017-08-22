<?php
/*
  return [
  'class' => 'yii\db\Connection',
  'dsn' => 'mysql:host=localhost;dbname=yii2basic',
  'username' => 'root',
  'password' => '',
  'charset' => 'utf8',
  ];
 */
return [
    'components' => [
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=localhost;dbname=yii2basic',
            'username' => 'root',
            'password' => '',
            'charset' => 'utf8',
        ],
        'db2' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=localhost;dbname=yii2basic',
            'username' => 'root',
            'password' => '',
            'charset' => 'utf8',
        ],
    ],
];
