Extended Helpers for Yii2 Framework
===================================
Extended Helpers for Yii2 Framework

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist xandrkat/yii2-helpers "*"

*************

composer require xandrkat/yii2-helpers 
```

or add

```
"xandrkat/yii2-helpers": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code:

```php
<?= \xandrkat\helpers\Html::beginDiv(['class' => 'sample-class']); ?>
<?= \xandrkat\helpers\Html::beginP(['class' => 'sample-class']); ?>
<?= \xandrkat\helpers\Html::begin<any>(['class' => 'sample-class']); ?>

// content/any ***

<?= \xandrkat\helpers\Bootstrap::endDiv(); ?>
<?= \xandrkat\helpers\Bootstrap::endP(); ?>
<?= \xandrkat\helpers\Bootstrap::end<any>(); ?>

//or

<?= \xandrkat\helpers\Html::div($content, $attribs); ?>
<?= \xandrkat\helpers\Html::<any>($content, $attribs); ?>
```