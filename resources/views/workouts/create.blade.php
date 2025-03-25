<!-- resources/views/workouts/create.blade.php -->

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Créer un Exercice</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">

    <div class="max-w-4xl mx-auto p-6 bg-white shadow-md rounded-md mt-10">
        <h1 class="text-2xl font-bold mb-4">Ajouter un Nouvel Exercice</h1>

        <!-- Afficher les erreurs de validation si elles existent -->
        @if ($errors->any())
            <div class="bg-red-200 text-red-700 p-4 mb-4 rounded">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Formulaire pour ajouter un entraînement -->
        <form action="{{ route('workouts.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="exercise" class="block text-sm font-medium text-gray-700">Nom de l'exercice</label>
                <input type="text" name="exercise" id="exercise" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md" value="{{ old('exercise') }}" required>
            </div>

            <div class="mb-4">
                <label for="sets" class="block text-sm font-medium text-gray-700">Sets</label>
                <input type="number" name="sets" id="sets" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md" value="{{ old('sets') }}" required>
            </div>

            <div class="mb-4">
                <label for="reps" class="block text-sm font-medium text-gray-700">Répétitions</label>
                <input type="number" name="reps" id="reps" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md" value="{{ old('reps') }}" required>
            </div>

            <div class="mb-4">
                <label for="weight" class="block text-sm font-medium text-gray-700">Charge</label>
                <input type="number" name="weight" id="weight" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md" value="{{ old('weight') }}" required>
            </div>

            <div class="mb-4">
                <label for="date" class="block text-sm font-medium text-gray-700">Date</label>
                <input type="date" name="date" id="date" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md" value="{{ old('date') }}" required>
            </div>

            <button type="submit" class="mt-4 bg-blue-500 text-white px-6 py-2 rounded-md">Ajouter l'entraînement</button>
        </form>
    </div>

</body>
</html>
