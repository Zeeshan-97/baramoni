<?php include 'inc/app.php'; ?>
<!-- css file starts here -->
<link rel="stylesheet" href="css/add-property-sale.css">
<!-- css file starts here -->
<div class="wrapper">
    <?php include 'inc/sidebar.php' ?>
    <div class="main">
        <?php include 'inc/navbar.php' ?>

        <main class="content">
            <div class="container-fluid p-0">
                <section class="property-detail-wrapper">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="content-wrapper">

                                <h3>Add Property for sale</h3>

                            </div>
                        </div>
                        <form action="">
                            <div class="form-box-wrapper">
                                <div class="form-group">
                                    <h4>Property Address</h4>
                                </div>
                                <div class="form-group row align-items-center">
                                    <div class="col-lg-8">
                                        <label class="lab" for="">Don't worry, the property's name/number will NOT be displayed on our websites.*</label>
                                        <input type="text" placeholder="Type here your address to search on map" class="form-control">
                                    </div>
                                    <div class="col-lg-4">
                                        <button class="maps" onclick="getLocation()"><i class="fa fa-map-marker"></i>Click to get current location</button>
                                    </div>
                                </div>
                                <div class="form-group pb-5">
                                    <div class="mapouter">
                                        <div class="gmap_canvas"><iframe width="100%" height="388" id="gmap_canvas" src="https://maps.google.com/maps?q=2880%20Broadway,%20New%20York&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://123movies-to.org"></a><br>
                                            <style>
                                                .mapouter {
                                                    position: relative;
                                                    text-align: right;
                                                    height: 388px;
                                                    width: 100%;
                                                }
                                            </style><a href="https://www.embedgooglemap.net">embed google map location</a>
                                            <style>
                                                .gmap_canvas {
                                                    overflow: hidden;
                                                    background: none !important;
                                                    height: 388px;
                                                    width: 100%;
                                                }
                                            </style>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-6">
                                        <label for="Latitude (for Google Maps)*">Latitude (for Google Maps)*</label>
                                        <input type="text" placeholder="Latitude" class="form-control">
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="Latitude (for Google Maps)*">Longitude (for Google Maps)*</label>
                                        <input type="text" placeholder="Longtitude" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-8">
                                        <label for="Address*">Address*</label>
                                        <input type="text" placeholder="Address here" class="form-control">
                                    </div>
                                    <div class="col-lg-4">
                                        <label for="Town*">Town*</label>
                                        <input type="text" placeholder="Town" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-4">
                                        <label for="Address">City/State*</label>
                                        <input type="text" placeholder="City/State" class="form-control">
                                    </div>
                                    <div class="col-lg-4">
                                        <label for="Zip">Zip*</label>
                                        <input type="text" placeholder="Zip" class="form-control">
                                    </div>
                                    <div class="col-lg-4">
                                        <label for="Country">Country*</label>
                                        <input type="text" placeholder="Country" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-box-wrapper mt-5">
                                <div class="form-group">
                                    <h4>Property Details</h4>
                                </div>
                                <div class="form-group row align-items-center">
                                    <div class="col-lg-12">
                                        <label for="">Title*</label>
                                        <input type="text" placeholder="Type here" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-6">
                                        <label for="Latitude (for Google Maps)*">Select property type*</label>
                                        <select name="" class="form-control" id="">
                                            <option value="Commercial" selected>Commercial</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="Latitude (for Google Maps)*">Price*</label>
                                        <select name="" class="form-control" id="">
                                            <option value="EUR" selected>EUR</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-12">
                                        <label for="Description*">Description*</label>
                                        <div id="editor"></div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-12">
                                        <p>For security purposes and to prevent misuse of your contact information. Never include your phone number and email addresses to your description. All enquiries will be sent to you directly by email.</p>
                                        <p>
                                            Enter as much information possible; ads with detailed and longer descriptions get more views and replies. Remember what you loved about the property, explain the benefits of the location
                                        </p>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-4">
                                        <label for="Address">Area*</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">SQFT</button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">Action</a>
                                                    <a class="dropdown-item" href="#">Another action</a>
                                                    <a class="dropdown-item" href="#">Something else here</a>
                                                    <div role="separator" class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#">Separated link</a>
                                                </div>
                                            </div>
                                            <input type="text" class="form-control" placeholder="Area SQFt/S" aria-label="Text input with dropdown button">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <label for="Bedrooms">Bedrooms*</label>
                                        <input type="text" placeholder="Bedrooms" class="form-control">
                                    </div>
                                    <div class="col-lg-4">
                                        <label for="Bathrooms">Bathrooms*</label>
                                        <input type="text" placeholder="Bathrooms" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-box-wrapper mt-5">
                                <div class="form-group">
                                    <div class="headin-check-wrapper">
                                        <h4>Additional Info</h4>
                                        <div class="check-wrapper">
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
                                                <label class="custom-control-label" for="customRadioInline1">yes</label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
                                                <label class="custom-control-label" for="customRadioInline2">No</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-4">
                                            <label for="LotArea">Lot Area*</label>
                                            <input type="text" placeholder="Lot Area" class="form-control">
                                        </div>
                                        <div class="col-lg-4">
                                            <label for="YearBuilt">Year Built*</label>
                                            <input type="text" placeholder="Year Built" class="form-control">
                                        </div>
                                        <div class="col-lg-4">
                                            <label for="Flooring">Flooring*</label>
                                            <input type="text" placeholder="Flooring" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-4">
                                            <label for="GarageSize">Garage Size*</label>
                                            <input type="text" placeholder="Garage Size" class="form-control">
                                        </div>
                                        <div class="col-lg-4">
                                            <label for="Roofing">Roofing*</label>
                                            <input type="text" placeholder="Roofing" class="form-control">
                                        </div>
                                        <div class="col-lg-4">
                                            <label for="Parking">Parking*</label>
                                            <input type="text" placeholder="Parking" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-8">
                                            <label for="GarageSize">Video Embedded*</label>
                                            <input type="text" placeholder="Please add video URL" class="form-control">
                                        </div>
                                        <div class="col-lg-4">
                                            <label for="Style">Style*</label>
                                            <input type="text" placeholder="Style" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-box-wrapper mt-5">
                                <div class="form-group">
                                    <div class="headin-check-wrapper">
                                        <h4>Amenities</h4>
                                        <div class="check-wrapper">
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
                                                <label class="custom-control-label" for="customRadioInline1">yes</label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
                                                <label class="custom-control-label" for="customRadioInline2">No</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-3">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                <label class="custom-control-label" for="customCheck1">Allocated Parking</label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck2">
                                                <label class="custom-control-label" for="customCheck2">Carport</label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck3">
                                                <label class="custom-control-label" for="customCheck3"> Courtyard</label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck4">
                                                <label class="custom-control-label" for="customCheck4">Double Garage</label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck5">
                                                <label class="custom-control-label" for="customCheck5">Extensive Grounds</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck6">
                                                <label class="custom-control-label" for="customCheck6">Attic</label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck7">
                                                <label class="custom-control-label" for="customCheck7">Cellar</label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck8">
                                                <label class="custom-control-label" for="customCheck8">Deck</label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck9">
                                                <label class="custom-control-label" for="customCheck9">Double Glazing</label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck10">
                                                <label class="custom-control-label" for="customCheck10">Fireplace</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck11">
                                                <label class="custom-control-label" for="customCheck11">Balcony</label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck12">
                                                <label class="custom-control-label" for="customCheck12">Central Heating</label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck13">
                                                <label class="custom-control-label" for="customCheck13">Dining Room</label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck14">
                                                <label class="custom-control-label" for="customCheck14">Electric Heating</label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck15">
                                                <label class="custom-control-label" for="customCheck15">Fitted Bathroo</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck16">
                                                <label class="custom-control-label" for="customCheck16">Basement</label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck17">
                                                <label class="custom-control-label" for="customCheck17">Cloakroom</label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck18">
                                                <label class="custom-control-label" for="customCheck18">Disabled Access</label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck19">
                                                <label class="custom-control-label" for="customCheck19">Ensuite</label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck20">
                                                <label class="custom-control-label" for="customCheck20">Fitted Kitchen</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-box-wrapper mt-5">
                                <div class="form-group">
                                    <div class="headin-check-wrapper">
                                        <h4>Property Images</h4>
                                    </div>

                                </div>
                                <div class="form-group">
                                    <p>
                                        Upload up to 20 images by selecting them one by one from you computer, once you see them in the preview area use the blue icon button to upload them. Drag the images in the order that you want and delete any unwanted image
                                    </p>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-12">
                                        <input id="demo" type="file" name="files" accept=".jpg, .png, image/jpeg, image/png" multiple>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row pt-5 align-items-center">
                                <div class="col-lg-8">
                                    <div class="custom-control custom-checkbox mb-0">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                        <label class="custom-control-label" for="customCheck1">Save my name, email, and website in this browser for the next time I comment.</label>
                                    </div>
                                </div>
                                <div class="col-lg-4 text-right">
                                    <button class="btns sub-btn">Create Advert</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </section>
            </div>
        </main>

        <?php include 'inc/footer.php'; ?>
    </div>
</div>