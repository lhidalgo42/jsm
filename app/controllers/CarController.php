<?php

class CarController extends \BaseController
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        function generateRandomString($length = 10)
        {
            $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $charactersLength = strlen($characters);
            $randomString = '';
            for ($i = 0; $i < $length; $i++) {
                $randomString .= $characters[rand(0, $charactersLength - 1)];
            }
            return $randomString;
        }

        if (Input::get('phone') != Input::get('phone2')) {
            return Redirect::back()->withInput()->with('error', 'Los Numeros de Telefono no coinciden.');
        }
        if (Input::get('email') != Input::get('email2')) {
            return Redirect::back()->withInput()->with('error', 'Los Correos No Conciden');
        }

        $car = new Car();
        $car->name = Input::get('name');
        $car->phone = Input::get('phone');
        $car->email = Input::get('email');
        $car->rut = Input::get('rut');
        $car->price = Input::get('price');
        $car->patente = Input::get('patente');
        $car->tipodeventa = Input::get('tipodeventa');
        $car->duenos = Input::get('duenos');
        $car->papeles = Input::get('papeles');
        $car->pintura = Input::get('pintura');
        $car->comentario = Input::get('comentario');
        $car->save();

        $espacificatons = new Specification();
        $espacificatons->cars_id = $car->id;
        $espacificatons->marca = Input::get('marca');
        $espacificatons->modelo = Input::get('modelo');
        $espacificatons->version = Input::get('version');
        $espacificatons->anio = Input::get('anio');
        $espacificatons->tipo_vehiculo = Input::get('tipo_vehiculo');
        $espacificatons->carroceria = Input::get('carroceria');
        $espacificatons->cilindrada = Input::get('cilindrada');
        $espacificatons->kilometraje = Input::get('kilometraje');
        $espacificatons->color = Input::get('color');
        $espacificatons->save();


        $esquipament = new Equipment();
        $esquipament->cars_id = $car->id;
        $esquipament->transmision = Input::get('transmision');
        $esquipament->direccion = Input::get('direccion');
        $esquipament->aire = Input::get('aire');
        $esquipament->radio = Input::get('radio');
        $esquipament->alzavidrios = Input::get('alzavidrios');
        $esquipament->espejos = Input::get('espejos');
        $esquipament->frenos = Input::get('frenos');
        $esquipament->airbag = Input::get('airbag');
        $esquipament->cierre = Input::get('cierre');
        $esquipament->catalitico = Input::get('catalitico');
        $esquipament->combustible = Input::get('combustible');
        $esquipament->llantas = Input::get('llantas');
        $esquipament->puertas = Input::get('puertas');
        $esquipament->alarma = Input::get('alarma');
        $esquipament->save();

        $files = Input::file('files');
        foreach ($files as $file) {
            $ext = $file->getClientOriginalExtension();
            $name = generateRandomString() . "." . $ext;
            $destinationPath = public_path() . '/autos';
                if ($ext == "png" || $ext == "PNG" || $ext == "jpg" || $ext == "JPG") {
                    $photo = new PhotoFile();
                    $photo->cars_id = $car->id;
                    $photo->name = $name;
                    $photo->active = 1;
                    $photo->save();
                    $file->move($destinationPath, $name);
                    $image = Image::make(sprintf($destinationPath.'/%s', $name))->resize(1600, 900)->save();
                }

        }
            return Redirect::to('/')->with('success', 'Auto Agregado Exitosame, Pendiente de Aprovación');

        }




    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public
    function store()
    {
        //
    }


    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public
    function show($id)
    {
        $car = Car::find($id);
        $car->visitas = ($car->visitas+1);
        $car->save();
        $photos = PhotoFile::where('cars_id','=',$id)->get();
        $spects = Specification::where('cars_id','=',$id)->get()->first();
        $equipment = Equipment::where('cars_id','=',$id)->get()->first();
        return json_encode(array('car' => $car,'photos' => $photos,'specification' => $spects,'equipment' => $equipment));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public
    function edit($id)
    {
        //
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return Response
     */
    public
    function update($id)
    {
        //
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public
    function destroy($id)
    {
        //
    }


}
