document.addEventListener('DOMContentLoaded', function() {
    let formulario=document.querySelector("form");
    var today = new Date();
	var tomorrow = new Date();
    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {
		timeZone: 'local',
		allDaySlot:false,
		businessHours: true,
	  initialView:'timeGridDay',
	  slotMinTime:'08:00',
	  slotMaxTime:'18:00',
      editable:true,
      headerToolbar:{
        right: 'timeGridDay',
        center: 'title',
        left: 'prev,next today',
        
      },
      selectable:true,
      selectHelper:false,
      
      locale:"es",
      weekends:false,
      validRange: { 
        start: tomorrow.setDate(today.getDate()+1),
        end: '2025-06-01'
       },
	   businessHours: {
  // days of week. an array of zero-based day of week integers (0=Sunday)
  daysOfWeek: [ 1, 2, 3, 4, 5 ], // Monday - Thursday

  startTime: '8:00', // a start time (10am in this example)
  endTime: '18:00', // an end time (6pm in this example)
},
      dateClick:function(info) {
        $('#evento').modal("show");
        let date_ob=info.date;
		let date = ("0" + date_ob.getDate()).slice(-2);

		// current month
		let month = ("0" + (date_ob.getMonth() + 1)).slice(-2);

		// current year
		let year = date_ob.getFullYear();

		// current hours
		let hours = date_ob.getHours();

		// current minutes
		let minutes = date_ob.getMinutes();

		// current seconds
		let seconds = date_ob.getSeconds();

// prints date & time in YYYY-MM-DD HH:MM:SS format
let dformat = year + "-" + month + "-" + date + " " + hours + ":" + minutes + ":" + seconds;
        let fecha=document.getElementById('fecha');
        fecha.value=dformat;
    },
   
    });
    
    calendar.render();
    document.getElementById('btnenviar').addEventListener('click', ()=>{
        const datosformulario=new FormData(formulario);
        console.log(datosformulario);
    });
  });
  
  

  //Creating a cookie after the document is ready
 /*  $(document).ready(function () {
    createCookie("fecha", date, "10");
}); */

// Function to create the cookie
/* function createCookie(name, value, days) {
var expires;

if (days) {
var date = new Date();
date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
expires = "; expires=" + date.toGMTString();
}
else {
expires = "";
}

document.cookie = escape(name) + "=" + 
escape(value) + expires + "; path=/";
} */