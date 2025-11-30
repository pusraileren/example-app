<h1>Alle planeten</h1>

<ul>
    @foreach($planeten as $p)
        <li>{{ $p->name }} - {{ $p->description }}</li>
    @endforeach
</ul>

