<!doctype html>
<html>
<head>
    <title>
        {{-- Yield the title if it exists, otherwise default to Developer's Best Friend --}}
        @yield('title', "Developer's Best Friend")
    </title>

    <meta charset='utf-8'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

    <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 10px;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
                text-align: center;
            }

            footer {
            	text-align: center;
            	padding-bottom: 20px;
            }

            h1 {
                text-align: center;
                font-size: 48px;
                font-weight: bold;
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                display: inline-block;
            }

            .title {
                text-align: center;
                font-size: 96px;
            }

            .scrollbox {
                border: dashed;
                border-width: 1px;
                padding-left: 10px;
                padding-right: 10px;
                padding-top: 10px;
                padding-bottom: 10px;
                text-align:left;
                font-size: 14px;
                overflow: auto; 
                width: 75%; 
                height: 200px;
                display: inline-block;
            }

            .btn {
                display: inline-block;
                padding: 6px 12px;
                margin-bottom: 0;
                font-size: 14px;
                font-weight: normal;
                line-height: 1.428571429;
                text-align: center;
                white-space: nowrap;
                vertical-align: middle;
                cursor: pointer;
                background-image: none;
                border: 1px solid transparent;
                border-radius: 4px;
            }

            .btn-warning {
                color: #fff;
                background-color: #f26037;
                border-color: #f26013;
            }


        </style>

    {{-- Yield any page specific CSS files or anything else you might want in the <head> --}}
    @yield('head')

</head>
<body>

    <header>
        <a style="text-decoration: none; text-align: left; display: block;" href="http://mjproductions.biz"><- Back to project listing</a>
 		<div class="container">
 			<div class="content">
        		<img src="/img/geek_thumbnail.jpg">&nbsp;&nbsp;
            	<div class="title">Developer's Best Friend</div>
            	<p>Ever needed random paragraphs of text to assist with designing your site?</p>
            	<p>Ever wish you didn't have to think of random user attributes to test various user permissions?</p>
            	<p>You've come to the right spot. This page delivers easy-to-use and flexible tools to help with these common developer needs.</p>
            	<h1>Random Text Generator</h1>
            	<p>This first tool is a lorem ipsum generator. In case you're not familiar with this, lorem ipsum is a series of characters and white spaces used to graphically illustrate elements of a document. Developers generally use these generators to ensure that their pages work with what ever text is dynamically added to a page.</p>
            	<p>
                	<form method="POST" action='/text'>
            	    	<input type="hidden" value="{{ csrf_token() }}" name="_token">
             			Number of paragraphs&nbsp;
                    	
                        <input type="text" name="numberParagraphs" value =
                            <?php
                                echo isset($_POST['numberParagraphs']) ? $_POST['numberParagraphs'] : ''
                            ?>
                        >
                        <br /><br />
                    	<input class = "btn btn-warning" type="submit" value = "Get Text">
                	</form>
            	</p>
            	<h1>Random User Generator</h1>
            	<p>Many applications provide various permission levels. When testing out the permissioning levels of these sites, it can add a lot of cognitive overhead to develop unique user profiles. Default setting of this tool provides random information for the most common user attributes.</p>
            	<p>
            		<form method="POST" action='/user'>
            			<input type="hidden" value="{{ csrf_token() }}" name="_token">
            			Number of users&nbsp;
            			<input type="text" name="numberUsers" value =
                            <?php 
                                echo isset($_POST['numberUsers']) ? $_POST['numberUsers'] : '' 
                            ?>
                        >

                        <br><br />
                        Options:<br />
                        <input type="checkbox" name="wantsEmail"
                            <?php
                                if (isset($_POST["wantsEmail"]))
                                    echo "checked";
                            ?>
                        > Include email address
                        <br /><br />
                    	<input class = "btn btn-warning" type="submit" value = "Get Users">
                	</form>
            	<br>
            </div>
        </div>
    </header>

    <section>
        {{-- Main page content will be yielded here --}}
        @yield('content')
    </section>

    <footer>
        <br /><br />
        &copy; {{ date('Y') }} MJ Productions | Contact me melissajohnson at g.harvard.edu
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

    {{-- Yield any page specific JS files or anything else you might want at the end of the body --}}
    @yield('body')

</body>
</html>