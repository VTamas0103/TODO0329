$(function () {

    $("#betolt").on("click", beolvas);
    $("#add").on("click", adatKuld);

});

var tomb = [];

function beolvas() {
    $.ajax({
        type: "GET",
        url: "feldolgoz.php",
        success: function (eredmeny) {
            tomb = JSON.parse(eredmeny);
            kiir();
        },
        error: function () {
            alter("Hiba !");
        }
    });
}

function kiir() {
    console.log(tomb);
    $('tablazat').html("");
    for (var i = 0; i < tomb.length; i++) {
        var sor = "<li>" + tomb[i].todo + " " + tomb[i].datum + "</li>";
        $("#tablazat").append(sor);
    }

}
function adatKuld() {
    var teendok = {
        todo: $("#nev").val(),
        datum: $("#datum").val()
    };

    $.ajax({
        type: "POST",
        url: "beir.php",
        data: tomb,
        success: function (ujteendo) {
            teendok.push(JSON.parse(ujteendo));
            kiir();
        },
        error: function () {
            alert("Hiba az adatok mentésekor!");
        }
    });
}