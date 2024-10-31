<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap');

    * {
        margin: 0;
        padding: 0;
        font-family: "Open Sans", sans-serif;
    }


    body {
        width: 100vw;
        height: 100vh;
    }

    .container {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh;
        flex-direction: column;
    }

    .buttons {
        width: 7vw;
        height: 4vh;
        background-color: #9a9da0;
        border-radius: 5px;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;

    }

    .buttons a {
        text-decoration: none;
        color: #333333;
    }

    .nav {
        display: flex;
        gap: 3vw;
        width: 50vw;
        display: flex;
        justify-content: space-around;
    }
</style>

<body>

    <section class="container">
        <div class="nav">
            <div class="buttons">
                <a href="/list">Spaces</a>
            </div>
            <div class="buttons">
                <a href="/list">Customers</a>
            </div>
            <div class="buttons">
                <a href="/list">Rentals</a>
            </div>
            <div class="buttons">
                <a href="/list">Relation</a>
            </div>

        </div>

        <div>
            <img src="https://img.freepik.com/free-vector/app-data-concept-illustration_114360-7834.jpg" alt="">
        </div>

    </section>


</body>

</html>