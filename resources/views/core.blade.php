<!doctype html>
<html lang="sk">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>JK CARPENTES</title>
    <link rel="icon" href="{{ asset('/img/logo.jpg') }}" type="image/png">
    <meta name="description" content="JK CARPENTERS ponúkajú odborné nábytkárske práce vrátane nábytku na mieru. Kontaktujte nás pre kvalitnú remeselnú prácu.">
    <meta name="keywords" content="Nábytkárske práce, Nábytok na mieru, Odborní nábytkári, Slovensko">
    <meta name="author" content="JK CARPENTERS">

    <meta property="og:title" content="JK CARPENTERS - Nábytkárske práce, interiérový dizajn na Slovensku" />
    <meta property="og:description" content="Špecializujeme sa na nábytok na mieru a profesionálne nábytkárske práce na Slovensku. Získajte kvalitné remeslo s JK Carpenters." />
    <meta property="og:url" content="https://jk-carpenters.sk/" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="{{ asset('/img/logo.jpg') }}" />

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="JK CARPENTERS - Nábytkárske práce, interiérový dizajn">
    <meta name="twitter:description" content="Nábytok na mieru, nábytkárske práce a odborné remeslo na Slovensku od JK Carpenters.">
    <meta name="twitter:image" content="{{ asset('/img/logo.jpg') }}">

    <!-- Structured Data -->
    <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "LocalBusiness",
          "name": "JK CARPENTERS s.r.o",
          "description": "Nábytkárske práce, interiérový dizajn vrátane nábytku na mieru.",
          "url": "https://jk-carpenters.sk/",
          "address": {
            "@type": "PostalAddress",
            "streetAddress": "Dunajský Klátov 625",
            "addressLocality": "Dunajský Klátov",
            "postalCode": "930 21",
            "addressCountry": "Slovakia"
          },
          "identifier": "50 249 011",
          "taxID": "2120244995",
          "registrationNumber": "OR OS Trnava, odd. s.r.o, vložka č. 37438/T",
          "branch": {
            "@type": "PostalAddress",
            "streetAddress": "PPD Trhové Mýto, Dolnobarská 407",
            "addressLocality": "Trhová Hradská",
            "postalCode": "930 13",
            "addressCountry": "Slovakia"
          },
          "telephone": ["+421 905 989 008", "+421 905 704 980"]
        }
    </script>

    <script>
        const emailApiUrl = "{{ route('send.contact.mail') }}";
    </script>
    <script src="http://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

    <!-- Favicon -->
    <link rel="icon" href="/assets/images/favicon.ico" type="image/x-icon">

    <!-- Bootstrap and CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    @vite('resources/css/app.css')
</head>
<body>
<div id="app"></div>
@vite('resources/js/app.js')

<!-- Bootstrap Scripts -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>
