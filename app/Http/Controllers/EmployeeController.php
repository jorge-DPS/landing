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
        // dd($page);
        $employees = $section->employees; // Obtener empleados de la sección
        return view('backend.pagesConfigurations.employees.index', compact('employees', 'section', 'page'));
    }

    public function create(Page $page, Section $section)
    {
        // dd('aqui');
        return view('backend.pagesConfigurations.employees.create', compact('section', 'page')); // Formulario de creación
    }

    public function store(Page $page, Section $section, Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'image' => 'nullable|string|max:255',
            'status' => 'required|boolean',
        ]);

        // dd($validated);

        $section->employees()->create($validated); // Crear empleado en la sección

        return redirect()->route('employees.index', compact('section'))->with('success', 'Empleado creado con éxito.');
    }

    public function edit(Page $page, Section $section, Employee $employee)
    {
        // dd($employee);
        return view('backend.pagesConfigurations.employees.edit', compact('page', 'section', 'employee')); // Formulario de edición
    }

    public function update(Request $request, Section $section, Employee $employee)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'required|string|max:255', // Validación requerida para "position"
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Valida que sea una imagen
            'status' => 'required|boolean', // Valida que status sea 1 o 0
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