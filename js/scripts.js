$("#cadeventos").validate({
	rules: {
		txtNome: {
			required: true
		},
		datepicker: {
			required: true
		}
	},
	messages: {
		txtNome: {
			required: "Informe o nome do evento !"
		},
		datepicker: {
			required: "Informe a data!"
		}
	},
	errorLabelContainer: "#minhalistaerros",
	errorElement: "div"
});
