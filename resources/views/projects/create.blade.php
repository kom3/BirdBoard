<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Birdboard</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.css">
</head>

<body>

    <form method="POST" action="/projects" class="container" style="padding-top: 40px;">
        @csrf
        <h1 class="heading is-1">Create a project</h1>
        <div class="field">
            <label for="title" class="label">Title</label>

            <div class="control">
                <input type="text" class="input" name="title" placeholder="Title">
            </div>
        </div>
        <div class="field">
            <label for="title" class="label">Description</label>

            <div class="control">
                <textarea name="description" id="description" cols="30" rows="10" class="textarea"></textarea>
            </div>
        </div>
        <div class="field">
            <div class="control">
                <button class="button is-link" type="submit">Create Project</button>
            </div>
        </div>
    </form>
</body>

</html>
