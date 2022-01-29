<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Noticia;

class Noticiaseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Noticia::create([
            "titulo" => "MAXIMIANO, DONO DA PRECISA, É ACUSADO DE DAR CALOTE DE R$ 8 MILHÕES EM FUNDO DE PREVIDÊNCIA DA OAB",
            "conteudo" => "Ele é o dono da empresa envolvida na negociação de compra da Covaxin, vendida por um preço mais alto ao governo Bolsonaro.",
            "status" => "A",
            "imagem" => "/storage/2021-07-07t134451z-9950647-rc2pfo9vq1no-rtrmadp-3-pope-surgery-suffering.jpg",
            "data_publicacao" => "27/07/2021"
        ]);
    }
}
