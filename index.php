<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Speisekarte für Jawa</title>
</head>
<body onload="showWochenkarteAnhandVonKW()">
<h1>Jawa Wochenkarte</h1>
<div id="menu" showWochenkarteAnhandVonKW()></div>
<div id="wochenkarte">

    <img src="menu1.jpg" id="Wochenkarte1" alt="Wochenkarte1" hidden>
    <img src="menu2.jpg" id="Wochenkarte2" alt="Wochenkarte2" hidden>
    <img src="menu3.jpg" id="Wochenkarte3" alt="Wochenkarte3" hidden>
    <img src="menu4.jpg" id="Wochenkarte4" alt="Wochenkarte4" hidden>


</div>
<script>
    function showWochenkarteAnhandVonKW() {



        let menu = document.getElementById("menu");
        var elem = document.createElement("img");

        //Ermitteln der aktuellen KW
        currentdate = new Date();
        var oneJan = new Date(currentdate.getFullYear(),0,1);
        var numberOfDays = Math.floor((currentdate - oneJan) / (24 * 60 * 60 * 1000));
        var result = Math.ceil(( currentdate.getDay() + 1 + numberOfDays) / 7);
        console.log(`The week number of the current date (${currentdate}) is ${result}.`);

        //Ermitteln und ANzeigen der aktuellen Wochenkarte anhand der KW
        var mathStuff = (result % 4);
        menu.innerHTML = `Kalenderwoche ist ${result}. Speisekarte ist ${mathStuff}`;
        let wochenkarte = document.getElementById("Wochenkarte" + mathStuff);
        wochenkarte.removeAttribute('hidden')
    }
</script>
</body>
</html>
