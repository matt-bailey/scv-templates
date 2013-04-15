<div class="widget">
    <div class="widget-header">
        <h3><i class="icon-shopping-cart"></i> Search Here</h3>
    </div>
    <div class="widget-content">
        <form class="widget-search">
            <select><option>Make</option></select>
            <select><option>Model</option></select>
            <select><option>Size</option></select>
            <select><option>Type</option></select>
            <select><option>Price Range</option></select>
            <button class="btn btn-block btn-primary">Search Vans <i class="icon-caret-right"></i></button>
            <button class="btn btn-block btn-inverse">Browse all Vans <i class="icon-caret-right"></i></button>
            <?php if ($page == "sales"): ?>
            <button class="btn btn-block btn-inverse">Search Classics <i class="icon-caret-right"></i></button>
            <?php elseif ($page == "classic"): ?>
            <button class="btn btn-block btn-inverse">Search Used <i class="icon-caret-right"></i></button>
            <?php endif; ?>
        </form>
    </div>
</div><!-- .widget -->
