<?php

class meuInclude {
  // Atributos da classe
  public $contador;
  public $url;
  public $title;
  public $descricao;

  // Construtor da classe
  public function __construct($contador, $url= "", $title="", $descricao="") {
    $this->contador = $contador;
    $this->url = $url;
    $this->title = $title;
    $this->descricao = $descricao;
  }

  // Função para incrementar o contador
  public function incrementarContador() {
    $this->contador++;
    $this->notifyChanges(); // Notifica o provider sobre a mudança no contador
  }

  // Função para adicionar nomes de componentes ao atributo url
  public function incluirComponente() {
    switch ($this->contador) {
      case 1:
        $this->url .= "processadores.php";
        break;
      case 2:
        $this->url .= "placaMae.php";
        break;
      case 3:
        $this->url .= "memoriaRam.php";
        break;
      case 4:
        $this->url .= "placaVideo.php";
        break;
      case 5:
        $this->url .= "hd.php";
        break;
      case 6:
        $this->url .= "fonte.php";
        break;
      case 7:
        $this->url .= "gabinete.php";
        break;
      default:
        echo "Unexpected error 1003";
    }
    $this->notifyChanges(); // Notifica o provider sobre a mudança no url
  }

  // Função para adicionar descrições de componentes à variável descricao
  public function adicionarDescricaoComponente() {
    
        $processadoresD = "Os processadores são o cérebro dos computadores, desempenhando um papel fundamental em sua funcionalidade e desempenho. Sua importância reside no fato de que são responsáveis por executar todas as operações e cálculos necessários para o funcionamento do sistema.";
        $placaMD = "As placas-mãe são o alicerce dos sistemas de computador, conectando e coordenando todos os componentes vitais do sistema. Sua importância reside na sua função de permitir a comunicação entre o processador, memória, dispositivos de armazenamento, placas de expansão e outros periféricos.";
        $placaVD = "As placas de vídeo desempenham um papel crucial no desempenho gráfico dos computadores, sendo responsáveis pelo processamento e renderização de imagens e vídeos. Sua importância reside na capacidade de melhorar significativamente a qualidade visual, desempenho em jogos e até mesmo acelerar tarefas de computação intensivas, como edição de vídeo e modelagem 3D.";
        $memoriaD = "A memória RAM (Random Access Memory) é um componente essencial em qualquer sistema de computador, desempenhando um papel crítico no desempenho e na capacidade multitarefa. Sua importância reside na sua capacidade de armazenar temporariamente dados e instruções que estão sendo usados ativamente pelo processador, permitindo um acesso rápido e eficiente a essas informações.";
        $hdD= "Os discos rígidos (HDs - Hard Disk Drives) são uma parte essencial dos sistemas de computadores há décadas, desempenhando um papel fundamental no armazenamento de dados de longo prazo. Sua importância reside na sua capacidade de fornecer uma grande capacidade de armazenamento a um custo relativamente baixo, tornando-os ideais para guardar uma vasta quantidade de arquivos, documentos, programas e mídias.";
        $fonteD = "A fonte de alimentação é um componente vital em qualquer sistema de computador, sendo responsável por fornecer energia elétrica estável e confiável para todos os outros componentes do sistema. Sua importância reside na capacidade de garantir o funcionamento adequado e seguro de todo o hardware do computador.";
        $gabineteD = "Os gabinetes de computador desempenham um papel crucial na proteção e organização dos componentes internos, além de contribuírem para o aspecto estético e funcionalidade geral do sistema. Sua importância reside na capacidade de oferecer um ambiente seguro e adequado para a montagem e operação dos componentes do computador.";


    switch ($this->contador) {
      case 1:
        $this->descricao .= $processadoresD;
        break;
      case 2:
        $this->descricao .= $placaMD;
        break;
      case 3:
        $this->descricao .= $memoriaD;
        break;
      case 4:
        $this->descricao .= $placaVD;
        break;
      case 5:
        $this->descricao .= $hdD;
        break;
      case 6:
        $this->descricao .= $fonteD;
        break;
      case 7:
        $this->descricao .= $gabineteD;
        break;
      default:
        echo "Unexpected error 1003";
    }
    $this->notifyChanges(); // Notifica o provider sobre a mudança na descricao
  }

  // Função para adicionar títulos de componentes ao atributo title
  public function adicionarTituloComponente() {

    $processadoresT = "Processadores";
    $placaMT = "Placas mãe";
    $placaVT = "Placas de Video";
    $memoriaT = "Memoria Ram";
    $hdT= "Hard Disk's HDS";
    $fonteT = "fonte";
    $gabineteT = "Gabinetes";



    switch ($this->contador) {
      case 1:
        $this->title .= $processadoresT;
        break;
      case 2:
        $this->title .= $placaMT;
        break;
      case 3:
        $this->title .= $memoriaT;
        break;
      case 4:
        $this->title .= $placaVT;
        break;
      case 5:
        $this->title .= $hdT;
        break;
      case 6:
        $this->title .= $fonteT;
        break;
      case 7:
        $this->title .= $gabineteT;
        break;
      default:
        echo "Unexpected error 1003";
    }
    $this->notifyChanges(); // Notifica o provider sobre a mudança no title
  }

  // Função para notificar o provider sobre mudanças
  private function notifyChanges() {
  }
}

$teste = new meuInclude(1);
sleep(3);
$teste->incrementarContador();

?>
