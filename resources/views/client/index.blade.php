<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenue sur notre boutique en ligne</title>
    <script src="https://cdn.tailwindcss.com"></script>
    @livewireStyles

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body class="bg-gray-100">

     @include('client.layout.sidebar')

    <!-- Bannière promotionnelle -->
    <div class="bg-blue-600 text-white py-8">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-3xl font-bold">Profitez de nos offres spéciales !</h2>
            <p class="mt-2">Jusqu'à 50% de réduction sur une sélection de produits.</p>
            <a href="" class="mt-4 inline-block bg-white text-blue-600 px-6 py-2 rounded-lg hover:bg-gray-100">Voir les offres</a>
        </div>
    </div>

    <!-- Liste des produits -->
    <div class="container mx-auto px-6 py-8">
        <h2 class="text-2xl font-bold mb-6">Produits en vedette</h2>

          <livewire:client.list-product-home/>
    </div>

    <!-- Footer -->
    @include('client.layout.footer')


     @livewireScript
</body>
</html>