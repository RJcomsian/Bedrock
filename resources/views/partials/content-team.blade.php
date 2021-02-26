@php
	$name = get_field('name');
	$description = get_field('description');
	$profile = get_field('profile');
@endphp

<div class="col-sm-6 col-md-4 col-lg-3">
	<div class="member">
		<div class="image-wrapper">
			<img src="{{ $profile['url'] }}">
		</div>
		<div class="item">
			<h3>{{ $name }}</h3>
			<p>{{ $description }}</p>
			<a href="{{ the_permalink() }}" title="">Read More</a>
		</div>
	</div>
</div>
