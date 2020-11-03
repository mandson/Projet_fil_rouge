<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Notification Nouveau compte</title>
</head>
<body>

	@if (session()->has('text'))
	<p>{{ session('text') }}</p>
	@endif

	<form url="{{ route('email.compte.active') }}" method="POST" >
		<label for="message" >Message</label>
		{{ @csrf_field() }}
		<p>
			<textarea  name="message" id="message" rows="4" placeholder="Message à envoyer ici" ></textarea>
			{{ $errors->first('message', ":message")}}
		</p>
		<button type="submit" >Envoyer</button>
	</form>

</body>
</html>
