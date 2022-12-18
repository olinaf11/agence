function getXhr(){
    var xhr;
    try {  xhr = new ActiveXObject('Msxml2.XMLHTTP');   }
    catch (e)
    {
        try {   xhr = new ActiveXObject('Microsoft.XMLHTTP'); }
        catch (e2)
        {
            try {  xhr = new XMLHttpRequest();  }
            catch (e3) {  xhr = false;   }
        }
    }
    return xhr;
}
//Les codes ci dessous sont executé lors que la page est chargée
window.addEventListener("load", function () {
    
  function sendData() {
    var xhr = getXhr();
    var formData = new FormData(form);
      xhr.onreadystatechange  = function()
    {
        if(xhr.readyState  == 4){
            if(xhr.status  == 200) {
                var retour = JSON.parse(xhr.responseText);
                if (retour != false) {
                    console.log(retour[0]['iduser']);
                    window.location.href="Acceuil.php";
                }else{
                    alert("Verifier votre mot de passe ou votre utilisateur");
                }
            } else {
                document.pswd="Error code " + xhr.status;
                document.email="Error code " + xhr.status;
            }
        }
    };
  //XMLHttpRequest.open(method, url, async)
    xhr.open("POST", "../inc/traitementLogin.php",  true);
   //XMLHttpRequest.send(body)
    xhr.send(formData);
    // Accédez à l'élément form …
  }  

  var form = document.getElementById("myForm");
  
  // … et prenez en charge l'événement submit.
  form.addEventListener("submit", function (event) {
    event.preventDefault(); // évite de faire le submit par défaut
    sendData();
  });
});