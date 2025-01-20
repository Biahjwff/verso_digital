function validarSenhas() {
    const senha = document.getElementById('senha').value;
    const confirmarSenha = document.getElementById('confirmar_senha').value;

    if (senha !== confirmarSenha) {
        alert('As senhas não coincidem!');
        return false;
    }

    return true;
}

function salvarNovoUsuario() {
    if (validarSenhas()) {
        const usuario = document.getElementById('usuario').value; 
        const senha = document.getElementById('senha').value;

        
        const novo_usuario = {
            usuario,
            senha
        };


        if (!verificarUsuario()) {
            usuarios = JSON.parse(localStorage.getItem('usuarios')) || [];
            usuarios.push(novo_usuario);
            
            localStorage.setItem('usuarios', JSON.stringify(usuarios));

            alert("Usuario cadastrado com sucesso");

            window.location.href = "../index.php";
        } else {
            alert("Usuário ja cadastrado!");
        } 
    }
}

function verificarUsuario() {
    usuarios = JSON.parse(localStorage.getItem('usuarios')) || [];

    const usuario = document.getElementById('usuario').value; 
    const senha = document.getElementById('senha').value;

    let usuarioValido = usuarios.find(u => u.usuario === usuario && u.senha === senha);
    
    return usuarioValido ? true : false;
}

function fazerLogin() {
    if (verificarUsuario()) {
        localStorage.setItem('logado', 'sim');
        window.location.href = 'view/principal.php';
    } else {
        localStorage.setItem('logado', 'nao');
        alert('Usuário ou senha incorretos!');
    }
}

function logout() {
    localStorage.setItem('logado', 'nao');
    alert('Usuário não conectado');
    window.location.href = 'view/principal.php';
}