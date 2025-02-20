<style>
	#chat_convo {
		max-height: 65vh;
	}

	#chat_convo .direct-chat-messages {
		min-height: 250px;
		height: inherit;
	}

	#chat_convo .card-body {
		overflow: auto;
	}
</style>
<div class="container-fluid">

	<div class="row my-auto">
		<div class="col-lg-8 <?php echo isMobileDevice() == false ?  "offset-2" : '' ?>">
			<div class="container-fluid mb-4">
				<div class="row">
					<div class="mx-auto mt-4">
						<img src="assets/chatbots.png" alt="chatbot" width="300px">
					</div>
				</div>
			</div>

			<div class="container-fluid">
				<div class="row">
					<div class="mx-auto mb-5">
						<span class="text-monospace" id="element" style="font-size: 16px;"></span>
					</div>
				</div>
			</div>

			<!-- petunjuk penggunaan -->
			<div class="accordion" id="accordionExample">
				<div class="card">
					<div class="card-header" id="headingOne">
						<h2 class="mb-0">
							<button class="btn btn-light text-secondary border-secondary text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseThree">
								TENTANG KOS TORAJA
							</button>
						</h2>
					</div>
					<div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
						<div class="card-body">
							<p><b>Kos Toraja</b> adalah pilihan akomodasi ideal yang terletak di Jl. DR. Siwabessy No.31, Kel Wainitu, Kec. Nusaniwe, Kota Ambon, Maluku, RT/RW 01/00. Berlokasi tepat di Belakang gereja hati kudus Yesus, kos ini menawarkan akses mudah ke berbagai fasilitas umum dan pusat aktivitas di sekitar kota.</p>

							<p>Kos Toraja menyediakan lingkungan yang nyaman dan aman bagi penghuninya, dengan fasilitas seperti Wi-Fi, dan dapur bersama. Setiap kamar dirancang dengan baik untuk memenuhi kebutuhan kenyamanan Anda selama tinggal di sini. Harga sewa yang terjangkau dengan berbagai tipe kamar yang dapat dipilih, menjadikan Kos Toraja pilihan yang tepat untuk mahasiswa, pekerja, atau siapa saja yang mencari tempat tinggal di kawasan Honipopu. Dengan lokasi yang strategis dan fasilitas yang memadai, Kos Toraja siap memberikan pengalaman tinggal yang menyenangkan dan praktis bagi para penghuninya.</p>

							<p>Untuk mengetahui informasi lebih lengkap (kamar kosong, fasilitas, harga sewa, dll) silahkan bertanya pada Chatbot atau jika ingin bertanya langsung ke pemilik kos, silahkan klik icon Whatsapp dibawah. Terima kasih 😊</p>
						</div>
					</div>
				</div>
				<div class="card">


					<div class="card-header" id="headingTwo">
						<h2 class="mb-0">
							<button class="btn btn-light text-left border-secondary text-secondary collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
								INFORMASI FASILITAS & HARGA KAMAR
							</button>
						</h2>
					</div>
					<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
						<div class="card-body">
							<p>
								Kos Toraja Berisi fasilitas seperti dibawah ini :
							<ol>
								<li>Luas kamar rata-rata 3 x 4 meter</li>
								<li>Disediakan dapur bersama</li>
								<li>Disediakan spring bed tiap kamar</li>
								<li>Disediakan kipas angin tiap kamar</li>
								<li>Disediakan lemari tiap kamar</li>
								<li>Disediakan Wi-fi gratis</li>
								<li>Disediakan lahan parkir</li>
								<li>Kamar mandi luar</li>
							</ol>
							</p>

							<p>
								Untuk harga kamar yaitu 500.000 rupiah untuk sebulan (sudah termasuk wifi dan listrik).
							</p>

							<p>
								Informasi tambahan bahwa kos Toraja berada di pusat kota dan dekat dengan fasilitas-fasilitas umum yang mudah dijangkau, kos Toraja juga merupakan kos dengan salah satu harga termurah yang berada di pusat kota. Jadi tunggu apa lagi 😊
							</p>

						</div>
					</div>
				</div>

				<div class="card">
					<div class="card-header" id="headingFive">
						<h2 class="mb-0">
							<button class="btn btn-success border-secondary text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
								CARA BERTANYA
							</button>
						</h2>
					</div>
					<div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
						<div class="card-body">
							<p>Berikut petunjuk untuk cara bertanya pada Chatbot Toraja :</p>
							<ul>
								<li>Ketikkan pertanyaan anda secara singkat padat dan jelas, contoh : kamar kosong, harga sewa, fasilitas yang tersedia, dll.</li>
								<li>Jika bot tidak memberikan informasi yang relevan atau pesan error, maka harap perhatikan ejaan anda</li>
								<li>Chatbot ini masih terus dikembangkan, jadi nantikan terus update selanjutnya agar ebih optimal</li>
							</ul>
							<p>Hint atau petunjuk pertanyaan :</p>
							<ul>
								<li>Harga sewa sebulan</li>
								<li>Kamar kosong</li>
								<li>Fasilitas apa saja?</li>
								<li>Apakah bisa harian atau mingguan?</li>
								<li>Lokasi dimana?</li>
								<li>Nomor telepon</li>
								<li>Apakah kos bertingkat?</li>
								<li>Pemilik kos</li>
								<li>Kos khusus wanita atau campur?</li>
								<li>Apakah ada lahan parkir?</li>
							</ul>
						</div>
					</div>
				</div>
			</div>

			<!-- petunjuk penggunaan -->
			<div class="card direct-chat direct-chat-primary" id="chat_convo">
				<div class="card-header ui-sortable-handle" style="cursor: move;">
					<h3 class="card-title">Tanya chatbot Toraja!</h3>

					<div class="card-tools">
						<button type="button" class="btn btn-tool" data-card-widget="collapse">
							<i class="fas fa-minus"></i>
						</button>
					</div>
				</div>
				<!-- /.card-header -->
				<div class="card-body">
					<!-- Conversations are loaded here -->
					<div class="direct-chat-messages" id="apa">
						<!-- Message. Default to the left -->
						<div class="direct-chat-msg mr-4">
							<img class="direct-chat-img border-1 border-primary" src="<?php echo validate_image($_settings->info('bot_avatar')) ?>" alt="message user image">
							<!-- /.direct-chat-img -->
							<div class="direct-chat-text">
								<?php echo $_settings->info('intro') ?>
							</div>
							<!-- /.direct-chat-text -->
						</div>
						<!-- /.direct-chat-msg -->


						<!-- /.contacts-list -->
					</div>
					<div class="end-convo"></div>
					<!-- /.direct-chat-pane -->
				</div>
				<!-- /.card-body -->
				<div class="card-footer">
					<form id="send_chat" method="post">
						<div class="input-group">
							<textarea type="text" name="message" placeholder="Ketik disini..." class="form-control" required=""></textarea>
							<span class="input-group-append">
								<button type="submit" class="btn btn-primary">Kirim</button>
							</span>
						</div>
					</form>
				</div>
				<!-- /.card-footer-->
			</div>

			<!-- INI DOKUMENTASI FOTO -->
			<div class="alert alert-primary text-center mt-5 mb-5" role="alert">
				Dokumentasi
			</div>

			<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
					<li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
					<li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img src="assets/satu.jpg" class="d-block w-100" alt="...">
						<div class="carousel-caption d-none d-md-block">
							<h5>Tampak luar kos</h5>
							<p>Kos ini terdiri dari dua lantai dengan total kamar yaitu sebanyak 15 kamar.</p>
						</div>
					</div>
					<div class="carousel-item">
						<img src="assets/dua.jpg" class="d-block w-100" alt="...">
						<div class="carousel-caption d-none d-md-block">
							<h5>Pintu masuk kos</h5>
							<p>Terdapat ruang tamu atau tempat santai.</p>
						</div>
					</div>
					<div class="carousel-item">
						<img src="assets/tiga.jpg" class="d-block w-100" alt="...">
						<div class="carousel-caption d-none d-md-block">
							<h5>Tampak dalam kamar</h5>
							<p>Kamar berukuran 3 x 4 meter yang sudah disediakan lemari, kasur dan kipas angin.</p>
						</div>
					</div>
					<div class="carousel-item">
						<img src="assets/empat.jpg" class="d-block w-100" alt="...">
						<div class="carousel-caption d-none d-md-block">
							<h5>Tampak dapur umum</h5>
							<p>Kos menyediakan tempat untuk dapur umum kepada penghuninya.</p>
						</div>
					</div>
					<div class="carousel-item">
						<img src="assets/limaa.jpg" class="d-block w-100" alt="...">
						<div class="carousel-caption d-none d-md-block">
							<h5>Tampak dapur umum</h5>
							<p>Kos menyediakan tempat untuk dapur umum kepada penghuninya.</p>
						</div>
					</div>
				</div>
				<button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</button>
				<button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</button>
			</div>

			<!-- INI TOMBOL HUBUNGI KAMI -->
			<div class="alert alert-primary text-center mt-5 mb-5" role="alert">
				Hubungi Kami 👉<a href="https://api.whatsapp.com/send?phone=6281240513794&text=Assalamualaikum Admin Kos Toraja, saya ingin bertanya..." target="_blank"><span class="fab fa-whatsapp ml-2" style="color: white;"></span></a>
			</div>

			<!-- INI FORM KONTAK -->
			<form action="https://formsubmit.co/ekot3921@gmail.com" method="POST">
				<input type="hidden" name="_subject" value="Pesan Baru Dari web toraja!!!">
				<input type="hidden" name="_captcha" value="false">
				<div class="form-group">
					<label for="exampleInputEmail1">Nama</label>
					<input type="text" class="form-control" id="exampleInputEmail1" name="Name" aria-describedby="emailHelp" placeholder="Nama kamu!" required>

				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Email</label>
					<input type="email" class="form-control" id="exampleInputPassword1" placeholder="Email kamu!" name="Email" required>
					<small id="emailHelp" class="form-text text-muted">Kami Menjaga Privasi Anda</small>
				</div>

				<div class="form-group">
					<label for="exampleTextarea">Pesan</label>
					<textarea class="form-control" id="exampleTextarea" rows="3" placeholder="Pesan Kamu!" name="Message" required></textarea>
				</div>

				<!-- INI TOMBOL KIRIM -->
				<button type="submit" class="btn btn-success mb-5">Kirim</button>
			</form>

			<p><b>Note :</b> Kos Toraja berada dibelakang gereja hati kudus Yesus</p>
			<!-- INI FRAME MAP -->
			<iframe class="mb-5" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3981.478879413926!2d128.1701818735216!3d-3.70514504305126!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d6ce8417ebc112b%3A0xafb2d7e3ac26d8b8!2sSacred%20Heart%20of%20Jesus%20Catholic%20Church!5e0!3m2!1sen!2sid!4v1739977199323!5m2!1sen!2sid" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

		</div>
	</div>
