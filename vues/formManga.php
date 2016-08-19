                <h1 class="col-md-9 col-md-offset-3"><?php echo $titrePage ?></h1>             
                <form class="form-horizontal" enctype="multipart/form-data" role="form" name="mangaForm" action="scripts/enregistrerManga.php?id_manga=<?php echo $manga->id_manga ?>" method="POST">
                    <div class="form-group">
                        <label class="col-md-3 control-label">Titre : </label>
                        <div class="col-md-6">
                            <input type="text" name="titre" value="<?php echo $manga->titre?>" class="form-control" required autofocus>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Genre : </label>
                        <div class="col-md-3">
                            <select class='form-control' name='cbGenres' required>
                                <?php
                                require_once '/scripts/listerGenres.php';
                                $genres = getListeGenres();
                                $listeOptions = "<OPTION VALUE=0>Sélectionner un genre\n";
                                foreach ($genres as $genre) {
                                    $selected = "";
                                    if ($genre[id_genre]==$manga->id_genre)
                                        $selected = "selected";
                                    $listeOptions .= "<OPTION VALUE=\"$genre[id_genre]\" $selected> $genre[lib_genre]\n";
                                }
                                echo $listeOptions;
                                ?>
                            </select>
                        </div>
                    </div>  
                    <div class="form-group">
                        <label class="col-md-3 control-label">Couverture : </label>
                        <div class="col-md-9">
                            <input type="hidden" name="couverture" value="<?php echo $manga->couverture?>"/>                            
                            <input type="hidden" name="MAX_FILE_SIZE" value="204800" />
                            <input name="couverture" type="file" class="btn btn-default pull-left"/>
                            <?php
                                if ($manga->couverture){
                                   echo "<img src='images/$manga->couverture' class='img-responsive pull-left imgReduite'  alt='$manga->couverture' >";
                                }
                            ?>                            
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

