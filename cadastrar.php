
<html lang="pt-br">
    <head>
        <title>Comic News</title>
        <meta charset="utf-8" />
        <link rel="stylesheet" type="text/css" href="css/publicar-noticia.css" media="screen"/>
        <script type="text/javascript" src="js/jquery-3.2.0.js"></script>
    </head>
    
    <body>
        <header>
            <div id="topo">
                <div id="logo">
                    <img src="images/ocean-logo.jpg" alt="Ocean - Comic News" />
                </div>
                
                <div id="topo-right">
                    <p>Agradecemos por colaborar com a comunidade!</p>
                    <p id="adicionarNoticia"><a href="index.php">Retornar à página Principal</a></p>
                </div>
            </div>
        </header>
        
        <!-- ********* !-->
        
        <main>
            <form action="php/noticias.php" method="POST" enctype="multipart/form-data">
                <section id="publicar-noticia">
                    <section id="publicar-noticia-left">
        				<table>
        					<tbody>
        						<tr>
        							<td><input type="text" name="titulo-noticia" placeholder="Coloque o título aqui" required/></td>
        						</tr>
        						<tr>
        							<td><textarea name="conteudo-noticia" id="maxW" required></textarea></td>
        						</tr>
        					</tbody>	
        				</table>		
        			</section>
        			
        			<section id="publicar-informacoes">
        			    <div id="detalhes-informacao">
            				<p>Imagem da Notícia</p>
            				<input type="url" id="imagem-noticia-carregar" name="imagem-noticia" placeholder="Link para a imagem da notícia" required />
        			    </div>
        			<!--	<p>Data Publicação</p>
    					<p><?php echo date("d/m/Y"); ?></p> !-->
    					<div id="detalhes-informacao">
        					<p>Autor</p>
                            <input type="text" id="imagem-noticia-carregar" name="autorTexto" placeholder="Nome do autor" required />
        				</div>
    					
    					<input id="botao-publicar" type="submit" name="publicar" value="Publicar Notícia" required/>
    							
        			</section>
        		</section>	
    		</form>
        </main>
        
        
        <!-- ********* !-->
            
        <footer>
            <div id="center-ft">
                <p>Todos os direitos reservados. Ocean - Comic News</p>
            </div>
        </footer>
    </body>      
</html>