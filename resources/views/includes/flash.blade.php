@if (session()->has('flash_message'))
	<script>
		swal({
			title: "{{ session('flash_message.title') }}",
			text: "{{ session('flash_message.message') }}",
			type: "{{ session('flash_message.level') }}",
			timer: "{{ session('flash_message.time') }}",
			showconfirmButton: false
		});
	</script>
@endif

@if (session()->has('flash_message_overlay'))
	<script>
		swal({
			title: "{{ session('flash_message_overlay.title') }}",
			text: "{{ session('flash_message_overlay.message') }}",
			type: "{{ session('flash_message_overlay.level') }}",
			timer: "{{ session('flash_message_overlay.time') }}",
			confirmButtonText: 'Ok'
		});
	</script>
@endif

