<html>
    <head>

    </head>
    <body>
        <nav>
            <h3>Welcome to my website</h3>
        <hr>
        </nav>

        <form action="/register" method="POST">
            <div class="forms-grouping">
                @csrf

                <label for="name">Name: </label><br>
                <input type="text" id="name" name="name"><br>

                <label for="password">Password: </label><br>
                <input type="password" id="password" name="password"><br>

                <label for="email">Email: </label><br>
                <input type="email" id="email" name="email"><br>

                <label for="phoneNum">Phone number: </label><br>
                <input type="tel" id="phoneNum" name="phoneNumber"><br>

                <button type="submit">Submit</button>

            </div>

        </form>

<footer>
    <hr />
    © 2023 Group 5
</footer>
</body>
</html>
