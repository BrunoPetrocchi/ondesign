$("#frmprofessor").validate({
	rules: {
		nome: {
			required: true
		},
		rg: {
			required: true
		},
		cpf: {
			required: true
		},
		crefito: {
			required: true
		},
		data: {
			required: true
		},
		fixo: {
			required: true
		},
		estado: {
			required: true
		},
		cidade: {
			required: true
		},
		endereco: {
			required: true
		},
		numero: {
			required: true
		},
		bairro: {
			required: true
		},
		cep: {
			required: true
		},
		email: {
			required: true
		},
		banco: {
			required: true
		},
		permissao: {
			required: true
		},
		observacao: {
			required: true
		}
	},
	messages: {
		nome: {
			required: "Informe o nome do fisioterapeuta !"
		},
		rg: {
			required: "Informe o rg !"
		},
		cpf: {
			required: "Informe o cpf !"
		},
		crefito: {
			required: "Informe o crefito !"
		},
		data: {
			required: "Informe a data de nascimento! "
		},
		fixo: {
			required: "Informe o telefone fixo !"
		},
		estado: {
			required: "Informe o estado !"
		},
		cidade: {
			required: "Informe a cidade !"
		},
		endereco: {
			required: "Informe o endereco !"
		},
		numero: {
			required: "Informe o numero da residência !"
		},
		bairro: {
			required: "Informe o bairro !"
		},
		cep: {
			required: "Informe o cep !"
		},
		email: {
			required: "Informe o e-mail !"
		},
		banco: {
			required: "Informe o banco !"
		},
		permissao: {
			required: "Informe a permissao !"
		},
		observacao: {
			required: "Informe a observação !"
		}
	},
	errorLabelContainer: "#minhalistaerros",
	errorElement: "div"
});
