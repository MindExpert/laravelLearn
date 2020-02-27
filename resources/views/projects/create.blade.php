<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects</title>
</head>
<body>
    <h1>Create Project</h1>
  <div>
    <form action="/projects" method="POST">
        {{ csrf_field() }}
        <div>
            <input type="text" name="title" placeholder="Project Titlle">
        </div>
        <div>
            <textarea name="description" cols="21" rows="5" placeholder="Description"></textarea>
        </div>
        <div>
            <button type="submit">Submit Form</button>
        </div>
    </form>
  </div>
</body>
</html>