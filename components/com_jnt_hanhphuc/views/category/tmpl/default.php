<?php

// No direct access
defined('_JEXEC') or die;

$category = $this->category;
?>

<div class="container">
    <div class="float-left left-side">
		<div class="sub-container">
			<p class="search-text">TÌM KIẾM DỊCH VỤ CƯỚI</p>

			<div class="line-break-search"><span></span></div>

			<form id="frm-search-service">
			<p>Chú ý: <span>Chọn một trong các lựa chọn bên dưới rồi nhấn vào Tìm kiếm để tìm kiếm dịch vụ.</span></p>
			<div>
				<select>
					<option>Chọn dịch vụ</option>
				</select>

				<select>
					<option>Tỉnh / Thành</option>
				</select>

				<select>
					<option>Quận / Huyện</option>
				</select>
			</div>

			<div>
				<input type="text" placeholder="Gõ tên nhà cung cấp dịch vụ">
				<button type="button">Tìm kiếm dịch vụ</button>
			</div>

			</form>
		</div>
		
		<div class="sub-container">
			<div>
				<ul class="list-service-categories">
					<li>
						<h1 class="category-title"><?php echo $category->title; ?></h1>
						<div class="line-break-news"><span></span></div>
						<ul class="list-service-items fltlft">
							<?php foreach ($category->users as $user): ?>
							<li class="fltlft">
								<div class="image fltlft">
									Avatar
								</div>
								<div class="fltlft info">
									<a class="title" href="<?php echo $user->username; ?>">
										<?php echo $user->name; ?>
									</a>
									<p>Địa chỉ: </p>
									<p>Số điện thoại: </p>
								</div>
								<div class="clr"></div>
							</li>
							<?php endforeach; ?>
						</ul>
						<div class="clr"></div>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="float-right right-side">
		<?php echo JEUtil::loadModule('right', 'module-padding'); ?>
		
		<div class="module-title module-padding">THÔNG TIN KHUYẾN MẠI</div>
		<div class="line-break-promotion"><span></span></div>
		<div class="box">
			<ul class="news-other-list">
				<li>
					Áo cưới: ....
				</li>
			</ul>
		</div>
		
		<div class="module-title module-padding">DOANH NGHIỆP TIÊU BIỂU</div>
		<div class="line-break"></div>
		<div class="box">
			<ul>
				<li>
					<div class="img">
						img here
					</div>
					<div class="bussiness-focus-info">
						<p class="title">Áo cưới</p>
						<p class="address">Địa chỉ</p>
						<p class="phone">Điện thoại</p>
					</div>
				</li>
			</ul>
		</div>
    </div>
</div>

<div class="clr"></div>