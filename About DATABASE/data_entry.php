<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>data entry</title>
</head>
<body>
    <form action="" method="POST">
        <fieldset class="fieldset">
  <legend class="fieldset-legend">What is your name?</legend>
  <input type="text" class="input" placeholder="Type here" name="userName"/>
  <p class="label">Optional</p>
</fieldset>
        <fieldset class="fieldset">
  <legend class="fieldset-legend">What is your age?</legend>
  <input type="text" class="input" placeholder="Type here" name="userage"/>
  <p class="label">Optional</p>
</fieldset>
<input type="submit" value="Save" name="save">
    </form>
</body>
</html>