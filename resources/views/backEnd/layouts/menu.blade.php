<div class="navbarfull">
	<ul class="nav flex-column">
		<li class="nav-item">
			<h5 class="text-danger">Categories</h5>
			<ul class="nav flex-column">
				<li class="nav-item"><a href="{{route('category.index')}}">List Categories</a></li>
				<li class="nav-item"><a href="{{route('category.getCreate')}}">Add New Categories</a></li>
			</ul>
		</li>
		<br>
		<li class="nav-item">
			<h5 class="text-danger">SubCategories</h5>
			<ul class="nav flex-column">
				<li class="nav-item"><a href="{{route('subcategory.index')}}">List SubCategories</a></li>
				<li class="nav-item"><a href="{{route('subcategory.getCreate')}}">Add New SubCategories</a></li>
			</ul>
		</li>
		<br>
		<li class="nav-item">
			<h5 class="text-danger">Products</h5>
			<ul class="nav flex-column">
				<li class="nav-item"><a href="{{route('product.index')}}">List Product</a></li>
				<li class="nav-item"><a href="{{route('product.getCreate')}}">Add New Product</a></li>
			</ul>
		</li>	
	</ul>
</div>