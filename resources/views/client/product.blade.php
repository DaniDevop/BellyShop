<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tous les produits</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body class="bg-gray-100">

@include('client.layout.sidebar')

    <div style="padding-buttom:10px;">

    </div>
    <!-- Barre de recherche et filtres -->
    
    <!-- Liste des produits -->
      <livewire:client.client-product-list/>

    <!-- Pagination -->
    

    <!-- Notification (exemple) -->
    <div class="fixed bottom-4 right-4 bg-green-500 text-white px-4 py-2 rounded-lg shadow-lg">
        Produit ajouté au panier !
    </div>

    @include('client.layout.footer')

</body>
</html>