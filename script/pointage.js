$(document).ready(function () {
    loadData();
    loadSelectData();
    $('#searchMatriculeForPointage').keyup(function (event) {
        if (event.keyCode === 13) {


            $employe_id = $("#ms-selectEmploye").val();
            $matricule = $("#searchMatriculeForPointage").val();
//            alert($matricule);
//        $sexe = $(".ms-block-rl input[type=radio]:checked").val(); , "sexe": $sexe
            $.ajax({
                type: "POST",
                url: "controller/pointage/addPointage.php",
                data: {"matricule": $matricule},
                success: function (res) {
                    console.log(res);
                    loadSelectData();
                    loadData();
                }
            });
        }
    });
//    $('#ms-addPointage').click(function () {
//        alert($("#ms-selectEmploye").val());
//        $employe_id = $("#ms-selectEmploye").val();
////        $sexe = $(".ms-block-rl input[type=radio]:checked").val(); , "sexe": $sexe
//        $.ajax({
//            type: "POST",
//            url: "controller/pointage/addPointage.php",
//            data: {"employe_id": $employe_id},
//            success: function (res) {
//                console.log(res);
//                loadSelectData();
//            }
//        });
//    });

});
function loadData() {
    $.ajax({
        type: "POST",
        url: "controller/pointage/getPointage.php",
        //dataType: "JSON",
        success: function (res) {
//            console.log("table");
//            console.log(res);
            fillData(res);
        }
    });
}
function loadSelectData() {
    $.ajax({
        type: "POST",
        url: "controller/employe/getEmploye.php",
        //dataType: "JSON",
        success: function (res) {
//            console.log(res);
            loadSelect(res);
        }
    });
}


function loadSelect(data) {
    let container = $("#ms-selectEmploye");
    let res = JSON.parse(data);
//    console.log(res);
    let row = "";
    if (res != null) {
        for (var i = 0; i < res.length; i++) {
            row += '<option value="' + res[i].id + '" >' + res[i].nom + ' ' + res[i].prenom + '</option>';
        }
    } else if (res.length == 1) {
        i = 0;
        row += '<option value="' + res[i].id + '" >' + res[i].nom + ' ' + res[i].prenom + '</option>';
    } else {
        console.log("Data not found");
    }
    container.empty();
    container.html(row);
}

function fillData(data) {
//    alert(data)
    let container = $("#mTable");
    let res = JSON.parse(data);
//    console.log(res);
    let row = "";
    if (res != null) {

        
        for (var i = 0; i < res.length; i++) {

            row += '<tr>'
//                + '<td class="ms-js-operation">' + res[i].id + '</td>'
                    + '<td class="ms-js-matricule" id="matricule-' + res[i].employe_id + '" vals="' + res[i].matricule + '" fields="matricule">' + res[i].employe_id + '</td>'
                    + '<td class="ms-js-matricule" id="matricule-' + res[i].id + '" vals="' + res[i].matricule + '" fields="matricule">' + res[i].date_pointage + '</td>'
                    + '<td class="ms-js-matricule" id="matricule-' + res[i].id + '" vals="' + res[i].matricule + '" fields="matricule">' + res[i].etat + '</td>'
                    + '</tr>';
        }
    } 
//    else if (data.length == 1) {
//        i = 0;
//        row += '<tr>'
////                + '<td >' + res[i].id + '</td>'
//                + '<td class="ms-js-matricule" id="matricule-' + res[i].employe_id + '" vals="' + res[i].employe_id + '" fields="matricule">' + res[i].employe_id + '</td>'
//                + '<td class="ms-js-matricule" id="matricule-' + res[i].date_pointage + '" vals="' + res[i].date_pointage + '" fields="matricule">' + res[i].date_pointage + '</td>'
//                + '</tr>';
//    } 
    else {
        console.log("Data not found");
    }


    container.empty();
    container.html(row);
}