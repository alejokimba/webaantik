var currentTabpf=0, currentTabpm=0;

$("#formularios form").hide();

 // Current tab is set to be the first tab (0)
 // Display the current tab

function showTabpf(n){
  // This function will display the specified tab of the form...
  var x = document.forms['regFormPF'].getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtnpf").style.display = "none";
  
  } else {
    document.getElementById("prevBtnpf").style.display = "inline";
    
  }
  if (n ==(x.length-1)) {
    document.getElementById("nextBtnpf").innerHTML = "Enviar";

  } else {
    document.getElementById("nextBtnpf").innerHTML = "Siguiente";
  
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}
function showTabpm(n){
  // This function will display the specified tab of the form...
  var x = document.forms['regFormPM'].getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n==0) {
   
    document.getElementById("prevBtnpm").style.display = "none";
  } else {
   
    document.getElementById("prevBtnpm").style.display = "inline";
  }
  if ( n==(x.length-1)) {
   
    document.getElementById("nextBtnpm").innerHTML = "Enviar";
  } else {
    
    document.getElementById("nextBtnpm").innerHTML = "Siguiente";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicatorpm(n)
}

function nextPrevpf(n){
  // This function will figure out which tab to display
  var x = document.forms['regFormPF'].getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateFormPF()) return false;
  // Hide the current tab:
  x[currentTabpf].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTabpf = currentTabpf + n;
  // if you have reached the end of the form...
  if (currentTabpf>= x.length) {
    // ... the form gets submitted:
    document.getElementById("regFormPF").submit();
    alert('formulario enviado');
    $("#formularios form").hide();
    return false;
  }
  // Otherwise, display the correct tab:
  showTabpf(currentTabpf);
}

function nextPrevpm(n){
  // This function will figure out which tab to display
  var x = document.forms['regFormPM'].getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateFormPM()) return false;
  // Hide the current tab:
  x[currentTabpm].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTabpm = currentTabpm + n;
  // if you have reached the end of the form...
  if (currentTabpm >= x.length ) {
    // ... the form gets submitted:
    document.getElementById("regFormPM").submit();
    alert('formulario enviado');
    $("#formularios form").hide();
    return false;
  }
  // Otherwise, display the correct tab:
  showTabpm(currentTabpm);
}
function rfcValido(rfc, aceptarGenerico = true){
  //Función para validar un RFC
// Devuelve el RFC sin espacios ni guiones si es correcto
// Devuelve false si es inválido
// (debe estar en mayúsculas, guiones y espacios intermedios opcionales)

    const rerfchomo = /^([A-ZÑ&]{3,4}) ?(?:- ?)?(\d{2}(?:0[1-9]|1[0-2])(?:0[1-9]|[12]\d|3[01])) ?(?:- ?)?([A-Z\d]{2})([A\d])$/;
    var   validado = rfc.match(rerfchomo);

    if (!validado)  //Coincide con el formato general del regex?
        return false;

    //Separar el dígito verificador del resto del RFC
    const digitoVerificador = validado.pop(),
          rfcSinDigito      = validado.slice(1).join(''),
          len               = rfcSinDigito.length,

    //Obtener el digito esperado
          diccionario       = "0123456789ABCDEFGHIJKLMN&OPQRSTUVWXYZ Ñ",
          indice            = len + 1;
    var   suma,
          digitoEsperado;

    if (len == 12) suma = 0
    else suma = 481; //Ajuste para persona moral

    for(var i=0; i<len; i++)
        suma += diccionario.indexOf(rfcSinDigito.charAt(i)) * (indice - i);
    digitoEsperado = 11 - suma % 11;
    if (digitoEsperado == 11) digitoEsperado = 0;
    else if (digitoEsperado == 10) digitoEsperado = "A";

    //El dígito verificador coincide con el esperado?
    // o es un RFC Genérico (ventas a público general)?
    if ((digitoVerificador != digitoEsperado)
     && (!aceptarGenerico || rfcSinDigito + digitoVerificador != "XAXX010101000"))
        return false;
    else if (!aceptarGenerico && rfcSinDigito + digitoVerificador == "XEXX010101000")
        return false;
    return rfcSinDigito + digitoVerificador;
}
function validateFileExtension(fld) {
    if(!/(\.pdf|\.jpg|\.jpeg)$/i.test(fld.value)) {      
      return false;   
    }   
    return true; 
 } 

