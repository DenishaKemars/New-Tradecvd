<?php
/* =========================================================================
   Diamond Marketplace  —  Jewellery Search page nu exact clone
   Include from: client/diamond.php  (Search tab, #v-pills-1)
   Jewellery ni j CSS class vaparel chhe → navi CSS ni jarur nathi.
   Badha id/class `dm` prefix sathe chhe → purana code sathe koi conflict nahi. */
?>
<div class="setpagejw">

    <!-- ================= LEFT : FILTERS ================= -->
    <div class="setfiljw">
        <div id="dmSidenav" class="sidenav mySidenav py-2 px-0">
            <div class="setnavfilter d-flex align-items-center justify-content-between">
                <h4>Filters</h4>
                <button class="close-filter  p-0 border-0 bg-transparent">
                   <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M12 22C7.28595 22 4.92893 22 3.46447 20.5355C2 19.0711 2 16.714 2 12C2 7.28595 2 4.92893 3.46447 3.46447C4.92893 2 7.28595 2 12 2C16.714 2 19.0711 2 20.5355 3.46447C22 4.92893 22 7.28595 22 12C22 16.714 22 19.0711 20.5355 20.5355C19.0711 22 16.714 22 12 22ZM8.96965 8.96967C9.26254 8.67678 9.73742 8.67678 10.0303 8.96967L12 10.9394L13.9696 8.96969C14.2625 8.6768 14.7374 8.6768 15.0303 8.96969C15.3232 9.26258 15.3232 9.73746 15.0303 10.0303L13.0606 12L15.0303 13.9697C15.3232 14.2625 15.3232 14.7374 15.0303 15.0303C14.7374 15.3232 14.2625 15.3232 13.9696 15.0303L12 13.0607L10.0303 15.0303C9.73744 15.3232 9.26256 15.3232 8.96967 15.0303C8.67678 14.7374 8.67678 14.2626 8.96967 13.9697L10.9393 12L8.96965 10.0303C8.67676 9.73744 8.67676 9.26256 8.96965 8.96967Z" fill="#669934"></path> </g></svg>
                </button>
            </div>
	   <div class="col-12">
                <div class="searchje me-0">
                    <input type="text" class="search-bar" id="dm_fltsearch" placeholder="Enter Keyword">
                    <a href="javascript:void(0);" id="dm_btnfltsearch" class="search-icon">
                        <i class="fa fa-search"></i>
                    </a>
                </div>
            </div>
            <div class="allfilterse">
                <ul>

                    <!-- SHAPE -->
                    <!-- <li class="setshowje dmShapeBlock">
                        <div class="col-12 p-0 cut-group setmedfli setimgje">
                            <div class="form-check">
                                <h5>Shape</h5>
                                <div class="col-12 col-md-12 scroll-sidebar-main">
                                    <div class="row" id="dmShapeSideData"></div>
                                </div>
                            </div>
                        </div>
                    </li> -->

                    <!-- COLOR -->
                    <li class="setshowje dmColorBlock">
                        <div class="col-12 cut-group setmedfli">
                            <div class="form-check">
                                <h5>Color</h5>
                                <div class="col-12 col-md-12 scroll-sidebar-main">
                                    <div class="row" id="dmColorData"></div>
                                </div>
                            </div>
                        </div>
                    </li>

                    <!-- CLARITY -->
                    <li class="setshowje dmClarityBlock">
                        <div class="col-12 cut-group setmedfli">
                            <div class="form-check">
                                <h5>Clarity</h5>
                                <div class="col-12 col-md-12 scroll-sidebar-main">
                                    <div class="row" id="dmClarityData"></div>
                                </div>
                            </div>
                        </div>
                    </li>

                    <!-- SIZE (Carat) -->
                    <li class="setshowje">
                        <div class="col-12 cut-group setmedfli">
                            <div class="form-check">
                                <h5>Size (Carat)</h5>
                                <div class="col-12 col-md-12">
                                    <div class="row fliterset setcutgrje">
                                        <div class="cut-group w-100">
                                            <input type="text" id="dm_fromsize" class="fromusd"
                                                   onkeypress="numbonly(event);" onpaste="numbonly(event);"
                                                   placeholder="From">
                                        </div>
                                        <div class="cut-group w-100 mt-2">
                                            <input type="text" id="dm_tosize" class="fromusd"
                                                   onkeypress="numbonly(event);" onpaste="numbonly(event);"
                                                   placeholder="To">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                    <!-- PRICE -->
                    <li class="setshowje">
                        <div class="col-12 cut-group setmedfli">
                            <div class="form-check">
                                <h5>Total Price ($)</h5>
                                <div class="col-12 col-md-12">
                                    <div class="row fliterset setcutgrje">
                                        <div class="cut-group w-100">
                                            <input type="text" id="dm_fromprice" class="fromusd"
                                                   onkeypress="numbonly(event);" onpaste="numbonly(event);"
                                                   placeholder="From">
                                        </div>
                                        <div class="cut-group w-100 mt-2">
                                            <input type="text" id="dm_toprice" class="fromusd"
                                                   onkeypress="numbonly(event);" onpaste="numbonly(event);"
                                                   placeholder="To">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                    <!-- CUT -->
                    <li class="setshowje dmCutBlock">
                        <div class="col-12 cut-group setmedfli">
                            <div class="form-check">
                                <h5>Cut</h5>
                                <div class="col-12 col-md-12 scroll-sidebar-main">
                                    <div class="row" id="dmCutData"></div>
                                </div>
                            </div>
                        </div>
                    </li>

                    <!-- POLISH -->
                    <li class="setshowje dmPolishBlock">
                        <div class="col-12 cut-group setmedfli">
                            <div class="form-check">
                                <h5>Polish</h5>
                                <div class="col-12 col-md-12 scroll-sidebar-main">
                                    <div class="row" id="dmPolishData"></div>
                                </div>
                            </div>
                        </div>
                    </li>

                    <!-- SYMMETRY -->
                    <li class="setshowje dmSymmetryBlock">
                        <div class="col-12 cut-group setmedfli">
                            <div class="form-check">
                                <h5>Symmetry</h5>
                                <div class="col-12 col-md-12 scroll-sidebar-main">
                                    <div class="row" id="dmSymmetryData"></div>
                                </div>
                            </div>
                        </div>
                    </li>

                    <!-- FLUORESCENCE -->
                    <li class="setshowje dmIntensityBlock">
                        <div class="col-12 cut-group setmedfli">
                            <div class="form-check">
                                <h5>Fluorescence</h5>
                                <div class="col-12 col-md-12 scroll-sidebar-main">
                                    <div class="row" id="dmIntensityData"></div>
                                </div>
                            </div>
                        </div>
                    </li>

                    <!-- LAB -->
                    <li class="setshowje dmLabBlock">
                        <div class="col-12 cut-group setmedfli">
                            <div class="form-check">
                                <h5>Lab</h5>
                                <div class="col-12 col-md-12 scroll-sidebar-main">
                                    <div class="row" id="dmLabData"></div>
                                </div>
                            </div>
                        </div>
                    </li>

                    <!-- SHADE -->
                    <li class="setshowje dmShadeBlock">
                        <div class="col-12 cut-group setmedfli">
                            <div class="form-check">
                                <h5>Shade</h5>
                                <div class="col-12 col-md-12 scroll-sidebar-main">
                                    <div class="row" id="dmShadeData"></div>
                                </div>
                            </div>
                        </div>
                    </li>

                    <!-- EYE CLEAN -->
                    <li class="setshowje dmEyeCleanBlock">
                        <div class="col-12 cut-group setmedfli">
                            <div class="form-check">
                                <h5>Eye Clean</h5>
                                <div class="col-12 col-md-12 scroll-sidebar-main">
                                    <div class="row" id="dmEyeCleanData"></div>
                                </div>
                            </div>
                        </div>
                    </li>

                    <!-- GIRDLE -->
                    <li class="setshowje dmGirdleBlock">
                        <div class="col-12 cut-group setmedfli">
                            <div class="form-check">
                                <h5>Girdle</h5>
                                <div class="col-12 col-md-12 scroll-sidebar-main">
                                    <div class="row" id="dmGirdleData"></div>
                                </div>
                            </div>
                        </div>
                    </li>

                    <!-- ROUGH SOURCE -->
                    <!--<li class="setshowje dmRoughBlock">-->
                    <!--    <div class="col-12 cut-group setmedfli">-->
                    <!--        <div class="form-check">-->
                    <!--            <h5>Rough Source</h5>-->
                    <!--            <div class="col-12 col-md-12 scroll-sidebar-main">-->
                    <!--                <div class="row" id="dmRoughData"></div>-->
                    <!--            </div>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</li>-->

                    <!-- LOCATION -->
                    <!--<li class="setshowje dmLocationBlock">-->
                    <!--    <div class="col-12 cut-group setmedfli">-->
                    <!--        <div class="form-check">-->
                    <!--            <h5>Location</h5>-->
                    <!--            <div class="col-12 col-md-12 scroll-sidebar-main">-->
                    <!--                <div class="row" id="dmLocationData"></div>-->
                    <!--            </div>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</li>-->
                    <li class="setshowje dmLocationBlock">
                        <div class="col-12 cut-group setmedfli">
                            <div class="form-check">
                                <h5>Location</h5>
                    
                                <details id="dmLocationDropdown" class="dm-location-select">
                                    <summary>
                                        <span id="dmLocationTags"></span>
                                        <span class="dm-location-arrow"></span>
                                    </summary>
                    
                                    <div class="dm-location-menu">
                                        <input type="search"
                                               id="dmLocationSearch"
                                               placeholder="Search location..."
                                               autocomplete="off">
                    
                                        <div id="dmLocationOptions"></div>
                                    </div>
                                </details>
                    
                                <!-- Existing filter values -->
                                <div id="dmLocationData" hidden></div>
                            </div>
                        </div>
                    </li>

                </ul>
            </div>
        </div>
    </div>

    <!-- ================= RIGHT : RESULTS ================= -->
    <div class="rightbarjew">

        <div class="loder-div">
            <div class="chart-loading dm-loading" style="display:none;">
                <img alt="loading-img" src="assets/img/loading.gif">
            </div>
        </div>

        <!-- keyword + shape strip -->
        <div class="row shapefilterDiv dmShapeStripDiv mx-0">
           
            <div class="filter-box setfilterbox bg-transparent">
                <div class="form-group shape-group dash-shape setresjw pt-0">
                    <div class="dm-shape-strip-layout">
                        <div class="filter-container-set dm-shape-strip__items" id="dmShapeStrip"></div>
                        <button type="button" class="dm-shape-toggle" id="dmShapeToggle"
                            aria-controls="dmShapeStrip" aria-expanded="false"
                            aria-label="Show more shapes"></button>
                    </div>
                </div>
            </div>
        </div>

        <!-- count + sort -->
        <div class="productJwelery">
            <div class="card bg-transparent">
               <div class="card-body px-0 pt-0 py-3">
                        <div class="row jewset mx-0 align-items-center">
                        <div class="col-lg-4">
                            <div class="moredetail">
                                <ul>
                                    <li><b class="dmTotalItems">0 Diamonds</b>&nbsp;|</li>
                                    <li>&nbsp;<b class="dmTotalPrice">Total Price : $0</b></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="d-flex align-items-center justify-content-end gap-3 flex-wrap">
                                <ul class="nav responsive-tab nav-material nav-material-white justify-content-md-end justify-content-center white-fancy-diamond-tabination" id="pills-tab" role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <a class="nav-link active" id="white-diamond-tab" data-bs-toggle="pill"
                                                    data-bs-target="#white-diamond" type="button" role="tab" aria-controls="white-diamond"
                                                    aria-selected="true">Diamond</a>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <a class="nav-link" id="fancy-diamond-tab" data-bs-toggle="pill"
                                                    data-bs-target="#fancy-diamond" type="button" role="tab"
                                                    aria-controls="fancy-diamond" aria-selected="false">Fancy Diamond</a>
                                            </li>
                                           
                                        </ul>                           
                                <div class="setresfilterbar">
                                                <button type="button" class="setfilter dmSetFilter">
                                                    <img src="<?php echo $config->getImageurl(); ?>images/searchpage/fliter.svg" alt="filter" title="filter">
                                                </button>
                                            </div>
                                <div class="btsesearch">
                                    <div class="text-right searchhead">
                                        <div class="searchgreade searchcom setsho">
                                            <select class="form-control w-auto shortbydianmondse ml-auto" id="dm_sortbyid"></select>
                                        </div>
                                        <!--<div class="searchgreade searchcom">-->
                                        <!--    <button type="button" class="btn searchbtnset" id="dm_btnreset" title="Reset all filters">-->
                                        <!--        <img src="<?php echo $config->getImageurl(); ?>images/searchpage/3.svg" alt="reset" title="reset">-->
                                        <!--    </button>-->
                                        <!--</div>-->
                                    </div>
                                </div>
                             <!-- product grid -->
                                <div class="dm-view-switch" role="group" aria-label="Product view">
                                            <button type="button" class="dm-view-switch__button" data-view="grid"
                                                aria-label="Grid view" aria-pressed="false" title="Grid view">
                                                <i class="fa fa-th-large" aria-hidden="true"></i>
                                            </button>
                                            <button type="button" class="dm-view-switch__button is-active" data-view="list"
                                                aria-label="List view" aria-pressed="true" title="List view">
                                                <i class="fa fa-list" aria-hidden="true"></i>
                                            </button>
                                        </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="shapesearch searchjewellerylistDiv" id="dmSelectedTags"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

       
      <div class="grid-products grid--view-items prd-grid productsetje" id="dmGridData" data-nextpage="0"></div>
      <div class="list-view grid-list">
          <div class="table-responsive">
                                                        <table class="table mt-0 mb-5 table-tb" id="listmydiamondDatatbl" data-show="0" data-nextpage="0">

                                                        <thead>

                                                            <tr class="settabledi">

                                                                <th class="tbl-check d-none">

                                                                    <div class="text-center">

                                                                        <div class="custom-control custom-checkbox m-0 w-auto">

                                                                            <input type="checkbox" class="custom-control-input" id="tblCheckAll" name="tblCheckAll">

                                                                            <label class="custom-control-label mb-n1 diamond-data-delete" for="tblCheckAll">All</label>

                                                                        </div>

                                                                    </div>

                                                                </th>

                                                                <th>location</th>

                                                                <th>Shape</th>

                                                                <th>Size</th>

                                                                <th>Color</th>

                                                                <th>Clarity</th>

                                                                <th>Cut</th>

                                                                <th>Polish</th>

                                                                <th>Symm</th>

                                                                <th>Fluor.</th>

                                                                <th>Lab</th>

                                                                <th>$/Ct</th>

                                                                <th>Discount (%)</th>

                                                                <th>Total Price</th>

                                                                <th>Depth (%)</th>

                                                                <th>Table (%)</th>

                                                                <th>Measurement</th>

                                                                <th>Stock No</th>

                                                                <th>Is Active</th>

                                                                <!-- <th>Action</th> -->

                                                            </tr>

                                                        </thead>

                                                        <tbody id="listmydiamondData">



                                                        </tbody>

                                                    </table>
                                                    </div>
      </div>

        <!-- pagination -->
        <div class="sticky-sec-sec">
            <div class="container-fluid">
                <div class="row sticky-sec">
                    <div class="text-left col-7 col-md-4 m-auto" id="dmPaginationDiv"></div>
                 
                </div>
            </div>
        </div>

    </div>
