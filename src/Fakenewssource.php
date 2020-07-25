<?php

namespace Faker\Provider;

class Fakenewssource extends \Faker\Provider\Base
{
    protected static $sufixes = [
        'Herald',
        'Mail',
        'News',
        'Post',
        'Record',
        'Report',
        'Star',
        'Sun',
        'Telegraph',
        'Times',
        'Tribune',
        'Update',
    ];

    protected static $prefixes = [
        'Daily',
        'Morning',
    ];

    protected static $newspaperFormats = [
        "The {{location}} {{suffix}}",
        "The {{location}} {{suffix}}",
        "The {{prefix}} {{suffix}}",
        "{{location}} {{suffix}}",
        "{{location}} {{suffix}}",
    ];

    public static function prefix()
    {
        return static::randomElement(static::$prefixes);
    }

    public static function suffix()
    {
        return static::randomElement(static::$sufixes);
    }

    public function location()
    {
        return static::randomElement([
            $this->generator->city,
            $this->generator->state,
            $this->generator->country,
        ]);
    }

    public function TVNewsName(): String
    {
        $letter = [
            strtoupper(static::randomLetter()),
            strtoupper(static::randomLetter()),
            strtoupper(static::randomLetter()),
        ];
        $suffix = static::randomElement([
            ' News',
            ' News',
            ' News',
            ' 247',
            '',
            ' TV',
        ]);
        return static::randomElement([
            $letter[0] . $letter[0] . $letter[1] . $suffix,
            $letter[0] . $letter[1] . $letter[1] . $suffix,
            $letter[0] . $letter[0] . $letter[1] . $suffix,
            $letter[0] . $letter[1] . $letter[2] . $suffix,
        ]);
    }

    public function NewspaperName(): string
    {
        $newspapername = static::randomElement(static::$newspaperFormats);
        return ucwords($this->generator->parse($newspapername));
    }

    public function NewssourceName() : string
    {
        return static::randomElement([
            $this->NewspaperName(),
            $this->NewspaperName(),
            $this->NewspaperName(),
            $this->TVNewsName(),
        ]);
    }
}
