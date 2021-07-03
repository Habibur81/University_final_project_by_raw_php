 <div class="card sidebar-menu"><!--panel panel-default sidebar-menu begging-->
    <div class="card-heading bg-success"><!--panel-heading begging-->
        <h3 class="card-title">Products Categories</h3>	
    </div><!--panel-heading end-->
    
    <div class="card-body">
        <ul class="nav flex-column nav-pills category-menu">
        
        <?Php
             
           
            
            getPCats();
            
        ?>
        
        </ul>
    </div>
              
</div> <!--panel panel-default sidebar-menu end-->

<div class="card sidebar-menu"><!--panel panel-default sidebar-menu begging-->
    <div class="card-heading bg-info"><!--panel-heading begging-->
				<h3 class="card-title">Categories</h3>	
    </div><!--panel-heading end-->
    
    <div class="card-body">
        <ul class="nav flex-column nav-pills category-menu">
        
        <?Php
             
            getCats();
            
        ?>
            
        </ul>
    </div>
              
</div> <!--panel panel-default sidebar-menu end-->
	
