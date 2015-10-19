@extends('layouts.master')


@section('title')
    Random Text
@stop


{{--
This `head` section will be yielded right before the closing </head> tag.
Use it to add specific things that *this* View needs in the head,
such as a page specific styesheets.
--}}
@section('head')

@stop


@section('content')
	<hr>
	<h1>Results - Random Text</h1>

	<div class='scrollbox'>   
	    <?php
	        if (isset($paragraphs))
	            foreach ($paragraphs as $paragraph)
	            echo $paragraph . "<br><br>";
	    ?>
	</div>

@stop


{{--
This `body` section will be yielded right before the closing </body> tag.
Use it to add specific things that *this* View needs at the end of the body,
such as a page specific JavaScript files.
--}}
@section('body')

@stop