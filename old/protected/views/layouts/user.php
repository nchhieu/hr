<?php /* @var $this Controller */ ?>
<?php 
$this->beginContent('//layouts/main'); 
$controler = Yii::app()->controller->id;
$tabActive = array('donhang'=>'','sanpham'=>'', 'khachhang'=>'','giaohang'=>'', 'baiviet'=>'', 'quanly'=>'');
if(in_array($controler , array('donhang','donhangSanpham')) ){$tabActive['donhang'] = 'active'; }
if(in_array($controler , array('sanpham','Loaisanpham','nhacungcap','nhomsanpham','sanphamThuonghieu','sanphamSize','sanphamMau')) ){$tabActive['sanpham'] = 'active'; }
if(in_array($controler , array('khachhang'))){$tabActive['khachhang'] = 'active'; }
if(in_array($controler , array('congtyGiaohang','giaohangNhanvien'))){ $tabActive['giaohang'] = 'active'; }
if(in_array($controler , array('baiviet','banner','Loaibaiviet'))){ $tabActive['baiviet'] = 'active'; }
if(in_array($controler , array('nhanvien','thanhpho','quocgia'))){ $tabActive['quanly'] = 'active'; }
?>

<header>
  <div class='navbar'>
    <div class='navbar-inner'>
      <div class='container-fluid'> <a class='brand' href='index.php'> <i class=' icon-calendar'></i> <span class='hidden-phone'>Salary</span> </a> <a class='toggle-nav btn pull-left' href='#'> <i class='icon-reorder'></i> </a>
        <ul class='nav pull-right'>
          <li class='dropdown light only-icon'> <a class='dropdown-toggle' data-toggle='dropdown' href='#'> <i class='icon-adjust'></i> </a>
            <ul class='dropdown-menu color-settings'>
              <li class='color-settings-contrast-color'>
                <div class='color-title'>Contrast color</div>
                <a data-change-to="contrast-red" href="#"><i class='icon-adjust text-red'></i> Red <small>(default)</small> </a> <a data-change-to="contrast-blue" href="#"><i class='icon-adjust text-blue'></i> Blue </a> <a data-change-to="contrast-orange" href="#"><i class='icon-adjust text-orange'></i> Orange </a> <a data-change-to="contrast-purple" href="#"><i class='icon-adjust text-purple'></i> Purple </a> <a data-change-to="contrast-green" href="#"><i class='icon-adjust text-green'></i> Green </a> <a data-change-to="contrast-muted" href="#"><i class='icon-adjust text-muted'></i> Muted </a> <a data-change-to="contrast-fb" href="#"><i class='icon-adjust text-fb'></i> Facebook </a> <a data-change-to="contrast-dark" href="#"><i class='icon-adjust text-dark'></i> Dark </a> <a data-change-to="contrast-pink" href="#"><i class='icon-adjust text-pink'></i> Pink </a> <a data-change-to="contrast-grass-green" href="#"><i class='icon-adjust text-grass-green'></i> Grass green </a> <a data-change-to="contrast-sea-blue" href="#"><i class='icon-adjust text-sea-blue'></i> Sea blue </a> <a data-change-to="contrast-banana" href="#"><i class='icon-adjust text-banana'></i> Banana </a> <a data-change-to="contrast-dark-orange" href="#"><i class='icon-adjust text-dark-orange'></i> Dark orange </a> <a data-change-to="contrast-brown" href="#"><i class='icon-adjust text-brown'></i> Brown </a> </li>
            </ul>
          </li>
          <li class='dropdown dark user-menu'> <a class='dropdown-toggle' data-toggle='dropdown' href='#'> <img width="23" height="23" alt="<?php echo Yii::app()->user->getState('ho_ten'); ?>" src="/assets/images/avatar.jpg" /> <span class='user-name hidden-phone'><?php echo Yii::app()->user->getState('nguoidung_hoten'); ?></span> <b class='caret'></b> </a>
            <ul class='dropdown-menu'>
              <li> <a href='user_profile.html'> <i class='icon-user'></i> Profile </a> </li>
              <li> <?php echo CHtml::link('<i class="icon-lock"></i> Change password', array('User/ChangePassword')); ?></li>
              <li class='divider'></li>
              <li><?php echo CHtml::link('<i class="icon-signout"></i><strong> Logout</strong>', array('site/Logout')); ?> </li>
            </ul>
          </li>
        </ul>
        <form action='#' class='navbar-search pull-right hidden-phone' method='get'>
          <button class='btn btn-link icon-search' name='button' type='submit'></button>
          <input value="" class="search-query span2" placeholder="Search..." autocomplete="off" id="q_header" name="q" type="text" />
        </form>
      </div>
    </div>
  </div>