</div>


<script>
/* =========================================================================
   DIAMOND MARKETPLACE  —  JS
   ========================================================================= */

var DM_MASTER_URL  = '<?php echo $config->getEndpointurl(); ?>master';
var DM_DIAMOND_URL = '<?php echo $config->getEndpointurl(); ?>diamond';
var DM_IMG_URL     = '<?php echo $config->getImageurl(); ?>';

function dm_headers(useraction) {
    return {
        Accept: 'application/json',
        platform: 4,
        userpagename: getpagename(),
        useraction: useraction || 'editright',
        masterlisting: false,
        responsetype: 'JSON'
    };
}

/* ---------- generic master list → sidebar checkbox list ---------- */
function dm_loadmaster(action, targetid, cls, blockcls) {
    var fd = new FormData();
    fd.append('action', action);
    ajaxrequest('POST', DM_MASTER_URL, fd, dm_headers(), dm_ok, function () {});

    function dm_ok(data) {
        var r = typeof data === 'string' ? JSON.parse(data) : data;
        var h = '';
        $('.' + blockcls).addClass('d-none');
        if (r.status == 1 && r.data && r.data.length > 0) {
            $('.' + blockcls).removeClass('d-none');
            for (var i = 0; i < r.data.length; i++) {
                var d = r.data[i];
                h += '<div class="col-4 cut-group px-0">';
                h += '  <div class="form-check">';
                h += '    <input class="form-check-input ' + cls + '" type="checkbox"' +
                     ' data-name="' + d.name + '" data-idx="' + i + '"' +
                     ' value="' + d.id + '" id="' + cls + d.id + '">';
                h += '    <label class="form-check-label ml-4" for="' + cls + d.id + '">' + d.name + '</label>';
                h += '  </div>';
                h += '</div>';
            }
        }
        $('#' + targetid).html(h);
        
         if (targetid === 'dmLocationData') {
            dm_build_location_multiselect();
        }
    }
}