function validateFormPF(){
// This function deals with validation of the form fields
  var exprecorreo= /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  var x, y, w, i, valid = true;
  x = document.forms["regFormPF"].getElementsByClassName("tab")[currentTabpf];
  w=document.forms["regFormPF"].getElementsByClassName("tab");
  // A loop that checks every input field in the first tab:
  y = w[currentTabpf].getElementsByTagName("input"); 
  if(currentTabpf==0){
  for (i = 0; i < y.length; i++){
    // If a field is empty...
     if (y[i].value == ""){
      // add an "invalid" class to the field:
      y[i].className += " invalid";

      // and set the current valid status to false
      valid = false;
    }
      
      if(i==3){
      var rfc=y[i].value.trim().toUpperCase();
      var rfcCorrecto = rfcValido(rfc); 
      if(!rfcCorrecto){
        y[i].className += " invalid";
        valid=false;
      }
    }
    if(i==4){
      if(!(/^\d{10}$/.test(y[i].value.trim()))){
        y[i].className += " invalid";
        valid=false;
      }
    }  
    if (i==5){
      if(!exprecorreo.test(y[i].value)){
        y[i].className += " invalid";
        valid=false;
      }
    
    }   
  } 
}  
//Aqui se validan los radio buttons
   if(currentTabpf>=1 && currentTabpf<=3){
    x.querySelectorAll('.radio-container').forEach(function(container){
    let radioChecked = container.querySelectorAll("input:checked");
    if(!radioChecked.length){
      valid=false;
    }
  });  
  }
  /* 
  //Se validan los tipos de archivos de la ultima pagina 
  if(currentTabpf==4){
    for(i=0; i<y.length;i++){
    if(y[i].type=="file"){
      if(validateFileExtension(y[i])){
        valid=true;
      }else{
        y[i].className += " invalid";
        valid=false;
      }
     } 
    } 
  } */
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.forms['regFormPF'].getElementsByClassName("step")[currentTabpf].className += " finish";
  } 
  return valid; // return the valid status
} 
function validateFormPM(){
// This function deals with validation of the form fields

  var x, y, i, valid = true;
   var exprecorreo= /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  w=document.forms["regFormPM"].getElementsByClassName("tab");
  x = document.forms["regFormPM"].getElementsByClassName("tab")[currentTabpm];
  y = w[currentTabpm].getElementsByTagName("input");
 if(currentTabpm==0){
 // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++){
    // If a field is empty...
     if (y[i].value == ""){
      // add an "invalid" class to the field:
      y[i].className += " invalid";

      // and set the current valid status to false
      valid = false;
    }
      
    if(y[i].id=="celularpm"){
      if(!(/^\d{10}$/.test(y[i].value.trim()))){
        y[i].className += " invalid";
        valid=false;
      }
    }  
    if (y[i].id=="emailpm"){
      if(!exprecorreo.test(y[i].value)){
        y[i].className += " invalid";
        valid=false;
      }
    
    } 
 }
   }
  if(currentTabpm==1){
    for (i = 0; i < y.length; i++){
      if (y[i].value == ""){
      // add an "invalid" class to the field:
      y[i].className += " invalid";

      // and set the current valid status to false
      valid = false;
    }
      if(y[i].id=="rfcpm"){
      var rfc=y[i].value.trim().toUpperCase();
      var rfcCorrecto = rfcValido(rfc); 
      if(!rfcCorrecto){
        y[i].className += " invalid";
        valid=false;
      }
    }
    }
    let sectornegocio=document.getElementById('sectornegocio');
    let yearsnegocio=document.getElementById('yearsnegocio');
    let motivocredito=document.getElementById('motivocredito');
    if(!(sectornegocio.value) || !(yearsnegocio.value)|| !(motivocredito.value)){
      valid=false;
    }
  }
   //Aqui se validan los radio buttons
   if(currentTabpm>1 && currentTabpm<=5){
    x.querySelectorAll('.radio-container').forEach(function(container){
    let radioChecked = container.querySelectorAll("input:checked");
    if(!radioChecked.length){
      valid=false;
    }
  });  
  }
  //ultima pagina
  if(currentTabpm==6){
    for (i = 0; i < y.length; i++){
      if(y[i].type=="file"){
  if(validateFileExtension(y[i])){
    valid=true;
  }else{
    y[i].className += " invalid";
    valid=false;
  }
  }  
    }
  }  
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.forms["regFormPM"].getElementsByClassName("step")[currentTabpm].className += " finish";
  } 
  return valid; // return the valid status
}


function fixStepIndicator(n){
  // This function removes the "active" class of all steps...
  var i, x = document.forms["regFormPF"].getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}
function fixStepIndicatorpm(n){
  // This function removes the "active" class of all steps...
  var i, x = document.forms["regFormPM"].getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}
$(function(){
			$("#personamoralmenu").on("click", function(){
				$('#personafisicamenu.activo').removeClass('activo');
          $(this).addClass('activo');
          $('#regFormPF').fadeOut();
         $('#regFormPM').fadeIn(); 
          if(currentTabpm!=0){
          var x = document.forms['regFormPM'].getElementsByClassName("tab");
          x[currentTabpm].style.display = "none";
          currentTabpm=0;
          } 
          showTabpm(currentTabpm);
         });
        
       $("#personafisicamenu").on("click", function(){
          $('#personamoralmenu.activo').removeClass('activo');
          $(this).addClass('activo');
          $('#regFormPF').fadeIn();
          $('#regFormPM').fadeOut();
          if(currentTabpf!=0){
            var x = document.forms['regFormPF'].getElementsByClassName("tab");
            x[currentTabpf].style.display = "none";
            currentTabpf=0;
            } 
            showTabpf(currentTabpf);
          
		})
    $("#checkstatus").on('click', function(){
      
    });
  });