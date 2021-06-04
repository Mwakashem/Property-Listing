
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Title -->
  <title>Add Property</title>

  <!-- Required Meta Tags Always Come First -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Favicon -->
  <link rel="shortcut icon" href="../favicon.ico">

  <!-- Font -->
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&amp;display=swap" rel="stylesheet">

  <!-- CSS Implementing Plugins -->
  <link rel="stylesheet" href="../assets/css/vendor.min.css">

  <!-- CSS Front Template -->
  <link rel="stylesheet" href="../assets/css/theme.minc619.css?v=1.0">
  <link rel="stylesheet" href="../assets/vendor/jquery-ui-dist/jquery-ui.css">
  <!-- CSS Front Doc -->
  <link rel="stylesheet" href="../assets/css/docs.css">
  
</head>
<body>
  <!-- ========== HEADER ========== -->
  <header id="header" class="header header-box-shadow">
    <div class="js-mega-menu header-section">

      <div id="logoAndNav" class="container">
        <!-- Nav -->
        <nav class="navbar navbar-expand-lg">
          <!-- Logo -->
          <a class="navbar-brand" href="index.html" aria-label="Front">
            <img src="../assets/svg/logos/logo.svg" alt="Logo">
          </a>
          <!-- End Logo -->

          <!-- Responsive Toggle Button -->
          <button type="button" class="navbar-toggler btn btn-icon btn-sm btn-soft-secondary rounded-circle"
                  aria-label="Toggle navigation"
                  aria-expanded="false"
                  aria-controls="navBar"
                  data-toggle="collapse"
                  data-target="#navBar">
            <span class="navbar-toggler-default">
              <svg width="14" height="14" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                <path fill="currentColor" d="M17.4,6.2H0.6C0.3,6.2,0,5.9,0,5.5V4.1c0-0.4,0.3-0.7,0.6-0.7h16.9c0.3,0,0.6,0.3,0.6,0.7v1.4C18,5.9,17.7,6.2,17.4,6.2z M17.4,14.1H0.6c-0.3,0-0.6-0.3-0.6-0.7V12c0-0.4,0.3-0.7,0.6-0.7h16.9c0.3,0,0.6,0.3,0.6,0.7v1.4C18,13.7,17.7,14.1,17.4,14.1z"/>
              </svg>
            </span>
            <span class="navbar-toggler-toggled">
              <svg width="14" height="14" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                <path fill="currentColor" d="M11.5,9.5l5-5c0.2-0.2,0.2-0.6-0.1-0.9l-1-1c-0.3-0.3-0.7-0.3-0.9-0.1l-5,5l-5-5C4.3,2.3,3.9,2.4,3.6,2.6l-1,1 C2.4,3.9,2.3,4.3,2.5,4.5l5,5l-5,5c-0.2,0.2-0.2,0.6,0.1,0.9l1,1c0.3,0.3,0.7,0.3,0.9,0.1l5-5l5,5c0.2,0.2,0.6,0.2,0.9-0.1l1-1 c0.3-0.3,0.3-0.7,0.1-0.9L11.5,9.5z"/>
              </svg>
            </span>
          </button>
          <!-- End Responsive Toggle Button -->

          <!-- Navigation -->
          <div id="navBar" class="collapse navbar-collapse">
            <ul class="navbar-nav">
              <li class="navbar-nav-item">
                <a class="nav-link " href="index.html">Home</a>
              </li>

              <!-- Property Pages -->
              <li class="hs-has-sub-menu navbar-nav-item mr-lg-auto">
                <a id="propertyMegaMenu" class="hs-mega-menu-invoker nav-link nav-link-toggle " href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-labelledby="propertySubMenu">Listings</a>

                <!-- Property Pages - Submenu -->
                <div id="propertySubMenu" class="hs-sub-menu dropdown-menu" aria-labelledby="propertyMegaMenu" style="min-width: 230px;">
                  <a class="dropdown-item " href="property-list.html">Listing</a>
                  <a class="dropdown-item " href="property-grid.html">Listing (Grid)</a>
                </div>
                <!-- End Property Pages - Submenu -->
              </li>
              <!-- End Property Pages -->

              <li class="navbar-nav-item">
                <a class="nav-link " href="property-description.html">Property description</a>
              </li>

              <!-- Button -->
              <li class="navbar-nav-last-item">
                <a class="btn btn-sm btn-primary transition-3d-hover" href="property-seller.html">Start selling</a>
              </li>
              <!-- End Button -->
            </ul>
          </div>
          <!-- End Navigation -->
        </nav>
        <!-- End Nav -->
      </div>
    </div>
  </header>
  <!-- ========== END HEADER ========== -->

  <!-- ========== MAIN CONTENT ========== -->
  <main id="content" role="main">
    <!-- Upload Form Section -->
    <div class="container space-2">
      <div class="w-lg-75 mx-lg-auto">
        <!-- Title -->
        <div class="text-center mb-9">
          <h1 class="h2">Add Property</h1>
          <p class="mb-0">Please proofread your submission carefully before submitting.</p>
        </div>
        <!-- End Title -->

        <form class="js-validate" action="/residentials" method="post" enctype="multipart/form-data">
            @csrf
          <!-- Listing Information -->
          <div class="mb-5">
            <h5 class="divider mb-5">Listing information</h5>

            <!-- Input -->
            <div class="form-group mb-5">
              <label for="listingPrice" class="input-label">Title</label>
              <div class="input-group input-group-merge">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="listingPriceLabel">
                    <i class="fas fa-heading"></i>
                    <!-- fa-money-bill-wave-alt -->
                  </span>
                </div>
                <input type="text" class="form-control" name="title" id="listingPrice" placeholder="Title" aria-label="Price" aria-describedby="listingPriceLabel">
              </div>
            </div>
            <!-- End Input -->

            <div class="row">
            <div class="col-lg-6 mb-3">
                <!-- Input -->
                <div class="form-group">
                  <label for="listingAddress" class="input-label">Street</label>
                  <div class="input-group input-group-merge">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="listingAddressLabel">
                        <i class="fas fa-map-marker-alt"></i>
                      </span>
                    </div>
                    <input type="text" class="form-control" name="street" id="listingAddress" placeholder="Street" aria-label="Address" aria-describedby="listingAddressLabel">
                  </div>
                </div>
                <!-- End Input -->
              </div>

              <div class="col-lg-6 mb-3">
                <!-- Input -->
                <div class="form-group">
                  <label for="listingAddress" class="input-label">City</label>
                  <div class="input-group input-group-merge">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="listingAddressLabel">
                        <i class="fas fa-map-marker-alt"></i>
                      </span>
                    </div>
                    <input type="text" class="form-control" name="city" id="listingAddress" placeholder="Address" aria-label="City" aria-describedby="listingAddressLabel">
                  </div>
                </div>
                <!-- End Input -->
              </div>
            </div>

            <div class="row">
              <div class="col-lg-6 mb-3">
                <!-- Input -->
                <div class="form-group">
                  <label for="listingBedroom" class="input-label">Bedroom</label>
                  <div class="input-group input-group-merge">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="listingBedroomLabel">
                        <i class="fas fa-bed"></i>
                      </span>
                    </div>
                    <select class="custom-select" name="bedrooms" id="listingBedroom" aria-describedby="listingBedroomLabel">
                      <option selected>Choose amount</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5+</option>
                    </select>
                  </div>
                </div>
                <!-- End Input -->
              </div>

              <div class="col-lg-6 mb-3">
                <!-- Input -->
                <div class="form-group">
                  <label for="listingBathrooms" class="input-label">Bathrooms</label>
                  <div class="input-group input-group-merge">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="listingBathroomsLabel">
                        <i class="fas fa-bath"></i>
                      </span>
                    </div>
                    <select class="custom-select" name="bathrooms" id="listingBathrooms" aria-describedby="listingBathroomsLabel">
                      <option selected>Choose amount</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5+</option>
                    </select>
                  </div>
                </div>
                <!-- End Input -->
              </div>
            </div>

            <div class="row">
            <div class="col-lg-4 mb-3">
                <!-- Input -->
                <div class="form-group">
                  <label for="listingKitchen" class="input-label">Type</label>
                  <div class="input-group input-group-merge">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="listingKitchenLabel">
                        <i class="fas fa-utensils"></i>
                      </span>
                    </div>
                    <select class="custom-select" name="type" id="listingKitchen" aria-describedby="listingKitchenLabel">
                      <option selected>Choose amount</option>
                      <option value="Bungalow">Bungalow</option>
                      <option value="Flats">Flats</option>
                      <option value="Family Home">Family Home</option>
                    </select>
                  </div>
                </div>
                <!-- End Input -->
              </div>
              <div class="col-lg-4 mb-3">
                <!-- Input -->
                <div class="form-group">
                  <label for="listingKitchen" class="input-label">Offer</label>
                  <div class="input-group input-group-merge">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="listingKitchenLabel">
                        <i class="fas fa-image"></i>
                      </span>
                    </div>
                    <select class="custom-select" name="offer" id="listingKitchen" aria-describedby="listingKitchenLabel">
                      <option selected>Choose Offer</option>
                      <option>Rent</option>
                      <option>Sale</option>
                    </select>
                  </div>
                </div>
                <!-- End Input -->
              </div>
            

              <div class="col-lg-4 mb-3">
                <!-- Input -->
                <div class="form-group">
                  <label for="listingAddress" class="input-label">Price</label>
                  <div class="input-group input-group-merge">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="listingAddressLabel">
                        <i class="fas fa-money-bill-wave-alt"></i>
                      </span>
                    </div>
                    <input type="text" class="form-control" name="price" id="listingAddress" placeholder="Price" aria-label="Address" aria-describedby="listingAddressLabel">
                  </div>
                </div>
                <!-- End Input -->
              </div>
                <!-- End Input -->
              </div>
            </div>

            <label class="input-label">Listing description</label>

            <div class="form-group">
              <textarea name="description" class="form-control" placeholder="Description" rows="4"></textarea>
            </div>
          </div>
          <!-- End Listing Information -->

          <!-- Upload Images -->
          <div class="mb-5">
            <h5 class="divider mb-5">Upload images</h5>

            <div class="row">
              <div class="col-lg-12 mb-3">
                <label class="input-label">Property media</label>

                <label class="file-attachment-input" for="fileAttachmentInput">
                  <span id="customFileExample4">Browse your device and upload documents</span>
                  <small class="d-block text-muted">Maximum file size 10MB</small>

                  <input id="fileAttachmentInput" name="file-attachment[]" type="file" class="js-file-attach file-attachment-input-label"
                        data-hs-file-attach-options='{
                          "textTarget": "#customFileExample4"
                        }' multiple>
                </label>
              </div>
            </div>
          </div>
          <!-- End Upload Images -->
          <!-- features -->
                <div class="row">
                  <div class="col-lg-12 mb-3">
                        <!-- Input -->
                        <div class="form-group">
                          <label for="listingKitchen" class="input-label">Type</label>
                          <div class="input-group input-group-merge">
                            <!-- Select -->
                            <select class="js-custom-select custom-select" name="features[]" size="1" multiple style="opacity: 0;"
                                    data-hs-select2-options='{
                                      "minimumResultsForSearch": "Infinity"
                                    }'>
                              <option>Parking</option>
                              <option>Swimming pool</option>
                              <option>Fibre Cable</option>
                              <option>Borehole</option>
                              <option>Language</option>
                              <option>Stream</option>
                              <option>HTML</option>
                              <option>PHP</option>
                              <option>JavaScript</option>
                              <option>Vue.js</option>
                            </select>
                            <!-- End Select -->
                          </div>
                        </div>
                        <!-- End Input -->
                      </div>

                      </div>
              <!-- features -->

          

          <button type="submit" class="btn btn-primary btn-block transition-3d-hover">Submit</button>
        </form>
      </div>
    </div>
    <!-- End Upload Form Section -->
  </main>
  <!-- ========== END MAIN CONTENT ========== -->

  <!-- ========== FOOTER ========== -->
  <footer class="bg-light">
    <div class="container">
      <div class="space-top-2 space-bottom-1 space-bottom-lg-2">
        <div class="row justify-content-lg-between">
          <div class="col-lg-3 ml-lg-auto mb-5 mb-lg-0">
            <!-- Logo -->
            <div class="mb-4">
              <a href="index.html" aria-label="Front">
                <img class="brand" src="../assets/svg/logos/logo.svg" alt="Logo">
              </a>
            </div>
            <!-- End Logo -->

            <!-- Nav Link -->
            <ul class="nav nav-sm nav-x-0 flex-column">
              <li class="nav-item">
                <a class="nav-link media" href="#">
                    <span class="media">
                      <span class="fas fa-location-arrow mt-1 mr-2"></span>
                      <span class="media-body">
                        153 Williamson Plaza, Maggieberg
                      </span>
                    </span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link media" href="#">
                    <span class="media">
                      <span class="fas fa-phone-alt mt-1 mr-2"></span>
                      <span class="media-body">
                        +1 (062) 109-9222
                      </span>
                    </span>
                </a>
              </li>
            </ul>
            <!-- End Nav Link -->
          </div>

          <div class="col-6 col-md-3 col-lg mb-5 mb-lg-0">
            <h5>Company</h5>

            <!-- Nav Link -->
            <ul class="nav nav-sm nav-x-0 flex-column">
              <li class="nav-item"><a class="nav-link" href="#">About</a></li>
              <li class="nav-item"><a class="nav-link" href="#">Careers <span class="badge badge-primary ml-1">We're hiring</span></a></li>
              <li class="nav-item"><a class="nav-link" href="#">Blog</a></li>
              <li class="nav-item"><a class="nav-link" href="#">Customers</a></li>
              <li class="nav-item"><a class="nav-link" href="#">Hire us</a></li>
            </ul>
            <!-- End Nav Link -->
          </div>

          <div class="col-6 col-md-3 col-lg mb-5 mb-lg-0">
            <h5>Features</h5>

            <!-- Nav Link -->
            <ul class="nav nav-sm nav-x-0 flex-column">
              <li class="nav-item"><a class="nav-link" href="#">Press</a></li>
              <li class="nav-item"><a class="nav-link" href="#">Release notes</a></li>
              <li class="nav-item"><a class="nav-link" href="#">Integrations</a></li>
              <li class="nav-item"><a class="nav-link" href="#">Pricing</a></li>
            </ul>
            <!-- End Nav Link -->
          </div>

          <div class="col-6 col-md-3 col-lg">
            <h5>Documentation</h5>

            <!-- Nav Link -->
            <ul class="nav nav-sm nav-x-0 flex-column">
              <li class="nav-item"><a class="nav-link" href="mailto:example@gmail.com">Support</a></li>
              <li class="nav-item"><a class="nav-link" href="#">Docs</a></li>
              <li class="nav-item"><a class="nav-link" href="#">Status</a></li>
              <li class="nav-item"><a class="nav-link" href="#">API Reference</a></li>
              <li class="nav-item"><a class="nav-link" href="#">Tech Requirements</a></li>
            </ul>
            <!-- End Nav Link -->
          </div>

          <div class="col-6 col-md-3 col-lg">
            <h5>Resources</h5>

            <!-- Nav Link -->
            <ul class="nav nav-sm nav-x-0 flex-column">
              <li class="nav-item">
                <a class="nav-link" href="#">
                    <span class="media align-items-center">
                      <i class="fa fa-info-circle mr-2"></i>
                      <span class="media-body">Help</span>
                    </span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                    <span class="media align-items-center">
                      <i class="fa fa-user-circle mr-2"></i>
                      <span class="media-body">Your Account</span>
                    </span>
                </a>
              </li>
            </ul>
            <!-- End Nav Link -->
          </div>
        </div>
      </div>

      <hr class="my-0">

      <div class="space-1">
        <div class="row align-items-md-center mb-7">
          <div class="col-md-6 mb-4 mb-md-0">
            <!-- Nav Link -->
            <ul class="nav nav-sm nav-x-0 align-items-center">
              <li class="nav-item">
                <a class="nav-link" href="#">Privacy &amp; Policy</a>
              </li>
              <li class="nav-item opacity mx-3">&#47;</li>
              <li class="nav-item">
                <a class="nav-link" href="#">Terms</a>
              </li>
              <li class="nav-item opacity mx-3">&#47;</li>
              <li class="nav-item">
                <a class="nav-link" href="#">Site Map</a>
              </li>
            </ul>
            <!-- End Nav Link -->
          </div>

          <div class="col-md-6 text-md-right">
            <ul class="list-inline mb-0">
              <!-- Social Networks -->
              <li class="list-inline-item">
                <a class="btn btn-xs btn-icon btn-soft-secondary" href="#">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-xs btn-icon btn-soft-secondary" href="#">
                  <i class="fab fa-google"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-xs btn-icon btn-soft-secondary" href="#">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-xs btn-icon btn-soft-secondary" href="#">
                  <i class="fab fa-github"></i>
                </a>
              </li>
              <!-- End Social Networks -->

              <!-- Language -->
              <li class="list-inline-item">
                <div class="hs-unfold">
                  <a class="js-hs-unfold-invoker dropdown-toggle btn btn-xs btn-soft-secondary" href="javascript:;"
                     data-hs-unfold-options='{
                        "target": "#footerLanguage",
                        "type": "css-animation",
                        "animationIn": "slideInDown"
                       }'>
                    <img class="dropdown-item-icon" src="../assets/vendor/flag-icon-css/flags/4x3/us.svg" alt="United States Flag">
                    <span>United States</span>
                  </a>

                  <div id="footerLanguage" class="hs-unfold-content dropdown-menu dropdown-unfold dropdown-menu-bottom mb-2">
                    <a class="dropdown-item active" href="#">English</a>
                    <a class="dropdown-item" href="#">Deutsch</a>
                    <a class="dropdown-item" href="#">Español</a>
                    <a class="dropdown-item" href="#">Français</a>
                    <a class="dropdown-item" href="#">Italiano</a>
                    <a class="dropdown-item" href="#">日本語</a>
                    <a class="dropdown-item" href="#">한국어</a>
                    <a class="dropdown-item" href="#">Nederlands</a>
                    <a class="dropdown-item" href="#">Português</a>
                    <a class="dropdown-item" href="#">Русский</a>
                  </div>
                </div>
              </li>
              <!-- End Language -->
            </ul>
          </div>
        </div>

        <!-- Copyright -->
        <div class="w-md-75 text-lg-center mx-lg-auto">
          <p class="text-muted small">&copy; Front. 2020 Htmlstream. All rights reserved.</p>
          <p class="text-muted small">When you visit or interact with our sites, services or tools, we or our authorised service providers may use cookies for storing information to help provide you with a better, faster and safer experience and for marketing purposes.</p>
        </div>
        <!-- End Copyright -->
      </div>
    </div>
  </footer>
  <!-- ========== END FOOTER ========== -->

  <!-- Go to Top -->
  <a class="js-go-to go-to position-fixed" href="javascript:;" style="visibility: hidden;"
     data-hs-go-to-options='{
       "offsetTop": 700,
       "position": {
         "init": {
           "right": 15
         },
         "show": {
           "bottom": 15
         },
         "hide": {
           "bottom": -15
         }
       }
     }'>
    <i class="fas fa-angle-up"></i>
  </a>
  <!-- End Go to Top -->


  <!-- JS Implementing Plugins -->
  <script src="../assets/js/vendor.min.js"></script>

  <!-- JS Front -->
  <script src="../assets/js/theme.min.js"></script>


  <!-- <script src="../assets/js/vendor.min.js"></script> -->
  <script src="../assets/vendor/jquery-ui-dist/jquery-ui.min.js"></script>

  <!-- JSFront -->
  <!-- <script src="../assets/js/theme.min.js"></script> -->
  <script src="../assets/js/hs.autocomplete-local-search.js"></script>
  <!-- JS Plugins Init. -->
  <script>
    $(document).on('ready', function () {
      // INITIALIZATION OF HEADER
      // =======================================================
      var header = new HSHeader($('#header')).init();


      // INITIALIZATION OF MEGA MENU
      // =======================================================
      var megaMenu = new HSMegaMenu($('.js-mega-menu')).init();


      // INITIALIZATION OF UNFOLD
      // =======================================================
      var unfold = new HSUnfold('.js-hs-unfold-invoker').init();


      // INITIALIZATION OF FORM VALIDATION
      // =======================================================
      $('.js-validate').each(function() {
        $.HSCore.components.HSValidation.init($(this));
      });

        // INITIALIZATION OF SELECT2
      // =======================================================
      $('.js-custom-select').each(function () {
        var select2 = $.HSCore.components.HSSelect2.init($(this));
      });

      // INITIALIZATION OF DROPZONE FILE ATTACH MODULE
      // =======================================================
      $('.js-dropzone').each(function () {
        var dropzone = $.HSCore.components.HSDropzone.init('#' + $(this).attr('id'));
      });


      // INITIALIZATION OF QUILLJS EDITOR
      // =======================================================
      var quill = $.HSCore.components.HSQuill.init('.js-quill');


      // INITIALIZATION OF GO TO
      // =======================================================
      $('.js-go-to').each(function () {
        var goTo = new HSGoTo($(this)).init();
      });
    });
  </script>

  <!-- IE Support -->
  <script>
    if (/MSIE \d|Trident.*rv:/.test(navigator.userAgent)) document.write('<script src="../assets/vendor/babel-polyfill/dist/polyfill.js"><\/script>');
  </script>
</body>

<!-- Mirrored from htmlstream.com/front/demo-real-estate/property-seller.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 08 Apr 2021 12:26:59 GMT -->
</html>
