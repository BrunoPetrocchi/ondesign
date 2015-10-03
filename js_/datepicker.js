 $(document).ready(function() {

	//datetimepicker para datas
	$("#inicioinscricoes").datetimepicker({
		duration: '',
		constrainInput: false,
		stepMinutes: 1,
		stepHours: 1,
		altTimeField: '',
		time24h: true,
		regional: 'pt-BR',
		timeText: 'Horário',
		hourText: 'Hora',
		minuteText: 'Minutos',
		secondText: 'Segundos',
		currentText: 'Agora',
		timeOnlyTitle:'Escolha Hora',
		dateFormat: 'dd-mm-yy'
	});
	
	$("#terminoinscricoes").datetimepicker({
		duration: '',
		constrainInput: false,
		stepMinutes: 1,
		stepHours: 1,
		altTimeField: '',
		time24h: true,
		regional: 'pt-BR',
		timeText: 'Horário',
		hourText: 'Hora',
		minuteText: 'Minutos',
		secondText: 'Segundos',
		currentText: 'Agora',
		timeOnlyTitle:'Escolha Hora',
dateFormat: 'dd-mm-yy'
					
	});




});



/*
 $(document).ready(function() {
	//datetimepicker para datas
	$("#busca").timepicker({
		duration: '',
		constrainInput: false,
		stepMinutes: 1,
		stepHours: 1,
		altTimeField: '',
		time24h: true,
		regional: 'pt-BR',
		timeText: 'Horário',
		hourText: 'Hora',
		minuteText: 'Minutos',
		secondText: 'Segundos',
		currentText: 'Agora',
		timeOnlyTitle:'Escolha Hora'
	});
});
*/



