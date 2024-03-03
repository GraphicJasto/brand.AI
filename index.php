<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="../brandai/style/styles.css">
    <link rel="stylesheet" href="../brandai/style/stylesMbl.css">
    <link rel="stylesheet" href="../brandai/style/tileComponents.css">

   <!--Font-->

   <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter+Tight:ital,wght@0,100..900;1,100..900&family=Manrope:wght@200..800&display=swap" rel="stylesheet">



    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons+Outlined" rel="stylesheet">

    <!-- Include jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <!-- GSAP -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
    <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/16327/ScrollSmoother.min.js"></script>
</head>

<body>

    <?php include 'components/ui/navigationColumn.php'; ?>

    <main>
    <?php include 'components/ui/topBar.php'; ?>
        <section id="tileContainer">

        
            

        </section>
    </main>




    <script>
        /*
    async function addTile(tilePath, tileContainer, tileClass, tileId) {
        //get Php Content
        const response = await fetch(tilePath);
        //console.log(response);
        //Turn php into String
        const newContent = await response.text();
        //console.log(newContent);
        //get the container
        const newContainer = document.getElementById(tileContainer);
        //Inject the Html
        newContainer.insertAdjacentHTML('beforeend', newContent);
        var element = document.getElementById(tileId);

        setTimeout(() => {
            element.classList.remove("styleOff");
            element.classList.add("styleOn");

            let classesList = tileClass.split(" "); // Usa un espacio como separador
            console.log(classesList);
            element.classList.add(classesList);
            var classes = {};

            classesList.forEach((classesList, index) => {
    classes[`class${index + 1}`] = classes;
});

console.log(classes.class1);
console.log(classes.class2);
           
        }, 25)

    }

    async function removeTile(tileId) {
       
        var element = document.getElementById(tileId);
       element.classList.remove("styleOn");
       
      
        
        element.classList.add("styleOff");
        
         setTimeout(() => {
            element.remove();

        }, 350)

    }*/


    </script>
    <script>

document.addEventListener('DOMContentLoaded', function () {
    const addButton = document.getElementById('addButton');
    if (addButton) {
        addButton.addEventListener('click', function() {
            TileManager.addTile('path/to/tile', 'containerID', 'tileClass', 'tileID');
        });
    }

    const removeButton = document.getElementById('removeButton');
    if (removeButton) {
        removeButton.addEventListener('click', function() {
            TileManager.removeTile('tileID');
        });
    }
});

class Tile {
    // Método para agregar un tile
    static async add(tilePath, tileContainer, tileClass, tileId) {
        //get Php Content
        const response = await fetch(tilePath);
        //console.log(response);
        //Turn php into String
        const newContent = await response.text();
        //console.log(newContent);
        //get the container
        const newContainer = document.getElementById(tileContainer);
        //Inject the Html
        newContainer.insertAdjacentHTML('beforeend', newContent);
        let element = document.getElementById(tileId);

        setTimeout(() => {
            element.classList.remove("styleOff");
            element.classList.add("styleOn");
            element.classList.add(tileClass);


    
           
        }, 25);
    }

    // Método para remover un tile
    static async remove(tileId) {
        let element = document.getElementById(tileId);
        element.classList.remove("styleOn");
        element.classList.add("styleOff");
        
        setTimeout(() => {
            element.remove();
        }, 350);
    }
}



        </script>
   









</body>

</html>