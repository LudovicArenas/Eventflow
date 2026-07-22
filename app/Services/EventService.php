<?php

namespace App\Services;

use App\Models\Event;
use App\Repositories\EventRepository;

class EventService
{

    protected EventRepository $repository;


    public function __construct(EventRepository $repository)
    {
        $this->repository = $repository;
    }


    public function getEvents()
    {
        return $this->repository->all();
    }


    public function createEvent(array $data)
    {
        return $this->repository->create($data);
    }


    public function updateEvent(Event $event, array $data)
    {
        return $this->repository->update($event, $data);
    }


    public function deleteEvent(Event $event)
    {
        return $this->repository->delete($event);
    }

}