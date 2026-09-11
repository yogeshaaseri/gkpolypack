<?php
check_access();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once $_SERVER['DOCUMENT_ROOT'].'/core/layout/head.php' ?>
</head>

<body class="sb-nav-fixed">
    <?php require_once $_SERVER['DOCUMENT_ROOT'].'/core/layout/topnav.php' ?>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <?php require_once $_SERVER['DOCUMENT_ROOT'].'/core/layout/sidenav.php' ?>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="navbar-bg py-3 px-3 px-md-3 d-flex justify-content-between align-items-center border-start border-muted mb-3 border-top shadow-sm">
                    <h1 class="mb-0 fs-16 text-dark fw-bold text-uppercase">Dashboard</h1>
                    <ol class="breadcrumb mb-0 fs-12 fs-md-14">
                        <li class="breadcrumb-item active"><?=env('PERO_SOFT_NAME')?></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
                <div class="container-fluid px-md-3 py-10 py-sm-3">
                    <?php if(is_success()): ?>
                        <div class="alert alert-success alert-dismissible alert-label-icon rounded-label fade show material-shadow"
                            role="alert">
                            <i class="ri-check-double-line label-icon me-1"></i><strong>Success</strong> - <?=get_success()?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php endif; ?>
                    <?php if(is_error()): ?>
                        <div class="alert alert-danger alert-dismissible alert-label-icon rounded-label fade show material-shadow"
                            role="alert">
                            <i class="ri-error-warning-line label-icon me-1"></i><strong>Error</strong> - <?=get_error()?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php endif; ?>
                    <!--  -->
                    <?php if(isset($_GET['view'])): ?>
                    <?php
                        $shipping = $record->shipping_address ? json_decode($record->shipping_address) : null;
                        $billing  = $record->billing_address ? json_decode($record->billing_address) : null;
                    ?>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-none d-sm-flex justify-content-end align-items-center gap-2">
                                        <button data-id="<?=$record->customer_id?>" type="button" class="btn btn-outline-primary btn-sm px-3 reject-account-btn">
                                            <i class="fa-solid fa-floppy-disk me-1"></i> Reject
                                        </button>
                                        <button data-id="<?=$record->customer_id?>" type="button" class="btn btn-primary btn-sm px-3 approve-account-btn">
                                            <i class="fa-solid fa-floppy-disk me-1"></i> Approve
                                        </button>
                                    </div>
                                    <h5 class="fs-18 fst-italic">Customer Details</h5>
                                    <div class="row">
                                        <div class="col-md-1 mb-1 mb-md-3">
                                            <label class="form-label fs-13 mb-1">Customer Id</label>
                                            <input type="text" class="form-control form-control-sm" value="<?= $record->customer_id ?>" disabled>
                                        </div>
                                        <div class="col-md-2 mb-1 mb-md-3">
                                            <label class="form-label fs-13 mb-1">Status</label>
                                            <input type="text" class="form-control form-control-sm" value="<?= ucfirst($record->status) ?>" readonly>
                                        </div>
                                        <div class="col-md-3 mb-1 mb-md-3">
                                            <label class="form-label fs-13 mb-1">Name</label>
                                            <input type="text" class="form-control form-control-sm" value="<?= htmlspecialchars($record->name) ?>" readonly>
                                        </div>
                                        <div class="col-md-3 mb-1 mb-md-3">
                                            <label class="form-label fs-13 mb-1">Email</label>
                                            <input type="text" class="form-control form-control-sm" value="<?= htmlspecialchars($record->email) ?>" readonly>
                                        </div>
                                        <div class="col-md-3 mb-1 mb-md-3">
                                            <label class="form-label fs-13 mb-1">Mobile</label>
                                            <input type="text" class="form-control form-control-sm" value="<?= htmlspecialchars($record->mobile) ?>" readonly>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3 mb-1 mb-md-3">
                                            <label class="form-label fs-13 mb-1">Business Name</label>
                                            <input type="text" class="form-control form-control-sm" value="<?= htmlspecialchars($record->business_name) ?>" readonly>
                                        </div>
                                        <div class="col-md-3 mb-1 mb-md-3">
                                            <label class="form-label fs-13 mb-1">Business Type</label>
                                            <input type="text" class="form-control form-control-sm" value="<?= ucfirst($record->business_type) ?>" readonly>
                                        </div>
                                        <div class="col-md-3 mb-1 mb-md-3">
                                            <label class="form-label fs-13 mb-1">GST Number</label>
                                            <input type="text" class="form-control form-control-sm" value="<?= htmlspecialchars($record->gst_number) ?>" readonly>
                                        </div>
                                        <div class="col-md-3 mb-1 mb-md-3">
                                            <label class="form-label fs-13 mb-1">PAN Number</label>
                                            <input type="text" class="form-control form-control-sm" value="<?= htmlspecialchars($record->pan_number) ?>" readonly>
                                        </div>
                                    </div>
                                    <h5 class="fs-18 fst-italic mt-3">Verification Status</h5>
                                    <div class="row">
                                        <div class="col-md-3 mb-1 mb-md-3">
                                            <label class="form-label fs-13 mb-1">Status</label>
                                            <input type="text" class="form-control form-control-sm" value="<?= strtoupper($record->verification_status) ?>" readonly>
                                        </div>
                                        <div class="col-md-3 mb-1 mb-md-3">
                                            <label class="form-label fs-13 mb-1">Verification Date</label>
                                            <input type="text" class="form-control form-control-sm" value="<?= htmlspecialchars($record->verification_date) ?>" readonly>
                                        </div>
                                    </div>
                                    <h5 class="fs-18 fst-italic mt-3">Addresses</h5>
                                    <div class="row">
                                        <div class="col-md-4 mb-1 mb-md-3">
                                            <label class="form-label fs-13 mb-1">Business Address</label>
                                            <textarea class="form-control form-control-sm" rows="4" readonly><?= $record->address_line1 . "\n" . $record->address_line2 . "\n" . $record->city . ", " . $record->state . "\n" . $record->pincode ?></textarea>
                                        </div>
                                        <div class="col-md-4 mb-1 mb-md-3">
                                            <label class="form-label fs-13 mb-1">Shipping Address</label>
                                            <textarea class="form-control form-control-sm" rows="4" readonly><?php if($shipping): ?><?= $shipping->address_line1 . "\n" . $shipping->address_line2 . "\n" . $shipping->city . ", " . $shipping->state . "\n" . $shipping->pincode ?><?php endif; ?></textarea>
                                        </div>
                                        <div class="col-md-4 mb-1 mb-md-3">
                                            <label class="form-label fs-13 mb-1">Billing Address</label>
                                            <textarea class="form-control form-control-sm" rows="4" readonly><?php if($billing): ?><?= $billing->address_line1 . "\n" . $billing->address_line2 . "\n" . $billing->city . ", " . $billing->state . "\n" . $billing->pincode ?><?php endif; ?></textarea>
                                        </div>
                                    </div>
                                    <h5 class="fs-18 fst-italic mt-3">Login Info</h5>
                                    <div class="row">
                                        <div class="col-md-4 mb-1 mb-md-3">
                                            <label class="form-label fs-13 mb-1">Last Login At</label>
                                            <input type="text" class="form-control form-control-sm" value="<?= human_date($record->last_login_at) ?>" readonly>
                                        </div>
                                        <div class="col-md-4 mb-1 mb-md-3">
                                            <label class="form-label fs-13 mb-1">Last Login IP</label>
                                            <input type="text" class="form-control form-control-sm" value="<?= $record->last_login_ip ?>" readonly>
                                        </div>
                                        <div class="col-md-4 mb-1 mb-md-3">
                                            <label class="form-label fs-13 mb-1">Last Login Agent</label>
                                            <input type="text" class="form-control form-control-sm" value="<?= htmlspecialchars($record->last_login_agent) ?>" readonly>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-block d-sm-none px-10 fixed-bottom pt-20 pb-20 navbar-bg navbar-color">
                        <div class="row">
                            <div class="col">
                                <button data-id="<?=$record->customer_id?>" type="reset" class="btn btn-outline-primary btn-sm px-3 w-100 reject-account-btn">Reject</button>
                            </div>
                            <div class="col">
                                <button data-id="<?=$record->customer_id?>" type="button" class="btn btn-primary btn-sm px-3 w-100 approve-account-btn">Approve</button>
                            </div>
                        </div>
                    </div>
                    <?php ;else: ?>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <input id="datatableSearch" type="text" class="form-control form-control-sm w-25" placeholder="Search Here....">
                                        <div class="float-end">
                                            <a type="button" class="btn btn-outline-primary btn-sm">Export CSV</a>
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table id="datatable" class="table table-bordered dt-responsive nowrap align-middle" style="width:100%">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th class="fs-13 no-sort text-center" style="width:90px">Actions</th>
                                                    <?php foreach($columns as $column): ?>
                                                        <th class="fs-13"><?=$column?></th>
                                                    <?php endforeach; ?>
                                                </tr>
                                            </thead>
                                            <tbody></tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>
                    <!--  -->
                </div>
            </main>
            <?php require_once $_SERVER['DOCUMENT_ROOT'].'/core/layout/footer.php' ?>
        </div>
    </div>
    <?php require_once $_SERVER['DOCUMENT_ROOT'].'/core/layout/scripts.php' ?>
</body>

</html>