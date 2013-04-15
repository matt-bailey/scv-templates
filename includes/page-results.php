<div id="content">
    <div class="content-wrapper">
        <div class="main row">

            <article class="span9">
                <ul class="breadcrumb">
                    <li><a href="#">Used Vehicle Sales</a> <span class="divider">/</span></li>
                    <li class="active">Search Results</li>
                </ul>
                <div class="page-heading">
                    <h1>Used Vehicle Sales Search Results</h1>
                </div>
                <p class="txt-larger"><strong>You searched for:</strong> Medium Sized Vans</p>
                <?php include 'toolbar.php'; ?>
                <div class="row search-results">
                    <?php include 'van-search-summary.php'; ?>
                    <?php include 'van-search-summary.php'; ?>
                    <?php include 'van-search-summary.php'; ?>
                    <?php include 'van-search-summary.php'; ?>
                    <?php include 'van-search-summary.php'; ?>
                </div>
                <?php include 'toolbar.php'; ?>
            </article><!-- article -->

            <aside class="sidebar span3">
                <?php include 'widget-search.php'; ?>
                <?php include 'widget-rental.php'; ?>
                <?php include 'widget-arc.php'; ?>
            </aside><!-- .sidebar -->

        </div><!-- .main -->

    </div>
</div><!-- .content -->
