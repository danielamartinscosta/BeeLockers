(function(win,doc){
    'use strict';

    let calendarEl=doc.querySelector('.calendar');
    let calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth',
        headerToolbar:{
          start: 'prev, next, today',
          center: 'title',
          end: 'dayGridMonth, timeGridWeek, timeGridDay'
        },
        buttonText:{
          today: 'hoje',
          month: 'mês',
          Week: 'semana',
          day: 'dia'
        },
        locade:'pt-br'
      });
      calendar.render();


})(window,document);