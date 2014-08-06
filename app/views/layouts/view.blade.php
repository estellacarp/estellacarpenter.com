
	<article>
		<h1>{{$projects->Title}}</h1>
		<!-- {{$name = 'asset/image/'.$projects->ImageSmall }} -->
		<img src="{{asset($name)}}" alt="{{ $projects->Title}}">
		<br/>
		<a href="{{ ("http://$projects->Link") }}">{{$projects->Link}}</a>
		<br/>
		{{$projects->Description}}
		<br/>
		{{$projects->Lang}}
	</article>

	

	