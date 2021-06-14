<h1>{{$title}}
</h1>
<ul>
@foreach($categories as $categorie)
<li>{{$categorie}}</li>
@endforeach 
</ul>