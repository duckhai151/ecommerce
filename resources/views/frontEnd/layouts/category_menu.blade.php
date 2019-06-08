<h4>CATEGORY</h4>
<hr>
<ul class="list-group">
	@foreach($categories as $category)
		<div class="list-group-item">
			<a href="{{route('home.category',$category->id)}}" class="">{{$category->name}}</a>
			<a href="#submenu{{$category->id}}" data-toggle="collapse" class="bg-light text-dark">
					<span class="badge pull-right"><i class="fas fa-caret-down"></i></span>
			</a>
		</div>
		<div id='submenu{{$category->id}}' class="collapse sidebar-submenu">
			@foreach($category->subcategories as $subcategory)
				<a href="{{route('home.subcategory',$subcategory->id)}}" class="list-group-item text-dark bg-light">{{$subcategory->name}}</a>
			@endforeach
		</div>
	@endforeach
</ul>

