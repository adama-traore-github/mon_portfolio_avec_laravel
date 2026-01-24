<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Portfolio</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <style>
        /* Règles pour gérer les retours à la ligne */
        .break-words {
            word-wrap: break-word;
            overflow-wrap: break-word;
            word-break: break-word;
        }
        
        /* Règles spécifiques pour les nombres et les séquences longues */
        .break-numbers {
            word-break: break-all;
        }
    </style>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css?ver=1.1" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script>
        // Check local storage for theme preference on load
        if (localStorage.getItem('theme') === 'light') {
            document.documentElement.classList.add('theme-light');
        }
    </script>
</head>
<body class="bg-slate-900 text-slate-50 font-sans min-h-screen flex flex-col antialiased selection:bg-cyan-500 selection:text-white">

    <!-- Navbar horizontale -->
    <x-navbar />

    <!-- Contenu principal -->
    <main class="flex-1 px-4 sm:px-8" style="padding-top: 120px;">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-slate-900 border-t border-white/10 text-slate-400 text-center py-6">
        <p>&copy; {{ date('Y') }} <span class="text-white font-semibold">Adama Traoré</span>. Architecturé avec passion.</p>
    </footer>

</body>
</html>
