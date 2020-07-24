<?php

namespace Faker\Provider;


class Fakenews extends \Faker\Provider\Base
{

    protected static $people = [
        "CEO",
        "actor",
        "actress",
        "celebrity",
        "cheif scientist",
        "cute dog",
        "star footballer",
        "King",
        "panda",
        "President",
        "Prime minister",
        "prisoner",
        "robot",
        "hit singer",
    ];

    protected static $groups = [
        "children",
        "doctors",
        "firefighters",
        "heavily obese",
        "journalists",
        "lawyers",
        "pensioners",
        "people",
        "police officers",
        "politicians",
        "programers",
        "scientists",
        "seniors",
        "shop workers",
        "teachers",
        "teenagers",
    ];

    protected static $singleactions = [
        'declares war on',
        'admits relationship with',
        'shares feelings about',
        'to testify about',
        'admits hatred of',
        'denies obsession with',
        'honours',
        'praises',
    ];

    protected static $groupactions = [
        'declare war on',
        'want to ban',
        'call for action on',
        'demand apology from',
        'to hold vote on'
    ];

    protected static $things = [
        'cars',
        'cats',
        'coffee',
        'computers',
        'dogs',
        'flu',
        'men',
        'obesity',
        'smart phones',
        'sugar',
        'tax',
        'women',
        'vacines'
    ];


    protected static $headlineFormats = [
        '{{person}} {{singleaction}} {{thing}}',
        '{{group}} {{groupaction}} {{thing}}',
        '{{person}} {{singleaction}} {{group}}',
        '{{group}} {{groupaction}} {{group}}',
    ];

    public static function person()
    {
        return static::randomElement(static::$people);
    }

    public static function group()
    {
        return static::randomElement(static::$groups);
    }

    public static function groupaction()
    {
        return static::randomElement(static::$groupactions);
    }
    public static function singleaction()
    {
        return static::randomElement(static::$singleactions);
    }

    public static function thing()
    {
        return static::randomElement(static::$things);
    }

    public function headline(): string
    {
        $headline = static::randomElement(static::$headlineFormats);
        return ucfirst($this->generator->parse($headline));
    }
}
