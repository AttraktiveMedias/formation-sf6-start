<?php

//use App\Kernel;

//require_once dirname(__DIR__).'/vendor/autoload_runtime.php';

//return function (array $context) {
//    return new Kernel($context['APP_ENV'], (bool) $context['APP_DEBUG']);
//};

require __DIR__ . '/vendor/autoload.php';

use App\User\Admin;
use App\User\Member;

$seb = new Member("Sébastien", "Seb", "coucou", 45);
$sebou = new Member("Sébastien", "Sebou", "coucou", 45);
$sebou2 = new Member("Sébastien", "Sebou", "coucou", 45);

$sebAdmin = new Admin("SébastienAdmin", "SebAdmin", "coucou", 45);

$seb->auth('Seb', 'coucou');

echo Member::getCount();
echo Admin::getCount();

echo "Unset d'un Member<br/>";
unset($seb);

echo Member::getCount();
echo Admin::getCount();