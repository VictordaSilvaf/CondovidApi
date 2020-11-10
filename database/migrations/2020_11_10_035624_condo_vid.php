<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CondoVid extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $tableName = 'condo_vids';

        Schema::create($tableName, function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->longText('conteudo');
            $table->string('autor');
            $table->timestamps();
        });

        DB::table($tableName)->insert(
            array(
                [
                    'title' => 'Sancionada Lei no RJ que dispensa autovistoria durante pandemia',
                    'conteudo' => 'Segundo a Lei 9.029/20, os condomínios residenciais e comerciais estão dispensados da obrigatoriedade da realização de autovistoria, enquanto perdurar o estado de calamidade pública decretado devido à pandemia de coronavírus. ',
                    'autor' => 'João Vitor Barbosa Souza'
                ],
                [
                    'title' => 'Vigilante que contraiu COVID-19 receberá indenização',
                    'conteudo' => 'Em sentença, o juiz do Trabalho de Manaus concluiu que a empresa realizou dispensa discriminatória em decorrência de contágio da covid-19, condenando-a a pagar ao vigilante R$ 10 mil de indenização por danos morais.',
                    'autor' => 'Victor da Silva Fernandes'
                ],
                [
                    'title' => 'TJ/SP não reconheceu assembleia presencial realizada na quarentena',
                    'conteudo' => 'A 31ª câmara de Direito Privado do TJ/SP manteve sentença que negou reconhecimento de ata de eleição de síndico, realizada em um condomínio da Capital paulista em maio deste ano, no auge da pandemia.',
                    'autor' => 'Victor da Silva Fernandes'
                ],
                [
                    'title' => 'Decreto em Goiânia libera uso de áreas de lazer dos condomínios',
                    'conteudo' => 'A Prefeitura de Goiânia divulgou o decreto 1.851, que autoriza o uso de espaços comuns de condomínios verticais e horizontais destinados a eventos sociais, como piscinas e churrasqueiras. Brinquedotecas, salas de jogos e ambientes fechados permanecem proibidos.',
                    'autor' => 'João Vitor Barbosa Souza'
                ],
                [
                    'title' => 'Prefeitura de Porto Alegre libera áreas de lazer em condomínios',
                    'conteudo' => 'A prefeitura de Porto Alegre autorizou, na noite desta sexta-feira (23),  o uso de salões de festas, salões de jogos, salas de cinema e espaços de recreação, desde que observadas as regras de distanciamento social.',
                    'autor' => 'Victor da Silva Fernandes'
                ],
                [
                    'title' => 'Novo PL sobre violência doméstica inclui denúncia de condomínios comerciais',
                    'conteudo' => 'O Projeto de Lei 4941/20, apresentado pelo deputado federal Vicentinho Júnior (PL-TO), determina que síndicos e administradores de condomínios residenciais e comerciais comuniquem à delegacia de Polícia Civil e aos órgãos de segurança pública especializados a ocorrência ou indícios de ocorrência de violência doméstica e familiar contra mulher, criança, adolescente ou idoso. Proposta está em tramitação na Câmara dos Deputados.',
                    'autor' => 'João Vitor Barbosa Souza'
                ],
                [
                    'title' => 'Condomínios do Rio voltam a registrar maior inadimplência da série histórica',
                    'conteudo' => 'Os condomínios no Rio de Janeiro seguem sentindo os efeitos da pandemia do coronavírus sobre a economia. Pesquisa da APSA aponta que a taxa de inadimplência das cotas voltou ao patamar de 14% em setembro, o mesmo de abril, quando atingiu o recorde da série histórica. O estudo é feito desde 2002.',
                    'autor' => 'Victor da Silva Fernandes'
                ],
                [
                    'title' => 'Decreto em Piracicaba (SP) libera piscinas e áreas de lazer em condomínios',
                    'conteudo' => 'O decreto 18.479/20 estabelece regras para acesso a piscinas, áreas de lazer, salão de festas, academias e centros de ginástica em condomínios residenciais.',
                    'autor' => 'João Vitor Barbosa Souza'
                ]
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
