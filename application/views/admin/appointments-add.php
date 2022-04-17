<link href="<?php echo base_url(); ?>backendAssets/plugins/fileuploads/css/dropify.min.css"rel="stylesheet"type="text/css"><?php if($this->router->fetch_method()=='view'){ ?><script type="text/javascript">$(document).ready(function(e){$('input[type="password"]').each(function(e,t){$(this).parents(".form-group").hide()}),$('input[type="file"]').each(function(e,t){var r=$(this).parents(".form-group"),i=r.find("img").attr("src");r.find(".fileupload-new").before('<img src="'+i+'">'),r.find(".fileupload-new").remove()}),$("textarea").each(function(e,t){var r=($(this).parents(".form-group"),$(this).val());$(this).before(r),$(this).remove()}),$('input[type="submit"]').each(function(e,t){$(this).parents(".form-group").remove()}),$("form").attr("id",""),$("select").each(function(e,t){var r=$("option:selected",this).text();$(this).before(r),$(this).parents(".form-group").remove()})})</script><style type="text/css">div.content{height:95%!important;overflow-y:scroll!important}.form-control{outline:0!important;border:none!important;-webkit-appearance:none!important}.form-control:focus{outline:0!important;border:none!important;-webkit-appearance:none!important}</style><?php } ?><style type="text/css">div.content{height:95%;overflow-y:scroll}</style><div class="content"><div class="container">
	<form class="form-horizontal"enctype="multipart/form-data"id="blog-form"method="post">
		<div class="row">
			<div class="col-md-12">
				<div class="card-box">
					<div class="box-content"id="AddEdit"><?php  ?>
					<a class="btn btn-primary btn-rounded m-b-5 w-md waves-effect waves-light"href="<?php echo base_url(); ?>myadmin/<?php echo $this->router->fetch_class(); ?>/listview"><i class="ti-back-left"></i><?php echo 'Listview' ?></a><?php  ?>
					<div class="form-group">
						<label class="col-lg-2 control-label col-sm-4">Full name</label>
						<div class="col-md-8">
							<input id="name"name="name"value="<?php if(isset($fetchValue[0]['name'])){echo set_value('name',$fetchValue[0]['name']);} ?>"class="form-control"placeholder="Name">
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-2 control-label col-sm-4">Mobile</label>
						<div class="col-md-8">
							<input id="mobile"name="mobile"value="<?php if(isset($fetchValue[0]['mobile'])){echo set_value('mobile',$fetchValue[0]['mobile']);} ?>"class="form-control"placeholder="Mobile">
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-2 control-label col-sm-4">Email</label>
						<div class="col-md-8">
							<input id="email"name="email"value="<?php if(isset($fetchValue[0]['email'])){echo set_value('email',$fetchValue[0]['email']);} ?>"class="form-control"placeholder="Email">
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-2 control-label col-sm-4">Appointment Date</label>
						<div class="col-md-8">
							<input id="appointmentDate"name="appointmentDate"value="<?php if(isset($fetchValue[0]['appointmentDate'])){echo set_value('appointmentDate',$fetchValue[0]['appointmentDate']);} ?>"class="form-control"placeholder="Appointment Date">
						</div>
					</div>
					
					<div class="form-group"><label class="col-lg-2 control-label col-sm-4">Message</label>
						<div class="col-md-8">
							<textarea class="form-control ckeditor col-md-12"id="leadMessage"name="leadMessage"rows="6"><?php if(isset($fetchValue[0]['leadMessage'])){echo set_value('leadMessage',$fetchValue[0]['leadMessage']);} ?></textarea>
						</div>
					</div>
	 
<div class="form-group"><div class="col-lg-10 col-lg-offset-2 col-sm-9 col-sm-offset-3"><input id="btn_submit"name="btn_submit"value="Submit"class="btn btn-primary"type="submit"></div></div></div></div></div></div></form></div></div><script src="<?php echo base_url(); ?>backendAssets/plugins/tinymce/tinymce.min.js"></script><script type="text/javascript">$(document).ready(function(){$(".ckeditor").length>0&&tinymce.init({selector:".ckeditor",theme:"modern",height:300,plugins:["advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker","searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking","save table contextmenu directionality emoticons template paste textcolor"],toolbar:"insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons",style_formats:[{title:"Bold text",inline:"b"},{title:"Red text",inline:"span",styles:{color:"#ff0000"}},{title:"Red header",block:"h1",styles:{color:"#ff0000"}},{title:"Example 1",inline:"span",classes:"example1"},{title:"Example 2",inline:"span",classes:"example2"},{title:"Table styles"},{title:"Table row 1",selector:"tr",classes:"tablerow1"}]}),$("form").parsley()})</script><script src="<?php echo base_url(); ?>backendAssets/plugins/fileuploads/js/dropify.min.js"></script><script type="text/javascript">$(".dropify").dropify({messages:{default:"Drag and drop a file here or click",replace:"Drag and drop or click to replace",remove:"Remove",error:"Ooops, something wrong appended."},error:{fileSize:"The file size is too big (1M max)."}})</script><script type="text/javascript">$("#isOnHomePage").click(function(){$("#isOnHomePage").is(":checked")?$("#isOnHomePage_old").val(1):$("#isOnHomePage_old").val(0)})</script><script type="text/javascript"></script>