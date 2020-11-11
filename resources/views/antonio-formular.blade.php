<form method="POST" action="\poruke\spremi" enctype="multipart/form-data">
    @csrf
    <input type="text" name="ime">
    <input type="text" name="poruka">
    <input type="text" name="sifra">
    <input type="submit">
</form>