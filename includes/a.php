<?php
import ("processadores.php") ;
$contador = 1;




function incrementCount($count) {
    $count++;
}

function choosePage($count) {
    global $url;
    $class = "";
    switch($count){
        case 1:
            $url = "processadores.php";
        break;
        case 2:
            if($class == "amd"){
                $url = "placaMae.php";
            }
            else{
                $url = "placaMae2.php";
            }
        break;
            
        case 3:
            $url = "placaVideo.php";
        break;

        case 4:
            $url = "memoriaRam.php";
        break;

        case 5:
            $url = "hd.php";
        break;

        case 6:
            $url = "fonte.php";
        break;

        case 7:
            $url = "gabinete.php";
        break;
   

        default: echo"unexpected error 1003";
    }

}
/*
function progressBar() {
    $width = ($count / 5)*100;
    return "width = '$width %'";
}
*/

    $procValue = null;
    $maeValue = null;
    $videoValue = null;
    $ramValue = null;
    $hdValue = null;
    $fontValue = null;


    function ChooseTitle($contador){
        $processadoresT = "Processadores";
        $placaMT = "Placas mãe";
        $placaVT = "Placas de Video";
        $memoriaT = "Memoria Ram";
        $hdT= "Hard Disk's HDS";
        $fonteT = "fonte";
        $gabineteT = "Gabinetes";
    

        switch ($contador) {
            case "1":
              echo "$processadoresT";
              break;
            case "2":
              echo "$placaMT";
              break;
            case "3":
              echo "$memoriaT";
              break;
            case "4":
              echo "$placaVT";
              break;
            case "5":
              echo "$hdT";
              break;
            case "6":
              echo "$fonteT";
              break;
            case "7":
              echo "$gabineteT";
              break;
          }
    }

function ChooseDescription($contador){
        $processadoresD = "Os processadores são o cérebro dos computadores, desempenhando um papel fundamental em sua funcionalidade e desempenho. Sua importância reside no fato de que são responsáveis por executar todas as operações e cálculos necessários para o funcionamento do sistema.";
        $placaMD = "As placas-mãe são o alicerce dos sistemas de computador, conectando e coordenando todos os componentes vitais do sistema. Sua importância reside na sua função de permitir a comunicação entre o processador, memória, dispositivos de armazenamento, placas de expansão e outros periféricos.";
        $placaVD = "As placas de vídeo desempenham um papel crucial no desempenho gráfico dos computadores, sendo responsáveis pelo processamento e renderização de imagens e vídeos. Sua importância reside na capacidade de melhorar significativamente a qualidade visual, desempenho em jogos e até mesmo acelerar tarefas de computação intensivas, como edição de vídeo e modelagem 3D.";
        $memoriaD = "A memória RAM (Random Access Memory) é um componente essencial em qualquer sistema de computador, desempenhando um papel crítico no desempenho e na capacidade multitarefa. Sua importância reside na sua capacidade de armazenar temporariamente dados e instruções que estão sendo usados ativamente pelo processador, permitindo um acesso rápido e eficiente a essas informações.";
        $hdD= "Os discos rígidos (HDs - Hard Disk Drives) são uma parte essencial dos sistemas de computadores há décadas, desempenhando um papel fundamental no armazenamento de dados de longo prazo. Sua importância reside na sua capacidade de fornecer uma grande capacidade de armazenamento a um custo relativamente baixo, tornando-os ideais para guardar uma vasta quantidade de arquivos, documentos, programas e mídias.";
        $fonteD = "A fonte de alimentação é um componente vital em qualquer sistema de computador, sendo responsável por fornecer energia elétrica estável e confiável para todos os outros componentes do sistema. Sua importância reside na capacidade de garantir o funcionamento adequado e seguro de todo o hardware do computador.";
        $gabineteD = "Os gabinetes de computador desempenham um papel crucial na proteção e organização dos componentes internos, além de contribuírem para o aspecto estético e funcionalidade geral do sistema. Sua importância reside na capacidade de oferecer um ambiente seguro e adequado para a montagem e operação dos componentes do computador.";

        switch ($contador) {
            case "1":
              echo "$processadoresD";
              break;
            case "2":
              echo "$placaMD";
              break;
            case "3":
              echo "$memoriaD";
              break;
            case "4":
              echo "$placaVD";
              break;
            case "5":
              echo "$hdD";
              break;
            case "6":
              echo "$fonteD";
              break;
            case "7":
              echo "$gabineteD";
              break;
          }
    }