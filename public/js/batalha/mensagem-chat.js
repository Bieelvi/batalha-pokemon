function mensagem(quem = 'computador', nome, mensagem) {  
    let divMensagens = document.querySelector('#mensagens'); 

    let tagDiv = document.createElement('div');
    let tagSmall = document.createElement('small');
    let tagSpan = document.createElement('span');

    let data = new Date();

    let dataFormatada = data.getDate() + '/' + (data.getMonth() + 1) + '/' + data.getFullYear()

    tagSmall.textContent = nome + dataFormatada;
    tagSpan.textContent = mensagem;

    tagSmall.classList.add('nome-mensagem');
    
    tagDiv.appendChild(tagSmall);
    tagDiv.appendChild(tagSpan);
    tagDiv.classList.add('d-flex');
    tagDiv.classList.add('flex-column');
    if (quem == 'usuario') {
        tagDiv.classList.add('align-items-end');        
    }
    if (quem == 'sistema') {
        tagDiv.classList.add('align-items-center');     
        tagSpan.classList.add('text-danger');   
    }
    tagDiv.classList.add('border');
    tagDiv.classList.add('rounded');
    tagDiv.classList.add('p-2');
    tagDiv.classList.add('m-3');

    divMensagens.appendChild(tagDiv);
    
    divMensagens.scrollTop = divMensagens.scrollHeight;
}