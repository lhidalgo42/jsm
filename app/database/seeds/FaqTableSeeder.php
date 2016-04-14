<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class FaqTableSeeder extends Seeder {

	public function run()
	{
		Faq::create([
			'faq_types_id' => 1,
			'ask' => '¿Qué hay que tener en cuenta al comprar o vender un vehículo?',
			'response' => 'La transacción siempre debe quedar por escrito. La compra de un vehículo nuevo debe acreditarse a través de la factura, y en caso de ser usado, por un contrato de compraventa. Éste puede ser por escritura pública o por un contrato privado firmado ante notario. Otra opción es hacer una declaración consensual, siempre y cuando le compre el auto a un particular.<br>
Al comprar un auto usado debe pedir el Certificado de Inscripción y Anotaciones Vigentes en cualquier oficina del Registro Civil, para ver si el vehículo tiene problemas legales o si puede o no venderse. Este certificado también es una presunción legal del dominio del vehículo, lo cual supone que quien aparece en la inscripción es el dueño del automóvil. Una vez realizada la compra, debe inscribir el vehículo en el Registro de Vehículos Motorizados en cualquier oficina del Registro Civil.'

		]);
		Faq::create([
				'faq_types_id' => 1,
				'ask' => '¿Qué sucede con las multas impagas que tiene el vehículo?',
				'response' => 'Cuando la compraventa se hace ante notario u otro ministro de fe, éste debe requerir al vendedor el certificado del Registro de Multas del Tránsito no pagadas. El comprador responderá sólo por las multas empadronadas que figuren en el certificado emitido por el Servicio de Registro Civil e Identificación al momento de la compra.</br>
El Registro Civil no puede anotar las multas que correspondan a algún dueño anterior al vendedor. Pero los juzgados de policía local tienen derecho a perseguir la responsabilidad de la persona que fue condenada al pago de la multa.'
		]);
		Faq::create([
				'faq_types_id' => 1,
				'ask' => '¿Qué es el Registro de Vehículos Motorizados?',
				'response' =>'Un registro público sobre la propiedad de todos los automóviles que circulan en Chile. Su función es informar sobre la situación jurídica de cada vehículo.<br>
				 La inscripción en este registro constituye presunción legal de dominio (admite prueba en contrario), pues en él constan los datos del propietario, las características del vehículo, el número de patente asignado y otras anotaciones que puedan afectar las características del vehículo o su situación jurídica.'
		]);
		Faq::create([
				'faq_types_id' => 1,
				'ask' => '¿Dónde y cómo inscribo mi auto en el Registro de Vehículos Motorizados? ',
				'response' =>'En cualquier oficina del Registro Civil, presentando los documentos que acreditan la propiedad del vehículo:<br>
<ul>
<li>Factura original.</li>
<li>Documentos aduaneros en los que conste la internación legal del vehículo y el pago de derechos aduaneros.</li>
<li>Sentencia judicial que ordena la inscripción del vehículo.</li>
<ul>
<br>
En cada uno de estos documentos deberá constar:
<ul>
<li>Nombre completo de quien adquiere el vehículo (persona natural o jurídica)</li>
<li>RUT</li>
<li>Datos que identifiquen al vehículo: tipo, marca, modelo, año de fabricación, color y números de motor, chasis u otro.</li>
<li>Además, si corresponde, deberá acreditarse el pago del IVA correspondiente a la primera venta del vehículo, o de los derechos aduaneros, en su caso.</li>
<li>Quien solicite la inscripción deberá presentar siempre el original de estos documentos.</li>
<li>Sólo respecto de facturas se aceptará fotocopia autorizada ante notario. La inscripción tiene un costo.</li>
</ul>'
		]);
		Faq::create([
				'faq_types_id' => 1,
				'ask' => '¿Qué es una "transferencia de dominio de vehículos"?',
				'response' =>'El traspaso de propiedad de un vehículo, el que queda acreditado a través de un documento. Para ello debe presentar alguno de los siguientes documentos en el Registro Civil:
<br>
<ul>
<li>Contrato de compraventa del vehículo, debidamente firmado por el vendedor y el comprador, y autorizado ante notario.
<li>Declaración consensual realizada ante el oficial del Registro Civil.
<li>Factura de adquisición del vehículo en subasta pública, expedida por un martillero público.
<li>Factura de leasing, cuando el arrendatario de un vehículo, sujeto a contrato de leasing, ejerce su opción de compra.
<li>Escritura pública de Transferencia de Dominio, por permuta, donación, aporte de capital, liquidación de sociedad o de comunidad.
<li>Sentencia judicial ejecutoriada, que adjudica o transfiere el dominio de un vehículo individualizado.
<li>Auto de Posesión Efectiva, con la constancia de su inscripción en el Conservador de Bienes Raíces e inventario de los bienes del causante, en el que se indique, al menos, la patente del o los vehículos.
En cada uno de estos documentos deben constar los nombres completos del vendedor o anterior propietario y del adquirente, los números de sus respectivos RUN o RUT, la patente del vehículo y los datos que lo identifican (tipo de vehículo, marca, modelo, año de fabricación, color y números de motor, chasis u otro). Además hay que pagar el impuesto por transferencia de vehículo y el costo del trámite.'
		]);
		Faq::create([
				'faq_types_id' => 1,
				'ask' => '¿Cómo se hace una declaración consensual? ',
				'response' =>'Ambas partes deben ir personalmente a una oficina del Registro Civil y presentar los siguientes documentos:
Cédula de identidad del comprador y del vendedor.
Certificado de Inscripción del vehículo en el Registro de Vehículos Motorizados.
Poder notarial, en caso de que una o ambas partes actúen en representación de una tercera persona. Documento de representación legal, en caso de que una o ambas partes participe en la compraventa a nombre de una persona jurídica (empresa o institución).
Formulario 1816 del SII (aviso de venta de vehículos), en caso de que se trate de un vehículo de transporte de carga de pasajeros. Luego el funcionario del Registro Civil calcula el impuesto a la transferencia (basado en la información del registro del vehículo), que debe ser pagado en un banco o institución autorizada y entonces se hace la inscripción de transferencia de dominio.
Si la oficina está en línea, la inscripción en el Registro de Vehículos Motorizados se hace de inmediato y también se obtiene así el Certificado de Inscripción.'
		]);
		Faq::create([
				'faq_types_id' => 1,
				'ask' => '¿Cómo puedo registrar que le hice un cambio a mi vehículo, como un cambio de color?',
				'response' =>'Cualquier persona puede tramitar ante el Registro Civil la modificación de algunos datos del Registro de Vehículos Motorizados, como el cambio de color del automóvil. Para ello debe presentar los documentos originales que señalen este cambio, además de la propiedad del vehículo y el número de patente.
Los documentos varían dependiendo del cambio que se informe:

Cambio de color: Declaración jurada simple del propietario del vehículo, señalando el nuevo color, los datos de la patente y los demás datos identificatorios que se mantienen. Si no hay declaración jurada simple, se puede presentar un certificado de revisión técnica o un certificado de revisión ocular Municipal, donde conste el nuevo color del vehículo.
Cambio de motor: Factura u otro documento que acredite la adquisición del nuevo motor (en su defecto, se podrá presentar una declaración jurada del propietario ante notario, o de su representante legal, acerca del lugar y fecha de la adquisición del motor) y certificado de revisión técnica o un certificado de revisión ocular municipal, en el que se consigne el nuevo número del motor.
Cambio de tipo de vehículo:
Factura o comprobante emitido por el taller o empresa que efectuó la transformación (en su defecto, una declaración jurada ante notario del propietario del vehículo, o de su representante legal, señalando las alteraciones realizadas) y un certificado de revisión técnica otorgado por una planta autorizada por el Ministerio de Transportes, o un certificado de revisión ocular municipal. Este último documento no es válido para cambiar de tipo de vehículo de "bus" a "camión". No se pueden alterar el modelo, la marca ni el año de fabricación de un vehículo.'
		]);
		Faq::create([
				'faq_types_id' => 1,
				'ask' => '¿Qué es un Certificado de Inscripción y Anotaciones Vigentes?',
				'response' =>'La información sobre cada vehículo inscrito en el Registro de Vehículos Motorizados:
<br>
<ul>
<li>Tipo de vehículo</li>
<li>Marca</li>
<li>Modelo</li>
<li>Color</li>
<li>Año de fabricación</li>
<li>Números identificatorios (motor, chassis u otro)</li>
<li>Individualización de su actual y anteriores propietarios, y limitaciones al dominio que le afecten.</li>
<li>Conociendo el número de la patente del vehículo, cualquier persona puede pedir este certificado en una oficina del Registro Civil.</li>
</ul>'
		]);
	}

}