function ModifySelection (action) { //action va chercher la selection bold & italic dans le html
    var textarea = document.getElementById("editeur");
          document.execCommand (action, false, null);
        }
