@section('title') 
Liên Hệ	
@endsection
@extends("home")
@section("content")
<?php
    $message = Session::get('success');
    if($message){
    echo "<span style='font-size: 20px;color: black;' class='text-alert'> ".$message."</span>";
    Session::put('success',null);
    }
    ?>
							<div class="row">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.457066285503!2d106.62435511411704!3d10.852798760748641!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752a272ac90551%3A0xfdedca96b3ea5e15!2zQ8O0bmcgdmnDqm4gcGjhuqduIG3hu4FtIFF1YW5nIFRydW5n!5e0!3m2!1sen!2s!4v1591363622395!5m2!1sen!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
							</div>
							<div class="row page_margin_top_section">
								<div class="column column_1_2 border_top">
									<ul class="page_margin_top">
										<li class="item_content clearfix">
											<span class="features_icon envelope animated_element animation-scale"></span>
											<div class="text">
												<h3>Địa Chỉ Trụ Sở</h3>
												<p>12 Tô Ký<br>Quận 12<br>TP. Hồ Chí Minh</p>
											</div>
										</li>
									</ul>
								</div>
								<div class="column column_1_2 border_top">
									<ul class="page_margin_top">
										<li class="item_content clearfix">
											<span class="features_icon mobile animated_element animation-scale"></span>
											<div class="text">
												<h3>Điện Thoại và E-mail</h3>
												<p>Số Điện Thoại: 0378416794<br>Fax: 0916193822<br>E-mail: <a href="mailto:kindkid12@gmail.com" title="kindkid12@gmail.com">kindkid12@gmail.com</a></p>
											</div>
										</li>
									</ul>
								</div>
							</div>
							<div class="row page_margin_top_section">
								<h4 class="box_header">
									Gửi Liên Hệ Cho Chúng Tôi
								</h4>
								<form class="contact_form margin_top_15"   action="{{URL::TO('guimail')}}" method="post">
                                {{ csrf_field()}}
                                <br>    
                                <fieldset class="column column_1_3">
										<div class="block">
											<input class="text_input" name="name" type="text"  placeholder="Họ Tên *">
										</div>
									</fieldset>
									<fieldset class="column column_1_3">
										<div class="block">
											<input class="text_input" name="email" type="text"  placeholder=" Email *">
										</div>
                                    </fieldset>
                                    <br>
									<fieldset class="column column_1_3" style="margin-top:10px">
										<div class="block">
											<input class="text_input" name="subject" type="text"  placeholder="Loại">
										</div>
									</fieldset>
									<fieldset>
										<div class="block">
											<textarea name="message" placeholder="Tin Nhắn *">Tin Nhắn *</textarea>
										</div>
									</fieldset>
									<fieldset>
										<input type="submit" name="submit" value="GỬI" class="more active">
									</fieldset>
								</form>
							</div>
@endsection
