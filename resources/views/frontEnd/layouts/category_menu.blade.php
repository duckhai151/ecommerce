<h4>CATEGORY</h4>
<hr>
	<?php 
		$categories = DB::table('categories')->get();
		function showCategories($categories, $parent_id = 0, $char = '')
		{
			foreach($categories as $key => $item)
    		{
		        if($item->parent_id == $parent_id)
		        {
		            echo '<a href="#" class="list-group-item">';
		                echo $char . $item->name;
		            echo '</a>';

		            echo '</li>';
		            unset($categories[$key]);
		            showCategories($categories, $item->id, $char. '&#160;&#160;&#160;&#160;&#160;');
		        }
		    }
		}
	?>
	<div class="list-group">
		<?php showCategories($categories); ?>
	</div>
	    


