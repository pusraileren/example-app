<h1>Alle planeten</h1>
<ul>
    @foreach($planeten as $p)
        <li>{{ $p['name'] }} - {{ $p['description'] }}</li>
    @endforeach
</ul>

<h1>{{ $planeet['name'] }}</h1>
<p>{{ $planeet['description'] }}</p>