/* ---------- shape : top strip + sidebar list ---------- */
function dm_loadshape() {
    var fd = new FormData();
    fd.append('action', 'listshape');
    ajaxrequest('POST', DM_MASTER_URL, fd, dm_headers(), dm_ok, function () {});

    function dm_ok(data) {
        var r = typeof data === 'string' ? JSON.parse(data) : data;
        var strip = '', side = '';
        $('.dmShapeStripDiv').addClass('d-none');
        $('.dmShapeBlock').addClass('d-none');
        if (r.status == 1 && r.data && r.data.length > 0) {
            $('.dmShapeStripDiv').removeClass('d-none');
            $('.dmShapeBlock').removeClass('d-none');
            for (var i = 0; i < r.data.length; i++) {
                var d = r.data[i];

                strip += '<div class="filter custom-checkbox">';
                strip += '  <input type="checkbox" id="dmshp' + d.id + '" data-name="' + d.name + '"' +
                         ' class="dashboard-control custom-control-input dm_shapeid" value="' + d.id + '">';
                strip += '  <label for="dmshp' + d.id + '" class="custom-control-label with-img">';
                strip += '    <span class="img-wrap"><img src="' + DM_IMG_URL + d.img + '" alt="' + d.name + '" class="img-responsive"></span>';
                strip += '    <span class="text-label">' + d.name + '</span>';
                strip += '  </label>';
                strip += '</div>';

                side += '<div class="col-12 col-md-12 cut-group">';
                side += '  <div class="form-check">';
                side += '    <input class="form-check-input dm_sideshapeid" type="checkbox"' +
                        ' data-name="' + d.name + '" value="' + d.id + '" id="dmsideshp' + d.id + '">';
                side += '    <div class="jetype"><img src="' + DM_IMG_URL + d.img + '" alt="' + d.name + '" title="' + d.name + '"></div>';
                side += '    <label class="form-check-label ml-4" for="dmsideshp' + d.id + '">' + d.name + '</label>';
                side += '  </div>';
                side += '</div>';
            }
        }
        $('#dmShapeStrip').html(strip);
        $('#dmShapeSideData').html(side); $('#dmShapeStrip').removeClass('is-expanded');
            $('#dmShapeToggle').attr({
                'aria-expanded': 'false',
                'aria-label': 'Show more shapes'
            });
            dm_update_shape_toggle();
    }
}

 function dm_update_shape_toggle() {
        var strip = $('#dmShapeStrip');
        var items = strip.children('.filter');
        var button = $('#dmShapeToggle');

        if (!items.length) {
            button.hide();
            return;
        }

        strip[0].style.setProperty('--dm-shape-row-height', items.first().outerHeight() + 'px');
        

        var firstRowTop = items.first()[0].getBoundingClientRect().top;
        var hasMoreRows = items.toArray().some(function (item) {
            return item.getBoundingClientRect().top > firstRowTop + 1;
        });

        if (!hasMoreRows) {
            strip.removeClass('is-expanded');
            button.attr({
                'aria-expanded': 'false',
                'aria-label': 'Show more shapes'
            }).hide();
        }
    }
    
/* ---------- sort by ---------- */
function dm_loadsortby() {
    var fd = new FormData();
    fd.append('action', 'listdiamondsortby');
    ajaxrequest('POST', DM_MASTER_URL, fd, dm_headers(), dm_ok, function () {});

    function dm_ok(data) {
        var r = typeof data === 'string' ? JSON.parse(data) : data;
        var h = '<option value="">Sort By</option>';
        if (r.status == 1 && r.data && r.data.length > 0) {
            for (var i = 0; i < r.data.length; i++) {
                h += '<option value="' + r.data[i].id + '">' + r.data[i].name + '</option>';
            }
        }
        $('#dm_sortbyid').html(h);
    }
}

/* ---------- helpers ---------- */
function dm_checked(sel) {
    var out = { ids: [], names: [], idx: [] };
    $(sel).each(function () {
        if ($(this).prop('checked') === true) {
            out.ids.push($(this).val());
            out.names.push($(this).attr('data-name'));
            out.idx.push(parseInt($(this).attr('data-idx')) || 0);
        }
    });
    return out;
}

/* Cut / Polish / Symmetry API ma FROM-TO range le chhe (IN list nahi).
   Master list pehla thi displayorder ma sorted aave chhe, etle
   checked ma sauthi pehlo = FROM, sauthi chhello = TO. */
