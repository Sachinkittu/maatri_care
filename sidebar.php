<div class="nk-sidebar">           
            <div class="nk-nav-scroll">
                <ul class="metismenu" id="menu">
                <?php
                    echo "<li class='nav-label'><b>Welcome $_SESSION[UserID]</b></li>";
                    ?>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <span class="nav-text">Dashboard</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="index.php"><i class="fa fa-home"></i> Home </a></li>
                        </ul>
                    </li>
                    <li class="mega-menu mega-menu-sm">
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                        <i class="fa fa-pencil-square-o"></i><span class="nav-text">Form Registration</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="patient.php">Patient Registration</a></li>
                            <li><a href="child.php">Child Registration</a></li>
                            
                        </ul>
                    </li>
                     <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                        <i class="fa fa-search"></i><span class="nav-text">Search</span>
                        </a>
                        <ul aria-expanded="false">
                        <li><a href="patientsearchumr.php">Patient Search By UMR</a></li>
                            <li><a href="childsearchumr.php">Child Search By UMR</a></li>
                            <li><a href="patientsearchname.php">Patient Search By Name</a></li>
                            
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                        <i class="fa fa-clock-o"></i><span class="nav-text">Monthly Test</span>
                        </a>
                        <ul aria-expanded="false">
                        <li><a href="patientvaccinesearch.php" aria-expanded="false">Mother Monthly Test</a></li>
                            <li><a href="childvaccinesearch.php" aria-expanded="false">Child Monthly Test</a></li>

                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                        <i class="fa fa-bed"></i><span class="nav-text">IPD</span>
                        </a>
                        <ul aria-expanded="false">
                        <li><a href="patientipdsearch.php" aria-expanded="false">Mother IPD</a></li>
                            <li><a href="childipdsearch.php" aria-expanded="false">Child IPD</a></li>

                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                        <i class="fa fa-user-plus"></i><span class="nav-text">Discharge</span>
                        </a>
                        <ul aria-expanded="false">
                        <li><a href="patientdischargesearch.php" aria-expanded="false">Patient Discharge</a></li>
                            <li><a href="childdischargesearch.php" aria-expanded="false">Child Discharge</a></li>
                        </ul>
                    </li>
                    
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                        <i class="fa fa-list-alt"></i><span class="nav-text">Table</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="patienttable.php" aria-expanded="false">Patient Table</a></li>
                            <li><a href="childtable.php" aria-expanded="false">Child Table</a></li>
                            <li><a href="anctable.php" aria-expanded="false">ANC Patient Details Table</a></li>
                            <li><a href="nonanctable.php" aria-expanded="false">Non-ANC Patient Details Table</a></li>
                        </ul>
                    </li>
                   
                    
                    
                   
                </ul>
            </div>
        </div>