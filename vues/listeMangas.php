            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Titre</th>
                        <th>Genre</th>
                        <th>Modifier</th>                        
                    </tr>
                </thead> 
                <tbody>                
                    <?php
                    $lignes = "";
                    foreach ($mangas as $manga) {// On parcourt la collection
                        $lignes .= "<tr>\n"; // On construit une ligne <tr>
                        $lignes .= "<td> $manga[id_manga]</td>\n"; // On construit un <td>
                        $lignes .= "<td> $manga[titre]</td>\n";
                        $lignes .= "<td> $manga[lib_genre]</td>\n";
                        $lignes .= "<td> <a href='/mes-mangas/pageManga.php?id_manga=$manga[id_manga]'>Modifier</a></td>\n";                        
                        $lignes .= "</tr>\n";
                    }
                    echo utf8_encode($lignes); // On affiche tous les <tr>
                    ?>
                </tbody>
            </table>