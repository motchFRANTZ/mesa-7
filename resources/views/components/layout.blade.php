<!doctype html>
<html lang="en" data-theme="luxury">
<head>
    <meta charset="UTF-8">
    <title>Mesa 7</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,500;9..144,600;9..144,700&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css"/>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5/themes.css" rel="stylesheet" type="text/css"/>
    <style type="text/tailwindcss">
        @theme {
            --font-display: "Fraunces", serif;
            --font-sans: "Inter", sans-serif;
        }
    </style>
</head>
<body class="font-sans">

<x-nav />

<main class="mx-auto mt-6 max-w-6xl px-4">
    {{ $slot }}
</main>
</body>
</html>
