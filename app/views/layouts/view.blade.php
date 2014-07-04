
	<article>
		<h1>{{$project->Title}}</h1>
		<img src="{{asset('asset/' . $project->Title .'.jpg')}}" alt="{{ $project->Title}}">
		<br/>
		{{$project->Description}}
		<br/>
		{{$project->Lang}}
	</article>