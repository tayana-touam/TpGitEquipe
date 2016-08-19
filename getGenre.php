<html>
    <head>
        <title>Mangas</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="lib/bootstrap/css/bootstrap.css" rel="stylesheet"> 
        <link href="lib/css/mangas.css" rel="stylesheet">   
        <script src="lib/jquery/jquery-2.1.3.min.js"></script>   
        <script src="lib/bootstrap/js/ui-bootstrap-tpls.js" type="text/javascript"></script>
        <script src="lib/bootstrap/js/bootstrap.js"></script> 
    </head>
    <body class="body">
        <?php
        require_once ('vues/menu.html');
        ?>
        <div class="container">
            <h1 style="text-align: center">Lister les Mangas d'un genre</h1>
            <div class="well">
                <form class="form-horizontal" role="form" name="mangaForm" action="getListeMangasGenre.php" method="POST">
                    <div class="form-group">
                        <label class="col-md-3 control-label">Genre : </label>
                        <div class="col-md-3">
                            <select class='form-control' name='cbGenres' required>
                                <?php
                                require_once '/scripts/listerGenres.php';
                                $genres = getListeGenres();
                                $listeOptions = "<OPTION VALUE=0>Sélectionner un genre\n";
                                foreach ($genres as $genre) {
                                    $listeOptions .= "<OPTION VALUE=\"$genre[id_genre]\"> $genre[lib_genre]\n";
                                }
                                echo $listeOptions;
                                ?>
                            </select>
                        </div>
                    </div>                 
                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                            <button type="submit" class="btn btn-default btn-primary"><span class="glyphicon glyphicon-ok"></span> Valider</button>
                            &nbsp;
                            <button type="button" class="btn btn-default btn-primary" onclick="javascript: window.location = '/mes-mangas/index.php';"><span class="glyphicon glyphicon-remove"></span> Annuler</button>
                        </div>           
                    </div>       
                </form>
            </div>
        </div>
    </body>    
</html>
