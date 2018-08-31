<div class="container navigacija">
    <nav class="navbar navbar-expand-md navbar-dark bg-primary sticky-top py-2">
        <div class="container">
            <a class="navbar-brand" href="."><?php echo isset($navbarTitle)&&!empty($navbarTitle) ? $navbarTitle : "Naslov navigacijske trake"; ?></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href=".">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact">Kontakt</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./admin">Admin</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>