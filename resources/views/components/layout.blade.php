<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta
            http-equiv="X-UA-Compatible"
            content="IE=edge"
        />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1.0"
        />
        <title>Code Test</title>
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        >
    </head>

    <body id="home">

        {{ $slot }}

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
            crossorigin="anonymous"
        ></script>
        {{-- ckeditor --}}
        <script src="https://cdn.ckbox.io/CKBox/2.1.0/ckbox.js"></script>
        <script src="/ckeditor/ckeditor.js"></script>
        <script src="configuration-dialog/configuration-dialog.js"></script>
        <script src="script.js"></script>
    </body>

</html>
