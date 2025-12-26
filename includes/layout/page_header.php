<!-- Page header -->
<div class="content-wrapper">
    <div class="page-header page-header-light">
        <div class="page-header-content header-elements-lg-inline">
            <div class="page-title d-flex">
                <h4>
                    <span class="font-weight-semibold">
                        <?php echo htmlspecialchars($page_title); ?>
                    </span>
                </h4>
                <a href="#" class="header-elements-toggle text-body d-lg-none">
                    <i class="icon-more"></i>
                </a>
            </div>
        </div>

        <div class="breadcrumb-line breadcrumb-line-light header-elements-lg-inline">
            <div class="d-flex">
                <div class="breadcrumb">
                    <a href="index.php" class="breadcrumb-item">
                        <i class="icon-home2 mr-2"></i> <?php echo $breadcrumb_home; ?>
                    </a>

                    <?php if ($breadcrumb_lvl1): ?>
                        <a href="#" class="breadcrumb-item">
                            <?php echo htmlspecialchars($breadcrumb_lvl1); ?>
                        </a>
                    <?php endif; ?>

                    <span class="breadcrumb-item active">
                        <?php echo htmlspecialchars($page_title); ?>
                    </span>
                </div>

                <a href="#" class="header-elements-toggle text-body d-lg-none">
                    <i class="icon-more"></i>
                </a>
            </div>
        </div>
    </div>
<!-- /page header -->
