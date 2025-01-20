<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Modo Escuro</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <!-- <script>
    // Configuração Tailwind para ativar suporte ao modo "dark"
    tailwind.config = {
      darkMode: 'class',
    };
  </script> -->
</head>
<body class="bg-gray-100 text-gray-900 dark:bg-gray-900 dark:text-gray-100 transition-colors duration-300 min-h-screen flex items-center justify-center">
  
  <!-- Botão para alternar modo escuro -->
  <button 
    onclick="ativar()"
    class="bg-yellow-400 dark:bg-yellow-600 text-gray-900 dark:text-gray-100 py-2 px-4 rounded font-semibold shadow-lg transition-all duration-300">
    Ativar Modo Escuro
  </button>

  <script>
    function ativar() {
        dark = localStorage.getItem('dark_mode');
        alert(dark);

        if (dark === 'SIM') {
            localStorage.setItem('dark_mode', 'NAO');
        } else {
            localStorage.setItem('dark_mode', 'SIM');
        }
    }
    // // Referência ao botão
    // const darkModeToggle = document.getElementById('darkModeToggle');

    // // Função para alternar o modo escuro
    // darkModeToggle.addEventListener('click', () => {
    //   const htmlElement = document.documentElement;

    //   // Alterna a classe "dark" no elemento <html>
    //   if (htmlElement.classList.contains('dark')) {
    //     htmlElement.classList.remove('dark');
    //     localStorage.setItem('theme', 'light'); // Salva a preferência no localStorage
    //     darkModeToggle.textContent = 'Ativar Modo Escuro'; // Atualiza o texto do botão
    //   } else {
    //     htmlElement.classList.add('dark');
    //     localStorage.setItem('theme', 'dark'); // Salva a preferência no localStorage
    //     darkModeToggle.textContent = 'Desativar Modo Escuro'; // Atualiza o texto do botão
    //   }
    // });

    // // Aplica o tema salvo ao carregar a página
    // document.addEventListener('DOMContentLoaded', () => {
    //   const savedTheme = localStorage.getItem('theme');
    //   if (savedTheme === 'dark') {
    //     document.documentElement.classList.add('dark');
    //     darkModeToggle.textContent = 'Desativar Modo Escuro';
    //   }
    // });
  </script>
</body>
</html>
