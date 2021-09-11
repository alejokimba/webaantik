addEventListener('DOMContentLoaded', ()=>{
    const btn_menu=document.querySelector('.btn_menu')
    if(btn_menu){
        btn_menu.addEventListener('click', ()=>{
            const menu_items=document.querySelector('.menu-items')
            menu_items.classList.toggle('show')
        })
    }
})

function MostrarModalRegistro(){
    const registro=document.getElementById('registro');
    const login=document.getElementById('login');
    const form1=document.getElementById('registrate');
    const form2=document.getElementById('logeate');
    
    
    const modalregistrar=document.getElementById('modal-registrar');
    modalregistrar.style.display='block';
   function abrirregistro(){
    $("#login").on("click", function(){
        
  $('#logeate').fadeIn();  
  $('#registrate').fadeOut();
    });
    $("#registro").on("click", function(){
        
        $('#logeate').fadeOut();  
        $('#registrate').fadeIn();
          });
	$(".btn-cerrar").on("click", function(){
        
       $('#modal-registrar').fadeOut();
          });
		  


   };
   abrirregistro();
};
function cerrarModal(){
	const modalregistrar=document.getElementById('modal-registrar');
    modalregistrar.style.display='none';
};