
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading"> DANH MỤC </div> 
                
                            <a class="nav-link" href="index.php?action=quanlylogo&query=lietke">
                                <div class="sb-nav-link-icon"><i class="fas fa-warehouse"></i></div>
                                QUẢN LÝ LOGO
                            </a>
                            
                            <a class="nav-link collapsed" href="product.jsp?id=1" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-motorcycle"></i></div>
                                CHỈNH SỬA TRANG CHỦ
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="index.php?action=quanlydv&query=lietke"> Dịch vụ tiêu biểu </a>   
                                </nav>
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="index.php?action=quanlynd&query=lietke"> Nội dung văn bản </a>   
                                </nav>
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="index.php?action=quanlydt&query=lietke"> Đối tác khách hàng </a>   
                                </nav>
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="index.php?action=quanlyft&query=lietke"> Giới thiệu footer </a>   
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="product.jsp?id=1" data-toggle="collapse" data-target="#collapseLayouts2" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon "><i class="fas fa-motorcycle"></i></div>
                                SẢN PHẨM DỊCH VỤ
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts2" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <div class="dropdown-toggle nav-link" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Vận chuyển hàng
                                    </div>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <a class="dropdown-item nav-link" style="color:black" href="index.php?action=quanlygt&query=lietke"> Giới thiệu HTKK </a>
                                        <a class="dropdown-item nav-link" style="color:black" href="index.php?action=quanlydvvc&query=lietke"> Dịch vụ - Thị trường </a>
                                        <a class="dropdown-item nav-link" style="color:black" href="index.php?action=quanlykbvc&query=lietke"> Sự khác biệt </a>
                                        <a class="dropdown-item nav-link" style="color:black" href="index.php?action=quanlybgvc&query=lietke"> Bảng giá vận chuyển </a>
                                        <a class="dropdown-item nav-link" style="color:black" href="index.php?action=quanlyttvc&query=lietke"> Tin tức </a>
                                    </div>   
                                </nav>
                                
                            </div>
                            <div>
                                
                            </div>
                            <!-- <a class="nav-link" href="donhang.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-boxes"></i></div>
                                ĐƠN HÀNG
                            </a> -->
                        </div>
                    </div>
                    
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                           <?php
                                //nếu có session tên dangnhap thì ta thực hiện lệnh dưới
                                if(isset($_SESSION['dangnhap']) && $_SESSION['dangnhap'] != NULL)
                                {
                                    echo $_SESSION['dangnhap'];
                                                    
                                }
                            ?>       
                    </div>
                </nav>