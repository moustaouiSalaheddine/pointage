<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>ilyass</title>
        <link href="css/sashboardStyle.css" rel="stylesheet" type="text/css"/>
        <script src="JQ folder/jquery-3.2.1.min.js" type="text/javascript"></script>
    </head>
    <body>

        <div class="ms-container">
            <!--<div class="ms-header"></div>-->
            <div class="ms-sidebar">
                <div class="ms-sidebar-header">
                    <div class="ms-items">
                        <div class="ms-figure">
                            <!--<img src="image/photo cv mst.png" alt=""/>-->
                            <img src="image/photo mst.jpg" alt=""/>
                        </div>
                        <div class="ms-info">
                            <p class="ms-name">Amiah Burton</p>
                            <p class="ms-email">ilyass@gmail.com</p>
                        </div>
                    </div>
                </div>
                <div class="ms-sidebar-body">
                    <div class="ms-url ms-active"><a href="index.php">link 1</a></div>
                    <div class="ms-url"><a href="a.php">link 2</a></div>
                    <div class="ms-url"><a href="b.php">link 3</a></div>
                    <div class="ms-url"><a href="c.php">link 4</a></div>
                </div>

            </div>
            <div class="ms-article">
                <div class="ms-selection">
                    <!--Start Modal Ajouter-->
                    <div class="ms-modal-overlay closed" id="modal-overlay"></div>

                    <div class="ms-modal closed" id="modal">
                        <button class="ms-close-button" id="close-addButton">X</button>
                        <div class="ms-modal-guts">
                            <h1>Ajoute un Employe</h1>
                            <div class="ms-block">
                                <div class="ms-title">Matricule</div>
                                <div class="ms-input"><input type="text" id="addMatricule" name="name"></div>
                                <div class="ms-input" hidden=""><input type="text" id="update" name="update"></div>
                            </div>
                            <div class="ms-block">
                                <div class="ms-title">Nom</div>
                                <div class="ms-input"><input type="text" id="addNom" name="name"></div>
                                <div class="ms-input" hidden=""><input type="text" id="update" name="update"></div>
                            </div>
                            <div class="ms-block">
                                <div class="ms-title">Prenom</div>
                                <div class="ms-input"><input type="text" id="addPrenom" name="name"></div>
                                <div class="ms-input" hidden=""><input type="text" id="update" name="update"></div>
                            </div>
                            <div class="ms-block">
                                <div class="ms-title">Photo</div>
                                <div class="ms-input"><input type="text" id="addPhoto" name="name"></div>
                                <div class="ms-input" hidden=""><input type="text" id="update" name="update"></div>
                            </div>
                            <div class="ms-block">
                                <div class="ms-title">CIN</div>
                                <div class="ms-input"><input type="text" id="addCIN" name="name"></div>
                                <div class="ms-input" hidden=""><input type="text" id="update" name="update"></div>
                            </div>
                            <div class="ms-block">
                                <div class="ms-title">Email</div>
                                <div class="ms-input"><input type="text" id="addEmail" name="name"></div>
                                <div class="ms-input" hidden=""><input type="text" id="update" name="update"></div>
                            </div>
                            <div class="ms-block">
                                <div class="ms-title">Telephone</div>
                                <div class="ms-input"><input type="text" id="addTelephone" name="name"></div>
                                <div class="ms-input" hidden=""><input type="text" id="update" name="update"></div>
                            </div>
                            <div class="ms-block">
                                <div class="ms-title">Salaire</div>
                                <div class="ms-input"><input type="text" id="addSalaire" name="name"></div>
                                <div class="ms-input" hidden=""><input type="text" id="update" name="update"></div>
                            </div>
                            <div class="ms-block">
                                <div class="ms-title">Date naissance</div>
                                <div class="ms-input"><input type="date" id="addDate_naissance" name="name" required pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}"></div>
                            </div>
                            <div class="ms-block-rl">
                                <div class="ms-title">Sexe</div>
                                <label class="container">Homme
                                    <input type="radio" checked="checked" name="radio" value="Homme">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="container">Femme
                                    <input type="radio" name="radio" value="Femme">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="ms-block-add">

                                <button id="ms-addEmploye" class="ms-add-btn">Ajouter</button>
                            </div>
                        </div>
                    </div>
                    <!--Ends Modal Ajouter-->
                    <!--Start Modal Suprrimer-->
                    <div class="ms-modal-overlay closed" id="modal-overlay-deleteEmploye"></div>

                    <div class="ms-modal closed" id="modal-deleteEmploye">
                        <button class="ms-close-button" id="close-addButton-deleteEmploye">X</button>
                        <div class="ms-modal-guts">
                            <h1>Confirmer la suppression de l'employé</h1>
                            êtes-vous sûr de vouloir supprimer?
                            <div class="ms-block-add">

                                <button id="ms-deleteEmploye" class="ms-add-btn">Confirmer</button>
                            </div>
                        </div>
                    </div>
                    <!--Ends Modal Supprimer-->
                    <h1 class="ms-center">Pointage des employés</h1>
                    <hr>
                    <div class="ms-selection-header ms-page-pointage">
                        <div class="ms-block">
                            <select id="ms-selectEmploye" class="ms-select-option">
<!--                                <option value="volvo">Volvo</option>
                                <option value="saab">Saab</option>
                                <option value="vw">VW</option>
                                <option value="audi" selected>Audi</option>-->
                            </select>
                        </div>
                        <button id="ms-addPointage" class="ms-search-btn">Entree / Sortie</button>                       
                    </div>
                    <hr>
                    <div class="ms-selection-body">

                        <div class="ms-table" id="ms-display-table">
                            <table class="ms-table table-striped">
                                <thead>
                                    <tr>
                                        <th>
                                            Supprimer
                                        </th>
                                        <th>
                                            Matricule
                                        </th>
                                        <th>
                                            Nom
                                        </th>
                                        <th>
                                            Prenom
                                        </th>
                                        <th>
                                            Photo
                                        </th>
                                        <th>
                                            CIN
                                        </th>
                                        <th>
                                            Email
                                        </th>
                                        <th>
                                            Telephone
                                        </th>
                                        <th>
                                            Salaire
                                        </th>
                                        <th>
                                            Date création
                                        </th>
                                        <th>
                                            Date naissance
                                        </th>
                                        <th>
                                            Sexe
                                        </th>
                                    </tr>
                                </thead>
                                <tbody id="mTable">
                                    <!--//TODO-->
                                </tbody>
                            </table>
                        </div>
                    </div>

                    
                    
                </div>
            </div>
        </div>

        <script src="js/dashboardScript.js" type="text/javascript"></script>
        <script src="script/pointage.js" type="text/javascript"></script>
        <script src="script/Login.js" type="text/javascript"></script>
    </body>
</html>