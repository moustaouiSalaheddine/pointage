
//$ms_Matricule = "";
//$ms_ThisValue = "";
//$ms_ThisName = "";
var idEmploye = "";
$(document).ready(function () {
    loadData();
    $('#ms-searchEmploye').click(function () {
        $name = $('#searchNom').val();
        $lastName = $('#searchPrenom').val();
        $matricule = $('#searchMatricule').val();
        $phone = $('#searchTelephone').val();
        $photo = $('#searchPhoto').val();
        $email = $('#searchEmail').val();
        $salaire = $('#searchSalaire').val();
        $createdAt = $('#searchcreatedAt').val();
        $date_naissance = $('#searchDate_naissance').val();
        $cin = $('#searchCIN').val();
//        $sexe = $(".ms-block-rl input[type=radio]:checked").val(); , "sexe": $sexe
        $.ajax({
            type: "POST",
            url: "controller/employe/findEmployeByAnyAttribute.php",
            data: {"nom": $name, "prenom": $lastName, "photo": $photo, "matricule": $matricule, "telephone": $phone, "email": $email, "salaire": $salaire, "date_naissance": $date_naissance, "cin": $cin},
            success: function (res) {
                console.log(res);
                fillData(res);
            }
        });
    });
    $('#ms-addEmploye').click(function () {
        $name = $('#addNom').val();
        $lastName = $('#addPrenom').val();
        $matricule = $('#addMatricule').val();
        $phone = $('#addTelephone').val();
        $photo = $('#addPhoto').val();
        $email = $('#addEmail').val();
        $salaire = $('#addSalaire').val();
        $createdAt = $('#addcreatedAt').val();
        $date_naissance = $('#addDate_naissance').val();
        $cin = $('#addCIN').val();
        $sexe = $(".ms-block-rl input[type=radio]:checked").val();


        var modal = $("#modal");
        var modalOverlay = $("#modal-overlay");
        $.ajax({
            type: "POST",
            url: "controller/employe/addEmploye.php",
            data: {"nom": $name, "prenom": $lastName, "photo": $photo, "matricule": $matricule, "telephone": $phone, "email": $email, "salaire": $salaire, "date_naissance": $date_naissance, "cin": $cin, "sexe": $sexe},
            success: function (res) {
                console.log(res);
                if (res == "nom vide") {
                    console.log("nom vide");
                } else if (res == "prennom vide") {
                    console.log("prennom vide");
                } else if (res == "matricule vide") {
                    console.log("matricule vide");
                } else if (res == "photo vide") {
                    console.log("photo vide");
                } else if (res == "matricule already exists") {
                    console.log("matricule already exists");
                } else {
                    fillData(res);

                    modal.toggle();
                    modalOverlay.toggle();
                }
            }
        });
    });
    $('#ms-cleanEmploye').click(function () {
        cleanInputs();
//        $sexe = $(".ms-block-rl input[type=radio]:checked").val(); , "sexe": $sexe

    });

    $('#mTable').on("click", ".ms-js-operation", function () {
// Modal Confirmation supprission

        var modal_deleteEmploye = $("#modal-deleteEmploye");
        var modalOverlay_deleteEmploye = $("#modal-overlay-deleteEmploye");
        var closeButton_deleteEmploye = $("#close-addButton-deleteEmploye");
        var openButton_deleteEmploye = $("#open-addButton-deleteEmploye");
        idEmploye = $(this).attr("operation");
        modal_deleteEmploye.toggle();
        modalOverlay_deleteEmploye.toggle();
//        modal_deleteEmploye.classList.toggle("closed");
//        modalOverlay_deleteEmploye.classList.toggle("closed");

    });
    $("#ms-deleteEmploye").click(() => {
//        alert("delete");
        $.ajax({
            url: "controller/employe/deleteEmploye.php",
            type: "POST",
            cache: false,
            data: {"id": idEmploye},
            success: function (data, textStatus, jqXHR) {
                console.log(data);
                loadData();
                $("#modal-deleteEmploye").toggle();
                $("#modal-overlay-deleteEmploye").toggle();
            },
            error: function (jqXHR, textStatus, errorThrown) {
                console.log("error");
            }
        });
//        modal_deleteEmploye.toggle();
//        modalOverlay_deleteEmploye.toggle();
    });
    $("#close-addButton-deleteEmploye").click(() => {
        var modal_deleteEmploye = $("#modal-deleteEmploye");
        var modalOverlay_deleteEmploye = $("#modal-overlay-deleteEmploye");
        modal_deleteEmploye.toggle();
        modalOverlay_deleteEmploye.toggle();
    });
    $("#closeButton-deleteEmploye").click(() => {
        var modal_deleteEmploye = $("#modal-deleteEmploye");
        var modalOverlay_deleteEmploye = $("#modal-overlay-deleteEmploye");
        modal_deleteEmploye.toggle();
        modalOverlay_deleteEmploye.toggle();
    });


});
function loadData() {
    $.ajax({
        type: "POST",
        url: "controller/employe/getEmploye.php",
        //dataType: "JSON",
        success: function (res) {
//            console.log(res);
            fillData(res);
        }
    });
//    setTimeout(function () {
//        highlight_row();
//    }, 300);
//    highlight_row();
//    alert();
}
function editData($ms_ThisName, $Value, $ms_Matricule) {
    $.ajax({
        type: "POST",
        url: "controller/employe/editEmploye.php",
        data: {"nameAttribute": $ms_ThisName, "valueAttribute": $Value, "matricule": $ms_Matricule},
        //dataType: "JSON",
        success: function (res) {
            console.log(res);
            if (res === false) {
                //TODO Msg Error
                console.log("TODO Msg Error");
            } else {
//                fillData(res);
                loadData();
            }

        }
    });
//    setTimeout(function () {
//        highlight_row();
//    }, 300);
//    highlight_row();
//    alert();
}
function cleanInputs() {
    $name = $('#searchNom').val("");
    $lastName = $('#searchPrenom').val("");
    $matricule = $('#searchMatricule').val("");
    $phone = $('#searchTelephone').val("");
    $photo = $('#searchPhoto').val("");
    $email = $('#searchEmail').val("");
    $salaire = $('#searchSalaire').val("");
    $createdAt = $('#searchcreatedAt').val("");
    $date_naissance = $('#searchDate_naissance').val("");
    $cin = $('#searchCIN').val("");
}
function fillData(data) {
    let container = $("#mTable");
    let res = JSON.parse(data);
    console.log(res,50);
    let row = "";
    if (res != null) {
        for (var i = 0; i < res.length; i++) {

            row += '<tr>'
                    + '<td class="ms-js-operation" operation="' + res[i].id + '" ><button class="ms-search-btn">Supprimer</button></td>'
                    + '<td class="ms-js-matricule" id="matricule-' + res[i].id + '" vals="' + res[i].matricule + '" fields="matricule">' + res[i].matricule + '</td>'
                    + '<td vals="' + res[i].nom + '" fields="nom">' + res[i].nom + '</td>'
                    + '<td vals="' + res[i].prenom + '" fields="prenom">' + res[i].prenom + '</td>'
                    + '<td vals="' + res[i].photo + '" fields="photo">' + res[i].photo + '</td>'
                    + '<td vals="' + res[i].cin + '" fields="cin">' + res[i].cin + '</td>'
                    + '<td vals="' + res[i].email + '" fields="email">' + res[i].email + '</td>'
                    + '<td vals="' + res[i].telephone + '" fields="telephone">' + res[i].telephone + '</td>'
                    + '<td vals="' + res[i].salaire + '" fields="salaire">' + res[i].salaire + '</td>'
                    + '<td vals="' + res[i].createdAt + '" field="createdAt">' + res[i].createdAt + '</td>'
                    + '<td vals="' + res[i].date_naissance + '" fields="date_naissance">' + res[i].date_naissance + '</td>'
                    + '<td vals="' + res[i].sexe + '" fields="sexe">' + res[i].sexe + '</td>'
                    + '</tr>';

        }
    } 
//    else if (data.length == 1) {
//        i = 0;
//        row += '<tr>'
//                + '<td class="ms-js-operation" operation="' + res[i].id + '" ><button class="ms-search-btn">Supprimer</button></td>'
//                + '<td class="ms-js-matricule" id="matricule-' + res[i].id + '" vals="' + res[i].matricule + '" fields="matricule">' + res[i].matricule + '</td>'
//                + '<td vals="' + res[i].nom + '" fields="nom">' + res[i].nom + '</td>'
//                + '<td vals="' + res[i].prenom + '" fields="prenom">' + res[i].prenom + '</td>'
//                + '<td vals="' + res[i].photo + '" fields="photo">' + res[i].photo + '</td>'
//                + '<td vals="' + res[i].cin + '" fields="cin">' + res[i].cin + '</td>'
//                + '<td vals="' + res[i].email + '" fields="email">' + res[i].email + '</td>'
//                + '<td vals="' + res[i].telephone + '" fields="telephone">' + res[i].telephone + '</td>'
//                + '<td vals="' + res[i].salaire + '" fields="salaire">' + res[i].salaire + '</td>'
//                + '<td class="ms-js-matricule" vals="' + res[i].createdAt + '" field="createdAt">' + res[i].createdAt + '</td>'
//                + '<td vals="' + res[i].date_naissance + '" fields="date_naissance">' + res[i].date_naissance + '</td>'
//                + '<td vals="' + res[i].sexe + '" fields="sexe">' + res[i].sexe + '</td>'
//                + '</tr>';
//
//    }
    else {
        console.log("Data not found");

    }


    container.empty();
    container.html(row);
    highlight_row();

    $(".ms-js-matricule").prop("ondblclick", null);
    $(".ms-js-operation").prop("ondblclick", null);

}
function highlight_row() {
    var table = document.getElementById('ms-display-table');
    var cells = table.getElementsByTagName('td'); // ma3mark sam3ti b les class hahah nn hhh

    for (var i = 0; i < cells.length; i++) {// han khariti f tab3a mais machi mochkil hahah
        // Take each cell
        var cell = cells[i];
        // do something on onclick event for cell
        cell.ondblclick = function () {
            // Get the row id where the cell exists
            // Star (line) fin clickiti
            var rowId = this.parentNode.rowIndex;

            var rowsNotSelected = table.getElementsByTagName('tr');
            console.log(rowsNotSelected + "\n");
            for (var row = 0; row < rowsNotSelected.length; row++) {
                rowsNotSelected[row].style.backgroundColor = "";//ta hana kadalik 
//                            rowsNotSelected[row].classList.remove('selected');
            }
            var rowSelected = table.getElementsByTagName('tr')[rowId];
            rowSelected.style.backgroundColor = "yellow";
            rowSelected.className += " selected";


            var $this = $(this); /// zagi wach var daba ola $ 
            var $input = $('<input>', {//kharia hhhhhh nakml lik 3la hadi ach ghadi ndir hahah
                value: $this.text(),
                type: 'text',
                blur: function () {
                    $this.text(this.value);
//                    console.log("blur");
                },
                change: function (e) {
                    GloblalValue = $this.text();
//                    console.log("v: "+e.currentTarget.value);
//                    console.log($ms_ThisValue);
                    //and here you send your update to the API to handle the shit for you 

                    console.log($ms_ThisName, e.currentTarget.value, $ms_Matricule);
                    editData($ms_ThisName, e.currentTarget.value, $ms_Matricule);
                    console.log("change");
                }
                ,
                keyup: function (e) {
                    if (e.which === 13)
                        $input.blur();
//                    console.log("keyup");
                }
            }).appendTo($this.empty()).focus();
            msg = 'Matricule: ' + rowSelected.cells[1].innerHTML;
            msg += '\n click value 1: ' + this.getAttribute("fields");
            msg += '\n click value: ' + this.getAttribute("vals");
//            console.log(msg);
            $ms_ThisName = this.getAttribute("fields");
            $ms_ThisValue = this.getAttribute("vals");
            $ms_Matricule = rowSelected.cells[1].innerHTML;
//            if
//            editData($ms_ThisName, $ms_ThisValue, $ms_Matricule);
//            $ms_ThisValue = this.value;
//            console.log($ms_Matricule + " " + $ms_ThisValue);
        }
    }

}
var GloblalValue = null; 