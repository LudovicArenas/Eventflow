<?php

namespace App\Services;

use App\Models\Event;
use App\Repositories\EventRepository;
use Illuminate\Support\Facades\Storage;

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

        // Vérifier si une bannière a été envoyée
        if (isset($data['banner'])) {

        // Enregistrer l'image dans storage/app/public/banners
            $data['banner'] = $data['banner']->store('banners', 'public');
        }

        // Enregistrer l'événement en base
        return $this->repository->create($data);
    }


    public function updateEvent(Event $event, array $data)
    {
        
        // Vérifier si une nouvelle bannière est envoyée
        if (isset($data['banner'])) {

            // Supprimer l'ancienne image si elle existe
            if ($event->banner) {
                Storage::disk('public')->delete($event->banner);
            }

            // Enregistrer la nouvelle image
            $data['banner'] = $data['banner']->store('banners', 'public');
        }


        // Enregistrer l'événement en base
        return $this->repository->update($event, $data);
    }


    public function deleteEvent(Event $event)
    {
        return $this->repository->delete($event);
    }

}