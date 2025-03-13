<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion - Gestion de Stock</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="w-full max-w-md p-8 space-y-6 bg-white shadow-lg rounded-xl">
        <h2 class="text-2xl font-bold text-center text-gray-700">Connexion</h2>
        <form action="{{route('doLogin')}}" method="POST" class="space-y-4">

                        @if (session('error'))
                    <div class="text-red-500 text-sm">
                        {{ session('error') }}
                    </div>
                @endif
            @csrf
            <div>
                <label class="block text-gray-600">Email</label>
                <input type="text" name="nameOrEmail" required class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500">
            </div>
            <div>
                <label class="block text-gray-600">Mot de passe</label>
                <input type="password" name="password" required class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500">
            </div>
            <div class="flex justify-between items-center">
                        
                <a href="#" class="text-blue-500 text-sm">Mot de passe oublié ?</a>
            </div>
            <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700">Se connecter</button>
        </form>
        <p class="text-center text-gray-600 text-sm">Pas encore de compte ? <a href="#" class="text-blue-500">S'inscrire</a></p>
    </div>
</body>
</html>
