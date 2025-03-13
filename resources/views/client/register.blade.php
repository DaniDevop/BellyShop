<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Créer un compte - MaBoutique</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body class="bg-gray-100">

    <!-- Header -->
    <header class="bg-white shadow">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            <!-- Logo -->
            <div class="text-2xl font-bold text-blue-600">
                <a href="/">MaBoutique</a>
            </div>

            <!-- Barre de recherche -->
            <div class="w-1/3">
                <input type="text" placeholder="Rechercher un produit..." class="w-full p-2 border rounded-lg focus:outline-none focus:ring focus:ring-blue-300">
            </div>

            <!-- Menu -->
            <nav class="flex space-x-6">
                <a href="/categories" class="text-gray-700 hover:text-blue-600">Catégories</a>
                <a href="/promotions" class="text-gray-700 hover:text-blue-600">Promotions</a>
                <a href="/contact" class="text-gray-700 hover:text-blue-600">Contact</a>
            </nav>

            <!-- Icônes Panier et Compte -->
            <div class="flex space-x-4">
                <a href="/cart" class="text-gray-700 hover:text-blue-600">
                    <i class="fas fa-shopping-cart"></i>
                    <span class="ml-1">Panier (3)</span>
                </a>
                <a href="/account" class="text-gray-700 hover:text-blue-600">
                    <i class="fas fa-user"></i>
                    <span class="ml-1">Mon compte</span>
                </a>
            </div>
        </div>
    </header>

    <!-- Contenu principal -->
    <main class="flex-grow">
        <div class="min-h-screen flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
            <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
                <!-- Titre -->
                <h2 class="text-2xl font-bold mb-6 text-center">Créer un compte</h2>

                <!-- Formulaire de création de compte -->
                <form class="space-y-4">
                    <!-- Nom -->
                    <div>
                        <label class="block text-gray-700 font-semibold mb-2">Nom</label>
                        <input type="text" placeholder="Votre nom" class="w-full p-2 border rounded-lg focus:outline-none focus:ring focus:ring-blue-300">
                    </div>

                    <!-- Email -->
                    <div>
                        <label class="block text-gray-700 font-semibold mb-2">Email</label>
                        <input type="email" placeholder="Votre email" class="w-full p-2 border rounded-lg focus:outline-none focus:ring focus:ring-blue-300">
                    </div>

                    <!-- Mot de passe -->
                    <div>
                        <label class="block text-gray-700 font-semibold mb-2">Mot de passe</label>
                        <input type="password" placeholder="Votre mot de passe" class="w-full p-2 border rounded-lg focus:outline-none focus:ring focus:ring-blue-300">
                    </div>

                    <!-- Confirmation du mot de passe -->
                    <div>
                        <label class="block text-gray-700 font-semibold mb-2">Confirmer le mot de passe</label>
                        <input type="password" placeholder="Confirmez votre mot de passe" class="w-full p-2 border rounded-lg focus:outline-none focus:ring focus:ring-blue-300">
                    </div>

                    <!-- Bouton de soumission -->
                    <button type="submit" class="w-full bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition-colors">
                        Créer un compte
                    </button>
                </form>

                <!-- Lien vers la page de connexion -->
                <div class="mt-6 text-center">
                    <p class="text-gray-600">Vous avez déjà un compte ? <a href="/login" class="text-blue-600 hover:underline">Connectez-vous</a></p>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-white shadow mt-8">
        <div class="container mx-auto px-6 py-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Informations de contact -->
                <div>
                    <h3 class="text-lg font-bold">Contactez-nous</h3>
                    <p class="mt-2 text-gray-600">Email: contact@maboutique.com</p>
                    <p class="mt-2 text-gray-600">Téléphone: +33 1 23 45 67 89</p>
                </div>

                <!-- Liens utiles -->
                <div>
                    <h3 class="text-lg font-bold">Liens utiles</h3>
                    <ul class="mt-2">
                        <li><a href="/faq" class="text-gray-600 hover:text-blue-600">FAQ</a></li>
                        <li><a href="/returns" class="text-gray-600 hover:text-blue-600">Politique de retour</a></li>
                        <li><a href="/privacy" class="text-gray-600 hover:text-blue-600">Confidentialité</a></li>
                    </ul>
                </div>

                <!-- Réseaux sociaux -->
                <div>
                    <h3 class="text-lg font-bold">Suivez-nous</h3>
                    <div class="mt-2 flex space-x-4">
                        <a href="#" class="text-gray-600 hover:text-blue-600"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="text-gray-600 hover:text-blue-600"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-gray-600 hover:text-blue-600"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>