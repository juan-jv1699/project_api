<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class PublicationSeeder extends Seeder
{
    public function run()
    {
        DB::table('publications')->insert([
            [
                'title' => 'Se busca Recolector',
                'content' => 'En la finca "La hacienda" se necesita un recolector para la temporada de cosecha',
                'user_id' => 8,
                'image'=>'https://apollo-virginia.akamaized.net/v1/files/vzk97ajtyd0e1-CO/image'
            ],
            [
                'title' => 'Derrumbe cerca de la entrada a Anserma',
                'content' => 'El dia del 30 de febrero de 2023, se evidencio un fuerte derrumbe en plena carretera, debido a las fuertes lluvias. Afortunadamente, nadie salio herido',
                'user_id' => 6,
                'image'=>'https://apollo-virginia.akamaized.net/v1/files/vzk97ajtyd0e1-CO/image'
            ],
            [
                'title' => 'Venta de Café La Amada',
                'content' => 'Hoy te queremos ofrecer un delicios cafe con las raices de nuestra region, contactanos al numero 3105283234 y ordena el tuyo, no te quedes sin degustarlo',
                'user_id' => 10,
                'image'=>'https://www.bolsadirecta.es/wp-content/uploads/2021/10/Coffee_Bags_015-1.jpg'
            ],
            [
                'title' => 'Vendo mi finca',
                'content' => 'Para mas información contactense a mi numero',
                'user_id' => 12,
                'image'=>'https://media-cdn.tripadvisor.com/media/photo-s/06/74/2a/1e/finca-cafetera-el-balso.jpg'
            ],
            [
                'title' => 'Otro dia mas de satisfactorio trabajo',
                'content' => '',
                'user_id' => 5,
                'image'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTHInI2qR0dkU_pHn-7mbEMOjcWCo7Sm1pkTw&usqp=CAU'
            ],
            [
                'title' => 'Las frutas de lucho',
                'content' => 'Buenos dias amgos del campo, vengo a ofrecerles toda variedad de fruta local, contactense conmigo para poderles hacer el envio, y ademas tambien vendemos fertilizante y semillas',
                'user_id' => 13,
                'image'=>'https://img.freepik.com/fotos-premium/caja-verduras-frutas-campo-cultivo_362480-294.jpg?w=2000'
            ],
            [
                'title' => 'Mi trabajo de toda la vida',
                'content' => '',
                'user_id' => 12,
                'image'=>'https://1.bp.blogspot.com/-pGNzmR2cQ1E/WEdnkZPtdeI/AAAAAAAC1jg/yTsf-n9niOQ0s8zY072cJh9qA4IwoxRMgCPcB/s640/IMG_0006.JPG'
            ],
            [
                'title' => 'Cuando los de la costa vienen a caldas',
                'content' => 'Jajajaja',
                'user_id' => 15,
                'image'=>'https://img-9gag-fun.9cache.com/photo/aNP69Nv_460s.jpg'
            ],
            [
                'title' => 'Suele pasar',
                'content' => '',
                'user_id' => 16,
                'image'=>'https://i.pinimg.com/originals/aa/27/2d/aa272d00f93202b1d347c41cb11f7a7d.jpg'
            ],
            [
                'title' => 'Vendo Camioneta',
                'content' => 'Contacteme',
                'user_id' => 17,
                'image'=>'https://img.clasf.co/2020/03/19/Venta-de-camioneta-carga-seca-20200319124455.4620230015.jpg'
            ],
            [
                'title' => 'Busco Camionero',
                'content' => 'Necesito un camionero urgente para llevar unos productos de Neira a Manizales',
                'user_id' => 7,
                'image'=>'https://marketingyservicios.com/wp-content/uploads/2021/08/98ec292dc3fbf42c55fe2e7de48b7b36.jpg'
            ],
            [
                'title' => 'Mi nieta',
                'content' => '',
                'user_id' => 18,
                'image'=>'https://previews.123rf.com/images/svitlana10/svitlana101206/svitlana10120600103/14017599-la-abuela-con-su-nieta-mirando-el-campo-plantaci%C3%B3n-de-t%C3%A9.jpg'
            ],
            [
                'title' => 'Te amo Familia',
                'content' => '',
                'user_id' => 11,
                'image'=>'https://www.elcolombiano.com/documents/10157/0/1200x800/0c86/1200d627/none/11101/IOAS/image_content_36206515_20200814082334.jpg'
            ],
            [
                'title' => 'Cafe Colombiano',
                'content' => 'Definitivamente no hay nada mejor para empezar el dia',
                'user_id' => 13,
                'image'=>'https://www.shutterstock.com/image-photo/hanging-potted-plant-flowerpot-man-260nw-1738977179.jpg'
            ],
            [
                'title' => 'Nuevas leyes al campo',
                'content' => '',
                'user_id' => 8,
                'image'=>'https://www.semillas.org.co/apc-aa-files/8b03e104b93235bb29d54dee0d3af830/nueva-ley-de-tierrasv2.jpg'
            ],
            [
                'title' => 'Apoyando a la seleccion',
                'content' => '',
                'user_id' => 6,
                'image'=>'https://www.elpais.com.co/files/article_multimedia_main/uploads/2018/06/19/5b2969f68226c.jpeg'
            ],
            [
                'title' => 'Mandaria de la finca San Benito',
                'content' => '',
                'user_id' => 18,
                'image'=>'https://i.blogs.es/40d04f/tangerines-1721633_1280-1-/840_560.jpg'
            ],
            [
                'title' => 'Les presento a mi Familia',
                'content' => 'Gracias a estas muejeres soy lo que soy',
                'user_id' => 11,
                'image'=>'https://www.minagricultura.gov.co/noticias/PublishingImages/editAgFliar.jpg'
            ],
            [
                'title' => 'Inundación en Neira',
                'content' => '',
                'user_id' => 3,
                'image'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTwe_dAhf7j-_Rh-m9c7sKiMZzbtFeHSHkN4g&usqp=CAU'
            ],
            [
                'title' => 'Se busca agricultor en la finca El rancho',
                'content' => 'Se necesita un recolector para la siguiente temporada, el empleo incluye alojamiento, alimentación, prestaciones de servicios, y ademas bonos por eficiencia. La persona debe tener experiencia',
                'user_id' => 12,
                'image'=>'https://static.elcorreo.com/www/multimedia/202204/20/media/cortadas/ofertas-trabajo-kpCG-U1601725137102swD-624x385@El%20Correo.jpg'
            ],
            [
                'title' => 'Incendio en la finca el Rancho',
                'content' => 'La pasada noche hubo un cortó electrico en la finca el rancho, murieron 3 trabajadores, el dueño de la finca y su esposa',
                'user_id' => 14,
                'image'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSkmxufE6ucXf-73QGYfZwXUmGvabvXBPnbHg&usqp=CAU'
            ],
            [
                'title' => '¿Quien nos va a responder por la plata?',
                'content' => 'Detienen al alcalde de neira por supuesta corrupcion y desperdicio insolito de fondos',
                'user_id' => 13,
                'image'=>'https://www.semana.com/resizer/T6LII0IaA6WrfFsZDCMXmsehs-U=/1280x0/smart/filters:format(jpg):quality(80)/cloudfront-us-east-1.images.arcpublishing.com/semana/RIWHBWJWC5AM3DG7NQKZ6PIWLQ.jpg'
            ],
            ]);
    }
}
