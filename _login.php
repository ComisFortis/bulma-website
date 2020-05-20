    <!-- head --------------------------------------------------------------- -->
    <?php require_once "./ini.sys/_head.php"; ?>

    <div class="container">
        <div class="field">
            <p class="control has-icons-left has-icons-right">
                <input class="input" type="email" placeholder="Email">
                <span class="icon is-small is-left">
                    <i class="fas fa-envelope"></i>
                </span>
                <span class="icon is-small is-right">
                    <i class="fas fa-check"></i>
                </span>
            </p>
        </div>
        <div class="field">
            <p class="control has-icons-left">
                <input class="input" type="password" placeholder="Password">
                <span class="icon is-small is-left">
                    <i class="fas fa-lock"></i>
                </span>
            </p>
        </div>


        <div class="field is-grouped">
            <div class="control">
                <a class="button is-light" href="../index.php">
                    logIn
                </a>
            </div>
            <div class="control">
                <a class="button is-light" href="./index.php">
                    cancel
                </a>
            </div>
        </div>
    </div>
    <!-- script ------------------------------------------------------------- -->
    <?php require_once "./ini.sys/_footer.php"; ?>