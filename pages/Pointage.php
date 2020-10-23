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
    
    <h1 class="ms-center">Pointage des employés</h1>
    <hr>
    <div class="ms-selection-header ms-page-pointage">
        <div class="ms-block">
                <div class="ms-input"><input type="text" id="searchMatriculeForPointage" name="name"></div>
<!--            <select id="ms-selectEmploye" class="ms-select-option">
                                                <option value="volvo">Volvo</option>
                                                <option value="saab">Saab</option>
                                                <option value="vw">VW</option>
                                                <option value="audi" selected>Audi</option>
            </select>-->
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
                            Employe id
                        </th>
                        <th>
                            Date
                        </th>
                        <th>
                            Etat
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
    addScript("script/pointage.js");
    addScript("script/Login.js");


</script>