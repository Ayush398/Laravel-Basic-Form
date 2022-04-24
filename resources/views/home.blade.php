<h1>Basic Form</h1>

<form action="users" method="POST">
    @csrf
    <input type="text" name="username" placeholder="Enter Your Name" /> <br><br>
    <input type="text" name="email" placeholder="Enter Your Email Address" /> <br><br>
    <input type="password" name="password" placeholder="Enter Password" /> <br><br>
    <input type="password" name="password" placeholder="Confirm Password" /> <br><br>
    <button type="submit">SUBMIT</button>
</form>