<?php

namespace App\Command;

use App\Service\Covid19DataService;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class CsseCovid19DailyReportDownloadDataCommand extends Command
{
    protected static $defaultName = 'app:covid-19:daily-report:download';

    private Covid19DataService $covid19DataService;

    public function __construct(
        Covid19DataService $covid19DataService
    )
    {
        parent::__construct();
        $this->covid19DataService = $covid19DataService;
    }

    protected function configure(): void
    {
        $this->setDescription('Download Covid19 data');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        try {
            $rowCount = $this->covid19DataService->getCsseCovid19DailyReportData();
            $output->writeln("Received $rowCount rows");
        } catch (\Exception $exception) {
            $output->writeln($exception->getMessage());
            return Command::FAILURE;
        }

        return Command::SUCCESS;
    }
}
