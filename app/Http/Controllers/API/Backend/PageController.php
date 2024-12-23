<?php

namespace App\Http\Controllers\API\Backend;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function index(Request $request)
    {
        // Usar 'size' como parámetro para el tamaño de página
        $size = $request->get('size', 10); // Valor predeterminado: 10
        $page = $request->get('page', 1); // Página actual (predeterminado: 1)
        $sortField = $request->get('sortField', null); // Campo de ordenación
        $sortOrder = $request->get('sortOrder', null); // Dirección de ordenación

        // Consulta base
        $query = Page::query();

        // Aplicar ordenación si se especifica
        if ($sortField && $sortOrder) {
            $query->orderBy($sortField, $sortOrder);
        }

        // Paginar resultados
        $pages = $query->paginate($size, ['*'], 'page', $page);

        // Estructura de respuesta
        return response()->json([
            'page' => $pages->currentPage(),
            'pageCount' => $pages->lastPage(),
            'sortField' => $sortField,
            'sortOrder' => $sortOrder,
            'totalCount' => $pages->total(),
            'data' => $pages->items(),
        ]);
    }
    
}
