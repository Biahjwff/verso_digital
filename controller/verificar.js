function verificar() {
    if ((localStorage.getItem('logado') === 'nao')) {
        window.location.href = '../index.php'
    }
};