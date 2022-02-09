<nav id="sidebar" class="sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" href="?menu=dashboard">
            <span class="align-middle"><i class="align-middle" data-feather="globe"></i> Universal Leaf Farm System</span>
        </a>

        <ul class="sidebar-nav">
            <li class="sidebar-header">
                
            </li>

            <li class="sidebar-item <?php echo ($menu == "STP-Agronomy") ? "active" : ''; ?>">
                <a class="sidebar-link" href="">
                    <i class="align-middle" data-feather="octagon"></i> <span class="align-middle">STP-Agronomy</span>
                </a>
            </li>
            
            <li class="sidebar-item">
                <a data-target="#online-exam" data-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle" data-feather="briefcase"></i> <span class="align-middle">Online Examination</span>
                </a>
                <ul id="online-exam" class="sidebar-dropdown list-unstyled collapse " data-parent="#sidebar">
                    <li class="sidebar-item"><a class="sidebar-link" href="ui-alerts.html">STP</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="ui-buttons.html">Others</a></li>
                </ul>
            </li>

            <li class="sidebar-item <?php echo ($menu == "MyKPI") ? "active" : ''; ?>">
                <a data-target="#mykpi" data-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle" data-feather="award"></i> <span class="align-middle">My KPI</span>
                </a>
                <ul class="sidebar-dropdown list-unstyled collapse" data-parent="#sidebar" id="mykpi">
                    <li class="sidebar-item"><a href="#" class="sidebar-link">KPI - Growing Operations</a></li>
                    <li class="sidebar-item"><a href="#" class="sidebar-link">KPI - Native Broadleaf</a></li>
                    <li class="sidebar-item"><a href="#" class="sidebar-link">KPI - Spraying</a></li>
                </ul>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="#">
                    <i class="align-middle" data-feather="box"></i> <span class="align-middle">Crop Simulator</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="#">
                    <i class="align-middle" data-feather="users"></i> <span class="align-middle">Framers Profile</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="#">
                    <i class="align-middle" data-feather="message-square"></i> <span class="align-middle">Hangout</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="#">
                    <i class="align-middle" data-feather="map"></i> <span class="align-middle">Mapping System - GIS</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="#">
                    <i class="align-middle" data-feather="message-circle"></i> <span class="align-middle">Mobile Assistant</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="#">
                    <i class="align-middle" data-feather="video"></i> <span class="align-middle">Tobacco Videography</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="#">
                    <i class="align-middle" data-feather="grid"></i> <span class="align-middle">Photo Gallery</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="#">
                    <i class="align-middle" data-feather="book"></i> <span class="align-middle">Pest and Deseases Guide</span>
                </a>
            </li>

            <li class="sidebar-header">
                Announcement and Updates
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="#">
                    <i class="align-middle" data-feather="calendar"></i> <span class="align-middle">Human Resources Bulletin</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="#">
                    <i class="align-middle" data-feather="file-text"></i> <span class="align-middle">Compliance Updates</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="#">
                    <i class="align-middle" data-feather="rss"></i> <span class="align-middle">PaP Announcement</span>
                </a>
            </li>

            <li class="sidebar-header">
                POT Updates
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="#">
                    <i class="align-middle" data-feather="file"></i> <span class="align-middle">R1 Cut Off Dates - CY2021</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="#">
                    <i class="align-middle" data-feather="file"></i> <span class="align-middle">R2 Cut Off Dates - CY2021</span>
                </a>
            </li>
        </ul>
    </div>
</nav>