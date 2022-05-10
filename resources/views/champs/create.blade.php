<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Champ</title>
</head>
<body>
    <h1> New Champ </h1>
    <form method="POST" action="{{route('champs.store')}}" enctype="multipart/form-data">
        @csrf
        <div>
            <label>Champ</label>
            <input type="text" name="lineage" id="lineage">
        </div>
        <div>
            <label>Clase</label>
            <input type="text" name="earliest_date" id="earliest_date">
        </div>
        <div>
            <label>Fecha de Lanzamiento</label>
            <input type="date" name="designated_number" id="designated_number">
        </div>
        <div>
            <label>Ensencia Azul</label>
            <input type="number" name="assigned_number" id="assigned_number">
        </div>
        <div>
            <label>Riot Points</label>
            <input type="number" name="who_name" id="who_name">
        </div>
        <div>
            <label> Evidence </label>
            <input type="file" name="evidence" id="evidence"></button>
        </div>
        <div>
            <button type="submit">Create</button>
        </div>
    </form>
</body>
</html>