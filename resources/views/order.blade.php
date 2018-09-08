@extends('layouts.master')


@section('content')
    <p class='text-center mt-5 text-dark'>
    You have placed your order.<br>
    We will contact you at  {{Auth::user()->phone}}.<br>
    </p>
@endsection



@section('scripts')
<script type = "text/javascript">
	$('footer').addClass('fixed-bottom');
</script>
@endsection