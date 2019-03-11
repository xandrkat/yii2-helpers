Extended Helpers for Yii2 Framework
===================================
Extended Helpers for Yii2 Framework

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist xandrkat/yii2-helpers "*"
```

or add

```
"xandrkat/yii2-helpers": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
<?= \xandrkat\helpers\html\Bootstrap::beginRow(['class' => 'sample-class']); ?>
<?= \xandrkat\helpers\html\Bootstrap::beginCol([12,12,12,12], ['class' => 'sample-class']); ?>
// content/any ***
<?= \xandrkat\helpers\html\Bootstrap::endCol(); ?>
<?= \xandrkat\helpers\html\Bootstrap::endRow(); ?>```