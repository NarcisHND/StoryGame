<div class="row mt-5">
    <div class="col-4 ">
        <h2>Edit Your Hero:</h2>
        <form action="" method="post">
            <div class="form-floating mb-3">
                <input class="form-control" type="text" id="nameHero" placeholder="Insert name Hero" name="nameHeroEdit">
                <label for="nameHero">Insert Name Hero</label>
            </div>
            <div class="form-floating mb-3">
                <input class="form-control" type="number" id="healthHero" placeholder="Insert Health Hero" name="helthHeroEdit">
                <label for="healthHero">Insert Health Hero</label>
            </div>
            <div class="form-floating mb-3">
                <input class="form-control" type="number" id="strengthHero" placeholder="Insert Strength Hero" name="strengthHeroEdit">
                <label for="strengthHero">Insert Strength Hero</label>
            </div>
            <div class="form-floating mb-3">
                <input class="form-control" type="number" id="defenceHero" placeholder="Insert Defence Hero" name="defenceHeroEdit">
                <label for="defenceHero">Insert Defence Hero</label>
            </div>
            <div class="form-floating mb-3">
                <input class="form-control" type="number" id="speedHero" placeholder="Insert Speed Hero" name="speedHeroEdit">
                <label for="speedHero">Insert Speed Hero</label>
            </div>
            <div class="form-floating mb-3">
                <input class="form-control" type="number" id="luckHero" placeholder="Insert Luck Hero" name="luckHeroEdit">
                <label for="luckHero">Insert Luck Hero</label>
            </div>
            <input class="btn btn-primary form-control" type="submit" name="submitHero" id="" value="Insert">
        </form>
    </div>
    <div class="col-8">
        <h3>Details about the battle:</h3>
        <div class="container form-control">

            <?php
            if ($_SESSION['resultRounds']) {
                foreach ($_SESSION['resultRounds'] as $value) {
                    echo "<h5 class='text-danger'>$value</h5>" . "<br>";
                }
            } else {
                echo "<h5>No Results!</h5>";
            }
            ?>

        </div>
    </div>
</div>