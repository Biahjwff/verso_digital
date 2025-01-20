// Função para ativar o modo escuro para todos os elementos
(function activateDarkMode() {
  dark_mode = localStorage.getItem('dark_mode');

  if (dark_mode === "SIM") {
    // Adiciona a classe "dark" ao elemento <html> principal
    const htmlElement = document.documentElement;
    htmlElement.classList.add('dark');
  
    // Seleciona todos os elementos da página
    const allElements = document.querySelectorAll('*');
  
    // Loop para aplicar estilos personalizados para o modo escuro
    allElements.forEach((element) => {
      // Você pode ajustar os estilos aqui se necessário
      element.style.transition = 'background-color 0.3s, color 0.3s';
  
      // Define cores escuras personalizadas (opcional)
      if (element.classList.contains('dark')) {
        element.style.backgroundColor = '#00000'; // Fundo escuro (cinza-900 do Tailwind)
        element.style.color = '#f7fafc'; // Texto claro (cinza-100 do Tailwind)
      }
    });
  }
})();

  
  