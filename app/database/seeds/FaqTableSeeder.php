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
				'response' => 'Cuando la compraventa se hace ante notario u otro ministro de fe, éste debe requerir al vendedor el certificado del Registro de Multas del Tránsito no pagadas. El comprador responderá sólo por las multas empadronadas que figuren en el certificado emitido por el Servicio de Registro Civil e Identificación al momento de la compra.
El Registro Civil no puede anotar las multas que correspondan a algún dueño anterior al vendedor. Pero los juzgados de policía local tienen derecho a perseguir la responsabilidad de la persona que fue condenada al pago de la multa.'
		]);
		Faq::create([
				'faq_types_id' => 1,
				'ask' => '¿Qué hay que tener en cuenta al comprar o vender un vehículo?',
				'response' =>''
		]);
	}

}