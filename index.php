<?php
    require_once "php/conexao.php";
?>


<html lang="pt-br">
    <head>
        <title>Comic News</title>
        <meta charset="utf-8" />
        <link rel="stylesheet" type="text/css" href="css/default.css" media="screen"/>
        <script type="text/javascript" src="js/jquery-3.2.0.js"></script>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    </head>
    
    
    <body>
        
        <header>
            <div id="topo">
                <div id="logo">
                    <img src="images/ocean-logo.jpg" alt="Ocean - Comic News" />
                </div>
                
                <div id="topo-right">
                    <p>Olá, seja bem-vindo!</p>
                    <p id="adicionarNoticia"><a href="cadastrar.php">Adicionar Noticia</a></p>
                </div>
            </div>
        </header>
        
     <!-- <div id="container"> !-->
        <table id="container">
            <tbody>
            <tr class="format">
            <?php
                $query = "SELECT * FROM noticia ORDER BY data DESC";
                $result = mysqli_query($link, $query);
                $i = 0;
                
                if(mysqli_num_rows($result) > 0){
                    while($info = mysqli_fetch_assoc($result)) {
                        if($i >= 3){
                            ?>
                            <tr class="format">
                            <?php
                        }
                        $i = $i + 1;
            ?>
                <td class="w3-container w3-center w3-animate-opacity">
                    <div class="janelaTituloFundo">
                        <a href="visualizar.php?id=<?php echo $info["ID"]; ?>"><img name="imagemTitulo"  src="<?php echo $info["img"]; ?>"/></a>
                        <div id="janelaTituloFrente">
                            <p id="titulo"><?php echo $info["titulo"]; ?></p>
                            <p name="nomeAutor"><?php echo $info["autor"]; ?></p>
                            <p name="descricao"><?php echo substr($info["descricao"], 0, 250); echo "..."; ?></p>
                        </div>
                    </div>
                </td>
            
                        
                <?php 
                 if($i >= 3){
                     $i = 0;
                     ?>
                     </tr>
                     <?php
                 }
                
                } } ?>
                </tr>
                </tbody>
        </table>
     <!--   </div>  !-->
            
        <footer>
            <div id="center-ft">
                <p>Todos os direitos reservados. Ocean - Comic News</p>
            </div>
        </footer>
        
        
        
        
    </body>      
    
   

    
</html>
