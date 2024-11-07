<?php

namespace App\Services;

use App\Repositories\PeopleRepository;

class PeopleService
{
    protected $peopleRepository;

    public function __construct(PeopleRepository $peopleRepository)
    {
        $this->peopleRepository = $peopleRepository;
    }

    public function getAllPersons()
    {
        return $this->peopleRepository->all();
    }

    public function getPersonById(int $id)
    {
        return $this->peopleRepository->find($id);
    }

    public function createPerson(array $data)
    {
        return $this->peopleRepository->create($data);
    }

    public function updatePerson(int $id, array $data)
    {
        return $this->peopleRepository->update($id, $data);
    }

    public function deletePerson(int $id)
    {
        return $this->peopleRepository->delete($id);
    }
}
