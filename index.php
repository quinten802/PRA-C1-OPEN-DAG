<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Open dag</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <div class="logo">
            <img class="header-img" src="img/curio-03-geel-logo-rgb.png" alt="curio-logo">
            <h1>Open dag</h1>
        </div>
        <div class="buttons">
            <button id="opleidingScroll">OVER DE OPLEIDING</button>
            <button id="naOpleidingScroll">NA DE OPLEIDING</button>
            <button id="overzichtScroll">OVERZICHT OVER DE OPLEIDING</button>
            <button id="vakkenScroll">HET EERSTE JAAR</button>
            <button id="reguliereScroll">ZAK EN SLAAG REGELING</button>
            <button id="groepenScroll">WERKEN IN GROEPEN</button>
        </div>
    </header>
    <main>
        <div class="wrapper">

            <div id="opleiding" class="segment">
                <div class="text-segment">
                    <h2>Over de opleiding</h2>
                    <p>Bij de opleiding software developer leer je alles over programmeren. Je leert talen zoals HTML, CSS, PHP, C# en meer!</p>
                </div>
                <img src="img/software-dev.jpg" alt="software-dev">
            </div>
            
            <div id="na" class="segment reverse">
                <div class="text-segment">
                    <h2>Na de opleiding</h2>
                    <p>Je kan werken bij bedrijven die alleen software maken, je kan bij bedrijven werken die andere dingen hebben maar er ook geprogrammeerd wordt. Je kan ook een andere opleiding doen zoals game development doen en die kant op gaan.</p>
                </div>
                <img src="img/coding.jpg" alt="coding">
            </div>

            <div id="overzicht" class="segment">
                <div class="text-segment">
                    <h2>Overzicht over de opleiding</h2>
                    <p>De opleiding is verdeeld in blokken, elk jaar heb je 2 blokken. Als je een blok zakt blijf je in dat blok zitten. Je gaat dus niet terug naar de eerste als je blok D in de tweede zakt. Je moet ook nog stage lopen. Dat doe je in de tweede en de vierde. Er is ook nog een mogelijkheid om te versnellen. Dan kan je eerder klaar met de opleiding zijn.</p>
                </div>
                <img src="img/Opleidingsoverzicht 26-27.jpg" alt="overzicht">
            </div>

            <div id="rooster" class="segment reverse">
                <div class="text-segment">
                    <h2>Het eerste jaar</h2>
                    <p>Je krijgt Native, wat is programma's maken die op je laptop draaien. Web, wat is websites maken. PRA, waarbij je samen in een groep een opdracht krijgt die je in een periode van een paar weken moet maken, dit is vergelijkbaar met hoe werk er later uit ziet. Je hebt ook nog gewoon de reguliere vakken zoals Nederlands, Engels en Rekenen.</p>
                </div>
                <img src="img/Rooster eerste leerjaar.png" alt="rooster"va>
            </div>

            <div id="regeling" class="segment">
                <div class="text-segment">
                    <h2>Zak/slaag regeling</h2>
                    <p>Je krijgt ook examens voor Nederlands, Engels en Rekenen. Je moet deze examens halen om je diploma te halen. Als je zakt kan je altijd 1 herkansing krijgen. Je kan ook nog een derde kans krijgen maar dat is alleen in bepaalde situaties. Daarna is het betalen.</p>
                </div>
                <img src="img/GettyImages-1148667096.jpg" alt="tets">  
            </div>

            <div id="groep" class="segment reverse">
                <div class="text-segment">
                    <h2>Werken in groepen</h2>
                    <p>Software development gaat in groepen, dat is ook wat PRA is. Je krijgt een opdracht en dat moet je samen plannen en maken in een periode van een paar weken.</p>
                </div>
                <img src="img/coding-group.jpg" alt="code-groep">
            </div>
    </main>
    <footer>
        <p>© Curio, 2026</p>
    </footer>
</body>
<script>
document.getElementById("opleidingScroll").onclick = function() {scrollOpleiding()};

function scrollOpleiding() {
    document.getElementById("opleiding").scrollIntoView({ behavior: "smooth"});
}

document.getElementById("naOpleidingScroll").onclick = function() {scrollNaOpleiding()};

function scrollNaOpleiding() {
    document.getElementById("na").scrollIntoView({ behavior: "smooth"});
}

document.getElementById("overzichtScroll").onclick = function() {scrollOverzicht()};

function scrollOverzicht() {
    document.getElementById("overzicht").scrollIntoView({ behavior: "smooth"});
}

document.getElementById("vakkenScroll").onclick = function() {scrollVakken()};

function scrollVakken() {
    document.getElementById("rooster").scrollIntoView({ behavior: "smooth"});
}

document.getElementById("reguliereScroll").onclick = function() {scrollReguliere()};

function scrollReguliere() {
    document.getElementById("regeling").scrollIntoView({ behavior: "smooth"});
}

document.getElementById("groepenScroll").onclick = function() {scrollGroepen()};

function scrollGroepen() {
    document.getElementById("groep").scrollIntoView({ behavior: "smooth"});
}
</script>
</html>