function dm_range(c) {
    if (c.ids.length === 0) return null;
    var arr = [];
    for (var i = 0; i < c.ids.length; i++) arr.push({ id: c.ids[i], k: c.idx[i] });
    arr.sort(function (a, b) { return a.k - b.k; });
    return { from: arr[0].id, to: arr[arr.length - 1].id };
}

function dm_appendarr(fd, key, ids) {
    for (var i = 0; i < ids.length; i++) fd.append(key + '[]', ids[i]);
}

/* ---------- selected filter tags ---------- */
function dm_tags() {
    var map = [
        ['Shape',        dm_checked('#dmShapeStrip .dm_shapeid').names.concat(dm_checked('#dmShapeSideData .dm_sideshapeid').names)],
        ['Color',        dm_checked('#dmColorData .dm_colorid').names],
        ['Clarity',      dm_checked('#dmClarityData .dm_clarityid').names],
        ['Cut',          dm_checked('#dmCutData .dm_cutid').names],
        ['Polish',       dm_checked('#dmPolishData .dm_polishid').names],
        ['Symmetry',     dm_checked('#dmSymmetryData .dm_symmetryid').names],
        ['Fluorescence', dm_checked('#dmIntensityData .dm_intensityid').names],
        ['Lab',          dm_checked('#dmLabData .dm_labid').names],
        ['Shade',        dm_checked('#dmShadeData .dm_shadeid').names],
        ['Eye Clean',    dm_checked('#dmEyeCleanData .dm_eyecleanid').names],
        ['Girdle',       dm_checked('#dmGirdleData .dm_girdleid').names],
        ['Rough Source', dm_checked('#dmRoughData .dm_roughid').names],
        ['Location',     dm_checked('#dmLocationData .dm_locationid').names]
    ];
    var h = '';
    for (var i = 0; i < map.length; i++) {
        for (var j = 0; j < map[i][1].length; j++) {
            h += '<a href="javascript:void(0);" class="btn m-1 searchbtnset">' +
                 '<b>' + map[i][0] + ' : </b><span>' + map[i][1][j] + '</span><span class="btn-remove-tag">X</span></a>';
        }
    }
    $('#dmSelectedTags').html(h);
}

/* ---------- MAIN : diamond listing ---------- */
/* Render the same marketplace response in the table and grid. */
function dm_escape(value) {
    return String(value == null ? '' : value).replace(/[&<>"']/g, function (c) {
        return {'&': '&amp;', '<': '&lt;', '>': '&gt;', '"': '&quot;', "'": '&#39;'}[c];
    });
}

function dm_normalize_items(data) {
    if (typeof data === 'string') {
        try { data = JSON.parse(data); } catch (e) { return []; }
    }
    if (!data || typeof data !== 'object') return [];
    var items = Array.isArray(data) ? data : Object.keys(data).map(function (key) { return data[key]; });
    return items.filter(function (item) { return item && typeof item === 'object'; });
}

var dmTableItems = [];

function dm_render_table(items, message) {
    items = dm_normalize_items(items);
    dmTableItems = items;
    var rows = '';
    function value(v) {
        return v == null || v === '' ? '-' : String(v);
    }
    function percent(v) {
        return v == null || v === '' ? '-' : String(v) + '%';
    }
    function money(v) {
        var amount = parseFloat(v);
        return isFinite(amount) ? '$' + amount.toFixed(2) : '-';
    }
    for (var i = 0; i < items.length; i++) {
        var d = items[i];
        var color = d.withfancycolor == 1
            ? [d.fancyintensity, d.overtone, d.fancycolor1, d.fancycolor2].filter(function (v) { return v != null && v !== ''; }).join(', ')
            : d.color;
        var size = d.isparcel == 1
            ? value(d.sievename) + '-' + value(d.tosievename) : d.size;
        var cells = [d.country, d.shape, size, color, d.clarity, d.cut,
            d.polish, d.symmetry, d.intensity, d.lab, money(d.price),
            percent(d.savanipercentage), money(d.totalprice), percent(d.depthper),
            percent(d.tableper), [value(d.length), value(d.width), value(d.depth)].join('-'),
            d.stock, d.isactive == 1 ? 'Active' : 'Inactive'];
        rows += '<tr class="dm-table-row" tabindex="0" role="button" aria-expanded="false" aria-label="Show diamond details" data-dm-index="' + i + '" data-index="' + dm_escape(d.id) + '">';
        rows += '<td class="tbl-check d-none"></td>';
        for (var j = 0; j < cells.length; j++) {
            rows += '<td class="tbl-highlight-td">' + dm_escape(value(cells[j])) + '</td>';
        }
        rows += '</tr>';
    }
    if (!rows) {
        rows = '<tr><td colspan="19" class="text-center p-4">' +
            dm_escape(message || 'No diamonds found.') + '</td></tr>';
    }
    $('#listmydiamondData').html(rows);
}

