<?php

namespace App\Http\Controllers;

use App\Models\People;
use Illuminate\Http\Request;
use App\Services\PeopleService;

class PeopleController extends Controller
{
    private $peopleService;

    public function __construct(PeopleService $peopleService)
    {
        $this->peopleService = $peopleService;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.people.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.people.create');
    }

    public function store(Request $request)
    {
        $this->peopleService->createPerson($request->all());
        return redirect()->route('persons.index')->with('success', 'Persona creada correctamente.');
    }

    public function edit($id)
    {
        $person = $this->personService->getPersonById($id);
        return view('persons.edit', compact('person'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'position' => 'nullable|string|max:255',
            'image' => 'nullable|string',
            'status' => 'required|boolean',
            'person_section_id' => 'required|exists:person_sections,id',
        ]);

        $this->personService->updatePerson($id, $request->all());
        return redirect()->route('persons.index')->with('success', 'Persona actualizada correctamente.');
    }

    public function destroy($id)
    {
        $this->personService->deletePerson($id);
        return redirect()->route('persons.index')->with('success', 'Persona eliminada correctamente.');
    }
}
