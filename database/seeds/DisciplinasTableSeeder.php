<?php

use Illuminate\Database\Seeder;

class DisciplinasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $nomes = ['Introdução à Computação',
    		'Algoritmos',
    		'Filosofia',
    		'Lógica Digital',
    		'Geometria Analítica',
    		'Fundamentos da Matemática',
    		'Álgebra Linear',
    		'Arquitetura e Organização de Computadores I',
    		'Cálculo I',
    		'Física Aplicada à Computação',
    		'Programação Funcional',
    		'Programação Estruturada',
    		'Matemática Discreta',
    		'Arquitetura e Organização de Computadores II',
    		'Cálculo II',
    		'Estrutura de Dados I',
    		'Engenharia de Software',
    		'Programação Orientada à Objetos',
    		'Banco de Dados I',
    		'Engenharia de Requisitos',
    		'Estatística Básica',
    		'Estrutura de Dados II',
    		'Inglês Técnico',
    		'Linguagens Formais e Atômatos',
    		'Sistemas Operacionais',
    		'Banco de Dados II',
    		'Inteligência Artificial I',
    		'Linguagem de Programação',
    		'Projeto de Software',
    		'Rede de Computadores',
    		'Teoria de Grafos',
    		'Análise e Projeto de Algorítmos',
    		'Cálculo Numérico',
    		'Compiladores',
    		'Computação Gráfica',
    		'Inteligência Artificial II',
    		'Sistemas Distribuídos',
   			'Administração de Empresas',
    		'Análise de Desempenho',
    		'Ética',
    		'Pesquisa Operacional',
    		'Processamento de Imagens',
    		'Programação Paralela',
    		'TCC I',
    		'Empreendedores em Informática',
    		'Estágio Obrigatório',
    		'Introdução à Economia',
    		'Tópicos Especiais em Computação',
    		'TCC II',    		 		    		    		    		    		    		
    	];

    	$periodos = [1,1,1,1,1,1,2,2,2,2,2,2,3,3,3,3,3,3,4,4,4,4,4,4,4,5,5,5,5,5,5,6,6,6,6,6,6,7,7,7,7,7,7,7,8,8,8,8,8];

    	for($i=0; $i<count($periodos); $i++){

    		$dados = [
    			'nome' => $nomes[$i],
    			'periodo' => $periodos[$i]
    		];
    		
    		DB::table('disciplinas')->insert($dados);
    	}
    }
}