<?php

namespace App\Console\Commands;

use App\Model\CovidStat;
use App\Service\StatServiceInterface;
use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class CovidGet extends Command
{
    private $covidStatService;

    protected $signature = 'covid:get {id}';

    public function __construct(StatServiceInterface $statService)
    {
        $this->covidStatService = $statService;
        parent::__construct();
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $id = $input->getArgument('id');

        $stat = $this->covidStatService->get($id);

        dd($stat);

        return 0;
    }

}
