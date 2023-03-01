<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Speisekarte für Jawa</title>
    <style>
        .row {
            display: flex;
            gap: 0%;
        }

        .column {
            column-gap: 0px;
            width: 520px;
            height: 800px;
            flex: 1%;
            padding: 0px;
        }
    </style>
</head>
<body align="center" onload="showWochenkarteAnhandVonKW()" style="background-color:antiquewhite">
<h1><u>Jawa Wochenkarte</u></h1>
<p>

</p>
<div id="menu" showWochenkarteAnhandVonKW()></div>
<p>

</p>

<div class="row">
    <div class="column">
        <img src="" id="WochenkarteId" alt="Beilagen" width="520" height="800">
    </div>
    <div class="column">
        <img src="Beilagen1-4.jpg" alt="Wochenkarte" width="520" height="=800">
    </div>
</div>
<script>
    function showWochenkarteAnhandVonKW() {
        let menu = document.getElementById("menu");

        //Ermitteln der aktuellen Kalenderwoche
        currentdate = new Date();
        var oneJan = new Date(currentdate.getFullYear(), 0, 1);
        var numberOfDays = Math.floor((currentdate - oneJan) / (24 * 60 * 60 * 1000));
        var result = Math.ceil((currentdate.getDay() + 1 + numberOfDays) / 7);
        //console.log(`The week number of the current date (${currentdate}) is ${result}.`);

        //Ermitteln und ANzeigen der aktuellen Wochenkarte anhand der KW
        var mathStuff = (result % 4);
        menu.innerHTML = `Wir befinden uns in der ${result}. Kalenderwoche. Die Wochenkarte müsste ${mathStuff}. Woche sein. Ohne Gewähr!`;

        //Bitte alle Images folgendermaßen bennenen: "Wochenkarte1", "Wochenkarte2" etc. So kann der Code auch tun, was er tun soll!
        document.getElementById("WochenkarteId").src = "menu" + mathStuff + ".jpg"
    }

</script>
</body>
</html>
