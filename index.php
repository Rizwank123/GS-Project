<?php
    include_once('header.inc.php');
?>
<!-- Search Bar -->
<div class="container-fluid bg-light">
    <form action="#">
        <div class="container py-4">
            <div class="row">
                <div class="col-md-10 my-1">
                    <input type="search" name="search" id="search" class="form-control" placeholder="Search Here...">
                </div>
                <div class="col-md-2 my-1">
                    <button type="submit" name="search-btm" class="btn btn-danger w-100">Search</button>
                </div>
            </div>
        </div>
    </form>
</div>
<!-- //Search Bar -->

<!-- Banner -->
<div class="container my-3">
    <div class="owl-carousel owl-theme owl-loaded">
        <div class="owl-stage-outer">
            <div class="owl-stage">
                <div class="owl-item">
                    <a href="#">
                        <div class="card">
                            <div class="card-body">
                                <img src="https://i.pinimg.com/originals/55/4c/c8/554cc8e970af8e6f6073b9a36efe0ca1.jpg"
                                    alt="">
                            </div>
                        </div>
                    </a>
                </div>
                <div class="owl-item">
                    <a href="#">
                        <div class="card">
                            <div class="card-body">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSf9WxZoJrJQzMVOdGJF66SJYBvcVFYk0c2nikDRnloQ3Qf_yg02ZqstAGjg7n-AjTPoeA&usqp=CAU"
                                    alt="">
                            </div>
                        </div>
                    </a>
                </div>
                <div class="owl-item">
                    <a href="#">
                        <div class="card">
                            <div class="card-body">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcThvm00_MgljqdfzcIRWuLOR6Lg0jA47GxOIy6sXCzobOCAUv8Xn_hTOtzDNl0sa0q8yC4&usqp=CAU"
                                    alt="">
                            </div>
                        </div>
                    </a>
                </div>
                <div class="owl-item">
                    <a href="#">
                        <div class="card">
                            <div class="card-body">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQd0l64cLA-skWXRgUp-hFrpflfWEiiXyck75q1a8OUwVTd4VBVhI0MrV2tqSTTRIg63PI&usqp=CAU"
                                    alt="">
                            </div>
                        </div>
                    </a>
                </div>
                <div class="owl-item">
                    <a href="#">
                        <div class="card">
                            <div class="card-body">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS3zugSlYtq2sHKza4U_VbKFob9zRXY69Ffu420VdhSEhNX9mX1FQB3EEdOt0ye0rR7epE&usqp=CAU"
                                    alt="">
                            </div>
                        </div>
                    </a>
                </div>
                <div class="owl-item">
                    <a href="#">
                        <div class="card">
                            <div class="card-body">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTvzsEqKUApeaq_IwfofiTypOVIri-7m4eRXy5rDRp3lno65lhVHqRGhwQd9fNikjQSn3k&usqp=CAU"
                                    alt="">
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- //Banner -->
<!-- subscriptions -->
<div class="container-fluid bg-danger py-2 pt-3">
    <div class="container">
        <div class="row">
            <div class="col-md-8 text-center">
                <p class="lead text-light subs">Subscribe us for annual AC mantainance </p>
            </div>
            <div class="col-md-4">
                <button type="submit" name="search-btm" class="btn btn-light w-100 text-uppercase">Subscribe</button>
            </div>
        </div>
    </div>
</div>
<!-- //Subscription -->





<!-- login -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form>
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="inputEmail3">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="inputPassword3">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Sign in</button>
                    </label>
            </div>
        </div>
    </div>

    </form>
    <!--sinup-->
    <form>
        <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="inputEmail3">
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="inputPassword3">
            </div>
            <div class="row mb-3">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Confirm Password</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputPassword3">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">SignUp</button>
            </label>
        </div>
</div>
</div>

</form>
</div>

<!--//login-->
















<?php

    include_once('footer.inc.php');
?>