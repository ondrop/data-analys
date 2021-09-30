<?php

namespace App\Service;

use App\Entity\CsseCovid19DailyReport;
use App\Entity\CsseCovid19DailyReportUS;
use App\Model\CsseCovid19DailyReportDTO;
use App\Model\CsseCovid19DailyReportUSDTO;
use App\Repository\CsseCovid19DailyReportRepository;
use App\Repository\CsseCovid19DailyReportUSRepository;
use Doctrine\ORM\EntityManagerInterface;
use Josantonius\File\File;
use Psr\Log\LoggerInterface;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class Covid19DataService
{
    private const DAILY_REPORT = '/csse_covid_19_daily_reports/';
    private const DAILY_REPORT_US = '/csse_covid_19_daily_reports_us/';
    private const FILES_PATH = 'https://raw.githubusercontent.com/CSSEGISandData/COVID-19/master/csse_covid_19_data';

    private CsseCovid19DailyReportRepository $dailyReportRepository;
    private EntityManagerInterface $entityManager;
    private SerializerInterface $serializer;
    private HttpClientInterface $httpClient;
    private LoggerInterface $logger;
    private CsseCovid19DailyReportUSRepository $dailyReportUSRepository;

    public function __construct(
        CsseCovid19DailyReportRepository $dailyReportRepository,
        EntityManagerInterface $entityManager,
        SerializerInterface $serializer,
        HttpClientInterface $httpClient,
        LoggerInterface $logger,
        CsseCovid19DailyReportUSRepository $dailyReportUSRepository
    )
    {
        $this->dailyReportRepository = $dailyReportRepository;
        $this->entityManager = $entityManager;
        $this->serializer = $serializer;
        $this->httpClient = $httpClient;
        $this->logger = $logger;
        $this->dailyReportUSRepository = $dailyReportUSRepository;
    }

    public function getCsseCovid19DailyReportData(): int
    {
        $dataCount = 0;
        $dateTime = new \DateTime('2019-12-01');
        if ($entity = $this->dailyReportRepository->findOneBy([], ['lastUpdate' => 'DESC'])) {
            $dateTime = $entity->getLastUpdate();
            $dateTime->add(new \DateInterval('P1D'));
        }

        $today = new \DateTime();
        while ($dateTime <= $today) {
            if (File::exists(self::FILES_PATH . self::DAILY_REPORT . $dateTime->format('m-d-Y') . '.csv')) {
                $this->logger->info('Day ' . $dateTime->format('Y-m-d'));
                $dataCollection = [];
                try {
                    $response = $this->httpClient->request('GET', self::FILES_PATH . self::DAILY_REPORT . $dateTime->format('m-d-Y') . '.csv');
                    $csvData = $response->getContent();
                } catch (\Exception $exception) {
                    $this->logger->error($exception->getMessage());
                    continue;
                }

                /** @var CsseCovid19DailyReportDTO[] $data */
                $data = $this->serializer->deserialize($csvData, CsseCovid19DailyReportDTO::class . '[]', 'csv');

                foreach ($data as $report) {
                    $entity = new CsseCovid19DailyReport();
                    $entity
                        ->setFips($report->getFips())
                        ->setAdmin2($report->getAdmin2())
                        ->setProvinceState($report->getProvinceState())
                        ->setCountryRegion($report->getCountryRegion())
                        ->setLastUpdate(new \DateTime($report->getLastUpdate()))
                        ->setLat((float)$report->getLat())
                        ->setLongField((float)$report->getLongField())
                        ->setConfirmed((int)$report->getConfirmed())
                        ->setDeathes((int)$report->getDeathes())
                        ->setRecovered((int)$report->getRecovered())
                        ->setActive((int)$report->getActive())
                        ->setCombinedKey($report->getCombinedKey())
                        ->setIncidentRate((float)$report->getIncidentRate())
                        ->setCaseFatalityRatio((float)$report->getCaseFatalityRatio());

                    $dataCollection[] = $entity;
                }

                foreach ($dataCollection as $entity) {
                    $this->entityManager->persist($entity);
                }

                $this->entityManager->flush();

                $this->logger->info('Received ' . count($dataCollection) . ' rows');
                $dataCount += count($dataCollection);
            }

            $dateTime->add(new \DateInterval('P1D'));
        }

        return $dataCount;
    }

    public function getCsseCovid19DailyReportUSData(): int
    {
        $dataCount = 0;
        $dateTime = new \DateTime('2019-12-01');
        if ($entity = $this->dailyReportUSRepository->findOneBy([], ['lastUpdate' => 'DESC'])) {
            $dateTime = $entity->getLastUpdate();
            $dateTime->add(new \DateInterval('P1D'));
        }

        $today = new \DateTime();
        while ($dateTime <= $today) {
            if (File::exists(self::FILES_PATH . self::DAILY_REPORT_US . $dateTime->format('m-d-Y') . '.csv')) {
                $this->logger->info('Day ' . $dateTime->format('Y-m-d'));
                $dataCollection = [];
                try {
                    $response = $this->httpClient->request('GET', self::FILES_PATH . self::DAILY_REPORT_US . $dateTime->format('m-d-Y') . '.csv');
                    $csvData = $response->getContent();
                } catch (\Exception $exception) {
                    $this->logger->error($exception->getMessage());
                    continue;
                }

                /** @var CsseCovid19DailyReportUSDTO[] $data */
                $data = $this->serializer->deserialize($csvData, CsseCovid19DailyReportUSDTO::class . '[]', 'csv');

                foreach ($data as $report) {
                    $entity = new CsseCovid19DailyReportUS();
                    $entity
                        ->setProvinceState($report->getProvinceState())
                        ->setCountryRegion($report->getCountryRegion())
                        ->setLastUpdate(new \DateTime($report->getLastUpdate()))
                        ->setLat((float)$report->getLat())
                        ->setLongField((float)$report->getLongField())
                        ->setConfirmed((int)$report->getConfirmed())
                        ->setDeaths((int)$report->getDeathes())
                        ->setRecovered((int)$report->getRecovered())
                        ->setActive((int)$report->getActive())
                        ->setFips($report->getFips())
                        ->setIncidentRate((float)$report->getIncidentRate())
                        ->setTotalTestResults((int)$report->getTotalTestResults())
                        ->setPeopleHospitalized((int)$report->getPeopleHospitalized())
                        ->setCaseFatalityRatio((float)$report->getCaseFatalityRatio())
                        ->setUid((int)$report->getUid())
                        ->setIso3($report->getIso3())
                        ->setTestingRate((float)$report->getTestingRate())
                        ->setHospitalizationRate((float)$report->getHospitalizationRate());

                    $dataCollection[] = $entity;
                }

                foreach ($dataCollection as $entity) {
                    $this->entityManager->persist($entity);
                }

                $this->entityManager->flush();

                $this->logger->info('Received ' . count($dataCollection) . ' rows');
                $dataCount += count($dataCollection);
            }

            $dateTime->add(new \DateInterval('P1D'));
        }

        return $dataCount;
    }
}
