@extends('backend.layouts.app')

@section('title')
    <title>Configuración de Páginas</title>
@endsection

@section('content')
    <main class="grow content pt-5">
        <div class="container-fixed">
            <div class="flex flex-wrap items-center justify-between gap-5 pb-7.5">
                <div>
                    <h1 class="text-xl font-semibold text-gray-900">
                        Configuración de Página: {{ $page->title }}
                    </h1>
                    <p class="text-sm text-gray-600">Secciones y Empleados relacionados</p>
                </div>
            </div>

            <div class="grid gap-5 lg:gap-7.5">
                @foreach($sections as $section)
                    <div class="card">
                        <div class="card-header">
                            <h2 class="text-lg font-semibold">{{ $section->title }}</h2>
                        </div>
                        <div class="card-body">
                            @if($section->employees->isEmpty())
                                <p class="text-center text-gray-500">No hay empleados asignados a esta sección.</p>
                            @else
                                <table class="table-auto w-full text-left border-collapse border border-gray-200">
                                    <thead>
                                        <tr>
                                            <th class="border border-gray-300 px-4 py-2">Nombre del Empleado</th>
                                            <th class="border border-gray-300 px-4 py-2">Email</th>
                                            <th class="border border-gray-300 px-4 py-2">Cargo</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($section->employees as $employee)
                                            <tr>
                                                <td class="border border-gray-300 px-4 py-2">{{ $employee->name }}</td>
                                                <td class="border border-gray-300 px-4 py-2">{{ $employee->email }}</td>
                                                <td class="border border-gray-300 px-4 py-2">{{ $employee->position }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </main>
@endsection