</div>
<div class="d-none" id="user_chat">
	<div class="direct-chat-msg right  ml-4">
		<img class="direct-chat-img border-1 border-primary" src="<?php echo validate_image($_settings->info('user_avatar')) ?>" alt="message user image">
		<!-- /.direct-chat-img -->
		<div class="direct-chat-text"></div>
		<!-- /.direct-chat-text -->
	</div>
</div>
<div class="d-none" id="bot_chat">
	<div class="direct-chat-msg mr-4">
		<img class="direct-chat-img border-1 border-primary" src="<?php echo validate_image($_settings->info('bot_avatar')) ?>" alt="message user image">
		<!-- /.direct-chat-img -->
		<div class="direct-chat-text"></div>
		<!-- /.direct-chat-text -->
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function() {
		$('[name="message"]').keypress(function(e) {
			console.log()
			if (e.which === 13 && e.originalEvent.shiftKey == false) {
				$('#send_chat').submit()
				return false;
			}
		})
		$('#send_chat').submit(function(e) {
			e.preventDefault();
			var message = $('[name="message"]').val();
			if (message == '' || message == null) return false;
			var uchat = $('#user_chat').clone();
			uchat.find('.direct-chat-text').html(message);
			$('#chat_convo .direct-chat-messages').append(uchat.html());
			$('[name="message"]').val('')
			$("#chat_convo .card-body").animate({
				scrollTop: $("#chat_convo .card-body").prop('scrollHeight')
			}, "fast");

			$.ajax({
				url: _base_url_ + "classes/Master.php?f=get_response",
				method: 'POST',
				data: {
					message: message
				},
				error: err => {
					console.log(err)
					alert_toast("An error occured.", 'error');
					end_loader();
				},
				success: function(resp) {
					if (resp) {
						resp = JSON.parse(resp)
						if (resp.status == 'success') {
							var bot_chat = $('#bot_chat').clone();
							bot_chat.find('.direct-chat-text').html(resp.message);
							$('#chat_convo .direct-chat-messages').append(bot_chat.html());
							$("#chat_convo .card-body").animate({
								scrollTop: $("#chat_convo .card-body").prop('scrollHeight')
							}, "fast");
						}
					}
				}
			})
		})

	})
</script>

<!-- Load library from the CDN -->
<script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>

<!-- Setup and start animation! -->
<script>
	var typed = new Typed('#element', {
		strings: ['Selamat Datang di <strong>Sistem Informasi E-Kos Toraja</strong>^1000', 'Pusat Informasi dari Kos <strong>Toraja</strong>^1000', 'Jl. DR. Siwabessy No.31, Kel Wainitu, Kec. Nusaniwe, Kota Ambon, Maluku, RT/RW 01/00, belakang gereja hati kudus Yesus, Kota Ambon^1000', 'Silahkan ketikkan pesan Anda dibawah untuk memulai 😊^1000'],
		typeSpeed: 50,
	});
</script>