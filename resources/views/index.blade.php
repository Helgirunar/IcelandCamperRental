<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <link href="https://unpkg.com/tailwindcss@^2.0/dist/tailwind.min.css" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

        <title>Icelandic Camper Rentals</title>
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.14.0/css/solid.css" integrity="sha384-qJugmlTDyF5CNuv00JB+04BCmCVi5C2ZZhsIVMX0wxWr7U3ZuOsmO+nOLtoTxeWG" crossorigin="anonymous">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.14.0/css/regular.css" integrity="sha384-izRgjQadEFrlAsdFZjlQ4v6Ff2E0R02RwYZwdL8lrt398rQmLNOFYYNk9qQoqjDP" crossorigin="anonymous">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.14.0/css/light.css" integrity="sha384-LmKkPHDqucxgmrtLKWrMGZc5nnHQYAdFkSzMtl1OcvTZn4pebmVziSZPtp27MA6u" crossorigin="anonymous">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.14.0/css/duotone.css" integrity="sha384-QRFqAT1IRNAzMGALiXfanFtQEBoLDPPh1vnrMbxHa+UeJkCTHO3TpYXHQ+GK1pKg" crossorigin="anonymous">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.14.0/css/brands.css" integrity="sha384-DkuHshSFBB5Ozmaoq36ICABPCsIIbamipzuH7NO0sxDIDrJloLD43yBzNLI3gxS6" crossorigin="anonymous">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.14.0/css/fontawesome.css" integrity="sha384-CAxg0L30Vie2vI3AniQ4UA+pSswoJmr/MK5Dl5DP9YlE1nzJn4z5updw5S3i/Nsn" crossorigin="anonymous">
    </head>
    <body>
        <x-DateSelectorTop />

        <x-CarsPart />

        <x-ExtrasPart />

        <x-DateSelectorMiddle />

        <x-CountryPart />

        <x-ReasonsPart />

        <x-ContactPart />

        <x-DataSelectorBottom />
    </body>
</html>
