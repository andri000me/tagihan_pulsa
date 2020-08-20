<div class="sidebar" data-color="white" data-active-color="danger">
    <div class="logo">
        <a href="dashboard" class="simple-text logo-mini">
            <div class="logo-image-small">
                <img src="../../assets/image/fav/masika-fav.png">
            </div>
            <!-- <p>CT</p> -->
        </a>
        <a href="dashboard" class="simple-text logo-normal">
            Masika Reload
            <!-- <div class="logo-image-big">
            <img src="../../assets/img/logo-big.png">
          </div> -->
        </a>
    </div>
    <div class="sidebar-wrapper" style="overflow-x:hidden" id="myDIV">
        <ul class="nav">
            <li class="<?php if($page=="dashboard"){echo 'active';}?>">
                <a href="dashboard">
                    <i class="nc-icon nc-bank"></i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="nav-item btn-rotate dropdown <?php if($page=="transaksipenembakan"){echo 'active';}?>">
                <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="nc-icon nc-paper"></i> TRANSAKSI PENEMBAKAN
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="transpenembakan">DATA PENEMBAKAN</a>
                    <a class="dropdown-item" href="historypenembakan">HISTORY PENEMBAKAN</a>
                </div>
            </li>
            <li class="<?php if($page=="saldolimit"){echo 'active';}?>">
                <a href="saldolimit">
                    <i class="nc-icon nc-chart-bar-32"></i>
                    <p>SALDO LIMIT</p>
                </a>
            </li>
            <li class="nav-item btn-rotate dropdown <?php if($page=="setoransales"){echo 'active';}?>">
                <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="nc-icon nc-money-coins"></i> SETORAN SALES
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">DATA SETORAN</a>
                    <a class="dropdown-item" href="#">UPLOAD BUKTI</a>
                </div>
            </li>
            <li class="<?php if($page=="datapelanggan"){echo 'active';}?>">
                <a href="./user.html">
                    <i class="nc-icon nc-circle-10"></i>
                    <p>DATA PELANGGAN</p>
                </a>
            </li>
            <li class="<?php if($page=="invoicesales"){echo 'active';}?>">
                <a href="invoicesales">
                    <i class="nc-icon nc-send"></i>
                    <p>INVOICE SALES</p>
                </a>
            </li>
            <li class="nav-item btn-rotate dropdown <?php if($page=="reportdata"){echo 'active';}?>">
                <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="nc-icon nc-single-copy-04"></i> REPORT DATA
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">HARIAN</a>
                    <a class="dropdown-item" href="#">BULANAN</a>
                    <a class="dropdown-item" href="#">TAHUNAN</a>
                </div>
            </li>
        </ul>
    </div>
</div>