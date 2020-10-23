<div class="ms-selection">
    <!--Start Modal Ajouter-->
    <div class="ms-modal-overlay closed" id="modal-overlay"></div>

    <div class="ms-modal closed" id="modal">
        <button class="ms-close-button" id="close-addButton">X</button>
        <div class="ms-modal-guts">
            <h1>Ajoute Employe</h1>
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
    <h1 class="ms-center">Gestion des Employés</h1>
    <hr>
    <div class="ms-selection-header">
        <button id="open-addButton" class="ms-open-btn ms-open-button1">Ajouter</button>
        <!--<button id="open-searchButton" class="ms-open-btn ms-open-button">Rechercher</button>-->                        
    </div>
    <hr>
    <div class="ms-selection-body">
        <div class="ms-block-form">
            <div class="ms-block">
                <div class="ms-title">Matricule</div>
                <div class="ms-input"><input type="text" id="searchMatricule" name="name"></div>
                <div class="ms-input" hidden=""><input type="text" id="update" name="update"></div>
            </div>
            <div class="ms-block">
                <div class="ms-title">Nom</div>
                <div class="ms-input"><input type="text" id="searchNom" name="name"></div>
                <div class="ms-input" hidden=""><input type="text" id="update" name="update"></div>
            </div>
            <div class="ms-block">
                <div class="ms-title">Prenom</div>
                <div class="ms-input"><input type="text" id="searchPrenom" name="name"></div>
                <div class="ms-input" hidden=""><input type="text" id="update" name="update"></div>
            </div>
<!--            <div class="ms-block">
                <div class="ms-title">Photo</div>
                <div class="ms-input"><input type="text" id="searchPhoto" name="name"></div>
                <div class="ms-input" hidden=""><input type="text" id="update" name="update"></div>
            </div>-->
            <div class="ms-block">
                <div class="ms-title">CIN</div>
                <div class="ms-input"><input type="text" id="searchCIN" name="name"></div>
                <div class="ms-input" hidden=""><input type="text" id="update" name="update"></div>
            </div>
            <div class="ms-block">
                <div class="ms-title">Email</div>
                <div class="ms-input"><input type="text" id="searchEmail" name="name"></div>
                <div class="ms-input" hidden=""><input type="text" id="update" name="update"></div>
            </div>
            <div class="ms-block">
                <div class="ms-title">Telephone</div>
                <div class="ms-input"><input type="text" id="searchTelephone" name="name"></div>
                <div class="ms-input" hidden=""><input type="text" id="update" name="update"></div>
            </div>
            <div class="ms-block">
                <div class="ms-title">Salaire</div>
                <div class="ms-input"><input type="text" id="searchSalaire" name="name"></div>
                <div class="ms-input" hidden=""><input type="text" id="update" name="update"></div>
            </div>
            <div class="ms-block">
                <div class="ms-title">Date naissance</div>
                <div class="ms-input"><input type="date" id="searchDate_naissance" name="name" required pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}"></div>
            </div>
            <!--                            <div class="ms-block-rl">
                                            <div class="ms-title">Sexe</div>
                                            <label class="container">Homme
                                                <input type="radio" checked="checked" name="radio" value="Homme">
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="container">Femme
                                                <input type="radio" name="radio" value="Femme">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>-->
            <div class="ms-block-rl">

                <button id="ms-searchEmploye" class="ms-search-btn">Rechercher</button>
                <!--<button id="ms-cleanEmploye" class="ms-search-btn">Nettoyer</button>-->
            </div>
        </div>
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
<script>
    $(".test").remove();
    function addScript(src) {
        var s = document.createElement('script');
        s.setAttribute('src', src);
        s.setAttribute('class', "test");
        $(".ms-article").append(s);
    }
    addScript("js/dashboardScript.js");
    addScript("script/employe.js");
    addScript("script/Login.js");


</script>

