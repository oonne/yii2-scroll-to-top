yii2-scroll-top
=====================
A Yii 2 widget to add scroll-to-top button. Base on the .animate jQuery function.

Installation
------------
The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist oonne/yii2-scroll-to-top "*"
```

or add

```
"oonne/yii2-scroll-to-top": "*"
```

to the require section of your `composer.json` file.

Usage
------------
```php
<?= \oonne\scrollTop\ScrollTop::widget() ?>
```
```php
<?php use oonne\scrollTop\ScrollTop; ?>
<?= ScrollTop::widget([
    'options' => 'custom-css class-name'
]); ?>
```
```php
<?php use oonne\scrollTop\ScrollTop; ?>
<?= ScrollTop::widget([
    'tagContent' => '<i class="top-icon"></i>',
    'options' => 'custom-css class-name',
]); ?>
```