let nav=0;
let clicked=null;
const newEventModal=document.getElementById('newEventModal');
const backDrop=document.getElementById('modalBackDrop');
let events=localStorage.getItem('events')? JSON.parse(localStorage.getItem('events')): [];
const weekdays=['Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado', 'Domingo'];
const calendar=document.getElementById('calendar');

function openModal(date){
    const horarios=document.getElementById('horas');
    clicked=date;
    const eventForDay=events.find(e=>e.date===clicked);
    if(eventForDay){
        console.log('Event already exists');
    }else{
        newEventModal.style.display='block';
        horarios.style.display='block';
    }
    backDrop.style.display='block';
}
const dt=new Date();
function load(){
    const dt=new Date();
    if(nav!=0){
        dt.setMonth(new Date().getMonth()+nav);
    }
    const hour=dt.getHours();
    const day=dt.getDate();
    const month=dt.getMonth();
    const year=dt.getFullYear();
    const firstDayOfMonth=new Date(year, month, 1);
    const DaysInMonth=new Date(year, month+1, 0).getDate();
    const dateString=firstDayOfMonth.toLocaleDateString('es-Es',{
        weekday:'long',
        year:'numeric',
        month:'numeric',
        day:'numeric',
    });
    const DayUpperCase=(dateString.split(', ')[0])[0].toUpperCase()+(dateString.split(', ')[0]).slice(1);
    const paddingDays=weekdays.indexOf(DayUpperCase);
    document.getElementById('monthDisplay').innerText=`${dt.toLocaleDateString('es-Es', {month:'long'})} ${year}`;
    calendar.innerHTML='';
    for(let i=1; i<=paddingDays+ DaysInMonth; i++){
        const daySquare=document.createElement('div');
        daySquare.classList.add('day');
        if(i>paddingDays){
            daySquare.id=(i-paddingDays);
            daySquare.innerText=i-paddingDays;
            if((i-paddingDays)==day){
                daySquare.classList.add('current-day');
            }
         
        }else{
            daySquare.classList.add('padding');
        }
        let index=day;
        while(index<=DaysInMonth){
            if(daySquare.id==String(index)){
                daySquare.addEventListener('click', ()=>{
                
                openModal(`${day}/${month+1}/${year}`);
                console.log(`${day}/${month+1}/${year}`);
            });
        }else{
            daySquare.classList.add('padding');
        }
            index++;
        }
            
        
        calendar.appendChild(daySquare);
        
        
    }


}
function closeModal(){
    newEventModal.style.display='none';
    backDrop.style.display='none';
    clicked=null;
    load();
}
function initButtons(){
    document.getElementById('nextButton').addEventListener('click', ()=>{
        nav++;
        load();
    });
    document.getElementById('backButton').addEventListener('click', ()=>{
        nav--;
        load();
    });
    document.getElementById('saveButton');
    document.getElementById('cancelButton').addEventListener('click', closeModal);
}
initButtons();
load();
function calendario(){
    const calendario=document.getElementById('calendario');
    calendario.style.display="block";
    
}