function dm_detail_html(d) {
    function text(v) { return dm_escape(v == null || v === '' ? '-' : v); }
    function money(v) { var n = parseFloat(v); return isFinite(n) ? '$' + n.toFixed(2) : '-'; }
    function url(v) {
        v = String(v || '').trim();
        return /^(https?:\/\/|\/(?!\/))/i.test(v) ? dm_escape(v) : '';
    }
    function fields(pairs) {
        return '<dl class="dm-detail-fields">' + pairs.map(function (p) {
            return '<div><dt>' + text(p[0]) + '</dt><dd>' + text(p[1]) + '</dd></div>';
        }).join('') + '</dl>';
    }
    var media = [];
    var images = Array.isArray(d.diamondimagedetail) ? d.diamondimagedetail : [];
    images.forEach(function (m) {
        var src = m.image || '';
        if (src && !/^https?:\/\//i.test(src)) src = DM_IMG_URL + src;
        if (url(src)) media.push({src: src, video: /\.(mp4|webm|ogg)(?:[?#]|$)/i.test(src)});
    });
    if (!media.length && url(d.diamondimglink || d.diamondimgurl)) {
        media.push({src: d.diamondimglink || d.diamondimgurl, video: false});
    }
    if (url(d.videolink) && /\.(mp4|webm|ogg)(?:[?#]|$)/i.test(d.videolink)) {
        media.push({src: d.videolink, video: true});
    }
    var h = '<div class="dm-detail-heading"><strong>' +
        text([d.shape, d.size, d.color, d.clarity, d.cut, d.polish, d.symmetry].filter(Boolean).join(', ')) +
        '</strong><button type="button" class="btn btn-sm btn-success btnshowdiamonddetail" data-diamondid="' + dm_escape(d.id) + '">Diamond Page</button></div>';
    h += '<div class="dm-detail-grid"><section class="dm-detail-card"><h4>Media</h4><div class="dm-detail-media">';
    media.forEach(function (m, i) {
        h += '<div class="dm-detail-slide"' + (i ? ' hidden' : '') + '>';
        h += m.video ? '<video src="' + url(m.src) + '" controls muted playsinline preload="none"></video>'
            : '<img src="' + url(m.src) + '" alt="' + text(d.stock) + '" loading="lazy">';
        h += '</div>';
    });
    if (!media.length) h += '<p class="p-4 text-center">No media available.</p>';
    if (media.length > 1) h += '<button type="button" class="dm-media-prev" aria-label="Previous media">&#10094;</button><button type="button" class="dm-media-next" aria-label="Next media">&#10095;</button>';
    h += '</div></section><section class="dm-detail-card"><h4>Diamond Details <small>' + text(d.dt) + '</small></h4>';
    h += fields([['Shape',d.shape],['Size',d.size],['Color',d.withfancycolor == 1 ? [d.fancyintensity,d.overtone,d.fancycolor1,d.fancycolor2].filter(Boolean).join(', ') : d.color],['Clarity',d.clarity],['Cut',d.cut],['Polish',d.polish],['Symm',d.symmetry],['Fluor.',d.intensity],['Lab',d.lab],['Depth (%)',d.depthper],['Table (%)',d.tableper],['Measurement',[d.length,d.width,d.depth].map(function(v){return v == null ? '-' : v;}).join('-')]]);
    h += '</section><section class="dm-detail-card"><h4>Price</h4>';
    h += fields([['Lot Diamond #',d.savanilotnumber],['Availability',d.availability],['Diamond Location',d.country],['Stock No',d.stock],['$/Ct',money(d.price)],['Discount (%)',d.savanipercentage],['Total Price',money(d.totalprice)]]);
    h += '<div class="dm-detail-links">';
    [['Report',d.reportfilelink || d.reportfileurl],['Video',d.videolink]].forEach(function (link) {
        if (url(link[1])) h += '<a class="btn btn-sm btn-outline-success" href="' + url(link[1]) + '" target="_blank" rel="noopener noreferrer">' + link[0] + '</a>';
    });
    return h + '</div></section></div>';
}

function dm_toggle_detail(row) {
    var $row = $(row);
    var wasOpen = $row.attr('aria-expanded') === 'true';
    var $table = $row.closest('table');
    var duration = window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches ? 0 : 350;

    // Animate an inner div: table rows themselves cannot slide smoothly.
    $table.find('.dm-table-detail').each(function () {
        var $detail = $(this);
        $detail.find('video').each(function () { this.pause(); });
        var $panel = $detail.find('.dm-detail-animate');
        if (typeof $panel.slideUp === 'function') {
            $panel.stop(true, false).slideUp(duration, function () { $detail.remove(); });
        } else {
            $detail.remove();
        }
    });
    $table.find('.dm-table-row').removeClass('active').attr('aria-expanded', 'false');
    if (wasOpen) return;
    var d = dmTableItems[parseInt($row.attr('data-dm-index'), 10)];
    if (!d) return;
    $row.addClass('active').attr('aria-expanded', 'true');
    var $detail = $('<tr class="dm-table-detail"><td colspan="19"><div class="dm-detail-animate" style="display:none"><div class="dm-detail-content">' + dm_detail_html(d) + '</div></div></td></tr>');
    $row.after($detail);
    var $panel = $detail.find('.dm-detail-animate');
    if (typeof $panel.slideDown === 'function') $panel.slideDown(duration);
    else $panel.show();
}
$('body').on('click', '#listmydiamondData .dm-table-row', function () { dm_toggle_detail(this); });
$('body').on('keydown', '#listmydiamondData .dm-table-row', function (e) {
    if (e.key === 'Enter' || e.key === ' ') { e.preventDefault(); dm_toggle_detail(this); }
});
$('body').on('click', '.dm-table-detail .dm-media-prev, .dm-table-detail .dm-media-next', function () {
    var $slides = $(this).closest('.dm-detail-media').find('.dm-detail-slide');
    var current = $slides.index($slides.filter(':not([hidden])'));
    $slides.find('video').each(function () { this.pause(); });
    var next = (current + ($(this).hasClass('dm-media-next') ? 1 : -1) + $slides.length) % $slides.length;
    $slides.prop('hidden', true).eq(next).prop('hidden', false);
});

function dm_listdata(page) {
    page = page || 1;
    $('.dm-loading').show();

    var nextpage = parseInt($('#dmGridData').attr('data-nextpage'));
    if (isNaN(nextpage) || nextpage < 0) nextpage = 0;

    var fd = new FormData();
    fd.append('action', 'listdiamond');
    fd.append('nextpage', nextpage + 1);
    fd.append('fltparcel', 0);
    fd.append('isdiamondsearch', 1);
    fd.append('fltmanagemydiamond', 0);
    fd.append('isfancy', $('#fancy-diamond-tab').hasClass('active') ? 1 : 0);
    fd.append('perpage', $('#dm_per_page').val());
    fd.append('sortbyid', $('#dm_sortbyid').val());

    /* multi-select filters */
    var shapeids = dm_checked('#dmShapeStrip .dm_shapeid').ids
                     .concat(dm_checked('#dmShapeSideData .dm_sideshapeid').ids);
    dm_appendarr(fd, 'fltshapeid',      shapeids);
    dm_appendarr(fd, 'fltcolorid',      dm_checked('#dmColorData .dm_colorid').ids);
    dm_appendarr(fd, 'fltclarityid',    dm_checked('#dmClarityData .dm_clarityid').ids);
    dm_appendarr(fd, 'fltintensityid',  dm_checked('#dmIntensityData .dm_intensityid').ids);
    dm_appendarr(fd, 'fltlabid',        dm_checked('#dmLabData .dm_labid').ids);
    dm_appendarr(fd, 'fltshadeid',      dm_checked('#dmShadeData .dm_shadeid').ids);
    dm_appendarr(fd, 'flteyecleanid',   dm_checked('#dmEyeCleanData .dm_eyecleanid').ids);
    dm_appendarr(fd, 'fltgridleid',     dm_checked('#dmGirdleData .dm_girdleid').ids);
    dm_appendarr(fd, 'fltroughsourceid', dm_checked('#dmRoughData .dm_roughid').ids);
    dm_appendarr(fd, 'fltlocationid',   dm_checked('#dmLocationData .dm_locationid').ids);

    /* range filters */
    var cut = dm_range(dm_checked('#dmCutData .dm_cutid'));
    if (cut) { fd.append('fltfromcutid', cut.from); fd.append('flttocutid', cut.to); }

    var pol = dm_range(dm_checked('#dmPolishData .dm_polishid'));
    if (pol) { fd.append('fltfrompolishid', pol.from); fd.append('flttopolishid', pol.to); }

    var sym = dm_range(dm_checked('#dmSymmetryData .dm_symmetryid'));
    if (sym) { fd.append('fltfromsymmetryid', sym.from); fd.append('flttosymmetryid', sym.to); }

    /* from-to inputs */
    fd.append('fltfromsize',  $('#dm_fromsize').val());
    fd.append('flttosize',    $('#dm_tosize').val());
    fd.append('fltfromprice', $('#dm_fromprice').val());
    fd.append('flttoprice',   $('#dm_toprice').val());

    /* keyword — Step 3 (optional) karo pachhi aa line ne 'fltsearch' ma badlo */
    // fd.append('fltstocknumbers', $('#dm_fltsearch').val());
    fd.append('fltsearch', $('#dm_fltsearch').val());

    ajaxrequest('POST', DM_DIAMOND_URL, fd,
        {
            'Accept': 'application/json',
            platform: 4,
            userpagename: getpagename(),
            useraction: $('#formevent').val(),
            masterlisting: false
        },
        dm_ok, dm_err);

    function dm_ok(data) {
        $('.dm-loading').hide();
        var r = typeof data === 'string' ? JSON.parse(data) : data;
        $('#dmPaginationDiv').html('');
        dm_tags();

        if (r.IsPackageExpire == 1) {
            $('#dmGridData').empty();
            dm_render_table([], r.message);
            Notiflix.Report.Warning(r.ExpiryTitle, r.message, false, function () {
                window.location = r.ExpiryURL;
            });
            return;
        }

        if (r.status == 0) {
            $('.dmTotalItems').html('0 Diamonds');
            $('.dmTotalPrice').html('Total Price : $0');
            $('#dmGridData').html('<div class="text-center p-5"><h4>' + dm_escape(r.message) + '</h4></div>');
            dm_render_table([], r.message);
            return;
        }

        $('.dmTotalItems').html((r.totaldiamond || 0) + ' Diamonds');
        $('.dmTotalPrice').html('Total Price : $' + (r.totalprice || 0));

        r.data = dm_normalize_items(r.data);
        dm_render_table(r.data);

        var h = '<div class="all-product-item">';
        for (var i = 0; i < r.data.length; i++) {
            var d = r.data[i];

            /* image : uploaded → link → default */
            var img = d.diamondimgurl;
            if (d.hasdiamondimage == 1 && d.diamondimagedetail && d.diamondimagedetail.length > 0) {
                img = DM_IMG_URL + d.diamondimagedetail[0].image;
            } else if (d.diamondimglink && d.diamondimglink !== '') {
                img = d.diamondimglink;
            }

            var title = (d.shape || '') + ' ' +
                        (d.size ? parseFloat(d.size).toFixed(2) + 'ct' : '') + ' ' +
                        (d.color || '') + ' ' + (d.clarity || '');

            h += '<div class="item">';
            h += '  <div class="product-image">';
            h += '    <a href="javascript:void(0);" class="product-img btnshowdiamonddetail" data-diamondid="' + d.id + '">';
            h += '      <img class="primary blur-up lazyloaded" src="' + img + '" alt="' + (d.stock || '') + '" title="' + (d.stock || '') + '">';
            h += '    </a>';
            h += '  </div>';
            h += '  <div class="product-details">';
            h += '    <div class="row prodesje"><div class="text-left"><div class="serjew">' + (d.stock || '') + '</div></div></div>';
            h += '    <div class="product-name text-uppercase">';
            h += '      <a href="javascript:void(0);" class="btnshowdiamonddetail" data-diamondid="' + d.id + '">' + title + '</a>';
            h += '    </div>';
            h += '    <div class="product-price">';
            h += '      <span class="price">$' + (d.totalprice || 0) + '</span>';
            h += '      <div class="text-right prosetm"><button class="ringbtnset">' + (d.lab || '-') + '</button></div>';
            h += '    </div>';
            h += '  </div>';
            h += '</div>';
        }
        h += '</div>';
        $('#dmGridData').html(h);

        /* pagination — 'pagination' ne 'dm-pagination' ma badlo jethi
           juno diamondsearch.php:566 no handler fire na thay */
        var pg = (r.pagedata || '')
                    .replace(/pagination/g, 'dm-pagination')
                    .replace(/go_btn/g, 'dm_go_btn')
                    .replace(/goto/g, 'dm-goto');
        $('#dmPaginationDiv').html(pg);
    }

    // function dm_err() {
    //     $('.dm-loading').hide();
    // }
    function dm_err(xhr) {
            $('.dm-loading').hide();
            var message = xhr && xhr.responseJSON && xhr.responseJSON.message
                ? xhr.responseJSON.message
                : 'Could not load diamond listings. Please try again.';
            $('#dmGridData').html('<div class="dm-empty-state" role="alert">' + dm_escape(message) + '</div>');
            dm_render_table([], message);
            $('#dmPaginationDiv').empty();
        }
}

/* ---------- events ---------- */

var dmSearchTimer;

$('body').on('change', '#dmSidenav .form-check-input', function () {
    $('#dmGridData').attr('data-nextpage', 0);
    dm_listdata(1);
});

$('body').on('change', '#dmShapeStrip .dm_shapeid', function () {
    $('#dmGridData').attr('data-nextpage', 0);
    dm_listdata(1);
});

$('body').on('click', '#dm_btnfltsearch', function () {
    clearTimeout(dmSearchTimer);
    $('#dmGridData').attr('data-nextpage', 0);
    dm_listdata(1);
});

$('body').on('input', '#dm_fltsearch', function() {
        clearTimeout(dmSearchTimer);
        dmSearchTimer = setTimeout(function() {
            $('#dmGridData').attr('data-nextpage', 0);
            dm_listdata(1);
        }, 300);
    });

$('body').on('keypress', '#dm_fltsearch', function (e) {
    if (e.which == 13) {
        e.preventDefault();
        clearTimeout(dmSearchTimer);
        $('#dmGridData').attr('data-nextpage', 0);
        dm_listdata(1);
    }
});

$('body').on('change', '#dm_sortbyid, #dm_per_page', function () {
    $('#dmGridData').attr('data-nextpage', 0);
        dm_listdata(1);
    });

    $('body').on('click', '#pills-tab a', function(e) {
        e.preventDefault();
        $('#pills-tab a').removeClass('active').attr('aria-selected', 'false');
        $(this).addClass('active').attr('aria-selected', 'true');
    $('#dmGridData').attr('data-nextpage', 0);
    dm_listdata(1);
});

$('body').on('change', '#dm_fromsize, #dm_tosize, #dm_fromprice, #dm_toprice', function () {
    $('#dmGridData').attr('data-nextpage', 0);
    dm_listdata(1);
});

$('body').on('click', '#dmPaginationDiv .dm-pagination li.active', function () {
    var page = $(this).attr('p');
    $('#dmGridData').attr('data-nextpage', parseInt(page) - 1);
    dm_listdata(page);
});

$('body').on('click', '#dm_btnreset', function () {
    $('#dmSidenav input[type=checkbox]').prop('checked', false);
    $('#dmShapeStrip input[type=checkbox]').prop('checked', false);
    
    dm_update_location_text();
    $('#dmLocationSearch').val('').trigger('input');
    $('#dmLocationDropdown').prop('open', false);
    
    $('#dm_fromsize, #dm_tosize, #dm_fromprice, #dm_toprice, #dm_fltsearch').val('');
    $('#dm_sortbyid').val('');
    $('#dmGridData').attr('data-nextpage', 0);
    dm_listdata(1);
});



// $('body').on('click', '.dm-view-switch__button', function () {
//         var view = $(this).attr('data-view');
//         var isList = view === 'list';

//         $('#dmGridData').toggleClass('dm-view-list', isList);
//         $('.dm-view-switch__button').removeClass('is-active').attr('aria-pressed', 'false');
//         $(this).addClass('is-active').attr('aria-pressed', 'true');
//     });

$('body').on('click', '.dm-view-switch__button', function () {
    var isList = $(this).attr('data-view') === 'list';
    var $section = $(this).closest('.rightbarjew');

    $section.find('.grid-products.grid--view-items.prd-grid.productsetje')
        .toggle(!isList);

    $section.find('.list-view.grid-list')
        .toggle(isList);

    $section.find('.dm-view-switch__button')
        .removeClass('is-active')
        .attr('aria-pressed', 'false');

    $(this)
        .addClass('is-active')
        .attr('aria-pressed', 'true');
});

// Page load પર active button પ્રમાણે view બતાવો
$('.dm-view-switch__button.is-active').trigger('click');


// $('body').on('click', '#dmShapeToggle', function () {
//     var expanded = !$('#dmShapeStrip').hasClass('is-expanded');
//     $('#dmShapeStrip').toggleClass('is-expanded', expanded);
//     $(this).attr('aria-expanded', expanded ? 'true' : 'false')
//           .text(expanded ? 'Show fewer shapes' : 'Show more shapes');
// });

$('body').on('click', '#dmShapeToggle', function () {
    var expanded = !$('#dmShapeStrip').hasClass('is-expanded');

    $('#dmShapeStrip').toggleClass('is-expanded', expanded);

    $(this).attr({
        'aria-expanded': expanded ? 'true' : 'false',
        'aria-label': expanded ? 'Show fewer shapes' : 'Show more shapes'
    });
});

$(window).on('resize.dmShapeStrip', dm_update_shape_toggle);

/* Mobile filter toggle */
$('body').on('click', '.dmSetFilter', function () {
    $('.setfiljw')
        .addClass('filter-sidebar')
        .stop(true, true)
        .toggle(300);
});

/* Close filter */
$('body').on('click', '.close-filter', function (e) {
    e.preventDefault();

    $('.setfiljw').stop(true, true).hide(300);
        $('.setfiljw')
        .removeClass('filter-sidebar');
});

/* close filter click on body after  */
$('body').on('click', function (e) {
    if (
        $('body').find('.filter-sidebar').length &&
        !$(e.target).closest('.filter-sidebar, .dmSetFilter').length
    ) {
        $('.setfiljw').stop(true, true).hide(300, function () {
            $(this).removeClass('filter-sidebar');
        });
    }
});


function dm_update_location_text() {
    var $tags = $('#dmLocationTags').empty();
    var $inputs = $('#dmLocationData .dm_locationid');
    var selectedCount = 0;

    $inputs.each(function (index) {
        var selected = this.checked;
        var name = $(this).attr('data-name') || '';

        $('#dmLocationOptions .dm-location-option')
            .eq(index)
            .toggleClass('is-selected', selected)
            .attr('aria-pressed', String(selected));

        if (!selected) return;

        selectedCount++;

        var $tag = $('<span>', {
            class: 'dm-location-tag'
        });

        $('<span>').text(name).appendTo($tag);

        $('<button>', {
            type: 'button',
            class: 'dm-location-remove',
            text: '×',
            'data-index': index,
            'aria-label': 'Remove ' + name
        }).appendTo($tag);

        $tags.append($tag);
    });

    if (!selectedCount) {
        $('<span>', {
            class: 'dm-location-placeholder',
            text: 'Select locations'
        }).appendTo($tags);
    }
}

function dm_build_location_multiselect() {
    var $options = $('#dmLocationOptions').empty();

    $('#dmLocationData .dm_locationid').each(function (index) {
        $('<button>', {
            type: 'button',
            class: 'dm-location-option',
            'data-index': index,
            'aria-pressed': String(this.checked)
        })
        .text($(this).attr('data-name') || '')
        .appendTo($options);
    });

    $('#dmLocationSearch').val('');
    dm_update_location_text();
}

$('body').on('click', '.dm-location-option', function () {
    var index = Number($(this).attr('data-index'));
    var $input = $('#dmLocationData .dm_locationid').eq(index);

    $input.prop('checked', !$input.prop('checked'));

    dm_update_location_text();

    // Existing change handler reloads diamonds.
    $input.trigger('change');
});

$('body').on('click', '.dm-location-remove', function (e) {
    e.preventDefault();
    e.stopPropagation();

    var index = Number($(this).attr('data-index'));
    var $input = $('#dmLocationData .dm_locationid').eq(index);

    $input.prop('checked', false);

    dm_update_location_text();
    $input.trigger('change');
});

$('body').on('input', '#dmLocationSearch', function () {
    var keyword = this.value.toLowerCase().trim();

    $('#dmLocationOptions .dm-location-option').each(function () {
        $(this).toggle(
            $(this).text().toLowerCase().indexOf(keyword) !== -1
        );
    });
});

$(document).on('click', function (e) {
    if (!$(e.target).closest('#dmLocationDropdown').length) {
        $('#dmLocationDropdown').prop('open', false);
    }
});

// Dropdown open થાય ત્યારે options સુધી scroll કરો
document.getElementById('dmLocationDropdown')
    .addEventListener('toggle', function () {
        if (!this.open) return;

        var dropdown = this;

        requestAnimationFrame(function () {
            dropdown.querySelector('.dm-location-menu')
                .scrollIntoView({
                    behavior: 'smooth',
                    block: 'nearest'
                });
        });
    });


/* ---------- init ---------- */
$(document).ready(function () {
    dm_loadshape();
    dm_loadsortby();
    dm_loadmaster('listdiamondcolor',       'dmColorData',    'dm_colorid',     'dmColorBlock');
    dm_loadmaster('listclarity',            'dmClarityData',  'dm_clarityid',   'dmClarityBlock');
    dm_loadmaster('listcut',                'dmCutData',      'dm_cutid',       'dmCutBlock');
    dm_loadmaster('listpolish',             'dmPolishData',   'dm_polishid',    'dmPolishBlock');
    dm_loadmaster('listsymmetry',           'dmSymmetryData', 'dm_symmetryid',  'dmSymmetryBlock');
    dm_loadmaster('listintensity',          'dmIntensityData','dm_intensityid', 'dmIntensityBlock');
    dm_loadmaster('listlab',                'dmLabData',      'dm_labid',       'dmLabBlock');
    dm_loadmaster('listshade',              'dmShadeData',    'dm_shadeid',     'dmShadeBlock');
    dm_loadmaster('listeyeclean',           'dmEyeCleanData', 'dm_eyecleanid',  'dmEyeCleanBlock');
    dm_loadmaster('listgirdle',             'dmGirdleData',   'dm_girdleid',    'dmGirdleBlock');
    dm_loadmaster('listroughdiamondsource', 'dmRoughData',    'dm_roughid',     'dmRoughBlock');
    dm_loadmaster('listcountry',            'dmLocationData', 'dm_locationid',  'dmLocationBlock');

    dm_listdata(1);
});
</script>
<style>
    .gap-3 {
        gap : 16px;
    }

    .dm-view-switch {
        display: flex;
        justify-content: flex-end;
        gap: 4px;
    }

    .dm-view-switch__button {
        display: inline-flex;
        width: 36px;
        height: 34px;
        align-items: center;
        justify-content: center;
        border: 1px solid #d6dce1;
        border-radius: 4px;
        background: #fff;
        color: #536579;
        cursor: pointer;
    }

    .dm-view-switch__button.is-active {
        border-color: #669934;
        background: #669934;
        color: #fff;
    }
    .dm-shape-strip-layout {
        display: flex;
        align-items: flex-start;
        gap: 6px;
    }

    #dmShapeStrip {
        max-height: var(--dm-shape-row-height, 75px);
        overflow: hidden;
    }


    #dmShapeStrip.is-expanded {
        max-height: none;
        overflow: visible;
    }

    .dm-shape-toggle {
        display: inline-flex;
        flex: 0 0 auto;
        align-items: center;
        justify-content: center;
        width: 32px;
        height: 32px;
        padding: 0;
        border: 1px solid #80ad45;
        border-radius: 5px;
        background: #fff;
        color: #669934;
        cursor: pointer;
        line-height: 1.4;
    }

    .dm-shape-toggle::after {
        width: 7px;
        height: 7px;
        border-right: 2px solid currentColor;
        border-bottom: 2px solid currentColor;
        content: "";
        transform: rotate(45deg) translateY(-2px);
        transition: transform 0.2s ease;
    }

    .dm-shape-toggle[aria-expanded="true"]::after {
        transform: rotate(225deg) translate(0px);
    }


    #dmGridData.dm-view-list .all-product-item {
          display: grid;
    grid-template-columns: repeat(3, 12fr);
    gap: 10px;
    }

    #dmGridData.dm-view-list .item {
        display: flex;
        flex-direction: row;
        align-items: stretch;
    }

    #dmGridData .product-image {
        height: 205px;
        overflow: hidden;
        background: #f1f2f4;
    }

    #dmGridData.dm-view-list .product-image {
        flex: 0 0 180px;
    }

    #dmGridData .product-image {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    #dmGridData .product-image-placeholder {
        width: 100%;
        height: 100%;
        background: linear-gradient(135deg, #f1f2f4, #e4e8ec);
    }

    #dmGridData .dm-diamond-card__body {
        padding: 10px 8px 8px;
    }

    #dmGridData.dm-view-list .product-details {
        display: flex;
        flex: 1 1 auto;
        flex-direction: column;
        justify-content: center;
        padding: 12px 16px;
    }

    #dmGridData .dm-diamond-card__stock {
        display: block;
        margin-bottom: 4px;
        color: #5a5a5a;
        font-size: 12px;
        line-height: 1.3;
    }

    /*#dmGridData .dm-diamond-card__title {*/
    /*    overflow: hidden;*/
    /*    margin: 0;*/
    /*    color: #000;*/
    /*    font-size: 13px;*/
    /*    font-weight: 600;*/
    /*    line-height: 21px;*/
    /*    text-overflow: ellipsis;*/
    /*    text-transform: capitalize;*/
    /*    white-space: nowrap;*/
    /*}*/

    /*#dmGridData .dm-diamond-card__footer {*/
    /*    display: flex;*/
    /*    min-height: 25px;*/
    /*    align-items: center;*/
    /*    justify-content: space-between;*/
    /*    gap: 8px;*/
    /*}*/

    /*#dmGridData .dm-diamond-card__price {*/
    /*    color: #669934;*/
    /*    font-size: 20px;*/
    /*    font-weight: 600;*/
    /*    line-height: 1.2;*/
    /*}*/

    #dmGridData .dm-diamond-card__lab {
        padding: 3px 8px;
        border-radius: 6px;
        background: #66993421;
        color: #669934;
        font-size: 10px;
        font-weight: 600;
        line-height: 1.3;
    }

    #dmGridData .dm-empty-state {
        grid-column: 1 / -1;
        padding: 24px;
        color: #536579;
        text-align: center;
    }


    @media (max-width: 900px) {
        #dmGridData .product-image {
            height: 180px;
        }

        #dmGridData.dm-view-list .product-image {
            height: 125px;
        }
    }

    @media (max-width: 600px) {

        #dmGridData .product-image {
            height: 150px;
        }

        #dmGridData.dm-view-list .product-image {
            flex-basis: 105px;
            height: 110px;
        }

        #dmGridData.dm-view-list .dm-diamond-card__body {
            padding: 8px 10px;
        }
    }

    

    ul.dm-pagination {
        display: flex;
    }
