
	<article>
		<h1>{{$projects->Title}}</h1>
		<!-- {{$name = 'asset/' . $projects->Image}} -->
		<img src="{{asset($name)}}" alt="{{ $projects->Title}}">
		<br/>
		{{$projects->Description}}
		<br/>
		{{$projects->Lang}}
	</article>

