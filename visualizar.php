<?php
    require_once "php/conexao.php";
?>


<html lang="pt-br">
    <head>
        <title>Comic News</title>
        <meta charset="utf-8" />
        <link rel="stylesheet" type="text/css" href="css/visualizar.css" media="screen"/>
        <script type="text/javascript" src="js/jquery-3.2.0.js"></script>
    </head>
    
    
    <body>
        <header>
            <div id="topo">
                <div id="logo">
                    <img src="images/ocean-logo.jpg" alt="Ocean - Comic News" />
                </div>
                
                <div id="topo-right">
                    <p>Agradecemos por ler conosco!</p></p>
                    <p id="adicionarNoticia"><a href="index.php">Retornar à página Principal</a></p>
                </div>
            </div>
        </header>
        
       <main>
           <?php
                $id = $_GET["id"];
                $query = "SELECT * FROM noticia WHERE id='$id'";
                $result = mysqli_query($link, $query);
                
                while($info = mysqli_fetch_assoc($result)) {
  
            ?>
            
             <div class="janelaTituloFundo">
                    <img name="imagemTitulo"  src="<?php echo $info["img"] ?>"/>
                    <div id="janelaTituloFrente">
                        <p id="titulo"><?php echo $info["titulo"] ?></p>
                        <p name="nomeAutor"><?php echo $info["autor"] ?></p>
                        <p name="descricao"><?php echo $info["descricao"] ?></p>
                        <p>Publicado em: <?php 
                        
                        // Conversão para data inteligível
                        setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
                        date_default_timezone_set('America/Sao_Paulo');
                        echo strftime('%A, %d de %B de %Y', strtotime($info["data"]));
                
                        ?></p>
                    </div>
                </div>
    
        			<?php } ?>
    
        </main>
            
        <footer>
            <div id="center-ft">
                <p>Todos os direitos reservados. Ocean - Comic News</p>
            </div>
        </footer>

    </body>      
</html>
