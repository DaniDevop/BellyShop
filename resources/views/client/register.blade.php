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
    @include('client.layout.sidebar')


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
                    <p class="text-gray-600">Vous avez déjà un compte ? <a href="/client-login" class="text-blue-600 hover:underline">Connectez-vous</a></p>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    @include('client.layout.footer')

</body>
</html>