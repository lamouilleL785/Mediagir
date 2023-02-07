const images = ["droit1.jpg", "droit2.jpg", "droit3.jpg"]

let indexImageActuelle = 0 ;

const flechdroite = document.getElementById("fleche-droite")
const flechegauche = document.getElementById("fleche-gauche")
const image = document.getElementById("image")
flechdroite.addEventListener("click",evenementFlecheDroite)
flechegauche.addEventListener("click",evenementFlecheGauche)

evenementFlecheDroite() 


function evenementFlecheDroite() {

    indexImageActuelle ++ 
    
    if(indexImageActuelle>2){
        indexImageActuelle=0
    
    
    }
    
    
    image.src ="imageCarrousel/" + images[indexImageActuelle]
    }
    
    function evenementFlecheGauche() {
    
        indexImageActuelle --
        
        if(indexImageActuelle< 0){
            indexImageActuelle=2
        
        
        }
        image.src ="imageCarrousel/" + images[indexImageActuelle]
    }