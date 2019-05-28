<?php include 'includes/header.php'; ?>
            
        <header>
            <form class="findDriver" action="" method="">
                <h1>Self Traveling</h1>
                <fieldset>
                    <div class="row">
                        <div class="col">
                            <label for="where">Where</label>
                            <input id="where" type="text" class="form-control" placeholder="Anywhere">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="check-in">Check-In</label>
                            <input id="check-in" type="text" class="form-control" placeholder="mm/dd/yyyy">
                        </div>
                        <div class="col">
                            <label for="check-out">Check-Out</label>
                            <input id="check-out" type="text" class="form-control" placeholder="mm/dd/yyyy">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="guest">Guests</label> <br>
                            <select class="form-control">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                            </select>
                        </div>
                    </div>
                    
                    <button class="btn btn-outline-success my-2 my-sm-0 float-right" type="submit">Search</button>

                </fieldset>
            </form>
        </header>

        <main>
            <section>
                <h2>Explore ....</h2>
                <p>items'photo ...... </p>
            </section>
        </main>

        <script>
                $( function() {
                    $("#check-in").datepicker();
                    $("#check-out").datepicker();
                });
            </script>
<?php include 'includes/footer.php'; ?>