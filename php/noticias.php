<?php

require_once "../php/conexao.php";

// Validações de entrada
if(strlen($_POST["titulo-noticia"]) > 0 and strlen($_POST["titulo-noticia"]) < 100){
    $titulo = $_POST["titulo-noticia"];
    if(strlen($_POST["conteudo-noticia"]) > 0){
        $descricao = $_POST["conteudo-noticia"];
        if(strlen($_POST["autorTexto"]) > 0 and strlen($_POST["autorTexto"]) < 100){
            $autor = $_POST["autorTexto"];
            if(strlen($_POST["imagem-noticia"]) > 0 and strlen($_POST["imagem-noticia"]) < 100){
                $img = $_POST["imagem-noticia"]; 
                $query = "INSERT INTO noticia (titulo, descricao, img, autor) VALUES ('$titulo', '$descricao', '$img', '$autor')";
                mysqli_query($link, $query);
            }
            else{
                echo "Link para imagem contém mais de 100 caracteres!";
            }
        }else{
            echo "Nome do autor contém mais de 100 caracteres!";
        }
    }
}else{
    echo "Título da matéria contém mais de 100 caracteres!";
}

// Redireciona para página inicial
function Redirect($url, $permanent = false)
{
    if (headers_sent() === false)
    {
        header('Location: ' . $url, true, ($permanent === true) ? 301 : 302);
    }

    exit();
}

Redirect('../index.php', false);

?>