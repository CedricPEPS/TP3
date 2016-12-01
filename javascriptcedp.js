
/* met le texte selectionné dans le descriptif en gras et/ou italique */

function ModifySelection (action) {
    var textarea = document.getElementById("editeur");
          document.execCommand (action, false, null);
	
        }


		
		
/* empeche d'envoyer le formulaire */

document.getElementById("formulaire").addEventListener("submit", function(event){
	event.preventDefault()
	console.log('annuleenvoi');
});
