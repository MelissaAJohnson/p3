@extends('layouts.master')


@section('title')
    Random User
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
	<h1>Results - Random Users</h1>
	<div class='container'>
		<div class='scrollbox'>   
            <?php 
                if (isset($users))
                    foreach($users as $user) {
                        echo "<b>" . $user['name'] . "</b><br>";
                        if (isset($user['username']))
                        	echo ("Username: ");
                        	echo $user['username']."<br>";
                        if (isset($user['email']))
                        	echo ("Email: ");
                        	echo $user['email'] . "<br>";
                        echo "<hr>";
                    }
            ?>
		</div>
	</div>
@stop


{{--
This `body` section will be yielded right before the closing </body> tag.
Use it to add specific things that *this* View needs at the end of the body,
such as a page specific JavaScript files.
--}}
@section('body')

@stop