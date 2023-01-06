<?php

namespace App\Controller;

use App\Entity\Calendar\Month;
use App\Repository\EventRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class FrontPlanningController extends AbstractController
{

    #[Route('/planning', name: 'planning')]
    public function index(EventRepository $eventRepository): Response
    {
        try {
        $month = new Month(month: $_GET['month'] ?? null, year: $_GET['year'] ?? null);
        } catch (\Exception $e) {
            $month = new Month();
        }
        $month->__toString();

        $days = ['Lundi','Mardi','Mercred','Jeudi','Vendredi','Samedi','Dimanche'];

        $events = $eventRepository->findAll();
        $eventsMonth = [];
        
        foreach($events as $event){
            $eventsMonth[] = [
                'id' => $event->getId(),
                'startEvent' => $event->getStartEvent()->format('Y-m-d H:i:s'),
                'endEvent' => $event->getEndEvent()->format('Y-m-d H:i:s'),
                'title' => $event->getTitle(),
                'duration' => (ceil(($event->getEndEvent()->format('U')-$event->getStartEvent()->format('U'))/(86400))),
                'description' => $event->getDescription(),
                'backgroundColor' => $event->getBackgroundColor(),
                'borderColor' => $event->getBorderColor(),
                'textColor' => $event->getTextColor(),
                'afficher' => $event->isAfficher(),
                'location' => $event->getLocation(),
                'price' => $event->getPrice(),
            ];
        }
        

        return $this->render('front_planning/index.html.twig', [
            'month' =>  $month,
            'weeks' => intval($month->getWeeks()),
            'lastMonday' =>$month->getStartingDay()->modify('last monday'),
            'start'=>$month->getStartingDay()->format('N'),
            'startMonday'=>$month->getStartingDay(),
            'days' => $days,
            'currentMonth' => date('m'),
            'previousMonth'=> $month->previousMonth()->month,
            'nextMonth'=> $month->nextMonth()->month,
            'yearPreviousMonth' => $month->previousMonth()->year,
            'yearNextMonth'=> $month->nextMonth()->year,
            'eventsMonth' => $eventsMonth,
        ]);
    }
    
}
