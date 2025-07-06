<!DOCTYPE html>
<html>
<head>
    <title>Détails de l'étudiant</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>Détails de l'étudiant</h1>
        <p><strong>ID :</strong> {{ $etudiant->id }}</p>
        <p><strong>Nom :</strong> {{ $etudiant->nom }}</p>
        <p><strong>Email :</strong> {{ $etudiant->email }}</p>
        <p><strong>Âge :</strong> {{ $etudiant->age }}</p>
        <a href="{{ route('etudiants.index') }}" class="btn btn-secondary">Retour</a>
        <a href="{{ route('etudiants.edit', $etudiant) }}" class="btn btn-warning">Modifier</a>
    </div>
</body>
</html>