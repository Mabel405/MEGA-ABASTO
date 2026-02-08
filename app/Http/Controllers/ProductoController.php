<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreProductoRequest;
use App\Http\Requests\UpdateProductoRequest;
use App\Models\Marca;
use App\Models\Presentacione;
use App\Models\Categoria;
use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Exception;

class ProductoController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:ver-producto|crear-producto|editar-producto|eliminar-producto',['only' => ['index']]);
        $this->middleware('permission:crear-producto',['only' => ['create','store']]);
        $this->middleware('permission:editar-producto',['only' => ['edit','update']]);
        $this->middleware('permission:eliminar-producto',['only' => ['destroy']]);
    }
    public function index()
    {
        $productos = Producto::with([
            'categorias.caracteristica',
            'marca.caracteristica',
            'presentacione.caracteristica'
        ])->latest()->get();

        return view('producto.index', compact('productos'));
    }

    public function create()
    {
        $marcas = Marca::join('caracteristicas as c', 'marcas.caracteristica_id', '=', 'c.id')
            ->select('marcas.id as id', 'c.nombre as nombre')
            ->where('c.estado', 1)
            ->get();

        $presentaciones = Presentacione::join('caracteristicas as c', 'presentaciones.caracteristica_id', '=', 'c.id')
            ->select('presentaciones.id as id', 'c.nombre as nombre')
            ->where('c.estado', 1)
            ->get();

        $categorias = Categoria::join('caracteristicas as c', 'categorias.caracteristica_id', '=', 'c.id')
            ->select('categorias.id as id', 'c.nombre as nombre')
            ->where('c.estado', 1)
            ->get();

        return view('producto.create', compact('marcas', 'presentaciones', 'categorias'));
    }

    public function store(StoreProductoRequest $request)
    {
        // dd($request);
        try {
            DB::beginTransaction();
            //Tabla Productos
            $producto = new Producto();

            if ($request->hasFile('img_path')) {
                $name = $producto->handleUploadImage($request->file('img_path'));
            } else {
                $name = null;
            }

            $producto->fill([
                'codigo' => $request->codigo,
                'nombre' => $request->nombre,
                'descripcion' => $request->descripcion,
                'fecha_vencimiento' => $request->fecha_vencimiento,
                'img_path' => $name,
                'marca_id' => $request->marca_id,
                'presentacione_id' => $request->presentacione_id
            ]);

            $producto->save();

            //Tabla categoria producto
            $categorias = $request->get('categorias');
            $producto->categorias()->attach($categorias);


            DB::commit();

        } catch (Exception $e) {
            DB::rollBack();
        }

        return redirect()->route('productos.index')->with('success', 'Producto registrado');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(Producto $producto)
    {
        $marcas = Marca::join('caracteristicas as c', 'marcas.caracteristica_id', '=', 'c.id')
            ->select('marcas.id as id', 'c.nombre as nombre')
            ->where('c.estado', 1)
            ->get();

        $presentaciones = Presentacione::join('caracteristicas as c', 'presentaciones.caracteristica_id', '=', 'c.id')
            ->select('presentaciones.id as id', 'c.nombre as nombre')
            ->where('c.estado', 1)
            ->get();

        $categorias = Categoria::join('caracteristicas as c', 'categorias.caracteristica_id', '=', 'c.id')
            ->select('categorias.id as id', 'c.nombre as nombre')
            ->where('c.estado', 1)
            ->get();

        return view('producto.edit', compact('producto','marcas','presentaciones','categorias'));
    }

    public function update(UpdateProductoRequest $request, Producto $producto)
    {
        try{
            DB::beginTransaction();

            if ($request->hasFile('img_path')) {
                $name = $producto->handleUploadImage($request->file('img_path'));
                //Eliminar si existiera una imagen
                if(Storage::disk('public')->exists('productos/'.$producto->img_path)){
                    Storage::disk('public')->delete('productos/'.$producto->img_path);

                }

            } else {
                $name = $producto->img_path;

            }

            $producto->fill([
                'codigo' => $request->codigo,
                'nombre' => $request->nombre,
                'descripcion' => $request->descripcion,
                'fecha_vencimiento' => $request->fecha_vencimiento,
                'img_path' => $name,
                'marca_id' => $request->marca_id,
                'presentacione_id' => $request->presentacione_id
            ]);

            $producto->save();

            //Tabla categoria producto
            $categorias = $request->get('categorias');
            $producto->categorias()->sync($categorias);


            DB::commit();
        }catch(Exception $e){
            DB::rollBack();
        }

        return redirect()->route('productos.index')->with('success','Producto editado');
    }

    public function destroy(string $id)
    {
        {
        $message = '';
        $producto = Producto::find($id);
        if ($producto->estado ==1){
            Producto::where('id',$producto->id)
                ->update([
                    'estado'=> 0
                ]);
            $message = 'Producto eliminada';
        } else {
            Producto::where('id',$producto->id)
                ->update([
                    'estado'=> 1
                ]);
            $message = 'Producto restaurada';
        }
        return redirect()->route('productos.index')->with('success', $message);
        
        }
    }
}
