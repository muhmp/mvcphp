<div class="container mt-5">
    <div class="row">
        <div class="col-6">
            <h3>Student info</h3>
            <?php foreach ($data['student'] as $student) : ?>
                <ul>
                    <li><?= $student["name"]; ?></li>
                    <li><?= $student["ID"]; ?></li>
                    <li><?= $student["email"]; ?></li>
                    <li><?= $student["occupation"]; ?></li>
                </ul>
            <?php endforeach; ?>
        </div>
    </div>

</div>