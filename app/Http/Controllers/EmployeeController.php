<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Section;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    //
    public function index(Page $page, Section $section)
{
    $employees = $section->employees; // Obtener empleados de la sección
    return view('backend.pagesConfigurations.employees.index', compact('employees', 'section', 'page'));
}

    public function create(Page $page, Section $section)
    {
        // dd('aqui');
        return view('backend.pagesConfigurations.employees.create', compact('section', 'page')); // Formulario de creación
    }

    public function store(Request $request, Section $section)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'nullable|string|max:255',
            'image' => 'nullable|string|max:255',
            'status' => 'required|boolean',
        ]);

        $section->employees()->create($validated); // Crear empleado en la sección

        return redirect()->route('employees.index', compact('section'))->with('success', 'Empleado creado con éxito.');
    }

    public function edit(Section $section, Employee $employee)
    {
        return view('employees.edit', compact('page', 'section', 'employee')); // Formulario de edición
    }

    public function update(Request $request, Section $section, Employee $employee)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'nullable|string|max:255',
            'image' => 'nullable|string|max:255',
            'status' => 'required|boolean',
        ]);

        $employee->update($validated); // Actualizar empleado

        return redirect()->route('employees.index', compact('section'))->with('success', 'Empleado actualizado con éxito.');
    }

    public function destroy(Section $section, Employee $employee)
    {
        $employee->delete(); // Eliminar empleado

        return redirect()->route('employees.index', compact('section'))->with('success', 'Empleado eliminado con éxito.');
    }
}