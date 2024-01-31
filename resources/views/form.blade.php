<h1>user login</h1>
<form action="login" method="GET">
    @csrf
    <input type="text" name="user" id="user" placeholder="enter username"><br><br>
    <input type="password" name="pass" placeholder="enter password"><br><br>
    <input type="submit" >
</form>