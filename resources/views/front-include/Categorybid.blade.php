<div id="center_column" class="center_column col-xs-12 col-sm-12 col-md-9">
    <div class="content_scene_cat">
        <div class="content_scene_cat_bg" style="background:url('<?=url('/upload/category/'.$cat_info->banner)?>') right center no-repeat; background-size:cover; min-height:270px;">
            <div class="cat_desc"> 
                <span class="category-name title_font"> {{$cat_info->name}} </span>
                <div class="rte">
                    <p>{{$cat_info->description}}</p>
                </div>
            </div>
        </div>
    </div>
    <h1 class="page-heading product-listing title_font"><span class="cat-name">Shop&nbsp;</span><span class="heading-counter">There are <?=count($product_info)?> products.</span></h1>
    <div class="content_sortPagiBar container clearfix">
        <div class="top-pagination-content sortPagiBar clearfix">
            <ul class="display hidden-xs">
                <li class="display-title">View as:</li>
                <li id="grid"><a rel="nofollow" href="#" title="Grid"><i class="icon-th-large"></i></a></li>
                <li id="list"><a rel="nofollow" href="#" title="List"><i class="icon-th-list"></i></a></li>
            </ul>
            <form id="productsSortForm" action="12-shop" class="productsSortForm">
                <div class="select selector1">
                    <label for="selectProductSort">Sort by</label>
                    <select id="selectProductSort" class="selectProductSort form-control">
                        <option value="position:asc" selected="selected">Position</option>
                        <option value="price:asc">Price: Lowest first</option>
                        <option value="price:desc">Price: Highest first</option>
                        <option value="name:asc">Product Name: A to Z</option>
                        <option value="name:desc">Product Name: Z to A</option>
                        <option value="quantity:desc">In stock</option>
                        <option value="reference:asc">Reference: Lowest first</option>
                        <option value="reference:desc">Reference: Highest first</option>
                    </select>
                </div>
            </form>
            <form action="12-shop" method="get" class="nbrItemPage">
                <div class="clearfix selector1">
                    <label for="nb_item"> Show </label>
                    <input type="hidden" name="id_category" value="12" />
                    <select name="n" id="nb_item" class="form-control">
                        <option value="9" selected="selected">9</option>
                        <option value="18">18</option>
                    </select> <span>per page</span></div>
            </form>
            <div id="pagination" class="pagination clearfix"> <span class="ft_page"> Page: </span>
                <ul class="pagination">
                    <li id="pagination_previous" class="disabled pagination_previous"> <span> <i class="icon-chevron-left"></i> </span></li>
                    <li class="active current"> <span> <span>1</span> </span>
                    </li>
                    <li>
                        <a href=""> <span>2</span> </a>
                    </li>
                    <li id="pagination_next" class="pagination_next">
                        <a href="" rel="next"> <i class="icon-chevron-right"></i> </a>
                    </li>
                </ul>
                <form class="showall" action="12-shop" method="get">
                    <div>
                        <button type="submit" class="btn btn-default button exclusive-medium"> <span>Show all</span> </button>
                        <input type="hidden" name="id_category" value="12" />
                        <input name="n" id="nb_item" class="hidden" value="13" />
                    </div>
                </form>
            </div>
        </div>
    </div>
    @if(!isset($product_info))
    <div class=" hide-color-options hide-stock-info">
        <h3>No Product Found</h3>
    </div>
    @endif
    <div class=" hide-color-options hide-stock-info">
        <ul class="product_list grid row">

            @if(isset($product))
            @foreach($product as $pro)
            <li class="ajax_block_product col-xs-12 col-sm-4 col-lg-3 first-in-line first-item-of-tablet-line first-item-of-mobile-line">
                <div class="product-container" itemscope itemtype="">
                    <div class="item-inner">
                        
                        <div class="left-block">
                            <div class="product-image-container">
                                <?php
                                if($pro->is_custom_layout==1){
                                    if(!empty($pro->layout))
                                    {
                                        $link=url('category/'.$cid.'/custom/'.$pro->layout.'/brand/'.$pro->id.'/'.$pro->name);
                                    }
                                    else
                                    {
                                        $link=url('404');
                                    }
                                }
                                else
                                {
                                    $link=url('pro-category/'.$cid.'/brand/'.$pro->id.'/'.$pro->name);
                                }
                                ?>
                                <a class="product_img_link product_img" href="<?=$link?>" title="{{$pro->name}}" itemprop="url"> 
                                    <span class="img_root" style="display: block;"> 
                                        <img style="height:180px !important;" src="{{url('upload/brand')}}/{{$pro->brandimage}}"  alt="{{$pro->name}}" /> 
                                    </span> 
                                    <span class="img_root" style="display: block;"> 
                                        <img style="height:50px !important;" src="{{url('upload/brand')}}/{{$pro->brandlogo}}"  alt="{{$pro->name}}" /> 
                                    </span> 

                                </a>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </li>
            @endforeach
            @else
            <li>
                <div class="col-md-12">
                    <h3>No Product Found</h3>
                </div>

            </li>
            @endif

        </ul>
    </div>
    <div class="content_sortPagiBar block">
        <div class="bottom-pagination-content sortPagiBar clearfix">
            <ul class="display hidden-xs">
                <li class="display-title">View as:</li>
                <li id="grid"><a rel="nofollow" href="#" title="Grid"><i class="icon-th-large"></i></a></li>
                <li id="list"><a rel="nofollow" href="#" title="List"><i class="icon-th-list"></i></a></li>
            </ul>
            <form id="productsSortForm" action="12-shop" class="productsSortForm">
                <div class="select selector1">
                    <label for="selectProductSort">Sort by</label>
                    <select id="selectProductSort" class="selectProductSort form-control">
                        <option value="position:asc" selected="selected">Position</option>
                        <option value="price:asc">Price: Lowest first</option>
                        <option value="price:desc">Price: Highest first</option>
                        <option value="name:asc">Product Name: A to Z</option>
                        <option value="name:desc">Product Name: Z to A</option>
                        <option value="quantity:desc">In stock</option>
                        <option value="reference:asc">Reference: Lowest first</option>
                        <option value="reference:desc">Reference: Highest first</option>
                    </select>
                </div>
            </form>
            <form action="12-shop" method="get" class="nbrItemPage">
                <div class="clearfix selector1">
                    <label for="nb_item"> Show </label>
                    <input type="hidden" name="id_category" value="12" />
                    <select name="n" id="nb_item" class="form-control">
                        <option value="9" selected="selected">9</option>
                        <option value="18">18</option>
                    </select> <span>per page</span></div>
            </form>
            <div id="pagination_bottom" class="pagination clearfix"> <span class="ft_page"> Page: </span>
                <ul class="pagination">
                    <li id="pagination_previous_bottom" class="disabled pagination_previous"> <span> <i class="icon-chevron-left"></i> </span></li>
                    <li class="active current"> <span> <span>1</span> </span>
                    </li>
                    <li>
                        <a href=""> <span>2</span> </a>
                    </li>
                    <li id="pagination_next_bottom" class="pagination_next">
                        <a href="" rel="next"> <i class="icon-chevron-right"></i> </a>
                    </li>
                </ul>
                <form class="showall" action="12-shop" method="get">
                    <div>
                        <button type="submit" class="btn btn-default button exclusive-medium"> <span>Show all</span> </button>
                        <input type="hidden" name="id_category" value="12" />
                        <input name="n" id="nb_item" class="hidden" value="13" />
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>