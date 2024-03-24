document.getElementById('contactForm').addEventListener('submit', function(event) {
        event.preventDefault(); // Impede o envio padrão do formulário

        var formData = new FormData(this);

        fetch('processar_formulario.php', {
            method: 'POST',
            body: formData
        })
        .then(function(response) {
            if (!response.ok) {
                throw new Error('Ocorreu um erro ao enviar o formulário.');
            }
            alert('Mensagem enviada com sucesso!');
            document.getElementById('contactForm').reset(); // Limpa o formulário após o envio
        })
        .catch(function(error) {
            console.error('Erro:', error);
            alert('Ocorreu um erro ao enviar o formulário. Por favor, tente novamente mais tarde.');
        });
    });