</header>
<div id='wrapper'>
  <div id='main-nav-bg'></div>
  <nav id='main-nav'>
    <div class='navigation'>
      <div class='search'>
        <form action='#' method='get'>
          <div class='search-wrapper'>
            <input value="" class="search-query" placeholder="Search..." autocomplete="off" name="q" type="text" />
            <button class='btn btn-link icon-search' name='button' type='submit'></button>
          </div>
        </form>
      </div>
      <ul class='nav nav-stacked'>
        <li class='<?php echo $tabActive['donhang'];?>'> <a class="dropdown-collapse " href="#"><i class=" icon-money"></i> <span>Lương</span> <i class='icon-angle-down angle-down'></i> </a>
          <ul class='nav nav-stacked'>
            <li class=''> <?php echo CHtml::link('<i class="icon-calendar"></i> Tính lương', array('NhanvienLuong/admin')); ?> </li>
            <li class=''> <?php echo CHtml::link('<i class="icon-download-alt"></i>  Nhập từ Excel', array('NhanvienLuong/admin')); ?> </li>
            <li class=''> <?php echo CHtml::link('<i class="icon-print"></i>  In bảng lương', array('NhanvienLuong/admin')); ?> </li>
          </ul>
        </li>
        <li class='<?php echo $tabActive['sanpham'];?>'> <a class="dropdown-collapse" href="#"><i class='icon-group'></i> <span>Nhân viên & HĐLĐ</span> <i class='icon-angle-down angle-down'></i> </a>
          <ul class='nav nav-stacked'>
            <li class=''> <?php echo CHtml::link('<i class=" icon-plus-sign"></i> Thêm mới nhân viên', array('Nhanvien/admin')); ?> </li>
            <li class=''> <?php echo CHtml::link('<i class="icon-list-ul"></i> Danh sách nhân viên', array('Nhanvien/admin')); ?> </li>
            <li class=''><?php echo CHtml::link('<i class="icon-edit"></i> HĐLĐ', array('NhanvienHopdong/admin')); ?> </li>
          </ul>
        </li>
        <li class='<?php echo $tabActive['khachhang'];?>'> <a class='dropdown-collapse ' href='#'> <i class='icon-user'></i> <span>Nghỉ</span> <i class='icon-angle-down angle-down'></i> </a>
          <ul class='nav nav-stacked'>
            <li class=''><?php echo CHtml::link('<i class="icon-user"></i> Thai sản', array('NhanvienNghi/admin')); ?></li>
            <li class=''><?php echo CHtml::link('<i class="icon-user"></i>  Bệnh ốm đau', array('NhanvienNghi/admin')); ?></li>
            <li class=''><?php echo CHtml::link('<i class="icon-user"></i>  Tứ thân phụ mẫu', array('NhanvienNghi/admin')); ?></li>
            <li class=''><?php echo CHtml::link('<i class="icon-user"></i>  Nghỉ khác', array('NhanvienNghi/admin')); ?></li>
            <li class=''><?php echo CHtml::link('<i class="icon-user"></i>  Đã nghỉ việc', array('NhanvienNghi/admin')); ?></li>
          </ul>
        </li>
        <li class="<?php echo $tabActive['quanly'];?>"> <a class='dropdown-collapse ' href='#'> <i class='icon-cogs'></i> <span>Quản lý</span> <i class='icon-angle-down angle-down'></i> </a>
          <ul class='nav nav-stacked'>
            <li class=''><?php echo CHtml::link('<i class="icon-circle-arrow-right"></i> Bộ phận', array('Bophan/admin')); ?></li>
            <li class=''><?php echo CHtml::link('<i class="icon-circle-arrow-right"></i> Chức danh', array('Chucdanh/admin')); ?></li>
            <li class=''><?php echo CHtml::link('<i class="icon-circle-arrow-right"></i> Bậc lương', array('Bacluong/admin')); ?></li>
            <li class=''><?php echo CHtml::link('<i class="icon-circle-arrow-right"></i> Người dùng', array('Nguoidung/admin')); ?></li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>
  <section id='content'>
    <div class='container-fluid'>
      <div class='row-fluid' id='content-wrapper'> <?php echo $content;?> </div>
    </div>
  </section>
</div>
<?php $this->endContent(); ?>
