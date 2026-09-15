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
        <img class="header-img" src="img/curio-03-geel-logo-rgb.png" alt="curio-logo">
        <div class="scrollButtons">
            <button id="opleidingScroll">test</button>

        </div>
        <h1>Open dag</h1>
    </header>
    <main>
        <div class="wrapper">

            <div class="segment">
                <div class="text-segment">
                    <h2>Wat is de opleiding</h2>
                    <p>Bij de opleiding software developer leer je alles over programmeren. Je leert talen zoals HTML, CSS, PHP, C# en meer!</p>
                </div>
                <img src="img/software-dev.jpg" alt="software-dev">
            </div>
            
            <div class="segment">
                <img src="img/coding.jpg" alt="coding">

                <div class="text-segment">
                    <h2>Wat kun je na deze opleiding doen</h2>
                    <p>Je kan werken bij bedrijven die alleen software maken, je kan bij bedrijven werken die andere dingen hebben maar er ook geprogrammeerd wordt. Je kan ook een andere opleiding doen zoals game development doen en die kant op gaan.</p>
                </div>
            </div>

            <div class="segment">
                <div class="text-segment">
                    <h2>Overzicht hoe de opleiding loopt</h2>
                    <p>De opleiding is verdeeld in blokken, elk jaar heb je 2 blokken. Als je een blok zakt blijf je in dat blok zitten.</p>
                </div>
                <img src="img/Opleidingsoverzicht 26-27.jpg" alt="overzicht">
            </div>

            <div class="segment">
                <img src="img/Rooster eerste leerjaar.png" alt="rooster">
                <div class="text-segment">
                    <h2>Vakken die je in het eestre jaar krijgt</h2>
                    <p>Je krijgt Native, Web, PRA, DIV, Nederlands, Engels en Rekenen.</p>
                </div>
            </div>

            <div class="segment">
                <div class="text-segment">
                    <h2>Zak/slaag regeling bij reguliere vakken</h2>
                    <p>Je krijgt ook examens voor Nederlands, Engels en Rekenen. Je moet deze examens halen om je diploma te halen. Als je zakt kan je altijd 1 herkansing krijgen. Je kan ook nog een derke kans krijgen maar dat is alleen in bepaalde situaties. Daarna is het betalen.</p>
                </div>
                <img src="img/GettyImages-1148667096.jpg" alt="tets">
            </div>

            <div class="segment">
                <img src="img/coding-group.jpg" alt="code-groep">
                <div class="text-segment">
                    <h2>Werken in groepen</h2>
                    <p>Software development gaat in groepen, dat is ook wat PRA is. Je krijgt een opdracht en dat moet je samen plannen en maken in een periode van een paar weken.</p>
                </div>
            </div>
    </main>
    <footer>
        <p>© Curio, 2026</p>
    </footer>
</body>
<script>
document.getElementById("opleidingScroll").onclick = function() {scrollFunction()};

function scrollFunction() {
  scrollTo(0, 1000);
}
</script>
</html>