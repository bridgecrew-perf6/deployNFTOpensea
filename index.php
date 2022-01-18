<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>kevin Mint nft website</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap Icons-->
    <link href="/css/bootstrap-icons.css" rel="stylesheet" />
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
    <!-- SimpleLightbox plugin CSS-->
    <link href="/css/simpleLightbox.min.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>
<body id="page-top">
<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
    <div class="container px-4 px-lg-5">
        <a class="navbar-brand" href="#page-top">Mint nft</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto my-2 my-lg-0">
                <li class="nav-item"><a class="nav-link" href="#page-top">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                <!--                        <li class="nav-item"><a class="nav-link" href="#portfolio">Portfolio</a></li>-->
                <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- Masthead-->
<header class="masthead">
    <div class="container px-4 px-lg-5">
        <br>
        <div class="row gx-4 gx-lg-5 justify-content-center mb-5">

            <div class="col-lg-6" style="border: 1px solid white;border-radius: 0.25rem;">
                <!--                    <form id="contactForm" data-sb-form-api-token="API_TOKEN">-->
                <!--                        &lt;!&ndash; Name input&ndash;&gt;-->
                <!--                        <div class="form-floating mb-3">-->
                <!--                            <input class="form-control" id="name" type="text" placeholder="Enter your name..." data-sb-validations="required" />-->
                <!--                            <label for="name">Full name</label>-->
                <!--                            <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>-->
                <!--                        </div>-->
                <!--                        &lt;!&ndash; Email address input&ndash;&gt;-->
                <!--                        <div class="form-floating mb-3">-->
                <!--                            <input class="form-control" id="email" type="email" placeholder="name@example.com" data-sb-validations="required,email" />-->
                <!--                            <label for="email">Email address</label>-->
                <!--                            <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>-->
                <!--                            <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>-->
                <!--                        </div>-->
                <!--                        &lt;!&ndash; Submit Button&ndash;&gt;-->
                <!--                        <div class="d-grid"><button class="btn btn-primary btn-xl disabled" id="submitButton" type="submit">Submit</button></div>-->
                <!--                    </form>-->

                <div class="col-lg-12" style="color: white;">
                    <h1 class="text-center">kevin Mint NFT</h1>
                    <h5 class="text-center">
                        Network:
                        <select name="contract">
                            <option value="0xec41019FCD0B84C9db1FBa4c7835c40e0370CcfA">rinkeby</option>
                            <option value="0xec41019FCD0B84C9db1FBa4c7835c40e0370CcfA">ropsten</option>
                            <option value="0xec41019FCD0B84C9db1FBa4c7835c40e0370CcfA">ETH mainnet</option>
                            <option value="0xec41019FCD0B84C9db1FBa4c7835c40e0370CcfA">Solana mainnet</option>
                        </select>
                    </h5>
                    <hr/>
                    <br/>
                </div>

                <h3 style="color: white;">
                    Pre-Sale Mint(<span id="currentTokenId" style="color: orangered;">0</span>/10000)
                </h3>
                <br/>
                <form onSubmit="App.mint(); return false;" role="form">
                    <div class="form-group">
                        <label for="AMOUNT" style="float: left;color: white;">AMOUNT: </label>
                        <input type="number" class="form-control" id="amount" min="1" max="1" placeholder="AMOUNT" value="1">
                    </div>

                    <div class="form-group">
                        <label for="price" style="float: left;color: white;">Total Price(ETH): </label>
                        <input type="text" class="form-control" id="price" placeholder="price" value="0.001">
                    </div>

                    <br>
                    <div class="form-group">
                        <div class="input-group">
                                <span class="input-group-btn">
                                  <button type="submit" name="startMint" class="btn btn-primary btn-lg">Connect a wallet and Mint</button>
                                </span>
                        </div>
                    </div>

                </form>
                <hr>
                <p id="accountAddress" style="color: white;"></p>
                <p style="color: white;"> after you mint,It will display in opensea:
                    <a style="color: white;" href="https://testnets.opensea.io/collection/kevinnft-v3" target="_blank">opensea</a>
                </p>

            </div>
        </div>
    </div>
</header>
<!-- About-->
<section class="page-section bg-primary" id="about">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-lg-8 text-center">
                <h2 class="text-white mt-0">I"m kevin gates java,php,solidity developer</h2>
                <hr class="divider divider-light" />
                <p class="text-white-75 mb-4">Blockchain,Defi,NFT,decentraland</p>
                <a class="btn btn-light btn-xl" href="#services">Get Started!</a>
            </div>
        </div>
    </div>
</section>
<!-- Services-->
<section class="page-section" id="services">
    <div class="container px-4 px-lg-5">
        <h2 class="text-center mt-0">At Your Service</h2>
        <hr class="divider" />
        <div class="row gx-4 gx-lg-5">
            <div class="col-lg-3 col-md-6 text-center">
                <div class="mt-5">
                    <div class="mb-2"><i class="bi-gem fs-1 text-primary"></i></div>
                    <h3 class="h4 mb-2">smart contract deployment</h3>
                    <p class="text-muted mb-0">smart contract deployment</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="mt-5">
                    <div class="mb-2"><i class="bi-laptop fs-1 text-primary"></i></div>
                    <h3 class="h4 mb-2">Artwork generation</h3>
                    <p class="text-muted mb-0">Artwork generation.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="mt-5">
                    <div class="mb-2"><i class="bi-globe fs-1 text-primary"></i></div>
                    <h3 class="h4 mb-2">Write NFT smart contract</h3>
                    <p class="text-muted mb-0">Write NFT smart contract</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="mt-5">
                    <div class="mb-2"><i class="bi-heart fs-1 text-primary"></i></div>
                    <h3 class="h4 mb-2">Mint nft website</h3>
                    <p class="text-muted mb-0">Mint nft website</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Portfolio-->
