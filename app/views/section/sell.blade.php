<div class="container">
    <style>
        select{
            margin: auto;
            margin-bottom: 3em;
        }
    </style>
    {{Form::open(array('url' => '/create/car', 'files' => true))}}
    <div class="row">
        <h4 class="h4"><strong>Datos Personales</strong></h4>
        <div class="col-md-4">
            <input type="text" class="form-control" id="name" name="name" placeholder="Nombre" value="{{Input::old('name')}}">
        </div>
        <div class="col-md-4">
            <input type="text" class="form-control" id="phone" name="phone" placeholder="Telefono" value="{{Input::old('phone')}}">
        </div>
        <div class="col-md-4">
            <input type="text" class="form-control" id="phone2" name="phone2" placeholder="Confirme Telefono" value="{{Input::old('phone2')}}">
        </div>
        <div class="col-md-4">
            <input class="form-control" type="text" id="rut" name="rut" placeholder="RUT" value="{{Input::old('rut')}}">
        </div>
        <div class="col-md-4">
            <input class="form-control" type="email" id="email" name="email" placeholder="Direcion de Correo" value="{{Input::old('email')}}">
        </div>
        <div class="col-md-4">
            <input class="form-control" type="email" id="email2" name="email2" placeholder="Confirme Direcion de Correo" value="{{Input::old('email2')}}">
        </div>
        <div class="col-md-4">
            <input type="text" id="patente" name="patente" class="form-control" placeholder="Patente" value="{{Input::old('patente')}}">
        </div>
        <div class="col-md-4">
            <input type="number" class="form-control" name="price" id="precio" placeholder="Precio" value="{{Input::old('precio')}}">
        </div>
    </div>
    <div class="row">
        <h4 class="h4"><strong>Especificaciones Tecnicas</strong></h4>

        <div class="col-md-4">
            <select id="marca" name="marca" class="form-control">
                <option value="No Especificado">Seleccione Marca</option>
                <option value="ACADIAN ">ACADIAN</option>
                <option value="ACURA">ACURA</option>
                <option value="ALFA ROMEO ">ALFA ROMEO</option>
                <option value="AMERICAN MOTORS ">AMERICAN MOTORS</option>
                <option value="APRILIA ">APRILIA</option>
                <option value="ARO ">ARO</option>
                <option value="ASIA MOTORS ">ASIA MOTORS</option>
                <option value="ASTON MARTIN ">ASTON MARTIN</option>
                <option value="AUDI ">AUDI</option>
                <option value="AUSTIN ">AUSTIN</option>
                <option value="AUTORRAD ">AUTORRAD</option>
                <option value="BAJAJ ">BAJAJ</option>
                <option value="BASHAN ">BASHAN</option>
                <option value="BEIGING ">BEIGING</option>
                <option value="BENELLI ">BENELLI</option>
                <option value="BENYI ">BENYI</option>
                <option value="BENZHOU ">BENZHOU</option>
                <option value="BIGFOOT ">BIGFOOT</option>
                <option value="BIMOTA ">BIMOTA</option>
                <option value="BMW ">BMW</option>
                <option value="BOATIAN ">BOATIAN</option>
                <option value="BRILLIANCE ">BRILLIANCE</option>
                <option value="BUELL ">BUELL</option>
                <option value="BUICK ">BUICK</option>
                <option value="BULTACO ">BULTACO</option>
                <option value="BYD ">BYD</option>
                <option value="CADILLAC ">CADILLAC</option>
                <option value="CAGIVA ">CAGIVA</option>
                <option value="CFMOTO ">CFMOTO</option>
                <option value="CHANGAN ">CHANGAN</option>
                <option value="CHANGHE ">CHANGHE</option>
                <option value="CHERY ">CHERY</option>
                <option value="CHEVROLET ">CHEVROLET</option>
                <option value="CHRYSLER ">CHRYSLER</option>
                <option value="CITROEN ">CITROEN</option>
                <option value="COMMER ">COMMER</option>
                <option value="DACIA ">DACIA</option>
                <option value="DAELIM ">DAELIM</option>
                <option value="DAEWOO ">DAEWOO</option>
                <option value="DAIHATSU ">DAIHATSU</option>
                <option value="DATSUN ">DATSUN</option>
                <option value="DAYUN ">DAYUN</option>
                <option value="DODGE ">DODGE</option>
                <option value="DONGFENG ">DONGFENG</option>
                <option value="DUCATI ">DUCATI</option>
                <option value="DUNNA ">DUNNA</option>
                <option value="DYNA ">DYNA</option>
                <option value="EUROMOT ">EUROMOT</option>
                <option value="F.S.O. ">F.S.O.</option>
                <option value="FERRARI ">FERRARI</option>
                <option value="FIAT ">FIAT</option>
                <option value="FLSTF ">FLSTF</option>
                <option value="FORD ">FORD</option>
                <option value="FOTON ">FOTON</option>
                <option value="FOX ">FOX</option>
                <option value="FXA ">FXA</option>
                <option value="G.M.C. ">G.M.C.</option>
                <option value="GAC GONOW ">GAC GONOW</option>
                <option value="GARELLI ">GARELLI</option>
                <option value="GEELY ">GEELY</option>
                <option value="GILERA ">GILERA</option>
                <option value="GREAT WALL ">GREAT WALL</option>
                <option value="GUZZI ">GUZZI</option>
                <option value="HAFEI ">HAFEI</option>
                <option value="HAIMA ">HAIMA</option>
                <option value="HARLEY ">HARLEY</option>
                <option value="HARLEY-DAVIDSON ">HARLEY-DAVIDSON</option>
                <option value="HARTFORD ">HARTFORD</option>
                <option value="HENSIM ">HENSIM</option>
                <option value="HERO-PUCH ">HERO-PUCH</option>
                <option value="HILLMAN ">HILLMAN</option>
                <option value="HONDA ">HONDA</option>
                <option value="HUSABERG ">HUSABERG</option>
                <option value="HUSQVARNA ">HUSQVARNA</option>
                <option value="HYOSUNG ">HYOSUNG</option>
                <option value="HYUNDAI ">HYUNDAI</option>
                <option value="INDIAN ">INDIAN</option>
                <option value="INFINITI ">INFINITI</option>
                <option value="INTERNATIONAL ">INTERNATIONAL</option>
                <option value="ISUZU ">ISUZU</option>
                <option value="JAC ">JAC</option>
                <option value="JAGUAR ">JAGUAR</option>
                <option value="JAWA ">JAWA</option>
                <option value="JEEP ">JEEP</option>
                <option value="JIANSHE ">JIANSHE</option>
                <option value="JINBEI ">JINBEI</option>
                <option value="JMC ">JMC</option>
                <option value="KAWASAKI ">KAWASAKI</option>
                <option value="KAYAK ">KAYAK</option>
                <option value="KEEWAY ">KEEWAY</option>
                <option value="KIA MOTORS ">KIA MOTORS</option>
                <option value="KINLON ">KINLON</option>
                <option value="KTM ">KTM</option>
                <option value="KYMCO ">KYMCO</option>
                <option value="LADA ">LADA</option>
                <option value="LAMBRETTA ">LAMBRETTA</option>
                <option value="LANCIA ">LANCIA</option>
                <option value="LAND ROVER ">LAND ROVER</option>
                <option value="LANDWIND ">LANDWIND</option>
                <option value="LEXUS ">LEXUS</option>
                <option value="LIFAN ">LIFAN</option>
                <option value="LINCOLN ">LINCOLN</option>
                <option value="LML ">LML</option>
                <option value="LONCIN ">LONCIN</option>
                <option value="LOTUS ">LOTUS</option>
                <option value="LUOJIA ">LUOJIA</option>
                <option value="MAHINDRA ">MAHINDRA</option>
                <option value="MAICO ">MAICO</option>
                <option value="MASERATI ">MASERATI</option>
                <option value="MAZDA ">MAZDA</option>
                <option value="MCLAREN ">MCLAREN</option>
                <option value="MERCEDES BENZ ">MERCEDES BENZ</option>
                <option value="MERCURY ">MERCURY</option>
                <option value="MG ">MG</option>
                <option value="MINI ">MINI</option>
                <option value="MITSUBISHI ">MITSUBISHI</option>
                <option value="MONTELLI ">MONTELLI</option>
                <option value="MONTESA ">MONTESA</option>
                <option value="MORGAN ">MORGAN</option>
                <option value="MORRIS ">MORRIS</option>
                <option value="MOTO BECANE ">MOTO BECANE</option>
                <option value="MOTORRAD ">MOTORRAD</option>
                <option value="MSK ">MSK</option>
                <option value="MV AGUSTA ">MV AGUSTA</option>
                <option value="NISSAN ">NISSAN</option>
                <option value="NSU ">NSU</option>
                <option value="ODES ">ODES</option>
                <option value="OLDSMOBILE ">OLDSMOBILE</option>
                <option value="OPEL ">OPEL</option>
                <option value="OSSA ">OSSA</option>
                <option value="PEUGEOT ">PEUGEOT</option>
                <option value="PGO ">PGO</option>
                <option value="PIAGGIO ">PIAGGIO</option>
                <option value="PIONNER ">PIONNER</option>
                <option value="PLYMOUTH ">PLYMOUTH</option>
                <option value="POLARIS ">POLARIS</option>
                <option value="POLSKI FIAT ">POLSKI FIAT</option>
                <option value="PONTIAC ">PONTIAC</option>
                <option value="PORSCHE ">PORSCHE</option>
                <option value="PROTON ">PROTON</option>
                <option value="PUMA ">PUMA</option>
                <option value="REGAL RAPTOR ">REGAL RAPTOR</option>
                <option value="RENAULT ">RENAULT</option>
                <option value="RIZATO ">RIZATO</option>
                <option value="ROLLS ROYCE ">ROLLS ROYCE</option>
                <option value="ROVER ">ROVER</option>
                <option value="SAAB ">SAAB</option>
                <option value="SACHS ">SACHS</option>
                <option value="SAEHAN ">SAEHAN</option>
                <option value="SAMSUNG ">SAMSUNG</option>
                <option value="SANFU ">SANFU</option>
                <option value="SANLG ">SANLG</option>
                <option value="SANYA ">SANYA</option>
                <option value="SANYANG SYM ">SANYANG SYM</option>
                <option value="SEAT ">SEAT</option>
                <option value="SG ">SG</option>
                <option value="SHINERAY ">SHINERAY</option>
                <option value="SIMCA ">SIMCA</option>
                <option value="SKODA ">SKODA</option>
                <option value="SKYGO ">SKYGO</option>
                <option value="SMA ">SMA</option>
                <option value="SPITZ ">SPITZ</option>
                <option value="SSANGYONG ">SSANGYONG</option>
                <option value="SUBARU ">SUBARU</option>
                <option value="SUZUKI ">SUZUKI</option>
                <option value="TAKASAKI ">TAKASAKI</option>
                <option value="TATA ">TATA</option>
                <option value="TM ">TM</option>
                <option value="TORITO ">TORITO</option>
                <option value="TOYOTA ">TOYOTA</option>
                <option value="TRIUMPH ">TRIUMPH</option>
                <option value="TVS ">TVS</option>
                <option value="UNITED MOTORS ">UNITED MOTORS</option>
                <option value="URAL ">URAL</option>
                <option value="VERONA ">VERONA</option>
                <option value="VESPA ">VESPA</option>
                <option value="VOLKSWAGEN ">VOLKSWAGEN</option>
                <option value="VOLVO ">VOLVO</option>
                <option value="WANGYE ">WANGYE</option>
                <option value="WILLYS ">WILLYS</option>
                <option value="WOLKEN ">WOLKEN</option>
                <option value="XGJAO ">XGJAO</option>
                <option value="XINGYUE ">XINGYUE</option>
                <option value="XMOTORS ">XMOTORS</option>
                <option value="YAMAHA ">YAMAHA</option>
                <option value="YAMAMOTO ">YAMAMOTO</option>
                <option value="YUGO ">YUGO</option>
                <option value="ZANELLAS ">ZANELLAS</option>
                <option value="ZASTAVA ">ZASTAVA</option>
                <option value="ZNEN GROUP ">ZNEN GROUP</option>
                <option value="ZONGSHEN ">ZONGSHEN</option>
                <option value="ZOTYE ">ZOTYE</option>
                <option value="ZUNDAPP ">ZUNDAPP</option>
                <option value="ZX ">ZX</option>
            </select>
        </div>
        <div class="col-md-4">
            <input type="text" id="modelo" name="modelo" class="form-control" placeholder="Modelo">
        </div>
        <div class="col-md-4">
            <input type="text" id="version" name="version" class="form-control" placeholder="Versión">
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <input type="number" id="anio" name="anio"class="form-control" placeholder="Año" value="{{Input::old('anio')}}">
        </div>
        <div class="col-md-4">
            <select id="tipo_vehiculo" name="tipo_vehiculo" class="form-control">
                <option value="No Especificado">Seleccion Tipo</option>
                <option value="Automovil">Automovil</option>
                <option value="Camioneta">Camioneta</option>
                <option value="Furgon">Furgon</option>
                <option value="Todo Terreno">Todo Terreno</option>
                <option value="Mini bus">Mini bus</option>
            </select>
        </div>
        <div class="col-md-4">
            <select id="carroceria" name="carroceria" class="form-control">
                <option value="No Especificado">Carroceria</option>
                <option value="Sedán ">Sedán</option>
                <option value="Station wagon ">Station wagon</option>
                <option value="SUV ">SUV</option>
                <option value="Hatchback ">Hatchback</option>
                <option value="City car ">City car</option>
                <option value="Coupé ">Coupé</option>
                <option value="Convertible ">Convertible</option>
                <option value="Cabina Simple ">Cabina Simple</option>
                <option value="Cabina Doble ">Cabina Doble</option>
                <option value="Cabina y Media ">Cabina y Media</option>
                <option value="Ninguna">Ninguna</option>
            </select>
        </div>

    </div>
    <div class="row">
        <div class="col-md-4">
            <input type="text" id="cilindrada" name="cilindrada" class="form-control" placeholder="cilindrada" value="{{Input::old('cilindrada')}}">
        </div>
        <div class="col-md-4">
            <input type="number" min="0" id="kilometraje" name="kilometraje" placeholder="Kilometraje" class="form-control" value="{{Input::old('kilometraje')}}">
        </div>
        <div class="col-md-4">
            <input type="text" id="color" name="color" placeholder="Color" class="form-control" value="{{Input::old('color')}}">
        </div>
    </div>
    <div class="row">
        <h4 class="h4"><strong>Especificaciones del Vehículo</strong></h4>

        <div class="col-md-4">
            <select id="transmision" name="transmision" class="form-control">
                <option value="No Especificado">Transmision</option>
                <option value="Automatica">Automatica</option>
                <option value="Manual">Manual</option>

            </select>
        </div>
        <div class="col-md-4">
            <select id="direccion" name="direccion" class="form-control">
                <option value="No Especificado">Dirección</option>
                <option value="Asistida ">Asistida</option>
                <option value="Hidraulica ">Hidraulica</option>
                <option value="Mecanica ">Mecanica</option>
                <option value="Ninguna">Ninguna</option>
            </select>
        </div>
        <div class="col-md-4">
            <select id="aire" name="aire" class="form-control">
                <option value="No Especificado">Aire Acondicionado</option>
                <option value="Si">Si</option>
                <option value="No">No</option>
            </select>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <select id="radio" name="radio" class="form-control">
                <option value="No Especificado">Radio</option>
                <option value="Si">Si</option>
                <option value="No">No</option>
            </select>
        </div>
        <div class="col-md-4">
            <select id="alzavidrios" name="alzavidrios" class="form-control">
                <option value="No Especificado">Alzavidrios Electrico</option>
                <option value="Si">Si</option>
                <option value="No">No</option>
            </select>
        </div>
        <div class="col-md-4">
            <select id="espejos" name="espejos" class="form-control">
                <option value="No Especificado">Espejos Electricos</option>
                <option value="Si">Si</option>
                <option value="No">No</option>
            </select>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <select id="frenos" name="frenos" class="form-control">
                <option value="No Especificado">Posee ABS</option>
                <option value="Si">Si</option>
                <option value="No">No</option>
            </select>
        </div>
        <div class="col-md-4">
            <select id="airbag" name="airbag" class="form-control">
                <option value="No Especificado">Posee Airbag</option>
                <option value="Si">Si</option>
                <option value="No">No</option>
            </select>
        </div>
        <div class="col-md-4">
            <select id="cierre" name="cierre" class="form-control">
                <option value="No Especificado">Posee Cierre Centralizado</option>
                <option value="Si">Si</option>
                <option value="No">No</option>
            </select>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <select id="catalitico" name="catalitico" class="form-control">
                <option value="No Especificado">Catalitico</option>
                <option value="Si">Si</option>
                <option value="No">No</option>
            </select>
        </div>
        <div class="col-md-4">
            <select id="combustible" name="combustible" class="form-control">
                <option value="No Especificado">Tipo de Combustible</option>
                <option value="Bencina ">Bencina</option>
                <option value="Diesel ">Diesel</option>
                <option value="Gas ">Gas</option>
                <option value="Hibrido ">Hibrido</option>
                <option value="Otro">Otro</option>
            </select>
        </div>
        <div class="col-md-4">
            <select id="llantas" name="llantas" class="form-control">
                <option value="">Llantas</option>
                <option value="Si">Si</option>
                <option value="No">No</option>
            </select>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <input type="number" name="puertas" id="puertas" class="form-control" placeholder="Numero de Puertas" value="{{Input::old('puertas')}}">
        </div>
        <div class="col-md-4">
            <select id="alarma" name="alarma" class="form-control">
                <option value="No Especificado">Posee Alarma</option>
                <option value="Si">Si</option>
                <option value="No">No</option>
            </select>
        </div>
    </div>




    <div class="row">
        <h4 class="h4"><strong>Estado del Vehiculo</strong></h4>

        <div class="col-md-3">
            <select id="tipodeventa" name="tipodeventa" class="form-control">
                <option value="No Especificado">Estado del Vehiculo</option>
                <option value="Normal" selected="selected">En buen Estado</option>
                <option value="reparacion">Chocado para Reparación</option>
                <option value="desarme">Chocado para Desarme</option>
            </select>
        </div>
        <div class="col-md-3">
            <input type="number" class="form-control" id="duenos" name="duenos" placeholder="Dueños Anteriores" value="{{Input::old('duenos')}}">
        </div>
        <div class="col-md-3">
            <select id="papeles" name="papeles" class="form-control">
                <option value="No Especificado">Estado de los Papeles</option>
                <option value="1">Al dia</option>
                <option value="2">No al dia</option>
            </select>
        </div>
        <div class="col-md-3">
            <select id="pintura" name="pintura" class="form-control">
                <option value="No Especificado">Estado de la Pintura</option>
                <option value="Pintura Original" selected="selected">Pintura Original</option>
                <option value="Repintado 30%">Repintado 30%</option>
                <option value="Repintado 50%">Repintado 50%</option>
                <option value="Repintado 80%">Repintado 80%</option>
                <option value="Repintado 100%">Repintado 100%</option>
            </select>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <input type="file" class="form-control" name="files[]" id="files" multiple>
        </div>
        <div class="col-md-8" id="preview">

        </div>
    </div>
        <textarea name="comentario" class="form-control" placeholder="Escriba algun Comentario Acerca del Vehiculo" rows="6">{{Input::old('comentario')}}</textarea>
    <button class="btn btn-primary center-block btn-block btn-lg" style="margin-top: 15px;">Enviar</button>
    </form>
</div>

