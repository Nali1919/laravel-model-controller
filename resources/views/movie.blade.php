<h1>Lista dei film:</h1>
@foreach ($movies as $film)
    <hr>
    <h1>Titolo: {{$film['title']}}</h1>
    <h2>Titolo Originale: {{$film['original_title']}}</h2>
    <p>Nazionalità: {{$film['nationality']}}</p>
    <small>Data di uscita: {{$film['date']}} |</small>
    <small>Voto: {{$film['vote']}}</small>
    <hr><br>
@endforeach
