<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class periodoController extends Controller
{
    public function getPeriodo($num){

    	$periodo[0] = [
    		'Introdução à Computação',
    		'Algoritmos',
    		'Filosofia',
    		'Lógica Digital',
    		'Geometria Analítica',
    		'Fundamentos da Matemática'
    	];
    	$periodo[1] = [
    		'Álgebra Linear',
    		'Arquitetura e Organização de Computadores I',
    		'Cálculo I',
    		'Física Aplicada à Computação',
    		'Programação Funcional',
    		'Programação Estruturada'
    	];
    	$periodo[2] = [
    		'Matemática Discreta',
    		'Arquitetura e Organização de Computadores II',
    		'Cálculo II',
    		'Estrutura de Dados I',
    		'Engenharia de Software',
    		'Programação Orientada à Objetos'
    	];
    	$periodo[3] = [
    		'Banco de Dados I',
    		'Engenharia de Requisitos',
    		'Estatística Básica',
    		'Estrutura de Dados II',
    		'Inglês Técnico',
    		'Linguagens Formais e Atômatos',
    		'Sistemas Operacionais'
    	];
    	$periodo[4] = [
    		'Banco de Dados II',
    		'Inteligência Artificial I',
    		'Linguagem de Programação',
    		'Projeto de Software',
    		'Rede de Computadores',
    		'Teoria de Grafos'
    	];
    	$periodo[5] = [
    		'Análise e Projeto de Algorítmos',
    		'Cálculo Numérico',
    		'Compiladores',
    		'Computação Gráfica',
    		'Inteligência Artificial II',
    		'Sistemas Distribuídos'
    	];
    	$periodo[6] = [
    		'Administração de Empresas',
    		'Análise de Desempenho',
    		'Ética',
    		'Pesquisa Operacional',
    		'Processamento de Imagens',
    		'Programação Paralela',
    		'TCC I'
    	];
    	$periodo[7] = [
    		'Empreendedores em Informática',
    		'Estágio Obrigatório',
    		'Introdução à Economia',
    		'Tópicos Especiais em Computação',
    		'TCC II'
    	];

    	return view('periodo')->with('periodo', $periodo[$num-1]);
    }
}