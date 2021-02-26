@if( count( $page_sections ) > 0 && $page_sections[0] != "Contents not found")
	<div class="container home-page-container highlights">
		<div class="custom-row">
			<div class="custom-col">
				@foreach( $page_sections as $page_section)
					<div class="highlight-item">
						{{-- @dd($page_section['post_thumbnail']) --}}
						@if($page_section['profile'])
							<div class="image-wrapper">
								<img src="{{ $page_section['profile']['url'] }}"> 
								{{-- <img src="{{ $page_section['image']['url'] }}" alt=""> --}}
							</div>
						@endif
						<div class="content-wrapper">
							<h2>{{ $page_section['post_title'] }}</h2>
							@if($page_section['description'])
								<h4>{{ $page_section['description'] }}</h4>
							@endif
							<a href="{{ $page_section['post_permalink'] }}" title="Read More">Read More</a>
						</div>
					</div>
				@endforeach
			</div>
		</div>
	</div>
@else
	<p>Sorry No Content Found</p>
@endif