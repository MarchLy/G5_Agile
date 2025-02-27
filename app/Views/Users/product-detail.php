<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">


<!-- Mirrored from themesflat.co/html/ecomus/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Nov 2024 14:40:41 GMT -->

<head>
    <meta charset="utf-8">
    <title>Product-Detail</title>

    <meta name="author" content="themesflat.com">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- font -->
    <link rel="stylesheet" href="assets/Users/fonts/fonts.css">
    <link rel="stylesheet" href="assets/Users/fonts/font-icons.css">
    <link rel="stylesheet" href="assets/Users/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/Users/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/Users/css/animate.css">
    <link rel="stylesheet" type="text/css" href="assets/Users/css/styles.css" />

    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="assets/Users/images/logo/favicon.png">
    <link rel="apple-touch-icon-precomposed" href="assets/Users/images/logo/favicon.png">

</head>

<body class="preload-wrapper popup-loader">

    <!-- RTL -->
    <a href="javascript:void(0);" id="toggle-rtl" class="tf-btn animate-hover-btn btn-fill">RTL</a>
    <!-- /RTL  -->

    <!-- preload -->

    <!-- /preload -->
    <div id="wrapper">

        <!-- /Top Bar -->
        <!-- Header -->
        <?php include 'app/Views/Users/layouts/header.php' ?>
        <!-- /Header -->

        <?php include "addToCart.php"; ?>


        <section class="flat-spacing-4 pt_0 " style="margin-top: 6rem;">
            <div class="tf-main-product section-image-zoom">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="tf-product-media-wrap wrapper-gallery-scroll">
                                <div class="mb_10">
                                    <a href="" target="_blank" data-color="beige" class="item item-img-color" data-pswp-width="770px" data-pswp-height="1075px">
                                        <img class="tf-image-zoom ls-is-cached lazyloaded" data-zoom="<?php echo $product->image_main ?>" data-src="<?php echo $product->image_main ?>" src="<?php echo $product->image_main ?>" alt="">
                                    </a>
                                </div>

                                <div class="d-grid grid-template-columns-2 gap-10" id="gallery-started">
                                    <?php foreach ($productImage as $key => $value): ?>

                                        <a href="<?php echo $value->image ?>" target="_blank" data-color="beige" class="item item-img-color" data-pswp-width="770px" data-pswp-height="1075px">
                                            <img class="radius-10 tf-image-zoom ls-is-cached lazyloaded"
                                                data-zoom="<?php echo $value->image ?>"
                                                data-src="<?php echo $value->image ?>"
                                                src="<?php echo $value->image ?>" alt="img-product">
                                        </a>
                                    <?php endforeach ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="tf-product-info-wrap mr-6">
                                <div class="tf-zoom-main"></div>
                                <div class="tf-product-info-list other-image-zoom">
                                    <div class="tf-product-info-title">
                                        <h5><?php echo $product->name ?></h5>
                                    </div>
                                </div>
                                <div class="tf-product-info-price">
                                    <div class="price-on-sale"><?php echo number_format($product->price_sale) ?>VND</div>
                                    <div class="compare-at-price"><?php echo number_format($product->price) ?>VND</div>
                                    <div class="badges-on-sale">
                                        <span>
                                            <?php echo round((1 - intval($product->price_sale) / intval($product->price)) * 100, 2) ?>
                                        </span>% OFF
                                    </div>

                                </div>

                                <div class="variant-picker-item">


                                </div>

                            </div>
                            <div class="tf-product-info-quantity mt-5">
                                <div class="quantity-title fw-6">Quantity</div>
                                <div class="wg-quantity">
                                    <span class="btn-quantity btn-decrease-custom">-</span>
                                    <input type="text" class="quantity-product" name="number" value="1">
                                    <span class="btn-quantity btn-increase-custom">+</span>
                                </div>
                            </div>
                            <div class="tf-product-info-buy-button">
                                <form class="">
                                    <a href="javascript:void(0);"
                                        class="tf-btn btn-fill justify-content-center fw-6 fs-16 flex-grow-1 animate-hover-btn
                                   <?php echo isset($_SESSION['users']) ? 'btnAddToCart' : '' ?>"
                                        <?php echo ! isset($_SESSION['users']) ? 'onclick="handleNotLoggedIn()"' : '' ?>>
                                        <span>Add to cart -&nbsp;</span>
                                        <span class="tf-qty-price total-price">
                                            <?php echo number_format($product->price_sale ?? $product->price) ?> VND
                                        </span>
                                    </a>

                                    <script>
                                        function handleNotLoggedIn() {
                                            alert('Bạn cần đăng nhập trước');
                                        }
                                    </script>

                                    <a href="javascript:void(0);" class="tf-product-btn-wishlist hover-tooltip box-icon bg_white wishlist btn-icon-action">
                                        <span class="icon icon-heart"></span>
                                        <span class="tooltip">Add to Wishlist</span>
                                        <span class="icon icon-delete"></span>
                                    </a>
                                    <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="tf-product-btn-wishlist hover-tooltip box-icon bg_white compare btn-icon-action">
                                        <span class="icon icon-compare"></span>
                                        <span class="tooltip">Add to Compare</span>
                                        <span class="icon icon-check"></span>
                                    </a>
                                    <!-- <div class="w-100">
                                                <a href="#" class="btns-full">Buy with <img src="images/payments/paypal.png" alt=""></a>
                                                <a href="#" class="payment-more-option">More payment options</a>
                                            </div> -->
                                </form>
                            </div>
                            <div class="tf-pickup-availability mt-5">
                                <div>
                                    <svg width="18" height="18" viewBox="0 0 18 18" class="mt_3">
                                        <path d="M7.6 13.2L14.65 6.15L13.25 4.75L7.6 10.4L4.75 7.55L3.35 8.95L7.6 13.2ZM0 18V0H18V18H0ZM2 16H16V2H2V16Z" fill="#428445"></path>
                                    </svg>
                                </div>
                                <div>
                                    <p>Pickup available at <span class="fw-6">Toronto - Spadina Avenue</span> Usually ready in 24 hours</p>
                                    <a href="#pickup_available" data-bs-toggle="modal" class="">
                                        Check availability at other stores
                                    </a>
                                </div>
                            </div>
                            <div class="tf-product-info-extra-link">
                                <a href="#compare_color" data-bs-toggle="modal" class="tf-product-extra-icon">
                                    <div class="icon">
                                        <img src="images/item/compare.svg" alt="">
                                    </div>
                                    <div class="text fw-6">Compare color</div>
                                </a>
                                <a href="#ask_question" data-bs-toggle="modal" class="tf-product-extra-icon">
                                    <div class="icon">
                                        <i class="icon-question"></i>
                                    </div>
                                    <div class="text fw-6">Ask a question</div>
                                </a>
                                <a href="#delivery_return" data-bs-toggle="modal" class="tf-product-extra-icon">
                                    <div class="icon">
                                        <svg class="d-inline-block" xmlns="http://www.w3.org/2000/svg" width="22" height="18" viewBox="0 0 22 18" fill="currentColor">
                                            <path d="M21.7872 10.4724C21.7872 9.73685 21.5432 9.00864 21.1002 8.4217L18.7221 5.27043C18.2421 4.63481 17.4804 4.25532 16.684 4.25532H14.9787V2.54885C14.9787 1.14111 13.8334 0 12.4255 0H9.95745V1.69779H12.4255C12.8948 1.69779 13.2766 2.07962 13.2766 2.54885V14.5957H8.15145C7.80021 13.6052 6.85421 12.8936 5.74468 12.8936C4.63515 12.8936 3.68915 13.6052 3.33792 14.5957H2.55319C2.08396 14.5957 1.70213 14.2139 1.70213 13.7447V2.54885C1.70213 2.07962 2.08396 1.69779 2.55319 1.69779H9.95745V0H2.55319C1.14528 0 0 1.14111 0 2.54885V13.7447C0 15.1526 1.14528 16.2979 2.55319 16.2979H3.33792C3.68915 17.2884 4.63515 18 5.74468 18C6.85421 18 7.80021 17.2884 8.15145 16.2979H13.423C13.7742 17.2884 14.7202 18 15.8297 18C16.9393 18 17.8853 17.2884 18.2365 16.2979H21.7872V10.4724ZM16.684 5.95745C16.9494 5.95745 17.2034 6.08396 17.3634 6.29574L19.5166 9.14894H14.9787V5.95745H16.684ZM5.74468 16.2979C5.27545 16.2979 4.89362 15.916 4.89362 15.4468C4.89362 14.9776 5.27545 14.5957 5.74468 14.5957C6.21392 14.5957 6.59575 14.9776 6.59575 15.4468C6.59575 15.916 6.21392 16.2979 5.74468 16.2979ZM15.8298 16.2979C15.3606 16.2979 14.9787 15.916 14.9787 15.4468C14.9787 14.9776 15.3606 14.5957 15.8298 14.5957C16.299 14.5957 16.6809 14.9776 16.6809 15.4468C16.6809 15.916 16.299 16.2979 15.8298 16.2979ZM18.2366 14.5957C17.8853 13.6052 16.9393 12.8936 15.8298 12.8936C15.5398 12.8935 15.252 12.943 14.9787 13.04V10.8511H20.0851V14.5957H18.2366Z"></path>
                                        </svg>
                                    </div>
                                    <div class="text fw-6">Delivery &amp; Return</div>
                                </a>
                                <a href="#share_social" data-bs-toggle="modal" class="tf-product-extra-icon">
                                    <div class="icon">
                                        <i class="icon-share"></i>
                                    </div>
                                    <div class="text fw-6">Share</div>
                                </a>
                            </div>
                            <div class="tf-product-info-delivery-return">
                                <div class="row">
                                    <div class="col-xl-6 col-12">
                                        <div class="tf-product-delivery">
                                            <div class="icon">
                                                <i class="icon-delivery-time"></i>
                                            </div>
                                            <p>Estimate delivery times: <span class="fw-7">12-26 days</span> (International), <span class="fw-7">3-6 days</span> (United States).</p>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-12">
                                        <div class="tf-product-delivery mb-0">
                                            <div class="icon">
                                                <i class="icon-return-order"></i>
                                            </div>
                                            <p>Return within <span class="fw-7">30 days</span> of purchase. Duties &amp; taxes are non-refundable.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tf-product-info-trust-seal">
                                <div class="tf-product-trust-mess">
                                    <i class="icon-safe"></i>
                                    <p class="fw-6">Guarantee Safe <br> Checkout</p>
                                </div>
                                <div class="tf-payment">
                                    <img src="images/payments/visa.png" alt="">
                                    <img src="images/payments/img-1.png" alt="">
                                    <img src="images/payments/img-2.png" alt="">
                                    <img src="images/payments/img-3.png" alt="">
                                    <img src="images/payments/img-4.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </div>
   
    </section>



    <div class="widget-tabs style-has-border">
        <ul class="widget-menu-tab">
            <li class="item-title active">
                <span class="inner">Description</span>
            </li>
            <li class="item-title">
                <span class="inner">Additional Information</span>
            </li>
            <li class="item-title">
                <span class="inner">Review</span>
            </li>
            <li class="item-title">
                <span class="inner">Shipping</span>
            </li>
            <li class="item-title">
                <span class="inner">Return Policies</span>
            </li>
        </ul>
        <div class="widget-content-tab">
            <div class="widget-content-inner active">
                <?php echo $product->description ?>
            </div>
            <div class="widget-content-inner">
                <table class="tf-pr-attrs">
                    <tbody>
                        <tr class="tf-attr-pa-color">
                            <th class="tf-attr-label">Color</th>
                            <td class="tf-attr-value">
                                <p>White, Pink, Black</p>
                            </td>
                        </tr>
                        <tr class="tf-attr-pa-size">
                            <th class="tf-attr-label">Size</th>
                            <td class="tf-attr-value">
                                <p>S, M, L, XL</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="widget-content-inner">
                <div class="tab-reviews write-cancel-review-wrap">
                    <div class="tab-reviews-heading">
                        <div class="top">
                            <div class="text-center">
                                <h1 class="number fw-6">4.8</h1>
                                <div class="list-star">
                                    <i class="icon icon-star"></i>
                                    <i class="icon icon-star"></i>
                                    <i class="icon icon-star"></i>
                                    <i class="icon icon-star"></i>
                                    <i class="icon icon-star"></i>
                                </div>
                                <p>(<?php echo count($ratingProduct) ?> Rating)</p>
                            </div>
                            <?php
                            $count5 = 0;
                            $count4 = 0;
                            $count3 = 0;
                            $count2 = 0;
                            $count1 = 0;
                            foreach ($ratingProduct as $key => $value) {
                                if ($value->rating == '5') {
                                    $count5++;
                                } else if ($value->rating == '4') {
                                    $count4++;
                                } else if ($value->rating == '3') {
                                    $count3++;
                                } else if ($value->rating == '2') {
                                    $count2++;
                                } else if ($value->rating == '1') {
                                    $count1++;
                                }
                            }
                            ?>
                            <div class="rating-score">
                                <div class="item">
                                    <div class="number-1 text-caption-1">5</div>
                                    <i class="icon icon-star"></i>
                                    <div class="line-bg">
                                        <div style="width:                                                                                    
                         <?php
                            if (count($ratingProduct) != 0) {
                                echo $count5 / count($ratingProduct) * 100;
                            }
                            ?> %"></div>
                                    </div>
                                    <div class="number-2 text-caption-1">

                                        <?php echo $count5 ?>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="number-1 text-caption-1">4</div>
                                    <i class="icon icon-star"></i>
                                    <div class="line-bg">
                                        <div style="width:                        
                                  <?php if (count($ratingProduct) != 0) {
                                        echo $count4 / count($ratingProduct) * 100;
                                    } ?>%"></div>
                                    </div>
                                    <div class="number-2 text-caption-1"> <?php echo $count4 ?></div>
                                </div>
                                <div class="item">
                                    <div class="number-1 text-caption-1">3</div>
                                    <i class="icon icon-star"></i>
                                    <div class="line-bg">
                                        <div style="width:  
                                        <?php if (count($ratingProduct) != 0) {
                                            echo $count3 / count($ratingProduct) * 100;
                                        } ?>%"></div>
                                    </div>
                                    <div class="number-2 text-caption-1"> <?php echo $count3 ?></div>
                                </div>
                                <div class="item">
                                    <div class="number-1 text-caption-1">2</div>
                                    <i class="icon icon-star"></i>
                                    <div class="line-bg">
                                        <div style="width:
                                         <?php if (count($ratingProduct) != 0) {
                                                echo $count2 / count($ratingProduct) * 100;
                                            } ?>%"></div>
                                    </div>
                                    <div class="number-2 text-caption-1"> <?php echo $count2 ?></div>
                                </div>
                                <div class="item">
                                    <div class="number-1 text-caption-1">1</div>
                                    <i class="icon icon-star"></i>
                                    <div class="line-bg">
                                        <div style="width: 
                                         <?php if (count($ratingProduct) != 0) {
                                                echo $count1 / count($ratingProduct) * 100;
                                            } ?>%"></div>
                                    </div>
                                    <div class="number-2 text-caption-1"> <?php echo $count1 ?></div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="tf-btn btn-outline-dark fw-6 btn-comment-review btn-cancel-review">Cancel Review</div>

                            <?php if (isset($_SESSION['users'])): ?>

                                <div class="tf-btn btn-outline-dark fw-6 btn-comment-review btn-write-review">Write a review</div>
                            <?php endif ?>
                        </div>
                    </div>
                    <div class="reply-comment cancel-review-wrap">
                        <div class="d-flex mb_24 gap-20 align-items-center justify-content-between flex-wrap">
                            <h5 class=""><?php echo count($comment) ?> Comments</h5>
                            <div class="d-flex align-items-center gap-12">
                                <div class="text-caption-1">Sort by:</div>
                                <div class="tf-dropdown-sort" data-bs-toggle="dropdown">
                                    <div class="btn-select">
                                        <span class="text-sort-value">Most Recent</span>
                                        <span class="icon icon-arrow-down"></span>
                                    </div>
                                    <div class="dropdown-menu">
                                        <div class="select-item active">
                                            <span class="text-value-item">Most Recent</span>
                                        </div>
                                        <div class="select-item">
                                            <span class="text-value-item">Oldest</span>
                                        </div>
                                        <div class="select-item">
                                            <span class="text-value-item">Most Popular</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="reply-comment-wrap">
                            <?php foreach ($comment as $key => $value): ?>
                                <?php if ($value->parent == null): ?>
                                    <div class="reply-comment-item">
                                        <div class="user">
                                            <div class="image">
                                                <img src="<?php echo $value->image ?>" alt="">
                                            </div>
                                            <div>
                                                <h6>
                                                    <a href="#" class="link"><?php echo $value->name ?></a>
                                                </h6>
                                                <div class="day text_black-3"><?php
                                                                                if ($value->rating != null) {
                                                                                    echo $value->rating . "<i class='icon icon-star text-warning'></i>";
                                                                                }

                                                                                ?><?php echo date("d/m/Y", strtotime($value->created_at)) ?></div>
                                            </div>
                                        </div>
                                        <p class="text_black-3"><?php echo $value->comment ?></p>
                                    </div>

                                    <?php foreach ($comment as $key2 => $value2): ?>
                                        <?php if ($value2->parent == $value->id): ?>
                                            <div class="reply-comment-item type-reply">
                                                <div class="user">
                                                    <div class="image">
                                                        <img src="<?php echo $value2->image ?>" alt="">
                                                    </div>
                                                    <div>
                                                        <h6>
                                                            <a href="#" class="link"><?php echo $value->name ?></a>
                                                        </h6>
                                                        <div class="day text_black-3"><?php echo date("d/m/Y", strtotime($value2->created_at)) ?></div>
                                                    </div>
                                                </div>
                                                <p class="text_black-3"><?php echo $value2->comment ?></p>
                                            </div>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <form class="form-write-review write-review-wrap" action="<?php echo BASE_URL ?>?act=write-review" method="post">
                        <div class="heading">
                            <input type="hidden" value="<?php echo $product->id ?>" name="productId">
                            <h5>Write a review:</h5>
                            <div class="list-rating-check">
                                <input type="radio" id="star5" name="rate" value="5">
                                <label for="star5" title="text"></label>
                                <input type="radio" id="star4" name="rate" value="4">
                                <label for="star4" title="text"></label>
                                <input type="radio" id="star3" name="rate" value="3">
                                <label for="star3" title="text"></label>
                                <input type="radio" id="star2" name="rate" value="2">
                                <label for="star2" title="text"></label>
                                <input type="radio" id="star1" name="rate" value="1">
                                <label for="star1" title="text"></label>
                            </div>
                        </div>
                        <div class="form-content">
                            <fieldset class="box-field">
                                <label class="label">Review</label>
                                <textarea rows="4" name="comment" placeholder="Write your comment here" tabindex="2" aria-required="true" required=""></textarea>
                            </fieldset>
                        </div>
                        <div class="button-submit">
                            <button class="tf-btn btn-fill animate-hover-btn" type="submit">Submit Reviews</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="widget-content-inner">
                <div class="tf-page-privacy-policy">
                    <div class="title">The Company Private Limited Policy</div>
                    <p>The Company Private Limited and each of their respective subsidiary, parent and affiliated companies is deemed to operate this Website (“we” or “us”) recognizes that you care how information about you is used and shared. We have created this Privacy Policy to inform you what information we collect on the Website, how we use your information and the choices you have about the way your information is collected and used. Please read this Privacy Policy carefully. Your use of the Website indicates that you have read and accepted our privacy practices, as outlined in this Privacy Policy.</p>
                    <p>Please be advised that the practices described in this Privacy Policy apply to information gathered by us or our subsidiaries, affiliates or agents: (i) through this Website, (ii) where applicable, through our Customer Service Department in connection with this Website, (iii) through information provided to us in our free standing retail stores, and (iv) through information provided to us in conjunction with marketing promotions and sweepstakes.</p>
                    <p>We are not responsible for the content or privacy practices on any websites.</p>
                    <p>We reserve the right, in our sole discretion, to modify, update, add to, discontinue, remove or otherwise change any portion of this Privacy Policy, in whole or in part, at any time. When we amend this Privacy Policy, we will revise the “last updated” date located at the top of this Privacy Policy.</p>
                    <p>If you provide information to us or access or use the Website in any way after this Privacy Policy has been changed, you will be deemed to have unconditionally consented and agreed to such changes. The most current version of this Privacy Policy will be available on the Website and will supersede all previous versions of this Privacy Policy.</p>
                    <p>If you have any questions regarding this Privacy Policy, you should contact our Customer Service Department by email at marketing@company.com</p>
                </div>
            </div>
            <div class="widget-content-inner">
                <ul class="d-flex justify-content-center mb_18">
                    <li class="">
                        <svg viewBox="0 0 40 40" width="35px" height="35px" color="#222" margin="5px">
                            <path fill="currentColor" d="M8.7 30.7h22.7c.3 0 .6-.2.7-.6l4-25.3c-.1-.4-.3-.7-.7-.8s-.7.2-.8.6L34 8.9l-3-1.1c-2.4-.9-5.1-.5-7.2 1-2.3 1.6-5.3 1.6-7.6 0-2.1-1.5-4.8-1.9-7.2-1L6 8.9l-.7-4.3c0-.4-.4-.7-.7-.6-.4.1-.6.4-.6.8l4 25.3c.1.3.3.6.7.6zm.8-21.6c2-.7 4.2-.4 6 .8 1.4 1 3 1.5 4.6 1.5s3.2-.5 4.6-1.5c1.7-1.2 4-1.6 6-.8l3.3 1.2-3 19.1H9.2l-3-19.1 3.3-1.2zM32 32H8c-.4 0-.7.3-.7.7s.3.7.7.7h24c.4 0 .7-.3.7-.7s-.3-.7-.7-.7zm0 2.7H8c-.4 0-.7.3-.7.7s.3.6.7.6h24c.4 0 .7-.3.7-.7s-.3-.6-.7-.6zm-17.9-8.9c-1 0-1.8-.3-2.4-.6l.1-2.1c.6.4 1.4.6 2 .6.8 0 1.2-.4 1.2-1.3s-.4-1.3-1.3-1.3h-1.3l.2-1.9h1.1c.6 0 1-.3 1-1.3 0-.8-.4-1.2-1.1-1.2s-1.2.2-1.9.4l-.2-1.9c.7-.4 1.5-.6 2.3-.6 2 0 3 1.3 3 2.9 0 1.2-.4 1.9-1.1 2.3 1 .4 1.3 1.4 1.3 2.5.3 1.8-.6 3.5-2.9 3.5zm4-5.5c0-3.9 1.2-5.5 3.2-5.5s3.2 1.6 3.2 5.5-1.2 5.5-3.2 5.5-3.2-1.6-3.2-5.5zm4.1 0c0-2-.1-3.5-.9-3.5s-1 1.5-1 3.5.1 3.5 1 3.5c.8 0 .9-1.5.9-3.5zm4.5-1.4c-.9 0-1.5-.8-1.5-2.1s.6-2.1 1.5-2.1 1.5.8 1.5 2.1-.5 2.1-1.5 2.1zm0-.8c.4 0 .7-.5.7-1.2s-.2-1.2-.7-1.2-.7.5-.7 1.2.3 1.2.7 1.2z">
                            </path>
                        </svg>
                    </li>
                    <li class="">
                        <svg viewBox="0 0 40 40" width="35px" height="35px" color="#222" margin="5px">
                            <path fill="currentColor" d="M36.7 31.1l-2.8-1.3-4.7-9.1 7.5-3.5c.4-.2.6-.6.4-1s-.6-.5-1-.4l-7.5 3.5-7.8-15c-.3-.5-1.1-.5-1.4 0l-7.8 15L4 15.9c-.4-.2-.8 0-1 .4s0 .8.4 1l7.5 3.5-4.7 9.1-2.8 1.3c-.4.2-.6.6-.4 1 .1.3.4.4.7.4.1 0 .2 0 .3-.1l1-.4-1.5 2.8c-.1.2-.1.5 0 .8.1.2.4.3.7.3h31.7c.3 0 .5-.1.7-.4.1-.2.1-.5 0-.8L35.1 32l1 .4c.1 0 .2.1.3.1.3 0 .6-.2.7-.4.1-.3 0-.8-.4-1zm-5.1-2.3l-9.8-4.6 6-2.8 3.8 7.4zM20 6.4L27.1 20 20 23.3 12.9 20 20 6.4zm-7.8 15l6 2.8-9.8 4.6 3.8-7.4zm22.4 13.1H5.4L7.2 31 20 25l12.8 6 1.8 3.5z">
                            </path>
                        </svg>
                    </li>
                    <li class="">
                        <svg viewBox="0 0 40 40" width="35px" height="35px" color="#222" margin="5px">
                            <path fill="currentColor" d="M5.9 5.9v28.2h28.2V5.9H5.9zM19.1 20l-8.3 8.3c-2-2.2-3.2-5.1-3.2-8.3s1.2-6.1 3.2-8.3l8.3 8.3zm-7.4-9.3c2.2-2 5.1-3.2 8.3-3.2s6.1 1.2 8.3 3.2L20 19.1l-8.3-8.4zM20 20.9l8.3 8.3c-2.2 2-5.1 3.2-8.3 3.2s-6.1-1.2-8.3-3.2l8.3-8.3zm.9-.9l8.3-8.3c2 2.2 3.2 5.1 3.2 8.3s-1.2 6.1-3.2 8.3L20.9 20zm8.4-10.2c-1.2-1.1-2.6-2-4.1-2.6h6.6l-2.5 2.6zm-18.6 0L8.2 7.2h6.6c-1.5.6-2.9 1.5-4.1 2.6zm-.9.9c-1.1 1.2-2 2.6-2.6 4.1V8.2l2.6 2.5zM7.2 25.2c.6 1.5 1.5 2.9 2.6 4.1l-2.6 2.6v-6.7zm3.5 5c1.2 1.1 2.6 2 4.1 2.6H8.2l2.5-2.6zm18.6 0l2.6 2.6h-6.6c1.4-.6 2.8-1.5 4-2.6zm.9-.9c1.1-1.2 2-2.6 2.6-4.1v6.6l-2.6-2.5zm2.6-14.5c-.6-1.5-1.5-2.9-2.6-4.1l2.6-2.6v6.7z">
                            </path>
                        </svg>
                    </li>
                    <li class="">
                        <svg viewBox="0 0 40 40" width="35px" height="35px" color="#222" margin="5px">
                            <path fill="currentColor" d="M35.1 33.6L33.2 6.2c0-.4-.3-.7-.7-.7H13.9c-.4 0-.7.3-.7.7s.3.7.7.7h18l.7 10.5H20.8c-8.8.2-15.9 7.5-15.9 16.4 0 .4.3.7.7.7h28.9c.2 0 .4-.1.5-.2s.2-.3.2-.5v-.2h-.1zm-28.8-.5C6.7 25.3 13 19 20.8 18.9h11.9l1 14.2H6.3zm11.2-6.8c0 1.2-1 2.1-2.1 2.1s-2.1-1-2.1-2.1 1-2.1 2.1-2.1 2.1 1 2.1 2.1zm6.3 0c0 1.2-1 2.1-2.1 2.1-1.2 0-2.1-1-2.1-2.1s1-2.1 2.1-2.1 2.1 1 2.1 2.1z">
                            </path>
                        </svg>
                    </li>
                    <li class="">
                        <svg viewBox="0 0 40 40" width="35px" height="35px" color="#222" margin="5px">
                            <path fill="currentColor" d="M20 33.8c7.6 0 13.8-6.2 13.8-13.8S27.6 6.2 20 6.2 6.2 12.4 6.2 20 12.4 33.8 20 33.8zm0-26.3c6.9 0 12.5 5.6 12.5 12.5S26.9 32.5 20 32.5 7.5 26.9 7.5 20 13.1 7.5 20 7.5zm-.4 15h.5c1.8 0 3-1.1 3-3.7 0-2.2-1.1-3.6-3.1-3.6h-2.6v10.6h2.2v-3.3zm0-5.2h.4c.6 0 .9.5.9 1.7 0 1.1-.3 1.7-.9 1.7h-.4v-3.4z">
                            </path>
                        </svg>
                    </li>
                    <li class="">
                        <svg viewBox="0 0 40 40" width="35px" height="35px" color="#222" margin="5px">
                            <path fill="currentColor" d="M30.2 29.3c2.2-2.5 3.6-5.7 3.6-9.3s-1.4-6.8-3.6-9.3l3.6-3.6c.3-.3.3-.7 0-.9-.3-.3-.7-.3-.9 0l-3.6 3.6c-2.5-2.2-5.7-3.6-9.3-3.6s-6.8 1.4-9.3 3.6L7.1 6.2c-.3-.3-.7-.3-.9 0-.3.3-.3.7 0 .9l3.6 3.6c-2.2 2.5-3.6 5.7-3.6 9.3s1.4 6.8 3.6 9.3l-3.6 3.6c-.3.3-.3.7 0 .9.1.1.3.2.5.2s.3-.1.5-.2l3.6-3.6c2.5 2.2 5.7 3.6 9.3 3.6s6.8-1.4 9.3-3.6l3.6 3.6c.1.1.3.2.5.2s.3-.1.5-.2c.3-.3.3-.7 0-.9l-3.8-3.6z">
                            </path>
                        </svg>
                    </li>
                    <li class="">
                        <svg viewBox="0 0 40 40" width="35px" height="35px" color="#222" margin="5px">
                            <path fill="currentColor" d="M34.1 34.1H5.9V5.9h28.2v28.2zM7.2 32.8h25.6V7.2H7.2v25.6zm13.5-18.3a.68.68 0 0 0-.7-.7.68.68 0 0 0-.7.7v10.9a.68.68 0 0 0 .7.7.68.68 0 0 0 .7-.7V14.5z">
                            </path>
                        </svg>
                    </li>
                </ul>
                <p class="text-center text-paragraph">LT01: 70% wool, 15% polyester, 10% polyamide, 5% acrylic 900 Grms/mt</p>
            </div>
        </div>
    </div>


    <section class="flat-spacing-5 pt_0 flat-seller">
        <div class="container">
            <div class="flat-title">
                <span class="title wow fadeInUp" data-wow-delay="0s" style="visibility: visible; animation-delay: 0s; animation-name: fadeInUp;">Các Sản Phẩm Liên Quan</span>

            </div>
            <div class="grid-layout loadmore-item wow fadeInUp" data-wow-delay="0s" data-grid="grid-4" style="visibility: visible; animation-delay: 0s; animation-name: fadeInUp;">
                <!-- card product 1 -->
                <?php foreach ($otherProduct as $key => $value): ?>
                    <div class="card-product fl-item" style="display: block;">
                        <div class="card-product-wrapper">
                            <a href="<?php echo BASE_URL ?>?act=product-detail&product_id=<?php echo $value->id ?>" class="product-img">
                                <img class="img-product lazyloaded" data-src="<?php echo $value->image_main ?>" src="<?php echo $value->image_main ?>" alt="image-product">
                                <img class="img-hover ls-is-cached lazyloaded" data-src="<?php echo $value->image_main ?>" src="<?php echo $value->image_main ?>" alt="image-product">
                            </a>
                            <div class="list-product-btn">
                                <a href="#quick_add" data-bs-toggle="modal" class="box-icon bg_white quick-add tf-btn-loading">
                                    <span class="icon icon-bag"></span>
                                    <span class="tooltip">Quick Add</span>
                                </a>
                                <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                    <span class="icon icon-heart"></span>
                                    <span class="tooltip">Add to Wishlist</span>
                                    <span class="icon icon-delete"></span>
                                </a>

                                <a href="#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                    <span class="icon icon-view"></span>
                                    <span class="tooltip">Quick View</span>
                                </a>
                            </div>

                        </div>
                        <div class="card-product-info">
                            <a href="http://localhost/DuAn1/?act=product-detail&product_id=11" class="title link"><?php echo $value->name ?> </a>
                            <div style="display: flex;">

                                <span class="price" style="margin-right: 5px; text-decoration: line-through;">
                                    <?php if ($value->price_sale != null): ?>
                                        <span class="price" style="margin-right: 5px; text-decoration: line-through;">
                                            <?php echo number_format($value->price) ?>VNĐ
                                        </span>
                                        <span class="price price-sale">
                                            <?php echo number_format($value->price_sale) ?> VNĐ
                                        </span>
                                    <?php else: ?>
                                        <span class="price" style="margin-right: 5px; ">
                                            <?php echo number_format($value->price) ?>VNĐ
                                        </span>
                                    <?php endif; ?>
                                </span>

                            </div>


                        </div>
                    </div>
                <?php endforeach; ?>
                <!-- card product 2 -->


            </div>

        </div>
    </section>



    <!-- Footer -->
    <?php include 'app/Views/Users/layouts/footer.php' ?>
    <!-- /Footer -->

    </div>


    <!-- Javascript -->
    <script type="text/javascript" src="assets/Users/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/Users/js/jquery.min.js"></script>
    <script type="text/javascript" src="assets/Users/js/swiper-bundle.min.js"></script>
    <script type="text/javascript" src="assets/Users/js/carousel.js"></script>
    <script type="text/javascript" src="assets/Users/js/bootstrap-select.min.js"></script>
    <script type="text/javascript" src="assets/Users/js/lazysize.min.js"></script>
    <script type="text/javascript" src="assets/Users/js/count-down.js"></script>
    <script type="text/javascript" src="assets/Users/js/wow.min.js"></script>
    <script type="text/javascript" src="assets/Users/js/multiple-modal.js"></script>
    <script type="text/javascript" src="assets/Users/js/main.js"></script>

    <script>
        let price = <?php echo isset($product->price_sale) && $product->price_sale != null ? $product->price_sale : (isset($product->price) ? $product->price : 0) ?>;
        price = Number(price);

        document.querySelector('.btn-decrease-custom').addEventListener('click', function() {
            let quantityElement = document.querySelector('.quantity-product');
            let quantity = Number(quantityElement.value);
            if (quantity > 0) {
                quantityElement.value = quantity - 1;
                let total = price * (quantity - 1);
                document.querySelector('.total-price').textContent = total.toLocaleString() + " VND";
            }
        });

        document.querySelector('.btn-increase-custom').addEventListener('click', function() {
            let quantityElement = document.querySelector('.quantity-product');
            let quantity = Number(quantityElement.value);
            quantityElement.value = quantity + 1;
            let total = price * (quantity + 1);
            document.querySelector('.total-price').textContent = total.toLocaleString() + " VND";
        });

        // bấm nút ADD
        const btnAddToCart = document.querySelector(".btnAddToCart")
        btnAddToCart.addEventListener("click", function() {
            let productId = "<?php echo $_GET['product_id'] ?>"
            let quantity = document.querySelector(".quantity-product").value

            let formData = new FormData();
            formData.append('productId', productId)
            formData.append('quantity', quantity)
            fetch('<?php echo BASE_URL ?>?act=add-to-cart', {
                    method: "POST",
                    body: formData

                })
                .then(response => response.json())
                .then(data => {
                    showCart(data)
                })
            var myModal = new bootstrap.Modal(document.getElementById('shoppingCart'));
            myModal.show();
        })

        // khi show cart
        const exampleModal = document.getElementById('shoppingCart')

        exampleModal.addEventListener('show.bs.modal', event => {
            fetch('<?php echo BASE_URL ?>?act=show-to-cart')
                .then(response => response.json())
                .then(data => {
                    showCart(data)
                })

        })

        function showCart(data) {
            $(".count_product").text(`${data.length}`)
            $(".tf-mini-cart-items").empty();
            let UI = ''
            let tong = 0
            data.forEach(item => {
                UI += `
            <div class="tf-mini-cart-item">
    <div class="tf-mini-cart-image">
        <a href="<?php echo BASE_URL ?>?act=product-detail&product_id=${item.product_id}">
            <img src="${item.image_main}" alt="">
        </a>
    </div>
    <div class="tf-mini-cart-info">
        <a class="title link" href="<?php echo BASE_URL ?>?act=product-detail&product_id=${item.product_id}"
        >${item.name}</a>
        <div class="price fw-6">
         ${item.price_sale !=null ? item.price_sale.toLocaleString() : item.price.toLocaleString()}VNĐ
        </div>
        <div class="tf-mini-cart-btns">
            <div class="wg-quantity small">
                <span class="btn-quantity minus-btn" onclick="handleUpdate('${item.id}','decrease')">-</span>
                <input type="text" name="number" value="${item.quantity}">
                <span class="btn-quantity plus-btn" onclick="handleUpdate('${item.id}','increase')" >+</span>
            </div>
            <div class="tf-mini-cart-remove" onclick="handleUpdate('${item.id}','delete')">Remove</div>
        </div>
    </div>
</div>

`
                let price = item.price_sale != null ? Number(item.price_sale) : Number(item.price)
                let quantity = Number(item.quantity)
                tong = tong + (price * quantity)
            })
            $(".tf-mini-cart-items").append(UI)
            $(".tf-totals-total-value").empty()
            $(".tf-totals-total-value").text(tong.toLocaleString() + "VNĐ")
        }

        function handleUpdate(cartDetailId, action) {
            let formData = new FormData();
            formData.append('cart_detail_id', cartDetailId)
            formData.append('action', action)
            fetch('<?php echo BASE_URL ?>?act=update-cart', {
                    method: "POST",
                    body: formData

                })
                .then(response => response.json())
                .then(data => {
                    showCart(data)
                })
        }
    </script>

</body>


<!-- Mirrored from themesflat.co/html/ecomus/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Nov 2024 14:42:11 GMT -->

</html>