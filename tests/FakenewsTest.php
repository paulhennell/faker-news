<?php

namespace Paulhennell\FakerNews\Tests;

use Faker\Factory;
use Faker\Generator;
use Faker\Provider\Fakenews;
use Faker\Provider\Fakenewssource;

use PHPUnit\Framework\TestCase;

class FakenewsTest extends TestCase
{
    private $faker;

    public function setUp(): void
    {
        $faker = Factory::create();
        $faker->addProvider(new Fakenews($faker));
        $faker->addProvider(new Fakenewssource($faker));
        $this->faker = $faker;
    }

    public function test_can_make_headline_string()
    {
        $this->assertIsString($this->faker->headline());
    }

    public function test_can_make_newsource()
    {
        $this->assertIsString($this->faker->TVNewsName());
        $this->assertIsString($this->faker->NewspaperName());
        $this->assertIsString($this->faker->NewssourceName());
    }
}
