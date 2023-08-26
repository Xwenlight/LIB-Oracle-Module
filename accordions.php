<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accordions</title>
    <link rel="stylesheet" href="EAKL_interface/CSS_Files/accordions.css">
</head>

<body>
    <section class="accordion">
        <div class="accord">
            <button class="acc"><i class="fa-solid fa-random"></i>&nbsp; &nbsp; Circulation</button>
            <div class="panel">
                <ul class="list">
                    <li><i class="fa-solid fa-plus"></i>&nbsp; &nbsp; <a href="">Add Students</a></li>
                    <li><i class="fa-solid fa-edit"></i>&nbsp; &nbsp; <a href="">Update Students</a></li>
                </ul>
            </div>
        </div>
        <div class="accord">
            <button class="acc"><i class="fa-solid fa-plus-circle"></i>&nbsp; &nbsp; Add Defaulters</button>
            <div class="panel">
                <ul class="list">
                    <li><i class="fa-solid fa-plus"></i>&nbsp; &nbsp; <a href="">Add Students</a></li>
                    <li><i class="fa-solid fa-edit"></i>&nbsp; &nbsp; <a href="">Update Students</a></li>
                </ul>
            </div>
        </div>
        <div class="accord">
            <button class="acc"><i class="fa-solid fa-gears"></i>&nbsp; &nbsp;Patrons</button>
            <div class="panel">

            </div>
        </div>
        <div class="accord">
            <button class="acc"><i class="fa-solid fa-table-list"></i>&nbsp; &nbsp; Reports</button>
            <div class="panel">

            </div>
        </div>
        <div class="accord">
            <button class="acc"><i class="fa-solid fa-minus-circle"></i>&nbsp; &nbsp; Clear Defualters</button>
            <div class="panel">

            </div>
        </div>
        <div class="accord">
            <button class="acc"><i class="fa-solid fa-tags"></i>&nbsp; &nbsp; Cataloging</button>
            <div class="panel">

            </div>
        </div>
        <div class="accord">
            <button class="acc"><i class="fa-solid fa-download"></i>&nbsp; &nbsp; Acquisition</button>
            <div class="panel">

            </div>
        </div>
    </section>
    <script>
        let acc = document.getElementsByClassName("acc");
        let panel = document.getElementsByClassName("panel");
        for (let i = 0; i < acc.length; i++) {
            acc[i].addEventListener("click", function () {
                //    panel[i].style.display = "block";
                console.log(panel[i].style.display);
                if (panel[i].style.display === "block") {
                    panel[i].style.display = "none";
                }
                else {
                    panel[i].style.display = "block";
                }
                for (let j = 0; j < acc.length; j++) {
                    if (j != i) {
                        //   console.log(j);
                        if (panel[j].style.display == "block") {
                            panel[j].style.display = "none"
                        }
                    }
                }
            })
        }
    </script>
</body>

</html>