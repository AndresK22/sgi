<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EntradaMedicamento;

class EntradaMedicamentoController extends Controller
{
    public function reporteEntradas()
    {
        $entradas = EntradaMedicamento::selectRaw('medicamentos.codBarras as codigoBarras, medicamentos.nombreMedicamento as nombreMedicamento, detalle_entradas.cantidadEntrada as cantidad, detalle_entradas.precioEntrada as precioUnitario, proveedors.nombreProveedor as proveedor, entrada_medicamentos.fechaEntrada as fechaEntrada, detalle_entradas.cantidadEntrada * detalle_entradas.precioEntrada as montoEntrada')
        ->join('detalle_entradas', 'detalle_entradas.entrada_medicamento_id', '=', 'entrada_medicamentos.id')
        ->join('medicamentos', 'medicamentos.id', '=', 'detalle_entradas.medicamento_id')
        ->join('proveedors', 'proveedors.id', '=', 'entrada_medicamentos.proveedor_id')
        ->get();

        $entradasArray = $entradas->toArray(); // Convertir la colección a un array

        return response()->json(['data' => $entradasArray]);
        //return view('reportes.reporteEntradas', ['entradas' => $entradas]);
    }
}
