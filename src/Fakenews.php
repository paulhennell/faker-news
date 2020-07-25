<?php

namespace Faker\Provider;

class Fakenews extends \Faker\Provider\Base
{
    protected static $leaderjobs = [
        "CEO",
        "banker",
        "consultant",
        "doctor",
        "lawyer",
        "policeman",
        "priest",
        "author",
        "journalist",
        "scientist",
        "teacher",
    ];

    protected static $celebjobs =[
        "actor",
        "actress",
        "author",
        "celebrity",
        "game show host",
        "instagram influencer",
        "movie star",
        "reality show contestant",
        "singer",
        "tv star",
        "viral sensation",
        "you tube star",
    ];

    protected static $leaders = [
        "President",
        "politician",
        "Mayor",
        "Council Member",
        "City leader",

    ];

    protected static $animals =[
        "dog",
        "cat",
        "tiger",
        "panda",
        "parrot",
        "duck",
        "fish",
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


    protected static $adults = [
        "dad",
        "grandma",
        "grandpa",
        "man",
        "mum",
        "pensioner",
        "woman",
    ];

    protected static $children =[
        "baby",
        "boy",
        "child",
        "girl",
        "newborn",
        "teen",
        "toddler",
        "youth",

    ];

    protected static $badthings = [
        "cars",
        "computer virus",
        "flu",
        "obesity",
        "smart phones",
        "sugar",
        "increased tax",
        "vaccines",
        "science",
    ];

    protected static $goodthings = [
        "cats",
        "coffee",
        "smart phones",
        "dogs",
        "children",
        "local hero",
        "award winning movie",
        "award wining book",
        "hit tv show",
        "top single",
        "best selling children's book",
        "new toy fad",
    ];

    protected static $events = [
        "wins lottery",
        "arrested for crime",
        "awarded multi million payout",
        "loses legal case",
        "acquitted",
        "gets married by mistake",
        "caught in embarrassing video",
        "wins international award",
        "gets stuck in tree",
        "chased by dog",
        "kicked out of restaurant",
        "conspired to defraud millions",
        "selected for international team",
        "targeted by online harassment",
        "finds love at last",
        "exhibits local art show",
        "takes to the stage after organizational mix up",
    ];

    protected static $headlineFormats = [
        "What's the truth about {{badthing}}?",
        "Are you at risk of {{badthing}}?",
        "Is it worth becoming a {{job}}?",
        "My fears as a leading {{job}}",
        "Search finds missing {{location}} {{child}} safe at home",
        "{{badthing}} scandal: What we know so far",
        "{{celeb}} shares feelings about {{anything}}",
        "{{group}} demand apology after {{location}} {{person}}'s remarks",
        "{{group}} more intelligent than average",
        "{{group}} want to ban {{badthing}}",
        "{{job}} admits hatred of {{badthing}}",
        "{{job}} praises amazing {{group}}",
        "{{leader}} declares war on {{country}}",
        "{{leader}} honours {{group}}",
        "{{leader}} resigns over {{badthing}} scandal",
        "{{location}} author tops readers favourites",
        "{{location}} {{adult}} {{event}}",
        "{{location}} {{adult}} {{event}}",
        "{{location}} {{group}} call for strike",
        "{{location}} {{group}} demand fairer pay",
        "{{location}} {{person}} {{event}}",
        "{{location}} {{person}} {{event}}",
        "{{location}} {{person}} {{event}}",
        "{{location}} {{person}} {{event}}",
        "{{location}} {{person}} {{event}}",
        "{{person}} admits relationship with {{person}}",
        "{{person}} denies obsession with {{goodthing}}",
        "{{person}} to testify about {{badthing}} scandal",
        "{{person}}: The truth behind the {{badthing}} story",
    ];

    public static function person()
    {
        return static::randomElement(array_merge(
            static::$leaderjobs,
            static::$celebjobs,
            static::$leaders,
            static::$adults,
        ));
    }
    public static function celeb()
    {
        return static::randomElement(array_merge(
            static::$celebjobs,
        ));
    }

    public static function job()
    {
        return static::randomElement(array_merge(
            static::$leaderjobs,
            static::$celebjobs,
        ));
    }

    public static function event()
    {
        return static::randomElement(static::$events);
    }
    public static function leader()
    {
        return static::randomElement(array_merge(
            static::$leaders,
        ));
    }

    public static function adult()
    {
        return static::randomElement(array_merge(
            static::$adults
        ));
    }

    public static function child()
    {
        return static::randomElement(array_merge(
            static::$children
        ));
    }

    public static function group()
    {
        return static::randomElement(array_merge(
            static::$groups
        ));
    }


    public static function goodthing()
    {
        return static::randomElement(array_merge(
            static::$goodthings,
        ));
    }

    public static function badthing()
    {
        return static::randomElement(array_merge(
            static::$badthings
        ));
    }
    public static function anything()
    {
        return static::randomElement(array_merge(
            static::$goodthings,
            static::$badthings
        ));
    }

    public function location()
    {
        return static::randomElement([
            $this->generator->city,
            $this->generator->city,
            $this->generator->state,
            $this->generator->country,
        ]);
    }

    public function headline(): string
    {
        $headline = static::randomElement(static::$headlineFormats);
        return ucfirst($this->generator->parse($this->generator->parse($headline)));
    }
}
