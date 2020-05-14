<?php

namespace App\Console\Commands;

use App\Service\StatServiceInterface;
use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class CovidCountry extends Command
{
    protected $signature = 'covid:country {country}';

    /** @var StatServiceInterface $covidStatService */
    private $covidStatService;

    public function __construct(StatServiceInterface $statService)
    {
        $this->covidStatService = $statService;
        parent::__construct();
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {

        $country = $input->getArgument('country');

        $showByCountry = $this->covidStatService->getByCountry($country);

        dd($showByCountry);

        return 0;
    }
}