<!--        <div id="portfolio">-->
<!--            <div class="container-fluid p-0">-->
<!--                <div class="row g-0">-->
<!--                    <div class="col-lg-4 col-sm-6">-->
<!--                        <a class="portfolio-box" href="assets/img/portfolio/fullsize/1.jpg" title="Project Name">-->
<!--                            <img class="img-fluid" src="assets/img/portfolio/thumbnails/1.jpg" alt="..." />-->
<!--                            <div class="portfolio-box-caption">-->
<!--                                <div class="project-category text-white-50">Category</div>-->
<!--                                <div class="project-name">Project Name</div>-->
<!--                            </div>-->
<!--                        </a>-->
<!--                    </div>-->
<!--                    <div class="col-lg-4 col-sm-6">-->
<!--                        <a class="portfolio-box" href="assets/img/portfolio/fullsize/2.jpg" title="Project Name">-->
<!--                            <img class="img-fluid" src="assets/img/portfolio/thumbnails/2.jpg" alt="..." />-->
<!--                            <div class="portfolio-box-caption">-->
<!--                                <div class="project-category text-white-50">Category</div>-->
<!--                                <div class="project-name">Project Name</div>-->
<!--                            </div>-->
<!--                        </a>-->
<!--                    </div>-->
<!--                    <div class="col-lg-4 col-sm-6">-->
<!--                        <a class="portfolio-box" href="assets/img/portfolio/fullsize/3.jpg" title="Project Name">-->
<!--                            <img class="img-fluid" src="assets/img/portfolio/thumbnails/3.jpg" alt="..." />-->
<!--                            <div class="portfolio-box-caption">-->
<!--                                <div class="project-category text-white-50">Category</div>-->
<!--                                <div class="project-name">Project Name</div>-->
<!--                            </div>-->
<!--                        </a>-->
<!--                    </div>-->
<!--                    <div class="col-lg-4 col-sm-6">-->
<!--                        <a class="portfolio-box" href="assets/img/portfolio/fullsize/4.jpg" title="Project Name">-->
<!--                            <img class="img-fluid" src="assets/img/portfolio/thumbnails/4.jpg" alt="..." />-->
<!--                            <div class="portfolio-box-caption">-->
<!--                                <div class="project-category text-white-50">Category</div>-->
<!--                                <div class="project-name">Project Name</div>-->
<!--                            </div>-->
<!--                        </a>-->
<!--                    </div>-->
<!--                    <div class="col-lg-4 col-sm-6">-->
<!--                        <a class="portfolio-box" href="assets/img/portfolio/fullsize/5.jpg" title="Project Name">-->
<!--                            <img class="img-fluid" src="assets/img/portfolio/thumbnails/5.jpg" alt="..." />-->
<!--                            <div class="portfolio-box-caption">-->
<!--                                <div class="project-category text-white-50">Category</div>-->
<!--                                <div class="project-name">Project Name</div>-->
<!--                            </div>-->
<!--                        </a>-->
<!--                    </div>-->
<!--                    <div class="col-lg-4 col-sm-6">-->
<!--                        <a class="portfolio-box" href="assets/img/portfolio/fullsize/6.jpg" title="Project Name">-->
<!--                            <img class="img-fluid" src="assets/img/portfolio/thumbnails/6.jpg" alt="..." />-->
<!--                            <div class="portfolio-box-caption p-3">-->
<!--                                <div class="project-category text-white-50">Category</div>-->
<!--                                <div class="project-name">Project Name</div>-->
<!--                            </div>-->
<!--                        </a>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->

<!-- Contact-->
<section class="page-section" id="contact">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-lg-8 col-xl-6 text-center">
                <h2 class="mt-0">Let's Get In Touch!</h2>
                <hr class="divider" />
                <p class="text-muted mb-5">Ready to start your nft project with us? Send us a messages and we will get back to you as soon as possible!</p>
            </div>
        </div>

        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-lg-4 text-center mb-5 mb-lg-0">
                <i class="bi-phone fs-2 mb-3 text-muted"></i>
                <div>Phone: +86 17717857782</div>
                <div>Email: kevinobamatheus@gmail.com</div>
                <div>linkedin:<a href="https://www.linkedin.com/in/kevin-zhou-986b8986/" target="_blank">https://www.linkedin.com/in/kevin-zhou-986b8986/</a></div>
                <div>twitter:<a href="https://github.com/kevinobama" target="_blank">https://github.com/kevinobama</a></div>
                <div>github: <a href="https://github.com/kevinobama" target="_blank">https://github.com/kevinobama</a></div>
                <div>personal website: <a href="https://www.dapp0.com" target="_blank">dapp</a></div>
            </div>
        </div>
    </div>
</section>
<!-- Footer-->
<footer class="bg-light py-5">
    <div class="container px-4 px-lg-5"><div class="small text-center text-muted">Copyright &copy; 2021 - kevin mint nft</div></div>
</footer>
<!-- Bootstrap core JS-->
<script src="/js/bootstrap.bundle.min.js"></script>
<!-- SimpleLightbox plugin JS-->
<script src="/js/simpleLightbox.min.js"></script>
<!-- Core theme JS-->
<script src="/js/scripts.js"></script>

<script src="/src/js/jquery.min.js"></script>
<script src="/src/js/bootstrap.min.js"></script>
<script src="/src/js/web3.min.js"></script>
<script src="/src/js/truffle-contract.min.js"></script>
<script src="/src/js/appindex.js"></script>

</body>
</html>
