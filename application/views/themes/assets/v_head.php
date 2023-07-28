<?php
if(isset($ASSETS)){
	if(in_array('jquery',$ASSETS)){
	?>
		<!-- jQuery -->
		<script type="text/javascript" src="{BASE_URL}themes/assets/jquery/jquery-3.4.1.min.js"></script>
		<!-- jQuery Migrate -->
		<script type="text/javascript" src="{BASE_URL}themes/assets/jquery/jquery-migrate-3.1.0.min.js"></script>
	<?php
	}
	
	if(in_array('font_awesome',$ASSETS)){
	?>
		<!-- Font Awesome -->
		<link rel="stylesheet" type="text/css" href="{BASE_URL}themes/assets/font_awesome/css/font-awesome.min.css">
	<?php
	}

	if(in_array('bootstrap',$ASSETS)){
	?>
		<!-- Bootstrap -->
		<link rel="stylesheet" type="text/css" href="{BASE_URL}themes/assets/bootstrap/css/bootstrap.min.css">
	<?php
	}

	if(in_array('datatables',$ASSETS)){
	?>
		<!-- DataTables -->
		<!-- <link rel="stylesheet" type="text/css" href="{BASE_URL}themes/assets/datatables/media/css/jquery.dataTables.min.css"> -->
		<link rel="stylesheet" type="text/css" href="{BASE_URL}themes/assets/datatables/media/css/dataTables.bootstrap4.css">
		<link rel="stylesheet" type="text/css" href="{BASE_URL}themes/assets/datatables/extensions/Responsive/css/responsive.dataTables.min.css">
		<link rel="stylesheet" type="text/css" href="{BASE_URL}themes/assets/datatables/extensions/Buttons/css/buttons.dataTables.min.css">
		<!-- <link rel="stylesheet" type="text/css" href="{BASE_URL}themes/assets/datatables/extensions/Buttons/css/buttons.bootstrap4.min.css"> -->
	<?php
	}

	if(in_array('venobox',$ASSETS)){
	?>
		<!-- Venobox -->
		<link rel="stylesheet" type="text/css" media="screen" href="{BASE_URL}themes/assets/venobox/venobox.css">
	<?php
	}

	if(in_array('datepicker',$ASSETS)){
	?>
		<!-- Date Picker -->
		<link rel="stylesheet" type="text/css" href="{BASE_URL}themes/assets/datepicker/bootstrap-datepicker3.min.css">
	<?php
	}

	if(in_array('timepicker',$ASSETS)){
	?>
		<!-- Time Picker -->
		<link rel="stylesheet" type="text/css" href="{BASE_URL}themes/assets/timepicker/bootstrap-timepicker.min.css">
	<?php
	}

	if(in_array('datetimepicker',$ASSETS)){
	?>
		<!-- DateTime Picker -->
		<link rel="stylesheet" type="text/css" href="{BASE_URL}themes/assets/datetimepicker/css/icon.css">
		<link rel="stylesheet" type="text/css" href="{BASE_URL}themes/assets/datetimepicker/css/ripples.min.css">
		<link rel="stylesheet" type="text/css" href="{BASE_URL}themes/assets/datetimepicker/css/bootstrap-material-datetimepicker.css">
	<?php
	}

	if(in_array('select2',$ASSETS)){
	?>
		<!-- Select2 -->
		<link rel="stylesheet" type="text/css" href="{BASE_URL}themes/assets/select2/css/select2.min.css">
		<link rel="stylesheet" type="text/css" href="{BASE_URL}themes/assets/select2/select2-bootstrap.css">
	<?php
	}

	if(in_array('dropzonejs',$ASSETS)){
	?>
		<!-- Dropzonejs -->
		<link rel="stylesheet" type="text/css" href="{BASE_URL}themes/assets/dropzonejs/min/dropzone.min.css">
		<!-- Dropzonejs -->
		<script type="text/javascript" src="{BASE_URL}themes/assets/dropzonejs/min/dropzone.min.js"></script>
		<!-- <script>
			Dropzone.options.fileupload = {
				acceptedFiles: "application/pdf",
				maxFilesize: 20,
				maxFiles: 10,
				parallelUploads: 10,
				addRemoveLinks: true,
				autoProcessQueue: false,
				init: function()
				{
					var submitButton = document.querySelector("#start_upload")
					myDropzone = this;
					submitButton.addEventListener("click", function()
					{
						myDropzone.processQueue();
					});
				}
			};
			$("#clear").click(function()
			{
				Dropzone.forElement("#fileupload").removeAllFiles(true);
			});
		</script> -->
	<?php
	}

	if(in_array('captcha',$ASSETS)){
	?>
		<!-- Captcha -->
		<link rel="stylesheet" type="text/css" href="{BASE_URL}themes/assets/captcha/captcha.css">
	<?php
	}

	if(in_array('g-recaptcha',$ASSETS)){
		?>
			<!-- Captcha -->
			<script src="https://www.google.com/recaptcha/api.js"></script>
		<?php
		}

	if(in_array('modal_detail',$ASSETS)){
	?>
		<script type="text/javascript">
			function modal_detail(html="",id){
				$.ajax({
					type: "POST",
					url: "{BASE_URL}api/html/"+html,
					data: {id:id},
					success: function(result){
						$(".modal_detail").html('Loading ...');
						$("#modal_detail").modal("show");
						$(".modal_detail").html(result);
						$(".select2").select2({
							theme: "bootstrap",
							width: "100%"
						});
						$('.datepicker').bootstrapMaterialDatePicker
						({
							time: false,
							//clearButton: true,
							format: 'DD-MM-YYYY',
							//minDate : new Date(),
						});
					}
				});
			}
		</script>
	<?php
	}

	if(in_array('form_event',$ASSETS)){
	?>
		<script type="text/javascript">
			function select_list(html="",to,id,val=""){
				$.ajax({
					type: "POST",
					url: "{BASE_URL}api/html/"+html,
					data: {id:id,val:val},
					success: function(result){
						//$("#"+to).val(null).trigger("change");
						console.log('aaaaaaaaaa');
						$("#"+to).html(result);
					}
				});
			}

			function unique(html="",id,val){
				$.ajax({
					type: "POST",
					url: "{BASE_URL}api/html/"+html,
					data: {val:val},
					success: function(result){  
						$("#"+id+"_message").html(result);
					}
				});
			}

			function input_confirm(id,value,id_parent){
				var parent = document.getElementById(id_parent).value;
				if(parent!=value){
					$('#'+id+'_message').html('<i style="color: red;">'+id_parent+' is not the same !</i>');
					document.getElementById(id).value = '';
				}
				else{
					$('#'+id+'_message').html('');
				}
			}

			function change(form,i,j){
				var input1 = document.getElementById("input_"+i+"_"+j);
				var input2 = document.getElementById("input_"+j+"_"+i);
				var hasil = 1/input1.value
				input2.value = hasil.toFixed(3)
			}

			/* function print_call(id) {
				var printContents = document.getElementById(id).innerHTML;
				var originalContents = document.body.innerHTML;
				document.body.innerHTML = "<html><head><title>Print</title><style>.box.box-solid.box-primary{border: 0px solid #3c8dbc;}table th, table td {font-size:12px;}</style></head><body>" + printContents + "</b" + "<body>";
				window.print();
				document.body.innerHTML = originalContents;
			} */

			function print_call(id) {
				var css = '@page { size: landscape; margin: 0; }',
					head = document.head || document.getElementsByTagName('head')[0],
					style = document.createElement('style');

				style.type = 'text/css';
				style.media = 'print';

				if (style.styleSheet){
				style.styleSheet.cssText = css;
				} else {
				style.appendChild(document.createTextNode(css));
				}

				head.appendChild(style);

				var printContents = document.getElementById(id).innerHTML;
				var originalContents = document.body.innerHTML;
				document.body.innerHTML = printContents;
				window.print();
				document.body.innerHTML = originalContents;
			}

			function navigate(id) {
				console.log(id)
				$(".page").hide();
				$('#p'+id).show();
			}

			function listing_input(id){
				console.log('Listing Input');
				if ($("#"+id).prop('checked')) {
					$("#input_list").append('<input type="hidden" class="form-control" name="listing_input[]" id="li_'+id+'" value="'+id+'" required>');
				}
				else{
					delete_input(id);
				}
			}

			function delete_input(id){
				console.log('Delete Input');
				$("#li_"+id).remove();
			}

			function refund_pay(val){
				var total = $("#total_harga").val();
				var refund = parseFloat(val.replace(',',''))-parseFloat(total.replace(',',''));
				$("#kembali").val(refund.format());
			}

			function pilih(id,i) {
				$("#show_menu_"+i).html('<input type="hidden" id="id_menu_'+i+'" name="id_menu[]" value="'+id+'">');
				$("#plusminus_"+i).show();
				$("#pilih_"+i).hide();
				var count_menu = parseFloat($("#count_menu").val());
				count_menu++;
				$("#count_menu").val(count_menu);
				$("#count_order").html(count_menu);
			}

			function plus(id) {
				console.log('Plus :: ',id);
				var qty = parseFloat($("#qty_"+id).val());
				qty++;
				$("#qty_"+id).val(qty);
				console.log('Qty :: ',qty);
				grand_total(id);
			}

			function minus(id) {
				console.log('Minus :: ',id);
				var qty = parseFloat($("#qty_"+id).val());
				if(qty!=1){
					qty--;
					$("#qty_"+id).val(qty);
					//$("#minus_"+id).attr("disabled", false);
				}
				else{
					//$("#minus_"+id).attr("disabled", true);
					$("#plusminus_"+id).hide();
					$("#pilih_"+id).show();

					var count_menu = parseFloat($("#count_menu").val());
					count_menu--;
					$("#count_menu").val(count_menu);
					$("#count_order").html(count_menu);
				}
				grand_total(id);
				console.log('Qty :: ',qty);
			}

			/* function grand_total(id){
				var harga = parseFloat($("#harga_"+id).val());
				var qty = parseFloat($("#qty_"+id).val());
				var total = harga*qty;
				$("#total_"+id).html(total.format());
			} */

			function sub_total(id){
				var price = $("#price"+id).val().replace(/[^0-9.-]+/g,"");
				// var discount = $("#discount"+id).val().replace(/[^0-9.-]+/g,"");
				var qty = $("#qty"+id).val();

				// var sub_total = (parseFloat(price)*parseFloat(qty))-parseFloat(discount);
				var sub_total = parseFloat(price)*parseFloat(qty);
				$("#sub_total"+id).val(sub_total.format());

				console.log('price :: ', price);
				// console.log('discount :: ', discount);
				console.log('sub_total :: ', sub_total);
				grand_total();
			}

			function grand_total(){
				var grand_total = 0;
				$('.sub_total').each(function(){
					grand_total += parseFloat(this.value.replace(/[^0-9.-]+/g,""));
				});

				// var tax = $("#pajak").val().replace(/[^0-9.-]+/g,"");
				// var ongkir = $("#ongkos_kirim").val().replace(/[^0-9.-]+/g,"");
				// grand_total = grand_total+parseFloat(tax)+parseFloat(ongkir);
				
				$("#grand_total").val(grand_total.format());
				$("#show-grand_total").html(grand_total.format());
			}

			Number.prototype.format = function(n, x) {
				var re = '\\d(?=(\\d{' + (x || 3) + '})+' + (n > 0 ? '\\.' : '$') + ')';
				return this.toFixed(Math.max(0, ~~n)).replace(new RegExp(re, 'g'), '$&,');
			};
		</script>
	<?php
	}

	if(in_array('api',$ASSETS)){
	?>
		<script type="text/javascript">
			/* function html(html="",to,data){
				$.ajax({
					type: "POST",
					url: "{BASE_URL}api/html/"+html,
					data: data,
					success: function(result){
						$("#"+to).html(result);
						$(".select2").select2({
							theme: "bootstrap",
							width: "100%"
						});
						$('.currency').simpleMoneyFormat();
					}
				});
			} */

			function html(html="",to,data){
				$.ajax({
					type: "POST",
					url: "{BASE_URL}api/html/"+html,
					data: data,
					success: function(result){
						$("#"+to).val(result);
						$(".select2").select2({
							theme: "bootstrap",
							width: "100%"
						});
						$('.currency').simpleMoneyFormat();
					}
				});
			}

			function input_value(html="",to,data){
				$.ajax({
					type: "POST",
					url: "{BASE_URL}api/html/"+html,
					data: data,
					success: function(result){
						var data = JSON.parse(result);
						console.log('Result :: ',result);
						var total = parseFloat(data.price);
						$("#"+to).val(total.format());
						$(".select2").select2({
							theme: "bootstrap",
							width: "100%"
						});
					}
				});
			}

			function append(html="",to,data){
				$.ajax({
					type: "POST",
					url: "{BASE_URL}api/html/"+html,
					data: data,
					success: function(result){
						$("#"+to).append(result);
						$(".select2").select2({
							theme: "bootstrap",
							width: "100%"
						});
					}
				});
			}

			/* function after(html="",to,data){
				$.ajax({
					type: "POST",
					url: "{BASE_URL}api/html/"+html,
					data: data,
					success: function(result){
						var after = '<div class="'+to+'">'+result+'</div>';
						$('body').find('.'+to+':last').after(after);
						$(".select2").select2({
							theme: "bootstrap",
							width: "100%"
						});
					}
				});
			} */

			function after(html="",to){
				var no = parseInt($("#no").val());
				$.ajax({
					type: "POST",
					url: "{BASE_URL}api/html/"+html,
					data: {no:no},
					success: function(result){
						$("#no").val(no+1);
						var after = '<tr class="'+to+'">'+result+'</tr>';
						$('body').find('.'+to+':last').after(after);
						$(".select2").select2({
							theme: "bootstrap",
							width: "100%"
						});
						$('.currency').simpleMoneyFormat();
					}
				});
			}
		</script>
	<?php
	}

	if(in_array('disable_event',$ASSETS)){
	?>
		<script type="text/javascript">
			/* Disable Right Click Mouse */
			document.addEventListener("contextmenu", function(e){
				e.preventDefault();
			}, false);

			/* Disable Keyboard Shortcut, View Source dll */
			window.addEventListener("keydown",function(e){
				if(e.ctrlKey && (e.which==65||e.which==66||e.which==67||e.which==73||e.which==80||e.which==83||e.which==85||e.which==86)){
					e.preventDefault();
				}
			});
			document.keypress = function(e){
				if(e.ctrlKey && (e.which==65||e.which==66||e.which==67||e.which==73||e.which==80||e.which==83||e.which==85||e.which==86)){

				}
				return false
			}
			/* Protect The Article */
			document.onkeydown = function(e){
				e=e||window.event;
				if(e.keyCode==123||e.keyCode==18){
					return false;
				}
			}

			/* Disable Selection, Block Text */
			function disableSelection(e){
				if(typeof e.onselectstart!="undefined"){
					e.onselectstart=function(){
						return false;
					};
				}
				else if(typeof e.style.MozUserSelect!="undefined"){
					e.style.MozUserSelect="none";
				}
				else{
					e.onmousedown=function(){
						return false;
					};
				}
					
				e.style.cursor="default"
			}
			window.onload=function(){
				disableSelection(document.body)
			}
		</script>
	<?php
	}

	if(in_array('addrow',$ASSETS)){
	?>
		<script type="text/javascript">
			$(document).ready(function(){
				//group add limit
				var maxGroup = 10;
				
				//add more fields group
				$(".addMore").click(function(){
					if($('body').find('.fieldGroup').length < maxGroup){
						var fieldHTML = '<div class="fieldGroup">'+$(".fieldGroupCopy").html()+'</div>';
						$('body').find('.fieldGroup:last').after(fieldHTML);
					}
					else{
						alert('Maximum '+maxGroup+' groups are allowed.');
					}
				});
				
				//remove fields group
				$("body").on("click",".remove",function(){ 
					$(this).parents(".fieldGroup").remove();
				});
			});
		</script>
	<?php
	}

	if(in_array('countdown',$ASSETS)){
	?>
		<script type="text/javascript">
			function countdown(date){
				
				var deadline = new Date(date).getTime();  
				var x = setInterval(function() { 
					var now = new Date().getTime(); 
					var t = deadline - now; 
					var days = Math.floor(t / (1000 * 60 * 60 * 24)); 
					var hours = Math.floor((t%(1000 * 60 * 60 * 24))/(1000 * 60 * 60)); 
					var minutes = Math.floor((t % (1000 * 60 * 60)) / (1000 * 60)); 
					var seconds = Math.floor((t % (1000 * 60)) / 1000); 
					document.getElementById("countdown").innerHTML = hours + "h " + minutes + "m " + seconds + "s "; 
					if (t < 0) { 
						clearInterval(x); 
						document.getElementById("countdown").innerHTML = "EXPIRED"; 
						$('.soal').attr('readonly', true);
						$('.soal').attr('required', false);
						$(':radio:not(:checked)').attr('disabled', true);
					} 
				}, 1000); 
			}
		</script>
	<?php
	}

	if(in_array('chat',$ASSETS)){
	?>
		<link type="text/css" rel="stylesheet" media="all" href="{BASE_URL}themes/assets/chat/css/chat.css">
	<?php
	}
}
?>

<style>
.center{
	text-align: center;
}
::-webkit-scrollbar {
	width: 5px;
}
::-webkit-scrollbar-track {
	-webkit-box-shadow: inset 0 0 3px rgba(0,0,0,0.3);
	border-radius: 10px;
}
::-webkit-scrollbar-thumb {
	border-radius: 10px;
	-webkit-box-shadow: inset 0 0 3px rgba(0,0,0,0.5);
}
</style>