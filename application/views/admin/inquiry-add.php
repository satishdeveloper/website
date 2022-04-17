<link href="<?php echo base_url(); ?>backendAssets/plugins/fileuploads/css/dropify.min.css"rel="stylesheet"type="text/css"><?php if($this->router->fetch_method()=='view'){ ?><script type="text/javascript">$(document).ready(function(e){$('input[type="password"]').each(function(e,t){$(this).parents(".form-group").hide()}),$('input[type="file"]').each(function(e,t){var r=$(this).parents(".form-group"),i=r.find("img").attr("src");r.find(".fileupload-new").before('<img src="'+i+'">'),r.find(".fileupload-new").remove()}),$("textarea").each(function(e,t){var r=($(this).parents(".form-group"),$(this).val());$(this).before(r),$(this).remove()}),$('input[type="submit"]').each(function(e,t){$(this).parents(".form-group").remove()}),$("form").attr("id",""),$("select").each(function(e,t){var r=$("option:selected",this).text();$(this).before(r),$(this).parents(".form-group").remove()})})</script><style type="text/css">div.content{height:95%!important;overflow-y:scroll!important}.form-control{outline:0!important;border:none!important;-webkit-appearance:none!important}.form-control:focus{outline:0!important;border:none!important;-webkit-appearance:none!important}</style><?php } ?><style type="text/css">div.content{height:95%;overflow-y:scroll}</style><div class="content"><div class="container">
	<form class="form-horizontal"enctype="multipart/form-data"id="blog-form"method="post">
		<div class="row">
			<div class="col-md-12">
				<div class="card-box">
					<div class="box-content"id="AddEdit"><?php  ?>
					<a class="btn btn-primary btn-rounded m-b-5 w-md waves-effect waves-light"href="<?php echo base_url(); ?>myadmin/<?php echo $this->router->fetch_class(); ?>/listview"><i class="ti-back-left"></i><?php echo 'Listview' ?></a><?php  ?>
					<div class="form-group">
					    <div class="form-group">
						<label class="col-lg-2 control-label col-sm-4">Service Type</label>
						<div class="col-md-8">
							<input id="type"name="type"value="<?php if(isset($fetchValue[0]['type'])){echo set_value('type',$fetchValue[0]['type']);} ?>"class="form-control"placeholder="Service Type">
						</div>
					</div>
						<label class="col-lg-2 control-label col-sm-4">Full name</label>
						<div class="col-md-8">
							<input id="full_name"name="full_name"value="<?php if(isset($fetchValue[0]['full_name'])){echo set_value('full_name',$fetchValue[0]['full_name']);} ?>"class="form-control"placeholder="Name">
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-2 control-label col-sm-4">Email</label>
						<div class="col-md-8">
							<input id="email"name="email"value="<?php if(isset($fetchValue[0]['email'])){echo set_value('email',$fetchValue[0]['email']);} ?>"class="form-control"placeholder="Email">
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-2 control-label col-sm-4">Mobile</label>
						<div class="col-md-8">
							<input id="phone"name="phone"value="<?php if(isset($fetchValue[0]['phone'])){echo set_value('phone',$fetchValue[0]['phone']);} ?>"class="form-control"placeholder="Phone">
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-2 control-label col-sm-4">Location From</label>
						<div class="col-md-8">
							<input id="location_from"name="location_from"value="<?php if(isset($fetchValue[0]['location_from'])){echo set_value('location_from',$fetchValue[0]['location_from']);} ?>"class="form-control"placeholder="Location From">
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-2 control-label col-sm-4">Location To</label>
						<div class="col-md-8">
							<input id="location_to"name="location_to"value="<?php if(isset($fetchValue[0]['location_to'])){echo set_value('location_to',$fetchValue[0]['location_to']);} ?>"class="form-control"placeholder="Location To">
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-2 control-label col-sm-4">Service Type</label>
						<div class="col-md-8">
							<input id="type"name="type"value="<?php if(isset($fetchValue[0]['type'])){echo set_value('type',$fetchValue[0]['type']);} ?>"class="form-control"placeholder="Service Type">
						</div>
					</div>
					<?php if($fetchValue[0]['type'] == 'Others Moving'){ ?>
					<div class="form-group">
						<label class="col-lg-2 control-label col-sm-4">Service Name</label>
						<div class="col-md-8">
							<input id="service_name"name="service_name"value="<?php if(isset($fetchValue[0]['service_name'])){echo set_value('service_name',$fetchValue[0]['service_name']);} ?>"class="form-control"placeholder="Service Name">
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-2 control-label col-sm-4">Item Name</label>
						<div class="col-md-8">
							<input id="item_name"name="item_name"value="<?php if(isset($fetchValue[0]['item_name'])){echo set_value('item_name',$fetchValue[0]['item_name']);} ?>"class="form-control"placeholder="Item Name">
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-2 control-label col-sm-4">movers</label>
						<div class="col-md-8">
							<input id="movers"name="movers"value="<?php if(isset($fetchValue[0]['movers'])){echo set_value('movers',$fetchValue[0]['movers']);} ?>"class="form-control"placeholder="Movers">
						</div>
					</div>
					<?php } ?>
					<div class="form-group">
						<label class="col-lg-2 control-label col-sm-4">Date Added</label>
						<div class="col-md-8">
							<input id="dateAdded"name="dateAdded"value="<?php if(isset($fetchValue[0]['dateAdded'])){echo set_value('dateAdded',$fetchValue[0]['dateAdded']);} ?>"class="form-control"placeholder="dateAdded">
						</div>
					</div>
	 
<div class="form-group"><div class="col-lg-10 col-lg-offset-2 col-sm-9 col-sm-offset-3"><input id="btn_submit"name="btn_submit"value="Submit"class="btn btn-primary"type="submit"></div></div></div></div></div></div></form></div></div><script src="<?php echo base_url(); ?>backendAssets/plugins/tinymce/tinymce.min.js"></script><script type="text/javascript">$(document).ready(function(){$(".ckeditor").length>0&&tinymce.init({selector:".ckeditor",theme:"modern",height:300,plugins:["advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker","searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking","save table contextmenu directionality emoticons template paste textcolor"],toolbar:"insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons",style_formats:[{title:"Bold text",inline:"b"},{title:"Red text",inline:"span",styles:{color:"#ff0000"}},{title:"Red header",block:"h1",styles:{color:"#ff0000"}},{title:"Example 1",inline:"span",classes:"example1"},{title:"Example 2",inline:"span",classes:"example2"},{title:"Table styles"},{title:"Table row 1",selector:"tr",classes:"tablerow1"}]}),$("form").parsley()})</script><script src="<?php echo base_url(); ?>backendAssets/plugins/fileuploads/js/dropify.min.js"></script><script type="text/javascript">$(".dropify").dropify({messages:{default:"Drag and drop a file here or click",replace:"Drag and drop or click to replace",remove:"Remove",error:"Ooops, something wrong appended."},error:{fileSize:"The file size is too big (1M max)."}})</script><script type="text/javascript">$("#isOnHomePage").click(function(){$("#isOnHomePage").is(":checked")?$("#isOnHomePage_old").val(1):$("#isOnHomePage_old").val(0)})</script><script type="text/javascript"></script>