</style>
<style>
#listmydiamondData .dm-table-row {cursor:pointer;}
#listmydiamondData .dm-table-row.active {background:#e6efdd;}
#listmydiamondData .dm-table-detail > td {padding:0 !important;border:0;white-space:normal;}
.dm-detail-animate {overflow:hidden;}
.dm-detail-content {padding:12px;}
.dm-detail-heading {display:flex;align-items:center;justify-content:space-between;gap:12px;margin-bottom:12px;}
.dm-detail-grid {display:grid;grid-template-columns:minmax(220px,1fr) minmax(300px,1.7fr) minmax(260px,1.3fr);gap:16px;}
.dm-detail-card {border:1px solid #dfe8d6;border-radius:5px;overflow:hidden;align-self:start;background:#fff;}
.dm-detail-card h4 {font-size:13px;font-weight:600;background:#f6f7f4;margin:0;padding:10px;}
.dm-detail-card h4 small {float:right;font-weight:400;}
.dm-detail-media {position:relative;}
.dm-detail-slide[hidden] {display:none !important;}
.dm-detail-slide img,.dm-detail-slide video {display:block;width:100%;height:250px;object-fit:contain;background:#080808;}
.dm-media-prev,.dm-media-next {position:absolute;top:45%;border:0;background:#0008;color:#fff;padding:8px;cursor:pointer;}
.dm-media-prev {left:5px;}.dm-media-next {right:5px;}
.dm-detail-fields {display:grid;grid-template-columns:repeat(2,minmax(0,1fr));gap:10px 16px;padding:12px;margin:0;font-size:12px;}
.dm-detail-fields > div {display:flex;gap:8px;min-width:0;}
.dm-detail-fields dt {color:#888;font-weight:500;flex:1;}
.dm-detail-fields dd {flex:1;margin:0;overflow-wrap:anywhere;}
.dm-detail-links {display:flex;gap:10px;padding:12px;}
.dmLocationBlock .form-check {
    min-width: 0;
}

.dm-location-select {
    width: 100%;
    border: 1px solid #ccc;
    border-radius: 8px;
    background: #fff;
}

.dm-location-select summary {
    display: flex;
    /*align-items: center;*/
    gap: 8px;
    padding: 5px 10px;
    cursor: pointer;
    list-style: none;
}

.dm-location-select summary::-webkit-details-marker {
    display: none;
}

#dmLocationTags {
    display: flex;
    flex: 1;
    flex-wrap: wrap;
    gap: 6px;
    max-height: 100px;
    overflow-y: auto;
}

.dm-location-placeholder {
    color: #888;
    font-size: 13px;
}

.dm-location-tag {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    max-width: 100%;
    padding: 4px 8px;
    border-radius: 20px;
    background: #e9e9e9;
    color: #222;
    font-size: 12px;
}

.dm-location-remove {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
    width: 17px;
    height: 17px;
    padding: 0;
    border: 0;
    border-radius: 50%;
    background: #999;
    color: #fff;
    cursor: pointer;
    line-height: 1;
}

.dm-location-arrow {
    color: #888;
    font-size: 22px;
      width: 10px;
      height: 10px;
      border: 2px solid #333;
      border-left: 0;
      border-top: 0;
      transform: rotate(45deg);
}

.dm-location-menu {
    padding: 8px;
    border-top: 1px solid #eee;
}

#dmLocationSearch {
    width: 100%;
    margin-bottom: 8px;
    padding: 8px;
    border: 1px solid #ddd;
    border-radius: 5px;
    font-size: 12px;
}

#dmLocationOptions {
    max-height: 200px;
    overflow-y: auto;
}

.dm-location-option {
    display: block;
    width: 100%;
    padding: 8px;
    border: 0;
    border-radius: 4px;
    background: transparent;
    color: #333;
    text-align: left;
    cursor: pointer;
    font-size: 12px;
}

.dm-location-option:hover {
    background: #f3f6ef;
}

.dm-location-option.is-selected {
    background: #e8f1df;
    color: #669934;
}
@media(max-width:991px) {.dm-detail-grid {grid-template-columns:1fr;}.dm-detail-fields {grid-template-columns:1fr 1fr;}}
</style>
