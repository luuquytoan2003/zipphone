
		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Quản Lý Bình Luận</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Home</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Quản Lý Bình Luận</a>
						</li>
					</ul>
				</div>
			</div>

			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Danh sách bình luận</h3>
					</div>
					<table>
						<thead>
							<tr>
								<th>STT</th>
								<th>Tên User</th>
								<th>Tên Sản Phẩm</th>
								<th>Nội Dung</th>
								<th>Thời Gian</th>
								<th>Chức Năng</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td>
									John Doe
								</td>
                                <td>Iphone</td>
								<td>
									Điện thoại vjppro
								</td>
								<td>01-10-2021</td>
								<td>
									<button type="button" class="btn btn-primary status pending" data-toggle="modal" data-target="#xoa-binh-luan">Xóa</button>
									
								</td>
							</tr>
							<tr>
								<td>2</td>
								<td>
									John Doe
								</td>
                                <td>Iphone</td>
								<td>
									Bún bò khum hành OwO
								</td>
								<td>01-10-2021</td>
								<td><button type="button" class="btn btn-primary status pending" data-toggle="modal" data-target="#xoa-binh-luan">Xóa</button></td>
							</tr>
							<tr>
								<td>3</td>
								<td>
									John Doe
								</td>
                                <td>Iphone</td>
								<td>
									Xxx
								</td>
								<td>01-10-2021</td>
								<td><button type="button" class="btn btn-primary status pending" data-toggle="modal" data-target="#xoa-binh-luan">Xóa</button></td>
							</tr>
							<tr>
								<td>4</td>
								<td>
									John Doe
								</td>
                                <td>Iphone</td>
								<td>
									Xxx
								</td>
								<td>01-10-2021</td>
								<td><button type="button" class="btn btn-primary status pending" data-toggle="modal" data-target="#xoa-binh-luan">Xóa</button></td>
							</tr>
						</tbody>
					</table>
				</div>
				
			</div>
		</main>
		<!-- MAIN -->
    </section>
    <!-- CONTENT -->


	<!--MODAL xóa danh mục BOOTSTRAP-->
	<div class="modal fade" id="xoa-binh-luan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
		  <div class="modal-content">
			<div class="modal-header">
			  <h5 class="modal-title" id="exampleModalLabel">Cảnh báo !!!!</h5>
			  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			  </button>
			</div>
			<div class="modal-body">
			  Bạn có thực sự muốn xóa khum?
			</div>
			<div class="modal-footer">
			  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			  <button type="button" class="btn btn-danger">Delete</button>
			</div>
		  </div>
		</div>
	  </div>
	<!--MODAL xóa danh mục BOOTSTRAP-->