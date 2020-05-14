<?php

class StatServiceTest extends TestCase
{
    use Laravel\Lumen\Testing\DatabaseMigrations;
    use Laravel\Lumen\Testing\DatabaseTransactions;

    /** @var \App\Service\StatService $statService */
    private $statService;

    public function setUp(): void
    {
        $this->statService = app(\App\Service\StatService::class);
    }

    public function testAddStat()
    {
        $data = [
            'country_name' => 'Ukraine',
            'ill' => 2,
            'good' => 3,
            'death' => 0
        ];

        $this->statService->add($data);


    }

    public function testAddStatFailed()
    {

    }

    public function testGetCountryByName()
    {

    }

    public function testGetCountryByNameNull()
    {

    }

    public function testGetStat()
    {

    }
}
