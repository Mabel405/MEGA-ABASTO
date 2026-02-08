<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreVentaRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'fecha_hora' => 'required',
            'impuesto' => 'required',
            'numero_comprobante' => 'required|unique:ventas,numero_comprobante|max:255',
            'total' => 'required|numeric',

            // AQUÍ estaban los errores
            'cliente_id' => 'required|exists:clientes,id',
            'user_id' => 'required|exists:users,id',
            'comprobante_id' => 'required|exists:comprobantes,id',
        ];
    }
}
