<?php include 'head.php' ?>
<body>
	<div class="menu">
		<?php include 'menu.php' ?>
	</div>
	<div class="container">
		<div class="breadcrumb">
			<ul>
				<li><a href="#" class="dismargin">Trang Chủ  &nbsp; / </a></li>
				<li><a href="#"> Tour du lịch nước ngoài &nbsp; /</a></li>
				<li><a href="#"> &nbsp;Thái Lan / Bangkok</a></li>
			</ul>
		</div>
		<div class="row">
			<div class="col-md-3 contact">
				<img src="img/dog.jpg">
				<h3>Lọc tour</h3>
				<div class="beginner">
					<h4>Khởi hành từ</h4>
					<div class="checkbox abc-checkbox">
						<input type="checkbox" class="styled" id="checkbox1" name="">
						<label for="checkbox1">HCM</label>
					</div>
					<div class="checkbox abc-checkbox">
						<input type="checkbox" class="styled" id="checkbox2" name="">
						<label for="checkbox2">Hà Nội</label>
					</div>
					<div class="checkbox abc-checkbox">
						<input type="checkbox" class="styled" id="checkbox3" name="">
						<label for="checkbox3">Đà Nẵng</label>
					</div>
					<div class="checkbox abc-checkbox">
						<input type="checkbox" class="styled" id="checkbox4" name="">
						<label for="checkbox4">Nha Trang</label>
					</div>
				</div>
				<div class="beginner">
					<h4>Khoảng giá</h4>
					<div class="checkbox abc-checkbox">
						<input type="checkbox" class="styled" id="checkbox5" name="">
						<label for="checkbox5">0 - 500.000đ</label>
					</div>
					<div class="checkbox abc-checkbox">
						<input type="checkbox" class="styled" id="checkbox6" name="">
						<label for="checkbox6">500.000đ - 1.000.000đ</label>
					</div>
					<div class="checkbox abc-checkbox">
						<input type="checkbox" class="styled" id="checkbox7" name="">
						<label for="checkbox7">1.000.000đ - 3.000.000đ</label>
					</div>
					<div class="checkbox abc-checkbox">
						<input type="checkbox" class="styled" id="checkbox8" name="">
						<label for="checkbox8">3.000.000đ - 5.000.000đ</label>
					</div>
				</div>
				<div class="beginner">
					<h4>Thời gian</h4>
					<div class="checkbox abc-checkbox">
						<input type="checkbox" class="styled" id="checkbox_day1" name="">
						<label for="checkbox_day1">1 ngày</label>
					</div>
					<div class="checkbox abc-checkbox">
						<input type="checkbox" class="styled" id="checkbox_day2" name="">
						<label for="checkbox_day2">2 ngày 1 đêm</label>
					</div>
					<div class="checkbox abc-checkbox">
						<input type="checkbox" class="styled" id="checkbox_day3" name="">
						<label for="checkbox_day3">3 ngày 2 đêm</label>
					</div>
					<div class="checkbox abc-checkbox">
						<input type="checkbox" class="styled" id="checkbox_day4" name="">
						<label for="checkbox_day4">4 ngày 3 đêm</label>
					</div>
				</div>
				<div class="beginner">
					<h4>Phương tiện</h4>
					<div class="checkbox abc-checkbox">
						<input type="checkbox" class="styled" id="checkbox_travel1" name="">
						<label for="checkbox_travel1">Xe ô tô</label>
					</div>
					<div class="checkbox abc-checkbox">
						<input type="checkbox" class="styled" id="checkbox_travel2" name="">
						<label for="checkbox_travel2">Xe máy</label>
					</div>
					<div class="checkbox abc-checkbox">
						<input type="checkbox" class="styled" id="checkbox_travel3" name="">
						<label for="checkbox_travel3">Máy bay</label>
					</div>
					<div class="checkbox abc-checkbox">
						<input type="checkbox" class="styled" id="checkbox_travel4" name="">
						<label for="checkbox_travel4">Tàu thủy</label>
					</div>
				</div>
				<div class="beginner">
					<a href="" class="btn btn-default">Xóa bộ lọc</a>
				</div>
			</div>
			<!-- end left -->
			<div class="col-md-9 content">
				<h2>Tour du lịch nước ngoài</h2>
				<div class="product">
					<div class="product-filter">
						<div class="limit">
							Hiển thị
							<select>
								<option value="" selected="selected">15</option>
								<option value="">25</option>
								<option value="">35</option>
								<option value="">45</option>
							</select>
						</div>
						<div class="sort">
							Sắp xếp: 
							<select>
								<option value="" selected="selected">Mặc định</option>
								<option value="" >Tên (A - Z)</option>
								<option value="" >Tên (Z - A)</option>
								<option value="" >Giá (Thấp - Cao)</option>
								<option value="" >Giá (Cao - Thấp)</option>
								<option value="" >Đánh giá (Cao - Thấp)</option>
							</select>
						</div>
					</div>
					<div class="product-list">
						<div class="product-layout">
							<div class="img-left">
								<img src="img/campuchia.jpg">
							</div>
							<div class="details">
								<div class="nametravel">
									<h3><a href="">Tour Campuchia Tết 2017: Siêm Riệp - Phnom Pênh 4N3Đ</a></h3>
								</div>
								<div class="description">
									<i>Tour du lịch Campuchia Tết 2017 4 ngày 3 đêm với điểm đến là hai điểm du lịch hấp dẫn bậc nhất tại x..</i>
								</div>
							</div>
							<div class="price-cart">
								<p>Giá từ</p>
								<div class="price">
									<span>4.000.000đ</span>
								</div>
								<a href="btn btn-primary btn-price"> Đặt ngay </a>
							</div>
						</div>
						<div class="product-layout">
							<div class="img-left">
								<img src="img/campuchia.jpg">
							</div>
							<div class="details">
								<div class="nametravel">
									<h3><a href="">Tour Campuchia Tết 2017: Siêm Riệp - Phnom Pênh 4N3Đ</a></h3>
								</div>
								<div class="description">
									<i>Tour du lịch Campuchia Tết 2017 4 ngày 3 đêm với điểm đến là hai điểm du lịch hấp dẫn bậc nhất tại x..</i>
								</div>
							</div>
							<div class="price-cart">
								<p>Giá từ</p>
								<div class="price">
									<span>4.000.000đ</span>
								</div>
								<a href="btn btn-primary btn-price"> Đặt ngay </a>
							</div>
						</div>
						<div class="product-layout">
							<div class="img-left">
								<img src="img/campuchia.jpg">
							</div>
							<div class="details">
								<div class="nametravel">
									<h3><a href="">Tour Campuchia Tết 2017: Siêm Riệp - Phnom Pênh 4N3Đ</a></h3>
								</div>
								<div class="description">
									<i>Tour du lịch Campuchia Tết 2017 4 ngày 3 đêm với điểm đến là hai điểm du lịch hấp dẫn bậc nhất tại x..</i>
								</div>
							</div>
							<div class="price-cart">
								<p>Giá từ</p>
								<div class="price">
									<span>4.000.000đ</span>
								</div>
								<a href="btn btn-primary btn-price"> Đặt ngay </a>
							</div>
						</div>
						<div class="product-layout">
							<div class="img-left">
								<img src="img/campuchia.jpg">
							</div>
							<div class="details">
								<div class="nametravel">
									<h3><a href="">Tour Campuchia Tết 2017: Siêm Riệp - Phnom Pênh 4N3Đ</a></h3>
								</div>
								<div class="description">
									<i>Tour du lịch Campuchia Tết 2017 4 ngày 3 đêm với điểm đến là hai điểm du lịch hấp dẫn bậc nhất tại x..</i>
								</div>
							</div>
							<div class="price-cart">
								<p>Giá từ</p>
								<div class="price">
									<span>4.000.000đ</span>
								</div>
								<a href="btn btn-primary btn-price"> Đặt ngay </a>
							</div>
						</div>
						<div class="product-layout">
							<div class="img-left">
								<img src="img/campuchia.jpg">
							</div>
							<div class="details">
								<div class="nametravel">
									<h3><a href="">Tour Campuchia Tết 2017: Siêm Riệp - Phnom Pênh 4N3Đ</a></h3>
								</div>
								<div class="description">
									<i>Tour du lịch Campuchia Tết 2017 4 ngày 3 đêm với điểm đến là hai điểm du lịch hấp dẫn bậc nhất tại x..</i>
								</div>
							</div>
							<div class="price-cart">
								<p>Giá từ</p>
								<div class="price">
									<span>4.000.000đ</span>
								</div>
								<a href="btn btn-primary btn-price"> Đặt ngay </a>
							</div>
						</div>
						<div class="product-layout">
							<div class="img-left">
								<img src="img/campuchia.jpg">
							</div>
							<div class="details">
								<div class="nametravel">
									<h3><a href="">Tour Campuchia Tết 2017: Siêm Riệp - Phnom Pênh 4N3Đ</a></h3>
								</div>
								<div class="description">
									<i>Tour du lịch Campuchia Tết 2017 4 ngày 3 đêm với điểm đến là hai điểm du lịch hấp dẫn bậc nhất tại x..</i>
								</div>
							</div>
							<div class="price-cart">
								<p>Giá từ</p>
								<div class="price">
									<span>4.000.000đ</span>
								</div>
								<a href="btn btn-primary btn-price"> Đặt ngay </a>
							</div>
						</div>
						<div class="product-layout">
							<div class="img-left">
								<img src="img/campuchia.jpg">
							</div>
							<div class="details">
								<div class="nametravel">
									<h3><a href="">Tour Campuchia Tết 2017: Siêm Riệp - Phnom Pênh 4N3Đ</a></h3>
								</div>
								<div class="description">
									<i>Tour du lịch Campuchia Tết 2017 4 ngày 3 đêm với điểm đến là hai điểm du lịch hấp dẫn bậc nhất tại x..</i>
								</div>
							</div>
							<div class="price-cart">
								<p>Giá từ</p>
								<div class="price">
									<span>4.000.000đ</span>
								</div>
								<a href="btn btn-primary btn-price"> Đặt ngay </a>
							</div>
						</div>
					</div>
				</div>
				<nav aria-label="Page navigation">
					<ul class="pagination">
					    <li>
					     	<a href="#" aria-label="Previous">
					        	<span aria-hidden="true">&laquo;</span>
					      	</a>
					    </li>
					    <li class="active"><a href="#" >1</a></li>
					    <li><a href="#">2</a></li>
					    <li><a href="#">3</a></li>
					    <li><a href="#">4</a></li>
					    <li><a href="#">5</a></li>
					    <li>
					      	<a href="#" aria-label="Next">
					        	<span aria-hidden="true">&raquo;</span>
					      	</a>
					    </li>
					</ul>
					<div class="text-right">
						<p>Hiển thị từ 1 đến 15 cùa 56</p>
					</div>
				</nav>
				<div class="content-infor">
					<b>Một chuyến du lịch nước ngoài sẽ là một kỷ niệm khó quên đối với nhiều người. Du lịch nước ngoài du khách sẽ có cho mình những trải nghiệm rất mới: văn hóa mới, lịch sử mới, con người mới, ẩm thực mới,... Tất cả tựa như là một sự khác lạ nhưng đầy thú vị. Các tour du lịch nước ngoài sẽ mang đến cho du khách những dịch vụ trọn vẹn, uy tín và chất lượng với mức giá tốt nhất.</b>
					<p>
						Tour du lịch nước ngoài với các điểm đến phong phú từ những quốc gia ở khu vực Đông Nam Á cho đến những quốc gia xa xôi như Mỹ, Canada, Úc,... Từ những hành trình đi ngắn ngày cho đến những hành trình dài cả tháng.
					</p>
				</div>
			</div>
			
		</div>
	</div>
	<div>
		<?php include "footer.php"; ?>
	</div>
	<script src="bootstrap/js/jquery-3.1.1.min.js" type="text/javascript"></script>
	<script src="bootstrap/js/bootstrap.js" type="text/javascript"></script>
</body>
</html>