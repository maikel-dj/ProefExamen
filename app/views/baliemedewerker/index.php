<title><?= $data["title"]?></title>
<h1>Baliemedewerker informatie</h1>

<body>
    <div class="row">
        <div class="col-12">
            <div class="col-12">
                <!--Op dzez plek komt de tabel -->
                <table class=" table">
                    <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">Voornaam</th>
                            <th scope="col">Achternaam</th>
                            <th scope="col">Email</th>
                            <th scope="col">Class</th>
                            <th scope="col">Update</th>
                            <th scope="col">Delete</th>
                        </tr>
                        </tr>
                    </thead>
                    <tbody>
                        <?=$data["baliemedewerkerData"];?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>