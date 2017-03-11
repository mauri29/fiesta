@if($tags->count())
	<center>@foreach($tags as $tag)
		<a href="{{ route('posts.tagged', $tag->slug) }}" class="tag">{{ $tag->name }}</a>
	@endforeach</center><br>
@endif

