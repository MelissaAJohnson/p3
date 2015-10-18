<!DOCTYPE html>
<html>
    <head>
        <title>Developer Tools</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            h1 {
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

            
        </style>
    </head>
    <body>
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
                    <form method="POST">
                        Number of paragraphs&nbsp;
                        <select>
                            <option value=1 selected>1</option>
                            <option value=2>2</option>
                            <option value=3>3</option>
                            <option value=4>4</option>
                            <option value-5>5</option>
                        </select><br /><br />
                        <input type="submit" value = "Get Text">
                    </form>
                </p>
                <h1>Random User Generator</h1>
                <br>
            </div>
        </div>
    </body>
</html>
